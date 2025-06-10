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

// Example usage
echo "<!DOCTYPE html><html><body>";
printNumbers(7); // Replace 7 with any number for Part A
printTriangle(5); // Replace 5 with any number for Part B
echo "</body></html>";
?>