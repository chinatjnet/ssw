<?php
/*
 * Created on 2011-3-30
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

 include_once("../class/page.class.php");
//error_reporting(0);
//print ("http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);
//echo $_SERVER["REQUEST_URI"] ;



$Array_limit=Array(
             "保存草稿"=>4,
             "所有可见"=>3,
             "好友可见"=>2,
             "情侣可见"=>1,
             "主人可见"=>0,
             );

$Array_project=Array(
             "article"=>Array(
                         "table"=>"articles",
                         "psize"=>"8",
                         "id_name"=>"aid",
                         "upid"=>"91",
                        ),
             "collect"=>Array(
                         "table"=>"collects",
                         "psize"=>"18",
                         "id_name"=>"collect_id",
                         "upid"=>"143",
                        ),
             "music"=>Array(
                         "table"=>"musics",
                         "psize"=>"18",
                         "id_name"=>"music_id",
                         "upid"=>"155",
                        ),
             "resource"=>Array(
                         "table"=>"resources",
                         "psize"=>"10",
                         "id_name"=>"reso_id",
                         "upid"=>"166",
                        ),
             );


 $display=$_GET[display];
//$_GET[list_upid]=$Array_project[$display][upid];;//***Get  the  upid  we  need***//

// $list_upid=(int)$_GET[list_upid];//***Get  the  upid  we  need***//

//$_GET[list_classid]="108";



if(isset($_GET[list_upid])){


	$display=$_GET[display];       //IMPORTANT  VARIABLE
	$$_GET[display]=$_GET[display];

	//echo ${$_GET[display]};

	$table=$Array_project[$display]['table'];
    $psize=$Array_project[$display]['psize'];
    $id_name=$Array_project[$display]['id_name'];



   if(isset($_GET[list_classid])){

    $list_condition='classid='.(int)$_GET[list_classid]."  AND `show`!=4  ";

   }else{

   	$list_condition='upid='.(int)$_GET[list_upid]."  AND `show`!=4   ";
   	$temp->assign("class_all","font-weight:bold;color:#333");

   }




   if(isset($_GET[list_classid]) and (int)$_GET[list_classid]=="-1"){

    $list_condition='upid='.$_GET[list_upid]."  AND `show`=4   ";
    $temp->assign("class_draft","font-weight:bold;color:#333");
   }



   #ARTICLE   LIST


   $pageSize=$psize;
   $total=mysql_fetch_array(mysql_query("select count(user) FROM  `".DB_PRE."$table`  WHERE   $list_condition   AND  `user`=$_SESSION[user]"));
   pageft($total[0],$pageSize,1,1,1,5);

   $temp->assign($display."_num", $total[0]);
   $temp->assign("pagenav", $pagenav);

   //$page_num=$page-1;

   $offset=$pageSize*($page-1);

   $query="SELECT * FROM `".DB_PRE."$table`  WHERE   $list_condition   AND  `user`=$_SESSION[user]   ORDER BY  dateline  DESC   LIMIT $offset,$pageSize";
   $result=mysql_query($query);

   while($row=mysql_fetch_array($result)){

    $Array_show=Array("","","","","");
    $Array_show[$row[show]]="selected=\"selected\"";
    $show=$row[show];
    $loaction_url=urlencode($_SERVER["QUERY_STRING"]);

    $article_list_style=($row[classid]==$_GET[list_classid])?"style=\"font-weight:bold;color:#333333\"":"";

    $query_classname="SELECT classname FROM `".DB_PRE."class`  WHERE   classid=$row[classid]   AND  user=$_SESSION[user]  LIMIT  1";
    $result_classname=mysql_fetch_array($db->query($query_classname));
    //$result_classname[0];    ARTICLE'S  CLASSNAME


    $publish_time_Y=date("Y-m-d",$row["dateline"]);
    $publish_time_H=date("h:i",$row["dateline"]);
    $publish_time=$publish_time_Y."&nbsp;&nbsp;&nbsp;&nbsp;".$publish_time_H;

    if($display=="article"){

        $query2="SELECT message FROM `".DB_PRE."articles_content`  WHERE  mid=$row[aid]";//get  article's content'
        $result2=$db->query($query2);
        while($row2=$db->fetch_array($result2)){

             $content=html2text($row2[message]);
           	 $content=mb_substr($content,0,120,'utf-8')."...";

         }
    }


   switch($display){
          case  "article":

          $article_list[]=array(

                           "result_classname"=>$result_classname[0],
                           "aid"=>$row['aid'],
                           "classid"=>$row['classid'],
                           "upid"=>$row['upid'],
                           "title"=>$row['title'],
                           "content"=>$content,
                           "select_show_str"=>$select_show_str,
                           "c_num"=>$row['c_num'],
                           "viewnum"=>$row['viewnum'],
                           "publish_time"=>$publish_time,
                           "array_show_".$show=>"selected=\"selected\""

                           );

          break;

          case  "collect":

          $collect_list[]=array(

                           "result_classname"=>$result_classname[0],
                           "collect_id"=>$row['collect_id'],
                           "classid"=>$row['classid'],
                           "upid"=>$row['upid'],
						   "name"=>$row['name'],
                           "url"=>$row['url'],
                           "url_show"=>mb_substr($row['url'],0,30,'utf-8'),
                           "description"=>$row['description'],
                           "select_show_str"=>$select_show_str,
                           "target"=>$row['target'],
                           "dateline"=>$row['dateline'],
                           "publish_time"=>$publish_time,
                           "array_show_".$show=>"selected=\"selected\""

                           );

          break;

          case  "music":

          if(is_int(strpos($row['path'],"http:"))){  //to  ensure  the  file  are  local  file
          	$path=$row['path'];
          	$file_path="no";
          	}else{
          	$path="../".$row['path'];
          	$file_path=str_replace(".mp3","",$row['path']);
          	$file_path=str_replace("upload/music/","",$file_path);
            }

          $music_list[]=array(

                           "result_classname"=>$result_classname[0],
                           "music_id"=>$row['music_id'],
                           "classid"=>$row['classid'],
                           "upid"=>$row['upid'],
                           "name"=>$row['name'],
						   "name_show"=>mb_substr($row['name'],0,8,'utf-8'),
                           "singer"=>$row['singer'],
                           "lyric"=>$row['lyric'],
                           "path"=>$path,
                           "file_path"=>$file_path,
                           "rank"=>$row['rank'],
                           "description"=>$row['description'],
                           "select_show_str"=>$select_show_str,
                           "notlove"=>$row['notlove'],
                           "samelove"=>$row['samelove'],
                           "dateline"=>$row['dateline'],
                           "publish_time"=>$publish_time

                           );
          break;

          case  "resource":

          if(is_int(strpos($row[path],"http:"))){  //to  ensure  the  file  are  local  file
          	$path=$row[path];
          	$file_path="no";
          	}else{

          	$path="function/file_down.php?path=".base64_encode($row[path]);
          	$file_path=base64_encode($row[path]);

            }


          $publish_time=date("Y-m-d",$row[dateline]);
          $description=html2text($row[description]);
          $description=mb_substr($description,0,50,'utf-8');
          $resource_list[]=array(

                           "result_classname"=>$result_classname[0],
                           "reso_id"=>$row['reso_id'],
                           "classid"=>$row['classid'],
                           "upid"=>$row['upid'],
                           "name"=>$row['name'],
                           "path"=>$path,
                           "file_path"=>$file_path,
                           "rank"=>$row['rank'],
                           "type"=>$row['type'],
                           "size"=>$row['size'],
                           "description"=>$description,
                           "select_show_str"=>$select_show_str,
                           "view_num"=>$row['view_num'],
                           "down_num"=>$row['down_num'],
                           "dateline"=>$row['dateline'],
                           "publish_time"=>$publish_time

                           );
           break;





     }



   }


   $temp->assign($display."_list", ${$display."_list"});




   #ARTICLE || COLLECT || MUSIC   CHILD  CLASS  LIST

   $query="SELECT * FROM `".DB_PRE."class`  WHERE  upid=".(int)$_GET[list_upid]."  AND  user=$_SESSION[user]  ORDER BY  c_order";
   $result=$db->query($query);
   while($row=$db->fetch_array($result)){

   $cclass_list_class=($row[classid]==$_GET[list_classid])?"style=\"font-weight:bold;color:#333333\"":"";
   $cclass_list[]=array(

                    "cclass_name"=>$row[classname],
                    "cclass_id"=>$row[classid],
                    "cclass_list_class"=>$cclass_list_class

                   );

   }


   $temp->assign("cclass_list", $cclass_list);
   $temp->assign("list_upid", $_GET[list_upid]);

   $article_now_url= str_replace("$display",$display."_add",$_SERVER["QUERY_STRING"]);//use  where  the  'edit' link
   $temp->assign("article_now_url",$article_now_url);
   $temp->assign("location_url",urlencode($_SERVER["QUERY_STRING"]));//we need to insert  this  to go  back;
   $temp->assign("send_url",$_SERVER["QUERY_STRING"]);//we need to insert  this  in  the  handle  delele's  a:src


   unset(${$display."_list"});
   unset($cclass_list);

}else{


 	//header("location:../error/404.htm");


}




?>
