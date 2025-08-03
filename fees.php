<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engineering College Courses and Fees</title>
    <style>
body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
  padding: 20px;
}

table {
  width: 100%;
  margin: 20px auto;
  border-collapse: collapse;
}

th,
td {
  border: 1px solid #dddddd;
  padding: 8px;
  text-align: left;
}

th {
  background-color: #f2f2f2;
}

button {
  display: block;
  margin: 0 auto;
  background-color: red;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  margin-bottom: 20px;
}

footer {
  color: white;
  font-display: flex;
  margin-top: 20px;
  text-align: center;
}

@media screen and (min-width: 768px) {
  table {
    width: 75%;
  }

  button {
    margin: 0 auto;
  }
}

@media screen and (min-width: 992px) {
  table {
    width: 50%;
  }

  button {
    margin: 0 auto;
  }
}

@media screen and (min-width: 1200px) {
  table {
    width: 50%;
  }

  button {
    margin: 0 auto;
  }
}
    </style>
</head>
<body>
    <h1>Engineering College Courses and Fees</h1>
    <table>
        <thead>
            <tr>
                <th>Course</th>
                <th>Fees (per year)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Computer Engineering</td>
                <td>Rs. 11,000</td>
            </tr>
            <tr>
                <td>Computer Science</td>
                <td>Rs. 10,000</td>
            </tr>
            <tr>
                <td>Electrical Engineering</td>
                <td>Rs. 9,500</td>
            </tr>
            <tr>
                <td>Electronics and Tele-communication Engineering</td>
                <td>Rs. 9,800</td>
            </tr>
            <tr>
                <td>Robotics</td>
                <td>Rs. 9,700</td>
            </tr>
            <!-- Add more rows for other courses as needed -->
        </tbody>
    </table>



<br>

    <h1>Engineering College Professor's salary</h1>
    
        <table>
            <thead>
                <tr>
                    <th>Department</th>
                    <th>Salary (per year)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Computer Engineering</td>
                    <td>Rs. 125,000</td>
                </tr>
                <tr>
                    <td>Computer Science</td>
                    <td>Rs. 110,000</td>
                </tr>
                <tr>
                    <td>Electrical Engineering</td>
                    <td>Rs. 90,500</td>
                </tr>
                <tr>
                    <td>Electronics and Tele-communication Engineering</td>
                    <td>Rs. 50,800</td>
                </tr>
                <tr>
                    <td>Robotics</td>
                    <td>Rs. 40,700</td>
                </tr>
                <!-- Add more rows for other courses as needed -->
            </tbody>
        </table>

        <button onclick="window.location.href = './submit_fee.php';">Submit Fees</button>
    

    <button onclick="window.location.href = './welcome.php';">Home Page</button>

    <footer><a href="./copyright.php">copyright</a> © Gyan 2024. All rights reserved.</footer>
</body>
</html>
