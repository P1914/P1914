<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>បង្ហាញតារាងគុណ</title>
    <script>
        function startMultiplication() {
            var number = document.getElementById("number").value;
            if (number == "") {
                alert("សូមបញ្ចូលលេខដែលអ្នកចង់បង្ហាញតារាងគុណ!");
            } else {
                generateTable(number);
            }
        }

        function generateTable(number) {
            let tableContent = "";
            for (let i = 1; i <= 10; i++) {
                tableContent += number + " × " + i + " = " + (number * i) + "<br>";
            }
            document.getElementById("result").innerHTML = tableContent;
        }
    </script>
</head>
<body>
    <h2>បញ្ចូលលេខដើម្បីបង្ហាញតារាងគុណ</h2>
    
    <!-- Input field to enter a number -->
    <input type="number" id="number" placeholder="បញ្ចូលលេខ">

    <!-- Start button to trigger multiplication -->
    <button onclick="startMultiplication()">Start</button>

    <div id="result">
        <!-- The multiplication table will be displayed here -->
    </div>
</body>
</html>
