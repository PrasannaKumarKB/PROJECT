<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "temple";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $aadharNumber = $_POST["aadharnumber"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM signup WHERE aadhar_Number = '$aadharNumber'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $storedPassword = $row["password"];

    if ($password === $storedPassword) {
      header("Location: home.php");
      exit();
    } else {
      echo "Invalid password.";
    }
  } else {
    echo "Invalid Aadhar number.";
  }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <style>
    body {
      font-family: Georgia, 'Times New Roman', Times, serif;
      background-color: #f2f2f2;
    }
    
    .background-image {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url("logo.jpeg");
      background-repeat: no-repeat;
      background-size: cover;
      z-index: -1;
    }

    .container {
      width: 300px;
      margin: 0 auto;
      margin-top: 100px;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.3);
    }
    
    h2 {
      text-align: center;
    }
    
    input[type="text"],
    input[type="password"] {
      width: 90%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    
    input[type="submit"] {
      width: 20%;
      background-color:black;
      color: gold;
      padding: 10px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
    
    input[type="submit"]:hover {
      background-color: #45a049;
    }
  
    .error {
      color: red;
    }
    
    .cta-button {
      display: inline-block;
      background-color: black;
      color: goldenrod;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      text-decoration: none;
      margin-top: 30px;
      margin-left: 90px;
    }
    
    h1 {
      font-family: Georgia, 'Times New Roman', Times, serif;
      color: black;
      text-align: center;
    }
  </style>
  
  <script>
    function validateForm() {
      var aadharNumber = document.getElementById("aadharnumber").value;
      var password = document.getElementById("password").value;

      if (aadharNumber === "" || password === "") {
        alert("Please enter both Aadhar number and password.");
        return false;
      }

      if (!/^\d{12}$/.test(aadharNumber)) {
        alert("Aadhar number should be a 12-digit number.");
        return false;
      }

      var regex = /^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()])[A-Za-z\d!@#$%^&*()]+$/;
      if (!regex.test(password)) {
        alert("Password should contain at least 1 capital letter, 1 symbol, and 1 number.");
        return false;
      }
      
      return true;
    }
  </script>
</head>
<body>
  <div class="background-image"></div>
  <h1>TAMILNADU TOURISM</h1>
  <div class="container">
    <h2>வணக்கம்...!</h2>
    <form id="loginForm" action="home.php" method="post" onsubmit="return validateForm()">
      <input type="text" id="aadharnumber" name="aadharnumber" placeholder="Aadhar Number">
      <input type="password" id="password" name="password" placeholder="Password">
      <input type="submit" value="Login">
    </form>
    <h2>Create a New Account</h2>
    <a class="cta-button" href="signup.php">Signup</a>
  </div>
</body>
</html>
