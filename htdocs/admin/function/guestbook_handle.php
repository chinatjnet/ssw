<?php
/*
 * Created on 2011-5-1
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

 include("function/reminder.php");

  #ADD  LEAVE WORDS
 if(@isset($_POST[message])){

    //include('../class/class_qqwry.php');
    //$QQWry=new QQWry;
    //$QQWry=new QQWry;
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
      $ip = $_SERVER['HTTP_CLIENT_IP'];
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else
      $ip = $_SERVER['REMOTE_ADDR'];


    $nickname="admin";
    $message=$_POST[message];
 	$origin= "1";
 	$time=strtotime("+8 hours");
 	$user= $_SESSION["user"];

    $check_message=trim($message);

    if(!empty($check_message)){

    $query="INSERT INTO `".DB_PRE."guestbook` (`guestid`, `nickname`, `message`, `ip`, `dateline`, `c_num`, `origin`, `user`) VALUES (NULL, '$nickname', '$message', '$ip','$time', '0', '$origin', '$user')";
    $db->query($query);

    show_reminder("index.php?display=guestbook","留言发表成功");

    }else{

    	 show_reminder("index.php?display=guestbook","<font color=\"#FF3300\">留言内容不能为空！</font>");

    }


 }




  #DELETE  LEAVE WORDS

  if(isset($_GET["do"])and $_GET["do"]=="del"){

    //delete the reply to the leave word in the table guestbook_reply
  	$query="DELETE FROM `guestbook_reply` WHERE (`guestid`='$_GET[do_id]')";
  	$db->query($query);

    //delete the leave words from the guestbook
  	$query="DELETE FROM `".DB_PRE."guestbook` WHERE (`guestid`='$_GET[do_id]') LIMIT 1";
  	$db->query($query);

    show_reminder("index.php?display=guestbook&page=$_GET[back_page]","留言删除成功");



  }


?>
