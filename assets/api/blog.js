let allBlogsList = [];
let currentBlogPage = 1;
const BLOG_PAGE_SIZE = 12;

document.addEventListener("DOMContentLoaded", function () {
    if (document.getElementById("blog-container")) {
        loadBlogs();
    }
    if (document.querySelector(".blog-details-content") || document.querySelector(".blog-details-title")) {
        loadBlogDetail();
    }
});

async function loadBlogs() {
    const container = document.getElementById("blog-container");
    if (!container) return;

    const API_BASE = typeof domin !== "undefined" ? domin : "https://ecommerce-backend.workarya.com";

    container.innerHTML = '<div class="col-span-12 text-center py-10">Loading blogs...</div>';

    try {
        const response = await fetch(`${API_BASE}/api/blog/getblog`);

        if (!response.ok) {
            throw new Error(`HTTP Error: ${response.status}`);
        }

        const result = await response.json();

        if (result.status && result.data) {
            allBlogsList = result.data.filter(blog => blog.status === true || String(blog.status) === "true" || blog.status === 1);

            if (allBlogsList.length > 0) {
                const sortSelect = document.getElementById("sorting");
                if (sortSelect && !sortSelect.hasAttribute("data-listener")) {
                    sortSelect.setAttribute("data-listener", "true");
                    sortSelect.addEventListener("change", function () {
                        currentBlogPage = 1;
                        applyBlogSortingAndRender();
                    });
                }

                applyBlogSortingAndRender();
            } else {
                container.innerHTML = '<div class="col-span-12 text-center py-10">No blogs found.</div>';
                renderBlogPagination(0, 1, BLOG_PAGE_SIZE);
            }
        }
    } catch (error) {
        console.error("Error fetching blogs:", error);
        container.innerHTML = '<div class="col-span-12 text-center py-10 text-error">Failed to load blogs.</div>';
    }
}

function applyBlogSortingAndRender() {
    const sortSelect = document.getElementById("sorting");
    const sortVal = sortSelect ? sortSelect.value : "newest";

    let sorted = [...allBlogsList];
    if (sortVal === "oldest") {
        sorted.sort((a, b) => new Date(a.createdAt || 0) - new Date(b.createdAt || 0));
    } else if (sortVal === "a-z-order") {
        sorted.sort((a, b) => (a.blogName || "").localeCompare(b.blogName || ""));
    } else if (sortVal === "z-a-order") {
        sorted.sort((a, b) => (b.blogName || "").localeCompare(a.blogName || ""));
    } else {
        // newest first (default)
        sorted.sort((a, b) => new Date(b.createdAt || 0) - new Date(a.createdAt || 0));
    }

    renderBlogPage(sorted, currentBlogPage);
}

function renderBlogPage(blogs, page) {
    const container = document.getElementById("blog-container");
    if (!container) return;

    const totalItems = blogs.length;
    const totalPages = Math.ceil(totalItems / BLOG_PAGE_SIZE) || 1;
    if (page > totalPages) page = totalPages;
    if (page < 1) page = 1;
    currentBlogPage = page;

    const startIndex = (page - 1) * BLOG_PAGE_SIZE;
    const endIndex = startIndex + BLOG_PAGE_SIZE;
    const pageBlogs = blogs.slice(startIndex, endIndex);

    if (pageBlogs.length === 0) {
        container.innerHTML = '<div class="col-span-12 text-center py-10">No blogs found.</div>';
    } else {
        container.innerHTML = pageBlogs.map((blog, index) => renderBlogCard(blog, index)).join("");
    }

    renderBlogPagination(totalItems, page, BLOG_PAGE_SIZE);
}

function renderBlogPagination(totalItems, currentPage, pageSize) {
    const paginationUl = document.querySelector(".blog-pagination");
    if (!paginationUl) return;

    const totalPages = Math.ceil(totalItems / pageSize) || 1;

    if (totalPages <= 1) {
        paginationUl.innerHTML = "";
        return;
    }

    let html = "";

    // Prev Button
    html += `
        <li class="group blog-pagination-item">
            <button type="button" onclick="changeBlogPage(${currentPage - 1})" ${currentPage === 1 ? 'disabled' : ''}
                class="inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] bg-white cursor-pointer border border-gray-300 group-hover:font-semibold group-hover:border-primary group-hover:bg-[rgba(0,171,85,0.08)] transition-colors duration-300 ease-in-out ${currentPage === 1 ? 'opacity-50 cursor-not-allowed' : ''}">
                <span class="inline-flex items-center justify-center">
                    <i class="hgi hgi-stroke hgi-arrow-left-01 text-[20px] leading-5 text-light-primary-text group-hover:text-primary"></i>
                </span>
            </button>
        </li>
    `;

    // Page Numbers
    for (let p = 1; p <= totalPages; p++) {
        const isActive = p === currentPage;
        html += `
            <li class="group blog-pagination-item">
                <button type="button" onclick="changeBlogPage(${p})"
                    class="inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] text-base leading-6 font-semibold cursor-pointer border transition-colors duration-300 ease-in-out ${
                        isActive
                            ? "bg-primary text-white border-primary"
                            : "bg-white text-light-primary-text border-gray-300 hover:border-primary hover:bg-[rgba(0,171,85,0.08)] hover:text-primary"
                    }">
                    ${p}
                </button>
            </li>
        `;
    }

    // Next Button
    html += `
        <li class="group blog-pagination-item">
            <button type="button" onclick="changeBlogPage(${currentPage + 1})" ${currentPage === totalPages ? 'disabled' : ''}
                class="inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] bg-white cursor-pointer border border-gray-300 group-hover:font-semibold group-hover:border-primary group-hover:bg-[rgba(0,171,85,0.08)] transition-colors duration-300 ease-in-out ${currentPage === totalPages ? 'opacity-50 cursor-not-allowed' : ''}">
                <span class="inline-flex items-center justify-center">
                    <i class="hgi hgi-stroke hgi-arrow-right-01 text-[20px] leading-5 text-light-primary-text group-hover:text-primary"></i>
                </span>
            </button>
        </li>
    `;

    paginationUl.innerHTML = html;
}

window.changeBlogPage = function (newPage) {
    const totalPages = Math.ceil(allBlogsList.length / BLOG_PAGE_SIZE) || 1;
    if (newPage < 1 || newPage > totalPages) return;
    currentBlogPage = newPage;
    applyBlogSortingAndRender();

    const blogContainer = document.getElementById("blog-container");
    if (blogContainer) {
        blogContainer.scrollIntoView({ behavior: "smooth", block: "start" });
    }
};

function formatBlogDate(dateString) {
    if (!dateString) return "";
    const date = new Date(dateString);
    if (isNaN(date.getTime())) return "";
    
    const timeOptions = { hour: '2-digit', minute: '2-digit', hour12: true };
    const dateOptions = { day: '2-digit', month: 'short', year: 'numeric' };
    
    let timeStr = date.toLocaleTimeString('en-US', timeOptions);
    let dateStr = date.toLocaleDateString('en-GB', dateOptions);
    
    return `${timeStr}, ${dateStr}`;
}

function renderBlogCard(blog, index) {
    const delay = ((index % 3) + 2) * 0.1;
    // Clean relative URL for blog detail
    const blogUrl = `blog-detail?id=${blog.id}`;
    const imgUrl = blog.blogImg || "assets/images/no-image.png";
    const dateStr = formatBlogDate(blog.createdAt);
    
    const rawBlogName = blog.blogName || "";
    const nameWords = rawBlogName.split(" ");
    const displayBlogName = nameWords.length > 6 ? nameWords.slice(0, 6).join(" ") + "..." : rawBlogName;

    const description = blog.description ? (blog.description.length > 80 ? blog.description.substring(0, 80) + '...' : blog.description) : "";

    return `
        <div class="2xl:col-span-1 xl:col-span-1 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp" data-wow-delay="${delay}s">
            <div class="border border-gray-300 rounded-2xl p-6 hover:transform hover:translate-y-[-5px] hover:transition-all hover:ease-[cubic-bezier(0.02,0.01,0.47,1)] hover:duration-250 transition-all ease-[cubic-bezier(0.02,0.01,0.47,1)] duration-250 h-full flex flex-col">
                <div class="mb-6 2xl:max-w-[340px] h-[250px] w-full overflow-hidden rounded-2xl">
                    <a href="${blogUrl}" class="block w-full h-full">
                        <img src="${imgUrl}" alt="${rawBlogName.replace(/"/g, '&quot;')}" class="rounded-2xl w-full h-full object-cover" />
                    </a>
                </div>
               
                <div class="flex flex-col lg:flex-row divide-x-0 lg:divide-x divide-[rgba(145,158,171,0.24)] items-start justify-start lg:gap-y-0 gap-y-4 mb-4">
                    <p class="text-light-secondary-text text-sm leading-[22px] inline-flex items-center gap-x-2 lg:pr-4 pr-0">
                        <span class="inline-flex items-center justify-center"><i class="hgi hgi-stroke hgi-calendar-03 text-base leading-4 text-light-secondary-text"></i></span>
                        <span>${dateStr}</span>
                    </p>
                </div>
                <a href="${blogUrl}" title="${rawBlogName.replace(/"/g, '&quot;')}">
                    <h6 class="mb-3 hover:text-primary line-clamp-2">${displayBlogName}</h6>
                </a>
                <p class="mb-4 flex-1 text-light-secondary-text line-clamp-3">${description}</p>
                <div class="mt-auto">
                    <a class="btn btn-primary btn-large rounded-[60px] group py-2 pl-6 pr-3 gap-x-[18px] inline-flex" href="${blogUrl}">
                        Read More
                        <span class="size-8 bg-white inline-flex items-center justify-center rounded-full rotate-[-40deg] transform group-hover:rotate-0 transition-all duration-300">
                            <i class="hgi hgi-stroke hgi-arrow-right-02 text-xl text-primary-darker"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    `;
}

async function loadBlogDetail() {
    const urlParams = new URLSearchParams(window.location.search);
    const blogId = urlParams.get("id");
    if (!blogId) return;

    const API_BASE = typeof domin !== "undefined" ? domin : "https://ecommerce-backend.workarya.com";

    try {
        const response = await fetch(`${API_BASE}/api/blog/getblog`);
        if (!response.ok) return;

        const result = await response.json();
        const blogs = result?.data || result?.value?.data || [];
        const blog = blogs.find(b => String(b.id) === String(blogId));

        if (blog) {
            const titleEl = document.querySelector(".blog-details-title");
            if (titleEl) titleEl.textContent = blog.blogName || "";

            const breadcrumbLast = document.querySelector(".breadcrumb ul li:last-child span");
            if (breadcrumbLast) breadcrumbLast.textContent = blog.blogName || "";

            const imgEl = document.querySelector(".blog-details-image");
            if (imgEl && blog.blogImg) {
                imgEl.style.backgroundImage = `url('${blog.blogImg}')`;
            }

            const dateSpan = document.querySelector(".blog-details-meta-item span");
            if (dateSpan) dateSpan.textContent = formatBlogDate(blog.createdAt);

            const contentEl = document.querySelector(".blog-details-content p");
            if (contentEl && blog.description) {
                contentEl.textContent = blog.description;
            }
        }
    } catch (err) {
        console.error("Error loading blog detail:", err);
    }
}
