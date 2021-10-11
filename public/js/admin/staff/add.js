$(document).ready(function(){
    // $('#table-staff-new').hide();
    $('#btn-submit').click(function(e){
        e.preventDefault();
        var formData = $('#form-add-staff').serializeArray();
        $.ajax({
            url : '../../api/staff',
            type : 'POST',
            data : formData,
            success : function(response){
                $('#notification').html('Success');
                $('#table-staff-new').attr('style', '');
                $('#staff-new').append("<tr><td>" + response['user'] + "</td><td>" + response['match'] + "</td><td>" + response['role'] + "</td></tr>");
            },
            error : function(error){
                $('#notification').html('Error');
            }
        });
    });
});