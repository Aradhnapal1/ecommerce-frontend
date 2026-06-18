<?php include 'header.php'; ?>

<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Dashboard
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
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->



    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-3 col-md-6 xl-50">
                <div class="card o-hidden">
                    <div class="warning-box card-body">
                        <div class="media static-top-widget align-items-center">
                            <div class="icons-widgets">
                                <div class="align-self-center text-center">
                                    <i data-feather="dollar-sign" class="font-warning"></i>
                                </div>
                            </div>
                            <div class="media-body media-doller">
                                <span class="m-0">Earnings</span>
                                <h3 class="mb-0">₹ <span id="stat-revenue">0</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-6 xl-50">
                <div class="card o-hidden">
                    <div class="primary-box card-body">
                        <div class="media static-top-widget align-items-center">
                            <div class="icons-widgets">
                                <div class="align-self-center text-center">
                                    <i data-feather="shopping-bag" class="font-primary"></i>
                                </div>
                            </div>
                            <div class="media-body media-doller">
                                <span class="m-0">Total Orders</span>
                                <h3 class="mb-0"><span id="stat-total-orders">0</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-6 xl-50">
                <div class="card o-hidden">
                    <div class="secondary-box card-body">
                        <div class="media static-top-widget align-items-center">
                            <div class="icons-widgets">
                                <div class="align-self-center text-center">
                                    <i data-feather="box" class="font-secondary"></i>
                                </div>
                            </div>
                            <div class="media-body media-doller">
                                <span class="m-0">Products</span>
                                <h3 class="mb-0"><span id="stat-products">0</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-6 xl-50">
                <div class="card o-hidden">
                    <div class="danger-box card-body">
                        <div class="media static-top-widget align-items-center">
                            <div class="icons-widgets">
                                <div class="align-self-center text-center"><i data-feather="users"
                                        class="font-danger"></i></div>
                            </div>
                            <div class="media-body media-doller"><span class="m-0">Total Users</span>
                                <h3 class="mb-0"><span id="stat-users">0</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-6 xl-50">
                <div class="card o-hidden">
                    <div class="warning-box card-body">
                        <div class="media static-top-widget align-items-center">
                            <div class="icons-widgets">
                                <div class="align-self-center text-center"><i data-feather="clock"
                                        class="font-warning"></i></div>
                            </div>
                            <div class="media-body media-doller"><span class="m-0">Pending Orders</span>
                                <h3 class="mb-0"><span id="stat-pending-orders">0</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-6 xl-50">
                <div class="card o-hidden">
                    <div class="success-box card-body ">
                        <div class="media static-top-widget align-items-center">
                            <div class="icons-widgets ">
                                <div class="align-self-center text-center bg-success"><i data-feather="check-circle"
                                        class="font-white"></i></div>
                            </div>
                            <div class="media-body media-doller"><span class="m-0 font-success">Delivered Orders</span>
                                <h3 class="mb-0 font-success"><span id="stat-delivered-orders">0</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-6 xl-50">
                <div class="card o-hidden">
                    <div class="danger-box card-body">
                        <div class="media static-top-widget align-items-center">
                            <div class="icons-widgets">
                                <div class="align-self-center text-center"><i data-feather="x-circle"
                                        class="font-danger"></i></div>
                            </div>
                            <div class="media-body media-doller"><span class="m-0">Cancelled Orders</span>
                                <h3 class="mb-0"><span id="stat-cancelled-orders">0</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-6 xl-50">
                <div class="card o-hidden">
                    <div class="secondary-box card-body">
                        <div class="media static-top-widget align-items-center">
                            <div class="icons-widgets">
                                <div class="align-self-center text-center"><i data-feather="rotate-ccw"
                                        class="font-secondary"></i></div>
                            </div>
                            <div class="media-body media-doller"><span class="m-0">Returned Orders</span>
                                <h3 class="mb-0"><span id="stat-returned-orders">0</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-6 xl-50">
                <div class="card o-hidden">
                    <div class="primary-box card-body">
                        <div class="media static-top-widget align-items-center">
                            <div class="icons-widgets">
                                <div class="align-self-center text-center"><i data-feather="message-square"
                                        class="font-primary"></i></div>
                            </div>
                            <div class="media-body media-doller"><span class="m-0">Enquiries</span>
                                <h3 class="mb-0"><span id="stat-enquiries">0</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Latest Orders</h5>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="icofont icofont-simple-left"></i></li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="user-status table-responsive latest-order-table">
                            <table class="table table-bordernone">
                                <thead>
                                    <tr>
                                        <th scope="col">Order Number</th>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Order Total</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody id="recent-orders-tbody">
                                </tbody>
                            </table>
                            <a href="order-list.php" class="btn btn-primary mt-4">View All Orders</a>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1"
                                title="" data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre class=" language-html"><code class=" language-html" id="example-head1">
&lt;div class="user-status table-responsive latest-order-table"&gt;
    &lt;table class="table table-bordernone"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;Order ID&lt;/th&gt;
                &lt;th scope="col"&gt;Order Total&lt;/th&gt;
                &lt;th scope="col"&gt;Payment Method&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td&gt;1&lt;/td&gt;
                &lt;td class="digits"&gt;$120.00&lt;/td&gt;
                &lt;td class="font-secondary"&gt;Bank Transfers&lt;/td&gt;
                &lt;td class="digits"&gt;Delivered&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;2&lt;/td&gt;
                &lt;td class="digits"&gt;$90.00&lt;/td&gt;
                &lt;td class="font-secondary"&gt;Ewallets&lt;/td&gt;
                &lt;td class="digits"&gt;Delivered&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;3&lt;/td&gt;
                &lt;td class="digits"&gt;$240.00&lt;/td&gt;
                &lt;td class="font-secondary"&gt;Cash&lt;/td&gt;
                &lt;td class="digits"&gt;Delivered&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;4&lt;/td&gt;
                &lt;td class="digits"&gt;$120.00&lt;/td&gt;
                &lt;td class="font-primary"&gt;Direct Deposit&lt;/td&gt;
                &lt;td class="digits"&gt;Delivered&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;5&lt;/td&gt;
                &lt;td class="digits"&gt;$50.00&lt;/td&gt;
                &lt;td class="font-primary"&gt;Bank Transfers&lt;/td&gt;
                &lt;td class="digits"&gt;Delivered&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
                                    </code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card order-graph sales-carousel">
                    <div class="card-header b-header">
                        <h6>Pending Orders</h6>
                        <div class="row">
                            <div class="col-6">
                                <div class="small-chartjs">
                                    <div class="flot-chart-placeholder" id="simple-line-chart-sparkline-3">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="value-graph">
                                    <h3><span id="stat-pending">0</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <span>Pending Orders</span>
                                <h2 class="mb-0" id="stat-pending-2">0</h2>
                            </div>

                            <div class="bg-primary">
                                <div class="small-box">
                                    <i data-feather="briefcase"></i>
                                </div>
                            </div>
                        </div>

                        <div class="sales-contain">
                            <h5 class="f-w-600">Awaiting processing</h5>
                            <p>Orders that have been placed but are not yet delivered or shipped.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card order-graph sales-carousel">
                    <div class="card-header b-header">
                        <h6>Delivered Orders</h6>
                        <div class="row">
                            <div class="col-6">
                                <div class="small-chartjs">
                                    <div class="flot-chart-placeholder" id="simple-line-chart-sparkline">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="value-graph">
                                    <h3><span id="stat-delivered">0</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <span>Delivered Orders</span>
                                <h2 class="mb-0" id="stat-delivered-2">0</h2>
                            </div>
                            <div class="bg-secondary">
                                <div class="small-box">
                                    <i data-feather="credit-card"></i>
                                </div>
                            </div>
                        </div>

                        <div class="sales-contain">
                            <h5 class="f-w-600">Completed Orders</h5>
                            <p>Orders successfully delivered to the customers.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card order-graph sales-carousel">
                    <div class="card-header b-header">
                        <h6>Cancelled Orders</h6>
                        <div class="row">
                            <div class="col-6">
                                <div class="small-chartjs">
                                    <div class="flot-chart-placeholder" id="simple-line-chart-sparkline-2">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="value-graph">
                                    <h3><span id="stat-cancelled">0</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <span>Cancelled Orders</span>
                                <h2 class="mb-0" id="stat-cancelled-2">0</h2>
                            </div>
                            <div class="bg-warning">
                                <div class="small-box">
                                    <i data-feather="shopping-cart"></i>
                                </div>
                            </div>
                        </div>

                        <div class="sales-contain">
                            <h5 class="f-w-600">Cancelled by users</h5>
                            <p>Orders that were cancelled before processing or shipping.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card order-graph sales-carousel">
                    <div class="card-header b-header">
                        <h6>Returned Orders</h6>
                        <div class="row">
                            <div class="col-6">
                                <div class="small-chartjs">
                                    <div class="flot-chart-placeholder" id="simple-line-chart-sparkline-1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="value-graph">
                                    <h3><span id="stat-returned">0</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <span>Returned Orders</span>
                                <h2 class="mb-0" id="stat-returned-2">0</h2>
                            </div>
                            <div class="bg-danger">
                                <div class="small-box">
                                    <i data-feather="calendar"></i>
                                </div>
                            </div>
                        </div>

                        <div class="sales-contain">
                            <h5 class="f-w-600">Returned by users</h5>
                            <p>Orders that were successfully returned by the customers after delivery.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>

<script src="./assets/adminapi/dashboard.js"></script>
<?php include 'footer.php'; ?>