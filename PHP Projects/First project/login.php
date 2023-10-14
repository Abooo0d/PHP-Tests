<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style2.css">
  <title>Login</title>
</head>

<body>
  <?php
  // Start Connection
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "Accounts";
  $con = mysqli_connect($host,$user,$pass,$db);
  $result = mysqli_query($con,"SELECT * FROM `accounts`;");
  // Fields
  $username = "";
  $password = "";
  if(isset($_POST["username"])){
    $username = $_POST["username"];
  }
  if(isset($_POST["password"])){
    $password = $_POST["password"];
  }
  if(isset($_POST["signup"])){
    header("Location: signup.php");
  }
  if(isset($_POST["signin"])){
    while($row = mysqli_fetch_array($result)){
      if($username = $row["username"]){
        if($password = $row["password"]){
          header("Location: index.php");
          exit();
        }
      }
    }
  }
  if(isset($_POST["signup"])){
    header("Location:signup.php ");
    exit();
  }
  ?>
  <div class="loginform">
    <img src="Images/avatar3.jpg" alt="">
    <form action="" method="POST">
      <h3>User Name: </h3>
      <input type="text" name="username" id="">
      <h3>Passwoed: </h3>
      <input type="password" name="password" id="">
      <input type="submit" name="signin" value="Sign In" class="signin">
      <input type="submit" name="signup" value="Sign Up" class="signup">
    </form>
  </div>
</body>

</html>
