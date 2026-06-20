(function () {
    const API_BASE = typeof domin !== "undefined" ? domin : "https://ecommerce-backend.workarya.com";
    const SEARCH_HISTORY_KEY = "sellzy_search_history";
    const MAX_HISTORY = 5;
    const SUGGEST_DEBOUNCE_MS = 300;

    function escapeHtml(value) {
        return String(value || "")
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;");
    }

    function getSearchHistory() {
        try {
            const parsed = JSON.parse(localStorage.getItem(SEARCH_HISTORY_KEY) || "[]");
            return Array.isArray(parsed) ? parsed.filter(Boolean) : [];
        } catch (error) {
            return [];
        }
    }

    function setSearchHistory(history) {
        localStorage.setItem(SEARCH_HISTORY_KEY, JSON.stringify(history.slice(0, MAX_HISTORY)));
        renderAllSearchHistories();
    }

    function saveSearchHistory(query) {
        const q = String(query || "").trim();
        if (!q) return;
        const history = getSearchHistory().filter(function (item) {
            return item.toLowerCase() !== q.toLowerCase();
        });
        history.unshift(q);
        setSearchHistory(history);
    }

    function removeSearchHistoryItem(query) {
        const q = String(query || "").trim();
        const history = getSearchHistory().filter(function (item) {
            return item.toLowerCase() !== q.toLowerCase();
        });
        setSearchHistory(history);
    }

    function clearSearchHistory() {
        localStorage.removeItem(SEARCH_HISTORY_KEY);
        renderAllSearchHistories();
        document.querySelectorAll(".header-search-input").forEach(function (input) {
            updateSearchDropdown(input);
        });
    }

    function navigateToSearch(query) {
        const q = String(query || "").trim();
        if (!q) return;
        saveSearchHistory(q);
        window.location.href = "shop.php?q=" + encodeURIComponent(q);
    }

    function getProductImage(product) {
        return (
            product.productImageUrl ||
            product.imageUrl ||
            product.image ||
            product.thumbnail ||
            "assets/images/no-image.png"
        );
    }

    function parseSearchItems(result) {
        if (Array.isArray(result?.data)) return result.data;
        const payload = result?.value?.data ?? result?.value ?? result;
        if (Array.isArray(payload)) return payload;
        return payload?.items || payload?.products || payload?.data || [];
    }

    async function fetchSearchProducts(query, limit) {
        const params = new URLSearchParams({
            q: query,
            page: "1",
            pageSize: String(limit || 5),
        });

        const response = await fetch(API_BASE + "/api/product/search?" + params.toString());
        if (!response.ok) throw new Error("Search request failed: " + response.status);
        const result = await response.json();
        return parseSearchItems(result);
    }

    function buildQuerySuggestions(query, products, history) {
        const q = query.trim().toLowerCase();
        if (!q) return [];

        const suggestions = [];
        const seen = new Set();

        function addSuggestion(value) {
            const text = String(value || "").trim();
            if (!text) return;
            const key = text.toLowerCase();
            if (key === q || seen.has(key)) return;
            seen.add(key);
            suggestions.push(text);
        }

        history.forEach(function (item) {
            if (item.toLowerCase().startsWith(q)) addSuggestion(item);
        });

        products.forEach(function (product) {
            const name = product.productName || product.name || "";
            if (name.toLowerCase().startsWith(q)) addSuggestion(name);

            name.split(/\s+/).forEach(function (word) {
                const cleaned = word.replace(/[^a-zA-Z0-9]/g, "");
                if (cleaned.length > q.length && cleaned.toLowerCase().startsWith(q)) {
                    addSuggestion(cleaned);
                }
            });
        });

        return suggestions.slice(0, 5);
    }

    function renderHistoryList(container) {
        if (!container) return;

        const history = getSearchHistory();
        if (!history.length) {
            container.innerHTML =
                '<p class="text-sm text-light-secondary-text w-full">No recent searches</p>';
            return;
        }

        container.innerHTML = history
            .map(function (item) {
                return (
                    '<button type="button" class="recent-search-item btn text-sm leading-[22px] font-normal btn-default outline btn-medium pl-3 py-1.5 pr-1.5 rounded-[50px]" data-query="' +
                    escapeHtml(item) +
                    '">' +
                    escapeHtml(item) +
                    '<span class="remove-search-history inline-flex items-center justify-center size-4 bg-[rgba(145,158,171,0.32)] rounded-full" data-query="' +
                    escapeHtml(item) +
                    '">' +
                    '<i class="hgi hgi-stroke hgi-cancel-01 text-xs text-white"></i></span></button>'
                );
            })
            .join("");
    }

    function renderAllSearchHistories() {
        document.querySelectorAll(".recent-search-list").forEach(renderHistoryList);
    }

    function renderQuerySuggestions(container, wrapper, query, suggestions) {
        if (!container || !wrapper) return;

        if (!query.trim() || !suggestions.length) {
            wrapper.classList.add("hidden");
            container.innerHTML = "";
            return;
        }

        wrapper.classList.remove("hidden");
        container.innerHTML = suggestions
            .map(function (item) {
                return (
                    '<button type="button" class="search-query-item flex items-center gap-x-3 w-full text-left py-2 hover:text-primary transition-colors" data-query="' +
                    escapeHtml(item) +
                    '">' +
                    '<i class="hgi hgi-stroke hgi-search-01 text-lg text-light-secondary-text"></i>' +
                    '<span class="font-semibold text-light-primary-text">' +
                    escapeHtml(item) +
                    "</span></button>"
                );
            })
            .join("");
    }

    function renderProductSuggestions(container, wrapper, products) {
        if (!container) return;

        if (!products.length) {
            if (wrapper) wrapper.classList.add("hidden");
            container.innerHTML =
                '<p class="py-2 text-sm text-light-secondary-text">No products found</p>';
            return;
        }

        if (wrapper) wrapper.classList.remove("hidden");

        container.innerHTML = products
            .map(function (product) {
                const productId = product.id || product.productId;
                const detailUrl = productId
                    ? "product-detail.php?id=" + productId
                    : "product-detail.php";
                const productName = product.productName || product.name || "Product";
                const displayName =
                    typeof truncateProductName === "function"
                        ? truncateProductName(productName)
                        : productName;

                return (
                    '<div class="flex items-center gap-x-4 py-2 first:pt-0 last:pb-0">' +
                    '<div class="size-10 flex-none rounded-lg bg-[#F4F3F5] overflow-hidden">' +
                    '<img src="' +
                    escapeHtml(getProductImage(product)) +
                    '" alt="" class="w-full h-full object-cover" />' +
                    "</div>" +
                    '<p class="text-base font-semibold text-light-primary-text hover:text-primary transition-colors duration-300">' +
                    '<a href="' +
                    detailUrl +
                    '" title="' +
                    escapeHtml(productName) +
                    '">' +
                    escapeHtml(displayName) +
                    "</a></p></div>"
                );
            })
            .join("");
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

    function openSearchDropdown(input) {
        const container = input.closest(".search-input-container");
        const panel = container ? container.querySelector(".search-result-container") : null;
        if (panel) panel.setAttribute("data-state", "open");
    }

    async function updateSearchDropdown(input) {
        const container = input.closest(".search-input-container");
        if (!container) return;

        const query = input.value.trim();
        const queryWrapper = container.querySelector(".search-query-suggestions-wrapper");
        const queryList = container.querySelector(".search-query-suggestions");
        const productWrapper = container.querySelector(".recommended-search-list-wrapper");
        const productList = container.querySelector(".recommended-search-list");

        renderHistoryList(container.querySelector(".recent-search-list"));

        if (!query) {
            if (queryWrapper) queryWrapper.classList.add("hidden");
            if (queryList) queryList.innerHTML = "";
            if (productWrapper) productWrapper.classList.add("hidden");
            if (productList) productList.innerHTML = "";
            return;
        }

        openSearchDropdown(input);

        if (query.length < 2) {
            const historyMatches = getSearchHistory().filter(function (item) {
                return item.toLowerCase().startsWith(query.toLowerCase());
            });
            renderQuerySuggestions(queryList, queryWrapper, query, historyMatches);
            if (productWrapper) productWrapper.classList.add("hidden");
            if (productList) productList.innerHTML = "";
            return;
        }

        if (productWrapper) productWrapper.classList.remove("hidden");
        if (productList) {
            productList.innerHTML =
                '<p class="py-2 text-sm text-light-secondary-text">Searching...</p>';
        }

        try {
            const products = await fetchSearchProducts(query, 5);
            const suggestions = buildQuerySuggestions(query, products, getSearchHistory());
            renderQuerySuggestions(queryList, queryWrapper, query, suggestions);
            renderProductSuggestions(productList, productWrapper, products);
        } catch (error) {
            console.error("Search suggest error:", error);
            if (productList) {
                productList.innerHTML =
                    '<p class="py-2 text-sm text-light-secondary-text">Unable to load suggestions</p>';
            }
        }
    }

    function initHeaderSearch() {
        renderAllSearchHistories();

        document.body.addEventListener("click", function (event) {
            const resetBtn = event.target.closest(".reset-search-history-btn");
            if (resetBtn) {
                event.preventDefault();
                clearSearchHistory();
                return;
            }

            const removeBtn = event.target.closest(".remove-search-history");
            if (removeBtn) {
                event.preventDefault();
                event.stopPropagation();
                removeSearchHistoryItem(removeBtn.getAttribute("data-query"));
                return;
            }

            const queryItem = event.target.closest(".search-query-item, .recent-search-item");
            if (queryItem && queryItem.getAttribute("data-query")) {
                if (event.target.closest(".remove-search-history")) return;
                event.preventDefault();
                navigateToSearch(queryItem.getAttribute("data-query"));
            }
        });

        const debouncedUpdate = debounce(function (input) {
            updateSearchDropdown(input);
        }, SUGGEST_DEBOUNCE_MS);

        document.querySelectorAll(".header-search-input").forEach(function (input) {
            input.addEventListener("input", function () {
                debouncedUpdate(input);
            });

            input.addEventListener("focus", function () {
                openSearchDropdown(input);
                updateSearchDropdown(input);
            });

            input.addEventListener("keydown", function (event) {
                if (event.key === "Enter") {
                    event.preventDefault();
                    const query = input.value.trim();
                    if (!query) return;
                    navigateToSearch(query);
                }
            });
        });

        const params = new URLSearchParams(window.location.search);
        const urlQuery = params.get("q");
        if (urlQuery) {
            document.querySelectorAll(".header-search-input").forEach(function (input) {
                input.value = urlQuery;
            });
        }
    }

    document.addEventListener("DOMContentLoaded", initHeaderSearch);
})();
