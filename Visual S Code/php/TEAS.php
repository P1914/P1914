<?php
$thb_to_khr = 116.85;  
$usd_to_khr = 4002; 
$eur_to_khr = 4194; 
$sam_thb = 200;  
$sam_usd = 50;   
$sam_eur = 200;  
$sopi_usd = 500; 
$sam_in_khr = ($sam_thb * $thb_to_khr) + ($sam_usd * $usd_to_khr) + ($sam_eur * $eur_to_khr);
$sopi_in_khr = $sopi_usd * $usd_to_khr;
echo "Sam :" . number_format($sam_in_khr) . " Khmer.";
echo "Sopi :" . number_format($sopi_in_khr) . " Khmer.";
?>
