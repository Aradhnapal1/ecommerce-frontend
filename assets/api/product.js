
document.addEventListener("DOMContentLoaded", function () {
    // Assuming `domin` is globally available via domin.js
    loadHomeDynamicSections();
});

async function loadHomeDynamicSections() {
    try {
        // Fetch all categories to identify Fashion and Electronics
        const response = await fetch(`${domin}/api/getcategories`);
        if (!response.ok) throw new Error("Network response was not ok");
        const result = await response.json();
        
        
        // Ensure result data format matches the backend structure
        const categories = result?.value?.data || result?.data || [];

        // Find the main categories by name (adjust includes() parameter if names differ)
        const fashionCat = categories.find(cat => cat.categoryName.toLowerCase().includes('fashion') || cat.categoryName.toLowerCase().includes('clothing'));
        const electronicsCat = categories.find(cat => cat.categoryName.toLowerCase().includes('electronic'));

        // Load sections dynamically if categories exist
        if (fashionCat) {
            setupDynamicTabs('fashion', fashionCat);
        }
        if (electronicsCat) {
            setupDynamicTabs('electronics', electronicsCat);
        }
    } catch (error) {
        console.error("Error loading home dynamic sections:", error);
    }
}

function setupDynamicTabs(sectionId, parentCategory) {
    // Get up to 4 active subcategories
    const subCategories = (parentCategory.subCategories || parentCategory.children || [])
        .filter(sub => sub.isActive === true)
        .slice(0, 4);

    if (subCategories.length === 0) return;

    // Target wrapper elements by matching IDs in index.php
    const tabsContainer = document.getElementById(`${sectionId}-tabs`);
    const productsContainer = document.getElementById(`${sectionId}-product-list`);

    if (!tabsContainer || !productsContainer) return;

    // Render Tabs dynamically
    let tabsHtml = '';
    subCategories.forEach((sub, index) => {
        // Make the first tab active by default
        const activeClass = index === 0 
            ? 'btn-primary' 
            : 'btn-default outline shadow-none';
            
        tabsHtml += `
            <button class="dynamic-tab-btn btn btn-large py-2.5 px-[22px] rounded-full transition-all duration-300 ${activeClass}" 
                    data-category-id="${sub.id}" 
                    data-section="${sectionId}">
                ${sub.categoryName}
            </button>
        `;
    });
    tabsContainer.innerHTML = tabsHtml;

    // Load initial 10 products for the first subcategory tab
    fetchAndRenderSectionProducts(subCategories[0].id, productsContainer);

    // Add click listeners to newly created tabs
    const tabButtons = tabsContainer.querySelectorAll('.dynamic-tab-btn');
    tabButtons.forEach(btn => {
        btn.addEventListener('click', function () {
            // Remove active state from all buttons
            tabButtons.forEach(b => {
                b.classList.remove('btn-primary');
                b.classList.add('btn-default', 'outline', 'shadow-none');
            });

            // Apply active state to clicked button
            this.classList.remove('btn-default', 'outline', 'shadow-none');
            this.classList.add('btn-primary');

            // Fetch products based on the clicked tab category
            const catId = this.getAttribute('data-category-id');
            fetchAndRenderSectionProducts(catId, productsContainer);
        });
    });
}

async function fetchAndRenderSectionProducts(categoryId, container) {
    // Show Loading state
    container.innerHTML = `
        <div class="col-span-full flex justify-center py-10">
            <div class="w-8 h-8 border-4 border-primary border-t-transparent rounded-full animate-spin"></div>
        </div>
    `;

    try {
        // Fetch max 10 latest products for the active tab's category using the filter API
        const url = `${domin}/api/product/filter?categoryIds=${categoryId}&page=1&pageSize=10&sortBy=latest`;
        const response = await fetch(url);
        if (!response.ok) throw new Error("Failed to fetch products");
        
        const result = await response.json();
        const products = result.data || result.products || result.value?.data || [];

        if (products.length === 0) {
            container.innerHTML = '<div class="col-span-full text-center py-8 text-gray-500">No products available in this category.</div>';
            return;
        }

        // Generate and Inject Products HTML (Max 10 limit is controlled by API pageSize)
        let productsHtml = '';
        products.forEach(product => {
            productsHtml += buildProductCardHTML(product);
        });

        container.innerHTML = productsHtml;

    } catch (error) {
        console.error("Error fetching section products:", error);
        container.innerHTML = '<div class="col-span-full text-center py-8 text-red-500">Failed to load products.</div>';
    }
}

function buildProductCardHTML(product) {
    const imageUrl = product.productImages && product.productImages.length > 0 
        ? product.productImages[0].imageUrl 
        : 'assets/images/default-product.jpg';
        
    const price = product.price || 0;
    const discountPrice = product.discountPrice || price;
    const discountPercent = product.discountPercents || 0;
    const brandName = product.brand?.brandName || '';

    return `
        <div class="col-span-1 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
            <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group hover:border-primary transition-all duration-300">
                <div class="product-image-container relative">
                    <div class="product-image rounded-xl mb-4 overflow-hidden aspect-[4/5] flex items-center justify-center bg-gray-50">
                        <a href="product-details.php?id=${product.id}" class="w-full h-full flex items-center justify-center">
                            <img src="${imageUrl}" alt="${product.productName}" class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300 w-full h-full object-cover" />
                        </a>
                    </div>
                </a>
                
                <div class="product-content text-center">
                    ${discountPercent > 0 ? `
                    <div class="limited-time-product-countdown sellzy-countdown flex items-center justify-center gap-x-1 bg-[#FF4842]/12 py-[5px] px-5 rounded-[50px] text-[12px] leading-[18px] text-error-dark mb-3 w-max mx-auto">
                        <span class="font-semibold">-${discountPercent}% OFF</span>
                    </div>` : ''}
                    <h5 class="text-[20px] leading-[30px] font-bold py-3 truncate">
                        <a href="product-details.php?id=${product.id}">${product.productName}</a>
                    </h5>
                    
                    <div class="rating-section flex items-center justify-center mb-3">
                        <div class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                            <div style="width: 80%" class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"></div>
                        </div>
                        <span class="text-sm leading-[22px] font-normal inline-block ml-1">(0)</span>
                    </div>
                    
                    <div class="price-section flex items-center justify-center gap-x-3 mb-3">
                        <span class="current-price text-[18px] leading-7 font-urbanist font-bold text-primary">₹${discountPrice}</span>
                        ${price > discountPrice ? `<span class="old-price text-[18px] leading-7 font-urbanist font-semibold text-light-disabled-text line-through">₹${price}</span>` : ''}
                    </div>
                    
                    <div class="btn-section flex items-center gap-x-4">
                        <a class="size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300 cursor-pointer">
                            <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                        </a>
                        <button class="btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1 shadow-none outline-none border-none">
                            <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>
                            <span>Add to Cart</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    `;
}