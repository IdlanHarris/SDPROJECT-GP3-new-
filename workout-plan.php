<?php
session_start(); // Ensure session is started
require __DIR__ . '/../SDPROJECT-GP3-new-/vendor/autoload.php'; // Autoload dependencies
use App\Database;

// Debugging error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Create a new instance of the Database class and establish a connection
$database = new Database();
$connection = $database->connect(); // Get the connection from the Database class

if (!isset($_SESSION['user_id'])) {
    die("You must be logged in to book a workout.");
}

$user_id = $_SESSION['user_id']; // Get user_id from session
$workout_name = $_POST['workout_name']; // Get workout name from POST

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['booking_date'])) {
        $booking_date = $_POST['booking_date'];

        try {
            // Check if user_id exists and is valid
            if (empty($user_id)) {
                echo json_encode(['success' => false, 'message' => 'User not logged in']);
                exit;
            }

            $stmt = $connection->prepare("INSERT INTO workoutplan_history (user_id, class, class_date) VALUES (?, ?, ?)");
            $result = $stmt->execute([$user_id, $workout_name, $booking_date]);

            echo "Your booking for {$workout_name} on {$booking_date} has been confirmed!";

            if ($result) {
                echo json_encode(['success' => true, 'message' => 'Class added to history']);
                header("Location:member-homepage.php");
            } else {
                // Log the detailed error information if query fails
                $errorInfo = $stmt->errorInfo(); // Get error details from the PDO statement
                echo json_encode(['success' => false, 'message' => 'Query execution failed', 'error' => $errorInfo]);
            }
        } catch (PDOException $e) {
            // Log the error message if a database exception occurs
            echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
        }
    } else {
        // Handle the case where required data is missing
        echo json_encode(['success' => false, 'message' => 'Missing booking date']);
    }
} else {
    // Handle invalid request method
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>
