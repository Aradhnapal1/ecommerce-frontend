document.addEventListener("DOMContentLoaded", function () {
    if (document.getElementById("adminProfileForm") || document.getElementById("adminProfileCard")) {
        loadAdminProfile();
        bindProfileEvents();
    }
});

async function loadAdminProfile() {
    try {
        const response = await adminFetch(`${domin}/api/user/profile`);
        if (!response.ok) {
            console.warn("Could not fetch admin profile via API");
            return;
        }

        const result = await response.json();
        const user = result.data || result.user || result || {};

        // Fill card info
        const nameEl = document.getElementById("profileCardName");
        if (nameEl) nameEl.textContent = `${user.first_name || user.firstName || ''} ${user.last_name || user.lastName || ''}`.trim() || "Admin";

        const emailEl = document.getElementById("profileCardEmail");
        if (emailEl) emailEl.textContent = user.email || "-";

        const roleEl = document.getElementById("profileCardRole");
        if (roleEl) roleEl.textContent = user.role || "ADMIN";

        // Fill form fields
        const fnInput = document.getElementById("adminFirstName");
        if (fnInput) fnInput.value = user.first_name || user.firstName || "";

        const lnInput = document.getElementById("adminLastName");
        if (lnInput) lnInput.value = user.last_name || user.lastName || "";

        const emailInput = document.getElementById("adminEmail");
        if (emailInput) emailInput.value = user.email || "";

        const phoneInput = document.getElementById("adminPhone");
        if (phoneInput) phoneInput.value = user.phone_number || user.phoneNumber || user.mobile || "";

    } catch (error) {
        console.error("Error loading admin profile:", error);
    }
}

function bindProfileEvents() {
    const profileForm = document.getElementById("adminProfileForm");
    if (profileForm) {
        profileForm.addEventListener("submit", async function (e) {
            e.preventDefault();
            const btn = document.getElementById("saveAdminProfileBtn");
            const firstName = document.getElementById("adminFirstName")?.value.trim();
            const lastName = document.getElementById("adminLastName")?.value.trim();
            const phone = document.getElementById("adminPhone")?.value.trim();

            if (!firstName || !lastName) {
                if (typeof Toastify !== "undefined") Toastify({ text: "❌ First Name and Last Name are required", duration: 3000, style: { background: "#ff416c" } }).showToast();
                return;
            }

            try {
                if (btn) { btn.disabled = true; btn.innerHTML = "Saving..."; }

                const response = await adminFetch(`${domin}/api/user/update-profile`, {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({
                        first_name: firstName,
                        last_name: lastName,
                        phone_number: phone
                    })
                });

                const result = await response.json().catch(() => ({}));

                if (response.ok || result.status || result.success) {
                    if (typeof Toastify !== "undefined") Toastify({ text: "✅ Profile updated successfully!", duration: 3000, style: { background: "#00b09b" } }).showToast();
                    loadAdminProfile();
                } else {
                    if (typeof Toastify !== "undefined") Toastify({ text: "❌ " + (result.message || "Failed to update profile"), duration: 3000, style: { background: "#ff416c" } }).showToast();
                }
            } catch (err) {
                console.error("Profile update error:", err);
                if (typeof Toastify !== "undefined") Toastify({ text: "❌ Error updating profile", duration: 3000, style: { background: "#ff416c" } }).showToast();
            } finally {
                if (btn) { btn.disabled = false; btn.innerHTML = "Save Changes"; }
            }
        });
    }

    const passForm = document.getElementById("adminPasswordForm");
    if (passForm) {
        passForm.addEventListener("submit", async function (e) {
            e.preventDefault();
            const btn = document.getElementById("changeAdminPasswordBtn");
            const currentPassword = document.getElementById("adminCurrentPassword")?.value.trim();
            const newPassword = document.getElementById("adminNewPassword")?.value.trim();
            const confirmPassword = document.getElementById("adminConfirmPassword")?.value.trim();

            if (!currentPassword || !newPassword) {
                if (typeof Toastify !== "undefined") Toastify({ text: "❌ Please enter current and new password", duration: 3000, style: { background: "#ff416c" } }).showToast();
                return;
            }

            if (newPassword !== confirmPassword) {
                if (typeof Toastify !== "undefined") Toastify({ text: "❌ New password and Confirm password do not match", duration: 3000, style: { background: "#ff416c" } }).showToast();
                return;
            }

            try {
                if (btn) { btn.disabled = true; btn.innerHTML = "Updating..."; }

                const response = await adminFetch(`${domin}/api/user/change-password`, {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({
                        currentPassword: currentPassword,
                        newPassword: newPassword
                    })
                });

                const result = await response.json().catch(() => ({}));

                if (response.ok || result.status || result.success) {
                    if (typeof Toastify !== "undefined") Toastify({ text: "✅ Password changed successfully!", duration: 3000, style: { background: "#00b09b" } }).showToast();
                    passForm.reset();
                } else {
                    if (typeof Toastify !== "undefined") Toastify({ text: "❌ " + (result.message || "Failed to change password"), duration: 3000, style: { background: "#ff416c" } }).showToast();
                }
            } catch (err) {
                console.error("Password change error:", err);
                if (typeof Toastify !== "undefined") Toastify({ text: "❌ Error changing password", duration: 3000, style: { background: "#ff416c" } }).showToast();
            } finally {
                if (btn) { btn.disabled = false; btn.innerHTML = "Update Password"; }
            }
        });
    }
}
