// Handling smooth scrolling
document.querySelectorAll(".scroll-btn").forEach((e) =>
    e.addEventListener("click", (e) => {
        e.preventDefault();
        document.querySelector("#products").scrollIntoView({
            behavior: "smooth",
        });
    })
);

// Handling change modal content
const handleChangeContent = () => {
    // Get the login and create account sections
    const loginSection = document.querySelector("#login-modal");
    const createAccountSection = document.querySelector("#register-modal");

    // Check if the login section is currently visible
    if (loginSection.style.display !== "none") {
        // Hide the login section and show the create account section
        loginSection.style.display = "none";
        createAccountSection.style.display = "block";
    } else {
        // Hide the create account section and show the login section
        createAccountSection.style.display = "none";
        loginSection.style.display = "block";
    }
};

// Handling logout for entire page
const handleLogout = (formId) => document.querySelector(`#${formId}`).submit();

// Handle Midtrans
document.getElementById("pay-button").addEventListener("click", function () {
    snap.pay(document.getElementById("client_token").value, {
        onSuccess: function (result) {
            window.location.href = "/order-success";
        },
        onPending: function (result) {
            window.location.href = "/order-success";
        },
        onError: function (result) {
            // Handle the error case
        },
    });
});
