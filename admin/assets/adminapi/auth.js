const LOGIN_API = `${domin}/api/user/login`;

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