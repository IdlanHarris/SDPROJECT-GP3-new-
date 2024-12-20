<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If not logged in, redirect to the login page
    header("Location: /");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="./css/profile.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="profile-container">
        <div class="profile-header">
            <h1>View Profile</h1>
            <hr>
        </div>
        
        <div class="text-center">
            <img id="view-image" src="../img/Default pfp.png" alt="Profile Image" width="150px" class="profile-image"><br>
        </div>

        <div class="mb-3">
            <label class="form-label"><strong>Username:</strong></label>
            <p id="view-username">Loading...</p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Email:</strong></label>
            <p id="view-email">Loading...</p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Phone Number:</strong></label>
            <p id="view-phoneNumber">Loading...</p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Membership Status:</strong></label>
            <p id="view-status">Loading...</p>
        </div>
        <a href="editProfile.html"><button class="btn btn-secondary btn-custom">Edit Profile</button></a>
        <a href="changePass.html"><button class="btn btn-primary btn-custom mt-3">Change Password</button></a>
        <a href="purchase-history.php"><button class="btn btn-primary btn-custom mt-3">Purchase History</button></a>
        <a href="workout-history.php"><button class="btn btn-primary btn-custom mt-3">Workout History</button></a>
        <button class="btn btn-primary btn-custom mt-3" id="home-button">Home</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // Fetch profile data from server-side script
            $.ajax({
                url: 'FetchProfile.php',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    if (data.error) {
                        $('#view-username').text('N/A');
                        $('#view-email').text('N/A');
                        $('#view-phoneNumber').text('N/A');
                        $('#view-status').text('N/A');
                        $('#view-image').attr('src', 'img/Default pfp.png');
                    } else {
                        $('#view-username').text(data.username);
                        $('#view-email').text(data.email);
                        $('#view-phoneNumber').text(data.phone_number);
                        $('#view-status').text(data.membership);
                        $('#view-image').attr('src', data.profile_image ? '../' + data.profile_image : 'img/Default pfp.png');

                        // Set user_id in the home button for redirection
                        $('#home-button').data('user-id', data.user_id);
                    }
                },
                error: function() {
                    $('#view-username').text('Error loading data');
                    $('#view-email').text('Error loading data');
                    $('#view-phoneNumber').text('Error loading data');
                    $('#view-image').attr('src', 'img/Default pfp.png');
                }
            });

            // Redirect based on user_id prefix when clicking Home button
            $('#home-button').on('click', function() {
                const userId = $(this).data('user-id');
                if (userId) {
                    const prefix = userId.charAt(0);
                    switch (prefix) {
                        case 'A':
                            window.location.href = 'adminDashboard.php';
                            break;
                        case 'S':
                            window.location.href = 'staffDashboard.php';
                            break;
                        case 'M':
                            window.location.href = 'member-homepage.php';
                            break;
                        default:
                            alert('Role not recognized');
                    }
                } else {
                    alert('User ID not found.');
                }
            });
        });
    </script>
</body>
</html>
