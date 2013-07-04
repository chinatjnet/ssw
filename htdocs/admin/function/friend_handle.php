<?php
/*
 * Created on 2011-5-5
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
  @include("function/reminder.php");

  #UPDATE  SELF INFO
  if(@isset($_REQUEST['do'])){

	  $time=strtotime("+8 hours");
 	  $user= $_SESSION["user"];


      #get ourselves' site url
      $url_this =SITE_ROOT;


      #get ourselves'nickname
      $nickname=$db->fetch_array($db->query("SELECT  nickname  FROM `".DB_PRE."self_info` WHERE user=$user LIMIT 1"));
      $nickname=explode("`",$nickname['nickname']);
      $nickname=urlencode($nickname[0]);



      #ADD  NEW  FRIEND  CLASS
	  if($_POST['do']=="add_class"){

          $classname=$_POST['new_classname'];
		  $query="INSERT INTO `".DB_PRE."friends_class` (`classid`, `classname`, `order`, `dateline`, `user`) VALUES (NULL, '$classname', '0', '$time', '$user')";
		  $db->query($query);

		  show_reminder($_SERVER['HTTP_REFERER'],"新建好友分类成功！");


	  }


      #EIDT  FRIEND  CLASS
	  if($_GET['do']=="edit"){

          $classname=$_GET['edit_classname'];
          $edit_id=(int)$_GET['do_id'];
		  $query="UPDATE `".DB_PRE."friends_class` SET `classname`='$classname', `dateline`='$time' WHERE (`classid`='$edit_id' AND user=$user)  LIMIT 1";
		  $db->query($query);

		  show_reminder($_SERVER['HTTP_REFERER'],"好友分类更新成功！");


	  }


      #DELETE  FRIEND  CLASS
	  if($_GET['do']=="del"){

          $classname=$_GET['edit_classname'];
          $edit_id=(int)$_GET['do_id'];

          //delete the related data from the table "friends_action"
 		  $query="SELECT fid FROM `".DB_PRE."friends_action` WHRER (`classid`='$edit_id')";
		  $result=$db->query($query);
          while($row=$db->fetch_array($result)){

               $query0="DELETE FROM `".DB_PRE."friends_action` WHERE (`aid`='$row[fid]') LIMIT 1";
		       $db->query($query0);


          }

          //delete the related data from the table "friends"
 		  $query="DELETE FROM `".DB_PRE."friends` WHERE (`fid`='$edit_id') LIMIT 1";
		  $db->query($query);


          //delete the data from the table "friends_class"
		  $query="DELETE FROM `".DB_PRE."friends_class` WHERE (`classid`='$edit_id') LIMIT 1";
		  $db->query($query);

		  show_reminder($_SERVER['HTTP_REFERER'],"好友分类删除成功！");


	  }



      #SEND NEW FRIEND REQUIRE
	  if($_POST['do']=="add_new_friend"){

         $website=trim($_POST['new_friend_website']);
         $last_str=substr($website,strlen($website)-1,strlen($website)+1);
         $website=($last_str=="/")?substr($website,0,strlen($website-8)):$website;

         $add_reason=$_POST['new_add_reason'];

         $website_send=$website."/admin/";#需以后处理地方；
		 $url = $website_send.'index.php?display=friend_add&do=friend_request&nickname='.$nickname.'&reason='.urlencode($add_reason).'&website='.$url_this;
         $return=file_get_contents($url);

         if($return=="OK"){

            $show_str="好友请求发送成功！";
	        $query="INSERT INTO `".DB_PRE."friends` (`fid`, `classid`, `name`, `notename`, `ip`, `add_reason`, `allow`, `website`, `dateline`, `user`) VALUES (NULL, '-1', '$website', 'no', 'no', 'no', '2', '$website', '$time', '$user')";
	        $db->query($query);

         }else if($return=="EXIST"){

         	$show_str="<font color=\"#FF3300\">好友请求已发送，请勿重复发送！</font>";

         }else{

            $show_str="<font color=\"#FF3300\">好友请求发送失败，请确保好友使用相同系统并检查网络状况！</font>您还可以将请求好友仅作为单向链接<a href=\"index.php?display=friend&do=add_aslink&site=".urlencode($website)."\" style=\"color:#2C81D8\">加入好友列表</a>";

         }


		 show_reminder($_SERVER['HTTP_REFERER'],"$show_str");


	  }



      #ADD FRIEND AS LINK
	  if($_GET['do']=="add_aslink"){

          $website=$_GET['site'];
		  $query="INSERT INTO `".DB_PRE."friends` (`fid`, `classid`, `name`, `notename`, `ip`, `add_reason`, `allow`, `website`, `dateline`, `user`) VALUES (NULL, '-1', '$website', 'no', 'no', 'no', '3', '$website', '$time', '$user')";
		  $db->query($query);

		  show_reminder($_SERVER['HTTP_REFERER'],"添加单向链接好友成功！");


	  }




      #CHANGE THE FRIENDS' CLASS '
      if($_POST['do']=="batch_chg_class"){

      	  $batch_handle_id=$_POST['friend_handle'];
      	  $chg_classid=(int)$_POST['chg_classid'];

          for($i=0;$i <count($batch_handle_id);$i++){

             $do_id=(int)$batch_handle_id[$i];
             $chg_class_value=(int)$batch_handle_id[$i];
             $time=strtotime("+8 hours");

             if($chg_classid=="-1"){

                $show_str="成功将好友拉至黑名单！";
             	$query="UPDATE `".DB_PRE."friends` SET `allow`='4', `dateline`='$time'  WHERE (`fid`='$do_id' AND user=$user) LIMIT 1";

             }else{

             	$show_str="更改好友分类成功！";
                $query="UPDATE `".DB_PRE."friends` SET `classid`='$chg_classid', `allow`='1', `dateline`='$time'  WHERE (`fid`='$do_id' AND user=$user) LIMIT 1";

             }
             $db->query($query);


          }
          show_reminder($_SERVER['HTTP_REFERER'],$show_str);


      }



      #DELETE THE FRIEND
      if($_POST['do']=="batch_del"){

      	  $batch_handle_id=$_POST['friend_handle'];
      	  $chg_classid=(int)$_POST['chg_classid'];

          for($i=0;$i <count($batch_handle_id);$i++){

             $do_id=(int)$batch_handle_id[$i];

             $query="DELETE FROM `".DB_PRE."friends` WHERE (`fid`='$do_id') LIMIT 1";
             $db->query($query);

          }
          show_reminder($_SERVER['HTTP_REFERER'],"好友删除成功！");


      }


      #BATCH HANDLE THE FRIEND REQUEST
      if($_POST['do']=="batch_allow_request"){

      	  $batch_handle_id=$_POST['friend_handle'];
      	  $chg_classid=(int)$_POST['chg_classid'];
      	  $show_str=($chg_classid=="5")?"您已通过好友的加友申请，系统已将好友添加到未分类好友中！":"您已忽略好友的加友申请！";

          for($i=0;$i <count($batch_handle_id);$i++){

             $do_id=(int)$batch_handle_id[$i];

             $query="SELECT website  FROM `".DB_PRE."friends` WHERE (`fid`='$do_id')  LIMIT 1";
             $website_send=$db->fetch_array($db->query($query));
             $website_send=$website_send['website'];
             $website_send=$website_send."/admin/";#需以后处理地方；


             if($chg_classid=="5"){


		         $url = $website_send.'index.php?display=friend_add&do=allow_request&nickname='.$nickname.'&website='.$url_this;
                 $return=file_get_contents($url);
                 echo $return;
                 //we must make sure that we are in the requester's friends list before we allow him to be our friend
                 if($return=="OK"){

                    $query0="UPDATE `".DB_PRE."friends` SET `allow`='5',`dateline`='$time' WHERE (`fid`='$do_id' AND user=$user) LIMIT 1";
                    $db->query($query0);

                 }else{

                 	show_reminder($_SERVER['HTTP_REFERER'],"<font color=\"#FF3300\">您或好友的网络问题，请稍后再试！</font>");

                 }

             }else{

                 $query="DELETE FROM `".DB_PRE."friends` WHERE (`fid`='$do_id' AND user=$user) LIMIT 1";
                 $url = $website_send.'index.php?display=friend_add&do=deny_request&nickname='.$nickname.'&website='.$url_this;
                 $return=file_get_contents($url);



             }
             $db->query($query);

          }
          show_reminder($_SERVER['HTTP_REFERER'],$show_str);


      }



      #EDIT THE FRIEND'S NOTENAME'
      if($_POST['do']=="edit_note"){

      	  $do_id=(int)$_POST['do_id'];
      	  $edit_notename=$_POST['edit_notename'];
      	  $time=strtotime("+8 hours");

          $query="UPDATE `".DB_PRE."friends` SET `notename`='$edit_notename', `dateline`='$time' WHERE (`fid`='$do_id' AND user=$user) LIMIT 1";
          $db->query($query);
          //echo $query;


          show_reminder($_SERVER['HTTP_REFERER'],"好友备注设置成功！");


      }








  }



?>
