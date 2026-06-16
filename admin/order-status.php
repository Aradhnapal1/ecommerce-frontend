<?php include 'header.php'; ?>

<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Update Order Status
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
                        <li class="breadcrumb-item"><a href="order-list.php">Orders</a></li>
                        <li class="breadcrumb-item active">Update Status</li>
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
                        <h5>Change Order Status</h5>
                    </div>
                    <div class="card-body">
                        <div id="status-container"></div>
                        <form id="order-status-form" class="needs-validation">
                            <div class="form-group row">
                                <label for="order_status" class="col-xl-3 col-md-4"><span>*</span> Order Status</label>
                                <div class="col-xl-8 col-md-7">
                                    <select class="custom-select form-control" id="order_status" required="">
                                        <option value="" disabled selected>Select Status</option>
                                        <option value="PENDING">PENDING</option>
                                        <option value="PLACED">PLACED</option>
                                        <option value="SHIPPED">SHIPPED</option>
                                        <option value="DELIVERED">DELIVERED</option>
                                        <option value="CANCELLED">CANCELLED</option>
                                    </select>
                                </div>
                            </div>
                            <div class="pull-right">
                                <button type="submit" id="update-status-btn" class="btn btn-primary">Update Status</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>

<script src="./assets/adminapi/order.js"></script>

<?php include 'footer.php'; ?>