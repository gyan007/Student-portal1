    <?php
    session_start();
    include 'partials/_dbconnect.php';

    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        header("location: login.php");
        exit;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $mobile = $_POST["mobile"];
        $address = $_POST["address"];
        $username = $_SESSION["username"]; // Use the username from session
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];

        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        $numRows = mysqli_num_rows($result);

        if ($numRows == 1) {
            $row = mysqli_fetch_assoc($result);
            if ($password == $cpassword) {
                $sql = "UPDATE users SET name='$name', mobile='$mobile', address='$address', password='$password' WHERE username='$username'";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    $showAlert = true;
                } else {
                    $showError = "Error updating record: " . mysqli_error($conn);
                }
            } else {
                $showError = "Passwords do not match";
            }
        } else {
            $showError = "User not found";
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body {
            color: rgb(217, 213, 206);
            background-color: rgb(14, 16, 17);
        }

        footer {
            color: white;
            font-display: flex;
            margin-left: 0px;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .container {
            width: 30%;
            border: 5px solid white;
            border-radius: 40px;
            padding: 15px;
            display: flex;
            flex-direction: column;
        }

        .btn-home-page {
            margin-top: 10px;
            width: 130px;
            align-self: center;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }

        @media (max-width: 576px) {
            .container {
                width: 100%;
                margin-left: 0px;
                margin-right: 0px;
            }
        }
    </style>
</head>

<body>
    <?php require 'partials/_nav.php' ?>
    <div class="container mt-4">
        <h2 class="mb-4">Update Profile</h2>
        <?php
        if (isset($showAlert) && $showAlert) {
            echo '<div class="alert alert-success" role="alert">Profile updated successfully</div>';
        }
        if (isset($showError) && $showError) {
            echo '<div class="alert alert-danger" role="alert">' . $showError . '</div>';
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input type="text" class="form-control" id="mobile" name="mobile" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
        <button onclick="window.location.href = './welcome.php';" class="mt-3 btn btn-primary btn-block btn-home-page">Home Page</button>
        <footer class="mt-5 text-center"><a href="./copyright.php">copyright</a> © Gyan 2024. All rights reserved.</footer>
    </body>
    </html>