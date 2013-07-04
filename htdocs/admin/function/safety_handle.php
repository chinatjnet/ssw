<?php
/*
 * Created on 2011-5-9
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

  @include("function/reminder.php");

   if(isset($_POST['do'])){

   	    $time=strtotime("+8 hours");
 	    $user= $_SESSION["user"];
 	    $safety_check=$_SESSION['safety_check'];
 	    Define('SALT','sunsonworld');

   	    if($_POST['do']=="safety_update"){

            $new_username=trim($_POST['new_username']);
            $new_password=md5(SALT.trim($_POST['new_password']));
            $new_question=(int)$_POST['new_question'];
            $new_answer=md5(SALT.$_POST['new_answer']);
            $new_email=$_POST['new_email'];

            $condition=($new_question!="999")?", `question`='$new_question', `answer`='$new_answer'":"";

            if($new_username!="" and trim($_POST['new_password'])!="" and $safety_check){
 	            $query="UPDATE `".DB_PRE."safety` SET `username`='$new_username', `password`='$new_password'  $condition , `email`='$new_email', `dateline`='$time' WHERE (`user`='$user') LIMIT 1";
 	            $db->query($query);
                //echo $query;

                show_reminder($_SERVER['HTTP_REFERER'],"安全设置更新成功！");

            }else{

            	show_reminder($_SERVER['HTTP_REFERER'],"<font color=\"#FF3300\">更新失败（原信息校核错误或用户名密码为空）！</font>");

            }


   	    }









   }

?>
