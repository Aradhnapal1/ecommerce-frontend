<?php include 'header.php'; ?>

<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Order List
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
                        <li class="breadcrumb-item">Menus</li>
                        <li class="breadcrumb-item active">Order List</li>
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
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-desi">
                            <table class="table all-package order-list-table" id="editableTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Order Number</th>
                                        <th>Customer Name</th>
                                        <th>Mobile</th>
                                        <th>Payment Method</th>
                                        <th>Payment Status</th>
                                        <th>Order Status</th>
                                        <th>Subtotal</th>
                                        <th>Discount</th>
                                        <th>Final Amount</th>
                                        <th>Coupon Code</th>
                                        <th>Created Date</th>
                                        <th>Action</th>
                                        <th>Update Status</th>
                                    </tr>
                                </thead>

                                <tbody id="ordertable"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
<script src="./assets/adminapi/order.js"></script>

<?php include 'footer.php'; ?>