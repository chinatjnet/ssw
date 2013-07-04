<?php
/*
 * Created on 2011-5-3
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
   //session_start();

  //include("../../class/mysql.class.php");
 // include("../../include/db_config.php");
  //$db =  new mysql('localhost','root','zy19910801','ssw_v1.0','',"UTF8");



   #GET THE USER'S IP
   if (!empty($_SERVER['HTTP_CLIENT_IP'])){

      $ip = $_SERVER['HTTP_CLIENT_IP'];

   }else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){

      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

   }else{

      $ip = $_SERVER['REMOTE_ADDR'];

   }

   //get the  page that the visitor visit first;
   $firstpage='http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

   //get the  page that the visitor come from;
   $originpage=(isset($_SERVER['HTTP_REFERER']))?$_SERVER['HTTP_REFERER']:$firstpage;

   $time=strtotime("+8 hours");
   @$user= $_SESSION["user"];



   #UPDATE THE VISITORS DATA IN THE TABLE
   $ip_num=mysql_num_rows(mysql_query("SELECT * FROM `".DB_PRE."visitors` WHERE `ip`='$ip'"));

   if($ip_num=="0"){

    $query="INSERT INTO `".DB_PRE."visitors` (`vid`, `ip`, `originpage`, `firstpage`, `dateline`, `total`, `today`, `shield`, `origin`, `user`) VALUES (NULL, '$ip', '$firstpage', '$originpage', '$time', '1', '1', '0', '1', '$user')";
    $db->query($query);

   }else{

  	 $query_s="SELECT total,today,dateline  FROM `".DB_PRE."visitors` WHERE `ip`='$ip'";
     $result=$db->query($query_s);
  	 while($row=$db->fetch_array($result)){


         $today_zero = strtotime(date('Y-m-d'),time());//today zero
         $time_interval = $time-$today_zero;

         @$dateline=$row[dateline];
  		 @$total=$row[total]+1;
  	 	 @$today=$row[today]+1;

  	 	 //while the day change ,the number of today's visitor should be reset
  	 	 if(@$row[dateline]<$today_zero and $time>=$today_zero){

  	 	     @$today=1;

  	 	 }

  	 }

     //to avoid the user Malicious refresh
  	 if($time-$dateline>600){   //there,I set the interval time 600s,if you want to change it ,you can edit this number;

   	    $query="UPDATE `".DB_PRE."visitors` SET `originpage`='$originpage', `firstpage`='$firstpage', `dateline`='$time', `total`='$total', `today`='$today', `origin`='1' WHERE (`ip`='$ip') LIMIT 1";
        $db->query($query);
     }



  }

?>
