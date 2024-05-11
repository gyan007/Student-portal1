<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Receipt</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 20px;
    }

    .receipt-container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        margin-top: 0;
    }

    .receipt-info {
        margin-bottom: 20px;
    }

    .receipt-info p {
        margin: 5px 0;
    }

    .receipt-info p strong {
        margin-right: 10px;
    }
    .receipt-info{
        margin-left: 180px;
    }
    .logo{
        margin-left: 20px;
    }
    button{
            margin-bottom: 20px;
            background-color: red;
            margin-left: 560px;
            margin-top: 30px;
        }
        .row{
            display: flex;
            flex-direction: row;
            margin-top: 100px;
        }
        .row1{
            margin-left: 30px;
        }
        .row2{
            margin-left: 200px;
        }
        .rows{
            display: flex;
            flex-direction: row;
            margin-top: 10px;
        }
        .row3{
            margin-left: 30px;
        }
        .row4{
            margin-left: 200px;
        }
        footer{
            color: white;
            font-display: flex;
            margin-top: 20px;
            margin-left: 465px;
        }

</style>
</head>
<body>
<div class="receipt-container">
<div class="logo">
    <img id="img1" src="./bharati_vidyapeeth_logo.webp" alt="logos">
</div>
    <h1>Receipt</h1>
    <div class="receipt-info">
        <p><strong>Transaction ID:</strong> <?php echo generateTransactionID(); ?></p>
        <p><strong>Date:</strong> <?php echo date("Y-m-d H:i:s"); ?></p>
        <p><strong>Student Name:</strong> <?php echo isset($_GET['studentName']) ? $_GET['studentName'] : ''; ?></p>
        <p><strong>Semester:</strong> <?php echo isset($_GET['semester']) ? $_GET['semester'] : ''; ?></p>
        <p><strong>PRN Number:</strong> <?php echo isset($_GET['prn']) ? $_GET['prn'] : ''; ?></p>
        <p><strong>Amount Paid:</strong> <?php echo isset($_GET['amount']) ? $_GET['amount'] : ''; ?></p>
    </div>
    <div class="row">
        <div class="row1">
            <img src="./signnn.jpeg" height="60" width="150">
        </div>
        <div class="row2">
            <img src="./sign2.jpeg" height="60" width="150">
        </div>
    </div>
    <div class="rows">
        <div class="row3">
            <p>Founder's signature</p>
        </div>
        <div class="row4">
            <p>Principal's signature</p>
        </div>
    </div>
</div>
<button onclick="window.location.href = './welcome.php';">Home Page</button>

<footer><a href="./copyright.php">copyright</a> © Gyan 2024. All rights reserved.</footer>


<?php
// Function to generate a random transaction ID
function generateTransactionID() {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $transactionID = '';
    for ($i = 0; $i < 10; $i++) {
        $transactionID .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $transactionID;
}
?>
</body>
</html>
