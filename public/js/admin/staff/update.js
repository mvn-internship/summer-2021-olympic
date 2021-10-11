$(document).ready(function(){
    $('#form-update-staff').on('submit', (function(e){
        e.preventDefault();
        console.log(this)
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
                $('#notification').html('Error');
            }
        });
    }))
});