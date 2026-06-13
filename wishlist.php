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
            <p class="font-semibold text-light-primary-text">
              2 items is selected
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
                    <th
                      class="text-left lg:text-center xl:text-left py-2.5 font-semibold product-quantity"
                    >
                      Quantity
                    </th>
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
                <tbody>
                  <tr class="py-4">
                    <td class="py-4 pl-4 hidden lg:table-cell product-checkbox">
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
                    </td>

                    <td data-title="Product" class="py-4 px-3 lg:px-0 product">
                      <div
                        class="flex gap-x-4 gap-y-4 flex-col md:flex-row items-end md:items-start"
                      >
                        <div
                          class="product-thumbnail max-w-[100px] h-[100px] rounded-2xl bg-gray-300"
                        >
                          <img
                            src="assets/images/ground-nuts-oil.png"
                            alt="vitamin-c"
                            class="rounded-2xl object-cover w-full h-full"
                          />
                        </div>
                        <div
                          class="flex flex-col gap-y-3 items-end md:items-start"
                        >
                          <a class='text-light-primary-text font-semibold truncate hover:text-primary transition-colors duration-300' href='product-detail.php'>
                            Veggie Bloom Tomatoes
                          </a>
                          <p
                            class="text-sm leading-[22px] font-medium text-primary product-category"
                          >
                            Healthcare
                          </p>
                          <div class="rating-section flex items-center">
                            <div
                              class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                            >
                              <div
                                style="width: 80%"
                                class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                              ></div>
                            </div>
                            <span
                              class="text-sm leading-[22px] font-normal inline-block ml-1"
                              >(118)</span
                            >
                          </div>
                        </div>
                      </div>
                    </td>
                    <td
                      data-title="Stock"
                      class="capitalize py-4 px-3 lg:px-0 product-stock"
                    >
                      <span class="text-light-primary-text font-semibold"
                        >2 in stock</span
                      >
                    </td>
                    <td
                      data-title="Price"
                      class="capitalize py-4 px-3 lg:px-0 product-price"
                    >
                      <div
                        class="flex items-center flex-row lg:flex-col xl:flex-row gap-x-3"
                      >
                        <span
                          class="text-light-primary-text font-semibold product-offer-price"
                          >$27.49</span
                        >
                        <span
                          class="line-through text-light-disabled-text font-normal"
                          >$29.95</span
                        >
                      </div>
                    </td>
                    <td
                      data-title="Quantity"
                      class="text-left lg:text-center xl:text-left capitalize py-4 px-3 lg:px-0 product-quantity"
                    >
                      <div
                        class="border border-gray-300 inline-flex items-center justify-center rounded-[80px] max-w-[108px] py-2.5 px-4"
                      >
                        <button
                          class="inline-flex items-center justify-center hover:text-primary"
                        >
                          <i
                            class="hgi hgi-stroke hgi-remove-circle text-xl leading-6"
                          ></i>
                        </button>
                        <input
                          type="text"
                          readonly
                          value="1"
                          class="border-0 w-full grow text-center focus:outline-none font-semibold text-light-primary-text"
                        />

                        <button
                          class="inline-flex items-center justify-center hover:text-primary"
                        >
                          <i
                            class="hgi hgi-stroke hgi-add-circle text-xl leading-6"
                          ></i>
                        </button>
                      </div>
                    </td>
                    <td
                      data-title="Buy Action"
                      class="capitalize py-4 px-3 lg:px-0 product-actions"
                    >
                      <div
                        class="flex items-center flex-row lg:flex-col xl:flex-row gap-x-2 md:gap-4"
                      >
                        <button
                          class="btn btn-warning px-4 md:px-[22px] rounded-[80px] font-semibold py-[11px] md:text-base md:leading-[26px] text-[13px] leading-[22px] product-buy-now"
                        >
                          Buy Now
                        </button>
                        <a class='btn btn-primary font-semibold md:px-6 px-2.5 py-[11px] rounded-[80px] md:text-base md:leading-[26px] text-[13px] leading-[22px] product-add-to-cart' href='cart-single-vendor.html'>
                          <span class="inline-flex items-center justify-center"
                            ><i
                              class="hgi hgi-stroke hgi-shopping-cart-02 md:text-2xl text-xl md:leading-6 leading-5"
                            ></i
                          ></span>
                          Add to Cart
                        </a>
                      </div>
                    </td>
                    <td
                      data-title="Remove"
                      class="capitalize text-center py-4 px-3 lg:px-0 pr-4 product-remove"
                    >
                      <button>
                        <span class="inline-flex items-center justify-center"
                          ><i
                            class="hgi hgi-stroke hgi-delete-01 text-2xl leading-6"
                          ></i
                        ></span>
                      </button>
                    </td>
                  </tr>
                  <tr class="py-4">
                    <td class="py-4 pl-4 hidden lg:table-cell product-checkbox">
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
                    </td>

                    <td data-title="Product" class="py-4 px-3 lg:px-0 product">
                      <div
                        class="flex gap-x-4 gap-y-4 flex-col md:flex-row items-end md:items-start"
                      >
                        <div
                          class="product-thumbnail max-w-[100px] h-[100px] rounded-2xl bg-gray-300"
                        >
                          <img
                            src="assets/images/bp-machine.png"
                            alt="vitamin-c"
                            class="rounded-2xl object-cover w-full h-full"
                          />
                        </div>
                        <div
                          class="flex flex-col gap-y-3 items-end md:items-start"
                        >
                          <a class='text-light-primary-text font-semibold truncate hover:text-primary transition-colors duration-300' href='product-detail.php'>
                            Veggie Bloom Tomatoes
                          </a>
                          <p
                            class="text-sm leading-[22px] font-medium text-primary product-category"
                          >
                            Healthcare
                          </p>
                          <div class="rating-section flex items-center">
                            <div
                              class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                            >
                              <div
                                style="width: 80%"
                                class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                              ></div>
                            </div>
                            <span
                              class="text-sm leading-[22px] font-normal inline-block ml-1"
                              >(118)</span
                            >
                          </div>
                        </div>
                      </div>
                    </td>
                    <td
                      data-title="Stock"
                      class="capitalize py-4 px-3 lg:px-0 product-stock"
                    >
                      <span class="text-light-primary-text font-semibold"
                        >2 in stock</span
                      >
                    </td>
                    <td
                      data-title="Price"
                      class="capitalize py-4 px-3 lg:px-0 product-price"
                    >
                      <div
                        class="flex items-center flex-row lg:flex-col xl:flex-row gap-x-3"
                      >
                        <span
                          class="text-light-primary-text font-semibold product-offer-price"
                          >$27.49</span
                        >
                        <span
                          class="line-through text-light-disabled-text font-normal"
                          >$29.95</span
                        >
                      </div>
                    </td>
                    <td
                      data-title="Quantity"
                      class="text-left lg:text-center xl:text-left capitalize py-4 px-3 lg:px-0 product-quantity"
                    >
                      <div
                        class="border border-gray-300 inline-flex items-center justify-center rounded-[80px] max-w-[108px] py-2.5 px-4"
                      >
                        <button
                          class="inline-flex items-center justify-center hover:text-primary"
                        >
                          <i
                            class="hgi hgi-stroke hgi-remove-circle text-xl leading-6"
                          ></i>
                        </button>
                        <input
                          type="text"
                          readonly
                          value="1"
                          class="border-0 w-full grow text-center focus:outline-none font-semibold text-light-primary-text"
                        />

                        <button
                          class="inline-flex items-center justify-center hover:text-primary"
                        >
                          <i
                            class="hgi hgi-stroke hgi-add-circle text-xl leading-6"
                          ></i>
                        </button>
                      </div>
                    </td>
                    <td
                      data-title="Buy Action"
                      class="capitalize py-4 px-3 lg:px-0 product-actions"
                    >
                      <div
                        class="flex items-center flex-row lg:flex-col xl:flex-row gap-x-2 md:gap-4"
                      >
                        <button
                          class="btn btn-warning px-4 md:px-[22px] rounded-[80px] font-semibold py-[11px] md:text-base md:leading-[26px] text-[13px] leading-[22px] product-buy-now"
                        >
                          Buy Now
                        </button>
                        <a class='btn btn-primary font-semibold md:px-6 px-2.5 py-[11px] rounded-[80px] md:text-base md:leading-[26px] text-[13px] leading-[22px] product-add-to-cart' href='cart-single-vendor.html'>
                          <span class="inline-flex items-center justify-center"
                            ><i
                              class="hgi hgi-stroke hgi-shopping-cart-02 md:text-2xl text-xl md:leading-6 leading-5"
                            ></i
                          ></span>
                          Add to Cart
                        </a>
                      </div>
                    </td>
                    <td
                      data-title="Remove"
                      class="capitalize text-center py-4 px-3 lg:px-0 pr-4 product-remove"
                    >
                      <button>
                        <span class="inline-flex items-center justify-center"
                          ><i
                            class="hgi hgi-stroke hgi-delete-01 text-2xl leading-6"
                          ></i
                        ></span>
                      </button>
                    </td>
                  </tr>
                  <tr class="py-4">
                    <td class="py-4 pl-4 hidden lg:table-cell product-checkbox">
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
                    </td>

                    <td data-title="Product" class="py-4 px-3 lg:px-0 product">
                      <div
                        class="flex gap-x-4 gap-y-4 flex-col md:flex-row items-end md:items-start"
                      >
                        <div
                          class="product-thumbnail max-w-[100px] h-[100px] rounded-2xl bg-gray-300"
                        >
                          <img
                            src="assets/images/vitamin-c-2.png"
                            alt="vitamin-c-2"
                            class="rounded-2xl object-cover w-full h-full"
                          />
                        </div>
                        <div
                          class="flex flex-col gap-y-3 items-end md:items-start"
                        >
                          <a class='text-light-primary-text font-semibold truncate hover:text-primary transition-colors duration-300' href='product-detail.php'>
                            Veggie Bloom Tomatoes
                          </a>
                          <p
                            class="text-sm leading-[22px] font-medium text-primary product-category"
                          >
                            Healthcare
                          </p>
                          <div class="rating-section flex items-center">
                            <div
                              class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                            >
                              <div
                                style="width: 80%"
                                class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                              ></div>
                            </div>
                            <span
                              class="text-sm leading-[22px] font-normal inline-block ml-1"
                              >(118)</span
                            >
                          </div>
                        </div>
                      </div>
                    </td>
                    <td
                      data-title="Stock"
                      class="capitalize py-4 px-3 lg:px-0 product-stock"
                    >
                      <span class="text-light-primary-text font-semibold"
                        >2 in stock</span
                      >
                    </td>
                    <td
                      data-title="Price"
                      class="capitalize py-4 px-3 lg:px-0 product-price"
                    >
                      <div
                        class="flex items-center flex-row lg:flex-col xl:flex-row gap-x-3"
                      >
                        <span
                          class="text-light-primary-text font-semibold product-offer-price"
                          >$27.49</span
                        >
                        <span
                          class="line-through text-light-disabled-text font-normal"
                          >$29.95</span
                        >
                      </div>
                    </td>
                    <td
                      data-title="Quantity"
                      class="text-left lg:text-center xl:text-left capitalize py-4 px-3 lg:px-0 product-quantity"
                    >
                      <div
                        class="border border-gray-300 inline-flex items-center justify-center rounded-[80px] max-w-[108px] py-2.5 px-4"
                      >
                        <button
                          class="inline-flex items-center justify-center hover:text-primary"
                        >
                          <i
                            class="hgi hgi-stroke hgi-remove-circle text-xl leading-6"
                          ></i>
                        </button>
                        <input
                          type="text"
                          readonly
                          value="1"
                          class="border-0 w-full grow text-center focus:outline-none font-semibold text-light-primary-text"
                        />

                        <button
                          class="inline-flex items-center justify-center hover:text-primary"
                        >
                          <i
                            class="hgi hgi-stroke hgi-add-circle text-xl leading-6"
                          ></i>
                        </button>
                      </div>
                    </td>
                    <td
                      data-title="Buy Action"
                      class="capitalize py-4 px-3 lg:px-0 product-actions"
                    >
                      <div
                        class="flex items-center flex-row lg:flex-col xl:flex-row gap-x-2 md:gap-4"
                      >
                        <button
                          class="btn btn-warning px-4 md:px-[22px] rounded-[80px] font-semibold py-[11px] md:text-base md:leading-[26px] text-[13px] leading-[22px] product-buy-now"
                        >
                          Buy Now
                        </button>
                        <a class='btn btn-primary font-semibold md:px-6 px-2.5 py-[11px] rounded-[80px] md:text-base md:leading-[26px] text-[13px] leading-[22px] product-add-to-cart' href='cart-single-vendor.html'>
                          <span class="inline-flex items-center justify-center"
                            ><i
                              class="hgi hgi-stroke hgi-shopping-cart-02 md:text-2xl text-xl md:leading-6 leading-5"
                            ></i
                          ></span>
                          Add to Cart
                        </a>
                      </div>
                    </td>
                    <td
                      data-title="Remove"
                      class="capitalize text-center py-4 px-3 lg:px-0 pr-4 product-remove"
                    >
                      <button>
                        <span class="inline-flex items-center justify-center"
                          ><i
                            class="hgi hgi-stroke hgi-delete-01 text-2xl leading-6"
                          ></i
                        ></span>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ========== Wishlist Section End ========== -->

    <?php include 'footer.php'; ?>