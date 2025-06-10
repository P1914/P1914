<?php
function calculateDonationAndRooms($income) {
    if ($income > 1000) {       
        $donation = $income * 0.10;       
        $rooms = floor($donation / 40);       
        return [
            'donation' => $donation,
            'rooms' => $rooms
        ];
    } else {
        return [
            'donation' => 0,
            'rooms' => 0
        ];
    }
}
$income = 1500; 
$result = calculateDonationAndRooms($income);
echo "Donation Amount: $" . $result['donation'] . "\n";
echo "Rooms Sponsored: 10" . $result['rooms'] . "\n";
?>
