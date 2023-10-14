<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <input type="file" name="Abood" id="">
    <input type="submit" value="Send">
  </form>
  <?php
    ?>
    <?php
      if($_SERVER['REQUEST_METHOD'] == "POST"){
        print_r($_FILES);
      }
    ?>
</body>
</html>
