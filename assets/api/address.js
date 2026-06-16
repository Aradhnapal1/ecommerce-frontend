const API_BASE_ADDRESS = typeof domin !== "undefined" ? domin : "https://ecommerce-backend.workarya.com";

document.addEventListener("DOMContentLoaded", function () {
    const addressContainer = document.getElementById("saved-addresses-container");
    const addAddressForm = document.getElementById("add-address-form");

    // Load addresses on page load if container exists
    if (addressContainer) {
        loadSavedAddresses();
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
            const addressType = addressTypeElement ? addressTypeElement.value : "HOME";

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
            html += `
            <div class="border border-gray-300 w-full payment-method px-4 py-4 rounded-xl cursor-pointer hover:border-primary transition-all">
              <label class="flex items-start gap-x-3 cursor-pointer w-full">
                <span class="has-[input:checked]:hover:bg-[#00AB55]/8 flex-shrink-0 flex items-center justify-center w-6 h-6 bg-transparent rounded-full hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out mt-1">
                  <span class="relative inline-flex w-5 h-5 items-center justify-center">
                    <input ${isChecked} type="radio" name="selected-address" value="${addr.id}" class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-primary border-gray-300 rounded-full bg-white transition-all"/>
                    <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-2 h-2 rounded-full bg-primary opacity-0 scale-0 peer-checked:opacity-100 peer-checked:scale-100 transition-all"></span>
                  </span>
                </span>
                <div class="flex flex-col gap-1 w-full">
                  <div class="flex items-center justify-between w-full">
                      <span class="text-light-primary-text font-semibold capitalize tracking-wide text-base">${addr.fullName} <span class="ml-2 text-xs bg-gray-200 text-gray-700 px-2 py-1 rounded-md uppercase">${addr.addressType || "HOME"}</span></span>
                  </div>
                  <span class="text-sm text-light-secondary-text mt-1">
                      ${addr.addressLine1}, ${addr.addressLine2 ? addr.addressLine2 + ',' : ''} ${addr.landmark ? addr.landmark + ',' : ''}
                  </span>
                  <span class="text-sm text-light-secondary-text">
                      ${addr.city}, ${addr.state}, ${addr.country} - ${addr.pincode}
                  </span>
                  <span class="text-sm text-light-secondary-text font-medium mt-1">
                      Mobile: ${addr.mobile} ${addr.alternateMobile ? ', Alternate: ' + addr.alternateMobile : ''}
                  </span>
                </div>
              </label>
            </div>`;
        });

        container.innerHTML = html;

    } catch (error) {
        console.error("Error fetching addresses:", error);
        container.innerHTML = '<p class="text-error">Failed to load addresses.</p>';
    }
}