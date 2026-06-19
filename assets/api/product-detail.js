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

            const dataAttr = opt.isBase ? 'data-is-base="true"' : 'data-variant-id="' + opt.id + '"';
            
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

                    pendingProduct = selectedOpt;
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

    function renderProductDetail(product, variants = []) {
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

        const wishlistBtn = document.getElementById("product-detail-wishlist-btn");
        if (wishlistBtn) {
            wishlistBtn.setAttribute("data-product-id", product.productId || product.id || "");
            if (product.variantId) {
                wishlistBtn.setAttribute("data-variant-id", product.variantId);
            } else {
                wishlistBtn.removeAttribute("data-variant-id");
            }
        }

        // Guarantee we get a valid ID (Fallback to URL if API response lacks it)
        const urlParams = new URLSearchParams(window.location.search);
        const validProductId = product.productId || product.id || product._id || urlParams.get("id") || "";

        // Apply ID to ALL add to cart & buy now buttons (main page + quick view sidebar)
        const btnSections = document.querySelectorAll(".product-add-to-cart-btn-section");
        btnSections.forEach(section => {
            const addToCartBtn = section.querySelector(".add-to-cart-btn, .btn-primary");
            if (addToCartBtn) {
                addToCartBtn.classList.add("add-to-cart-btn");
                addToCartBtn.setAttribute("data-product-id", validProductId);
                if (product.variantId) {
                    addToCartBtn.setAttribute("data-variant-id", product.variantId);
                } else {
                    addToCartBtn.removeAttribute("data-variant-id");
                }
            }
            const buyNowBtn = section.querySelector(".buy-now-btn, .btn-warning");
            if (buyNowBtn) {
                buyNowBtn.classList.add("buy-now-btn");
                buyNowBtn.setAttribute("data-product-id", validProductId);
                if (product.variantId) {
                    buyNowBtn.setAttribute("data-variant-id", product.variantId);
                } else {
                    buyNowBtn.removeAttribute("data-variant-id");
                }
            }
            const qtyInput = section.querySelector(".quantity-input");
            if (qtyInput) qtyInput.value = "1";
        });

        renderProductColor(product, variants);
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
            renderProductDetail(product, variants);
            renderProductSliders(product);
            initReviews(productId);
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

                const variantId = buyNowBtn.getAttribute("data-variant-id") || "";
                let quantity = 1;
                const container = buyNowBtn.closest(".product-add-to-cart-btn-section") || buyNowBtn.closest(".quick-view-sidebar") || document;
                const quantityInput = container.querySelector(".quantity-input");
                
                if (quantityInput) {
                    quantity = parseInt(quantityInput.value) || 1;
                }

                const formData = new FormData();
                formData.append("productId", productId);
                formData.append("quantity", quantity);
                if (variantId && variantId !== "undefined" && variantId !== "null") {
                    formData.append("variantId", variantId);
                }

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
