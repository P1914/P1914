<?php
// Function to calculate factorial recursively
function factorial($n) {
    if ($n == 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

// Calculate factorial of 5 (from the image)
$n = 5;
echo "Factorial of 5: " . factorial($n) . "\n";
?>
