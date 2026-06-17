const API_BASE_ADDRESS = typeof domin !== "undefined" ? domin : "https://ecommerce-backend.workarya.com";

document.addEventListener("DOMContentLoaded", function () {
    const addressContainer = document.getElementById("saved-addresses-container");
    const dashboardAddressContainer = document.getElementById("my-dashboard-addresses-container");
    const addAddressForm = document.getElementById("add-address-form");
    const editAddressForm = document.getElementById("edit-address-form");

    // Prefill form if we are on edit address tab
    const urlParams = new URLSearchParams(window.location.search);
    const tab = urlParams.get('tab');
    const editId = urlParams.get('id');
    if (tab === 'edit-address' && editId) {
        prefetchAddressForEdit(editId);
    }

    // Load addresses on page load if container exists
    if (addressContainer) {
        loadSavedAddresses();
    }

    // Load addresses on dashboard page if container exists
    if (dashboardAddressContainer) {
        loadDashboardAddresses();
    }

    // Handle Add New Address
    if (addAddressForm) {
        addAddressForm.addEventListener("submit", async function (e) {
            e.preventDefault();
            
            const token = localStorage.getItem("UserToken");
            if (!token) {
                if (typeof Toastify !== "undefined") Toastify({ text: "⚠️ Please login to save an address", duration: 3000, style: { background: "#ff416c" } }).showToast();
                return;
            }

            const saveBtn = addAddressForm.querySelector('button[type="submit"]');
            const originalBtnText = saveBtn ? saveBtn.innerHTML : "Save";
            if (saveBtn) {
                saveBtn.disabled = true;
                saveBtn.innerHTML = "Saving...";
            }

            // Get values from the form correctly
            const fullName = document.getElementById("full_name")?.value.trim();
            const mobile = document.getElementById("phone_number")?.value.trim();
            const alternateMobile = document.getElementById("alternate_mobile")?.value.trim();
            const pincode = document.getElementById("pincode")?.value.trim();
            
            const countrySelect = document.getElementById("country_region");
            const country = countrySelect ? countrySelect.options[countrySelect.selectedIndex].text : "India";
            
            const state = document.getElementById("state")?.value.trim();
            const city = document.getElementById("city")?.value.trim();
            const addressLine1 = document.getElementById("address_line1")?.value.trim();
            const addressLine2 = document.getElementById("address_line2")?.value.trim();
            const landmark = document.getElementById("landmark")?.value.trim();
            
            const addressTypeElement = document.querySelector('input[name="address-type"]:checked');
            let addressType = addressTypeElement ? addressTypeElement.value : "HOME";
            if (addressType === "on") addressType = "HOME"; // Fallback if HTML value attribute is missing

            if (!fullName || !mobile || !pincode || !state || !city || !addressLine1) {
                if (typeof Toastify !== "undefined") Toastify({ text: "❌ Please fill all required fields", duration: 3000, style: { background: "#ff416c" } }).showToast();
                if (saveBtn) {
                    saveBtn.disabled = false;
                    saveBtn.innerHTML = originalBtnText;
                }
                return;
            }

            const payload = {
                fullName: fullName,
                mobile: mobile,
                alternateMobile: alternateMobile,
                addressLine1: addressLine1,
                addressLine2: addressLine2,
                landmark: landmark,
                city: city,
                state: state,
                country: country,
                pincode: pincode,
                addressType: addressType,
                isDefault: true
            };

            try {
                const response = await fetch(`${API_BASE_ADDRESS}/api/address/add`, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Authorization": `Bearer ${token}`
                    },
                    body: JSON.stringify(payload)
                });

                const result = await response.json();

                if (response.ok || result.success || result.status) {
                    if (typeof Toastify !== "undefined") Toastify({ text: "✅ Address added successfully!", duration: 3000, style: { background: "#00b09b" } }).showToast();
                    addAddressForm.reset();
                    if (addressContainer) {
                        loadSavedAddresses();
                    }
                    if (dashboardAddressContainer) {
                        loadDashboardAddresses();
                    }
                } else {
                    if (typeof Toastify !== "undefined") Toastify({ text: `❌ ${result.message || "Failed to add address"}`, duration: 3000, style: { background: "#ff416c" } }).showToast();
                }
            } catch (error) {
                console.error("Error adding address:", error);
                if (typeof Toastify !== "undefined") Toastify({ text: "❌ Server error while adding address", duration: 3000, style: { background: "#ff416c" } }).showToast();
            } finally {
                if (saveBtn) {
                    saveBtn.disabled = false;
                    saveBtn.innerHTML = originalBtnText;
                }
            }
        });
    }

    // Handle Edit Address
    if (editAddressForm) {
        editAddressForm.addEventListener("submit", async function (e) {
            e.preventDefault();
            
            const token = localStorage.getItem("UserToken");
            if (!token) {
                if (typeof Toastify !== "undefined") Toastify({ text: "⚠️ Please login to edit address", duration: 3000, style: { background: "#ff416c" } }).showToast();
                return;
            }

            const id = document.getElementById("edit_address_id")?.value;
            if (!id) return;

            const saveBtn = editAddressForm.querySelector('button[type="submit"]');
            const originalBtnText = saveBtn ? saveBtn.innerHTML : "Update";
            if (saveBtn) {
                saveBtn.disabled = true;
                saveBtn.innerHTML = "Updating...";
            }

            const fullName = document.getElementById("edit_full_name")?.value.trim();
            const mobile = document.getElementById("edit_phone_number")?.value.trim();
            const alternateMobile = document.getElementById("edit_alternate_mobile")?.value.trim();
            const pincode = document.getElementById("edit_pincode")?.value.trim();
            
            const countrySelect = document.getElementById("edit_country_region");
            const country = countrySelect ? countrySelect.options[countrySelect.selectedIndex].text : "India";
            
            const state = document.getElementById("edit_state")?.value.trim();
            const city = document.getElementById("edit_city")?.value.trim();
            const addressLine1 = document.getElementById("edit_address_line1")?.value.trim();
            const addressLine2 = document.getElementById("edit_address_line2")?.value.trim();
            const landmark = document.getElementById("edit_landmark")?.value.trim();
            
            const addressTypeElement = document.querySelector('input[name="edit-address-type"]:checked');
            let addressType = addressTypeElement ? addressTypeElement.value : "HOME";

            const isDefault = document.getElementById("edit_is_default")?.checked || false;

            if (!fullName || !mobile || !pincode || !state || !city || !addressLine1) {
                if (typeof Toastify !== "undefined") Toastify({ text: "❌ Please fill all required fields", duration: 3000, style: { background: "#ff416c" } }).showToast();
                if (saveBtn) {
                    saveBtn.disabled = false;
                    saveBtn.innerHTML = originalBtnText;
                }
                return;
            }

            const payload = {
                fullName: fullName,
                mobile: mobile,
                alternateMobile: alternateMobile,
                addressLine1: addressLine1,
                addressLine2: addressLine2,
                landmark: landmark,
                city: city,
                state: state,
                country: country,
                pincode: pincode,
                addressType: addressType,
                isDefault: isDefault
            };

            try {
                const response = await fetch(`${API_BASE_ADDRESS}/api/address/update/${id}`, {
                    method: "PUT",
                    headers: {
                        "Content-Type": "application/json",
                        "Authorization": `Bearer ${token}`
                    },
                    body: JSON.stringify(payload)
                });

                const result = await response.json();

                if (response.ok || result.success || result.status) {
                    if (typeof Toastify !== "undefined") Toastify({ text: "✅ Address updated successfully!", duration: 3000, style: { background: "#00b09b" } }).showToast();
                    
                    setTimeout(() => {
                        window.location.href = "my-account.php?tab=address";
                    }, 1500);
                } else {
                    if (typeof Toastify !== "undefined") Toastify({ text: `❌ ${result.message || "Failed to update address"}`, duration: 3000, style: { background: "#ff416c" } }).showToast();
                }
            } catch (error) {
                console.error("Error updating address:", error);
                if (typeof Toastify !== "undefined") Toastify({ text: "❌ Server error while updating address", duration: 3000, style: { background: "#ff416c" } }).showToast();
            } finally {
                if (saveBtn) {
                    saveBtn.disabled = false;
                    saveBtn.innerHTML = originalBtnText;
                }
            }
        });
    }

    // Handle Edit Address Cancel Button
    const editCancelBtn = document.querySelector('#edit-address-form button[type="button"]');
    if (editCancelBtn) {
        editCancelBtn.addEventListener('click', function() {
            document.querySelectorAll('.menu-tab-pane').forEach(pane => pane.classList.add('hidden'));
            const addressPane = document.getElementById('address');
            if (addressPane) addressPane.classList.remove('hidden');
            
            const url = new URL(window.location);
            url.searchParams.set('tab', 'address');
            url.searchParams.delete('id');
            window.history.pushState({}, '', url);
        });
    }

    // Handle Add Address Cancel Button
    const addCancelBtn = document.querySelector('#add-address-form button[type="button"]');
    if (addCancelBtn) {
        addCancelBtn.addEventListener('click', function() {
            document.querySelectorAll('.menu-tab-pane').forEach(pane => pane.classList.add('hidden'));
            const addressPane = document.getElementById('address');
            if (addressPane) addressPane.classList.remove('hidden');
        });
    }
});

async function loadSavedAddresses() {
    const container = document.getElementById("saved-addresses-container");
    if (!container) return;

    const token = localStorage.getItem("UserToken");
    if (!token) {
        container.innerHTML = '<p class="text-light-secondary-text">Please log in to view your addresses.</p>';
        return;
    }

    try {
        const response = await fetch(`${API_BASE_ADDRESS}/api/address/list`, {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${token}`
            }
        });

        const result = await response.json();
        let addresses = [];
        if (Array.isArray(result.data)) addresses = result.data;
        else if (Array.isArray(result)) addresses = result;

        if (addresses.length === 0) {
            container.innerHTML = '<p class="text-light-secondary-text">No saved addresses found. Please add a new one above.</p>';
            return;
        }

        let html = "";
        addresses.forEach((addr, index) => {
            const isChecked = addr.isDefault || index === 0 ? "checked" : "";
            const displayStyle = isChecked ? "block" : "none";
            const addrTypeDisplay = (addr.addressType && addr.addressType !== 'on') ? addr.addressType : "HOME";

            html += `
            <div class="border border-gray-300 w-full address-item px-4 py-4 rounded-xl cursor-pointer hover:border-primary transition-all">
              <label class="flex items-start gap-x-3 cursor-pointer w-full">
                <span class="has-[input:checked]:hover:bg-[#00AB55]/8 flex-shrink-0 flex items-center justify-center w-6 h-6 bg-transparent rounded-full hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out mt-1">
                  <span class="relative inline-flex w-5 h-5 items-center justify-center">
                    <input ${isChecked} type="radio" name="selected-address" value="${addr.id}" class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-primary border-gray-300 rounded-full bg-white transition-all address-radio"/>
                    <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-2 h-2 rounded-full bg-primary opacity-0 scale-0 peer-checked:opacity-100 peer-checked:scale-100 transition-all"></span>
                  </span>
                </span>
                <div class="flex flex-col gap-1 w-full">
                  <div class="flex items-center justify-between w-full">
                      <span class="text-light-primary-text font-semibold capitalize tracking-wide text-base">${addr.fullName} <span class="ml-2 text-xs bg-gray-200 text-gray-700 px-2 py-1 rounded-md uppercase">${addrTypeDisplay}</span></span>
                  </div>
                  <div class="address-details" style="display: ${displayStyle}; margin-top: 4px;">
                    <span class="text-sm text-light-secondary-text mt-1 block">
                        ${addr.addressLine1}, ${addr.addressLine2 ? addr.addressLine2 + ',' : ''} ${addr.landmark ? addr.landmark + ',' : ''}
                    </span>
                    <span class="text-sm text-light-secondary-text block">
                        ${addr.city}, ${addr.state}, ${addr.country} - ${addr.pincode}
                    </span>
                    <span class="text-sm text-light-secondary-text font-medium mt-1 block">
                        Mobile: ${addr.mobile} ${addr.alternateMobile ? ', Alternate: ' + addr.alternateMobile : ''}
                    </span>
                  </div>
                </div>
              </label>
            </div>`;
        });

        container.innerHTML = html;

        // Add event listeners for accordion behavior
        const radioButtons = container.querySelectorAll('.address-radio');
        radioButtons.forEach(radio => {
            radio.addEventListener('change', function() {
                // Hide all address details
                container.querySelectorAll('.address-details').forEach(detail => {
                    detail.style.display = 'none';
                });
                // Show the selected one
                const details = this.closest('.address-item').querySelector('.address-details');
                if (details) {
                    details.style.display = 'block';
                }
            });
        });

    } catch (error) {
        console.error("Error fetching addresses:", error);
        container.innerHTML = '<p class="text-error">Failed to load addresses.</p>';
    }
}


// my dashbaord


async function loadDashboardAddresses() {
    const container = document.getElementById("my-dashboard-addresses-container");
    if (!container) return;

    // Update container to use CSS Grid for exactly 3 items per row on large screens
    container.className = "grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6";

    const token = localStorage.getItem("UserToken");
    if (!token) {
        container.innerHTML = '<p class="text-light-secondary-text p-6">Please log in to view your addresses.</p>';
        return;
    }

    try {
        const response = await fetch(`${API_BASE_ADDRESS}/api/address/list`, {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${token}`
            }
        });

        const result = await response.json();
        let addresses = [];
        if (Array.isArray(result.data)) addresses = result.data;
        else if (Array.isArray(result)) addresses = result;

        if (addresses.length === 0) {
            container.innerHTML = '<p class="text-light-secondary-text p-6">No saved addresses found. You can add one from the checkout page or your account settings.</p>';
            return;
        }

        let html = "";
        addresses.forEach(addr => {
            const addrTypeDisplay = (addr.addressType && addr.addressType.toLowerCase() !== 'on') ? addr.addressType : "Home";
            
            html += `
            <div class="order-history-table-wrapper border-gray-300 rounded-2xl border overflow-x-auto w-full">
              <table class="w-full order-history-table">
                <thead>
                  <tr class="border-b border-gray-300">
                    <th class="text-left py-4 px-4">
                      <div class="flex items-center justify-between">
                        <p class="lg:text-xl lg:leading-[30px] text-lg leading-7 text-light-primary-text inline-flex items-center gap-x-3">
                          <span class="inline-flex items-center justify-center">
                            <i class="hgi hgi-stroke hgi-location-06 text-2xl leading-6 font-normal"></i>
                          </span>
                          ${addrTypeDisplay} Address
                        </p>
                      <div class="flex items-center gap-x-2">
                        <button type="button" onclick="openEditAddress(${addr.id})" class="btn btn-default btn-small outline rounded-[80px] shadow-none edit-address-button">
                          <span class="inline-flex items-center justify-center">
                            <i class="hgi hgi-stroke hgi-edit-02 text-[18px] leading-[18px] text-light-primary-text"></i>
                          </span>
                          Change
                        </button>
                        <button onclick="deleteAddress(${addr.id})" class="btn btn-default btn-small outline rounded-[80px] shadow-none  transition-colors group" title="Delete">
                          <span class="inline-flex items-center justify-center">
                            <i class="hgi hgi-stroke hgi-delete-01 text-[18px] leading-[18px] text-error  transition-colors"></i>
                          </span>
                        </button>
                      </div>
                      </div>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="px-4 py-4">
                      <div>
                        <ul class="flex flex-col gap-1">
                          <li class="text-light-primary-text font-semibold">${addr.fullName}</li>
                          <li class="text-light-secondary-text">${addr.addressLine1}${addr.addressLine2 ? ', ' + addr.addressLine2 : ''}</li>
                          <li class="text-light-secondary-text">${addr.city}, ${addr.state} - ${addr.pincode}</li>
                          <li class="text-light-secondary-text">${addr.country}</li>
                          <li class="text-light-secondary-text mt-2">Mobile: <span class="text-light-primary-text font-medium">${addr.mobile}</span></li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>`;
        });

        container.innerHTML = html;

    } catch (error) {
        console.error("Error fetching dashboard addresses:", error);
        container.innerHTML = '<p class="text-error p-6">Failed to load addresses.</p>';
    }
}

async function prefetchAddressForEdit(id) {
    const token = localStorage.getItem("UserToken");
    if (!token) return;

    try {
        const response = await fetch(`${API_BASE_ADDRESS}/api/address/list`, {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${token}`
            }
        });

        const result = await response.json();
        let addresses = [];
        if (Array.isArray(result.data)) addresses = result.data;
        else if (Array.isArray(result)) addresses = result;

        const address = addresses.find(a => String(a.id) === String(id));
        if (address) {
            document.getElementById("edit_address_id").value = address.id;
            document.getElementById("edit_full_name").value = address.fullName || "";
            document.getElementById("edit_phone_number").value = address.mobile || "";
            document.getElementById("edit_alternate_mobile").value = address.alternateMobile || "";
            document.getElementById("edit_pincode").value = address.pincode || "";
            document.getElementById("edit_state").value = address.state || "";
            document.getElementById("edit_city").value = address.city || "";
            document.getElementById("edit_address_line1").value = address.addressLine1 || "";
            document.getElementById("edit_address_line2").value = address.addressLine2 || "";
            document.getElementById("edit_landmark").value = address.landmark || "";
            
            let addrType = (address.addressType && address.addressType !== 'on') ? address.addressType.toUpperCase() : "HOME";
            const typeRadio = document.querySelector(`input[name="edit-address-type"][value="${addrType}"]`);
            if (typeRadio) typeRadio.checked = true;

            const defaultCheckbox = document.getElementById("edit_is_default");
            if (defaultCheckbox) {
                defaultCheckbox.checked = address.isDefault === true || String(address.isDefault) === "1";
            }
        }
    } catch (error) {
        console.error("Error prefetching address for edit:", error);
    }
}

// Function to Open Edit Address Form programmatically
window.openEditAddress = function(id) {
    document.querySelectorAll('.menu-tab-pane').forEach(pane => pane.classList.add('hidden'));
    
    const editPane = document.getElementById('edit-address');
    if (editPane) {
        editPane.classList.remove('hidden');
    }
    
    const url = new URL(window.location);
    url.searchParams.set('tab', 'edit-address');
    url.searchParams.set('id', id);
    window.history.pushState({}, '', url);
    
    prefetchAddressForEdit(id);
};

// Function to Handle Address Deletion
window.deleteAddress = function(id) {
    const container = document.createElement("div");

    container.innerHTML = `
        <div style="font-weight:bold;margin-bottom:10px;text-align:center;color:#fff;">
            Are you sure you want to delete this address?
        </div>
        <div style="display:flex;justify-content:center;gap:10px;">
            <button class="toast-yes-btn" style="background:#fff;color:#ff416c;border:none;padding:6px 15px;border-radius:5px;font-weight:bold;cursor:pointer;">Yes, Delete</button>
            <button class="toast-no-btn" style="background:transparent;color:#fff;border:1px solid #fff;padding:6px 15px;border-radius:5px;cursor:pointer;">Cancel</button>
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

    container.querySelector(".toast-yes-btn").addEventListener("click", async () => {
        toast.hideToast();
        
        const token = localStorage.getItem("UserToken");
        if (!token) return;

        try {
            const response = await fetch(`${API_BASE_ADDRESS}/api/address/delete/${id}`, {
                method: "DELETE",
                headers: { "Authorization": `Bearer ${token}` }
            });
            const result = await response.json();

            if (response.ok && (result.success === true || result.status === true)) {
                if (typeof Toastify !== "undefined") Toastify({ text: "✅ Address deleted successfully", duration: 3000, style: { background: "linear-gradient(to right, #00b09b, #96c93d)" } }).showToast();
                setTimeout(() => { loadDashboardAddresses(); }, 500);
            } else {
                if (typeof Toastify !== "undefined") Toastify({ text: `❌ ${result.message || "Failed to delete"}`, duration: 3000, style: { background: "linear-gradient(to right, #ff416c, #ff4b2b)" } }).showToast();
            }
        } catch (error) {
            console.error("DELETE ERROR:", error);
            if (typeof Toastify !== "undefined") Toastify({ text: "❌ Server Error", duration: 3000, style: { background: "linear-gradient(to right, #ff416c, #ff4b2b)" } }).showToast();
        }
    });

    container.querySelector(".toast-no-btn").addEventListener("click", () => {
        toast.hideToast();
    });
};



// order get 

window.viewOrderDetails = async function(orderId) {
    const modal = document.getElementById("orderDetailsModal");
    const modalContent = document.getElementById("orderDetailsModalContent");
    const modalOrderNumber = document.getElementById("modalOrderNumber");
    const closeBtn = document.getElementById("closeOrderModalBtn");

    if (!modal || !modalContent || !closeBtn || !modalOrderNumber) return;

    // Show modal and loader
    modal.classList.remove("hidden");
    modal.classList.add("flex");
    modalContent.innerHTML = `
        <div class="flex justify-center items-center py-10">
            <div class="w-8 h-8 border-4 border-dashed rounded-full animate-spin border-primary"></div>
        </div>
    `;
    modalOrderNumber.textContent = "Loading...";

    try {
        const token = localStorage.getItem("UserToken");
        const [orderResponse, addressResponse] = await Promise.all([
            fetch(`${API_BASE_ADDRESS}/api/orders/${orderId}`, {
                headers: { "Authorization": `Bearer ${token}` }
            }),
            fetch(`${API_BASE_ADDRESS}/api/address/list`, {
                headers: { "Authorization": `Bearer ${token}` }
            })
        ]);

        const orderResult = await orderResponse.json();
        if (!orderResult.success) {
            throw new Error(orderResult.message || "Failed to fetch order details.");
        }

        const { order, items } = orderResult.data;

        const addressResult = await addressResponse.json();
        let shippingAddress = null;
        if (addressResult.success && Array.isArray(addressResult.data)) {
            shippingAddress = addressResult.data.find(addr => addr.id === order.addressId);
        }

        const orderDate = new Date(order.createdAt).toLocaleDateString('en-GB', {
            day: 'numeric', month: 'short', year: 'numeric'
        });

        modalOrderNumber.innerHTML = `Order <span class="text-primary font-semibold">#${order.orderNumber}</span>`;

        let shippingAddressHtml = '';
        if (shippingAddress) {
            shippingAddressHtml = `
                <div>
                    <h6 class="font-semibold mb-2">Shipping Address</h6>
                    <div class="border rounded-lg p-4 text-sm bg-gray-50 space-y-1">
                        <p class="font-bold text-base">${shippingAddress.fullName}</p>
                        <p class="text-light-secondary-text">${shippingAddress.addressLine1}${shippingAddress.addressLine2 ? ', ' + shippingAddress.addressLine2 : ''}${shippingAddress.landmark ? ', ' + shippingAddress.landmark : ''}</p>
                        <p class="text-light-secondary-text">${shippingAddress.city}, ${shippingAddress.state} - ${shippingAddress.pincode}</p>
                        <p class="text-light-secondary-text">${shippingAddress.country}</p>
                        <p class="text-light-secondary-text mt-2"><b>Mobile:</b> ${shippingAddress.mobile}</p>
                    </div>
                </div>
            `;
        }

        let itemsHtml = items.map(item => `
            <li class="py-4 border-b border-gray-200 last:border-b-0">
                <div class="flex gap-x-4">
                    <div class="w-20 h-20 bg-gray-100 rounded-lg shrink-0">
                        <img src="${item.productImageUrl || 'assets/images/no-image.png'}" alt="${item.productName}" class="w-full h-full rounded-lg object-contain" />
                    </div>
                    <div class="flex flex-col gap-y-1 flex-1">
                        <a href="product-detail.php?id=${item.productId}" class="text-light-primary-text font-semibold text-sm line-clamp-2 hover:text-primary">${item.productName}</a>
                        <div class="flex items-center justify-between text-sm mt-auto">
                            <p class="text-light-secondary-text">
                                Qty: <span class="font-semibold text-light-primary-text">${item.quantity}</span>
                            </p>
                            <p class="font-semibold text-light-primary-text">
                                ₹${Number(item.price).toLocaleString('en-IN', { minimumFractionDigits: 2 })}
                            </p>
                        </div>
                    </div>
                </div>
            </li>
        `).join('');

        modalContent.innerHTML = `
            <div class="flex flex-col gap-y-6">
                <div class="border rounded-lg p-4 space-y-2 text-sm bg-gray-50">
                     <p class="flex justify-between"><span>Payment Method:</span> <span class="font-semibold">${order.paymentMethod}</span></p>
                     <p class="flex justify-between"><span>Payment Status:</span> <span class="font-semibold text-warning-dark">${order.paymentStatus}</span></p>
                     <p class="flex justify-between"><span>Order Status:</span> <span class="font-semibold text-success-dark">${order.orderStatus}</span></p>
                     <p class="flex justify-between"><span>Order Date:</span> <span class="font-semibold">${orderDate}</span></p>
                </div>
                <div>
                    ${shippingAddressHtml}
                </div>
                <div>
                    <h6 class="font-semibold mb-2">Items (${items.length})</h6>
                    <ul class="flex flex-col">
                        ${itemsHtml}
                    </ul>
                </div>
                <div class="border-t pt-4 space-y-2 text-sm">
                    <p class="flex justify-between"><span>Subtotal:</span> <span class="font-semibold">₹${Number(order.subtotal).toLocaleString('en-IN', { minimumFractionDigits: 2 })}</span></p>
                    <p class="flex justify-between"><span>Discount:</span> <span class="font-semibold text-error">-₹${Number(order.discountAmount).toLocaleString('en-IN', { minimumFractionDigits: 2 })}</span></p>
                    <p class="flex justify-between font-bold text-base mt-2"><span>Total:</span> <span>₹${Number(order.finalAmount).toLocaleString('en-IN', { minimumFractionDigits: 2 })}</span></p>
                </div>
            </div>
        `;

    } catch (error) {
        console.error("Error fetching order details:", error);
        modalContent.innerHTML = `<p class="text-error p-6">${error.message || 'Failed to load order details.'}</p>`;
    }

    const closeModal = () => {
        modal.classList.add("hidden");
        modal.classList.remove("flex");
    };

    closeBtn.onclick = closeModal;

    modal.onclick = function(event) {
        if (event.target === modal) {
            closeModal();
        }
    };
}

async function loadOrders() {
    try {
        const userToken = localStorage.getItem("UserToken");

        const response = await fetch(
            "https://ecommerce-backend.workarya.com/api/orders/all",
            {
                method: "GET",
                headers: {
                    "Content-Type": "application/json",
                    "Authorization": `Bearer ${userToken}`
                }
            }
        );

        const result = await response.json();

        if (!result.success || !result.data || result.data.length === 0) {
            const tbody = document.getElementById("orders-table-body");
            if (tbody) tbody.innerHTML = `<tr><td colspan="9" class="text-center p-6 text-light-secondary-text">No orders found.</td></tr>`;
            return;
        }

        const tbody = document.getElementById("orders-table-body");

        tbody.innerHTML = result.data.map(order => `
            <tr class="border-t">
                <td class="p-3">${order.orderNumber}</td>
                <td class="p-3">${order.fullName}</td>
                <td class="p-3">${order.mobile}</td>
                <td class="p-3">₹${Number(order.finalAmount).toLocaleString()}</td>
                <td class="p-3">${order.paymentMethod}</td>
                <td class="p-3">${order.paymentStatus}</td>
                <td class="p-3">${order.orderStatus}</td>
                <td class="p-3">
                    ${new Date(order.createdAt).toLocaleDateString("en-IN")}
                </td>
             
        <td class="p-3">
    <button
        onclick="viewOrderDetails(${order.id})"
        class="text-blue-600 hover:text-blue-800">
        <i class="fa-solid fa-eye"></i>
    </button>
</td>
                <td class="p-3 text-center">
                    ${order.orderStatus && order.orderStatus.toUpperCase() !== 'CANCELLED' ? 
                        `<button onclick="cancelOrder(${order.id})" class="text-red-500 hover:text-red-700 bg-red-100 hover:bg-red-200 px-3 py-1 rounded-md text-sm transition-colors font-medium" title="Cancel Order">
                            Cancel
                        </button>` 
                        : 
                        `<span class="text-gray-400 text-sm font-medium">Cancelled</span>`
                    }
                </td>
            </tr>
        `).join("");

    } catch (error) {
        console.error("Error:", error);
        const tbody = document.getElementById("orders-table-body");
        if (tbody) tbody.innerHTML = `<tr><td colspan="9" class="text-center p-6 text-error">Failed to load orders.</td></tr>`;
    }
}

window.cancelOrder = function(orderId) {
    const container = document.createElement("div");

    container.innerHTML = `
        <div style="font-weight:bold;margin-bottom:10px;text-align:center;color:#fff;">
            Are you sure you want to cancel this order?
        </div>
        <div style="display:flex;justify-content:center;gap:10px;">
            <button class="toast-yes-btn" style="background:#fff;color:#ff416c;border:none;padding:6px 15px;border-radius:5px;font-weight:bold;cursor:pointer;">Yes, Cancel</button>
            <button class="toast-no-btn" style="background:transparent;color:#fff;border:1px solid #fff;padding:6px 15px;border-radius:5px;cursor:pointer;">No</button>
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

    container.querySelector(".toast-yes-btn").addEventListener("click", async () => {
        toast.hideToast();
        
        const token = localStorage.getItem("UserToken");
        if (!token) return;

        try {
            const response = await fetch(`${API_BASE_ADDRESS}/api/orders/${orderId}/cancel`, {
                method: "PUT",
                headers: { "Authorization": `Bearer ${token}` }
            });
            const result = await response.json();

            if (response.ok && (result.success === true || result.status === true)) {
                if (typeof Toastify !== "undefined") Toastify({ text: "✅ Order cancelled successfully", duration: 3000, style: { background: "linear-gradient(to right, #00b09b, #96c93d)" } }).showToast();
                loadOrders(); // Refresh table
            } else {
                if (typeof Toastify !== "undefined") Toastify({ text: `❌ ${result.message || "Failed to cancel order"}`, duration: 3000, style: { background: "linear-gradient(to right, #ff416c, #ff4b2b)" } }).showToast();
            }
        } catch (error) {
            console.error("CANCEL ERROR:", error);
            if (typeof Toastify !== "undefined") Toastify({ text: "❌ Server Error", duration: 3000, style: { background: "linear-gradient(to right, #ff416c, #ff4b2b)" } }).showToast();
        }
    });

    container.querySelector(".toast-no-btn").addEventListener("click", () => {
        toast.hideToast();
    });
};

document.addEventListener("DOMContentLoaded", function () {
    if (document.getElementById("orders-table-body")) {
        loadOrders();
    }
});