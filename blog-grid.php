<?php include 'header.php'; ?>

    <!-- ========== Breadcrumb Section Start ========== -->
    <div class="py-12">
      <div class="container">
        <div class="breadcrumb">
          <ul>
            <li>
              <a href='index.php'>
                <span>
                  <i class="hgi hgi-stroke hgi-home-01 text-[20px]"></i>
                </span>
                Home
              </a>
            </li>
            <li class="text-light-disabled-text">&#8226;</li>
            <li><span>Blog </span></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- ========== Breadcrumb Section End ========== -->

    <!-- ========== Blog Grid Section Start ========== -->
    <div class="pb-12">
      <div class="container">
        <div class="grid grid-cols-12 gap-6">
          <div class="xl:col-span-12 col-span-12">
            <div
              class="flex items-center justify-between mb-12 wow animate__animated animate__fadeInUp"
              data-wow-delay="0.2s"
            >
             
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
              class="grid 2xl:grid-cols-3 xl:grid-cols-2 grid-cols-12 gap-6 pb-12" id="blog-container"
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
                   
                  </div>
                  <a href='blog-detail.php'><h6 class="mt-4 mb-3 hover:text-primary">
                      The Future of Industrial Design
                    </h6></a
                  >
                  <p class="mb-4">
                    So you have heard about this site or you have been to it,
                    but you cannot figure out.
                  </p>
                  <a class='btn btn-primary btn-large rounded-[60px] group py-2 pl-6 pr-3 gap-x-[18px]' href='blog-detail.php'>
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
         
        </div>
      </div>
    </div>
    <!-- ========== Blog Grid Section End ========== -->


    <?php include 'footer.php'; ?>