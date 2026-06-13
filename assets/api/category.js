const API_BASE = typeof domin !== "undefined" ? domin : "https://ecommerce-backend.workarya.com";
const HOME_PRODUCT_PAGE_SIZE = 10;

document.addEventListener("DOMContentLoaded", function () {

    loadCategories();
    loadHomeCategorySections();
    initHomeQuickViewDelegation();

});


async function loadCategories() {
    // Run both API fetches concurrently for better performance
    loadDropdownCategories();
    loadGridCategories();
}

async function loadDropdownCategories() {

    try {

        const response = await fetch(
            "https://ecommerce-backend.workarya.com/api/getcategories-browse"
        );

        if (!response.ok) {
            throw new Error(`HTTP Error: ${response.status}`);
        }

        const result = await response.json();

        // Extracting data safely matching the provided response structure
        const categories = (result?.data || result?.value?.data || [])
            .filter(category => category.isActive === true);

        // Dropdown
        renderDropdown(categories);

    } catch (error) {

        console.error("Dropdown Category Error:", error);

    }
}

async function loadGridCategories() {

    try {

        const response = await fetch(
            "https://ecommerce-backend.workarya.com/api/getcategories-hero"
        );

        if (!response.ok) {
            throw new Error(`HTTP Error: ${response.status}`);
        }

        const result = await response.json();

        // Extracting data safely matching the provided response structure
        const categories = (result?.data || result?.value?.data || [])
            .filter(category => category.isActive === true);

        // Grid (first 12 only)
        renderGrid(categories.slice(0, 12));

    } catch (error) {

        console.error("Grid Category Error:", error);

    }
}


// ======================
// HELPERS
// ======================

function buildCategoryShopUrl(slugPath) {
    const slugs = Array.isArray(slugPath) ? slugPath.filter(Boolean) : [slugPath];
    if (!slugs.length) return "shop.php";
    return "shop.php?" + slugs.map(function (slug) {
        return "category=" + encodeURIComponent(slug);
    }).join("&");
}

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

// ======================
// DROPDOWN
// ======================

function renderDropdown(categories) {

    const dropdownMenu = document.getElementById("dropdownMenu");

    if (!dropdownMenu) return;

    // Create a flyout container outside the hidden overflow dynamically
    let flyoutContainer = document.getElementById("flyoutContainer");
    if (!flyoutContainer) {
        flyoutContainer = document.createElement("ul");
        flyoutContainer.id = "flyoutContainer";
        flyoutContainer.className = "absolute left-full  w-[250px] bg-white rounded-2xl divide-y divide-gray-300 shadow-dark-z-24 z-50 hidden";
        const wrapper = dropdownMenu.closest('.relative');
        if (wrapper) wrapper.appendChild(flyoutContainer);
    }

    dropdownMenu.innerHTML = categories.map(category => {
        const children = category.subCategories || category.children || [];
        const hasChildren = children.length > 0;

        return `
        <li class="py-[9px] group relative category-item">
            <a
                href="${buildCategoryShopUrl([category.slug])}"
                class="flex items-center gap-x-2 relative text-light-primary-text group-hover:text-primary pr-6"
            >
                <span class="w-8 h-8 flex-shrink-0 bg-primary-lighter inline-flex items-center justify-center rounded-full overflow-hidden">
                    ${
                        category.categoryImage
                        ? `<img
                                src="${category.categoryImage}"
                                alt="${category.categoryName}"
                                class="w-full h-full object-cover"
                           >`
                        : `<i class="hgi hgi-stroke hgi-grid"></i>`
                    }
                </span>
                <span class="truncate">${category.categoryName}</span>
                
                ${hasChildren ? `
                <span class="absolute right-0 top-1/2 -translate-y-1/2">
                    <i class="hgi hgi-stroke hgi-arrow-right-01 text-lg text-light-primary-text"></i>
                </span>
                ` : ''}
            </a>
            
            ${hasChildren ? `
            <!-- Submenu kept hidden, it will be mirrored via Javascript to bypass overflow-hidden -->
            <ul class="submenu-data hidden">
                ${children.map(sub => {
                    const grandChildren = sub.subCategories || sub.children || [];
                    const hasGrandChildren = grandChildren.length > 0;
                    
                    return `
                <li class="py-[9px] px-4 group/item relative">
                    <a href="${buildCategoryShopUrl([category.slug, sub.slug])}" class="flex items-center gap-x-2 relative text-light-primary-text group-hover/item:text-primary">
                        ${sub.categoryName}
                        ${hasGrandChildren ? `
                        <span class="absolute right-0 top-1/2 -translate-y-1/2">
                            <i class="hgi hgi-stroke hgi-arrow-right-01 text-lg text-light-primary-text"></i>
                        </span>
                        ` : ''}
                    </a>
                    ${hasGrandChildren ? `
                    <ul class="absolute left-full top-0 z-60 w-[250px] max-w-[250px] bg-white rounded-2xl divide-y divide-gray-300 shadow-dark-z-24 opacity-0 invisible group-hover/item:opacity-100 group-hover/item:visible transition-all duration-300 transform translate-x-4 group-hover/item:translate-x-0">
                        ${grandChildren.map(grand => `
                        <li class="py-[9px] px-4 group/sub">
                            <a href="${buildCategoryShopUrl([category.slug, sub.slug, grand.slug])}" class="flex items-center gap-x-2 relative text-light-primary-text group-hover/sub:text-primary">
                                ${grand.categoryName}
                            </a>
                        </li>
                        `).join("")}
                    </ul>
                    ` : ''}
                </li>
                `;
                }).join("")}
            </ul>
            ` : ''}
        </li>
    `}).join("");

    // Handle dynamic mirroring of submenus to prevent them from being cut off
    const categoryItems = dropdownMenu.querySelectorAll('.category-item');
    const wrapper = dropdownMenu.closest('.relative');

    categoryItems.forEach(item => {
        item.addEventListener('mouseenter', () => {
            const submenuData = item.querySelector('.submenu-data');
            if (submenuData) {
                // Mirror HTML into the outer container
                flyoutContainer.innerHTML = submenuData.innerHTML;
                
                // Position flyout container directly next to the hovered item
                const offsetTop = item.offsetTop - dropdownMenu.scrollTop;
                flyoutContainer.style.top = "calc(100% + " + offsetTop + "px)";
                flyoutContainer.style.display = 'block';
            } else {
                flyoutContainer.style.display = 'none';
            }
        });
    });

    if (wrapper) {
        wrapper.addEventListener('mouseleave', () => {
            flyoutContainer.style.display = 'none';
        });
    }
}


// ======================
// CATEGORY GRID
// ======================



function renderGrid(categories) {

    const container = document.getElementById("category-container");

    if (!container) return;

    container.innerHTML = categories.map(category => `

        <div class="hover:border-primary border border-gray-300 rounded-2xl col-span-6 md:col-span-4 xl:col-span-2 lg:col-span-3 p-3 transition-all duration-300 wow animate__animated animate__fadeInUp group"
            data-wow-delay=".2s">

            <a href="${buildCategoryShopUrl([category.slug])}"
                class="flex md:flex-row flex-col items-center justify-center gap-3">

                <div class="max-w-[100px] flex items-center justify-center w-full">

                    <img
                        src="${category.categoryImage}"
                        alt="${category.categoryName}"
                        class="rounded-lg w-full h-full object-cover"
                    />

                </div>

                <p class="font-semibold text-light-primary-text group-hover:text-primary text-center md:text-left transition-all duration-300">
                    ${category.categoryName}
                </p>

            </a>

        </div>

    `).join("");

}

// ======================
// HOME CATEGORY SECTIONS
// ======================

async function loadHomeCategorySections() {
    const container = document.getElementById("home-category-sections");
    if (!container) return;

    try {
        const response = await fetch(API_BASE + "/api/getcategories-home");

        if (!response.ok) {
            throw new Error("HTTP Error: " + response.status);
        }

        const result = await response.json();
        const categories = (result?.data || []).filter(function (category) {
            return category.isActive !== false && category.type === "Home";
        });

        if (!categories.length) {
            container.innerHTML = "";
            return;
        }

        container.innerHTML = categories.map(renderHomeCategorySection).join("");

        categories.forEach(function (category) {
            const children = getActiveHomeChildren(category);
            const defaultSlug = children.length ? children[0].slug : category.slug;

            if (children.length) {
                initHomeCategoryFilters(category.id);
            }

            loadHomeCategoryProducts(category.id, defaultSlug);
        });
    } catch (error) {
        console.error("Home Categories Error:", error);
    }
}

function getActiveHomeChildren(category) {
    return (category.children || []).filter(function (child) {
        return child.isActive !== false && child.type === "Home";
    });
}

function renderHomeCategorySection(category) {
    const children = getActiveHomeChildren(category);
    const sectionId = "home-cat-" + category.id;

    const filterButtons = children
        .map(function (child, index) {
            const isActive = index === 0;
            return (
                '<button type="button" data-slug="' +
                child.slug +
                '" class="home-cat-filter-btn btn ' +
                (isActive ? "btn-primary" : "btn-default outline shadow-none") +
                ' btn-large py-2.5 px-[22px] rounded-full">' +
                child.categoryName +
                "</button>"
            );
        })
        .join("");

    return (
        '<section class="pb-[70px] home-category-section" data-category-id="' +
        category.id +
        '">' +
        '<div class="container">' +
        '<div class="mb-10 flex xl:flex-row flex-col gap-y-4 items-center xl:justify-between wow animate__animated animate__fadeInUp" data-wow-delay=".2s">' +
        '<div class="text-center xl:text-left">' +
        "<h3 class=\"pb-2\">" +
        category.categoryName +
        "</h3>" +
        "</div>" +
        (children.length
            ? '<div class="flex lg:flex-row flex-col items-center gap-x-5 gap-y-5">' +
              '<div class="flex flex-wrap md:flex-nowrap justify-center gap-y-4 gap-x-4 max-w-full" data-filters-for="' +
              category.id +
              '">' +
              filterButtons +
              "</div></div>"
            : "") +
        "</div>" +
        '<div class="home-category-products grid 2xl:grid-cols-5 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 items-stretch" id="' +
        sectionId +
        '-products">' +
        '<div class="col-span-full text-center py-10 text-light-secondary-text">Loading products...</div>' +
        "</div></div></section>"
    );
}

function initHomeCategoryFilters(categoryId) {
    const filterContainer = document.querySelector(
        '[data-filters-for="' + categoryId + '"]'
    );
    if (!filterContainer) return;

    filterContainer.querySelectorAll(".home-cat-filter-btn").forEach(function (btn) {
        btn.addEventListener("click", function () {
            filterContainer.querySelectorAll(".home-cat-filter-btn").forEach(function (button) {
                button.classList.remove("btn-primary");
                button.classList.add("btn-default", "outline", "shadow-none");
            });

            btn.classList.remove("btn-default", "outline", "shadow-none");
            btn.classList.add("btn-primary");

            loadHomeCategoryProducts(categoryId, btn.getAttribute("data-slug"));
        });
    });
}

async function loadHomeCategoryProducts(categoryId, slug) {
    const grid = document.getElementById("home-cat-" + categoryId + "-products");
    if (!grid || !slug) return;

    grid.innerHTML =
        '<div class="col-span-full text-center py-10 text-light-secondary-text">Loading products...</div>';

    try {
        const params = new URLSearchParams({
            categorySlugs: slug,
            page: "1",
            pageSize: String(HOME_PRODUCT_PAGE_SIZE),
            sortBy: "popularity",
        });

        const response = await fetch(API_BASE + "/api/product/filter?" + params.toString());

        if (!response.ok) {
            throw new Error("HTTP Error: " + response.status);
        }

        const result = await response.json();
        const products = Array.isArray(result?.data) ? result.data : [];

        if (!products.length) {
            grid.innerHTML =
                '<div class="col-span-full text-center py-10 text-light-secondary-text">No products found.</div>';
            return;
        }

        grid.innerHTML = products.map(renderHomeProductCard).join("");
        initHomeProductCountdowns(grid);
    } catch (error) {
        console.error("Home Products Error:", error);
        grid.innerHTML =
            '<div class="col-span-full text-center py-10 text-light-secondary-text">Unable to load products.</div>';
    }
}

function formatHomePrice(value) {
    const amount = Number(value);
    if (Number.isNaN(amount)) return "₹0";
    return "₹" + amount.toLocaleString("en-IN");
}

function getHomeProductImage(product) {
    return (
        product.productImageUrl ||
        product.imageUrl ||
        product.image ||
        product.thumbnail ||
        "assets/images/vitamin-c.png"
    );
}

function getHomeProductRating(product) {
    const rating = Number(product.averageRating ?? product.rating ?? 4);
    if (Number.isNaN(rating)) return 80;
    return Math.min(100, Math.max(0, (rating / 5) * 100));
}

function getHomeReviewCount(product) {
    return product.reviewCount ?? product.totalReviews ?? product.reviews ?? 0;
}

function escapeHtmlAttr(value) {
    return String(value)
        .replace(/&/g, "&amp;")
        .replace(/"/g, "&quot;")
        .replace(/'/g, "&#39;")
        .replace(/</g, "&lt;")
        .replace(/>/g, "&gt;");
}

function renderHomeProductHoverActions(product) {
    const productId = product.id || product.productId || "";
    const variantId = product.variantId || "";
    return (
        '<div class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">' +
        '<ul class="flex items-center gap-x-px">' +
        "<li>" +
        '<a aria-label="Add to Wishlist" class="add-to-wishlist-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5" href="javascript:void(0)" data-product-id="' + productId + '" data-variant-id="' + variantId + '">' +
        '<i class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>' +
        "</a></li>" +
        "<li>" +
        '<a aria-label="Compare" class="product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5" href="compare.html">' +
        '<i class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>' +
        "</a></li>" +
        "<li>" +
        '<a aria-label="Quick view" class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5" href="#">' +
        '<i class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>' +
        "</a></li>" +
        "</ul></div>"
    );
}

function renderHomeProductCard(product, index) {
    const delay = ((index % 5) + 2) * 0.1;
    const productId = product.id || product.productId;
    const productName = product.productName || product.name || "Product";
    
    // Truncate product name to 5 words max
    const nameWords = productName.split(" ");
    const displayProductName = nameWords.length > 5 ? nameWords.slice(0, 5).join(" ") + "..." : productName;

    const salePrice = product.salePrice ?? product.price ?? product.basePrice ?? 0;
    const mrp = product.mrp ?? product.originalPrice ?? salePrice;
    const detailUrl = buildProductDetailUrl(product);
    const ratingWidth = getHomeProductRating(product);
    const reviewCount = getHomeReviewCount(product);

    return (
        '<div class="col-span-1 h-full wow animate__animated animate__fadeInUp" data-wow-delay=".' +
        delay +
        's">' +
        '<div class="border border-gray-300 rounded-2xl product-card-1 p-4 group h-full flex flex-col">' +
        '<div class="product-image-container relative">' +
        '<div class="product-image rounded-xl mb-4 overflow-hidden bg-[#F4F3F5]">' +
        '<a href="' +
        detailUrl +
        '">' +
        '<img src="' +
        getHomeProductImage(product) +
        '" alt="' +
        escapeHtmlAttr(productName) +
        '" class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />' +
        "</a></div>" +
        renderHomeProductHoverActions(product) +
        "</div>" +
        '<div class="product-content text-center flex-1 flex flex-col">' +
        '<div class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">' +
        '<p class="days">00</p><p>Days</p><p>&colon;</p>' +
        '<p class="hours">00</p><p>Hours</p><p>&colon;</p>' +
        '<p class="minutes">00</p><p>Mins</p><p>&colon;</p>' +
        '<p class="seconds">00</p><p>Secs</p>' +
        "</div>" +
        '<h5 class="text-[20px] leading-[30px] font-bold py-3 min-h-[84px]">' +
        '<a href="' +
        detailUrl +
        '" title="' +
        escapeHtmlAttr(productName) +
        '" class="line-clamp-2 block">' +
        displayProductName +
        "</a></h5>" +
        '<div class="rating-section flex items-center justify-center mb-3">' +
        '<div class="bg-[url(\'../images/star-icon.png\')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">' +
        '<div style="width: ' +
        ratingWidth +
        '%" class="bg-[url(\'../images/star-icon.png\')] h-4.5 bg-repeat-x bg-position-[0_-18px]"></div>' +
        "</div>" +
        '<span class="text-sm leading-[22px] font-normal inline-block ml-1">(' +
        reviewCount +
        ")</span></div>" +
        '<div class="price-section flex items-center justify-center gap-x-3 mb-3">' +
        '<span class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">' +
        formatHomePrice(salePrice) +
        "</span>" +
        (mrp > salePrice
            ? '<span class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">' +
              formatHomePrice(mrp) +
              "</span>"
            : "") +
        "</div>" +
        '<div class="btn-section flex items-center gap-x-4 mt-auto">' +
        '<a class="add-to-wishlist-btn size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300" href="javascript:void(0)" data-product-id="' + productId + '" data-variant-id="' + (product.variantId || "") + '">' +
        '<i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i></a>' +
        '<a class="btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1" href="cart-single-vendor.html">' +
        '<i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>' +
        "<span>Add to Cart</span></a></div></div></div></div>"
    );
}

function initHomeProductCountdowns(container) {
    if (typeof jQuery === "undefined" || !jQuery.fn || !jQuery.fn.countdown) return;

    jQuery(container)
        .find(".sellzy-countdown")
        .countdown({
            date: "12/13/2026 00:00:00",
            offset: 6,
            day: "Day",
            days: "Days",
            hideOnComplete: true,
        });
}

function initHomeQuickViewDelegation() {
    if (typeof jQuery === "undefined") return;

    const $ = jQuery;

    $(document).on("click", ".home-category-section .quick-view-sidebar-btn", function (e) {
        e.preventDefault();

        const $modalOverlay = $(".modal-overlay");
        const openFor = $modalOverlay.attr("data-overlay-for");

        if (openFor) {
            $(openFor).attr("data-state", "close");
        }

        $(".quick-view-sidebar").attr("data-state", "open");
        $("body").addClass("overflow-hidden scrollbar-offset");
        $modalOverlay.fadeIn();
        $modalOverlay.attr("data-overlay-for", ".quick-view-sidebar");
    });
}