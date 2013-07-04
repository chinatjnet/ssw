<?php
/*
 * Created on 2011-4-11
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
@include("../class/friend_action_class.php");


#EDIT  ARTICLE

if(@isset($_GET[do_id])){

#ARTICLE'S  TITLE
$query="SELECT * FROM `".DB_PRE."articles` WHERE  aid=$_GET[do_id]";
$result=$db->query($query);
while($row=mysql_fetch_array($result)){

    $temp->assign("re_title",$row[title]);
}


#ARTICLE'S  CONTENT
$query="SELECT * FROM `".DB_PRE."articles_content` WHERE  mid=$_GET[do_id]";
$result=$db->query($query);
while($row=mysql_fetch_array($result)){

    $temp->assign("re_content",$row[message]);

}

    $temp->assign("do_id",$_GET[do_id]);


}




#ARTICLE'S  UPDATE


if(isset($_POST["do_id"]) and !empty($_POST["do_id"])){


 	$a_fclassid= $_POST["a_fclassid"];
 	$a_cclassid= $_POST["a_cclassid"];
 	$article_title= $_POST["article_title"];
    $location_url = "index.php?display=article&list_upid="."$_POST[list_upid]";


 	if(isset($_POST["comment_on"])){$comment_on= $_POST["comment_on"];}else{$comment_on="1";};

 	$origin= "1";

 	if(isset($_POST["article_save"])){$show="4";$reminder_str="文章保存成功！";}else{$show= $_POST["article_show"];$reminder_str="文章修改成功！";};

 	$time=strtotime("+8 hours");
 	$user= $_SESSION["user"];
 	$article_content= $_POST["article_content"];

    $check_atitle=trim($article_title);
    $check_content=trim($article_content);



    if(!empty($check_atitle) and !empty($check_content)){

        //Get the first pic of the article
        preg_match_all('/<\s*img\s+[^>]*?src\s*=\s*(\'|\")(.*?)\\1[^>]*?\/?\s*>/i',stripslashes($article_content),$match);
        $img_path=$match[2][0];

        $do_id=(int)$_POST[do_id];



        #UPDATE  ARTICLE


        if(!isset($_POST["article_save"])){


            $query="UPDATE `".DB_PRE."articles`  SET `show`=$show, `classid`=$a_cclassid,`upid`=$a_fclassid,`title`='$article_title',`comment_on`=$comment_on,`origin`=$origin, `dateline`=$time   WHERE (`aid`='$do_id') LIMIT 1";
            $db->query($query);

            //send our actions to our friends
            //$send_content=mb_substr(html2text($article_content),0,50,'utf-8');
            //$faction=new friend_action_add("$do_id","$a_cclassid","$a_fclassid","$article_title","$send_content",SITE_ROOT,"article_edit","$ip","$time","$user");
            //$faction->action_send();

            $query2="UPDATE `".DB_PRE."articles_content` SET `message`='$article_content'  WHERE (`mid`='$_POST[do_id]') LIMIT 1;";
            $db->query($query2);

            if($img_path!=""){

                $query="UPDATE `".DB_PRE."articles_image` SET   `classid`='$a_cclassid', `upid`='$a_fclassid', `path`='$img_path', `show`='$show', `dateline`='$time', `user`='$user' WHERE (`aid`='$do_id') LIMIT 1";
                $db->query($query);

            }else{

                $query="DELETE FROM `".DB_PRE."articles_image` WHERE (`aid`='$do_id') LIMIT 1";
                $db->query($query);
            }

        show_reminder("$location_url",$reminder_str);



        #SAVE  ARTICLE

        }else if(isset($_POST["article_save"])){

    	    $query="INSERT INTO `".DB_PRE."articles` (`aid`, `classid`,`upid`, `title`, `comment_on`, `origin`, `c_num`, `viewnum`, `show`, `dateline`, `updatetime`, `user`) VALUES (NULL, '$a_cclassid','$a_fclassid' ,'$article_title', '$comment_on', $origin, '0', '0', '$show', '$time', '0', '$user')";
            $db->query($query);

            $last_aid=$db->insert_id();
            $query2="INSERT INTO `".DB_PRE."articles_content` (`mid`, `message`, `user`) VALUES ($last_aid, '$article_content', $user)";
            $db->query($query2);

            if($img_path!=""){

               $insert_aid=$db->fetch_array($db->query("select MAX(aid) from  articles WHERE user=$user"));
               $insert_aid=$insert_aid[0];


               $query3="INSERT INTO `".DB_PRE."articles_image` (`image_id`, `aid`, `classid`, `upid`, `path`,`show`, `dateline`, `user`) VALUES (NULL, '$insert_aid', '$a_cclassid', '$a_fclassid','$img_path','$show', '$time', '$user')";
               $db->query($query3);

            }


            show_reminder("$location_url",$reminder_str);


        }



    }else{

    	 show_reminder("$location_url","<font color=\"#FF3300\">文章标题或内容不能为空！</font>");

    }


}
?>
