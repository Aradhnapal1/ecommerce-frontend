(function () {
    const apiBase =
        typeof domin !== "undefined" ? domin : "https://ecommerce-backend.workarya.com";

    let pendingProduct = null;
    window.currentProductGroup = { base: null, variants: [] };

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
        const mainImg = product.variantImageUrl || product.productImageUrl;

        if (mainImg) {
            images.push(mainImg);
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

    function getRelatedProductImage(product) {
        return product.productImageUrl || product.imageUrl || product.image || "assets/images/vitamin-c.png";
    }

    function getRelatedDiscountLabel(product) {
        const discount = product.discountPrice ?? product.discountPercent ?? product.discountPercentage ?? 0;
        if (discount) {
            return Math.round(Number(discount)) + "% OFF";
        }

        const salePrice = Number(product.salePrice ?? product.basePrice ?? 0);
        const mrp = Number(product.mrp ?? salePrice);
        if (mrp > salePrice) {
            return Math.round(((mrp - salePrice) / mrp) * 100) + "% OFF";
        }

        return "";
    }

    function escapeHtml(value) {
        return String(value ?? "")
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;");
    }

    function renderRelatedProductCard(product, index) {
        const delay = ((index % 4) + 2) * 0.1;
        const productId = product.id || product.productId || "";
        const productName = product.productName || product.name || "Product";
        const displayName = truncateProductName(productName);
        const detailUrl = buildProductDetailUrl(product);
        const image = getRelatedProductImage(product);
        const salePrice = product.salePrice ?? product.basePrice ?? 0;
        const mrp = product.mrp ?? salePrice;
        const discountLabel = getRelatedDiscountLabel(product);
        const rating = Number(product.averageRating) || 0;
        const reviewCount = product.totalReviews || 0;
        const ratingWidth = Math.min(100, Math.max(0, (rating / 5) * 100));
        const safeName = escapeHtml(displayName);
        const safeFullName = escapeHtml(productName);

        return (
            '<div data-wow-delay="' + delay + 's" class="border border-gray-300 rounded-2xl product-card-1 p-4 group related-product-item mx-3 wow animate__animated animate__fadeInUp">' +
            '<div class="product-image-container relative">' +
            '<div class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden">' +
            '<a href="' + detailUrl + '">' +
            '<img src="' + image + '" alt="' + safeFullName + '" class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />' +
            "</a></div>" +
            '<div class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">' +
            '<ul class="flex items-center gap-x-px">' +
            '<li><a aria-label="Add to Wishlist" class="add-to-wishlist-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5" href="javascript:void(0)" data-product-id="' + productId + '">' +
            '<i class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i></a></li>' +
            '<li><a aria-label="Compare" class="add-to-compare-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5" href="javascript:void(0)" data-product-id="' + productId + '">' +
            '<i class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i></a></li>' +
            '<li><a aria-label="Quick view" class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5" href="#" data-product-id="' + productId + '">' +
            '<i class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i></a></li>' +
            "</ul></div></div>" +
            '<div class="product-content">' +
            '<h5 class="text-base leading-6 font-semibold font-dm-sans mb-4">' +
            '<a href="' + detailUrl + '" title="' + safeFullName + '">' + safeName + "</a></h5>" +
            '<div class="rating-section flex items-center mb-4">' +
            '<div class="bg-[url(\'../images/star-icon.png\')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">' +
            '<div style="width: ' + ratingWidth + '%" class="bg-[url(\'../images/star-icon.png\')] h-4.5 bg-repeat-x bg-position-[0_-18px]"></div>' +
            "</div>" +
            '<span class="text-sm leading-[22px] font-normal inline-block ml-1">(' + reviewCount + ")</span>" +
            "</div>" +
            '<div class="price-section flex items-center gap-x-3 mb-2">' +
            '<span class="current-price text-base font-semibold text-light-primary-text">' + formatDetailPrice(salePrice) + "</span>" +
            (Number(mrp) > Number(salePrice)
                ? '<span class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through">' + formatDetailPrice(mrp) + "</span>"
                : "") +
            (discountLabel
                ? '<span class="discount-percentage text-sm leading-[22px] font-semibold text-error">' + discountLabel + "</span>"
                : "") +
            "</div>" +
            '<div class="btn-section flex items-center gap-x-4">' +
            '<a class="add-to-wishlist-btn size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300" href="javascript:void(0)" data-product-id="' + productId + '">' +
            '<i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i></a>' +
            '<a class="add-to-cart-btn btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1" href="javascript:void(0)" data-product-id="' + productId + '">' +
            '<i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>' +
            "<span>Add to Cart</span></a></div></div></div>"
        );
    }

    async function loadRelatedProducts(productId) {
        const section = document.getElementById("related-products-section");
        const slider = document.getElementById("related-products-slider") || document.querySelector(".related-products-slider");

        if (!slider || !productId) return;

        if (section) section.style.visibility = "hidden";

        try {
            const response = await fetch(
                apiBase + "/api/product/" + encodeURIComponent(productId) + "/related?limit=8"
            );

            if (!response.ok) {
                throw new Error("HTTP Error: " + response.status);
            }

            const result = await response.json();
            let items = [];

            if (Array.isArray(result.data)) {
                items = result.data;
            } else if (Array.isArray(result)) {
                items = result;
            } else if (Array.isArray(result?.value?.data)) {
                items = result.value.data;
            }

            if (!items.length) {
                if (section) {
                    section.style.display = "none";
                    section.style.visibility = "";
                }
                return;
            }

            if (section) section.style.display = "";

            const html = items.map(renderRelatedProductCard).join("");
            reinitProductSlider(slider, html);
            if (section) section.style.visibility = "";
        } catch (error) {
            console.error("Related products error:", error);
            if (section) section.style.display = "none";
            if (section) section.style.visibility = "";
        }
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

        const options = $slider.data("slick") || {};
        if (slider.id === "product-details-small-slider") {
            options.focusOnSelect = false;
        }
        if (slider.id === "product-details-big-slider") {
            options.prevArrow = '<button type="button" class="slider-btn size-10 flex items-center justify-center rounded-full bg-white shadow-md border border-gray-200 hover:bg-primary hover:text-white transition-all pointer-events-auto"><i class="hgi hgi-stroke hgi-arrow-left-01 text-xl"></i></button>';
            options.nextArrow = '<button type="button" class="slider-btn size-10 flex items-center justify-center rounded-full bg-white shadow-md border border-gray-200 hover:bg-primary hover:text-white transition-all pointer-events-auto"><i class="hgi hgi-stroke hgi-arrow-right-01 text-xl"></i></button>';
        }
        $slider.slick(options);
        setTimeout(function () {
            if ($slider.hasClass("slick-initialized")) {
                $slider.slick("setPosition");
            }
        }, 50);
    }

    function bindProductGalleryHover(smallSlider, bigSlider) {
        if (
            typeof jQuery === "undefined" ||
            !jQuery.fn ||
            !jQuery.fn.slick ||
            !smallSlider ||
            !bigSlider
        ) {
            return;
        }

        const $small = jQuery(smallSlider);
        const $big = jQuery(bigSlider);

        $small.off("mouseenter.productGallery", ".slick-slide");
        $small.on("mouseenter.productGallery", ".slick-slide", function () {
            const $slide = jQuery(this);
            if ($slide.hasClass("slick-cloned")) return;

            const index = $slide.data("slick-index");
            if (index === undefined || index === null) return;
            if (!$big.hasClass("slick-initialized")) return;

            $big.slick("slickGoTo", index, false);
        });
    }

    function renderProductSliders(product) {
        const images = getProductImages(product);
        const smallSlider = document.getElementById("product-details-small-slider");
        const bigSlider = document.getElementById("product-details-big-slider");

        if (!smallSlider || !bigSlider) return;

        const smallHtml = images
            .map(function (image) {
                return (
                    '<div class="single-product-small-slider-item p-1.5 rounded-lg overflow-hidden flex items-center justify-center bg-[#F4F3F5]">' +
                    '<img src="' +
                    image +
                    '" alt="' +
                    (product.productName || "Product") +
                    '" class="w-full h-full object-contain rounded-lg" />' +
                    "</div>"
                );
            })
            .join("");

        const bigHtml = images
            .map(function (image) {
                return (
                    '<div class="single-product-big-slider-item rounded-2xl overflow-hidden flex items-center justify-center bg-[#F4F3F5]">' +
                    '<img src="' +
                    image +
                    '" alt="' +
                    (product.productName || "Product") +
                    '" class="w-full h-full object-contain rounded-2xl" />' +
                    "</div>"
                );
            })
            .join("");

        reinitProductSlider(smallSlider, smallHtml);
        reinitProductSlider(bigSlider, bigHtml);
        bindProductGalleryHover(smallSlider, bigSlider);
    }

    function formatSizeLabel(size) {
        const text = String(size ?? "").trim();
        if (!text) return text;
        if (text.length === 1) return text.toUpperCase();
        return text.charAt(0).toUpperCase() + text.slice(1).toLowerCase();
    }

    function getPreservedSizeSelection(product) {
        const prev = window.productDetailSelection || {};
        const sizeIds = Array.isArray(product?.sizes) ? product.sizes : [];
        const sizeNames = product?.sizeNames || [];

        if (prev.sizeId && sizeIds.some(function (id) { return String(id) === String(prev.sizeId); })) {
            const idx = sizeIds.findIndex(function (id) { return String(id) === String(prev.sizeId); });
            return {
                sizeId: String(prev.sizeId),
                sizeName: prev.sizeName || sizeNames[idx] || "",
            };
        }

        if (prev.sizeName) {
            const normalizedPrev = formatSizeLabel(prev.sizeName).toLowerCase();
            const nameIdx = sizeNames.findIndex(function (name) {
                return formatSizeLabel(name).toLowerCase() === normalizedPrev;
            });
            if (nameIdx >= 0 && sizeIds[nameIdx] != null) {
                return {
                    sizeId: String(sizeIds[nameIdx]),
                    sizeName: sizeNames[nameIdx],
                };
            }
        }

        return null;
    }

    function syncProductDetailSelectionFromProduct(product) {
        if (typeof updateProductDetailSelection !== "function" || !product) return;

        const productId = String(product.productId || product.id || "");
        const colorSection = document.getElementById("product-color-section");
        const sizeContainer = document.getElementById("product-size-items");

        let colorId = "";
        let colorName = "";
        let variantId = "";

        const activeColor = colorSection?.querySelector(".variant-color-btn.border-primary");
        if (activeColor) {
            colorId = activeColor.getAttribute("data-color-id") || "";
            colorName = activeColor.getAttribute("title") || "";
            if (activeColor.getAttribute("data-is-base") === "true") {
                variantId = "";
            } else {
                variantId = activeColor.getAttribute("data-variant-id") || "";
            }
        } else {
            colorId = String(product.colorId || product.color || "");
            colorName = product.colorName || "";
            variantId =
                product.isVariant && product.variantId ? String(product.variantId) : "";
        }

        let sizeId = "";
        let sizeName = "";
        const activeSize =
            sizeContainer?.querySelector(".size-variant-btn.border-primary.bg-primary") ||
            sizeContainer?.querySelector(".size-variant-btn.bg-primary.text-white") ||
            sizeContainer?.querySelector(".size-variant-btn.bg-primary");

        if (activeSize) {
            sizeId = activeSize.getAttribute("data-size-id") || "";
            sizeName =
                activeSize.getAttribute("data-size-text") ||
                activeSize.textContent.trim() ||
                "";
        } else if ((product.sizeNames || []).length) {
            const sizeIds = Array.isArray(product.sizes) ? product.sizes : [];
            sizeId = sizeIds[0] != null ? String(sizeIds[0]) : "";
            sizeName = product.sizeNames[0] || "";
        }

        updateProductDetailSelection({
            productId: productId,
            variantId: variantId,
            colorId: colorId,
            colorName: colorName,
            sizeId: sizeId,
            sizeName: sizeName,
        });
    }

    function renderProductColor(product, variants = []) {
        const section = document.getElementById("product-color-section");
        if (!section) return;

        const baseProduct = window.currentProductGroup?.base;
        if (!baseProduct) return;

        const allOptions = [];
        
        if (baseProduct.colorName || baseProduct.colorSlug) {
            allOptions.push({
                ...baseProduct,
                isBase: true,
                displayColorName: baseProduct.colorName || "Default"
            });
        } else if (variants.length > 0) {
            allOptions.push({
                ...baseProduct,
                isBase: true,
                displayColorName: "Default"
            });
        }

        variants.forEach(function(v) {
            allOptions.push({
                ...v,
                isBase: false,
                displayColorName: v.colorName || "Variant"
            });
        });

        if (allOptions.length === 0) {
            section.classList.add("hidden");
            return;
        }

        section.classList.remove("hidden");
        
        const selectedColorText = section.querySelector(".color-variation-selected-color");
        if (selectedColorText) {
            selectedColorText.textContent = product.colorName || (product.isVariant ? "Variant" : "Default");
        }

        const items = section.querySelector(".color-variation-items");
        if (!items) return;

        let html = "";
        allOptions.forEach(function(opt) {
            let isActive = false;
            if (opt.isBase && !product.isVariant) isActive = true;
            if (!opt.isBase && product.isVariant && String(product.variantId) === String(opt.id)) isActive = true;

            const colorId = opt.colorId || opt.color || "";
            const dataAttr = opt.isBase
                ? 'data-is-base="true" data-color-id="' + colorId + '"'
                : 'data-variant-id="' + opt.id + '" data-color-id="' + colorId + '"';
            
            // Use API color code, or fallback to CSS color name (e.g., "Navy" -> "navy")
            let colorCode = opt.colorCode || opt.hexCode || opt.displayColorName || "#cccccc";
            if (colorCode.toLowerCase() === "default") colorCode = "#cccccc"; // Safe default
            colorCode = colorCode.replace(/\s+/g, "").toLowerCase(); // Remove spaces for CSS compatibility
            
            let buttonClasses = "variant-color-btn cursor-pointer flex items-center justify-center rounded-full size-10 border transition-all ";
            buttonClasses += isActive ? "border-primary ring-2 ring-primary ring-offset-2" : "border-gray-300 hover:border-primary";
            let buttonStyle = 'style="background-color: ' + colorCode + ';"';

            html += 
                '<div class="color-variation-item">' +
                '<button type="button" ' + dataAttr + ' title="' + opt.displayColorName + '" class="' + buttonClasses + '" ' + buttonStyle + '>' +
                '</button></div>';
        });

        items.innerHTML = html;

        const btns = items.querySelectorAll('.variant-color-btn');
        btns.forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                let selectedOpt;
                
                if (this.getAttribute('data-is-base') === 'true') {
                    selectedOpt = Object.assign({}, window.currentProductGroup.base, { isVariant: false });
                } else {
                    const vId = this.getAttribute('data-variant-id');
                    const foundVariant = window.currentProductGroup.variants.find(function(v) { return String(v.id) === String(vId); });
                    if (foundVariant) {
                        selectedOpt = Object.assign({}, foundVariant, { isVariant: true });
                    }
                }

                if (selectedOpt) {
                    if (selectedOpt.isVariant) {
                        selectedOpt.productName = selectedOpt.variantName || selectedOpt.productName || window.currentProductGroup.base.productName;
                        selectedOpt.categoryName = selectedOpt.categoryName || window.currentProductGroup.base.categoryName;
                        selectedOpt.brandName = selectedOpt.brandName || window.currentProductGroup.base.brandName;
                        selectedOpt.description = selectedOpt.description || window.currentProductGroup.base.description;
                        selectedOpt.shortDescription = selectedOpt.shortDescription || window.currentProductGroup.base.shortDescription;
                        selectedOpt.variantId = selectedOpt.id; 
                        selectedOpt.productId = window.currentProductGroup.base.id || window.currentProductGroup.base.productId;
                    }

                    const isBase = btn.getAttribute("data-is-base") === "true";
                    const baseId =
                        window.currentProductGroup.base.id ||
                        window.currentProductGroup.base.productId ||
                        "";

                    if (typeof updateProductDetailSelection === "function") {
                        updateProductDetailSelection({
                            productId: String(baseId),
                            variantId: isBase ? "" : btn.getAttribute("data-variant-id") || "",
                            colorId: btn.getAttribute("data-color-id") || "",
                            colorName: btn.getAttribute("title") || "",
                        });
                    }

                    pendingProduct = selectedOpt;
                    window.pendingProduct = selectedOpt;
                    renderProductDetail(selectedOpt, window.currentProductGroup.variants);
                    renderProductSliders(selectedOpt);
                }
            });
        });
    }

    function renderProductSizes(product) {
        const container = document.getElementById("product-size-items");
        const section = container ? container.closest(".size-variation-section") : null;
        const sizeNames = product.sizeNames || [];
        const sizeIds = Array.isArray(product.sizes) ? product.sizes : [];

        if (!container || !section) return;

        if (!sizeNames.length) {
            section.classList.add("hidden");
            return;
        }

        section.classList.remove("hidden");

        const preservedSize = getPreservedSizeSelection(product);
        let activeIndex = 0;

        if (preservedSize) {
            const idIndex = sizeIds.findIndex(function (id) {
                return String(id) === String(preservedSize.sizeId);
            });
            if (idIndex >= 0) {
                activeIndex = idIndex;
            } else if (preservedSize.sizeName) {
                const normalizedPrev = formatSizeLabel(preservedSize.sizeName).toLowerCase();
                const nameIndex = sizeNames.findIndex(function (name) {
                    return formatSizeLabel(name).toLowerCase() === normalizedPrev;
                });
                if (nameIndex >= 0) activeIndex = nameIndex;
            }
        }

        const activeSizeName = formatSizeLabel(sizeNames[activeIndex] || sizeNames[0]);
        const selectedSize = section.querySelector(".size-variation-selected-size");
        if (selectedSize) selectedSize.textContent = activeSizeName;

        container.innerHTML = sizeNames
            .map(function (size, index) {
                const isActive = index === activeIndex;
                const sizeId = sizeIds[index] != null ? sizeIds[index] : "";
                const sizeLabel = formatSizeLabel(size);
                return (
                    '<div class="size-variation-item">' +
                    '<button type="button" data-size-text="' +
                    sizeLabel +
                    '" data-size-id="' +
                    sizeId +
                    '" class="size-variant-btn cursor-pointer flex items-center justify-center text-sm leading-6 px-[38px] py-1.5 font-semibold border rounded-[100px] ' +
                    (isActive
                        ? "border-primary bg-primary text-white hover:bg-primary"
                        : "text-light-primary-text border-gray-300 hover:bg-[rgba(145,158,171,0.08)]") +
                    '">' +
                    sizeLabel +
                    "</button></div>"
                );
            })
            .join("");

        container.querySelectorAll(".size-variant-btn").forEach(function (btn) {
            btn.addEventListener("click", function (e) {
                e.preventDefault();
                container.querySelectorAll(".size-variant-btn").forEach(function (item) {
                    item.classList.remove("border-primary", "bg-primary", "text-white");
                    item.classList.add("text-light-primary-text", "border-gray-300");
                });
                btn.classList.add("border-primary", "bg-primary", "text-white");
                btn.classList.remove("text-light-primary-text", "border-gray-300");

                const sizeLabel = section.querySelector(".size-variation-selected-size");
                const sizeText =
                    btn.getAttribute("data-size-text") || btn.textContent.trim();
                if (sizeLabel) {
                    sizeLabel.textContent = sizeText;
                }

                const productId = String(
                    product.productId || product.id || window.pendingProduct?.productId || window.pendingProduct?.id || ""
                );
                if (typeof updateProductDetailSelection === "function" && productId) {
                    updateProductDetailSelection({
                        productId: productId,
                        sizeId: btn.getAttribute("data-size-id") || "",
                        sizeName: sizeText,
                    });
                }
            });
        });
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
            ["Product Name", truncateProductName(product.productName)],
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

    function renderProductDetail(product, variants = []) {
        document.title = (product.productName || "Product") + " - HyperScripts";

        const breadcrumbName = document.getElementById("product-breadcrumb-name");
        if (breadcrumbName) breadcrumbName.textContent = truncateProductName(product.productName || "Product Details");

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
                  oldPrice.classList.add("line-through");
            } else {
                oldPrice.classList.add("hidden");
                   oldPrice.classList.remove("line-through");
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

        const urlParams = new URLSearchParams(window.location.search);
        const validProductId = product.productId || product.id || product._id || urlParams.get("id") || "";

        const wishlistBtn = document.getElementById("product-detail-wishlist-btn");
        if (wishlistBtn) {
            wishlistBtn.setAttribute("data-product-id", validProductId);
            if (product.variantId) {
                wishlistBtn.setAttribute("data-variant-id", product.variantId);
            } else {
                wishlistBtn.removeAttribute("data-variant-id");
            }
        }

        const compareBtn = document.querySelector(".product-compare-btn");
        if (compareBtn) {
            compareBtn.setAttribute("data-product-id", validProductId);
            if (product.variantId) {
                compareBtn.setAttribute("data-variant-id", product.variantId);
            } else {
                compareBtn.removeAttribute("data-variant-id");
            }
            if (product.color || product.colorId) {
                compareBtn.setAttribute("data-color-id", product.colorId || product.color);
            } else {
                compareBtn.removeAttribute("data-color-id");
            }
        }

        // Check stock availability
        const availableStock = product.stock != null ? parseInt(product.stock, 10) : 9999;

        const stockBadge = document.getElementById("product-stock-badge");
        if (stockBadge) {
            if (availableStock <= 0) {
                stockBadge.textContent = "Out of Stock";
                stockBadge.className = "product-stock-badge inline-block mb-6 ml-2 uppercase bg-error text-white font-medium text-sm leading-[22px] px-2 py-0.5 rounded";
            } else if (availableStock <= 5) {
                stockBadge.textContent = `Only ${availableStock} left!`;
                stockBadge.className = "product-stock-badge inline-block mb-6 ml-2 uppercase bg-warning text-black font-medium text-sm leading-[22px] px-2 py-0.5 rounded";
            } else {
                stockBadge.textContent = "In Stock";
                stockBadge.className = "product-stock-badge inline-block mb-6 ml-2 uppercase bg-success text-white font-medium text-sm leading-[22px] px-2 py-0.5 rounded";
            }
        }

        // Apply ID to ALL add to cart & buy now buttons (main page + quick view sidebar)
        const btnSections = document.querySelectorAll(".product-add-to-cart-btn-section");
        btnSections.forEach(section => {
            const parentContainer = section.closest(".product-add-to-cart-section") || section.closest(".quick-view-sidebar") || section.parentElement;
            const qtySection = parentContainer ? parentContainer.querySelector(".quantity-section, .qty-box") : null;

            if (availableStock <= 0) {
                // if stock or qty <= 0, replace Buy Now & Add to Cart buttons with Out of Stock text
                section.innerHTML = `
                    <div class="w-full">
                        <button type="button" disabled class="btn btn-secondary text-white btn-large rounded-[80px] w-full cursor-not-allowed opacity-75 font-bold py-3 text-center">
                            <i class="hgi hgi-stroke hgi-remove-circle me-2 text-xl"></i> Out of Stock
                        </button>
                    </div>
                `;
                if (qtySection) {
                    qtySection.style.opacity = "0.5";
                    qtySection.style.pointerEvents = "none";
                    const input = qtySection.querySelector(".quantity-input");
                    if (input) input.value = "0";
                }
            } else {
                // else show normal Buy Now & Add to Cart buttons
                section.innerHTML = `
                    <div class="flex items-center justify-between gap-x-4 gap-y-4 flex-wrap md:flex-nowrap md:gap-y-0 w-full">
                        <button class="btn btn-warning btn-large rounded-[80px] flex-1 buy-now-btn" data-product-id="${validProductId}" ${product.variantId ? `data-variant-id="${product.variantId}"` : ''}>
                            Buy Now
                        </button>
                        <button class="btn btn-primary btn-large rounded-[80px] flex-1 add-to-cart-btn" data-product-id="${validProductId}" ${product.variantId ? `data-variant-id="${product.variantId}"` : ''}>
                            <i class="hgi hgi-stroke hgi-shopping-cart-add-02 leading-6 text-2xl text-white me-1"></i>
                            Add to Cart
                        </button>
                    </div>
                `;
                if (qtySection) {
                    qtySection.style.opacity = "1";
                    qtySection.style.pointerEvents = "auto";
                    const input = qtySection.querySelector(".quantity-input");
                    if (input && parseInt(input.value, 10) <= 0) input.value = "1";
                }
            }
        });

        renderProductColor(product, variants);
        renderProductSizes(product);
        renderProductDescription(product);
        renderProductAdditionalInfo(product);

        window.pendingProduct = product;
        syncProductDetailSelectionFromProduct(product);
    }

    async function initProductDetailPage() {
        const params = new URLSearchParams(window.location.search);
        const productId = params.get("id");

        if (!productId) {
            showProductDetailError("Product not found.");
            return;
        }

        try {
            const [response, variantRes] = await Promise.all([
                fetch(apiBase + "/api/product/getproductbyid/" + encodeURIComponent(productId)),
                fetch(apiBase + "/api/variant/getallvariants").catch(() => null)
            ]);

            if (!response.ok) {
                throw new Error("HTTP Error: " + response.status);
            }

            const result = await response.json();
            const product = parseProductDetailResponse(result);

            if (!product) {
                throw new Error("Product data missing");
            }

            let variants = [];
            if (variantRes && variantRes.ok) {
                const varResult = await variantRes.json();
                const allVars = varResult?.data || varResult?.value?.data || [];
                variants = allVars.filter(v => String(v.productId) === String(productId) && v.isActive !== false);
            }

            window.currentProductGroup = {
                base: product,
                variants: variants
            };

            if (product.slug && !params.get("slug")) {
                window.history.replaceState(null, "", buildProductDetailUrl(product));
            }

            pendingProduct = product;
            window.pendingProduct = product;
            renderProductDetail(product, variants);
            renderProductSliders(product);
            initReviews(productId);
            loadRelatedProducts(productId);
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
                const container = qtyBtn.closest(".quantity-section") || qtyBtn.closest(".product-add-to-cart-btn-section") || qtyBtn.closest(".product-add-to-cart-section") || qtyBtn.closest(".border") || qtyBtn.parentElement;
                if (!container) return;
                
                const input = container.querySelector(".quantity-input");
                if (!input) return;
                
                let qty = parseInt(input.value) || 1;
                
                let availableStock = 9999;
                if (window.pendingProduct && window.pendingProduct.stock != null) {
                    availableStock = parseInt(window.pendingProduct.stock, 10);
                } else if (container.getAttribute("data-stock")) {
                    availableStock = parseInt(container.getAttribute("data-stock"), 10);
                }
                if (isNaN(availableStock)) availableStock = 9999;

                const isPlus = qtyBtn.querySelector(".hgi-plus-sign") || qtyBtn.textContent.includes("+") || qtyBtn.classList.contains("cart-qty-plus") || qtyBtn.classList.contains("bootstrap-touchspin-up");
                const isMinus = qtyBtn.querySelector(".hgi-minus-sign") || qtyBtn.textContent.includes("-") || qtyBtn.classList.contains("cart-qty-minus") || qtyBtn.classList.contains("bootstrap-touchspin-down");

                if (isPlus) {
                    if (availableStock <= 0) {
                        input.value = 0;
                        if (typeof Toastify !== "undefined") {
                            Toastify({
                                text: "❌ Product is Out of Stock!",
                                duration: 3000,
                                style: { background: "linear-gradient(to right, #ff416c, #ff4b2b)" }
                            }).showToast();
                        }
                        return;
                    }
                    if (qty >= availableStock) {
                        if (typeof Toastify !== "undefined") {
                            Toastify({
                                text: "⚠️ Stock is not available for more quantity",
                                duration: 3000,
                                style: { background: "linear-gradient(to right, #ffc107, #ff9800)", color: "#000" }
                            }).showToast();
                        }
                        return;
                    }
                    qty++;
                } else if (isMinus) {
                    if (qty > 1) qty--;
                }
                
                input.value = qty;
            });

            // Prevent typing values higher than available stock
            document.body.addEventListener("change", function(e) {
                if (e.target.classList.contains("quantity-input")) {
                    const input = e.target;
                    let qty = parseInt(input.value) || 1;
                    let availableStock = 9999;
                    if (window.pendingProduct && window.pendingProduct.stock != null) {
                        availableStock = parseInt(window.pendingProduct.stock, 10);
                    } else if (input.closest("[data-stock]")) {
                        availableStock = parseInt(input.closest("[data-stock]").getAttribute("data-stock"), 10);
                    }

                    if (availableStock <= 0) {
                        input.value = 0;
                        if (typeof Toastify !== "undefined") {
                            Toastify({
                                text: "❌ Product is Out of Stock!",
                                duration: 3000,
                                style: { background: "linear-gradient(to right, #ff416c, #ff4b2b)" }
                            }).showToast();
                        }
                        return;
                    }

                    if (qty > availableStock) {
                        input.value = availableStock;
                        if (typeof Toastify !== "undefined") {
                            Toastify({
                                text: "⚠️ Stock is not available for more quantity",
                                duration: 3000,
                                style: { background: "linear-gradient(to right, #ffc107, #ff9800)", color: "#000" }
                            }).showToast();
                        }
                    } else if (qty < 1) {
                        input.value = 1;
                    }
                }
            });

            window.quantityLogicAdded = true;
        }

        if (!window.buyNowLogicAdded) {
            document.body.addEventListener("click", async function(e) {
                const buyNowBtn = e.target.closest(".buy-now-btn");
                if (!buyNowBtn) return;
                
                e.preventDefault();
                
                const token = localStorage.getItem("UserToken");
                if (!token) {
                    if (typeof Toastify !== "undefined") {
                        Toastify({ text: "⚠️ Please log in to proceed to checkout", duration: 3000, style: { background: "#ffc107", color: "#000" } }).showToast();
                    }
                    const loginBtn = document.querySelector(".login-page-btn");
                    if (loginBtn) loginBtn.click();
                    return;
                }

                const productId = buyNowBtn.getAttribute("data-product-id");
                if (!productId || productId === "undefined" || productId === "null") {
                    if (typeof Toastify !== "undefined") {
                        Toastify({ text: "❌ Invalid Product ID", duration: 3000, style: { background: "#ff416c" } }).showToast();
                    }
                    return;
                }

                const container =
                    typeof getCartSelectionContainer === "function"
                        ? getCartSelectionContainer(buyNowBtn)
                        : buyNowBtn.closest(".product-add-to-cart-section") ||
                          buyNowBtn.closest(".product-add-to-cart-btn-section") ||
                          buyNowBtn.closest(".quick-view-sidebar") ||
                          document;

                const cartOptions =
                    typeof getProductCartOptions === "function"
                        ? getProductCartOptions(container, buyNowBtn)
                        : { variantId: buyNowBtn.getAttribute("data-variant-id") || "", colorId: "", sizeId: "" };

                const hasSizeOptions = container.querySelector(
                    ".size-variation-section:not(.hidden) .size-variation-item button"
                );
                if (hasSizeOptions && (!cartOptions.sizeId || cartOptions.sizeId === "0")) {
                    if (typeof Toastify !== "undefined") {
                        Toastify({
                            text: "Please select a size",
                            duration: 3000,
                            style: { background: "#ffc107", color: "#000" },
                        }).showToast();
                    }
                    return;
                }

                const variantId = cartOptions.variantId || "";
                let quantity = 1;
                const quantityInput = container.querySelector(".quantity-input");
                
                if (quantityInput) {
                    quantity = parseInt(quantityInput.value) || 1;
                }

                if (typeof window.OrderAPI !== "undefined") {
                    await window.OrderAPI.handleBuyNow({
                        productId,
                        quantity,
                        variantId,
                        colorId: cartOptions.colorId,
                        sizeId: cartOptions.sizeId,
                        colorName: cartOptions.colorName,
                        sizeName: cartOptions.sizeName,
                        buttonEl: buyNowBtn,
                    });
                    return;
                }

                buyNowBtn.style.pointerEvents = "none";
                buyNowBtn.style.opacity = "0.7";
                const originalText = buyNowBtn.innerHTML;
                buyNowBtn.innerHTML = "<span>Processing...</span>";

                try {
                    sessionStorage.setItem("buyNowItem", JSON.stringify({
                        productId: parseInt(productId, 10),
                        quantity,
                        variantId: variantId && variantId !== "undefined" && variantId !== "null"
                            ? parseInt(variantId, 10)
                            : null,
                        colorId: cartOptions.colorId || null,
                        sizeId: cartOptions.sizeId || null,
                        colorName: cartOptions.colorName || null,
                        sizeName: cartOptions.sizeName || null,
                    }));
                    sessionStorage.setItem("buyNowCheckout", "1");

                    const token = localStorage.getItem("UserToken");
                    const headers = {};
                    if (token) headers["Authorization"] = "Bearer " + token;

                    await fetch(`${apiBase}/api/addcart/clear`, {
                        method: "DELETE",
                        headers: { "Content-Type": "application/json", ...headers }
                    });

                    const formData = new FormData();
                    formData.append("productId", productId);
                    formData.append("quantity", quantity);
                    if (typeof appendCartOptionsToFormData === "function") {
                        appendCartOptionsToFormData(formData, cartOptions);
                    } else if (variantId && variantId !== "undefined" && variantId !== "null") {
                        formData.append("variantId", variantId);
                    }

                    const response = await fetch(`${apiBase}/api/addcart/add`, {
                        method: "POST",
                        headers,
                        body: formData
                    });

                    const result = await response.json();

                    if (response.ok || result.status || result.success || result?.value?.status === true) {
                        if (typeof storeCartAddMeta === "function") {
                            storeCartAddMeta(result, productId, cartOptions);
                        }
                        if (typeof Toastify !== "undefined") Toastify({ text: "✅ Redirecting to checkout...", duration: 2000, style: { background: "#00b09b" } }).showToast();
                        setTimeout(() => { window.location.href = "checkout.php"; }, 1000);
                    } else {
                        sessionStorage.removeItem("buyNowItem");
                        sessionStorage.removeItem("buyNowCheckout");
                        if (typeof Toastify !== "undefined") Toastify({ text: "❌ Failed to process: " + (result.message || "Unknown error"), duration: 3000, style: { background: "#ff416c" } }).showToast();
                    }
                } catch (error) {
                    sessionStorage.removeItem("buyNowItem");
                    sessionStorage.removeItem("buyNowCheckout");
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

    let allReviews = [];
    let currentReviewPage = 1;
    const REVIEWS_PER_PAGE = 5;

    function sortAndRerenderReviews(sortBy) {
        switch (sortBy) {
            case 'newest':
                allReviews.sort((a, b) => new Date(b.createdAt) - new Date(a.createdAt));
                break;
            case 'oldest':
                allReviews.sort((a, b) => new Date(a.createdAt) - new Date(b.createdAt));
                break;
            case 'rating_desc': // Assuming 'rating' means highest to lowest
                allReviews.sort((a, b) => (parseFloat(b.rating) || 0) - (parseFloat(a.rating) || 0));
                break;
            case 'rating_asc': // A low-to-high option might be useful too
                allReviews.sort((a, b) => (parseFloat(a.rating) || 0) - (parseFloat(b.rating) || 0));
                break;
            default:
                // Default to newest
                allReviews.sort((a, b) => new Date(b.createdAt) - new Date(a.createdAt));
                break;
        }
        currentReviewPage = 1;
        renderReviewPage();
    }

    function injectRatingDropdownHTML() {
        const form = document.getElementById("add-review-form");
        if (!form || document.getElementById("review-rating-select")) {
            return; // Form not found or dropdown already exists
        }

        const ratingContainer = document.createElement('div');
        ratingContainer.className = 'mb-4';
        ratingContainer.innerHTML = `
            <select id="review-rating-select" name="rating" class="form-control w-full md:w-1/3 rounded-[10px] border-gray-300">
                <option value="0" disabled selected>Select a rating</option>
                <option value="5">5 Stars</option>
                <option value="4">4 Stars</option>
                <option value="3">3 Stars</option>
                <option value="2">2 Stars</option>
                <option value="1">1 Star</option>
            </select>`;
        form.insertBefore(ratingContainer, form.firstChild);
    }

    function initReviews(productId) {
        const token = localStorage.getItem("UserToken");
        const formWrapper = document.getElementById("comment-forms");
        
        if (!token) {
            if (formWrapper) {
                formWrapper.innerHTML = '<div class="p-6 text-center border md:border-gray-300 md:rounded-3xl"><p class="text-light-secondary-text mb-4">Please log in to write a review.</p><a href="login.php" class="btn btn-primary login-page-btn outline rounded-[100px] py-[11px] px-6">Log In</a></div>';
            }
        } else {
            // Inject rating dropdown HTML if it doesn't exist
            injectRatingDropdownHTML();

            const form = document.getElementById("add-review-form");
            if (form) {
                form.addEventListener("submit", async function(e) {
                    e.preventDefault();
                    const ratingSelect = document.getElementById("review-rating-select");
                    const rating = ratingSelect ? ratingSelect.value : 0;
                    const comment = document.getElementById("post_comment").value;
                    
                    if (rating == 0) {
                        if (typeof Toastify !== "undefined") Toastify({ text: "⚠️ Please select a rating", duration: 3000, style: { background: "#ffc107", color: "#000" } }).showToast();
                        return;
                    }
                    if (!comment.trim()) {
                        if (typeof Toastify !== "undefined") Toastify({ text: "⚠️ Please enter a comment", duration: 3000, style: { background: "#ffc107", color: "#000" } }).showToast();
                        return;
                    }

                    const submitBtn = document.getElementById("submit-review-btn");
                    const originalText = submitBtn.innerHTML;
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = "Posting...";

                    try {
                        const response = await fetch(`${apiBase}/api/review/add`, {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                                "Authorization": `Bearer ${token}`
                            },
                            body: JSON.stringify({
                                productId: parseInt(productId),
                                rating: parseInt(rating),
                                comment: comment.trim()
                            })
                        });

                        const result = await response.json();
                        if (response.ok && result.success) {
                            if (typeof Toastify !== "undefined") Toastify({ text: "✅ Review added successfully", duration: 3000, style: { background: "#00b09b" } }).showToast();
                            form.reset();
                            if (ratingSelect) ratingSelect.value = "0";
                            
                            // Re-fetch reviews
                            loadProductReviews(productId);
                        } else {
                            if (typeof Toastify !== "undefined") Toastify({ text: `❌ ${result.message || "Failed to add review"}`, duration: 3000, style: { background: "#ff416c" } }).showToast();
                        }
                    } catch (error) {
                        console.error("Error adding review:", error);
                        if (typeof Toastify !== "undefined") Toastify({ text: "❌ Server Error", duration: 3000, style: { background: "#ff416c" } }).showToast();
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalText;
                    } finally {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalText;
                    }
                });
            }
        }
        
        const sortingSelect = document.getElementById("sorting");
        if (sortingSelect) {
            // Use 'change' on the actual select, not the nice-select wrapper
            sortingSelect.addEventListener('change', function(e) {
                sortAndRerenderReviews(e.target.value);
            });
        }

        loadProductReviews(productId);
    }

    async function loadProductReviews(productId) {
        try {
            const response = await fetch(`${apiBase}/api/review/product/${productId}`);
            const result = await response.json();
            
            if (result.success && result.data) {
                allReviews = result.data.sort((a, b) => new Date(b.createdAt) - new Date(a.createdAt));
                currentReviewPage = 1;
                
                // Update Overview
                renderReviewOverview(allReviews);
                
                // Render List
                renderReviewPage();
                
                // Update the tab title count
                const tabTitles = document.querySelectorAll('button[data-tab="reviews"]');
                tabTitles.forEach(t => t.textContent = `Reviews (${allReviews.length})`);
            } else {
                renderReviewOverview([]);
                renderReviewPage();
            }
        } catch (error) {
            console.error("Error loading reviews:", error);
        }
    }

    function renderReviewOverview(reviews) {
        const total = reviews.length;
        const overviewContainer = document.querySelector('.rating-overview');
        if (!overviewContainer) return;

        if (total === 0) {
             overviewContainer.innerHTML = `
                <div class="md:col-span-4 col-span-12 flex items-center justify-center py-6 md:py-0">
                  <div class="rating-heading space-y-2 text-center">
                    <p class="font-semibold text-light-primary-text">Average Rating</p>
                    <h2 class="text-error">0/5</h2>
                    <div class="rating-section flex items-center justify-center">
                      <div class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                        <div style="width: 0%" class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"></div>
                      </div>
                    </div>
                    <p>(0 reviews)</p>
                  </div>
                </div>
                <div class="md:col-span-4 col-span-12 p-6 flex items-center justify-center">
                  <div class="list-rating space-y-6 w-full">
                    ${[5, 4, 3, 2, 1].map(star => {
                        return `
                        <div class="flex gap-x-4 items-center">
                          <span class="font-semibold text-light-primary-text">${star} Star</span>
                          <div class="progress w-full flex-1 h-1.5 bg-[rgba(145,158,171,0.24)] rounded-[50px] overflow-hidden">
                            <div style="width: 0%" class="progress-bar h-full bg-primary rounded-[50px]"></div>
                          </div>
                          <span>0</span>
                        </div>
                        `;
                    }).join("")}
                  </div>
                </div>
                <div class="md:col-span-4 col-span-12 flex items-center justify-center py-6 md:py-0">
                  <a href="#comment-forms" class="btn btn-primary outline btn-large rounded-[100px]">Write a Review</a>
                </div>
            `;
            return;
        }
        
        let sum = 0;
        let counts = { 5: 0, 4: 0, 3: 0, 2: 0, 1: 0 };
        
        reviews.forEach(r => {
            const rVal = parseFloat(r.rating) || 0;
            sum += rVal;
            const intRating = Math.round(rVal);
            if (counts[intRating] !== undefined) {
                counts[intRating]++;
            } else if (intRating > 5) counts[5]++;
            else if (intRating < 1) counts[1]++;
        });
        
        const avg = sum / total;
        const avgWidth = (avg / 5) * 100;
        
        overviewContainer.innerHTML = `
            <div class="md:col-span-4 col-span-12 flex items-center justify-center py-6 md:py-0">
              <div class="rating-heading space-y-2 text-center">
                <p class="font-semibold text-light-primary-text">Average Rating</p>
                <h2 class="text-error">${avg.toFixed(1)}/5</h2>
                <div class="rating-section flex items-center justify-center">
                  <div class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                    <div style="width: ${avgWidth}%" class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"></div>
                  </div>
                </div>
                <p>(${total} review${total > 1 ? 's' : ''})</p>
              </div>
            </div>
            <div class="md:col-span-4 col-span-12 p-6 flex items-center justify-center">
              <div class="list-rating space-y-6 w-full">
                ${[5, 4, 3, 2, 1].map(star => {
                    const count = counts[star];
                    const pct = total > 0 ? (count / total) * 100 : 0;
                    return `
                    <div class="flex gap-x-4 items-center">
                      <span class="font-semibold text-light-primary-text">${star} Star</span>
                      <div class="progress w-full flex-1 h-1.5 bg-[rgba(145,158,171,0.24)] rounded-[50px] overflow-hidden">
                        <div style="width: ${pct}%" class="progress-bar h-full bg-primary rounded-[50px]"></div>
                      </div>
                      <span>${count}</span>
                    </div>
                    `;
                }).join("")}
              </div>
            </div>
            <div class="md:col-span-4 col-span-12 flex items-center justify-center py-6 md:py-0">
              <a href="#comment-forms" class="btn btn-primary outline btn-large rounded-[100px]">Write a Review</a>
            </div>
        `;
    }

    window.renderReviewPage = renderReviewPage;
    function renderReviewPage() {
        const listContainer = document.querySelector('.comment-list');
        const paginationContainer = document.querySelector('.comment-pagination');
        
        if (!listContainer) return;
        
        if (allReviews.length === 0) {
            listContainer.innerHTML = '<li class="text-center text-light-secondary-text py-4">No reviews yet. Be the first to review this product!</li>';
            if (paginationContainer) paginationContainer.innerHTML = '';
            return;
        }
        
        const start = (currentReviewPage - 1) * REVIEWS_PER_PAGE;
        const end = start + REVIEWS_PER_PAGE;
        const paginatedReviews = allReviews.slice(start, end);
        
        let html = '';
        paginatedReviews.forEach(r => {
            const ratingWidth = (parseFloat(r.rating) / 5) * 100;
            const dateStr = new Date(r.createdAt).toLocaleDateString('en-GB', { day: 'numeric', month: 'short', year: 'numeric' });
            
            let avatarHtml = '';
            if (r.profileImageUrl) {
                avatarHtml = `<img src="${r.profileImageUrl}" alt="Avatar" class="rounded-full w-full h-full object-cover" />`;
            } else {
                const initialF = r.firstName ? r.firstName.charAt(0).toUpperCase() : '';
                const initialL = r.lastName ? r.lastName.charAt(0).toUpperCase() : '';
                avatarHtml = `<span class="flex items-center justify-center w-full h-full bg-primary text-white font-bold text-lg rounded-full">${initialF}${initialL}</span>`;
            }
            
            html += `
                  <li class="comment">
                    <div class="comment-body">
                      <div class="comment-avatar-card flex items-center gap-x-4 mb-3">
                        <div class="comment-author-avatar size-12 rounded-full">
                          ${avatarHtml}
                        </div>
                        <div class="comment-author-info flex-1">
                          <p class="comment-author font-semibold text-light-primary-text">
                            ${r.firstName || 'Anonymous'} ${r.lastName || ''}
                          </p>
                        </div>
                      </div>
                      <div class="flex items-center mb-3">
                        <div class="rating-section flex items-center relative after:absolute after:h-[22px] after:w-px after:right-0 after:top-1/2 after:-translate-y-1/2 after:bg-gray-300 pr-3">
                          <div class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                            <div style="width: ${ratingWidth}%" class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"></div>
                          </div>
                          <span class="text-sm leading-[22px] font-normal inline-flex ml-2 text-light-primary-text">${parseFloat(r.rating).toFixed(1)}</span>
                        </div>
                      </div>
                      <div class="comment-content pl-0! pr-0! mb-3">
                        <p class="text-light-primary-text">${r.comment}</p>
                      </div>
                    </div>
                  </li>
            `;
        });
        
        listContainer.innerHTML = html;
        
        // Render Pagination
        if (paginationContainer) {
            const totalPages = Math.ceil(allReviews.length / REVIEWS_PER_PAGE);
            if (totalPages <= 1) {
                paginationContainer.innerHTML = '';
            } else {
                let pHTML = '';
                
                // Prev
                pHTML += `
                    <li class="group comment-pagination-item">
                      <a href="javascript:void(0)" class="review-page-btn inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] bg-white cursor-pointer border border-gray-300 group-hover:font-semibold group-hover:border-primary group-hover:bg-[rgba(0,171,85,0.08)] transition-colors duration-300 ease-in-out ${currentReviewPage === 1 ? 'opacity-50 pointer-events-none' : ''}" data-page="${currentReviewPage - 1}">
                        <span class="inline-flex items-center justify-center">
                          <i class="hgi hgi-stroke hgi-arrow-left-01 text-[20px] group-hover:font-semibold leading-5 text-light-primary-text group-hover:text-primary"></i>
                        </span>
                      </a>
                    </li>
                `;
                
                // Pages
                for (let i = 1; i <= totalPages; i++) {
                    if (i === 1 || i === totalPages || Math.abs(i - currentReviewPage) <= 1) {
                        pHTML += `
                            <li class="group comment-pagination-item">
                              <a href="javascript:void(0)" class="review-page-btn inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] ${i === currentReviewPage ? 'active bg-primary text-white border-primary' : 'text-base leading-6 text-light-primary-text group-hover:text-primary group-hover:font-semibold bg-white cursor-pointer border border-gray-300 group-hover:border-primary group-hover:bg-[rgba(0,171,85,0.08)] transition-colors duration-300 ease-in-out'}" data-page="${i}">
                                ${i}
                              </a>
                            </li>
                        `;
                    } else if (Math.abs(i - currentReviewPage) === 2) {
                        pHTML += `<li class="comment-pagination-item"><span class="inline-flex items-center justify-center md:size-10 size-9 text-light-disabled-text">...</span></li>`;
                    }
                }
                
                // Next
                pHTML += `
                    <li class="group comment-pagination-item">
                      <a href="javascript:void(0)" class="review-page-btn inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] group-hover:font-semibold bg-white cursor-pointer border border-gray-300 group-hover:border-primary group-hover:bg-[rgba(0,171,85,0.08)] transition-colors duration-300 ease-in-out ${currentReviewPage === totalPages ? 'opacity-50 pointer-events-none' : ''}" data-page="${currentReviewPage + 1}">
                        <span class="inline-flex items-center justify-center">
                          <i class="hgi hgi-stroke hgi-arrow-right-01 text-[20px] leading-5 group-hover:font-semibold text-light-primary-text group-hover:text-primary"></i>
                        </span>
                      </a>
                    </li>
                `;
                
                paginationContainer.innerHTML = pHTML;
                
                // Bind events
                paginationContainer.querySelectorAll('.review-page-btn').forEach(btn => {
                    btn.addEventListener('click', function() {
                        const page = parseInt(this.getAttribute('data-page'));
                        if (page && page !== currentReviewPage && page >= 1 && page <= totalPages) {
                            currentReviewPage = page;
                            window.renderReviewPage();
                            // scroll to reviews top
                            const tabs = document.getElementById("product-details-tabs");
                            if (tabs) tabs.scrollIntoView({ behavior: 'smooth' });
                        }
                    });
                });
            }
        }
    }
})();
