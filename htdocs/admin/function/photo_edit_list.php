<?php
/*
 * Created on 2011-4-27
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

@include("function/reminder.php");

if(isset($_GET["do"])||isset($_POST["do"])){

    $list_upid =(int)$_GET["list_upid"];
    #GET  THE  ALBUM  LIST
    @$album_num=mysql_fetch_array(mysql_query("select count(*) FROM `".DB_PRE."class`  WHERE   upid=$list_upid   AND  `user`=$_SESSION[user]"));
    @$query="SELECT * FROM `".DB_PRE."class`  WHERE  upid=$list_upid  AND  user=$_SESSION[user] ORDER BY c_order";
    $result=$db->query($query);
    while($row=$db->fetch_array($result)){
           $album_list[]=array(
                             "upid"=>$row[upid],
                             "classid"=>$row[classid],
                             "pic_num"=>$pic_num[0],
                             "classname"=>$row[classname],
                             "album_name"=>urlencode($row[classname]),
                             "cover"=>$cover,
                             "view"=>$view,
                             "question"=>$question,
                           "answer"=>$answer,
                            );
    }
    $temp->assign("album_list",$album_list);





    #GET  THE  PHOTOS' INFO THAT WILL BE RESET
	if($_GET["do"]=="batch_edit"){
        $batch_handle_id=$_GET["photo_handle"];

 		for($i=0;$i <count($batch_handle_id);$i++){
            $edit_id=(int)$batch_handle_id[$i];
            $query="SELECT * FROM `".DB_PRE."photos`  WHERE  `pid`=$edit_id   AND  user=$_SESSION[user]";
            $result=mysql_query($query);
            while($row=mysql_fetch_array($result)){

                $thumb_path="function/image_thumb.php?path=../../$row[path]&width=100&height=75";
                $pid=$row[pid];
                $upid=$row[upid];
                $classid=$row[classid];
                $title=$row[title];
                $path=$row[path];
                $cover_class=($row[cover]==1)?"background:url($temp->template_dir/images/cover_bg.gif) 20px  0px  no-repeat;float:left":"";


            }

                $photo_list[]=array(
                               "pid"=>$pid,
                               "upid"=>$upid,
                               "classid"=>$classid,
                               "title"=>$title,
                               "path"=>$path,
                               "thumb_path"=>$thumb_path,
                               "cover_class"=>$cover_class,
                          );


 		}


        $temp->assign("photo_list",$photo_list);
        $temp->assign("back_url",$_SERVER['HTTP_REFERER']);
        $temp->assign("list_upid",$_GET[list_upid]);
        $temp->assign("class_id",$_GET[class_id]);
       // print_r($photo_list);


	}


    #UPDATE  THE PHOTOS' INFO
    if($_POST["do"]=="batch_update"){

        $batch_handle_id=$_POST["update_handle"];
        $batch_handle_title=$_POST["photo_title"];
 		for($i=0;$i <count($batch_handle_id);$i++){
 			$update_id=(int)$batch_handle_id[$i];
            $time=strtotime("+8 hours");
            $query="UPDATE `".DB_PRE."photos` SET `title`='$batch_handle_title[$i]', `dateline`='$time' WHERE (`pid`='$update_id') LIMIT 1";
            $db->query($query);

            }

         show_reminder($_SERVER['HTTP_REFERER'],"相片信息批量更新成功,请刷新主页面！");

    }



    #SET ALBUM'S   COVER
    if($_POST["do"]=="set_cover"){

        $batch_handle_id=$_POST["photo_handle"];

 	    $update_id=(int)$batch_handle_id[0];
        $time=strtotime("+8 hours");

        #uncover  the  pre  cover
        $check_cover_photo=$db->db_num_rows($db->query("SELECT * FROM `".DB_PRE."photos` WHERE classid=$_POST[class_id] AND  cover=1"));
        if($check_cover_photo!=0){

        $query="UPDATE `".DB_PRE."photos` SET `cover`='0'   WHERE (classid=$_POST[class_id] AND  cover=1) LIMIT 1";
        $db->query($query);

        }

        #set  the new  cover
        $query1="UPDATE `".DB_PRE."photos` SET `cover`='1', `dateline`='$time' WHERE (`pid`='$update_id') LIMIT 1";
        $db->query($query1);

        #insert OR update   the  new  cover_path  into/  the  table  "albums"
        $check_cover_album=$db->db_num_rows($db->query("SELECT * FROM `".DB_PRE."albums` WHERE classid=$_POST[class_id]"));

        if($check_cover_album!=0){

            $query2="UPDATE `".DB_PRE."albums` SET  `cover`='$_POST[cover_path]'  WHERE (`classid`='$_POST[class_id]') LIMIT 1";
            $db->query($query2);

        }else{

            $query2="INSERT INTO `".DB_PRE."albums` (`album_id`, `classid`, `upid`, `cover`, `show`, `question`, `answer`, `user`) VALUES (NULL, '$_POST[class_id]', '$_POST[list_upid]', '$_POST[cover_path]', '3', '', '', '$_SESSION[user]')";
            $db->query($query2);

        }
         show_reminder($_SERVER['HTTP_REFERER'],"相片设为封面成功！");

    }




}


?>
