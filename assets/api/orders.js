const API_BASE_ORDERS = typeof domin !== "undefined" ? domin : "https://ecommerce-backend.workarya.com";

function getAuthHeaders() {
    const token = localStorage.getItem("UserToken");
    const headers = { "Content-Type": "application/json" };
    if (token) headers["Authorization"] = `Bearer ${token}`;
    return headers;
}

function isApiSuccess(response, result) {
    return response.ok && (result.status || result.success || result?.value?.status === true);
}

function normalizePaymentMethod(method) {
    if (!method) return method;
    return String(method).toUpperCase();
}

function getApiPaymentMethod(method) {
    const upper = normalizePaymentMethod(method);
    if (upper === "ONLINE" || upper === "RAZORPAY") return "RAZORPAY";
    return upper;
}

function parseCartIdForApi(value) {
    if (
        value === undefined ||
        value === null ||
        value === "" ||
        value === "undefined" ||
        value === "null"
    ) {
        return 0;
    }
    const parsed = parseInt(value, 10);
    return Number.isFinite(parsed) ? parsed : 0;
}

function isOnlinePayment(method) {
    const upper = normalizePaymentMethod(method);
    return upper === "ONLINE" || upper === "RAZORPAY";
}

function pickFirstValue(obj, keys) {
    if (!obj || typeof obj !== "object") return null;
    for (const key of keys) {
        const value = obj[key];
        if (value !== undefined && value !== null && value !== "") {
            return value;
        }
    }
    return null;
}

function deepPickValue(root, keys, matcher, maxDepth = 8) {
    const seen = new Set();

    function walk(node, depth) {
        if (!node || typeof node !== "object" || depth > maxDepth || seen.has(node)) return null;
        seen.add(node);

        const direct = pickFirstValue(node, keys);
        if (direct !== null && (!matcher || matcher(direct))) return direct;

        const children = Array.isArray(node) ? node : Object.values(node);
        for (const child of children) {
            const found = walk(child, depth + 1);
            if (found !== null) return found;
        }

        return null;
    }

    return walk(root, 0);
}

function isRazorpayOrderId(value) {
    return typeof value === "string" && value.startsWith("order_");
}

function getCheckoutTotalAmount() {
    const totalEl = document.getElementById("checkout-total");
    if (!totalEl) return null;

    const parsed = parseFloat(String(totalEl.textContent).replace(/[^\d.]/g, ""));
    return Number.isFinite(parsed) ? parsed : null;
}

function getDefaultRazorpayKey() {
    if (typeof razorpayKeyId !== "undefined" && razorpayKeyId) return razorpayKeyId;
    return null;
}

function extractOrderPayload(result) {
    const orderId = deepPickValue(result, ["orderId", "OrderId", "id", "Id"], (value) => {
        return typeof value === "number" || (typeof value === "string" && !isRazorpayOrderId(value));
    });

    let razorpayOrderId = deepPickValue(
        result,
        ["razorpayOrderId", "RazorpayOrderId", "razorpay_order_id", "rzpOrderId", "RzpOrderId", "order_id", "orderId"],
        isRazorpayOrderId
    ) || deepPickValue(result, ["razorpayOrderId", "RazorpayOrderId", "razorpay_order_id"]);

    if (!razorpayOrderId) {
        razorpayOrderId = deepPickValue(result, [
            "gatewayOrderId", "GatewayOrderId", "paymentOrderId", "PaymentOrderId", "rzpOrderId", "RzpOrderId"
        ], isRazorpayOrderId);
    }

    const razorpayKey = deepPickValue(result, [
        "razorpayKey", "RazorpayKey", "key", "Key", "keyId", "KeyId", "key_id", "razorpay_key", "rzpKey", "RzpKey"
    ]) || getDefaultRazorpayKey();

    let amount = deepPickValue(result, [
        "amount", "Amount", "finalAmount", "FinalAmount", "payableAmount", "PayableAmount", "totalAmount", "TotalAmount"
    ]);

    if (!amount) {
        amount = getCheckoutTotalAmount();
    }

    return {
        orderId,
        razorpayOrderId,
        razorpayKey,
        amount,
        currency: deepPickValue(result, ["currency", "Currency"]) || "INR",
        name: deepPickValue(result, ["name", "Name", "fullName", "FullName"]) || "Store Order",
        email: deepPickValue(result, ["email", "Email"]) || "",
        contact: deepPickValue(result, ["contact", "Contact", "mobile", "Mobile", "phone", "Phone"]) || ""
    };
}

function loadRazorpayScript() {
    return new Promise((resolve, reject) => {
        if (window.Razorpay) {
            resolve();
            return;
        }
        const script = document.createElement("script");
        script.src = "https://checkout.razorpay.com/v1/checkout.js";
        script.onload = () => resolve();
        script.onerror = () => reject(new Error("Failed to load Razorpay"));
        document.body.appendChild(script);
    });
}

function showOrderToast(message, type) {
    if (typeof Toastify === "undefined") return;
    const styles = {
        success: { background: "#00b09b" },
        error: { background: "#ff416c" },
        warning: { background: "#ffc107", color: "#000" }
    };
    Toastify({ text: message, duration: 3000, style: styles[type] || styles.error }).showToast();
}

async function createOrder({ addressId, paymentMethod, couponCode = "" }) {
    const payload = {
        addressId: parseInt(addressId, 10),
        paymentMethod: getApiPaymentMethod(paymentMethod),
        couponCode: couponCode || ""
    };

    const response = await fetch(`${API_BASE_ORDERS}/api/orders/create`, {
        method: "POST",
        headers: getAuthHeaders(),
        body: JSON.stringify(payload)
    });

    const result = await response.json();
    return { response, result, payload };
}

async function buyNow({ productId, quantity = 1, variantId = null, colorId = null, sizeId = null, addressId, paymentMethod }) {
    const payload = {
        productId: parseInt(productId, 10),
        quantity: parseInt(quantity, 10) || 1,
        addressId: parseInt(addressId, 10),
        paymentMethod: getApiPaymentMethod(paymentMethod),
        variantId: parseCartIdForApi(variantId),
        colorId: parseCartIdForApi(colorId),
        sizeId: parseCartIdForApi(sizeId),
    };

    const response = await fetch(`${API_BASE_ORDERS}/api/orders/buy-now`, {
        method: "POST",
        headers: getAuthHeaders(),
        body: JSON.stringify(payload)
    });

    const result = await response.json();
    return { response, result, payload };
}

function getStoredBuyNowItem() {
    try {
        const raw = sessionStorage.getItem("buyNowItem");
        return raw ? JSON.parse(raw) : null;
    } catch {
        return null;
    }
}

function clearBuyNowSession() {
    sessionStorage.removeItem("buyNowItem");
    sessionStorage.removeItem("buyNowCheckout");
}

async function addProductToCartForBuyNow(productId, quantity, options) {
    const cartOptions = {
        variantId: "",
        colorId: "",
        sizeId: "",
        colorName: "",
        sizeName: "",
    };

    if (options && typeof options === "object") {
        cartOptions.variantId = options.variantId || "";
        cartOptions.colorId = options.colorId || "";
        cartOptions.sizeId = options.sizeId || "";
        cartOptions.colorName = options.colorName || "";
        cartOptions.sizeName = options.sizeName || "";
    } else if (options) {
        cartOptions.variantId = options;
    }

    const token = localStorage.getItem("UserToken");
    const headers = {};
    if (token) headers["Authorization"] = `Bearer ${token}`;

    await fetch(`${API_BASE_ORDERS}/api/addcart/clear`, {
        method: "DELETE",
        headers: { "Content-Type": "application/json", ...headers }
    });

    const formData = new FormData();
    formData.append("productId", productId);
    formData.append("quantity", quantity);
    if (typeof appendCartOptionsToFormData === "function") {
        appendCartOptionsToFormData(formData, cartOptions);
    } else {
        if (cartOptions.variantId && cartOptions.variantId !== "undefined" && cartOptions.variantId !== "null") {
            formData.append("variantId", cartOptions.variantId);
        }
        if (cartOptions.colorId && cartOptions.colorId !== "undefined" && cartOptions.colorId !== "null") {
            formData.append("colorId", cartOptions.colorId);
        }
        if (cartOptions.sizeId && cartOptions.sizeId !== "undefined" && cartOptions.sizeId !== "null") {
            formData.append("sizeId", cartOptions.sizeId);
        }
    }

    const response = await fetch(`${API_BASE_ORDERS}/api/addcart/add`, {
        method: "POST",
        headers,
        body: formData
    });

    return response.json();
}

async function completeOrderAfterApiSuccess({ result, normalizedMethod, buttonEl, originalBtnText }) {
    if (normalizedMethod === "COD") {
        localStorage.removeItem("AppliedCoupon");
        clearBuyNowSession();
        showOrderToast("✅ Order placed successfully!", "success");
        setTimeout(() => {
            window.location.href = "order-successful.php";
        }, 1500);
        return { success: true, result };
    }

    if (isOnlinePayment(normalizedMethod)) {
        const orderData = extractOrderPayload(result);

        if (!orderData.razorpayOrderId || !orderData.razorpayKey) {
            console.error("Missing Razorpay details in order response:", result);
            showOrderToast("❌ Online payment details missing from server", "error");
            return { success: false };
        }

        if (buttonEl) buttonEl.innerHTML = "Opening Payment...";

        await openRazorpayCheckout(orderData, function () {
            if (buttonEl) {
                buttonEl.disabled = false;
                buttonEl.innerHTML = originalBtnText;
            }
        });

        localStorage.removeItem("AppliedCoupon");
        clearBuyNowSession();
        showOrderToast("✅ Payment verified! Order placed successfully.", "success");
        setTimeout(() => {
            window.location.href = "order-successful.php";
        }, 1500);
        return { success: true, result };
    }

    localStorage.removeItem("AppliedCoupon");
    clearBuyNowSession();
    showOrderToast("✅ Order placed successfully!", "success");
    setTimeout(() => {
        window.location.href = "order-successful.php";
    }, 1500);
    return { success: true, result };
}

async function verifyPayment({ orderId, razorpayOrderId, razorpayPaymentId, razorpaySignature }) {
    const payload = {
        razorpayOrderId,
        razorpayPaymentId,
        razorpaySignature
    };

    const parsedOrderId = parseInt(orderId, 10);
    if (!Number.isNaN(parsedOrderId) && parsedOrderId > 0) {
        payload.orderId = parsedOrderId;
    }

    const response = await fetch(`${API_BASE_ORDERS}/api/orders/verify-payment`, {
        method: "POST",
        headers: getAuthHeaders(),
        body: JSON.stringify(payload)
    });

    const result = await response.json();
    return { response, result, payload };
}

async function openRazorpayCheckout(orderData, onDismiss) {
    await loadRazorpayScript();

    const amount = Number(orderData.amount);
    const razorpayAmount = Number.isFinite(amount) && amount > 0
        ? (amount < 1000 ? Math.round(amount * 100) : Math.round(amount))
        : null;

    return new Promise((resolve, reject) => {
        const options = {
            key: orderData.razorpayKey,
            currency: orderData.currency || "INR",
            name: orderData.name || "Store Order",
            description: "Order Payment",
            order_id: orderData.razorpayOrderId,
            prefill: {
                name: orderData.name || "",
                email: orderData.email || "",
                contact: orderData.contact || ""
            },
            handler: async function (razorpayResponse) {
                try {
                    const { response, result } = await verifyPayment({
                        orderId: orderData.orderId,
                        razorpayOrderId: razorpayResponse.razorpay_order_id,
                        razorpayPaymentId: razorpayResponse.razorpay_payment_id,
                        razorpaySignature: razorpayResponse.razorpay_signature
                    });

                    if (isApiSuccess(response, result)) {
                        resolve({ verified: true, result });
                    } else {
                        reject(new Error(result.message || "Payment verification failed"));
                    }
                } catch (err) {
                    reject(err);
                }
            },
            modal: {
                ondismiss: function () {
                    if (typeof onDismiss === "function") onDismiss();
                    reject(new Error("Payment cancelled"));
                }
            }
        };

        if (razorpayAmount) {
            options.amount = razorpayAmount;
        }

        if (!options.key || !options.order_id) {
            reject(new Error("Invalid payment details from server"));
            return;
        }

        const razorpay = new window.Razorpay(options);
        razorpay.on("payment.failed", function (response) {
            reject(new Error(response.error?.description || "Payment failed"));
        });
        razorpay.open();
    });
}

async function handleOrderPlacement({ addressId, paymentMethod, couponCode = "", buttonEl = null }) {
    const token = localStorage.getItem("UserToken");
    if (!token) {
        showOrderToast("⚠️ Please login to place an order", "warning");
        return { success: false };
    }

    if (!addressId) {
        showOrderToast("⚠️ Please select a shipping address", "warning");
        return { success: false };
    }

    if (!paymentMethod) {
        showOrderToast("⚠️ Please select a payment method", "warning");
        return { success: false };
    }

    const normalizedMethod = normalizePaymentMethod(paymentMethod);
    let originalBtnText = "";
    let orderSucceeded = false;

    if (buttonEl) {
        buttonEl.disabled = true;
        originalBtnText = buttonEl.innerHTML;
        buttonEl.innerHTML = "Placing Order...";
    }

    try {
        const buyNowItem = getStoredBuyNowItem();
        let response;
        let result;

        if (buyNowItem) {
            ({ response, result } = await buyNow({
                productId: buyNowItem.productId,
                quantity: buyNowItem.quantity,
                variantId: buyNowItem.variantId,
                colorId: buyNowItem.colorId,
                sizeId: buyNowItem.sizeId,
                addressId,
                paymentMethod
            }));
        } else {
            ({ response, result } = await createOrder({ addressId, paymentMethod, couponCode }));
        }

        if (!isApiSuccess(response, result)) {
            showOrderToast(`❌ ${result.message || "Failed to place order"}`, "error");
            return { success: false };
        }

        const completion = await completeOrderAfterApiSuccess({
            result,
            normalizedMethod,
            buttonEl,
            originalBtnText
        });

        if (completion.success) {
            orderSucceeded = true;
        }

        return completion;
    } catch (error) {
        if (error.message !== "Payment cancelled") {
            console.error("Order placement error:", error);
            showOrderToast(`❌ ${error.message || "Server error while placing order"}`, "error");
        }
        return { success: false, error };
    } finally {
        if (buttonEl && !orderSucceeded) {
            buttonEl.disabled = false;
            buttonEl.innerHTML = originalBtnText;
        }
    }
}

async function handleBuyNow({
    productId,
    quantity = 1,
    variantId = null,
    colorId = null,
    sizeId = null,
    colorName = "",
    sizeName = "",
    buttonEl = null,
}) {
    const token = localStorage.getItem("UserToken");
    if (!token) {
        showOrderToast("⚠️ Please log in to proceed to checkout", "warning");
        const loginBtn = document.querySelector(".login-page-btn");
        if (loginBtn) loginBtn.click();
        return { success: false };
    }

    if (!productId || productId === "undefined" || productId === "null") {
        showOrderToast("❌ Invalid Product ID", "error");
        return { success: false };
    }

    let originalText = "";
    if (buttonEl) {
        buttonEl.style.pointerEvents = "none";
        buttonEl.style.opacity = "0.7";
        originalText = buttonEl.innerHTML;
        buttonEl.innerHTML = "<span>Processing...</span>";
    }

    try {
        sessionStorage.setItem("buyNowItem", JSON.stringify({
            productId: parseInt(productId, 10),
            quantity: parseInt(quantity, 10) || 1,
            variantId: variantId && variantId !== "undefined" && variantId !== "null"
                ? parseInt(variantId, 10)
                : null,
            colorId: colorId && colorId !== "undefined" && colorId !== "null"
                ? parseInt(colorId, 10)
                : null,
            sizeId: sizeId && sizeId !== "undefined" && sizeId !== "null"
                ? parseInt(sizeId, 10)
                : null,
        }));
        sessionStorage.setItem("buyNowCheckout", "1");

        const cartResult = await addProductToCartForBuyNow(productId, quantity, {
            variantId,
            colorId,
            sizeId,
            colorName,
            sizeName,
        });
        const cartOk = cartResult.status || cartResult.success || cartResult?.value?.status === true;

        if (!cartOk) {
            clearBuyNowSession();
            showOrderToast(`❌ ${cartResult.message || "Failed to prepare checkout"}`, "error");
            return { success: false, result: cartResult };
        }

        if (typeof storeCartAddMeta === "function") {
            storeCartAddMeta(cartResult, productId, {
                variantId,
                colorId,
                sizeId,
                colorName,
                sizeName,
            });
        }

        showOrderToast("✅ Redirecting to checkout...", "success");

        if (typeof window.updateCartCountUI === "function") {
            window.updateCartCountUI(quantity);
        }

        setTimeout(() => {
            window.location.href = "checkout.php";
        }, 800);
        return { success: true };
    } catch (error) {
        clearBuyNowSession();
        console.error("Buy now error:", error);
        showOrderToast("❌ Server Error", "error");
        return { success: false, error };
    } finally {
        if (buttonEl) {
            buttonEl.style.pointerEvents = "auto";
            buttonEl.style.opacity = "1";
            buttonEl.innerHTML = originalText;
        }
    }
}

window.OrderAPI = {
    createOrder,
    buyNow,
    verifyPayment,
    openRazorpayCheckout,
    handleOrderPlacement,
    handleBuyNow,
    normalizePaymentMethod,
    getApiPaymentMethod,
    isOnlinePayment,
    extractOrderPayload,
    isApiSuccess
};
