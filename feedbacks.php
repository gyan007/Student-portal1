<?php
$q_score = $_POST['quality'];
$feedback_txt = $_POST['suggestion'];
$conn = mysqli_connect("localhost", "root", "", "users");

$name_txt = $_POST['name'];
$username_txt = $_POST['username'];


$query = "insert into feedback(name, username, feedback)values( '$name_txt', '$username_txt', '$feedback_txt')";
$result = mysqli_query($conn, $query);
if ($result)
    echo 'Thank you for your feedback. We appreciate!<br><br> <a href="./feedback.php">Go to feedback page.</a> <br> <br><a href="./welcome.php">Go to Home page</a> <br> ';
else
    die ("Something terrible happened. Please try again. ");
?>
