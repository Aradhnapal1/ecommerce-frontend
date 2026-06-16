<?php include 'header.php'; ?>


    <!-- ========== Breadcrumb Section Start ========== -->
    <div class="container py-12">
      <div class="breadcrumb">
        <ul>
          <li>
            <a href='index.php'>
              <span class="inline-flex items-center justify-center">
                <i
                  class="hgi hgi-stroke hgi-home-01 text-2xl leading-6"
                ></i></span
              >Home</a
            >
          </li>
          <li class="text-light-disabled-text">&#8226;</li>
          <li><span class="text-sm leading-[22px]">Checkout</span></li>
        </ul>
      </div>
    </div>

    <!-- ========== Breadcrumb Section End ========== -->
    <!-- ========== PAYMENT Section Start ========== -->
    <div class="pb-[70px]">
      <div class="container">
        <div class="grid grid-cols-12 gap-x-6 gap-y-6">
          <!-- Account and payment part -->
          <div class="xl:col-span-8 col-span-12">
            <div class="flex flex-col gap-y-6">
              <!-- Account -->
            
              <!-- Shipping Address -->
              <div class="border border-gray-300 rounded-2xl">
                <div class="py-4 px-6 bg-gray-200 rounded-t-2xl">
                  <h5>Shipping Address</h5>
                </div>
                
                <!-- Add New Address -->
                <div class="md:px-6 px-3 py-6">
                <h5 class="text-light-primary-text mb-4">Or Add a New Address</h5>
                <form id="add-address-form" class="flex flex-col gap-y-6">
                <div class="grid xl:grid-cols-2 md:grid-cols-2 grid-cols-1 md:gap-x-4 gap-x-0 gap-y-6">
                  <div class="xl:col-span-1 md:col-span-1 col-span-1">
                    <div class="relative w-full">
                      <input type="text" id="full_name"
                        class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                        placeholder="Full Name" />

                      <label for="full_name"
                        class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                        Full Name
                      </label>
                    </div>
                  </div>
                  <div class="xl:col-span-1 md:col-span-1 col-span-1">
                    <div class="relative w-full">
                      <input type="tel" id="phone_number"
                        class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                        placeholder="Phone Number" />

                      <label for="phone_number"
                        class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                        Phone Number
                      </label>
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
                        class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                        Alternative Mobile Number
                      </label>
                    </div>
                  </div>
                  <div class="xl:col-span-1 md:col-span-1 col-span-1">
                    <div class="relative w-full">
                      <input type="text" id="pincode"
                        class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                        placeholder="Pin Code" />

                      <label for="pincode"
                        class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                        Pin Code
                      </label>
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
                          class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                          State
                        </label>
                      </div>
                    </div>
                    <div class="md:col-span-6 col-span-12">
                      <div class="relative w-full">
                        <input type="text" id="city"
                          class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                          placeholder="City" />

                        <label for="city"
                          class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                          City
                        </label>
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
                    class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                    Address Line 1
                  </label>
                </div>

                <!-- Address Line 2 -->
                <div class="relative w-full">
                  <input type="text" id="address_line2"
                    class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                    placeholder="Address Line 2" />

                  <label for="address_line2"
                    class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                    Address Line 2
                  </label>
                </div>

                <!-- Landmark -->
                <div class="relative w-full">
                  <input type="text" id="landmark"
                    class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                    placeholder="Landmark" />

                  <label for="landmark"
                    class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                    Landmark
                  </label>
                </div>




                <!-- Address type -->

                <div class="pb-6 border-b border-b-gray-300">
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
                          <input checked type="radio" name="address-type" value="HOME"
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
                          <input type="radio" name="address-type" value="OFFICE"
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
                          <input type="radio" name="address-type" value="OTHER"
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
                  <button
                    class="btn btn-default outline btn-large shadow-none md:px-[33px] w-[45%] md:w-auto py-2.5 rounded-[100px]">
                    Cancel
                  </button>
                  <button type="submit" class="btn btn-primary btn-large md:px-[41px] w-[45%] md:w-auto py-[11px] rounded-[100px]">
                    Save
                  </button>
                </div>
              </form>
                </div>
              </div>


              <!-- Saved Addresses -->
                <div class="border border-gray-300 rounded-2xl">
                <div class="md:px-6 px-3 py-6 border-b border-b-gray-300">
                  <div class="py-4 px-6 bg-gray-200 rounded-t-2xl">
                  <h5 class="text-light-primary-text mb-4">Saved Addresses</h5>
                </div>
                  

                  <div class="payment-methods flex flex-col gap-y-4" id="saved-addresses-container">
                    <p class="text-light-secondary-text">Loading addresses...</p>
                  </div>
                </div>
                </div>
              <!-- Payment -->
              <div class="border border-gray-300 rounded-2xl">
                <div class="py-4 px-6 bg-gray-200 rounded-t-2xl">
                  <h5 class="text-light-primary-text">Payment</h5>
                </div>
                <!-- create account-form -->
                <div class="md:px-6 px-3 py-6">
                  <div class="payment-methods flex flex-col gap-y-6">
                    <div
                      class="border border-gray-300 w-full payment-method px-3 py-4"
                    >
                      <div>
                        <label class="flex items-center gap-x-2 cursor-pointer">
                          <!-- custom radio -->
                          <span
                            class="has-[input:checked]:hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                          >
                            <span
                              class="relative inline-flex w-5 h-5 items-center justify-center"
                            >
                              <input
                                checked
                                type="radio"
                                name="payment-method"
                                class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-primary border-gray-300 rounded-full bg-white transition-all"
                              />

                              <!-- radio inner dot -->
                              <span
                                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-2 h-2 rounded-full bg-primary opacity-0 scale-0 peer-checked:opacity-100 peer-checked:scale-100 transition-all"
                              ></span>
                            </span>
                          </span>

                          <!-- label text -->
                          <span class="text-light-primary-text"
                            >RazorPay</span
                          >
                        </label>
                      </div>
                      <div class="payment-content pt-4 pl-2">
                        Make your payment directly into our bank account. Please
                        use your Order ID as the payment reference. Your order
                        will not be shipped until the funds have cleared in our
                        account.
                      </div>
                    </div>
                    <div
                      class="border border-gray-300 w-full payment-method px-3 py-4"
                    >
                      <div>
                        <label class="flex items-center gap-x-2 cursor-pointer">
                          <!-- custom radio -->
                          <span
                            class="has-[input:checked]:hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                          >
                            <span
                              class="relative inline-flex w-5 h-5 items-center justify-center"
                            >
                              <input
                                type="radio"
                                name="payment-method"
                                class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-primary border-gray-300 rounded-full bg-white transition-all"
                              />

                              <!-- radio inner dot -->
                              <span
                                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-2 h-2 rounded-full bg-primary opacity-0 scale-0 peer-checked:opacity-100 peer-checked:scale-100 transition-all"
                              ></span>
                            </span>
                          </span>

                          <!-- label text -->
                          <span class="text-light-primary-text">
                            Cash on Delivery
                          </span>
                        </label>
                      </div>
                      <div class="payment-content pt-4 pl-2">
                        Pay with cash upon delivery.
                      </div>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Cart items part -->
          <div class="xl:col-span-4 col-span-12">
            <div
              class="border border-gray-300 rounded-2xl md:px-6 md:py-6 px-3 py-4 flex flex-col gap-y-6 sticky top-5"
            >
              <!-- cart-items -->
              <h5 class="text-light-primary-text">Cart Items</h5>
              <div class="border border-gray-300 rounded-xl overflow-x-auto">
                <table class="w-full cart-items-table">
                  <tbody class="space-y-6" id="checkoutid">
                    <tr>
                      <td colspan="2" class="text-center py-6 text-light-secondary-text">Loading cart items...</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- order-summary -->
              <div class="bg-gray-100 md:px-6 px-4 py-6 rounded-2xl">
                <div class="flex flex-col gap-y-6">
                  <h5>Order Summary</h5>
                  <!-- total -->
                  <div>
                    <div
                      class="flex flex-col gap-y-4 pb-4 border-b border-gray-300"
                    >
                      <p class="flex items-center justify-between">
                        Sub-Total<span id="checkout-subtotal" class="text-gray-900">₹0.00</span>
                      </p>
                      <p class="flex items-center justify-between">
                        <span id="checkout-discount-label">Discount</span><span id="checkout-discount" class="text-gray-900">₹0.00</span>
                      </p>
                    </div>
                    <h6
                      class="flex items-center justify-between text-light-primary-text pt-4"
                    >
                      Total<span id="checkout-total" class="text-gray-900">₹0.00</span>
                    </h6>
                  </div>
                </div>
              </div>
              <div>
                <a class='btn btn-primary py-3 rounded-[80px] w-full' id="proceed-to-checkout-btn" >
                  Proceed to checkout
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ========== PAYMENT Section End ========== -->

   
<?php include 'footer.php'; ?>
   