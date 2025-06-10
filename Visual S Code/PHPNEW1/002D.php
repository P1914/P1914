<?php
$array = [25, -2, 14, 51, 33, 55, 96, -12, 43, 68, -1, 108];

// Odd numbers and divisible by 3
echo "Odd Numbers: " . implode(", ", array_filter($array, fn($num) => $num % 2 !== 0)) . "<br>";
echo "Divisible by 3: " . implode(", ", array_filter($array, fn($num) => $num % 3 === 0)) . "<br>";

// Sum of odd numbers
echo "Sum of Odd Numbers: " . array_sum(array_filter($array, fn($num) => $num % 2 !== 0)) . "<br>";

// Table
echo "<table border='1' cellpadding='5'>";
foreach ([[108], [-1, 68], [43, -12, 96], [55, 33, 51, 14], [-2, 25, 0, 0, 0]] as $row) {
    echo "<tr><td>" . implode("</td><td>", $row) . "</td></tr>";
}
echo "</table>";
?>