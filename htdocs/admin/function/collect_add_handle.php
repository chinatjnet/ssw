<?php
/*
 * Created on 2011-4-13
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

 include("function/reminder.php");
 @include("../class/friend_action_class.php");

$Array_limit=Array(
             "保存草稿"=>4,
             "所有可见"=>3,
             "好友可见"=>2,
             "情侣可见"=>1,
             "主人可见"=>0,
             );

 if(isset($_POST["do"]) and $_POST["do"]=="add"){


 	$a_fclassid= $_POST["a_fclassid"];
 	$a_cclassid= $_POST["a_cclassid"];
 	$collect_name= $_POST["collect_name"];
  	$collect_url= $_POST["collect_url"];
 	$collect_target= $_POST["collect_target"];
 	$collect_description= $_POST["collect_description"];
    $collect_show= $_POST["collect_show"];
 	$origin= "1";
 	$time=strtotime("+8 hours");
 	$user= $_SESSION["user"];


    $check_name=trim($collect_name);
    $check_url=trim($collect_url);


    if(!empty($check_name) and !empty($check_url)){

        $query="INSERT INTO `".DB_PRE."collects` (`collect_id`, `classid`, `upid`, `name`, `url`, `target`, `description`, `show`, `origin`, `dateline`, `user`) VALUES (NULL, '$a_cclassid','$a_fclassid' ,'$collect_name', '$collect_url', '$collect_target', '$collect_description', '$collect_show', '$origin','$time', '$user')";
        $db->query($query);

        $last_aid=$db->insert_id();

        //send our actions to our friends

        $send_content=mb_substr(html2text($collect_description),0,50,'utf-8');
        $faction=new friend_action_add("$last_aid","$a_cclassid","$a_fclassid","$collect_name","$send_content",SITE_ROOT,"collect","$ip","$time","$user");
        $faction->action_send();

        $reminder_str="添加收藏成功！";
        show_reminder($_SERVER['HTTP_REFERER'],$reminder_str);

    }else{

    	 show_reminder($_SERVER['HTTP_REFERER'],"<font color=\"#FF3300\">收藏标题或URL不能为空！</font>");

    }







 	}
?>
