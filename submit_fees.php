
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$studentName = $_POST['studentName'];
$semester = $_POST['semester']; 
$prn = $_POST['prn'];
$amount = $_POST['amount'];

$sql = "INSERT INTO fees (student_name, semester, prn, amount) VALUES ('$studentName', '$semester', '$prn', '$amount')";

if ($conn->query($sql) === TRUE) {
    echo "Fees submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
