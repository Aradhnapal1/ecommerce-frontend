<?php include 'header.php'; ?>


<!-- ========== Breadcrumb Section Start ========== -->
<div class="container py-12">
  <div class="breadcrumb">
    <ul>
      <li>
        <a href='index.html'><span class="inline-flex items-center justify-center">
            <i class="hgi hgi-stroke hgi-home-01 text-2xl leading-6"></i></span>Home</a>
      </li>
      <li class="text-light-disabled-text">&#8226;</li>
      <li>
        <a class="text-sm! leading-[22px]! text-light-primary-text! font-normal">User Dashboard</a>
      </li>
      <li class="text-light-disabled-text">&#8226;</li>
      <li><span class="text-sm leading-[22px]">Order History</span></li>
    </ul>
  </div>
</div>
<!-- ========== Breadcrumb Section End ========== -->

<!-- ========== My Account Section Start ========== -->
<section class="pb-[74px]">
  <div class="container">
    <div class="grid grid-cols-12 lg:gap-x-10 gap-y-6">
      <div class="xl:col-span-3 lg:col-span-4 col-span-12">
        <div class="sticky top-20">
          <ul class="flex flex-col gap-y-1 border border-gray-300 p-4 rounded-2xl my-account-menu">
            <li class="group">
              <button type="button" data-tab="dashboard"
                class="w-full flex items-center gap-x-4 font-semibold p-4 group-hover:text-white active group-hover:bg-primary rounded-lg transition-colors ease-in-out duration-300 active">
                <span class="inline-flex items-center justify-center"><i
                    class="hgi hgi-stroke hgi-dashboard-square-01 text-2xl leading-6 font-normal"></i></span>
                Dashboard
              </button>
            </li>
            <li class="group">
              <button type="button" data-tab="orders"
                class="w-full flex items-center gap-x-4 font-semibold p-4 rounded-lg group-hover:text-white group-hover:bg-primary">
                <span class="inline-flex items-center justify-center"><i
                    class="hgi hgi-stroke hgi-delete-01 text-2xl leading-6 font-normal"></i></span>
                Orders
              </button>
            </li>

            <li class="group">
              <button data-tab="address"
                class="w-full flex items-center gap-x-4 font-semibold p-4 group-hover:text-white group-hover:bg-primary rounded-lg transition-colors ease-in-out duration-300">
                <span class="inline-flex items-center justify-center"><i
                    class="hgi hgi-stroke hgi-location-01 text-2xl leading-6 font-normal"></i></span>
                My Address
              </button>
            </li>
            <li class="group">
              <button type="button" data-tab="profile"
                class="w-full flex items-center gap-x-4 font-semibold p-4 group-hover:text-white group-hover:bg-primary rounded-lg transition-colors ease-in-out duration-300">
                <span class="inline-flex items-center justify-center"><i
                    class="hgi hgi-stroke hgi-user text-2xl leading-6 font-normal"></i></span>
                My Account
              </button>
            </li>
            <li class="group">
              <button type="button" data-tab="logout"
                class="w-full flex items-center gap-x-4 font-semibold p-4 group-hover:text-white group-hover:bg-primary rounded-lg transition-colors ease-in-out duration-300 logout-button">
                <span class="inline-flex items-center justify-center"><i
                    class="hgi hgi-stroke hgi-login-circle-02 text-2xl leading-6 font-normal"></i></span>
                Log Out
              </button>
            </li>
          </ul>
        </div>
      </div>
      <div class="xl:col-span-9 lg:col-span-8 col-span-12">
        <div class="my-account-content tab-content">
          <div class="menu-tab-pane" id="dashboard">
            <h3 class="mb-6">Dashboard</h3>

            <p>
              From your account dashboard. you can easily check &amp; view
              your
              <a class="text-primary hover:underline" href="#">recent orders</a>,<br />
              manage your
              <a class="text-primary hover:underline" href="#">shipping and billing addresses</a>
              and
              <a class="text-primary hover:underline" href="#">edit your password and account details.</a>
            </p>
          </div>
          <div class="menu-tab-pane hidden" id="orders">
            <div class="bg-white rounded-2xl shadow-sm border overflow-hidden">
              <div class="px-6 py-4 border-b border-gray-200" style="background-color:#f4f6f8">
                <h3 class="text-xl font-semibold">My Orders</h3>
              </div>

              <div class="overflow-x-auto">
                <table class="w-full min-w-[1000px]">
                  <thead>
                    <tr class="bg-gray-50 text-sm text-gray-600">
                      <th class="px-6 py-4 text-left font-semibold">Order ID</th>
                      <th class="px-6 py-4 text-left font-semibold">Order No</th>
                      <th class="px-6 py-4 text-left font-semibold">Customer</th>
                      <th class="px-6 py-4 text-left font-semibold">Mobile</th>
                      <th class="px-6 py-4 text-left font-semibold">Amount</th>
                      <th class="px-6 py-4 text-left font-semibold">Payment Method</th>
                      <th class="px-6 py-4 text-left font-semibold">Payment Status</th>
                      <th class="px-6 py-4 text-left font-semibold">Order Status</th>
                      <th class="px-6 py-4 text-left font-semibold">Date</th>
                        <th class="px-6 py-4 text-left font-semibold">View Details</th>
                        <th class="px-6 py-4 text-left font-semibold">Cancel Order</th>
                    </tr>
                  </thead>

                  <tbody id="orders-table-body" class="divide-y divide-gray-200">

                    <!-- Dynamic Rows Here -->



                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="menu-tab-pane hidden" id="order-details">
            <div class="flex items-center gap-x-6 mb-8">
              <button class="btn btn-default outline size-12 rounded-[80px] shadow-none order-details-back-button">
                <i class="hgi hgi-stroke hgi-arrow-left-02 text-2xl leading-6"></i>
              </button>
              <h4 class="text-light-primary-text flex items-center gap-x-5">
                Order ID <span>:</span> <span>#65937</span>
              </h4>
            </div>

            <div class="flex flex-col gap-y-6">
              <!-- Timeline Table Start -->
              <div class="order-history-table-wrapper border-gray-300 rounded-2xl border overflow-x-auto">
                <table class="w-full order-history-table">
                  <thead>
                    <tr class="border-b border-gray-300">
                      <th
                        class="text-left py-4 px-6 lg:text-xl lg:leading-[30px] text-lg leading-7 font-bold text-light-primary-text bg-gray-200">
                        Timeline
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="lg:px-6 px-4 pb-6 pt-10">
                        <!-- Timeline -->
                        <div>
                          <!-- Item -->
                          <div class="flex gap-x-6">
                            <!-- Left Content -->
                            <div class="min-h-[90px] text-end">
                              <p class="text-xs leading-[18px] w-[55px]">
                                Apr 24 11:12 AM
                              </p>
                            </div>
                            <!-- End Left Content -->

                            <!-- Icon -->
                            <div
                              class="relative last:after:hidden after:absolute after:top-2 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-1 after:bg-primary">
                              <div class="relative z-10 size-5 flex justify-center items-center">
                                <div
                                  class="size-5 rounded-full bg-primary-light border border-primary-dark inline-flex items-center justify-center">
                                  <i
                                    class="hgi hgi-stroke hgi-tick-02 text-primary-dark text-[10px] leading-[10px]"></i>
                                </div>
                              </div>
                            </div>
                            <!-- End Icon -->

                            <!-- Right Content -->
                            <div class="grow pt-0.5 pb-8">
                              <p class="font-semibold text-light-primary-text">
                                Order Placed
                              </p>
                              <p class="text-light-secondary-text text-sm leading-[22px]">
                                Thank you for your order! We’ve successfully
                                received it and will begin preparing
                                everything to ensure a smooth and timely
                                delivery.
                              </p>
                            </div>
                            <!-- End Right Content -->
                          </div>
                          <!-- End Item -->

                          <!-- Item -->
                          <div class="flex gap-x-6">
                            <!-- Left Content -->
                            <div class="min-h-[90px] text-end">
                              <p class="text-xs leading-[18px] w-[55px]">
                                Apr 24 11:12 AM
                              </p>
                            </div>
                            <!-- End Left Content -->

                            <!-- Icon -->
                            <div
                              class="relative last:after:hidden after:absolute after:top-2 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-1 after:bg-primary">
                              <div class="relative z-10 size-5 flex justify-center items-center">
                                <div
                                  class="size-5 rounded-full bg-primary-light border border-primary-dark inline-flex items-center justify-center">
                                  <i
                                    class="hgi hgi-stroke hgi-tick-02 text-primary-dark text-[10px] leading-[10px]"></i>
                                </div>
                              </div>
                            </div>
                            <!-- End Icon -->

                            <!-- Right Content -->
                            <div class="grow pt-0.5 pb-8">
                              <p class="font-semibold text-light-primary-text">
                                Processing
                              </p>
                              <p class="text-light-secondary-text text-sm leading-[22px]">
                                We’re currently reviewing your order details
                                and checking the availability of the items.
                                Hang tight — we’ll start packing soon!
                              </p>
                            </div>
                            <!-- End Right Content -->
                          </div>
                          <!-- End Item -->

                          <!-- Item -->
                          <div class="flex gap-x-6">
                            <!-- Left Content -->
                            <div class="min-h-[90px] text-end">
                              <p class="text-xs leading-[18px] w-[55px]">
                                ----:-------
                              </p>
                            </div>
                            <!-- End Left Content -->

                            <!-- Icon -->
                            <div
                              class="relative last:after:hidden after:absolute after:top-2 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-1 after:bg-gray-300">
                              <div class="relative z-10 size-5 flex justify-center items-center">
                                <div class="size-5 rounded-full bg-white border border-gray-300"></div>
                              </div>
                            </div>
                            <!-- End Icon -->

                            <!-- Right Content -->
                            <div class="grow pt-0.5 pb-8">
                              <p class="font-semibold text-light-primary-text">
                                Payment
                              </p>
                              <p class="text-light-secondary-text text-sm leading-[22px]">
                                Your payment is being securely processed and
                                verified. This may take a few moments. We’ll
                                notify you as soon as it's confirmed.
                              </p>
                            </div>
                            <!-- End Right Content -->
                          </div>
                          <!-- End Item -->

                          <!-- Item -->
                          <div class="flex gap-x-6">
                            <!-- Left Content -->
                            <div class="min-h-[90px] text-end">
                              <p class="text-xs leading-[18px] w-[55px]">
                                ----:-------
                              </p>
                            </div>
                            <!-- End Left Content -->

                            <!-- Icon -->
                            <div
                              class="relative last:after:hidden after:absolute after:top-2 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-1 after:bg-gray-300">
                              <div class="relative z-10 size-5 flex justify-center items-center">
                                <div class="size-5 rounded-full bg-white border border-gray-300"></div>
                              </div>
                            </div>
                            <!-- End Icon -->

                            <!-- Right Content -->
                            <div class="grow pt-0.5 pb-8">
                              <p class="font-semibold text-light-primary-text">
                                Packing
                              </p>
                              <p class="text-light-secondary-text text-sm leading-[22px]">
                                Our team is now carefully packing your items
                                to make sure everything arrives in perfect
                                condition. Quality is our priority!
                              </p>
                            </div>
                            <!-- End Right Content -->
                          </div>
                          <!-- End Item -->
                          <!-- Item -->
                          <div class="flex gap-x-6">
                            <!-- Left Content -->
                            <div class="min-h-[90px] text-end">
                              <p class="text-xs leading-[18px] w-[55px]">
                                ----:-------
                              </p>
                            </div>
                            <!-- End Left Content -->

                            <!-- Icon -->
                            <div
                              class="relative last:after:hidden after:absolute after:top-2 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-1 after:bg-gray-300">
                              <div class="relative z-10 size-5 flex justify-center items-center">
                                <div class="size-5 rounded-full bg-white border border-gray-300"></div>
                              </div>
                            </div>
                            <!-- End Icon -->

                            <!-- Right Content -->
                            <div class="grow pt-0.5 pb-8">
                              <p class="font-semibold text-light-primary-text">
                                Delivering
                              </p>
                              <p class="text-light-secondary-text text-sm leading-[22px]">
                                Your order is on the move! It’s currently
                                being delivered to your address. Keep an eye
                                out — it’s almost there.
                              </p>
                            </div>
                            <!-- End Right Content -->
                          </div>
                          <!-- End Item -->
                          <!-- Item -->
                          <div class="flex gap-x-6">
                            <!-- Left Content -->
                            <div class="min-h-[90px] text-end">
                              <p class="text-xs leading-[18px] w-[55px]">
                                ----:-------
                              </p>
                            </div>
                            <!-- End Left Content -->

                            <!-- Icon -->
                            <div
                              class="relative after:hidden after:absolute after:top-2 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-1 after:bg-gray-300">
                              <div class="relative z-10 size-5 flex justify-center items-center">
                                <div class="size-5 rounded-full bg-white border border-gray-300"></div>
                              </div>
                            </div>
                            <!-- End Icon -->

                            <!-- Right Content -->
                            <div class="grow pt-0.5 pb-8">
                              <p class="font-semibold text-light-primary-text">
                                Delivered
                              </p>
                              <p class="text-light-secondary-text text-sm leading-[22px]">
                                Your order has been successfully delivered.
                                We hope everything arrived safely and that
                                you love your purchase. Thank you for
                                choosing us!
                              </p>
                            </div>
                            <!-- End Right Content -->
                          </div>
                          <!-- End Item -->
                        </div>
                        <!-- End Timeline -->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- Timeline Table End -->

              <!-- Shipment Address Table Start -->
              <div class="order-history-table-wrapper border-gray-300 rounded-2xl border overflow-x-auto">
                <table class="w-full order-history-table">
                  <thead>
                    <tr class="border-b border-gray-300">
                      <th
                        class="text-left py-4 px-6 bg-gray-200 lg:text-xl lg:leading-[30px] text-lg leading-7 font-bold text-light-primary-text">
                        Shipment Address
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="lg:px-6 px-4 py-6">
                        <div>
                          <ul class="flex flex-col gap-y-5">
                            <li class="flex items-center gap-x-2.5 text-light-primary-text">
                              <span class="inline-flex items-center justify-center"><i
                                  class="hgi hgi-stroke hgi-user-square text-2xl leading-6"></i></span>
                              Leslie Alexander
                            </li>
                            <li class="flex items-center gap-x-2.5 text-light-primary-text">
                              <span class="inline-flex items-center justify-center"><i
                                  class="hgi hgi-stroke hgi-call text-2xl leading-6"></i></span>
                              (555) 123-4567
                            </li>
                            <li class="flex items-center gap-x-2.5 text-light-primary-text">
                              <span class="inline-flex items-center justify-center"><i
                                  class="hgi hgi-stroke hgi-mail-01 text-2xl leading-6"></i></span>
                              dolores.chambers@example.com
                            </li>
                            <li class="flex items-center gap-x-2.5 text-light-primary-text">
                              <span class="inline-flex items-center justify-center"><i
                                  class="hgi hgi-stroke hgi-location-06 text-2xl leading-6"></i></span>
                              1234 Elm Street, Springfield, CA, 90210,
                              United States
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- Shipment Address Table   End -->

              <!-- Order Items Table Start -->
              <div class="order-history-table-wrapper border-gray-300 rounded-2xl border overflow-x-auto">
                <table class="w-full order-history-table">
                  <thead>
                    <tr class="border-b border-gray-300">
                      <th
                        class="text-left py-4 px-6 bg-gray-200 lg:text-xl lg:leading-[30px] text-lg leading-7 font-bold text-light-primary-text">
                        Order Items
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="lg:px-6 px-4 pt-6">
                        <div>
                          <ul class="flex flex-col gap-y-4">
                            <li class="py-4 border-b border-gray-300 last:border-b-0 first:pt-0 last:pb-0">
                              <div class="flex flex-col md:flex-row gap-x-4">
                                <!-- img -->
                                <div class="w-[120px] h-[120px] bg-gray-200 rounded-lg mx-auto mb-4 md:mb-0">
                                  <img src="assets/images/apple-juice.png" alt="apple-juice"
                                    class="w-full h-full rounded-lg object-cover" />
                                </div>
                                <!-- img end -->

                                <div class="flex flex-col gap-y-2 flex-1">
                                  <!-- title Start -->
                                  <div class="flex items-center justify-between">
                                    <a href="#" class="text-light-primary-text font-semibold">
                                      Happy Bite Cookies – 300g
                                    </a>
                                    <div class="flex items-center gap-x-2">
                                      <p class="text-light-disabled-text line-through font-normal">
                                        $29.99
                                      </p>
                                      <p class="font-semibold text-light-primary-text">
                                        $27.99
                                      </p>
                                    </div>
                                  </div>
                                  <!-- title end -->
                                  <!-- Quantity Start -->
                                  <div class="flex items-center justify-between">
                                    <div class="flex flex-col gap-y-2">
                                      <p class="text-sm leading-[22px]">
                                        Grocery
                                      </p>
                                      <p class="text-sm leading-[22px]">
                                        Color: Black, Size: 250 ML
                                      </p>
                                    </div>
                                    <div>
                                      <p class="flex items-center gap-x-4">
                                        Quantity
                                        <span class="text-light-primary-text">:</span>
                                        <span class="text-light-primary-text">1</span>
                                      </p>
                                    </div>
                                  </div>
                                  <!-- Quantity End -->

                                  <!-- rating start -->
                                  <div class="flex items-center justify-between">
                                    <div class="rating-section flex items-center">
                                      <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                      </div>
                                      <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                    </div>
                                    <button
                                      class="inline-flex items-center justify-center bg-[rgba(255,193,7,0.16)] text-warning-dark py-px px-2 text-xs leading-[18px] font-normal rounded-md">
                                      Processing
                                    </button>
                                  </div>
                                  <!-- rating end -->
                                </div>
                              </div>
                            </li>
                            <li class="py-4 border-b border-gray-300 last:border-b-0 first:pt-0 last:pb-0">
                              <div class="flex flex-col md:flex-row gap-x-4">
                                <!-- img -->
                                <div class="w-[120px] h-[120px] bg-gray-200 rounded-lg mx-auto mb-4 md:mb-0">
                                  <img src="assets/images/home-3/eggs.png" alt="eggs"
                                    class="w-full h-full rounded-lg object-cover" />
                                </div>
                                <!-- img end -->

                                <div class="flex flex-col gap-y-2 flex-1">
                                  <!-- title Start -->
                                  <div class="flex items-center justify-between">
                                    <a href="#" class="text-light-primary-text font-semibold">
                                      Happy Bite Cookies – 300g
                                    </a>
                                    <div class="flex items-center gap-x-2">
                                      <p class="text-light-disabled-text line-through font-normal">
                                        $29.99
                                      </p>
                                      <p class="font-semibold text-light-primary-text">
                                        $27.99
                                      </p>
                                    </div>
                                  </div>
                                  <!-- title end -->
                                  <!-- Quantity Start -->
                                  <div class="flex items-center justify-between">
                                    <div class="flex flex-col gap-y-2">
                                      <p class="text-sm leading-[22px]">
                                        Grocery
                                      </p>
                                      <p class="text-sm leading-[22px]">
                                        Color: Black, Size: 250 ML
                                      </p>
                                    </div>
                                    <div>
                                      <p class="flex items-center gap-x-4">
                                        Quantity
                                        <span class="text-light-primary-text">:</span>
                                        <span class="text-light-primary-text">1</span>
                                      </p>
                                    </div>
                                  </div>
                                  <!-- Quantity End -->

                                  <!-- rating start -->
                                  <div class="flex items-center justify-between">
                                    <div class="rating-section flex items-center">
                                      <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                      </div>
                                      <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                    </div>
                                    <button
                                      class="inline-flex items-center justify-center bg-[rgba(255,193,7,0.16)] text-warning-dark py-px px-2 text-xs leading-[18px] font-normal rounded-md">
                                      Processing
                                    </button>
                                  </div>
                                  <!-- rating end -->
                                </div>
                              </div>
                            </li>
                            <li class="py-4 border-b border-gray-300 last:border-b-0 first:pt-0 last:pb-0">
                              <div class="flex flex-col md:flex-row gap-x-4">
                                <!-- img -->
                                <div class="w-[120px] h-[120px] bg-gray-200 rounded-lg mx-auto mb-4 md:mb-0">
                                  <img src="assets/images/vitamin-c.png" alt="vitamin-c"
                                    class="w-full h-full rounded-lg object-cover" />
                                </div>
                                <!-- img end -->

                                <div class="flex flex-col gap-y-2 flex-1">
                                  <!-- title Start -->
                                  <div class="flex items-center justify-between">
                                    <a href="#" class="text-light-primary-text font-semibold">
                                      Happy Bite Cookies – 300g
                                    </a>
                                    <div class="flex items-center gap-x-2">
                                      <p class="text-light-disabled-text line-through font-normal">
                                        $29.99
                                      </p>
                                      <p class="font-semibold text-light-primary-text">
                                        $27.99
                                      </p>
                                    </div>
                                  </div>
                                  <!-- title end -->
                                  <!-- Quantity Start -->
                                  <div class="flex items-center justify-between">
                                    <div class="flex flex-col gap-y-2">
                                      <p class="text-sm leading-[22px]">
                                        Grocery
                                      </p>
                                      <p class="text-sm leading-[22px]">
                                        Color: Black, Size: 250 ML
                                      </p>
                                    </div>
                                    <div>
                                      <p class="flex items-center gap-x-4">
                                        Quantity
                                        <span class="text-light-primary-text">:</span>
                                        <span class="text-light-primary-text">1</span>
                                      </p>
                                    </div>
                                  </div>
                                  <!-- Quantity End -->

                                  <!-- rating start -->
                                  <div class="flex items-center justify-between">
                                    <div class="rating-section flex items-center">
                                      <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                      </div>
                                      <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                    </div>
                                    <button
                                      class="inline-flex items-center justify-center bg-[rgba(255,193,7,0.16)] text-warning-dark py-px px-2 text-xs leading-[18px] font-normal rounded-md">
                                      Processing
                                    </button>
                                  </div>
                                  <!-- rating end -->
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="p-6">
                        <button
                          class="btn btn-large btn-primary outline py-[11px] w-full rounded-[80px] transition-colors duration-300 ease-in-out shadow-none">
                          Create another order with these items
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- Order Items Table End -->
              <!-- Order Information Table Start -->
              <div class="order-history-table-wrapper border-gray-300 rounded-2xl border overflow-x-auto">
                <table class="w-full order-history-table">
                  <thead>
                    <tr class="border-b border-gray-300">
                      <th
                        class="text-left py-4 px-6 bg-gray-200 lg:text-xl lg:leading-[30px] text-lg leading-7 font-bold text-light-primary-text">
                        Order Information
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="lg:px-6 px-4 py-6">
                        <div>
                          <ul class="flex flex-col gap-y-5 border-b border-gray-300 pb-5">
                            <li class="flex items-center justify-between">
                              <p class="text-light-secondary-text">Order</p>
                              <span class="text-light-primary-text">
                                65937
                              </span>
                            </li>
                            <li class="flex items-center justify-between">
                              <p class="text-light-secondary-text">
                                Order At
                              </p>
                              <span class="text-light-primary-text">
                                01 Jul, 2022
                              </span>
                            </li>
                            <li class="flex items-center justify-between">
                              <p class="text-light-secondary-text">
                                Subtotal (MRP)
                              </p>
                              <span class="text-light-primary-text">
                                $19
                              </span>
                            </li>
                            <li class="flex items-center justify-between">
                              <p class="text-light-secondary-text">
                                Discount Applied
                              </p>
                              <span class="text-error">-$1.15</span>
                            </li>
                            <li class="flex items-center justify-between">
                              <p class="text-light-secondary-text">
                                Rounding off
                              </p>
                              <span class="text-error">-$0.33</span>
                            </li>
                            <li class="flex items-center justify-between">
                              <p class="text-light-secondary-text">
                                Delivery Charge
                              </p>
                              <span class="text-success"> Free </span>
                            </li>
                          </ul>
                        </div>

                        <div class="flex items-center justify-between py-5 border-b border-gray-300">
                          <h5>Amount Payable</h5>
                          <h5>$40.00</h5>
                        </div>
                        <div>
                          <div class="flex items-center justify-between pt-10 gap-x-10">
                            <button
                              class="btn btn-large btn-error outline py-[11px] flex-1 rounded-[80px] transition-colors duration-300 ease-in-out shadow-none">
                              Cancel Order
                            </button>
                            <button
                              class="btn btn-large btn-primary outline py-[11px] flex-1 rounded-[80px] transition-colors duration-300 ease-in-out shadow-none">
                              Download your invoice
                            </button>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- Order Information Table End -->
            </div>
          </div>

          <div class="menu-tab-pane hidden" id="address">
            <div class="flex items-center justify-between mb-6">
              <h3 class="text-light-primary-text">Address</h3>
              <button class="btn btn-primary btn-large py-[11px] rounded-[80px] add-new-address-button">
                Add New Address
              </button>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6" id="my-dashboard-addresses-container">
              <p class="text-light-secondary-text p-6">Loading addresses...</p>
            </div>
          </div>
          <div class="menu-tab-pane hidden" id="add-address">
            <div class="flex items-center gap-x-6 mb-6">
              <button class="btn btn-default outline size-12 rounded-full shadow-none add-new-address-back-button">
                <i class="hgi hgi-stroke hgi-arrow-left-02 text-2xl leading-6"></i>
              </button>
              <h4 class="text-light-primary-text">Add New Address</h4>
            </div>
            <!-- Shipping Address Start -->
            <div class="border border-gray-300 rounded-2xl">
              <div class="py-4 px-6 bg-gray-200 rounded-t-2xl">
                <h5 class="text-light-primary-text">Shipping Address</h5>
              </div>
              <div class="px-6 py-6">
                <form id="add-address-form" class="flex flex-col gap-y-6">
                  <div class="grid xl:grid-cols-2 md:grid-cols-2 grid-cols-1 md:gap-x-4 gap-x-0 gap-y-6">
                    <div class="xl:col-span-1 md:col-span-1 col-span-1">
                      <div class="relative w-full">
                        <input type="text" id="full_name"
                          class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                          placeholder="Full Name" />
                        <label for="full_name"
                          class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">Full
                          Name</label>
                      </div>
                    </div>
                    <div class="xl:col-span-1 md:col-span-1 col-span-1">
                      <div class="relative w-full">
                        <input type="tel" id="phone_number"
                          class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                          placeholder="Phone Number" />
                        <label for="phone_number"
                          class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">Phone
                          Number</label>
                      </div>
                    </div>
                  </div>

                  <div class="grid xl:grid-cols-2 md:grid-cols-2 grid-cols-1 md:gap-x-4 gap-x-0 gap-y-6">
                    <div class="xl:col-span-1 md:col-span-1 col-span-1">
                      <div class="relative w-full">
                        <input type="tel" id="alternate_mobile"
                          class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                          placeholder="Alternative Mobile Number" />
                        <label for="alternate_mobile"
                          class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">Alternative
                          Mobile Number</label>
                      </div>
                    </div>
                    <div class="xl:col-span-1 md:col-span-1 col-span-1">
                      <div class="relative w-full">
                        <input type="text" id="pincode"
                          class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                          placeholder="Pin Code" />
                        <label for="pincode"
                          class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">Pin
                          Code</label>
                      </div>
                    </div>
                  </div>

                  <div class="grid xl:grid-cols-12 lg:grid-cols-2 grid-cols-1 md:gap-x-4 gap-x-0 gap-y-6 w-full">
                    <div class="grid grid-cols-12 gap-x-4 gap-y-6 w-full col-span-6">
                      <div class="md:col-span-12 col-span-12">
                        <div class="relative w-full h-full">
                          <select id="country_region" class="address-select label">
                            <option value="1">United States</option>
                            <option value="2">Canada</option>
                            <option value="3">United Kingdom</option>
                            <option value="4">Australia</option>
                            <option value="5">New Zealand</option>
                            <option value="6">South Africa</option>
                            <option value="7">India</option>
                            <option value="8">Pakistan</option>
                            <option value="9">Bangladesh</option>
                            <option value="10">Sri Lanka</option>
                          </select>
                          <label for="country_region" class="nice-select-label">Country / Region</label>
                        </div>
                      </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-4 gap-y-6 w-full col-span-6">
                      <div class="md:col-span-6 col-span-12">
                        <div class="relative w-full">
                          <input type="text" id="state"
                            class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                            placeholder="State" />
                          <label for="state"
                            class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">State</label>
                        </div>
                      </div>
                      <div class="md:col-span-6 col-span-12">
                        <div class="relative w-full">
                          <input type="text" id="city"
                            class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                            placeholder="City" />
                          <label for="city"
                            class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">City</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Address Line 1 -->
                  <div class="relative w-full">
                    <input type="text" id="address_line1"
                      class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                      placeholder="Address Line 1" />
                    <label for="address_line1"
                      class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">Address
                      Line 1</label>
                  </div>

                  <!-- Address Line 2 -->
                  <div class="relative w-full">
                    <input type="text" id="address_line2"
                      class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                      placeholder="Address Line 2" />
                    <label for="address_line2"
                      class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">Address
                      Line 2</label>
                  </div>

                  <!-- Landmark -->
                  <div class="relative w-full">
                    <input type="text" id="landmark"
                      class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                      placeholder="Landmark" />
                    <label for="landmark"
                      class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">Landmark</label>
                  </div>

                  <!-- Delivery Schedule -->

                  <div>
                    <p class="font-semibold text-light-disabled-text mb-2">
                      Address Type
                    </p>
                    <!-- Radio -->
                    <div class="flex flex-col lg:flex-row gap-y-4 gap-x-4">
                      <label class="flex items-center cursor-pointer">
                        <!-- custom radio -->
                        <span
                          class="has-[input:checked]:hover:bg-[#00AB55]/8 flex items-center justify-center w-10 h-10 bg-transparent rounded-full hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out">
                          <span class="relative inline-flex w-5 h-5 items-center justify-center">
                            <input checked value="HOME" type="radio" name="address-type"
                              class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-primary border-gray-300 rounded-full bg-white transition-all" />

                            <!-- radio inner dot -->
                            <span
                              class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-2 h-2 rounded-full bg-primary opacity-0 scale-0 peer-checked:opacity-100 peer-checked:scale-100 transition-all"></span>
                          </span>
                        </span>

                        <!-- label text -->
                        <span class="text-light-primary-text text-sm leading-[22px] font-normal">
                          Home Address
                        </span>
                      </label>
                      <label class="flex items-center cursor-pointer">
                        <!-- custom radio -->
                        <span
                          class="has-[input:checked]:hover:bg-[#00AB55]/8 flex items-center justify-center w-10 h-10 bg-transparent rounded-full hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out">
                          <span class="relative inline-flex w-5 h-5 items-center justify-center">
                            <input type="radio" value="OFFICE" name="address-type"
                              class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-primary border-gray-300 rounded-full bg-white transition-all" />

                            <!-- radio inner dot -->
                            <span
                              class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-2 h-2 rounded-full bg-primary opacity-0 scale-0 peer-checked:opacity-100 peer-checked:scale-100 transition-all"></span>
                          </span>
                        </span>

                        <!-- label text -->
                        <span class="text-light-primary-text text-sm leading-[22px] font-normal">
                          Office Address
                        </span>
                      </label>
                      <label class="flex items-center cursor-pointer">
                        <!-- custom radio -->
                        <span
                          class="has-[input:checked]:hover:bg-[#00AB55]/8 flex items-center justify-center w-10 h-10 bg-transparent rounded-full hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out">
                          <span class="relative inline-flex w-5 h-5 items-center justify-center">
                            <input type="radio" value="OTHER" name="address-type"
                              class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-primary border-gray-300 rounded-full bg-white transition-all" />

                            <!-- radio inner dot -->
                            <span
                              class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-2 h-2 rounded-full bg-primary opacity-0 scale-0 peer-checked:opacity-100 peer-checked:scale-100 transition-all"></span>
                          </span>
                        </span>

                        <!-- label text -->
                        <span class="text-light-primary-text text-sm leading-[22px] font-normal">
                          Others
                        </span>
                      </label>
                    </div>
                  </div>
                  <!-- Button -->
                  <div class="flex items-center md:justify-end gap-x-6">
                    <button type="button"
                      class="btn btn-default outline btn-large md:px-[33px] w-[45%] md:w-auto py-2.5 rounded-[100px] shadow-none">
                      Cancel
                    </button>
                    <button type="submit"
                      class="btn btn-primary btn-large md:px-[41px] w-[45%] md:w-auto py-[11px] rounded-[100px]">
                      Save
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <!-- Shipping Address End -->
          </div>
          <div class="menu-tab-pane hidden" id="edit-address">
            <div class="flex items-center gap-x-6 mb-6">
              <button class="btn btn-default outline size-12 rounded-full shadow-none add-new-address-back-button">
                <i class="hgi hgi-stroke hgi-arrow-left-02 text-2xl leading-6"></i>
              </button>
              <h4 class="text-light-primary-text">Edit Address</h4>
            </div>
            <!-- EDIT Address Start -->
            <div class="border border-gray-300 rounded-2xl">
              <div class="py-4 px-6 bg-gray-200 rounded-t-2xl">
                <h5 class="text-light-primary-text">Shipping Address</h5>
              </div>
              <div class="px-6 py-6">
                <form id="edit-address-form" class="flex flex-col gap-y-6">
                  <input type="hidden" id="edit_address_id" />
                  <div class="grid xl:grid-cols-2 md:grid-cols-2 grid-cols-1 md:gap-x-4 gap-x-0 gap-y-6">
                    <div class="xl:col-span-1 md:col-span-1 col-span-1">
                      <div class="relative w-full">
                        <input type="text" id="edit_full_name"
                          class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                          placeholder="Full Name" />
                        <label for="edit_full_name"
                          class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">Full
                          Name</label>
                      </div>
                    </div>
                    <div class="xl:col-span-1 md:col-span-1 col-span-1">
                      <div class="relative w-full">
                        <input type="tel" id="edit_phone_number"
                          class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                          placeholder="Phone Number" />
                        <label for="edit_phone_number"
                          class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">Phone
                          Number</label>
                      </div>
                    </div>
                  </div>

                  <div class="grid xl:grid-cols-2 md:grid-cols-2 grid-cols-1 md:gap-x-4 gap-x-0 gap-y-6">
                    <div class="xl:col-span-1 md:col-span-1 col-span-1">
                      <div class="relative w-full">
                        <input type="tel" id="edit_alternate_mobile"
                          class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                          placeholder="Alternative Mobile Number" />
                        <label for="edit_alternate_mobile"
                          class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">Alternative
                          Mobile Number</label>
                      </div>
                    </div>
                    <div class="xl:col-span-1 md:col-span-1 col-span-1">
                      <div class="relative w-full">
                        <input type="text" id="edit_pincode"
                          class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                          placeholder="Pin Code" />
                        <label for="edit_pincode"
                          class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">Pin
                          Code</label>
                      </div>
                    </div>
                  </div>

                  <div class="grid xl:grid-cols-12 lg:grid-cols-2 grid-cols-1 md:gap-x-4 gap-x-0 gap-y-6 w-full">
                    <div class="grid grid-cols-12 gap-x-4 gap-y-6 w-full col-span-6">
                      <div class="md:col-span-12 col-span-12">
                        <div class="relative w-full h-full">
                          <select id="edit_country_region" class="address-select label changed">
                            <option value="1">United States</option>
                            <option value="2">Canada</option>
                            <option value="3">United Kingdom</option>
                            <option value="4">Australia</option>
                            <option value="5">New Zealand</option>
                            <option value="6">South Africa</option>
                            <option value="7">India</option>
                            <option value="8">Pakistan</option>
                            <option value="9">Bangladesh</option>
                            <option value="10">Sri Lanka</option>
                          </select>
                          <label for="edit_country_region" class="nice-select-label">Country / Region</label>
                        </div>
                      </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-4 gap-y-6 w-full col-span-6">
                      <div class="md:col-span-6 col-span-12">
                        <div class="relative w-full">
                          <input type="text" id="edit_state"
                            class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                            placeholder="State" />

                          <label for="edit_state"
                            class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                            State
                          </label>
                        </div>
                      </div>
                      <div class="md:col-span-6 col-span-12">
                        <div class="relative w-full">
                          <input type="text" id="edit_city"
                            class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                            placeholder="City" />

                          <label for="edit_city"
                            class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                            City
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Address Line 1 -->
                  <div class="relative w-full">
                    <input type="text" id="edit_address_line1"
                      class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                      placeholder="Address Line 1" />
                    <label for="edit_address_line1"
                      class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">Address
                      Line 1</label>
                  </div>

                  <!-- Address Line 2 -->
                  <div class="relative w-full">
                    <input type="text" id="edit_address_line2"
                      class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                      placeholder="Address Line 2" />
                    <label for="edit_address_line2"
                      class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">Address
                      Line 2</label>
                  </div>

                  <!-- Landmark -->
                  <div class="relative w-full">
                    <input type="text" id="edit_landmark"
                      class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                      placeholder="Landmark" />
                    <label for="edit_landmark"
                      class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">Landmark</label>
                  </div>


                  <!-- Delivery Schedule -->

                  <div>
                    <p class="font-semibold text-light-disabled-text mb-2">
                      Delivery Schedule
                    </p>
                    <!-- Radio -->
                    <div class="flex flex-col lg:flex-row gap-y-4 gap-x-4">
                      <label class="flex items-center cursor-pointer">
                        <!-- custom radio -->
                        <span
                          class="has-[input:checked]:hover:bg-[#00AB55]/8 flex items-center justify-center w-10 h-10 bg-transparent rounded-full hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out">
                          <span class="relative inline-flex w-5 h-5 items-center justify-center">
                            <input type="radio" name="edit-address-type" value="HOME"
                              class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-primary border-gray-300 rounded-full bg-white transition-all" />

                            <!-- radio inner dot -->
                            <span
                              class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-2 h-2 rounded-full bg-primary opacity-0 scale-0 peer-checked:opacity-100 peer-checked:scale-100 transition-all"></span>
                          </span>
                        </span>

                        <!-- label text -->
                        <span class="text-light-primary-text text-sm leading-[22px] font-normal">
                          Home Address
                        </span>
                      </label>
                      <label class="flex items-center cursor-pointer">
                        <!-- custom radio -->
                        <span
                          class="has-[input:checked]:hover:bg-[#00AB55]/8 flex items-center justify-center w-10 h-10 bg-transparent rounded-full hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out">
                          <span class="relative inline-flex w-5 h-5 items-center justify-center">
                            <input type="radio" name="edit-address-type" value="OFFICE"
                              class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-primary border-gray-300 rounded-full bg-white transition-all" />

                            <!-- radio inner dot -->
                            <span
                              class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-2 h-2 rounded-full bg-primary opacity-0 scale-0 peer-checked:opacity-100 peer-checked:scale-100 transition-all"></span>
                          </span>
                        </span>

                        <!-- label text -->
                        <span class="text-light-primary-text text-sm leading-[22px] font-normal">
                          Office Address
                        </span>
                      </label>
                      <label class="flex items-center cursor-pointer">
                        <!-- custom radio -->
                        <span
                          class="has-[input:checked]:hover:bg-[#00AB55]/8 flex items-center justify-center w-10 h-10 bg-transparent rounded-full hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out">
                          <span class="relative inline-flex w-5 h-5 items-center justify-center">
                            <input type="radio" name="edit-address-type" value="OTHER"
                              class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-primary border-gray-300 rounded-full bg-white transition-all" />

                            <!-- radio inner dot -->
                            <span
                              class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-2 h-2 rounded-full bg-primary opacity-0 scale-0 peer-checked:opacity-100 peer-checked:scale-100 transition-all"></span>
                          </span>
                        </span>

                        <!-- label text -->
                        <span class="text-light-primary-text text-sm leading-[22px] font-normal">
                          Others
                        </span>
                      </label>
                    </div>
                  </div>

                  <!-- Default Checkbox -->
                  <div class="flex items-center mt-2">
                    <input type="checkbox" id="edit_is_default"
                      class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary focus:ring-2">
                    <label for="edit_is_default" class="ml-2 text-sm font-medium text-gray-900">Set as Default
                      Address</label>
                  </div>

                  <!-- Button -->
                  <div class="flex items-center md:justify-end gap-x-6">
                    <button type="button"
                      class="btn btn-default outline btn-large md:px-[33px] w-[45%] md:w-auto py-2.5 rounded-[100px] shadow-none">
                      Cancel
                    </button>
                    <button type="submit"
                      class="btn btn-primary btn-large md:px-[41px] w-[45%] md:w-auto py-[11px] rounded-[100px]">
                      Update
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <!-- EDIT Address End -->
          </div>
          <div class="menu-tab-pane hidden" id="profile">
            <div class="flex flex-col gap-y-6">
              <div class="mb-6">
                <h3 class="text-light-primary-text">My Account</h3>
              </div>
              <!-- Profile Information Start -->
              <div class="border border-gray-300 rounded-2xl">
                <div class="py-4 px-6 bg-gray-200 rounded-t-2xl">
                  <h5 class="text-light-primary-text">
                    Personal Information
                  </h5>
                </div>
                <div class="px-6 py-6">
                  <div class="flex flex-col gap-y-6">
                    <div class="flex items-center justify-center">
                      <div class="w-[144px] h-[144px] relative">
                        <img id="profileImagePreview" src="assets/images/avatar.png" alt="Profile Preview"
                          class="w-full h-full rounded-full object-cover">
                        <label
                          class="absolute bottom-0 right-0 flex items-center justify-center w-8 h-8 bg-primary rounded-full cursor-pointer hover:bg-primary-dark">
                          <input type="file" id="ProfileImage" class="hidden" accept="image/*" />
                          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M3 8C3 8.55 3.45 9 4 9C4.55 9 5 8.55 5 8V6H7C7.55 6 8 5.55 8 5C8 4.45 7.55 4 7 4H5V2C5 1.45 4.55 1 4 1C3.45 1 3 1.45 3 2V4H1C0.45 4 0 4.45 0 5C0 5.55 0.45 6 1 6H3V8Z"
                              fill="#495057" />
                            <circle cx="13" cy="14" r="3" fill="#495057" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M17.83 6H21C22.1 6 23 6.9 23 8V20C23 21.1 22.1 22 21 22H5C3.9 22 3 21.1 3 20V9.72C3.3 9.89 3.63 10 4 10C5.1 10 6 9.1 6 8V7H7C8.1 7 9 6.1 9 5C9 4.63 8.89 4.3 8.72 4H15.12C15.68 4 16.22 4.24 16.59 4.65L17.83 6ZM8 14C8 16.76 10.24 19 13 19C15.76 19 18 16.76 18 14C18 11.24 15.76 9 13 9C10.24 9 8 11.24 8 14Z"
                              fill="#495057" />
                          </svg>                          
                        </label>
                      </div>
                    </div>
                    <form id="updateProfileForm" class="flex flex-col gap-y-6">
                      <div class="grid xl:grid-cols-2 md:grid-cols-2 grid-cols-1 md:gap-x-4 gap-x-0 gap-y-6">
                        <div class="xl:col-span-1 md:col-span-1 col-span-1">
                          <div class="relative w-full">
                            <input type="text" id="FirstName"
                              class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                              placeholder="First Name" />

                            <label for="FirstName"
                              class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                              First Name
                            </label>
                          </div>
                        </div>
                        <div class="xl:col-span-1 md:col-span-1 col-span-1">
                          <div class="relative w-full">
                            <input type="text" id="LastName"
                              class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                              placeholder="Last Name" />

                            <label for="LastName"
                              class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                              Last Name
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="grid xl:grid-cols-2 md:grid-cols-2 grid-cols-1 md:gap-x-4 gap-x-0 gap-y-6">
                        <div class="xl:col-span-1 md:col-span-1 col-span-1">
                          <div class="relative w-full">
                            <input type="tel" id="PhoneNumber"
                              class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                              placeholder="Phone Number" />

                            <label for="PhoneNumber"
                              class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                              Phone Number
                            </label>
                          </div>
                        </div>
                         <div class="xl:col-span-1 md:col-span-1 col-span-1">
                          <div class="relative w-full">
                            <input type="date" id="DateOfBirth"
                              class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                              placeholder="Date of Birth" />
                            <label for="DateOfBirth"
                              class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                              Date of Birth
                            </label>
                          </div>
                        </div>
                       
                      </div>
                      <div class="grid xl:grid-cols-2 md:grid-cols-2 grid-cols-1 md:gap-x-4 gap-x-0 gap-y-6">
                        
                        <div class="xl:col-span-1 md:col-span-1 col-span-1">
                          <div class="relative w-full flex items-center h-full gap-x-4">
                            <label class="flex items-center">
                              <input type="radio" name="Gender" value="Male" class="form-radio h-4 w-4 text-primary">
                              <span class="ml-2 text-light-primary-text">Male</span>
                            </label>
                            <label class="flex items-center">
                              <input type="radio" name="Gender" value="Female" class="form-radio h-4 w-4 text-primary">
                              <span class="ml-2 text-light-primary-text">Female</span>
                            </label>
                            <label class="flex items-center">
                              <input type="radio" name="Gender" value="Other" class="form-radio h-4 w-4 text-primary">
                              <span class="ml-2 text-light-primary-text">Other</span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <!-- Button -->
                      <div class="text-end">
                        <button type="submit" id="updateProfileBtn"
                          class="btn btn-primary btn-large md:px-[42px] w-[45%] md:w-auto py-[11px] rounded-[100px]">
                          Save
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="border border-gray-300 rounded-2xl">
                <div class="py-4 px-6 bg-gray-200 rounded-t-2xl">
                  <h5 class="text-light-primary-text">Password Change</h5>
                </div>
                <div class="px-6 py-6">
                <form id="change-password-form" class="flex flex-col gap-y-6">
                    <div class="relative w-full">
                      <input type="password" id="password"
                        class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                        placeholder="Password" />

                      <label for="password"
                        class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                        Password
                      </label>
                    </div>
                    <div class="relative w-full">
                      <input type="password" id="new_password"
                        class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                        placeholder="New Password" />

                      <label for="new_password"
                        class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                        New Password
                      </label>
                    </div>
                    <div class="relative w-full">
                      <input type="password" id="confirm_new_password"
                        class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                        placeholder="Confirm New Password" />

                      <label for="confirm_new_password"
                        class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                        Confirm New Password
                      </label>
                    </div>
                    <!-- Button -->
                    <div class="text-end">
                    <button type="submit" id="change-password-btn"
                      class="btn btn-primary btn-large md:px-[22px] w-[45%] md:w-auto py-[11px] rounded-[100px] transition-all">
                        Save Changes
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- Profile Information End -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ========== My Account Section End ========== -->

<!-- Order Details Modal -->
<div id="orderDetailsModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center p-4">
    <div class="bg-white rounded-2xl shadow-lg w-full max-w-xl max-h-[90vh] flex flex-col">
        <div class="flex justify-between items-center p-4 border-b sticky top-0 bg-white rounded-t-2xl z-10">
            <h4 class="text-lg font-semibold" id="modalOrderNumber">Order Details</h4>
            <button id="closeOrderModalBtn" class="text-gray-500 hover:text-gray-800">
                <i class="fa-solid fa-times text-xl"></i>
            </button>
        </div>
        <div id="orderDetailsModalContent" class="p-6 overflow-y-auto">
            <!-- Dynamic content will be loaded here -->
            <div class="flex justify-center items-center py-10">
                <div class="w-8 h-8 border-4 border-dashed rounded-full animate-spin border-primary"></div>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>