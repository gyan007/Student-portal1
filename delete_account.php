<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}

// Check if the delete button is clicked
if (isset($_POST['delete'])) {
    // Establish database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "users";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve logged in user's information (You should implement session management)
    $username = $_SESSION['username'];

    // SQL to delete user account
    $sql = "DELETE FROM users WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        // Unset all session variables
        $_SESSION = array();

        // Destroy the session
        session_destroy();

        echo "Account deleted successfully";
        // Redirect to login page
        header("Location: login.php");
        exit();
    } else {
        echo "Error deleting account: " . $conn->error;
    }

    $conn->close();
}
?>
