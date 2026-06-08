const domainUrl = typeof domin !== 'undefined' ? domin : "https://ecommerce-backend.workarya.com";
const LOGIN_API = `${domainUrl}/api/user/login`;
const REGISTER_API = `${domainUrl}/api/user/register`;
const VERIFY_OTP_API = `${domainUrl}/api/user/verify-otp`;

document.addEventListener("DOMContentLoaded", () => {
    // If admin is already logged in, redirect away from login page to index
    if (localStorage.getItem("adminToken") && window.location.href.includes("login.php")) {
        window.location.href = "index.php";
    }

    const loginForm = document.getElementById("loginForm");
    
    if (loginForm) {
        loginForm.addEventListener("submit", async function (e) {
            e.preventDefault();

            const email = document.getElementById("loginEmail").value.trim();
            const password = document.getElementById("loginPassword").value.trim();
            const loginBtn = document.getElementById("loginBtn");

            if (!email || !password) {
                return showError("Please enter both email and password.");
            }

            try {
                loginBtn.disabled = true;
                loginBtn.innerHTML = "Logging in...";

                const response = await fetch(LOGIN_API, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({ email: email, password: password })
                });

                const data = await response.json();

                // Check if API returns success and token
                if (response.ok && (data.success === true || data.status === true || data.token)) {
                    
                    const token = data.token || data.data?.token;
                    let role = data.role || data.data?.role;

                    // If role is not directly inside response, extract it from JWT Token payload
                    if (!role && token) {
                        role = extractRoleFromToken(token);
                    }

                    if (role && role.toUpperCase() === "USER") {
                        showError("You are not eligible to access the Admin Panel.");
                    } else {
                        // Save token to localStorage for authenticated sessions
                        localStorage.setItem("adminToken", token);
                        showSuccess("Login successful! Redirecting...");
                        
                        setTimeout(() => {
                            window.location.href = "index.php";
                        }, 1500);
                    }
                } else {
                    showError(data.message || "Invalid Email or Password.");
                }

            } catch (error) {
                console.error("Login error:", error);
                showError("Something went wrong during login.");
            } finally {
                loginBtn.disabled = false;
                loginBtn.innerHTML = "Login";
            }
        });
    }

    // Registration Logic
    const userForm = document.getElementById("userForm");
    const sendOtpBtn = document.getElementById("sendOtp") || document.getElementById("submitBtn");

    // Handle Verify OTP Button Click using event delegation
    // This ensures it works even if the button is pre-written in the HTML
    document.body.addEventListener("click", async function (ev) {
        if (ev.target && ev.target.id === "registerBtn") {
            ev.preventDefault();

            const emailInput = document.getElementById("email");
            const otpInput = document.getElementById("otp");
            const regBtn = ev.target;

            if (!emailInput || !otpInput) {
                return showError("Email or OTP field is missing.");
            }

            const emailVal = emailInput.value.trim();
            const otpVal = otpInput.value.trim();

            if (!otpVal) {
                return showError("Please enter the OTP.");
            }

            try {
                regBtn.disabled = true;
                regBtn.innerHTML = "Verifying...";

                const payload = { email: emailVal, otp: otpVal };

                const verifyResponse = await fetch(VERIFY_OTP_API, {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify(payload)
                });

                let verifyData = {};
                try {
                    verifyData = await verifyResponse.json();
                } catch(err) {
                    console.warn("Could not parse Verify JSON", err);
                }

                // Relaxed condition here too
                if (verifyResponse.ok && verifyData.status !== false && verifyData.success !== false) {
                    showSuccess(verifyData.message || "Registration verified successfully!");
                    setTimeout(() => { window.location.href = "login.php"; }, 2000);
                } else {
                    showError(verifyData.message || "Invalid OTP.");
                }
            } catch (err) {
                console.error("OTP verification error:", err);
                showError("Something went wrong during OTP verification.");
            } finally {
                regBtn.disabled = false;
                regBtn.innerHTML = "Verify OTP & Register";
            }
        }
    });

    if (userForm) {
        userForm.addEventListener("submit", async function (e) {
            e.preventDefault(); // Prevents page reload and URL parameters

            // Check if we are already in OTP phase to prevent double submit
            const existingOtpSection = document.getElementById("otpSection");
            if (existingOtpSection && existingOtpSection.style.display !== "none") {
                const regBtn = document.getElementById("registerBtn");
                if (regBtn) {
                    regBtn.click(); // Trigger verify if user presses Enter
                }
                return;
            }

            const firstName = document.getElementById("firstName").value.trim();
            const lastName = document.getElementById("lastName").value.trim();
            const email = document.getElementById("email").value.trim();
            const phoneNumber = document.getElementById("phoneNumber").value.trim();
            const password = document.getElementById("password").value.trim();

            if (!firstName || !lastName || !email || !phoneNumber || !password) {
                return showError("Please fill all required fields.");
            }

            try {
                if (sendOtpBtn) {
                    sendOtpBtn.disabled = true;
                    sendOtpBtn.innerHTML = "Sending OTP...";
                }

                const payload = {
                    first_name: firstName,
                    last_name: lastName,
                    email: email,
                    phone_number: phoneNumber,
                    password: password,
                    role: "ADMIN"
                };

                const response = await fetch(REGISTER_API, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify(payload)
                });

                let data = {};
                try {
                    data = await response.json();
                } catch(err) {
                    console.warn("Could not parse JSON response", err);
                }

                // Relaxed condition to handle APIs that just return 200 OK without a boolean status flag
                if (response.ok && data.status !== false && data.success !== false) {
                    showSuccess(data.message || "OTP sent! Please check your email.");
                    
                    // Hide Send OTP button
                    if (sendOtpBtn) {
                        sendOtpBtn.style.display = "none";
                        // also hide its wrapper if it's the .form-button div
                        if (sendOtpBtn.parentElement && sendOtpBtn.parentElement.classList.contains("form-button")) {
                            sendOtpBtn.parentElement.style.display = "none";
                        }
                    }
                    
                    // Show OTP Input and Verify Button dynamically
                    if (!existingOtpSection) {
                        const otpHTML = `
                            <div id="otpSection">
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" id="otp" name="otp" placeholder="Enter OTP" required>
                                </div>
                            </div>
                            <div class="form-button mt-3" id="registerSection">
                                <button class="btn btn-primary" type="button" id="registerBtn">Verify OTP & Register</button>
                            </div>
                        `;
                        userForm.insertAdjacentHTML('beforeend', otpHTML);
                    } else {
                        existingOtpSection.style.display = "block";
                        const regSec = document.getElementById("registerSection");
                        if (regSec) regSec.style.display = "block";
                    }
                } else {
                    showError(data.message || "Registration failed.");
                }
            } catch (error) {
                console.error("Registration error:", error);
                showError("Something went wrong during registration.");
            } finally {
                if (sendOtpBtn) {
                    sendOtpBtn.disabled = false;
                    sendOtpBtn.innerHTML = "Send Otp";
                }
            }
        });
    }
});

// Safe function to parse JWT token to extract roles
function extractRoleFromToken(token) {
    try {
        const base64Url = token.split('.')[1];
        const base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
        const jsonPayload = decodeURIComponent(atob(base64).split('').map(function(c) {
            return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
        }).join(''));
        
        const payload = JSON.parse(jsonPayload);
        // .NET Identity tokens generally use this schema for roles, fallback to generic "role"
        return payload["http://schemas.microsoft.com/ws/2008/06/identity/claims/role"] || payload.role || payload.Role || "";
    } catch (e) {
        console.error("Token parsing error:", e);
        return "";
    }
}

function showSuccess(message) {
    Toastify({
        text: "✅ " + message,
        duration: 2500,
        gravity: "top",
        position: "right",
        stopOnFocus: true,
        style: { background: "linear-gradient(to right,#00b09b,#96c93d)", borderRadius: "10px" }
    }).showToast();
}

function showError(message) {
    Toastify({
        text: "❌ " + message,
        duration: 3000,
        gravity: "top",
        position: "right",
        stopOnFocus: true,
        style: { background: "linear-gradient(to right,#ff416c,#ff4b2b)", borderRadius: "10px" }
    }).showToast();
}