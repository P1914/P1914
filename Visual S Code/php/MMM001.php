<?php
// Array of numbers to display
$numbers = [5, 4, 3, 2, 1];

// Start HTML table
echo "<table border='1' style='text-align: center;'>";

// Loop through numbers and create rows
foreach ($numbers as $number) {
    echo "<tr><td>$number</td></tr>";
}

// Close HTML table
echo "</table>";
?>
