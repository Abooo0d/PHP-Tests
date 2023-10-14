<?php
  $str = "this is a normal string";
  echo lcfirst($str);   // To Make The First Letter Lower Case
  echo "<br/>";
  echo ucfirst($str);   // To Make The First Letter Upper Case
  echo "<br/>";
  echo strtolower($str);  //To Make The Holl String Lower Case
  echo "<br/>";
  echo strtoupper($str);  //To Make The Holl String Upper Case
  echo "<br/>";
  echo ucwords($str);    // To Make The First Letter Of Each Word Upper Case
  echo "<br/>";
  echo str_repeat($str,5);  // To Repeat A String [The Number Is Required]
  echo "<br/>";
  $Implode_ex = ["Abood","Ahmad","Hala","Mohamad"];
  echo implode($Implode_ex, " . ");    // To Join All The List Elements In One String [The Seperator Is Optinal]
  echo "<br/>";
  $explode_ex = "Elzero Web School Is Cool";
  echo "<pre>";
  print_r(explode(" ",$explode_ex, 2));   // To Cut Divide The String Based On A Seperator[Seberator Is Required] [Limit Is Optinal]
  echo "</pre>";
  $str_shuffle_ex = "Abood";
  echo str_shuffle($str_shuffle_ex);    // To Shuffle A String
  echo "<br/>";
  echo strrev($str_shuffle_ex);    // To Revarse A String
  echo "<br/>";
  $trim_ex ="#$%Elzero Web School Is Cool#$%";
  echo trim($trim_ex,"#$%");    // To Remove A Char Form A String
  echo "<br/>";
  echo ltrim($trim_ex,"#$%");   // To Remove A Char Form A String From The Left
  echo "<br/>";
  echo rtrim($trim_ex,"#$%");   // To Remove A Char Form A String From The Right
  echo "<br/>";
  $str_chunk_split_ex = "Welcome Abood To My World";
  echo chunk_split($str_chunk_split_ex,4,"_"); // To Split The String To Pices And Add A Special Char After It [Length Is Required,The End Is Optinal]
  echo "<br/>";
  echo strlen($str_chunk_split_ex);   // To Get The Length Of A String
  echo "<br/>";
  echo"<pre>";
  print_r( str_split($str_chunk_split_ex,4));   // To Convert The  String To Chars Array [Length Is Optinal]
  echo "</pre>";
  echo "<br/>";
  $str_strip_tags = "<h1><b>Abood</b> Is Welcome</h1>";
  echo $str_strip_tags;
  echo "<br/>";
  echo strip_tags($str_strip_tags,"<b>");  // To Remove Or Allow Tags In HTML
  echo "<br/>";
  echo nl2br( "Welcome Abood\n To My World",true); // To Add Convert The \n To <br> Tag [XHTML Is Optinal]
  echo "<br/>";
  $str_strpos = "Hello World!";
  var_dump(strpos($str_strpos,"l"));  // To Search In A String For String From The Left [The String Is Required , The Search String Is Required, The Starting Pos Is Optinal]
  echo "<br/>";
  var_dump(strrpos($str_strpos,"l")); // To Search In A String For String From The Right
  echo "<br/>";
  var_dump(stripos($str_strpos,"l"));   // For Case Insensitive
  echo "<br/>";
  var_dump(strripos($str_strpos,"l"));   // For Case Insensitive
  echo "<br/>";
  var_dump(substr_count($str_strpos,"ll",4,8)); // To Count How Many Times The String Is Repeated [The String Is Required, The Search String Is Required, THe Starting Pos Is Optinal, The Length is Optinal]
  $str_parse_str = "name=Abood&email=abood@gmail.com&os=Windows";
  parse_str($str_parse_str,$query);   // To Convert The Query String To Array To Use The Data [THe String Is Required , The Array Is Required]
  echo "<pre>";
  print_r($query);
  echo"</pre>";
  $str_qoutemta = " []  () <br/>  * {} : LO<MKIP? "; // To Remove The Chars That May Make Proplame In The Data Base
  echo quotemeta($str_qoutemta);
  echo "<br/>";
  echo "<br/>";
  $str_strpad_ex = "Abood";
  echo str_pad($str_strpad_ex,9,"0",STR_PAD_BOTH);   // To Add Padding To The String [THe String Is Required, The Length Is Required, The Char_Pad Is Optinal, The Padding Flag is Optinal]
  echo "<br/>";
  echo str_pad($str_strpad_ex,9,"0",STR_PAD_RIGHT);   // To Add Padding To The String [THe String Is Required, The Length Is Required, The Char_Pad Is Optinal, The Padding Flag is Optinal]
  echo "<br/>";
  echo str_pad($str_strpad_ex,9,"0",STR_PAD_LEFT);   // To Add Padding To The String [THe String Is Required, The Length Is Required, The Char_Pad Is Optinal, The Padding Flag is Optinal]
  echo "<br/>";
  $str_strtr_ex = "We@c#me Ab##d To My W#r@d";
  $str_translate = ["#" => "o", "@" => "l"];
  echo strtr($str_strtr_ex,$str_translate);    // To Translate A Char Or More Htan One To Another In A String [The String Is Required, The Char And The Tranlateed_char Is Requierd]
  echo "<br/>";
  $str_str_replace_ex = "We@c#me Ab##d To My W#r@d";
  echo str_replace(["#","@"],["o","l"], $str_str_replace_ex); // To Change Charactors In A String [The Both Chars Is Rquired , The String Is Required]
  echo "<pre>";
  print_r( str_replace(["One","Tow"],["1","2"], ["One","Tow","Three"])); // To Change Charactors In A String [The Both Chars Is Rquired , The String Is Required]
  echo "</pre>";
  echo str_ireplace(["#","@"],["o","l"], $str_str_replace_ex); // For Case Insensitive
  echo "<br/>";
  echo substr_replace("OneTow",2,1,4);    // To Change A Peice From The String [THe String Is Required, The Replacment Is Required,The Starting Index Is Required ,Ths Length Is Optinal]
  echo "<br/>";
  echo substr_replace("OneTow",2,1,0);    //To Add A New Char To The String  [Length = 0]
  echo "<br/>";
  $str_wordwrap = "Welcome Abood To My World";
  echo wordwrap($str_wordwrap,8,"<br/>",true);  // To Wrap The String In  A Limit [The String Is Required,The,The Length Is Optinal,The Wrap Char Is Optinal,The Cut Parameter Is Optinal ]
  echo "<br/>";
  echo ord("a");  // To Get The Ascii Code For The Char
  echo "<br/>";
  echo chr(69);   // To Get The Char From The Ascii Code
  echo "<br/>";
  echo similar_text("Abood","Abood",$prec); // To Get The Numbers Of The Matched Chars In The Tow Strings[Both Strings Are Required,The Precenteg Var Is Optinal]
  echo "<br/>";
  $str_strstr = "Welcome Abood To My World";
  echo strstr($str_strstr,"Welcome Abood",false);    // TO Search For A World Or A Char In A String[The Both String Is Required , Before_String Is Optinal]
  echo "<br/>";
  echo stristr($str_strstr,"Welcome Abood",false);    //For Case Insensitive
  echo "<br/>";
  echo number_format(100000254201.254621,5,".",",");    // Too Format The Numbers [The Number is Requred , The Dicemal Count is Optinal,The Dicimal Char And Thousands_Sep Is Optinal ]
  echo "<br/>";
?>
