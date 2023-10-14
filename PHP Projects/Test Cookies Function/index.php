<?php
  setcookie("Style","Light",strtotime("+1 month"),"/Abood","Abood",false,false);  // To Set A Cookie
  // [The Name Is Required,The Value , The Expired Date , The Path, The Domin,The Source And Http_Only Are Optinal]
  // To Edite The Cookie We Write The Name Of THe Cookie Then The Parameters We Need To Change
  setcookie("Style","Dark",strtotime("+1 month"),"/Abood","Abood",false,false);  // To Edite The Cookie
  // To Delete The Cookie We Set The Time To 1 Or -1
  setcookie("Style","Dark",strtotime()-1);
?>
