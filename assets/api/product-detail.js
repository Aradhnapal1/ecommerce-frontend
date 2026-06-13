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
        if (title) title.textContent = product.productName || "Product";

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
