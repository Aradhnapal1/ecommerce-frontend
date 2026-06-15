const API_BASE_CART = typeof domin !== "undefined" ? domin : "https://ecommerce-backend.workarya.com";

window.currentCartCount = 0;

document.addEventListener("DOMContentLoaded", function () {
    // Fetch initial cart count on page load
    fetchGlobalCart();

    // Event delegation to capture clicks on any "Add to Cart" button dynamically
    document.body.addEventListener("click", async function (e) {
        // Include the product details button via its ID as well
        const addToCartBtn = e.target.closest(".add-to-cart-btn") || e.target.closest("#product-detail-add-to-cart-btn");
        if (!addToCartBtn) return;

        e.preventDefault();

        const productId = addToCartBtn.getAttribute("data-product-id");
        
        if (!productId || productId === "undefined" || productId === "null") {
            if (typeof Toastify !== "undefined") {
                Toastify({ text: "❌ Invalid Product ID", duration: 3000, style: { background: "#ff416c" } }).showToast();
            }
            return;
        }

        // Default quantity is 1
        let quantity = 1;

        // Find if there's a quantity input nearby (like in Quick View or Product Detail pages)
        const container = addToCartBtn.closest(".product-add-to-cart-btn-section") || addToCartBtn.closest(".quick-view-sidebar") || document;
        const quantityInput = container.querySelector(".quantity-input") || document.getElementById("product-detail-quantity");
        
        if (quantityInput) {
            quantity = parseInt(quantityInput.value) || 1;
        }

        const formData = new FormData();
        formData.append("productId", productId);
        formData.append("quantity", quantity);

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

    // Refresh cart when opening sidebar
    document.body.addEventListener("click", function(e) {
        if (e.target.closest(".cart-sidebar-btn")) {
            fetchGlobalCart();
        }
    });
});

async function fetchGlobalCart() {
    const cartList = document.getElementById("cart-sidebar-list");
    const cartCountText = document.getElementById("cart-sidebar-count");
    const cartSubtotalText = document.getElementById("cart-sidebar-subtotal");

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
            
            const totalItems = result.totalItems ?? items.length;
            const grandTotal = result.grandTotal ?? result.data?.grandTotal ?? result.value?.data?.grandTotal ?? items.reduce((acc, item) => acc + ((item.salePrice ?? item.mrp ?? 0) * (item.quantity || 1)), 0);

            // Update UI count automatically
            updateCartCountUI(totalItems);

            if (cartCountText) cartCountText.textContent = `${totalItems} Item${totalItems !== 1 ? 's' : ''} in Cart`;
            if (cartSubtotalText) cartSubtotalText.textContent = `₹${grandTotal.toLocaleString("en-IN", { minimumFractionDigits: 2 })}`;

            if (cartList) {
                if (items.length === 0) {
                    cartList.innerHTML = '<p class="text-center text-light-secondary-text py-10">Your cart is empty.</p>';
                } else {
                    cartList.innerHTML = items.map(item => {
                        const price = item.salePrice ?? item.mrp ?? 0;
                        const oldPrice = item.mrp && item.mrp > price ? item.mrp : null;
                        const image = item.imageUrl || "assets/images/no-image.png";
                        
                        let attributes = [];
                        if (item.colorName) attributes.push(`Color: ${item.colorName}`);
                        if (item.sizeName) attributes.push(`Size: ${item.sizeName}`);
                        const attrText = attributes.length ? `<p class="text-sm leading-[22px]">${attributes.join(", ")}</p>` : "";

                        return `
                            <div class="cart-product-item flex flex-col sm:flex-row items-center sm:gap-x-4 gap-y-2 sm:gap-y-0 p-4 border border-gray-300 rounded-2xl">
                                <a class='cart-product-item-image sm:w-[102px] sm:h-[102px] rounded-xl bg-[#F4F3F5] overflow-hidden relative' href='product-detail.php?id=${item.productId}'>
                                    <img src="${image}" alt="${item.productName}" class="w-full h-full object-cover rounded-xl" />
                                </a>
                                <div class="cart-product-item-content flex flex-col gap-y-2 flex-1 w-full">
                                    <div class="flex items-center justify-between gap-x-2">
                                        <h6 class="text-base font-semibold line-clamp-1">
                                            <a href='product-detail.php?id=${item.productId}'>${item.productName}</a>
                                        </h6>
                                        <div class="cart-edit-remove flex items-center gap-x-3">
                                            <button class="remove-from-cart-btn" data-cart-id="${item.cartId}">
                                                <i class="hgi hgi-stroke hgi-delete-01 text-xl text-light-primary-text hover:text-error transition-colors"></i>
                                            </button>
                                        </div>
                                    </div>
                                    ${attrText}
                                    <div class="flex items-center justify-between">
                                        <div class="price-section flex items-center gap-x-3">
                                            <span class="current-price text-base font-semibold text-light-primary-text">₹${price.toLocaleString("en-IN", { minimumFractionDigits: 2 })}</span>
                                            ${oldPrice ? `<span class="old-price text-base text-light-disabled-text line-through">₹${oldPrice.toLocaleString("en-IN", { minimumFractionDigits: 2 })}</span>` : ""}
                                        </div>
                                        <div class="border border-gray-300 inline-flex items-center justify-center rounded-[80px] max-w-[108px] py-2.5 px-4">
                                            <button class="cart-qty-btn cart-qty-minus inline-flex items-center justify-center hover:text-primary" data-action="decrease" data-cart-id="${item.cartId}" data-qty="${item.quantity}">
                                                <i class="hgi hgi-stroke hgi-remove-circle text-2xl leading-6"></i>
                                            </button>
                                            <input type="text" readonly value="${item.quantity}" class="quantity-input border-0 w-full grow text-center focus:outline-none font-semibold text-light-primary-text" />
                                            <button class="cart-qty-btn cart-qty-plus inline-flex items-center justify-center hover:text-primary" data-action="increase" data-cart-id="${item.cartId}" data-qty="${item.quantity}">
                                                <i class="hgi hgi-stroke hgi-add-circle text-2xl leading-6"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                    }).join("");
                }
            }
        } else {
            const message = !token
                ? "Please login to view your cart."
                : "Your cart is empty.";
            if (cartList) cartList.innerHTML = `<p class="text-center text-light-secondary-text py-10">${message}</p>`;
            if (cartCountText) cartCountText.textContent = '0 Items in Cart';
            if (cartSubtotalText) cartSubtotalText.textContent = '₹0.00';
            updateCartCountUI(0);
        }
    } catch (e) {
        console.error("Error fetching global cart count", e);
        if (cartList) cartList.innerHTML = '<p class="text-center text-error py-10">Error loading cart details.</p>';
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
                span.textContent = `${count} ${count !== 1 ? 'Items' : 'Item'}`;
            }
        });
    });

    // If the cart sidebar itself has a header counting items, sync it
    const sidebarHeaderCount = document.querySelector(".cart-products-header p");
    if (sidebarHeaderCount && sidebarHeaderCount.textContent.includes("Item")) {
        sidebarHeaderCount.textContent = `${count} Item${count !== 1 ? 's' : ''} in Cart`;
    }
}