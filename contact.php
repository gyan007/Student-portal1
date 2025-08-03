<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        body{
            background-color: black;
        }
        .container{
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 250px;
            height: 200px;
            background-color: #ccc;
            border-radius: 3px;
            margin: 150px auto;
            max-width: 100%;
            padding: 20px;
            box-sizing: border-box;
          }
          p{
            padding: 10px;
          }
          h3{
            padding-left: 70px;
          }
          h1{
            text-decoration: underline;
            color: white;
            text-align: center;
            margin-top: 0;
          }
          footer{
            color: white;
            font-display: flex;
            margin-top: 20px;
            text-align: center;
          }
          button{
            background-color: red;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            margin-top: 20px;
            display: block;
            margin: 0 auto;
          }
          @media screen and (max-width: 768px) {
            .container {
                width: 100%;
                height: auto;
                margin: 50px auto;
                padding: 20px;
            }
            h1 {
                margin-top: 20px;
            }
            button {
                margin-top: 20px;
            }
          }
    </style>
</head>
<body>
    <h1>Contact us for any further information</h1>
<div class="container">
    <h3>Information</h3>
    <p>
        Name : Gyan Thakur<br>
        Contact : 7016184175<br>
        Whatsapp : 7016184175<br>
        email : gyanthakurthakur@gmail.com
    </p>
</div>
<div>
     <button onclick="window.location.href = './welcome.php';">Home Page</button>
</div>
<footer><a href="./copyright.php">copyright</a> © Gyan 2024. All rights reserved.</footer>
</body>
</html>