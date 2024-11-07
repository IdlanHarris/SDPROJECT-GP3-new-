<?php

require __DIR__ . '/../SDPROJECT-GP3-new-/vendor/autoload.php'; // Autoload dependencies
use App\Database;

session_start(); // Ensure session is started

// Debugging error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: /"); // Redirect to the login page if not logged in
    exit();
}

// Create a new instance of the Database class and establish a connection
$database = new Database();
$connection = $database->connect();

// Fetch purchase history data
$query = "SELECT product_id, product_name, quantity, total_price FROM purchase_history WHERE user_id = :user_id";
$statement = $connection->prepare($query);
$statement->bindParam(':user_id', $_SESSION['user_id']);
$statement->execute();
$purchaseHistory = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Purchase History</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="adminDashboard.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Purchase History</h2>
  
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Total Price (RM)</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody id="purchaseHistoryTableBody">
      <?php if ($purchaseHistory && count($purchaseHistory) > 0): ?>
        <?php foreach ($purchaseHistory as $purchase): ?>
          <tr>
            <td><?= htmlspecialchars($purchase['product_id']) ?></td>
            <td><?= htmlspecialchars($purchase['product_name']) ?></td>
            <td><?= htmlspecialchars($purchase['quantity']) ?></td>
            <td><?= htmlspecialchars(number_format($purchase['total_price'], 2)) ?></td>
            <td>
              <button class="btn btn-primary printRow" 
                      data-product-id="<?= htmlspecialchars($purchase['product_id']) ?>" 
                      data-product-name="<?= htmlspecialchars($purchase['product_name']) ?>" 
                      data-quantity="<?= htmlspecialchars($purchase['quantity']) ?>" 
                      data-total-price="<?= htmlspecialchars(number_format($purchase['total_price'], 2)) ?>">
                Print
              </button>
            </td>
          </tr>
        <?php endforeach; ?>
      <?php else: ?>
        <tr><td colspan="5">No purchase history available.</td></tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>

<script>
// Handle the "Print" button click for each row
$('.printRow').on('click', function () {
    const productId = $(this).data('product-id');
    const productName = $(this).data('product-name');
    const quantity = $(this).data('quantity');
    const totalPrice = $(this).data('total-price');
    
    const receiptContent = `
      <div class="container">
        <h2>Receipt</h2>
        <p><strong>Product ID:</strong> ${productId}</p>
        <p><strong>Product Name:</strong> ${productName}</p>
        <p><strong>Quantity:</strong> ${quantity}</p>
        <p><strong>Total Price:</strong> RM ${totalPrice}</p>
      </div>
    `;

    const printWindow = window.open('', '_blank', 'width=800,height=600');
    printWindow.document.write('<html><head><title>Receipt</title>');
    printWindow.document.write('<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">');
    printWindow.document.write('</head><body>');
    printWindow.document.write(receiptContent);
    printWindow.document.write('</body></html>');
    printWindow.document.close();
    printWindow.print();
});
</script>


</body>
</html>
