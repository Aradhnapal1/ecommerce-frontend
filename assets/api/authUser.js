const REGISTER_API = `${domin}/api/user/register`;
const VERIFY_OTP_API = `${domin}/api/user/verify-otp`;
const LOGIN_API = `${domin}/api/user/login`;
const CHANGE_PASSWORD_API = `${domin}/api/user/change-password`;

let registeredEmail = "";

document.addEventListener("DOMContentLoaded", () => {
    
    // Check User Authentication Status
    const token = localStorage.getItem("UserToken");
    if (token) {
        document.querySelectorAll(".guest-only-block").forEach(el => {
            el.style.display = "none";
        });
        document.querySelectorAll(".user-only-block").forEach(el => {
            if (el.tagName === "LI" || el.tagName === "A" || el.classList.contains("flex")) {
                el.style.display = "flex";
            } else {
                el.style.display = "block";
            }
        });
    }

    const registerForm = document.getElementById("userRegisterForm");
    const loginForm = document.getElementById("userLoginForm");

    if (registerForm) {
        registerForm.addEventListener("submit", async function (e) {
            e.preventDefault();

            const otpContainer = document.getElementById("otpContainer");
            // If OTP container is visible, handle OTP verification instead
            if (otpContainer && otpContainer.style.display !== "none") {
                verifyOtp();
                return;
            }

            const firstName = document.getElementById("first-name").value.trim();
            const lastName = document.getElementById("last-name").value.trim();
            const email = document.getElementById("register-email").value.trim();
            const phone = document.getElementById("register-phone").value.trim();
            const password = document.getElementById("register-password").value.trim();
            const confirmPassword = document.getElementById("confirm-password").value.trim();

            if (!firstName || !lastName || !email || !phone || !password) {
                return showError("Please fill all required fields.");
            }

            if (password !== confirmPassword) {
                return showError("Passwords do not match.");
            }

            const registerBtn = document.getElementById("registerSubmitBtn");
            registerBtn.disabled = true;
            registerBtn.innerHTML = "Creating Account...";

            try {
                const payload = {
                    first_name: firstName,
                    last_name: lastName,
                    email: email,
                    phone_number: phone,
                    password: password,
                    role: "USER"
                };

                const response = await fetch(REGISTER_API, {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify(payload)
                });

                const data = await response.json();

                if (response.ok && (data.success !== false && data.status !== false)) {
                    showSuccess(data.message || "OTP send successful check your email");
                    registeredEmail = email; // Save for OTP verification
                    
                    // Hide form fields and show OTP field
                    document.getElementById("registerFields").style.display = "none";
                    otpContainer.style.display = "flex";
                    registerBtn.innerHTML = "Verify OTP";
                } else {
                    showError(data.message || "Registration failed.");
                    registerBtn.innerHTML = "Create Account";
                }
            } catch (error) {
                console.error("Registration Error:", error);
                showError("Something went wrong during registration.");
                registerBtn.innerHTML = "Create Account";
            } finally {
                registerBtn.disabled = false;
            }
        });
    }

    async function verifyOtp() {
        const otpValue = document.getElementById("register-otp").value.trim();
        if (!otpValue) return showError("Please enter the OTP.");

        const registerBtn = document.getElementById("registerSubmitBtn");
        registerBtn.disabled = true;
        registerBtn.innerHTML = "Verifying...";

        try {
            const response = await fetch(VERIFY_OTP_API, {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ email: registeredEmail, otp: otpValue })
            });

            const data = await response.json();

            if (response.ok && (data.success !== false && data.status !== false)) {
                showSuccess(data.message || "Verify success");
                setTimeout(() => {
                    // Programmatically trigger a click on the login link to open the login sidebar
                    const loginTriggerBtn = document.querySelector('.login-page-btn');
                    if (loginTriggerBtn) {
                        loginTriggerBtn.click();
                    }
                    
                    // Reset the registration form back to the initial state
                    registerForm.reset();
                    document.getElementById("registerFields").style.display = "flex";
                    document.getElementById("otpContainer").style.display = "none";
                    registerBtn.disabled = false;
                    registerBtn.innerHTML = "Otp Sent";
                }, 1000);
            } else {
                showError(data.message || "Invalid OTP.");
                registerBtn.disabled = false;
                registerBtn.innerHTML = "Verify OTP";
            }
        } catch (error) {
            console.error("OTP Error:", error);
            showError("Something went wrong during OTP verification.");
            registerBtn.disabled = false;
            registerBtn.innerHTML = "Verify OTP";
        }
    }

    if (loginForm) {
        loginForm.addEventListener("submit", async function (e) {
            e.preventDefault();

            const email = document.getElementById("login-email").value.trim();
            const password = document.getElementById("login-password").value.trim();

            if (!email || !password) {
                return showError("Please enter both email and password.");
            }

            const loginBtn = document.getElementById("loginSubmitBtn");
            loginBtn.disabled = true;
            loginBtn.innerHTML = "Signing In...";

            try {
                const response = await fetch(LOGIN_API, {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({ email, password })
                });

                const data = await response.json();

                if (response.ok && (data.success !== false && data.status !== false)) {
                    const token = data.token || data.data?.token;
                    if (token) {
                        localStorage.setItem("UserToken", token);
                        showSuccess(data.message || "Login successful!");
                        setTimeout(() => {
                            window.location.reload();
                        }, 1500);
                    } else {
                        showError("Login failed: No token received.");
                    }
                } else {
                    showError(data.message || "Invalid Email or Password.");
                }
            } catch (error) {
                console.error("Login Error:", error);
                showError("Something went wrong during login.");
            } finally {
                loginBtn.disabled = false;
                loginBtn.innerHTML = "Sign In";
            }
        });
    }

    // Handle Change Password
    const changePasswordForm = document.getElementById("change-password-form");
    if (changePasswordForm) {
        changePasswordForm.addEventListener("submit", async function (e) {
            e.preventDefault();

            const oldPassword = document.getElementById("password")?.value.trim();
            const newPassword = document.getElementById("new_password")?.value.trim();
            const confirmPassword = document.getElementById("confirm_new_password")?.value.trim();

            if (!oldPassword || !newPassword || !confirmPassword) {
                return showError("Please fill all password fields.");
            }

            if (newPassword !== confirmPassword) {
                return showError("New password and confirm password do not match.");
            }

            const userToken = localStorage.getItem("UserToken");
            if (!userToken) {
                return showError("Please log in first to change your password.");
            }

            const changePwdBtn = document.getElementById("change-password-btn");
            changePwdBtn.disabled = true;
            const originalText = changePwdBtn.innerHTML;
            changePwdBtn.innerHTML = "Saving...";

            try {
                const response = await fetch(CHANGE_PASSWORD_API, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Authorization": `Bearer ${userToken}`
                    },
                    body: JSON.stringify({
                        oldPassword: oldPassword,
                        newPassword: newPassword
                    })
                });

                const data = await response.json();

                if (response.ok && data.status !== false && data.success !== false) {
                    showSuccess(data.message || "Password changed successfully!");
                    changePasswordForm.reset();
                } else {
                    showError(data.message || "Failed to change password.");
                }
            } catch (error) {
                console.error("Change Password Error:", error);
                showError("Something went wrong while changing the password.");
            } finally {
                changePwdBtn.disabled = false;
                changePwdBtn.innerHTML = originalText;
            }
        });
    }

    // Handle Logout Action
    document.body.addEventListener("click", function (e) {
        const logoutBtn = e.target.closest(".logout-button");
        if (logoutBtn) {
            e.preventDefault();
            e.stopPropagation();

            const container = document.createElement("div");
            container.innerHTML = `
                <div style="font-weight:bold;margin-bottom:10px;text-align:center;color:#fff;">
                    Are you sure you want to log out?
                </div>
                <div style="display:flex;justify-content:center;gap:10px;">
                    <button class="toast-yes-btn" style="background:#fff;color:#ff416c;border:none;padding:6px 15px;border-radius:5px;font-weight:bold;cursor:pointer;">Yes, Logout</button>
                    <button class="toast-no-btn" style="background:transparent;color:#fff;border:1px solid #fff;padding:6px 15px;border-radius:5px;cursor:pointer;">Cancel</button>
                </div>
            `;

            if (typeof Toastify !== "undefined") {
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

                container.querySelector(".toast-yes-btn").addEventListener("click", () => {
                    toast.hideToast();
                    localStorage.removeItem("UserToken");
                    showSuccess("Logged out successfully.");
                    setTimeout(() => {
                        window.location.href = "index.php"; 
                    }, 1000);
                });

                container.querySelector(".toast-no-btn").addEventListener("click", () => {
                    toast.hideToast();
                });
            }
        }
    }, true);
});

function showSuccess(message) {
    Toastify({
        text: "✅ " + message,
        duration: 2500,
        gravity: "top",
        position: "right",
        style: { background: "linear-gradient(to right,#00b09b,#96c93d)", borderRadius: "10px" }
    }).showToast();
}

function showError(message) {
    Toastify({
        text: "❌ " + message,
        duration: 3000,
        gravity: "top",
        position: "right",
        style: { background: "linear-gradient(to right,#ff416c,#ff4b2b)", borderRadius: "10px" }
    }).showToast();
}