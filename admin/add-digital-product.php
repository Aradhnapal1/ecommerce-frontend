<?php include 'header.php'; ?>
<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Add Products
                            <small> Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item">
                            <a href="index.php">
                                <i data-feather="home"></i>
                            </a>
                        </li>
                        <!-- <li class="breadcrumb-item">Digital</li> -->
                        <li class="breadcrumb-item active">Add Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row product-adding">

            <!-- LEFT SIDE -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>General</h5>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <label>Product Name</label>
                            <input id="productName" class="form-control" type="text">
                        </div>

                        <div class="form-group">
                            <label>SKU</label>
                            <input id="sku" class="form-control" type="text">
                        </div>

                        <div class="form-group">
                            <label>Category</label>
                            <div id="dynamicCategoryContainer"></div>
                        </div>
                        <div class="form-group">
                            <label>Brand</label>
                            <select id="brandId" class="form-control custom-select">
                                <option value="">--Select Brand--</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Color</label>
                            <select id="colorId" class="form-control custom-select">
                                <option value="">--Select Color--</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Size</label>
                            <select id="sizeId" class="form-control custom-select" multiple>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Product Type</label>

                            <select id="type" class="form-control custom-select">
                                <option value="">--Select Type--</option>
                                <option value="digital">Digital</option>
                                <option value="physical">Physical</option>
                                <option value="service">Service</option>
                                <option value="ebook">E-Book</option>
                                <option value="software">Software</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>MRP</label>
                            <input id="mrp" class="form-control" type="text">
                        </div>

                        <div class="form-group">
                            <label>Discount %</label>
                            <input id="discount" class="form-control" type="text">
                        </div>

                        <div class="form-group">
                            <label>GST %</label>
                            <input id="gst" class="form-control" type="text">
                        </div>

                        <div class="form-group">
                            <label>Stock</label>
                            <input id="stock" class="form-control" type="text">
                        </div>


                        <!-- ================= MAIN IMAGE ================= -->
                        <div class="form-group">
                            <label>Product Image</label>

                            <input type="file" id="productImageInput" accept="image/*" class="form-control">

                            <img id="productImagePreview"
                                style="width:100px;height:100px;object-fit:cover;margin-top:10px;border-radius:8px;">
                        </div>

                        <!-- ================= GALLERY ================= -->
                        <div class="form-group">
                            <label>Gallery Images</label>

                            <input type="file" id="galleryInput" accept="image/*" multiple class="form-control">

                            <div id="galleryPreview" style="display:flex;gap:10px;flex-wrap:wrap;margin-top:10px;">
                            </div>
                        </div>


                        <!-- ================= STATUS ================= -->
                        <div class="form-group">
                            <label>Status</label><br>

                            <input type="radio" name="status" id="statusActive" value="true">
                            <label for="statusActive">Enable</label>

                            <input type="radio" name="status" id="statusInactive" value="false">
                            <label for="statusInactive">Disable</label>
                        </div>

                    </div>
                </div>
            </div>

            <!-- LEFT SIDE -->
            <div class="col-xl-6">
                <div class="card">


                    <div class="card-body">

                        <!-- ================= SHORT DESCRIPTION ================= -->
                        <div class="form-group">
                            <label>Short Description</label>
                            <textarea id="shortDescription"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Long Description</label>
                            <textarea id="description"></textarea>
                        </div>

                        <!-- ================= SUBMIT BUTTON ================= -->
                        <div class="form-group mt-3">
                            <button type="button" class="btn btn-primary" id="submitBtn">
                                Save Product
                            </button>

                            <button type="button" class="btn btn-light" id="resetBtn">
                                Reset
                            </button>
                        </div>

                    </div>
                </div>
            </div>

            <!-- RIGHT SIDE -->
            <!-- <div class="col-xl-6">

            
                <div class="card">
                    <div class="card-header">
                        <h5>Description</h5>
                    </div>

                    <div class="card-body">
                        <textarea id="description" class="form-control" rows="6"></textarea>
                    </div>


                    
                </div>
                

              
                <div class="form-group">
                    <button type="button" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-light">Reset</button>
                </div>

            </div> -->

        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
<script src="./assets/adminapi/product.js"></script>

<script>
    // Image Preview for Main Product Image
    const productImageInput = document.getElementById('productImageInput');
    const productImagePreview = document.getElementById('productImagePreview');

    productImageInput.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                productImagePreview.src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
    });

    // Gallery Images Preview
    const galleryInput = document.getElementById('galleryInput');
    const galleryPreview = document.getElementById('galleryPreview');

    galleryInput.addEventListener('change', function () {
        galleryPreview.innerHTML = ''; // Clear previous previews

        Array.from(this.files).forEach(file => {
            const reader = new FileReader();
            reader.onload = function (e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.style.width = '80px';
                img.style.height = '80px';
                img.style.objectFit = 'cover';
                img.style.borderRadius = '8px';
                img.style.border = '1px solid #ddd';
                galleryPreview.appendChild(img);
            }
            reader.readAsDataURL(file);
        });
    });
</script>
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('shortDescription');
    CKEDITOR.replace('description');
</script>



<?php include 'footer.php'; ?>