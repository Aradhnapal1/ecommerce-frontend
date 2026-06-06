<?php include 'header.php'; ?>

<div class="page-body">
    <div class="container-fluid">

        <div class="row product-adding">

            <!-- LEFT FORM -->
            <div class="col-md-7">
                <div class="card">

                    <div class="card-header">
                        <h5>Add Category</h5>
                    </div>

                    <div class="card-body">

                        <!-- CATEGORY NAME -->
                        <div class="form-group">
                            <label>Category Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="categoryName" placeholder="Enter category name">
                        </div>

                        <!-- IMAGE -->
                        <div class="form-group">
                            <label>Category Image <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" id="categoryFile" accept="image/*">
                        </div>

                        <!-- STATUS -->
                        <div class="form-group">
                            <label>Status <span class="text-danger">*</span></label><br>
                            <label>
                                <input type="radio" name="status" value="true" checked> Active
                            </label>
                            &nbsp;&nbsp;
                            <label>
                                <input type="radio" name="status" value="false"> Inactive
                            </label>
                        </div>

                        <!-- ADD AS SUBCATEGORY -->
                        <div class="form-group">
                            <label>
                                <input type="checkbox" id="isSubCategory">
                                Add as Subcategory
                            </label>
                        </div>

                        <!-- DYNAMIC HIERARCHY CONTAINER -->
                        <div id="categoryHierarchy" style="display: none;"></div>

                        <!-- ADD BUTTON -->
                        <button type="button" class="btn btn-primary mt-3" id="addCategoryBtn">
                            Add Category
                        </button>

                    </div>
                </div>
            </div>

            <!-- RIGHT IMAGE PREVIEW -->
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Image Preview</h5>
                    </div>
                    <div class="card-body text-center">
                        <img id="previewImage" 
                             style="width:100%; max-height:300px; object-fit:contain; display:none; border:1px solid #ddd; border-radius:10px;">
                        <p id="imageName" class="mt-3 text-muted">No image selected</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
const API = "https://ecommerce-backend.workarya.com";
let allCategories = [];

/* INIT */
document.addEventListener("DOMContentLoaded", async function () {
    await fetchCategories();
});

/* FETCH CATEGORIES */
async function fetchCategories() {
    try {
        const res = await fetch(`${API}/api/getcategories`);
        const result = await res.json();
        allCategories = result?.value?.data || [];
    } catch (err) {
        console.error("Fetch Error:", err);
    }
}

/* IMAGE PREVIEW */
document.getElementById("categoryFile").addEventListener("change", function (e) {
    const file = e.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = function (event) {
        document.getElementById("previewImage").src = event.target.result;
        document.getElementById("previewImage").style.display = "block";
        document.getElementById("imageName").innerText = file.name;
    };
    reader.readAsDataURL(file);
});

/* TOGGLE HIERARCHY */
document.getElementById("isSubCategory").addEventListener("change", function () {
    const hierarchy = document.getElementById("categoryHierarchy");
    hierarchy.style.display = this.checked ? "block" : "none";

    if (this.checked) renderHierarchy();
    else hierarchy.innerHTML = "";
});

/* DYNAMIC HIERARCHY RENDER */
function renderHierarchy() {
    const container = document.getElementById("categoryHierarchy");
    container.innerHTML = "";

    let html = `
        <div class="form-group">
            <label>Select Root Category</label>
            <select class="form-control level-select" data-level="0" id="level-0">
                <option value="">Select Root Category</option>
            </select>
        </div>`;

    container.innerHTML = html;

    const rootSelect = document.getElementById("level-0");

    allCategories.forEach(cat => {
        const opt = document.createElement("option");
        opt.value = cat.id;
        opt.textContent = cat.categoryName;
        rootSelect.appendChild(opt);
    });

    container.addEventListener("change", handleLevelChange);
}

/* HANDLE LEVEL CHANGE */
function handleLevelChange(e) {
    if (!e.target.classList.contains("level-select")) return;

    const currentLevel = parseInt(e.target.dataset.level);
    const selectedId = e.target.value;
    const container = document.getElementById("categoryHierarchy");

    for (let i = currentLevel + 1; i < 10; i++) {
        const el = document.getElementById(`level-${i}`);
        if (el) el.parentElement.remove();
    }

    if (!selectedId) return;

    let children = [];

    if (currentLevel === 0) {
        const root = allCategories.find(c => String(c.id) === String(selectedId));
        children = root?.children || [];
    } else {
        children = findChildrenById(selectedId);
    }

    if (children.length === 0) return;

    const nextLevel = currentLevel + 1;

    const div = document.createElement("div");
    div.className = "form-group";
    div.innerHTML = `
        <label>Select Sub Category (Level ${nextLevel})</label>
        <select class="form-control level-select" data-level="${nextLevel}" id="level-${nextLevel}">
            <option value="">Select Level ${nextLevel}</option>
        </select>
    `;

    container.appendChild(div);

    const select = document.getElementById(`level-${nextLevel}`);

    children.forEach(child => {
        const opt = document.createElement("option");
        opt.value = child.id;
        opt.textContent = child.categoryName;
        select.appendChild(opt);
    });
}

/* FIND CHILDREN */
function findChildrenById(id) {
    function search(categories) {
        for (let cat of categories) {
            if (String(cat.id) === String(id)) return cat.children || [];
            if (cat.children) {
                const found = search(cat.children);
                if (found.length > 0) return found;
            }
        }
        return [];
    }
    return search(allCategories);
}

/* ADD CATEGORY */
function showToast(message, type = "success") {
    Toastify({
        text: message,
        duration: 3000,
        gravity: "top",
        position: "right",
        close: true,
        stopOnFocus: true,
        style: {
            background:
                type === "success"
                    ? "linear-gradient(to right, #00b09b, #96c93d)"
                    : "linear-gradient(to right, #ff416c, #ff4b2b)"
        }
    }).showToast();
}

document.getElementById("addCategoryBtn").addEventListener("click", async function () {

    const name = document.getElementById("categoryName").value.trim();
    const file = document.getElementById("categoryFile").files[0];
    const isActive = document.querySelector('input[name="status"]:checked').value === "true";

    if (!name) {
        showToast("Category name is required", "error");
        return;
    }

    if (!file) {
        showToast("Please select a category image", "error");
        return;
    }

    let parentId = "";
    const isSub = document.getElementById("isSubCategory").checked;

    if (isSub) {
        for (let i = 9; i >= 0; i--) {
            const select = document.getElementById(`level-${i}`);
            if (select && select.value) {
                parentId = select.value;
                break;
            }
        }

        if (!parentId) {
            showToast("Please select a parent category", "error");
            return;
        }
    }

    const formData = new FormData();
    formData.append("CategoryName", name);
    formData.append("CategoryFile", file);
    formData.append("IsActive", isActive);
    formData.append("parentId", parentId);

    try {
        const res = await fetch(`${API}/api/addcategory`, {
            method: "POST",
            body: formData
        });

        const result = await res.json();

        if (result?.value?.status === true) {

            showToast(
                result?.value?.message || "Category added successfully!",
                "success"
            );

            document.getElementById("categoryName").value = "";
            document.getElementById("categoryFile").value = "";
            document.getElementById("previewImage").style.display = "none";
            document.getElementById("imageName").innerText = "No image selected";
            document.getElementById("isSubCategory").checked = false;
            document.getElementById("categoryHierarchy").style.display = "none";
            document.getElementById("categoryHierarchy").innerHTML = "";
             setTimeout(() => {
        window.location.href = "category-digital.php";
    }, 1000);

        } else {
            showToast(
                result?.value?.message || "Failed to add category",
                "error"
            );
        }

    } catch (err) {
        console.error(err);
        showToast("Server error occurred", "error");
    }
});



</script>

<?php include 'footer.php'; ?>