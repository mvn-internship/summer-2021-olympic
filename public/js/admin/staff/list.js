$(document).ready(function(){
    $('.btn-delete').click(function (){
        var url = $(this).attr('data-url');
        $('#form-delete').attr('action', url);
    });
})