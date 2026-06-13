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
          <li><span class="text-sm leading-[22px]">Categories</span></li>
        </ul>
      </div>
    </div>
    <!-- ========== Breadcrumb Section End ========== -->

    <!-- ========== Filter with 3-column Section Start ========== -->
    <div class="pb-[90px]">
      <div class="container">
        <div class="grid grid-cols-12 gap-x-6 gap-y-6">
          <div
            class="xl:col-span-3 lg:col-span-4 col-span-12 row-start-2 lg:row-start-auto"
          >
            <div class="sidebar sticky top-20">
              <div class="border border-gray-300 rounded-2xl">
                <!-- title -->
                <div
                  class="px-6 py-4 bg-gray-200 rounded-t-2xl sidebar-title wow animate__animated animate__fadeInUp"
                  data-wow-delay=".2s"
                >
                  <div class="flex items-center justify-between">
                    <h5 class="text-light-primary-text">Filters</h5>
                    <a
                      href="#"
                      class="text-primary text-base leading-[26px] font-semibold hover:underline"
                      >Clear All</a
                    >
                  </div>
                </div>

                <!-- category -->
                <div class="px-6 py-6">
                  <!-- Category-content -->
                  <div
                    class="widget-category wow animate__animated animate__fadeInUp"
                    data-wow-delay=".2s"
                  >
                    <div
                      class="flex flex-col gap-y-4 pb-8 border-b border-gray-300"
                    >
                      <div
                        class="flex items-center justify-between widget-category-title"
                      >
                        <h6>Category</h6>
                        <a
                          href="#"
                          class="text-base leading-[26px] hover:underline hover:text-primary transition-colors duration-300 ease-in-out"
                          >Reset</a
                        >
                      </div>
                      <div
                        class="input-group medium pl-4 py-2 pr-2.5 rounded-[100px] widget-category-search relative w-full"
                      >
                        <div
                          class="input-group-addon inline-flex items-center justify-center leading-6"
                          data-align="inline-start"
                        >
                          <span class="inline-flex items-center justify-center">
                            <i
                              class="hgi hgi-stroke hgi-search-01 text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </span>
                        </div>

                        <input
                          type="text"
                          id="search"
                          class="peer form-control placeholder-transparent focus:placeholder-transparent focus:outline-none"
                          placeholder="Search"
                        />

                        <label
                          for="search"
                          class="absolute left-12 top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:left-[14px] peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 peer-[:not(:placeholder-shown)]:left-[14px] bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1"
                        >
                          Search
                        </label>
                      </div>
                      <div class="widget-category-content-list">
                        <div
                          class="max-h-[170px] overflow-y-auto pr-2.5 category-scroll"
                        >
                          <ul id="filter-category-list" class="flex flex-col gap-y-2">
                            <li class="widget-category-content-list-items">
                              <label
                                class="group flex items-center justify-between w-full cursor-pointer"
                              >
                                <span class="flex items-center gap-x-2">
                                  <!-- custom checkbox wrapper -->
                                  <span
                                    class="group-has-[input:checked]:group-hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                                  >
                                    <span
                                      class="relative inline-flex w-5 h-5 items-center justify-center"
                                    >
                                      <input
                                        type="checkbox"
                                        class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all duration-300 ease-in-out"
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
                                  <span
                                    class="text-light-primary-text group-hover:text-primary transition-colors duration-300 ease-in-out"
                                  >
                                    Thermometers
                                  </span>
                                </span>
                                <span
                                  class="group-hover:text-primary transition-colors duration-300 ease-in-out"
                                >
                                  (29)
                                </span>
                              </label>
                            </li>
                            <li class="widget-category-content-list-items">
                              <label
                                class="group flex items-center justify-between w-full cursor-pointer"
                              >
                                <span class="flex items-center gap-x-2">
                                  <!-- custom checkbox wrapper -->
                                  <span
                                    class="group-has-[input:checked]:group-hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                                  >
                                    <span
                                      class="relative inline-flex w-5 h-5 items-center justify-center"
                                    >
                                      <input
                                        type="checkbox"
                                        class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all duration-300 ease-in-out"
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
                                  <span
                                    class="text-light-primary-text group-hover:text-primary transition-colors duration-300 ease-in-out"
                                  >
                                    Oximeters
                                  </span>
                                </span>
                                <span
                                  class="group-hover:text-primary transition-colors duration-300 ease-in-out"
                                >
                                  (5)
                                </span>
                              </label>
                            </li>
                            <li class="widget-category-content-list-items">
                              <label
                                class="group flex items-center justify-between w-full cursor-pointer"
                              >
                                <span class="flex items-center gap-x-2">
                                  <!-- custom checkbox wrapper -->
                                  <span
                                    class="group-has-[input:checked]:group-hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                                  >
                                    <span
                                      class="relative inline-flex w-5 h-5 items-center justify-center"
                                    >
                                      <input
                                        type="checkbox"
                                        class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all duration-300 ease-in-out"
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
                                  <span
                                    class="text-light-primary-text group-hover:text-primary transition-colors duration-300 ease-in-out"
                                  >
                                    BP Monitors
                                  </span>
                                </span>
                                <span
                                  class="group-hover:text-primary transition-colors duration-300 ease-in-out"
                                >
                                  (1)
                                </span>
                              </label>
                            </li>
                            <li class="widget-category-content-list-items">
                              <label
                                class="group flex items-center justify-between w-full cursor-pointer"
                              >
                                <span class="flex items-center gap-x-2">
                                  <!-- custom checkbox wrapper -->
                                  <span
                                    class="group-has-[input:checked]:group-hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                                  >
                                    <span
                                      class="relative inline-flex w-5 h-5 items-center justify-center"
                                    >
                                      <input
                                        type="checkbox"
                                        class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all duration-300 ease-in-out"
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
                                  <span
                                    class="text-light-primary-text group-hover:text-primary transition-colors duration-300 ease-in-out"
                                  >
                                    Personal Care
                                  </span>
                                </span>
                                <span
                                  class="group-hover:text-primary transition-colors duration-300 ease-in-out"
                                >
                                  (1)
                                </span>
                              </label>
                            </li>
                            <li class="widget-category-content-list-items">
                              <label
                                class="group flex items-center justify-between w-full cursor-pointer"
                              >
                                <span class="flex items-center gap-x-2">
                                  <!-- custom checkbox wrapper -->
                                  <span
                                    class="group-has-[input:checked]:group-hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                                  >
                                    <span
                                      class="relative inline-flex w-5 h-5 items-center justify-center"
                                    >
                                      <input
                                        type="checkbox"
                                        class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all duration-300 ease-in-out"
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
                                  <span
                                    class="text-light-primary-text group-hover:text-primary transition-colors duration-300 ease-in-out"
                                  >
                                    Personal Care
                                  </span>
                                </span>
                                <span
                                  class="group-hover:text-primary transition-colors duration-300 ease-in-out"
                                >
                                  (1)
                                </span>
                              </label>
                            </li>
                            <li class="widget-category-content-list-items">
                              <label
                                class="group flex items-center justify-between w-full cursor-pointer"
                              >
                                <span class="flex items-center gap-x-2">
                                  <!-- custom checkbox wrapper -->
                                  <span
                                    class="group-has-[input:checked]:group-hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                                  >
                                    <span
                                      class="relative inline-flex w-5 h-5 items-center justify-center"
                                    >
                                      <input
                                        type="checkbox"
                                        class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all duration-300 ease-in-out"
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
                                  <span
                                    class="text-light-primary-text group-hover:text-primary transition-colors duration-300 ease-in-out"
                                  >
                                    Personal Care
                                  </span>
                                </span>
                                <span
                                  class="group-hover:text-primary transition-colors duration-300 ease-in-out"
                                >
                                  (1)
                                </span>
                              </label>
                            </li>
                            <li class="widget-category-content-list-items">
                              <label
                                class="group flex items-center justify-between w-full cursor-pointer"
                              >
                                <span class="flex items-center gap-x-2">
                                  <!-- custom checkbox wrapper -->
                                  <span
                                    class="group-has-[input:checked]:group-hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                                  >
                                    <span
                                      class="relative inline-flex w-5 h-5 items-center justify-center"
                                    >
                                      <input
                                        type="checkbox"
                                        class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all duration-300 ease-in-out"
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
                                  <span
                                    class="text-light-primary-text group-hover:text-primary transition-colors duration-300 ease-in-out"
                                  >
                                    Personal Care
                                  </span>
                                </span>
                                <span
                                  class="group-hover:text-primary transition-colors duration-300 ease-in-out"
                                >
                                  (1)
                                </span>
                              </label>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- PRICE-Range-content -->
                  <div
                    class="widget-price-range wow animate__animated animate__fadeInUp"
                    data-wow-delay=".2s"
                  >
                    <div
                      class="flex flex-col gap-y-6 py-8 border-b border-gray-300 widget-price-range-title"
                    >
                      <div class="flex items-center justify-between">
                        <h6>Price Range</h6>
                        <a
                          href="#"
                          class="text-base leading-[26px] hover:underline hover:text-primary transition-colors duration-300 ease-in-out"
                          >Reset</a
                        >
                      </div>
                      <div id="price-range-slider"></div>
                      <div
                        class="price-range-values flex items-center justify-between"
                      >
                        <div
                          class="input-group medium max-w-[147px] w-full rounded-[80px] py-2 px-3.5"
                        >
                          <div
                            class="input-group-addon inline-flex items-center justify-center leading-6"
                            data-align="inline-start"
                          >
                            $
                          </div>
                          <input
                            class="price-range-min-value form-control"
                            readonly
                            type="text"
                            value="0"
                          />
                        </div>
                        <span
                          class="text-sm leading-[22px] text-light-disabled-text"
                          >To</span
                        >
                        <div
                          class="input-group medium max-w-[147px] w-full rounded-[80px] py-2 px-3.5"
                        >
                          <div
                            class="input-group-addon inline-flex items-center justify-center leading-6"
                            data-align="inline-start"
                          >
                            $
                          </div>
                          <input
                            class="price-range-max-value form-control"
                            readonly
                            type="text"
                            value="100"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Rating-content -->
                  <div
                    class="widget-rating wow animate__animated animate__fadeInUp"
                    data-wow-delay=".2s"
                  >
                    <div
                      class="flex flex-col gap-y-4 py-8 border-b border-gray-300"
                    >
                      <div
                        class="flex items-center justify-between widget-rating-title"
                      >
                        <h6 class="text-light-primary-text">Rating</h6>
                        <a
                          href="#"
                          class="text-base leading-[26px] hover:underline hover:text-primary transition-colors duration-300 ease-in-out"
                          >Reset</a
                        >
                      </div>
                      <div class="ratings">
                        <ul class="flex items-center flex-wrap gap-3">
                          <li>
                            <a
                              href="#"
                              class="btn btn-default outline shadow-none gap-x-1.5 items-center text-base leading-6 px-2.5 py-1.5 rounded-[80px]"
                              >5
                              <div
                                class="bg-[url('../images/star-icon.png')] w-5 h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                              >
                                <div
                                  style="width: 100%"
                                  class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                                ></div>
                              </div>
                            </a>
                          </li>
                          <li>
                            <a
                              href="#"
                              class="btn btn-default outline shadow-none gap-x-1.5 items-center text-base leading-6 px-2.5 py-1.5 rounded-[80px]"
                              >4
                              <div
                                class="bg-[url('../images/star-icon.png')] w-5 h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                              >
                                <div
                                  style="width: 100%"
                                  class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                                ></div>
                              </div>
                            </a>
                          </li>
                          <li>
                            <a
                              href="#"
                              class="btn btn-default outline shadow-none gap-x-1.5 items-center text-base leading-6 px-2.5 py-1.5 rounded-[80px]"
                              >3
                              <div
                                class="bg-[url('../images/star-icon.png')] w-5 h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                              >
                                <div
                                  style="width: 100%"
                                  class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                                ></div>
                              </div>
                            </a>
                          </li>
                          <li>
                            <a
                              href="#"
                              class="btn btn-default outline shadow-none gap-x-1.5 items-center text-base leading-6 px-2.5 py-1.5 rounded-[80px]"
                              >2
                              <div
                                class="bg-[url('../images/star-icon.png')] w-5 h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                              >
                                <div
                                  style="width: 100%"
                                  class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                                ></div>
                              </div>
                            </a>
                          </li>
                          <li>
                            <a
                              href="#"
                              class="btn btn-default outline shadow-none gap-x-1.5 items-center text-base leading-6 px-2.5 py-1.5 rounded-[80px]"
                              >1
                              <div
                                class="bg-[url('../images/star-icon.png')] w-5 h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                              >
                                <div
                                  style="width: 100%"
                                  class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                                ></div>
                              </div>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Color-centent -->
                  <div
                    class="widget-color-picker wow animate__animated animate__fadeInUp"
                    data-wow-delay=".2s"
                  >
                    <div
                      class="flex flex-col gap-y-4 py-8 border-b border-gray-300"
                    >
                      <div
                        class="flex items-center justify-between widget-color-title"
                      >
                        <h6>Color</h6>
                        <a
                          href="#"
                          class="text-base leading-[26px] hover:underline hover:text-primary transition-colors duration-300 ease-in-out"
                          >Reset</a
                        >
                      </div>
                      <div class="colors">
                        <ul id="filter-color-list" class="flex items-center flex-wrap gap-5">
                          <li class="inline-flex items-center justify-center">
                            <button
                              class="w-5 h-5 inline-flex items-center justify-center bg-primary rounded-full"
                            ></button>
                          </li>
                          <li class="inline-flex items-center justify-center">
                            <button
                              class="w-5 h-5 inline-flex items-center justify-center bg-info rounded-full"
                            ></button>
                          </li>
                          <li class="inline-flex items-center justify-center">
                            <button
                              class="w-5 h-5 inline-flex items-center justify-center bg-info-darker rounded-full"
                            ></button>
                          </li>
                          <li class="inline-flex items-center justify-center">
                            <button
                              class="w-5 h-5 inline-flex items-center justify-center bg-warning rounded-full"
                            ></button>
                          </li>
                          <li class="inline-flex items-center justify-center">
                            <button
                              class="w-5 h-5 inline-flex items-center justify-center bg-error-light rounded-full"
                            ></button>
                          </li>
                          <li class="inline-flex items-center justify-center">
                            <button
                              class="w-5 h-5 inline-flex items-center justify-center bg-error-dark rounded-full"
                            ></button>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Size-content -->
                  <div
                    class="widget-size-picker wow animate__animated animate__fadeInUp"
                    data-wow-delay=".2s"
                  >
                    <div
                      class="flex flex-col gap-y-4 py-8 border-b border-gray-300"
                    >
                      <div
                        class="flex items-center justify-between widget-size-title"
                      >
                        <h6>Size</h6>
                        <a
                          href="#"
                          class="text-base leading-[26px] hover:underline hover:text-primary transition-colors duration-300 ease-in-out"
                          >Reset</a
                        >
                      </div>
                      <div class="sizes">
                        <ul id="filter-size-list" class="flex items-center flex-wrap gap-3">
                          <li>
                            <button
                              class="btn btn-default outline shadow-none py-[7px] px-[15px] rounded-[80px]"
                            >
                              S
                            </button>
                          </li>
                          <li>
                            <button
                              class="btn btn-default outline shadow-none py-[7px] px-[15px] rounded-[80px]"
                            >
                              M
                            </button>
                          </li>
                          <li>
                            <button
                              class="btn btn-default outline shadow-none py-[7px] px-[15px] rounded-[80px]"
                            >
                              L
                            </button>
                          </li>
                          <li>
                            <button
                              class="btn btn-default outline shadow-none py-[7px] px-[15px] rounded-[80px]"
                            >
                              XL
                            </button>
                          </li>
                          <li>
                            <button
                              class="btn btn-default outline shadow-none py-[7px] px-[15px] rounded-[80px]"
                            >
                              XXL
                            </button>
                          </li>
                          <li>
                            <button
                              class="btn btn-default outline shadow-none py-[7px] px-[15px] rounded-[80px]"
                            >
                              XXXL
                            </button>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Discount-content -->
                  <div
                    class="widget-discount wow animate__animated animate__fadeInUp"
                    data-wow-delay=".2s"
                  >
                    <div
                      class="flex flex-col gap-y-4 py-8 border-b border-gray-300"
                    >
                      <div
                        class="flex items-center justify-between widget-discount-title"
                      >
                        <h6>Discount</h6>
                        <a
                          href="#"
                          class="text-base leading-[26px] hover:underline hover:text-primary transition-colors duration-300 ease-in-out"
                          >Reset</a
                        >
                      </div>
                      <div class="discount">
                        <ul id="filter-discount-list" class="flex flex-col gap-y-2">
                          <li class="discount-items">
                            <label
                              class="group flex items-center justify-between w-full cursor-pointer"
                            >
                              <span class="flex items-center gap-x-2">
                                <!-- custom checkbox wrapper -->
                                <span
                                  class="group-has-[input:checked]:group-hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                                >
                                  <span
                                    class="relative inline-flex w-5 h-5 items-center justify-center"
                                  >
                                    <input
                                      type="checkbox"
                                      class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all duration-300 ease-in-out"
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
                                <span
                                  class="text-light-primary-text group-hover:text-primary transition-colors duration-300 ease-in-out"
                                >
                                  upto 5%
                                </span>
                              </span>
                              <span
                                class="group-hover:text-primary transition-colors duration-300 ease-in-out"
                              >
                                (10)
                              </span>
                            </label>
                          </li>
                          <li class="discount-items">
                            <label
                              class="group flex items-center justify-between w-full cursor-pointer"
                            >
                              <span class="flex items-center gap-x-2">
                                <!-- custom checkbox wrapper -->
                                <span
                                  class="group-has-[input:checked]:group-hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                                >
                                  <span
                                    class="relative inline-flex w-5 h-5 items-center justify-center"
                                  >
                                    <input
                                      type="checkbox"
                                      class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all duration-300 ease-in-out"
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
                                <span
                                  class="text-light-primary-text group-hover:text-primary transition-colors duration-300 ease-in-out"
                                >
                                  5% - 10%
                                </span>
                              </span>
                              <span
                                class="group-hover:text-primary transition-colors duration-300 ease-in-out"
                              >
                                (8)
                              </span>
                            </label>
                          </li>
                          <li class="discount-items">
                            <label
                              class="group flex items-center justify-between w-full cursor-pointer"
                            >
                              <span class="flex items-center gap-x-2">
                                <!-- custom checkbox wrapper -->
                                <span
                                  class="group-has-[input:checked]:group-hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                                >
                                  <span
                                    class="relative inline-flex w-5 h-5 items-center justify-center"
                                  >
                                    <input
                                      type="checkbox"
                                      class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all duration-300 ease-in-out"
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
                                <span
                                  class="text-light-primary-text group-hover:text-primary transition-colors duration-300 ease-in-out"
                                >
                                  10% - 15%
                                </span>
                              </span>
                              <span
                                class="group-hover:text-primary transition-colors duration-300 ease-in-out"
                              >
                                (32)
                              </span>
                            </label>
                          </li>
                          <li class="discount-items">
                            <label
                              class="group flex items-center justify-between w-full cursor-pointer"
                            >
                              <span class="flex items-center gap-x-2">
                                <!-- custom checkbox wrapper -->
                                <span
                                  class="group-has-[input:checked]:group-hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                                >
                                  <span
                                    class="relative inline-flex w-5 h-5 items-center justify-center"
                                  >
                                    <input
                                      type="checkbox"
                                      class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all duration-300 ease-in-out"
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
                                <span
                                  class="text-light-primary-text group-hover:text-primary transition-colors duration-300 ease-in-out"
                                >
                                  15% - 25%
                                </span>
                              </span>
                              <span
                                class="group-hover:text-primary transition-colors duration-300 ease-in-out"
                              >
                                (12)
                              </span>
                            </label>
                          </li>
                          <li class="discount-items">
                            <label
                              class="group flex items-center justify-between w-full cursor-pointer"
                            >
                              <span class="flex items-center gap-x-2">
                                <!-- custom checkbox wrapper -->
                                <span
                                  class="group-has-[input:checked]:group-hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                                >
                                  <span
                                    class="relative inline-flex w-5 h-5 items-center justify-center"
                                  >
                                    <input
                                      type="checkbox"
                                      class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all duration-300 ease-in-out"
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
                                <span
                                  class="text-light-primary-text group-hover:text-primary transition-colors duration-300 ease-in-out"
                                >
                                  More than 25%
                                </span>
                              </span>
                              <span
                                class="group-hover:text-primary transition-colors duration-300 ease-in-out"
                              >
                                (12)
                              </span>
                            </label>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Brand-content -->
                  <div
                    class="widget-brand wow animate__animated animate__fadeInUp"
                    data-wow-delay=".2s"
                  >
                    <div
                      class="flex flex-col gap-y-4 py-8 border-b border-gray-300"
                    >
                      <div
                        class="flex items-center justify-between widget-brand-title"
                      >
                        <h6>Brand</h6>
                        <a
                          href="#"
                          class="text-base leading-[26px] hover:underline hover:text-primary transition-colors duration-300 ease-in-out"
                          >Reset</a
                        >
                      </div>
                      <div class="brand-content-list">
                        <div
                          class="max-h-[170px] overflow-y-auto pr-2.5 category-scroll"
                        >
                          <ul id="filter-brand-list" class="flex flex-col gap-y-2">
                            <li class="brand-list-item">
                              <label
                                class="group flex items-center justify-between w-full cursor-pointer"
                              >
                                <span class="flex items-center gap-x-2">
                                  <!-- custom checkbox wrapper -->
                                  <span
                                    class="group-has-[input:checked]:group-hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                                  >
                                    <span
                                      class="relative inline-flex w-5 h-5 items-center justify-center"
                                    >
                                      <input
                                        type="checkbox"
                                        class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all duration-300 ease-in-out"
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
                                  <span
                                    class="text-light-primary-text group-hover:text-primary transition-colors duration-300 ease-in-out"
                                  >
                                    Mediguard
                                  </span>
                                </span>
                                <span
                                  class="group-hover:text-primary transition-colors duration-300 ease-in-out"
                                >
                                  (8)
                                </span>
                              </label>
                            </li>
                            <li class="brand-list-item">
                              <label
                                class="group flex items-center justify-between w-full cursor-pointer"
                              >
                                <span class="flex items-center gap-x-2">
                                  <!-- custom checkbox wrapper -->
                                  <span
                                    class="group-has-[input:checked]:group-hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                                  >
                                    <span
                                      class="relative inline-flex w-5 h-5 items-center justify-center"
                                    >
                                      <input
                                        type="checkbox"
                                        class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all duration-300 ease-in-out"
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
                                  <span
                                    class="text-light-primary-text group-hover:text-primary transition-colors duration-300 ease-in-out"
                                  >
                                    HealthPlus
                                  </span>
                                </span>
                                <span
                                  class="group-hover:text-primary transition-colors duration-300 ease-in-out"
                                >
                                  (7)
                                </span>
                              </label>
                            </li>
                            <li class="brand-list-item">
                              <label
                                class="group flex items-center justify-between w-full cursor-pointer"
                              >
                                <span class="flex items-center gap-x-2">
                                  <!-- custom checkbox wrapper -->
                                  <span
                                    class="group-has-[input:checked]:group-hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                                  >
                                    <span
                                      class="relative inline-flex w-5 h-5 items-center justify-center"
                                    >
                                      <input
                                        type="checkbox"
                                        class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all duration-300 ease-in-out"
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
                                  <span
                                    class="text-light-primary-text group-hover:text-primary transition-colors duration-300 ease-in-out"
                                  >
                                    BioCare
                                  </span>
                                </span>
                                <span
                                  class="group-hover:text-primary transition-colors duration-300 ease-in-out"
                                >
                                  (3)
                                </span>
                              </label>
                            </li>
                            <li class="brand-list-item">
                              <label
                                class="group flex items-center justify-between w-full cursor-pointer"
                              >
                                <span class="flex items-center gap-x-2">
                                  <!-- custom checkbox wrapper -->
                                  <span
                                    class="group-has-[input:checked]:group-hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                                  >
                                    <span
                                      class="relative inline-flex w-5 h-5 items-center justify-center"
                                    >
                                      <input
                                        type="checkbox"
                                        class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all duration-300 ease-in-out"
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
                                  <span
                                    class="text-light-primary-text group-hover:text-primary transition-colors duration-300 ease-in-out"
                                  >
                                    SmartAid
                                  </span>
                                </span>
                                <span
                                  class="group-hover:text-primary transition-colors duration-300 ease-in-out"
                                >
                                  (1)
                                </span>
                              </label>
                            </li>
                            <li class="brand-list-item">
                              <label
                                class="group flex items-center justify-between w-full cursor-pointer"
                              >
                                <span class="flex items-center gap-x-2">
                                  <!-- custom checkbox wrapper -->
                                  <span
                                    class="group-has-[input:checked]:group-hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                                  >
                                    <span
                                      class="relative inline-flex w-5 h-5 items-center justify-center"
                                    >
                                      <input
                                        type="checkbox"
                                        class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all duration-300 ease-in-out"
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
                                  <span
                                    class="text-light-primary-text group-hover:text-primary transition-colors duration-300 ease-in-out"
                                  >
                                    Personal Care
                                  </span>
                                </span>
                                <span
                                  class="group-hover:text-primary transition-colors duration-300 ease-in-out"
                                >
                                  (1)
                                </span>
                              </label>
                            </li>
                            <li class="brand-list-item">
                              <label
                                class="group flex items-center justify-between w-full cursor-pointer"
                              >
                                <span class="flex items-center gap-x-2">
                                  <!-- custom checkbox wrapper -->
                                  <span
                                    class="group-has-[input:checked]:group-hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                                  >
                                    <span
                                      class="relative inline-flex w-5 h-5 items-center justify-center"
                                    >
                                      <input
                                        type="checkbox"
                                        class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all duration-300 ease-in-out"
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
                                  <span
                                    class="text-light-primary-text group-hover:text-primary transition-colors duration-300 ease-in-out"
                                  >
                                    SmartAid
                                  </span>
                                </span>
                                <span
                                  class="group-hover:text-primary transition-colors duration-300 ease-in-out"
                                >
                                  (3)
                                </span>
                              </label>
                            </li>
                            <li class="brand-list-item">
                              <label
                                class="group flex items-center justify-between w-full cursor-pointer"
                              >
                                <span class="flex items-center gap-x-2">
                                  <!-- custom checkbox wrapper -->
                                  <span
                                    class="group-has-[input:checked]:group-hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                                  >
                                    <span
                                      class="relative inline-flex w-5 h-5 items-center justify-center"
                                    >
                                      <input
                                        type="checkbox"
                                        class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all duration-300 ease-in-out"
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
                                  <span
                                    class="text-light-primary-text group-hover:text-primary transition-colors duration-300 ease-in-out"
                                  >
                                    Personal Care
                                  </span>
                                </span>
                                <span
                                  class="group-hover:text-primary transition-colors duration-300 ease-in-out"
                                >
                                  (1)
                                </span>
                              </label>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Discount-content -->
                  <div
                    class="widget-pack-size wow animate__animated animate__fadeInUp"
                    data-wow-delay=".2s"
                  >
                    <div class="flex flex-col gap-y-4 pt-8">
                      <div class="flex items-center justify-between">
                        <h6>Pack Size</h6>
                        <a
                          href="#"
                          class="text-base leading-[26px] hover:underline hover:text-primary transition-colors duration-300 ease-in-out"
                          >Reset</a
                        >
                      </div>
                      <div class="pack-size-lists">
                        <ul class="flex flex-col gap-y-2">
                          <li class="pack-size-list-item">
                            <label
                              class="group flex items-center justify-between w-full cursor-pointer"
                            >
                              <span class="flex items-center gap-x-2">
                                <!-- custom checkbox wrapper -->
                                <span
                                  class="group-has-[input:checked]:group-hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                                >
                                  <span
                                    class="relative inline-flex w-5 h-5 items-center justify-center"
                                  >
                                    <input
                                      type="checkbox"
                                      class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all duration-300 ease-in-out"
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
                                <span
                                  class="text-light-primary-text group-hover:text-primary transition-colors duration-300 ease-in-out"
                                >
                                  400 to 500 g
                                </span>
                              </span>
                              <span
                                class="group-hover:text-primary transition-colors duration-300 ease-in-out"
                              >
                                (40)
                              </span>
                            </label>
                          </li>
                          <li class="pack-size-list-item">
                            <label
                              class="group flex items-center justify-between w-full cursor-pointer"
                            >
                              <span class="flex items-center gap-x-2">
                                <!-- custom checkbox wrapper -->
                                <span
                                  class="group-has-[input:checked]:group-hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                                >
                                  <span
                                    class="relative inline-flex w-5 h-5 items-center justify-center"
                                  >
                                    <input
                                      type="checkbox"
                                      class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all duration-300 ease-in-out"
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
                                <span
                                  class="text-light-primary-text group-hover:text-primary transition-colors duration-300 ease-in-out"
                                >
                                  500 to 700 g
                                </span>
                              </span>
                              <span
                                class="group-hover:text-primary transition-colors duration-300 ease-in-out"
                              >
                                (20)
                              </span>
                            </label>
                          </li>
                          <li class="pack-size-list-item">
                            <label
                              class="group flex items-center justify-between w-full cursor-pointer"
                            >
                              <span class="flex items-center gap-x-2">
                                <!-- custom checkbox wrapper -->
                                <span
                                  class="group-has-[input:checked]:group-hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                                >
                                  <span
                                    class="relative inline-flex w-5 h-5 items-center justify-center"
                                  >
                                    <input
                                      type="checkbox"
                                      class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all duration-300 ease-in-out"
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
                                <span
                                  class="text-light-primary-text group-hover:text-primary transition-colors duration-300 ease-in-out"
                                >
                                  700 to 1 kg
                                </span>
                              </span>
                              <span
                                class="group-hover:text-primary transition-colors duration-300 ease-in-out"
                              >
                                (32)
                              </span>
                            </label>
                          </li>
                          <li class="pack-size-list-item">
                            <label
                              class="group flex items-center justify-between w-full cursor-pointer"
                            >
                              <span class="flex items-center gap-x-2">
                                <!-- custom checkbox wrapper -->
                                <span
                                  class="group-has-[input:checked]:group-hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                                >
                                  <span
                                    class="relative inline-flex w-5 h-5 items-center justify-center"
                                  >
                                    <input
                                      type="checkbox"
                                      class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all duration-300 ease-in-out"
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
                                <span
                                  class="text-light-primary-text group-hover:text-primary transition-colors duration-300 ease-in-out"
                                >
                                  120 - 150 g each vacuum
                                </span>
                              </span>
                              <span
                                class="group-hover:text-primary transition-colors duration-300 ease-in-out"
                              >
                                (20)
                              </span>
                            </label>
                          </li>
                          <li class="pack-size-list-item">
                            <label
                              class="group flex items-center justify-between w-full cursor-pointer"
                            >
                              <span class="flex items-center gap-x-2">
                                <!-- custom checkbox wrapper -->
                                <span
                                  class="group-has-[input:checked]:group-hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out"
                                >
                                  <span
                                    class="relative inline-flex w-5 h-5 items-center justify-center"
                                  >
                                    <input
                                      type="checkbox"
                                      class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all duration-300 ease-in-out"
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
                                <span
                                  class="text-light-primary-text group-hover:text-primary transition-colors duration-300 ease-in-out"
                                >
                                  1 pc
                                </span>
                              </span>
                              <span
                                class="group-hover:text-primary transition-colors duration-300 ease-in-out"
                              >
                                (09)
                              </span>
                            </label>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="xl:col-span-9 lg:col-span-8 col-span-12 row-start-1 lg:row-start-auto"
          >
            <div
              class="flex items-center justify-between pb-12 wow animate__animated animate__fadeInUp"
              data-wow-delay=".2s"
            >
              <div class="flex items-center gap-x-4 shrink-0 justify-start">
                <!-- vendor-filter-button -->
                <div class="flex items-center gap-x-4">
                  <a class='w-10 h-10 rounded-full inline-flex items-center justify-center btn btn-default outline shadow-none cursor-pointer' href='banner-list-with-sidebar.html'>
                    <span class="inline-flex items-center justify-center">
                      <i
                        class="hgi hgi-stroke hgi-left-to-right-list-bullet text-2xl leading-6"
                      ></i>
                    </span>
                  </a>
                  <a
                    href="#"
                    class="w-10 h-10 rounded-full inline-flex items-center justify-center btn-primary cursor-pointer"
                  >
                    <span class="inline-flex items-center justify-center"
                      ><i
                        class="hgi hgi-stroke hgi-more-01 text-2xl leading-6 text-white"
                      ></i
                    ></span>
                  </a>
                </div>
                <div class="lg:flex hidden">
                  <p id="shop-results-count" class="text-light-secondary-text">
                    Loading products...
                  </p>
                </div>
              </div>
              <!-- Sorting -->
              <div class="relative min-w-[100px]">
                <select id="sorting" class="filter-select label">
                  <option value="popularity" selected>Popularity</option>
                  <option value="low-to-high-price">Low to High Price</option>
                  <option value="high-to-low-price">High to Low Price</option>
                  <option value="discount_high">Highest Discount</option>
                  <option value="avarage-rating">Avarage Rating</option>
                  <option value="a-z-order">A-Z Order</option>
                  <option value="z-a-order">Z-A Order</option>
                </select>
                <label for="sorting" class="nice-select-label">Sorting</label>
              </div>
            </div>
            <div id="product-grid" class="grid grid-cols-12 gap-6 pb-12">
              <!-- products loaded via API -->
              <div
                class="2xl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".2s"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-detail.php'>
                        <img
                          src="assets/images/vitamin-c.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-detail.php'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
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
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>
                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="2xl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".3s"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-detail.php'>
                        <img
                          src="assets/images/vitamin-b12.png"
                          alt="product-2"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-detail.php'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
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
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>
                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="2xl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".4s"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-detail.php'>
                        <img
                          src="assets/images/hand-sanitizer-1.png"
                          alt="product-3"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-detail.php'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
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
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>
                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="2xl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".5s"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-detail.php'>
                        <img
                          src="assets/images/temperature-gun-3.png"
                          alt="product-4"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-detail.php'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
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
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>
                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="2xl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".2s"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-detail.php'>
                        <img
                          src="assets/images/softovac.png"
                          alt="product-5"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-detail.php'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
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
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>
                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="2xl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".3s"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-detail.php'>
                        <img
                          src="assets/images/ground-nuts-oil.png"
                          alt="product-6"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-detail.php'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
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
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>
                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="2xl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".4s"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-detail.php'>
                        <img
                          src="assets/images/aacka.png"
                          alt="product-7"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-detail.php'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
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
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>
                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="2xl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".5s"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-detail.php'>
                        <img
                          src="assets/images/vitamin-c-2.png"
                          alt="product-8"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-detail.php'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
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
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>
                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="2xl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".2s"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-detail.php'>
                        <img
                          src="assets/images/apple-juice.png"
                          alt="product-9"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-detail.php'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
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
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>
                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="2xl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".3s"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-detail.php'>
                        <img
                          src="assets/images/temperature-gun-1.png"
                          alt="product-10"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-detail.php'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
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
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>
                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="2xl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".4s"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-detail.php'>
                        <img
                          src="assets/images/hand-sanitizer-2.png"
                          alt="product-11"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-detail.php'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
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
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>
                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="2xl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".5s"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-detail.php'>
                        <img
                          src="assets/images/bp-machine-2.png"
                          alt="product-12"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-detail.php'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
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
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>
                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="2xl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".2s"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-detail.php'>
                        <img
                          src="assets/images/baked-beans.png"
                          alt="product-13"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-detail.php'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
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
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>
                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="2xl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".3s"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-detail.php'>
                        <img
                          src="assets/images/cookies-1.png"
                          alt="product-14"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-detail.php'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
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
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>
                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="2xl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".4s"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-detail.php'>
                        <img
                          src="assets/images/temperature-gun-2.png"
                          alt="product-15"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-detail.php'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
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
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>
                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="2xl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".5s"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-detail.php'>
                        <img
                          src="assets/images/bp-machine-3.png"
                          alt="product-16"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-detail.php'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
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
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>
                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- pagination -->
            <div
              class="grid grid-cols-12 wow animate__animated animate__fadeInUp"
              data-wow-delay=".2s"
            >
              <div class="col-span-12">
                <ul
                  id="shop-pagination"
                  class="flex items-center justify-center gap-x-1.5 blog-pagination"
                ></ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ========== Filter with 3-column Section End ========== -->
        <!-- ========== API JS ========== -->
    <script src="assets/api/domin.js"></script>
    <script src="assets/api/product.js"></script>

   <?php include 'footer.php'; ?>
