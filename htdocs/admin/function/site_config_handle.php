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

   	    if($_POST['do']="update"){

            $title=$_POST['title'];
            $sitename=$_POST['sitename'];
            $description=$_POST['description'];
            $keyword=$_POST['keyword'];
            $url=$_POST['url'];
            $statistic=$_POST['statistic'];
            $show=$_POST['show'];
            $close_reason=$_POST['closereason'];
            $question=$_POST['question'];
            $answer=$_POST['answer'];
            $loverzone_on=$_POST['loverzone_on'];
            $rewrite_on=$_POST['rewrite_on'];
            $timezone=$_POST['timezone'];


   	    	$query="UPDATE `".DB_PRE."siteconfig` SET `title`='$title', `sitename`='$sitename', `description`='$description', `keyword`='$keyword', `url`='$url', `statistic`='$statistic', `show`='$show', `close_reason`='$close_reason', `question`='$question', `answer`='$answer', `loverzone_on`='$loverzone_on', `rewrite_on`='$rewrite_on', `timezone`='$timezone' WHERE (`user`='$user') LIMIT 1";
   	    	$db->query($query);
   	    	//echo  $query;

            show_reminder($_SERVER['HTTP_REFERER'],"网站配置信息更新成功！");


   	    }






   }

?>
