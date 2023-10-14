<?php
  $array_ex1 = ["Abood","Ahmad","Mohamad","Omaar",[1,2,3,4]];
  $array_ex2 = ["Ab" => "Abood","Ah" => "Ahmad", "Mo" => "Mohamad"];

  echo "<pre>";
  print_r(array_reverse($array_ex1 , true));
  print_r(array_reverse($array_ex2,true));  // To Reverse The Order Of The Array[The Array Is Required , The Keep Key Is Optinal]
  echo "</pre>";

  echo "<pre>";
  // print_r(array_flip($array_ex1));
  print_r(array_flip($array_ex2));   // To Extchange The Keys With It's Values
  echo "</pre>";


  echo count($array_ex2);  // To Count THe Elements In The Array[THe Array Is Required , The Counting Mode Is Optinal]
  echo "<br/>";
  echo count($array_ex1,1);    // The Counting Mode = 0 Will Not Count The MultyDimenshnal Arrays , The Counting Mode = 1 Will Count
  echo "<br/>";

  $array_inarray_ex = ["1 2 ",2,3,4];
  if(in_array("1",$array_inarray_ex,true)) // To Search For Element In The Array[The Array And The Element is Required, The Type Is Optial]
  {
    echo "The Element Is Found";
  }else{
    echo "The Element Is Not Found";
  }
  echo "<br/>";
  $courses = [
    "JavaScript" => 50,
    "HTML" => 40,
    "CSS" => 35,
    "PHP" => 80
  ];
  if(array_key_exists("HTML",$courses))  // To Search For A Key In THe Array
  {
    echo "The Course Is Fount And The Price Is: ". $courses["HTML"];
  }else {
    echo "The Course Is Not Found";
  }
  $array_arraykeys = ["Ahmad","Abood","Mohamad","Omar","Amjad","Majd"];
  echo "<pre>";
  print_r(array_keys($array_arraykeys,"Abood",true));  // To Return The The Key Or Keys Of One Element Or All In The Array[The Array Is Required,The Element And The Type Is Optinal]
  echo "</pre>";
  $array_arrayvalues = ["SY"=>"Syria","Eg"=>"Egypt","Sa"=>"Sudi Arabea","US"=>"United State"];
  echo "<pre>";
  print_r(array_values($array_arrayvalues));   // To Return THe Valuse From The Array
  echo "</pre>";

  $array_pad = ["A","B","C","D"];
  echo "<pre>";
  print_r(array_pad($array_pad,10,"0"));   // To Add Padding To The Array[THe Array,THe Size And The Value Is Required]
  echo "</pre>";
  echo "<pre>";
  print_r(array_pad($array_pad,-10,"0"));    // The Negative Values To The Size To But THe Padding In Start
  echo "</pre>";
  $array_nums = [10,5,30,4];
  echo array_product($array_nums) . "<br/>" ;  // To Return The Product Of THe Element In The Array
  echo array_sum($array_nums) . "<br/>" ; // To Return The Sum Of The Element In The Array
  $frinds = ["Ahmad","Abood","Mohamad","Omar","Karam"];
  echo current($frinds);  // To Return The Current Item
  echo "<br/>";
  echo next($frinds);  // To Return The Next Itme
  echo "<br/>";
  echo prev($frinds);  // To Return The Prev Item
  echo "<br/>";
  echo reset($frinds);  // To Restet THe Index
  echo "<br/>";
  echo end($frinds);  // To Return The Last Item
  echo "<br/>";
  $array_merg1 = ["SY"=>"Syria","Eg"=>"Egypt","Sa"=>"Sudi Arabea","US"=>"United State"];
  $array_merg2 = ["SY"=>"Syria","Eg"=>"Abood","Sa"=>"Sudi Arabea","US"=>"Mohamad" , "FU" => "Fuck"];
  echo "<pre>";
  print_r(array_merge($array_merg1,$array_merg2));  // To Merg To Arrays
  echo "</pre>";
  echo "<pre>";
  print_r(array_replace($array_merg1,$array_merg2));  // To Replace THe Item With The Same Keys
  echo "</pre>";
  echo array_rand($array_merg1);  // To Pick An Item Or More Than One Item Randomly
  echo "<br/>";
  echo $array_merg1[array_rand($array_merg1)];
  shuffle($array_merg1);
  echo "<pre>";
  print_r($array_merg1);  // To Shuffle The Array
  echo "</pre>";
  $array_methods = ["A", "B", "C", "D"];
  echo "<pre>";
  print_r($array_methods);
  echo "</pre>";
  array_shift($array_methods);  // To Remove The First Element
  echo "<pre>";
  print_r($array_methods);
  echo "</pre>";
  array_pop($array_methods);  // To Remove The Last Element
  echo "<pre>";
  print_r($array_methods);
  echo "</pre>";
  array_push($array_methods,"1", "2", "3");  // To Add One Or More THan One Element To The End Of The Array
  echo "<pre>";
  print_r($array_methods);
  echo "</pre>";
  array_unshift($array_methods,"One", "Two", "Three");  // To Add One Or More Than One Element To The Begining Of The Array
  echo "<pre>";
  print_r($array_methods);
  echo "</pre>";
  $array_slice = ["A" => "1", "B" => "2", "C" => "3", "D" => "4"];
  echo "<pre>";
  print_r(array_slice($array_slice,1,2,true));   // To Take A Slice From The Array[The Array And The Offset Are Required, The Length And Preserve Key Are Optinal]
  print_r($array_slice);
  print_r(array_splice($array_slice,1,2,["Abood","Ahmad"]));  // To Cut A Slice From The Array Or Replacet With Athor String [The Array And Th Offset Are Required, The Length And The Replacment Are Optinal]
  print_r($array_slice);
  echo "</pre>";
  $array_sort = [1 => "Abood", 2 => "Ahmad", 3 => "Omar", 4 => "Mohamad", 5 => "Karam"];
  sort($array_sort);  // To Sort The Array Ascinding Order
  echo "<pre>";
  print_r($array_sort);
  echo "</pre>";

  rsort($array_sort);  // To Sort The Array Descending Order
  echo "<pre>";
  print_r($array_sort);
  echo "</pre>";

  asort($array_sort);  // To Sort The Array Ascending Order According To The Values
  echo "<pre>";
  print_r($array_sort);
  echo "</pre>";

  arsort($array_sort);  // To Sort The Array Descending Order According To The Values
  echo "<pre>";
  print_r($array_sort);
  echo "</pre>";

  ksort($array_sort);  // To Sort The Array Ascending Order According To The Keys
  echo "<pre>";
  print_r($array_sort);
  echo "</pre>";

  krsort($array_sort);  // To Sort The Array Descending Order According To The Keys
  echo "<pre>";
  print_r($array_sort);
  echo "</pre>";


  function Hello_mr($f_name,$l_name){
    return "Hello Mr. $f_name - $l_name";
  }
  $f_name = ["Abood", "Ahmad", "Mohamad", "Omar", "Karam"];
  $l_name = ["Omar", "Mahmaod", "Hasan", "Zoher", "Akram"];
  echo "<pre>";
  print_r(array_map("Hello_mr",$f_name,$l_name));  // To Applies Callback To The Elemenet Of The Given Array [The Function And The First Array Are Required,The Other Arrays Are Optinal]
  // print_r(array_map(fn($n,$l) => "Hello Mr. $n - $l"));  // Ex For The Anonymos Function
  echo "</pre>";
  for($i = 0; $i < count($f_name); $i++){
    echo Hello_mr($f_name[$i],$l_name[$i]). "<br/>";    // The Same Ex Another Way
  }
  $nums = [
    0 => 1,
    1 => 2,
    2 => 3,
    3 => 4,
    4 => 5,
    5 =>6
  ];
  function CheckNums($n){
    return $n > 3;
  }
  echo "<pre>";
  print_r(array_filter($nums,"CheckNums",0));  // To Filter Values Of An Array Using Callback Function[THe Function And The Array Are Required, The Flag Is Optinal]
  echo "</pre>";    // The Flags Are  ARRAY_FILTER_USE_KEY    ARRAY_FILTER_USE_BOTH    0


  $nums2 = [10, 20, 30, 40, 50];
  function add($cary,$item){
    return $cary + $item;
  }
  echo "<pre>";
  print_r(array_reduce($nums2,"add",100));  // To Reduce The Array Using Callback Function[The Array and The Callback Are Required,The Initial Are Optinal]
  echo "</pre>";
?>
