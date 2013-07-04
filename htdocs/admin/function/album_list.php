<?php
/*
 * Created on 2011-4-26
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

          //   "密码访问"=>5,
         //    "保存草稿"=>4,
         //    "所有可见"=>3,
         //    "好友可见"=>2,
         //    "情侣可见"=>1,
         //    "主人可见"=>0,


// error_reporting(0);
// @$_SESSION[user]=0;
// include("../../class/mysql.class.php");
// $db =  new mysql('localhost','root','zy19910801','ssw_v1.0','',"UTF8");
if(isset($_GET[list_upid])){


  @$list_upid=(int)$_GET[list_upid];

  @$album_num=mysql_fetch_array(mysql_query("select count(user) FROM `".DB_PRE."class`  WHERE   upid=$list_upid   AND  `user`=$_SESSION[user]"));
  @$query="SELECT * FROM `".DB_PRE."class`  WHERE  upid=$list_upid  AND  user=$_SESSION[user] ORDER BY c_order";
  $result=$db->query($query);
  while($row=$db->fetch_array($result)){

        $pic_num=mysql_fetch_array(mysql_query("select count(user) FROM `".DB_PRE."photos`  WHERE   classid=$row[classid]   AND  `user`=$_SESSION[user]"));

        $cover="function/image_thumb.php?path=../../upload/photos/default_cover.jpg&width=100&height=75";
        $show=3;
        #to  get the album's cover  exsist  or  default
        $cover_album=mysql_num_rows(mysql_query("SELECT album_id FROM `".DB_PRE."albums`  WHERE  `classid`=$row[classid]  AND  user=$_SESSION[user]"));

        if($cover_album!=0){

            $query2="SELECT  * FROM `".DB_PRE."albums`  WHERE  `classid`=$row[classid]  AND  user=$_SESSION[user]";
            $result2=mysql_query($query2);
            while($row2=mysql_fetch_array($result2)){

                $cover="function/image_thumb.php?path=../../$row2[cover]&width=100&height=75";
            	$show=$row2['show'];
                $list_classid=$row2['classid'];
                $question=$row2['question'];
                $answer=$row2['answer'];

            }
        }


         $album_list[]=array(
                           "upid"=>$row['upid'],
                           "classid"=>$row['classid'],
                           "pic_num"=>$pic_num[0],
                           "classname"=>$row['classname'],
                           "album_name"=>urlencode($row['classname']),
                           "cover"=>$cover,
                           "show"=>$show,
                           "question"=>$question,
                           "answer"=>$answer,
                          );
     unset($cover);

	 }
     $temp->assign("album_num",$album_num[0]);
     $temp->assign("album_list",$album_list);
     $temp->assign("list_upid",$list_upid);
     unset($album_list);

}else{


 	header("location:../error/404.htm");


}

?>
