<?php
// Given array
$B = [2, -7, 9, 22, -27, -36, 11, 51];

// 1. Find even numbers
$evenNumbers = array_filter($B, function($num) {
    return $num % 2 == 0;
});
echo "លេខគូ : " . implode(", ", $evenNumbers) . PHP_EOL;

// 2. Count of even numbers
$evenCount = count($evenNumbers);
echo "ចំនួនលេខគូ: $evenCount" . PHP_EOL;

// 3. Find elements divisible by 3
$divisibleByThree = array_filter($B, function($num) {
    return $num % 3 == 0;
});
echo "លេខបែងចែកនិង 3: " . implode(", ", $divisibleByThree) . PHP_EOL;

// 4. Take odd numbers into a table
$oddNumbers = array_filter($B, function($num) {
    return $num % 2 != 0;
});
echo "តារាងលេខសេស​ :" . PHP_EOL;
foreach ($oddNumbers as $odd) {
    echo "| $odd |" . PHP_EOL;
}
?>