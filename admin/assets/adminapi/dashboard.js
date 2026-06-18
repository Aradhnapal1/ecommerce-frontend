document.addEventListener("DOMContentLoaded", function () {
    fetchDashboardStats();
});

async function fetchDashboardStats() {
    try {
        const adminToken = localStorage.getItem("adminToken");
        
        const response = await fetch(`${domin}/api/admin/dashboard/stats`, {
            method: "GET",
            headers: {
                "Authorization": `Bearer ${adminToken}`
            }
        });

        const result = await response.json();

        if (result.success) {
            const data = result.data;
            
            // Top widgets
            const elRevenue = document.getElementById("stat-revenue");
            if (elRevenue) elRevenue.innerText = Number(data.totalRevenue).toLocaleString('en-IN');
            
            const elTotalOrders = document.getElementById("stat-total-orders");
            if (elTotalOrders) elTotalOrders.innerText = data.totalOrders;
            
            const elProducts = document.getElementById("stat-products");
            if (elProducts) elProducts.innerText = data.totalProducts;
            
            const elUsers = document.getElementById("stat-users");
            if (elUsers) elUsers.innerText = data.totalUsers;
            
            const elPendingOrders = document.getElementById("stat-pending-orders");
            if (elPendingOrders) elPendingOrders.innerText = data.totalPendingOrders;
            
            const elDeliveredOrders = document.getElementById("stat-delivered-orders");
            if (elDeliveredOrders) elDeliveredOrders.innerText = data.totalDeliveredOrders;
            
            const elCancelledOrders = document.getElementById("stat-cancelled-orders");
            if (elCancelledOrders) elCancelledOrders.innerText = data.totalCancelledOrders;
            
            const elReturnedOrders = document.getElementById("stat-returned-orders");
            if (elReturnedOrders) elReturnedOrders.innerText = data.totalReturnedOrders;
            
            const elEnquiries = document.getElementById("stat-enquiries");
            if (elEnquiries) elEnquiries.innerText = data.totalContactEnquiries;

            // Secondary widgets
            const statPending = document.getElementById("stat-pending");
            if (statPending) statPending.innerText = data.totalPendingOrders;
            const statPending2 = document.getElementById("stat-pending-2");
            if (statPending2) statPending2.innerText = data.totalPendingOrders;

            const statDelivered = document.getElementById("stat-delivered");
            if (statDelivered) statDelivered.innerText = data.totalDeliveredOrders;
            const statDelivered2 = document.getElementById("stat-delivered-2");
            if (statDelivered2) statDelivered2.innerText = data.totalDeliveredOrders;

            const statCancelled = document.getElementById("stat-cancelled");
            if (statCancelled) statCancelled.innerText = data.totalCancelledOrders;
            const statCancelled2 = document.getElementById("stat-cancelled-2");
            if (statCancelled2) statCancelled2.innerText = data.totalCancelledOrders;

            const statReturned = document.getElementById("stat-returned");
            if (statReturned) statReturned.innerText = data.totalReturnedOrders;
            const statReturned2 = document.getElementById("stat-returned-2");
            if (statReturned2) statReturned2.innerText = data.totalReturnedOrders;

            // Recent Orders
            const tbody = document.getElementById("recent-orders-tbody");
            if (tbody && data.recentOrders && data.recentOrders.length > 0) {
                let html = "";
                data.recentOrders.forEach(order => {
                    let statusClass = "font-primary";
                    if (order.orderStatus === "DELIVERED") statusClass = "font-success";
                    else if (order.orderStatus === "CANCELLED") statusClass = "font-danger";
                    else if (order.orderStatus === "RETURNED") statusClass = "font-secondary";
                    else if (order.orderStatus === "PENDING") statusClass = "font-warning";

                    html += `
                        <tr>
                            <td>${order.orderNumber}</td>
                            <td>${order.fullName}</td>
                            <td class="digits">₹${Number(order.finalAmount).toLocaleString('en-IN')}</td>
                            <td class="${statusClass}">${order.orderStatus}</td>
                        </tr>
                    `;
                });
                tbody.innerHTML = html;
            } else if (tbody) {
                tbody.innerHTML = `<tr><td colspan="4" class="text-center">No recent orders found.</td></tr>`;
            }
        }
    } catch (error) {
        console.error("Error fetching dashboard stats:", error);
    }
}