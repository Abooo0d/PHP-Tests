<?php
  $nums = [10, 20, -5, 15];
  echo abs($nums[0]) . "<br/>";  // To Return Tha Absloout Value Of The Number
  echo abs($nums[1]) . "<br/>";
  echo abs($nums[2]) . "<br/>";
  echo abs($nums[3]) . "<br/>";

  echo mt_rand() . "<br/>";  // To Get A Rando Number
  echo rand() . "<br/>";  // The Same Function
  echo mt_rand(0,5000) . "<br/>"; // [The Min_Value And The Max_Value Are Optinal]
  echo intdiv(50,10);  // To Divide To Numbers And Return The Result As An Integer Number [Both Numbers Are Required]
  echo "<br/>";
  echo fmod(21,4);  // To Returen The left Over From The Division As Float Number [Both Number Are Required]
  echo "<br/>";

  echo ceil(20.5);  // To Round The Number To The Bigger Value
  echo "<br/>";
  echo floor(20.5);  // To Round The Number To The Smaller Value
  echo "<br/>";
  echo round(20.5,0,PHP_ROUND_HALF_UP);  // To Round The Number [The Number Is Required, The precision Is Optinal,The Mod Is Optinal]
  // The Mods Are   PHP_ROUND_HALF_UP, PHP_ROUND_HALF_DOWN, PHP_ROUND_HALF_ODD, PHP_ROUND_HALF_EVEN
  echo "<br/>";
  echo sqrt(25);  // To Return The Square Root
  echo "<br/>";
  echo min([10,25,50,89,-20]);  // To Return The Minmum Value[The Values Are Required]
  echo "<br/>";
  echo max([10,25,50,89,-20]);  // To Return The Maximum Value[The Values Are Required]
  echo "<br/>";
?>
