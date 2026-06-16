const API_BASE_CART = typeof domin !== "undefined" ? domin : "https://ecommerce-backend.workarya.com";

window.currentCartCount = 0;

document.addEventListener("DOMContentLoaded", function () {
    // Fetch initial cart count on page load
    fetchGlobalCart();

    // Prevent checkout if user is not logged in
    document.body.addEventListener("click", function (e) {
        const clickedEl = e.target.closest("a, button");
        if (!clickedEl) return;

        const isCheckoutHref = clickedEl.hasAttribute("href") && (clickedEl.getAttribute("href").includes("checkout.php") || clickedEl.getAttribute("href").includes("checkout.html"));
        const isCheckoutText = clickedEl.textContent && clickedEl.textContent.toLowerCase().includes("proceed to checkout");

        if (isCheckoutHref || isCheckoutText) {
            const token = localStorage.getItem("UserToken");
            if (!token) {
                e.preventDefault();
                e.stopPropagation();
                if (typeof Toastify !== "undefined") {
                    Toastify({ text: "⚠️ Please log in to proceed to checkout", duration: 3000, style: { background: "#ffc107", color: "#000" } }).showToast();
                }
                const loginBtn = document.querySelector(".login-page-btn");
                if (loginBtn) loginBtn.click();
            }
        }
    });

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

    // Handle clear entire cart
    document.body.addEventListener("click", function (e) {
        const clearBtn = e.target.closest("#clear-cart-btn");
        if (clearBtn) {
            e.preventDefault();
            clearEntireCart();
        }
    });

    // Handle apply coupon
    document.body.addEventListener("click", function (e) {
        const applyBtn = e.target.closest("#apply-coupon-btn");
        if (applyBtn) {
            e.preventDefault();
            applyCouponCode();
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
            
            renderCartPage(items, grandTotal);

            // Auto-apply saved coupon if cart has items
            const savedCoupon = localStorage.getItem("AppliedCoupon");
            if (savedCoupon && items.length > 0) {
                applyCouponCode(savedCoupon);
            } else if (items.length === 0) {
                localStorage.removeItem("AppliedCoupon");
            }
        } else {
            const message = "Your cart is empty.";
            if (cartList) cartList.innerHTML = `<p class="text-center text-light-secondary-text py-10">${message}</p>`;
            if (cartCountText) cartCountText.textContent = '0 Items in Cart';
            if (cartSubtotalText) cartSubtotalText.textContent = '₹0.00';
            updateCartCountUI(0);
            
            localStorage.removeItem("AppliedCoupon");
            renderCartPage([], 0);
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

function renderCartPage(items, grandTotal) {
    const tbody = document.getElementById("cart-page-tbody");
    if (!tbody) return; // Exit if not on cart page

    const token = localStorage.getItem("UserToken");
    
    if (!items || items.length === 0) {
        const msg = "Your cart is empty.";
        tbody.innerHTML = `<tr><td colspan="5" class="text-center py-10 font-semibold text-gray-500">${msg}</td></tr>`;
        
        const subtotalEl = document.getElementById("cart-page-subtotal");
        const discountEl = document.getElementById("cart-page-discount");
        const totalEl = document.getElementById("cart-page-total");
        const discountLabelEl = document.getElementById("discount-label");
        if (discountLabelEl) discountLabelEl.textContent = "Discount";
        if (subtotalEl) subtotalEl.textContent = "₹0.00";
        if (discountEl) discountEl.textContent = "₹0.00";
        if (totalEl) totalEl.textContent = "₹0.00";
        
        const cartCountTitle = document.querySelector(".pb-\\[70px\\] .flex.items-center.justify-between.mb-6 h5 + p");
        if (cartCountTitle) cartCountTitle.textContent = `(0 items)`;
        return;
    }

    let html = "";
    
    items.forEach(item => {
        const price = item.salePrice ?? item.mrp ?? 0;
        const oldPrice = item.mrp && item.mrp > price ? item.mrp : null;
        const image = item.imageUrl || "assets/images/no-image.png";
        const itemTotal = price * (item.quantity || 1);

        let attributes = [];
        if (item.colorName) attributes.push(`Color: ${item.colorName}`);
        if (item.sizeName) attributes.push(`Size: ${item.sizeName}`);
        const attrText = attributes.length ? `<p class="text-sm leading-[22px] font-normal text-light-secondary-text inline-flex items-center gap-x-2.5">${attributes.join(", ")}</p>` : "";

        html += `
            <tr class="py-4">
                <td data-title="Product" class="py-4 px-3 lg:px-4 product">
                    <div class="flex items-end md:items-start gap-x-4 flex-col md:flex-row gap-y-4">
                        <div class="product-thumbnail max-w-[120px] h-[120px] rounded-2xl bg-[#F4F3F5] shrink-0 overflow-hidden">
                            <img src="${image}" alt="${item.productName}" class="rounded-2xl h-full w-full object-cover" />
                        </div>
                        <div class="flex flex-col gap-y-2 items-end md:items-start">
                            <a class="product-name text-light-primary-text font-semibold line-clamp-2 hover:text-primary transition-colors duration-300" href="product-detail.php?id=${item.productId}">
                                ${item.productName}
                            </a>
                            ${attrText}
                        </div>
                    </div>
                </td>
                <td data-title="Price" class="capitalize py-4 px-3 lg:px-0 product-price">
                    <div class="flex items-center gap-x-3">
                        <span class="text-light-primary-text font-semibold">₹${price.toLocaleString("en-IN", { minimumFractionDigits: 2 })}</span>
                        ${oldPrice ? `<span class="line-through text-light-disabled-text font-normal">₹${oldPrice.toLocaleString("en-IN", { minimumFractionDigits: 2 })}</span>` : ""}
                    </div>
                </td>
                <td data-title="Quantity" class="capitalize py-4 px-3 lg:px-0 product-quantity">
                    <div class="border border-gray-300 inline-flex items-center justify-center rounded-[80px] max-w-[108px] py-2.5 px-4">
                        <button class="cart-qty-btn cart-qty-minus inline-flex items-center justify-center hover:text-primary" data-action="decrease" data-cart-id="${item.cartId}" data-qty="${item.quantity}">
                            <i class="hgi hgi-stroke hgi-remove-circle text-xl leading-6"></i>
                        </button>
                        <input type="text" readonly value="${item.quantity}" class="quantity-input border-0 w-full grow text-center focus:outline-none font-semibold text-light-primary-text" />
                        <button class="cart-qty-btn cart-qty-plus inline-flex items-center justify-center hover:text-primary" data-action="increase" data-cart-id="${item.cartId}" data-qty="${item.quantity}">
                            <i class="hgi hgi-stroke hgi-add-circle text-xl leading-6"></i>
                        </button>
                    </div>
                </td>
                <td data-title="Total Price" class="capitalize py-4 px-3 lg:px-0 product-total-price">
                    <p class="font-semibold text-light-primary-text">₹${itemTotal.toLocaleString("en-IN", { minimumFractionDigits: 2 })}</p>
                </td>
                <td data-title="Action" class="capitalize py-4 px-3 lg:px-4 product-actions">
                    <div class="flex items-center justify-center gap-x-2 md:gap-x-6">
                        <button class="remove-from-cart-btn inline-flex items-center justify-center product-remove" data-cart-id="${item.cartId}">
                            <i class="hgi hgi-stroke hgi-delete-01 text-2xl leading-6 text-light-primary-text hover:text-error transition-colors"></i>
                        </button>
                    </div>
                </td>
            </tr>
        `;
    });

    tbody.innerHTML = html;

    const subtotalEl = document.getElementById("cart-page-subtotal");
    const discountEl = document.getElementById("cart-page-discount");
    const totalEl = document.getElementById("cart-page-total");
    const discountLabelEl = document.getElementById("discount-label");
    if (discountLabelEl) discountLabelEl.textContent = "Discount";
    
    if (subtotalEl) subtotalEl.textContent = `₹${grandTotal.toLocaleString("en-IN", { minimumFractionDigits: 2 })}`;
    if (discountEl) discountEl.textContent = "₹0.00";
    if (totalEl) totalEl.textContent = `₹${grandTotal.toLocaleString("en-IN", { minimumFractionDigits: 2 })}`;
    
    const cartCountTitle = document.querySelector(".pb-\\[70px\\] .flex.items-center.justify-between.mb-6 h5 + p");
    if (cartCountTitle) cartCountTitle.textContent = `(${items.length} item${items.length !== 1 ? 's' : ''})`;
}

function clearEntireCart() {
    const container = document.createElement("div");

    container.innerHTML = `
        <div style="font-weight:bold;margin-bottom:10px;text-align:center;color:#fff;">
            Are you sure you want to clear your entire cart?
        </div>
        <div style="display:flex;justify-content:center;gap:10px;">
            <button class="toast-yes-btn" style="background:#fff;color:#ff416c;border:none;padding:6px 15px;border-radius:5px;font-weight:bold;cursor:pointer;">
                Yes, Clear All
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

            const response = await fetch(`${API_BASE_CART}/api/addcart/clear`, {
                method: "DELETE",
                headers: headers
            });
            
            const result = await response.json();

            if (response.ok || result.status || result.success || result?.value?.status === true) {
                localStorage.removeItem("AppliedCoupon");
                Toastify({ text: "✅ Cart cleared successfully", duration: 3000, style: { background: "linear-gradient(to right, #00b09b, #96c93d)" } }).showToast();
                fetchGlobalCart(); // Re-fetch to update totals, counts, and empty the item list
            } else {
                Toastify({ text: `❌ Failed to clear cart: ${result.message || 'Unknown error'}`, duration: 3000, style: { background: "linear-gradient(to right, #ff416c, #ff4b2b)" } }).showToast();
            }
        } catch (err) {
            console.error("Error clearing cart:", err);
            Toastify({ text: "❌ Server error", duration: 3000, style: { background: "linear-gradient(to right, #ff416c, #ff4b2b)" } }).showToast();
        }
    });

    container.querySelector(".toast-no-btn").addEventListener("click", function () {
        toast.hideToast();
    });
}

async function applyCouponCode(savedCode = null) {
    const couponInput = document.getElementById("coupon-code-input");
    let couponCode = typeof savedCode === "string" ? savedCode : null;

    if (!couponCode && couponInput) {
        couponCode = couponInput.value.trim();
    }

    if (!couponCode) {
        if (!savedCode && typeof Toastify !== "undefined") Toastify({ text: "⚠️ Please enter a coupon code", duration: 3000, style: { background: "#ffc107", color: "#000" } }).showToast();
        return;
    }

    const applyBtn = document.getElementById("apply-coupon-btn");
    if (applyBtn && !savedCode) {
        applyBtn.disabled = true;
        applyBtn.innerHTML = "Applying...";
    }

    try {
        const token = localStorage.getItem("UserToken");
        const headers = {};
        if (token) headers["Authorization"] = "Bearer " + token;

        const formData = new FormData();
        formData.append("CouponCode", couponCode);

        const response = await fetch(`${API_BASE_CART}/api/coupons/apply`, {
            method: "POST",
            headers: headers,
            body: formData
        });

        const result = await response.json();

        if (response.ok && (result.success || result.status)) {
            if (!savedCode && typeof Toastify !== "undefined") Toastify({ text: `✅ Coupon applied successfully!`, duration: 3000, style: { background: "#00b09b" } }).showToast();
            
            localStorage.setItem("AppliedCoupon", result.couponCode || couponCode);
            if (couponInput && couponInput.value !== (result.couponCode || couponCode)) {
                couponInput.value = result.couponCode || couponCode;
            }
            
            const subtotalEl = document.getElementById("cart-page-subtotal");
            const discountEl = document.getElementById("cart-page-discount");
            const totalEl = document.getElementById("cart-page-total");
            const discountLabelEl = document.getElementById("discount-label");
            
            const grandTotal = result.grandTotal || 0;
            const discountAmount = result.discountAmount || 0;
            const finalAmount = result.finalAmount || 0;
            
            if (subtotalEl) subtotalEl.textContent = `₹${grandTotal.toLocaleString("en-IN", { minimumFractionDigits: 2 })}`;
            if (discountEl) discountEl.textContent = discountAmount > 0 ? `-₹${discountAmount.toLocaleString("en-IN", { minimumFractionDigits: 2 })}` : `₹0.00`;
            if (totalEl) totalEl.textContent = `₹${finalAmount.toLocaleString("en-IN", { minimumFractionDigits: 2 })}`;
            
            if (discountLabelEl) {
                if (discountAmount > 0) {
                    discountLabelEl.innerHTML = 'Discount <span class="text-xs text-primary font-semibold ml-1"></span>';
                    discountLabelEl.querySelector('span').textContent = `(${result.couponCode || couponCode})`;
                } else {
                    discountLabelEl.textContent = "Discount";
                }
            }
        } else {
            if (!savedCode && typeof Toastify !== "undefined") Toastify({ text: `❌ Failed to apply coupon: ${result.message || 'Invalid coupon'}`, duration: 3000, style: { background: "#ff416c" } }).showToast();
            localStorage.removeItem("AppliedCoupon");
            if (couponInput) couponInput.value = "";
            
            const discountLabelEl = document.getElementById("discount-label");
            const discountEl = document.getElementById("cart-page-discount");
            if (discountLabelEl) discountLabelEl.textContent = "Discount";
            if (discountEl) discountEl.textContent = "₹0.00";
        }
    } catch (err) {
        console.error("Error applying coupon:", err);
        if (!savedCode && typeof Toastify !== "undefined") Toastify({ text: "❌ Server error while applying coupon", duration: 3000, style: { background: "#ff416c" } }).showToast();
    } finally {
        if (applyBtn && !savedCode) {
            applyBtn.disabled = false;
            applyBtn.innerHTML = "Apply";
        }
    }
}