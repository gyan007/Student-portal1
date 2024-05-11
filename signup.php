<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_dbconnect.php';
    $name = $_POST["name"]; // Add this line to get the name
    $mobile = $_POST["mobile"];
    $address = $_POST["address"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $exists = false;
    if (($password == $cpassword) && $exists == false) {
        $sql = "INSERT INTO `users` ( `name`, `mobile`, `address`, `username`, `password`, `dt`) VALUES ( '$name', '$mobile', '$address', '$username', '$password', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $showAlert = true;
        }
    } else {
        $showError = "Passwords do not match";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SignUp</title>
    <style>
        body {
    background-color: black; /* Change background color to white */
    color: #000; /* Change text color to black */
    font-family: Arial, sans-serif; /* Use a common sans-serif font */
}

.container {
    background: grey; /* Light gray background for the form container */
    width: 480px;
    padding: 50px; /* Adjust padding */
    margin: 50px auto; /* Center the form horizontally */
    border-radius: 10px; /* Add border radius */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add shadow for depth */
}

.box {
    margin-bottom: 20px; /* Add space between form elements */
}

.box label {
    font-weight: bold; /* Make labels bold */
}

.box input[type="text"],
.box input[type="password"],
.box textarea {
    width: 100%; /* Make input fields and textareas full width */
    padding: 10px; /* Adjust padding */
    border: 1px solid #ccc; /* Add border */
    border-radius: 5px; /* Add border radius */
    box-sizing: border-box; /* Include padding and border in element's total width */
}

.box textarea {
    resize: vertical; /* Allow vertical resizing for textareas */
}

.box small {
    display: block; /* Ensure small text appears below input fields */
    margin-top: 5px; /* Add space between input field and small text */
    color: #666; /* Dim small text */
}

.submit {
    width: 100%; /* Make the submit button full width */
    padding: 10px; /* Adjust padding */
    background-color: #007bff; /* Change button background color */
    color: #fff; /* Change button text color */
    border: none; /* Remove border */
    border-radius: 5px; /* Add border radius */
    cursor: pointer; /* Add pointer cursor */
}

.submit:hover {
    background-color: #0056b3; /* Darken button background color on hover */
}

.box input[type="text"]:hover,
.box input[type="password"]:hover,
.box textarea:hover {
    background-color: #f0f0f0; /* Change background color on hover */
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); /* Add box shadow on hover */
    transition: background-color 0.3s, box-shadow 0.3s; /* Add transition effect */
}

.submit:hover {
    background-color: #0056b3; /* Darken button background color on hover */
    transition: background-color 0.3s; /* Add transition effect */
}

footer {
    text-align: center; /* Center align footer text */
    margin-top: 20px; /* Add space above footer */
}

    </style>
</head>

<body>
    <?php require 'partials/_nav.php' ?>
    <?php
    if ($showAlert) {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if ($showError) {
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $showError . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>
    <div class="collegelogo">
        <center>
            <img src="./bharati_vidyapeeth_logo.webp" alt="College poster" height="120" width="600">
        </center>
    </div>
    <div class="container">
        <h1 class="text-center">Enter your details</h1>
        <form action="/loginsystem/signup.php" method="post">
            <div class="box">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
                <small id="nameHelp" class="form-text text-muted">Enter your name</small>
            </div>

            <div class="box">
                <label for="mobile">Mobile Number</label>
                <input type="text" class="form-control" id="mobile" name="mobile" aria-describedby="mobileHelp">
                <small id="mobileHelp" class="form-text text-muted">Enter your mobile number</small>
            </div>
            
            <div class="box">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                <small id="addressHelp" class="form-text text-muted">Enter your address</small>
            </div>
            
            <div class="box">
                <label for="username">Username</label>
                <input type="email" class="form-control" id="username" name="username" aria-describedby="emailHelp">
                <small id="emaileHelp" class="form-text text-muted">Enter your Username</small>
            </div>
            
            <div class="box">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                <small id="emaileHelp" class="form-text text-muted">Enter your Password</small>
            </div>
            
            <div class="box">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
                <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
            </div>
            
            <button type="submit" class="btn btn-primary">SignUp</button>
        </form>
    </div>


    <footer><a href="./copyright.php">copyright</a> © Gyan 2024. All rights reserved.</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>