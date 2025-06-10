<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        input {
            margin: 5px;
            padding: 5px;
        }
        button {
            padding: 8px 15px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h2>Discount Calculator</h2>

    <label for="price1">Price 1:</label>
    <input type="number" id="price1"><br>

    <label for="price2">Price 2:</label>
    <input type="number" id="price2"><br>

    <label for="price3">Price 3:</label>
    <input type="number" id="price3"><br>

    <label for="price4">Price 4:</label>
    <input type="number" id="price4"><br>

    <label for="price5">Price 5:</label>
    <input type="number" id="price5"><br>

    <button onclick="calculateTotal()">Pay</button>

    <h3>Final Price after 5% Discount: <span id="result">?</span></h3>

    <script>
        function calculateTotal() {
            let price1 = parseFloat(document.getElementById("price1").value) || 0;
            let price2 = parseFloat(document.getElementById("price2").value) || 0;
            let price3 = parseFloat(document.getElementById("price3").value) || 0;
            let price4 = parseFloat(document.getElementById("price4").value) || 0;
            let price5 = parseFloat(document.getElementById("price5").value) || 0;

            let total = price1 + price2 + price3 + price4 + price5;
            let discount = total * 0.05;
            let finalPrice = total - discount;

            document.getElementById("result").innerText = finalPrice.toFixed(2);
        }
    </script>

</body>
</html>
