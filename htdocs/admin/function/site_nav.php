<?php
/*
 * Created on 2011-5-13
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

 if(@isset($_SESSION['user'])){

    $user= $_SESSION["user"];
    $Array_class_belong=Array("心情微博","个人档案","文章日志","个人相册","我的音乐","资源下载","网址收藏","访客留言","情侣空间");
    $Array_class=Array(
             "emotion"=>1,
             "self_info"=>2,
             "article"=>3,
             "album"=>4,
             "music"=>5,
             "resource"=>6,
             "collect"=>7,
             "guestbook"=>8,
             "lover"=>9
             );
    $class_belong_name=array_flip($Array_class);


    #NAV LIST
    $query="SELECT classid,classname,belong,temp  FROM `".DB_PRE."class`  WHERE  user=0  AND  upid=0  ORDER BY  c_order";
    $result=$db->query($query);
    while($row=$db->fetch_array($result)){

    	$query2="SELECT classid,classname  FROM `".DB_PRE."class`  WHERE  user=$_SESSION[user]  AND  upid=$row[classid]  ORDER BY  c_order";
    	$result2=mysql_query($query2);

        while($row2=mysql_fetch_array($result2)){

            $nav_now_link=($row2[classid]==$_GET[list_classid])?"nav_now_link":"";
        	$nav_child[]=array(

                     "cclassid"=>$row2[classid],
                     "cclassname"=>$row2[classname],
                     "nav_now_link"=>$nav_now_link

                     );

        }
        $fbelong_name=$class_belong_name[$row[belong]];

        //change the bar style  <ul> class should "nav_title"->"",AND Get_iduse(1,1)->Get_iduse(1,0)AND  <p> display=block;
        $nav_class=($row[classid]==$_GET[list_upid])?"":"nav_title";

        $nav_list[]=array(

                       "fclassid"=>$row[classid],
                       "fclassname"=>$row[classname],
                       "subname"=>mb_substr($row[classname],0,4,'utf-8'),
                       "fbelong"=>$row[belong],
                       "fbelong_name"=>$fbelong_name,
                       "nav_class"=>$nav_class,
                       "ftemp"=>$row[temp],
                       "nav_child"=>$nav_child

                       );
        unset($nav_child);


    }
    $nav_class=($row[classid]==$_GET[list_upid])?"":"nav_title";
    $style_var="nav_title";

    $temp->assign("nav_list", $nav_list);


   #THE UNIQUE STYLE
    if(!isset($_GET['display'])){

    	$_GET['display']="center";

    }elseif($_GET['display']=="mail"||$_GET['display']=="theme"){

        $_GET['display']="site_config";

    }elseif($_GET['display']=="label_set"){

    	$get_type=explode("_",$_GET['type']);

    	$_GET['display']=$get_type[0];

    	if($_GET['type']=="self_info_index"){

    	$_GET['display']='self_info';

    	}

    }




    $temp->assign("style_".$_GET['display'],"1");
    unset($nav_child);
    unset($nav_list);
 }

?>
