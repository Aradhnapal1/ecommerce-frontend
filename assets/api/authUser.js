const REGISTER_API = `${domin}/api/user/register`;
const VERIFY_OTP_API = `${domin}/api/user/verify-otp`;
const LOGIN_API = `${domin}/api/user/login`;

let registeredEmail = "";

document.addEventListener("DOMContentLoaded", () => {
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