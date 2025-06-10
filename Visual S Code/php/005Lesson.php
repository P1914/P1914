<?php
// Number of rows for the pyramid
$rows = 5;

echo "<table cellspacing='0' cellpadding='5' style='border-collapse: collapse;'>";

// Generate the pyramid
for ($i = 1; $i <= $rows; $i++) {
    echo "<tr>";

    // Print empty cells to align numbers
    for ($j = 1; $j <= $rows - $i; $j++) {
        echo "<td></td>";
    }

    // Print the numbers with borders
    for ($j = 1; $j <= $i * 2 - 1; $j++) {
        echo "<td style='border: 1px solid black; text-align: center;'>1</td>";
    }

    echo "</tr>";
}

echo "</table>";
?>