document.addEventListener("DOMContentLoaded", function () {

    loadCategories();

});

async function loadCategories() {

    try {

        const response = await fetch(
            "https://ecommerce-backend.workarya.com/api/getcategories"
        );

        if (!response.ok) {
            throw new Error(`HTTP Error: ${response.status}`);
        }

        const result = await response.json();

        const categories = result?.value?.data
            ?.filter(category => category.isActive === true) || [];

        // Dropdown
        renderDropdown(categories);

        // Grid (first 12 only)
        renderGrid(categories.slice(0, 12));

    } catch (error) {

        console.error("Category Error:", error);

    }
}


// ======================
// DROPDOWN
// ======================

function renderDropdown(categories) {

    const dropdownMenu = document.getElementById("dropdownMenu");

    if (!dropdownMenu) return;

    // Remove scrolling properties to prevent horizontal scrollbars 
    // and allow nested dropdowns to open to the right freely
    dropdownMenu.classList.remove("custom-category-scroll");
    dropdownMenu.style.maxHeight = "";
    dropdownMenu.style.overflowY = "";

    dropdownMenu.innerHTML = categories.map(category => {
        const children = category.subCategories || category.children || [];
        const hasChildren = children.length > 0;

        return `
        <li class="py-[9px] group relative">
            <a
                href="shop-left-sidebar-4col.html?category=${category.id}"
                class="flex items-center gap-x-2 relative text-light-primary-text group-hover:text-primary pr-6"
            >
                <span class="w-8 h-8 flex-shrink-0 bg-primary-lighter inline-flex items-center justify-center rounded-full overflow-hidden">
                    ${
                        category.categoryImage
                        ? `<img
                                src="${category.categoryImage}"
                                alt="${category.categoryName}"
                                class="w-full h-full object-cover"
                           >`
                        : `<i class="hgi hgi-stroke hgi-grid"></i>`
                    }
                </span>
                <span class="truncate">${category.categoryName}</span>
                
                ${hasChildren ? `
                <span class="absolute right-0 top-1/2 -translate-y-1/2">
                    <i class="hgi hgi-stroke hgi-arrow-right-01 text-lg text-light-primary-text"></i>
                </span>
                ` : ''}
            </a>
            
            ${hasChildren ? `
            <ul class="absolute left-full top-0 z-60 w-[250px] max-w-[250px] bg-white rounded-2xl divide-y divide-gray-300 shadow-dark-z-24 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-x-4 group-hover:translate-x-0">
                ${children.map(sub => {
                    const grandChildren = sub.subCategories || sub.children || [];
                    const hasGrandChildren = grandChildren.length > 0;
                    
                    return `
                <li class="py-[9px] px-4 group/item relative">
                    <a href="shop-left-sidebar-4col.html?category=${sub.id}" class="flex items-center gap-x-2 relative text-light-primary-text group-hover/item:text-primary">
                        ${sub.categoryName}
                        ${hasGrandChildren ? `
                        <span class="absolute right-0 top-1/2 -translate-y-1/2">
                            <i class="hgi hgi-stroke hgi-arrow-right-01 text-lg text-light-primary-text"></i>
                        </span>
                        ` : ''}
                    </a>
                    ${hasGrandChildren ? `
                    <ul class="absolute left-full top-0 z-60 w-[250px] max-w-[250px] bg-white rounded-2xl divide-y divide-gray-300 shadow-dark-z-24 opacity-0 invisible group-hover/item:opacity-100 group-hover/item:visible transition-all duration-300 transform translate-x-4 group-hover/item:translate-x-0">
                        ${grandChildren.map(grand => `
                        <li class="py-[9px] px-4 group/sub">
                            <a href="shop-left-sidebar-4col.html?category=${grand.id}" class="flex items-center gap-x-2 relative text-light-primary-text group-hover/sub:text-primary">
                                ${grand.categoryName}
                            </a>
                        </li>
                        `).join("")}
                    </ul>
                    ` : ''}
                </li>
                `;
                }).join("")}
            </ul>
            ` : ''}
        </li>
    `}).join("");

}


// ======================
// CATEGORY GRID
// ======================

function renderGrid(categories) {

    const container = document.getElementById("category-container");

    if (!container) return;

    container.innerHTML = categories.map(category => `

        <div class="hover:border-primary border border-gray-300 rounded-2xl col-span-6 md:col-span-4 xl:col-span-2 lg:col-span-3 p-3 transition-all duration-300 wow animate__animated animate__fadeInUp group"
            data-wow-delay=".2s">

            <a href="shop-left-sidebar-4col.html?category=${category.id}"
                class="flex md:flex-row flex-col items-center justify-center gap-3">

                <div class="max-w-[100px] flex items-center justify-center w-full">

                    <img
                        src="${category.categoryImage}"
                        alt="${category.categoryName}"
                        class="rounded-lg w-full h-full object-cover"
                    />

                </div>

                <p class="font-semibold text-light-primary-text group-hover:text-primary text-center md:text-left transition-all duration-300">
                    ${category.categoryName}
                </p>

            </a>

        </div>

    `).join("");

}