<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Get the form data and sanitize it
    $name = htmlspecialchars($_GET['name']);
    $description = htmlspecialchars($_GET['description']);
    $quantity = (int)$_GET['quantity'];
    $price = (float)$_GET['price'];

    // Calculate the total price
    $total = $quantity * $price;

    // Display the invoice details
    echo "<h2>Invoice Details</h2>";
    echo "Name: " . $name . "<br>";
    echo "Description: " . $description . "<br>";
    echo "Quantity: " . $quantity . "<br>";
    echo "Price per unit: $" . number_format($price, 2) . "<br>";
    echo "Total Price: $" . number_format($total, 2) . "<br>";
}
else {
    echo "No form data submitted!";
}
?>