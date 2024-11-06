<?php

require __DIR__ . '/../SDPROJECT-GP3-new-/vendor/autoload.php'; // Autoload dependencies
use App\Database;

session_start(); // Ensure session is started

// Debugging error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Create a new instance of the Database class and establish a connection
$database = new Database();
$connection = $database->connect();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the user is logged in and if necessary data is available
    if (isset($_SESSION['user_id'], $_POST['class'], $_POST['date'])) {
        // Retrieve the user_id from the session
        $user_id = $_SESSION['user_id']; // User ID is stored in session
        $class = $_POST['class'];
        $date = $_POST['date'];

        // Sanitize inputs to prevent SQL injection
        $class = htmlspecialchars($class);
        $date = htmlspecialchars($date);

        // Check if user_id exists and is valid
        if (empty($user_id)) {
            echo json_encode(['success' => false, 'message' => 'User not logged in']);
            exit;
        }

        try {
            // Create an instance of the Database class
            $db = new Database();
            // Get the PDO connection from the Database class
            $pdo = $db->connect();

            // Prepare the SQL query to insert booking data
            $stmt = $pdo->prepare("INSERT INTO workoutPlan (user_id, class, date) VALUES (:user_id, :class, :date)");
            $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT); // Bind user_id as INT
            $stmt->bindParam(':class', $class, PDO::PARAM_STR);     // Bind class as TEXT
            $stmt->bindParam(':date', $date, PDO::PARAM_STR);       // Bind date as TEXT

            // Enable detailed error reporting
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Execute the query
            if ($stmt->execute()) {
                echo json_encode(['success' => true, 'message' => 'Booking successful']);
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
        echo json_encode(['success' => false, 'message' => 'Missing required data']);
    }
} else {
    // Handle invalid request method
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>
