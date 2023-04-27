$(document).ready(function () {
    // Handling Add new Addons
    $("#plus-addon").on("click", function () {
        // create new input fields HTML
        const inputFieldsHTML = `
                <div class="mb-2 col-md-6">
                    <input class="form-control" placeholder="Addon Name" autocomplete="off" type="text" name="product[]" autofocus required/>
                </div>
    
                <div class="mb-2 col-md-6">
                    <input class="form-control" placeholder="Addon Price" autocomplete="off" type="text" name="price[]" autofocus required/>
                </div>
            `;

        // append new input fields to container
        $("#addons-container").append(inputFieldsHTML);
    });

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
    $('input[name="price"]').on("input", function () {
        // remove any non-numeric characters from input
        const cleanedValue = $(this)
            .val()
            .replace(/[^0-9\.]/g, "");

        // update input value with cleaned value
        $(this).val(cleanedValue);
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
