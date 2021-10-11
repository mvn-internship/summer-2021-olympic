$(document).ready(function(){
    $('#form-update-staff').on('submit', (function(e){
        e.preventDefault();
        const form = $(this);
        var formData = form.serializeArray();
        const url = form.attr('action');
        const type = form.attr('method');
        $.ajax({
            url,
            type,
            data : formData,
            success : function(response){
                $('#notification').html('Success');
            },
            error : function(error){
                start = error['responseText'].indexOf('The');
                end = error['responseText'].length - 4;
                data = error['responseText'].substring(start, end);
                $('#notification').html(data);
            }
        });
    }))
});