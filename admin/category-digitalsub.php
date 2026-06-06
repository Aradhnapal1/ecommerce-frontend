<?php include 'header.php'; ?>

            <div class="page-body">
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="page-header-left">
                                    <h3>Sub Category
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
                                    <li class="breadcrumb-item active">Sub Category</li>
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

                                    <button type="button" class="btn btn-primary mt-md-0 mt-2" data-bs-toggle="modal"
                                        data-original-title="test" data-bs-target="#exampleModal">Add Sub
                                        Category</button>
                                </div>

                                <div class="card-body">
                                    <div class="table-responsive table-desi">
                                        <table class="table all-package table-category " id="editableTable">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Price</th>
                                                    <th>Status</th>
                                                    <th>Sub Category</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/digital-product/logo.jpg"
                                                            data-field="image" alt="">
                                                    </td>

                                                    <td data-field="name">Logo Design</td>

                                                    <td data-field="price">$57.00</td>

                                                    <td class="order-success" data-field="status">
                                                        <span>Success</span>
                                                    </td>

                                                    <td data-field="name">Digital</td>

                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-edit" title="Edit"></i>
                                                        </a>

                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-trash" title="Delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="assets/images/digital-product/php.png" alt="">
                                                    </td>

                                                    <td data-field="name">PHP</td>

                                                    <td data-field="price">$462.00</td>

                                                    <td class="order-pending" data-field="status">
                                                        <span>Pending</span>
                                                    </td>

                                                    <td data-field="name">Digital</td>

                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-edit" title="Edit"></i>
                                                        </a>

                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-trash" title="Delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="assets/images/digital-product/html.png" alt="">
                                                    </td>

                                                    <td data-field="name">HTML</td>

                                                    <td data-field="price">$54.00</td>

                                                    <td class="order-success" data-field="status">
                                                        <span>Success</span>
                                                    </td>

                                                    <td data-field="name">Digital</td>

                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-edit" title="Edit"></i>
                                                        </a>

                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-trash" title="Delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="assets/images/digital-product/css.jpg" alt="">
                                                    </td>

                                                    <td data-field="name">CSS</td>

                                                    <td data-field="price">$576.00</td>

                                                    <td class="order-warning" data-field="status">
                                                        <span>Waiting</span>
                                                    </td>

                                                    <td data-field="name">Digital</td>

                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-edit" title="Edit"></i>
                                                        </a>

                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-trash" title="Delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="assets/images/digital-product/wordpress.jpg" alt="">
                                                    </td>

                                                    <td data-field="name">Wordpress</td>

                                                    <td data-field="price">$782.00</td>

                                                    <td class="order-success" data-field="status">
                                                        <span>Success</span>
                                                    </td>

                                                    <td data-field="name">Digital</td>

                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-edit" title="Edit"></i>
                                                        </a>

                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-trash" title="Delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="assets/images/digital-product/3d-design.jpg" alt="">
                                                    </td>

                                                    <td data-field="name">3d Design</td>

                                                    <td data-field="price">$782.00</td>

                                                    <td class="order-success" data-field="status">
                                                        <span>Success</span>
                                                    </td>

                                                    <td data-field="name">Digital</td>

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

           
            <?php   include 'footer.php'; ?>