<?php include 'header.php'; ?>

<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Product List
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
                        <li class="breadcrumb-item active">Product List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center flex-wrap gap-2">
                        <form class="form-inline search-form search-box">
                            <!-- <div class="form-group">
                                <input class="form-control-plaintext" type="search" placeholder="Search..">
                            </div> -->
                        </form>

                        <div class="d-flex flex-wrap gap-2 align-items-center">
                            <button type="button" class="btn btn-outline-secondary" onclick="downloadSampleCSV()" title="Download Sample CSV Template">
                                <i class="fa fa-file-text-o me-1"></i> Sample CSV
                            </button>
                            <button type="button" class="btn btn-outline-success" onclick="exportProductsCSV()" title="Export Products to CSV">
                                <i class="fa fa-download me-1"></i> Export CSV
                            </button>
                            <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#importCsvModal" title="Import Products via CSV">
                                <i class="fa fa-upload me-1"></i> Import CSV
                            </button>
                            <a href="add-digital-product.php" class="btn btn-primary">
                                <i class="fa fa-plus me-1"></i> Add New Product
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive table-desi">
                            <table class="table list-digital all-package table-category " >
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product Image</th>
                                        <th>Product Name</th>
                                        <th>Category</th>
                                        <th>Size</th>
                                        <th>Color</th>
                                        <th>Brand</th>

                                        <th>MRP</th>
                                        <th>Discount %</th>
                                        <th>Base Price</th>
                                        <th>GST %</th>
                                        <th>Sale Price</th>
                                        <th>Stock</th>
                                        <th>Sku</th>

                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>

                                <tbody id="getproduct">
                                   


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>

<!-- CSV Import Modal -->
<div class="modal fade" id="importCsvModal" tabindex="-1" aria-labelledby="importCsvModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title text-white" id="importCsvModalLabel"><i class="fa fa-file-excel-o me-2"></i> Import Products from CSV</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="alert alert-info border-0 shadow-sm mb-4">
                    <h6 class="alert-heading font-weight-bold mb-2"><i class="fa fa-info-circle me-1"></i> CSV Field Format Guidelines:</h6>
                    <p class="mb-2 text-muted" style="font-size: 13px;">Ensure your CSV file contains the following headers in exact order:</p>
                    <code class="d-block p-2 bg-light rounded text-dark small" style="word-break: break-all; white-space: pre-wrap;">ProductName,Type,ShortDescription,Description,SKU,Brand,Category,Color,ColorCode,Sizes,MRP,DiscountPercent,GST,Stock,ProductImageUrl,GalleryImageUrls,IsActive</code>
                    <div class="mt-3 d-flex justify-content-between align-items-center">
                        <small class="text-secondary">Example Row: <code>Nike Air Max,Shoes,Comfortable,Full desc,SKU-001,Nike,Men Footwear,Black,#000000,S|M|L,4999,10,18,50,https://example.com/main.jpg,https://example.com/g1.jpg|https://example.com/g2.jpg,true</code></small>
                    </div>
                    <div class="mt-2 text-end">
                        <button type="button" class="btn btn-sm btn-outline-primary" onclick="downloadSampleCSV()">
                            <i class="fa fa-download me-1"></i> Download Sample CSV
                        </button>
                    </div>
                </div>

                <form id="csvImportForm" onsubmit="handleCSVImport(event)">
                    <div class="mb-3">
                        <label for="csvFileInput" class="form-label font-weight-bold">Select CSV File <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" id="csvFileInput" accept=".csv" required>
                        <div class="form-text">Only <code>.csv</code> files are supported.</div>
                    </div>
                    
                    <div id="importStatusMessage" class="mt-3"></div>

                    <div class="modal-footer px-0 pb-0 pt-3 border-top-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" id="btnSubmitImport">
                            <i class="fa fa-upload me-1"></i> Start Import
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="./assets/adminapi/product.js"></script>

<?php include 'footer.php'; ?>