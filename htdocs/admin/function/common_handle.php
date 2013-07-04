<?php
/*
 * Created on 2011-4-6
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 include("function/reminder.php");

$Array_handle=Array(
             "article"=>Array(
                         "table"=>"articles",
                         "id_name"=>"aid",
                         "show_str1"=>"日志",
                         "show_str2"=>"阅读",
                        ),
             "collect"=>Array(
                         "table"=>"collects",
                         "id_name"=>"collect_id",
                         "show_str1"=>"收藏",
                         "show_str2"=>"浏览",
                        ),
             "music"=>Array(
                         "table"=>"musics",
                         "id_name"=>"music_id",
                         "show_str1"=>"音乐",
                         "show_str2"=>"收听",
                        ),

              "resource"=>Array(
                         "table"=>"resources",
                         "id_name"=>"reso_id",
                         "show_str1"=>"资源",
                         "show_str2"=>"下载",
                        ),



             );




 if(isset($_GET["do"])){

 	$display=$_GET[display];       //IMPORTANT  VARIABLE
	$$_GET[display]=$_GET[display];

	//echo ${$_GET[display]};

	$table=$Array_handle[$display][table];
    $id_name=$Array_handle[$display][id_name];
    $show_str1=$Array_handle[$display][show_str1];
    $show_str2=$Array_handle[$display][show_str2];

 	#ARTICLE   DELET
 	if($_GET["do"]=="del"){

        $do_id=(int)$_GET[do_id];

 		$query="DELETE FROM `".DB_PRE."$table` WHERE (`$id_name`='$do_id') LIMIT 1";
 		$db->query($query);

        if($display=="article"){

            $query2="DELETE FROM `".DB_PRE."articles_content` WHERE (`mid`='$do_id') LIMIT 1";
            $db->query($query2);

            $query3="DELETE FROM `".DB_PRE."articles_image` WHERE (`aid`='$do_id') LIMIT 1";
            $db->query($query3);

        }

        if($display=="music"and $_GET[path]!="no"){
              $file_path='../upload/music/'.$_GET[path].'.mp3';

             if(file_exists($file_path)){
                unlink($file_path);
                }
        }

        if($display=="resource"and $_GET[path]!="no"){
        	  $file_path='../'.base64_decode(str_replace(" ","+",$_GET[path]));

             if(file_exists($file_path)){
                unlink($file_path);
                }
        }



        if(isset($_GET[list_classid])){
        $location_url="index.php?display=$display&list_upid=".(int)$_GET[list_upid]."&list_classid=".(int)$_GET[list_classid]."&page=".(int)$_GET[page];
        }else{
        $location_url="index.php?display=$display&list_upid=".(int)$_GET[list_upid]."&page=".(int)$_GET[page];
        }

        $show_reminder_str=$show_str1."删除成功！";

        show_reminder("$location_url",$show_reminder_str);


 	}




 	#ARTICLE   CHANGE  SHOW
 	if($_GET["do"]=="chg_show"){

        $do_id=(int)$_GET[do_id];

 		$query="UPDATE `".DB_PRE."$table` SET `show`='$_GET[show]' WHERE (`$id_name`='$do_id') LIMIT 1";

        $db->query($query);

        if($display=="article"){

              $query="UPDATE `".DB_PRE."articles_image` SET   `show`='$show'  WHERE (`aid`='$do_id') LIMIT 1";
              $db->query($query);

        }

        $location_url="index.php?"."$_GET[location_url]";
        $show_reminder_str=$show_str2."权限设置成功！";

        show_reminder("$location_url",$show_reminder_str);


 	}







 	#ARTICLES  BATCH_DELET
 	if($_GET["do"]=="batch_del"){

        $batch_handle_id=$_GET[$display."_handle"];
 		for($i=0;$i <count($batch_handle_id);$i++){

 		    $query="DELETE FROM `".DB_PRE."$table` WHERE (`$id_name`='$batch_handle_id[$i]') LIMIT 1";
 		    $db->query($query);

            if($display=="article"){

                $query2="DELETE FROM `".DB_PRE."articles_content` WHERE (`mid`='$batch_handle_id[$i]') LIMIT 1";
                $db->query($query2);

                $query3="DELETE FROM `".DB_PRE."articles_image` WHERE (`aid`='$batch_handle_id[$i]') LIMIT 1";
                $db->query($query3);

            }


            if($display=="music"){

                $file_path='../upload/music/'.$_GET[file_path][$batch_handle_id[$i]].'.mp3';
                if(file_exists($file_path)){
                    unlink($file_path);
                }

            }


            if($display=="resource"){

              $file_path='../'.base64_decode(str_replace(" ","+",$_GET[file_path][$batch_handle_id[$i]]));

               if(file_exists($file_path)){

                    unlink($file_path);

                }
             }




 		}

        $location_url="index.php?".urldecode($_GET[location_url]);
        $show_reminder_str=$show_str1."批量删除成功！";

        show_reminder("$location_url",$show_reminder_str);


 	}






 	#ARTICLES  BATCH_CHG_SHOW
 	if($_GET["do"]=="batch_show"){

 		$batch_handle_id=$_GET[$display."_handle"];
        for($i=0;$i <count($batch_handle_id);$i++){

 		   $query="UPDATE `".DB_PRE."$table` SET `show`='$_GET[batch_show_type]' WHERE (`$id_name`='$batch_handle_id[$i]') LIMIT 1";
           $db->query($query);

           if($display=="article"){

                $query="UPDATE `".DB_PRE."articles_image` SET   `show`='$show'  WHERE (`aid`='$batch_handle_id[$i]') LIMIT 1";
                $db->query($query);

            }
        }

        $location_url="index.php?".urldecode($_GET[location_url]);
        $show_reminder_str=$show_str2."权限批量设置成功！";

        show_reminder($_SERVER['HTTP_REFERER'],$show_reminder_str);


 	}





 	#MUSIC  BATCH_PLAY

 	if($_GET["do"]=="batch_play"){

        include("function/player/player.php");

 	}



 }else{


 	header("location:../../404.htm");




 }

?>
