const domain = "https://ecommerce-backend.workarya.com";
let existingVariantImageUrl = "";
let existingGalleryUrls = [];

document.addEventListener("DOMContentLoaded", async function () {
    if (document.getElementById("getvariant")) {
        loadVariants();
    }
    if (document.getElementById("addVariantBtn")) {
        loadVariantDropdowns();
        bindAddVariant();
    }
    if (document.getElementById("editVariantBtn")) {
        const urlParams = new URLSearchParams(window.location.search);
        const editId = urlParams.get("id");
        if (editId) {
            await loadVariantDropdowns();
            prefillVariantData(editId);
            bindEditVariant(editId);
        } else {
            Toastify({ text: "❌ Variant ID not found in URL!", duration: 3000, style: { background: "#ff416c" } }).showToast();
        }
    }
});

async function loadVariants() {
    try {
        const res = await adminFetch(`${domain}/api/variant/getallvariants`);
        const result = await res.json();

        const data = result.data || [];

        let html = "";

        data.forEach((item) => {

            html += `
                <tr>
                    <td>${item.id}</td>

                    <td>
                        <img src="${item.variantImageUrl || ''}" 
                             style="width:60px;height:60px;object-fit:contain;border-radius:6px;" />
                    </td>

                    <td>${item.variantName || '-'}</td>
                    <td>${item.productId}</td>

                    <td>
                        ${
                            item.sizeNames && item.sizeNames.length > 0
                            ? item.sizeNames.join(", ")
                            : '-'
                        }
                    </td>

                    <td>${item.colorName || item.color || '-'}</td>

                    <td>${item.mrp}</td>
                    <td>${item.discountPercent}</td>
                    <td>${item.basePrice}</td>
                    <td>${item.gst}</td>
                    <td>${item.salePrice}</td>
                    <td>${item.stock}</td>
                    <td>${item.sku || '-'}</td>

                    <td>
                        ${item.isActive
                            ? `<span class="badge bg-success">Active</span>`
                            : `<span class="badge bg-danger">Inactive</span>`
                        }
                    </td>

                    <td>${new Date(item.createdAt).toLocaleString()}</td>

                    <td>
                      

                          <a href="edit-variant.php?id=${item.id}">
                            <i class="fa fa-edit" title="Edit"></i>
                        </a>
                        <a href="javascript:void(0)" onclick="deleteVariant(${item.id})">
                            <i class="fa fa-trash text-danger"></i>
                        </a>
                    </td>
                </tr>
            `;
        });

        document.getElementById("getvariant").innerHTML = html;

    } catch (err) {
        console.log("Error loading variants:", err);
    }
}


// =========================================== get api endpoints ===========================================


// ============================================== delete api start ==============================================

function deleteVariant(id) {
    const container = document.createElement("div");

    container.innerHTML = `
        <div style="font-weight:bold;margin-bottom:10px;text-align:center;color:#fff;">
            Are you sure you want to delete this variant?
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
            const response = await adminFetch(`${domain}/api/variant/deletevariant/${id}`, {
                method: "DELETE",
            });

            if (response.ok) {
                Toastify({ text: "✅ Variant deleted successfully!", duration: 2000, style: { background: "linear-gradient(to right,#00b09b,#96c93d)" } }).showToast();
                loadVariants(); // Refresh the variant list
            } else {
                const result = await response.json().catch(() => ({ message: "Failed to delete variant" }));
                Toastify({ text: "❌ " + (result.message || "Failed to delete variant"), duration: 3000, style: { background: "linear-gradient(to right,#ff416c,#ff4b2b)" } }).showToast();
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


// ============================================== delete api end ==============================================

// ============================================== add variant api start ==============================================

async function loadVariantDropdowns() {
    try {
        // 1. Load Products
        const prodRes = await adminFetch(`${domain}/api/product/getallproducts`);
        const prodResult = await prodRes.json();
        const products = Array.isArray(prodResult) ? prodResult : (prodResult?.value?.data || prodResult?.data || []);
        populateVariantDropdown(products, document.getElementById("productId"), "id", "productName", "--Select Product--");

        // 2. Load Colors
        const colorRes = await adminFetch(`${domain}/api/colors/get-all`);
        const colorResult = await colorRes.json();
        const colors = Array.isArray(colorResult) ? colorResult : (colorResult?.value?.data || colorResult?.data || []);
        populateVariantDropdown(colors, document.getElementById("colorId"), "id", "colorName", "--Select Color--");

        // 3. Load Sizes
        const sizeRes = await adminFetch(`${domain}/api/size/getallsize`);
        const sizeResult = await sizeRes.json();
        const sizes = Array.isArray(sizeResult) ? sizeResult : (sizeResult?.value?.data || sizeResult?.data || []);
        populateVariantDropdown(sizes, document.getElementById("sizeId"), "id", "sizeName", "");
    } catch (err) {
        console.error("Error loading dropdowns:", err);
    }
}

function populateVariantDropdown(data, selectElement, valueKey, textKey, defaultOption) {
    if (!selectElement) return;
    let html = defaultOption !== "" ? `<option value="">${defaultOption}</option>` : "";
    data.forEach((item) => {
        html += `<option value="${item[valueKey]}">${item[textKey]}</option>`;
    });
    selectElement.innerHTML = html;
}

function bindAddVariant() {
    const addBtn = document.getElementById("addVariantBtn");
    if (!addBtn) return;

    addBtn.addEventListener("click", async function () {
        const variantName = document.getElementById("variantName")?.value.trim() || "";
        const productId = document.getElementById("productId").value;
        const sku = document.getElementById("sku").value.trim();
        const colorId = document.getElementById("colorId").value;
        
        const sizeOptions = document.getElementById("sizeId").selectedOptions;
        const sizes = Array.from(sizeOptions).map((opt) => opt.value);

        const mrp = document.getElementById("mrp").value.trim();
        const discountPercent = document.getElementById("discount").value.trim();
        const gst = document.getElementById("gst").value.trim();
        const stock = document.getElementById("stock").value.trim();
        
        const statusEl = document.querySelector('input[name="status"]:checked');
        const isActive = statusEl ? statusEl.value : "true";

        const variantImage = document.getElementById("productImageInput").files[0];
        const galleryFiles = document.getElementById("galleryInput").files;

        if (!productId || !mrp) {
            Toastify({ text: "❌ Product and MRP are required.", duration: 3000, style: { background: "#ff416c" } }).showToast();
            return;
        }

        const formData = new FormData();
        if (variantName) formData.append("VariantName", variantName);
        formData.append("ProductId", productId);
        formData.append("SKU", sku);
        formData.append("Color", colorId);
        formData.append("mrp", mrp);
        formData.append("discountPercent", discountPercent);
        formData.append("GST", gst);
        formData.append("Stock", stock);
        formData.append("IsActive", isActive);

        sizes.forEach((size) => formData.append("Sizes", size));

        if (variantImage) formData.append("VariantImage", variantImage);
        
        if (galleryFiles && galleryFiles.length > 0) {
            for (let i = 0; i < galleryFiles.length; i++) {
                formData.append("GalleryFiles", galleryFiles[i]);
            }
        }

        try {
            addBtn.disabled = true;
            addBtn.innerText = "Saving...";

            const response = await adminFetch(`${domain}/api/variant/addvariant`, { method: "POST", body: formData });
            const result = await response.json();

            if (response.ok || result.status || result.success || result?.value?.status === true) {
                Toastify({ text: "✅ Variant added successfully!", duration: 3000, style: { background: "linear-gradient(to right, #00b09b, #96c93d)" } }).showToast();
                setTimeout(() => window.location.href = "variant.php", 1500);
            } else {
                Toastify({ text: "❌ " + (result.message || result?.value?.message || "Failed to add variant"), duration: 3000, style: { background: "linear-gradient(to right, #ff416c, #ff4b2b)" } }).showToast();
            }
        } catch (err) {
            Toastify({ text: "❌ Server error occurred.", duration: 3000, style: { background: "#ff416c" } }).showToast();
        } finally {
            addBtn.disabled = false;
            addBtn.innerText = "Save Variant";
        }
    });
}


// ============================================== add variant api end ==============================================



// ============================================== edit variant api start ===============================================

async function prefillVariantData(id) {
    try {
        // Fetching all variants to find the one we need to edit
        const res = await adminFetch(`${domain}/api/variant/getallvariants`);
        const result = await res.json();
        const variants = Array.isArray(result) ? result : (result?.data || result?.value?.data || []);
        
        const variant = variants.find(v => String(v.id) === String(id));

        if (!variant) {
            Toastify({ text: "❌ Variant not found", duration: 3000, style: { background: "#ff416c" } }).showToast();
            return;
        }

        // Pre-fill general inputs
        if (document.getElementById("variantName")) document.getElementById("variantName").value = variant.variantName || "";
        if (document.getElementById("productId")) document.getElementById("productId").value = variant.productId || "";
        if (document.getElementById("sku")) document.getElementById("sku").value = variant.sku || "";
        if (document.getElementById("colorId")) document.getElementById("colorId").value = variant.colorId || variant.color || "";
        if (document.getElementById("mrp")) document.getElementById("mrp").value = variant.mrp || "";
        if (document.getElementById("discount")) document.getElementById("discount").value = variant.discountPercent || variant.discount || "";
        if (document.getElementById("gst")) document.getElementById("gst").value = variant.gst || "";
        if (document.getElementById("stock")) document.getElementById("stock").value = variant.stock || "";

        // Pre-fill multiple sizes
        const sizeSelect = document.getElementById("sizeId");
        if (sizeSelect && variant.sizes) {
            let variantSizeIds = [];
            if (Array.isArray(variant.sizes)) {
                variantSizeIds = variant.sizes.map(String);
            } else if (typeof variant.sizes === 'string') {
                variantSizeIds = variant.sizes.split(",").map(s => s.trim());
            } else if (Array.isArray(variant.sizeIds)) {
                variantSizeIds = variant.sizeIds.map(String);
            }
            
            Array.from(sizeSelect.options).forEach((opt) => {
                if (variantSizeIds.includes(String(opt.value))) {
                    opt.selected = true;
                }
            });
        }

        // Pre-fill Status
        if (variant.isActive !== undefined) {
            if (String(variant.isActive) === "true" || variant.isActive === true || String(variant.isActive) === "1") {
                if (document.getElementById("statusActive")) document.getElementById("statusActive").checked = true;
            } else {
                if (document.getElementById("statusInactive")) document.getElementById("statusInactive").checked = true;
            }
        }

        // Pre-fill Image Previews
        if (variant.variantImageUrl || variant.variantImage) {
            existingVariantImageUrl = variant.variantImageUrl || variant.variantImage;
            const mainPreview = document.getElementById("productImagePreview");
            if (mainPreview) {
                mainPreview.src = existingVariantImageUrl;
                mainPreview.style.display = "block";
            }
        }

        const galleryUrls = variant.galleryImages || variant.galleryImageUrls || [];
        if (galleryUrls && galleryUrls.length > 0) {
            existingGalleryUrls = galleryUrls;
            const galleryPreview = document.getElementById("galleryPreview");
            if (galleryPreview) {
                galleryPreview.innerHTML = "";
                galleryUrls.forEach((url) => {
                    const img = document.createElement("img");
                    img.src = url;
                    img.style.width = "80px";
                    img.style.height = "80px";
                    img.style.objectFit = "cover";
                    img.style.borderRadius = "8px";
                    img.style.border = "1px solid #ddd";
                    galleryPreview.appendChild(img);
                });
            }
        }

    } catch (err) {
        console.error("Error prefilling variant:", err);
    }
}

function bindEditVariant(id) {
    const editBtn = document.getElementById("editVariantBtn");
    if (!editBtn) return;

    editBtn.addEventListener("click", async function () {
        const variantName = document.getElementById("variantName")?.value.trim() || "";
        const productId = document.getElementById("productId").value;
        const sku = document.getElementById("sku").value.trim();
        const colorId = document.getElementById("colorId").value;
        
        const sizeOptions = document.getElementById("sizeId").selectedOptions;
        const sizes = Array.from(sizeOptions).map((opt) => opt.value);

        const mrp = document.getElementById("mrp").value.trim();
        const discountPercent = document.getElementById("discount").value.trim();
        const gst = document.getElementById("gst").value.trim();
        const stock = document.getElementById("stock").value.trim();
        
        const statusEl = document.querySelector('input[name="status"]:checked');
        const isActive = statusEl ? statusEl.value : "true";

        const variantImage = document.getElementById("productImageInput").files[0];
        const galleryFiles = document.getElementById("galleryInput").files;

        if (!productId || !mrp) {
            Toastify({ text: "❌ Product and MRP are required.", duration: 3000, style: { background: "#ff416c" } }).showToast();
            return;
        }

        const formData = new FormData();
        if (variantName) formData.append("VariantName", variantName);
        formData.append("ProductId", productId);
        formData.append("SKU", sku);
        formData.append("Color", colorId);
        formData.append("mrp", mrp);
        formData.append("discountPercent", discountPercent);
        formData.append("GST", gst);
        formData.append("Stock", stock);
        formData.append("IsActive", isActive);

        if (sizes && sizes.length > 0) {
            sizes.forEach((size) => formData.append("Sizes", size));
        } else {
            formData.append("Sizes", ""); 
        }

        if (variantImage) {
            formData.append("VariantImage", variantImage);
        } else {
            formData.append("VariantImageUrl", existingVariantImageUrl); 
        }
        
        if (galleryFiles && galleryFiles.length > 0) {
            for (let i = 0; i < galleryFiles.length; i++) {
                formData.append("GalleryFiles", galleryFiles[i]);
            }
        }

        try {
            editBtn.disabled = true;
            editBtn.innerText = "Updating...";

            const response = await adminFetch(`${domain}/api/variant/updatevariant/${id}`, { method: "PUT", body: formData });
            const result = await response.json();

            if (response.ok || result.status || result.success || result?.value?.status === true) {
                Toastify({ text: "✅ Variant updated successfully!", duration: 3000, style: { background: "linear-gradient(to right, #00b09b, #96c93d)" } }).showToast();
                setTimeout(() => window.location.href = "variant.php", 1500);
            } else {
                Toastify({ text: "❌ " + (result.message || result?.value?.message || "Failed to update variant"), duration: 3000, style: { background: "linear-gradient(to right, #ff416c, #ff4b2b)" } }).showToast();
            }
        } catch (err) {
            Toastify({ text: "❌ Server error occurred.", duration: 3000, style: { background: "#ff416c" } }).showToast();
        } finally {
            editBtn.disabled = false;
            editBtn.innerText = "Save Variant";
        }
    });
}
