const API = {
    GET_ALL: `${domin}/api/size/getallsize`,
    ADD: `${domin}/api/size/addsize`,
    UPDATE: `${domin}/api/size/updatesize`,
    DELETE: `${domin}/api/size/deletesize`
};



let editingSizeId = null;

/* ==========================
   GET ALL SIZE
========================== */

document.addEventListener("DOMContentLoaded", () => {
    getAllSizes();
    checkIfEditMode();

    // Attach click event to the save button
    const addSizeBtn = document.getElementById("addSizeBtn");
    if (addSizeBtn) {
        addSizeBtn.addEventListener("click", saveSize);
    }

    // Attach click event to the update button (used in edit-size.php)
    const updateSizeBtn = document.getElementById("updateSizeBtn");
    if (updateSizeBtn) {
        updateSizeBtn.addEventListener("click", saveSize);
    }
});

async function checkIfEditMode() {
    const urlParams = new URLSearchParams(window.location.search);
    const editId = urlParams.get('id');

    if (editId && window.location.href.includes('edit-size.php')) {
        editingSizeId = editId;
        
        try {
            const response = await fetch(API.GET_ALL);
            const result = await response.json();
            const sizes = Array.isArray(result) ? result : (result.data || []);
            const size = sizes.find(s => s.id == editId);

            if (size) {
                const sizeNameInput = document.getElementById("sizeName");
                if (sizeNameInput) sizeNameInput.value = size.sizeName;

                if (size.isActive == true || size.isActive == "true" || size.isActive == 1) {
                    const activeRadio = document.querySelector('input[name="status"][value="true"]');
                    if (activeRadio) activeRadio.checked = true;
                } else {
                    const inactiveRadio = document.querySelector('input[name="status"][value="false"]');
                    if (inactiveRadio) inactiveRadio.checked = true;
                }
            }
        } catch (error) {
            console.error("Error fetching size for edit:", error);
        }
    }
}

async function getAllSizes() {

    try {

        const response = await fetch(API.GET_ALL);
        const result = await response.json();

        const sizes =
            Array.isArray(result)
                ? result
                : result.data || [];

        const tableBody =
            document.getElementById("sizeTableBody");

        if (!tableBody) return;

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

        console.error(error);
    }
}

/* ==========================
   ADD / UPDATE SIZE
========================== */

async function saveSize() {

    const sizeName =
        document.getElementById("sizeName")
        .value
        .trim();

    const status =
        document.querySelector(
            'input[name="status"]:checked'
        )?.value;

    const loader =
        document.getElementById(
            "loaderOverlay"
        );

    if (!sizeName) {

        Toastify({
            text: "Enter Size Name",
            duration: 3000
        }).showToast();

        return;
    }

    try {

        if (loader) loader.style.display = "flex";

        const formData =
            new FormData();

        formData.append(
            "SizeName",
            sizeName
        );

        formData.append(
            "IsActive",
            status
        );

        const url =
            editingSizeId
                ? `${API.UPDATE}/${editingSizeId}`
                : API.ADD;

        const method =
            editingSizeId
                ? "PUT"
                : "POST";

        const response =
            await fetch(url, {
                method,
                body: formData
            });

        const data =
            await response.json();

        if (loader) loader.style.display = "none";

        if (
            data.status ||
            data.success
        ) {

            Toastify({
                text:
                    editingSizeId
                        ? "Size Updated Successfully"
                        : "Size Added Successfully",
                duration: 2500,
                gravity: "top",
                position: "right",
                style: {
                    background:
                        "linear-gradient(to right,#00b09b,#96c93d)"
                }
            }).showToast();

            setTimeout(() => {

                window.location.href =
                    "size.php";

            }, 2000);

        } else {

            Toastify({
                text:
                    data.message ||
                    "Operation Failed",
                duration: 3000,
                gravity: "top",
                position: "right",
                style: {
                    background:
                        "linear-gradient(to right,#ff416c,#ff4b2b)"
                }
            }).showToast();
        }

    } catch (error) {

        if (loader) loader.style.display = "none";

        console.error(error);
    }
}

/* ==========================
   DELETE SIZE
========================== */

async function deleteSize(id) {

    if (
        !confirm(
            "Delete this size?"
        )
    ) return;

    try {

        const response =
            await fetch(
                `${API.DELETE}/${id}`,
                {
                    method: "DELETE"
                }
            );

        const data =
            await response.json();

        if (
            data.status ||
            data.success
        ) {

            Toastify({
                text:
                    "Size Deleted Successfully",
                duration: 2500,
                gravity: "top",
                position: "right",
                style: {
                    background:
                        "linear-gradient(to right,#00b09b,#96c93d)"
                }
            }).showToast();

            getAllSizes();

        } else {

            Toastify({
                text:
                    data.message ||
                    "Delete Failed",
                duration: 3000
            }).showToast();
        }

    } catch (error) {

        console.error(error);
    }
}