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

    // Refresh cart when opening sidebar
    document.body.addEventListener("click", function(e) {
        if (e.target.closest(".cart-sidebar-btn")) {
            fetchGlobalCart();
        }
    });

    // Handle remove from cart in sidebar
    document.body.addEventListener("click", function (e) {
        const removeBtn = e.target.closest(".remove-from-cart-btn");
        if (removeBtn) {
            e.preventDefault();
            const cartId = removeBtn.getAttribute("data-cart-id");
            if (cartId) {
                deleteCartItem(cartId);
            }
        }
    });

    // Handle quantity change in sidebar
    document.body.addEventListener("click", function (e) {
        const qtyBtn = e.target.closest(".cart-qty-btn");
        if (qtyBtn) {
            e.preventDefault();
            const cartId = qtyBtn.getAttribute("data-cart-id");
            const action = qtyBtn.getAttribute("data-action");
            const currentQty = parseInt(qtyBtn.getAttribute("data-qty"), 10);

            if (!cartId || !action) return;

            // If current quantity is 1 and user tries to decrease, show the delete confirmation instead.
            if (action === "decrease" && currentQty <= 1) {
                deleteCartItem(cartId);
                return;
            }

            const quantityChange = action === "increase" ? 1 : -1;
            updateCartItemQuantity(cartId, quantityChange, qtyBtn);
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

function deleteCartItem(cartId) {
    const container = document.createElement("div");

    container.innerHTML = `
        <div style="font-weight:bold;margin-bottom:10px;text-align:center;color:#fff;">
            Are you sure you want to remove this item from your cart?
        </div>
        <div style="display:flex;justify-content:center;gap:10px;">
            <button class="toast-yes-btn" style="background:#fff;color:#ff416c;border:none;padding:6px 15px;border-radius:5px;font-weight:bold;cursor:pointer;">
                Yes, Remove
            </button>
            <button class="toast-no-btn" style="background:transparent;color:#fff;border:1px solid #fff;padding:6px 15px;border-radius:5px;cursor:pointer;">
                No
            </button>
        </div>
    `;

    const toast = Toastify({
        node: container,
        duration: -1,
        close: false,
        gravity: "top",
        position: "center",
        style: {
            background: "linear-gradient(to right, #ff416c, #ff4b2b)",
            borderRadius: "10px"
        }
    });

    toast.showToast();

    container.querySelector(".toast-yes-btn").addEventListener("click", async function () {
        toast.hideToast();
        
        try {
            const token = localStorage.getItem("UserToken");
            const headers = { "Content-Type": "application/json" };
            if (token) headers["Authorization"] = "Bearer " + token;

            const response = await fetch(`${API_BASE_CART}/api/addcart/delete/${cartId}`, {
                method: "DELETE",
                headers: headers
            });
            
            const result = await response.json();

            if (response.ok || result.status || result.success || result?.value?.status === true) {
                Toastify({ text: "✅ Item removed from cart", duration: 3000, style: { background: "linear-gradient(to right, #00b09b, #96c93d)" } }).showToast();
                fetchGlobalCart(); // Re-fetch to update totals, counts, and the item list
            } else {
                Toastify({ text: `❌ Failed to remove: ${result.message || 'Unknown error'}`, duration: 3000, style: { background: "linear-gradient(to right, #ff416c, #ff4b2b)" } }).showToast();
            }
        } catch (err) {
            console.error("Error removing from cart:", err);
            Toastify({ text: "❌ Server error", duration: 3000, style: { background: "linear-gradient(to right, #ff416c, #ff4b2b)" } }).showToast();
        }
    });

    container.querySelector(".toast-no-btn").addEventListener("click", function () {
        toast.hideToast();
    });
}

async function updateCartItemQuantity(cartId, quantityChange, btnElement) {
    const buttonContainer = btnElement.closest(".border");
    const buttons = buttonContainer.querySelectorAll('.cart-qty-btn');
    const input = buttonContainer.querySelector('.quantity-input');

    buttons.forEach(btn => btn.disabled = true);
    if (input) input.style.opacity = 0.5;

    try {
        const token = localStorage.getItem("UserToken");
        const headers = {};
        if (token) headers["Authorization"] = "Bearer " + token;

        const formData = new FormData();
        formData.append("CartId", cartId);
        formData.append("Quantity", quantityChange);

        const response = await fetch(`${API_BASE_CART}/api/addcart/update-quantity`, {
            method: "PUT",
            headers: headers,
            body: formData
        });

        const result = await response.json();

        if (response.ok || result.status || result.success || result?.value?.status === true) {
            // Success, just refresh the whole cart for consistency
            fetchGlobalCart();
        } else {
            Toastify({ text: `❌ Update failed: ${result.message || 'Unknown error'}`, duration: 3000, style: { background: "linear-gradient(to right, #ff416c, #ff4b2b)" } }).showToast();
            // Re-enable on failure
            buttons.forEach(btn => btn.disabled = false);
            if (input) input.style.opacity = 1;
        }
    } catch (err) {
        console.error("Error updating cart quantity:", err);
        Toastify({ text: "❌ Server error", duration: 3000, style: { background: "linear-gradient(to right, #ff416c, #ff4b2b)" } }).showToast();
        // Re-enable on failure
        buttons.forEach(btn => btn.disabled = false);
        if (input) input.style.opacity = 1;
    }
    // On success, fetchGlobalCart will re-render the whole list, so we don't need to manually re-enable buttons.
}