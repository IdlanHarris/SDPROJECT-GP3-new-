<?php
session_start();
require __DIR__ . '/../SDPROJECT-GP3-new-/vendor/autoload.php';
use App\Database;

// Establish database connection
$database = new Database();
$connection = $database->connect();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve email from session
    $email = $_SESSION['email'];
    $resetCode = trim($_POST['reset_code']);
    $newPassword = trim($_POST['new_password']);
    $confirmPassword = trim($_POST['confirm_password']);
    echo ("Data fetch: <br>");
    echo ("Email: " . $email . "<br>" . "Code: " . $resetCode . "<br>" . "Password: " . $newPassword . "<br>" ."Confirm Password: " . $confirmPassword . "<br>");

    // Check for password and confirm password
    if ($newPassword === $confirmPassword) {
        // Verify email and reset_token
        $stmt = $connection->prepare("SELECT reset_token_expiry FROM users WHERE email = ? AND reset_token = ?");
        $stmt->execute([$email, $resetCode]);
        $user = $stmt->fetch();

        if ($user && strtotime($user['reset_token_expiry']) > time()) {
            // Update password in the database
            $stmt = $connection->prepare("UPDATE users SET password = ?, reset_token = NULL, reset_token_expiry = NULL WHERE email = ?");
            $stmt->execute([$newPassword, $email]);

            echo "Password updated successfully.<br>";

            // Redirect to login page
            header("Location: Login.html");
            exit;
        } else {
            echo "Invalid or expired reset code.";
        }
    } else {
        echo "Passwords do not match.";
    }
}
?>
