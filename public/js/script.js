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
