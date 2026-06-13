const API_BASE_WISHLIST = typeof domin !== "undefined" ? domin : "https://ecommerce-backend.workarya.com";

document.addEventListener("DOMContentLoaded", function () {
    
    // Using Event Delegation so it works on dynamically generated product cards
    document.body.addEventListener("click", async function (e) {
        
        // Check if clicked element or its parent is the wishlist button
        const wishlistBtn = e.target.closest(".add-to-wishlist-btn");
        if (!wishlistBtn) return;

        e.preventDefault();

        const productId = wishlistBtn.getAttribute("data-product-id");
        const variantId = wishlistBtn.getAttribute("data-variant-id");

        if (!productId || productId === "undefined") {
            console.error("Product ID is missing.");
            if (typeof Toastify !== "undefined") {
                Toastify({ text: "❌ Invalid Product ID", duration: 3000, style: { background: "#ff416c" } }).showToast();
            }
            return;
        }

        // Prepare Form Data
        const formData = new FormData();
        formData.append("ProductId", productId);
        
        if (variantId && variantId !== "undefined") {
            formData.append("variantId", variantId);
        }

        // Find the icon to make it red later
        const icon = wishlistBtn.querySelector("i.hgi-favourite");

        // Prevent multiple clicks while processing
        wishlistBtn.style.pointerEvents = "none";
        wishlistBtn.style.opacity = "0.7";

        try {
            const response = await fetch(`${API_BASE_WISHLIST}/api/wishlist/add`, {
                method: "POST",
                body: formData
                // Add Authorization header here if your API requires a Bearer token:
                // headers: { "Authorization": "Bearer " + localStorage.getItem("token") }
            });

            const result = await response.json();

            if (response.ok || result.status || result.success || result?.value?.status === true) {
                // Turn the heart icon RED and Filled
                if (icon) {
                    icon.classList.remove("hgi-stroke");
                    icon.classList.add("hgi-solid"); // If your icon pack uses hgi-solid for filled
                    icon.style.color = "red";
                    icon.style.fill = "red";
                }
            } else {
                console.error("Failed to add to wishlist:", result.message || "Unknown error");
            }
        } catch (error) {
            console.error("Error adding to wishlist:", error);
        } finally {
            // Restore button clickability
            wishlistBtn.style.pointerEvents = "auto";
            wishlistBtn.style.opacity = "1";
        }
    });

    // Handle remove from wishlist
    document.body.addEventListener("click", function (e) {
        const removeBtn = e.target.closest(".remove-wishlist-btn");
        if (removeBtn) {
            e.preventDefault();
            const wishlistId = removeBtn.getAttribute("data-wishlist-id");
            if (wishlistId) {
                const tr = removeBtn.closest("tr");
                deleteWishlistItem(wishlistId, tr);
            }
        }
    });

    // Load wishlist on page load if the table exists
    if (document.getElementById("wishlist-tbody")) {
        loadWishlist();
    }
});

async function loadWishlist() {
    const tbody = document.getElementById("wishlist-tbody");
    const countEl = document.getElementById("wishlist-item-count");
    
    if (!tbody) return;

    try {
        const token = localStorage.getItem("UserToken");
        const headers = { "Content-Type": "application/json" };
        
        if (token) {
            headers["Authorization"] = "Bearer " + token;
        }

        const response = await fetch(`${API_BASE_WISHLIST}/api/wishlist/get`, {
            method: "GET",
            headers: headers
        });
        const result = await response.json();

        if (response.ok || result.status || result.success || result?.value?.status === true) {
            const items = result.data || result.value?.data || [];
            
            if (countEl) {
                countEl.innerText = `${items.length} item${items.length !== 1 ? 's' : ''}`;
            }
            
            if (items.length === 0) {
                tbody.innerHTML = `<tr><td colspan="6" class="text-center py-6 font-semibold text-gray-500">Your wishlist is empty.</td></tr>`;
                return;
            }
            
            let html = "";
            items.forEach(wishlistItem => {
                const product = wishlistItem.item;
                if (!product) return;
                
                const salePrice = product.salePrice || 0;
                const mrp = product.mrp || 0;
                const stockText = product.stock > 0 ? `${product.stock} in stock` : "Out of stock";
                const image = product.image || "assets/images/no-image.png";
                const slug = product.slug || "";
                const name = product.name || "Unknown Product";

                html += `
                <tr class="py-4">
                    <td class="py-4 pl-4 hidden lg:table-cell product-checkbox">
                        <div class="has-[input:checked]:hover:bg-primary/8 flex items-center justify-center w-10 h-10 bg-transparent rounded-full hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out">
                            <label class="relative inline-flex w-5 h-5 cursor-pointer items-center justify-center">
                                <input type="checkbox" class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all" />
                                <span class="absolute inset-0 inline-flex items-center justify-center text-white opacity-0 peer-checked:opacity-100 transition-all">
                                    <i class="hgi hgi-stroke hgi-tick-02 text-[18px] leading-[18px]"></i>
                                </span>
                            </label>
                        </div>
                    </td>
                    <td data-title="Product" class="py-4 px-3 lg:px-0 product">
                        <div class="flex gap-x-4 gap-y-4 flex-col md:flex-row items-end md:items-start">
                            <div class="product-thumbnail max-w-[100px] w-[100px] h-[100px] rounded-2xl bg-[#F4F3F5]">
                                <img src="${image}" alt="${name}" class="rounded-2xl object-cover w-full h-full" />
                            </div>
                            <div class="flex flex-col gap-y-3 items-end md:items-start">
                                <a class="text-light-primary-text font-semibold truncate hover:text-primary transition-colors duration-300" href="product-detail.php?slug=${slug}">
                                    ${name}
                                </a>
                                <p class="text-sm leading-[22px] font-medium text-primary product-category">
                                    ${product.itemType || 'Product'}
                                </p>
                                <div class="rating-section flex items-center">
                                    <div class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%" class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"></div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(0)</span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td data-title="Stock" class="capitalize py-4 px-3 lg:px-0 product-stock">
                        <span class="text-light-primary-text font-semibold">${stockText}</span>
                    </td>
                    <td data-title="Price" class="capitalize py-4 px-3 lg:px-3 product-price">
                        <div class="flex items-center flex-row lg:flex-col 2xl:flex-row gap-x-3">
                            <span class="text-light-primary-text font-semibold product-offer-price">₹${salePrice.toLocaleString('en-IN')}</span>
                            ${mrp > salePrice ? `<span class="line-through text-light-disabled-text font-normal">₹${mrp.toLocaleString('en-IN')}</span>` : ''}
                        </div>
                    </td>
                    <td data-title="Buy Action" class="capitalize py-4 px-3 lg:px-0 product-actions">
                        <div class="flex items-center flex-row lg:flex-col xl:flex-row gap-x-2 md:gap-4">
                            <button class="btn btn-warning px-4 md:px-[22px] rounded-[80px] font-semibold py-[11px] md:text-base md:leading-[26px] text-[13px] leading-[22px] product-buy-now">
                                Buy Now
                            </button>
                            <a class="btn btn-primary font-semibold md:px-6 px-2.5 py-[11px] rounded-[80px] md:text-base md:leading-[26px] text-[13px] leading-[22px] product-add-to-cart" href="javascript:void(0)" data-product-id="${product.id}">
                                <span class="inline-flex items-center justify-center">
                                    <i class="hgi hgi-stroke hgi-shopping-cart-02 md:text-2xl text-xl md:leading-6 leading-5"></i>
                                </span>
                                Add to Cart
                            </a>
                        </div>
                    </td>
                    <td data-title="Remove" class="capitalize text-center py-4 px-3 lg:px-0 pr-4 product-remove">
                        <button class="remove-wishlist-btn" data-wishlist-id="${wishlistItem.id}">
                            <span class="inline-flex items-center justify-center">
                                <i class="hgi hgi-stroke hgi-delete-01 text-2xl leading-6"></i>
                            </span>
                        </button>
                    </td>
                </tr>
                `;
            });
            
            tbody.innerHTML = html;
        } else {
            tbody.innerHTML = `<tr><td colspan="6" class="text-center py-6 font-semibold text-red-500">Failed to load wishlist</td></tr>`;
        }
    } catch (error) {
        console.error("Error loading wishlist:", error);
        tbody.innerHTML = `<tr><td colspan="6" class="text-center py-6 font-semibold text-red-500">Error loading wishlist</td></tr>`;
    }
}

function deleteWishlistItem(id, rowElement) {
    const container = document.createElement("div");

    container.innerHTML = `
        <div style="font-weight:bold;margin-bottom:10px;text-align:center;color:#fff;">
            Are you sure you want to remove this item?
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

            const response = await fetch(`${API_BASE_WISHLIST}/api/wishlist/delete/${id}`, {
                method: "DELETE",
                headers: headers
            });
            
            const result = await response.json();

            if (response.ok || result.status || result.success || result?.value?.status === true) {
                Toastify({ text: "✅ Item removed from wishlist", duration: 3000, style: { background: "linear-gradient(to right, #00b09b, #96c93d)" } }).showToast();
                
                if (rowElement) {
                    rowElement.remove();
                }
                
                // Update count and show empty message if no items left
                const countEl = document.getElementById("wishlist-item-count");
                const tbody = document.getElementById("wishlist-tbody");
                if (countEl && tbody) {
                    const currentCount = tbody.querySelectorAll("tr").length;
                    countEl.innerText = `${currentCount} item${currentCount !== 1 ? 's' : ''}`;
                    if (currentCount === 0) {
                        tbody.innerHTML = `<tr><td colspan="6" class="text-center py-6 font-semibold text-gray-500">Your wishlist is empty.</td></tr>`;
                    }
                }
            } else {
                Toastify({ text: "❌ Failed to remove item", duration: 3000, style: { background: "linear-gradient(to right, #ff416c, #ff4b2b)" } }).showToast();
            }
        } catch (err) {
            console.error(err);
            Toastify({ text: "❌ Server error", duration: 3000, style: { background: "linear-gradient(to right, #ff416c, #ff4b2b)" } }).showToast();
        }
    });

    container.querySelector(".toast-no-btn").addEventListener("click", function () {
        toast.hideToast();
    });
}