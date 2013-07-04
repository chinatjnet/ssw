<?php
/*
 * Created on 2011-4-29
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

  @include("function/reminder.php");


  	#ALBUM   CHANGE  SHOW
 	if(@$_POST["do"]=="batch_show"){

        $batch_handle_id=$_POST["album_handle"];
        for($i=0;$i <count($batch_handle_id);$i++){

 		    $query="UPDATE `".DB_PRE."albums` SET `show`='$_POST[batch_show_type]' WHERE (`classid`='$batch_handle_id[$i]') LIMIT 1";
            $db->query($query);

            }

        show_reminder($_SERVER['HTTP_REFERER'],"相册权限批量设置成功！");

 	}



  	#ALBUM   CHANGE  SHOW
 	if(@$_POST["do"]=="batch_del"){

        $batch_handle_id=$_POST["album_handle"];
        for($i=0;$i <count($batch_handle_id);$i++){

            $del_id=(int)$batch_handle_id[$i];

            //delete the photo files
            $query="SELECT `path` FROM `".DB_PRE."photos` WHERE  classid=$del_id";
            $result=$db->query($query);
            while($row=mysql_fetch_array($result)){

                $file_path='../'.$row[path];

                if(file_exists($file_path)){

                    unlink($file_path);

                }

            }

            //delete from the album if the photo is cover;
            $query="DELETE FROM `".DB_PRE."albums` WHERE (`classid`='$del_id') LIMIT 1";
            $db->query($query);

            //delete the photo data from the photos
            $query="DELETE FROM `".DB_PRE."photos` WHERE (`classid`='$del_id') LIMIT 1";
            $db->query($query);

            //delete the  album  from the  class
            $query="DELETE FROM `".DB_PRE."class` WHERE (`classid`='$del_id') LIMIT 1";
            $db->query($query);

            }
        if($_POST[update]!=""){$str="，请刷新";}
        show_reminder($_SERVER['HTTP_REFERER'],"相册批量删除成功".$str."！");

 	}




    #ADD NEW ALBUM
 	if(@$_POST["do"]=="add_class"){

        $new_classname=$_POST[new_classname];
        $new_upid=(int)$_POST[new_upid];
 		$time=strtotime("+8 hours");

        if(trim($new_classname)==""){

           show_reminder($_SERVER['HTTP_REFERER'],"<font color=\"#FF3300\">分类名称不能为空！</font>");
           exit();

        }

		$query="INSERT INTO `".DB_PRE."class` (`classid`, `upid`, `c_order`, `classname`, `belong`, `show`, `temp`, `dateline`,`user`) VALUES (NULL,'$_POST[new_upid]', '0','$_POST[new_classname]','4', '1','0',$time,$_SESSION[user])";
		$db->query($query);
		//echo $query;

		show_reminder($_SERVER['HTTP_REFERER'],"新建相册分类成功！");

 	}

?>
