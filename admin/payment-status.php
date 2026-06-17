<?php include 'header.php'; ?>

<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Update Payment Status
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
                        <li class="breadcrumb-item active">Update Payment Status</li>
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
                        <form id="payment-status-form">
                        <div class="form-group mb-3">
                            <label for="payment_status" class="form-label">Select Payment Status</label>
                            <select class="form-control" id="payment_status" name="payment_status" required>
                                <option value="">-- Select Status --</option>
                                <option value="PENDING">PENDING</option>
                                <option value="SUCCESS">SUCCESS</option>
                                <option value="FAILED">FAILED</option>
                                <option value="REFUNDED">REFUNDED</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <a href="order-list.php" class="btn btn-secondary mr-2" style="margin-right: 10px;">Cancel</a>
                            <button type="submit" id="update-payment-status-btn" class="btn btn-success">Update Payment Status</button>
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