$(document).ready(function () {
    $("#login").click(function () {
        var username = $('#username').val();
        var pass = $('#password').val();

        $.ajax({
            url: "../login_query.php",
            type: 'POST',
            data: {
                username: username,
                password: pass
            },
            success: function (res) {
                if (res == 'success') {
                    location.assign("../home.php");
                } else {
                    $('.err_msg').html(res);
                }
            }
        });
    });
});