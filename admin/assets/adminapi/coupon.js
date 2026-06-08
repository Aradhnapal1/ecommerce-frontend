const ADD_COUPON_API = `${domin}/api/coupons/add`;
const GET_ALL_COUPONS_API = `${domin}/api/coupons/getcoupons`; // Change if your get API is different

let editingCouponId = null;

document.addEventListener("DOMContentLoaded", () => {
    checkIfEditMode();

    const saveCouponBtn = document.getElementById("addCouponBtn");
    if (saveCouponBtn) {
        saveCouponBtn.addEventListener("click", saveCoupon);
    }
});

// =========================
// CHECK IF EDIT MODE (Auto-fill)
// =========================
async function checkIfEditMode() {
    const urlParams = new URLSearchParams(window.location.search);
    const editId = urlParams.get('id');

    // Only run this logic if an ID is present and we are on the coupon-edit.php page
    if (editId && window.location.href.includes('coupon-edit.php')) {
        editingCouponId = editId;

        try {
            // Assuming you have a get-all API to fetch coupon details, similar to brands and colors. 
            // You can change this if you have a specific GET API like /api/coupons/get/{id}
            const response = await fetch(GET_ALL_COUPONS_API);
            const result = await response.json();
            const coupons = result.data || result.coupons || result || [];

            const coupon = coupons.find(c => c.id == editId);

            if (coupon) {
                const setValue = (id, val) => {
                    if (document.getElementById(id) && val !== undefined) {
                        document.getElementById(id).value = val;
                    }
                };

                setValue("couponCode", coupon.couponCode);
                setValue("couponType", coupon.couponType);
                setValue("discountAmount", coupon.DiscountAmount || coupon.discountAmount);
                setValue("minimumPurchaseAmount", coupon.minimumPurchaseAmount);
                setValue("maximumDiscountAmount", coupon.maximumDiscountAmount);
                setValue("usageLimit", coupon.usageLimit);

                // Format datetime-local strings correctly (YYYY-MM-DDThh:mm)
                if (coupon.startDate) setValue("startDate", coupon.startDate.substring(0, 16));
                if (coupon.expiryDate) setValue("expiryDate", coupon.expiryDate.substring(0, 16));

                // Handle Active/Inactive checkbox or radio buttons
                const isAct = (coupon.isActive === true || coupon.isActive === "true" || coupon.isActive === 1);
                
                const statusCheckbox = document.getElementById("isActive");
                if (statusCheckbox) {
                    statusCheckbox.checked = isAct;
                }

                // Change Button Text
                const saveBtn = document.getElementById("addCouponBtn");
                if (saveBtn) saveBtn.innerHTML = "Update Coupon";
            }
        } catch (error) {
            console.error("Error fetching coupon for edit:", error);
        }
    }
}

// =========================
// ADD / UPDATE COUPON
// =========================
async function saveCoupon() {
    const couponCode = document.getElementById("couponCode")?.value.trim();
    const couponType = document.getElementById("couponType")?.value; // FLAT or PERCENTAGE
    const discountAmount = document.getElementById("discountAmount")?.value;
    const minimumPurchaseAmount = document.getElementById("minimumPurchaseAmount")?.value;
    const maximumDiscountAmount = document.getElementById("maximumDiscountAmount")?.value;
    const usageLimit = document.getElementById("usageLimit")?.value;

    let startDate = document.getElementById("startDate")?.value;
    let expiryDate = document.getElementById("expiryDate")?.value;
    
    let isActiveStatus = true;
    const statusCheckbox = document.getElementById("isActive");
    if (statusCheckbox) {
        isActiveStatus = statusCheckbox.checked;
    }

    if (!couponCode || !couponType || !discountAmount || !startDate || !expiryDate) {
        return showError("Please fill all required fields.");
    }

    // Ensure datetime strings have seconds appended for standard ISO format if missing
    if (startDate && startDate.length === 16) startDate += ":00";
    if (expiryDate && expiryDate.length === 16) expiryDate += ":00";

    const payload = {
        couponCode: couponCode,
        couponType: couponType,
        DiscountAmount: Number(discountAmount),
        minimumPurchaseAmount: Number(minimumPurchaseAmount || 0),
        maximumDiscountAmount: Number(maximumDiscountAmount || 0),
        usageLimit: Number(usageLimit || 1),
        startDate: startDate,
        expiryDate: expiryDate,
        isActive: isActiveStatus
    };

    const saveBtn = document.getElementById("addCouponBtn");
    if (saveBtn) {
        saveBtn.disabled = true;
        saveBtn.innerHTML = editingCouponId ? "Updating..." : "Saving...";
    }

    // Determine if it's a POST (add) or PUT (edit) request
    const url = editingCouponId ? `${domin}/api/coupons/edit/${editingCouponId}` : ADD_COUPON_API;
    const method = editingCouponId ? "PUT" : "POST";

    try {
        const response = await fetch(url, {
            method: method,
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(payload)
        });

        const data = await response.json();

        if (response.ok && (data.status === true || data.success === true)) {
            showSuccess(data.message || (editingCouponId ? "Coupon Updated Successfully" : "Coupon Added Successfully"));
            setTimeout(() => { window.location.href = "coupon-list.php"; }, 2000);
        } else {
            showError(data.message || "Failed to process request");
        }
    } catch (error) {
        console.error("Error saving coupon:", error);
        showError("Something went wrong while saving coupon");
    } finally {
        if (saveBtn) {
            saveBtn.disabled = false;
            saveBtn.innerHTML = editingCouponId ? "Update Coupon" : "Add Coupon";
        }
    }
}

// =========================
// TOAST HELPERS
// =========================
function showSuccess(message) {
    Toastify({
        text: "✅ " + message, duration: 2500, gravity: "top", position: "right",
        style: { background: "linear-gradient(to right,#00b09b,#96c93d)", borderRadius: "10px" }
    }).showToast();
}

function showError(message) {
    Toastify({
        text: "❌ " + message, duration: 3000, gravity: "top", position: "right",
        style: { background: "linear-gradient(to right,#ff416c,#ff4b2b)", borderRadius: "10px" }
    }).showToast();
}

async function loadCoupons() {
    try {
        const response = await fetch(
            `${domin}/api/coupons/getcoupons`
        );

        if (!response.ok) {
            throw new Error("Failed to fetch coupons");
        }

        const coupons = await response.json();

        let html = "";

        coupons.forEach((coupon, index) => {
            html += `
                <tr>
                    <td>${index + 1}</td>
                    <td>${coupon.id}</td>
                    <td>${coupon.couponCode}</td>
                    <td>${coupon.couponType}</td>
                    <td>${coupon.discountAmount}</td>
                    <td>${coupon.minimumPurchaseAmount}</td>
                    <td>${coupon.usageLimit}</td>
                    <td>${formatDate(coupon.startDate)}</td>
                    <td>${formatDate(coupon.expiryDate)}</td>
                    <td>
                        ${
                            coupon.isActive
                                ? '<span class="badge badge-success">Active</span>'
                                : '<span class="badge badge-danger">Inactive</span>'
                        }
                    </td>
                    <td>${formatDateTime(coupon.createdAt)}</td>
                    <td>
                        <a href="coupon-edit.php?id=${coupon.id}" class="mr-2">
                            <i class="fa fa-edit text-primary" title="Edit"></i>
                        </a>

                        <a href="javascript:void(0)"
                           onclick="deleteCoupon(${coupon.id})">
                            <i class="fa fa-trash text-danger" title="Delete"></i>
                        </a>
                    </td>
                </tr>
            `;
        });

        document.getElementById("couponTableBody").innerHTML = html;
    }
    catch (error) {
        console.error("Error loading coupons:", error);

        document.getElementById("couponTableBody").innerHTML = `
            <tr>
                <td colspan="11" class="text-center text-danger">
                    Failed to load coupons
                </td>
            </tr>
        `;
    }
}

function formatDate(dateString) {
    return new Date(dateString).toLocaleDateString("en-GB", {
        day: "numeric",
        month: "short",
        year: "numeric"
    });
}

function formatDateTime(dateString) {
    return new Date(dateString).toLocaleString("en-GB", {
        day: "numeric",
        month: "short",
        year: "numeric",
        hour: "numeric",
        minute: "2-digit",
        hour12: true
    }).replace(",", "");
}

function deleteCoupon(id) {
    const container = document.createElement("div");

    container.innerHTML = `
        <div style="font-weight:bold;margin-bottom:10px;text-align:center;color:#fff;">
            Are you sure you want to delete this coupon?
        </div>

        <div style="display:flex;justify-content:center;gap:10px;">
            <button class="toast-yes-btn"
                style="background:#fff;color:#ff416c;border:none;padding:6px 15px;border-radius:5px;font-weight:bold;cursor:pointer;">
                Yes, Delete
            </button>

            <button class="toast-no-btn"
                style="background:transparent;color:#fff;border:1px solid #fff;padding:6px 15px;border-radius:5px;cursor:pointer;">
                Cancel
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

    // YES CLICK
    container.querySelector(".toast-yes-btn").addEventListener("click", async () => {
        toast.hideToast();

        try {
            const response = await fetch(`${domin}/api/coupons/delete/${id}`, { method: "DELETE" });
            const result = await response.json();

            if (response.ok && (result.success === true || result.status === true)) {
                showSuccess("Coupon deleted successfully");
                
                // Reload coupons after a brief 1-second delay so toast shows up cleanly
                setTimeout(() => { loadCoupons(); }, 1000);
            } else {
                showError(result.message || result.error || "Delete failed");
            }
        } catch (error) {
            console.error("DELETE ERROR:", error);
            showError(error.message || "Something went wrong");
        }
    });

    // NO CLICK
    container.querySelector(".toast-no-btn").addEventListener("click", () => {
        toast.hideToast();
    });
}

document.addEventListener("DOMContentLoaded", loadCoupons);