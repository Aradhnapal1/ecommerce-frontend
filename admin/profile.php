<?php include 'header.php'; ?>

<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Admin Profile
                            <small>Manage your profile settings</small>
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
                        <li class="breadcrumb-item">Settings</li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4">
                <div class="card" id="adminProfileCard">
                    <div class="card-body">
                        <div class="profile-details text-center">
                            <div class="avatar-circle mb-3 mx-auto d-flex align-items-center justify-content-center bg-primary text-white rounded-circle font-weight-bold" style="width:90px; height:90px; font-size:32px;">
                                <i class="fa fa-user"></i>
                            </div>
                            <h5 class="f-w-600 mb-1" id="profileCardName">Loading Admin...</h5>
                            <span class="text-muted d-block mb-2" id="profileCardEmail">loading@admin.com</span>
                            <span class="badge bg-success" id="profileCardRole">ADMIN</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card tab2-card">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="top-profile-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true">
                                    <i class="fa fa-user me-2"></i>Profile Details
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false">
                                    <i class="fa fa-lock me-2"></i>Change Password
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="top-tabContent">
                            <!-- Profile Tab -->
                            <div class="tab-pane fade show active" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
                                <form id="adminProfileForm" class="mt-4">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label font-weight-bold">First Name</label>
                                            <input type="text" class="form-control" id="adminFirstName" required placeholder="First Name">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label font-weight-bold">Last Name</label>
                                            <input type="text" class="form-control" id="adminLastName" required placeholder="Last Name">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label font-weight-bold">Email Address</label>
                                            <input type="email" class="form-control bg-light" id="adminEmail" readonly disabled placeholder="Email">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label font-weight-bold">Phone Number</label>
                                            <input type="text" class="form-control" id="adminPhone" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary" id="saveAdminProfileBtn">
                                            Save Changes
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <!-- Password Tab -->
                            <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                                <form id="adminPasswordForm" class="mt-4">
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <label class="form-label font-weight-bold">Current Password</label>
                                            <input type="password" class="form-control" id="adminCurrentPassword" required placeholder="Enter Current Password">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label font-weight-bold">New Password</label>
                                            <input type="password" class="form-control" id="adminNewPassword" required placeholder="Enter New Password">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label font-weight-bold">Confirm New Password</label>
                                            <input type="password" class="form-control" id="adminConfirmPassword" required placeholder="Confirm New Password">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary" id="changeAdminPasswordBtn">
                                            Update Password
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>

<script src="./assets/adminapi/profile.js"></script>

<?php include 'footer.php'; ?>
