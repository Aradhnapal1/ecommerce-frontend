document.addEventListener("DOMContentLoaded", function () {
    fetchTopBanners();
});

function fetchTopBanners() {
    const apiUrl = 'https://ecommerce-backend.workarya.com/api/banner/get';

    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            // Filter for banners where bannerType is 'Top' and status is true
            const topBanners = data.filter(banner => banner.bannerType === 'Top' && banner.status === true);
            if (topBanners.length > 0) {
                renderTopBanners(topBanners);
            }
        })
        .catch(error => {
            console.error("Error fetching banners:", error);
        });
}

function renderTopBanners(banners) {
    const sliderContainer = $('#top-banner-slider');

    // If Slick is already initialized by another script, we need to destroy it first
    if (sliderContainer.hasClass('slick-initialized')) {
        sliderContainer.slick('unslick');
    }

    // Empty the container
    sliderContainer.empty();

    // Generate Dynamic Banners preserving the original HTML/CSS structure
    banners.forEach(banner => {
        const bannerName = banner.bannerName || '';
        const bannerDesc = banner.bannerDescription || '';
        const bannerImg = banner.bannerImg || '';
        const bannerLink = banner.bannerLink || '#';

        const slideHtml = `
            <div class="lg:p-0 p-8 pb-15 bg-center bg-no-repeat bg-cover rounded-3xl xl:pl-[177px] lg:pl-[100px] single-hero-slider-item flex! items-center md:h-[600px]! h-[500px]!"
                style="background-image: url('${bannerImg}');" data-wow-delay=".2s">
                <!-- Content Section -->
                <div class="single-hero-slider-content">
                 
                    <h2 class="py-3 text-white">${bannerName}</h2>
                    <p class="text-white mb-6">${bannerDesc}</p>
                    <a class="btn bg-warning-light text-black btn-large rounded-[60px] group py-2 pl-5 pr-3" href="${bannerLink}">
                        Shop Now
                        <span class="size-8 bg-white inline-flex items-center justify-center rounded-full rotate-[-40deg] transform group-hover:rotate-0 transition-all duration-300">
                            <i class="hgi hgi-stroke hgi-arrow-right-02 text-xl text-primary-darker"></i>
                        </span>
                    </a>
                </div>
            </div>
        `;
        sliderContainer.append(slideHtml);
    });

    // Extract original slick options from the data attribute or provide defaults
    const slickOptions = sliderContainer.data('slick') || {
        slidesToShow: 1,
        slidesToScroll: 1,
        loop: true,
        arrows: true,
        infinite: true,
        dots: true,
        appendArrows: ".home-five-hero-slider-nav",
        autoplay: true,
        autoplaySpeed: 7000,
        fade: true,
        responsive: [{"breakpoint": 1025, "settings": {"arrows": false}}]
    };

    // Re-initialize Slick slider
    sliderContainer.slick(slickOptions);
}