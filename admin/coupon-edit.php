<?php include 'header.php'; ?>

<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Create Coupon
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
                        <li class="breadcrumb-item">Coupons </li>
                        <li class="breadcrumb-item active">Create Coupon</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="card tab2-card">
            <div class="card-body">
                <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                    <li class="nav-item"><a class="nav-link active show" id="general-tab"
                            data-bs-toggle="tab" href="#general" role="tab" aria-controls="general"
                            aria-selected="true" data-original-title="" title="">Coupon Details</a></li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="general" role="tabpanel"
                        aria-labelledby="general-tab">
                        <form id="couponForm">

                          

                            <div class="row">

                                <div class="col-sm-12">

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-md-4">
                                            <span>*</span> Coupon Code
                                        </label>
                                        <div class="col-md-7">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="couponCode"
                                                placeholder="WELCOME100"
                                                required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-md-4">
                                            <span>*</span> Coupon Type
                                        </label>
                                        <div class="col-md-7">
                                            <select
                                                class="form-control"
                                                id="couponType"
                                                required>
                                                <option value="">Select Type</option>
                                                <option value="FLAT">FLAT</option>
                                                <option value="PERCENTAGE">PERCENTAGE</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-md-4">
                                            <span>*</span> Discount Amount
                                        </label>
                                        <div class="col-md-7">
                                            <input
                                                type="number"
                                                class="form-control"
                                                id="discountAmount"
                                                placeholder="100"
                                                required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-md-4">
                                            Minimum Purchase Amount
                                        </label>
                                        <div class="col-md-7">
                                            <input
                                                type="number"
                                                class="form-control"
                                                id="minimumPurchaseAmount"
                                                placeholder="1000">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-md-4">
                                            Usage Limit
                                        </label>
                                        <div class="col-md-7">
                                            <input
                                                type="number"
                                                class="form-control"
                                                id="usageLimit"
                                                value="1">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-md-4">
                                            Start Date
                                        </label>
                                        <div class="col-md-7">
                                            <input
                                                type="datetime-local"
                                                class="form-control"
                                                id="startDate">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-md-4">
                                            Expiry Date
                                        </label>
                                        <div class="col-md-7">
                                            <input
                                                type="datetime-local"
                                                class="form-control"
                                                id="expiryDate">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-md-4">
                                            Status
                                        </label>
                                        <div class="col-md-7">
                                            <div class="checkbox checkbox-primary">
                                                <input
                                                    id="isActive"
                                                    type="checkbox"
                                                    checked>
                                                <label for="isActive">
                                                    Active Coupon
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4"></div>
                                        <div class="col-md-7">
                                            <button
                                                type="button"
                                                class="btn btn-primary"
                                                onclick="saveCoupon()">
                                                Save Coupon
                                            </button>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
<script src="assets/adminapi/coupon.js"></script>


<?php include 'footer.php'; ?>