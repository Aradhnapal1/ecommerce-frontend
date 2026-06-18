const API_BASE_REVIEW = typeof domin !== "undefined" ? domin : "https://ecommerce-backend.workarya.com";

document.addEventListener("DOMContentLoaded", function () {
    const observer = new MutationObserver(processReviews);
    observer.observe(document.body, { childList: true, subtree: true });
    processReviews();
});

const fetchedReviewsCache = new Map();

function processReviews() {
    const ratingSections = document.querySelectorAll('.rating-section:not([data-review-processed])');
    
    ratingSections.forEach(section => {
        section.setAttribute('data-review-processed', 'true');
        
        // Hide initially until we fetch and confirm there are reviews
        section.style.display = 'none';
        
        let productId = section.getAttribute('data-product-id');
        
        // Fallback to find product ID from nearby links
        if (!productId) {
            const container = section.closest('.group, .product-card, a') || section.parentElement;
            if (container) {
                const link = container.nodeName === 'A' ? container : container.querySelector('a[href*="id="]');
                if (link && link.href.includes('id=')) {
                    const urlParams = new URLSearchParams(link.href.split('?')[1]);
                    productId = urlParams.get('id');
                }
            }
        }
        
        if (productId && productId !== "undefined" && productId !== "null") {
            fetchAndRenderReviews(productId, section);
        }
    });
}

async function fetchAndRenderReviews(productId, section) {
    let reviewsData = [];
    
    if (fetchedReviewsCache.has(productId)) {
        reviewsData = fetchedReviewsCache.get(productId);
    } else {
        try {
            const response = await fetch(`${API_BASE_REVIEW}/api/review/product/${productId}`);
            const result = await response.json();
            if (result.success && result.data && result.data.length > 0) {
                reviewsData = result.data;
                fetchedReviewsCache.set(productId, reviewsData);
            } else {
                fetchedReviewsCache.set(productId, []);
            }
        } catch (error) {
            console.error("Error fetching reviews for product", productId, error);
            fetchedReviewsCache.set(productId, []);
        }
    }
    
    if (reviewsData.length > 0) {
        let totalRating = 0;
        reviewsData.forEach(review => {
            totalRating += parseFloat(review.rating);
        });
        const avgRating = totalRating / reviewsData.length;
        const widthPercentage = (avgRating / 5) * 100;
        
        section.innerHTML = `
            <div class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                <div style="width: ${widthPercentage}%" class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]">
                </div>
            </div>
            <span class="text-sm leading-[22px] font-normal inline-block ml-1">(${reviewsData.length})</span>
        `;
        section.style.display = 'flex'; // Show if there are reviews
    } else {
        section.style.display = 'none'; // Keep hidden if no reviews
    }
}