<?php
// Simple PHP page with boxes and cords
$box_info = [
    'In 1: ',
    'In 2: ',
    'In 3: ',
    'In 4: ',
    'In 5: ',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boxes with Cord</title>
    <style>
        .diagram {
            position: relative;
            width: 300px;
            height: 500px;
        }
        .box {
            width: 80px;
            height: 80px;
            background-color:rgb(157, 174, 180); /* Deep sky blue */
            border: 2px solid #000;
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: bold;
            color: #000;
        }
        .cord {
            position: absolute;
            width: 2px;
            background-color: #000;
        }
        /* Positioning boxes */
        .box1 { top: 20px; left: 20px; background-color:rgb(154, 163, 165);}
        .box2 { top: 100px; left: 80px; background-color: peachpuff;}
        .box3 { top: 180px; left: 140px; background-color: azure;}
        .box4 { top: 260px; left: 200px; background-color: aquamarine;}
        .box5 { top: 340px; left: 260px; background-color: brown;}

        /* Drawing cords */
        .cord1 { top: 60px; left: 60px; height: 40px; }
        .cord2 { top: 140px; left: 120px; height: 40px; }
        .cord3 { top: 220px; left: 180px; height: 40px; }
        .cord4 { top: 300px; left: 240px; height: 40px; }
    </style>
</head>
<body>
    <div class="diagram">
        <!-- Boxes with dynamic content -->
        <div class="box box1"><?php echo $box_info[0]; ?></div>
        <div class="box box2"><?php echo $box_info[1]; ?></div>
        <div class="box box3"><?php echo $box_info[2]; ?></div>
        <div class="box box4"><?php echo $box_info[3]; ?></div>
        <div class="box box5"><?php echo $box_info[4]; ?></div>
    </div>
</body>
</html>