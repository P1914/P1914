<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khmer Multiplication Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }
        .multiplier {
            cursor: pointer;
            color: blue;
            text-decoration: underline;
        }
    </style>
    <script>
        function showDetails(multiplier, result) {
            alert(`៣ × ${multiplier} = ${result}`);
        }
    </script>
</head>
<body>
    <h1>Multiplication Table for 3 (in Khmer Numerals)</h1>
    <table border="1" style="margin: 0 auto; border-collapse: collapse;">
        <thead>
            <tr>
                <th>Multiplier</th>
                <th>Result</th>
            </tr>
        </thead>
        <tbody>
            <?php
            function convertToKhmerNumerals($number) {
                // Define the Khmer numeral equivalents
                $khmerNumerals = ['០', '១', '២', '៣', '៤', '៥', '៦', '៧', '៨', '៩'];
                
                // Convert the number to a string and replace each digit with its Khmer equivalent
                $numberStr = strval($number);
                $khmerStr = '';
                for ($i = 0; $i < strlen($numberStr); $i++) {
                    $digit = $numberStr[$i];
                    if (is_numeric($digit)) {
                        $khmerStr .= $khmerNumerals[$digit];
                    } else {
                        $khmerStr .= $digit; // Preserve non-numeric characters
                    }
                }
                return $khmerStr;
            }

            for ($i = 1; $i <= 10; $i++) {
                $result = 3 * $i;
                $khmerI = convertToKhmerNumerals($i);
                $khmerResult = convertToKhmerNumerals($result);
                echo "<tr>
                        <td><span class='multiplier' onclick=\"showDetails('$khmerI', '$khmerResult')\">៣ × $khmerI</span></td>
                        <td>$khmerResult</td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
