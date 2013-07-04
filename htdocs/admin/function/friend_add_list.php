<?php
/*
 * Created on 2011-5-6
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

if(isset($_GET['do']) and isset($_GET['nickname'])){


   #GET THE USER'S IP
   if (!empty($_SERVER['HTTP_CLIENT_IP'])){

      $ip = $_SERVER['HTTP_CLIENT_IP'];

   }else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){

      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

   }else{

       $ip = $_SERVER['REMOTE_ADDR'];

   }


   $nickname=$_GET['nickname'];
   $reason=$_GET['reason'];
   $website=$_GET['website'];

   $time=strtotime("+8 hours");
   $user= $_SESSION["user"];


   #GET THE FRIEND'S  ADD  REQUEST
   if($_GET['do']=="friend_request"){

 	  $time_interval=strtotime("-1 day+8 hours");//to avoid the user Malicious send add request,there we set the interval time 24 hours,and you can change the time.

 	  $check_ip=mysql_num_rows(mysql_query("SELECT ip FROM `".DB_PRE."friends` WHERE ip='$ip'  AND  dateline>$time_interval  AND user=$user"));
 	  $check_site=mysql_num_rows(mysql_query("SELECT website FROM `".DB_PRE."friends`  WHERE  website='$website'  AND  dateline>$time_interval  AND user=$user"));

 	  if($check_ip=="0"){

 	  	  $query="INSERT INTO `".DB_PRE."friends` (`fid`, `classid`, `name`, `notename`, `ip`, `add_reason`, `allow`, `website`, `dateline`, `user`) VALUES (NULL, '-1', '$nickname', 'no', '$ip', '$reason', '0', '$website', '$time','$user')";
	      $db->query($query);

          echo  'OK';

 	  }elseif($check_ip!="0"){

 	  	  echo  'EXIST';

 	  }



   }


   #FRIEND HAS  ACCESSED  OUR REQUEST
   if($_GET['do']=="allow_request"){

 	  $query="UPDATE `".DB_PRE."friends` SET `name`='$nickname', `ip`='$ip', `allow`='5', `dateline`='$time'  WHERE (`website`='$website' AND `allow`='2' AND user=$user) LIMIT 1";
	  $db->query($query);
      echo 'OK';

   }else{


   }




   #FRIEND HAS  DENiDE  OUR REQUEST
   if($_GET['do']=="deny_request"){

 	  $query="DELETE FROM `".DB_PRE."friends`  WHERE (`website`='$website' AND `allow`='2'  AND user=$user) LIMIT 1";
	  $db->query($query);
      echo 'OK';

   }else{


   }


}


?>
