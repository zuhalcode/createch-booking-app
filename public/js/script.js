// Handling logout for entire page
const handleLogout = (formId) => document.querySelector(`#${formId}`).submit();

// Handle Midtrans
document.getElementById("pay-button").addEventListener("click", function () {
    snap.pay(document.getElementById("client_token").value, {
        onSuccess: function (result) {
            // Send the payment result and the token to the server
            fetch("/payment-success", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ result: result, token: token }),
            })
                .then((response) => {
                    if (response.ok) {
                        // Redirect the user to the order success page
                        window.location.href = "/order-success";
                    }
                })
                .catch((error) => {
                    console.error("Error:", error);
                });
        },

        onPending: function (result) {
            window.location.href = "/order-success";
        },
        onError: function (result) {
            // Handle the error case
        },
    });
});
