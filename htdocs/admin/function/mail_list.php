<?php
/*
 * Created on 2011-5-25
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */


  if(isset($_SESSION['user'])){

        $time=strtotime("+8 hours");
 	    $user= $_SESSION["user"];


        #SITE_CONFIG LIST
        $query="SELECT smtpusermail,smtpserver,smtpserverport,smtpuser,smtppass  FROM `".DB_PRE."siteconfig` WHERE user='$user'";
        $result=$db->query($query);

        while($row=$db->fetch_array($result)){

                $temp->assign("smtpusermail",$row['smtpusermail']);
                $temp->assign("smtpserver",$row['smtpserver']);
                $temp->assign("smtpserverport",$row['smtpserverport']);
                $temp->assign("smtpuser",$row['smtpuser']);
                $temp->assign("smtppass",$row['smtppass']);

        }

  }
?>
