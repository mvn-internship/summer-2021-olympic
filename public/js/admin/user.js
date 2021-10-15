$(document).ready(function () {
    var table = $("#dataTable").DataTable();
    var rowUpdate = null;

    $("#form").on("hidden.bs.modal", function (e) {
        clearField();
        clearValidation();
    });

    $("#create").click(() => {
        $("#user_id").val("");
        let _url = `/api/users`;
        $.ajax({
            url: _url,
            type: "GET",
            success: function (response) {
                if (response.success) {
                    appendRoles(response.data);
                }
            },
        });
        $("#form").modal("show");
    });

    $("#dataTable").on("click", ".edit", function () {
        var id = $(this).data("id");
        let _url = `/api/users/${id}`;
        rowUpdate = $(this).closest("tr");

        $.ajax({
            url: _url,
            type: "GET",
            success: function (response) {
                console.log(response.data);
                if (response.success) {
                    $("#user_id").val(response.data[0].id);
                    $("#name").val(response.data[0].name);
                    $("#email").val(response.data[0].email);
                    $("#phone").val(response.data[0].phone);
                    $("#password").val(response.data[0].password);
                    $("#address").val(response.data[0].address);
                    appendRoles(response.data[1], response.data[2]);
                    $("#form").modal("show");
                }
            },
            error: function (response) {
                console.log(response.message);
            },
        });
    });

    $("#dataTable").on("click", ".status", function () {
        var id = $(this).data("id");
        let _url = `/api/users/${id}`;
        let _token = $('meta[name="csrf-token"]').attr("content");
        var row = $(this).closest("tr").index();

        $.ajax({
            url: _url,
            type: "DELETE",
            data: {
                _token: _token,
            },
            success: function (response) {
                updateTableRow(response, row);
            },
            error: function (response) {
                console.log("Toggle Fail");
            },
        });
    });

    $("#save").click(() => {
        var name = $("#name").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var password = $("#password").val();
        var address = $("#address").val();
        var roles = $("#roles").val();
        var id = $("#user_id").val();

        let _url_create = "/api/users";
        let _url_update = `/api/users/${id}`;
        let _token = $('meta[name="csrf-token"]').attr("content");
        if (id != "") {
            $.ajax({
                url: _url_update,
                type: "PUT",
                data: {
                    id: id,
                    name: name,
                    email: email,
                    phone: phone,
                    password: password,
                    address: address,
                    roles: roles,
                    _token: _token,
                },
                success: function (response) {
                    if (response.success) {
                        updateTableRow(response, rowUpdate);
                    }
                    clearField();
                    clearValidation();
                    $("#form").modal("hide");
                },
                error: function (response) {
                    clearValidation();
                    showValidation(response);
                },
            });
        } else {
            $.ajax({
                url: _url_create,
                type: "POST",
                data: {
                    id: id,
                    name: name,
                    email: email,
                    phone: phone,
                    status: 1,
                    password: password,
                    address: address,
                    roles: roles,
                    _token: _token,
                },
                success: function (response) {
                    if (response.success) {
                        createTableRow(response);
                    }
                    clearField();
                    clearValidation();
                    $("#form").modal("hide");
                },
                error: function (response) {
                    clearValidation();
                    showValidation(response);
                },
            });
        }
    });

    function appendRoles(data, roleSelected = []) {
        let selected = false;
        let selectedArray = [];
        if (roleSelected) {
            roleSelected.forEach((e) => selectedArray.push(e.name));
        }
        console.log(selectedArray);
        data.forEach((element) => {
            if (selectedArray) {
                selected = selectedArray.includes(element.name);
            }
            $("#roles").append(
                new Option(element.name, element.id, null, selected)
            );
        });
        $("#roles").multiselect({
            includeSelectAllOption: true,
            onDeselectAll: function (options) {
                alert(
                    "onDeselectAll triggered, " +
                        options.length +
                        " options deselected!"
                );
            },
            onSelectAll: function (options) {
                alert(
                    "onSelectAll triggered, " +
                        options.length +
                        " options selected!"
                );
            },
        });
    }

    function createTableRow(response) {
        var maxRowIndex = table.rows().data().length;
        var commonVar = initialVar(response.data);
        var tr =
            '<tr id="row_' +
            maxRowIndex +
            1 +
            '"><td>' +
            response.data.id +
            "</td><td>" +
            response.data.name +
            "</td><td>" +
            response.data.email +
            "</td><td>" +
            response.data.phone +
            "</td><td>" +
            response.data.address +
            '</td><td><button class="btn btn-' +
            commonVar.colorClass +
            ' status" data-id="' +
            response.data.id +
            '">' +
            commonVar.status +
            "</button></td><td>" +
            commonVar.email_verified_at +
            "</td><td>" +
            commonVar.created_at +
            "</td><td>" +
            commonVar.updated_at +
            '</td><td><button class="btn btn-warning btn-circle edit" data-id="' +
            response.data.id +
            '"><i class="fas fa-edit"></i></button></td></tr>';
        table.row.add($(tr).get(0)).draw();
    }

    function updateTableRow(response, currentIndex) {
        console.log("eidt");
        // Update
        var commonVar = initialVar(response.data);
        var data = [
            response.data.id,
            response.data.name,
            response.data.email,
            response.data.phone,
            response.data.address,
            '<button class="btn btn-' +
                commonVar.colorClass +
                ' status" data-id="' +
                response.data.id +
                '">' +
                commonVar.status +
                "</button>",
            commonVar.email_verified_at,
            commonVar.created_at,
            commonVar.updated_at,
            '<button class="btn btn-warning btn-circle edit" data-id="' +
                response.data.id +
                '"><i class="fas fa-edit"></i></button>',
        ];
        console.log(currentIndex);
        table.row(currentIndex).data(data).invalidate().draw();
    }

    function initialVar(data) {
        var colorClass = data.status ? "success" : "warning";
        var status = data.status ? "Active" : "Inactive";
        var email_verified_at = data.email_verified_at
            ? dateFormat(data.email_verified_at)
            : "N/A";
        var created_at = dateFormat(data.created_at);
        var updated_at = dateFormat(data.updated_at);
        return {
            colorClass,
            status,
            email_verified_at,
            created_at,
            updated_at,
        };
    }

    function showValidation(response) {
        response.responseJSON.errors.name
            ? $("#nameError")
                  .text(response.responseJSON.errors.name)
                  .addClass("text-danger")
            : null;
        response.responseJSON.errors.email
            ? $("#emailError")
                  .text(response.responseJSON.errors.email)
                  .addClass("text-danger")
            : null;
        response.responseJSON.errors.phone
            ? $("#phoneError")
                  .text(response.responseJSON.errors.phone)
                  .addClass("text-danger")
            : null;
        response.responseJSON.errors.password
            ? $("#passwordError")
                  .text(response.responseJSON.errors.password)
                  .addClass("text-danger")
            : null;
        response.responseJSON.errors.address
            ? $("#addressError")
                  .text(response.responseJSON.errors.address)
                  .addClass("text-danger")
            : null;
        response.responseJSON.errors.roles
            ? $("#roleError")
                  .text(response.responseJSON.errors.roles)
                  .addClass("text-danger")
            : null;
    }

    function clearValidation() {
        $("#nameError").removeClass("text-danger").empty();
        $("#emailError").removeClass("text-danger").empty();
        $("#phoneError").removeClass("text-danger").empty();
        $("#passwordError").removeClass("text-danger").empty();
        $("#addressError").removeClass("text-danger").empty();
        $("#roleError").removeClass("text-danger").empty();
    }

    function clearField() {
        $("#name").val("");
        $("#email").val("");
        $("#phone").val("");
        $("#password").val("");
        $("#address").val("");
        $("option", $("#roles")).each(function (element) {
            $(this).remove();
        });
        $("#roles").multiselect("destroy");
    }

    function dateFormat(date) {
        var date_format = new Date(date);
        return (
            [
                date_format.getFullYear(),
                date_format.getMonth() + 1,
                date_format.getDate(),
            ].join("-") +
            " " +
            [
                date_format.getHours(),
                date_format.getMinutes(),
                date_format.getSeconds(),
            ].join(":")
        );
    }
});
