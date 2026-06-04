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
            <li><span>Blog Page</span></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- ========== Breadcrumb Section End ========== -->

    <!-- ========== Blog Grid Section Start ========== -->
    <div class="pb-12">
      <div class="container">
        <div class="grid grid-cols-12 gap-6">
          <div class="xl:col-span-9 col-span-12">
            <div
              class="flex items-center justify-between mb-12 wow animate__animated animate__fadeInUp"
              data-wow-delay="0.2s"
            >
              <div class="flex items-center gap-x-4">
                <a class='w-10 h-10 rounded-full inline-flex items-center justify-center btn btn-default outline shadow-none cursor-pointer' href='blog-list.html'>
                  <span class="inline-flex items-center justify-center">
                    <i
                      class="hgi hgi-stroke hgi-left-to-right-list-bullet text-2xl leading-6 text-light-primary-text"
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
              <!-- sorting -->
              <div class="relative min-w-[100px]">
                <select id="sorting" class="filter-select label">
                  <option value="newest" selected>Newest First</option>
                  <option value="oldest">Oldest First</option>
                  <option value="most-viewed">Most Viewed</option>
                  <option value="most-commented">Most Commented</option>
                  <option value="a-z-order">A-Z Order</option>
                  <option value="z-a-order">Z-A Order</option>
                </select>
                <label for="sorting" class="nice-select-label">Sorting</label>
              </div>
            </div>
            <div
              class="grid 2xl:grid-cols-3 xl:grid-cols-2 grid-cols-12 gap-6 pb-12"
            >
              <div
                class="2xl:col-span-1 xl:col-span-1 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay="0.2s"
              >
                <div
                  class="border border-gray-300 rounded-2xl p-6 hover:transform hover:translate-y-[-5px] hover:transition-all hover:ease-[cubic-bezier(0.02,0.01,0.47,1)] hover:duration-250 transition-all ease-[cubic-bezier(0.02,0.01,0.47,1)] duration-250"
                >
                  <div class="mb-6 2xl:max-w-[340px] h-[250px]">
                    <img
                      src="assets/images/home-3/hot-sauce-bg.jpg"
                      alt="blog-1"
                      class="rounded-2xl w-full h-full object-cover"
                    />
                  </div>
                  <div class="mb-4">
                    <span
                      class="text-warning-dark bg-[rgba(255,193,7,0.16)] px-2 py-px inline-flex rounded-full text-xs leading-[18px]"
                    >
                      Category Name
                    </span>
                  </div>
                  <div
                    class="flex flex-col lg:flex-row divide-x-0 lg:divide-x divide-[rgba(145,158,171,0.24)] items-start justify-start lg:gap-y-0 gap-y-4"
                  >
                    <p
                      class="text-light-secondary-text text-sm leading-[22px] inline-flex items-center gap-x-2 lg:pr-4 pr-0"
                    >
                      <span class="inline-flex items-center justify-center">
                        <i
                          class="hgi hgi-stroke hgi-calendar-03 text-base leading-4 text-light-secondary-text"
                        ></i>
                      </span>

                      <span>12:40 PM, 09 Feb 2027</span>
                    </p>
                    <p
                      class="text-light-secondary-text text-sm leading-[22px] inline-flex items-center gap-x-2 pl-0 lg:pl-4"
                    >
                      <span class="inline-flex items-center justify-center">
                        <i
                          class="hgi hgi-stroke hgi-chatting-01 text-base leading-4 text-light-secondary-text"
                        ></i>
                      </span>

                      <span>Comment</span>
                      <span>(10)</span>
                    </p>
                  </div>
                  <a href='blog-details.html'><h6 class="mt-4 mb-3 hover:text-primary">
                      The Future of Industrial Design
                    </h6></a
                  >
                  <p class="mb-4">
                    So you have heard about this site or you have been to it,
                    but you cannot figure out.
                  </p>
                  <a class='btn btn-primary btn-large rounded-[60px] group py-2 pl-6 pr-3 gap-x-[18px]' href='blog-details.html'>
                    Read More
                    <span
                      class="size-8 bg-white inline-flex items-center justify-center rounded-full rotate-[-40deg] transform group-hover:rotate-0 transition-all duration-300"
                    >
                      <i
                        class="hgi hgi-stroke hgi-arrow-right-02 text-xl text-primary-darker"
                      ></i>
                    </span>
                  </a>
                </div>
              </div>
              <div
                class="2xl:col-span-1 xl:col-span-1 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay="0.3s"
              >
                <div
                  class="border border-gray-300 rounded-2xl p-6 hover:transform hover:translate-y-[-5px] hover:transition-all hover:ease-[cubic-bezier(0.02,0.01,0.47,1)] hover:duration-250 transition-all ease-[cubic-bezier(0.02,0.01,0.47,1)] duration-250"
                >
                  <div class="mb-6 2xl:max-w-[340px] h-[250px]">
                    <img
                      src="assets/images/home-3/hot-sauce-bg.jpg"
                      alt="blog-2"
                      class="rounded-2xl w-full h-full object-cover"
                    />
                  </div>
                  <div class="mb-4">
                    <span
                      class="text-warning-dark bg-[rgba(255,193,7,0.16)] px-2 py-px inline-flex rounded-full text-xs leading-[18px]"
                    >
                      Category Name
                    </span>
                  </div>
                  <div
                    class="flex flex-col lg:flex-row divide-x-0 lg:divide-x divide-[rgba(145,158,171,0.24)] items-start justify-start lg:gap-y-0 gap-y-4"
                  >
                    <p
                      class="text-light-secondary-text text-sm leading-[22px] inline-flex items-center gap-x-2 lg:pr-4 pr-0"
                    >
                      <span class="inline-flex items-center justify-center">
                        <i
                          class="hgi hgi-stroke hgi-calendar-03 text-base leading-4 text-light-secondary-text"
                        ></i>
                      </span>

                      <span>12:40 PM, 09 Feb 2027</span>
                    </p>
                    <p
                      class="text-light-secondary-text text-sm leading-[22px] inline-flex items-center gap-x-2 pl-0 lg:pl-4"
                    >
                      <span class="inline-flex items-center justify-center">
                        <i
                          class="hgi hgi-stroke hgi-chatting-01 text-base leading-4 text-light-secondary-text"
                        ></i>
                      </span>

                      <span>Comment</span>
                      <span>(10)</span>
                    </p>
                  </div>
                  <a href='blog-details.html'><h6 class="mt-4 mb-3 hover:text-primary">
                      The Future of Industrial Design
                    </h6></a
                  >
                  <p class="mb-4">
                    So you have heard about this site or you have been to it,
                    but you cannot figure out.
                  </p>
                  <a class='btn btn-primary btn-large rounded-[60px] group py-2 pl-6 pr-3 gap-x-[18px]' href='blog-details.html'>
                    Read More
                    <span
                      class="size-8 bg-white inline-flex items-center justify-center rounded-full rotate-[-40deg] transform group-hover:rotate-0 transition-all duration-300"
                    >
                      <i
                        class="hgi hgi-stroke hgi-arrow-right-02 text-xl text-primary-darker"
                      ></i>
                    </span>
                  </a>
                </div>
              </div>
              <div
                class="2xl:col-span-1 xl:col-span-1 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay="0.4s"
              >
                <div
                  class="border border-gray-300 rounded-2xl p-6 hover:transform hover:translate-y-[-5px] hover:transition-all hover:ease-[cubic-bezier(0.02,0.01,0.47,1)] hover:duration-250 transition-all ease-[cubic-bezier(0.02,0.01,0.47,1)] duration-250"
                >
                  <div class="mb-6 2xl:max-w-[340px] h-[250px]">
                    <img
                      src="assets/images/home-3/hot-sauce-bg.jpg"
                      alt="blog-3"
                      class="rounded-2xl w-full h-full object-cover"
                    />
                  </div>
                  <div class="mb-4">
                    <span
                      class="text-warning-dark bg-[rgba(255,193,7,0.16)] px-2 py-px inline-flex rounded-full text-xs leading-[18px]"
                    >
                      Category Name
                    </span>
                  </div>
                  <div
                    class="flex flex-col lg:flex-row divide-x-0 lg:divide-x divide-[rgba(145,158,171,0.24)] items-start justify-start lg:gap-y-0 gap-y-4"
                  >
                    <p
                      class="text-light-secondary-text text-sm leading-[22px] inline-flex items-center gap-x-2 lg:pr-4 pr-0"
                    >
                      <span class="inline-flex items-center justify-center">
                        <i
                          class="hgi hgi-stroke hgi-calendar-03 text-base leading-4 text-light-secondary-text"
                        ></i>
                      </span>

                      <span>12:40 PM, 09 Feb 2027</span>
                    </p>
                    <p
                      class="text-light-secondary-text text-sm leading-[22px] inline-flex items-center gap-x-2 pl-0 lg:pl-4"
                    >
                      <span class="inline-flex items-center justify-center">
                        <i
                          class="hgi hgi-stroke hgi-chatting-01 text-base leading-4 text-light-secondary-text"
                        ></i>
                      </span>

                      <span>Comment</span>
                      <span>(10)</span>
                    </p>
                  </div>
                  <a href='blog-details.html'><h6 class="mt-4 mb-3 hover:text-primary">
                      The Future of Industrial Design
                    </h6></a
                  >
                  <p class="mb-4">
                    So you have heard about this site or you have been to it,
                    but you cannot figure out.
                  </p>
                  <a class='btn btn-primary btn-large rounded-[60px] group py-2 pl-6 pr-3 gap-x-[18px]' href='blog-details.html'>
                    Read More
                    <span
                      class="size-8 bg-white inline-flex items-center justify-center rounded-full rotate-[-40deg] transform group-hover:rotate-0 transition-all duration-300"
                    >
                      <i
                        class="hgi hgi-stroke hgi-arrow-right-02 text-xl text-primary-darker"
                      ></i>
                    </span>
                  </a>
                </div>
              </div>
              <div
                class="2xl:col-span-1 xl:col-span-1 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay="0.2s"
              >
                <div
                  class="border border-gray-300 rounded-2xl p-6 hover:transform hover:translate-y-[-5px] hover:transition-all hover:ease-[cubic-bezier(0.02,0.01,0.47,1)] hover:duration-250 transition-all ease-[cubic-bezier(0.02,0.01,0.47,1)] duration-250"
                >
                  <div class="mb-6 2xl:max-w-[340px] h-[250px]">
                    <img
                      src="assets/images/home-3/hot-sauce-bg.jpg"
                      alt="blog-4"
                      class="rounded-2xl w-full h-full object-cover"
                    />
                  </div>
                  <div class="mb-4">
                    <span
                      class="text-warning-dark bg-[rgba(255,193,7,0.16)] px-2 py-px inline-flex rounded-full text-xs leading-[18px]"
                    >
                      Category Name
                    </span>
                  </div>
                  <div
                    class="flex flex-col lg:flex-row divide-x-0 lg:divide-x divide-[rgba(145,158,171,0.24)] items-start justify-start lg:gap-y-0 gap-y-4"
                  >
                    <p
                      class="text-light-secondary-text text-sm leading-[22px] inline-flex items-center gap-x-2 lg:pr-4 pr-0"
                    >
                      <span class="inline-flex items-center justify-center">
                        <i
                          class="hgi hgi-stroke hgi-calendar-03 text-base leading-4 text-light-secondary-text"
                        ></i>
                      </span>

                      <span>12:40 PM, 09 Feb 2027</span>
                    </p>
                    <p
                      class="text-light-secondary-text text-sm leading-[22px] inline-flex items-center gap-x-2 pl-0 lg:pl-4"
                    >
                      <span class="inline-flex items-center justify-center">
                        <i
                          class="hgi hgi-stroke hgi-chatting-01 text-base leading-4 text-light-secondary-text"
                        ></i>
                      </span>

                      <span>Comment</span>
                      <span>(10)</span>
                    </p>
                  </div>
                  <a href='blog-details.html'><h6 class="mt-4 mb-3 hover:text-primary">
                      The Future of Industrial Design
                    </h6></a
                  >
                  <p class="mb-4">
                    So you have heard about this site or you have been to it,
                    but you cannot figure out.
                  </p>
                  <a class='btn btn-primary btn-large rounded-[60px] group py-2 pl-6 pr-3 gap-x-[18px]' href='blog-details.html'>
                    Read More
                    <span
                      class="size-8 bg-white inline-flex items-center justify-center rounded-full rotate-[-40deg] transform group-hover:rotate-0 transition-all duration-300"
                    >
                      <i
                        class="hgi hgi-stroke hgi-arrow-right-02 text-xl text-primary-darker"
                      ></i>
                    </span>
                  </a>
                </div>
              </div>
              <div
                class="2xl:col-span-1 xl:col-span-1 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay="0.3s"
              >
                <div
                  class="border border-gray-300 rounded-2xl p-6 hover:transform hover:translate-y-[-5px] hover:transition-all hover:ease-[cubic-bezier(0.02,0.01,0.47,1)] hover:duration-250 transition-all ease-[cubic-bezier(0.02,0.01,0.47,1)] duration-250"
                >
                  <div class="mb-6 2xl:max-w-[340px] h-[250px]">
                    <img
                      src="assets/images/home-3/hot-sauce-bg.jpg"
                      alt="blog-5"
                      class="rounded-2xl w-full h-full object-cover"
                    />
                  </div>
                  <div class="mb-4">
                    <span
                      class="text-warning-dark bg-[rgba(255,193,7,0.16)] px-2 py-px inline-flex rounded-full text-xs leading-[18px]"
                    >
                      Category Name
                    </span>
                  </div>
                  <div
                    class="flex flex-col lg:flex-row divide-x-0 lg:divide-x divide-[rgba(145,158,171,0.24)] items-start justify-start lg:gap-y-0 gap-y-4"
                  >
                    <p
                      class="text-light-secondary-text text-sm leading-[22px] inline-flex items-center gap-x-2 lg:pr-4 pr-0"
                    >
                      <span class="inline-flex items-center justify-center">
                        <i
                          class="hgi hgi-stroke hgi-calendar-03 text-base leading-4 text-light-secondary-text"
                        ></i>
                      </span>

                      <span>12:40 PM, 09 Feb 2027</span>
                    </p>
                    <p
                      class="text-light-secondary-text text-sm leading-[22px] inline-flex items-center gap-x-2 pl-0 lg:pl-4"
                    >
                      <span class="inline-flex items-center justify-center">
                        <i
                          class="hgi hgi-stroke hgi-chatting-01 text-base leading-4 text-light-secondary-text"
                        ></i>
                      </span>

                      <span>Comment</span>
                      <span>(10)</span>
                    </p>
                  </div>
                  <a href='blog-details.html'><h6 class="mt-4 mb-3 hover:text-primary">
                      The Future of Industrial Design
                    </h6></a
                  >
                  <p class="mb-4">
                    So you have heard about this site or you have been to it,
                    but you cannot figure out.
                  </p>
                  <a class='btn btn-primary btn-large rounded-[60px] group py-2 pl-6 pr-3 gap-x-[18px]' href='blog-details.html'>
                    Read More
                    <span
                      class="size-8 bg-white inline-flex items-center justify-center rounded-full rotate-[-40deg] transform group-hover:rotate-0 transition-all duration-300"
                    >
                      <i
                        class="hgi hgi-stroke hgi-arrow-right-02 text-xl text-primary-darker"
                      ></i>
                    </span>
                  </a>
                </div>
              </div>
              <div
                class="2xl:col-span-1 xl:col-span-1 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay="0.4s"
              >
                <div
                  class="border border-gray-300 rounded-2xl p-6 hover:transform hover:translate-y-[-5px] hover:transition-all hover:ease-[cubic-bezier(0.02,0.01,0.47,1)] hover:duration-250 transition-all ease-[cubic-bezier(0.02,0.01,0.47,1)] duration-250"
                >
                  <div class="mb-6 2xl:max-w-[340px] h-[250px]">
                    <img
                      src="assets/images/home-3/hot-sauce-bg.jpg"
                      alt="blog-6"
                      class="rounded-2xl w-full h-full object-cover"
                    />
                  </div>
                  <div class="mb-4">
                    <span
                      class="text-warning-dark bg-[rgba(255,193,7,0.16)] px-2 py-px inline-flex rounded-full text-xs leading-[18px]"
                    >
                      Category Name
                    </span>
                  </div>
                  <div
                    class="flex flex-col lg:flex-row divide-x-0 lg:divide-x divide-[rgba(145,158,171,0.24)] items-start justify-start lg:gap-y-0 gap-y-4"
                  >
                    <p
                      class="text-light-secondary-text text-sm leading-[22px] inline-flex items-center gap-x-2 lg:pr-4 pr-0"
                    >
                      <span class="inline-flex items-center justify-center">
                        <i
                          class="hgi hgi-stroke hgi-calendar-03 text-base leading-4 text-light-secondary-text"
                        ></i>
                      </span>

                      <span>12:40 PM, 09 Feb 2027</span>
                    </p>
                    <p
                      class="text-light-secondary-text text-sm leading-[22px] inline-flex items-center gap-x-2 pl-0 lg:pl-4"
                    >
                      <span class="inline-flex items-center justify-center">
                        <i
                          class="hgi hgi-stroke hgi-chatting-01 text-base leading-4 text-light-secondary-text"
                        ></i>
                      </span>

                      <span>Comment</span>
                      <span>(10)</span>
                    </p>
                  </div>
                  <a href='blog-details.html'><h6 class="mt-4 mb-3 hover:text-primary">
                      The Future of Industrial Design
                    </h6></a
                  >
                  <p class="mb-4">
                    So you have heard about this site or you have been to it,
                    but you cannot figure out.
                  </p>
                  <a class='btn btn-primary btn-large rounded-[60px] group py-2 pl-6 pr-3 gap-x-[18px]' href='blog-details.html'>
                    Read More
                    <span
                      class="size-8 bg-white inline-flex items-center justify-center rounded-full rotate-[-40deg] transform group-hover:rotate-0 transition-all duration-300"
                    >
                      <i
                        class="hgi hgi-stroke hgi-arrow-right-02 text-xl text-primary-darker"
                      ></i>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <!-- pagination -->
            <div
              data-wow-delay="0.2s"
              class="grid grid-cols-12 wow animate__animated animate__fadeInUp"
            >
              <div class="col-span-12">
                <ul
                  class="flex items-center justify-center gap-x-1.5 blog-pagination"
                >
                  <li class="group blog-pagination-item">
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
                  <li class="group blog-pagination-item">
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
                  <li class="group blog-pagination-item">
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
                  <li class="group blog-pagination-item">
                    <a
                      href="#"
                      class="inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] text-base leading-6 text-light-primary-text group-hover:text-primary group-hover:font-semibold bg-white cursor-pointer border border-gray-300 group-hover:border-primary group-hover:bg-[rgba(0,171,85,0.08)] transition-colors duration-300 ease-in-out"
                    >
                      5
                    </a>
                  </li>
                  <li class="blog-pagination-item">
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
                  <li class="group blog-pagination-item">
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
          <div class="xl:col-span-3 col-span-12">
            <div class="sticky top-4">
              <div class="flex flex-col gap-y-6">
                <div
                  class="input-group medium pl-4 py-4 pr-2.5 rounded-[100px] flex-1 lg:flex hidden wow animate__animated animate__fadeInUp"
                  data-wow-delay="0.2s"
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
                    class="peer form-control placeholder-transparent focus:placeholder-transparent"
                    id="sidebar-search"
                    placeholder="Search..."
                  />
                  <label
                    for="sidebar-search"
                    class="absolute left-12 peer-focus:left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 peer-[:not(:placeholder-shown)]:left-[14px] bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1"
                    >Search...</label
                  >
                </div>

                <!-- Category-content -->
                <div
                  class="border border-gray-300 rounded-2xl category wow animate__animated animate__fadeInUp"
                  data-wow-delay="0.3s"
                >
                  <div
                    class="px-6 py-4 bg-gray-200 rounded-t-2xl sidebar-title"
                  >
                    <div class="flex items-center justify-between">
                      <h5 class="text-light-primary-text">Category</h5>
                      <a
                        href="#"
                        class="text-primary text-base leading-[26px] font-semibold hover:underline"
                        >Clear All</a
                      >
                    </div>
                  </div>

                  <div class="category-content-list p-6">
                    <div
                      class="max-h-[170px] overflow-y-auto pr-2.5 category-scroll"
                    >
                      <ul class="flex flex-col gap-y-2">
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
                <!-- Popular Tags -->
                <div
                  class="border border-gray-300 rounded-2xl category wow animate__animated animate__fadeInUp"
                  data-wow-delay="0.4s"
                >
                  <div
                    class="px-6 py-4 bg-gray-200 rounded-t-2xl sidebar-title"
                  >
                    <h5 class="text-light-primary-text">Popular Tags</h5>
                  </div>

                  <div class="popular-tags-content p-6">
                    <div class="flex flex-wrap items-center gap-4">
                      <button
                        class="btn btn-default outline text-sm leading-[22px] font-normal py-1 px-3 rounded-[50px] cursor-pointer shadow-none"
                      >
                        Best Sellers
                      </button>
                      <button
                        class="btn btn-default outline text-sm leading-[22px] font-normal py-1 px-3 rounded-[50px] cursor-pointer shadow-none"
                      >
                        Trends
                      </button>
                      <button
                        class="btn btn-default outline text-sm leading-[22px] font-normal py-1 px-3 rounded-[50px] cursor-pointer shadow-none"
                      >
                        TrendingNow
                      </button>
                      <button
                        class="btn btn-default outline text-sm leading-[22px] font-normal py-1 px-3 rounded-[50px] cursor-pointer shadow-none"
                      >
                        NewArrivals
                      </button>
                    </div>
                  </div>
                </div>
                <!-- Recent Posts -->
                <div
                  class="border border-gray-300 rounded-2xl category wow animate__animated animate__fadeInUp"
                  data-wow-delay="0.5s"
                >
                  <div
                    class="px-6 py-4 bg-gray-200 rounded-t-2xl sidebar-title"
                  >
                    <h5 class="text-light-primary-text">Recent Posts</h5>
                  </div>

                  <div class="recent-posts-content p-6">
                    <div class="flex flex-col divide-y divide-gray-300">
                      <!-- posts -->
                      <div class="py-4 first:pt-0 last:pb-0">
                        <div
                          class="p-4 border border-gray-300 rounded-2xl single-blog-post"
                        >
                          <div
                            class="flex items-center flex-row xl:flex-col 2xl:flex-row gap-3"
                          >
                            <div
                              class="max-w-[88px] h-[88px] rounded-lg single-blog-post-thumbnail"
                            >
                              <img
                                src="assets/images/home-3/hot-sauce-bg.jpg"
                                alt="post-image"
                                class="h-full w-full object-cover rounded-lg"
                              />
                            </div>
                            <div
                              class="flex flex-col 2xl:items-start xl:items-center gap-y-2 flex-1 single-blog-post-content"
                            >
                              <a class='text-sm leading-[22px] text-light-primary-text font-medium cursor-pointer hover:text-primary transition-colors duration-300 ease-in-out single-blog-post-content-title' href='blog-details.html'>
                                The Future of Industrial Design
                              </a>
                              <span
                                class="w-fit text-success-dark bg-[rgba(84,214,44,0.16)] px-2 py-px inline-flex items-center rounded-full text-xs leading-[18px] single-blog-post-content-category-name"
                              >
                                Category Name
                              </span>
                              <div
                                class="flex flex-col gap-y-1 md:flex-row divide-x-0 md:divide-x divide-[rgba(145,158,171,0.24)] single-blog-post-content-post-time"
                              >
                                <p
                                  class="inline-flex items-center gap-x-2 pr-0 md:pr-3"
                                >
                                  <i
                                    class="hgi hgi-stroke hgi-calendar-03 text-base leading-4"
                                  ></i>

                                  <span class="text-xs leading-[18px]"
                                    >09 Feb 2027</span
                                  >
                                </p>
                                <p
                                  class="inline-flex items-center gap-x-2 pl-0 md:pl-3"
                                >
                                  <i
                                    class="hgi hgi-stroke hgi-chatting-01 text-base leading-4"
                                  ></i>
                                  <span class="text-xs leading-[18px]"
                                    >(10)</span
                                  >
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="py-4 first:pt-0 last:pb-0">
                        <div
                          class="p-4 border border-gray-300 rounded-2xl single-blog-post"
                        >
                          <div
                            class="flex items-center flex-row xl:flex-col 2xl:flex-row gap-3"
                          >
                            <div
                              class="max-w-[88px] h-[88px] rounded-lg single-blog-post-thumbnail"
                            >
                              <img
                                src="assets/images/home-3/hot-sauce-bg.jpg"
                                alt="post-image"
                                class="h-full w-full object-cover rounded-lg"
                              />
                            </div>
                            <div
                              class="flex flex-col 2xl:items-start xl:items-center gap-y-2 flex-1 single-blog-post-content"
                            >
                              <a class='text-sm leading-[22px] text-light-primary-text font-medium cursor-pointer hover:text-primary transition-colors duration-300 ease-in-out single-blog-post-content-title' href='blog-details.html'>
                                The Future of Industrial Design
                              </a>
                              <span
                                class="w-fit text-success-dark bg-[rgba(84,214,44,0.16)] px-2 py-px inline-flex items-center rounded-full text-xs leading-[18px] single-blog-post-content-category-name"
                              >
                                Category Name
                              </span>
                              <div
                                class="flex flex-col gap-y-1 md:flex-row divide-x-0 md:divide-x divide-[rgba(145,158,171,0.24)] single-blog-post-content-post-time"
                              >
                                <p
                                  class="inline-flex items-center gap-x-2 pr-0 md:pr-3"
                                >
                                  <i
                                    class="hgi hgi-stroke hgi-calendar-03 text-base leading-4"
                                  ></i>

                                  <span class="text-xs leading-[18px]"
                                    >09 Feb 2027</span
                                  >
                                </p>
                                <p
                                  class="inline-flex items-center gap-x-2 pl-0 md:pl-3"
                                >
                                  <i
                                    class="hgi hgi-stroke hgi-chatting-01 text-base leading-4"
                                  ></i>
                                  <span class="text-xs leading-[18px]"
                                    >(10)</span
                                  >
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="py-4 first:pt-0 last:pb-0">
                        <div
                          class="p-4 border border-gray-300 rounded-2xl single-blog-post"
                        >
                          <div
                            class="flex items-center flex-row xl:flex-col 2xl:flex-row gap-3"
                          >
                            <div
                              class="max-w-[88px] h-[88px] rounded-lg single-blog-post-thumbnail"
                            >
                              <img
                                src="assets/images/home-3/hot-sauce-bg.jpg"
                                alt="post-image"
                                class="h-full w-full object-cover rounded-lg"
                              />
                            </div>
                            <div
                              class="flex flex-col 2xl:items-start xl:items-center gap-y-2 flex-1 single-blog-post-content"
                            >
                              <a class='text-sm leading-[22px] text-light-primary-text font-medium cursor-pointer hover:text-primary transition-colors duration-300 ease-in-out single-blog-post-content-title' href='blog-details.html'>
                                The Future of Industrial Design
                              </a>
                              <span
                                class="w-fit text-success-dark bg-[rgba(84,214,44,0.16)] px-2 py-px inline-flex items-center rounded-full text-xs leading-[18px] single-blog-post-content-category-name"
                              >
                                Category Name
                              </span>
                              <div
                                class="flex flex-col gap-y-1 md:flex-row divide-x-0 md:divide-x divide-[rgba(145,158,171,0.24)] single-blog-post-content-post-time"
                              >
                                <p
                                  class="inline-flex items-center gap-x-2 pr-0 md:pr-3"
                                >
                                  <i
                                    class="hgi hgi-stroke hgi-calendar-03 text-base leading-4"
                                  ></i>

                                  <span class="text-xs leading-[18px]"
                                    >09 Feb 2027</span
                                  >
                                </p>
                                <p
                                  class="inline-flex items-center gap-x-2 pl-0 md:pl-3"
                                >
                                  <i
                                    class="hgi hgi-stroke hgi-chatting-01 text-base leading-4"
                                  ></i>
                                  <span class="text-xs leading-[18px]"
                                    >(10)</span
                                  >
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
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ========== Blog Grid Section End ========== -->


    <?php include 'footer.php'; ?>