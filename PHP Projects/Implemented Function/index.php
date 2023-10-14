<?php
  function Abood_String_Length(string $str) : int {
    $count = 0;
    while(!empty($str[$count]))
      $count++;
    return $count;
  }

  $str1 = "Welcome Abood To My World";
  echo Abood_String_Length($str1). "<br/>";


function Abood_Left_Trim(string $str, string $char = " ") : string {
  $result = "";
  $stop = False;
  for($i = 0; $i < strlen($str); $i++):
    if($str[$i] == $char && !$stop){
      continue;
    } else {
      $stop = True;
    }
      $result .= $str[$i];
  endfor;
  return $result;
}

$str2 = "       Abood    ";
echo Abood_String_Length($str2). "<br/>";
echo Abood_Left_Trim($str2," "). "<br/>";
echo Abood_String_Length(Abood_Left_Trim($str2," ")). "<br/>";
$str3 = "####Abood####";
echo Abood_String_Length($str3). "<br/>";
echo Abood_Left_Trim($str3,"#"). "<br/>";
echo Abood_String_Length(Abood_Left_Trim($str3,"#")). "<br/>";
?>
