$(document).ready(function() {
    $('#registerForm').submit(function(e) {
        e.preventDefault();

        var username = $('#username').val();
        var password = $('#password').val();

        $.ajax({
            type: 'POST',
            url: '../php/register/register.php',
            data: { username: username, password: password },
            success: function(response) {
                console.log(response);
                // You can redirect or show a success message to the user
            },
            error: function(error) {
                console.error("Error during registration: " + error);
            }
        });
    });
});
