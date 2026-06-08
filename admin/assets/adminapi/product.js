/* Load on page ready */
let allCategoriesList = [];

document.addEventListener("DOMContentLoaded", function () {
  // Sirf Product List page par chalega
  if (document.getElementById("getproduct")) {
    loadProducts();
  }
  // Sirf Add Product page par chalega
  if (document.getElementById("submitBtn")) {
    loadDropdowns();
    bindAddProduct();
  }
});

async function loadProducts() {
  try {
    const res = await fetch(`${domin}/api/product/getallproducts`);
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
                    <a href="javascript:void(0)" onclick="editProduct(${item.id})">
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

/* Actions */
function editProduct(id) {
  alert("Edit Product ID: " + id);
}

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
  container.querySelector(".toast-yes-btn").addEventListener("click", async function () {
      toast.hideToast();

      try {
        const response = await fetch(`${domin}/api/product/deleteproduct/${id}`, {
          method: "DELETE",
        });

        if (response.ok) {
          Toastify({ text: "✅ Product deleted successfully!", duration: 2000, style: { background: "linear-gradient(to right,#00b09b,#96c93d)" } }).showToast();
          loadProducts(); // Refresh the product list
        } else {
          const result = await response.json().catch(() => ({ message: "Failed to delete product" }));
          Toastify({ text: "❌ " + (result.message || "Failed to delete product"), duration: 3000, style: { background: "linear-gradient(to right,#ff416c,#ff4b2b)" } }).showToast();
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

/* =======================================
   ADD PRODUCT LOGIC
======================================= */

async function loadDropdowns() {
  try {
    // 1. Load Categories
    const catRes = await fetch(`${domin}/api/getcategories`);
    const catResult = await catRes.json();
    const nestedCategories = catResult?.value?.data || catResult?.data || [];
    allCategoriesList = flattenCategories(nestedCategories);
    const catContainer = document.getElementById("dynamicCategoryContainer");
    if (catContainer) {
      catContainer.innerHTML = "";
      renderCategoryDropdown(null, 0);
    }

    // 2. Load Brands
    const brandRes = await fetch(`${domin}/api/brand/getallbrands`);
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
    const colorRes = await fetch(`${domin}/api/colors/get-all`);
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
    const sizeRes = await fetch(`${domin}/api/size/getallsize`);
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
  categories.forEach(cat => {
      flatList.push(cat);
      if (cat.children && cat.children.length > 0) {
          flatList = flatList.concat(flattenCategories(cat.children));
      }
  });
  return flatList;
}

function renderCategoryDropdown(parentId, level) {
  const isRoot = (parentId === null || parentId === "" || parentId === 0);

  const children = allCategoriesList.filter(cat => {
      if (isRoot) return (cat.parentId === null || cat.parentId === 0 || cat.parentId === "");
      return cat.parentId == parentId;
  });

  if (children.length === 0) return;

  const select = document.createElement("select");
  select.className = "form-control custom-select mt-2 dynamic-category-select";
  select.dataset.level = level;
  select.innerHTML = `<option value="">-- Select Level ${level + 1} Category --</option>`;

  children.forEach(cat => {
      const option = document.createElement("option");
      option.value = cat.id;
      option.textContent = cat.categoryName;
      select.appendChild(option);
  });

  select.addEventListener("change", function () {
      const currentLevel = parseInt(this.dataset.level);
      const container = document.getElementById("dynamicCategoryContainer");
      container.querySelectorAll(".dynamic-category-select").forEach(sel => {
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

    // Get multiple selected sizes as an array
    const sizeOptions = document.getElementById("sizeId").selectedOptions;
    const sizes = Array.from(sizeOptions)
      .map((opt) => opt.value);

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
    sizes.forEach(size => {
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

      const response = await fetch(`${domin}/api/product/addproduct`, {
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
