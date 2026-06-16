document.addEventListener("DOMContentLoaded", function () {
    if (document.getElementById("ordertable")) {
        loadOrders();
    }

    if (document.getElementById("order-detail-container")) {
        const urlParams = new URLSearchParams(window.location.search);
        const orderId = urlParams.get('id');
        
        if (orderId) {
            loadOrderDetail(orderId);
        } else {
            document.getElementById("order-detail-container").innerHTML = '<div class="alert alert-danger">No Order ID found in the URL.</div>';
        }
    }

    // Check if we are on the order status update page
    const statusForm = document.getElementById("order-status-form");
    if (statusForm) {
        const urlParams = new URLSearchParams(window.location.search);
        const orderId = urlParams.get('id');
        if (!orderId) {
            document.getElementById("status-container").innerHTML = '<div class="alert alert-danger">No Order ID found in the URL.</div>';
            statusForm.style.display = 'none';
        } else {
            statusForm.addEventListener("submit", function (e) {
                e.preventDefault();
                updateOrderStatus(orderId);
            });
        }
    }
});
async function loadOrders() {
    try {

        const adminToken = localStorage.getItem("adminToken");

        const response = await fetch(`${domin}/api/orders/all`, {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${adminToken}`
            }
        });

        if (!response.ok) {
            throw new Error(`HTTP Error: ${response.status}`);
        }

        const result = await response.json();

        const tableBody = document.getElementById("ordertable");
        tableBody.innerHTML = "";

        result.data.forEach(order => {
            tableBody.innerHTML += `
                <tr>
                    <td>${order.id}</td>
                    <td>${order.orderNumber}</td>
                    <td>${order.fullName}</td>
                    <td>${order.mobile}</td>
                    <td>${order.paymentMethod}</td>
                    <td>${order.paymentStatus}</td>
                    <td>${order.orderStatus}</td>
                    <td>${order.subtotal}</td>
                    <td>₹${Number(order.discountAmount).toLocaleString('en-IN')}</td>
                    <td>₹${Number(order.finalAmount).toLocaleString('en-IN')}</td>
                    <td>${order.couponCode || '-'}</td>
                    <td>${new Date(order.createdAt).toLocaleString()}</td>
                    <td>
                        <a href="order-detail.php?id=${order.id}" title="View Details" class="px-2">
                            <i class="fa fa-eye" style="color: #007bff; font-size: 16px;"></i>
                        </a>
                    </td>
                    <td>
                        <a href="order-status.php?id=${order.id}" title="Update Status" class="px-2">
                            <i class="fa fa-edit" style="color: #ffc107; font-size: 16px;"></i>
                        </a>
                    </td>
                </tr>
            `;
        });

    } catch (error) {
        console.error("Order Fetch Error:", error);

        document.getElementById("ordertable").innerHTML = `
            <tr>
                <td colspan="10" class="text-center text-danger">
                    Failed to load orders
                </td>
            </tr>
        `;
    }
}

async function loadOrderDetail(orderId) {
    const container = document.getElementById("order-detail-container");
    if (!container) return;

    try {
        const adminToken = localStorage.getItem("adminToken");
        const response = await fetch(`${domin}/api/orders/${orderId}`, {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${adminToken}`
            }
        });

        if (!response.ok) {
            throw new Error(`HTTP Error: ${response.status}`);
        }

        const result = await response.json();

        if (result.success && result.data) {
            renderOrderDetail(result.data);
        } else {
            throw new Error(result.message || "Failed to fetch order details.");
        }

    } catch (error) {
        console.error("Order Detail Fetch Error:", error);
        container.innerHTML = `<div class="alert alert-danger">Failed to load order details: ${error.message}</div>`;
    }
}

function renderOrderDetail(data) {
    const { order, items } = data;
    const container = document.getElementById("order-detail-container");

    const orderDetailsHtml = `
        <div class="row">
            <div class="col-md-6">
                <h4>Order Information</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Order Number:</strong> ${order.orderNumber}</li>
                    <li class="list-group-item"><strong>Order Date:</strong> ${new Date(order.createdAt).toLocaleString()}</li>
                    <li class="list-group-item"><strong>Order Status:</strong> <span class="badge bg-info">${order.orderStatus}</span></li>
                    <li class="list-group-item"><strong>Payment Method:</strong> ${order.paymentMethod}</li>
                    <li class="list-group-item"><strong>Payment Status:</strong> <span class="badge bg-warning">${order.paymentStatus}</span></li>
                </ul>
            </div>
            <div class="col-md-6">
                <h4>Customer & Shipping</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Customer Name:</strong> ${order.fullName}</li>
                    <li class="list-group-item"><strong>Mobile:</strong> ${order.mobile}</li>
                </ul>
            </div>
        </div>
        <hr class="my-4"/>
        <h4>Order Items (${items.length})</h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Product</th>
                        <th>SKU</th>
                        <th>Attributes</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    ${items.map(item => `
                        <tr>
                            <td><img src="${item.productImageUrl}" alt="${item.productName}" style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px;"></td>
                            <td>${item.productName}</td>
                            <td>${item.sku || '-'}</td>
                            <td>
                                ${item.colorName ? `Color: ${item.colorName}<br>` : ''}
                                ${item.sizeName ? `Size: ${item.sizeName}` : ''}
                            </td>
                            <td>${item.quantity}</td>
                            <td>₹${Number(item.price).toLocaleString('en-IN')}</td>
                            <td>₹${Number(item.total).toLocaleString('en-IN')}</td>
                        </tr>
                    `).join('')}
                </tbody>
            </table>
        </div>
        <hr class="my-4"/>
        <div class="row justify-content-end">
            <div class="col-md-4">
                <h4>Order Summary</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between"><strong>Subtotal:</strong> <span>₹${Number(order.subtotal).toLocaleString('en-IN')}</span></li>
                    <li class="list-group-item d-flex justify-content-between"><strong>Discount:</strong> <span>-₹${Number(order.discountAmount).toLocaleString('en-IN')}</span></li>
                    <li class="list-group-item d-flex justify-content-between"><strong>Coupon:</strong> <span>${order.couponCode || 'N/A'}</span></li>
                    <li class="list-group-item d-flex justify-content-between"><h5>Final Amount:</h5> <h5>₹${Number(order.finalAmount).toLocaleString('en-IN')}</h5></li>
                </ul>
            </div>
        </div>
    `;

    container.innerHTML = orderDetailsHtml;
}

async function updateOrderStatus(orderId) {
    const statusSelect = document.getElementById("order_status");
    const newStatus = statusSelect.value;
    const submitBtn = document.getElementById("update-status-btn");
    
    submitBtn.disabled = true;
    submitBtn.innerText = "Updating...";

    try {
        const adminToken = localStorage.getItem("adminToken");
        const response = await fetch(`${domin}/api/orders/${orderId}/status`, {
            method: "PUT",
            headers: {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${adminToken}`
            },
            body: JSON.stringify({ Status: newStatus })
        });

        const result = await response.json();

        if (response.ok && (result.success || result.status)) {
            if (typeof Toastify !== "undefined") Toastify({ text: "✅ Status Updated Successfully!", duration: 3000, style: { background: "#00b09b" } }).showToast();
            setTimeout(() => { window.location.href = "order-list.php"; }, 1500);
        } else {
            throw new Error(result.message || "Failed to update status");
        }
    } catch (error) {
        console.error("Status Update Error:", error);
        if (typeof Toastify !== "undefined") Toastify({ text: `❌ Error: ${error.message}`, duration: 3000, style: { background: "#ff416c" } }).showToast();
        submitBtn.disabled = false;
        submitBtn.innerText = "Update Status";
    }
}
