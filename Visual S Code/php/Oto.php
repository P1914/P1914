<?php
function calculateIncome($rentedRooms) {
    if (!is_int($rentedRooms) || $rentedRooms < 0) {
        return [
            'monthlyIncome' => 0,
            'donation' => 0,
            'netIncome' => 0,
            'error' => 'Invalid number of rented rooms.'
        ];
    }
    $roomPrice = 40;
    $monthlyIncome = $rentedRooms * $roomPrice;    
    $donation = 0; 
    if ($monthlyIncome > 1000) {
        $donation = $monthlyIncome * 0.10; 
    }
    return [
        'monthlyIncome' => $monthlyIncome,
        'donation' => $donation,
        'netIncome' => $monthlyIncome - $donation,
        'error' => null
    ];
}
$rentedRooms = 30;
$result = calculateIncome($rentedRooms);
if ($result['error']) {
    echo $result['error'] . "\n";
} else {
    echo "Rented Rooms: " . $rentedRooms . "\n";
    echo "Monthly Income: $" . number_format($result['monthlyIncome'], 2) . "\n";
    echo "Donation (if applicable): $" . number_format($result['donation'], 2) . "\n";
    echo "Net Income after Donation: $" . number_format($result['netIncome'], 2) . "\n";
}
?>