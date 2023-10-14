<?php
$name = "Abod";
include("index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="name">
  The Winner Is :
    <?php
    echo $name;
    echo "<br/>";
    echo "<br/>";
    for($i = 0; $i < 5; $i++ ) {
      echo $i . "-" . $names[$i] . "<br/>";
    }
    echo "<br/>";
    ?>
  </div>
  <div class="main"></div>
</body>

</html>

