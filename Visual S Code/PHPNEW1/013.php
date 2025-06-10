<?php
// Function to calculate the product of the first N odd numbers recursively
function product_of_odds($n, $current = 1) {
    if ($n == 1) {
        return $current;
    }
    return $current * product_of_odds($n - 1, $current + 2);
}

// Number of odd numbers in the sequence (from the image, there are 8 terms)
$n = 8;
echo "Product of the first 8 odd numbers: " . product_of_odds($n) . "\n";
?>
