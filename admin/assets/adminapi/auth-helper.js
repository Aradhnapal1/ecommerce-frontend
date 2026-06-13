function getAdminToken() {
    return localStorage.getItem("adminToken");
}

function getAdminAuthHeaders(extraHeaders) {
    const headers = Object.assign({}, extraHeaders || {});
    const token = getAdminToken();

    if (token) {
        headers.Authorization = "Bearer " + token;
    }

    return headers;
}

async function adminFetch(url, options) {
    const opts = options || {};
    const headers = getAdminAuthHeaders(opts.headers);

    if (opts.body instanceof FormData) {
        delete headers["Content-Type"];
    }

    const response = await fetch(url, Object.assign({}, opts, { headers }));

    if (response.status === 401) {
        localStorage.removeItem("adminToken");
        if (!window.location.href.includes("login.php")) {
            window.location.href = "login.php";
        }
    }

    return response;
}
