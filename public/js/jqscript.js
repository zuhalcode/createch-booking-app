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
    $(
        'input[name="price"], input[name="phone"], input[name="addon-price[]"]'
    ).on("input", function () {
        // remove any non-numeric characters from input
        const cleanedValue = $(this)
            .val()
            .replace(/[^0-9\.]/g, "");

        // update input value with cleaned value
        $(this).val(cleanedValue);
    });

    // Handle show and hide password
    $(".showHidePassword").click(function () {
        var passwordInput = $("input[name='password']");
        var showHideIcon = $(".showHidePassword");

        if (passwordInput.attr("type") === "password") {
            passwordInput.attr("type", "text");
            showHideIcon.attr(
                "src",
                "https://themes.pixelstrap.com/oslo/assets/icons/svg/eye-1.svg"
            );
        } else {
            passwordInput.attr("type", "password");
            showHideIcon.attr(
                "src",
                "https://themes.pixelstrap.com/oslo/assets/icons/svg/eye-2.svg"
            );
        }
    });

    // Handle filtering city in dashboard Branches
    $("#province_id").change(function () {
        var provinceId = $(this).val();
        var cityDropdown = $("#city");

        // Clear city dropdown
        cityDropdown.empty();
        cityDropdown.append("<option selected>Choose...</option>");

        // Fetch cities based on selected province
        $.ajax({
            url: `/api/cities/${provinceId}`,
            method: "GET",
            success: function (res) {
                // Populate city dropdown with fetched cities
                $.each(res.cities, function (i, city) {
                    const option = `
                    <option value="${
                        city.id
                    }">${city.name.toUpperCase()}</option>`;
                    cityDropdown.append(option);
                });
            },
            error: function () {
                // Handle error case
                alert("Failed to fetch cities.");
            },
        });
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

// Handle submit on Book now in product detail
const handleOnSubmit = (id) => {
    // Get the selected date and slot from the UI
    const selectedDate = $(".date-slot.active").attr("data-date");
    const selectedSlot = $(".time-slot.active").attr("data-slot");
    const selectedBranch = $(".branch.active").attr("data-branch");
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
            .appendTo(`#${id}`);
    });

    // Set the date and slot as hidden form inputs
    $("<input />")
        .attr("type", "hidden")
        .attr("name", "date")
        .attr("value", selectedDate)
        .appendTo(`#${id}`);

    $("<input />")
        .attr("type", "hidden")
        .attr("name", "branch_id")
        .attr("value", selectedBranch)
        .appendTo(`#${id}`);

    $("<input />")
        .attr("type", "hidden")
        .attr("name", "slot_id")
        .attr("value", selectedSlot)
        .appendTo(`#${id}`);

    // Submit the form
    $(`#${id}`).unbind("submit").submit();
};

// Handle Redirect to Invoice by id
const handleOnRedirect = (href) => {
    alert(href);
};

// Handle reset form on changing branch
const resetForm = () => {
    // Remove the active class from all date slots, time slots, and addon slots
    $(".date-slot, .time-slot, .addon-slot input[type='checkbox']").removeClass(
        "active"
    );
    // Remove any hidden addon inputs
    $("input[name='addons[]']").remove();
    // Remove the hidden date and slot inputs
    $("input[name='date'], input[name='slot_id']").remove();
};
