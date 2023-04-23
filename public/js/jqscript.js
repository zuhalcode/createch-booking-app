$(document).ready(function () {
    // Handling Add new Addons
    $("#plus-addon").on("click", function () {
        // create new input fields HTML
        const inputFieldsHTML = `
                <div class="mb-2 col-md-6">
                    <input class="form-control" placeholder="Addon Name" autocomplete="off" type="text" name="product" autofocus />
                </div>
    
                <div class="mb-2 col-md-6">
                    <input class="form-control" placeholder="Addon Price" autocomplete="off" type="text" name="price" autofocus />
                </div>
            `;

        // append new input fields to container
        $("#addons-container").append(inputFieldsHTML);
    });

    // Handling Input only Number
    $('input[name="price"]').on("input", function () {
        // remove any non-numeric characters from input
        const cleanedValue = $(this)
            .val()
            .replace(/[^0-9\.]/g, "");

        // update input value with cleaned value
        $(this).val(cleanedValue);
    });
});
