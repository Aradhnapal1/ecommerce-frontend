<?php include 'header.php'; ?>

            <div class="page-body">
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="page-header-left">
                                    <h3>Category
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
                                    <li class="breadcrumb-item">Digital</li>
                                    <li class="breadcrumb-item active">Category</li>
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

                                    <!-- <button type="button" class="btn btn-primary mt-md-0 mt-2" data-bs-toggle="modal"
                                        data-original-title="test" data-bs-target="#exampleModal">Add
                                        Category</button> -->
                                         <a href="add-category.php" class="btn btn-primary mt-md-0 mt-2">Add Category
                        </a>
                                </div>

                                <div class="card-body">
                                    <div class="table-responsive table-desi">
                                        <table class="table all-package table-category " id="editableTable">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Category Name</th>
                                                    <th>Sub Category</th>
                                                    <th>Child Category</th>
                                                   
                                                    <th>Status</th>
                                                    <th>Type</th>
                                                    <th>BrowseCategory</th>
                                                    <th>HeroSection</th>
                                                 
                                                    <th>Option</th>
                                                </tr>
                                            </thead>

                                            <tbody id="categoryTableBody">
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/digital-product/graphic-design.png"
                                                            data-field="image" alt="">
                                                    </td>

                                                    <td data-field="name">Graphic Design</td>

                                                 

                                                    <td class="order-success" data-field="status">
                                                        <span>Success</span>
                                                    </td>

                                              

                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-edit" title="Edit"></i>
                                                        </a>

                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-trash" title="Delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                             
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

<script src="./assets/adminapi/category.js"></script>


            
            <?php  include 'footer.php'; ?>