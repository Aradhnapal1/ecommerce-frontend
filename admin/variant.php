<?php include 'header.php'; ?>

<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Variant List
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
                        <li class="breadcrumb-item active">Variant List</li>
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
                    <div class="card-header">
                        <form class="form-inline search-form search-box">
                            <div class="form-group">
                                <input class="form-control-plaintext" type="search" placeholder="Search..">
                            </div>
                        </form>

                        <a href="add-variant.php" class="btn btn-primary mt-md-0 mt-2">Add New
                            Variant</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive table-desi">
                            <table class="table list-digital all-package table-category " >
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Variant Image</th>
                                        <th>Product Name</th>
                                        <th>Product Id</th>

                                      
                                        <th>Size</th>
                                        <th>Color</th>
                                       

                                        <th>MRP</th>
                                        <th>Discount %</th>
                                        <th>Base Price</th>
                                        <th>GST %</th>
                                        <th>Sale Price</th>
                                        <th>Stock</th>
                                        <th>Sku</th>

                                      
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>

                                <tbody id="getvariant">
                                   


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


<script src="./assets/adminapi/variant.js"></script>

<?php include 'footer.php'; ?>