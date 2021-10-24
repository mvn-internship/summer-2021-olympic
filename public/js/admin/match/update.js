$(document).ready(function(){
    $('#form-update-match').on('submit', (function(e){
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
                $arr = error['responseText'].split('\"');
                $mess = [];
                $mess.push($arr[9]);
                for (var i = 13; i < $arr.length; i=i+4){
                    $check = true;
                    for (var j = 0; j < $mess.length; j++){
                        if($arr[i] == $mess[j]) {
                            $check = false;
                            break;
                        }
                    }
                    if($check) {
                        $mess.push($arr[i]);
                    }
                }
                for (var i = 0; i < $mess.length; i++){
                    $('#notification').append("<p>" + $mess[i] + "</p>");
                }
            }
        });
    }))
});

