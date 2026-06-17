const CONTACT_API = typeof domin !== "undefined" ? `${domin}/api/addcontact` : "https://ecommerce-backend.workarya.com/api/addcontact";

document.addEventListener("DOMContentLoaded", () => {
    const submitBtn = document.getElementById("submit-contact-btn");

    if (submitBtn) {
        submitBtn.addEventListener("click", async (e) => {
            e.preventDefault();

            const firstName = document.getElementById("first_name")?.value.trim();
            const lastName = document.getElementById("last_name")?.value.trim();
            const phone = document.getElementById("phone")?.value.trim();
            const email = document.getElementById("email")?.value.trim();
            const message = document.getElementById("message")?.value.trim();

            if (!firstName || !lastName || !phone || !email || !message) {
                if (typeof Toastify !== "undefined") {
                    Toastify({ text: "❌ Please fill all required fields", duration: 3000, style: { background: "#ff416c" } }).showToast();
                } else {
                    alert("Please fill all required fields.");
                }
                return;
            }

            const formData = new FormData();
            formData.append("FirstName", firstName);
            formData.append("LastName", lastName);
            formData.append("Email", email);
            formData.append("PhoneNumber", phone);
            formData.append("Message", message);

            submitBtn.style.pointerEvents = "none";
            submitBtn.style.opacity = "0.7";
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = "Sending...";

            try {
                const response = await fetch(CONTACT_API, {
                    method: "POST",
                    body: formData
                });

                const result = await response.json();

                if (response.ok && result.status !== false && result.success !== false) {
                    if (typeof Toastify !== "undefined") {
                        Toastify({ text: "✅ Message sent successfully!", duration: 3000, style: { background: "#00b09b" } }).showToast();
                    } else {
                        alert("Message sent successfully!");
                    }
                    
                    setTimeout(() => {
                        window.location.href = "index.php";
                    }, 2000);
                } else {
                    if (typeof Toastify !== "undefined") {
                        Toastify({ text: `❌ ${result.message || "Failed to send message"}`, duration: 3000, style: { background: "#ff416c" } }).showToast();
                    } else {
                        alert(result.message || "Failed to send message");
                    }
                }
            } catch (error) {
                console.error("Error sending message:", error);
                if (typeof Toastify !== "undefined") {
                    Toastify({ text: "❌ Server Error", duration: 3000, style: { background: "#ff416c" } }).showToast();
                } else {
                    alert("Server Error");
                }
            } finally {
                submitBtn.style.pointerEvents = "auto";
                submitBtn.style.opacity = "1";
                submitBtn.innerHTML = originalText;
            }
        });
    }
});