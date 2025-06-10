<!DOCTYPE html>
<html>
<head>
    <title>ការគណនាតម្លៃទំនិញ</title>
</head>
<body>

<h2>បញ្ចូលចំនួនទំនិញ</h2>
<form method="post">
    B (តម្លៃ 40$): <input type="number" name="b" min="0" value="0"><br><br>
    S (តម្លៃ 20$): <input type="number" name="s" min="0" value="0"><br><br>
    P (តម្លៃ 25$): <input type="number" name="p" min="0" value="0"><br><br>
    BG (តម្លៃ 60$): <input type="number" name="bg" min="0" value="0"><br><br>
    <input type="submit" name="submit" value="គណនា">
</form>

<?php
if (isset($_POST['submit'])) {
    function calculate_total($b_qty, $s_qty, $p_qty, $bg_qty) {
        // តម្លៃនៃទំនិញនីមួយៗ
        $prices = [
            "b" => 40,
            "s" => 20,
            "p" => 25,
            "bg" => 60
        ];

        // គណនាតម្លៃសរុប
        $total = ($b_qty * $prices["b"]) + ($s_qty * $prices["s"]) + 
                 ($p_qty * $prices["p"]) + ($bg_qty * $prices["bg"]);

        // គណនាបញ្ចុះតម្លៃ
        $discount = 0;
        if ($total >= 200 && $total < 300) {
            $discount = 0.10 * $total; // 10% បញ្ចុះតម្លៃ
        } elseif ($total >= 100) {
            $discount = 0.8 * $total; // 8% បញ្ចុះតម្លៃ
        }elseif ($total >= 80) {
            $discount = 0.06 * $total; // 6% បញ្ចុះតម្លៃ
        }

        // តម្លៃចុងក្រោយ
        $final_total = $total - $discount;

        // បង្ហាញលទ្ធផល
        echo "<h3>លទ្ធផល:</h3>";
        echo "តម្លៃសរុប: $" . number_format($total, 2) . "<br>";
        echo "បញ្ចុះតម្លៃ: $" . number_format($discount, 2) . "<br>";
        echo "តម្លៃចុងក្រោយ: $" . number_format($final_total, 2) . "<br>";
    }
    

    // បញ្ចូលចំនួនទំនិញពី Form
    $b = isset($_POST['b']) ? intval($_POST['b']) : 0;
    $s = isset($_POST['s']) ? intval($_POST['s']) : 0;
    $p = isset($_POST['p']) ? intval($_POST['p']) : 0;
    $bg = isset($_POST['bg']) ? intval($_POST['bg']) : 0;

    // គណនាតម្លៃ
    calculate_total($b, $s, $p, $bg);
}
?>

</body>
</html>
