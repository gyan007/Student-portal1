<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];


    $sql = "Select * from users where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: welcome.php");

    } else {
        $showError = "Invalid Credentials";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login</title>
    <style>
        body {
            background: #E6E6FA;
            background: linear-gradient(to right, #b24592, #f15f79)
        }

        .container {
            display: grid;
            grid-template-columns: 28% 33% 25%;
            gap: 2% 4%;
            align-items: center;
            justify-content: center;
        }

        input {
            border-radius: 10px;
            border-radius: 50%;
        }

        input:hover {
            background-color: black;
            color: white;
            box-shadow: 3px 3px 3px black;
            cursor: pointer;
        }

        .container2 {
            background-color: rgba(7, 77, 44, 0.493);
            box-shadow: 10PX 5PX 10PX black;
            border: 2px solid black;
            border-radius: 17%;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }



        .collegelogo {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .marquees {
            background-color: rgba(7, 77, 44, 0.493);
            box-shadow: 10PX 5PX 10PX black;
            border: 2px solid black;
        }

        @media screen and (min-width: 1400px) {
            .container2 {
                margin-right: 20px;
            }

            .column2>marquee {
                width: 80%;
            }
        }

        @media screen and (min-width: 768px) and (max-width: 1004px) {
            .container {
                display: grid;
                grid-template-columns: 35% 50%;
                gap: 2% 4%;
                justify-content: center;
            }

            .column2>marquee {
                width: 100%;
            }

            .collegelogo {
                display: flex;
                justify-content: center;
                align-items: center;
            }

        }

        @media screen and (min-width: 1004px) and (max-width: 1399px) {
            .container3 {
                margin-left: 40px;
            }

            .column2>marquee {
                width: 100%;
            }

            .collegelogo {
                display: flex;
                justify-content: center;
                align-items: center;
            }
        }

        @media screen and (min-width: 100px) and (max-width: 767px) {
            .container {
                display: grid;
                grid-template-columns: 100%;
                gap: 2% 4%;
                justify-content: center;
            }

            .container1 {
                display: flex;
                justify-content: center;
                flex-direction: column;
                align-items: center;
            }

            .container3 {
                display: flex;
                justify-content: center;
                flex-direction: column;
                align-items: center;
            }

            .container2 {
                margin-right: 5px;
            }

            .col1 {
                display: flex;
                justify-content: center;
                flex-direction: column;
                width: 100%;
            }

            .col2 {
                display: flex;
                justify-content: center;
                flex-direction: column;
                width: 100%;
            }

            .column2>marquee {
                border: 2px solid black;
                border-radius: 30%;
                padding-left: 20px;
                padding-right: 20px;
                box-shadow: 10PX 10PX 10PX black;
                margin-top: 5px;
                justify-content: center;
                margin-left: 17px;

            }

            .collegelogo {
                display: flex;
                justify-content: center;
                align-items: center;
            }

        }

        .column2>marquee {
            border: 2px solid black;
            border-radius: 30%;
            padding-left: 20px;
            padding-right: 20px;
            box-shadow: 10PX 10PX 10PX black;
        }

        .col2 {
            font-size: 16px;
            font-weight: 400;
            color: black;
        }

        h1 {
            text-align: center;
            text-decoration: underline;
            font-size: 30px;
            height: 25px;
        }
    </style>
</head>

<body>
    <?php require 'partials/_nav.php' ?>
    <?php
    if ($login) {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
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
            <img src="./bharati_vidyapeeth_logo.webp" alt="College poster">
        </center>
    </div>
    <div>
        <h1><b>Student registration portal</b></h1>
    </div>
    <div class="marquees mt-4">
        <marquee width="100%" direction="left" height="30px" scrollamount="12">
            This is just a college project. It is not for any official use. Enter your correct login credentials here.
        </marquee>
    </div>


    <div class="container mt-4">

        <div class="container1 ">
            <div class="container1">
                <div class="col1"> <img src="./founder-img.webp" alt="Founder's image" height="300" width="250"></div>
                <div class="col2" id="name">Founder Hon'ble Dr. Patangrao Kadam</div>
            </div>
        </div>

        <div class="container2 ">
            <form action="/loginsystem/login.php" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="username" name="username" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-success">Login</button>
            </form>
        </div>

        <div class="container3 ">
            <div class="column1">
                <img src="./OIP (1).jpeg" alt="image" height="200" width="250">
            </div>
            <div class="column2">
                <marquee width="90%" direction="up" height="100px" scrollamount="3">
                    <p>To check the results of semester exam login on this portal. </p>
                    <p>Submit the fees on the office counter.</p>
                    <p>Veena ma'am is going to teach Database management system in class CEII. </p>
                </marquee>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
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