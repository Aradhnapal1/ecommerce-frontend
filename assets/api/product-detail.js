(function () {
    const apiBase =
        typeof domin !== "undefined" ? domin : "https://ecommerce-backend.workarya.com";

    let pendingProduct = null;

    function buildProductDetailUrl(product) {
        const productId = product.id || product.productId;
        const slug = product.slug || "";

        if (!productId) return "product-detail.php";

        let url = "product-detail.php?id=" + encodeURIComponent(productId);
        if (slug) {
            url += "&slug=" + encodeURIComponent(slug);
        }
        return url;
    }

    function showProductDetailError(message) {
        const title = document.getElementById("product-title");
        if (title) title.textContent = message;
    }

    function formatDetailPrice(value) {
        const amount = Number(value);
        if (Number.isNaN(amount)) return "₹0";
        return "₹" + amount.toLocaleString("en-IN");
    }

    function parseProductDetailResponse(result) {
        if (result?.data && typeof result.data === "object" && !Array.isArray(result.data)) {
            return result.data;
        }
        if (result?.value?.data && typeof result.value.data === "object") {
            return result.value.data;
        }
        return null;
    }

    function getProductImages(product) {
        const images = [];

        if (product.productImageUrl) {
            images.push(product.productImageUrl);
        }

        (product.galleryImages || []).forEach(function (image) {
            if (image && !images.includes(image)) {
                images.push(image);
            }
        });

        if (!images.length) {
            images.push("assets/images/vitamin-c.png");
        }

        return images;
    }

    function getDiscountPercent(product) {
        const discount =
            product.discountPrice ??
            product.discountPercent ??
            product.discountPercentage ??
            0;

        return Math.round(Number(discount)) || 0;
    }

    function reinitProductSlider(slider, html) {
        if (!slider) return;

        if (typeof jQuery === "undefined" || !jQuery.fn || !jQuery.fn.slick) {
            slider.innerHTML = html;
            return;
        }

        const $slider = jQuery(slider);

        if ($slider.hasClass("slick-initialized")) {
            $slider.slick("unslick");
        }

        $slider.html(html);

        const options = $slider.data("slick");
        if (options) {
            $slider.slick(options);
        }
    }

    function renderProductSliders(product) {
        const images = getProductImages(product);
        const smallSlider = document.getElementById("product-details-small-slider");
        const bigSlider = document.getElementById("product-details-big-slider");

        if (!smallSlider || !bigSlider) return;

        const smallHtml = images
            .map(function (image) {
                return (
                    '<div class="single-product-small-slider-item p-2.5 rounded-lg overflow-hidden">' +
                    '<img src="' +
                    image +
                    '" alt="' +
                    (product.productName || "Product") +
                    '" class="w-full h-full object-cover rounded-lg" />' +
                    "</div>"
                );
            })
            .join("");

        const bigHtml = images
            .map(function (image) {
                return (
                    '<div class="single-product-big-slider-item px-3 rounded-2xl overflow-hidden">' +
                    '<img src="' +
                    image +
                    '" alt="' +
                    (product.productName || "Product") +
                    '" class="w-full h-full object-cover rounded-3xl" />' +
                    "</div>"
                );
            })
            .join("");

        reinitProductSlider(smallSlider, smallHtml);
        reinitProductSlider(bigSlider, bigHtml);
    }

    function renderProductColor(product) {
        const section = document.getElementById("product-color-section");
        if (!section) return;

        const colorName = product.colorName;
        const selectedColor = section.querySelector(".color-variation-selected-color");

        if (!colorName) {
            section.classList.add("hidden");
            return;
        }

        section.classList.remove("hidden");
        if (selectedColor) selectedColor.textContent = colorName;

        const items = section.querySelector(".color-variation-items");
        if (!items) return;

        items.innerHTML =
            '<div class="color-variation-item">' +
            '<button type="button" data-color-text="' +
            (product.colorSlug || colorName).toLowerCase() +
            '" class="cursor-pointer flex items-center justify-center rounded-full size-10 border border-primary hover:bg-[rgba(145,158,171,0.08)] px-3">' +
            '<span class="text-sm font-semibold capitalize">' +
            colorName +
            "</span></button></div>";
    }

    function renderProductSizes(product) {
        const container = document.getElementById("product-size-items");
        const section = container ? container.closest(".size-variation-section") : null;
        const sizeNames = product.sizeNames || [];

        if (!container || !section) return;

        if (!sizeNames.length) {
            section.classList.add("hidden");
            return;
        }

        section.classList.remove("hidden");

        const selectedSize = section.querySelector(".size-variation-selected-size");
        if (selectedSize) selectedSize.textContent = sizeNames[0];

        container.innerHTML = sizeNames
            .map(function (size, index) {
                const isActive = index === 0;
                return (
                    '<div class="size-variation-item">' +
                    '<button type="button" data-size-text="' +
                    size +
                    '" class="cursor-pointer flex items-center justify-center text-sm leading-6 px-[38px] py-1.5 font-semibold border rounded-[100px] ' +
                    (isActive
                        ? "border-primary bg-primary text-white hover:bg-primary"
                        : "text-light-primary-text border-gray-300 hover:bg-[rgba(145,158,171,0.08)]") +
                    '">' +
                    size +
                    "</button></div>"
                );
            })
            .join("");
    }

    function renderProductDescription(product) {
        const container = document.getElementById("product-description-content");
        if (!container) return;

        const description = product.description || "";
        const shortDescription = product.shortDescription || "";

        if (!description && !shortDescription) {
            container.innerHTML =
                '<p class="mb-6 text-light-secondary-text">No description available.</p>';
            return;
        }

        container.innerHTML =
            (shortDescription
                ? '<div class="mb-6 product-short-description">' + shortDescription + "</div>"
                : "") +
            (description
                ? '<div class="product-long-description">' + description + "</div>"
                : "");
    }

    function renderProductAdditionalInfo(product) {
        const tbody = document.getElementById("product-additional-info-body");
        if (!tbody) return;

        const rows = [
            ["Product Name", product.productName],
            ["Brand", product.brandName],
            ["Category", product.categoryName],
            ["SKU", product.sku],
            ["Color", product.colorName],
            ["Sizes", (product.sizeNames || []).join(", ")],
            ["GST", product.gst != null ? product.gst + "%" : null],
            ["Stock", product.stock != null ? product.stock : null],
            ["MRP", product.mrp != null ? formatDetailPrice(product.mrp) : null],
            ["Sale Price", product.salePrice != null ? formatDetailPrice(product.salePrice) : null],
        ].filter(function (row) {
            return row[1] !== null && row[1] !== undefined && row[1] !== "";
        });

        tbody.innerHTML = rows
            .map(function (row) {
                return (
                    "<tr>" +
                    '<th class="font-semibold w-[180px] text-left py-3 text-light-primary-text">' +
                    row[0] +
                    "</th>" +
                    "<td>" +
                    row[1] +
                    "</td>" +
                    "</tr>"
                );
            })
            .join("");
    }

    function renderProductDetail(product) {
        document.title = (product.productName || "Product") + " - HyperScripts";

        const breadcrumbName = document.getElementById("product-breadcrumb-name");
        if (breadcrumbName) breadcrumbName.textContent = product.productName || "Product Details";

        const title = document.getElementById("product-title");
        if (title) {
            title.textContent = product.productName || "Product";
            // Remove CSS line clamping that causes the "..." visual truncation
            title.classList.remove("line-clamp-1", "line-clamp-2");
        }

        const salePrice = product.salePrice ?? product.price ?? product.basePrice ?? 0;
        const mrp = product.mrp ?? product.originalPrice ?? salePrice;
        const discountPercent = getDiscountPercent(product);

        const currentPrice = document.getElementById("product-current-price");
        if (currentPrice) currentPrice.textContent = formatDetailPrice(salePrice);

        const oldPrice = document.getElementById("product-old-price");
        if (oldPrice) {
            if (mrp > salePrice) {
                oldPrice.textContent = formatDetailPrice(mrp);
                oldPrice.classList.remove("hidden");
            } else {
                oldPrice.classList.add("hidden");
            }
        }

        const discountBadge = document.getElementById("product-discount-badge");
        if (discountBadge) {
            if (discountPercent > 0) {
                discountBadge.textContent = discountPercent + "% OFF";
                discountBadge.classList.remove("hidden");
            } else {
                discountBadge.classList.add("hidden");
            }
        }

        const saleBadge = document.getElementById("product-sale-badge");
        if (saleBadge) {
            saleBadge.textContent = discountPercent > 0 ? discountPercent + "% OFF" : "Sales";
        }

        const skuValue = document.getElementById("product-sku-value");
        if (skuValue) skuValue.textContent = product.sku || "-";

        const categoryValue = document.getElementById("product-category-value");
        if (categoryValue) categoryValue.textContent = product.categoryName || "-";

        const wishlistBtn = document.getElementById("product-detail-wishlist-btn");
        if (wishlistBtn) {
            wishlistBtn.setAttribute("data-product-id", product.id || product.productId || "");
            wishlistBtn.setAttribute("data-variant-id", product.variantId || "");
        }

        const btnSection = document.querySelector(".product-add-to-cart-btn-section");
        if (btnSection) {
            // Guarantee we get a valid ID (Fallback to URL if API response lacks it)
            const urlParams = new URLSearchParams(window.location.search);
            const validProductId = product.id || product.productId || product._id || urlParams.get("id") || "";

            const addToCartBtn = btnSection.querySelector(".btn-primary");
            if (addToCartBtn) {
                addToCartBtn.classList.add("add-to-cart-btn");
                addToCartBtn.setAttribute("id", "product-detail-add-to-cart-btn");
                addToCartBtn.setAttribute("data-product-id", validProductId);
            }
            const buyNowBtn = btnSection.querySelector(".btn-warning");
            if (buyNowBtn) {
                buyNowBtn.classList.add("buy-now-btn");
                buyNowBtn.setAttribute("data-product-id", validProductId);
            }
            const qtyInput = btnSection.querySelector(".quantity-input");
            if (qtyInput) qtyInput.value = "1";
        }

        renderProductColor(product);
        renderProductSizes(product);
        renderProductDescription(product);
        renderProductAdditionalInfo(product);
    }

    async function initProductDetailPage() {
        const params = new URLSearchParams(window.location.search);
        const productId = params.get("id");

        if (!productId) {
            showProductDetailError("Product not found.");
            return;
        }

        try {
            const response = await fetch(
                apiBase + "/api/product/getproductbyid/" + encodeURIComponent(productId)
            );

            if (!response.ok) {
                throw new Error("HTTP Error: " + response.status);
            }

            const result = await response.json();
            const product = parseProductDetailResponse(result);

            if (!product) {
                throw new Error("Product data missing");
            }

            if (product.slug && !params.get("slug")) {
                window.history.replaceState(null, "", buildProductDetailUrl(product));
            }

            pendingProduct = product;
            renderProductDetail(product);
            renderProductSliders(product);
        } catch (error) {
            console.error("Product detail error:", error);
            showProductDetailError("Unable to load product details.");
        }
    }

    function bootProductDetailPage() {
        if (!window.quantityLogicAdded) {
            document.body.addEventListener("click", function(e) {
                const qtyBtn = e.target.closest(".quantity-btn");
                if (!qtyBtn) return;
                
                e.preventDefault();
                const container = qtyBtn.closest(".quantity-section");
                if (!container) return;
                
                const input = container.querySelector(".quantity-input");
                if (!input) return;
                
                let qty = parseInt(input.value) || 1;
                
                if (qtyBtn.querySelector(".hgi-plus-sign") || qtyBtn.textContent.includes("+")) {
                    qty++;
                } else if (qtyBtn.querySelector(".hgi-minus-sign") || qtyBtn.textContent.includes("-")) {
                    if (qty > 1) qty--;
                }
                
                input.value = qty;
            });
            window.quantityLogicAdded = true;
        }

        if (!window.buyNowLogicAdded) {
            document.body.addEventListener("click", async function(e) {
                const buyNowBtn = e.target.closest(".buy-now-btn");
                if (!buyNowBtn) return;
                
                e.preventDefault();
                
                const productId = buyNowBtn.getAttribute("data-product-id");
                if (!productId || productId === "undefined" || productId === "null") {
                    if (typeof Toastify !== "undefined") {
                        Toastify({ text: "❌ Invalid Product ID", duration: 3000, style: { background: "#ff416c" } }).showToast();
                    }
                    return;
                }

                let quantity = 1;
                const container = buyNowBtn.closest(".product-add-to-cart-btn-section") || buyNowBtn.closest(".quick-view-sidebar") || document;
                const quantityInput = container.querySelector(".quantity-input");
                
                if (quantityInput) {
                    quantity = parseInt(quantityInput.value) || 1;
                }

                const formData = new FormData();
                formData.append("productId", productId);
                formData.append("quantity", quantity);

                buyNowBtn.style.pointerEvents = "none";
                buyNowBtn.style.opacity = "0.7";
                const originalText = buyNowBtn.innerHTML;
                buyNowBtn.innerHTML = "<span>Processing...</span>";

                try {
                    const token = localStorage.getItem("UserToken");
                    const headers = {};
                    if (token) headers["Authorization"] = "Bearer " + token;

                    const response = await fetch(`${apiBase}/api/addcart/add`, {
                        method: "POST",
                        headers: headers,
                        body: formData
                    });

                    const result = await response.json();

                    if (response.ok || result.status || result.success || result?.value?.status === true) {
                        if (typeof Toastify !== "undefined") Toastify({ text: "✅ Redirecting to checkout...", duration: 2000, style: { background: "#00b09b" } }).showToast();
                        
                        if (typeof window.currentCartCount !== "undefined" && typeof window.updateCartCountUI === "function") {
                            window.updateCartCountUI(window.currentCartCount + quantity);
                        }

                        setTimeout(() => {
                            window.location.href = "checkout.php";
                        }, 1000);
                    } else {
                        if (typeof Toastify !== "undefined") Toastify({ text: "❌ Failed to process: " + (result.message || "Unknown error"), duration: 3000, style: { background: "#ff416c" } }).showToast();
                    }
                } catch (error) {
                    console.error("Error processing buy now:", error);
                    if (typeof Toastify !== "undefined") Toastify({ text: "❌ Server Error", duration: 3000, style: { background: "#ff416c" } }).showToast();
                } finally {
                    buyNowBtn.style.pointerEvents = "auto";
                    buyNowBtn.style.opacity = "1";
                    buyNowBtn.innerHTML = originalText;
                }
            });
            window.buyNowLogicAdded = true;
        }

        if (!document.getElementById("product-detail-page")) return;

        if (document.readyState === "loading") {
            document.addEventListener("DOMContentLoaded", initProductDetailPage);
        } else {
            initProductDetailPage();
        }

        window.addEventListener("load", function () {
            if (pendingProduct) {
                renderProductSliders(pendingProduct);
            }
        });
    }

    bootProductDetailPage();
})();
