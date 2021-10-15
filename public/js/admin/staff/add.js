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
    });
});