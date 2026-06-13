const getUsersApi = `${domin}/api/user/get-all`;

// =========================
// LOAD USERS
// =========================
async function loadUsers() {
    try {

        const response = await adminFetch(getUsersApi);
        const result = await response.json();

        console.log("USER API RESPONSE:", result);

        const tableBody = document.getElementById("userTableBody");
        tableBody.innerHTML = "";

        const users = result.data || result.users || result || [];

        const onlyUsers = users.filter(user =>
            user.role &&
            user.role.toUpperCase() === "USER"
        );

        onlyUsers.forEach((user, index) => {

            tableBody.innerHTML += `
                <tr>
                    <td>${index + 1}</td>
                    <td>${user.id || "-"}</td>
                    <td>${user.first_name || "-"}</td>
                    <td>${user.last_name || "-"}</td>
                    <td>${user.email || "-"}</td>
                    <td>${user.phone_number || "-"}</td>
                    <td>${user.role || "-"}</td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="deleteUser(${user.id})">
                            <i class="fa fa-trash text-danger"></i>
                        </a>
                    </td>
                </tr>
            `;
        });

    } catch (error) {
        console.error("Load Users Error:", error);
        toastr.error("Failed to load users");
    }
}

// =========================
// LOAD ADMINS
// =========================
async function loadAdmins() {
    try {

        const response = await adminFetch(getUsersApi);
        const result = await response.json();

        console.log("ADMIN API RESPONSE:", result);

        const tableBody = document.getElementById("adminTableBody");
        tableBody.innerHTML = "";

        const users = result.data || result.users || result || [];

        const onlyAdmins = users.filter(user =>
            user.role &&
            user.role.toUpperCase() === "ADMIN"
        );

        onlyAdmins.forEach((user, index) => {

            tableBody.innerHTML += `
                <tr>
                    <td>${index + 1}</td>
                    <td>${user.id || "-"}</td>
                    <td>${user.first_name || "-"}</td>
                    <td>${user.last_name || "-"}</td>
                    <td>${user.email || "-"}</td>
                    <td>${user.phone_number || "-"}</td>
                    <td>${user.role || "-"}</td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="deleteUser(${user.id})">
                            <i class="fa fa-trash text-danger"></i>
                        </a>
                    </td>
                </tr>
            `;
        });

    } catch (error) {
        console.error("Load Admin Error:", error);
        toastr.error("Failed to load admins");
    }
}

// =========================
// DELETE USER
// =========================
function deleteUser(id) {

    const container = document.createElement("div");

    container.innerHTML = `
        <div style="font-weight:bold;margin-bottom:10px;text-align:center;color:#fff;">
            Are you sure you want to delete this user?
        </div>

        <div style="display:flex;justify-content:center;gap:10px;">
            <button class="toast-yes-btn"
                style="background:#fff;color:#ff416c;border:none;padding:6px 15px;border-radius:5px;font-weight:bold;cursor:pointer;">
                Yes, Delete
            </button>

            <button class="toast-no-btn"
                style="background:transparent;color:#fff;border:1px solid #fff;padding:6px 15px;border-radius:5px;cursor:pointer;">
                Cancel
            </button>
        </div>
    `;

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

    // DELETE CONFIRM
    container.querySelector(".toast-yes-btn").addEventListener("click", async () => {

        toast.hideToast();

        try {

            console.log("Deleting User:", id);

            const response = await adminFetch(
                `${domin}/api/user/delete/${id}`,
                {
                    method: "DELETE"
                }
            );

            const result = await response.json();

            console.log("DELETE RESPONSE:", result);

            if (response.ok || result.success) {

                toastr.success("User deleted successfully");

                // Refresh tables
                await loadUsers();
                await loadAdmins();

            } else {

                toastr.error(result.message || "Delete failed");

            }

        } catch (error) {

            console.error("DELETE ERROR:", error);
            toastr.error("Something went wrong");

        }
    });

    // CANCEL
    container.querySelector(".toast-no-btn").addEventListener("click", () => {
        toast.hideToast();
    });
}

// =========================
// PAGE LOAD
// =========================
document.addEventListener("DOMContentLoaded", async () => {

     loadUsers();
     loadAdmins();

});