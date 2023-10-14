<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="style2.css" rel="stylesheet" type="text/css" />
  <title>First Php Project</title>
</head>

<body>
  <?php
    // Connect To Database
    $host = "localhost";
    $user = "root";
    $pass="";
    $db = "student";
    $con = mysqli_connect($host,$user,$pass,$db);
    $result = mysqli_query($con,"select * from student_table");

    // Fields
    $id = "";
    $fname = "";
    $lname = "";
    $address = "";
    $phone = "";
    $error = false;
    if (isset($_POST["user-id"])){
      $id = $_POST["user-id"];
    }
    if(isset($_POST["first-name"])){
      $fname = $_POST["first-name"];
    }
    if(isset($_POST["last-name"])){
      $lname = $_POST["last-name"];
    }
    if(isset($_POST["address"])){
      $address = $_POST["address"];
    }
    if(isset($_POST["phone"])){
      $phone = $_POST["phone"];
    }
    $sqls = "";
    if(isset($_POST["add"])){
      if($id == "" || $fname == "" || $lname == "" || $address == "" || $phone == ""){
        $error = TRUE;
      } else {
        $sqls = "insert into student_table value ($id,'$fname','$lname','$address',$phone)";
        mysqli_query($con,$sqls);
        header("Location: index.php");
      }
    }
    if(isset($_POST["remove"])){
      $sqls = "delete from student_table where ID = $id";
      mysqli_query($con,$sqls);
      header("location: index.php");
    }
    if(isset($_POST["signup"])){
      header("location: signup.php");
      exit();
    }
  ?>
  <div class="main-form">
  <table class="main-table">
  <tr>
  <th>Student ID</th>
  <th>Student F-Name</th>
  <th>Student L-Name</th>
  <th>Student Address</th>
  <th>Student Phone</th>
  </tr>
  <?php
    while($row = mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td>". $row["ID"] ."</td>";
      echo "<td>". $row["Student_FName"] ."</td>";
      echo "<td>". $row["Student_LName"] ."</td>";
      echo "<td>". $row["Student_Address"] ."</td>";
      echo "<td>". $row["Student_Phone"] ."</td>";
      echo "</tr>";
    }
  ?>
  </table>
  </div>
  <div class="main-asid">
    <img src="Images/01.jpg" alt="">
    <form method="POST">
      <h3 class="label">User ID:</h3>
      <input type="text" name="user-id" class="user-name-text" value =  "<?php echo $error ? $id : "";?>">
      <h3 class="label">First Name:</h3>
      <input type="text" name="first-name" class="last-name-text" value ="<?php echo $error ? $fname : "";?>">
      <h3 class="label">Last Name:</h3>
      <input type="text" name="last-name" class="address-text" value = "<?php echo $error ? $lname : "";?>">
      <h3 class="label">Address:</h3>
      <input type="text" name="address" class="address-text" value = "<?php echo $error ? $address : "";?>">
      <h3 class="label">Phone:</h3>
      <input type="text" name="phone" class="address-text" value = "<?php echo $error ? $phone : "";?>">
      <button name = "add" class="add">Add</button>
      <button name = "remove" class= "remove">Remove</button>
      <button name = "signup" class= "add">Sign Up</button>
    </form>
    <p class="error-log">
    <?php
      echo $error ? "Plese Fill All The Filesd And Try Again!!": "";
    // if($error){
    //   echo "Plese Fill All The Filesd And Try Again!!";
    // }
    ?>
    </p>
  </div>

</body>

</html>
