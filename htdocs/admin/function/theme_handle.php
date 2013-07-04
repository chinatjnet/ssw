<?php
/*
 * Created on 2011-5-31
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

 @include("function/reminder.php");

  if($_GET['do']=="theme_on"){

  	$query="UPDATE `".DB_PRE."siteconfig` SET `theme`='$_GET[theme]' WHERE (`user`='$_SESSION[user]') LIMIT 1";
    $db->query($query);

    show_reminder($_SERVER['HTTP_REFERER'],"主题更换成功！");


  }




?>
