<?php
/*
 * Created on 2011-5-25
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 @include_once("function/reminder.php");

  if(isset($_POST['do'])){

      $time=strtotime("+8 hours");
 	  $user= $_SESSION["user"];

      $smtpusermail=$_POST['smtpusermail'];
      $smtpserver=$_POST['smtpserver'];
      $smtpserverport=$_POST['smtpserverport'];
      $smtpuser=$_POST['smtpuser'];
      $smtppass=$_POST['smtppass'];
      $smtpemailto=$_POST['smtpemailto'];


  	  if($_POST['do']=="update"||$_POST['do']=="test"){

          $query="UPDATE `".DB_PRE."siteconfig` SET `smtpusermail`='$smtpusermail', `smtpserver`='$smtpserver', `smtpserverport`='$smtpserverport', `smtpuser`='$smtpuser', `smtppass`='$smtppass' WHERE (`user`='$user') LIMIT 1";
          $db->query($query);

          if($_POST['do']=="test"){

          	 include_once("../class/smtp_class.php");
          	 smtp_test($smtpusermail,$smtpserver,$smtpserverport,$smtpuser,$smtppass,$smtpemailto);
          	 echo $smtpemailto;
             show_reminder($_SERVER['HTTP_REFERER'],"邮件配置更新成功,测试邮件已发送！");

          }

          if($_POST['do']=="update"){

          	 show_reminder($_SERVER['HTTP_REFERER'],"邮件配置更新成功！");

          }



  	  }




  }


?>
