<?php
// Retrieve form data
$invoiceNum = $_POST['invoiceNum'];
$description = $_POST['description'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

// Calculate total cost
$total = $quantity * $price;

// Output A - Invoice Details
echo "<h2>Invoice Details</h2>";
echo "<p>N: " . htmlspecialchars($invoiceNum) . "</p>";
echo "<p>Description: " . htmlspecialchars($description) . "</p>";
echo "<p>Quantity: " . $quantity . "</p>";
echo "<p>Price: $" . number_format($price, 2) . "</p>";
echo "<p>Total: $" . number_format($total, 2) . "</p>";

// Output B - Table
echo "<h2>Invoice Table</h2>";
echo "<table border='1' cellspacing='0' cellpadding='10'>";
echo "<tr>
        <th>N</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Total</th>
      </tr>";
echo "<tr>
        <td>" . htmlspecialchars($invoiceNum) . "</td>
        <td>" . htmlspecialchars($description) . "</td>
        <td>" . $quantity . "</td>
        <td>$" . number_format($price, 2) . "</td>
        <td>$" . number_format($total, 2) . "</td>
      </tr>";
echo "</table>";
?>
