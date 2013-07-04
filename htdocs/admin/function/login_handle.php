<?php
/*
 * Created on 2011-6-19
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
@include("function/reminder.php");

 if(isset($_POST['verifycode']) AND $_POST['verifycode']==$_SESSION['verifycode']){


        Define('SALT','sunsonworld');
        $username=$_POST['log'];
 	    $query="SELECT  password,user,username  FROM `".DB_PRE."safety` WHERE `username`='$username' LIMIT 1";
 	    $row=$db->fetch_array($db->query($query));
 	    $pw=$row['password'];

 	    $now_pw=trim($_POST['pwd']);

        if(md5(SALT.$now_pw)==$pw){

            $_SESSION["user"]=$row['user'];
            $_SESSION["username"]=$row['username'];
            header("Location:index.php");


        }else{

            show_reminder($_SERVER['HTTP_REFERER'],"<font color=\"#FF3300\">用户名或密码错误！</font>");


        }




 }else{

 	show_reminder($_SERVER['HTTP_REFERER'],"<font color=\"#FF3300\">验证码填写错误！</font>");

 }

 //echo $_SESSION['verifycode'];


?>
