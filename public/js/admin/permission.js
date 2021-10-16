$(document).ready(function () {
    var table = $("#dataTable").DataTable();
    var rowUpdate = null;

    $("#form").on("hidden.bs.modal", function (e) {
        clearField();
        clearValidation();
    });

    $("#dataTable").on("click", ".delete", function () {
        var id = $(this).data("id");
        let _url = `/api/permissions/${id}`;
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
        let _url = `/api/permissions/${id}`;
        rowUpdate = $(this).closest("tr");

        $.ajax({
            url: _url,
            type: "GET",
            success: function (response) {
                if (response.success) {
                    $("#permission_id").val(response.data.id);
                    $("#display_name").val(response.data.display_name);
                    $("#form").modal("show");
                }
            },
            error: function (response) {
                console.log(response.message);
            },
        });
    });

    $("#save").click(() => {
        var display_name = $("#display_name").val();
        var id = $("#permission_id").val();

        let _url_update = `/api/permissions/${id}`;
        let _token = $('meta[name="csrf-token"]').attr("content");
        $.ajax({
            url: _url_update,
            type: "PUT",
            data: {
                id: id,
                display_name: display_name,
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
    });

    function updateTableRow(response, currentIndex) {
        var data = [
            response.data.id,
            response.data.name,
            response.data.display_name,
            '<button class="btn btn-warning btn-circle edit" data-id="' +
                response.data.id +
                '"><i class="fas fa-edit"></i></button><button class="btn btn-danger btn-circle delete" data-id="' +
                response.data.id +
                '"><i class="fas fa-trash"></i></button>',
        ];
        table.row(currentIndex).data(data).invalidate().draw();
    }

    function showValidation(response) {
        response.responseJSON.errors.display_name
            ? $("#displayNameError")
                  .text(response.responseJSON.errors.display_name)
                  .addClass("text-danger")
            : null;
    }

    function clearValidation() {
        $("#displayNameError").removeClass("text-danger").empty();
    }

    function clearField() {
        $("#display_name").val("");
    }
});
