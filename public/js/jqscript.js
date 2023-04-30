$(document).ready(function () {
    // Handling Add new Addons
    $("#plus-addon").on("click", function () {
        // create new input fields HTML
        const inputFieldsHTML = `
                <div class="mb-2 col-md-6">
                    <input class="form-control" placeholder="Addon Name" autocomplete="off" type="text" 
                    name="addon[]" autofocus required/>
                </div>
    
                <div class="mb-2 col-md-6">
                    <input class="form-control" placeholder="Addon Price" autocomplete="off" type="text" name="addon-price[]" autofocus required/>
                </div>
            `;

        // append new input fields to container
        $("#addons-container").append(inputFieldsHTML);
    });

    // Handling Add new slot
    $("#plus-slot").on("click", function () {
        // create new input fields HTML
        const inputFieldsSlot = `
            <div class="col-md-12">
                <input class="form-control" type="time"
                    placeholder="12:30:00" id="slot" name="time[]" required/>
            </div>
        `;

        const inputFieldsMaxUser = `
            <div class="col-md-12">
                <input class="form-control" type="number" name="max_user[]"
                    id="max_user" placeholder="0" required/>
            </div>
        `;

        // append new input fields to container
        $("#slot-container").append(inputFieldsSlot);
        $("#max-user-container").append(inputFieldsMaxUser);
    });

    // Handling Input only Number
    $('input[name="price"], input[name="addon-price[]"]').on(
        "input",
        function () {
            // remove any non-numeric characters from input
            const cleanedValue = $(this)
                .val()
                .replace(/[^0-9\.]/g, "");

            // update input value with cleaned value
            $(this).val(cleanedValue);
        }
    );

    // Handling add "selected" class onclick
    // $(".date-slot").on("click", (e) => {
    //     e.currentTarget.removeClass("selected");
    //     $(e.currentTarget).addClass("selected");
    //     const selectedDate = $(e.currentTarget).data("date");
    //     $("#selected-date").val(selectedDate);
    // });

    $("#product-detail-order-form").submit((e) => {
        e.preventDefault();

        // Get the selected date and slot from the UI
        const selectedDate = $(".date-slot.active").attr("data-date");
        const selectedSlot = $(".time-slot.active").attr("data-slot");
        const selectedAddons = [];

        // Loop through each checked addon checkbox and add it to the selectedAddons array
        $(".addon-slot input[type='checkbox']:checked").each(function () {
            selectedAddons.push($(this).attr("data-addon"));
        });

        // Create a hidden input for each selected addon
        selectedAddons.forEach(function (addon) {
            $("<input />")
                .attr("type", "hidden")
                .attr("name", "addons[]")
                .attr("value", addon)
                .appendTo("#product-detail-order-form");
        });

        // Set the date and slot as hidden form inputs
        $("<input />")
            .attr("type", "hidden")
            .attr("name", "date")
            .attr("value", selectedDate)
            .appendTo("#product-detail-order-form");

        $("<input />")
            .attr("type", "hidden")
            .attr("name", "slot_id")
            .attr("value", selectedSlot)
            .appendTo("#product-detail-order-form");

        // Submit the form
        $("#product-detail-order-form").unbind("submit").submit();
    });
});

// Handling Onchange Image Preview
const showImagePreview = (inputId, targetId) => {
    const fileInput = $(`#${inputId}`);
    const targetElement = $(`#${targetId}`);
    const file = fileInput[0].files[0];

    if (file) {
        const reader = new FileReader();
        reader.onload = (e) => {
            targetElement.attr("src", e.target.result);
            targetElement.removeClass("d-none");
        };
        reader.readAsDataURL(file);
    }
};

// Handling show modal edit company
const showModalEditCompany = (id) => {
    const token = $('meta[name="csrf-token"]').attr("content");
    $.ajax({
        url: `/dashboard/companies/${id}`,
        method: "POST",
        headers: { "X-CSRF-Token": token },
        success: function (res) {
            const company = res.company;
            $('#modalEditCompany input[name="name"]').val(company.name);
            $('#modalEditCompany input[name="email"]').val(company.email);
            $('#modalEditCompany input[name="phone"]').val(company.phone);

            $("#formEditCompany").attr(
                "action",
                `/dashboard/companies/${id}/edit`
            );
        },
        error: (err) => console.log(err),
    });

    $("#modalEditCompany").modal("show");
};
