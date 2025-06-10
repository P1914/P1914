<?php
// Define the set B
$B = [25, -2, 14, 51, 33, 55, 96, -12, 43, 68, -1, 108];

// Filter odd numbers and sum them
$odd_sum = array_sum(array_filter($B, function($num) {
    return $num % 2 != 0; // Check if the number is odd
}));

// Output the result
echo "ចំនូនសេសបូកចូលគ្នា: " . $odd_sum;
?>