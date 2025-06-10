<?php
// Function to calculate the sum of an arithmetic sequence recursively
function sum_arithmetic($n, $start = 5, $diff = 5) {
    if ($n == 1) {
        return $start;
    }
    return $start + sum_arithmetic($n - 1, $start + $diff, $diff);
}

// Number of terms in the series (from the image, there are 9 terms)
$n = 9;
echo "Sum of the arithmetic series: " . sum_arithmetic($n) . "\n";
?>
