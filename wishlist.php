<?php include 'header.php'; ?>

    <!-- ========== Breadcrumb Section Start ========== -->
    <div class="container py-12">
      <div class="breadcrumb">
        <ul>
          <li>
            <a href='index.html'><span class="inline-flex items-center justify-center">
                <i
                  class="hgi hgi-stroke hgi-home-01 text-2xl leading-6"
                ></i></span
              >Home</a
            >
          </li>
          <li class="text-light-disabled-text">&#8226;</li>
          <li><span class="text-sm leading-[22px]">Wishlist</span></li>
        </ul>
      </div>
    </div>
    <!-- ========== Breadcrumb Section End ========== -->
    <!-- ========== Wishlist Section Start ========== -->
    <div class="pb-[70px]">
      <div class="container">
        <div
          class="flex items-start md:items-center justify-between flex-col md:flex-row gap-y-5 pb-6"
        >
          <div>
            <h3>Product Wishlist</h3>
          </div>
          <div
            class="flex items-center justify-between w-full md:w-auto md:justify-start md:gap-x-12"
          >
            <p id="wishlist-item-count" class="font-semibold text-light-primary-text">
              0 items
            </p>
            <a class='btn btn-primary btn-large py-[11px] px-6 rounded-[80px]' href='cart-single-vendor.html'>
              <span class="inline-flex items-center justify-center">
                <i
                  class="hgi hgi-stroke hgi-shopping-cart-02 text-2xl leading-6"
                ></i>
              </span>
              Add to Cart
            </a>
          </div>
        </div>

        <div class="grid grid-cols-12">
          <div class="col-span-12">
            <div
              class="wishlist-table-wrapper border-gray-300 rounded-2xl border overflow-x-auto"
            >
              <table class="w-full wishlist-table">
                <thead class="bg-gray-200">
                  <tr>
                    <th class="pl-4 py-2.5 product-checkbox">
                      <div
                        class="has-[input:checked]:hover:bg-primary/8 flex items-center justify-center w-10 h-10 bg-transparent rounded-full hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                      >
                        <label
                          class="relative inline-flex w-5 h-5 cursor-pointer items-center justify-center"
                        >
                          <!-- Checkbox Input -->
                          <input
                            type="checkbox"
                            class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all"
                          />

                          <!-- Checkbox Icon -->
                          <span
                            class="absolute inset-0 inline-flex items-center justify-center text-white opacity-0 peer-checked:opacity-100 transition-all"
                          >
                            <i
                              class="hgi hgi-stroke hgi-tick-02 text-[18px] leading-[18px]"
                            ></i>
                          </span>
                        </label>
                      </div>
                    </th>
                    <th class="text-left font-semibold product">
                      <p class="product-name">Product</p>
                    </th>
                    <th class="text-left py-2.5 font-semibold product-stock">
                      Stock Status
                    </th>
                    <th
                      class="text-left lg:text-center xl:text-left py-2.5 font-semibold product-price"
                    >
                      Price
                    </th>
                    <!-- <th
                      class="text-left lg:text-center xl:text-left py-2.5 font-semibold product-quantity"
                    >
                      Quantity
                    </th> -->
                    <th
                      class="text-left lg:text-center xl:text-left py-2.5 font-semibold product-actions"
                    >
                      Buy Action
                    </th>
                    <th
                      class="text-left py-2.5 font-semibold pr-4 product-remove"
                    >
                      Remove
                    </th>
                  </tr>
                </thead>
                <tbody id="wishlist-tbody">
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ========== Wishlist Section End ========== -->

    <?php include 'footer.php'; ?>