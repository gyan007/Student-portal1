<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: 'Open Sans', sans-serif;
  color: #333;
  font-size: 14px;
  background-color: black;
  padding: 10px;
}

.form_box {
  width: 100%;
  max-width: 500px;
  padding: 10px;
  background-color: white;
  margin: 0 auto;
  margin-top: 20px;
  border-radius: 20%;
  background-color: grey;
}

input {
  padding: 5px;
  margin-bottom: 5px;
  width: 100%;
}

input[type="submit"] {
  border: none;
  outline: none;
  background-color: #679f1b;
  color: black;
  margin-right: 30px;
  margin-left: 150px;
  margin-top: 10px;
  display: block;
  margin: 0 auto;
}

.heading {
  background-color: blue;
  color: white;
  height: 40px;
  width: 100%;
  line-height: 40px;
  text-align: center;
}

.shadow {
  box-shadow: 0px 0px 17px 1px rgba(0, 0, 0, 0.43);
}

.pic {
  text-align: left;
  width: 33%;
  float: left;
}

footer {
  margin-top: 10px;
  text-align: center;
}

button {
  margin-bottom: 20px;
  background-color: red;
  margin-left: auto;
  margin-right: auto;
  display: block;
  margin-top: 30px;
}

form {
  padding: 30px;
}

p {
  color: black;
  text-decoration: none;
}

@media screen and (max-width: 768px) {
  .form_box {
    width: 100%;
    padding: 10px;
  }

  input[type="submit"] {
    margin-left: auto;
    margin-right: auto;
    display: block;
  }
}
</style>
</head>
<body>

<div class="collegelogo">
  <center>
    <img src="./bharati_vidyapeeth_logo.webp" alt="College poster" height="120" width="600">
  </center>
</div>

<div class="form_box shadow">
  <form method="post" action="doubt.php">
    <div class="heading">
      Ask your doubts here
    </div>
    <br/>
    <p>What is your question ?</p>
    <div>

      <p>Name</p>
      <textarea name="name"></textarea>

      <p>Username</p>
      <textarea name="username"></textarea>
      <br>
      <br>

    </div>
    <p>Ask your doubts here ? </p>
    <textarea name="doubts" rows="8" cols="40"></textarea>
    <input type="submit" name="submit" value="Submit Form">
  </form>
</div>
<div>
  <button onclick="window.location.href = './welcome.php';">Home Page</button>
</div>

 <footer><a href="./copyright.php">copyright</a> © Gyan 2024. All rights reserved.</footer>
</body>
</html>