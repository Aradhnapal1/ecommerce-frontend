

const getUsersApi =`${domin}/api/user/get-all`;

async function loadUsers() {
    try {

        const response = await fetch(getUsersApi);
        const result = await response.json();

        const tableBody = document.getElementById("userTableBody");
        tableBody.innerHTML = "";

        // API response array
        const users = result.data || result.users || result;

        const onlyUsers = users.filter(
            user => user.role && user.role.toUpperCase() === "USER"
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
        console.log(error);
        toastr.error("Failed to load users");
    }
}

async function deleteUser(id) {

    if (!confirm("Are you sure you want to delete this user?")) {
        return;
    }

    try {

        const response = await fetch(
            `https://ecommerce-backend.workarya.com/api/user/delete/${id}`,
            {
                method: "DELETE"
            }
        );

        const result = await response.json();

        if (response.ok) {

            toastr.success("User deleted successfully");

            loadUsers();

        } else {

            toastr.error(result.message || "Delete failed");

        }

    } catch (error) {

        console.log(error);
        toastr.error("Something went wrong");

    }
}

document.addEventListener("DOMContentLoaded", () => {
    loadUsers();
});

