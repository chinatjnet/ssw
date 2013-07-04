<?php
/*
 * Created on 2011-4-26
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

error_reporting('0');
@include("../class/page.class.php");
@include("function/reminder.php");

$total[0]=0;

if(@isset($_GET['list_classid'])){

  $list_upid=(int)$_GET['list_upid'];
  $list_classid=(int)$_GET['list_classid'];


  #GET  THE  ALBUM  LIST

  @$album_num=mysql_fetch_array(mysql_query("select count(user) FROM `".DB_PRE."class`  WHERE   upid=$list_upid   AND  `user`=$_SESSION[user]"));
  @$query="SELECT  upid,classid,classname  FROM `".DB_PRE."class`  WHERE  upid=$list_upid  AND  user=$_SESSION[user] ORDER BY c_order";
  $result=$db->query($query);
  while($row=$db->fetch_array($result)){
         $album_list[]=array(

                           "upid"=>$row[upid],
                           "classid"=>$row[classid],
                           "classname"=>$row[classname],
                           "album_name"=>urlencode($row[classname]),

                          );
  }
  $temp->assign("album_list",$album_list);



  #GET THE ALBUM NAME  WE USE NOW

  $album_name_now=mysql_fetch_array(mysql_query("select classname  FROM `".DB_PRE."class`  WHERE   classid=$list_classid   AND  `user`=$_SESSION[user]"));
  $album_name_now=$album_name_now[0];



   #GET THE PHOTO LIST

   $psize=20;//the pic number we show  in  each page

   $pageSize=$psize;
   $total=mysql_fetch_array(mysql_query("select count(pid) FROM `".DB_PRE."photos`  WHERE   classid=$list_classid   AND  `user`=$_SESSION[user]"));;
   pageft($total[0],$pageSize,1,1,1,5);

   if($total[0]!="0"){//to ensure we have at least one photo in the album

     $temp->assign("pic_num", $total[0]);
     $temp->assign("pagenav", $pagenav);



     $offset=$pageSize*($page-1);

     $query="SELECT * FROM `".DB_PRE."photos`  WHERE  classid=$list_classid  AND  user=$_SESSION[user] ORDER BY  dateline  DESC   LIMIT $offset,$pageSize";
     $result=$db->query($query);
      while($row=$db->fetch_array($result)){
    	    $thumb_path="function/image_thumb.php?path=../../$row[path]&width=100&height=75";
    	    $title_sub=mb_substr("$row[title]", 0, 8, 'utf-8');
            $cover_class=($row[cover]==1)?"cover":"";
            $photo_list[]=array(
                           "pid"=>$row[pid],
                           "upid"=>$row[upid],
                           "classid"=>$row[classid],
                           "title"=>$row[title],
                           "title_sub"=>$title_sub,
                           "path"=>"../".$row[path],
                           "cover_path"=>$row[path],
                           "thumb_path"=>$thumb_path,
                           "c_num"=>$row[c_num],
                           "cover_class"=>$cover_class,
                           "time"=>date("m-d H:i",$row[dateline]),
                            );

      }


   }


}
//print_r( $photo_list);
    $temp->assign("photo_list",$photo_list);
    $temp->assign("pic_num",$total[0]);
    $temp->assign("back_url",$_SERVER['HTTP_REFERER']);
    $temp->assign("list_upid",(int)$_GET[list_upid]);
    $temp->assign("class_id",$photo_list[0][classid]);
    $temp->assign("album_name",$album_name_now);




?>
