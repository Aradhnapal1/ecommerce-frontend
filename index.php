<?php include 'header.php'; ?>
<!-- ========== Hero Section Start ========== -->
<section class="pt-6 pb-[70px]">
    <div class="container">
        <div class="relative">
            <div id="top-banner-slider" class="home-five-hero-slider rounded-3xl relative md:bg-transparent bg-[#8EBDD1] sellzy-slider"
                data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "loop": true, "arrows": true, "infinite": true, "dots": true, "appendArrows": ".home-five-hero-slider-nav", "autoplay": true, "autoplaySpeed": 7000, "fade": true, "responsive": [{"breakpoint": 1025, "settings": {"arrows": false}}]}'>
                <!-- Banners will be injected here dynamically by banner.js -->
            </div>
            <div
                class="home-five-hero-slider-nav absolute top-1/2 -translate-y-1/2 right-0 w-full flex items-center justify-between px-6">
            </div>
        </div>
    </div>
</section>
<!-- ========== Hero Section End ========== -->

<!-- ========== Category Section Start ========== -->
<div class="pb-[70px]">
    <div class="container">
        <div id="category-container" class="grid grid-cols-12 gap-6">
            <div class="hover:border-primary border border-gray-300 rounded-2xl col-span-6 md:col-span-4 xl:col-span-2 lg:col-span-3 p-3 transition-all duration-300 wow animate__animated animate__fadeInUp group"
                data-wow-delay=".2s">
                <a href="#" class="flex md:flex-row flex-col items-center justify-center gap-3">
                    <div class="max-w-[100px] flex items-center justify-center w-full">
                        <img src="assets/images/home-5/drone.png" alt="Drone" class="rounded-lg" />
                    </div>
                    <p
                        class="font-semibold text-light-primary-text group-hover:text-primary text-center md:text-left transition-all duration-300">
                        Drones & Accessories
                    </p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- ========== Category Section End ========== -->


<!-- ========== Electrons Time Section Start ========== -->
<section class="pb-[70px]">
    <div class="container">
        <div class="mb-10 flex xl:flex-row flex-col gap-y-4 items-center xl:justify-between wow animate__animated animate__fadeInUp"
            data-wow-delay=".2s">
            <div class="text-center xl:text-left">
                <h3 class="pb-2">Electronics</h3>
                <p>Up to 50%   for limited time 🔥</p>
            </div>
            <div class="flex lg:flex-row flex-col items-center gap-x-5 gap-y-5">

                <div
                    class="flex flex-wrap md:flex-nowrap justify-center gap-y-4 gap-x-4 home-five-product-filter max-w-full">
                    <button data-tab="view-all" class="btn btn-default outline btn-large py-2.5 px-[22px] rounded-full">
                        Laptops & Computers </button>
                    <button data-tab="smart-phones"
                        class="btn btn-default outline btn-large py-2.5 px-[22px] rounded-full shadow-none">
                        Smart Phones
                    </button>
                    <button data-tab="camera"
                        class="btn btn-default outline btn-large py-2.5 px-[22px] rounded-full shadow-none">
                        Camera
                    </button>
                    <button data-tab="headphone"
                        class="btn btn-default outline btn-large py-2.5 px-[22px] rounded-full shadow-none">
                        Headphone
                    </button>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <!-- ========== View All Tab Start ========== -->
            <div class="tab-pane" id="view-all">
                <div class="grid 2xl:grid-cols-5 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/product-details/product-details-slider-2.png" alt="product-1"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>Smart 4k Television</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/samsung-phone-2.png" alt="product-2"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>SmartView 4K TV 50</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/headphone.png" alt="product-3"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>PowerMax Wireless Charger</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1 wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/iphone.png" alt="product-4"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>NoiseFit Pulse Watch</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1 wow animate__animated animate__fadeInUp" data-wow-delay=".6s">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/laptop.png" alt="product-5"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>X-Tech Bluetooth Speaker</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/airfryer.png" alt="product-6"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>Smart 4k Television</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/oven.png" alt="product-7"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>SmartView 4K TV 50</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/smart-watch-2.png" alt="product-8"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>PowerMax Wireless Charger</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1 wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/playstation.png" alt="product-9"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>NoiseFit Pulse Watch</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1 wow animate__animated animate__fadeInUp" data-wow-delay=".6s">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/redmi.png" alt="product-10"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>X-Tech Bluetooth Speaker</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                </div>
            </div>
            <!-- ========== View All Tab End ========== -->

            <!-- ========== Smart Phones Tab Start ========== -->
            <div class="tab-pane" id="smart-phones">
                <div class="grid 2xl:grid-cols-5 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/power-bank.png" alt="product-1"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>Smart 4k Television</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/playstation.png" alt="product-2"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>SmartView 4K TV 50</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/iphone.png" alt="product-3"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>PowerMax Wireless Charger</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/oven.png" alt="product-4"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>NoiseFit Pulse Watch</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/tablet.png" alt="product-5"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>X-Tech Bluetooth Speaker</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/speaker.png" alt="product-6"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>Smart 4k Television</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/tv.png" alt="product-7"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>SmartView 4K TV 50</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/washing-machine.png" alt="product-8"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>PowerMax Wireless Charger</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/redphone.png" alt="product-9"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>NoiseFit Pulse Watch</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/headphone.png" alt="product-10"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>X-Tech Bluetooth Speaker</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                </div>
            </div>
            <!-- ========== Smart Phones Tab End ========== -->

            <!-- ========== Camera Tab Start ========== -->
            <div class="tab-pane" id="camera">
                <div class="grid 2xl:grid-cols-5 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/smart-watch-2.png" alt="product-1"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>Smart 4k Television</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/samsung-phone-1.png" alt="product-2"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>SmartView 4K TV 50</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/iphone-2.png" alt="product-3"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>PowerMax Wireless Charger</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/oven.png" alt="product-4"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>NoiseFit Pulse Watch</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/playstation.png" alt="product-5"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>X-Tech Bluetooth Speaker</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/tablet.png" alt="product-6"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>Smart 4k Television</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/drone.png" alt="product-7"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>SmartView 4K TV 50</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/samsung-phone-1.png" alt="product-8"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>PowerMax Wireless Charger</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/game-pad.png" alt="product-9"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>NoiseFit Pulse Watch</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/redphone.png" alt="product-10"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>X-Tech Bluetooth Speaker</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                </div>
            </div>
            <!-- ========== Camera Tab End ========== -->

            <!-- ========== Headphone Tab Start ========== -->
            <div class="tab-pane" id="headphone">
                <div class="grid 2xl:grid-cols-5 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/drone.png" alt="product-1"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>Smart 4k Television</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/game-pad.png" alt="product-2"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>SmartView 4K TV 50</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/earpods.png" alt="product-3"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>PowerMax Wireless Charger</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/ipad-1.png" alt="product-4"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>NoiseFit Pulse Watch</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/tablet.png" alt="product-5"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>X-Tech Bluetooth Speaker</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/washing-machine.png" alt="product-6"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>Smart 4k Television</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/power-bank.png" alt="product-7"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>SmartView 4K TV 50</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/macbook.png" alt="product-8"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>PowerMax Wireless Charger</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/storage.png" alt="product-9"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>NoiseFit Pulse Watch</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/tv.png" alt="product-10"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>X-Tech Bluetooth Speaker</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                </div>
            </div>
            <!-- ========== Headphone Tab End ========== -->
        </div>
    </div>
</section>
<!-- ========== Electrons Time Section End ========== -->
<!-- ========== Fashion Time Section Start ========== -->
<section class="pb-[70px]">
    <div class="container">
        <div class="mb-10 flex xl:flex-row flex-col gap-y-4 items-center xl:justify-between wow animate__animated animate__fadeInUp"
            data-wow-delay=".2s">
            <div class="text-center xl:text-left">
                <h3 class="pb-2">Fashion</h3>
                <p>Up to 50%   for limited time 🔥</p>
            </div>
            <div class="flex lg:flex-row flex-col items-center gap-x-5 gap-y-5">

                <div
                    class="flex flex-wrap md:flex-nowrap justify-center gap-y-4 gap-x-4 home-five-product-filter max-w-full">
                    <button data-tab="view-all" class="btn btn-default outline btn-large py-2.5 px-[22px] rounded-full">
                        Laptops & Computers </button>
                    <button data-tab="smart-phones"
                        class="btn btn-default outline btn-large py-2.5 px-[22px] rounded-full shadow-none">
                        Smart Phones
                    </button>
                    <button data-tab="camera"
                        class="btn btn-default outline btn-large py-2.5 px-[22px] rounded-full shadow-none">
                        Camera
                    </button>
                    <button data-tab="headphone"
                        class="btn btn-default outline btn-large py-2.5 px-[22px] rounded-full shadow-none">
                        Headphone
                    </button>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <!-- ========== View All Tab Start ========== -->
            <div class="tab-pane" id="view-all">
                <div class="grid 2xl:grid-cols-5 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/product-details/product-details-slider-2.png" alt="product-1"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>Smart 4k Television</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/samsung-phone-2.png" alt="product-2"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>SmartView 4K TV 50</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/headphone.png" alt="product-3"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>PowerMax Wireless Charger</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1 wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/iphone.png" alt="product-4"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>NoiseFit Pulse Watch</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1 wow animate__animated animate__fadeInUp" data-wow-delay=".6s">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/laptop.png" alt="product-5"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>X-Tech Bluetooth Speaker</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/airfryer.png" alt="product-6"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>Smart 4k Television</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/oven.png" alt="product-7"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>SmartView 4K TV 50</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/smart-watch-2.png" alt="product-8"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>PowerMax Wireless Charger</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1 wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/playstation.png" alt="product-9"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>NoiseFit Pulse Watch</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1 wow animate__animated animate__fadeInUp" data-wow-delay=".6s">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/redmi.png" alt="product-10"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>X-Tech Bluetooth Speaker</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                </div>
            </div>
            <!-- ========== View All Tab End ========== -->

            <!-- ========== Smart Phones Tab Start ========== -->
            <div class="tab-pane" id="smart-phones">
                <div class="grid 2xl:grid-cols-5 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/power-bank.png" alt="product-1"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>Smart 4k Television</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/playstation.png" alt="product-2"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>SmartView 4K TV 50</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/iphone.png" alt="product-3"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>PowerMax Wireless Charger</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/oven.png" alt="product-4"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>NoiseFit Pulse Watch</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/tablet.png" alt="product-5"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>X-Tech Bluetooth Speaker</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/speaker.png" alt="product-6"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>Smart 4k Television</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/tv.png" alt="product-7"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>SmartView 4K TV 50</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/washing-machine.png" alt="product-8"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>PowerMax Wireless Charger</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/redphone.png" alt="product-9"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>NoiseFit Pulse Watch</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/headphone.png" alt="product-10"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>X-Tech Bluetooth Speaker</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                </div>
            </div>
            <!-- ========== Smart Phones Tab End ========== -->

            <!-- ========== Camera Tab Start ========== -->
            <div class="tab-pane" id="camera">
                <div class="grid 2xl:grid-cols-5 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/smart-watch-2.png" alt="product-1"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>Smart 4k Television</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/samsung-phone-1.png" alt="product-2"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>SmartView 4K TV 50</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/iphone-2.png" alt="product-3"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>PowerMax Wireless Charger</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/oven.png" alt="product-4"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>NoiseFit Pulse Watch</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/playstation.png" alt="product-5"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>X-Tech Bluetooth Speaker</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/tablet.png" alt="product-6"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>Smart 4k Television</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/drone.png" alt="product-7"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>SmartView 4K TV 50</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/samsung-phone-1.png" alt="product-8"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>PowerMax Wireless Charger</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/game-pad.png" alt="product-9"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>NoiseFit Pulse Watch</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/redphone.png" alt="product-10"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>X-Tech Bluetooth Speaker</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                </div>
            </div>
            <!-- ========== Camera Tab End ========== -->

            <!-- ========== Headphone Tab Start ========== -->
            <div class="tab-pane" id="headphone">
                <div class="grid 2xl:grid-cols-5 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/drone.png" alt="product-1"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>Smart 4k Television</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/game-pad.png" alt="product-2"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>SmartView 4K TV 50</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/earpods.png" alt="product-3"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>PowerMax Wireless Charger</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/ipad-1.png" alt="product-4"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>NoiseFit Pulse Watch</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/tablet.png" alt="product-5"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>X-Tech Bluetooth Speaker</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/washing-machine.png" alt="product-6"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>Smart 4k Television</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/power-bank.png" alt="product-7"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>SmartView 4K TV 50</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/macbook.png" alt="product-8"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>PowerMax Wireless Charger</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/storage.png" alt="product-9"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>NoiseFit Pulse Watch</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                    <!-- ========== Single Product Card Start ========== -->
                    <div class="col-span-1">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl mb-4 overflow-hidden">
                                    <a href='product-details.html'>
                                        <img src="assets/images/home-5/tv.png" alt="product-10"
                                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300" />
                                    </a>
                                </div>

                                <div
                                    class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                    <ul class="flex items-center gap-x-px">
                                        <li>
                                            <a aria-label='Add to Wishlist'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='wishlist-style-v1.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label='Compare'
                                                class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5'
                                                href='compare.html'>
                                                <i
                                                    class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Quick view"
                                                class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                href="#">
                                                <i
                                                    class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content text-center">
                                <div
                                    class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark">
                                    <p class="days">00</p>
                                    <p>Days</p>
                                    <p>&colon;</p>
                                    <p class="hours">00</p>
                                    <p>Hours</p>
                                    <p>&colon;</p>
                                    <p class="minutes">00</p>
                                    <p>Mins</p>
                                    <p>&colon;</p>
                                    <p class="seconds">00</p>
                                    <p>Secs</p>
                                </div>
                                <h5 class="text-[20px] leading-[30px] font-bold py-3">
                                    <a href='product-details.html'>X-Tech Bluetooth Speaker</a>
                                </h5>
                                <div class="rating-section flex items-center justify-center mb-3">
                                    <div
                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                        <div style="width: 80%"
                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                        </div>
                                    </div>
                                    <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                                </div>
                                <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                                    <span
                                        class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">$127.49</span>
                                    <span
                                        class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">$29.99</span>
                                </div>
                                <div class="btn-section flex items-center gap-x-4">
                                    <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300'
                                        href='wishlist-style-v1.html'>
                                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                    </a>
                                    <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1'
                                        href='cart-single-vendor.html'>
                                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>

                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Product Card End ========== -->
                </div>
            </div>
            <!-- ========== Headphone Tab End ========== -->
        </div>
    </div>
</section>
<!-- ========== Fashion Time Section End ========== -->



<!-- ========== BassBoost Section Start ========== -->
<section class="pb-[70px]">
    <div class="container">
        <div class="flex lg:justify-between justify-center flex-wrap lg:flex-nowrap pb-12 wow animate__animated animate__fadeInUp"
            data-wow-delay=".2s">
            <h3 class="mb-3 lg:mb-0">BassBoost Home Theater System</h3>
            <button data-tab="all-products" class="btn btn-primary outline btn-large py-2.5 px-10 rounded-full">
                View All
            </button>
        </div>
        <div class="grid grid-cols-12 gap-x-6 xl:gap-y-12 gap-y-6">
            <div class="xl:col-span-4 col-span-12 md:col-span-6 wow animate__animated animate__fadeInUp group hover:border-primary transition-all duration-300 border rounded-2xl border-gray-300"
                data-wow-delay=".2s">
                <a class='flex flex-col lg:flex-row h-full' href='product-details.html'>
                    <div
                        class="p-4 lg:border-r border-b lg:border-b-0 border-gray-300 lg:max-w-[190px] flex items-center justify-center w-full">
                        <img src="assets/images/home-5/headphone.png" alt="Headphone" class="rounded-2xl" />
                    </div>
                    <div class="py-[37px] px-6 flex-1">
                        <span
                            class="product-discount-badge relative bg-error uppercase text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain after:bg-no-repeat">15%
                            OFF</span>
                        <p
                            class="py-3 font-semibold text-base leading-6 text-light-primary-text group-hover:text-primary">
                            BassBoost Home Theater System
                        </p>
                        <div class="rating-section flex items-center mb-3">
                            <div
                                class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                <div style="width: 80%"
                                    class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                </div>
                            </div>
                            <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                        </div>
                        <div class="price-section flex items-center gap-x-3">
                            <span class="current-price text-base font-semibold text-primary-dark">$27.49</span>
                            <span
                                class="old-price text-base leading-6 font-normal text-light-disabled-text line-through">$29.99</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="xl:col-span-4 col-span-12 md:col-span-6 wow animate__animated animate__fadeInUp group hover:border-primary transition-all duration-300 border rounded-2xl border-gray-300"
                data-wow-delay=".3s">
                <a class='flex flex-col lg:flex-row h-full' href='product-details.html'>
                    <div
                        class="p-4 lg:border-r border-b lg:border-b-0 border-gray-300 lg:max-w-[190px] flex items-center justify-center w-full">
                        <img src="assets/images/home-5/iphone-2.png" alt="iPhone" class="rounded-2xl" />
                    </div>
                    <div class="py-[37px] px-6 flex-1">
                        <span
                            class="product-discount-badge relative bg-error uppercase text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain after:bg-no-repeat">15%
                            OFF</span>
                        <p
                            class="py-3 font-semibold text-base leading-6 text-light-primary-text group-hover:text-primary">
                            EchoStream Soundbar
                        </p>
                        <div class="rating-section flex items-center mb-3">
                            <div
                                class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                <div style="width: 80%"
                                    class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                </div>
                            </div>
                            <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                        </div>
                        <div class="price-section flex items-center gap-x-3">
                            <span class="current-price text-base font-semibold text-primary-dark">$27.49</span>
                            <span
                                class="old-price text-base leading-6 font-normal text-light-disabled-text line-through">$29.99</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="xl:col-span-4 col-span-12 md:col-span-6 wow animate__animated animate__fadeInUp group hover:border-primary transition-all duration-300 border rounded-2xl border-gray-300"
                data-wow-delay=".4s">
                <a class='flex flex-col lg:flex-row h-full' href='product-details.html'>
                    <div
                        class="p-4 lg:border-r border-b lg:border-b-0 border-gray-300 lg:max-w-[190px] flex items-center justify-center w-full">
                        <img src="assets/images/home-5/laptop.png" alt="Laptop" class="rounded-2xl" />
                    </div>
                    <div class="py-[37px] px-6 flex-1">
                        <span
                            class="product-discount-badge relative bg-error uppercase text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain after:bg-no-repeat">15%
                            OFF</span>
                        <p
                            class="py-3 font-semibold text-base leading-6 text-light-primary-text group-hover:text-primary">
                            Harmony TV Speaker Set
                        </p>
                        <div class="rating-section flex items-center mb-3">
                            <div
                                class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                <div style="width: 80%"
                                    class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                </div>
                            </div>
                            <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                        </div>
                        <div class="price-section flex items-center gap-x-3">
                            <span class="current-price text-base font-semibold text-primary-dark">$27.49</span>
                            <span
                                class="old-price text-base leading-6 font-normal text-light-disabled-text line-through">$29.99</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="xl:col-span-4 col-span-12 md:col-span-6 wow animate__animated animate__fadeInUp group hover:border-primary transition-all duration-300 border rounded-2xl border-gray-300"
                data-wow-delay=".2s">
                <a class='flex flex-col lg:flex-row h-full' href='product-details.html'>
                    <div
                        class="p-4 lg:border-r border-b lg:border-b-0 border-gray-300 lg:max-w-[190px] flex items-center justify-center w-full">
                        <img src="assets/images/home-5/macbook.png" alt="MacBook" class="rounded-2xl" />
                    </div>
                    <div class="py-[37px] px-6 flex-1">
                        <span
                            class="product-discount-badge relative bg-error uppercase text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain after:bg-no-repeat">15%
                            OFF</span>
                        <p
                            class="py-3 font-semibold text-base leading-6 text-light-primary-text group-hover:text-primary">
                            ClearSound Wireless Speakers
                        </p>
                        <div class="rating-section flex items-center mb-3">
                            <div
                                class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                <div style="width: 80%"
                                    class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                </div>
                            </div>
                            <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                        </div>
                        <div class="price-section flex items-center gap-x-3">
                            <span class="current-price text-base font-semibold text-primary-dark">$27.49</span>
                            <span
                                class="old-price text-base leading-6 font-normal text-light-disabled-text line-through">$29.99</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="xl:col-span-4 col-span-12 md:col-span-6 wow animate__animated animate__fadeInUp group hover:border-primary transition-all duration-300 border rounded-2xl border-gray-300"
                data-wow-delay=".3s">
                <a class='flex flex-col lg:flex-row h-full' href='product-details.html'>
                    <div
                        class="p-4 lg:border-r border-b lg:border-b-0 border-gray-300 lg:max-w-[190px] flex items-center justify-center w-full">
                        <img src="assets/images/home-5/samsung-phone-3.png" alt="Samsung Phone" class="rounded-2xl" />
                    </div>
                    <div class="py-[37px] px-6 flex-1">
                        <span
                            class="product-discount-badge relative bg-error uppercase text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain after:bg-no-repeat">15%
                            OFF</span>
                        <p
                            class="py-3 font-semibold text-base leading-6 text-light-primary-text group-hover:text-primary">
                            VibeMax Surround Kit
                        </p>
                        <div class="rating-section flex items-center mb-3">
                            <div
                                class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                <div style="width: 80%"
                                    class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                </div>
                            </div>
                            <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                        </div>
                        <div class="price-section flex items-center gap-x-3">
                            <span class="current-price text-base font-semibold text-primary-dark">$27.49</span>
                            <span
                                class="old-price text-base leading-6 font-normal text-light-disabled-text line-through">$29.99</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="xl:col-span-4 col-span-12 md:col-span-6 wow animate__animated animate__fadeInUp group hover:border-primary transition-all duration-300 border rounded-2xl border-gray-300"
                data-wow-delay=".5s">
                <a class='flex flex-col lg:flex-row h-full' href='product-details.html'>
                    <div
                        class="p-4 lg:border-r border-b lg:border-b-0 border-gray-300 lg:max-w-[190px] flex items-center justify-center w-full">
                        <img src="assets/images/home-5/game-pad-2.png" alt="Game Pad" class="rounded-2xl" />
                    </div>
                    <div class="py-[37px] px-6 flex-1">
                        <span
                            class="product-discount-badge relative bg-error uppercase text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain after:bg-no-repeat">15%
                            OFF</span>
                        <p
                            class="py-3 font-semibold text-base leading-6 text-light-primary-text group-hover:text-primary">
                            UltraBass Wireless Headphones
                        </p>
                        <div class="rating-section flex items-center mb-3">
                            <div
                                class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                <div style="width: 80%"
                                    class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                </div>
                            </div>
                            <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                        </div>
                        <div class="price-section flex items-center gap-x-3">
                            <span class="current-price text-base font-semibold text-primary-dark">$27.49</span>
                            <span
                                class="old-price text-base leading-6 font-normal text-light-disabled-text line-through">$29.99</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="xl:col-span-4 col-span-12 md:col-span-6 wow animate__animated animate__fadeInUp group hover:border-primary transition-all duration-300 border rounded-2xl border-gray-300"
                data-wow-delay=".2s">
                <a class='flex flex-col lg:flex-row h-full' href='product-details.html'>
                    <div
                        class="p-4 lg:border-r border-b lg:border-b-0 border-gray-300 lg:max-w-[190px] flex items-center justify-center w-full">
                        <img src="assets/images/home-5/redphone.png" alt="Red Phone" class="rounded-2xl" />
                    </div>
                    <div class="py-[37px] px-6 flex-1">
                        <span
                            class="product-discount-badge relative bg-error uppercase text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain after:bg-no-repeat">15%
                            OFF</span>
                        <p
                            class="py-3 font-semibold text-base leading-6 text-light-primary-text group-hover:text-primary">
                            SonicBoom Subwoofer
                        </p>
                        <div class="rating-section flex items-center mb-3">
                            <div
                                class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                <div style="width: 80%"
                                    class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                </div>
                            </div>
                            <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                        </div>
                        <div class="price-section flex items-center gap-x-3">
                            <span class="current-price text-base font-semibold text-primary-dark">$27.49</span>
                            <span
                                class="old-price text-base leading-6 font-normal text-light-disabled-text line-through">$29.99</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="xl:col-span-4 col-span-12 md:col-span-6 wow animate__animated animate__fadeInUp group hover:border-primary transition-all duration-300 border rounded-2xl border-gray-300"
                data-wow-delay=".3s">
                <a class='flex flex-col lg:flex-row h-full' href='product-details.html'>
                    <div
                        class="p-4 lg:border-r border-b lg:border-b-0 border-gray-300 lg:max-w-[190px] flex items-center justify-center w-full">
                        <img src="assets/images/home-5/speaker.png" alt="Speaker" class="rounded-2xl" />
                    </div>
                    <div class="py-[37px] px-6 flex-1">
                        <span
                            class="product-discount-badge relative bg-error uppercase text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain after:bg-no-repeat">15%
                            OFF</span>
                        <p
                            class="py-3 font-semibold text-base leading-6 text-light-primary-text group-hover:text-primary">
                            PulseWave Bluetooth Speaker
                        </p>
                        <div class="rating-section flex items-center mb-3">
                            <div
                                class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                <div style="width: 80%"
                                    class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                </div>
                            </div>
                            <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                        </div>
                        <div class="price-section flex items-center gap-x-3">
                            <span class="current-price text-base font-semibold text-primary-dark">$27.49</span>
                            <span
                                class="old-price text-base leading-6 font-normal text-light-disabled-text line-through">$29.99</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="xl:col-span-4 col-span-12 md:col-span-6 wow animate__animated animate__fadeInUp group hover:border-primary transition-all duration-300 border rounded-2xl border-gray-300"
                data-wow-delay=".4s">
                <a class='flex flex-col lg:flex-row h-full' href='product-details.html'>
                    <div
                        class="p-4 lg:border-r border-b lg:border-b-0 border-gray-300 lg:max-w-[190px] flex items-center justify-center w-full">
                        <img src="assets/images/home-5/action-cam.png" alt="Action Camera" class="rounded-2xl" />
                    </div>
                    <div class="py-[37px] px-6 flex-1">
                        <span
                            class="product-discount-badge relative bg-error uppercase text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain after:bg-no-repeat">15%
                            OFF</span>
                        <p
                            class="py-3 font-semibold text-base leading-6 text-light-primary-text group-hover:text-primary">
                            ClearSound Wireless Speakers
                        </p>
                        <div class="rating-section flex items-center mb-3">
                            <div
                                class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                <div style="width: 80%"
                                    class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                </div>
                            </div>
                            <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                        </div>
                        <div class="price-section flex items-center gap-x-3">
                            <span class="current-price text-base font-semibold text-primary-dark">$27.49</span>
                            <span
                                class="old-price text-base leading-6 font-normal text-light-disabled-text line-through">$29.99</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- ========== BassBoost Section End ========== -->








<!-- ========== Smart Section Start ========== -->
<section class="pb-[70px]">
    <div class="container">
        <h3 class="pb-12 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
            Smart technology on your wrist.
        </h3>
        <div class="grid grid-cols-12 gap-6">
            <div class="xl:col-span-4 md:col-span-6 col-span-12 md:row-start-1 row-start-auto wow animate__animated animate__fadeInUp"
                data-wow-delay=".2s">
                <div class="flex flex-col gap-y-6">
                    <a class='flex flex-col lg:flex-row border-gray-300 border rounded-2xl group hover:border-primary transition-all duration-300'
                        href='product-details.html'>
                        <div
                            class="p-4 lg:border-r border-b lg:border-b-0 border-gray-300 lg:max-w-[190px] flex items-center justify-center w-full">
                            <img src="assets/images/home-5/macbook.png" alt="MacBook" class="rounded-2xl" />
                        </div>
                        <div class="py-[29px] px-6 flex-1">
                            <span
                                class="product-discount-badge relative bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full uppercase after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain after:bg-no-repeat">15%
                                OFF</span>
                            <h6 class="py-3 group-hover:text-primary transition-all duration-300">
                                MacBook Pro
                            </h6>
                            <div class="rating-section flex items-center mb-3">
                                <div
                                    class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                    <div style="width: 80%"
                                        class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                    </div>
                                </div>
                                <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                            </div>
                            <div class="price-section flex items-center gap-x-3 mb-2">
                                <span class="current-price text-base font-semibold text-primary">$27.49</span>
                                <span
                                    class="old-price text-base leading-[22px] font-normal text-light-disabled-text line-through">$29.99</span>
                            </div>
                        </div>
                    </a>
                    <a class='flex flex-col lg:flex-row border-gray-300 border rounded-2xl group hover:border-primary transition-all duration-300'
                        href='product-details.html'>
                        <div
                            class="p-4 lg:border-r border-b lg:border-b-0 border-gray-300 lg:max-w-[190px] flex items-center justify-center w-full">
                            <img src="assets/images/home-5/redphone.png" alt="Red Phone" class="rounded-2xl" />
                        </div>
                        <div class="py-[29px] pl-6 flex-1">
                            <span
                                class="product-discount-badge relative bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full uppercase after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain after:bg-no-repeat">15%
                                OFF</span>
                            <h6 class="py-3 group-hover:text-primary transition-all duration-300">
                                iPhone 15 Pro Max
                            </h6>
                            <div class="rating-section flex items-center mb-3">
                                <div
                                    class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                    <div style="width: 80%"
                                        class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                    </div>
                                </div>
                                <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                            </div>
                            <div class="price-section flex items-center gap-x-3 mb-2">
                                <span class="current-price text-base font-semibold text-primary">$27.49</span>
                                <span
                                    class="old-price text-base leading-[22px] font-normal text-light-disabled-text line-through">$29.99</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="xl:col-span-4 col-span-12 xl:row-start-1 wow animate__animated animate__fadeInUp"
                data-wow-delay=".3s">
                <a class='border border-gray-300 rounded-2xl group hover:border-primary transition-all duration-300 flex flex-col'
                    href='product-details.html'>
                    <div class="max-w-[528px] flex items-center justify-center w-full mx-auto">
                        <img src="assets/images/home-5/smart-watch-1.png" alt="Smart Watch" class="rounded-t-2xl" />
                    </div>
                    <div class="p-6">
                        <h4 class="pb-3 group-hover:text-primary transition-all duration-300">
                            Samsung Galaxy Watch 6
                        </h4>
                        <div class="price-section flex items-center gap-x-3">
                            <span class="current-price text-xl leading-[30px] font-bold text-primary">$28.56</span>
                            <span
                                class="old-price text-[18px] leading-7 font-normal text-light-disabled-text line-through">$29.56</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="xl:col-span-4 md:col-span-6 col-span-12 md:row-start-1 row-start-auto wow animate__animated animate__fadeInUp"
                data-wow-delay=".4s">
                <div class="flex flex-col gap-y-6">
                    <a
                        class="flex flex-col lg:flex-row border-gray-300 border rounded-2xl group hover:border-primary transition-all duration-300">
                        <div
                            class="p-4 lg:border-r border-b lg:border-b-0 border-gray-300 lg:max-w-[190px] flex items-center justify-center w-full">
                            <img src="assets/images/home-5/ipad-1.png" alt="iPad" class="rounded-2xl" />
                        </div>
                        <div class="py-[29px] px-6 flex-1">
                            <span
                                class="product-discount-badge relative bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full uppercase after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain after:bg-no-repeat">15%
                                OFF</span>
                            <h6 class="py-3 group-hover:text-primary transition-all duration-300">
                                iPad Pro
                            </h6>
                            <div class="rating-section flex items-center mb-3">
                                <div
                                    class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                    <div style="width: 80%"
                                        class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                    </div>
                                </div>
                                <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                            </div>
                            <div class="price-section flex items-center gap-x-3 mb-2">
                                <span class="current-price text-base font-semibold text-primary">$27.49</span>
                                <span
                                    class="old-price text-base leading-[22px] font-normal text-light-disabled-text line-through">$39.99</span>
                            </div>
                        </div>
                    </a>
                    <a
                        class="flex flex-col lg:flex-row border-gray-300 border rounded-2xl group hover:border-primary transition-all duration-300">
                        <div
                            class="p-4 lg:border-r border-b lg:border-b-0 border-gray-300 lg:max-w-[190px] flex items-center justify-center w-full">
                            <img src="assets/images/home-5/samsung-phone-2.png" alt="Samsung Phone"
                                class="rounded-2xl" />
                        </div>
                        <div class="py-[29px] pl-6 flex-1">
                            <span
                                class="product-discount-badge relative bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full uppercase after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain after:bg-no-repeat">15%
                                OFF</span>
                            <h6 class="py-3 group-hover:text-primary transition-all duration-300">
                                Samsung Galaxy S24 Ultra
                            </h6>
                            <div class="rating-section flex items-center mb-3">
                                <div
                                    class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                    <div style="width: 80%"
                                        class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                    </div>
                                </div>
                                <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                            </div>
                            <div class="price-section flex items-center gap-x-3 mb-2">
                                <span class="current-price text-base font-semibold text-primary">$27.49</span>
                                <span
                                    class="old-price text-base leading-[22px] font-normal text-light-disabled-text line-through">$39.99</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== CTA Section Start ========== -->
<section class="pb-[70px]">
    <div class="container">
        <div class="grid grid-cols-12 gap-6">
            <div class="md:col-span-6 col-span-12 xl:col-span-3 wow animate__animated animate__fadeInUp"
                data-wow-delay=".2s">
                <div class="p-6 rounded-2xl text-center bg-[#A0E2E0]">
                    <span class="inline-flex items-center justify-center size-14 bg-white rounded-full">
                        <i class="hgi hgi-stroke hgi-container-truck text-3xl text-light-primary-text"></i>
                    </span>
                    <h5 class="pt-3 pb-0.5">Free Shipping</h5>
                    <p>Enjoy the Convenience of Free Shipping on Every Order</p>
                </div>
            </div>
            <div class="md:col-span-6 col-span-12 xl:col-span-3 wow animate__animated animate__fadeInUp"
                data-wow-delay=".3s">
                <div class="p-6 rounded-2xl text-center bg-[#FFEB69]">
                    <span class="inline-flex items-center justify-center size-14 bg-white rounded-full">
                        <i class="hgi hgi-stroke hgi-customer-support text-3xl text-light-primary-text"></i>
                    </span>
                    <h5 class="pt-3 pb-0.5">24x7 Support</h5>
                    <p>Round-the-Clock Assistance, Anytime You Need It</p>
                </div>
            </div>
            <div class="md:col-span-6 col-span-12 xl:col-span-3 wow animate__animated animate__fadeInUp"
                data-wow-delay=".4s">
                <div class="p-6 rounded-2xl text-center bg-[#FFC091]">
                    <span class="inline-flex items-center justify-center size-14 bg-white rounded-full">
                        <i class="hgi hgi-stroke hgi-delivery-return-02 text-3xl text-light-primary-text"></i>
                    </span>
                    <h5 class="pt-3 pb-0.5">30 Days Return</h5>
                    <p>
                        Your Satisfaction is Our Priority: Return Any Product Within 30
                        Days
                    </p>
                </div>
            </div>
            <div class="md:col-span-6 col-span-12 xl:col-span-3 wow animate__animated animate__fadeInUp"
                data-wow-delay=".5s">
                <div class="p-6 rounded-2xl text-center bg-[#9EE872]">
                    <span class="inline-flex items-center justify-center size-14 bg-white rounded-full">
                        <i class="hgi hgi-stroke hgi-transaction text-3xl text-light-primary-text"></i>
                    </span>
                    <h5 class="pt-3 pb-0.5">Secure Payment</h5>
                    <p>Seamless Shopping Backed by Safe and Secure Payment Options</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========== CTA Section End ========== -->
<!-- ========== Smart Section End ========== -->
<?php include 'footer.php'; ?>