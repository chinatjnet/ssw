<?php
/*
 * Created on 2011-4-27
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

@include("function/reminder.php");

if(isset($_GET["do"])||isset($_POST["do"])){


    #GET  THE  ALBUMS' INFO THAT WILL BE RESET
	if($_GET["do"]=="batch_edit"){

        $batch_handle_id=$_GET["album_handle"];
        $batch_handle_title=$_GET["album_title"];

 		for($i=0;$i <count($batch_handle_id);$i++){
            $show=3;
 		    $cover="function/image_thumb.php?path=../../upload/photos/default_cover.jpg&width=100&height=75";
            $edit_id=(int)$batch_handle_id[$i];

            @$query="SELECT classname FROM `".DB_PRE."class`  WHERE  classid=$edit_id  AND  user=$_SESSION[user] ORDER BY c_order";
            $result=$db->query($query);
            while($row=$db->fetch_array($result)){

            	$album_name=$row[classname];

            }

            $album_exsist="0";//to see if the table "albums" exsist the data;
            $cover_album=mysql_num_rows(mysql_query("SELECT * FROM `".DB_PRE."albums`  WHERE  `classid`=$edit_id   AND  user=$_SESSION[user]"));
            if($cover_album!=0){

                $album_exsist="1";
                $query="SELECT * FROM `".DB_PRE."albums`  WHERE  `classid`=$edit_id   AND  user=$_SESSION[user]";
                $result=mysql_query($query);
                while($row=mysql_fetch_array($result)){

                    $cover="function/image_thumb.php?path=../../$row[cover]&width=100&height=75";
                	$show=$row[show];
                    $list_classid=$row[list_classid];
                    $question=$row[question];
                    $answer=$row[answer];
                }

            }

            $album_list[]=array(
                           "upid"=>(int)$_GET[list_upid],
                           "classid"=>$edit_id,
                           "album_name"=>$album_name,
                           "cover"=>$cover,
                           "show"=>$show,
                           "show_class".$show=>"selected=\"selected\"",
                           "question"=>$question,
                           "answer"=>$answer,
                           "album_exsist"=>$album_exsist,
                          );


 		}


     $temp->assign("album_num",$album_num[0]);
     $temp->assign("album_list",$album_list);
     $temp->assign("list_upid",(int)$_GET[list_upid]);



	}


    #UPDATE  THE ALBUMS' INFO
    if($_POST["do"]=="batch_update"){

        $batch_handle_id=$_POST["update_handle"];
        $batch_handle_name=$_POST["album_name"];
        $batch_handle_show=$_POST["album_show"];
        $batch_handle_question=$_POST["album_question"];
        $batch_handle_answer=$_POST["album_answer"];
        $batch_album_exsist=$_POST["album_exsist"];
        $batch_cover="upload/photos/default_cover.jpg";
 		for($i=0;$i <count($batch_handle_id);$i++){
 			$update_id=(int)$batch_handle_id[$i];
            $time=strtotime("+8 hours");

            if($batch_handle_show[$i]==""){
            	$batch_handle_show[$i]="3";
            	}

            //update the album class info in the table "class"
            $query0="UPDATE `".DB_PRE."class` SET `classname`='$batch_handle_name[$i]', `dateline`='$time' WHERE (`classid`='$update_id') LIMIT 1";
            $db->query($query0);

            //update the info in the table "albums"
            if($batch_album_exsist[$i]=="1"){
                  $query="UPDATE `".DB_PRE."albums` SET `show`='$batch_handle_show[$i]', `question`='$batch_handle_question[$i]', `answer`='$batch_handle_answer[$i]' WHERE (`classid`='$update_id') LIMIT 1";
                  }else{

                  $query="INSERT INTO `".DB_PRE."albums` (`album_id`, `classid`, `upid`, `cover`, `show`, `question`, `answer`, `user`) VALUES (NULL, '$update_id', '$_POST[list_upid]', '$batch_cover', '$batch_handle_show[$i]', '$batch_handle_question[$i]', '$batch_handle_answer[$i]', '$_SESSION[user]')";

                  }
            $db->query($query);

            }

         show_reminder($_SERVER['HTTP_REFERER'],"相册信息批量更新成功！");

    }



}


?>
