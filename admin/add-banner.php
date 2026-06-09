<?php include 'header.php'; ?>
<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Add Brnds
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
                        <li class="breadcrumb-item active">Add Brand</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row product-adding">
            <div class="row">

                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header">
                            <h5>Add Banner</h5>
                        </div>

                        <div class="card-body">

                            <div class="form-group">
                                <label>Banner Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="bannerName"
                                    placeholder="Enter Banner Name">
                            </div>

                            <div class="form-group">
                                <label>Banner Description</label>
                                <textarea
                                    class="form-control"
                                    id="bannerDescription"
                                    rows="4"
                                    placeholder="Enter Banner Description"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Banner Link</label>
                                <input
                                    type="url"
                                    class="form-control"
                                    id="bannerLink"
                                    placeholder="https://example.com">
                            </div>

                            <div class="form-group">
                                <label>Banner Type</label>
                                <select
                                    class="form-control"
                                    id="bannerType">
                                    <option value="Top">Top</option>
                                    <option value="Middle">Middle</option>
                                    <option value="Bottom">Bottom</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Banner Image</label>
                                <input
                                    type="file"
                                    class="form-control"
                                    id="bannerFile"
                                    accept="image/*">
                            </div>

                            <div class="form-group">
                                <label>Status</label>

                                <div>
                                    <label>
                                        <input
                                            type="radio"
                                            name="status"
                                            value="true"
                                            checked>
                                        Active
                                    </label>

                                    &nbsp;&nbsp;

                                    <label>
                                        <input
                                            type="radio"
                                            name="status"
                                            value="false">
                                        Inactive
                                    </label>
                                </div>
                            </div>

                            <button
                                type="button"
                                class="btn btn-primary"
                                id="addBannerBtn">
                                Add Banner
                            </button>

                        </div>
                    </div>
                </div>

                <!-- Preview Section -->
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            <h5>Selected Image Preview</h5>
                        </div>

                        <div class="card-body text-center">

                            <img
                                id="previewImage"
                                src=""
                                style="
                        width:100%;
                        max-height:300px;
                        object-fit:contain;
                        display:none;
                        border-radius:10px;
                        border:1px solid #ddd;
                    ">

                            <p
                                id="imageName"
                                class="mt-3 text-muted">
                                No image selected
                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div id="loaderOverlay" class="loader-overlay">

            <div class="loader-card">

                <div class="bars-loader">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <h4>Creating Brand</h4>

                <p>Uploading image and saving brand data...</p>
                <style>
                    .loader-overlay {
                        display: none;
                        position: fixed;
                        inset: 0;
                        background: rgba(15, 23, 42, .75);
                        backdrop-filter: blur(10px);
                        z-index: 999999;
                        justify-content: center;
                        align-items: center;
                    }

                    .loader-card {
                        width: 380px;
                        background: #fff;
                        padding: 35px;
                        border-radius: 24px;
                        text-align: center;
                        box-shadow: 0 20px 50px rgba(0, 0, 0, .25);
                    }

                    .loader-card h4 {
                        margin-top: 20px;
                        margin-bottom: 10px;
                        font-weight: 700;
                    }

                    .loader-card p {
                        color: #64748b;
                        margin: 0;
                    }

                    .bars-loader {
                        width: 70px;
                        height: 50px;
                        margin: auto;
                        display: flex;
                        align-items: flex-end;
                        justify-content: center;
                        gap: 6px;
                    }

                    .bars-loader span {
                        width: 8px;
                        height: 15px;
                        border-radius: 20px;
                        background: linear-gradient(180deg,
                                #2563eb,
                                #06b6d4);
                        animation: bars 1s infinite ease-in-out;
                    }

                    .bars-loader span:nth-child(1) {
                        animation-delay: 0s;
                    }

                    .bars-loader span:nth-child(2) {
                        animation-delay: .1s;
                    }

                    .bars-loader span:nth-child(3) {
                        animation-delay: .2s;
                    }

                    .bars-loader span:nth-child(4) {
                        animation-delay: .3s;
                    }

                    .bars-loader span:nth-child(5) {
                        animation-delay: .4s;
                    }

                    @keyframes bars {

                        0%,
                        100% {
                            height: 15px;
                        }

                        50% {
                            height: 45px;
                        }
                    }
                </style>
            </div>


        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>

<script src="./assets/adminapi/banner.js"></script>

<?php include 'footer.php'; ?>