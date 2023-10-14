<?php
  echo "<pre>";
  print_r(filter_list());  // To Return A List Of The Filters
  echo "</pre>";
  echo filter_id("boolean");  // To Get TheFiltter Id
  echo "<br/>";
  $bool = TRUE;
  if(filter_var($bool,FILTER_VALIDATE_BOOLEAN)){  // To Use The Filters [The Value is Required, The Filter Is Optinal]
    echo "This Is True";
  }else {
    echo "This Is False";
  }
  echo "<br/>";
  var_dump(filter_var($bool,FILTER_VALIDATE_BOOLEAN,FILTER_NULL_ON_FAILURE)); // To Check The Boolean Values [True \ 1 \ On \ Yes] [False\ 0 \ Off \ No]
  // The Flags [FILTER_NULL_ON_FAILURE ==> To Return Null When The Falue Is Not True Or False]
  echo "<br/>";
  $url = "https://elzero.org/catagory?id=100";
  var_dump(filter_var($url,FILTER_VALIDATE_URL,["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED]));
  //To Check The Urls The Flags [FILTER_NULL_ON_FAILURE ==> To Return Null When It's Not Url]
                            //  [FILTER_FLAG_PATH_REQUIRED ==> To Check For The Path In The URL]
                            //  [FILTER_FLAG_QUERY_REQUIRED ==> To Check For The Query In The Url]
  echo "<br/>";
  $ip = "192.168.1.1";
  var_dump(FILTER_VAR($ip,FILTER_VALIDATE_IP,["flags" =>FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV4]));
  // To Check The Ips The Flags[FILTER_NULL_ON_FAILURE ==> To Return Null When It's Not Ip]
                            // [FILTER_FLAG_IPV4 ==> To Check If Its V4]
                            // [FILTER_FLAG_IPV6 ==> To Check If Its V6]
  echo "<br/>";
  $mac = "00:00:5e:00:53:af";
  var_dump(filter_var($mac,FILTER_VALIDATE_MAC,FILTER_NULL_ON_FAILURE));
  // To Check The Ips The Flags[FILTER_NULL_ON_FAILURE ==> To Return Null When It's Not Mac Addres]
  echo "<br/>";
  $email = "abdsaadalden2001@gmail.com";
  var_dump(filter_var($email,FILTER_VALIDATE_EMAIL,FILTER_NULL_ON_FAILURE));
  // To Check The Emails The Flags[FILTER_NULL_ON_FAILURE ==> To Return Null When It's Not Email]
  echo "<br/>";
  $int = 40;
  var_dump(filter_var($int,FILTER_VALIDATE_INT,["flags" => FILTER_NULL_ON_FAILURE,"options" => ["min_range" => 50, "max_range" => 100]]));
  // To Check Int Numbers The Flags [FILTER_NULL_ON_FAILURE ==> To Return Null When Its Not Int]
                      //  The Options [min_range ==> To Set Minimum Value To Check It]
                      //              [max_range ==> To Set Maximum Range To Check It]
  echo "<br/>";
  $float = 40;
  var_dump(filter_var($float,FILTER_VALIDATE_FLOAT,["flags" => FILTER_NULL_ON_FAILURE,"options" => ["min_range" => 50, "max_range" => 100]]));
  // To Check FLoat Numbers The Flags [FILTER_NULL_ON_FAILURE ==> To Return Null When Its Not Float]
                      //  The Options [min_range ==> To Set Minimum Value To Check It]
                      //              [max_range ==> To Set Maximum Range To Check It]
  echo "<br/>";
  $int1 = "100";
  var_dump(filter_var($int1,FILTER_SANITIZE_NUMBER_INT)); //  To Check And Return Only Int Number In String Form
  echo "<br/>";
  $float1 = "100,245,698.50";
  var_dump(filter_var($float1,FILTER_SANITIZE_NUMBER_FLOAT,["flags" => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION])); //  To Check And Return Only Float Number In String Form
          // Flags [FILTER_FLAG_ALLOW_THOUSAND , FILTER_FLAG_ALLOW_FRACTION]
  echo "<br/>";
  $email1 = "abdsaadald  e  n2 0 0 1  @ g       mail.com";
  var_dump(filter_var($email1,FILTER_SANITIZE_EMAIL));  // To Check And Retutn Only Valid Email
  echo "<br/>";
  $url1 = "https://Abood.org.sy";
  var_dump(filter_var($url1,FILTER_SANITIZE_URL));  // To Check And Return Only Valid Url
  echo "<br/>";
  $int1 = "100";
  var_dump(filter_var($int1,FILTER_SANITIZE_NUMBER_INT));  // To Check And Return Only Valid Int Number
  echo "<br/>";
  $float1 = "100.12";
  var_dump(filter_var($float1,FILTER_SANITIZE_NUMBER_FLOAT));  // To Check And Return Only Valid Float Number
  echo "<br/>";

  //  echo $_GET["num"];  //
  echo filter_input(INPUT_GET,"num",FILTER_SANITIZE_NUMBER_INT,["flags" => FILTER_NULL_ON_FAILURE]);  // To Print ANd Filter The Data From The User In The Website
        // [The Input Type Is Required   ==> INPUT_GET , INPUT_POST , INPUT_COOKIE , INPUT_SERVER , INPUT_ENV]
        // [Variable Name Is Required , Filter Name , Flags And Optins Are Optinal]
?>

<form action = "" method = "get">
  <input type="text" name="num">
  <input type="submit" value="Send">
</form>
