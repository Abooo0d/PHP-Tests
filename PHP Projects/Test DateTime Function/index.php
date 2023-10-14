<?php
  echo date_default_timezone_get();  // To The Defaulte Time Zone
  echo "<br/>";
  date_default_timezone_set("Asia/Damascus");  // To Set The Defaulte Time Zone
  echo date("Y,m,d h:i:s") . "<br/>";
  $d = date_create("",timezone_open("Africa/Cairo"));  // To Creat A New Date Object [The Date Is Required,THe Time Zone is Optinal]
  // timezone_open To Creat A New DateTimeZone Object
  echo date_format($d,"Y,m,d h:i:s");  // To Edite The Date Format [The Date Is Required , The Format Is Optinal]
                  // For Formating :
                  // y => For Years Tow Digits
                  // Y => For Years Foure Digits

                  // m => For Month Numbers
                  // M => For Month Text Three Letters
                  // F => For Month Text Full Name
                  // t => To Get The Number Of Days Of This Month

                  // d => For Days Numbers With Leading Zero
                  // j => For Days Numbers Without Leading Zero
                  // D => For Days Text Three Letters
                  // l => For Days Text Full Name
                  // z => To Get The Number Of The Day In The Year
                  // S => For Days Suffix

                  // a => For Small am/pm
                  // A => For Capital AM/PM

                  // g => For Hours In 12-Mode Without Leading Zero
                  // h => For Hours In 12-Mode With Leading Zero
                  // G => For Hours In 24-Mode Without Leading Zero
                  // H => For Hours In 24-Mode With Leading Zero

                  // i => For Minutes
                  // s => For Seconds
                  // u => For Microseconds

  echo "<br/>";
  var_dump(checkdate(2,10,2023));  // To Check If The Date Given Is Valied [The Month,The Day And The Year Are Required]
  echo "<br/>";


  $d1 = date_create();
  date_add($d1,date_interval_create_from_date_string("1 year 2 months 15 days")); // To Add To The Date Given
  //date_interval_create_from_date_string => To Get DateIntrval Object From Text
  echo date_format($d1, "Y/m/d h:i:s");
  echo "<br/>";
  date_sub($d1,date_interval_create_from_date_string("1 year 2 months"));  // To Subtract From THe Date Given
  echo date_format($d1, "Y/m/d h:i:s");
  echo "<br/>";
  date_modify($d1, "+1 year - 3 months");  // To Edite The Date Given
  echo date_format($d1, "Y/m/d h:i:s");
  echo time();  // To Get Unix Timestamp
  echo "<pre>";
  print_r(getdate(time()));  // To Get Info About The Date Given
  echo "</pre>";
  echo "<pre>";
  print_r(date_parse("2001/7/20 5:20:6"));  // To Get Data And Validate The Date Given
  echo "</pre>";
  $date1 = date_create("2001/7/20");
  $date2 = date_create("now");
  $diff = date_diff($date1,$date2);  // To Get The Diffrent Between Tow Dates [The Both Date Are Required]
  echo "<pre>";
  print_r($diff);
  echo "</pre>";
  echo date("Y/m/d M-D h:i:s" ,strtotime("+1 day",strtotime("2001/7/20")));  // To Convert The String Given To Date
?>

