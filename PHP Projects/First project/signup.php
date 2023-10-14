<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style2.css">
  <title>Sign Up</title>
</head>
  <?php
  // Start Connection
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "Accounts";
  $con = mysqli_connect($host,$user,$pass,$db);
  $result = mysqli_query($con,"SELECT * FROM Accounts");


  //Fields
  $fname = "";
  $lname = "";
  $username = "";
  $date = "";
  $password = "";
  $sqls = "";
  if (isset($_POST["f-name"])){
    $fname = $_POST["f-name"];
  }
  if(isset($_POST["l-name"])){
    $lname = $_POST["l-name"];
  }
  if(isset($_POST["user-name"])){
    $username = $_POST["user-name"];
  }
  if(isset($_POST["date"])){
    $date = $_POST["date"];
  }
  if(isset($_POST["password"])){
    $password = $_POST["password"];
  }
  if(isset($_POST["signup"])){
    $sqls = "INSERT INTO Accounts Value ('$fname','$lname','$username','$password','$date')";
    mysqli_query($con,$sqls);
    header("Location: login.php");
    exit();
  }
  ?>
<body>
  <div class="signup-form">
    <img src="Images/avatar3.jpg" alt="">
    <form action="" method="POST">
      <h3>First Name:</h3>
      <input type="text" name="f-name" id="">
      <h3>Last Name:</h3>
      <input type="text" name="l-name" id="">
      <h3>User Name:</h3>
      <input type="text" name="user-name" id="">
      <h3>Date Of Birth :</h3>
      <input type="text" name="date" id="">
      <h3>Password:</h3>
      <input type="password" name="password" id="">
      <input type="submit" name = "signup"value="Sign Up" class="signup-btn">
    </form>
  </div>
</body>

</html>
