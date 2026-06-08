const getContactApi = `${domin}/api/getcontact`;

async function loadContacts() {
    try {

        console.log("loadContacts called");

        const response = await fetch(getContactApi);

        console.log("GET Status:", response.status);

        const result = await response.json();

        console.log("GET CONTACTS RESPONSE:", result);

        const tableBody = document.getElementById("enquiryTableBody");

        if (!tableBody) {
            console.error("enquiryTableBody not found");
            return;
        }

        tableBody.innerHTML = "";

        const contacts =
            result?.value?.data ||
            result?.data ||
            result?.value ||
            result ||
            [];

        console.log("Contacts Array:", contacts);

        contacts.forEach((item, index) => {

            tableBody.innerHTML += `
                <tr>
                    <td>${index + 1}</td>
                    <td>${item.id || "-"}</td>
                    <td>${item.firstName || "-"}</td>
                    <td>${item.lastName || "-"}</td>
                    <td>${item.email || "-"}</td>
                    <td>${item.phoneNumber || "-"}</td>
                    <td>${item.message || "-"}</td>
                    <td>${item.createdAt ? new Date(item.createdAt).toLocaleString() : "-"}</td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="deleteContact(${item.id})">
                            <i class="fa fa-trash text-danger"></i>
                        </a>
                    </td>
                </tr>
            `;
        });

    } catch (error) {

        console.error("LOAD CONTACT ERROR:", error);

        Toastify({
            text: "❌ Failed to load contacts",
            duration: 3000,
            gravity: "top",
            position: "right",
            style: {
                background: "linear-gradient(to right,#ff416c,#ff4b2b)",
                borderRadius: "10px"
            }
        }).showToast();

    }
}

function deleteContact(id) {

    const container = document.createElement("div");

    container.innerHTML = `
        <div style="font-weight:bold;margin-bottom:10px;text-align:center;color:#fff;">
            Are you sure you want to delete this contact?
        </div>

        <div style="display:flex;justify-content:center;gap:10px;">
            <button class="toast-yes-btn"
                style="background:#fff;color:#ff416c;border:none;padding:6px 15px;border-radius:5px;font-weight:bold;cursor:pointer;">
                Yes, Delete
            </button>

            <button class="toast-no-btn"
                style="background:transparent;color:#fff;border:1px solid #fff;padding:6px 15px;border-radius:5px;cursor:pointer;">
                Cancel
            </button>
        </div>
    `;

    const toast = Toastify({
        node: container,
        duration: -1,
        close: false,
        gravity: "top",
        position: "center",
        style: {
            background: "linear-gradient(to right, #ff416c, #ff4b2b)",
            borderRadius: "10px"
        }
    });

    toast.showToast();

    container.querySelector(".toast-yes-btn").addEventListener("click", async () => {

        toast.hideToast();

        try {

            console.log("Deleting Contact ID:", id);

            const response = await fetch(
                `${domin}/api/deletecontact/${id}`,
                {
                    method: "DELETE"
                }
            );

            console.log("DELETE STATUS:", response.status);
            console.log("DELETE OK:", response.ok);

            let result = {};

            try {
                result = await response.json();
                console.log("DELETE RESPONSE:", result);
            } catch (e) {
                console.log("Delete API returned no JSON");
            }

            if (response.ok) {

                Toastify({
                    text: "✅ Contact deleted successfully",
                    duration: 2500,
                    gravity: "top",
                    position: "right",
                    style: {
                        background: "linear-gradient(to right,#00b09b,#96c93d)",
                        borderRadius: "10px"
                    }
                }).showToast();

                console.log("Refreshing Contacts...");

                // Reload contacts after 1 second
                setTimeout(() => {
                    loadContacts();
                }, 1000);

                console.log("Contacts Refreshed");

            } else {

                Toastify({
                    text: "❌ " + (result.message || result.error || "Delete failed"),
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    style: { background: "linear-gradient(to right,#ff416c,#ff4b2b)", borderRadius: "10px" }
                }).showToast();

            }

        } catch (error) {

            console.error("DELETE ERROR:", error);

            Toastify({
                text: "❌ " + (error.message || "Something went wrong"),
                duration: 3000,
                gravity: "top",
                position: "right",
                style: { background: "linear-gradient(to right,#ff416c,#ff4b2b)", borderRadius: "10px" }
            }).showToast();

        }
    });

    container.querySelector(".toast-no-btn").addEventListener("click", () => {
        toast.hideToast();
    });
}

document.addEventListener("DOMContentLoaded", () => {
    loadContacts();
});