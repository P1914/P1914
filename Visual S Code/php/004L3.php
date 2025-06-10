<?php
// Check if a number was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the number from the form input
    $startNumber = intval($_POST['startNumber']); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
    <h1>Multiplication Table Generator</h1>
    
    <!-- Form to enter the starting number -->
    <form method="post" action="">
        <label for="startNumber">Enter a number:</label>
        <input type="number" id="startNumber" name="startNumber" required>
        <button type="submit">Generate Table</button>
    </form>

    <?php if (isset($startNumber)) { ?>
        <h2>Multiplication Table for <?php echo $startNumber; ?></h2>
        <p>
            <?php
            // Generate the multiplication table
            for ($i = 1; $i <= 10; $i++) {
                $result = $startNumber * $i;
                echo "{$startNumber} x {$i} = {$result}";
                
                // Add a comma after each result except the last
                if ($i < 10) {
                    echo ", ";
                }
            }
            ?>
        </p>
    <?php } ?>
</body>
</html>
