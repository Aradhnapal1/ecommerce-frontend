async function getBanners() {
    try {
        const response = await adminFetch(`${domin}/api/banner/get`);

        if (!response.ok) {
            throw new Error(`HTTP Error: ${response.status}`);
        }

        const result = await response.json();

        console.log("Full API Response:", result);

        let banners = [];
        if (Array.isArray(result)) {
            banners = result;
        } else if (result?.value?.data && Array.isArray(result.value.data)) {
            banners = result.value.data;
        } else if (result?.data && Array.isArray(result.data)) {
            banners = result.data;
        }

        if (banners.length === 0) {
            console.warn("Banner array is empty or not found", banners);
        }

        const tbody = document.getElementById("bannerTableBody");

        if (!tbody) {
            console.error("bannerTableBody not found");
            return;
        }

        let rows = "";

        if (banners.length === 0) {
            rows = `<tr><td colspan="9" class="text-center">No banners found</td></tr>`;
        } else {
            banners.forEach((item, index) => {
                rows += `
                    <tr>
                        <td>${index + 1}</td>
                        <td>${item.bannerName || "-"}</td>
                        <td>
                            ${item.bannerDescription
                        ? item.bannerDescription.split(" ").slice(0, 2).join(" ") + "..."
                        : "-"
                    }
                        </td>
                        <td>
                            ${item.bannerImg
                        ? `<img src="${item.bannerImg}" alt="Banner" width="60" height="60" style="object-fit:cover;border-radius:5px;">`
                        : "-"
                    }
                        </td>
                        <td>${item.bannerType || "-"}</td>
                        <td>
                            ${item.bannerLink
                        ? `<a href="${item.bannerLink}" target="_blank">View Link</a>`
                        : "-"
                    }
                        </td>
                        <td>
                            ${item.status || item.isActive
                        ? '<span class="badge badge-success bg-success">Active</span>'
                        : '<span class="badge badge-danger bg-danger">Inactive</span>'
                    }
                        </td>
                        <td>
                            ${item.createdAt
                        ? new Date(item.createdAt).toLocaleDateString()
                        : "-"
                    }
                        </td>
                        <td>
                            <a href="edit-banner.php?id=${item.id}" class="mr-2">
                                <i class="fa fa-edit text-primary" title="Edit"></i>
                            </a>
                            <a href="javascript:void(0)" onclick="deleteBanner(${item.id})">
                                <i class="fa fa-trash text-danger" title="Delete"></i>
                            </a>
                        </td>
                    </tr>
                `;
            });
        }

        tbody.innerHTML = rows;

    } catch (error) {
        console.error("Banner Fetch Error:", error);
        if (typeof Toastify !== "undefined") {
            Toastify({
                text: "❌ Failed to load banners",
                duration: 3000,
                style: { background: "#ff416c" }
            }).showToast();
        } else {
            alert("Failed to load banners");
        }
    }
}

document.addEventListener("DOMContentLoaded", function () {
    if (document.getElementById("bannerTableBody")) {
        getBanners();
    }

    // Form Logic (for Add and Edit pages)
    if (document.getElementById("addBannerBtn")) {
        checkEditMode(); // Auto-fill data if we are in Edit Mode
        
        document.getElementById("addBannerBtn").addEventListener("click", saveBanner);
        
        // Setup Banner Image Live Preview
        const bannerFileInput = document.getElementById("bannerFile");
        if (bannerFileInput) {
            bannerFileInput.addEventListener("change", function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        document.getElementById("previewImage").src = event.target.result;
                        document.getElementById("previewImage").style.display = "block";
                        document.getElementById("imageName").innerText = file.name;
                    };
                    reader.readAsDataURL(file);
                }
            });
        }
    }
});

// Banner Delete Handler
window.deleteBanner = function(id) {
    const container = document.createElement("div");

    container.innerHTML = `
        <div style="font-weight:bold;margin-bottom:10px;text-align:center;color:#fff;">
            Are you sure you want to delete this banner?
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
    container.querySelector(".toast-yes-btn").addEventListener("click", async function () {
        toast.hideToast();

        try {
            const response = await adminFetch(`${domin}/api/banner/delete/${id}`, {
                method: "DELETE"
            });
            const data = await response.json();

            if (response.ok || data.status === true || data.success === true) {
                if (typeof Toastify !== "undefined") {
                    Toastify({
                        text: "✅ Banner Deleted Successfully",
                        duration: 2500,
                        style: { background: "linear-gradient(to right,#00b09b,#96c93d)" }
                    }).showToast();
                }
                getBanners(); // Refresh table
            } else {
                if (typeof Toastify !== "undefined") {
                    Toastify({
                        text: "❌ " + (data.message || "Failed to delete banner"),
                        duration: 3000,
                        style: { background: "linear-gradient(to right,#ff416c,#ff4b2b)" }
                    }).showToast();
                }
            }
        } catch (error) {
            console.error("Error deleting banner:", error);
        }
    });

    // NO CLICK
    container.querySelector(".toast-no-btn").addEventListener("click", function () {
        toast.hideToast();
    });
};

let editingBannerId = null;

// Prefill Data on Edit Page
async function checkEditMode() {
    const urlParams = new URLSearchParams(window.location.search);
    const id = urlParams.get("id");

    // Check if URL has an ID and we are on the edit page
    if (id && window.location.pathname.includes("edit-banner.php")) {
        editingBannerId = id;
        
        const btn = document.getElementById("addBannerBtn");
        if (btn) btn.innerText = "Update Banner";

        try {
            const response = await adminFetch(`${domin}/api/banner/get`);
            const result = await response.json();

            let banners = [];
            if (Array.isArray(result)) banners = result;
            else if (result?.value?.data) banners = result.value.data;
            else if (result?.data) banners = result.data;

            const banner = banners.find(b => String(b.id) === String(id));

            if (banner) {
                if (document.getElementById("bannerName")) document.getElementById("bannerName").value = banner.bannerName || "";
                if (document.getElementById("bannerDescription")) document.getElementById("bannerDescription").value = banner.bannerDescription || "";
                if (document.getElementById("bannerLink")) document.getElementById("bannerLink").value = banner.bannerLink || "";
                if (document.getElementById("bannerType")) document.getElementById("bannerType").value = banner.bannerType || "Top";

                const isAct = banner.status === true || banner.status === "true" || banner.isActive === true;
                const statusActive = document.querySelector("input[name='status'][value='true']");
                const statusInactive = document.querySelector("input[name='status'][value='false']");
                
                if (isAct && statusActive) statusActive.checked = true;
                if (!isAct && statusInactive) statusInactive.checked = true;

                if (banner.bannerImg && document.getElementById("previewImage")) {
                    document.getElementById("previewImage").src = banner.bannerImg;
                    document.getElementById("previewImage").style.display = "block";
                    if (document.getElementById("imageName")) {
                        document.getElementById("imageName").innerHTML = `Current Image: <a href="${banner.bannerImg}" target="_blank">View</a>`;
                    }
                }
            }
        } catch (error) {
            console.error("Error fetching banner details for edit:", error);
        }
    }
}

// Handle Form Submit for Add and Edit
async function saveBanner() {
    const bannerName = document.getElementById("bannerName")?.value.trim();
    const bannerDescription = document.getElementById("bannerDescription")?.value.trim();
    const bannerLink = document.getElementById("bannerLink")?.value.trim();
    const bannerType = document.getElementById("bannerType")?.value;
    const bannerFile = document.getElementById("bannerFile")?.files[0];
    
    const statusEl = document.querySelector("input[name='status']:checked");
    const status = statusEl ? statusEl.value : "true";

    if (!bannerName) {
        return Toastify({ text: "❌ Banner Name is required", duration: 3000, style: { background: "#ff416c" } }).showToast();
    }

    // Image is required only if it's a new banner
    if (!editingBannerId && !bannerFile) {
        return Toastify({ text: "❌ Banner Image is required", duration: 3000, style: { background: "#ff416c" } }).showToast();
    }

    const formData = new FormData();
    formData.append("BannerName", bannerName);
    formData.append("BannerDescription", bannerDescription);
    formData.append("BannerLink", bannerLink);
    formData.append("BannerType", bannerType);
    formData.append("Status", status);

    if (bannerFile) {
        formData.append("BannerFile", bannerFile);
    }

    const url = editingBannerId
        ? `${domin}/api/banner/update/${editingBannerId}`
        : `${domin}/api/banner/addbanner`;
    const method = editingBannerId ? "PUT" : "POST";

    const loader = document.getElementById("loaderOverlay");
    const btn = document.getElementById("addBannerBtn");

    if (loader) {
        const loaderTitle = loader.querySelector("h4");
        const loaderText = loader.querySelector("p");
        if (loaderTitle) loaderTitle.innerText = editingBannerId ? "Updating Banner" : "Creating Banner";
        if (loaderText) loaderText.innerText = editingBannerId ? "Saving changes..." : "Uploading image and saving banner data...";
        loader.style.display = "flex";
    }

    if (btn) btn.disabled = true;

    try {
        const response = await adminFetch(url, {
            method: method,
            body: formData
        });

        const data = await response.json();

        if (response.ok || data.status === true || data.success === true) {
            Toastify({
                text: editingBannerId ? "✅ Banner Updated Successfully" : "✅ Banner Added Successfully",
                duration: 2500,
                style: { background: "linear-gradient(to right,#00b09b,#96c93d)" }
            }).showToast();

            // Redirect to banner list upon successful save
            setTimeout(() => {
                window.location.href = "banner-list.php";
            }, 1500);
        } else {
            Toastify({
                text: "❌ " + (data.message || "Operation failed"),
                duration: 3000,
                style: { background: "linear-gradient(to right,#ff416c,#ff4b2b)" }
            }).showToast();
        }
    } catch (error) {
        console.error("Error saving banner:", error);
        Toastify({
            text: "❌ Something went wrong while saving",
            duration: 3000,
            style: { background: "#ff416c" }
        }).showToast();
    } finally {
        if (loader) loader.style.display = "none";
        if (btn) btn.disabled = false;
    }
}
