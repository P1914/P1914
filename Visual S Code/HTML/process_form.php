<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Get form data and sanitize it
    $name = htmlspecialchars($_GET['name']);
    $sex = htmlspecialchars($_GET['sex']);
    $dob = htmlspecialchars($_GET['dob']);
    $pob = htmlspecialchars($_GET['pob']);
    $skill = htmlspecialchars($_GET['skill']);
    $interest = htmlspecialchars($_GET['interest']);
    $hobby = htmlspecialchars($_GET['hobby']);

    // Display the submitted information
    echo "<h2>Submitted Information</h2>";
    echo "Name: " . $name . "<br>";
    echo "Sex: " . $sex . "<br>";
    echo "Date of Birth: " . $dob . "<br>";
    echo "Place of Birth: " . $pob . "<br>";
    echo "Skill: " . $skill . "<br>";
    echo "Interest: " . $interest . "<br>";
    echo "Hobby: " . $hobby . "<br>";
}
else {
    echo "No form data submitted!";
}
?>