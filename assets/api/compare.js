(function () {
    const API_BASE_COMPARE =
        typeof domin !== "undefined" ? domin : "https://ecommerce-backend.workarya.com";
    const GUEST_COMPARE_KEY = "sellzy_compare_items";
    const DEFAULT_MAX_ALLOWED = 4;

    window.globalCompareProductIds = new Set();

    function getAuthHeaders() {
        const token = localStorage.getItem("UserToken");
        const headers = {};
        if (token) headers["Authorization"] = "Bearer " + token;
        return headers;
    }

    function showCompareToast(text, type) {
        if (typeof Toastify === "undefined") return;
        const styles = {
            success: { background: "#00b09b" },
            error: { background: "#ff416c" },
            info: { background: "#ffc107", color: "#000" },
        };
        Toastify({
            text: text,
            duration: 3000,
            style: styles[type] || styles.info,
        }).showToast();
    }

    function escapeHtml(value) {
        return String(value || "")
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;");
    }

    function stripHtml(html) {
        const div = document.createElement("div");
        div.innerHTML = html || "";
        return (div.textContent || div.innerText || "").trim();
    }

    function parseCompareList(result) {
        const payload = result?.data ?? result?.value?.data ?? result?.value ?? result;
        const data = Array.isArray(payload)
            ? payload
            : Array.isArray(payload?.data)
              ? payload.data
              : [];

        return {
            success: result?.success ?? result?.status ?? true,
            count: result?.count ?? data.length,
            maxAllowed: result?.maxAllowed ?? DEFAULT_MAX_ALLOWED,
            data: data,
            message: result?.message || result?.value?.message || "",
        };
    }

    function getGuestCompareItems() {
        try {
            const parsed = JSON.parse(localStorage.getItem(GUEST_COMPARE_KEY) || "[]");
            return Array.isArray(parsed) ? parsed.filter(function (item) {
                return item && item.productId;
            }) : [];
        } catch (error) {
            return [];
        }
    }

    function setGuestCompareItems(items) {
        localStorage.setItem(GUEST_COMPARE_KEY, JSON.stringify(items.slice(0, DEFAULT_MAX_ALLOWED)));
        syncGlobalCompareIds(items);
    }

    function syncGlobalCompareIds(items) {
        window.globalCompareProductIds = new Set(
            (items || [])
                .map(function (item) {
                    return String(item.productId || item.id || "");
                })
                .filter(Boolean)
        );
    }

    function guestItemExists(productId) {
        return getGuestCompareItems().some(function (item) {
            return String(item.productId) === String(productId);
        });
    }

    async function fetchCompareProducts(productIds) {
        const params = new URLSearchParams();
        if (productIds && productIds.length) {
            params.set("productIds", productIds.join(","));
        }

        const query = params.toString();
        const url =
            API_BASE_COMPARE + "/api/compare/products" + (query ? "?" + query : "");

        const response = await fetch(url, {
            method: "GET",
            headers: getAuthHeaders(),
        });

        const result = await response.json();
        if (!response.ok && !result?.success) {
            throw new Error(result?.message || "Failed to load compare products");
        }

        return parseCompareList(result);
    }

    async function loadCompareList() {
        const token = localStorage.getItem("UserToken");

        if (token) {
            const list = await fetchCompareProducts();
            syncGlobalCompareIds(list.data);
            return list;
        }

        const guestItems = getGuestCompareItems();
        if (!guestItems.length) {
            return { success: true, count: 0, maxAllowed: DEFAULT_MAX_ALLOWED, data: [] };
        }

        const productIds = guestItems.map(function (item) {
            return item.productId;
        });
        const list = await fetchCompareProducts(productIds);

        list.data = (list.data || []).map(function (product) {
            const guestMeta = guestItems.find(function (item) {
                return String(item.productId) === String(product.productId || product.id);
            });
            return Object.assign({}, product, guestMeta || {});
        });

        list.count = list.data.length;
        syncGlobalCompareIds(list.data);
        return list;
    }

    async function addToCompare(options) {
        const productId = options?.productId;
        const variantId = options?.variantId;
        const colorId = options?.colorId;
        const sizeId = options?.sizeId;

        if (!productId) {
            showCompareToast("Invalid product", "error");
            return { success: false };
        }

        const token = localStorage.getItem("UserToken");

        if (!token) {
            const guestItems = getGuestCompareItems();
            if (guestItems.length >= DEFAULT_MAX_ALLOWED) {
                showCompareToast("You can compare up to " + DEFAULT_MAX_ALLOWED + " products", "info");
                return { success: false };
            }
            if (guestItemExists(productId)) {
                showCompareToast("Already in compare list", "info");
                return { success: false };
            }

            guestItems.unshift({
                productId: productId,
                variantId: variantId || null,
                colorId: colorId || null,
                sizeId: sizeId || null,
            });
            setGuestCompareItems(guestItems);
            showCompareToast("Added to compare", "success");
            return { success: true };
        }

        const formData = new FormData();
        formData.append("productId", productId);
        if (variantId) formData.append("variantId", variantId);
        if (colorId) formData.append("colorId", colorId);
        if (sizeId) formData.append("sizeId", sizeId);

        const response = await fetch(API_BASE_COMPARE + "/api/compare/add", {
            method: "POST",
            headers: getAuthHeaders(),
            body: formData,
        });

        const result = await response.json();
        const parsed = parseCompareList(result);

        if (response.ok || result?.success) {
            syncGlobalCompareIds(parsed.data);
            showCompareToast("Added to compare", "success");
            return parsed;
        }

        showCompareToast(result?.message || "Failed to add to compare", "error");
        return { success: false, message: result?.message };
    }

    async function deleteCompareItem(compareId, productId) {
        const token = localStorage.getItem("UserToken");

        if (token && compareId) {
            const response = await fetch(
                API_BASE_COMPARE + "/api/compare/delete/" + encodeURIComponent(compareId),
                {
                    method: "DELETE",
                    headers: getAuthHeaders(),
                }
            );
            const result = await response.json();
            if (!response.ok && !result?.success) {
                showCompareToast(result?.message || "Failed to remove item", "error");
                return false;
            }
            showCompareToast("Removed from compare", "success");
            return true;
        }

        const guestItems = getGuestCompareItems().filter(function (item) {
            return String(item.productId) !== String(productId);
        });
        setGuestCompareItems(guestItems);
        showCompareToast("Removed from compare", "success");
        return true;
    }

    async function clearCompareList() {
        const token = localStorage.getItem("UserToken");

        if (token) {
            const response = await fetch(API_BASE_COMPARE + "/api/compare/clear", {
                method: "DELETE",
                headers: getAuthHeaders(),
            });
            const result = await response.json();
            if (!response.ok && !result?.success) {
                showCompareToast(result?.message || "Failed to clear compare list", "error");
                return false;
            }
        }

        setGuestCompareItems([]);
        showCompareToast("Compare list cleared", "success");
        return true;
    }

    function formatComparePrice(value) {
        if (typeof formatPrice === "function") return formatPrice(value);
        const amount = Number(value);
        if (Number.isNaN(amount)) return "₹0";
        return "₹" + amount.toLocaleString("en-IN");
    }

    function getCompareProductId(product) {
        return product.productId || product.id || "";
    }

    function renderRatingCell(product) {
        const rating = Number(product.averageRating || 0);
        const width = Math.max(0, Math.min(100, (rating / 5) * 100));
        const reviews = product.totalReviews || 0;

        return (
            '<div class="rating-section flex items-center">' +
            '<div class="bg-[url(\'../images/star-icon.png\')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">' +
            '<div style="width: ' +
            width +
            '%" class="bg-[url(\'../images/star-icon.png\')] h-4.5 bg-repeat-x bg-position-[0_-18px]"></div>' +
            "</div>" +
            '<span class="text-base leading-6 font-normal inline-block ml-1">(' +
            reviews +
            " reviews)</span></div>"
        );
    }

    function renderProductColumn(product, slotIndex) {
        if (!product) {
            return (
                '<td class="px-4 py-[18px] compare-slot" data-slot="' +
                slotIndex +
                '">' +
                '<div class="flex flex-col gap-y-4">' +
                '<div class="relative w-full">' +
                '<div class="input-group medium pl-4 py-2 pr-2.5 rounded-[100px] flex-1 relative w-full">' +
                '<div class="input-group-addon inline-flex items-center justify-center leading-6" data-align="inline-start">' +
                '<span class="inline-flex items-center justify-center"><i class="hgi hgi-stroke hgi-search-01 text-2xl leading-6 text-light-primary-text"></i></span>' +
                "</div>" +
                '<input type="text" class="compare-slot-search peer form-control placeholder-transparent focus:placeholder-transparent focus:outline-none" placeholder="Search product" data-slot="' +
                slotIndex +
                '" />' +
                '<label class="absolute left-[48px] top-1/2 -translate-y-1/2 text-xs leading-[18px] text-light-disabled-text">Search product</label>' +
                "</div>" +
                '<div class="compare-slot-results hidden absolute z-20 w-full mt-2 p-3 bg-white border border-gray-300 rounded-lg shadow-light-z-12 max-h-[240px] overflow-y-auto"></div>' +
                "</div>" +
                '<div class="w-[220px] h-[220px] md:w-[280px] md:h-[280px] mx-auto relative bg-gray-100 rounded-2xl flex items-center justify-center text-light-secondary-text text-sm">Add a product</div>' +
                "</div></td>"
            );
        }

        const productId = getCompareProductId(product);
        const compareId = product.compareId || "";
        const image = product.imageUrl || product.productImageUrl || "assets/images/no-image.png";
        const name = product.productName || product.name || "Product";
        const displayName =
            typeof truncateProductName === "function" ? truncateProductName(name) : name;
        const detailUrl = productId ? "product-detail.php?id=" + productId : "product-detail.php";

        return (
            '<td class="px-4 py-[18px] compare-slot" data-slot="' +
            slotIndex +
            '" data-product-id="' +
            escapeHtml(productId) +
            '" data-compare-id="' +
            escapeHtml(compareId) +
            '">' +
            '<div class="flex flex-col gap-y-4">' +
            '<div class="w-[220px] h-[220px] md:w-[280px] md:h-[280px] relative bg-gray-200 product-thumbnail mx-auto">' +
            '<a href="' +
            detailUrl +
            '"><img src="' +
            escapeHtml(image) +
            '" alt="' +
            escapeHtml(displayName) +
            '" class="rounded-2xl w-full h-full object-cover" /></a>' +
            '<div class="absolute xl:top-[22px] xl:right-[23px] top-3 right-2">' +
            '<button type="button" class="btn w-9 h-9 btn-default rounded-[50px] remove-compare-btn" data-compare-id="' +
            escapeHtml(compareId) +
            '" data-product-id="' +
            escapeHtml(productId) +
            '">' +
            '<i class="hgi hgi-stroke hgi-cancel-01 text-[20px] leading-5 text-light-primary-text"></i></button></div></div>' +
            '<a href="' +
            detailUrl +
            '" class="font-semibold text-light-primary-text hover:text-primary text-center" title="' +
            escapeHtml(name) +
            '">' +
            escapeHtml(displayName) +
            "</a></div></td>"
        );
    }

    function renderCompareTable(products, maxAllowed) {
        const max = maxAllowed || DEFAULT_MAX_ALLOWED;
        const slots = [];
        for (let i = 0; i < max; i++) {
            slots.push(products[i] || null);
        }

        function rowCells(label, className, valueFn) {
            let html =
                '<tr class="' +
                className +
                '"><td class="w-[150px] px-2 md:px-0 text-center"><p class="font-semibold text-light-primary-text">' +
                label +
                "</p></td>";
            slots.forEach(function (product, index) {
                html += "<td class=\"px-4 py-4\">" + valueFn(product, index) + "</td>";
            });
            html += "</tr>";
            return html;
        }

        let html = "";

        html += '<tr class="product"><td class="w-[150px] px-2 md:px-0 text-center"><p class="font-semibold text-light-primary-text">Product</p></td>';
        slots.forEach(function (product, index) {
            html += renderProductColumn(product, index);
        });
        html += "</tr>";

        html += rowCells("Name", "bg-gray-100 product-name", function (product) {
            if (!product) return '<span class="text-light-secondary-text">—</span>';
            return (
                '<p class="font-semibold text-light-primary-text">' +
                escapeHtml(product.productName || product.name || "—") +
                "</p>"
            );
        });

        html += rowCells("Brand", "product-brand", function (product) {
            return (
                '<p class="font-semibold text-light-primary-text">' +
                escapeHtml(product?.brandName || "—") +
                "</p>"
            );
        });

        html += rowCells("Category", "product-category", function (product) {
            return (
                '<p class="font-semibold text-light-primary-text">' +
                escapeHtml(product?.categoryName || "—") +
                "</p>"
            );
        });

        html += rowCells("Color", "product-color", function (product) {
            if (!product?.colorName) return "—";
            return (
                '<p class="font-semibold text-light-primary-text">' +
                escapeHtml(product.colorName) +
                "</p>"
            );
        });

        html += rowCells("Sizes", "product-quantity", function (product) {
            const sizes = product?.sizeNames || [];
            if (!sizes.length) return "—";
            return (
                '<p class="font-semibold text-light-primary-text">' +
                escapeHtml(sizes.join(", ")) +
                "</p>"
            );
        });

        html += rowCells("Price", "product-price", function (product) {
            if (!product) return "—";
            const salePrice = product.salePrice ?? product.price ?? 0;
            const mrp = product.mrp ?? salePrice;
            let htmlPrice =
                '<span class="font-semibold text-primary">' +
                formatComparePrice(salePrice) +
                "</span>";
            if (mrp > salePrice) {
                htmlPrice +=
                    ' <span class="line-through text-light-disabled-text ml-2">' +
                    formatComparePrice(mrp) +
                    "</span>";
            }
            if (product.discountPercent) {
                htmlPrice +=
                    ' <span class="text-error text-sm ml-2">' +
                    Math.round(Number(product.discountPercent)) +
                    "% OFF</span>";
            }
            return htmlPrice;
        });

        html += rowCells("Rating", "product-rating", function (product) {
            if (!product) return "—";
            return renderRatingCell(product);
        });

        html += rowCells("Availability", "bg-gray-100 product-stock", function (product) {
            if (!product) return "—";
            const stock = Number(product.stock || 0);
            return (
                '<p class="font-semibold ' +
                (stock > 0 ? "text-primary" : "text-error") +
                '">' +
                (stock > 0 ? stock + " in stock" : "Out of stock") +
                "</p>"
            );
        });

        html += rowCells("Description", "product-description", function (product) {
            if (!product?.description) return "—";
            const text = stripHtml(product.description);
            const short = text.length > 180 ? text.slice(0, 180) + ".." : text;
            return "<p>" + escapeHtml(short || "—") + "</p>";
        });

        html += rowCells("Add To Cart", "product-add-to-cart", function (product) {
            if (!product) return "—";
            const productId = getCompareProductId(product);
            return (
                '<button type="button" class="add-to-cart-btn btn btn-primary px-8 py-[9px] rounded-[80px] text-sm leading-[22px]" data-product-id="' +
                escapeHtml(productId) +
                '" data-variant-id="' +
                escapeHtml(product.variantId || "") +
                '">' +
                '<span class="inline-flex items-center justify-center"><i class="hgi hgi-stroke hgi-shopping-cart-02 text-[20px] leading-5"></i></span> Add</button>'
            );
        });

        return html;
    }

    async function renderComparePage() {
        const tbody = document.getElementById("compare-table-body");
        const countEl = document.getElementById("compare-item-count");
        if (!tbody) return;

        tbody.innerHTML =
            '<tr><td colspan="5" class="text-center py-10 text-light-secondary-text">Loading compare list...</td></tr>';

        try {
            const list = await loadCompareList();
            const products = list.data || [];

            if (countEl) {
                countEl.textContent =
                    products.length +
                    " / " +
                    (list.maxAllowed || DEFAULT_MAX_ALLOWED) +
                    " products";
            }

            if (!products.length) {
                tbody.innerHTML = renderCompareTable([], list.maxAllowed || DEFAULT_MAX_ALLOWED);
                return;
            }

            tbody.innerHTML = renderCompareTable(products, list.maxAllowed || DEFAULT_MAX_ALLOWED);
        } catch (error) {
            console.error("Compare load error:", error);
            tbody.innerHTML =
                '<tr><td colspan="5" class="text-center py-10 text-error">Failed to load compare list.</td></tr>';
        }
    }

    async function searchProductsForCompare(query) {
        const params = new URLSearchParams({
            q: query,
            page: "1",
            pageSize: "5",
        });
        const response = await fetch(API_BASE_COMPARE + "/api/product/search?" + params.toString());
        if (!response.ok) throw new Error("Search failed");
        const result = await response.json();
        if (Array.isArray(result?.data)) return result.data;
        return [];
    }

    function bindComparePageEvents() {
        const tbody = document.getElementById("compare-table-body");
        if (!tbody) return;

        const clearBtn = document.getElementById("clear-compare-btn");
        if (clearBtn) {
            clearBtn.addEventListener("click", async function (event) {
                event.preventDefault();
                await clearCompareList();
                await renderComparePage();
            });
        }

        tbody.addEventListener("click", async function (event) {
            const removeBtn = event.target.closest(".remove-compare-btn");
            if (removeBtn) {
                event.preventDefault();
                const compareId = removeBtn.getAttribute("data-compare-id");
                const productId = removeBtn.getAttribute("data-product-id");
                await deleteCompareItem(compareId, productId);
                await renderComparePage();
            }
        });

        tbody.addEventListener("input", debounceCompareSearch(function (event) {
            const input = event.target.closest(".compare-slot-search");
            if (!input) return;
            handleCompareSlotSearch(input);
        }, 350));
    }

    function debounceCompareSearch(fn, wait) {
        let timer;
        return function () {
            const args = arguments;
            const context = this;
            clearTimeout(timer);
            timer = setTimeout(function () {
                fn.apply(context, args);
            }, wait);
        };
    }

    async function handleCompareSlotSearch(input) {
        const query = input.value.trim();
        const wrapper = input.closest(".relative");
        const resultsBox = wrapper ? wrapper.querySelector(".compare-slot-results") : null;
        if (!resultsBox) return;

        if (query.length < 2) {
            resultsBox.classList.add("hidden");
            resultsBox.innerHTML = "";
            return;
        }

        try {
            const products = await searchProductsForCompare(query);
            if (!products.length) {
                resultsBox.innerHTML =
                    '<p class="text-sm text-light-secondary-text py-2">No products found</p>';
                resultsBox.classList.remove("hidden");
                return;
            }

            resultsBox.innerHTML = products
                .map(function (product) {
                    const productId = product.id || product.productId;
                    const name = product.productName || product.name || "Product";
                    const image =
                        product.productImageUrl ||
                        product.imageUrl ||
                        "assets/images/no-image.png";
                    return (
                        '<button type="button" class="compare-search-pick flex items-center gap-x-3 w-full text-left py-2 hover:text-primary" data-product-id="' +
                        escapeHtml(productId) +
                        '">' +
                        '<img src="' +
                        escapeHtml(image) +
                        '" alt="" class="w-10 h-10 rounded object-cover" />' +
                        "<span class=\"font-semibold\">" +
                        escapeHtml(name) +
                        "</span></button>"
                    );
                })
                .join("");
            resultsBox.classList.remove("hidden");
        } catch (error) {
            console.error("Compare slot search error:", error);
        }
    }

    document.body.addEventListener("click", async function (event) {
        const pickBtn = event.target.closest(".compare-search-pick");
        if (pickBtn) {
            event.preventDefault();
            const productId = pickBtn.getAttribute("data-product-id");
            await addToCompare({ productId: productId });
            if (document.getElementById("compare-table-body")) {
                await renderComparePage();
            }
            return;
        }

        const compareBtn = event.target.closest(".add-to-compare-btn");
        if (!compareBtn) return;

        event.preventDefault();

        const productId =
            compareBtn.getAttribute("data-product-id") ||
            compareBtn.closest("[data-product-id]")?.getAttribute("data-product-id");

        if (!productId || productId === "undefined") {
            showCompareToast("Invalid product", "error");
            return;
        }

        if (window.globalCompareProductIds.has(String(productId))) {
            showCompareToast("Already in compare list", "info");
            return;
        }

        compareBtn.style.pointerEvents = "none";
        compareBtn.style.opacity = "0.7";

        try {
            await addToCompare({
                productId: productId,
                variantId: compareBtn.getAttribute("data-variant-id") || null,
                colorId: compareBtn.getAttribute("data-color-id") || null,
                sizeId: compareBtn.getAttribute("data-size-id") || null,
            });
        } finally {
            compareBtn.style.pointerEvents = "auto";
            compareBtn.style.opacity = "1";
        }
    });

    window.CompareAPI = {
        loadCompareList: loadCompareList,
        addToCompare: addToCompare,
        deleteCompareItem: deleteCompareItem,
        clearCompareList: clearCompareList,
        renderComparePage: renderComparePage,
    };

    document.addEventListener("DOMContentLoaded", function () {
        loadCompareList()
            .then(function (list) {
                syncGlobalCompareIds(list.data || []);
            })
            .catch(function () {
                syncGlobalCompareIds(getGuestCompareItems());
            });

        if (document.getElementById("compare-table-body")) {
            renderComparePage();
            bindComparePageEvents();
        }
    });
})();
