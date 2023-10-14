<?php
  echo round(disk_total_space("c:") / 1024 / 1024 / 1024) . "<br/>";  // To Show The Total Space On One Disc
  echo round(disk_free_space("c:") / 1024 / 1024 / 1024) . "<br/>";  // To Show The Free Space On One Disc
  var_dump(file_exists("../Test Array Methods"));  // To Check For File
  echo "<br/>";
  echo round(filesize("../Test Array Methods/index.php") / 1024);  // To Get Only File Size
  echo "<br/>";
  var_dump(is_dir("../Test Array Methods/index.php"));  // To Chck If The Path Given Is Directory
  // mkdir("../abood1/abood/1",0770,true);  // To Create Directory [The Path Is Required, The Premision Is Optinal,The Recursive Is Optinal]
  // rmdir("../abood1/abood/1");  // To Remove Only Empty Directorys
  echo "<br/>";
  chmod("../abood1/abood",0700);  // To Chenge The Premision
  echo fileperms("../abood1/abood");  // To Return The File Premition
  clearstatcache();  // To Clear The Information In Cache
  echo "<br/>";
  echo basename(__FILE__ , ".php");  // To Get The File Name [The Path Is Required,The Suffix is Optinal]
  echo "<br/>";
  echo dirname(__FILE__,2);  // To Get The Path Of A File [The File Path Is Required , The Level is Optinal]
  echo "<br/>";
  echo realpath(__FILE__);  // To Return The Full Path With The File Name
  echo "<pre>";
  print_r(pathinfo(__FILE__));  // To Get All THe Info About A File
  echo "</pre>";
  echo pathinfo(__FILE__)["dirname"];  // To Get One Argument
  echo "<br/>";
  echo pathinfo(__FILE__,PATHINFO_DIRNAME);  // The Options[PATHINFO_DIRNAME,PATHINFO_BASENAME,PATHINFO_EXTENSION,PATHINFO_FILENAME]
  echo "<br/>";
  $handle = fopen("Abood.txt","a+");  // To Open A Text File [THe File Path Is Required,The Mode Is Optinal]
  // The Modes   [r] For Reading Only And The Pointer At The Begining
  //             [r+] For Reading And Writing and The Pointer At The Begining
  //             [w] For Writing And The Pointer At The End And The File Well Be Cleared And Well Creat The File If Not Existe
  //             [w+] For Writing And Reading And The Pointer At The End And The File Well Be Cleared And Well Creat The File If Not Existe
  //             [a] For Write And The Pointer In The End And Creat The File If Not Existe
  //             [a+] For Reading And Writing And The Pointer In The End And Creat if Not Existe
  //             [x] To Creat A File [warnning If Existe] And Open It For Reading  And The Pointer In The Begining
  //             [x+] To Creat A File [warnning If Existe] And Open It For Reading And Writing And The Pointer In The Begining
  //             [c] To Writeing In The File Create It If Not Existe The Pointer In The Begining
  //             [c+] To Writeing And Reading In The File Create It If Not Existe The Pointer In The Begining
  echo fgets($handle,100);  // To Read Only One Line From The File [The Resource Is Required The Length Is Optinal]
  echo "<br/>";
  echo fread($handle,20);  // To Read Number Of Bites From The File [The Resource And The Length Are Required]
  echo "<br/>";
  // fwrite($handle,"\nElzero Web School",25);  // To Write In The File [The Resource And The String Are Required And The Length Is Optinal]
  echo ftell($handle); // To Get The Current Position Of The Pointer
  rewind($handle); // To Set The Pointer To The Begining Of The File
  fseek($handle,6,SEEK_SET);  // To Set The Pointer To Spesfic Position [The Resource And The Offset Are Required,The Flag Is optinal]
            // The Flags[SEEK_SET => To Go To The Offset Given,SEEK_CUR => To Add The Offset Given To The Current Position, SEEK_END => Starting From The End And Remove The Offset Given]
  fclose($handle);  // To End The Stream
  echo "<pre>";
  print_r(file("Abood.txt"));  // To Read The Entire File Into An Array[The File Path Is Required,The Flag Is Optinal]
  echo "</pre>";
                // To Print The Entire File Using Loop
    //Ex.1
  $handle1 = fopen("Abood.txt","r");
  // while(! feof($handle1)) {  // To Check If The Pointer Arrived To The End Of The File
  //   echo fgets($handle1) . "<br/>";
  // }
    //Ex.2
  $array1 = file("Abood.txt");
  for($i = 0; $i < count(file("Abood.txt")); $i++) {
    // echo fgets($handle1) . "<br/>";
    // echo $array1[$i];
    echo file("Abood.txt")[$i] . "<br/>";
  }
  echo mb_strlen("Abood","8bit");  // To Get The length Of A String In [Bite]

  echo "<pre>";
  print_r(glob("../index.*"));  // To Get All The Files Macthes The Consept Given And Return An Array With The Files[The Consept,Is Required,The Flag Is Optial]
  echo "</pre>";

  // rename("../abood1/abood/1.txt","../abood1/11.txt");  // To Rename And Move A File[The Old path And The New Path Are Required]
  //           // We Can only Rename The File By Writing The Same path With Changing The Name Or We Can Move The File By Changing The Path And The Name If We Need To Change The Name
  // copy("../abood1/abood/2.txt","../abood1/2.txt");  // To Copy A File[The Sourse Path And The Destenatio Path Are Required]
  //           // We Can Only Creat A Copy File And We Can Change The Copy File By Chenging The FileName in The Destenation Path
  // unlink("../abood1/abood/3.txt");  // To Delete A File
  echo nl2br(file_get_contents("../abood1/abood/2.txt",false,NULL,2,20));  // To Get The Data Frm A File Into A String
  //[The File Name Is Required,The include File And The Contexet And The offset And The Max Length Are Optinal]
  file_put_contents("../abood1/abood/2.txt","Elzero Web School",FILE_APPEND);  // To Add Data To A File[The File Name And The Data Are Required,The Flag and The Context Are Optinal]
  echo get_include_path();  // o Get THe Include Path
  // set_include_path()  // To Set A New Include Path
?>
