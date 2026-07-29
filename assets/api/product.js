(function () {
    const API_BASE = typeof domin !== "undefined" ? domin : "https://ecommerce-backend.workarya.com";
    const PAGE_SIZE = 20;

    let globalVariants = [];
    let variantsPromise = fetch(API_BASE + "/api/variant/getallvariants")
        .then(res => res.json())
        .then(res => res?.data || res?.value?.data || [])
        .catch(err => {
            console.error("Variants fetch error:", err);
            return [];
        });

    let globalColors = new Map();
    let colorsPromise = fetch(API_BASE + "/api/colors/get-all")
        .then(res => res.json())
        .then(res => {
            const colors = res?.data || res?.value?.data || [];
            colors.forEach(color => globalColors.set(String(color.id), color.colorCode));
        })
        .then(res => res?.data || res?.value?.data || [])
        .catch(err => {
            console.error("Variants fetch error:", err);
            return [];
        });

    const SORT_MAP = {
        popularity: "popularity",
        "low-to-high-price": "price_low",
        "high-to-low-price": "price_high",
        "avarage-rating": "rating",
        "a-z-order": "name_asc",
        "z-a-order": "name_desc",
        discount_high: "discount_high",
    };

    const DISCOUNT_OPTIONS = [5, 10, 15, 20, 25, 30];

    const shopState = {
        page: 1,
        pageSize: PAGE_SIZE,
        sortBy: "popularity",
        searchQuery: "",
        categorySlugs: [],
        categoryPath: [],
        brandSlugs: [],
        colorSlugs: [],
        sizeSlugs: [],
        discountPercents: [],
        minPrice: null,
        maxPrice: null,
        hasDiscount: false,
    };

    document.addEventListener("DOMContentLoaded", function () {
        // Setup card color swatch clicks globally
        document.body.addEventListener("click", function (e) {
            const swatch = e.target.closest(".card-color-swatch");
            if (!swatch) return;

            e.preventDefault();
            e.stopPropagation();

            const card = swatch.closest(".product-card-1");
            if (!card) return;

            // Update active class
            const swatches = card.querySelectorAll(".card-color-swatch");
            swatches.forEach(function (s) { s.classList.remove("ring-2", "ring-primary", "ring-offset-1", "active-swatch"); });
            swatch.classList.add("ring-2", "ring-primary", "ring-offset-1", "active-swatch");

            // Update image
            const img = card.querySelector(".product-image-container img");
            if (img && swatch.getAttribute("data-image") && swatch.getAttribute("data-image") !== "undefined") {
                img.src = swatch.getAttribute("data-image");
            }

            // Update price
            const currentPrice = card.querySelector(".current-price");
            if (currentPrice) currentPrice.textContent = swatch.getAttribute("data-price");

            const oldPrice = card.querySelector(".old-price");
            if (oldPrice) {
                const mrpText = swatch.getAttribute("data-mrp");
                const priceText = swatch.getAttribute("data-price");
                
                const mrpVal = parseFloat((mrpText || "0").replace(/[^\d.-]/g, ''));
                const priceVal = parseFloat((priceText || "0").replace(/[^\d.-]/g, ''));
                
                if (mrpVal > priceVal) {
                    oldPrice.textContent = mrpText;
                    oldPrice.style.display = "inline-block";
                    
                } else {
                    oldPrice.style.display = "none";
                }
            }

            const discountBadge = card.querySelector(".discount-percentage, .product-discount-badge");
            if (discountBadge) {
                const discount = parseInt(swatch.getAttribute("data-discount")) || 0;
                if (discount > 0) {
                    discountBadge.textContent = discount + "% OFF";
                    discountBadge.style.display = "inline-block";
                } else {
                    discountBadge.style.display = "none";
                }
            }

            // Update variant ID on buttons
            const variantId = swatch.getAttribute("data-variant-id");
            const addToCartBtn = card.querySelector(".add-to-cart-btn");
            if (addToCartBtn) addToCartBtn.setAttribute("data-variant-id", variantId || "");
            
            const addToWishlistBtn = card.querySelector(".add-to-wishlist-btn");
            if (addToWishlistBtn) addToWishlistBtn.setAttribute("data-variant-id", variantId || "");
        });

        if (document.getElementById("product-grid")) {
            initShopPage();
        }
if (document.getElementById("top-discounted-products")) {
            loadTopDiscountedProducts();
        }
        if (document.getElementById("cart-latest-products-slider")) {
            window.addEventListener("load", loadCartLatestProducts);
        }
        initQuickView();
        
    });

    function parseList(result) {
        if (Array.isArray(result)) return result;
        if (Array.isArray(result?.value?.data)) return result.value.data;
        if (Array.isArray(result?.data)) return result.data;
        if (Array.isArray(result?.value)) return result.value;
        if (Array.isArray(result?.products)) return result.products;
        return [];
    }

    function parsePaginated(result) {
        if (Array.isArray(result?.data)) {
            return {
                items: result.data,
                total: result.total ?? result.data.length,
                page: result.page ?? shopState.page,
                pageSize: result.pageSize ?? shopState.pageSize,
            };
        }

        const payload = result?.value?.data ?? result?.value ?? result;
        const items = Array.isArray(payload)
            ? payload
            : payload?.items || payload?.products || payload?.data || [];

        return {
            items: Array.isArray(items) ? items : [],
            total:
                result?.total ??
                payload?.totalCount ??
                payload?.total ??
                result?.value?.totalCount ??
                (Array.isArray(items) ? items.length : 0),
            page: result?.page ?? payload?.page ?? payload?.currentPage ?? shopState.page,
            pageSize: result?.pageSize ?? payload?.pageSize ?? shopState.pageSize,
        };
    }

    function buildFilterQuery(state) {
        const params = new URLSearchParams();

        state.categorySlugs.forEach(function (slug) {
            params.append("categorySlugs", slug);
        });
        state.brandSlugs.forEach(function (slug) {
            params.append("brandSlugs", slug);
        });
        state.colorSlugs.forEach(function (slug) {
            params.append("colorSlugs", slug);
        });
        state.sizeSlugs.forEach(function (slug) {
            params.append("sizeSlugs", slug);
        });
        state.discountPercents.forEach(function (value) {
            params.append("discountPercents", value);
        });

        if (state.minPrice !== null && state.minPrice !== "") {
            params.append("minPrice", state.minPrice);
        }
        if (state.maxPrice !== null && state.maxPrice !== "") {
            params.append("maxPrice", state.maxPrice);
        }
        if (state.hasDiscount) {
            params.append("hasDiscount", "true");
        }
        if (state.sortBy) {
            params.append("sortBy", state.sortBy);
        }

        params.append("page", state.page);
        params.append("pageSize", state.pageSize);

        return params.toString();
    }

    async function fetchFilteredProducts(state) {
        const query = buildFilterQuery(state);
        const response = await fetch(API_BASE + "/api/product/filter?" + query);

        if (!response.ok) {
            throw new Error("Filter request failed: " + response.status);
        }

        return parsePaginated(await response.json());
    }

    async function fetchSearchProducts(query, page, pageSize, sortBy) {
        const params = new URLSearchParams({
            q: query,
            page: String(page || 1),
            pageSize: String(pageSize || PAGE_SIZE),
        });

        if (sortBy) {
            params.append("sortBy", sortBy);
        }

        const response = await fetch(API_BASE + "/api/product/search?" + params.toString());

        if (!response.ok) {
            throw new Error("Search request failed: " + response.status);
        }

        return parsePaginated(await response.json());
    }

    function formatPrice(value) {
        const amount = Number(value);
        if (Number.isNaN(amount)) return "₹0";
        return "₹" + amount.toLocaleString("en-IN");
    }

    function getProductImage(product) {
        return (
            product.productImageUrl ||
            product.imageUrl ||
            product.image ||
            product.thumbnail ||
            "assets/images/vitamin-c.png"
        );
    }

    function getDiscountLabel(product) {
        const discount =
            product.discountPrice ??
            product.discountPercent ??
            product.discountPercentage ??
            0;

        if (!discount) return "";
        return Math.round(Number(discount)) + "% OFF";
    }

    function renderProductCard(product, index) {
        const delay = ((index % 4) + 2) * 0.1;
        const productId = product.id || product.productId || "";
        const variantId = product.variantId || "";
        const productName = product.productName || product.name || "Product";
        const displayProductName = truncateProductName(productName);
        
        const salePrice = product.salePrice ?? product.price ?? product.basePrice ?? 0;
        const mrp = product.mrp ?? product.originalPrice ?? salePrice;
        const discountLabel = getDiscountLabel(product);
        const detailUrl = productId
            ? "product-detail.php?id=" + productId
            : "product-detail.php";
            
        const variants = globalVariants.filter(v => String(v.productId) === String(productId) && v.isActive !== false);

        const allColors = [];
        if (product.colorName || product.colorCode || product.hexCode || product.color || product.color_name || product.color_code || product.hex_code) {
            allColors.push({
                colorCode: product.colorCode || product.hexCode || product.color_code || product.hex_code || product.colorName || product.color_name || product.color || "#cccccc",
                colorName: product.colorName || product.color_name || product.color || "Default",
                imageUrl: getProductImage(product),
                salePrice: salePrice,
                mrp: mrp,
                discountPercent: getDiscountPercent(product),
                variantId: variantId
            });
        }
        
        variants.forEach(function(v) {
            if (typeof v === 'string') {
                allColors.push({ colorCode: v, colorName: v, imageUrl: getProductImage(product), salePrice: salePrice, mrp: mrp, discountPercent: getDiscountPercent(product), variantId: variantId });
            } else if (v && (v.colorName || v.colorCode || v.hexCode || v.color || v.color_name || v.color_code || v.hex_code)) {
                const vSalePrice = v.salePrice ?? v.price ?? v.basePrice ?? salePrice;
                const vMrp = v.mrp ?? v.originalPrice ?? vSalePrice;
                let vDiscount = v.discountPrice ?? v.discountPercent ?? v.discountPercentage ?? 0;
                if (!vDiscount && vMrp > vSalePrice) vDiscount = Math.round(((vMrp - vSalePrice) / vMrp) * 100);

                allColors.push({
                    colorCode: v.colorCode || v.hexCode || v.color_code || v.hex_code || v.colorName || v.color_name || v.color || "#cccccc",
                    colorName: v.colorName || v.color_name || v.color || "Variant",
                    imageUrl: v.variantImageUrl || v.imageUrl || v.image || getProductImage(product),
                    salePrice: vSalePrice,
                    mrp: vMrp,
                    discountPercent: Math.round(Number(vDiscount)) || 0,
                    variantId: v.id || v.variantId || variantId
                });
            }
        });
        
        if (Array.isArray(product.colors)) {
            product.colors.forEach(function(c) {
                if (typeof c === 'string') {
                    allColors.push({ colorCode: c, colorName: c, imageUrl: getProductImage(product), salePrice: salePrice, mrp: mrp, discountPercent: getDiscountPercent(product), variantId: variantId });
                } else if (c && (c.colorCode || c.hexCode || c.colorName || c.color || c.color_code || c.hex_code || c.color_name)) {
                    const cSalePrice = c.salePrice ?? c.price ?? c.basePrice ?? salePrice;
                    const cMrp = c.mrp ?? c.originalPrice ?? cSalePrice;
                    let cDiscount = c.discountPrice ?? c.discountPercent ?? c.discountPercentage ?? 0;
                    if (!cDiscount && cMrp > cSalePrice) cDiscount = Math.round(((cMrp - cSalePrice) / cMrp) * 100);

                    allColors.push({
                        colorCode: c.colorCode || c.hexCode || c.color_code || c.hex_code || c.colorName || c.color_name || c.color || "#cccccc",
                        colorName: c.colorName || c.color_name || c.color || "Variant",
                        imageUrl: c.variantImageUrl || c.imageUrl || c.image || getProductImage(product),
                        salePrice: cSalePrice,
                        mrp: cMrp,
                        discountPercent: Math.round(Number(cDiscount)) || 0,
                        variantId: c.id || c.variantId || variantId
                    });
                }
            });
        }

        const uniqueColors = [];
        const seenColors = new Set();
        allColors.forEach(function(c) {
            let code = String(c.colorCode).toLowerCase().replace(/\s+/g, '');
            if (code === "default") code = "#cccccc";
            if (!seenColors.has(code)) {
                seenColors.add(code);
                c.colorCode = code;
                uniqueColors.push(c);
            }
        });

        let colorsHtml = '';
        if (uniqueColors.length > 0) {
            colorsHtml = '<div class="product-colors flex items-center flex-wrap gap-2 mt-1 mb-3" onclick="event.preventDefault();">';
            uniqueColors.forEach(function(color, idx) {
                const activeClass = idx === 0 ? "ring-2 ring-primary ring-offset-1 active-swatch" : "";
                colorsHtml += '<button type="button" title="' + String(color.colorName).replace(/"/g, '&quot;') + '" ' +
                    'class="card-color-swatch w-5 h-5 rounded-full border border-gray-300 shadow-sm ' + activeClass + '" ' +
                    'style="background-color: ' + color.colorCode + ';" ' +
                    'data-image="' + String(color.imageUrl).replace(/"/g, '&quot;') + '" ' +
                    'data-price="' + formatPrice(color.salePrice) + '" ' +
                    'data-mrp="' + formatPrice(color.mrp) + '" ' +
                    'data-discount="' + color.discountPercent + '" ' +
                    'data-variant-id="' + color.variantId + '"></button>';
            });
            colorsHtml += '</div>';
        }

        const hoverActionsHtml = '<div class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">' +
            '<ul class="flex items-center gap-x-px">' +
            '<li>' +
            '<a aria-label="Add to Wishlist" class="add-to-wishlist-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5" href="javascript:void(0)" data-product-id="' + productId + '" data-variant-id="' + variantId + '">' +
            '<i class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>' +
            '</a></li>' +
            '<li>' +
            '<a aria-label="Compare" class="add-to-compare-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5" href="javascript:void(0)" data-product-id="' + productId + '" data-variant-id="' + variantId + '">' +
            '<i class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>' +
            '</a></li>' +
            '<li>' +
            '<a aria-label="Quick view" class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5" href="#" data-product-id="' + productId + '">' +
            '<i class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>' +
            '</a></li>' +
            '</ul></div>';

        return (
            '<div class="2xl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp" data-wow-delay=".' +
            delay +
            's">' +
            '<div class="border border-gray-300 rounded-2xl product-card-1 p-4 group h-full flex flex-col">' +
            '<div class="product-image-container relative">' +
            '<div class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden">' +
            '<a href="' +
            detailUrl +
            '">' +
            '<img src="' +
            getProductImage(product) +
            '" alt="' +
            productName +
            '" class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />' +
            "</a></div>" +
            hoverActionsHtml +
            "</div>" +
            '<div class="product-content flex-1 flex flex-col">' +
            '<h5 class="text-base leading-6 font-semibold font-dm-sans mb-4">' +
            '<a href="' + detailUrl + '" title="' + String(productName).replace(/"/g, '&quot;') + '">' +
            displayProductName +
            "</a></h5>" +
            '<div class="rating-section flex items-center mb-4">' +
            '<div class="bg-[url(\'../images/star-icon.png\')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">' +
            '<div style="width: 80%" class="bg-[url(\'../images/star-icon.png\')] h-4.5 bg-repeat-x bg-position-[0_-18px]"></div>' +
            "</div>" +
            '<span class="text-sm leading-[22px] font-normal inline-block ml-1">(0)</span>' +
            "</div>" +
            '<div class="price-section flex items-center gap-x-3 mb-2">' +
            '<span class="current-price text-base font-semibold text-light-primary-text">' +
            formatPrice(salePrice) +
            "</span>" +
            (mrp > salePrice
                ? '<span class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through">' +
                  formatPrice(mrp) +
                  "</span>"
                : "") +
            (discountLabel
                ? '<span class="discount-percentage text-sm leading-[22px] font-semibold text-error">' +
                  discountLabel +
                  "</span>"
                : "") +
            "</div>" +
            colorsHtml +
            '<div class="btn-section flex items-center gap-x-4 mt-auto">' +
            '<a class="add-to-wishlist-btn size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300" href="javascript:void(0)" data-product-id="' + productId + '" data-variant-id="' + variantId + '">' +
            '<i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i></a>' +
            ((product.stock != null && parseInt(product.stock, 10) <= 0)
                ? '<button type="button" disabled class="btn btn-secondary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1 cursor-not-allowed opacity-75 text-white">Out of Stock</button>'
                : '<a class="add-to-cart-btn btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1" href="javascript:void(0)" data-product-id="' + productId + '"><i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white me-1"></i><span>Add to Cart</span></a>'
            ) +
            "</div> </div></div></div>"
        );
    }

    function renderProducts(items) {
        const grid = document.getElementById("product-grid");
        if (!grid) return;

        if (!items.length) {
            grid.innerHTML =
                '<div class="col-span-12 text-center py-16"><p class="text-light-secondary-text text-lg">No products found.</p></div>';
            return;
        }

        grid.innerHTML = items.map(renderProductCard).join("");
    }

    function getProductImages(product, baseProduct) {
        const images = [];
        const mainImg = product.variantImageUrl || product.productImageUrl || product.imageUrl || product.image;

        if (mainImg) {
            images.push(mainImg);
        }

        (product.galleryImages || []).forEach(function (image) {
            if (image && !images.includes(image)) {
                images.push(image);
            }
        });

        if (!images.length && baseProduct) {
            return getProductImages(baseProduct);
        }

        if (!images.length) {
            images.push("assets/images/vitamin-c.png");
        }

        return images;
    }

    function resolveQuickViewColorCode(opt) {
        const candidates = [
            opt.colorCode,
            opt.hexCode,
            opt.color,
            opt.colorName,
            opt.color_name,
            opt.color_code,
            opt.hex_code,
            opt.id,
            opt.variantId
        ].filter(Boolean).map(String);

        for (const value of candidates) {
            const normalized = value.trim();
            if (!normalized) continue;
            if (/^\d+$/.test(normalized) && globalColors.has(normalized)) {
                return globalColors.get(normalized);
            }
            if (/^#(?:[0-9a-f]{3}|[0-9a-f]{6}|[0-9a-f]{8})$/i.test(normalized)) {
                return normalized;
            }
            if (/^[a-z]+$/i.test(normalized)) {
                return normalized;
            }
            if (globalColors.has(normalized)) {
                return globalColors.get(normalized);
            }
        }

        return "#cccccc";
    }

    function buildQuickViewColorSwatches(product, variants) {
        const salePrice = product.salePrice ?? product.price ?? product.basePrice ?? 0;
        const mrp = product.mrp ?? product.originalPrice ?? salePrice;

        const allOptions = [];

        // Add base product as the first option
        allOptions.push({
            ...product,
            isBase: true,
            displayColorName: product.colorName || "Default",
            gallery: getProductImages(product),
            salePrice: salePrice,
            mrp: mrp,
            discountPercent: getDiscountPercent(product),
            id: product.variantId || ""
        });

        // Add variants
        variants.forEach(function(v) {
            if (v && (v.colorName || v.colorCode || v.hexCode || v.color)) {
                allOptions.push({
                    ...v,
                    isBase: false,
                    displayColorName: v.colorName || "Variant",
                    gallery: getProductImages(v, product),
                    salePrice: v.salePrice ?? v.price ?? v.basePrice ?? salePrice,
                    mrp: v.mrp ?? v.originalPrice ?? (v.salePrice ?? v.price ?? v.basePrice ?? salePrice),
                    discountPercent: getDiscountPercent(v)
                });
            }
        });

        // Remove duplicates based on color code
        const uniqueOptions = [];
        const seenColors = new Set();
        allOptions.forEach(function(opt) {
            let colorCode = String(opt.hexCode || opt.colorCode || opt.color || opt.displayColorName).toLowerCase().replace(/\s+/g, '');
            if (colorCode === "default") colorCode = "#cccccc";
            if (!seenColors.has(colorCode)) {
                seenColors.add(colorCode);
                opt.colorCode = colorCode;
                uniqueOptions.push(opt);
            }
        });

        if (uniqueOptions.length <= 1) {
            return { html: '', options: [] };
        }

        let html = "";
        uniqueOptions.forEach(function(opt, idx) {
            const isActive = idx === 0;
            const dataAttr = opt.isBase ? 'data-is-base="true"' : 'data-variant-id="' + opt.id + '"';
            
            const colorCode = resolveQuickViewColorCode(opt);
            
            let buttonClasses = "quick-view-color-swatch variant-color-btn cursor-pointer flex items-center justify-center rounded-full size-10 border transition-all ";
            buttonClasses += isActive ? "border-primary ring-2 ring-primary ring-offset-2" : "border-gray-300 hover:border-primary";
            let buttonStyle = 'style="background-color: ' + colorCode + ';"';

            html += 
                '<div class="color-variation-item">' +
                '<button type="button" ' + dataAttr + ' title="' + escapeHtmlAttr(opt.displayColorName) + '" class="' + buttonClasses + '" ' + buttonStyle + ' data-gallery=\'' + escapeHtmlAttr(JSON.stringify(opt.gallery)) + '\' ' +
                'data-price="' + escapeHtmlAttr(formatPrice(opt.salePrice)) + '" ' +
                'data-mrp="' + escapeHtmlAttr(formatPrice(opt.mrp)) + '" ' +
                'data-discount="' + opt.discountPercent + '"></button></div>';
        });

        return { html: html, options: uniqueOptions };
    }

    function handleQuickViewSwatchClick(swatch) {
        const sidebar = swatch.closest(".quick-view-sidebar");
        if (!sidebar) return;

        // Update active class for swatches
        sidebar.querySelectorAll(".quick-view-color-swatch").forEach(s => s.classList.remove("border-primary", "ring-2", "ring-primary", "ring-offset-2"));
        swatch.classList.add("border-primary", "ring-2", "ring-primary", "ring-offset-2");

        // Update image gallery
        const imagesWrapper = sidebar.querySelector(".product-images-wrapper .space-y-4");
        if (imagesWrapper) {
            try {
                const gallery = JSON.parse(swatch.dataset.gallery || "[]");
                imagesWrapper.innerHTML = gallery.map(img => `<img class="max-h-[300px] w-full rounded-xl object-contain bg-[#F4F3F5]" src="${img}" alt="product-image" />`).join("");
            } catch (e) {
                console.error("Failed to parse gallery data:", e);
            }
        }

        // Update price
        const currentPriceEl = sidebar.querySelector(".current-price");
        if (currentPriceEl) currentPriceEl.textContent = swatch.dataset.price;

        const oldPriceEl = sidebar.querySelector(".old-price");
        if (oldPriceEl) {
            const mrpVal = parseFloat((swatch.dataset.mrp || "0").replace(/[^\d.-]/g, ''));
            const priceVal = parseFloat((swatch.dataset.price || "0").replace(/[^\d.-]/g, ''));
            oldPriceEl.textContent = mrpVal > priceVal ? swatch.dataset.mrp : "";
            oldPriceEl.style.display = mrpVal > priceVal ? "inline-block" : "none";
            oldPriceEl.style.textDecoration = mrpVal > priceVal ? "line-through" : "none";
        }

        const discountBadge = sidebar.querySelector(".product-discount-badge");
        if (discountBadge) {
            const discount = parseInt(swatch.dataset.discount) || 0;
            discountBadge.textContent = discount > 0 ? discount + "% OFF" : "";
            discountBadge.style.display = discount > 0 ? "inline-block" : "none";
        }
    }

    function initQuickView() {
        document.body.addEventListener("click", async function (e) {
            const btn = e.target.closest(".quick-view-sidebar-btn");
            if (!btn) return;
            e.preventDefault();

            const productId = btn.getAttribute("data-product-id");
            if (!productId) return;

            const sidebar = document.querySelector(".quick-view-sidebar");
            const overlay = document.querySelector(".modal-overlay");
            if (!sidebar || !overlay) return;

            const openFor = overlay.getAttribute("data-overlay-for");
            if (openFor) {
                const openSidebar = document.querySelector(openFor);
                if (openSidebar) openSidebar.setAttribute("data-state", "close");
            }

            sidebar.setAttribute("data-state", "open");
            document.body.classList.add("overflow-hidden", "scrollbar-offset");
            if (typeof jQuery !== "undefined") {
                jQuery(overlay).fadeIn();
            } else {
                overlay.classList.remove("hidden");
            }
            overlay.setAttribute("data-overlay-for", ".quick-view-sidebar");

            const titleEl = sidebar.querySelector("h4");
            if (titleEl) titleEl.textContent = "Loading...";

            // Clear previous variant info
            const colorSection = sidebar.querySelector(".color-variation-section");
            if (colorSection) {
                colorSection.classList.add("hidden");
                colorSection.querySelector(".color-variation-items").innerHTML = "";
            }

            try {
                await Promise.all([variantsPromise, colorsPromise]);
                const response = await fetch(API_BASE + "/api/product/getproductbyid/" + encodeURIComponent(productId));
                if (!response.ok) throw new Error("HTTP Error: " + response.status);
                const result = await response.json();
                let product = result?.data || (result?.value?.data && typeof result.value.data === "object" ? result.value.data : null);
                
                if (product) {
                    if (titleEl) titleEl.textContent = truncateProductName(product.productName || product.name || "Product");
                    const salePrice = product.salePrice ?? product.price ?? product.basePrice ?? 0;
                    const mrp = product.mrp ?? product.originalPrice ?? salePrice;
                    let discountPercent = product.discountPrice ?? product.discountPercent ?? product.discountPercentage ?? 0;
                    discountPercent = Math.round(Number(discountPercent)) || 0;

                    const currentPriceEl = sidebar.querySelector(".current-price");
                    if (currentPriceEl) currentPriceEl.textContent = formatPrice(salePrice);
                    
                    const oldPriceEl = sidebar.querySelector(".old-price");
                    if (oldPriceEl) {
                        oldPriceEl.textContent = mrp > salePrice ? formatPrice(mrp) : "";
                        oldPriceEl.style.display = mrp > salePrice ? "inline-block" : "none";
                        oldPriceEl.style.textDecoration = mrp > salePrice ? "line-through" : "none";
                    }
                    
                    const discountBadgeEls = sidebar.querySelectorAll(".product-discount-badge");
                    discountBadgeEls.forEach(el => {
                        el.textContent = discountPercent > 0 ? discountPercent + "% OFF" : "";
                        el.style.display = discountPercent > 0 ? "inline-block" : "none";
                    });

                    const imagesWrapper = sidebar.querySelector(".product-images-wrapper .space-y-4");
                    if (imagesWrapper) {
                        imagesWrapper.innerHTML = getProductImages(product).map(img => `<img class="max-h-[300px] w-full rounded-xl object-contain bg-[#F4F3F5]" src="${img}" alt="product-image" />`).join("");
                    }
                    const descEl = sidebar.querySelector(".accordion-body");
                    if (descEl) descEl.innerHTML = product.description || product.shortDescription || '<p class="text-light-secondary-text">No description available.</p>';

                    const colorSection = sidebar.querySelector(".color-variation-section");
                    const variants = globalVariants.filter(v => String(v.productId) === String(product.id || product.productId));
                    const { html: colorSwatchesHtml, options: uniqueOptions } = buildQuickViewColorSwatches(product, variants);

                    if (colorSection && colorSwatchesHtml) {
                        colorSection.classList.remove("hidden");
                        const selectedColorEl = colorSection.querySelector(".color-variation-selected-color");
                        if (selectedColorEl) {
                            selectedColorEl.textContent = uniqueOptions.length ? uniqueOptions[0].displayColorName : (product.colorName || "");
                        }
                        const itemsContainer = colorSection.querySelector(".color-variation-items");
                        if (itemsContainer) {
                            itemsContainer.innerHTML = colorSwatchesHtml;
                            
                            itemsContainer.addEventListener('click', function(e) {
                                const swatch = e.target.closest('.quick-view-color-swatch');
                                if (!swatch) return;

                                handleQuickViewSwatchClick(swatch);

                                const variantId = swatch.dataset.variantId || "";
                                const addToCartBtn = sidebar.querySelector(".add-to-cart-btn");
                                if (addToCartBtn) addToCartBtn.setAttribute("data-variant-id", variantId);
                                
                                const buyNowBtn = sidebar.querySelector(".buy-now-btn");
                                if (buyNowBtn) buyNowBtn.setAttribute("data-variant-id", variantId);

                                const selectedColorEl = colorSection.querySelector(".color-variation-selected-color");
                                if (selectedColorEl) {
                                    selectedColorEl.textContent = swatch.getAttribute('title') || '';
                                }
                            });
                        }
                    }

                    const sizeSection = sidebar.querySelector(".size-variation-section");
                    if (sizeSection) {
                        const sizeNames = product.sizeNames || [];
                        const sizeIds = Array.isArray(product.sizes) ? product.sizes : [];
                        if (!sizeNames.length) {
                            sizeSection.classList.add("hidden");
                        } else {
                            sizeSection.classList.remove("hidden");
                            const selectedSize = sizeSection.querySelector(".size-variation-selected-size");
                            if (selectedSize) selectedSize.textContent = sizeNames[0];
                            const items = sizeSection.querySelector(".size-variation-items");
                            if (items) {
                                items.innerHTML = sizeNames
                                    .map(function (size, index) {
                                        const sizeId = sizeIds[index] != null ? sizeIds[index] : "";
                                        const isActive = index === 0;
                                        return (
                                            '<div class="size-variation-item">' +
                                            '<button type="button" data-size-text="' +
                                            size +
                                            '" data-size-id="' +
                                            sizeId +
                                            '" class="size-variant-btn cursor-pointer flex items-center justify-center text-sm leading-6 px-[38px] py-1.5 font-semibold border rounded-[100px] ' +
                                            (isActive
                                                ? "border-primary bg-primary text-white hover:bg-primary"
                                                : "text-light-primary-text border-gray-300 hover:bg-[rgba(145,158,171,0.08)]") +
                                            '">' +
                                            size +
                                            "</button></div>"
                                        );
                                    })
                                    .join("");

                                items.querySelectorAll(".size-variant-btn").forEach(function (btn) {
                                    btn.addEventListener("click", function (e) {
                                        e.preventDefault();
                                        items.querySelectorAll(".size-variant-btn").forEach(function (item) {
                                            item.classList.remove(
                                                "border-primary",
                                                "bg-primary",
                                                "text-white"
                                            );
                                            item.classList.add("text-light-primary-text", "border-gray-300");
                                        });
                                        btn.classList.add("border-primary", "bg-primary", "text-white");
                                        btn.classList.remove("text-light-primary-text", "border-gray-300");
                                        const sizeLabel = sizeSection.querySelector(
                                            ".size-variation-selected-size"
                                        );
                                        if (sizeLabel) {
                                            sizeLabel.textContent =
                                                btn.getAttribute("data-size-text") ||
                                                btn.textContent.trim();
                                        }
                                    });
                                });
                            }
                        }
                    }
                    
                    const btnSection = sidebar.querySelector(".product-add-to-cart-btn-section");
                    if (btnSection) {
                        const addToCartBtn = btnSection.querySelector(".btn-primary");
                        if (addToCartBtn) {
                            addToCartBtn.classList.add("add-to-cart-btn");
                            addToCartBtn.setAttribute("data-product-id", product.id || product.productId || "");
                        }
                        const buyNowBtn = btnSection.querySelector(".btn-warning");
                        if (buyNowBtn) {
                            buyNowBtn.classList.add("buy-now-btn");
                            buyNowBtn.setAttribute("data-product-id", product.id || product.productId || "");
                        }
                        const qtyInput = btnSection.querySelector(".quantity-input");
                        if (qtyInput) qtyInput.value = "1";
                    } else {
                        const addToCartBtn = sidebar.querySelector(".add-to-cart-btn");
                        if (addToCartBtn) {
                            addToCartBtn.setAttribute("data-product-id", product.id || product.productId || "");
                        }
                    }
                }
            } catch (error) {
                console.error("Quick view error:", error);
                if (titleEl) titleEl.textContent = "Error loading product details.";
            }
        });
    }

    function updateResultsCount(items, total, page, pageSize) {
        const el = document.getElementById("shop-results-count");
        if (!el) return;

        if (!total) {
            el.textContent = "No results found";
            return;
        }

        const start = (page - 1) * pageSize + 1;
        const end = Math.min(page * pageSize, total);
        el.textContent = "Showing " + start + "-" + end + " of " + total + " results";
    }

    function renderPagination(total, page, pageSize) {
        const container = document.getElementById("shop-pagination");
        if (!container) return;

        const totalPages = Math.max(1, Math.ceil(total / pageSize));
        if (totalPages <= 1) {
            container.innerHTML = "";
            return;
        }

        let html = "";

        html +=
            '<li class="group blog-pagination-item">' +
            '<a href="#" data-page="' +
            (page - 1) +
            '" class="shop-page-btn inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] bg-white cursor-pointer border border-gray-300 ' +
            (page <= 1 ? "pointer-events-none opacity-50" : "") +
            '">' +
            '<span class="inline-flex items-center justify-center"><i class="hgi hgi-stroke hgi-arrow-left-01 text-[20px] leading-5 text-light-primary-text"></i></span>' +
            "</a></li>";

        for (let i = 1; i <= totalPages; i++) {
            if (i === 1 || i === totalPages || Math.abs(i - page) <= 1) {
                html +=
                    '<li class="group blog-pagination-item">' +
                    '<a href="#" data-page="' +
                    i +
                    '" class="shop-page-btn inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] ' +
                    (i === page
                        ? "active"
                        : "text-base leading-6 text-light-primary-text bg-white cursor-pointer border border-gray-300") +
                    '">' +
                    i +
                    "</a></li>";
            } else if (Math.abs(i - page) === 2) {
                html +=
                    '<li class="blog-pagination-item"><span class="inline-flex items-center justify-center md:size-10 size-9">...</span></li>';
            }
        }

        html +=
            '<li class="group blog-pagination-item">' +
            '<a href="#" data-page="' +
            (page + 1) +
            '" class="shop-page-btn inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] bg-white cursor-pointer border border-gray-300 ' +
            (page >= totalPages ? "pointer-events-none opacity-50" : "") +
            '">' +
            '<span class="inline-flex items-center justify-center"><i class="hgi hgi-stroke hgi-arrow-right-01 text-[20px] leading-5 text-light-primary-text"></i></span>' +
            "</a></li>";

        container.innerHTML = html;

        container.querySelectorAll(".shop-page-btn").forEach(function (btn) {
            btn.addEventListener("click", function (event) {
                event.preventDefault();
                const nextPage = Number(btn.getAttribute("data-page"));
                if (!nextPage || nextPage < 1 || nextPage > totalPages) return;
                shopState.page = nextPage;
                loadShopProducts();
                window.scrollTo({ top: 0, behavior: "smooth" });
            });
        });
    }

    async function loadShopProducts() {
        const grid = document.getElementById("product-grid");
        if (!grid) return;

        grid.innerHTML =
            '<div class="col-span-12 text-center py-16"><p class="text-light-secondary-text">Loading products...</p></div>';

        try {
            let result;

            if (shopState.searchQuery) {
                result = await fetchSearchProducts(
                    shopState.searchQuery,
                    shopState.page,
                    shopState.pageSize,
                    shopState.sortBy
                );
            } else {
                result = await fetchFilteredProducts(shopState);
            }

            globalVariants = await variantsPromise;

            renderProducts(result.items);
            updateResultsCount(
                result.items,
                result.total,
                result.page || shopState.page,
                result.pageSize || shopState.pageSize
            );
            renderPagination(
                result.total,
                result.page || shopState.page,
                result.pageSize || shopState.pageSize
            );

            if (typeof window.updateAllWishlistIcons === "function") {
                window.updateAllWishlistIcons();
            }
        } catch (error) {
            console.error("Product load error:", error);
            grid.innerHTML =
                '<div class="col-span-12 text-center py-16"><p class="text-error">Failed to load products. Please try again.</p></div>';
        }
    }

    function readCheckedValues(selector) {
        return Array.from(document.querySelectorAll(selector + " input[type=checkbox]:checked"))
            .map(function (input) {
                return input.value;
            })
            .filter(Boolean);
    }

    function readSelectedSlugs(selector) {
        return Array.from(document.querySelectorAll(selector + " button.active"))
            .map(function (button) {
                return button.getAttribute("data-slug");
            })
            .filter(Boolean);
    }

    function syncStateFromUI() {
        const checkedCategories = readCheckedValues("#filter-category-list");

        if (checkedCategories.length) {
            shopState.categorySlugs = checkedCategories;
        } else if (shopState.categoryPath.length) {
            shopState.categorySlugs = [
                shopState.categoryPath[shopState.categoryPath.length - 1],
            ];
        } else {
            shopState.categorySlugs = [];
        }

        shopState.brandSlugs = readCheckedValues("#filter-brand-list");
        shopState.discountPercents = readCheckedValues("#filter-discount-list");
        shopState.colorSlugs = readSelectedSlugs("#filter-color-list");
        shopState.sizeSlugs = readSelectedSlugs("#filter-size-list");
        shopState.hasDiscount = shopState.discountPercents.length > 0;

        const minInput = document.querySelector(".price-range-min-value");
        const maxInput = document.querySelector(".price-range-max-value");

        if (minInput && maxInput) {
            const minVal = Number(minInput.value);
            const maxVal = Number(maxInput.value);
            shopState.minPrice = Number.isNaN(minVal) ? null : minVal;
            shopState.maxPrice = Number.isNaN(maxVal) ? null : maxVal;
        }

        const sortSelect = document.getElementById("sorting");
        if (sortSelect) {
            const sortValue =
                typeof jQuery !== "undefined"
                    ? jQuery(sortSelect).val()
                    : sortSelect.value;
            shopState.sortBy = SORT_MAP[sortValue] || "popularity";
        }
    }

    function getSortSelectValue() {
        const sortSelect = document.getElementById("sorting");
        if (!sortSelect) return "popularity";
        const sortValue =
            typeof jQuery !== "undefined" ? jQuery(sortSelect).val() : sortSelect.value;
        return SORT_MAP[sortValue] || "popularity";
    }

    let sortApplyTimer;

    function applySort() {
        clearTimeout(sortApplyTimer);
        sortApplyTimer = setTimeout(function () {
            shopState.sortBy = getSortSelectValue();
            shopState.page = 1;
            loadShopProducts();
        }, 50);
    }

    function bindSortControl() {
        const sortSelect = document.getElementById("sorting");
        if (!sortSelect) return;

        if (typeof jQuery !== "undefined" && jQuery.fn.niceSelect) {
            const $sort = jQuery(sortSelect);
            const $nice = $sort.next(".nice-select");

            $sort.off("change.shopSort").on("change.shopSort", function () {
                applySort();
            });

            if ($nice.length) {
                $nice.off("click.shopSort").on("click.shopSort", ".option:not(.disabled)", function () {
                    setTimeout(applySort, 0);
                });
            }
        } else {
            sortSelect.removeEventListener("change", sortSelect._shopSortHandler);
            sortSelect._shopSortHandler = function () {
                applySort();
            };
            sortSelect.addEventListener("change", sortSelect._shopSortHandler);
        }
    }

    function debounce(fn, wait) {
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

    function bindFilterEvents() {
        const applyFilters = debounce(function () {
            syncStateFromUI();
            shopState.page = 1;
            shopState.searchQuery = "";
            loadShopProducts();
        }, 400);

        document
            .querySelectorAll(
                "#filter-category-list input, #filter-brand-list input, #filter-discount-list input"
            )
            .forEach(function (input) {
                input.addEventListener("change", function () {
                    if (this.closest('#filter-category-list')) {
                        const li = this.closest('li');
                        let childUl = null;
                        for (let i = 0; i < li.children.length; i++) {
                            if (li.children[i].tagName === 'UL') {
                                childUl = li.children[i];
                                break;
                            }
                        }
                        if (childUl) {
                            childUl.style.display = this.checked ? "flex" : "none";
                        }
                        
                        if (!this.checked) {
                            const childInputs = li.querySelectorAll("ul input[type=checkbox]");
                            childInputs.forEach(ci => {
                                ci.checked = false;
                                const cLi = ci.closest("li");
                                for (let j = 0; j < cLi.children.length; j++) {
                                    if (cLi.children[j].tagName === 'UL') {
                                        cLi.children[j].style.display = "none";
                                        break;
                                    }
                                }
                            });
                        }
                    }
                    applyFilters();
                });
            });

        document.querySelectorAll("#filter-color-list button, #filter-size-list button").forEach(
            function (button) {
                button.addEventListener("click", function (event) {
                    event.preventDefault();
                    button.classList.toggle("active");
                    button.classList.toggle("ring-2");
                    button.classList.toggle("ring-primary");
                    applyFilters();
                });
            }
        );

        const priceSlider = document.getElementById("price-range-slider");
        if (priceSlider && priceSlider.noUiSlider) {
            priceSlider.noUiSlider.on("change", applyFilters);
        }

        const clearAll = document.querySelector(".sidebar-title a");
        if (clearAll) {
            clearAll.addEventListener("click", function (event) {
                event.preventDefault();
                resetAllFilters();
                shopState.page = 1;
                shopState.searchQuery = "";
                loadShopProducts();
            });
        }
    }

    function resetAllFilters() {
        document
            .querySelectorAll(
                "#filter-category-list input, #filter-brand-list input, #filter-discount-list input"
            )
            .forEach(function (input) {
                input.checked = false;
            });

        document.querySelectorAll("#filter-color-list button, #filter-size-list button").forEach(
            function (button) {
                button.classList.remove("active", "ring-2", "ring-primary");
            }
        );

        const priceSlider = document.getElementById("price-range-slider");
        if (priceSlider && priceSlider.noUiSlider) {
            priceSlider.noUiSlider.set([0, 10000]);
        }

        shopState.categorySlugs = [];
        shopState.categoryPath = [];
        shopState.brandSlugs = [];
        shopState.colorSlugs = [];
        shopState.sizeSlugs = [];
        shopState.discountPercents = [];
        shopState.minPrice = null;
        shopState.maxPrice = null;
        shopState.hasDiscount = false;
    }

    function initPriceSlider() {
        const slider = document.getElementById("price-range-slider");
        if (!slider || slider.noUiSlider || typeof noUiSlider === "undefined") return;

        noUiSlider.create(slider, {
            start: [0, 10000],
            connect: true,
            range: {
                min: 0,
                max: 10000,
            },
            step: 100,
        });

        slider.noUiSlider.on("update", function (values) {
            const minInput = document.querySelector(".price-range-min-value");
            const maxInput = document.querySelector(".price-range-max-value");
            if (minInput) minInput.value = Number(values[0]).toFixed(0);
            if (maxInput) maxInput.value = Number(values[1]).toFixed(0);
        });
    }

    function isItemActive(item) {
        if (!item) return false;
        if (item.isActive === false || item.isActive === "false" || item.isActive === 0) return false;
        return true;
    }

    function renderCategoryTree(containerSelector, categories, selectedSlugs) {
        const container = document.querySelector(containerSelector);
        if (!container || !categories.length) return;

        const selected = selectedSlugs || [];

        function isAnyDescendantSelected(cat) {
            if (selected.includes(String(cat.slug))) return true;
            const children = cat.subCategories || cat.children || [];
            return children.some(isAnyDescendantSelected);
        }

        function buildTreeHTML(cats) {
            if (!cats || !cats.length) return "";
            return cats.filter(isItemActive).map(function(cat) {
                const label = cat.categoryName;
                const value = cat.slug;
                if (!value) return "";
                const checked = selected.includes(String(value)) ? "checked" : "";
                const children = cat.subCategories || cat.children || [];
                
                const hasChildren = children.length > 0;
                const expand = isAnyDescendantSelected(cat);
                
                const childrenHTML = hasChildren ? '<ul class="pl-6 flex-col gap-y-2 mt-2" style="display: ' + (expand ? 'flex' : 'none') + ';">' + buildTreeHTML(children) + '</ul>' : "";

                return (
                    '<li class="widget-category-content-list-items">' +
                    '<label class="group flex items-center justify-between w-full cursor-pointer">' +
                    '<span class="flex items-center gap-x-2">' +
                    '<span class="group-has-[input:checked]:group-hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out">' +
                    '<span class="relative inline-flex w-5 h-5 items-center justify-center">' +
                    '<input type="checkbox" value="' + value + '" class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all duration-300 ease-in-out" ' + checked + ' />' +
                    '<span class="absolute inset-0 inline-flex items-center justify-center text-white opacity-0 peer-checked:opacity-100 transition-all">' +
                    '<i class="hgi hgi-stroke hgi-tick-02 text-[18px] leading-[18px]"></i>' +
                    '</span></span></span>' +
                    '<span class="text-light-primary-text group-hover:text-primary transition-colors duration-300 ease-in-out">' +
                    label +
                    '</span></span></label>' +
                    childrenHTML +
                    '</li>'
                );
            }).join("");
        }

        container.innerHTML = buildTreeHTML(categories);
    }

    function renderCheckboxFilter(containerSelector, items, labelKey, valueKey, selectedSlugs) {
        const container = document.querySelector(containerSelector);
        if (!container || !items.length) return;

        const selected = selectedSlugs || [];

        container.innerHTML = items
            .filter(isItemActive)
            .map(function (item) {
                const label = item[labelKey];
                const value = item[valueKey];
                if (!value) return "";
                const checked = selected.includes(String(value)) ? "checked" : "";

                return (
                    '<li><label class="group flex items-center justify-between w-full cursor-pointer">' +
                    '<span class="flex items-center gap-x-2">' +
                    '<span class="group-has-[input:checked]:group-hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out">' +
                    '<span class="relative inline-flex w-5 h-5 items-center justify-center">' +
                    '<input type="checkbox" value="' +
                    value +
                    '" class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all duration-300 ease-in-out" ' +
                    checked +
                    " />" +
                    '<span class="absolute inset-0 inline-flex items-center justify-center text-white opacity-0 peer-checked:opacity-100 transition-all">' +
                    '<i class="hgi hgi-stroke hgi-tick-02 text-[18px] leading-[18px]"></i></span></span></span>' +
                    '<span class="text-light-primary-text group-hover:text-primary transition-colors duration-300 ease-in-out">' +
                    label +
                    "</span></span></label></li>"
                );
            })
            .join("");
    }

    function renderColorFilter(colors) {
        const container = document.querySelector("#filter-color-list");
        if (!container || !colors.length) return;

        container.innerHTML = colors
            .filter(isItemActive)
            .map(function (color) {
                const hex = color.colorCode || color.hexCode || "#00AB55";
                const slug = color.slug;
                if (!slug) return "";
                return (
                    '<li class="inline-flex items-center justify-center">' +
                    '<button type="button" data-slug="' +
                    slug +
                    '" title="' +
                    (color.colorName || "") +
                    '" class="w-8 h-8 inline-flex items-center justify-center rounded-full border border-gray-300" style="background-color:' +
                    hex +
                    '"></button></li>'
                );
            })
            .filter(Boolean)
            .join("");
    }

    function renderSizeFilter(sizes) {
        const container = document.querySelector("#filter-size-list");
        if (!container || !sizes.length) return;

        container.innerHTML = sizes
            .filter(isItemActive)
            .map(function (size) {
                const label = size.sizeName || size.name || size.size;
                const slug = size.slug;
                if (!slug) return "";
                return (
                    '<li><button type="button" data-slug="' +
                    slug +
                    '" class="btn btn-default outline shadow-none py-[7px] px-[15px] rounded-[80px]">' +
                    label +
                    "</button></li>"
                );
            })
            .filter(Boolean)
            .join("");
    }

    function renderDiscountFilter() {
        const container = document.querySelector("#filter-discount-list");
        if (!container) return;

        container.innerHTML = DISCOUNT_OPTIONS.map(function (percent) {
            return (
                '<li><label class="group flex items-center justify-between w-full cursor-pointer">' +
                '<span class="flex items-center gap-x-2">' +
                '<span class="group-has-[input:checked]:group-hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out">' +
                '<span class="relative inline-flex w-5 h-5 items-center justify-center">' +
                '<input type="checkbox" value="' +
                percent +
                '" class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all duration-300 ease-in-out" />' +
                '<span class="absolute inset-0 inline-flex items-center justify-center text-white opacity-0 peer-checked:opacity-100 transition-all">' +
                '<i class="hgi hgi-stroke hgi-tick-02 text-[18px] leading-[18px]"></i></span></span></span>' +
                '<span class="text-light-primary-text group-hover:text-primary transition-colors duration-300 ease-in-out">' +
                percent +
                "% OFF</span></span></label></li>"
            );
        }).join("");
    }

    function flattenCategories(categories, output) {
        categories.forEach(function (category) {
            if (!isItemActive(category)) return;

            if (category.slug) {
                output.push({
                    slug: category.slug,
                    categoryName: category.categoryName,
                });
            }

            const children = category.subCategories || category.children || [];
            if (children.length) {
                flattenCategories(children, output);
            }
        });
    }

    async function loadFilterOptions() {
        try {
            const [catRes, brandRes, colorRes, sizeRes] = await Promise.all([
                fetch(API_BASE + "/api/getcategories"),
                fetch(API_BASE + "/api/brand/getallbrands"),
                fetch(API_BASE + "/api/colors/get-all"),
                fetch(API_BASE + "/api/size/getallsize"),
            ]);

            const categories = parseList(await catRes.json()).filter(isItemActive);
            const brands = parseList(await brandRes.json()).filter(isItemActive);
            const colors = parseList(await colorRes.json()).filter(isItemActive);
            const sizes = parseList(await sizeRes.json()).filter(isItemActive);

            const flatCategories = [];
            flattenCategories(categories, flatCategories);

            const categoryNameMap = {};
            flatCategories.forEach(function (cat) {
                categoryNameMap[cat.slug] = cat.categoryName;
            });
            updateShopBreadcrumb(categoryNameMap);

            renderCategoryTree(
                "#filter-category-list",
                categories,
                shopState.categorySlugs
            );
            renderCheckboxFilter(
                "#filter-brand-list",
                brands,
                "brandName",
                "slug",
                shopState.brandSlugs
            );
            renderColorFilter(colors);
            renderSizeFilter(sizes);
            renderDiscountFilter();
        } catch (error) {
            console.error("Filter options error:", error);
        }
    }

    function readUrlParams() {
        const params = new URLSearchParams(window.location.search);
        const searchQuery = params.get("q") || "";

        let categoryPath = params.getAll("category");
        if (!categoryPath.length) {
            const single = params.get("categorySlug") || params.get("categorySlugs");
            if (single) categoryPath = [single];
        }

        if (searchQuery) {
            shopState.searchQuery = searchQuery.trim();
        }

        if (categoryPath.length) {
            shopState.categoryPath = categoryPath.map(String);
            shopState.categorySlugs = [
                shopState.categoryPath[shopState.categoryPath.length - 1],
            ];
        }
    }

    function updateShopBreadcrumb(categoryNameMap) {
        if (!shopState.categoryPath.length) return;

        const breadcrumb = document.querySelector(".breadcrumb ul");
        if (!breadcrumb) return;

        let html =
            '<li><a href="index.php">' +
            '<span class="inline-flex items-center justify-center">' +
            '<i class="hgi hgi-stroke hgi-home-01 text-2xl leading-6"></i></span>Home</a></li>';

        shopState.categoryPath.forEach(function (slug, index) {
            const label = categoryNameMap[slug] || slug.replace(/-/g, " ");
            const pathSoFar = shopState.categoryPath.slice(0, index + 1);
            const isLast = index === shopState.categoryPath.length - 1;

            html += '<li class="text-light-disabled-text">&#8226;</li><li>';
            if (isLast) {
                html += '<span class="text-sm leading-[22px]">' + label + "</span>";
            } else {
                html +=
                    '<a href="' +
                    buildCategoryShopUrl(pathSoFar) +
                    '" class="text-sm leading-[22px] hover:text-primary">' +
                    label +
                    "</a>";
            }
            html += "</li>";
        });

        breadcrumb.innerHTML = html;
    }

    function buildCategoryShopUrl(slugPath) {
        const slugs = Array.isArray(slugPath) ? slugPath.filter(Boolean) : [slugPath];
        if (!slugs.length) return "shop.php";
        return (
            "shop.php?" +
            slugs
                .map(function (slug) {
                    return "category=" + encodeURIComponent(slug);
                })
                .join("&")
        );
    }

    async function initShopPage() {
        readUrlParams();
        initPriceSlider();

        if (shopState.searchQuery) {
            document.querySelectorAll(".header-search-input").forEach(function (input) {
                input.value = shopState.searchQuery;
            });
        }

        await loadFilterOptions();

        if (shopState.categorySlugs.length) {
            shopState.categorySlugs.forEach(function (slug) {
                const input = document.querySelector(
                    '#filter-category-list input[value="' + slug + '"]'
                );
                if (input) input.checked = true;
            });
        }

        bindFilterEvents();
        bindSortControl();
        window.addEventListener("load", bindSortControl);
        loadShopProducts();
    }

    async function loadTopDiscountedProducts() {
        const container = document.getElementById("top-discounted-products");
        if (!container) return;

        try {
            const response = await fetch(API_BASE + "/api/product/top-discounted");

            globalVariants = await variantsPromise;
            if (!response.ok) {
                throw new Error("HTTP Error: " + response.status);
            }

            const result = await response.json();
            const products = parseList(result);

            if (!products.length) {
                container.innerHTML =
                    '<div class="col-span-12 text-center py-10 text-light-secondary-text">No discounted products found.</div>';
                return;
            }

            container.innerHTML = products.map(renderTopDiscountedCard).join("");
        } catch (error) {
            console.error("Top discounted products error:", error);
            container.innerHTML =
                '<div class="col-span-12 text-center py-10 text-light-secondary-text">Unable to load products.</div>';
        }
    }

    function getDiscountPercent(product) {
        const discount =
            product.discountPrice ??
            product.discountPercent ??
            product.discountPercentage ??
            0;

        return Math.round(Number(discount)) || 0;
    }

    function renderTopDiscountedCard(product, index) {
        const delays = [0.2, 0.3, 0.4, 0.5];
        const delay = delays[index % delays.length];
        const productId = product.id || product.productId;
        const productName = product.productName || product.name || "Product";
        const displayProductName = truncateProductName(productName);

        const salePrice = product.salePrice ?? product.price ?? product.basePrice ?? 0;
        const mrp = product.mrp ?? product.originalPrice ?? salePrice;
        const discountPercent = getDiscountPercent(product);
        const detailUrl = buildProductDetailUrl(product);
        
        const variants = globalVariants.filter(v => String(v.productId) === String(productId) && v.isActive !== false);

        const allColors = [];
        if (product.colorName || product.colorCode || product.hexCode || product.color || product.color_name || product.color_code || product.hex_code) {
            allColors.push({
                colorCode: product.colorCode || product.hexCode || product.color_code || product.hex_code || product.colorName || product.color_name || product.color || "#cccccc",
                colorName: product.colorName || product.color_name || product.color || "Default",
                imageUrl: getProductImage(product),
                salePrice: salePrice,
                mrp: mrp,
                discountPercent: discountPercent,
                variantId: productId
            });
        }
        
        variants.forEach(function(v) {
            if (typeof v === 'string') {
                allColors.push({ colorCode: v, colorName: v, imageUrl: getProductImage(product), salePrice: salePrice, mrp: mrp, discountPercent: discountPercent, variantId: productId });
            } else if (v && (v.colorName || v.colorCode || v.hexCode || v.color || v.color_name || v.color_code || v.hex_code)) {
                const vSalePrice = v.salePrice ?? v.price ?? v.basePrice ?? salePrice;
                const vMrp = v.mrp ?? v.originalPrice ?? vSalePrice;
                let vDiscount = v.discountPrice ?? v.discountPercent ?? v.discountPercentage ?? 0;
                if (!vDiscount && vMrp > vSalePrice) vDiscount = Math.round(((vMrp - vSalePrice) / vMrp) * 100);

                allColors.push({
                    colorCode: v.colorCode || v.hexCode || v.color_code || v.hex_code || v.colorName || v.color_name || v.color || "#cccccc",
                    colorName: v.colorName || v.color_name || v.color || "Variant",
                    imageUrl: v.variantImageUrl || v.imageUrl || v.image || getProductImage(product),
                    salePrice: vSalePrice,
                    mrp: vMrp,
                    discountPercent: Math.round(Number(vDiscount)) || 0,
                    variantId: v.id || v.variantId || productId
                });
            }
        });
        
        if (Array.isArray(product.colors)) {
            product.colors.forEach(function(c) {
                if (typeof c === 'string') {
                    allColors.push({ colorCode: c, colorName: c, imageUrl: getProductImage(product), salePrice: salePrice, mrp: mrp, discountPercent: discountPercent, variantId: productId });
                } else if (c && (c.colorCode || c.hexCode || c.colorName || c.color || c.color_code || c.hex_code || c.color_name)) {
                    const cSalePrice = c.salePrice ?? c.price ?? c.basePrice ?? salePrice;
                    const cMrp = c.mrp ?? c.originalPrice ?? cSalePrice;
                    let cDiscount = c.discountPrice ?? c.discountPercent ?? c.discountPercentage ?? 0;
                    if (!cDiscount && cMrp > cSalePrice) cDiscount = Math.round(((cMrp - cSalePrice) / cMrp) * 100);

                    allColors.push({
                        colorCode: c.colorCode || c.hexCode || c.color_code || c.hex_code || c.colorName || c.color_name || c.color || "#cccccc",
                        colorName: c.colorName || c.color_name || c.color || "Variant",
                        imageUrl: c.variantImageUrl || c.imageUrl || c.image || getProductImage(product),
                        salePrice: cSalePrice,
                        mrp: cMrp,
                        discountPercent: Math.round(Number(cDiscount)) || 0,
                        variantId: c.id || c.variantId || productId
                    });
                }
            });
        }

        const uniqueColors = [];
        const seenColors = new Set();
        allColors.forEach(function(c) {
            let code = String(c.colorCode).toLowerCase().replace(/\s+/g, '');
            if (code === "default") code = "#cccccc";
            if (!seenColors.has(code)) {
                seenColors.add(code);
                c.colorCode = code;
                uniqueColors.push(c);
            }
        });

        let colorsHtml = '';
        if (uniqueColors.length > 0) {
            colorsHtml = '<div class="product-colors flex items-center flex-wrap gap-2 mt-1 mb-3" onclick="event.preventDefault();">';
            uniqueColors.forEach(function(color, idx) {
                const activeClass = idx === 0 ? "ring-2 ring-primary ring-offset-1 active-swatch" : "";
                colorsHtml += '<button type="button" title="' + String(color.colorName).replace(/"/g, '&quot;') + '" ' +
                    'class="card-color-swatch w-5 h-5 rounded-full border border-gray-300 shadow-sm ' + activeClass + '" ' +
                    'style="background-color: ' + color.colorCode + ';" ' +
                    'data-image="' + String(color.imageUrl).replace(/"/g, '&quot;') + '" ' +
                    'data-price="' + formatPrice(color.salePrice) + '" ' +
                    'data-mrp="' + formatPrice(color.mrp) + '" ' +
                    'data-discount="' + color.discountPercent + '" ' +
                    'data-variant-id="' + color.variantId + '"></button>';
            });
            colorsHtml += '</div>';
        }

        return (
            '<div class="xl:col-span-4 col-span-12 md:col-span-6 wow animate__animated animate__fadeInUp group hover:border-primary transition-all duration-300 border rounded-2xl border-gray-300" data-wow-delay=".' +
            delay +
            's">' +
            '<a class="flex flex-col lg:flex-row h-full" href="' +
            detailUrl +
            '">' +
            '<div class="p-4 lg:border-r border-b lg:border-b-0 border-gray-300 lg:max-w-[190px] flex items-center justify-center w-full">' +
            '<img src="' +
            getProductImage(product) +
            '" alt="' +
            productName +
            '" class="rounded-2xl max-h-[140px] object-contain" />' +
            "</div>" +
            '<div class="py-[37px] px-6 flex-1">' +
            (discountPercent > 0
                ? '<span class="product-discount-badge relative bg-error uppercase text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url(\'images/discount-shape.html\')] after:bg-contain after:bg-no-repeat">' +
                  discountPercent +
                  "% OFF</span>"
                : "") +
            '<p class="py-3 font-semibold text-base leading-6 text-light-primary-text group-hover:text-primary line-clamp-2" title="' + String(productName).replace(/"/g, '&quot;') + '">' +
            displayProductName +
            "</p>" +
            '<div class="rating-section flex items-center mb-3">' +
            '<div class="bg-[url(\'../images/star-icon.png\')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">' +
            '<div style="width: 80%" class="bg-[url(\'../images/star-icon.png\')] h-4.5 bg-repeat-x bg-position-[0_-18px]"></div>' +
            "</div>" +
            '<span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>' +
            "</div>" +
            '<div class="price-section flex items-center gap-x-3">' +
            '<span class="current-price text-base font-semibold text-primary-dark">' +
            formatPrice(salePrice) +
            "</span>" +
            (mrp > salePrice
                ? '<span class="old-price text-base leading-6 font-normal text-light-disabled-text line-through">' +
                  formatPrice(mrp) +
                  "</span>"
                : "") +
            "</div>" + colorsHtml + "</div></a></div>"
        );
    }

    function reinitSlickSlider(slider, html) {
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

    function renderCartLatestProductCard(product, index) {
        const delay = ((index % 4) + 2) * 0.1;
        const productId = product.id || product.productId || "";
        const productName = product.productName || product.name || "Product";
        const displayProductName = truncateProductName(productName);
        const salePrice = product.salePrice ?? product.price ?? product.basePrice ?? 0;
        const mrp = product.mrp ?? product.originalPrice ?? salePrice;
        const discountLabel = getDiscountLabel(product);
        const rating = Number(product.averageRating) || 0;
        const reviewCount = product.totalReviews || 0;
        const ratingWidth = Math.min(100, Math.max(0, (rating / 5) * 100));
        const detailUrl =
            productId
                ? "product-detail.php?id=" +
                  encodeURIComponent(productId) +
                  (product.slug ? "&slug=" + encodeURIComponent(product.slug) : "")
                : "product-detail.php";
        const safeName = String(productName).replace(/"/g, "&quot;");

        return (
            '<div class="border border-gray-300 rounded-2xl product-card-1 p-4 group mx-3 wow animate__animated animate__fadeInUp" data-wow-delay="' +
            delay +
            's">' +
            '<div class="product-image-container relative">' +
            '<div class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden">' +
            '<a href="' +
            detailUrl +
            '">' +
            '<img src="' +
            getProductImage(product) +
            '" alt="' +
            safeName +
            '" class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />' +
            "</a></div>" +
            '<div class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">' +
            '<ul class="flex items-center gap-x-px">' +
            '<li><a aria-label="Add to Wishlist" class="add-to-wishlist-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm" href="javascript:void(0)" data-product-id="' +
            productId +
            '"><i class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i></a></li>' +
            '<li><a aria-label="Compare" class="add-to-compare-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center" href="javascript:void(0)" data-product-id="' +
            productId +
            '"><i class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i></a></li>' +
            '<li><a aria-label="Quick view" class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm" href="#" data-product-id="' +
            productId +
            '"><i class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i></a></li>' +
            "</ul></div></div>" +
            '<div class="product-content">' +
            '<h5 class="text-base leading-6 font-semibold font-dm-sans mb-4">' +
            '<a href="' +
            detailUrl +
            '" title="' +
            safeName +
            '">' +
            displayProductName +
            "</a></h5>" +
            '<div class="rating-section flex items-center mb-4">' +
            '<div class="bg-[url(\'../images/star-icon.png\')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">' +
            '<div style="width: ' +
            ratingWidth +
            '%" class="bg-[url(\'../images/star-icon.png\')] h-4.5 bg-repeat-x bg-position-[0_-18px]"></div>' +
            "</div>" +
            '<span class="text-sm leading-[22px] font-normal inline-block ml-1">(' +
            reviewCount +
            ")</span></div>" +
            '<div class="price-section flex items-center gap-x-3 mb-2">' +
            '<span class="current-price text-base font-semibold text-light-primary-text">' +
            formatPrice(salePrice) +
            "</span>" +
            (Number(mrp) > Number(salePrice)
                ? '<span class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through">' +
                  formatPrice(mrp) +
                  "</span>"
                : "") +
            (discountLabel
                ? '<span class="discount-percentage text-sm leading-[22px] font-semibold text-error">' +
                  discountLabel +
                  "</span>"
                : "") +
            "</div>" +
            '<div class="btn-section flex items-center gap-x-4">' +
            '<a class="add-to-wishlist-btn size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300" href="javascript:void(0)" data-product-id="' +
            productId +
            '"><i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i></a>' +
            '<a class="add-to-cart-btn btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1" href="javascript:void(0)" data-product-id="' +
            productId +
            '"><i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i><span>Add to Cart</span></a>' +
            "</div></div></div>"
        );
    }

    async function loadCartLatestProducts() {
        const slider = document.getElementById("cart-latest-products-slider");
        const section = document.getElementById("cart-latest-products-section");
        if (!slider) return;

        try {
            globalVariants = await variantsPromise;

            const params = new URLSearchParams({
                sortBy: "newest",
                page: "1",
                pageSize: "12",
            });

            const response = await fetch(API_BASE + "/api/product/filter?" + params.toString());
            if (!response.ok) {
                throw new Error("HTTP Error: " + response.status);
            }

            const result = await response.json();
            const products = parseList(result);

            if (!products.length) {
                if (section) section.style.display = "none";
                return;
            }

            const html = products.map(renderCartLatestProductCard).join("");
            reinitSlickSlider(slider, html);
        } catch (error) {
            console.error("Cart latest products error:", error);
            if (section) section.style.display = "none";
        }
    }
})();
