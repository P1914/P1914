<?php
// Maximum number of rows
$rows = 5;

// Start the HTML table
echo "<table>";

// Generate the pyramid
for ($i = 1; $i <= $rows; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $i; $j++) {
        echo "<td>*&*</td>";
    }
    echo "<tr>";
}

// End the HTML table
echo "</table>";
?>
