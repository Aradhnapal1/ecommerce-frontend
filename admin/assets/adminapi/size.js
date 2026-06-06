const SIZE_API = `${domin}/api/size/getallsize`;

document.addEventListener("DOMContentLoaded", () => {
    getAllSizes();
});

async function getAllSizes() {
    try {

        const response = await fetch(SIZE_API);
        const result = await response.json();

        console.log("API Response:", result);

        const tableBody =
            document.getElementById("sizeTableBody");

        if (!tableBody) {
            console.error(
                "sizeTableBody not found"
            );
            return;
        }

        const sizes =
            Array.isArray(result)
                ? result
                : result.data || [];

        tableBody.innerHTML = "";

        sizes.forEach((size, index) => {

            tableBody.innerHTML += `
                <tr>
                    <td>${index + 1}</td>
                    <td>${size.id}</td>
                    <td>${size.sizeName}</td>

                    <td>
                        <span class="${
                            size.isActive
                            ? "badge badge-success"
                            : "badge badge-danger"
                        }">
                            ${
                                size.isActive
                                ? "Active"
                                : "Inactive"
                            }
                        </span>
                    </td>

                    <td>
                        <a href="edit-size.php?id=${size.id}">
                            <i class="fa fa-edit"></i>
                        </a>

                        <a href="javascript:void(0)"
                           onclick="deleteSize(${size.id})">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            `;
        });

    } catch (error) {

        console.error(
            "Error fetching sizes:",
            error
        );
    }
}