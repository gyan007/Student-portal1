<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Submit Fees</title>
  <style>
    body {
      background-color: black;
    }

    .container {
  max-width: 100%;
  margin: 0 auto; /* Add this line */
  padding: 20px;
  border: 1px solid #ccc;
  background-color: grey;
  border-radius: 10px;
  margin-top: 30px;
}
    .form-group {
      margin-bottom: 10px;
    }

    label {
      display: block;
    }

    input[type="text"],
    input[type="number"] {
      width: 100%;
      padding: 5px;
      font-size: 16px;
    }

    button {
      padding: 8px 15px;
      background-color: #007bff;
      color: #fff;
      border: none;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }

    .logo {
      text-align: center;
      margin-top: 20px;
    }

    .home {
      display: block;
      margin: 0 auto;
      margin-top: 20px;
    }

    footer {
      text-align: center;
      margin-top: 15px;
    }

    @media screen and (min-width: 768px) {
      .container {
        max-width: 400px;
      }
    }
    @media screen and (max-width: 768px) {
      .container {
        margin-left: 40px;
      }
    }
  </style>
</head>
<body>
  <div class="logo">
    <img id="img1" src="./bharati_vidyapeeth_logo.webp" alt="logos">
  </div>
  <hr>
  <div class="container">
    <h2>Submit Fees</h2>
    <form id="feesForm">
      <div class="form-group">
        <label for="studentName">Student Name:</label>
        <input type="text" id="studentName" name="studentName" required>
      </div>
      <div class="form-group">
        <label for="semester">Semester</label>
        <input type="number" id="semester" name="semester" required>
      </div>
      <div class="form-group">
        <label for="prn">PRN Number</label>
        <input type="number" id="prn" name="prn" required>
      </div>
      <div class="form-group">
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" required>
      </div>
      <div class="form-group">
        <button type="submit" id="submitButton">Submit</button>
      </div>
    </form>
    <div id="message"></div>
  </div>

  <button class="home" onclick="window.location.href = './welcome.php';">Home Page</button>

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

<script>
document.getElementById("feesForm").addEventListener("submit", function(event) {
    event.preventDefault();
    if (confirm("Are you sure you want to submit fees?")) {
        var formData = new FormData(this);

        fetch("submit_fees.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            document.getElementById("message").innerHTML = data;
            // Check if fees submitted successfully
            if (data.includes("successfully")) {
                // Get form data
                var studentName = document.getElementById("studentName").value;
                var semester = document.getElementById("semester").value;
                var prn = document.getElementById("prn").value;
                var amount = document.getElementById("amount").value;
                // Redirect to receipt page with form data as URL parameters
                window.location.href = "receipt.php?studentName=" + encodeURIComponent(studentName) + "&semester=" + encodeURIComponent(semester) + "&prn=" + encodeURIComponent(prn) + "&amount=" + encodeURIComponent(amount);
            }
        })
        .catch(error => {
            console.error("Error:", error);
        });
    }
});
</script>

</body>
</html>
