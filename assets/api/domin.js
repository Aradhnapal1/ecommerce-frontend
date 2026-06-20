const domin = "https://ecommerce-backend.workarya.com";
const razorpayKeyId = "rzp_test_qD9KOP4NRWYY8B";

function truncateProductName(name, wordLimit) {
    const limit = typeof wordLimit === "number" ? wordLimit : 4;
    const words = String(name || "").trim().split(/\s+/).filter(Boolean);
    if (words.length <= limit) return words.join(" ");
    return words.slice(0, limit).join(" ") + "..";
}

function formatPrice(value) {
    const amount = Number(value);
    if (Number.isNaN(amount)) return "₹0";
    return "₹" + amount.toLocaleString("en-IN");
}
