$(document).ready(function(tournament){
})
function tournament(obj){
    $.ajax({
        url: './api/rankings/' + obj.value,
        type: "GET",
        success: function(response){
            $('#table-result').html(response);
        },
        error: function(error){
            $('#table-result').html('Being Update');
        }
    })
}