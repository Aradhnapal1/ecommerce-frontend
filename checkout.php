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
              <div class="border border-gray-300 rounded-2xl">
                <div class="py-4 px-6 bg-gray-200 rounded-t-2xl">
                  <h5>Already have an account ?</h5>
                </div>
                <!-- create account-form -->
                <div class="md:px-6 px-3 py-6">
                  <form
                    class="flex items-center md:flex-row flex-col gap-x-4 gap-y-4"
                  >
                    <div class="relative w-full">
                      <input
                        type="text"
                        id="user_name"
                        class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                        placeholder="User Name"
                      />

                      <label
                        for="user_name"
                        class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1"
                      >
                        User Name
                      </label>
                    </div>
                    <div class="relative w-full">
                      <input
                        type="password"
                        id="password"
                        class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                        placeholder="Password"
                      />

                      <label
                        for="password"
                        class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1"
                      >
                        Password
                      </label>
                    </div>
                  </form>
                  <div
                    class="flex items-center md:justify-between justify-start mt-6 flex-col md:flex-row gap-y-4"
                  >
                    <p
                      class="inline-flex items-center gap-x-2.5 font-semibold text-base leading-[26px]"
                    >
                      Don't have an account?<a href="#" class="text-primary"
                        >Create Account</a
                      >
                    </p>
                    <button
                      class="btn btn-primary btn-large md:px-10 w-full md:w-auto py-[11px] rounded-[100px]"
                    >
                      Login
                    </button>
                  </div>
                </div>
              </div>
              <!-- Shipping Address -->
              <div class="border border-gray-300 rounded-2xl">
                <div class="py-4 px-6 bg-gray-200 rounded-t-2xl">
                  <h5>Shipping Address</h5>
                </div>
                <div class="md:px-6 px-3 py-6">
                  <form class="flex flex-col gap-y-6">
                    <div
                      class="grid xl:grid-cols-2 md:grid-cols-2 grid-cols-1 md:gap-x-4 gap-x-0 gap-y-6"
                    >
                      <div class="xl:col-span-1 md:col-span-1 col-span-1">
                        <div class="relative w-full">
                          <input
                            type="text"
                            id="first_name"
                            class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                            placeholder="First Name"
                          />

                          <label
                            for="first_name"
                            class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1"
                          >
                            First Name
                          </label>
                        </div>
                      </div>
                      <div class="xl:col-span-1 md:col-span-1 col-span-1">
                        <div class="relative w-full">
                          <input
                            type="text"
                            id="last_name"
                            class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                            placeholder="Last Name"
                          />

                          <label
                            for="last_name"
                            class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1"
                          >
                            Last Name
                          </label>
                        </div>
                      </div>
                    </div>
                    <div
                      class="grid xl:grid-cols-2 md:grid-cols-2 grid-cols-1 md:gap-x-4 gap-x-0 gap-y-6"
                    >
                      <div class="xl:col-span-1 md:col-span-1 col-span-1">
                        <div class="relative w-full">
                          <input
                            type="tel"
                            id="phone_number"
                            class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                            placeholder="Phone Number"
                          />

                          <label
                            for="phone_number"
                            class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1"
                          >
                            Phone Number
                          </label>
                        </div>
                      </div>
                      <div class="xl:col-span-1 md:col-span-1 col-span-1">
                        <div class="relative w-full">
                          <input
                            type="email"
                            id="email_address"
                            class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                            placeholder="Email Address (Optional)"
                          />

                          <label
                            for="email_address"
                            class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1"
                          >
                            Email Address (Optional)
                          </label>
                        </div>
                      </div>
                    </div>
                    <div
                      class="grid xl:grid-cols-12 lg:grid-cols-2 grid-cols-1 md:gap-x-4 gap-x-0 gap-y-6 w-full"
                    >
                      <div
                        class="grid grid-cols-12 gap-x-4 gap-y-6 w-full col-span-6"
                      >
                        <div class="md:col-span-6 col-span-12">
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
                            <label for="country_region" class="nice-select-label"
                              >Country / Region</label
                            >
                          </div>
                        </div>
                        <div class="md:col-span-6 col-span-12">
                          <div class="relative w-full">
                            <input
                              type="text"
                              id="city"
                              class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                              placeholder="City"
                            />

                            <label
                              for="city"
                              class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1"
                            >
                              City
                            </label>
                          </div>
                        </div>
                      </div>
                      <div
                        class="grid grid-cols-12 gap-x-4 gap-y-6 w-full col-span-6"
                      >
                        <div class="md:col-span-6 col-span-12">
                          <div class="relative w-full">
                            <input
                              type="text"
                              id="state"
                              class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                              placeholder="State"
                            />

                            <label
                              for="state"
                              class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1"
                            >
                              State
                            </label>
                          </div>
                        </div>
                        <div class="md:col-span-6 col-span-12">
                          <div class="relative w-full">
                            <input
                              type="tel"
                              id="zip_code"
                              class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                              placeholder="Zip Code"
                            />

                            <label
                              for="zip_code"
                              class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1"
                            >
                              Zip Code
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="relative w-full">
                      <textarea
                        id="address_comment"
                        class="form-control peer input-group medium rounded-[20px] ps-4 pe-6 resize-none placeholder-transparent focus:placeholder-transparent focus:outline-none"
                        rows="4"
                        placeholder="Apartments, suit, unit, etc ( Optional)"
                      ></textarea>

                      <label
                        for="address_comment"
                        class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-6 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1"
                      >
                        Apartments, suit, unit, etc ( Optional)
                      </label>
                    </div>
                    <div class="pb-6 border-b border-b-gray-300">
                      <p class="font-semibold text-light-disabled-text mb-2">
                        Delivery Time
                      </p>
                      <!-- CheckBoxs -->
                      <div class="flex flex-col lg:flex-row gap-y-4 gap-x-4">
                        <label class="flex items-center cursor-pointer">
                          <!-- custom checkbox -->
                          <span
                            class="has-[input:checked]:hover:bg-[#00AB55]/8 flex items-center justify-center w-10 h-10 bg-transparent rounded-full hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                          >
                            <span
                              class="relative inline-flex w-5 h-5 items-center justify-center"
                            >
                              <input
                                type="checkbox"
                                class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all"
                              />

                              <!-- checkbox tick icon -->
                              <span
                                class="absolute inset-0 inline-flex items-center justify-center text-white opacity-0 peer-checked:opacity-100 transition-all"
                              >
                                <i
                                  class="hgi hgi-stroke hgi-tick-02 text-[18px] leading-[18px]"
                                ></i>
                              </span>
                            </span>
                          </span>

                          <!-- label text -->
                          <span
                            class="text-light-primary-text text-sm leading-[22px] font-normal"
                          >
                            08:00 AM - 11:00 AM
                          </span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                          <!-- custom checkbox -->
                          <span
                            class="has-[input:checked]:hover:bg-[#00AB55]/8 flex items-center justify-center w-10 h-10 bg-transparent rounded-full hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                          >
                            <span
                              class="relative inline-flex w-5 h-5 items-center justify-center"
                            >
                              <input
                                type="checkbox"
                                class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all"
                              />

                              <!-- checkbox tick icon -->
                              <span
                                class="absolute inset-0 inline-flex items-center justify-center text-white opacity-0 peer-checked:opacity-100 transition-all"
                              >
                                <i
                                  class="hgi hgi-stroke hgi-tick-02 text-[18px] leading-[18px]"
                                ></i>
                              </span>
                            </span>
                          </span>

                          <!-- label text -->
                          <span
                            class="text-light-primary-text text-sm leading-[22px] font-normal"
                          >
                            11:00 AM - 02:00 PM
                          </span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                          <!-- custom checkbox -->
                          <span
                            class="has-[input:checked]:hover:bg-[#00AB55]/8 flex items-center justify-center w-10 h-10 bg-transparent rounded-full hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                          >
                            <span
                              class="relative inline-flex w-5 h-5 items-center justify-center"
                            >
                              <input
                                type="checkbox"
                                class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all"
                              />

                              <!-- checkbox tick icon -->
                              <span
                                class="absolute inset-0 inline-flex items-center justify-center text-white opacity-0 peer-checked:opacity-100 transition-all"
                              >
                                <i
                                  class="hgi hgi-stroke hgi-tick-02 text-[18px] leading-[18px]"
                                ></i>
                              </span>
                            </span>
                          </span>

                          <!-- label text -->
                          <span
                            class="text-light-primary-text text-sm leading-[22px] font-normal"
                          >
                            02:00 PM - 04:00 PM
                          </span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                          <!-- custom checkbox -->
                          <span
                            class="has-[input:checked]:hover:bg-[#00AB55]/8 flex items-center justify-center w-10 h-10 bg-transparent rounded-full hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                          >
                            <span
                              class="relative inline-flex w-5 h-5 items-center justify-center"
                            >
                              <input
                                type="checkbox"
                                class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all"
                              />

                              <!-- checkbox tick icon -->
                              <span
                                class="absolute inset-0 inline-flex items-center justify-center text-white opacity-0 peer-checked:opacity-100 transition-all"
                              >
                                <i
                                  class="hgi hgi-stroke hgi-tick-02 text-[18px] leading-[18px]"
                                ></i>
                              </span>
                            </span>
                          </span>

                          <!-- label text -->
                          <span
                            class="text-light-primary-text text-sm leading-[22px] font-normal"
                          >
                            04:00 PM - 06:00 PM
                          </span>
                        </label>
                      </div>
                    </div>

                    <!-- shipment type -->

                    <div class="pb-6 border-b border-b-gray-300">
                      <p class="font-semibold text-light-disabled-text mb-2">
                        Shipment Type
                      </p>
                      <!-- Radio -->
                      <div class="flex flex-col md:flex-row gap-y-4 gap-x-4">
                        <label class="flex items-center cursor-pointer">
                          <!-- custom radio -->
                          <span
                            class="has-[input:checked]:hover:bg-[#00AB55]/8 flex items-center justify-center w-10 h-10 bg-transparent rounded-full hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                          >
                            <span
                              class="relative inline-flex w-5 h-5 items-center justify-center"
                            >
                              <input
                                checked
                                type="radio"
                                name="shipping-method"
                                class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-primary border-gray-300 rounded-full bg-white transition-all"
                              />

                              <!-- radio inner dot -->
                              <span
                                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-2 h-2 rounded-full bg-primary opacity-0 scale-0 peer-checked:opacity-100 peer-checked:scale-100 transition-all"
                              ></span>
                            </span>
                          </span>

                          <!-- label text -->
                          <span
                            class="text-light-primary-text text-sm leading-[22px] font-normal"
                          >
                            Flat Rate Shipment
                          </span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                          <!-- custom radio -->
                          <span
                            class="has-[input:checked]:hover:bg-[#00AB55]/8 flex items-center justify-center w-10 h-10 bg-transparent rounded-full hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                          >
                            <span
                              class="relative inline-flex w-5 h-5 items-center justify-center"
                            >
                              <input
                                type="radio"
                                name="shipping-method"
                                class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-primary border-gray-300 rounded-full bg-white transition-all"
                              />

                              <!-- radio inner dot -->
                              <span
                                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-2 h-2 rounded-full bg-primary opacity-0 scale-0 peer-checked:opacity-100 peer-checked:scale-100 transition-all"
                              ></span>
                            </span>
                          </span>

                          <!-- label text -->
                          <span
                            class="text-light-primary-text text-sm leading-[22px] font-normal"
                          >
                            Free Shipment
                          </span>
                        </label>
                      </div>
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
                            class="has-[input:checked]:hover:bg-[#00AB55]/8 flex items-center justify-center w-10 h-10 bg-transparent rounded-full hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                          >
                            <span
                              class="relative inline-flex w-5 h-5 items-center justify-center"
                            >
                              <input
                                checked
                                type="radio"
                                name="address-type"
                                class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-primary border-gray-300 rounded-full bg-white transition-all"
                              />

                              <!-- radio inner dot -->
                              <span
                                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-2 h-2 rounded-full bg-primary opacity-0 scale-0 peer-checked:opacity-100 peer-checked:scale-100 transition-all"
                              ></span>
                            </span>
                          </span>

                          <!-- label text -->
                          <span
                            class="text-light-primary-text text-sm leading-[22px] font-normal"
                          >
                            Home Address
                          </span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                          <!-- custom radio -->
                          <span
                            class="has-[input:checked]:hover:bg-[#00AB55]/8 flex items-center justify-center w-10 h-10 bg-transparent rounded-full hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                          >
                            <span
                              class="relative inline-flex w-5 h-5 items-center justify-center"
                            >
                              <input
                                type="radio"
                                name="address-type"
                                class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-primary border-gray-300 rounded-full bg-white transition-all"
                              />

                              <!-- radio inner dot -->
                              <span
                                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-2 h-2 rounded-full bg-primary opacity-0 scale-0 peer-checked:opacity-100 peer-checked:scale-100 transition-all"
                              ></span>
                            </span>
                          </span>

                          <!-- label text -->
                          <span
                            class="text-light-primary-text text-sm leading-[22px] font-normal"
                          >
                            Office Address
                          </span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                          <!-- custom radio -->
                          <span
                            class="has-[input:checked]:hover:bg-[#00AB55]/8 flex items-center justify-center w-10 h-10 bg-transparent rounded-full hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                          >
                            <span
                              class="relative inline-flex w-5 h-5 items-center justify-center"
                            >
                              <input
                                type="radio"
                                name="address-type"
                                class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-primary border-gray-300 rounded-full bg-white transition-all"
                              />

                              <!-- radio inner dot -->
                              <span
                                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-2 h-2 rounded-full bg-primary opacity-0 scale-0 peer-checked:opacity-100 peer-checked:scale-100 transition-all"
                              ></span>
                            </span>
                          </span>

                          <!-- label text -->
                          <span
                            class="text-light-primary-text text-sm leading-[22px] font-normal"
                          >
                            Others
                          </span>
                        </label>
                      </div>
                    </div>
                    <!-- Button -->
                    <div class="flex items-center md:justify-end gap-x-6">
                      <button
                        class="btn btn-default outline btn-large shadow-none md:px-[33px] w-[45%] md:w-auto py-2.5 rounded-[100px]"
                      >
                        Cancel
                      </button>
                      <button
                        class="btn btn-primary btn-large md:px-[41px] w-[45%] md:w-auto py-[11px] rounded-[100px]"
                      >
                        Save
                      </button>
                    </div>
                  </form>
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
                            >Bank Transfer</span
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
                          <span class="text-light-primary-text"
                            >Check Payment</span
                          >
                        </label>
                      </div>
                      <div class="payment-content pt-4 pl-2">
                        Please send a check to Store Name, Store Street, Store
                        Town, Store State / County, Store Postcode.
                      </div>
                    </div>
                    <div
                      class="border border-gray-300 w-full payment-method px-3 py-4"
                    >
                      <div class="flex items-center">
                        <label
                          class="flex items-center gap-x-2 cursor-pointer w-full"
                        >
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
                          <span class="text-light-primary-text"
                            >Credit Card</span
                          >
                        </label>
                        <img
                          src="assets/images/visa-logo.png"
                          alt="visa-logo"
                        />
                      </div>
                      <div class="payment-content pt-4 pl-2">
                        <div class="flex flex-col gap-y-6">
                          <div>
                            <div class="relative w-full">
                              <input
                                id="card_number"
                                type="number"
                                class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                                placeholder="Card Number"
                              />
                              <label
                                for="card_number"
                                class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 peer-[:not(:placeholder-shown)]:bg-white peer-focus:bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1"
                              >
                                Card Number
                              </label>
                            </div>
                          </div>
                          <div
                            class="flex items-center flex-col md:flex-row gap-y-4 md:gap-x-4"
                          >
                            <div class="relative w-full">
                              <input
                                id="expire_date"
                                type="text"
                                class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                                placeholder="Expiration Date (MM/YY)"
                              />
                              <label
                                for="expire_date"
                                class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 peer-[:not(:placeholder-shown)]:bg-white peer-focus:bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1"
                              >
                                Expiration Date (MM/YY)
                              </label>
                            </div>
                            <div class="relative w-full">
                              <input
                                id="security_code"
                                type="number"
                                class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                                placeholder="Security Code"
                              />
                              <label
                                for="security_code"
                                class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 peer-[:not(:placeholder-shown)]:bg-white peer-focus:bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1"
                              >
                                Security Code
                              </label>
                            </div>
                          </div>
                          <div>
                            <div class="relative w-full">
                              <input
                                id="card_on_name"
                                type="text"
                                class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                                placeholder="Card on Name"
                              />
                              <label
                                for="card_on_name"
                                class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 peer-[:not(:placeholder-shown)]:bg-white peer-focus:bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1"
                              >
                                Card on Name
                              </label>
                            </div>
                          </div>
                          <div>
                            <label
                              class="inline-flex items-center cursor-pointer"
                            >
                              <!-- custom checkbox -->
                              <span
                                class="has-[input:checked]:hover:bg-[#00AB55]/8 flex items-center justify-center w-10 h-10 bg-transparent rounded-full hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                              >
                                <span
                                  class="relative inline-flex w-5 h-5 items-center justify-center"
                                >
                                  <input
                                    type="checkbox"
                                    class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all"
                                  />

                                  <!-- checkbox tick icon -->
                                  <span
                                    class="absolute inset-0 inline-flex items-center justify-center text-white opacity-0 peer-checked:opacity-100 transition-all"
                                  >
                                    <i
                                      class="hgi hgi-stroke hgi-tick-02 text-[18px] leading-[18px]"
                                    ></i>
                                  </span>
                                </span>
                              </span>

                              <!-- label text -->
                              <span>Save Credit Details</span>
                            </label>
                          </div>
                        </div>
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
                  <tbody class="space-y-6">
                    <tr>
                      <td class="py-4 px-4 product-thumbnail">
                        <div
                          class="w-[60px] h-[60px] rounded-xl bg-[#F4F3F5] overflow-hidden"
                        >
                          <img
                            src="assets/images/vitamin-c-2.png"
                            alt="vitamin-c-2"
                            class="w-full h-full object-cover rounded-xl"
                          />
                        </div>
                      </td>
                      <td class="py-4 md:pr-4 pr-2 align-bottom w-full">
                        <div class="flex flex-col gap-y-2">
                          <a class='text-light-primary-text font-semibold truncate hover:text-primary transition-colors duration-300 product-title' href='product-detail.php'>
                            Fresh Bask Basket Fruits
                          </a>
                          <div class="flex items-center justify-between">
                            <p
                              class="text-sm leading-[22px] font-normal text-light-secondary-text cart-item-quantity"
                            >
                              1 x 120mg Pack
                            </p>
                            <div class="flex items-center gap-x-1.5">
                              <span
                                class="line-through text-light-disabled-text font-normal product-total-price"
                                >$29.95</span
                              >
                              <span
                                class="text-primary font-semibold product-offer-price"
                                >$27.49</span
                              >
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="py-4 px-4 product-thumbnail">
                        <div
                          class="w-[60px] h-[60px] rounded-xl bg-[#F4F3F5] overflow-hidden"
                        >
                          <img
                            src="assets/images/temperature-gun-2.png"
                            alt="temperature-gun-2"
                            class="w-full h-full object-cover rounded-xl"
                          />
                        </div>
                      </td>
                      <td class="py-4 md:pr-4 pr-2 align-bottom w-full">
                        <div class="flex flex-col gap-y-2">
                          <a class='text-light-primary-text font-semibold truncate hover:text-primary transition-colors duration-300 product-title' href='product-detail.php'>
                            Fresh Bask Basket Fruits
                          </a>
                          <div class="flex items-center justify-between">
                            <p
                              class="text-sm leading-[22px] font-normal text-light-secondary-text cart-item-quantity"
                            >
                              1 x 120mg Pack
                            </p>
                            <div class="flex items-center gap-x-1.5">
                              <span
                                class="line-through text-light-disabled-text font-normal product-total-price"
                                >$29.95</span
                              >
                              <span
                                class="text-primary font-semibold product-offer-price"
                                >$27.49</span
                              >
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="py-4 px-4 product-thumbnail">
                        <div
                          class="w-[60px] h-[60px] rounded-xl bg-[#F4F3F5] overflow-hidden"
                        >
                          <img
                            src="assets/images/vitamin-c.png"
                            alt="vitamin-c"
                            class="w-full h-full object-cover rounded-xl"
                          />
                        </div>
                      </td>
                      <td class="py-4 md:pr-4 pr-2 align-bottom w-full">
                        <div class="flex flex-col gap-y-2">
                          <a class='text-light-primary-text font-semibold truncate hover:text-primary transition-colors duration-300 product-title' href='product-detail.php'>
                            Fresh Bask Basket Fruits
                          </a>
                          <div class="flex items-center justify-between">
                            <p
                              class="text-sm leading-[22px] font-normal text-light-secondary-text cart-item-quantity"
                            >
                              1 x 120mg Pack
                            </p>
                            <div class="flex items-center gap-x-1.5">
                              <span
                                class="line-through text-light-disabled-text font-normal product-total-price"
                                >$29.95</span
                              >
                              <span
                                class="text-primary font-semibold product-offer-price"
                                >$27.49</span
                              >
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="py-4 px-4 product-thumbnail">
                        <div
                          class="w-[60px] h-[60px] rounded-xl bg-[#F4F3F5] overflow-hidden"
                        >
                          <img
                            src="assets/images/bp-machine.png"
                            alt="bp-machine"
                            class="w-full h-full object-cover rounded-xl"
                          />
                        </div>
                      </td>
                      <td class="py-4 md:pr-4 pr-2 align-bottom w-full">
                        <div class="flex flex-col gap-y-2">
                          <a class='text-light-primary-text font-semibold truncate hover:text-primary transition-colors duration-300 product-title' href='product-detail.php'>
                            Fresh Bask Basket Fruits
                          </a>
                          <div class="flex items-center justify-between">
                            <p
                              class="text-sm leading-[22px] font-normal text-light-secondary-text cart-item-quantity"
                            >
                              1 x 120mg Pack
                            </p>
                            <div class="flex items-center gap-x-1.5">
                              <span
                                class="line-through text-light-disabled-text font-normal product-total-price"
                                >$29.95</span
                              >
                              <span
                                class="text-primary font-semibold product-offer-price"
                                >$27.49</span
                              >
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="py-4 px-4 product-thumbnail">
                        <div
                          class="w-[60px] h-[60px] rounded-xl bg-[#F4F3F5] overflow-hidden"
                        >
                          <img
                            src="assets/images/bp-machine-2.png"
                            alt="bp-machine-2"
                            class="w-full h-full object-cover rounded-xl"
                          />
                        </div>
                      </td>
                      <td class="py-4 md:pr-4 pr-2 align-bottom w-full">
                        <div class="flex flex-col gap-y-2">
                          <a class='text-light-primary-text font-semibold truncate hover:text-primary transition-colors duration-300 product-title' href='product-detail.php'>
                            Fresh Bask Basket Fruits
                          </a>
                          <div class="flex items-center justify-between">
                            <p
                              class="text-sm leading-[22px] font-normal text-light-secondary-text cart-item-quantity"
                            >
                              1 x 120mg Pack
                            </p>
                            <div class="flex items-center gap-x-1.5">
                              <span
                                class="line-through text-light-disabled-text font-normal product-total-price"
                                >$29.95</span
                              >
                              <span
                                class="text-primary font-semibold product-offer-price"
                                >$27.49</span
                              >
                            </div>
                          </div>
                        </div>
                      </td>
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
                        Sub-Total<span class="text-gray-900">$20.00</span>
                      </p>
                      <p class="flex items-center justify-between">
                        VAT (40%)<span class="text-gray-900">$4.00</span>
                      </p>
                      <p class="flex items-center justify-between">
                        Discount<span class="text-gray-900">-$4.00</span>
                      </p>
                      <p class="flex items-center justify-between">
                        Shipment<span class="text-gray-900">$0.00</span>
                      </p>
                      <p class="flex items-center justify-between">
                        Tax<span class="text-gray-900">$0.00</span>
                      </p>
                    </div>
                    <h6
                      class="flex items-center justify-between text-light-primary-text pt-4"
                    >
                      Total<span class="text-gray-900">$20.00</span>
                    </h6>
                  </div>
                </div>
              </div>
              <div>
                <a class='btn btn-primary py-3 rounded-[80px] w-full' href='order-successful.html'>
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
   