$(document).ready(function(){
    $('#btn-submit').click(function(e){
        e.preventDefault();
        var formData = $('#form-add-staff').serializeArray();
        $.ajax({
            url : '../../api/staffs',
            type : 'POST',
            data : formData,
            success : function(response){
                $('#notification').html('Success');
                $('#table-staff-new').attr('style', '');
                $('#staff-new').append("<tr><td>" + response['user'] + "</td><td>" + response['match'] + "</td><td>" + response['role'] + "</td></tr>");
            },
            error : function(error){
                start = error['responseText'].indexOf('The input');
                end = error['responseText'].length - 4;
                data = error['responseText'].substring(start, end);
                $('#notification').html(data);
            }
        });
    });
});