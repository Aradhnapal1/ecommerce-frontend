// Define APIs for Color operations
const GET_ALL_COLORS_API = `${domin}/api/colors/get-all`;
const ADD_COLOR_API = `${domin}/api/colors/create`;
const UPDATE_COLOR_API = `${domin}/api/colors/update/`;
const DELETE_COLOR_API = `${domin}/api/colors/delete/`;

let editingColorId = null;

// Initialize on DOM load
document.addEventListener("DOMContentLoaded", () => {
    getAllColors();
    checkIfEditMode();

    // Attach click events to the save/update buttons
    const addColorBtn = document.getElementById("addColorBtn");
    if (addColorBtn) {
        addColorBtn.addEventListener("click", saveColor);
    }

    const updateColorBtn = document.getElementById("updateColorBtn");
    if (updateColorBtn) {
        updateColorBtn.addEventListener("click", saveColor);
    }
});

// -----------------------------------------------------
// Loader & Toast Helper Functions
// -----------------------------------------------------
function getLoader() {
    let loader = document.getElementById("loaderOverlay");
    if (!loader) {
        loader = document.createElement('div');
        loader.id = "loaderOverlay";
        loader.className = "loader-overlay";
        loader.innerHTML = `
            <div class="loader-card">
                <div class="bars-loader">
                    <span></span><span></span><span></span><span></span><span></span>
                </div>
                <h4 id="loaderTitle">Processing</h4>
                <p id="loaderDesc">Please wait...</p>
                <style>
                    .loader-overlay { display: none; position: fixed; inset: 0; background: rgba(15, 23, 42, .75); backdrop-filter: blur(10px); z-index: 999999; justify-content: center; align-items: center; }
                    .loader-card { width: 380px; background: #fff; padding: 35px; border-radius: 24px; text-align: center; box-shadow: 0 20px 50px rgba(0, 0, 0, .25); }
                    .loader-card h4 { margin-top: 20px; margin-bottom: 10px; font-weight: 700; }
                    .loader-card p { color: #64748b; margin: 0; }
                    .bars-loader { width: 70px; height: 50px; margin: auto; display: flex; align-items: flex-end; justify-content: center; gap: 6px; }
                    .bars-loader span { width: 8px; height: 15px; border-radius: 20px; background: linear-gradient(180deg, #2563eb, #06b6d4); animation: bars 1s infinite ease-in-out; }
                    .bars-loader span:nth-child(1) { animation-delay: 0s; }
                    .bars-loader span:nth-child(2) { animation-delay: .1s; }
                    .bars-loader span:nth-child(3) { animation-delay: .2s; }
                    .bars-loader span:nth-child(4) { animation-delay: .3s; }
                    .bars-loader span:nth-child(5) { animation-delay: .4s; }
                    @keyframes bars { 0%, 100% { height: 15px; } 50% { height: 45px; } }
                </style>
            </div>
        `;
        document.body.appendChild(loader);
    }
    return loader;
}

function showLoader(title, desc) {
    const loader = getLoader();
    loader.style.display = "flex";
    loader.querySelector("#loaderTitle").textContent = title || "Processing";
    loader.querySelector("#loaderDesc").textContent = desc || "Please wait...";
}

function hideLoader() {
    const loader = document.getElementById("loaderOverlay");
    if (loader) loader.style.display = "none";
}

window.showSuccess = function(message, redirectUrl) {
    Toastify({
        text: "✅ " + message,
        duration: 2500,
        gravity: "top",
        position: "right",
        style: { background: "linear-gradient(to right,#00b09b,#96c93d)", borderRadius: "10px" }
    }).showToast();

    if (redirectUrl) {
        setTimeout(() => {
            window.location.href = redirectUrl;
        }, 2000);
    }
}

window.showError = function(message) {
    Toastify({
        text: "❌ " + message,
        duration: 3000,
        gravity: "top",
        position: "right",
        style: { background: "linear-gradient(to right,#ff416c,#ff4b2b)", borderRadius: "10px" }
    }).showToast();
}

// -----------------------------------------------------
// 1. GET ALL COLORS (Read)
// -----------------------------------------------------
async function getAllColors() {
    try {
        const response = await adminFetch(GET_ALL_COLORS_API);
        const result = await response.json();

        // Handle response structure depending on API design
        const colors = Array.isArray(result) ? result : (result.data || []);

        const tableBody = document.getElementById("colorTableBody");
        if (!tableBody) return;

        tableBody.innerHTML = "";

        colors.forEach((color, index) => {
            tableBody.innerHTML += `
                <tr>
                    <td>${index + 1}</td>
                    <td>${color.id}</td>
                    <td>${color.colorName}</td>
                    <td>${color.colorCode || "-"}</td>
                    <td>
                        <div style="width: 25px; height: 25px; background-color: ${color.colorCode || 'transparent'}; border-radius: 50%; border: 1px solid #ddd; margin: 0 auto;"></div>
                    </td>
                    <td>
                        <span class="${color.status ? 'badge badge-success' : 'badge badge-danger'}">
                            ${color.status ? 'Active' : 'Inactive'}
                        </span>
                    </td>
                    <td>
                        <a href="edit-color.php?id=${color.id}" >
                            <i class="fa fa-edit" title="Edit"></i>
                        </a>
                        <a href="javascript:void(0)" onclick="deleteColor(${color.id})" >
                            <i class="fa fa-trash" title="Delete"></i>
                        </a>
                    </td>
                </tr>
            `;
        });
    } catch (error) {
        console.error("Error fetching colors:", error);
    }
}

// -----------------------------------------------------
// 2. CHECK IF EDIT MODE (For edit-color.php auto-fill)
// -----------------------------------------------------
async function checkIfEditMode() {
    const urlParams = new URLSearchParams(window.location.search);
    const editId = urlParams.get('id');

    if (editId && window.location.href.includes('edit-color.php')) {
        editingColorId = editId;
        
        try {
            const response = await adminFetch(GET_ALL_COLORS_API);
            const result = await response.json();
            const colors = Array.isArray(result) ? result : (result.data || []);
            const color = colors.find(c => c.id == editId);

            if (color) {
                const colorNameInput = document.getElementById("colorName");
                if (colorNameInput) colorNameInput.value = color.colorName;

                if (color.status === true || color.status === "true" || color.status == 1) {
                    const activeRadio = document.querySelector('input[name="status"][value="true"]');
                    if (activeRadio) activeRadio.checked = true;
                } else {
                    const inactiveRadio = document.querySelector('input[name="status"][value="false"]');
                    if (inactiveRadio) inactiveRadio.checked = true;
                }
            }
        } catch (error) {
            console.error("Error fetching color for edit:", error);
        }
    }
}

// -----------------------------------------------------
// 3. ADD / UPDATE COLOR
// -----------------------------------------------------
async function saveColor() {
    const colorNameInput = document.getElementById("colorName");
    const colorName = colorNameInput ? colorNameInput.value.trim() : "";
    const status = document.querySelector('input[name="status"]:checked')?.value;

    if (!colorName) {
        return showError("Please enter Color Name");
    }

    showLoader(editingColorId ? "Updating Color" : "Creating Color", "Saving color data...");

    const payload = {
        colorName: colorName,
        status: status === "true" || status === true || status === 1
    };

    const url = editingColorId ? `${UPDATE_COLOR_API}${editingColorId}` : ADD_COLOR_API;
            const method = editingColorId ? "PUT" : "POST";

    try {
        const response = await adminFetch(url, {
            method: method,
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(payload)
        });

        const data = await response.json();
        hideLoader();

        if (data.status === true || data.success === true || response.ok) {
            showSuccess(
                data.message || (editingColorId ? "Color Updated Successfully" : "Color Added Successfully"),
                "color.php"
            );
        } else {
            showError(data.message || "Failed to process request");
        }
    } catch (error) {
        hideLoader();
        console.error("Error saving color:", error);
        showError("Something went wrong");
    }
}

// -----------------------------------------------------
// 4. DELETE COLOR
// -----------------------------------------------------
window.deleteColor = async function(id) {
    if (!confirm("Are you sure you want to delete this color?")) return;

    showLoader("Deleting Color", "Please wait...");

    try {
        const response = await adminFetch(`${DELETE_COLOR_API}${id}`, {
            method: "DELETE" // Using DELETE method
        });
        const data = await response.json();

        hideLoader();

        if (data.status === true || data.success === true || response.ok) {
            showSuccess(data.message || "Color Deleted Successfully");
            setTimeout(() => window.location.reload(), 2000);
        } else {
            showError(data.message || "Failed to delete color");
        }
    } catch (error) {
        hideLoader();
        console.error("Error deleting color:", error);
        showError("Something went wrong while deleting");
    }
};