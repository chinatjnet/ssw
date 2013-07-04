<?php
/*
 * Created on 2011-4-17
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

$BasePath=$_SERVER['PHP_SELF'];
$BasePath='http://'.$_SERVER['SERVER_NAME'].substr($BasePath,0,strpos($BasePath,"/index.php"));
define('SITE_ROOT', $BasePath);

$Array_class_belong=Array("emotion","self_info","article","album","music","resource","collect","guestbook","lover");

include_once("include/config.php");
include_once("admin/function/visitor_record.php");
include_once("temp_function/temp_inc.php");
include_once("class/front_temp_class.php");
include_once('admin/function/common_function.php');


#THEME PRESENT
$query="SELECT theme  FROM `".DB_PRE."siteconfig` LIMIT 1";
$theme_present=$db->fetch_array($db->query($query));
$theme_present=$theme_present['theme'];
$temp->template_dir="themes/$theme_present";
$temp->assign("temp_dir",$temp->template_dir);
$temp->assign("admin_root",ADMIN_ROOT);
$temp->assign("site_root",SITE_ROOT);


#GET UID
if(isset($_GET['uid'])){

	$uid=(int)$_GET['uid'];

}else{

	$uid="0";

}

$_SESSION["user"]=$uid;

#GET THE SITE NAV

    $query="SELECT `belong`,`temp`,`classname`,`show`,`classid`  FROM `".DB_PRE."class` WHERE upid='0' AND `show`= '1' AND user='$_SESSION[user]' ORDER BY c_order  ASC";
    $result=$db->query($query);
	$site_nav="<li><a href='index.php'>首页</a></li>";
    while($row=$db->fetch_array($result)){

	   $belong=$Array_class_belong[$row['belong']-1];
	   $nav_display=$row['temp'];
	   $nav_display=explode(".",$nav_display);
       $site_nav.="<li><a href='index.php?display=".$nav_display[0]."&upid=".$row['classid']."&type=index'>".$row['classname']."</a></li>";

    }
    $temp->assign("site_nav",$site_nav);



#GET THE TEMPLATE AND BELONG
if(isset($_GET['upid'])){

	$upid=(int)$_GET['upid'];

	//get the template
    $query="SELECT `belong`,`temp`,`classname`  FROM `".DB_PRE."class` WHERE classid='$upid' AND user='$_SESSION[user]'   LIMIT 1 ";
    $result=$db->query($query);
    while($row=$db->fetch_array($result)){

	   $belong=$Array_class_belong[$row['belong']-1];
	   $temp_display=$row['temp'];
	   $location_display=$temp_display;
	   $location_uname=$row['classname'];

    }


}else{

	$upid="0";

}



#GET TYPE
if(isset($_GET['type'])){

	$type=$_GET['type'];
	if($_GET['type']!="index"){

	    $temp_display=explode(".",$temp_display);
	    $temp_display=$temp_display[0]."_".$_GET['type'].".".$temp_display[1];

	}

}else{

	$type="index";

}


#GET THE SITE CONFIG

    $query="SELECT title,sitename,description,keyword,statistic FROM `".DB_PRE."siteconfig` WHERE user='$_SESSION[user]'   LIMIT 1 ";
    $result=$db->query($query);
    while($row=$db->fetch_array($result)){

	   //$temp->assign("site_title",$row['title']);
	   $site_title_pre=$row['title'];
	   $site_name=$row['sitename'];
       $temp->assign("site_name",$row['sitename']);
       $temp->assign("site_description",$row['description']);
	   $temp->assign("site_keyword",$row['keyword']);
       $temp->assign("site_statistic",$row['statistic']);


    }





#GET  THE LOCATION NAV

$location_display=explode(".",$location_display);
$location_display=$location_display[0];
$location_uhref="index.php?display=$location_display&upid=$upid&type=index";

if($upid!="0"){
    if(isset($classid)){

        $query="SELECT `classname`  FROM `".DB_PRE."class` WHERE classid='$classid' AND user='$_SESSION[user]'   LIMIT 1 ";
        $location_cname=mysql_fetch_array(mysql_query($query));
        $location_cname=$location_cname['classname'];

	    $location_chref="index.php?display=$location_display&upid=$upid&classid=$classid&type=list";
        $location_nav="<a href='index.php'>首页</a> » <a href='".$location_uhref."'>".$location_uname."</a> » <a href='".$location_chref."'>".$location_cname."</a>";
		$site_title=$location_cname." - ".$site_name." - "."Powered By Sunsonworld";

     }else{

        $location_nav="<a href='index.php'>首页</a> » <a href='".$location_uhref."'>".$location_uname."</a>";
		$site_title=$location_uname." - ".$site_name." - "."Powered By Sunsonworld";

     }
//echo $location_nav;
     $temp->assign("location_nav",$location_nav);
	 $temp->assign("site_title",$site_title);
}

if($site_title==""){

   $site_title=$site_title_pre;
   $temp->assign("site_title",$site_title);

}


#GET CONTENT AND ASSIGN TEMPLATE
$ftemp=new  front_temp($upid,$type,$_SESSION['user']);
$assign_arr=$ftemp->assign_arr;
for($i=0;$i<count($assign_arr);$i++){

   for($j=0;$j<count($assign_arr[$i]);$j++){

       $temp->assign($assign_arr[$i][0+$j],$assign_arr[$i][1+$j]);

   }

}

#ASSIGN HEAD PIC
$temp->assign("s_headpic_s",SITE_ROOT."/admin/function/pic_cut/avatar_small/head_pic_".$_SESSION["user"]."_small.jpg");
$temp->assign("s_headpic_b",SITE_ROOT."/admin/function/pic_cut/avatar_big/head_pic_".$_SESSION["user"]."_big.jpg");


$temp->display($temp_display);

unset($assign_arr);

?>
