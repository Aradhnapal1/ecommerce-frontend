(function () {
    const API_BASE = typeof domin !== "undefined" ? domin : "https://ecommerce-backend.workarya.com";
    const PAGE_SIZE = 20;

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
        initHeaderSearch();

        if (document.getElementById("product-grid")) {
            initShopPage();
        }

        if (document.getElementById("top-discounted-products")) {
            loadTopDiscountedProducts();
        }
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

    async function fetchSearchProducts(query, page, pageSize) {
        const params = new URLSearchParams({
            q: query,
            page: String(page || 1),
            pageSize: String(pageSize || PAGE_SIZE),
        });

        const response = await fetch(API_BASE + "/api/product/search?" + params.toString());

        if (!response.ok) {
            throw new Error("Search request failed: " + response.status);
        }

        return parsePaginated(await response.json());
    }

    function formatPrice(value) {
        const amount = Number(value);
        if (Number.isNaN(amount)) return "?0";
        return "?" + amount.toLocaleString("en-IN");
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

    function renderProductCard(product, index) {
        const delay = ((index % 4) + 2) * 0.1;
        const productId = product.id || product.productId;
        const productName = product.productName || product.name || "Product";
        const salePrice = product.salePrice ?? product.price ?? product.basePrice ?? 0;
        const mrp = product.mrp ?? product.originalPrice ?? salePrice;
        const discountLabel = getDiscountLabel(product);
        const detailUrl = buildProductDetailUrl(product);

        return (
            '<div class="2xl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp" data-wow-delay=".' +
            delay +
            's">' +
            '<div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">' +
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
            "</a></div></div>" +
            '<div class="product-content">' +
            '<h5 class="text-base leading-6 font-semibold font-dm-sans mb-4">' +
            '<a href="' +
            detailUrl +
            '">' +
            productName +
            "</a></h5>" +
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
            '<div class="btn-section flex items-center gap-x-4">' +
            '<a class="btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1" href="cart-single-vendor.html">' +
            '<i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>' +
            "<span>Add to Cart</span></a></div></div></div></div>"
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
                    shopState.pageSize
                );
            } else {
                result = await fetchFilteredProducts(shopState);
            }

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
            shopState.sortBy = SORT_MAP[sortSelect.value] || "popularity";
        }
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
                input.addEventListener("change", applyFilters);
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

        const sortSelect = document.getElementById("sorting");
        if (sortSelect) {
            sortSelect.addEventListener("change", applyFilters);
        }

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

    function renderCheckboxFilter(containerSelector, items, labelKey, valueKey, selectedSlugs) {
        const container = document.querySelector(containerSelector);
        if (!container || !items.length) return;

        const selected = selectedSlugs || [];

        container.innerHTML = items
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

            const categories = parseList(await catRes.json());
            const brands = parseList(await brandRes.json());
            const colors = parseList(await colorRes.json());
            const sizes = parseList(await sizeRes.json());

            const flatCategories = [];
            flattenCategories(categories, flatCategories);

            const categoryNameMap = {};
            flatCategories.forEach(function (cat) {
                categoryNameMap[cat.slug] = cat.categoryName;
            });
            updateShopBreadcrumb(categoryNameMap);

            renderCheckboxFilter(
                "#filter-category-list",
                flatCategories,
                "categoryName",
                "slug",
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
        loadShopProducts();
    }

    function debounce(fn, wait) {
        let timer;
        return function () {
            clearTimeout(timer);
            timer = setTimeout(fn, wait);
        };
    }

    function initHeaderSearch() {
        const inputs = document.querySelectorAll(".header-search-input");
        if (!inputs.length) return;

        inputs.forEach(function (input) {
            const container = input.closest(".search-input-container");
            const resultList = container
                ? container.querySelector(".recommended-search-list")
                : null;

            const runSearch = debounce(async function () {
                const query = input.value.trim();
                if (!query || query.length < 2) {
                    if (resultList) resultList.innerHTML = "";
                    return;
                }

                try {
                    const result = await fetchSearchProducts(query, 1, 5);
                    if (!resultList) return;

                    if (!result.items.length) {
                        resultList.innerHTML =
                            '<li class="py-2 text-light-secondary-text">No products found</li>';
                        return;
                    }

                    resultList.innerHTML = result.items
                        .map(function (product) {
                            const productId = product.id || product.productId;
                            const detailUrl = buildProductDetailUrl(product);

                            return (
                                '<li class="py-2">' +
                                '<a href="' +
                                detailUrl +
                                '" class="flex items-center gap-3 hover:text-primary">' +
                                '<img src="' +
                                getProductImage(product) +
                                '" alt="" class="w-10 h-10 rounded object-cover" />' +
                                "<span>" +
                                (product.productName || product.name || "Product") +
                                "</span></a></li>"
                            );
                        })
                        .join("");
                } catch (error) {
                    console.error("Search error:", error);
                }
            }, 350);

            input.addEventListener("input", runSearch);

            input.addEventListener("keydown", function (event) {
                if (event.key === "Enter") {
                    event.preventDefault();
                    const query = input.value.trim();
                    if (!query) return;
                    window.location.href =
                        "shop.php?q=" + encodeURIComponent(query);
                }
            });
        });
    }

    async function loadTopDiscountedProducts() {
        const container = document.getElementById("top-discounted-products");
        if (!container) return;

        try {
            const response = await fetch(API_BASE + "/api/product/top-discounted");

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
        const salePrice = product.salePrice ?? product.price ?? product.basePrice ?? 0;
        const mrp = product.mrp ?? product.originalPrice ?? salePrice;
        const discountPercent = getDiscountPercent(product);
        const detailUrl = buildProductDetailUrl(product);

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
            '<p class="py-3 font-semibold text-base leading-6 text-light-primary-text group-hover:text-primary line-clamp-2">' +
            productName +
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
            "</div></div></a></div>"
        );
    }
})();
