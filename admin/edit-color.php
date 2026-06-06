<?php include 'header.php'; ?>
<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Edit Color
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
                        <li class="breadcrumb-item active">Edit  Color</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row product-adding">

            <div class="col-xl-6 offset-xl-3">

                <div class="card">

                    <div class="card-header">
                        <h5>Edit Color</h5>
                    </div>

                    <div class="card-body">

                        <div class="digital-add">

                            <!-- Color Name -->

                            <div class="form-group">
                                <label class="col-form-label pt-0">
                                    <span>*</span>
                                    Color Name
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="colorName"
                                    placeholder="Enter Color Name (Red, Blue, Green)">
                            </div>

                            <!-- Status -->

                            <div class="form-group">

                                <label class="col-form-label">
                                    <span>*</span>
                                    Status
                                </label>

                                <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">

                                    <label class="d-block mr-3">

                                        <input
                                            class="radio_animated"
                                            type="radio"
                                            name="status"
                                            value="true"
                                            checked>

                                        Active

                                    </label>

                                    <label class="d-block">

                                        <input
                                            class="radio_animated"
                                            type="radio"
                                            name="status"
                                            value="false">

                                        Inactive

                                    </label>

                                </div>

                            </div>

                            <!-- Buttons -->

                            <div class="form-group mb-0">

                                <div class="product-buttons">

                                    <button
                                        type="button"
                                        class="btn btn-primary"
                                        id="updateColorBtn" >
                                        Update Color
                                    </button>

                                    <button
                                        type="reset"
                                        class="btn btn-light">
                                        Reset
                                    </button>

                                </div>

                            </div>

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