<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum Calculator</title>
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

    <h2>Sum Calculator</h2>

    <label for="num1">N:</label>
    <input type="number" id="num1"><br>

    <label for="num2">b:</label>
    <input type="number" id="num2"><br>

    <label for="num3">C:</label>
    <input type="number" id="num3"><br>

    <button onclick="calculateSum()">Calculate</button>

    <h3>Output: <span id="result">?</span></h3>

    <script>
        function calculateSum() {
            let num1 = parseFloat(document.getElementById("num1").value) || 0;
            let num2 = parseFloat(document.getElementById("num2").value) || 0;
            let num3 = parseFloat(document.getElementById("num3").value) || 0;
            let sum = num1 + num2 + num3;
            document.getElementById("result").innerText = sum;
        }
    </script>

</body>
</html>
