<?php
// Maximum number of rows
$rows = 5;

// Start the HTML table
echo "<table border='1' cellspacing='0' cellpadding='5' style='text-align: center;'>";

// Generate the pyramid
for ($i = 1; $i <= $rows; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $i; $j++) {
        echo "<td>1</td>";
    }
    echo "<tr>";
}

// End the HTML table
echo "</table>";
?>

