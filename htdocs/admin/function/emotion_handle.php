<?php
/*
 * Created on 2011-4-22
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 @include("function/reminder.php");
 @include("../class/friend_action_class.php");


  #ADD  EMTIONS
 if(@isset($_POST[message])and isset($_POST['do'])){

    $message=$_POST[message];
 	$origin= "1";
 	$time=strtotime("+8 hours");
 	$user= $_SESSION["user"];

    $check_message=trim($message);

    if(!empty($check_message)){

    $query="INSERT INTO `".DB_PRE."emotions` (`eid`, `message`, `c_num`, `origin`,`ip`, `dateline`, `user`) VALUES (NULL, '$message','0','$origin','$ip', '$time', '$user')";
    $db->query($query);

    $last_aid=$db->insert_id();

    //send our actions to our friends
    $title=mb_substr($message,0,50,'utf-8');
    $faction=new friend_action_add("$last_aid","0","0","$title","",SITE_ROOT,"emotion","$ip","$time","$user");
    $faction->action_send();


    show_reminder($_SERVER['HTTP_REFERER'],"心情微博发表成功");

    }else{

    	 show_reminder("index.php?display=emotion","<font color=\"#FF3300\">心情内容不能为空！</font>");

    }


 }




  #DELETE  EMOTIONS

  if(isset($_GET["do"])and $_GET["do"]=="del"){

  	$query="DELETE FROM `".DB_PRE."emotions` WHERE (`eid`='$_GET[do_id]') LIMIT 1";
  	$db->query($query);

    show_reminder("index.php?display=emotion&page=$_GET[back_page]","心情微博删除成功");



  }




?>
