<?php
  $color = "blue";
  switch ($color){
    case "red":
      echo  "red <br/>";
    case "blue":
      echo "blue <br/>";
    case "green":
      echo "green <br/>";
    break;
    default:
      echo "Any Thing <br/>";
  }
  $x = 3;
  if($x =="3"){
    $x++;
    $x++;
  }
  echo $x ."<br/>";
  $y = "5";
  if($y == 5){
    $y++;
  }elseif($Y === "5"){
    $y--;
  }else{
    $y = $y++;
    $y++;
  }
  echo $y ."<br/>";
  $z = "3";
  while ($z>0)
    $z--;
  echo $z ."<br/>";
  // $e = 1;
  // do
  //   $e++;
  // until($e>10)
  // echo $e;
  $vv = "sHello World!";
  echo "Good " . strpos($vv,"He") . "<br/>";
  var_dump(strpos($vv,"He"));
  if(strpos($vv,"He") == FALSE) echo "Wrong <br/>";
  if(strpos($vv,"He") === FALSE) echo "Wrong <br/>";
  $q = 1.9e411;
  var_dump($q);
  echo $q;
  echo "<br/>";
  $w = acos(8);
  var_dump($w);
  echo "<br/>";
  $x = "59.85" + 100;
  var_dump(is_numeric($x));
  echo "<br/>";
  $array = array("hello","World");
  foreach($array as $k =>$v){
    echo "Key = $k, Val= $v";
  }
?>
