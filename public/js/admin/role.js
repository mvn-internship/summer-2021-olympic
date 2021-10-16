$(document).ready(function () {
    var table = $("#dataTable").DataTable();
    var rowUpdate = null;

    $("#form").on("hidden.bs.modal", function (e) {
        clearField();
        clearValidation();
    });

    $("#create").click(() => {
        $("#role_id").val("");
        let _url = `/api/roles`;
        $.ajax({
            url: _url,
            type: "GET",
            success: function (response) {
                if (response.success) {
                    appendPermissions(response.data);
                }
            },
        });
        $("#form").modal("show");
    });

    $("#dataTable").on("click", ".delete", function () {
        var id = $(this).data("id");
        let _url = `/api/roles/${id}`;
        let _token = $('meta[name="csrf-token"]').attr("content");
        var row = $(this).closest("tr");

        $.ajax({
            url: _url,
            type: "DELETE",
            data: {
                _token: _token,
            },
            success: function (response) {
                table.row(row).remove().draw();
            },
            error: function (response) {
                console.log("Delete Fail");
            },
        });
    });

    $("#dataTable").on("click", ".edit", function () {
        var id = $(this).data("id");
        let _url = `/api/roles/${id}`;
        rowUpdate = $(this).closest("tr");

        $.ajax({
            url: _url,
            type: "GET",
            success: function (response) {
                if (response.success) {
                    $("#role_id").val(response.data[0].id);
                    $("#name").val(response.data[0].name);
                    appendPermissions(response.data[1], response.data[2]);
                    $("#form").modal("show");
                }
            },
            error: function (response) {
                console.log(response.message);
            },
        });
    });

    $("#save").click(() => {
        var name = $("#name").val();
        var permissions = $("#permissions").val();
        var id = $("#role_id").val();

        let _url_create = "/api/roles";
        let _url_update = `/api/roles/${id}`;
        let _token = $('meta[name="csrf-token"]').attr("content");
        if (id != "") {
            $.ajax({
                url: _url_update,
                type: "PUT",
                data: {
                    id: id,
                    name: name,
                    permissions: permissions,
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
                    name: name,
                    permissions: permissions,
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

    function appendPermissions(data, permissionSelected = []) {
        let selected = false;
        let selectedArray = [];
        if (permissionSelected) {
            permissionSelected.forEach((e) => selectedArray.push(e.name));
        }
        $.each(data, function (i, element) {
            if (selectedArray) {
                selected = selectedArray.includes(element.name);
            }
            $("#permissions").append(
                new Option(element.name, element.id, null, selected)
            );
        });
        $("#permissions").multiselect({
            enableFiltering: true,
            maxHeight: 450,
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
        var tr =
            '<tr id="row_' +
            maxRowIndex +
            1 +
            '"><td>' +
            response.data.id +
            "</td><td>" +
            response.data.name +
            '</td><td><button class="btn btn-warning btn-circle edit" data-id="' +
            response.data.id +
            '"><i class="fas fa-edit"></i></button><button class="btn btn-danger btn-circle delete" data-id="' +
            response.data.id +
            '"><i class="fas fa-trash"></i></button></td></tr>';
        table.row.add($(tr).get(0)).draw();
    }

    function updateTableRow(response, currentIndex) {
        var data = [
            response.data.id,
            response.data.name,
            '<button class="btn btn-warning btn-circle edit" data-id="' +
                response.data.id +
                '"><i class="fas fa-edit"></i></button><button class="btn btn-danger btn-circle delete" data-id="' +
                response.data.id +
                '"><i class="fas fa-trash"></i></button>',
        ];
        table.row(currentIndex).data(data).invalidate().draw();
    }

    function showValidation(response) {
        response.responseJSON.errors.name
            ? $("#nameError")
                  .text(response.responseJSON.errors.name)
                  .addClass("text-danger")
            : null;
        response.responseJSON.errors.permissions
            ? $("#permissionError")
                  .text(response.responseJSON.errors.permissions)
                  .addClass("text-danger")
            : null;
    }

    function clearValidation() {
        $("#nameError").removeClass("text-danger").empty();
        $("#permissionError").removeClass("text-danger").empty();
    }

    function clearField() {
        $("#name").val("");
        $("option", $("#permissions")).each(function (element) {
            $(this).remove();
        });
        $("#permissions").multiselect("destroy");
    }
});
