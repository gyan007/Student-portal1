<?php
$doubts_txt = $_POST['doubts'];
$conn = mysqli_connect("localhost", "root", "", "users");

$name_txt = $_POST['name'];
$username_txt = $_POST['username'];


$query = "insert into doubt(name, username, doubts)values( '$name_txt', '$username_txt', '$doubts_txt')";
$result = mysqli_query($conn, $query);
if ($result)
    echo 'Thank you for submitting your doubt. Our customer care officials will get in touch with you shortly!<br><br> <a href="./Ask_your_doubt.php">Go to Doubt page.</a> <br> <br><a href="./welcome.php">Go to Home page</a> <br> ';
else
    die ("Something terrible happened. Please try again. ");
?>
