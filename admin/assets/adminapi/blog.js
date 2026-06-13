const domain = "https://ecommerce-backend.workarya.com";
let editingBlogId = null;
let existingBlogImageUrl = "";

document.addEventListener("DOMContentLoaded", function () {
    if (document.getElementById("blogTableBody")) {
        loadBlogs();
    }
    if (document.getElementById("addBlogBtn")) {
        bindAddBlog();
        previewBlogImage();
    }
    if (document.getElementById("editBlogBtn")) {
        previewBlogImage();
        checkIfEditBlogMode();
        bindEditBlog();
    }
});

async function loadBlogs() {
    try {
        const response = await adminFetch(`${domain}/api/blog/getblog`);
        const result = await response.json();

        let html = "";

        if (result.status && result.data.length > 0) {

            result.data.forEach((blog, index) => {

                html += `
                    <tr>
                        <td>${index + 1}</td>

                        <td>
                            <img 
                                src="${blog.blogImg || 'assets/images/no-image.png'}" 
                                alt="Blog"
                                width="60"
                                height="60"
                                style="object-fit:contain;border-radius:5px;"
                            >
                        </td>

                        <td>${blog.blogName || "-"}</td>

                        <td>${blog.description || "-"}</td>

                        <td>
                            ${blog.status
                                ? '<span class="badge badge-success">Active</span>'
                                : '<span class="badge badge-danger">Inactive</span>'
                            }
                        </td>

                        <td>
                            <a href="edit-blog.php?id=${blog.id}">
                                <i class="fa fa-edit text-primary"></i>
                            </a>

                            &nbsp;&nbsp;

                            <a href="javascript:void(0)" onclick="deleteBlog(${blog.id})">
                                <i class="fa fa-trash text-danger"></i>
                            </a>
                        </td>
                    </tr>
                `;
            });

        } else {

            html = `
                <tr>
                    <td colspan="6" class="text-center">
                        No Blogs Found
                    </td>
                </tr>
            `;
        }

        document.getElementById("blogTableBody").innerHTML = html;

    } catch (error) {
        console.error("Error loading blogs:", error);

        document.getElementById("blogTableBody").innerHTML = `
            <tr>
                <td colspan="6" class="text-center text-danger">
                    Failed to load blogs
                </td>
            </tr>
        `;
    }
}

function deleteBlog(id) {
    const container = document.createElement("div");

    container.innerHTML = `
        <div style="font-weight:bold;margin-bottom:10px;text-align:center;color:#fff;">
            Are you sure you want to delete this blog?
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
            borderRadius: "10px",
        },
    });

    toast.showToast();

    // YES CLICK
    container.querySelector(".toast-yes-btn").addEventListener("click", async function () {
        toast.hideToast();

        try {
            const response = await adminFetch(`${domain}/api/blog/deleteblog/${id}`, {
                method: "DELETE",
            });

            if (response.ok) {
                Toastify({ text: "✅ Blog deleted successfully!", duration: 2000, style: { background: "linear-gradient(to right,#00b09b,#96c93d)" } }).showToast();
                loadBlogs(); // Refresh the blog list
            } else {
                const result = await response.json().catch(() => ({ message: "Failed to delete blog" }));
                Toastify({ text: "❌ " + (result.message || "Failed to delete blog"), duration: 3000, style: { background: "linear-gradient(to right,#ff416c,#ff4b2b)" } }).showToast();
            }
        } catch (err) {
            Toastify({ text: "❌ Server error occurred.", duration: 3000, style: { background: "#ff416c" } }).showToast();
        }
    });

    // NO CLICK
    container.querySelector(".toast-no-btn").addEventListener("click", function () {
        toast.hideToast();
    });
}

// =============================================== delete api end =========================================================


// =============================================== add api start =========================================================

function previewBlogImage() {
    const fileInput = document.getElementById("blogFile");
    if (!fileInput) return;

    fileInput.addEventListener("change", function (e) {
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
}

function bindAddBlog() {
    const addBtn = document.getElementById("addBlogBtn");
    if (!addBtn) return;

    addBtn.addEventListener("click", async function () {
        const blogName = document.getElementById("blogName").value.trim();
        const description = document.getElementById("description").value.trim();
        const blogFile = document.getElementById("blogFile").files[0];
        
        const statusEl = document.querySelector('input[name="status"]:checked');
        const status = statusEl ? statusEl.value : "true";

        if (!blogName) {
            Toastify({ text: "❌ Blog Name is required", duration: 3000, style: { background: "#ff416c" } }).showToast();
            return;
        }
        
        if (!blogFile) {
            Toastify({ text: "❌ Blog Image is required", duration: 3000, style: { background: "#ff416c" } }).showToast();
            return;
        }

        const formData = new FormData();
        formData.append("BlogName", blogName);
        formData.append("Description", description);
        formData.append("Status", status);
        formData.append("BlogFile", blogFile);

        const loader = document.getElementById("loaderOverlay");
        if (loader) loader.style.display = "flex";

        try {
            const response = await adminFetch(`${domain}/api/blog/addblog`, {
                method: "POST",
                body: formData
            });
            const result = await response.json();
            if (loader) loader.style.display = "none";

            if (response.ok || result.status || result.success || result?.value?.status === true) {
                Toastify({ text: "✅ Blog added successfully!", duration: 3000, style: { background: "linear-gradient(to right, #00b09b, #96c93d)" } }).showToast();
                
                // Clear all fields after successful addition
                document.getElementById("blogName").value = "";
                document.getElementById("description").value = "";
                document.getElementById("blogFile").value = "";
                document.getElementById("previewImage").src = "";
                document.getElementById("previewImage").style.display = "none";
                document.getElementById("imageName").innerText = "No image selected";
                
                setTimeout(() => window.location.href = "blog-list.php", 1000); 
            } else {
                Toastify({ text: "❌ " + (result.message || result?.value?.message || "Failed to add blog"), duration: 3000, style: { background: "linear-gradient(to right, #ff416c, #ff4b2b)" } }).showToast();
            }
        } catch (err) {
            if (loader) loader.style.display = "none";
            Toastify({ text: "❌ Server error occurred.", duration: 3000, style: { background: "#ff416c" } }).showToast();
        }
    });
}



// =============================================== add api end =========================================================


// ================================================= edit api start =========================================================

async function checkIfEditBlogMode() {
    const urlParams = new URLSearchParams(window.location.search);
    const editId = urlParams.get('id');

    if (editId) {
        editingBlogId = editId;
        try {
            // Fetch all blogs to extract data for the selected one
            const response = await adminFetch(`${domain}/api/blog/getblog`);
            const result = await response.json();
            const blogs = result.data || result.value?.data || [];
            const blog = blogs.find(b => String(b.id) === String(editId));

            if (blog) {
                if (document.getElementById("blogName")) document.getElementById("blogName").value = blog.blogName || "";
                if (document.getElementById("description")) document.getElementById("description").value = blog.description || "";
                
                if (blog.status !== undefined) {
                    const isAct = String(blog.status) === "true" || blog.status === true || String(blog.status) === "1";
                    if (isAct && document.querySelector('input[name="status"][value="true"]')) {
                        document.querySelector('input[name="status"][value="true"]').checked = true;
                    } else if (!isAct && document.querySelector('input[name="status"][value="false"]')) {
                        document.querySelector('input[name="status"][value="false"]').checked = true;
                    }
                }

                if (blog.blogImg) {
                    existingBlogImageUrl = blog.blogImg;
                    const preview = document.getElementById("previewImage");
                    if (preview) {
                        preview.src = blog.blogImg;
                        preview.style.display = "block";
                    }
                }
            } else {
                Toastify({ text: "❌ Blog not found", duration: 3000, style: { background: "#ff416c" } }).showToast();
            }
        } catch (err) {
            console.error("Error fetching blog for edit:", err);
        }
    }
}

function bindEditBlog() {
    const editBtn = document.getElementById("editBlogBtn");
    if (!editBtn) return;

    editBtn.addEventListener("click", async function () {
        if (!editingBlogId) return;

        const blogName = document.getElementById("blogName").value.trim();
        const description = document.getElementById("description").value.trim();
        const blogFile = document.getElementById("blogFile").files[0];
        
        const statusEl = document.querySelector('input[name="status"]:checked');
        const status = statusEl ? statusEl.value : "true";

        if (!blogName) {
            Toastify({ text: "❌ Blog Name is required", duration: 3000, style: { background: "#ff416c" } }).showToast();
            return;
        }

        const formData = new FormData();
        formData.append("BlogName", blogName);
        formData.append("Description", description);
        formData.append("Status", status);
        
        if (blogFile) {
            formData.append("BlogFile", blogFile);
        } else {
            // Send existing image URL so backend doesn't overwrite it with null
            formData.append("BlogImg", existingBlogImageUrl);
            formData.append("BlogImageUrl", existingBlogImageUrl);
            // Pass empty file if not uploaded so backend parameters don't break
            formData.append("BlogFile", new File([""], "empty.jpg", { type: "image/jpeg" }));
        }

        const loader = document.getElementById("loaderOverlay");
        if (loader) loader.style.display = "flex";

        try {
            const response = await adminFetch(`${domain}/api/blog/updateblog/${editingBlogId}`, {
                method: "PUT",
                body: formData
            });
            const result = await response.json();
            if (loader) loader.style.display = "none";

            if (response.ok || result.status || result.success || result?.value?.status === true) {
                Toastify({ text: "✅ Blog updated successfully!", duration: 3000, style: { background: "linear-gradient(to right, #00b09b, #96c93d)" } }).showToast();
                setTimeout(() => window.location.href = "blog-list.php", 1000); 
            } else {
                Toastify({ text: "❌ " + (result.message || result?.value?.message || "Failed to update blog"), duration: 3000, style: { background: "linear-gradient(to right, #ff416c, #ff4b2b)" } }).showToast();
            }
        } catch (err) {
            if (loader) loader.style.display = "none";
            Toastify({ text: "❌ Server error occurred.", duration: 3000, style: { background: "#ff416c" } }).showToast();
        }
    });
}