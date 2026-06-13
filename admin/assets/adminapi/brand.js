// API URL
const BRAND_API =`${domin}/api/brand/getallbrands`;


let brandsData = [];
let editingBrandId = null;

document.addEventListener("DOMContentLoaded", () => {
    getAllBrands();
    checkIfEditMode();
});

async function getAllBrands() {
    try {
        const response = await adminFetch(BRAND_API);
        const result = await response.json();

        brandsData = result.data || [];

        const tableBody = document.getElementById("brandTableBody");
        if (!tableBody) return;

        tableBody.innerHTML = "";

        brandsData.forEach((brand, index) => {
            tableBody.innerHTML += `
                <tr>
                    <td>${index + 1}</td>
                    <td>${brand.id}</td>

                    <td>
                        <img
                            src="${brand.brandImg}"
                            alt="${brand.brandName}"
                            width="60"
                            height="60"
                            style="object-fit:cover;border-radius:5px;"
                        >
                    </td>

                    <td>${brand.brandName}</td>

                    <td>
                        <span class="${
                            brand.isActive
                                ? "badge badge-success"
                                : "badge badge-danger"
                        }">
                            ${brand.isActive ? "Active" : "Inactive"}
                        </span>
                    </td>

                    <td>
                        <a href="edit-brand.php?id=${brand.id}">
                            <i class="fa fa-edit" title="Edit"></i>
                        </a>

                        <a href="javascript:void(0)" onclick="deleteBrand(${brand.id})">
                            <i class="fa fa-trash" title="Delete"></i>
                        </a>
                    </td>
                </tr>
            `;
        });

    } catch (error) {
        console.error("Error fetching brands:", error);
    }
}

async function checkIfEditMode() {
    const urlParams = new URLSearchParams(window.location.search);
    const editId = urlParams.get('id');

    // Run this logic only if an ID is present and we are on edit-brand.php
    if (editId && window.location.href.includes('edit-brand.php')) {
        editingBrandId = editId;
        
        try {
            // Fetch all brands to find the data of the specific brand
            const response = await adminFetch(BRAND_API);
            const result = await response.json();
            const brand = (result.data || []).find(b => b.id == editId);

            if (brand) {
                // Fill Brand Name
                const brandNameInput = document.getElementById("brandName");
                if (brandNameInput) brandNameInput.value = brand.brandName;

                // Fill Active/Inactive Status
                if (brand.isActive == true || brand.isActive == "true" || brand.isActive == 1) {
                    const activeRadio = document.querySelector('input[name="status"][value="true"]');
                    if (activeRadio) activeRadio.checked = true;
                } else {
                    const inactiveRadio = document.querySelector('input[name="status"][value="false"]');
                    if (inactiveRadio) inactiveRadio.checked = true;
                }

                // Show Image Preview
                const previewImage = document.getElementById("previewImage");
                const imageName = document.getElementById("imageName");
                if (brand.brandImg && previewImage && imageName) {
                    previewImage.src = brand.brandImg;
                    previewImage.style.display = "inline-block";
                    imageName.textContent = "Current Image (Upload new to replace)";
                }

                // Change Button and Header Text to "Update"
                const addBrandBtn = document.getElementById("addBrandBtn");
                if (addBrandBtn) addBrandBtn.innerHTML = "Update Brand";
                
                const cardHeader = document.querySelector(".card-header h5");
                if (cardHeader) cardHeader.textContent = "Update Brand";
            }
        } catch (error) {
            console.error("Error fetching brand for edit:", error);
        }
    }
}

document.addEventListener("DOMContentLoaded", function () {

    const brandFileInput = document.getElementById("brandFile");
    const previewImage = document.getElementById("previewImage");
    const imageName = document.getElementById("imageName");
    const addBrandBtn = document.getElementById("addBrandBtn");
    const loader = document.getElementById("loaderOverlay");

    window.showSuccess = function(message) {

        Toastify({
            text: "✅ " + message,
            duration: 2500,
            gravity: "top",
            position: "right",
            close: true,
            stopOnFocus: true,
            style: {
                background:
                    "linear-gradient(to right,#00b09b,#96c93d)",
                borderRadius: "10px"
            }
        }).showToast();

        setTimeout(() => {
            window.location.href = "brand.php";
        }, 2500);
    }

    window.showError = function(message) {

        Toastify({
            text: "❌ " + message,
            duration: 3000,
            gravity: "top",
            position: "right",
            close: true,
            stopOnFocus: true,
            style: {
                background:
                    "linear-gradient(to right,#ff416c,#ff4b2b)",
                borderRadius: "10px"
            }
        }).showToast();
    }

    // Image Preview

    if (brandFileInput) {

        brandFileInput.addEventListener("change", function (event) {

            const file = event.target.files[0];

            if (file) {

                imageName.textContent = file.name;

                const reader = new FileReader();

                reader.onload = function (e) {

                    previewImage.src = e.target.result;
                    previewImage.style.display = "inline-block";
                };

                reader.readAsDataURL(file);

            } else {

                if (!editingBrandId) {
                    imageName.textContent = "No image selected";
                    previewImage.src = "";
                    previewImage.style.display = "none";
                }
            }
        });
    }

    // Add / Update Brand

    if (addBrandBtn) {

        addBrandBtn.addEventListener("click", async function () {

            try {

                const brandName =
                    document.getElementById("brandName")
                    .value
                    .trim();

                const brandFile =
                    brandFileInput.files[0];

                const status =
                    document.querySelector(
                        'input[name="status"]:checked'
                    )?.value;

                if (!brandName) {
                    return showError(
                        "Please enter Brand Name"
                    );
                }

                if (!editingBrandId && !brandFile) {
                    return showError(
                        "Please select Brand Image"
                    );
                }

                const formData = new FormData();

                formData.append(
                    "BrandName",
                    brandName
                );

                formData.append(
                    "IsActive",
                    status
                );

                if (brandFile) {
                    formData.append(
                        "BrandFile",
                        brandFile
                    );
                }

                loader.style.display = "flex";

                addBrandBtn.disabled = true;
                addBrandBtn.innerHTML = editingBrandId ? "Updating Brand..." : "Creating Brand...";

                const url = editingBrandId 
                    ? `${domin}/api/brand/updatebrand/${editingBrandId}` 
                    : `${domin}/api/brand/addbrand`;
                const method = editingBrandId ? "PUT" : "POST";

                const response = await adminFetch(url, {
                        method: method,
                        body: formData
                    }
                );

                const data =
                    await response.json();

                loader.style.display = "none";

                if (
                    data.status === true ||
                    data.success === true
                ) {
                    showSuccess(
                        data.message ||
                        (editingBrandId ? "Brand Updated Successfully" : "Brand Added Successfully")
                    );

                } else {

                    showError(
                        data.message ||
                        "Failed to process request"
                    );
                }

            } catch (error) {

                loader.style.display = "none";

                console.error(error);

                showError(
                    "Something went wrong"
                );

            } finally {

                addBrandBtn.disabled = false;
                if (!addBrandBtn.innerHTML.includes("Successfully")) {
                    addBrandBtn.innerHTML = editingBrandId ? "Update Brand" : "Add Brand";
                }
            }
        });
    }

});

window.deleteBrand = async function(id) {
    if (!confirm("Are you sure you want to delete this brand?")) return;

    const loader = document.getElementById("loaderOverlay");
    if (loader) loader.style.display = "flex";

    try {
        const response = await adminFetch(`${domin}/api/brand/deletebrand/${id}`, {
            method: "DELETE"
        });
        const data = await response.json();

        if (loader) loader.style.display = "none";

        if (data.status === true || data.success === true) {
            if (typeof window.showSuccess === "function") {
                window.showSuccess(data.message || "Brand Deleted Successfully");
            } else {
                alert(data.message || "Brand Deleted Successfully");
                window.location.reload();
            }
        } else {
            if (typeof window.showError === "function") {
                window.showError(data.message || "Failed to delete brand");
            } else {
                alert(data.message || "Failed to delete brand");
            }
        }
    } catch (error) {
        if (loader) loader.style.display = "none";
        console.error("Error deleting brand:", error);
        if (typeof window.showError === "function") {
            window.showError("Something went wrong while deleting");
        } else {
            alert("Something went wrong while deleting");
        }
    }
};
