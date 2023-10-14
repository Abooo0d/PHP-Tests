<?php
  echo "Hello World!!";
  echo "<br/>";
  $name = "Abood";
  echo $name;
  echo "<br/>";
  $$name = "SaadAldeen";
  echo $$name;
  echo "<br/>";
  echo $Abood;
  echo "<br/>";
  $$$name = "Sniper";
  echo $$$name;
  $Sniper = $name;
  echo "<br/>";
  echo $Sniper;
  echo $Abood;
  echo "<br/>";
  echo "<br/>";
  echo "<br/>";

  $names = ["Abood","Hala","Omar","Mohamad","Ahmad"];
?>
<?php

function first($name , $last_name){
  echo "Hello World! <br> $name $last_name";
}

$name = "Abood";
first($name , "Saad-Aldeen");
?>
