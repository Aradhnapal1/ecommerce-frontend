/* Load on page ready */
let allCategoriesList = [];

document.addEventListener("DOMContentLoaded", async function () {
  // Sirf Product List page par chalega
  if (document.getElementById("getproduct")) {
    loadProducts();
  }
  // Sirf Add Product page par chalega
  if (document.getElementById("submitBtn")) {
    loadDropdowns();
    bindAddProduct();
  }

  // Sirf Edit Product page par chalega
  if (document.getElementById("editproduct")) {
    const urlParams = new URLSearchParams(window.location.search);
    const editId = urlParams.get("id");
    
    if (editId) {
      await loadDropdowns();
      prefillProductData(editId);
      bindEditProduct(editId);
    } else {
      Toastify({ text: "❌ Product ID not found in URL!", duration: 3000, style: { background: "#ff416c" } }).showToast();
    }
  }
});

async function loadProducts() {
  try {
    const res = await adminFetch(`${domin}/api/product/getallproducts`);
    const data = await res.json();

    renderTable(data);
  } catch (error) {
    console.error("Error loading products:", error);
  }
}

/* Render Table */
function renderTable(products) {
  // ✅ CHANGED ID HERE → getproduct
  const tbody = document.getElementById("getproduct");
  tbody.innerHTML = "";

  products.forEach((item) => {
    const row = `
            <tr>
                <td>${item.id}</td>

                <td>
                    <img src="${item.productImageUrl}" 
                         style="width:50px;height:50px;object-fit:cover;border-radius:5px;" />
                </td>

                <td>${item.productName || "-"}</td>

                <td>${item.categoryName || "-"}</td>

                <td>${item.sizeNames && item.sizeNames.length ? item.sizeNames.join(", ") : "-"}</td>

                <td>${item.colorName || "-"}</td>

                <td>${item.brandName || "-"}</td>

                <td>${item.mrp}</td>

                <td>${item.discountPrice}%</td>

                <td>${item.basePrice}</td>

                <td>${item.gst}%</td>

                <td>${item.salePrice}</td>

                <td>${item.stock}</td>

                <td>${item.sku}</td>

                <td>${item.type || "-"}</td>

                <td>
                    ${
                      item.isActive
                        ? `<span class="badge bg-success">Active</span>`
                        : `<span class="badge bg-danger">Inactive</span>`
                    }
                </td>

                <td>${new Date(item.createdAt).toLocaleString()}</td>

                <td>
                   <a href="edit-product.php?id=${item.id}">
                            <i class="fa fa-edit" title="Edit"></i>
                        </a>

                    <a href="javascript:void(0)" onclick="deleteProduct(${item.id})" style="margin-left:10px;color:red;">
                        <i class="fa fa-trash" title="Delete"></i>
                    </a>
                </td>
            </tr>
        `;

    tbody.innerHTML += row;
  });
}



// ====================================================get api end=================================================




// ===================================================== delete api start ===================================================

/* Actions */

function deleteProduct(id) {
  const container = document.createElement("div");

  container.innerHTML = `
        <div style="font-weight:bold;margin-bottom:10px;text-align:center;color:#fff;">
            Are you sure you want to delete this product?
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
  container
    .querySelector(".toast-yes-btn")
    .addEventListener("click", async function () {
      toast.hideToast();

      try {
        const response = await adminFetch(
          `${domin}/api/product/deleteproduct/${id}`,
          {
            method: "DELETE",
          },
        );

        if (response.ok) {
          Toastify({
            text: "✅ Product deleted successfully!",
            duration: 2000,
            style: { background: "linear-gradient(to right,#00b09b,#96c93d)" },
          }).showToast();
          loadProducts(); // Refresh the product list
        } else {
          const result = await response
            .json()
            .catch(() => ({ message: "Failed to delete product" }));
          Toastify({
            text: "❌ " + (result.message || "Failed to delete product"),
            duration: 3000,
            style: { background: "linear-gradient(to right,#ff416c,#ff4b2b)" },
          }).showToast();
        }
      } catch (err) {
        Toastify({
          text: "❌ Server error occurred.",
          duration: 3000,
          style: { background: "#ff416c" },
        }).showToast();
      }
    });

  // NO CLICK
  container
    .querySelector(".toast-no-btn")
    .addEventListener("click", function () {
      toast.hideToast();
    });
}


// ===================================================== delete api end ===================================================












// ================================================================= add product js start =========================================================



/* =======================================
   ADD PRODUCT LOGIC
======================================= */

async function loadDropdowns() {
  try {
    // 1. Load Categories
    const catRes = await adminFetch(`${domin}/api/getcategories`);
    const catResult = await catRes.json();
    const nestedCategories = catResult?.value?.data || catResult?.data || [];
    allCategoriesList = flattenCategories(nestedCategories);
    const catContainer = document.getElementById("dynamicCategoryContainer");
    if (catContainer) {
      catContainer.innerHTML = "";
      renderCategoryDropdown(null, 0);
    }

    // 2. Load Brands
    const brandRes = await adminFetch(`${domin}/api/brand/getallbrands`);
    const brandResult = await brandRes.json();
    const brands = Array.isArray(brandResult)
      ? brandResult
      : brandResult?.value?.data || brandResult?.data || [];
    populateDropdown(
      brands,
      document.getElementById("brandId"),
      "id",
      "brandName",
      "--Select Brand--",
    );

    // 3. Load Colors
    const colorRes = await adminFetch(`${domin}/api/colors/get-all`);
    const colorResult = await colorRes.json();
    const colors = Array.isArray(colorResult)
      ? colorResult
      : colorResult?.value?.data || colorResult?.data || [];
    populateDropdown(
      colors,
      document.getElementById("colorId"),
      "id",
      "colorName",
      "--Select Color--",
    );

    // 4. Load Sizes
    const sizeRes = await adminFetch(`${domin}/api/size/getallsize`);
    const sizeResult = await sizeRes.json();
    const sizes = Array.isArray(sizeResult)
      ? sizeResult
      : sizeResult?.value?.data || sizeResult?.data || [];
    populateDropdown(
      sizes,
      document.getElementById("sizeId"),
      "id",
      "sizeName",
      "",
    );
  } catch (error) {
    console.error("Error loading dropdowns:", error);
  }
}

function populateDropdown(
  data,
  selectElement,
  valueKey,
  textKey,
  defaultOption,
) {
  if (!selectElement) return;
  let html =
    defaultOption !== "" ? `<option value="">${defaultOption}</option>` : "";
  data.forEach((item) => {
    // API structure checking: isActive === true check can be added if needed
    html += `<option value="${item[valueKey]}">${item[textKey]}</option>`;
  });
  selectElement.innerHTML = html;
}

function flattenCategories(categories) {
  let flatList = [];
  categories.forEach((cat) => {
    flatList.push(cat);
    if (cat.children && cat.children.length > 0) {
      flatList = flatList.concat(flattenCategories(cat.children));
    }
  });
  return flatList;
}

function renderCategoryDropdown(parentId, level) {
  const isRoot = parentId === null || parentId === "" || parentId === 0;

  const children = allCategoriesList.filter((cat) => {
    if (isRoot)
      return cat.parentId === null || cat.parentId === 0 || cat.parentId === "";
    return cat.parentId == parentId;
  });

  if (children.length === 0) return;

  const select = document.createElement("select");
  select.className = "form-control custom-select mt-2 dynamic-category-select";
  select.dataset.level = level;
  select.innerHTML = `<option value="">-- Select Level ${level + 1} Category --</option>`;

  children.forEach((cat) => {
    const option = document.createElement("option");
    option.value = cat.id;
    option.textContent = cat.categoryName;
    select.appendChild(option);
  });

  select.addEventListener("change", function () {
    const currentLevel = parseInt(this.dataset.level);
    const container = document.getElementById("dynamicCategoryContainer");
    container.querySelectorAll(".dynamic-category-select").forEach((sel) => {
      if (parseInt(sel.dataset.level) > currentLevel) sel.remove();
    });
    if (this.value) renderCategoryDropdown(this.value, currentLevel + 1);
  });

  document.getElementById("dynamicCategoryContainer").appendChild(select);
}

function bindAddProduct() {
  const submitBtn = document.getElementById("submitBtn");
  if (!submitBtn) return;

  submitBtn.addEventListener("click", async function () {
    const productName = document.getElementById("productName").value.trim();
    const sku = document.getElementById("sku").value.trim();
    const brandId = document.getElementById("brandId").value;
    const colorId = document.getElementById("colorId").value;

    // Get deeply selected category ID
    let categoryId = "";
    const catSelects = Array.from(
      document.querySelectorAll(".dynamic-category-select"),
    );
    for (let i = catSelects.length - 1; i >= 0; i--) {
      if (catSelects[i].value !== "") {
        categoryId = catSelects[i].value;
        break;
      }
    }

    const type = document.getElementById("type").value;
    const mrp = document.getElementById("mrp").value.trim();
    const discount = document.getElementById("discount").value.trim();
    const gst = document.getElementById("gst").value.trim();
    const stock = document.getElementById("stock").value.trim();

    // Get multiple selected sizes as an array
    const sizeOptions = document.getElementById("sizeId").selectedOptions;
    const sizes = Array.from(sizeOptions).map((opt) => opt.value);

    const statusEl = document.querySelector('input[name="status"]:checked');
    const isActive = statusEl ? statusEl.value : "true";

    // Securely getting CKEditor Data
    const shortDescription = CKEDITOR.instances.shortDescription
      ? CKEDITOR.instances.shortDescription.getData()
      : "";
    const description = CKEDITOR.instances.description
      ? CKEDITOR.instances.description.getData()
      : "";

    const productImage = document.getElementById("productImageInput").files[0];
    const galleryFiles = document.getElementById("galleryInput").files;

    // Validation checks
    if (!productName || !categoryId || !mrp) {
      Toastify({
        text: "❌ Product Name, Category, and MRP are required.",
        duration: 3000,
        style: { background: "#ff416c" },
      }).showToast();
      return;
    }

    const formData = new FormData();
    formData.append("ProductName", productName);
    formData.append("ShortDescription", shortDescription);
    formData.append("Description", description);
    formData.append("SKU", sku);
    formData.append("BrandId", brandId);
    formData.append("CategoryId", categoryId);
    formData.append("MRP", mrp);
    formData.append("DiscountPrice", discount);
    formData.append("GST", gst);
    formData.append("Stock", stock);

    // Append each size individually to the FormData
    sizes.forEach((size) => {
      formData.append("Sizes", size); // API will receive this as an array
    });

    formData.append("Color", colorId);
    formData.append("IsActive", isActive);
    formData.append("Type", type);

    // Main Image
    if (productImage) formData.append("ProductImage", productImage);

    // Gallery Images (Multiple)
    for (let i = 0; i < galleryFiles.length; i++) {
      formData.append("GalleryFiles", galleryFiles[i]);
    }

    try {
      submitBtn.disabled = true;
      submitBtn.innerText = "Saving...";

      const response = await adminFetch(`${domin}/api/product/addproduct`, {
        method: "POST",
        body: formData,
      });
      const result = await response.json();

      if (
        result.status ||
        result.success ||
        result?.value?.status === true ||
        result?.value?.value?.status === true
      ) {
        Toastify({
          text: "✅ Product added successfully!",
          duration: 3000,
          style: { background: "#00b09b" },
        }).showToast();
        setTimeout(
          () => (window.location.href = "product-listdigital.php"),
          1500,
        );
      } else {
        Toastify({
          text:
            "❌ " +
            (result.message ||
              result?.value?.message ||
              result?.value?.value?.message ||
              "Failed to add product"),
          duration: 3000,
          style: { background: "#ff416c" },
        }).showToast();
      }
    } catch (err) {
      console.error("Error adding product:", err);
      Toastify({
        text: "❌ Server error occurred.",
        duration: 3000,
        style: { background: "#ff416c" },
      }).showToast();
    } finally {
      submitBtn.disabled = false;
      submitBtn.innerText = "Save Product";
    }
  });
}



// ================================================================= add product js end =========================================================


// ==================================================== edit product js start ===================================================

let existingProductImageUrl = "";
let existingGalleryUrls = [];

function getCategoryPath(targetId) {
  const path = [];
  let current = allCategoriesList.find((c) => String(c.id) === String(targetId));

  while (current) {
    path.unshift(current.id);
    if (!current.parentId || current.parentId === null || current.parentId === "") break;
    current = allCategoriesList.find((c) => String(c.id) === String(current.parentId));
  }
  return path;
}

function prefillCategoryHierarchy(categoryId) {
  const path = getCategoryPath(categoryId);
  
  for (let i = 0; i < path.length; i++) {
    const select = document.querySelector(`.dynamic-category-select[data-level="${i}"]`);
    if (select) {
      select.value = path[i];
      const event = new Event("change");
      select.dispatchEvent(event);
    }
  }
}

async function prefillProductData(id) {
  try {
    const res = await adminFetch(`${domin}/api/product/getallproducts`);
    const result = await res.json();
    
    let productsList = [];
    if (Array.isArray(result)) {
        productsList = result;
    } else if (Array.isArray(result?.value?.data)) {
        productsList = result.value.data;
    } else if (Array.isArray(result?.data)) {
        productsList = result.data;
    } else if (Array.isArray(result?.value)) {
        productsList = result.value;
    }

    const product = productsList.find((p) => String(p.id) === String(id));

    if (!product) {
      Toastify({
        text: "❌ Product not found",
        duration: 3000,
        style: { background: "#ff416c" },
      }).showToast();
      return;
    }

    // Prefill text inputs
    if (document.getElementById("productName")) document.getElementById("productName").value = product.productName || "";
    if (document.getElementById("sku")) document.getElementById("sku").value = product.sku || "";
    if (document.getElementById("mrp")) document.getElementById("mrp").value = product.mrp || "";
    if (document.getElementById("discount")) document.getElementById("discount").value = product.discountPrice || product.discount || "";
    if (document.getElementById("gst")) document.getElementById("gst").value = product.gst || "";
    if (document.getElementById("stock")) document.getElementById("stock").value = product.stock || "";
    
    // Select dropdowns
    if (document.getElementById("type")) document.getElementById("type").value = (product.type || "").toLowerCase();
    if (document.getElementById("brandId")) document.getElementById("brandId").value = product.brandId || product.brand || "";
    if (document.getElementById("colorId")) document.getElementById("colorId").value = product.colorId || product.color || "";

    // Sizes
    const sizeSelect = document.getElementById("sizeId");
    if (sizeSelect) {
      let productSizeIds = [];
      if (Array.isArray(product.sizes)) {
          productSizeIds = product.sizes.map(String);
      } else if (typeof product.sizes === 'string') {
          productSizeIds = product.sizes.split(",").map(s => s.trim());
      } else if (Array.isArray(product.sizeIds)) {
          productSizeIds = product.sizeIds.map(String);
      }
      
      Array.from(sizeSelect.options).forEach((opt) => {
        if (productSizeIds.includes(String(opt.value))) {
          opt.selected = true;
        }
      });
    }

    // Status
    if (product.isActive !== undefined) {
        if (String(product.isActive) === "true" || product.isActive === true) {
            if (document.getElementById("statusActive")) document.getElementById("statusActive").checked = true;
        } else {
            if (document.getElementById("statusInactive")) document.getElementById("statusInactive").checked = true;
        }
    }

    // Category Hierarchy
    if (product.categoryId) {
      prefillCategoryHierarchy(product.categoryId);
    }

    // Image Previews
    if (product.productImageUrl || product.productImage) {
      const mainPreview = document.getElementById("productImagePreview");
      existingProductImageUrl = product.productImageUrl || product.productImage;
      if (mainPreview) {
          mainPreview.src = product.productImageUrl || product.productImage;
          mainPreview.style.display = "block";
      }
    }
    
    const galleryUrls = product.galleryImages || product.galleryImageUrls || [];
    if (galleryUrls.length > 0) {
      const galleryPreview = document.getElementById("galleryPreview");
      if (galleryPreview) {
          existingGalleryUrls = galleryUrls;
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

    // CKEditor
    setTimeout(() => {
      if (typeof CKEDITOR !== "undefined") {
        if (CKEDITOR.instances.shortDescription) {
          CKEDITOR.instances.shortDescription.setData(product.shortDescription || "");
        }
        if (CKEDITOR.instances.description) {
          CKEDITOR.instances.description.setData(product.description || "");
        }
      }
    }, 800);

  } catch (err) {
    console.error("Error prefilling product:", err);
  }
}

function bindEditProduct(id) {
  const editBtn = document.getElementById("editproduct");
  if (!editBtn) return;

  editBtn.addEventListener("click", async function () {
    const productName = document.getElementById("productName").value.trim();
    const sku = document.getElementById("sku").value.trim();
    const brandId = document.getElementById("brandId").value;
    const colorId = document.getElementById("colorId").value;

    let categoryId = "";
    const catSelects = Array.from(document.querySelectorAll(".dynamic-category-select"));
    for (let i = catSelects.length - 1; i >= 0; i--) {
      if (catSelects[i].value !== "") {
        categoryId = catSelects[i].value;
        break;
      }
    }

    const type = document.getElementById("type").value;
    const mrp = document.getElementById("mrp").value.trim();
    const discount = document.getElementById("discount").value.trim();
    const gst = document.getElementById("gst").value.trim();
    const stock = document.getElementById("stock").value.trim();

    const sizeOptions = document.getElementById("sizeId").selectedOptions;
    const sizes = Array.from(sizeOptions).map((opt) => opt.value);

    const statusEl = document.querySelector('input[name="status"]:checked');
    const isActive = statusEl ? statusEl.value : "true";

    const shortDescription = CKEDITOR.instances.shortDescription
      ? CKEDITOR.instances.shortDescription.getData()
      : "";
    const description = CKEDITOR.instances.description
      ? CKEDITOR.instances.description.getData()
      : "";

    const productImage = document.getElementById("productImageInput").files[0];
    const galleryFiles = document.getElementById("galleryInput").files;

    if (!productName || !categoryId || !mrp) {
      Toastify({
        text: "❌ Product Name, Category, and MRP are required.",
        duration: 3000,
        style: { background: "#ff416c" },
      }).showToast();
      return;
    }

    const formData = new FormData();
    formData.append("ProductName", productName);
    formData.append("ShortDescription", shortDescription);
    formData.append("Description", description);
    formData.append("SKU", sku);
    formData.append("BrandId", brandId);
    formData.append("CategoryId", categoryId);
    formData.append("MRP", mrp);
    formData.append("DiscountPrice", discount);
    formData.append("GST", gst);
    formData.append("Stock", stock);

    if (sizes && sizes.length > 0) {
      sizes.forEach((size) => {
        formData.append("Sizes", size); 
      });
    } else {
      formData.append("Sizes", ""); // Append empty so it's not null on backend
    }

    formData.append("Color", colorId);
    formData.append("IsActive", isActive);
    formData.append("Type", type);

    // ==== IMAGE PAYLOAD FIX ====
    if (productImage) {
        formData.append("ProductImage", productImage);
    } else {
        // Agar new image select nahi ki, toh existing image ka URL send karein
        formData.append("ProductImageUrl", existingProductImageUrl);
        formData.append("ProductImage", new File([""], "empty.jpg", { type: "image/jpeg" }));
    }
    
    if (galleryFiles && galleryFiles.length > 0) {
        for (let i = 0; i < galleryFiles.length; i++) {
          formData.append("GalleryFiles", galleryFiles[i]);
        }
    } else {
        formData.append("GalleryFiles", new File([""], "empty.jpg", { type: "image/jpeg" }));
    }

    try {
      editBtn.disabled = true;
      editBtn.innerText = "Updating...";

      const response = await adminFetch(`${domin}/api/product/updateproduct/${id}`, {
        method: "PUT",
        body: formData,
      });
      const result = await response.json();

      if (
        result.status ||
        result.success ||
        result?.value?.status === true ||
        result?.value?.value?.status === true
      ) {
        Toastify({
          text: "✅ Product updated successfully!",
          duration: 3000,
          style: { background: "#00b09b" },
        }).showToast();
        setTimeout(
          () => (window.location.href = "product-listdigital.php"),
          1500
        );
      } else {
        Toastify({
          text:
            "❌ " +
            (result.message ||
              result?.value?.message ||
              result?.value?.value?.message ||
              "Failed to update product"),
          duration: 3000,
          style: { background: "#ff416c" },
        }).showToast();
      }
    } catch (err) {
      console.error("Error updating product:", err);
      Toastify({
        text: "❌ Server error occurred.",
        duration: 3000,
        style: { background: "#ff416c" },
      }).showToast();
    } finally {
      editBtn.disabled = false;
      editBtn.innerText = "Update Product";
    }
  });
}
