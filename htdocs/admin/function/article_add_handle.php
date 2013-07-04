<?php
/*
 * Created on 2011-3-27
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 *
 * # Sunsonworld Own-Website  Build  System .
 * # Copyright (C) sunsonworld.com (http://www.sunsonworld.com). All rights reserved.
 */
@include("function/reminder.php");
@include("../class/friend_action_class.php");

$Array_limit=Array(
             "保存草稿"=>4,
             "所有可见"=>3,
             "好友可见"=>2,
             "情侣可见"=>1,
             "主人可见"=>0,
             );


 #ADD ARTICLES
 if(isset($_POST["do"]) and $_POST["do"]=="add"){


 	$a_fclassid= $_POST["a_fclassid"];
 	$a_cclassid= $_POST["a_cclassid"];
 	$article_title= $_POST["article_title"];

 	if(isset($_POST["comment_on"])){$comment_on= $_POST["comment_on"];}else{$comment_on="1";};

 	$origin= "1";

 	if(isset($_POST["article_save"])){

 		$show="4";$reminder_str="文章保存成功！";

 	    }else{

        //there  we get the first img of the content
 		$show= $_POST["article_show"];$reminder_str="文章发表成功！";

 	};

 	$time=strtotime("+8 hours");
 	$user= $_SESSION["user"];
 	$article_content= $_POST["article_content"];

    $check_atitle=trim($article_title);
    $check_content=trim($article_content);

    if(!empty($check_atitle) and !empty($check_content)){


        $query="INSERT INTO `".DB_PRE."articles` (`aid`, `classid`,`upid`, `title`, `comment_on`, `origin`, `c_num`, `viewnum`, `show`, `dateline`, `updatetime`, `user`) VALUES (NULL, '$a_cclassid','$a_fclassid' ,'$article_title', '$comment_on', $origin, '0', '0', '$show', '$time', '0', '$user')";
        $db->query($query);

        $last_aid=$db->insert_id();

        //send our actions to our friends
        $send_content=mb_substr(html2text($article_content),0,50,'utf-8');
        $faction=new friend_action_add("$last_aid","$a_cclassid","$a_fclassid","$article_title","$send_content",SITE_ROOT,"article","$ip","$time","$user");
        $faction->action_send();


        $query2="INSERT INTO `".DB_PRE."articles_content` (`mid`, `message`, `user`) VALUES ($last_aid, '$article_content', $user)";
        $db->query($query2);

        //Get the first pic of the article
        preg_match_all('/<\s*img\s+[^>]*?src\s*=\s*(\'|\")(.*?)\\1[^>]*?\/?\s*>/i',stripslashes($article_content),$match);
        $img_path=$match[2][0];

        if($img_path!=""){

            $insert_aid=$db->fetch_array($db->query("select MAX(aid) from  ".DB_PRE."articles WHERE user=$user"));
            $insert_aid=$insert_aid[0];

            $query3="INSERT INTO `".DB_PRE."articles_image` (`image_id`, `aid`, `classid`, `upid`, `path`,`show`, `dateline`, `user`) VALUES (NULL, '$insert_aid', '$a_cclassid', '$a_fclassid','$img_path','$show', '$time', '$user')";
            $db->query($query3);

        }

         show_reminder("index.php?display=article_add&list_upid=".(int)$_POST['list_upid'],$reminder_str);

    }else{

    	 show_reminder("index.php?display=article_add&list_upid=".(int)$_POST['list_upid'],"<font color=\"#FF3300\">文章标题或内容不能为空！</font>");

    }



 }



?>
