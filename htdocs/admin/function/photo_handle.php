<?php
/*
 * Created on 2011-4-29
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

@include("function/reminder.php");

if(@isset($_POST['do'])){


    #BATCH  CHANGE CLASS
	if($_POST['do']=="chg_class"){


        $chg_class_id=$_POST["chg_class_id"];
        $batch_handle_id=$_POST["photo_handle"];
        for($i=0;$i <count($batch_handle_id);$i++){

            $chg_id=(int)$batch_handle_id[$i];
            $query="UPDATE `".DB_PRE."photos` SET `classid`='$chg_class_id', `cover`='0' WHERE (`pid`='$chg_id') LIMIT 1";
            $db->query($query);

        }

        if($_POST[update]!=""){$str="，请刷新";}
        show_reminder($_SERVER['HTTP_REFERER'],"批量更改分类成功".$str."！");

    }




    #BATCH  DELETE
	if($_POST['do']=="batch_del"){

        $batch_handle_id=$_POST["photo_handle"];
        $batch_handle_path=$_POST["photo_path"];

        for($i=0;$i <count($batch_handle_id);$i++){

            $del_id=(int)$batch_handle_id[$i];
            $del_path=$batch_handle_path[$del_id];

            //delete the photo files
            $file_path='../'.$del_path;
            if(file_exists($file_path)){

                unlink($file_path);

            }
            //delete from the album if the photo is cover;
            $query0="DELETE FROM `".DB_PRE."albums` WHERE (`cover`='$del_path') LIMIT 1";
            $db->query($query0);

            //delete the photo data from the photos
            $query="DELETE FROM `".DB_PRE."photos` WHERE (`pid`='$del_id') LIMIT 1";
            $db->query($query);

        }

        if($_POST[update]!=""){$str="，请刷新";}
        show_reminder($_SERVER['HTTP_REFERER'],"相片批量删除成功".$str."！");

    }







}



?>
