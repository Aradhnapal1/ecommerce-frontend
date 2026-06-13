<?php include 'header.php'; ?>


    <!-- ========== Breadcrumb Section Start ========== -->
    <div class="py-12">
      <div class="container">
        <div class="breadcrumb">
          <ul>
            <li>
              <a href='index.html'>
                <span>
                  <i class="hgi hgi-stroke hgi-home-01 text-[20px]"></i>
                </span>
                Home
              </a>
            </li>
            <li class="text-light-disabled-text">&#8226;</li>
            <li><span id="product-breadcrumb-name">Product Details</span></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- ========== Breadcrumb Section End ========== -->

    <!-- ========== Product Details Section Start ========== -->
    <section id="product-detail-page">
      <div class="container">
        <div class="lg:grid lg:grid-cols-12 lg:gap-12">
          <div class="xl:col-span-7 lg:col-span-6">
            <div
              class="flex gap-x-6 xl:flex-row flex-col gap-y-6 xl:gap-y-0 xl:gap-x-6"
            >
              <div
                class="xl:w-[114px] lg:w-full order-2 xl:order-1 flex-none overflow-hidden"
              >
                <div
                  id="product-details-small-slider"
                  class="product-details-small-slider -m-2.5 sellzy-slider"
                  data-slick='{"slidesToShow": 6, "slidesToScroll": 1, "arrows": false, "infinite": true, "loop": true, "vertical": true, "verticalSwiping": true, "asNavFor": ".product-details-big-slider", "focusOnSelect": true, "responsive": [{"breakpoint": 1025, "settings": {"slidesToShow": 4, "vertical": false, "verticalSwiping": false}}, {"breakpoint": 769, "settings": {"slidesToShow": 3, "vertical": false, "verticalSwiping": false}}, {"breakpoint": 480, "settings": {"slidesToShow": 2, "vertical": false, "verticalSwiping": false}}]}'
                >
                  <div
                    class="single-product-small-slider-item p-2.5 rounded-lg overflow-hidden"
                  >
                    <img
                      src="assets/images/product-details/product-details-slider-1.png"
                      alt="product-image"
                      class="w-full h-full object-cover rounded-lg"
                    />
                  </div>
                  <div
                    class="single-product-small-slider-item p-2.5 rounded-lg overflow-hidden"
                  >
                    <img
                      src="assets/images/product-details/product-details-slider-2.png"
                      alt="product-image"
                      class="w-full h-full object-cover rounded-lg"
                    />
                  </div>
                  <div
                    class="single-product-small-slider-item p-2.5 rounded-lg overflow-hidden"
                  >
                    <img
                      src="assets/images/product-details/product-details-slider-3.png"
                      alt="product-image"
                      class="w-full h-full object-cover rounded-lg"
                    />
                  </div>
                  <div
                    class="single-product-small-slider-item p-2.5 rounded-lg overflow-hidden"
                  >
                    <img
                      src="assets/images/product-details/product-details-slider-4.png"
                      alt="product-image"
                      class="w-full h-full object-cover rounded-lg"
                    />
                  </div>
                  <div
                    class="single-product-small-slider-item p-2.5 rounded-lg overflow-hidden"
                  >
                    <img
                      src="assets/images/product-details/product-details-slider-5.png"
                      alt="product-image"
                      class="w-full h-full object-cover rounded-lg"
                    />
                  </div>
                  <div
                    class="single-product-small-slider-item p-2.5 rounded-lg overflow-hidden"
                  >
                    <img
                      src="assets/images/product-details/product-details-slider-6.png"
                      alt="product-image"
                      class="w-full h-full object-cover rounded-lg"
                    />
                  </div>
                  <div
                    class="single-product-small-slider-item p-2.5 rounded-lg overflow-hidden"
                  >
                    <img
                      src="assets/images/product-details/product-details-slider-3.png"
                      alt="product-image"
                      class="w-full h-full object-cover rounded-lg"
                    />
                  </div>
                </div>
              </div>
              <div
                class="w-full xl:flex-1 order-1 xl:order-2 overflow-hidden relative"
              >
                <div
                  id="product-details-big-slider"
                  class="product-details-big-slider -mx-3 sellzy-slider"
                  data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows": true, "asNavFor": ".product-details-small-slider", "appendArrows": ".product-details-big-slider-nav", "responsive": [{"breakpoint": 769, "settings": {"slidesToShow": 1, "arrows": false}}]}'
                >
                  <div
                    class="single-product-big-slider-item px-3 rounded-2xl overflow-hidden"
                  >
                    <img
                      src="assets/images/product-details/product-details-slider-1.png"
                      alt="product-image"
                      class="w-full h-full object-cover rounded-3xl"
                    />
                  </div>
                  <div
                    class="single-product-big-slider-item px-3 rounded-2xl overflow-hidden"
                  >
                    <img
                      src="assets/images/product-details/product-details-slider-2.png"
                      alt="product-image"
                      class="w-full h-full object-cover rounded-3xl"
                    />
                  </div>
                  <div
                    class="single-product-big-slider-item px-3 rounded-2xl overflow-hidden"
                  >
                    <img
                      src="assets/images/product-details/product-details-slider-3.png"
                      alt="product-image"
                      class="w-full h-full object-cover rounded-3xl"
                    />
                  </div>
                  <div
                    class="single-product-big-slider-item px-3 rounded-2xl overflow-hidden"
                  >
                    <img
                      src="assets/images/product-details/product-details-slider-4.png"
                      alt="product-image"
                      class="w-full h-full object-cover rounded-3xl"
                    />
                  </div>
                  <div
                    class="single-product-big-slider-item px-3 rounded-2xl overflow-hidden"
                  >
                    <img
                      src="assets/images/product-details/product-details-slider-5.png"
                      alt="product-image"
                      class="w-full h-full object-cover rounded-3xl"
                    />
                  </div>
                  <div
                    class="single-product-big-slider-item px-3 rounded-2xl overflow-hidden"
                  >
                    <img
                      src="assets/images/product-details/product-details-slider-6.png"
                      alt="product-image"
                      class="w-full h-full object-cover rounded-3xl"
                    />
                  </div>
                </div>
                <div
                  class="product-details-big-slider-nav absolute top-1/2 -translate-y-1/2 left-0 right-0 flex items-center justify-between px-3"
                ></div>
              </div>
            </div>
          </div>
          <div class="xl:col-span-5 lg:col-span-6 mt-6 lg:mt-0">
            <div class="rounded-3xl border border-gray-300 p-6">
              <span
                id="product-sale-badge"
                class="product-discount-badge inline-block mb-6 uppercase relative bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain after:bg-no-repeat"
                >Sales</span
              >
              <p
                class="uppercase text-info text-xs leading-[18px] font-bold new-arrival-badge mb-6"
              >
                New Arrival
              </p>
              <div
                class="product-title-section flex items-center justify-between mb-6"
              >
                <h3 id="product-title" class="line-clamp-1">
                  VitaLife Omega-3 Softgels Heart Support Max Strength
                </h3>
                <a class='size-10 inline-flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist.php'>
                  <i
                    class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                  ></i>
                </a>
              </div>
              <div class="rating-section flex items-center mb-4">
                <div
                  class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                >
                  <div
                    style="width: 80%"
                    class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                  ></div>
                </div>
                <span class="font-normal inline-block ml-1"
                  >(11.78k reviews)</span
                >
              </div>
              <div class="price-section flex items-center gap-x-3 mb-6">
                <span
                  id="product-current-price"
                  class="current-price text-2xl leading-9 font-bold text-light-primary-text relative after:absolute after:h-6 after:w-px after:bg-gray-300 after:right-0 after:top-1/2 after:-translate-y-1/2 pr-3 inline-block"
                  >$62.97</span
                >
                <span
                  id="product-old-price"
                  class="old-price text-2xl leading-9 font-normal text-light-disabled-text"
                  >$39.99</span
                >
                <span
                  id="product-discount-badge"
                  class="product-discount-badge uppercase relative bg-warning text-black font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-warning-shape.html')] after:bg-contain after:bg-no-repeat"
                  >15% OFF</span
                >
              </div>
              <div
                class="product-add-to-cart-section py-6 border-b border-dashed border-gray-300 border-t"
              >
                <div id="product-color-section" class="color-variation-section mb-6">
                  <div class="color-variation-section-title mb-4">
                    <p
                      class="font-semibold text-light-primary-text flex items-center gap-x-2.5"
                    >
                      Color:
                      <span
                        class="text-light-primary-text font-normal capitalize color-variation-selected-color"
                        >Green</span
                      >
                    </p>
                  </div>
                  <div class="color-variation-items flex items-center gap-x-2">
                    <div class="color-variation-item">
                      <button
                        data-color-text="green"
                        data-color="#088178"
                        class="cursor-pointer flex items-center justify-center rounded-full size-10 border border-primary hover:bg-[rgba(145,158,171,0.08)]"
                      >
                        <img
                          src="assets/images/product-details/color-selector-1.png"
                          alt="color"
                        />
                      </button>
                    </div>
                    <div class="color-variation-item">
                      <button
                        data-color-text="blue"
                        data-color="#3366FF"
                        class="cursor-pointer flex items-center justify-center rounded-full size-10 border border-gray-300 hover:bg-[rgba(145,158,171,0.08)]"
                      >
                        <img
                          src="assets/images/product-details/color-selector-2.png"
                          alt="color"
                        />
                      </button>
                    </div>
                    <div class="color-variation-item">
                      <button
                        data-color-text="yellow"
                        data-color="#FFC107"
                        class="cursor-pointer flex items-center justify-center rounded-full size-10 border border-gray-300 hover:bg-[rgba(145,158,171,0.08)]"
                      >
                        <img
                          src="assets/images/product-details/color-selector-3.png"
                          alt="color"
                        />
                      </button>
                    </div>
                    <div class="color-variation-item">
                      <button
                        data-color-text="red"
                        data-color="#CB0233"
                        class="cursor-pointer flex items-center justify-center rounded-full size-10 border border-gray-300 hover:bg-[rgba(145,158,171,0.08)]"
                      >
                        <img
                          src="assets/images/product-details/color-selector-4.png"
                          alt="color"
                        />
                      </button>
                    </div>
                  </div>
                </div>
                <div class="size-variation-section mb-6">
                  <div
                    class="size-variation-section-title mb-4 flex items-center justify-between"
                  >
                    <p
                      class="font-semibold text-light-primary-text flex items-center gap-x-2.5"
                    >
                      Size:
                      <span
                        class="text-light-primary-text font-normal capitalize size-variation-selected-size"
                        >S</span
                      >
                    </p>
                    <a
                      href="#"
                      class="text-sm leading-[22px] hover:underline variation-size-guide-btn"
                      >Size Guide</a
                    >
                  </div>
                  <div
                    id="product-size-items"
                    class="size-variation-items flex items-center gap-2 2xl:flex-nowrap flex-wrap"
                  >
                    <div class="size-variation-item">
                      <button
                        data-size-text="S"
                        class="cursor-pointer flex items-center justify-center text-sm leading-6 px-10 py-1.5 font-semibold border border-primary bg-primary rounded-[100px] text-white hover:bg-primary"
                      >
                        S
                      </button>
                    </div>
                    <div class="size-variation-item">
                      <button
                        data-size-text="M"
                        class="cursor-pointer flex items-center justify-center text-sm leading-6 px-[38px] py-1.5 text-light-primary-text font-semibold border border-gray-300 rounded-[100px] hover:bg-[rgba(145,158,171,0.08)]"
                      >
                        M
                      </button>
                    </div>
                    <div class="size-variation-item">
                      <button
                        data-size-text="L"
                        class="cursor-pointer flex items-center justify-center text-sm leading-6 px-[38px] py-1.5 text-light-primary-text font-semibold border border-gray-300 rounded-[100px] hover:bg-[rgba(145,158,171,0.08)]"
                      >
                        L
                      </button>
                    </div>
                    <div class="size-variation-item">
                      <button
                        data-size-text="XL"
                        class="cursor-pointer flex items-center justify-center text-sm leading-6 px-[38px] py-1.5 text-light-primary-text font-semibold border border-gray-300 rounded-[100px] hover:bg-[rgba(145,158,171,0.08)]"
                      >
                        XL
                      </button>
                    </div>
                    <div class="size-variation-item">
                      <button
                        data-size-text="XXL"
                        class="cursor-pointer flex items-center justify-center text-sm leading-6 px-[38px] py-2 text-light-primary-text font-semibold border border-gray-300 rounded-[100px] hover:bg-[rgba(145,158,171,0.08)]"
                      >
                        XXL
                      </button>
                    </div>
                    <div class="size-variation-item">
                      <button
                        data-size-text="XXXL"
                        class="cursor-pointer flex items-center justify-center text-sm leading-6 px-[38px] py-2 text-light-primary-text font-semibold border border-gray-300 rounded-[100px] hover:bg-[rgba(145,158,171,0.08)]"
                      >
                        XXXL
                      </button>
                    </div>
                  </div>
                </div>
                <div class="product-add-to-cart-btn-section">
                  <p class="font-semibold text-light-primary-text mb-4">
                    Quantity:
                  </p>
                  <div
                    class="flex items-center justify-between gap-x-4 gap-y-4 flex-wrap md:flex-nowrap md:gap-y-0"
                  >
                    <div
                      class="quantity-section flex-1 max-w-[185px] border border-gray-300 rounded-[80px] px-4 py-[11px] flex items-center justify-between"
                    >
                      <button
                        class="quantity-btn inline-flex items-center justify-center hover:text-primary"
                      >
                        <i
                          class="hgi hgi-stroke hgi-minus-sign text-xl leading-5"
                        ></i>
                      </button>
                      <input
                        type="text"
                        class="quantity-input text-center w-full focus:outline-none font-semibold text-base leading-6 text-light-primary-text"
                        value="1"
                      />
                      <button
                        class="quantity-btn inline-flex items-center justify-center hover:text-primary"
                      >
                        <i
                          class="hgi hgi-stroke hgi-plus-sign text-xl leading-5"
                        ></i>
                      </button>
                    </div>
                    <button
                      class="btn btn-warning btn-large rounded-[80px] flex-1"
                    >
                      Buy Now
                    </button>
                    <button
                      class="btn btn-primary btn-large rounded-[80px] flex-1"
                    >
                      <i
                        class="hgi hgi-stroke hgi-shopping-cart-add-02 leading-6 text-2xl text-white"
                      ></i>
                      Add to Cart
                    </button>
                  </div>
                </div>
              </div>
              <div
                class="product-share-and-compare-section flex items-center gap-x-4 mt-6"
              >
                <a
                  href="#"
                  class="product-share-btn text-info inline-flex items-center gap-x-2.5 pr-4 relative after:absolute after:top-1/2 after:-translate-y-1/2 after:right-0 after:w-px after:h-3 after:bg-gray-300"
                >
                  <i class="hgi hgi-stroke hgi-share-05 text-xl leading-5"></i>
                  <span>Share</span>
                </a>
                <a class='product-compare-btn text-info inline-flex items-center gap-x-2.5' href='compare.html'>
                  <i
                    class="hgi hgi-stroke hgi-git-compare text-xl leading-5"
                  ></i>
                  <span>Compare</span>
                </a>
              </div>
              <div
                class="product-extra-info-section flex flex-col gap-y-4 mt-6"
              >
                <div
                  class="product-extra-info-item flex items-center gap-x-4 gap-y-4 flex-wrap md:flex-nowrap md:gap-y-0"
                >
                  <p class="font-semibold text-light-primary-text">
                    Free Shipping:
                  </p>
                  <p>Estimated Delivery Time 5-7 Days</p>
                </div>
                <div
                  class="product-extra-info-item flex items-center gap-x-4 gap-y-4 flex-wrap md:flex-nowrap md:gap-y-0"
                >
                  <p class="font-semibold text-light-primary-text">SKU:</p>
                  <p id="product-sku-value">SKU-001</p>
                </div>
                <div
                  class="product-extra-info-item flex items-center gap-x-4 gap-y-4 flex-wrap md:flex-nowrap md:gap-y-0"
                >
                  <p class="font-semibold text-light-primary-text">
                    Categories:
                  </p>
                  <p id="product-category-value">Electronics, Computers, Accessories</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ========== Product Details Section End ========== -->

    <!-- ========== CTA Info Section Start ========== -->
    <section class="py-12">
      <div class="container">
        <div class="grid grid-cols-12 gap-6">
          <div class="md:col-span-6 col-span-12 xl:col-span-3">
            <div
              class="p-6 border-gray-300 border rounded-2xl text-center wow animate__animated animate__fadeInUp"
              data-wow-delay=".2s"
            >
              <span
                class="inline-flex items-center justify-center size-14 bg-warning-lighter rounded-full"
              >
                <i
                  class="hgi hgi-stroke hgi-container-truck text-3xl text-light-primary-text"
                ></i>
              </span>
              <h5 class="pt-3 pb-0.5">Free Shipping</h5>
              <p>Enjoy the Convenience of Free Shipping on Every Order</p>
            </div>
          </div>
          <div class="md:col-span-6 col-span-12 xl:col-span-3">
            <div
              class="p-6 border-gray-300 border rounded-2xl text-center wow animate__animated animate__fadeInUp"
              data-wow-delay=".3s"
            >
              <span
                class="inline-flex items-center justify-center size-14 bg-warning-lighter rounded-full"
              >
                <i
                  class="hgi hgi-stroke hgi-customer-support text-3xl text-light-primary-text"
                ></i>
              </span>
              <h5 class="pt-3 pb-0.5">24x7 Support</h5>
              <p>Round-the-Clock Assistance, Anytime You Need It</p>
            </div>
          </div>
          <div class="md:col-span-6 col-span-12 xl:col-span-3">
            <div
              class="p-6 border-gray-300 border rounded-2xl text-center wow animate__animated animate__fadeInUp"
              data-wow-delay=".4s"
            >
              <span
                class="inline-flex items-center justify-center size-14 bg-warning-lighter rounded-full"
              >
                <i
                  class="hgi hgi-stroke hgi-delivery-return-02 text-3xl text-light-primary-text"
                ></i>
              </span>
              <h5 class="pt-3 pb-0.5">30 Days Return</h5>
              <p>
                Your Satisfaction is Our Priority: Return Any Product Within 30
                Days
              </p>
            </div>
          </div>
          <div class="md:col-span-6 col-span-12 xl:col-span-3">
            <div
              class="p-6 border-gray-300 border rounded-2xl text-center wow animate__animated animate__fadeInUp"
              data-wow-delay=".5s"
            >
              <span
                class="inline-flex items-center justify-center size-14 bg-warning-lighter rounded-full"
              >
                <i
                  class="hgi hgi-stroke hgi-transaction text-3xl text-light-primary-text"
                ></i>
              </span>
              <h5 class="pt-3 pb-0.5">Secure Payment</h5>
              <p>Seamless Shopping Backed by Safe and Secure Payment Options</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ========== CTA Info Section End ========== -->

    <!-- ========== Tabs Section Start ========== -->
    <section class="pb-12">
      <div class="container">
        <div id="product-details-tabs">
          <ul class="filter-list">
            <li>
              <button class="active" data-tab="description">Description</button>
            </li>
            <li><button data-tab="additional-info">Additional Info</button></li>
            <li><button data-tab="reviews">Reviews</button></li>
          </ul>
          <div id="description" class="product-details-tab active fade">
            <h5 class="product-details-tab-title">Description</h5>
            <div id="product-description-content" class="product-details-tab-content">
              <p class="mb-6">
                To begin, carefully unpack the product and ensure all necessary
                components are included. Place the product on a clean, flat
                surface before use. If the device requires power, insert the
                batteries or connect it to a power source as indicated in the
                manual. Press the power button to activate the product, and
                refer to the control panel or app interface to adjust the
                settings according to your preference. Use the product as
                recommended, following all safety guidelines provided. After
                use, turn off the device and disconnect it from the power
                source. Clean and store the product in a cool, dry place to
                maintain its condition for future use.
              </p>
              <p class="mb-6">
                To begin, carefully unpack the product and ensure all necessary
                components are included. Place the product on a clean, flat
                surface before use. If the device requires power, insert the
                batteries or connect it to a power source as indicated in the
                manual. Press the power button to activate the product, and
                refer to the control panel or app interface to adjust the
                settings according to your preference. Use the product as
                recommended, following all safety guidelines provided. After
                use, turn off the device and disconnect it from the power
                source. Clean and store the product in a cool, dry place to
                maintain its condition for future use.
              </p>
              <div
                class="lg:grid lg:grid-cols-12 lg:gap-x-18 gap-y-6 lg:gap-y-0 mb-6"
              >
                <div class="lg:col-span-6">
                  <ul>
                    <li>
                      <p>
                        Real-time shipping rates, tracking, and delivery
                        management
                      </p>
                    </li>
                    <li>
                      <p>
                        Real-time stock tracking and alerts for low inventory
                      </p>
                    </li>
                    <li>
                      <p>
                        Support for multiple payment options like credit cards,
                        PayPal, Stripe,
                      </p>
                    </li>
                  </ul>
                </div>
                <div class="lg:col-span-6 mt-6 lg:mt-0">
                  <ul>
                    <li>
                      <p>
                        Real-time shipping rates, tracking, and delivery
                        management
                      </p>
                    </li>
                    <li>
                      <p>
                        Real-time stock tracking and alerts for low inventory
                      </p>
                    </li>
                    <li>
                      <p>
                        Support for multiple payment options like credit cards,
                        PayPal, Stripe,
                      </p>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="mb-6">
                <img
                  src="assets/images/product-details/product-details-1.png"
                  alt="product-details"
                  class="rounded-3xl"
                />
              </div>
              <div class="lg:grid lg:grid-cols-12 lg:gap-x-18 items-center">
                <div class="lg:col-span-7">
                  <h4 class="mb-6">Easy to Customization</h4>
                  <p class="mb-6">
                    Launch, manage, and grow your online store with our
                    all-in-one eCommerce solution. Whether you're a small
                    business or a growing brand, our platform is designed to
                    simplify the selling process and enhance your customers’
                    shopping experience. From product listings to secure
                    payments and seamless shipping, everything you need is built
                    right in.
                  </p>
                  <ul>
                    <li>
                      <p>
                        Real-time shipping rates, tracking, and delivery
                        management
                      </p>
                    </li>
                    <li>
                      <p>
                        Real-time stock tracking and alerts for low inventory
                      </p>
                    </li>
                    <li>
                      <p>
                        Support for multiple payment options like credit cards,
                        PayPal, Stripe,
                      </p>
                    </li>
                    <li>
                      <p>
                        Seamless experience across smartphones, tablets, and
                        desktops
                      </p>
                    </li>
                    <li>
                      <p>
                        Track sales, traffic, conversion rates, and customer
                        behavior
                      </p>
                    </li>
                    <li>
                      <p>
                        Allow customers to track orders, reorder, and manage
                        profiles
                      </p>
                    </li>
                  </ul>
                </div>
                <div class="lg:col-span-5 mt-6 lg:mt-0">
                  <img
                    src="assets/images/product-details/product-details-2.png"
                    alt="product-details"
                    class="rounded-3xl"
                  />
                </div>
              </div>
            </div>
          </div>
          <div id="additional-info" class="product-details-tab hidden">
            <h5 class="product-details-tab-title">Additional Info</h5>
            <div class="product-details-tab-content">
              <table class="w-full border-collapse">
                <tbody id="product-additional-info-body" class="divide-y divide-gray-300">
                  <tr>
                    <th
                      class="font-semibold w-[180px] text-left py-3 text-light-primary-text"
                    >
                      Product Type
                    </th>
                    <td>Touchless Infrared Thermometer</td>
                  </tr>
                  <tr>
                    <th
                      class="font-semibold w-[180px] text-left py-3 text-light-primary-text"
                    >
                      Brand
                    </th>
                    <td>Mediguard</td>
                  </tr>
                  <tr>
                    <th
                      class="font-semibold w-[180px] text-left py-3 text-light-primary-text"
                    >
                      Model
                    </th>
                    <td>X200</td>
                  </tr>
                  <tr>
                    <th
                      class="font-semibold w-[180px] text-left py-3 text-light-primary-text"
                    >
                      Measurement Time
                    </th>
                    <td>1 Second</td>
                  </tr>
                  <tr>
                    <th
                      class="font-semibold w-[180px] text-left py-3 text-light-primary-text"
                    >
                      Contact Type
                    </th>
                    <td>Non-Contact</td>
                  </tr>
                  <tr>
                    <th
                      class="font-semibold w-[180px] text-left py-3 text-light-primary-text"
                    >
                      Measurement Range
                    </th>
                    <td>32°C – 42.9°C / 89.6°F – 109.2°F</td>
                  </tr>
                  <tr>
                    <th
                      class="font-semibold w-[180px] text-left py-3 text-light-primary-text"
                    >
                      Modes
                    </th>
                    <td>Body & Surface</td>
                  </tr>
                  <tr>
                    <th
                      class="font-semibold w-[180px] text-left py-3 text-light-primary-text"
                    >
                      Accuracy
                    </th>
                    <td>±0.2°C / ±0.4°F</td>
                  </tr>
                  <tr>
                    <th
                      class="font-semibold w-[180px] text-left py-3 text-light-primary-text"
                    >
                      Memory Capacity
                    </th>
                    <td>20 Readings</td>
                  </tr>
                  <tr>
                    <th
                      class="font-semibold w-[180px] text-left py-3 text-light-primary-text"
                    >
                      Display Type
                    </th>
                    <td>Backlit LCD</td>
                  </tr>
                  <tr>
                    <th
                      class="font-semibold w-[180px] text-left py-3 text-light-primary-text"
                    >
                      Battery Type
                    </th>
                    <td>2 × AAA (not included)</td>
                  </tr>
                  <tr>
                    <th
                      class="font-semibold w-[180px] text-left py-3 text-light-primary-text"
                    >
                      Dimensions
                    </th>
                    <td>150mm × 40mm × 45mm</td>
                  </tr>
                  <tr>
                    <th
                      class="font-semibold w-[180px] text-left py-3 text-light-primary-text"
                    >
                      Weight
                    </th>
                    <td>90g (without batteries)</td>
                  </tr>
                  <tr>
                    <th
                      class="font-semibold w-[180px] text-left py-3 text-light-primary-text"
                    >
                      Warranty
                    </th>
                    <td>1 Year</td>
                  </tr>
                  <tr>
                    <th
                      class="font-semibold w-[180px] text-left py-3 text-light-primary-text"
                    >
                      Usage
                    </th>
                    <td>Suitable for all age groups</td>
                  </tr>
                  <tr>
                    <th
                      class="font-semibold w-[180px] text-left py-3 text-light-primary-text"
                    >
                      Certification
                    </th>
                    <td>CE, FDA Approved</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div id="reviews" class="product-details-tab hidden">
            <h5 class="product-details-tab-title">Reviews</h5>
            <div class="product-details-tab-content p-0!">
              <div
                class="grid grid-cols-12 md:divide-x divide-y md:divide-y-0 divide-gray-300 rating-overview"
              >
                <div
                  class="md:col-span-4 col-span-12 flex items-center justify-center py-6 md:py-0"
                >
                  <div class="rating-heading space-y-2 text-center">
                    <p class="font-semibold text-light-primary-text">
                      Average Rating
                    </p>
                    <h2 class="text-error">4/5</h2>
                    <div
                      class="rating-section flex items-center justify-center"
                    >
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                    </div>
                    <p>(8.24k reviews)</p>
                  </div>
                </div>
                <div
                  class="md:col-span-4 col-span-12 p-6 flex items-center justify-center"
                >
                  <div class="list-rating space-y-6 w-full">
                    <div class="flex gap-x-4 items-center">
                      <span class="font-semibold text-light-primary-text"
                        >5 Star</span
                      >
                      <div
                        class="progress w-full flex-1 h-1.5 bg-[rgba(145,158,171,0.24)] rounded-[50px] overflow-hidden"
                      >
                        <div
                          style="width: 70%"
                          class="progress-bar h-full bg-primary rounded-[50px]"
                        ></div>
                      </div>
                      <span>35.74k</span>
                    </div>
                    <div class="flex gap-x-4 items-center">
                      <span class="font-semibold text-light-primary-text"
                        >4 Star</span
                      >
                      <div
                        class="progress w-full flex-1 h-1.5 bg-[rgba(145,158,171,0.24)] rounded-[50px] overflow-hidden"
                      >
                        <div
                          style="width: 70%"
                          class="progress-bar h-full bg-primary rounded-[50px]"
                        ></div>
                      </div>
                      <span>79.41k</span>
                    </div>
                    <div class="flex gap-x-4 items-center">
                      <span class="font-semibold text-light-primary-text"
                        >3 Star</span
                      >
                      <div
                        class="progress w-full flex-1 h-1.5 bg-[rgba(145,158,171,0.24)] rounded-[50px] overflow-hidden"
                      >
                        <div
                          style="width: 70%"
                          class="progress-bar h-full bg-primary rounded-[50px]"
                        ></div>
                      </div>
                      <span>60.69k</span>
                    </div>
                    <div class="flex gap-x-4 items-center">
                      <span class="font-semibold text-light-primary-text"
                        >2 Star</span
                      >
                      <div
                        class="progress w-full flex-1 h-1.5 bg-[rgba(145,158,171,0.24)] rounded-[50px] overflow-hidden"
                      >
                        <div
                          style="width: 70%"
                          class="progress-bar h-full bg-primary rounded-[50px]"
                        ></div>
                      </div>
                      <span>42.12k</span>
                    </div>
                    <div class="flex gap-x-4 items-center">
                      <span class="font-semibold text-light-primary-text"
                        >1 Star</span
                      >
                      <div
                        class="progress w-full flex-1 h-1.5 bg-[rgba(145,158,171,0.24)] rounded-[50px] overflow-hidden"
                      >
                        <div
                          style="width: 70%"
                          class="progress-bar h-full bg-primary rounded-[50px]"
                        ></div>
                      </div>
                      <span>12.58k</span>
                    </div>
                  </div>
                </div>
                <div
                  class="md:col-span-4 col-span-12 flex items-center justify-center py-6 md:py-0"
                >
                  <a
                    href="#comment-forms"
                    class="btn btn-primary outline btn-large rounded-[100px]"
                    >Write a Review</a
                  >
                </div>
              </div>
              <div
                id="comment-forms"
                class="comment-form-wrapper p-6 border-t border-gray-300 border-b"
              >
                <div
                  class="comment-respond md:border md:border-gray-300 md:rounded-3xl md:p-6"
                >
                  <h5 class="mb-6">Add Comment</h5>
                  <div class="flex items-center gap-x-3 mb-6">
                    <p class="text-light-primary-text font-medium">
                      Your review about this product:
                    </p>
                    <div
                      class="rating-section flex items-center justify-center"
                    >
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 0%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                    </div>
                  </div>
                  <form class="comment-forms flex flex-col gap-y-6" action="#">
                    <div
                      class="input-group medium rounded-[20px] px-3.5 resize-none"
                    >
                      <textarea
                        id="post_comment"
                        rows="4"
                        class="peer form-control placeholder-transparent focus:placeholder-transparent"
                        placeholder="Comment *"
                      ></textarea>
                      <label
                        for="post_comment"
                        class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-6 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1"
                      >
                        Comment *
                      </label>
                    </div>
                    <div class="relative w-full">
                      <input
                        type="text"
                        id="name"
                        class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                        placeholder="Name *"
                      />

                      <label
                        for="name"
                        class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1"
                      >
                        Name *
                      </label>
                    </div>
                    <div class="relative w-full">
                      <input
                        type="email"
                        id="personal_email"
                        class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                        placeholder="Email *"
                      />

                      <label
                        for="personal_email"
                        class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1"
                      >
                        Email *
                      </label>
                    </div>

                    <div class="flex md:justify-end justify-start gap-x-4">
                      <button
                        class="btn btn-default outline btn-large rounded-[100px] w-[47%] md:w-auto py-[11px] shadow-none"
                      >
                        Cancel
                      </button>
                      <button
                        class="btn btn-primary btn-large rounded-[100px] w-[47%] md:w-auto py-[11px]"
                      >
                        Post Review
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="comment-list-wrapper p-6">
                <div
                  class="comment-list-title flex items-center justify-between pb-6 border-b border-gray-300 mb-6"
                >
                  <h5>Customer Ratings & Review</h5>
                  <div class="relative min-w-[100px]">
                    <select
                      id="sorting"
                      class="rounded-[100px]! filter-select label"
                    >
                      <option value="newest" selected>Newest</option>
                      <option value="oldest">Oldest</option>
                      <option value="popular">Popular</option>
                      <option value="rating">Rating</option>
                      <option value="relevance">Relevance</option>
                      <option value="comment-count">Comment Count</option>
                    </select>
                    <label for="sorting" class="nice-select-label"
                      >Sorting</label
                    >
                  </div>
                </div>
                <ol class="comment-list">
                  <li class="comment">
                    <div class="comment-body">
                      <div
                        class="comment-avatar-card flex items-center gap-x-4 mb-3"
                      >
                        <div class="comment-author-avatar size-12 rounded-full">
                          <img
                            src="assets/images/blog/user-avatar-1.png"
                            alt="Comment Author Avatar"
                            class="rounded-full"
                          />
                        </div>
                        <div class="comment-author-info flex-1">
                          <p
                            class="comment-author font-semibold text-light-primary-text"
                          >
                            Robert Fox
                          </p>
                        </div>
                      </div>
                      <div class="flex items-center mb-3">
                        <div
                          class="rating-section flex items-center relative after:absolute after:h-[22px] after:w-px after:right-0 after:top-1/2 after:-translate-y-1/2 after:bg-gray-300 pr-3"
                        >
                          <div
                            class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                          >
                            <div
                              style="width: 80%"
                              class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                            ></div>
                          </div>
                          <span
                            class="text-sm leading-[22px] font-normal inline-flex ml-2 text-light-primary-text"
                            >4.5</span
                          >
                        </div>
                        <div class="flex items-center gap-x-1 pl-3">
                          <svg
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M11.5269 3.13379L13.9331 3.67969L13.7065 6.13965L15.3335 8L13.7065 9.86035L13.9331 12.3203L11.5269 12.8662L10.2661 14.9932L7.99951 14.0195L5.73291 15L4.47314 12.873L2.06689 12.3271L2.29346 9.86035L0.666504 8L2.29346 6.13379L2.06689 3.66699L4.47314 3.12695L5.73291 1L7.99951 1.97363L10.2661 1L11.5269 3.13379ZM6.72607 9.17285L5.18018 7.62012L4.19287 8.60645L6.72607 11.1465L11.6128 6.24707L10.6265 5.25977L6.72607 9.17285Z"
                              fill="#088178"
                            />
                          </svg>
                          <p class="text-primary text-sm leading-[22px]">
                            Verified purchase
                          </p>
                        </div>
                      </div>
                      <div class="comment-content pl-0! pr-0! mb-3">
                        <p class="text-light-primary-text">
                          Very nice ! On the other hand, we denounce with
                          righteous indignation and dislike men who are so
                          beguiled and demoralized by the
                        </p>
                      </div>
                      <div
                        class="comment-actions flex md:items-center md:flex-row flex-col gap-y-3 md:gap-y-0"
                      >
                        <p class="text-sm leading-[22px] md:pr-3">
                          was this review helpful to you?
                        </p>
                        <a
                          href="#"
                          class="comment-action-item text-sm leading-[22px] inline-flex items-center gap-x-1 md:pr-3 relative md:after:absolute md:after:h-5 md:after:w-px md:after:right-0 md:after:top-1/2 md:after:-translate-y-1/2 md:after:bg-gray-300"
                        >
                          <i
                            class="hgi hgi-stroke hgi-thumbs-up text-lg leading-[18px] text-light-primary-text"
                          ></i>
                          Thank (234)
                        </a>
                        <a
                          href="#"
                          class="comment-action-item text-sm leading-[22px] inline-flex items-center gap-x-1 md:pl-3"
                        >
                          <i
                            class="hgi hgi-stroke hgi-thumbs-down text-lg leading-[18px] text-light-primary-text"
                          ></i>
                          Dislike (12)
                        </a>
                      </div>
                    </div>
                  </li>
                  <li class="comment">
                    <div class="comment-body">
                      <div
                        class="comment-avatar-card flex items-center gap-x-4 mb-3"
                      >
                        <div class="comment-author-avatar size-12 rounded-full">
                          <img
                            src="assets/images/blog/user-avatar-1.png"
                            alt="Comment Author Avatar"
                            class="rounded-full"
                          />
                        </div>
                        <div class="comment-author-info flex-1">
                          <p
                            class="comment-author font-semibold text-light-primary-text"
                          >
                            Jenny Wilson
                          </p>
                        </div>
                      </div>
                      <div class="flex items-center mb-3">
                        <div
                          class="rating-section flex items-center relative after:absolute after:h-[22px] after:w-px after:right-0 after:top-1/2 after:-translate-y-1/2 after:bg-gray-300 pr-3"
                        >
                          <div
                            class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                          >
                            <div
                              style="width: 80%"
                              class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                            ></div>
                          </div>
                          <span
                            class="text-sm leading-[22px] font-normal inline-flex ml-2 text-light-primary-text"
                            >4.5</span
                          >
                        </div>
                        <div class="flex items-center gap-x-1 pl-3">
                          <svg
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M11.5269 3.13379L13.9331 3.67969L13.7065 6.13965L15.3335 8L13.7065 9.86035L13.9331 12.3203L11.5269 12.8662L10.2661 14.9932L7.99951 14.0195L5.73291 15L4.47314 12.873L2.06689 12.3271L2.29346 9.86035L0.666504 8L2.29346 6.13379L2.06689 3.66699L4.47314 3.12695L5.73291 1L7.99951 1.97363L10.2661 1L11.5269 3.13379ZM6.72607 9.17285L5.18018 7.62012L4.19287 8.60645L6.72607 11.1465L11.6128 6.24707L10.6265 5.25977L6.72607 9.17285Z"
                              fill="#088178"
                            />
                          </svg>
                          <p class="text-primary text-sm leading-[22px]">
                            Verified purchase
                          </p>
                        </div>
                      </div>
                      <div class="comment-content pl-0! pr-0! mb-3">
                        <p class="text-light-primary-text">
                          Very nice ! On the other hand, we denounce with
                          righteous indignation and dislike men who are so
                          beguiled and demoralized by the
                        </p>
                      </div>
                      <div
                        class="comment-actions flex md:items-center md:flex-row flex-col gap-y-3 md:gap-y-0"
                      >
                        <p class="text-sm leading-[22px] md:pr-3">
                          was this review helpful to you?
                        </p>
                        <a
                          href="#"
                          class="comment-action-item text-sm leading-[22px] inline-flex items-center gap-x-1 md:pr-3 relative md:after:absolute md:after:h-5 md:after:w-px md:after:right-0 md:after:top-1/2 md:after:-translate-y-1/2 md:after:bg-gray-300"
                        >
                          <i
                            class="hgi hgi-stroke hgi-thumbs-up text-lg leading-[18px] text-light-primary-text"
                          ></i>
                          Thank (234)
                        </a>
                        <a
                          href="#"
                          class="comment-action-item text-sm leading-[22px] inline-flex items-center gap-x-1 md:pl-3"
                        >
                          <i
                            class="hgi hgi-stroke hgi-thumbs-down text-lg leading-[18px] text-light-primary-text"
                          ></i>
                          Dislike (12)
                        </a>
                      </div>
                    </div>
                  </li>
                  <li class="comment">
                    <div class="comment-body">
                      <div
                        class="comment-avatar-card flex items-center gap-x-4 mb-3"
                      >
                        <div class="comment-author-avatar size-12 rounded-full">
                          <img
                            src="assets/images/blog/user-avatar-1.png"
                            alt="Comment Author Avatar"
                            class="rounded-full"
                          />
                        </div>
                        <div class="comment-author-info flex-1">
                          <p
                            class="comment-author font-semibold text-light-primary-text"
                          >
                            Brooklyn Simmons
                          </p>
                        </div>
                      </div>
                      <div class="flex items-center mb-3">
                        <div
                          class="rating-section flex items-center relative after:absolute after:h-[22px] after:w-px after:right-0 after:top-1/2 after:-translate-y-1/2 after:bg-gray-300 pr-3"
                        >
                          <div
                            class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                          >
                            <div
                              style="width: 80%"
                              class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                            ></div>
                          </div>
                          <span
                            class="text-sm leading-[22px] font-normal inline-flex ml-2 text-light-primary-text"
                            >4.5</span
                          >
                        </div>
                        <div class="flex items-center gap-x-1 pl-3">
                          <svg
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M11.5269 3.13379L13.9331 3.67969L13.7065 6.13965L15.3335 8L13.7065 9.86035L13.9331 12.3203L11.5269 12.8662L10.2661 14.9932L7.99951 14.0195L5.73291 15L4.47314 12.873L2.06689 12.3271L2.29346 9.86035L0.666504 8L2.29346 6.13379L2.06689 3.66699L4.47314 3.12695L5.73291 1L7.99951 1.97363L10.2661 1L11.5269 3.13379ZM6.72607 9.17285L5.18018 7.62012L4.19287 8.60645L6.72607 11.1465L11.6128 6.24707L10.6265 5.25977L6.72607 9.17285Z"
                              fill="#088178"
                            />
                          </svg>
                          <p class="text-primary text-sm leading-[22px]">
                            Verified purchase
                          </p>
                        </div>
                      </div>
                      <div class="comment-content pl-0! pr-0! mb-3">
                        <p class="text-light-primary-text">
                          Very nice ! On the other hand, we denounce with
                          righteous indignation and dislike men who are so
                          beguiled and demoralized by the
                        </p>
                      </div>
                      <div
                        class="comment-actions flex md:items-center md:flex-row flex-col gap-y-3 md:gap-y-0"
                      >
                        <p class="text-sm leading-[22px] md:pr-3">
                          was this review helpful to you?
                        </p>
                        <a
                          href="#"
                          class="comment-action-item text-sm leading-[22px] inline-flex items-center gap-x-1 md:pr-3 relative md:after:absolute md:after:h-5 md:after:w-px md:after:right-0 md:after:top-1/2 md:after:-translate-y-1/2 md:after:bg-gray-300"
                        >
                          <i
                            class="hgi hgi-stroke hgi-thumbs-up text-lg leading-[18px] text-light-primary-text"
                          ></i>
                          Thank (234)
                        </a>
                        <a
                          href="#"
                          class="comment-action-item text-sm leading-[22px] inline-flex items-center gap-x-1 md:pl-3"
                        >
                          <i
                            class="hgi hgi-stroke hgi-thumbs-down text-lg leading-[18px] text-light-primary-text"
                          ></i>
                          Dislike (12)
                        </a>
                      </div>
                    </div>
                  </li>
                </ol>
                <div class="comment-pagination-wrapper mt-6">
                  <ul
                    class="flex items-center justify-center gap-x-1.5 comment-pagination"
                  >
                    <li class="group comment-pagination-item">
                      <a
                        href="#"
                        class="inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] bg-white cursor-pointer border border-gray-300 group-hover:font-semibold group-hover:border-primary group-hover:bg-[rgba(0,171,85,0.08)] transition-colors duration-300 ease-in-out"
                      >
                        <span class="inline-flex items-center justify-center">
                          <i
                            class="hgi hgi-stroke hgi-arrow-left-01 text-[20px] group-hover:font-semibold leading-5 text-light-primary-text group-hover:text-primary"
                          ></i
                        ></span>
                      </a>
                    </li>
                    <li class="group comment-pagination-item">
                      <a
                        href="#"
                        class="inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] active"
                      >
                        1
                      </a>
                    </li>
                    <li class="group blog-pagination-item">
                      <a
                        href="#"
                        class="inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] text-base leading-6 text-light-primary-text group-hover:text-primary group-hover:font-semibold bg-white cursor-pointer border border-gray-300 group-hover:border-primary group-hover:bg-[rgba(0,171,85,0.08)] transition-colors duration-300 ease-in-out"
                      >
                        2
                      </a>
                    </li>
                    <li class="group comment-pagination-item">
                      <a
                        href="#"
                        class="inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] text-base leading-6 text-light-primary-text group-hover:text-primary group-hover:font-semibold bg-white cursor-pointer border border-gray-300 group-hover:border-primary group-hover:bg-[rgba(0,171,85,0.08)] transition-colors duration-300 ease-in-out"
                      >
                        3
                      </a>
                    </li>
                    <li class="group blog-pagination-item">
                      <a
                        href="#"
                        class="inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] text-base leading-6 text-light-primary-text group-hover:text-primary group-hover:font-semibold bg-white cursor-pointer border border-gray-300 group-hover:border-primary group-hover:bg-[rgba(0,171,85,0.08)] transition-colors duration-300 ease-in-out"
                      >
                        4
                      </a>
                    </li>
                    <li class="group comment-pagination-item">
                      <a
                        href="#"
                        class="inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] text-base leading-6 text-light-primary-text group-hover:text-primary group-hover:font-semibold bg-white cursor-pointer border border-gray-300 group-hover:border-primary group-hover:bg-[rgba(0,171,85,0.08)] transition-colors duration-300 ease-in-out"
                      >
                        5
                      </a>
                    </li>
                    <li class="comment-pagination-item">
                      <a
                        href="#"
                        class="inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] bg-white"
                      >
                        <span class="inline-flex items-center justify-center">
                          <i
                            class="hgi hgi-stroke hgi-more-horizontal text-[20px] leading-5 text-light-primary-text"
                          ></i
                        ></span>
                      </a>
                    </li>
                    <li class="group comment-pagination-item">
                      <a
                        href="#"
                        class="inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] group-hover:font-semibold bg-white cursor-pointer border border-gray-300 group-hover:border-primary group-hover:bg-[rgba(0,171,85,0.08)] transition-colors duration-300 ease-in-out"
                      >
                        <span class="inline-flex items-center justify-center">
                          <i
                            class="hgi hgi-stroke hgi-arrow-right-01 text-[20px] leading-5 group-hover:font-semibold text-light-primary-text group-hover:text-primary"
                          ></i
                        ></span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ========== Tabs Section End ========== -->

    <!-- ========== Related Products Section Start ========== -->
    <section class="pb-[70px]">
      <div class="container">
        <div class="flex items-center justify-between mb-12">
          <h3
            class="wow animate__animated animate__fadeInUp"
            data-wow-delay="0.2s"
          >
            Related Products
          </h3>
          <div
            data-wow-delay="0.2s"
            class="related-products-slider-nav flex items-center gap-x-6 wow animate__animated animate__fadeInUp"
          ></div>
        </div>
        <div
          data-slick='{"slidesToShow": 6, "slidesToScroll": 1, "loop": true, "arrows": true, "infinite": true, "appendArrows": ".related-products-slider-nav", "autoplay": true, "autoplaySpeed": 7000, "responsive": [{"breakpoint": 1441, "settings": {"slidesToShow": 4}}, {"breakpoint": 1025, "settings": {"slidesToShow": 3}}, {"breakpoint": 769, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'
          class="related-products-slider -mx-3 sellzy-slider"
        >
          <div
            data-wow-delay="0.2s"
            class="border border-gray-300 rounded-2xl product-card-1 p-4 group related-product-item mx-3 wow animate__animated animate__fadeInUp"
          >
            <div class="product-image-container relative">
              <div
                class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
              >
                <a href="#">
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
                    <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist.php'>
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
              <h5 class="text-base leading-6 font-semibold font-dm-sans mb-4">
                <a href="#"
                  >VitaLife Omega-3 Softgels Heart Support Max Strength</a
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
                <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist.php'>
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

          <div
            data-wow-delay="0.3s"
            class="border border-gray-300 rounded-2xl product-card-1 p-4 group related-product-item mx-3 wow animate__animated animate__fadeInUp"
          >
            <div class="product-image-container relative">
              <div
                class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
              >
                <a href="#">
                  <img
                    src="assets/images/vitamin-c-2.png"
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
                    <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist.php'>
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
              <h5 class="text-base leading-6 font-semibold font-dm-sans mb-4">
                <a href="#"
                  >VitaLife Omega-3 Softgels Heart Support Max Strength</a
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
                <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist.php'>
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

          <div
            data-wow-delay="0.4s"
            class="border border-gray-300 rounded-2xl product-card-1 p-4 group related-product-item mx-3 wow animate__animated animate__fadeInUp"
          >
            <div class="product-image-container relative">
              <div
                class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
              >
                <a href="#">
                  <img
                    src="assets/images/bp-machine-2.png"
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
                    <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist.php'>
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
              <h5 class="text-base leading-6 font-semibold font-dm-sans mb-4">
                <a href="#"
                  >VitaLife Omega-3 Softgels Heart Support Max Strength</a
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
                <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist.php'>
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

          <div
            data-wow-delay="0.5s"
            class="border border-gray-300 rounded-2xl product-card-1 p-4 group related-product-item mx-3 wow animate__animated animate__fadeInUp"
          >
            <div class="product-image-container relative">
              <div
                class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
              >
                <a href="#">
                  <img
                    src="assets/images/temperature-gun-1.png"
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
                    <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist.php'>
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
              <h5 class="text-base leading-6 font-semibold font-dm-sans mb-4">
                <a href="#"
                  >VitaLife Omega-3 Softgels Heart Support Max Strength</a
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
                <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist.php'>
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

          <div
            data-wow-delay="0.6s"
            class="border border-gray-300 rounded-2xl product-card-1 p-4 group related-product-item mx-3 wow animate__animated animate__fadeInUp"
          >
            <div class="product-image-container relative">
              <div
                class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
              >
                <a href="#">
                  <img
                    src="assets/images/bp-machine.png"
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
                    <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist.php'>
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
              <h5 class="text-base leading-6 font-semibold font-dm-sans mb-4">
                <a href="#"
                  >VitaLife Omega-3 Softgels Heart Support Max Strength</a
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
                <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist.php'>
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

          <div
            data-wow-delay="0.7s"
            class="border border-gray-300 rounded-2xl product-card-1 p-4 group related-product-item mx-3 wow animate__animated animate__fadeInUp"
          >
            <div class="product-image-container relative">
              <div
                class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
              >
                <a href="#">
                  <img
                    src="assets/images/nutrageinz.png"
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
                    <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist.php'>
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
              <h5 class="text-base leading-6 font-semibold font-dm-sans mb-4">
                <a href="#"
                  >VitaLife Omega-3 Softgels Heart Support Max Strength</a
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
                <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist.php'>
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

          <div
            class="border border-gray-300 rounded-2xl product-card-1 p-4 group related-product-item mx-3"
          >
            <div class="product-image-container relative">
              <div
                class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
              >
                <a href="#">
                  <img
                    src="assets/images/temperature-gun-1.png"
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
                    <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist.php'>
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
              <h5 class="text-base leading-6 font-semibold font-dm-sans mb-4">
                <a href="#"
                  >VitaLife Omega-3 Softgels Heart Support Max Strength</a
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
                <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist.php'>
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
    </section>
    <!-- ========== Related Products Section End ========== -->

<?php include 'footer.php'; ?>
