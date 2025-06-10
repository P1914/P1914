<?php
// Part a: Print numbers from 1 to N
function printNumbers($N) {
    echo "<h3>1</h3>";
    echo "<h3>a.  N=$N</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'><tr>";
    for ($i = 1; $i <= $N; $i++) {
        echo "<td>$i</td>";
    }
    echo "</tr></table>";
}

// Part b: Print triangle pattern with letter 'A'
function printTriangle($N) {
    echo "<h3> b.  N=$N</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    for ($i = 1; $i <= $N; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $i; $j++) {
            echo "<td>A</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
// Part

// Example usage
echo "<!DOCTYPE html><html><body>";
printNumbers(7); // Replace 7 with any number for Part A
printTriangle(5); // Replace 5 with any number for Part B
echo "</body></html>";

$k = array(25, -2, 14, 51, 33, 55, 96, -12, 43, 68, -1, 108);
$len = count($k);

$sumOdd = 0;
for ($i = 0; $i < $len; $i++) {
    if ($k[$i] % 2 != 0) {
        $sumOdd += $k[$i];
    }
}
echo "<h3>Sum of Odd Numbers in Array: $sumOdd</h3>";

echo "<h3>Numbers Divisible by 3 in Array</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'><tr>";
for ($i = 0; $i < $len; $i++) {
    if ($k[$i] % 3 == 0) {
        echo "<td>{$k[$i]}</td>";
    }
}
echo "</tr></table>";

echo "<h3>Odd Numbers in Array</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'><tr>";
for ($i = 0; $i < $len; $i++) {
    if ($k[$i] % 2 != 0) {
        echo "<td>{$k[$i]}</td>";
    }
}
echo "</tr></table>";
?>