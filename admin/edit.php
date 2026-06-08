<?php include 'header.php'; ?>

<div class="page-body">
    <div class="container-fluid">
        <div class="row product-adding">

            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Category</h5>
                    </div>
                    <div class="card-body">

                        <input type="hidden" id="categoryId">

                        <div class="form-group">
                            <label>Category Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="categoryName">
                        </div>

                        <div class="form-group">
                            <label>Category Image</label>
                            <input type="file" class="form-control" id="categoryFile" accept="image/*">
                            <small class="text-muted" id="currentImage"></small>
                        </div>

                        <div class="form-group">
                            <label>Status <span class="text-danger">*</span></label><br>
                            <label><input type="radio" name="status" value="true"> Active</label>
                            &nbsp;&nbsp;
                            <label><input type="radio" name="status" value="false"> Inactive</label>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" id="isSubCategory">
                                Change Parent (Add as Subcategory)
                            </label>
                        </div>

                        <div id="categoryHierarchy" style="display:none;"></div>

                        <button type="button" class="btn btn-primary mt-3" id="editCategoryBtn">
                            Update Category
                        </button>

                    </div>
                </div>
            </div>

            <!-- Image Preview -->
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Image Preview</h5>
                    </div>
                    <div class="card-body text-center">
                        <img id="previewImage"
                            style="width:100%; max-height:300px; object-fit:contain; display:none; border:1px solid #ddd; border-radius:10px;">
                        <p id="imageName" class="mt-3 text-muted">No new image selected</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    const API = "https://ecommerce-backend.workarya.com";
    let allCategories = [];
    let currentCategory = null;

    /* INIT */
    document.addEventListener("DOMContentLoaded", async () => {
        await fetchCategories();
        await loadCategoryForEdit();
    });

    async function fetchCategories() {
        try {
            const res = await fetch(`${API}/api/getcategories`);
            const result = await res.json();
            allCategories = result?.value?.data || [];
        } catch (err) {
            console.error(err);
        }
    }

    /* LOAD & PREFILL */
    async function loadCategoryForEdit() {
        const id = new URLSearchParams(window.location.search).get('id');
        if (!id) return alert("ID not found");

        document.getElementById("categoryId").value = id;

        try {
            const res = await fetch(`${API}/api/getcategories`);
            const result = await res.json();
            const allData = result?.value?.data || [];

            currentCategory = findCategoryById(allData, id);
            if (!currentCategory) return alert("Category not found");

            // Basic Info
            document.getElementById("categoryName").value = currentCategory.categoryName;

            document.querySelectorAll('input[name="status"]').forEach(r => {
                if (r.value === String(currentCategory.isActive)) r.checked = true;
            });

            if (currentCategory.categoryImage) {
                document.getElementById("previewImage").src = currentCategory.categoryImage;
                document.getElementById("previewImage").style.display = "block";
                document.getElementById("currentImage").innerHTML = `Current: <a href="${currentCategory.categoryImage}" target="_blank">View</a>`;
            }

            // Hierarchy Setup
            const hasParent = !!currentCategory.parentId && currentCategory.parentId !== null;
            document.getElementById("isSubCategory").checked = hasParent;

            const hierarchyBox = document.getElementById("categoryHierarchy");
            if (hasParent) {
                hierarchyBox.style.display = "block";
                // Auto-fill the path correctly by passing the PARENT id
                renderHierarchy(currentCategory.parentId);
            }

        } catch (err) {
            console.error(err);
        }
    }

    /* RECURSIVE FIND */
    function findCategoryById(cats, id) {
        for (let cat of cats) {
            if (String(cat.id) === String(id)) return cat;
            if (cat.children) {
                const found = findCategoryById(cat.children, id);
                if (found) return found;
            }
        }
        return null;
    }

    /* IMAGE PREVIEW */
    document.getElementById("categoryFile").addEventListener("change", e => {
        const file = e.target.files[0];
        if (!file) return;
        const reader = new FileReader();
        reader.onload = ev => {
            document.getElementById("previewImage").src = ev.target.result;
            document.getElementById("previewImage").style.display = "block";
            document.getElementById("imageName").innerText = file.name;
        };
        reader.readAsDataURL(file);
    });

    /* TOGGLE HIERARCHY CHECKBOX */
    document.getElementById("isSubCategory").addEventListener("change", function () {
        const container = document.getElementById("categoryHierarchy");
        if (this.checked) {
            container.style.display = "block";
            renderHierarchy();
        } else {
            container.style.display = "none";
            container.innerHTML = "";
        }
    });

    /* =========================
       TOAST NOTIFICATION
    ========================= */
    function showToast(message, type = "success") {
        Toastify({
            text: message,
            duration: 3000,
            gravity: "top",
            position: "right",
            close: true,
            style: {
                background: type === "success" ? "linear-gradient(to right, #00b09b, #96c93d)" : "linear-gradient(to right, #ff416c, #ff4b2b)"
            }
        }).showToast();
    }

    /* RENDER HIERARCHY */
    function renderHierarchy(editId = null) {
        const container = document.getElementById("categoryHierarchy");
        container.innerHTML = `
        <div class="form-group">
            <label>Select Root Category</label>
            <select class="form-control level-select" data-level="0" id="level-0">
                <option value="">Select Root Category</option>
            </select>
        </div>`;

        const rootSelect = document.getElementById("level-0");
        allCategories.forEach(cat => {
            // Prevent category from being its own parent
            if (currentCategory && String(cat.id) === String(currentCategory.id)) return;

            const opt = document.createElement("option");
            opt.value = cat.id;
            opt.textContent = cat.categoryName;
            rootSelect.appendChild(opt);
        });

        container.addEventListener("change", handleLevelChange);

        if (editId) {
            // Pre-fill synchronously without delays!
            const path = getFullPath(editId);
            for (let i = 0; i < path.length; i++) {
                const select = document.getElementById(`level-${i}`);
                if (select) {
                    select.value = path[i];
                    triggerNextLevel(i, path[i]);
                }
            }
        }
    }

    /* GET FULL PATH */
    function getFullPath(targetId) {
        const path = [];
        let current = findCategoryById(allCategories, targetId);

        while (current) {
            path.unshift(current.id);
            if (!current.parentId || current.parentId === null || current.parentId === "") break;
            current = findCategoryById(allCategories, current.parentId);
        }
        return path;
    }

    /* HANDLE LEVEL CHANGE */
    function handleLevelChange(e) {
        if (!e.target.classList.contains("level-select")) return;
        const level = parseInt(e.target.dataset.level);
        const selectedId = e.target.value;
        triggerNextLevel(level, selectedId);
    }

    /* TRIGGER NEXT LEVEL CREATION */
    function triggerNextLevel(level, selectedId) {
        const container = document.getElementById("categoryHierarchy");

        // Clear deeper levels existing below this one
        for (let i = level + 1; i < 10; i++) {
            const el = document.getElementById(`level-${i}`);
            if (el) el.parentElement.remove();
        }

        if (!selectedId) return;

        let children = level === 0
            ? allCategories.find(c => String(c.id) === String(selectedId))?.children || []
            : findChildrenById(selectedId);

        // Filter out current category from children options to prevent cyclic loops
        children = children.filter(child => !currentCategory || String(child.id) !== String(currentCategory.id));

        if (children.length === 0) return;

        const nextLevel = level + 1;
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

    function findChildrenById(id) {
        function search(cats) {
            for (let cat of cats) {
                if (String(cat.id) === String(id)) return cat.children || [];
                if (cat.children) {
                    const found = search(cat.children);
                    if (found.length) return found;
                }
            }
            return [];
        }
        return search(allCategories);
    }

    /* UPDATE */
    document.getElementById("editCategoryBtn").addEventListener("click", async () => {
        const id = document.getElementById("categoryId").value;
        const name = document.getElementById("categoryName").value.trim();
        const file = document.getElementById("categoryFile").files[0];
        const isActive = document.querySelector('input[name="status"]:checked').value === "true";

        if (!name) return showToast("Category name required", "error");

        let parentId = "";
        if (document.getElementById("isSubCategory").checked) {
            for (let i = 9; i >= 0; i--) {
                const sel = document.getElementById(`level-${i}`);
                if (sel && sel.value) {
                    parentId = sel.value;
                    break;
                }
            }
        }

        const formData = new FormData();
        formData.append("CategoryName", name);
        formData.append("IsActive", isActive);
        if (file) formData.append("CategoryFile", file);
        formData.append("parentId", parentId);

        const btn = document.getElementById("editCategoryBtn");
        const originalText = btn.innerText;
        btn.disabled = true;
        btn.innerText = "Updating...";

        try {
            const res = await fetch(`${API}/api/updatecategory/${id}`, {
                method: "PUT",
                body: formData
            });
            const result = await res.json();

            btn.disabled = false;
            btn.innerText = originalText;

            if (result?.value?.status === true || result?.status === true || result?.success === true) {
                showToast("Category updated successfully!", "success");
                setTimeout(() => window.location.href = "category-digital.php", 1200);
            } else {
                showToast(result?.value?.message || result?.message || "Update failed", "error");
            }
        } catch (err) {
            btn.disabled = false;
            btn.innerText = originalText;
            console.error(err);
            showToast("Server error", "error");
        }
    });
</script>

<?php include 'footer.php'; ?>