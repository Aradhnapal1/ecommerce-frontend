const API_BASE_CART = typeof domin !== "undefined" ? domin : "https://ecommerce-backend.workarya.com";

window.currentCartCount = 0;

document.addEventListener("DOMContentLoaded", function () {
    // Fetch initial cart count on page load
    fetchGlobalCart();

    // Event delegation to capture clicks on any "Add to Cart" button dynamically
    document.body.addEventListener("click", async function (e) {
        // Include the product details button via its ID as well
        const addToCartBtn = e.target.closest(".add-to-cart-btn") || e.target.closest("#product-detail-add-to-cart-btn") || e.target.closest(".product-add-to-cart");
        if (!addToCartBtn) return;

        e.preventDefault();

        const container = addToCartBtn.closest(".product-add-to-cart-btn-section") || addToCartBtn.closest(".quick-view-sidebar") || addToCartBtn.closest(".product-card-1") || document;

        let productId = addToCartBtn.getAttribute("data-product-id");

        // Fallback to searching nearby elements for the ID
        if (!productId) {
            const idElement = container.querySelector("[data-product-id]");
            if (idElement) productId = idElement.getAttribute("data-product-id");
        }

        // Fallback to URL parameter on Product Details page
        if (!productId) {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('id')) {
                productId = urlParams.get('id');
            }
        }
        
        if (!productId || productId === "undefined" || productId === "null") {
            if (typeof Toastify !== "undefined") {
                Toastify({ text: "❌ Invalid Product ID", duration: 3000, style: { background: "#ff416c" } }).showToast();
            }
            return;
        }

        let variantId = addToCartBtn.getAttribute("data-variant-id") || "";
        if (!variantId) {
            const activeColorBtn = container.querySelector(".color-variation-item button.border-primary, .color-variation-item button.active");
            if (activeColorBtn && activeColorBtn.hasAttribute("data-variant-id")) {
                variantId = activeColorBtn.getAttribute("data-variant-id");
            }
        }

        // Default quantity is 1
        let quantity = 1;

        // Find if there's a quantity input nearby (like in Quick View or Product Detail pages)
        const quantityInput = container.querySelector(".quantity-input") || document.getElementById("product-detail-quantity");
        
        if (quantityInput) {
            quantity = parseInt(quantityInput.value) || 1;
        }

        const formData = new FormData();
        formData.append("productId", productId);
        formData.append("quantity", quantity);
        if (variantId && variantId !== "undefined" && variantId !== "null") {
            formData.append("variantId", variantId);
        }

        addToCartBtn.style.pointerEvents = "none";
        addToCartBtn.style.opacity = "0.7";
        const originalText = addToCartBtn.innerHTML;
        addToCartBtn.innerHTML = "<span>Adding...</span>";

        try {
            const token = localStorage.getItem("UserToken");
            const headers = {};
            if (token) headers["Authorization"] = "Bearer " + token;

            const response = await fetch(`${API_BASE_CART}/api/addcart/add`, {
                method: "POST",
                headers: headers,
                body: formData
            });

            const result = await response.json();

            if (response.ok || result.status || result.success || result?.value?.status === true) {
                if (typeof Toastify !== "undefined") Toastify({ text: "✅ Added to Cart successfully!", duration: 3000, style: { background: "#00b09b" } }).showToast();
                
                // Update Cart Item Count in Header instantly
                updateCartCountUI(window.currentCartCount + quantity);
                
                // Sync with server just in case
                fetchGlobalCart();
            } else {
                if (typeof Toastify !== "undefined") Toastify({ text: "❌ Failed to add: " + (result.message || "Unknown error"), duration: 3000, style: { background: "#ff416c" } }).showToast();
            }
        } catch (error) {
            console.error("Error adding to cart:", error);
            if (typeof Toastify !== "undefined") Toastify({ text: "❌ Server Error", duration: 3000, style: { background: "#ff416c" } }).showToast();
        } finally {
            addToCartBtn.style.pointerEvents = "auto";
            addToCartBtn.style.opacity = "1";
            addToCartBtn.innerHTML = originalText;
        }
    });
});

async function fetchGlobalCart() {
    try {
        const token = localStorage.getItem("UserToken");
        const headers = { "Content-Type": "application/json" };
        if (token) headers["Authorization"] = "Bearer " + token;

        const response = await fetch(`${API_BASE_CART}/api/addcart/list`, {
            method: "GET",
            headers: headers
        });
        
        const result = await response.json();
        
        if (response.ok || result.status || result.success || result?.value?.status === true) {
            let items = [];
            if (Array.isArray(result)) items = result;
            else if (Array.isArray(result?.data)) items = result.data;
            else if (Array.isArray(result?.value?.data)) items = result.value.data;
            else if (Array.isArray(result?.value)) items = result.value;
            else if (result?.data?.items && Array.isArray(result.data.items)) items = result.data.items;
            else if (result?.value?.items && Array.isArray(result.value.items)) items = result.value.items;
            
            // Update UI count automatically
            updateCartCountUI(items.length);
        }
    } catch (e) {
        console.error("Error fetching global cart count", e);
    }
}

window.updateCartCountUI = updateCartCountUI;
function updateCartCountUI(count) {
    window.currentCartCount = count;
    
    // Find all cart badge spans across headers
    const cartBtns = document.querySelectorAll(".cart-sidebar-btn");
    cartBtns.forEach(btn => {
        const spans = btn.querySelectorAll("span");
        spans.forEach(span => {
            const text = span.textContent.trim();
            // Auto-updates any text matching "0- Items" or "0 Items"
            if (text.match(/^\d+\s*-\s*Items?$/i) || text.match(/^\d+\s*Items?$/i)) {
                span.textContent = `${count}- Items`;
            }
        });
    });

    // If the cart sidebar itself has a header counting items, sync it
    const sidebarHeaderCount = document.querySelector(".cart-products-header p");
    if (sidebarHeaderCount && sidebarHeaderCount.textContent.includes("Item")) {
        sidebarHeaderCount.textContent = `${count} Item${count !== 1 ? 's' : ''} in Cart`;
    }
}