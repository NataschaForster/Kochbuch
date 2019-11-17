$(document).ready(function(){
    $('#username').keyup(function() {
        var username = $(this).val();
        $.ajax({
            url: "server.php",
            method:"POST",
            data:{user_name:username},
            dataType:"text",
            success:function(html) {
                $('#availability').html(html);
            }
        })
    })
});