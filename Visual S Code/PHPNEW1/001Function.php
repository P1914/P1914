<!DOCTYPE html>
<html lang="en">
<head>
    <title>House</title>
</head>
<body>

<form method="post" action="#">
    ផ្ទះជាន់ទី: <input type="text" name="n" min="2" max="8" required>
    <input type="submit" name="submit" value="Show">
</form>

<?php
function home($floor, $prices) {
    if ($floor < 2 || $floor > 8) {
        return "Please enter a floor number between 2 and 8.";//សូមបញ្ចូលលេខជាន់រវាង
    } else {
        return "<h2>ផ្ទះជាន់ទី​$floor  តម្លៃ $prices[$floor]$ ក្នុង 1​ ខែ​ "."</h2>";
    }
}
$housePrices = [
    2 => 150,
    3 => 150,
    4 => 150,
    5 => 200,
    6 => 250,
    7 => 280,
    8 => 300,
];


if (isset($_POST["n"])) {
    $H = intval($_POST["n"]); 
    echo home($H, $housePrices); 
} else {
    echo "Please input value of N!!!";
}
?>

</body>
</html>