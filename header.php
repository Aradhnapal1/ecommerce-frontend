<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from sellzy-preview.netlify.app/index-5 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jun 2026 07:03:15 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HyperScripts - Multipurpose eCommerce</title>

    <!-- ========== Favicon ========== -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />

    <!-- ========== Google Fonts ========== -->
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&amp;display=swap"
        rel="stylesheet" />

    <!-- ========== Huge Icons CSS ========== -->
    <link rel="stylesheet" href="assets/css/vendor/hugeicons/hgi-stroke-rounded.css" />

    <!-- ========== Slick CSS ========== -->
    <link rel="stylesheet" href="assets/css/vendor/slick.min.css" />

    <!-- ========== Nice Select CSS ========== -->
    <link rel="stylesheet" href="assets/css/vendor/nice-select.css" />

    <!-- ========== Animate CSS ========== -->
    <link rel="stylesheet" href="assets/css/vendor/animate.min.css" />

    <!-- ========== Custom CSS ========== -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- Script Api Js  -->
     <script src="./assets/api/banner.js"></script>
     <script src="./assets/api/domin.js"></script>
     <script src="./assets/api/category.js"></script>
     <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <div class="pxl-loader-spinner">
            <div class="pxl-loader-bounce1"></div>
            <div class="pxl-loader-bounce2"></div>
            <div class="pxl-loader-bounce3"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Overlay Start -->
    <div data-overlay-for class="modal-overlay hidden w-full h-screen fixed top-0 left-0 bg-[#161C247A] z-90"></div>
    <!-- Overlay End -->

    <!-- Scroll To Top Button Start -->
    <button
        class="scroll-to-top hide btn btn-primary size-10 rounded-[50px] z-50 inline-flex items-center justify-center fixed md:right-8 md:bottom-8 right-[15px] bottom-[85px] transition-all duration-400 ease-in-out">
        <i class="hgi hgi-stroke hgi-arrow-up-01 leading-6 text-2xl"></i>
    </button>
    <!-- Scroll To Top Button End -->

    <!-- SIDEBAR START -->
    <div class="fixed top-0 left-0 w-[350px] bg-white h-full z-91 px-4 py-6 flex flex-col justify-between gap-y-6 overflow-y-auto shadow-dark-z-24 transition-all duration-250 ease-[cubic-bezier(0.645,0.045,0.355,1)] data-[state=open]:translate-x-0 data-[state=open]:opacity-100 data-[state=open]:visible data-[state=close]:-translate-x-[200px] data-[state=close]:opacity-0 data-[state=close]:invisible"
        id="sidebar" data-state="close">
        <div>
            <div class="relative pb-6">
                <img src="assets/img/logo.png" alt="Logo" class="w-[100px]" />
                <button
                    class="size-7 inline-flex items-center justify-center absolute top-0 right-0 rounded-full bg-[rgba(145,158,171,0.08)]"
                    id="side-bar-menu-close">
                    <i class="hgi hgi-stroke hgi-multiplication-sign text-xl leading-5"></i>
                </button>
            </div>

            <div class="flex flex-col gap-y-6">
                <div class="relative search-input-container">
                    <div class="input-group w-full px-4 py-2 rounded-[100px]">
                        <div class="input-group-addon" data-align="inline-end">
                            <i class="hgi hgi-stroke hgi-search-01 text-2xl text-gray-500"></i>
                        </div>
                        <input type="text" class="form-control header-search-input"
                            placeholder="Search for the Items" />
                    </div>
                    <div data-state="close"
                        class="search-result-container p-4 absolute w-full top-[calc(100%+10px)] left-0 border border-gray-300 shadow-light-z-12 bg-white rounded-3xl z-9 transform data-[state=close]:translate-y-4 data-[state=close]:opacity-0 data-[state=close]:invisible transition-all duration-300 ease-[cubic-bezier(0.645,0.045,0.355,1)] data-[state=open]:translate-y-0 data-[state=open]:opacity-100 data-[state=open]:visible">
                        <div class="flex justify-between items-center mb-4">
                            <p class="font-semibold text-light-primary-text">
                                Recent Search
                            </p>
                            <button class="text-primary text-base leading-[26px] font-semibold cursor-pointer">
                                Reset History
                            </button>
                        </div>
                        <div class="flex flex-wrap items-center gap-2 recent-search-list mb-4">
                            <button
                                class="recent-search-item btn text-sm leading-[22px] font-normal btn-default outline btn-medium pl-3 py-1.5 pr-1.5 rounded-[50px]">
                                Vitamin D Supplement
                                <span
                                    class="inline-flex items-center justify-center size-4 bg-[rgba(145,158,171,0.32)] rounded-full">
                                    <i class="hgi hgi-stroke hgi-cancel-01 text-xs text-white"></i>
                                </span>
                            </button>
                            <button
                                class="recent-search-item btn text-sm leading-[22px] font-normal btn-default outline btn-medium pl-3 py-1.5 pr-1.5 rounded-[50px]">
                                Pain Relief Spray
                                <span
                                    class="inline-flex items-center justify-center size-4 bg-[rgba(145,158,171,0.32)] rounded-full">
                                    <i class="hgi hgi-stroke hgi-cancel-01 text-xs text-white"></i>
                                </span>
                            </button>
                            <button
                                class="recent-search-item btn text-sm leading-[22px] font-normal btn-default outline btn-medium pl-3 py-1.5 pr-1.5 rounded-[50px]">
                                Baby Thermometer
                                <span
                                    class="inline-flex items-center justify-center size-4 bg-[rgba(145,158,171,0.32)] rounded-full">
                                    <i class="hgi hgi-stroke hgi-cancel-01 text-xs text-white"></i>
                                </span>
                            </button>
                        </div>
                        <div class="recommended-search-list-wrapper">
                            <p class="text-base font-semibold text-light-primary-text mb-4">
                                Recommended
                            </p>
                            <div class="recommended-search-list flex flex-col gap-y-2 divide-y divide-gray-300">
                                <div class="flex items-center gap-x-4 py-2 first:pt-0 last:pb-0">
                                    <div class="size-10 flex-none rounded-lg bg-[#F4F3F5]">
                                        <img src="assets/images/vitamin-c.png" alt="recommended-search-1" />
                                    </div>
                                    <p
                                        class="text-base font-semibold text-light-primary-text hover:text-primary transition-colors duration-300">
                                        <a href="#">Immunity booster</a>
                                    </p>
                                </div>
                                <div class="flex items-center gap-x-4 py-2 first:pt-0 last:pb-0">
                                    <div class="size-10 flex-none rounded-lg bg-[#F4F3F5]">
                                        <img src="assets/images/hand-sanitizer-1.png" alt="recommended-search-1" />
                                    </div>
                                    <p
                                        class="text-base font-semibold text-light-primary-text hover:text-primary transition-colors duration-300">
                                        <a href="#">Hand Sanitizer 500ml</a>
                                    </p>
                                </div>
                                <div class="flex items-center gap-x-4 py-2 first:pt-0 last:pb-0">
                                    <div class="size-10 flex-none rounded-lg bg-[#F4F3F5]">
                                        <img src="assets/images/combat.png" alt="recommended-search-1" />
                                    </div>
                                    <p
                                        class="text-base font-semibold text-light-primary-text hover:text-primary transition-colors duration-300">
                                        <a href="#">Heart health supplements</a>
                                    </p>
                                </div>
                                <div class="flex items-center gap-x-4 py-2 first:pt-0 last:pb-0">
                                    <div class="size-10 flex-none rounded-lg bg-[#F4F3F5]">
                                        <img src="assets/images/vitamin-b12.png" alt="recommended-search-1" />
                                    </div>
                                    <p
                                        class="text-base font-semibold text-light-primary-text hover:text-primary transition-colors duration-300">
                                        <a href="#">Protein powder for women</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <nav class="mobile-menu">
                    <ul>
                        <li>
                            <a class="active" href="#">Home</a>

                        </li>
                        <li>
                            <a href='about.html'>About Us</a>
                        </li>
                        <li>
                            <a href="#">Shop</a>

                        </li>
                        <li>
                            <a href="#">Sellers</a>

                        </li>

                        <li><a href='my-account.html'>My Account</a></li>
                        <li><a href='blog-grid.html'>Blog Grid</a></li>
                        <li><a href='contact.html'>Contact</a></li>
                    </ul>
                </nav>
                <div class="border border-gray-500/24 p-5 rounded-2xl">
                    <div class="flex flex-col gap-y-3">
                        <a href="#" class="flex items-center gap-x-2 login-page-btn">
                            <span class="inline-flex items-center justify-center bg-warning size-8 rounded-full"><i
                                    class="hgi hgi-stroke hgi-lock-sync-01 text-base text-light-primary-text"></i>
                            </span>
                            log in / Sign Up
                        </a>
                        <a href="#" class="flex items-center gap-x-2">
                            <span class="inline-flex items-center justify-center bg-warning size-8 rounded-full">
                                <i class="hgi hgi-stroke hgi-call text-base text-light-primary-text"></i>
                            </span>
                            888-777-999
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="mb-3">Follow us</h4>
                    <ul class="flex items-center gap-x-4">
                        <li>
                            <a href="#" class="inline-flex items-center justify-center gap-x-2"><span
                                    class="size-8 bg-primary-dark inline-flex items-center justify-center rounded-full"><i
                                        class="hgi hgi-stroke hgi-facebook-01 text-base text-white"></i></span></a>
                        </li>
                        <li>
                            <a href="#" class="inline-flex items-center justify-center gap-x-2">
                                <span
                                    class="size-8 bg-primary-dark inline-flex items-center justify-center rounded-full">
                                    <i class="hgi hgi-stroke hgi-linkedin-01 text-base text-white"></i> </span></a>
                        </li>
                        <li>
                            <a href="#" class="inline-flex items-center justify-center gap-x-2"><span
                                    class="size-8 bg-primary-dark inline-flex items-center justify-center rounded-full">
                                    <i class="hgi hgi-stroke hgi-instagram text-base text-white"></i> </span></a>
                        </li>
                        <li>
                            <a href="#"
                                class="inline-flex items-center justify-center gap-x-2 hover:translate-y-3"><span
                                    class="size-8 bg-primary-dark inline-flex items-center justify-center rounded-full">
                                    <i class="hgi hgi-stroke hgi-twitter text-base text-white"></i> </span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- SIDEBAR END -->

    <!-- Cart Sidebar Start -->
    <div data-state="close"
        class="cart-sidebar flex fixed xl:top-[30px] xl:right-[22px] right-0 top-0 xl:h-[calc(100vh-52px)] h-full z-99 max-w-[1101px] w-full bg-white xl:rounded-2xl rounded-none transition-all duration-250 ease-[cubic-bezier(0.645,0.045,0.355,1)] data-[state=open]:translate-x-0 data-[state=open]:opacity-100 data-[state=open]:visible data-[state=close]:translate-x-[200px] data-[state=close]:opacity-0 data-[state=close]:invisible">
        <div class="similar-products max-w-[500px] w-full h-full border-r border-gray-300 xl:block hidden">
            <div class="similar-products-header pt-6 px-6 pb-4 border-b border-gray-300 flex flex-col gap-y-1">
                <h5>Similar Products</h5>
                <p>You May Also Like</p>
            </div>
            <div class="similar-products-content p-6 flex flex-col gap-y-4 overflow-y-auto h-[calc(100%-100px)]">
                <div class="similar-product-item flex items-center gap-x-4 p-4 border border-gray-300 rounded-2xl">
                    <a class='similar-product-item-image w-[102px] h-[102px] rounded-xl bg-[#F4F3F5] overflow-hidden relative'
                        href='product-details.html'>
                        <img src="assets/images/vitamin-c.png" alt="Product Image"
                            class="w-full h-full object-cover rounded-xl" />
                        <span
                            class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain">Sale</span>
                    </a>
                    <div class="similar-product-item-content flex flex-col gap-y-2 flex-1">
                        <h6 class="text-base font-semibold">
                            <a href='product-details.html'>Fresh Bask Basket Fruits</a>
                        </h6>
                        <p class="text-sm leading-[22px]">Shop Name</p>
                        <div class="flex items-center justify-between">
                            <div class="price-section flex items-center gap-x-3">
                                <span
                                    class="current-price text-base font-semibold text-light-primary-text">$27.49</span>
                                <span class="old-price text-base text-light-disabled-text line-through">$39.99</span>
                            </div>
                            <a class='btn btn-primary btn-medium rounded-full font-semibold text-sm leading-6 px-4 py-2'
                                href='cart-single-vendor.html'>
                                <span>
                                    <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>
                                </span>
                                <span>Add</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="cart-products xl:max-w-[600px] w-full h-full flex flex-col justify-between">
            <div class="cart-products-header pt-6 px-6 pb-4 border-b border-gray-300 flex flex-col gap-y-1 relative">
                <h5>Cart Products</h5>
                <p>1 Item in Cart</p>

                <button data-close-sidebar=".cart-sidebar"
                    class="close-sidebar-btn absolute top-6 right-6 cursor-pointer inline-flex items-center justify-center size-9 rounded-full bg-[rgba(145,158,171,0.08)]">
                    <i class="hgi hgi-stroke hgi-multiplication-sign text-xl leading-5 text-light-primary-text"></i>
                </button>
            </div>
            <div class="cart-products-content p-6 flex flex-col gap-y-4 overflow-y-auto h-[calc(100%-250px)]">
                <div
                    class="cart-product-item flex flex-col sm:flex-row items-center sm:gap-x-4 gap-y-2 sm:gap-y-0 p-4 border border-gray-300 rounded-2xl">
                    <a class='cart-product-item-image sm:w-[102px] sm:h-[102px] rounded-xl bg-[#F4F3F5] overflow-hidden relative'
                        href='product-details.html'>
                        <img src="assets/images/home-3/watermelon.png" alt="Product Image"
                            class="w-full h-full object-cover rounded-xl" />
                    </a>
                    <div class="cart-product-item-content flex flex-col gap-y-2 flex-1 w-full">
                        <div class="flex items-center justify-between gap-x-2">
                            <h6 class="text-base font-semibold">
                                <a href='product-details.html'>Fresh Bask Basket Fruits</a>
                            </h6>
                            <div class="cart-edit-remove flex items-center gap-x-3">
                                <button>
                                    <i class="hgi hgi-stroke hgi-edit-02 text-xl text-light-primary-text"></i>
                                </button>
                                <button>
                                    <i class="hgi hgi-stroke hgi-delete-01 text-xl text-light-primary-text"></i>
                                </button>
                            </div>
                        </div>
                        <p class="text-sm leading-[22px]">Color: Black, Size: 250 ML</p>
                        <div class="flex items-center justify-between">
                            <div class="price-section flex items-center gap-x-3">
                                <span
                                    class="current-price text-base font-semibold text-light-primary-text">$27.49</span>
                                <span class="old-price text-base text-light-disabled-text line-through">$39.99</span>
                            </div>
                            <div
                                class="border border-gray-300 inline-flex items-center justify-center rounded-[80px] max-w-[108px] py-2.5 px-4">
                                <button class="inline-flex items-center justify-center hover:text-primary">
                                    <i class="hgi hgi-stroke hgi-remove-circle text-2xl leading-6"></i>
                                </button>
                                <input type="text" readonly value="1"
                                    class="border-0 w-full grow text-center focus:outline-none font-semibold" />

                                <button class="inline-flex items-center justify-center hover:text-primary">
                                    <i class="hgi hgi-stroke hgi-add-circle text-2xl leading-6"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="cart-products-footer p-6 border-t border-gray-300 flex flex-col gap-y-4">
                <div class="cart-subtotal flex items-center justify-between">
                    <h5>Subtotal</h5>
                    <h5>$27.49</h5>
                </div>
                <div class="cart-buttons flex items-center gap-x-4">
                    <a class='btn btn-default outline btn-large rounded-[80px] flex-1 shadow-none'
                        href='cart-single-vendor.html'>
                        View Cart
                    </a>
                    <a class='btn btn-primary btn-large rounded-[80px] flex-1' href='checkout.html'>
                        Proceed to Checkout
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Sidebar End -->

    <!-- Register Page Sidebar Start -->
    <div data-state="close"
        class="register-page-sidebar fixed xl:top-[30px] xl:right-[22px] right-0 top-0 xl:h-[calc(100vh-52px)] h-full z-99 max-w-[600px] w-full bg-white xl:rounded-2xl rounded-none transition-all duration-250 ease-[cubic-bezier(0.645,0.045,0.355,1)] data-[state=open]:translate-x-0 data-[state=open]:opacity-100 data-[state=open]:visible data-[state=close]:translate-x-[200px] data-[state=close]:opacity-0 data-[state=close]:invisible">
        <div class="register-page-sidebar-header px-6 pt-6 pb-4 border-b border-gray-300 relative">
            <h5>Create an Account</h5>
            <button data-close-sidebar=".login-page-sidebar"
                class="close-sidebar-btn absolute top-1/2 right-6 -translate-y-1/2 cursor-pointer inline-flex items-center justify-center size-9 rounded-full bg-[rgba(145,158,171,0.08)]">
                <i class="hgi hgi-stroke hgi-multiplication-sign text-xl leading-5 text-light-primary-text"></i>
            </button>
        </div>
        <div class="register-page-sidebar-content p-10 flex flex-col gap-y-10 overflow-y-auto max-h-[calc(100%-70px)]">
            <div class="image-wrapper mx-auto">
                <img src="assets/images/authentication/register-illustration.png" alt="register" />
            </div>
            <p
                class="text-light-disabled-text text-center relative before:absolute before:-z-1 before:top-1/2 before:-translate-y-1/2 before:w-full before:h-px before:bg-gray-300 before:left-0">
                <span class="bg-white px-4 z-1">Or sign up with</span>
            </p>
            <div class="flex items-center gap-x-4">
                <button class="btn btn-default outline btn-large rounded-[80px] flex-1 shadow-none">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.18173 12.2128C6.18173 11.5642 6.28946 10.9423 6.48173 10.359L3.11627 7.78906C2.46037 9.12081 2.09082 10.6214 2.09082 12.2128C2.09082 13.8028 2.45991 15.3025 3.11491 16.6333L6.47855 14.0583C6.28809 13.4778 6.18173 12.8582 6.18173 12.2128Z"
                            fill="#FBBC05" />
                        <path
                            d="M12.0908 6.31167C13.4998 6.31167 14.7726 6.81096 15.7726 7.62798L18.6817 4.72302C16.9089 3.17975 14.6362 2.22656 12.0908 2.22656C8.13894 2.22656 4.74257 4.48653 3.11621 7.78866L6.48167 10.3586C7.25712 8.00472 9.46757 6.31167 12.0908 6.31167Z"
                            fill="#EB4335" />
                        <path
                            d="M12.0908 18.1134C9.46757 18.1134 7.25712 16.4203 6.48167 14.0664L3.11621 16.6359C4.74257 19.9385 8.13894 22.1985 12.0908 22.1985C14.5298 22.1985 16.8585 21.3324 18.6062 19.7098L15.4117 17.2401C14.5103 17.8079 13.3753 18.1134 12.0908 18.1134Z"
                            fill="#34A853" />
                        <path
                            d="M21.6363 12.214C21.6363 11.624 21.5454 10.9885 21.409 10.3984H12.0908V14.2566H17.4545C17.1863 15.572 16.4563 16.5833 15.4117 17.2414L18.6063 19.7111C20.4422 18.0072 21.6363 15.469 21.6363 12.214Z"
                            fill="#4285F4" />
                    </svg>

                    Google
                </button>
                <button class="btn btn-default outline btn-large rounded-[80px] flex-1 shadow-none">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17 3.4982C17 3.22206 16.7761 2.9982 16.5 2.9982H14C11.3793 2.86766 9.14528 4.87829 9 7.4982V10.1982H6.5C6.22386 10.1982 6 10.4221 6 10.6982V13.2982C6 13.5743 6.22386 13.7982 6.5 13.7982H9V20.4982C9 20.7743 9.22386 20.9982 9.5 20.9982H12.5C12.7761 20.9982 13 20.7743 13 20.4982V13.7982H15.62C15.8487 13.8015 16.0505 13.6491 16.11 13.4282L16.83 10.8282C16.8703 10.6785 16.8389 10.5185 16.7449 10.3952C16.6509 10.2718 16.5051 10.1991 16.35 10.1982H13V7.4982C13.0515 6.9853 13.4845 6.59562 14 6.5982H16.5C16.7761 6.5982 17 6.37434 17 6.0982V3.4982Z"
                            fill="#1877F2" />
                    </svg>

                    Facebook
                </button>
            </div>
            <div class="register-form">
                <form class="flex flex-col gap-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-6">
                        <div class="relative w-full">
                            <input type="text" id="first-name"
                                class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                                placeholder="First Name *" />

                            <label for="first-name"
                                class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                                First Name *
                            </label>
                        </div>
                        <div class="relative w-full">
                            <input type="text" id="last-name"
                                class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                                placeholder="Last Name *" />

                            <label for="last-name"
                                class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                                Last Name *
                            </label>
                        </div>
                    </div>
                    <div class="relative w-full">
                        <input type="email" id="register-email"
                            class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                            placeholder="Email *" />

                        <label for="register-email"
                            class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                            Email *
                        </label>
                    </div>
                    <div class="relative w-full">
                        <input type="password" id="register-password"
                            class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                            placeholder="Password *" />

                        <label for="register-password"
                            class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                            Password *
                        </label>
                    </div>
                    <div class="relative w-full">
                        <input type="password" id="confirm-password"
                            class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                            placeholder="Confirm Password *" />

                        <label for="confirm-password"
                            class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                            Confirm Password *
                        </label>
                    </div>
                    <div>
                        <button class="btn btn-primary btn-large rounded-[80px] w-full">
                            Create Account
                        </button>
                    </div>
                </form>
            </div>
            <div class="account-having-section">
                <p class="leading-[26px] font-semibold">
                    Already have an account ?
                    <a class="text-primary login-page-btn" href="#">Sign In</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Register Page Sidebar End -->

    <!-- Login Page Sidebar Start -->
    <div data-state="close"
        class="login-page-sidebar fixed xl:top-[30px] xl:right-[22px] right-0 top-0 xl:h-[calc(100vh-52px)] h-full z-99 max-w-[600px] w-full bg-white xl:rounded-2xl rounded-none transition-all duration-250 ease-[cubic-bezier(0.645,0.045,0.355,1)] data-[state=open]:translate-x-0 data-[state=open]:opacity-100 data-[state=open]:visible data-[state=close]:translate-x-[200px] data-[state=close]:opacity-0 data-[state=close]:invisible">
        <div class="login-page-sidebar-header px-6 pt-6 pb-4 border-b border-gray-300 relative">
            <h5>Log In</h5>
            <button data-close-sidebar=".login-page-sidebar"
                class="close-sidebar-btn absolute top-1/2 right-6 -translate-y-1/2 cursor-pointer inline-flex items-center justify-center size-9 rounded-full bg-[rgba(145,158,171,0.08)]">
                <i class="hgi hgi-stroke hgi-multiplication-sign text-xl leading-5 text-light-primary-text"></i>
            </button>
        </div>
        <div class="login-page-sidebar-content p-10 flex flex-col gap-y-10 overflow-y-auto max-h-[calc(100%-70px)]">
            <div class="image-wrapper mx-auto">
                <img src="assets/images/authentication/login-illustration.png" alt="login" />
            </div>
            <p
                class="text-light-disabled-text text-center relative before:absolute before:-z-1 before:top-1/2 before:-translate-y-1/2 before:w-full before:h-px before:bg-gray-300 before:left-0">
                <span class="bg-white px-4 z-1">Or log in with</span>
            </p>
            <div class="flex items-center gap-x-4">
                <button class="btn btn-default outline btn-large rounded-[80px] flex-1 shadow-none">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.18173 12.2128C6.18173 11.5642 6.28946 10.9423 6.48173 10.359L3.11627 7.78906C2.46037 9.12081 2.09082 10.6214 2.09082 12.2128C2.09082 13.8028 2.45991 15.3025 3.11491 16.6333L6.47855 14.0583C6.28809 13.4778 6.18173 12.8582 6.18173 12.2128Z"
                            fill="#FBBC05" />
                        <path
                            d="M12.0908 6.31167C13.4998 6.31167 14.7726 6.81096 15.7726 7.62798L18.6817 4.72302C16.9089 3.17975 14.6362 2.22656 12.0908 2.22656C8.13894 2.22656 4.74257 4.48653 3.11621 7.78866L6.48167 10.3586C7.25712 8.00472 9.46757 6.31167 12.0908 6.31167Z"
                            fill="#EB4335" />
                        <path
                            d="M12.0908 18.1134C9.46757 18.1134 7.25712 16.4203 6.48167 14.0664L3.11621 16.6359C4.74257 19.9385 8.13894 22.1985 12.0908 22.1985C14.5298 22.1985 16.8585 21.3324 18.6062 19.7098L15.4117 17.2401C14.5103 17.8079 13.3753 18.1134 12.0908 18.1134Z"
                            fill="#34A853" />
                        <path
                            d="M21.6363 12.214C21.6363 11.624 21.5454 10.9885 21.409 10.3984H12.0908V14.2566H17.4545C17.1863 15.572 16.4563 16.5833 15.4117 17.2414L18.6063 19.7111C20.4422 18.0072 21.6363 15.469 21.6363 12.214Z"
                            fill="#4285F4" />
                    </svg>

                    Google
                </button>
                <button class="btn btn-default outline btn-large rounded-[80px] flex-1 shadow-none">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17 3.4982C17 3.22206 16.7761 2.9982 16.5 2.9982H14C11.3793 2.86766 9.14528 4.87829 9 7.4982V10.1982H6.5C6.22386 10.1982 6 10.4221 6 10.6982V13.2982C6 13.5743 6.22386 13.7982 6.5 13.7982H9V20.4982C9 20.7743 9.22386 20.9982 9.5 20.9982H12.5C12.7761 20.9982 13 20.7743 13 20.4982V13.7982H15.62C15.8487 13.8015 16.0505 13.6491 16.11 13.4282L16.83 10.8282C16.8703 10.6785 16.8389 10.5185 16.7449 10.3952C16.6509 10.2718 16.5051 10.1991 16.35 10.1982H13V7.4982C13.0515 6.9853 13.4845 6.59562 14 6.5982H16.5C16.7761 6.5982 17 6.37434 17 6.0982V3.4982Z"
                            fill="#1877F2" />
                    </svg>

                    Facebook
                </button>
            </div>
            <div class="login-form">
                <form class="flex flex-col gap-y-6">
                    <div class="relative w-full">
                        <input type="email" id="login-email"
                            class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                            placeholder="Email *" />

                        <label for="login-email"
                            class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                            Email *
                        </label>
                    </div>
                    <div class="relative w-full">
                        <input type="password" id="login-password"
                            class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                            placeholder="Password *" />

                        <label for="login-password"
                            class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                            Password *
                        </label>
                    </div>
                    <div class="forgot-password-section text-right">
                        <a class="text-primary font-semibold leading-[26px] forgot-password-page-btn" href="#">Forgot
                            Password?</a>
                    </div>
                    <div>
                        <button class="btn btn-primary btn-large rounded-[80px] w-full">
                            Sign In
                        </button>
                    </div>
                </form>
            </div>
            <div class="account-having-section">
                <p class="leading-[26px] font-semibold">
                    Don't have an account ?
                    <a class="text-primary register-page-btn" href="#">Sign Up</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Login Page Sidebar End -->

    <!-- Forgot Password Page Sidebar Start -->
    <div data-state="close"
        class="forgot-password-page-sidebar fixed xl:top-[30px] xl:right-[22px] right-0 top-0 xl:h-[calc(100vh-52px)] h-full z-99 max-w-[600px] w-full bg-white xl:rounded-2xl rounded-none transition-all duration-250 ease-[cubic-bezier(0.645,0.045,0.355,1)] data-[state=open]:translate-x-0 data-[state=open]:opacity-100 data-[state=open]:visible data-[state=close]:translate-x-[200px] data-[state=close]:opacity-0 data-[state=close]:invisible">
        <div class="forgot-password-page-sidebar-header px-6 pt-6 pb-4 border-b border-gray-300 relative">
            <h5>Forgot Password</h5>
            <button data-close-sidebar=".forgot-password-page-sidebar"
                class="close-sidebar-btn absolute top-1/2 right-6 -translate-y-1/2 cursor-pointer inline-flex items-center justify-center size-9 rounded-full bg-[rgba(145,158,171,0.08)]">
                <i class="hgi hgi-stroke hgi-multiplication-sign text-xl leading-5 text-light-primary-text"></i>
            </button>
        </div>
        <div
            class="forgot-password-page-sidebar-content p-10 flex flex-col gap-y-10 overflow-y-auto max-h-[calc(100%-70px)]">
            <div class="image-wrapper mx-auto">
                <img src="assets/images/authentication/forgot-password-illustration.png" alt="forgot-password" />
            </div>
            <div class="forgot-password-form">
                <form class="flex flex-col gap-y-6">
                    <div class="relative w-full">
                        <input type="email" id="forgot-password-email"
                            class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                            placeholder="Email *" />

                        <label for="forgot-password-email"
                            class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                            Email *
                        </label>
                    </div>
                    <div>
                        <button class="btn btn-primary btn-large rounded-[80px] w-full">
                            Reset Password
                        </button>
                    </div>
                </form>
            </div>
            <div class="back-to-login-section">
                <a class="text-primary login-page-btn font-semibold leading-[26px]" href="#">Back to Login</a>
            </div>
        </div>
    </div>
    <!-- Forgot Password Page Sidebar End -->

    <!-- Reset Password Page Sidebar Start -->
    <div data-state="close"
        class="reset-password-page-sidebar fixed xl:top-[30px] xl:right-[22px] right-0 top-0 xl:h-[calc(100vh-52px)] h-full z-99 max-w-[600px] w-full bg-white xl:rounded-2xl rounded-none transition-all duration-250 ease-[cubic-bezier(0.645,0.045,0.355,1)] data-[state=open]:translate-x-0 data-[state=open]:opacity-100 data-[state=open]:visible data-[state=close]:translate-x-[200px] data-[state=close]:opacity-0 data-[state=close]:invisible">
        <div class="reset-password-page-sidebar-header px-6 pt-6 pb-4 border-b border-gray-300 relative">
            <h5>Reset Password</h5>
            <button data-close-sidebar=".reset-password-page-sidebar"
                class="close-sidebar-btn absolute top-1/2 right-6 -translate-y-1/2 cursor-pointer inline-flex items-center justify-center size-9 rounded-full bg-[rgba(145,158,171,0.08)]">
                <i class="hgi hgi-stroke hgi-multiplication-sign text-xl leading-5 text-light-primary-text"></i>
            </button>
        </div>
        <div
            class="reset-password-page-sidebar-content p-10 flex flex-col gap-y-10 overflow-y-auto max-h-[calc(100%-70px)]">
            <div class="image-wrapper mx-auto">
                <img src="assets/images/authentication/reset-illustration.png" alt="reset-password" />
            </div>
            <div class="reset-password-form">
                <form class="flex flex-col gap-y-6">
                    <div class="relative w-full">
                        <input type="password" id="reset-password"
                            class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                            placeholder="Password *" />

                        <label for="reset-password"
                            class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                            Password *
                        </label>
                    </div>
                    <div class="relative w-full">
                        <input type="password" id="reset-confirm-password"
                            class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                            placeholder="Confirm Password *" />

                        <label for="reset-confirm-password"
                            class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                            Confirm Password *
                        </label>
                    </div>
                    <div>
                        <button class="btn btn-primary btn-large rounded-[80px] w-full">
                            Change Password
                        </button>
                    </div>
                </form>
            </div>
            <div class="back-to-login-section">
                <a class="text-primary login-page-btn font-semibold leading-[26px]" href="#">Back to Login</a>
            </div>
        </div>
    </div>
    <!-- Reset Password Page Sidebar End -->

    <!-- OTP Verification Page Sidebar Start -->
    <div data-state="close"
        class="otp-verification-page-sidebar fixed xl:top-[30px] xl:right-[22px] right-0 top-0 xl:h-[calc(100vh-52px)] h-full z-99 max-w-[600px] w-full bg-white xl:rounded-2xl rounded-none transition-all duration-250 ease-[cubic-bezier(0.645,0.045,0.355,1)] data-[state=open]:translate-x-0 data-[state=open]:opacity-100 data-[state=open]:visible data-[state=close]:translate-x-[200px] data-[state=close]:opacity-0 data-[state=close]:invisible">
        <div class="otp-verification-page-sidebar-header px-6 pt-6 pb-4 border-b border-gray-300 relative">
            <h5>OTP Verification</h5>
            <button data-close-sidebar=".otp-verification-page-sidebar"
                class="close-sidebar-btn absolute top-1/2 right-6 -translate-y-1/2 cursor-pointer inline-flex items-center justify-center size-9 rounded-full bg-[rgba(145,158,171,0.08)]">
                <i class="hgi hgi-stroke hgi-multiplication-sign text-xl leading-5 text-light-primary-text"></i>
            </button>
        </div>
        <div
            class="otp-verification-page-sidebar-content p-10 flex flex-col gap-y-10 overflow-y-auto max-h-[calc(100%-70px)]">
            <div class="image-wrapper mx-auto">
                <img src="assets/images/authentication/otp-verification-illustration.png" alt="otp-verification" />
            </div>
            <div class="otp-verification-text">
                <h6 class="mb-2">Enter the verification code</h6>
                <p>Enter the 6-digit code sent to your email address</p>
            </div>
            <div class="otp-verification-form flex flex-col gap-y-6">
                <div class="otp-verification-form-input flex gap-x-6">
                    <input type="text"
                        class="form-control w-1/3 h-14 ring-1 ring-gray-300 rounded-[80px] focus:ring-light-primary-text text-center"
                        placeholder="-" readonly />
                    <input type="text"
                        class="form-control w-1/3 h-14 ring-1 ring-gray-300 rounded-[80px] focus:ring-light-primary-text text-center"
                        placeholder="-" readonly />
                    <input type="text"
                        class="form-control w-1/3 h-14 ring-1 ring-gray-300 rounded-[80px] focus:ring-light-primary-text text-center"
                        placeholder="-" readonly />
                    <input type="text"
                        class="form-control w-1/3 h-14 ring-1 ring-gray-300 rounded-[80px] focus:ring-light-primary-text text-center"
                        placeholder="-" readonly />
                    <input type="text"
                        class="form-control w-1/3 h-14 ring-1 ring-gray-300 rounded-[80px] focus:ring-light-primary-text text-center"
                        placeholder="-" readonly />
                    <input type="text"
                        class="form-control w-1/3 h-14 ring-1 ring-gray-300 rounded-[80px] focus:ring-light-primary-text text-center"
                        placeholder="-" readonly />
                </div>
                <div class="otp-verification-resend-code text-right">
                    <a href="#" class="text-primary font-semibold leading-[26px]">Resend Code</a>
                </div>
                <div>
                    <button class="btn btn-primary btn-large rounded-[80px] w-full">
                        Verify
                    </button>
                </div>
            </div>

            <div class="back-to-forgot-password-section">
                <a class="text-primary forgot-password-page-btn font-semibold leading-[26px]" href="#">Back to Forgot
                    Password</a>
            </div>
        </div>
    </div>
    <!-- OTP Verification Page Sidebar End -->

    <!-- Quick View Sidebar Start -->
    <div data-state="close"
        class="quick-view-sidebar fixed xl:top-[30px] xl:right-[22px] right-0 top-0 xl:h-[calc(100vh-52px)] h-full z-99 max-w-[950px] w-full bg-white xl:rounded-2xl rounded-none transition-all duration-250 ease-[cubic-bezier(0.645,0.045,0.355,1)] data-[state=open]:translate-x-0 data-[state=open]:opacity-100 data-[state=open]:visible data-[state=close]:translate-x-[200px] data-[state=close]:opacity-0 data-[state=close]:invisible">
        <div class="quick-view-sidebar-header px-6 py-[15px] border-b border-gray-300 relative">
            <h5>Quick View</h5>
            <button data-close-sidebar=".quick-view-sidebar"
                class="close-sidebar-btn absolute top-1/2 right-6 -translate-y-1/2 cursor-pointer inline-flex items-center justify-center size-9 rounded-full bg-[rgba(145,158,171,0.08)]">
                <i class="hgi hgi-stroke hgi-multiplication-sign text-xl leading-5 text-light-primary-text"></i>
            </button>
        </div>
        <div
            class="quick-view-sidebar-content lg:flex lg:flex-row p-6 gap-x-6 gap-y-6 lg:gap-y-0 w-full lg:h-full h-[calc(100%-60px)] overflow-y-auto">
            <div
                class="product-images-wrapper lg:max-w-[350px] w-full lg:flex-none lg:overflow-y-auto lg:h-[calc(100%-60px)] h-auto mb-6 lg:mb-0">
                <div class="space-y-4">
                    <img class="max-h-[300px] w-full rounded-xl object-cover"
                        src="assets/images/product-details/product-details-18.png" alt="product-image" />
                    <img class="max-h-[300px] w-full rounded-xl object-cover"
                        src="assets/images/product-details/product-details-16.png" alt="product-image" />
                    <img class="max-h-[300px] w-full rounded-xl object-cover"
                        src="assets/images/product-details/product-details-17.png" alt="product-image" />
                </div>
            </div>
            <div
                class="product-details-wrapper w-full lg:flex-1 @container/quick-view-product-details lg:overflow-y-auto lg:h-[calc(100%-60px)] h-auto pr-4">
                <span
                    class="product-discount-badge inline-block mb-4 uppercase relative bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain after:bg-no-repeat">Sales</span>
                <p class="uppercase text-info text-xs leading-[18px] font-bold new-arrival-badge mb-4">
                    New Arrival
                </p>
                <h4 class="line-clamp-2 mb-4">AE 24/7 Active Hoodie With Gaiter</h4>
                <div class="rating-section flex items-center mb-4">
                    <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                        <div style="width: 80%"
                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"></div>
                    </div>
                    <span class="font-normal inline-block ml-1">(11.78k reviews)</span>
                </div>
                <div class="price-section flex items-center gap-x-3 mb-6">
                    <span
                        class="current-price text-2xl leading-9 font-bold text-light-primary-text relative after:absolute after:h-6 after:w-px after:bg-gray-300 after:right-0 after:top-1/2 after:-translate-y-1/2 pr-3 inline-block">$62.97</span>
                    <span class="old-price text-2xl leading-9 font-normal text-light-disabled-text">$39.99</span>
                    <span
                        class="product-discount-badge uppercase relative bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain after:bg-no-repeat">15%
                        OFF</span>
                </div>
                <div class="product-add-to-cart-section py-6 border-b border-dashed border-gray-300 border-t">
                    <div class="color-variation-section mb-6">
                        <div class="color-variation-section-title mb-4">
                            <p class="font-semibold text-light-primary-text flex items-center gap-x-2.5">
                                Color:
                                <span
                                    class="text-light-primary-text font-normal capitalize color-variation-selected-color">Green</span>
                            </p>
                        </div>
                        <div class="color-variation-items flex items-center gap-x-2">
                            <div class="color-variation-item">
                                <button data-color-text="green" data-color="#088178"
                                    class="cursor-pointer flex items-center justify-center rounded-full size-10 border border-primary hover:bg-[rgba(145,158,171,0.08)]">
                                    <img src="assets/images/product-details/color-selector-1.png" alt="color" />
                                </button>
                            </div>
                            <div class="color-variation-item">
                                <button data-color-text="blue" data-color="#3366FF"
                                    class="cursor-pointer flex items-center justify-center rounded-full size-10 border border-gray-300 hover:bg-[rgba(145,158,171,0.08)]">
                                    <img src="assets/images/product-details/color-selector-2.png" alt="color" />
                                </button>
                            </div>
                            <div class="color-variation-item">
                                <button data-color-text="yellow" data-color="#FFC107"
                                    class="cursor-pointer flex items-center justify-center rounded-full size-10 border border-gray-300 hover:bg-[rgba(145,158,171,0.08)]">
                                    <img src="assets/images/product-details/color-selector-3.png" alt="color" />
                                </button>
                            </div>
                            <div class="color-variation-item">
                                <button data-color-text="red" data-color="#CB0233"
                                    class="cursor-pointer flex items-center justify-center rounded-full size-10 border border-gray-300 hover:bg-[rgba(145,158,171,0.08)]">
                                    <img src="assets/images/product-details/color-selector-4.png" alt="color" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="size-variation-section mb-6">
                        <div class="size-variation-section-title mb-4 flex items-center justify-between">
                            <p class="font-semibold text-light-primary-text flex items-center gap-x-2.5">
                                Size:
                                <span
                                    class="text-light-primary-text font-normal capitalize size-variation-selected-size">S</span>
                            </p>
                            <!-- <a
                  href="#"
                  class="text-sm leading-[22px] hover:underline variation-size-guide-btn"
                  >See Size Chart</a
                > -->
                        </div>
                        <div class="size-variation-items flex items-center gap-2 2xl:flex-nowrap flex-wrap">
                            <div class="size-variation-item">
                                <button data-size-text="S"
                                    class="cursor-pointer flex items-center justify-center text-sm leading-6 px-[29px] py-1.5 font-semibold border border-primary bg-primary rounded-[100px] text-white hover:bg-primary">
                                    S
                                </button>
                            </div>
                            <div class="size-variation-item">
                                <button data-size-text="M"
                                    class="cursor-pointer flex items-center justify-center text-sm leading-6 px-[29px] py-1.5 text-light-primary-text font-semibold border border-gray-300 rounded-[100px] hover:bg-[rgba(145,158,171,0.08)]">
                                    M
                                </button>
                            </div>
                            <div class="size-variation-item">
                                <button data-size-text="L"
                                    class="cursor-pointer flex items-center justify-center text-sm leading-6 px-[29px] py-1.5 text-light-primary-text font-semibold border border-gray-300 rounded-[100px] hover:bg-[rgba(145,158,171,0.08)]">
                                    L
                                </button>
                            </div>
                            <div class="size-variation-item">
                                <button data-size-text="XL"
                                    class="cursor-pointer flex items-center justify-center text-sm leading-6 px-[29px] py-1.5 text-light-primary-text font-semibold border border-gray-300 rounded-[100px] hover:bg-[rgba(145,158,171,0.08)]">
                                    XL
                                </button>
                            </div>
                            <div class="size-variation-item">
                                <button data-size-text="XXL"
                                    class="cursor-pointer flex items-center justify-center text-sm leading-6 px-[29px] py-2 text-light-primary-text font-semibold border border-gray-300 rounded-[100px] hover:bg-[rgba(145,158,171,0.08)]">
                                    XXL
                                </button>
                            </div>
                            <div class="size-variation-item">
                                <button data-size-text="XXXL"
                                    class="cursor-pointer flex items-center justify-center text-sm leading-6 px-[29px] py-2 text-light-primary-text font-semibold border border-gray-300 rounded-[100px] hover:bg-[rgba(145,158,171,0.08)]">
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
                            class="flex items-center justify-between gap-x-4 gap-y-4 flex-wrap md:flex-nowrap md:gap-y-0">
                            <div
                                class="quantity-section flex-1 max-w-[126px] border border-gray-300 rounded-[80px] px-4 py-[11px] flex items-center justify-between">
                                <button class="quantity-btn inline-flex items-center justify-center hover:text-primary">
                                    <i class="hgi hgi-stroke hgi-minus-sign text-xl leading-5"></i>
                                </button>
                                <input type="text"
                                    class="quantity-input text-center w-full focus:outline-none font-semibold text-base leading-6 text-light-primary-text"
                                    value="1" />
                                <button class="quantity-btn inline-flex items-center justify-center hover:text-primary">
                                    <i class="hgi hgi-stroke hgi-plus-sign text-xl leading-5"></i>
                                </button>
                            </div>
                            <div class="flex-1">
                                <a href="#" class="btn btn-warning btn-large rounded-[80px] w-full">
                                    Buy Now
                                </a>
                            </div>
                            <div class="flex-1">
                                <a href="#" class="btn btn-primary btn-large rounded-[80px] w-full">
                                    <i
                                        class="hgi hgi-stroke hgi-shopping-cart-add-02 text-2xl leading-6 text-white"></i>
                                    Add to Cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-extra-info-section flex flex-col gap-y-4 my-6">
                    <div
                        class="product-extra-info-item flex items-center gap-x-4 gap-y-4 flex-wrap @md/quick-view-product-details:flex-nowrap @md/quick-view-product-details:gap-y-0">
                        <p class="font-semibold text-light-primary-text">
                            Free Shipping:
                        </p>
                        <p>Estimated Delivery Time 5-7 Days</p>
                    </div>
                    <div
                        class="product-extra-info-item flex items-center gap-x-4 gap-y-4 flex-wrap @md/quick-view-product-details:flex-nowrap @md/quick-view-product-details:gap-y-0">
                        <p class="font-semibold text-light-primary-text">SKU:</p>
                        <p>SKU-001</p>
                    </div>
                    <div
                        class="product-extra-info-item flex items-center gap-x-4 gap-y-4 flex-wrap @md/quick-view-product-details:flex-nowrap @md/quick-view-product-details:gap-y-0">
                        <p class="font-semibold text-light-primary-text">Categories:</p>
                        <p>Electronics, Computers, Accessories</p>
                    </div>
                </div>
                <div class="accordion" id="product-details-accordion">
                    <div class="accordion-item">
                        <div class="accordion-header active">
                            <h5>Description</h5>
                            <i class="hgi hgi-stroke hgi-arrow-down-01 text-2xl leading-6"></i>
                        </div>

                        <div class="accordion-body">
                            <p class="mb-6">
                                To begin, carefully unpack the product and ensure all
                                necessary components are included. Place the product on a
                                clean, flat surface before use. If the device requires power,
                                insert the batteries or connect it to a power source as
                                indicated in the manual. Press the power button to activate
                                the product, and refer to the control panel or app interface
                                to adjust the settings according to your preference. Use the
                                product as recommended, following all safety guidelines
                                provided. After use, turn off the device and disconnect it
                                from the power source. Clean and store the product in a cool,
                                dry place to maintain its condition for future use.
                            </p>
                            <p class="mb-6">
                                To begin, carefully unpack the product and ensure all
                                necessary components are included. Place the product on a
                                clean, flat surface before use. If the device requires power,
                                insert the batteries or connect it to a power source as
                                indicated in the manual. Press the power button to activate
                                the product, and refer to the control panel or app interface
                                to adjust the settings according to your preference. Use the
                                product as recommended, following all safety guidelines
                                provided. After use, turn off the device and disconnect it
                                from the power source. Clean and store the product in a cool,
                                dry place to maintain its condition for future use.
                            </p>
                            <div class="mb-6">
                                <ul class="custom-list-style">
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
                            <div class="mb-6">
                                <img src="assets/images/product-details/product-details-19.png" alt="product-details"
                                    class="w-full h-full object-cover rounded-3xl max-h-[500px]" />
                            </div>
                            <div class="mb-6">
                                <h4 class="mb-6">🛒 eCommerce Platform Features</h4>
                                <p class="mb-6">
                                    Launch, manage, and grow your online store with our
                                    all-in-one eCommerce solution. Whether you're a small
                                    business or a growing brand, our platform is designed to
                                    simplify the selling process and enhance your customers’
                                    shopping experience. From product listings to secure
                                    payments and seamless shipping, everything you need is built
                                    right in.
                                </p>
                                <ul class="custom-list-style">
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
                            <div class="mb-6">
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
                                <ul class="custom-list-style">
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
                            <div class="mb-6">
                                <img src="assets/images/product-details/product-details-20.png" alt="product-details"
                                    class="w-full h-full object-cover rounded-3xl max-h-[500px]" />
                            </div>
                            <div class="grid grid-cols-12 gap-6 mb-6">
                                <div class="col-span-12 p-6 border-gray-300 border rounded-2xl text-center">
                                    <span
                                        class="inline-flex items-center justify-center size-14 bg-warning-lighter rounded-full">
                                        <i
                                            class="hgi hgi-stroke hgi-container-truck text-3xl text-light-primary-text"></i>
                                    </span>
                                    <h5 class="pt-3 pb-0.5">Free Shipping</h5>
                                    <p>Enjoy the Convenience of Free Shipping on Every Order</p>
                                </div>
                                <div class="col-span-12 p-6 border-gray-300 border rounded-2xl text-center">
                                    <span
                                        class="inline-flex items-center justify-center size-14 bg-warning-lighter rounded-full">
                                        <i
                                            class="hgi hgi-stroke hgi-customer-support text-3xl text-light-primary-text"></i>
                                    </span>
                                    <h5 class="pt-3 pb-0.5">24x7 Support</h5>
                                    <p>Round-the-Clock Assistance, Anytime You Need It</p>
                                </div>
                                <div class="col-span-12 p-6 border-gray-300 border rounded-2xl text-center">
                                    <span
                                        class="inline-flex items-center justify-center size-14 bg-warning-lighter rounded-full">
                                        <i
                                            class="hgi hgi-stroke hgi-delivery-return-02 text-3xl text-light-primary-text"></i>
                                    </span>
                                    <h5 class="pt-3 pb-0.5">30 Days Return</h5>
                                    <p>
                                        Your Satisfaction is Our Priority: Return Any Product
                                        Within 30 Days
                                    </p>
                                </div>
                                <div class="col-span-12 p-6 border-gray-300 border rounded-2xl text-center">
                                    <span
                                        class="inline-flex items-center justify-center size-14 bg-warning-lighter rounded-full">
                                        <i class="hgi hgi-stroke hgi-transaction text-3xl text-light-primary-text"></i>
                                    </span>
                                    <h5 class="pt-3 pb-0.5">Secure Payment</h5>
                                    <p>
                                        Seamless Shopping Backed by Safe and Secure Payment
                                        Options
                                    </p>
                                </div>
                            </div>
                            <p>
                                To begin, carefully unpack the product and ensure all
                                necessary components are included. Place the product on a
                                clean, flat surface before use. If the device requires power,
                                insert the batteries or connect it to a power source as
                                indicated in the manual. Press the power button to activate
                                the product, and refer to the control panel or app interface
                                to adjust the settings according to your preference. Use the
                                product as recommended, following all safety guidelines
                                provided. After use, turn off the device and disconnect it
                                from the power source. Clean and store the product in a cool,
                                dry place to maintain its condition for future use.
                            </p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h5>Additional Info</h5>
                            <i class="hgi hgi-stroke hgi-arrow-down-01 text-2xl leading-6"></i>
                        </div>

                        <div class="accordion-body">
                            <table class="w-full border-collapse">
                                <tbody class="divide-y divide-gray-300">
                                    <tr>
                                        <th class="font-semibold w-[180px] text-left py-3 text-light-primary-text">
                                            Product Type
                                        </th>
                                        <td>Touchless Infrared Thermometer</td>
                                    </tr>
                                    <tr>
                                        <th class="font-semibold w-[180px] text-left py-3 text-light-primary-text">
                                            Brand
                                        </th>
                                        <td>Mediguard</td>
                                    </tr>
                                    <tr>
                                        <th class="font-semibold w-[180px] text-left py-3 text-light-primary-text">
                                            Model
                                        </th>
                                        <td>X200</td>
                                    </tr>
                                    <tr>
                                        <th class="font-semibold w-[180px] text-left py-3 text-light-primary-text">
                                            Measurement Time
                                        </th>
                                        <td>1 Second</td>
                                    </tr>
                                    <tr>
                                        <th class="font-semibold w-[180px] text-left py-3 text-light-primary-text">
                                            Contact Type
                                        </th>
                                        <td>Non-Contact</td>
                                    </tr>
                                    <tr>
                                        <th class="font-semibold w-[180px] text-left py-3 text-light-primary-text">
                                            Measurement Range
                                        </th>
                                        <td>32°C – 42.9°C / 89.6°F – 109.2°F</td>
                                    </tr>
                                    <tr>
                                        <th class="font-semibold w-[180px] text-left py-3 text-light-primary-text">
                                            Modes
                                        </th>
                                        <td>Body & Surface</td>
                                    </tr>
                                    <tr>
                                        <th class="font-semibold w-[180px] text-left py-3 text-light-primary-text">
                                            Accuracy
                                        </th>
                                        <td>±0.2°C / ±0.4°F</td>
                                    </tr>
                                    <tr>
                                        <th class="font-semibold w-[180px] text-left py-3 text-light-primary-text">
                                            Memory Capacity
                                        </th>
                                        <td>20 Readings</td>
                                    </tr>
                                    <tr>
                                        <th class="font-semibold w-[180px] text-left py-3 text-light-primary-text">
                                            Display Type
                                        </th>
                                        <td>Backlit LCD</td>
                                    </tr>
                                    <tr>
                                        <th class="font-semibold w-[180px] text-left py-3 text-light-primary-text">
                                            Battery Type
                                        </th>
                                        <td>2 × AAA (not included)</td>
                                    </tr>
                                    <tr>
                                        <th class="font-semibold w-[180px] text-left py-3 text-light-primary-text">
                                            Dimensions
                                        </th>
                                        <td>150mm × 40mm × 45mm</td>
                                    </tr>
                                    <tr>
                                        <th class="font-semibold w-[180px] text-left py-3 text-light-primary-text">
                                            Weight
                                        </th>
                                        <td>90g (without batteries)</td>
                                    </tr>
                                    <tr>
                                        <th class="font-semibold w-[180px] text-left py-3 text-light-primary-text">
                                            Warranty
                                        </th>
                                        <td>1 Year</td>
                                    </tr>
                                    <tr>
                                        <th class="font-semibold w-[180px] text-left py-3 text-light-primary-text">
                                            Usage
                                        </th>
                                        <td>Suitable for all age groups</td>
                                    </tr>
                                    <tr>
                                        <th class="font-semibold w-[180px] text-left py-3 text-light-primary-text">
                                            Certification
                                        </th>
                                        <td>CE, FDA Approved</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h5>Reviews</h5>
                            <i class="hgi hgi-stroke hgi-arrow-down-01 text-2xl leading-6"></i>
                        </div>

                        <div class="p-0! accordion-body">
                            <div class="grid grid-cols-12 divide-y divide-gray-300 rating-overview">
                                <div class="col-span-12 flex items-center justify-center py-6">
                                    <div class="rating-heading space-y-2 text-center">
                                        <p class="font-semibold text-light-primary-text">
                                            Average Rating
                                        </p>
                                        <h2 class="text-error">4/5</h2>
                                        <div class="rating-section flex items-center justify-center">
                                            <div
                                                class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                                <div style="width: 80%"
                                                    class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                                </div>
                                            </div>
                                        </div>
                                        <p>(8.24k reviews)</p>
                                    </div>
                                </div>
                                <div class="col-span-12 p-6 flex items-center justify-center">
                                    <div class="list-rating space-y-6 w-full">
                                        <div class="flex gap-x-4 items-center">
                                            <span class="font-semibold text-light-primary-text">5 Star</span>
                                            <div
                                                class="progress w-full flex-1 h-1.5 bg-[rgba(145,158,171,0.24)] rounded-[50px] overflow-hidden">
                                                <div style="width: 70%"
                                                    class="progress-bar h-full bg-primary rounded-[50px]"></div>
                                            </div>
                                            <span>35.74k</span>
                                        </div>
                                        <div class="flex gap-x-4 items-center">
                                            <span class="font-semibold text-light-primary-text">4 Star</span>
                                            <div
                                                class="progress w-full flex-1 h-1.5 bg-[rgba(145,158,171,0.24)] rounded-[50px] overflow-hidden">
                                                <div style="width: 70%"
                                                    class="progress-bar h-full bg-primary rounded-[50px]"></div>
                                            </div>
                                            <span>79.41k</span>
                                        </div>
                                        <div class="flex gap-x-4 items-center">
                                            <span class="font-semibold text-light-primary-text">3 Star</span>
                                            <div
                                                class="progress w-full flex-1 h-1.5 bg-[rgba(145,158,171,0.24)] rounded-[50px] overflow-hidden">
                                                <div style="width: 70%"
                                                    class="progress-bar h-full bg-primary rounded-[50px]"></div>
                                            </div>
                                            <span>60.69k</span>
                                        </div>
                                        <div class="flex gap-x-4 items-center">
                                            <span class="font-semibold text-light-primary-text">2 Star</span>
                                            <div
                                                class="progress w-full flex-1 h-1.5 bg-[rgba(145,158,171,0.24)] rounded-[50px] overflow-hidden">
                                                <div style="width: 70%"
                                                    class="progress-bar h-full bg-primary rounded-[50px]"></div>
                                            </div>
                                            <span>42.12k</span>
                                        </div>
                                        <div class="flex gap-x-4 items-center">
                                            <span class="font-semibold text-light-primary-text">1 Star</span>
                                            <div
                                                class="progress w-full flex-1 h-1.5 bg-[rgba(145,158,171,0.24)] rounded-[50px] overflow-hidden">
                                                <div style="width: 70%"
                                                    class="progress-bar h-full bg-primary rounded-[50px]"></div>
                                            </div>
                                            <span>12.58k</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 flex items-center justify-center py-6">
                                    <a href="#quick-view-comment-form"
                                        class="btn btn-primary outline btn-large rounded-[100px]">Write a Review</a>
                                </div>
                            </div>
                            <div id="quick-view-comment-form"
                                class="comment-form-wrapper p-6 border-t border-gray-300 border-b">
                                <div
                                    class="comment-respond @md/quick-view-product-details:border @md/quick-view-product-details:border-gray-300 @md/quick-view-product-details:rounded-3xl @md/quick-view-product-details:p-6">
                                    <h5 class="mb-6">Add Comment</h5>
                                    <div class="flex items-center gap-x-3 mb-6">
                                        <p class="text-light-primary-text font-medium">
                                            Your review about this product:
                                        </p>
                                        <div class="rating-section flex items-center justify-center">
                                            <div
                                                class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                                <div style="width: 0%"
                                                    class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form class="quick-view-comment-form flex flex-col gap-y-6" action="#">
                                        <div class="input-group medium rounded-[20px] px-3.5 resize-none">
                                            <textarea id="quick-view-post-comment" rows="4"
                                                class="peer form-control placeholder-transparent focus:placeholder-transparent"
                                                placeholder="Comment *"></textarea>
                                            <label for="quick-view-post-comment"
                                                class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-6 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                                                Comment *
                                            </label>
                                        </div>
                                        <div class="relative w-full">
                                            <input type="text" id="quick-view-name"
                                                class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                                                placeholder="Name *" />

                                            <label for="quick-view-name"
                                                class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                                                Name *
                                            </label>
                                        </div>
                                        <div class="relative w-full">
                                            <input type="email" id="quick-view-email"
                                                class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                                                placeholder="Email *" />

                                            <label for="quick-view-email"
                                                class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                                                Email *
                                            </label>
                                        </div>

                                        <div class="flex md:justify-end justify-center gap-x-4">
                                            <button
                                                class="btn btn-default outline btn-large rounded-[100px] py-[11px] shadow-none">
                                                Cancel
                                            </button>
                                            <button class="btn btn-primary btn-large rounded-[100px] py-[11px]">
                                                Post Review
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="comment-list-wrapper p-6">
                                <div
                                    class="comment-list-title flex items-center justify-between pb-6 border-b border-gray-300 mb-6">
                                    <h5>Customer Ratings & Review</h5>
                                    <div class="relative min-w-[100px]">
                                        <select id="quick-view-sorting"
                                            class="rounded-[100px]! quick-view-select filter-select label">
                                            <option value="newest">Newest</option>
                                            <option value="oldest">Oldest</option>
                                            <option value="popular">Popular</option>
                                            <option value="rating">Rating</option>
                                            <option value="relevance">Relevance</option>
                                            <option value="comment-count">Comment Count</option>
                                        </select>
                                        <label for="quick-view-sorting" class="nice-select-label">Sorting</label>
                                    </div>
                                </div>
                                <ol class="comment-list">
                                    <li class="comment">
                                        <div class="comment-body">
                                            <div class="comment-avatar-card flex items-center gap-x-4 mb-3">
                                                <div class="comment-author-avatar size-12 rounded-full">
                                                    <img src="assets/images/blog/user-avatar-1.png"
                                                        alt="Comment Author Avatar" class="rounded-full" />
                                                </div>
                                                <div class="comment-author-info flex-1">
                                                    <p class="comment-author font-semibold text-light-primary-text">
                                                        Robert Fox
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="flex items-center mb-3">
                                                <div
                                                    class="rating-section flex items-center relative after:absolute after:h-[22px] after:w-px after:right-0 after:top-1/2 after:-translate-y-1/2 after:bg-gray-300 pr-3">
                                                    <div
                                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                                        <div style="width: 80%"
                                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                                        </div>
                                                    </div>
                                                    <span
                                                        class="text-sm leading-[22px] font-normal inline-flex ml-2 text-light-primary-text">4.5</span>
                                                </div>
                                                <div class="flex items-center gap-x-1 pl-3">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.5269 3.13379L13.9331 3.67969L13.7065 6.13965L15.3335 8L13.7065 9.86035L13.9331 12.3203L11.5269 12.8662L10.2661 14.9932L7.99951 14.0195L5.73291 15L4.47314 12.873L2.06689 12.3271L2.29346 9.86035L0.666504 8L2.29346 6.13379L2.06689 3.66699L4.47314 3.12695L5.73291 1L7.99951 1.97363L10.2661 1L11.5269 3.13379ZM6.72607 9.17285L5.18018 7.62012L4.19287 8.60645L6.72607 11.1465L11.6128 6.24707L10.6265 5.25977L6.72607 9.17285Z"
                                                            fill="#088178" />
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
                                                class="comment-actions flex @md/quick-view-product-details:items-center @md/quick-view-product-details:flex-row flex-col gap-y-3 @md/quick-view-product-details:gap-y-0">
                                                <p class="text-sm leading-[22px] @md/quick-view-product-details:pr-3">
                                                    was this review helpful to you?
                                                </p>
                                                <a href="#"
                                                    class="comment-action-item text-sm leading-[22px] inline-flex items-center gap-x-1 @md/quick-view-product-details:pr-3 relative @md/quick-view-product-details:after:absolute @md/quick-view-product-details:after:h-5 @md/quick-view-product-details:after:w-px @md/quick-view-product-details:after:right-0 @md/quick-view-product-details:after:top-1/2 @md/quick-view-product-details:after:-translate-y-1/2 @md/quick-view-product-details:after:bg-gray-300">
                                                    <i
                                                        class="hgi hgi-stroke hgi-thumbs-up text-lg leading-[18px] text-light-primary-text"></i>
                                                    Thank (234)
                                                </a>
                                                <a href="#"
                                                    class="comment-action-item text-sm leading-[22px] inline-flex items-center gap-x-1 @md/quick-view-product-details:pl-3">
                                                    <i
                                                        class="hgi hgi-stroke hgi-thumbs-down text-lg leading-[18px] text-light-primary-text"></i>
                                                    Dislike (12)
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="comment">
                                        <div class="comment-body">
                                            <div class="comment-avatar-card flex items-center gap-x-4 mb-3">
                                                <div class="comment-author-avatar size-12 rounded-full">
                                                    <img src="assets/images/blog/user-avatar-1.png"
                                                        alt="Comment Author Avatar" class="rounded-full" />
                                                </div>
                                                <div class="comment-author-info flex-1">
                                                    <p class="comment-author font-semibold text-light-primary-text">
                                                        Jenny Wilson
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="flex items-center mb-3">
                                                <div
                                                    class="rating-section flex items-center relative after:absolute after:h-[22px] after:w-px after:right-0 after:top-1/2 after:-translate-y-1/2 after:bg-gray-300 pr-3">
                                                    <div
                                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                                        <div style="width: 80%"
                                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                                        </div>
                                                    </div>
                                                    <span
                                                        class="text-sm leading-[22px] font-normal inline-flex ml-2 text-light-primary-text">4.5</span>
                                                </div>
                                                <div class="flex items-center gap-x-1 pl-3">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.5269 3.13379L13.9331 3.67969L13.7065 6.13965L15.3335 8L13.7065 9.86035L13.9331 12.3203L11.5269 12.8662L10.2661 14.9932L7.99951 14.0195L5.73291 15L4.47314 12.873L2.06689 12.3271L2.29346 9.86035L0.666504 8L2.29346 6.13379L2.06689 3.66699L4.47314 3.12695L5.73291 1L7.99951 1.97363L10.2661 1L11.5269 3.13379ZM6.72607 9.17285L5.18018 7.62012L4.19287 8.60645L6.72607 11.1465L11.6128 6.24707L10.6265 5.25977L6.72607 9.17285Z"
                                                            fill="#088178" />
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
                                                class="comment-actions flex @md/quick-view-product-details:items-center @md/quick-view-product-details:flex-row flex-col gap-y-3 @md/quick-view-product-details:gap-y-0">
                                                <p class="text-sm leading-[22px] @md/quick-view-product-details:pr-3">
                                                    was this review helpful to you?
                                                </p>
                                                <a href="#"
                                                    class="comment-action-item text-sm leading-[22px] inline-flex items-center gap-x-1 @md/quick-view-product-details:pr-3 relative @md/quick-view-product-details:after:absolute @md/quick-view-product-details:after:h-5 @md/quick-view-product-details:after:w-px @md/quick-view-product-details:after:right-0 @md/quick-view-product-details:after:top-1/2 @md/quick-view-product-details:after:-translate-y-1/2 @md/quick-view-product-details:after:bg-gray-300">
                                                    <i
                                                        class="hgi hgi-stroke hgi-thumbs-up text-lg leading-[18px] text-light-primary-text"></i>
                                                    Thank (234)
                                                </a>
                                                <a href="#"
                                                    class="comment-action-item text-sm leading-[22px] inline-flex items-center gap-x-1 @md/quick-view-product-details:pl-3">
                                                    <i
                                                        class="hgi hgi-stroke hgi-thumbs-down text-lg leading-[18px] text-light-primary-text"></i>
                                                    Dislike (12)
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="comment">
                                        <div class="comment-body">
                                            <div class="comment-avatar-card flex items-center gap-x-4 mb-3">
                                                <div class="comment-author-avatar size-12 rounded-full">
                                                    <img src="assets/images/blog/user-avatar-1.png"
                                                        alt="Comment Author Avatar" class="rounded-full" />
                                                </div>
                                                <div class="comment-author-info flex-1">
                                                    <p class="comment-author font-semibold text-light-primary-text">
                                                        Brooklyn Simmons
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="flex items-center mb-3">
                                                <div
                                                    class="rating-section flex items-center relative after:absolute after:h-[22px] after:w-px after:right-0 after:top-1/2 after:-translate-y-1/2 after:bg-gray-300 pr-3">
                                                    <div
                                                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                                                        <div style="width: 80%"
                                                            class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                                                        </div>
                                                    </div>
                                                    <span
                                                        class="text-sm leading-[22px] font-normal inline-flex ml-2 text-light-primary-text">4.5</span>
                                                </div>
                                                <div class="flex items-center gap-x-1 pl-3">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.5269 3.13379L13.9331 3.67969L13.7065 6.13965L15.3335 8L13.7065 9.86035L13.9331 12.3203L11.5269 12.8662L10.2661 14.9932L7.99951 14.0195L5.73291 15L4.47314 12.873L2.06689 12.3271L2.29346 9.86035L0.666504 8L2.29346 6.13379L2.06689 3.66699L4.47314 3.12695L5.73291 1L7.99951 1.97363L10.2661 1L11.5269 3.13379ZM6.72607 9.17285L5.18018 7.62012L4.19287 8.60645L6.72607 11.1465L11.6128 6.24707L10.6265 5.25977L6.72607 9.17285Z"
                                                            fill="#088178" />
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
                                                class="comment-actions flex @md/quick-view-product-details:items-center @md/quick-view-product-details:flex-row flex-col gap-y-3 @md/quick-view-product-details:gap-y-0">
                                                <p class="text-sm leading-[22px] @md/quick-view-product-details:pr-3">
                                                    was this review helpful to you?
                                                </p>
                                                <a href="#"
                                                    class="comment-action-item text-sm leading-[22px] inline-flex items-center gap-x-1 @md/quick-view-product-details:pr-3 relative @md/quick-view-product-details:after:absolute @md/quick-view-product-details:after:h-5 @md/quick-view-product-details:after:w-px @md/quick-view-product-details:after:right-0 @md/quick-view-product-details:after:top-1/2 @md/quick-view-product-details:after:-translate-y-1/2 @md/quick-view-product-details:after:bg-gray-300">
                                                    <i
                                                        class="hgi hgi-stroke hgi-thumbs-up text-lg leading-[18px] text-light-primary-text"></i>
                                                    Thank (234)
                                                </a>
                                                <a href="#"
                                                    class="comment-action-item text-sm leading-[22px] inline-flex items-center gap-x-1 @md/quick-view-product-details:pl-3">
                                                    <i
                                                        class="hgi hgi-stroke hgi-thumbs-down text-lg leading-[18px] text-light-primary-text"></i>
                                                    Dislike (12)
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                                <div class="comment-pagination-wrapper mt-6">
                                    <ul class="flex items-center justify-center gap-x-1.5 comment-pagination">
                                        <li class="group comment-pagination-item">
                                            <a href="#"
                                                class="inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] bg-white cursor-pointer border border-gray-300 group-hover:font-semibold group-hover:border-primary group-hover:bg-[rgba(0,171,85,0.08)] transition-colors duration-300 ease-in-out">
                                                <span class="inline-flex items-center justify-center">
                                                    <i
                                                        class="hgi hgi-stroke hgi-arrow-left-01 text-[20px] group-hover:font-semibold leading-5 text-light-primary-text group-hover:text-primary"></i></span>
                                            </a>
                                        </li>
                                        <li class="group comment-pagination-item">
                                            <a href="#"
                                                class="inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] active">
                                                1
                                            </a>
                                        </li>
                                        <li class="group blog-pagination-item">
                                            <a href="#"
                                                class="inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] text-base leading-6 text-light-primary-text group-hover:text-primary group-hover:font-semibold bg-white cursor-pointer border border-gray-300 group-hover:border-primary group-hover:bg-[rgba(0,171,85,0.08)] transition-colors duration-300 ease-in-out">
                                                2
                                            </a>
                                        </li>
                                        <li class="group comment-pagination-item">
                                            <a href="#"
                                                class="inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] text-base leading-6 text-light-primary-text group-hover:text-primary group-hover:font-semibold bg-white cursor-pointer border border-gray-300 group-hover:border-primary group-hover:bg-[rgba(0,171,85,0.08)] transition-colors duration-300 ease-in-out">
                                                3
                                            </a>
                                        </li>
                                        <li class="group blog-pagination-item">
                                            <a href="#"
                                                class="inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] text-base leading-6 text-light-primary-text group-hover:text-primary group-hover:font-semibold bg-white cursor-pointer border border-gray-300 group-hover:border-primary group-hover:bg-[rgba(0,171,85,0.08)] transition-colors duration-300 ease-in-out">
                                                4
                                            </a>
                                        </li>
                                        <li class="group comment-pagination-item">
                                            <a href="#"
                                                class="inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] text-base leading-6 text-light-primary-text group-hover:text-primary group-hover:font-semibold bg-white cursor-pointer border border-gray-300 group-hover:border-primary group-hover:bg-[rgba(0,171,85,0.08)] transition-colors duration-300 ease-in-out">
                                                5
                                            </a>
                                        </li>
                                        <li class="comment-pagination-item">
                                            <a href="#"
                                                class="inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] bg-white">
                                                <span class="inline-flex items-center justify-center">
                                                    <i
                                                        class="hgi hgi-stroke hgi-more-horizontal text-[20px] leading-5 text-light-primary-text"></i></span>
                                            </a>
                                        </li>
                                        <li class="group comment-pagination-item">
                                            <a href="#"
                                                class="inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] group-hover:font-semibold bg-white cursor-pointer border border-gray-300 group-hover:border-primary group-hover:bg-[rgba(0,171,85,0.08)] transition-colors duration-300 ease-in-out">
                                                <span class="inline-flex items-center justify-center">
                                                    <i
                                                        class="hgi hgi-stroke hgi-arrow-right-01 text-[20px] leading-5 group-hover:font-semibold text-light-primary-text group-hover:text-primary"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick View Sidebar End -->

    <!-- ========== HEADER Section Start ========== -->
    <header>
        <!-- header-top start -->
        <div class="bg-primary header-top">
            <div class="container">
                <div class="flex items-center xl:justify-between justify-center">
                    <div class="xl:flex items-center gap-x-6 hidden">
                        <p class="flex items-center gap-x-2 text-white text-sm leading-[22px]">
                            <span><i class="hgi hgi-stroke hgi-customer-support text-xl text-white"></i>
                            </span>
                            Need Support ?
                            <span>Call Us</span>
                            <a href="#"
                                class="bg-warning py-px px-2 text-xs leading-4.5 rounded-[60px] text-gray-800">(480)
                                555-0103</a>
                        </p>
                        <div>
                            <ul class="flex items-center gap-x-[19px]">
                                <li
                                    class="relative group after:absolute after:h-7.5 after:w-px after:bg-primary-light after:right-0 after:top-1/2 after:-translate-y-1/2">
                                    <a href="#"
                                        class="text-sm leading-[22px] text-white inline-flex items-center gap-x-2 pr-[19px] py-3.5"><span
                                            class="inline-flex items-center justify-center size-7 bg-primary-darker rounded-full"><i
                                                class="hgi hgi-stroke hgi-language-circle text-xl text-white"></i>
                                        </span>
                                        English
                                        <span class="inline-flex items-center justify-center"><i
                                                class="hgi hgi-stroke hgi-arrow-down-01 text-xl text-white"></i>
                                        </span>
                                    </a>

                                    <ul
                                        class="absolute left-0 top-full py-2 z-50 w-[250px] max-w-[250px] bg-white rounded-lg shadow-dark-z-24 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-4 group-hover:translate-y-0">
                                        <li class="py-2 px-4 group/item">
                                            <a href="#"
                                                class="flex items-center gap-x-2 relative text-light-primary-text group-hover/item:text-primary"><span
                                                    class="w-8 h-8 bg-[#F0F0F0] group-hover/item:bg-[#00AB55]/8 inline-flex items-center justify-center rounded-full">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_33581_103320)">
                                                            <path
                                                                d="M8 16C12.4183 16 16 12.4183 16 8C16 3.58172 12.4183 0 8 0C3.58172 0 0 3.58172 0 8C0 12.4183 3.58172 16 8 16Z"
                                                                fill="#F0F0F0" />
                                                            <path
                                                                d="M7.65186 7.99999H15.9997C15.9997 7.27793 15.9034 6.57843 15.7241 5.91302H7.65186V7.99999Z"
                                                                fill="#D80027" />
                                                            <path
                                                                d="M7.65186 3.82568H14.8255C14.3358 3.02655 13.7096 2.32021 12.9795 1.73871H7.65186V3.82568Z"
                                                                fill="#D80027" />
                                                            <path
                                                                d="M7.99989 16C9.88268 16 11.6132 15.3492 12.9798 14.2609H3.02002C4.38658 15.3492 6.11711 16 7.99989 16Z"
                                                                fill="#D80027" />
                                                            <path
                                                                d="M1.17398 12.1733H14.8256C15.2188 11.5317 15.5237 10.8305 15.7242 10.0863H0.275391C0.475922 10.8305 0.780828 11.5317 1.17398 12.1733Z"
                                                                fill="#D80027" />
                                                            <path
                                                                d="M3.70575 1.24931H4.43478L3.75666 1.74197L4.01569 2.53912L3.33759 2.04647L2.6595 2.53912L2.88325 1.85047C2.28619 2.34781 1.76287 2.9305 1.33162 3.57975H1.56522L1.13356 3.89334C1.06631 4.00553 1.00181 4.1195 0.94 4.23516L1.14612 4.86956L0.761563 4.59016C0.665969 4.79269 0.578531 4.99978 0.499938 5.21119L0.727031 5.91019H1.56522L0.887094 6.40284L1.14612 7.2L0.468031 6.70734L0.0618437 7.00247C0.0211875 7.32928 0 7.66216 0 8H8C8 3.58175 8 3.06087 8 0C6.41963 0 4.94641 0.458438 3.70575 1.24931ZM4.01569 7.2L3.33759 6.70734L2.6595 7.2L2.91853 6.40284L2.24041 5.91019H3.07859L3.33759 5.11303L3.59659 5.91019H4.43478L3.75666 6.40284L4.01569 7.2ZM3.75666 4.07241L4.01569 4.86956L3.33759 4.37691L2.6595 4.86956L2.91853 4.07241L2.24041 3.57975H3.07859L3.33759 2.78259L3.59659 3.57975H4.43478L3.75666 4.07241ZM6.88525 7.2L6.20716 6.70734L5.52906 7.2L5.78809 6.40284L5.10997 5.91019H5.94816L6.20716 5.11303L6.46616 5.91019H7.30434L6.62622 6.40284L6.88525 7.2ZM6.62622 4.07241L6.88525 4.86956L6.20716 4.37691L5.52906 4.86956L5.78809 4.07241L5.10997 3.57975H5.94816L6.20716 2.78259L6.46616 3.57975H7.30434L6.62622 4.07241ZM6.62622 1.74197L6.88525 2.53912L6.20716 2.04647L5.52906 2.53912L5.78809 1.74197L5.10997 1.24931H5.94816L6.20716 0.452156L6.46616 1.24931H7.30434L6.62622 1.74197Z"
                                                                fill="#0052B4" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_33581_103320">
                                                                <rect width="16" height="16" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg> </span>English
                                            </a>
                                        </li>
                                   
                                        <li class="py-2 px-4 group/item">
    <a href="#"
        class="flex items-center gap-x-2 relative text-light-primary-text group-hover/item:text-primary">

        <span
            class="w-8 h-8 bg-[#F0F0F0] group-hover/item:bg-[#00AB55]/8 transition-colors duration-300 inline-flex items-center justify-center rounded-full">

            <svg width="16" height="16" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                <circle cx="256" cy="256" r="256" fill="#F0F0F0"/>
                
                <!-- Saffron -->
                <path d="M256 0C146.1 0 52.3 69.5 16 167h480C459.7 69.5 365.9 0 256 0z"
                    fill="#FF9811"/>
                
                <!-- Green -->
                <path d="M256 512c109.9 0 203.7-69.5 240-167H16c36.3 97.5 130.1 167 240 167z"
                    fill="#6DA544"/>
                
                <!-- Ashoka Chakra -->
                <circle cx="256" cy="256" r="45" fill="none" stroke="#0052B4" stroke-width="10"/>
                <circle cx="256" cy="256" r="6" fill="#0052B4"/>

                <g stroke="#0052B4" stroke-width="4">
                    <line x1="256" y1="211" x2="256" y2="301"/>
                    <line x1="211" y1="256" x2="301" y2="256"/>
                    <line x1="224" y1="224" x2="288" y2="288"/>
                    <line x1="288" y1="224" x2="224" y2="288"/>
                    <line x1="238" y1="214" x2="274" y2="298"/>
                    <line x1="214" y1="238" x2="298" y2="274"/>
                    <line x1="274" y1="214" x2="238" y2="298"/>
                    <line x1="298" y1="238" x2="214" y2="274"/>
                </g>
            </svg>

        </span>

        हिन्दी
    </a>
</li>
                                    </ul>
                                </li>
                                <li class="relative group">
                                    <a href="#"
                                        class="text-sm leading-[22px] text-white flex items-center gap-x-2 py-3.5"><span
                                            class="inline-flex items-center justify-center size-7 bg-primary-darker rounded-full"><i
                                                class="hgi hgi-stroke hgi-dollar-circle text-xl text-white"></i>
                                        </span>
                                        USD
                                        <span class="inline-flex items-center justify-center"><i
                                                class="hgi hgi-stroke hgi-arrow-down-01 text-xl text-white"></i>
                                        </span>
                                    </a>
                                    <ul
                                        class="absolute left-0 top-full py-2 z-50 w-[250px] max-w-[250px] bg-white rounded-lg shadow-dark-z-24 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-4 group-hover:translate-y-0">
                                        <li class="py-2 px-4 group/item">
                                            <a href="#"
                                                class="flex items-center gap-x-2 relative text-light-primary-text group-hover/item:text-primary">
                                                AUD
                                            </a>
                                        </li>
                                        <li class="py-2 px-4 group/item">
                                            <a href="#"
                                                class="flex items-center gap-x-2 relative text-light-primary-text group-hover/item:text-primary">
                                                EUR
                                            </a>
                                        </li>
                                        <li class="py-2 px-4 group/item">
                                            <a href="#"
                                                class="flex items-center gap-x-2 relative text-light-primary-text group-hover/item:text-primary">
                                                USD
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-center py-3.5">
                        <p class="flex items-center gap-x-[7px] text-white text-sm leading-[22px] font-dm-sans">
                            <span class="inline-flex items-center"><i
                                    class="hgi hgi-stroke hgi-discount-01 text-white text-xl"></i></span>Fashion
                            Category
                            <span class="bg-warning py-px px-2 text-xs leading-4.5 rounded-[60px] text-gray-800">25%
                                OFF</span>
                            Today
                        </p>
                    </div>

                    <div class="hidden xl:flex">
                        <ul class="flex items-center text-white">
                            <li>
                                <a class='text-sm leading-[22px] text-white pr-[19px] mr-[19px] py-3.5 relative after:absolute after:h-7.5 after:w-px after:bg-primary-light after:right-0 after:top-1/2 after:-translate-y-1/2'
                                    href='about.html'>About us</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-sm leading-[22px] text-white pr-[19px] mr-[19px] py-3.5 relative after:absolute after:h-7.5 after:w-px after:bg-primary-light after:right-0 after:top-1/2 after:-translate-y-1/2">My
                                    Account</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-sm leading-[22px] text-white pr-[19px] mr-[19px] py-3.5 relative after:absolute after:h-7.5 after:w-px after:bg-primary-light after:right-0 after:top-1/2 after:-translate-y-1/2">My
                                    Wishlist</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm leading-[22px] text-white py-3.5">Order Tracking</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-top End -->

        <!-- header-middle Start -->
        <div class="py-4 border border-gray-300 xl:border-0 hidden xl:block header-middle">
            <div class="container">
                <!-- For Desktop Screen Start -->
                <div class="xl:flex items-center hidden">
                    <div>
                        <a href='index.php'>
                            <img src="assets/img/logo.png" alt="Logo"  style="width: 50%;"/>
                        </a>
                    </div>
                    <div class="flex items-center w-full justify-end gap-x-[54px]">
                        <div class="relative search-input-container w-full 2xl:max-w-[800px] xl:max-w-[600px]">
                            <div class="input-group px-6 pt-3 pb-3 rounded-[100px]">
                                <div class="input-group-addon" data-align="inline-end">
                                    <i class="hgi hgi-stroke hgi-search-01 text-gray-500 text-xl"></i>
                                </div>
                                <input type="text"
                                    class="peer form-control header-search-input placeholder-transparent focus:placeholder-transparent"
                                    placeholder="Search for the Items" id="desktop-search" />
                                <label for="desktop-search"
                                    class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                                    Search for the Items
                                </label>
                            </div>

                        </div>

                        <div class="flex items-center gap-x-6 shrink-0">
                            <ul class="flex items-center gap-x-6">
                                <li class="flex items-center gap-x-4 cursor-pointer relative group">
                                    <p class="flex items-center">
                                        <span
                                            class="inline-flex items-center justify-center bg-warning w-12 h-12 rounded-full">
                                            <i
                                                class="hgi hgi-stroke hgi-lock-sync-01 text-2xl text-light-primary-text"></i>
                                        </span>
                                    </p>
                                    <p class="flex flex-col text-light-secondary-text text-sm leading-[22px]">
                                        Account
                                        <span class="text-base leading-6 text-light-primary-text">log in</span>
                                    </p>
                                    <span><i
                                            class="hgi hgi-stroke hgi-arrow-down-01 text-2xl text-light-primary-text"></i></span>

                                    <ul
                                        class="absolute right-0 top-full py-2 z-10 w-[250px] max-w-[250px] bg-white rounded-lg shadow-dark-z-24 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-4 group-hover:translate-y-0">
                                        <li class="px-4 group/item">
                                            <a href="#"
                                                class="login-page-btn flex items-center py-2 gap-x-2 relative text-light-primary-text group-hover/item:text-primary">
                                                <span
                                                    class="w-8 h-8 bg-[#F0F0F0] group-hover/item:bg-[rgba(0,171,85,0.08)] inline-flex items-center justify-center rounded-full">
                                                    <i
                                                        class="hgi hgi-stroke hgi-lock-sync-01 text-base text-light-primary-text group-hover/item:text-primary"></i>
                                                </span>
                                                Login
                                            </a>
                                        </li>
                                        <li class="px-4 group/item">
                                            <a href="#"
                                                class="register-page-btn flex items-center py-2 gap-x-2 relative text-light-primary-text group-hover/item:text-primary">
                                                <span
                                                    class="w-8 h-8 bg-[#F0F0F0] group-hover/item:bg-[rgba(0,171,85,0.08)] inline-flex items-center justify-center rounded-full">
                                                    <i
                                                        class="hgi hgi-stroke hgi-id text-base text-light-primary-text group-hover/item:text-primary"></i>
                                                </span>
                                                Register
                                            </a>
                                        </li>
                                        <li class="px-4 group/item">
                                            <a href="#"
                                                class="forgot-password-page-btn flex items-center py-2 gap-x-2 relative text-light-primary-text group-hover/item:text-primary">
                                                <span
                                                    class="w-8 h-8 bg-[#F0F0F0] group-hover/item:bg-[rgba(0,171,85,0.08)] transition-colors duration-300 inline-flex items-center justify-center rounded-full">
                                                    <i
                                                        class="hgi hgi-stroke hgi-access text-base text-light-primary-text group-hover/item:text-primary"></i>
                                                </span>
                                                Forget Password
                                            </a>
                                        </li>
                                        <li class="px-4 group/item">
                                            <a href="#"
                                                class="reset-password-page-btn flex items-center py-2 gap-x-2 relative text-light-primary-text group-hover/item:text-primary">
                                                <span
                                                    class="w-8 h-8 bg-[#F0F0F0] group-hover/item:bg-[rgba(0,171,85,0.08)] transition-colors duration-300 inline-flex items-center justify-center rounded-full">
                                                    <i
                                                        class="hgi hgi-stroke hgi-password-validation text-base text-light-primary-text group-hover/item:text-primary"></i>
                                                </span>
                                                Set Password
                                            </a>
                                        </li>
                                        <li class="px-4 group/item">
                                            <a href="#"
                                                class="otp-verification-page-btn flex items-center py-2 gap-x-2 relative text-light-primary-text group-hover/item:text-primary">
                                                <span
                                                    class="w-8 h-8 bg-[#F0F0F0] group-hover/item:bg-[rgba(0,171,85,0.08)] transition-colors duration-300 inline-flex items-center justify-center rounded-full">
                                                    <i
                                                        class="hgi hgi-stroke hgi-mobile-protection text-base text-light-primary-text group-hover/item:text-primary"></i>
                                                </span>
                                                OTP Verification
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="flex items-center">
                                    <button class="flex items-center gap-x-4 cursor-pointer cart-sidebar-btn">
                                        <span
                                            class="inline-flex items-center justify-center bg-warning w-12 h-12 rounded-full"><i
                                                class="hgi hgi-stroke hgi-shopping-cart-02 text-2xl text-light-primary-text"></i>
                                        </span>
                                        <span
                                            class="flex flex-col items-start text-sm leading-[22px] text-light-secondary-text">
                                            Cart
                                            <span class="text-base leading-6 text-light-primary-text">0- Items</span>
                                        </span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- FOr Desktop Screen End -->
            </div>
        </div>
        <!-- header-middle End -->

        <!-- Mobile Menu Start -->
        <div class="border border-gray-300 xl:border-0 sticky-header">
            <div class="pb-4 pt-3 block xl:hidden">
                <div class="container">
                    <div class="flex justify-between items-center">
                        <div>
                            <button class="btn btn-default outline shadow-none size-12 rounded-[50px]"
                                id="sidebar-menu-btn">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 12L10 12" stroke="#212529" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M20 5L4 5" stroke="#212529" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M20 19L4 19" stroke="#212529" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div>
                            <a href='index.html'>
                                <img src="assets/images/logo.png" alt="Logo" class="w-[120px] md:w-[150px]" />
                            </a>
                        </div>
                        <div class="xl:hidden flex items-center gap-x-4">
                            <button class="btn bg-warning-light size-12 rounded-[50px] cart-sidebar-btn">
                                <i
                                    class="hgi hgi-stroke hgi-shopping-cart-01 text-light-primary-text text-2xl leading-6"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pb-4 block xl:hidden">
                <div class="container">
                    <div>
                        <div class="relative search-input-container">
                            <div class="input-group w-full px-4 py-3 rounded-[100px]">
                                <div class="input-group-addon inline-flex justify-center items-center"
                                    data-align="inline-end">
                                    <span class="inline-flex justify-center items-center">
                                        <i class="hgi hgi-stroke hgi-search-01 text-2xl leading-6 text-gray-500"></i>
                                    </span>
                                </div>
                                <input type="text" id="mobile-search"
                                    class="peer form-control header-search-input placeholder-transparent focus:placeholder-transparent"
                                    placeholder="Search for the Items" />
                                <label for="mobile-search"
                                    class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                                    Search for the Items
                                </label>
                            </div>
                            <div data-state="close"
                                class="search-result-container p-4 absolute w-full top-[calc(100%+10px)] left-0 border border-gray-300 shadow-light-z-12 bg-white rounded-3xl z-9 transform data-[state=close]:translate-y-4 data-[state=close]:opacity-0 data-[state=close]:invisible transition-all duration-300 ease-[cubic-bezier(0.645,0.045,0.355,1)] data-[state=open]:translate-y-0 data-[state=open]:opacity-100 data-[state=open]:visible">
                                <div class="flex justify-between items-center mb-4">
                                    <p class="font-semibold text-light-primary-text">
                                        Recent Search
                                    </p>
                                    <button class="text-primary text-base leading-[26px] font-semibold cursor-pointer">
                                        Reset History
                                    </button>
                                </div>
                                <div class="flex flex-wrap items-center gap-2 recent-search-list mb-4">
                                    <button
                                        class="recent-search-item btn text-sm leading-[22px] font-normal btn-default outline btn-medium pl-3 py-1.5 pr-1.5 rounded-[50px]">
                                        Vitamin D Supplement
                                        <span
                                            class="inline-flex items-center justify-center size-4 bg-[rgba(145,158,171,0.32)] rounded-full">
                                            <i class="hgi hgi-stroke hgi-cancel-01 text-xs text-white"></i>
                                        </span>
                                    </button>
                                    <button
                                        class="recent-search-item btn text-sm leading-[22px] font-normal btn-default outline btn-medium pl-3 py-1.5 pr-1.5 rounded-[50px]">
                                        Pain Relief Spray
                                        <span
                                            class="inline-flex items-center justify-center size-4 bg-[rgba(145,158,171,0.32)] rounded-full">
                                            <i class="hgi hgi-stroke hgi-cancel-01 text-xs text-white"></i>
                                        </span>
                                    </button>
                                    <button
                                        class="recent-search-item btn text-sm leading-[22px] font-normal btn-default outline btn-medium pl-3 py-1.5 pr-1.5 rounded-[50px]">
                                        Baby Thermometer
                                        <span
                                            class="inline-flex items-center justify-center size-4 bg-[rgba(145,158,171,0.32)] rounded-full">
                                            <i class="hgi hgi-stroke hgi-cancel-01 text-xs text-white"></i>
                                        </span>
                                    </button>
                                </div>
                                <div class="recommended-search-list-wrapper">
                                    <p class="text-base font-semibold text-light-primary-text mb-4">
                                        Recommended
                                    </p>
                                    <div class="recommended-search-list flex flex-col gap-y-2 divide-y divide-gray-300">
                                        <div class="flex items-center gap-x-4 py-2 first:pt-0 last:pb-0">
                                            <div class="size-10 flex-none rounded-lg bg-[#F4F3F5]">
                                                <img src="assets/images/vitamin-c.png" alt="recommended-search-1" />
                                            </div>
                                            <p
                                                class="text-base font-semibold text-light-primary-text hover:text-primary transition-colors duration-300">
                                                <a href="#">Immunity booster</a>
                                            </p>
                                        </div>
                                        <div class="flex items-center gap-x-4 py-2 first:pt-0 last:pb-0">
                                            <div class="size-10 flex-none rounded-lg bg-[#F4F3F5]">
                                                <img src="assets/images/hand-sanitizer-1.png"
                                                    alt="recommended-search-1" />
                                            </div>
                                            <p
                                                class="text-base font-semibold text-light-primary-text hover:text-primary transition-colors duration-300">
                                                <a href="#">Hand Sanitizer 500ml</a>
                                            </p>
                                        </div>
                                        <div class="flex items-center gap-x-4 py-2 first:pt-0 last:pb-0">
                                            <div class="size-10 flex-none rounded-lg bg-[#F4F3F5]">
                                                <img src="assets/images/combat.png" alt="recommended-search-1" />
                                            </div>
                                            <p
                                                class="text-base font-semibold text-light-primary-text hover:text-primary transition-colors duration-300">
                                                <a href="#">Heart health supplements</a>
                                            </p>
                                        </div>
                                        <div class="flex items-center gap-x-4 py-2 first:pt-0 last:pb-0">
                                            <div class="size-10 flex-none rounded-lg bg-[#F4F3F5]">
                                                <img src="assets/images/vitamin-b12.png" alt="recommended-search-1" />
                                            </div>
                                            <p
                                                class="text-base font-semibold text-light-primary-text hover:text-primary transition-colors duration-300">
                                                <a href="#">Protein powder for women</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu End -->

        <!-- header-bottom End -->
        <div class="border border-gray-300 hidden xl:flex header-bottom sticky-header border-r-0 border-l-0">
            <div class="container">
                <div class="hidden relative items-center justify-between xl:flex">
                    <div class="relative">
                        <button class="btn btn-primary btn-large rounded-lg" id="dropdownButton" data-state="close">
                            <span class="inline-flex items-center">
                                <i class="hgi hgi-stroke hgi-grid-view text-base text-white"></i>
                            </span>
                            Explore All Categories
                            <span class="inline-flex items-center" id="dropdownIcon"><i
                                    class="hgi hgi-stroke hgi-arrow-down-01 text-xl text-white"></i>
                            </span>
                        </button>
                        <div>
                            <ul id="dropdownMenu"
                                class="bg-white hide shadow-dark-z-24 rounded-b-2xl px-4 py-4 z-40 transform origin-top transition-all duration-300 ease-in-out absolute left-0 top-full w-full divide-y divide-[rgba(145,158,171,0.24)] max-h-[400px] overflow-y-auto overflow-x-hidden">
                            </ul>
                        </div>
                    </div>
                    <nav class="main-menu">
                        <ul>
                            <li>
                                <a class="active" href="index.php">Home </a>

                            </li>

                            <li>
                                <a href='about.html'>About Us </a>
                            </li>
                            <li>
                                <a href="banner-category-filter-4col.html">Shop </a>
                              
                            </li>
                            <!-- <li>
                                <a href="#">Sellers</a>

                                <ul>
                                    <li>
                                        <a href='vendors-grid.html'> Seller Grid </a>
                                    </li>


                                    <li>
                                        <a href='vendor-account.html'> Seller Account </a>
                                        <a href='vendor-dashboard.html'> Seller Dashboard </a>
                                    </li>
                                </ul>
                            </li> -->

                            <li><a href='blog-grid.html'>Blog </a></li>
                            <li><a href='my-account.html'>My Account</a></li>
                            <li>
                                <a href='contact.html'>Contact </a>
                            </li>
                        </ul>
                    </nav>
                    <div>
                        <p class="xl:flex lg:items-center gap-x-4 hidden">
                            <span
                                class="size-12 inline-flex items-center justify-center rounded-full transition-colors duration-300 bg-[rgba(145,158,171,0.08)]">
                                <i class="hgi hgi-stroke hgi-customer-support text-2xl text-light-primary-text"></i>
                            </span>
                            <span class="flex flex-col text-sm leading-[22px]">
                                24/7 Support
                                <span class="text-base leading-6 text-light-primary-text">888-777-999</span>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-bottom End -->
    </header>
    <!-- ========== HEADER Section End ========== -->