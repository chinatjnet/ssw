<?php
/*
 * Created on 2011-4-22
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 error_reporting(0);
 include_once("../class/page.class.php");
 include_once("function/common_function.php");



#ADMIN_INFO
$query="SELECT nickname  FROM `".DB_PRE."self_info` WHERE `user`='$_SESSION[user]' LIMIT 1";
$row=$db->fetch_array($db->query($query));
$nickname=explode("`",$row['nickname']);
$head_pic=SITE_ROOT."/admin/function/pic_cut/avatar_small/head_pic_0_small.jpg";
$temp->assign("head_pic",$head_pic);
$temp->assign("nickname",$nickname[0]);


#EMOTION  LIST
   $psize=10;
   $pageSize=$psize;
   $total=mysql_fetch_array(mysql_query("select count(*) FROM `".DB_PRE."emotions`"));

   pageft($total[0],$pageSize,1,1,1,5);

   $temp->assign("emotion_num", $total[0]);
   $temp->assign("pagenav", $pagenav);
   $temp->assign("back_page", $page);

   //$page_num=$page-1;

   $offset=$pageSize*($page-1);

   $query="SELECT  eid,message,c_num,origin,ip,dateline  FROM `".DB_PRE."emotions`   ORDER BY  dateline  DESC   LIMIT $offset,$pageSize";
   $result=mysql_query($query);
   while($row=mysql_fetch_array($result)){
           //"[:mad]";
           $message=preg_replace("/(\[\:)([a-z]*)(\])/",'<img src=themes/default/images/smiley/$2.gif    class="act_content_emotion_img">',unhtml($row[message]));
           $origin=($row[origin]=="1")?"Web":"Mobile";
           $emotion_list[]=array(

                           "eid"=>$row[eid],
                           "message"=>$message,
                           "c_num"=>$row[c_num],
                           "origin"=>$origin,
                           "ip"=>$row[ip],
                           "time"=>date("m-d   H:i",$row[dateline]),
                           );


   }


   $temp->assign("emotion_list",$emotion_list);
   unset($emotion_list);


?>
