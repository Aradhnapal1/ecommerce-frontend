<?php include 'header.php'; ?>

<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Color List
                            <small>Multikart Admin panel</small>
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
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item active">Color List</li>
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

                        <a href="add-digital-product.php" class="btn btn-primary mt-md-0 mt-2">Add New
                            Product</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive table-desi">
                            <table class="table list-digital all-package table-category "
                                id="editableTable">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>ID</th>
                                        <th>Color Name</th>
                                        <th>Color Code</th>
                                        <th>Color Preview</th>
                                        <th>Status</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody id="colorTableBody">
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

<script src="./assets/adminapi/color.js"></script>
<?php include 'footer.php'; ?>