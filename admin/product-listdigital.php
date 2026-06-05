<?php include 'header.php'; ?>

            <div class="page-body">
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="page-header-left">
                                    <h3>Product List
                                        <small>Multikart Admin panel</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item">
                                        <a href="index-2.html">
                                            <i data-feather="home"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">Digital</li>
                                    <li class="breadcrumb-item active">Product List</li>
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
                                                    <th>ID</th>
                                                    <th>Product Image</th>
                                                    <th>Product Title</th>
                                                    <th>Entry Type</th>
                                                    <th>Quantity</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>31</td>

                                                    <td>
                                                        <img src="assets/images/digital-product/web-dev.jpg"
                                                            data-field="image" alt="">
                                                    </td>

                                                    <td data-field="name">Website</td>

                                                    <td data-field="price">Add</td>

                                                    <td data-field="name">5</td>

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
                                                    <td>172</td>

                                                    <td>
                                                        <img src="assets/images/digital-product/3d-design.jpg"
                                                            data-field="image" alt="">
                                                    </td>

                                                    <td data-field="name">3D Design</td>

                                                    <td data-field="price">Destroy</td>

                                                    <td data-field="name">11</td>

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
                                                    <td>210</td>

                                                    <td>
                                                        <img src="assets/images/digital-product/graphic-design.png"
                                                            data-field="image" alt="">
                                                    </td>

                                                    <td data-field="name">Graphics Design</td>

                                                    <td data-field="price">Destroy</td>

                                                    <td data-field="name">154</td>

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
                                                    <td>65</td>

                                                    <td>
                                                        <img src="assets/images/digital-product/logo.jpg"
                                                            data-field="image" alt="">
                                                    </td>

                                                    <td data-field="name">Logo Design</td>

                                                    <td data-field="price">Destroy</td>

                                                    <td data-field="name">1</td>

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
                                                    <td>424</td>

                                                    <td>
                                                        <img src="assets/images/digital-product/php.png" alt="">
                                                    </td>

                                                    <td data-field="name">PHP</td>

                                                    <td data-field="price">Add</td>

                                                    <td data-field="name">24</td>

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
                                                    <td>210</td>

                                                    <td>
                                                        <img src="assets/images/digital-product/html.png" alt="">
                                                    </td>

                                                    <td data-field="name">HTML</td>

                                                    <td data-field="price">Destroy</td>

                                                    <td data-field="name">27</td>

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
                                                    <td>4112</td>

                                                    <td>
                                                        <img src="assets/images/digital-product/css.jpg" alt="">
                                                    </td>

                                                    <td data-field="name">CSS</td>

                                                    <td data-field="price">Add</td>

                                                    <td data-field="name">242</td>

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
                                                    <td>4570</td>

                                                    <td>
                                                        <img src="assets/images/digital-product/wordpress.jpg" alt="">
                                                    </td>

                                                    <td data-field="name">Wordpress</td>

                                                    <td data-field="price">add</td>

                                                    <td data-field="name">6</td>

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
                                                    <td>4710</td>

                                                    <td>
                                                        <img src="assets/images/digital-product/3d-design.jpg" alt="">
                                                    </td>

                                                    <td data-field="name">3d Design</td>

                                                    <td data-field="price">Destroy</td>

                                                    <td data-field="name">72</td>

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


            <?php include 'footer.php'; ?>