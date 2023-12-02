$(document).ready(function() {
    $.ajax({
        type: 'GET',
        url: '../php/profile/profile.php',
        success: function(response) {
            console.log(response);
            // Display user profile details on the dashboard
            $('#profileContent').html(response);
        },
        error: function(error) {
            console.error("Error fetching profile: " + error);
        }
    });
});
