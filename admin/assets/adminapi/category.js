// const domain = "https://ecommerce-backend.workarya.com";

document.addEventListener("DOMContentLoaded", function () {
    loadCategories();
});

async function loadCategories() {
    try {
        const res = await adminFetch(`${domin}/api/getcategories`);
        const result = await res.json();

        // Extracting data safely matching the provided response structure
        const data = result?.data || result?.value?.data || [];
        let html = "";

        data.forEach(cat => {
            html += renderCategoryRow(cat);
        });

        document.getElementById("categoryTableBody").innerHTML = html;

    } catch (err) {
        console.error(err);
    }
}

/**
 * Recursive structured rendering with proper hierarchy
 */
function renderCategoryRow(category, catName = "-", subName = "-") {
    let rows = "";

    let currentCatName = catName;
    let currentSubName = subName;
    let currentChildName = "-";

    if (catName === "-") {
        currentCatName = category.categoryName;
    } else if (subName === "-") {
        currentSubName = category.categoryName;
    } else {
        currentChildName = category.categoryName;
    }

    // Render the current category row
    rows += createRow(category, currentCatName, currentSubName, currentChildName);

    // Recursively render any children it might have
    if (category.children && category.children.length > 0) {
        category.children.forEach(child => {
            rows += renderCategoryRow(child, currentCatName, currentSubName);
        });
    }

    return rows;
}

/**
 * Create single table row
 */
function createRow(category, catName, subName, childName) {

    const image = category.categoryImage && category.categoryImage !== ""
        ? category.categoryImage
        : "assets/images/no-image.png";

    const status = category.isActive
        ? `<span style="color:green;">Active</span>`
        : `<span style="color:red;">Inactive</span>`;

    return `
        <tr>
            <td>
                <img src="${image}" width="50" height="50" style="object-fit:contain;">
            </td>

            <td>${catName}</td>
            <td>${subName}</td>
            <td>${childName}</td>

            <td>${status}</td>
            <td>${category.type}</td>
            <td>${category.browseCategory}</td>
            <td>${category.heroSection}</td>

            <td>
                <a href="edit.php?id=${category.id}">
                    <i class="fa fa-edit"></i>
                </a>

                <a href="javascript:void(0)" onclick="deleteCategory(${category.id})">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
    `;
}

/**
 * Delete handler
 */
function deleteCategory(id) {

    const container = document.createElement("div");

    container.innerHTML = `
        <div style="font-weight:bold;margin-bottom:10px;text-align:center;color:#fff;">
            Are you sure you want to delete this category?
        </div>
        <div style="display:flex;justify-content:center;gap:10px;">
            <button class="toast-yes-btn" style="background:#fff;color:#ff416c;border:none;padding:6px 15px;border-radius:5px;font-weight:bold;cursor:pointer;">
                Yes, Delete
            </button>
            <button class="toast-no-btn" style="background:transparent;color:#fff;border:1px solid #fff;padding:6px 15px;border-radius:5px;cursor:pointer;">
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

    // YES CLICK
    container.querySelector(".toast-yes-btn").addEventListener("click", function () {

        toast.hideToast();

        adminFetch(`${domin}/api/deletecategory/${id}`, {
            method: "DELETE"
        })
        .then(res => res.json())
        .then(result => {

            console.log("DELETE RESPONSE:", result);

            const data = result?.value; // ✅ FIX IMPORTANT

            if (data?.status === true) {

                Toastify({
                    text: "Category deleted successfully",
                    duration: 2500,
                    gravity: "top",
                    position: "right",
                    style: {
                        background: "linear-gradient(to right,#00b09b,#96c93d)",
                        borderRadius: "10px"
                    }
                }).showToast();

                setTimeout(() => location.reload(), 1200);

            } else {

                Toastify({
                    text: data?.message || "Delete failed",
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    style: {
                        background: "linear-gradient(to right,#ff416c,#ff4b2b)",
                        borderRadius: "10px"
                    }
                }).showToast();
            }

        })
        .catch(err => {
            console.error(err);

            Toastify({
                text: "Server error",
                duration: 3000,
                gravity: "top",
                position: "right",
                style: {
                    background: "#ff4b2b"
                }
            }).showToast();
        });
    });

    // NO CLICK
    container.querySelector(".toast-no-btn").addEventListener("click", function () {
        toast.hideToast();
    });
}
