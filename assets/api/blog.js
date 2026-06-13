document.addEventListener("DOMContentLoaded", function () {
    if (document.getElementById("blog-container")) {
        loadBlogs();
    }
});

async function loadBlogs() {
    const container = document.getElementById("blog-container");
    if (!container) return;

    // Use the global domin variable
    const API_BASE = typeof domin !== "undefined" ? domin : "https://ecommerce-backend.workarya.com";

    container.innerHTML = '<div class="col-span-12 text-center py-10">Loading blogs...</div>';

    try {
        const response = await fetch(`${API_BASE}/api/blog/getblog`);

        if (!response.ok) {
            throw new Error(`HTTP Error: ${response.status}`);
        }

        const result = await response.json();

        if (result.status && result.data) {
            const activeBlogs = result.data.filter(blog => blog.status === true);

            if (activeBlogs.length > 0) {
                container.innerHTML = activeBlogs.map((blog, index) => renderBlogCard(blog, index)).join("");
            } else {
                container.innerHTML = '<div class="col-span-12 text-center py-10">No blogs found.</div>';
            }
        }
    } catch (error) {
        console.error("Error fetching blogs:", error);
        container.innerHTML = '<div class="col-span-12 text-center py-10 text-error">Failed to load blogs.</div>';
    }
}

function formatBlogDate(dateString) {
    if (!dateString) return "";
    const date = new Date(dateString);
    
    const timeOptions = { hour: '2-digit', minute: '2-digit', hour12: true };
    const dateOptions = { day: '2-digit', month: 'short', year: 'numeric' };
    
    let timeStr = date.toLocaleTimeString('en-US', timeOptions);
    let dateStr = date.toLocaleDateString('en-GB', dateOptions);
    
    return `${timeStr}, ${dateStr}`;
}

function renderBlogCard(blog, index) {
    const delay = ((index % 3) + 2) * 0.1;
    const blogUrl = `blog-detail.php?id=${blog.id}`;
    const imgUrl = blog.blogImg || "assets/images/no-image.png";
    const dateStr = formatBlogDate(blog.createdAt);
    
    // Truncate blog name to 6 words max
    const rawBlogName = blog.blogName || "";
    const nameWords = rawBlogName.split(" ");
    const displayBlogName = nameWords.length > 6 ? nameWords.slice(0, 6).join(" ") + "..." : rawBlogName;

    // Safely truncate description if needed
    const description = blog.description ? (blog.description.length > 80 ? blog.description.substring(0, 80) + '...' : blog.description) : "";

    return `
        <div class="2xl:col-span-1 xl:col-span-1 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp" data-wow-delay="${delay}s">
            <div class="border border-gray-300 rounded-2xl p-6 hover:transform hover:translate-y-[-5px] hover:transition-all hover:ease-[cubic-bezier(0.02,0.01,0.47,1)] hover:duration-250 transition-all ease-[cubic-bezier(0.02,0.01,0.47,1)] duration-250 h-full flex flex-col">
                <div class="mb-6 2xl:max-w-[340px] h-[250px] w-full">
                    <a href="${blogUrl}" class="block w-full h-full">
                        <img src="${imgUrl}" alt="${rawBlogName}" class="rounded-2xl w-full h-full object-cover"  style="object-fit: contain;" />
                    </a>
                </div>
               
                <div class="flex flex-col lg:flex-row divide-x-0 lg:divide-x divide-[rgba(145,158,171,0.24)] items-start justify-start lg:gap-y-0 gap-y-4 mb-4">
                    <p class="text-light-secondary-text text-sm leading-[22px] inline-flex items-center gap-x-2 lg:pr-4 pr-0">
                        <span class="inline-flex items-center justify-center"><i class="hgi hgi-stroke hgi-calendar-03 text-base leading-4 text-light-secondary-text"></i></span>
                        <span>${dateStr}</span>
                    </p>
                   
                </div>
                <a href="${blogUrl}" title="${rawBlogName}">
                    <h6 class="mb-3 hover:text-primary line-clamp-2">${displayBlogName}</h6>
                </a>
                <p class="mb-4 flex-1 text-light-secondary-text line-clamp-3">${description}</p>
                <div class="mt-auto">
                    <a class="btn btn-primary btn-large rounded-[60px] group py-2 pl-6 pr-3 gap-x-[18px] inline-flex" href="${blogUrl}">Read More<span class="size-8 bg-white inline-flex items-center justify-center rounded-full rotate-[-40deg] transform group-hover:rotate-0 transition-all duration-300"><i class="hgi hgi-stroke hgi-arrow-right-02 text-xl text-primary-darker"></i></span></a>
                </div>
            </div>
        </div>
    `;
}


