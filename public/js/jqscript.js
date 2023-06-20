$(document).ready(function () {
    // Handling Add new Product in Branch
    let counter = 1;
    $("#plus-product").on("click", function () {
        if (counter < 5) {
            counter++;
            const companyProducts = JSON.parse(
                $("#branch-product-container").attr("data-company-products")
            );

            const newSelectElement = $("<select>", {
                class: "form-select mt-2",
                name: "products[]",
                id: `branch-product-selector-${counter}`,
            });

            const defaultOption = $("<option>", {
                selected: true,
                text: "Choose...",
            });

            newSelectElement.append(defaultOption);

            companyProducts.forEach(function (product) {
                const option = $("<option>", {
                    value: product.id,
                    text: product.name,
                    class: "text-capitalize",
                });
                newSelectElement.append(option);
            });

            $("#branch-product-container").append(newSelectElement);
        }
    });

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
    let slug = window.location.pathname.split("/")[1];

    $.ajax({
        url: `/api/companies/${id}`,
        method: "GET",
        headers: { "X-CSRF-Token": token },
        success: function (res) {
            const company = res.company;
            $('#modalEditCompany input[name="name"]').val(company.name);
            $('#modalEditCompany input[name="email"]').val(company.email);
            $('#modalEditCompany input[name="phone"]').val(company.phone);
            $("#formEditCompany").attr(
                "action",
                `/${slug}/dashboard/companies/${id}`
            );
        },
        error: (err) => console.log(err),
    });

    $.ajax({
        url: `/api/companies/${id}/admins`,
        method: "GET",
        headers: { "X-CSRF-Token": token },
        success: (res) =>
            res.admins.map((admin) => {
                const option = `<option value="${admin.id}">${admin.name}</option>`;
                $("#user_id").append(option);
            }),
        error: (err) => console.log(err),
    });

    $("#modalEditCompany").modal("show");
};

// Handling show modal edit user
const showModalEditUser = (userId) => {
    const token = $('meta[name="csrf-token"]').attr("content");
    let slug = window.location.pathname.split("/")[1];
    $.ajax({
        url: `/api/companies/users/${userId}`,
        method: "GET",
        headers: { "X-CSRF-Token": token },
        success: function (res) {
            const user = res.user;
            $('#modalEditUser input[name="name"]').val(user.name);
            $('#modalEditUser input[name="email"]').val(user.email);
            $('#modalEditUser input[name="phone"]').val(user.phone);

            $("#formEditUser").attr(
                "action",
                `/${slug}/dashboard/users/${userId}`
            );
        },
        error: (err) => console.log(err),
    });

    $("#modalEditUser").modal("show");
};

// Handling show modal edit user
const showModalEditBranch = (branchId) => {
    const token = $('meta[name="csrf-token"]').attr("content");
    let slug = window.location.pathname.split("/")[1];
    $.ajax({
        url: `/api/companies/users/${userId}`,
        method: "GET",
        headers: { "X-CSRF-Token": token },
        success: function (res) {
            const user = res.user;
            $('#modalEditUser input[name="name"]').val(user.name);
            $('#modalEditUser input[name="email"]').val(user.email);
            $('#modalEditUser input[name="phone"]').val(user.phone);

            $("#formEditUser").attr(
                "action",
                `/${slug}/dashboard/branches/${branchId}`
            );
        },
        error: (err) => console.log(err),
    });

    $("#modalEditBranch").modal("show");
};

// Handle submit on Book now in product detail
const handleOnSubmit = (id) => {
    // Get the selected date and slot from the UI
    let selectedDate = $(".date-slot.active");

    if (selectedDate.hasClass("holiday")) selectedDate = "1900-05-31";
    else selectedDate = $(".date-slot.active").attr("data-date");

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
