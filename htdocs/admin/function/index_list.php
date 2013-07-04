<?php
/*
 * Created on 2011-5-23
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

if(isset($_SESSION['user'])){


 include_once('../class/class_qqwry.php');

 $QQWry=new QQWry;


   #DELETE THE OLD DATA FROM THE TABLE "friends_action"
    $time=strtotime("+8 hours");


    $today_zero = strtotime(date('Y-m-d 00:00:00', $time));//today zero
    $time_interval = $time-$today_zero;

    $z = strtotime('+1 day+8 hours');
    $tomorrow_zero=$z-$time_interval;//tomorrow zero

    $y = strtotime('-5 day+8 hours');
    $yesterday_zero=$y-$time_interval;//five days ago zero

    $query="DELETE FROM `".DB_PRE."friends_action` WHERE  dateline<=$yesterday_zero  AND user='$_SESSION[user]'";
    $db->query($query);



 $Array_action_type=Array(
                 "emotion"=>"更新了心情微博",
                 "self_info"=>"更新了心情微博",
                 "article"=>"发表了新文章日志",
                 "article_edit"=>"修改了文章日志",
                 "photo"=>"更新了新相册图片",
                 "music"=>"添加了新音乐",
                 "resource"=>"添加了新资源",
                 "collect"=>"添加了新收藏",

             );





    #GET SELF_INFO

    $query="SELECT head_pic,nickname,birthday,birthplace  FROM `".DB_PRE."self_info` WHERE `user`='$_SESSION[user]' LIMIT 1";
    $row=$db->fetch_array($db->query($query));

    $nickname=explode("`",$row['nickname']);
    $birthplace=explode("`",$row['birthplace']);
    $birthday=explode("`",$row['birthday']);


    $head_pic_origin=$row['head_pic'];
    $head_pic_name=str_replace(".jpg","",$head_pic_origin);

    $pic_path=SITE_ROOT.'/admin/function/pic_cut';

    $head_origin=$pic_path.'/avatar_origin/'.$head_pic_name.'.jpg';
    $head_big=$pic_path.'/avatar_big/'.$head_pic_name.'_big.jpg';
    $head_small=$pic_path.'/avatar_small/'.$head_pic_name.'_small.jpg';

    $temp->assign("head_big",$head_big);
    $temp->assign("head_small",$head_small);
    $temp->assign("nickname",$nickname[0]);
    $temp->assign("birthplace",$birthplace[0]);
    $temp->assign("birthday",$birthday[0]);






    #GET FRIENDS ACTIONS

	//$query="SELECT  DISTINCT website  FROM `".DB_PRE."friends_action` WHERE user='$_SESSION[user]' ORDER BY dateline DESC";
	$query="SELECT  *, COUNT( DISTINCT website)  FROM `".DB_PRE."friends_action` WHERE user='$_SESSION[user]' group by website  ORDER BY dateline DESC";

    $result=$db->query($query);

    while($row=$db->fetch_array($result)){

        $ip=$row[ip];

        $ipinfo = $QQWry->QQWry($ip);
        $coutry=iconv('gb2312', 'utf-8',$QQWry->Country);
        $local=iconv('gb2312', 'utf-8',$QQWry->Local);
        $location=$coutry.$local;

        if(ereg("^(127)",$ip)){

        	$location='本地网络';

        }elseif(ereg("^(192)",$ip)){

        	$location='局域网';

        }


          //get the show_name of the friend
          if($row[website]!="0"){

              $head_pic=$row[website]."/admin/function/pic_cut/avatar_small/head_pic_0_small.jpg";
              $result2=mysql_query("SELECT name ,notename  FROM `".DB_PRE."friends`  WHERE  website='$row[website]' LIMIT 1 ");
              while($row2=mysql_fetch_array($result2)){

                  $name=$row2['name'];
                  $notename=$row2['notename'];

          	      if($row2['notename']!="no"){

          	  	      $show_name=$row2['notename'];

          	      }else{

          	  	      $show_name=$row2['name'];

          	      }

              }

          }else{

          	      $show_name=$nickname[0];
          	      $name=$nickname[0];
                  $notename=$nickname[0];
                  $head_pic=$head_small;

          }

          //the total actions of the friend
          $total=mysql_num_rows(mysql_query("SELECT * FROM `".DB_PRE."friends_action` WHERE website='$row[website]' AND user=$_SESSION[user]"));

          //get the friend's other actions
          $result3=mysql_query("SELECT * FROM `".DB_PRE."friends_action` WHERE website='$row[website]' AND user=$_SESSION[user] ORDER BY dateline DESC   LIMIT 5");
          while($row3=mysql_fetch_array($result3)){

                $type_title=$Array_action_type[$row3['type']];
                $title=$row3['title'];
                $content=$row3['content'];

                if($row3['type']=="emotion"){
                    $title=preg_replace("/(\[\:)([a-z]*)(\])/",'<img src=themes/default/images/smiley/$2.gif    class="act_content_emotion_img">',unhtml($title));
                	$content=$title;
                	$title="";
                }

                if($row3['type']=="article"||$row3['type']=="article_edit"||$row3['type']=="photo"){

                	$title='《&nbsp;'.$title.'&nbsp;》';

                }

                $latest_action_list[]=array(

                                 "action_id"=>$row3['action_id'],
                                 "did"=>$row3['did'],
                                 "classid"=>$row3['classid'],
                                 "upid"=>$row3['upid'],
                                 "title"=>$title,
                                 "content"=>$content,
                                 "website"=>$row3['website'],
                                 "type"=>$row3['type'],
                                 "dateline"=>$row3['dateline'],
                                 "type_title"=>$type_title,


                           );


          }


          $action_list[]=array(

                           "website"=>$row['website'],
                           "ip"=>$row['ip'],
                           "location"=>$location,
                           "user"=>$row['user'],
                           "name"=>$name,
                           "notename"=>$notename,
                           "show_name"=>$show_name,
                           "latest_action_list"=>$latest_action_list,
                           "more_action"=>($total-3>0)?$total-3:"0",
                           "head_pic"=>$head_pic,

                           );

    unset($latest_action_list);


    }

    $temp->assign("action_list", $action_list);
    unset($action_list);






    #LATEST VISITORS
	$query="SELECT  *  FROM `".DB_PRE."visitors` WHERE  user='$_SESSION[user]'  ORDER BY  dateline DESC  LIMIT 10 ";

    $result=$db->query($query);

    while($row=$db->fetch_array($result)){

        $ip=$row[ip];

        $ipinfo = $QQWry->QQWry($ip);
        $coutry=iconv('gb2312', 'utf-8',$QQWry->Country);
        $local=iconv('gb2312', 'utf-8',$QQWry->Local);
        $location=$coutry.$local;

        if(ereg("^(127)",$ip)){

        	$location='本地网络';

        }elseif(ereg("^(192)",$ip)){

        	$location='局域网';

        }

        $show_location=mb_substr($location,0,8,'utf-8');
        $visitor_list[]=array(

                           "vid"=>$row[vid],
                           "ip"=>$row[ip],
                           "location"=>$location,
                           "show_location"=>$show_location,
                           "dateline"=>$row[dateline],
                           );



    }

    $temp->assign("visitor_list", $visitor_list);
    unset($visitor_list);



}

?>
