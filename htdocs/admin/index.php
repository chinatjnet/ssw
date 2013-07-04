<?php
/*
 * Created on 2011-3-20
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
*/

$pagestartime=microtime();

$BasePath=$_SERVER['PHP_SELF'];
$BasePath=substr($BasePath,0,strpos($BasePath,"/index.php"));

$SiteRoot= 'http://'.$_SERVER['SERVER_NAME'].$_SERVER["SCRIPT_NAME"];
$SiteRoot = str_replace("/admin/index.php","",$SiteRoot);


define('ADMIN_ROOT', $BasePath);
define('SITE_ROOT', $SiteRoot);


include_once("../temp_function/temp_admin_inc.php");

include_once("include/config.php");
$temp->assign("temp_dir",$temp->template_dir);
$temp->assign("admin_root",ADMIN_ROOT);
$temp->assign("site_root",SITE_ROOT);


include_once ('function/site_nav.php');


$pageendtime = microtime();
$starttime = explode(" ",$pagestartime);
$endtime = explode(" ",$pageendtime);
$totaltime = $endtime[0]-$starttime[0]+$endtime[1]-$starttime[1];
$timecost = number_format($totaltime,6);
//$timecost = sprintf("%s",$totaltime);
//echo "<center style='font-size:13px'>页面运行时间: $timecost 秒</center>";
$temp->assign("timecost",$timecost);

$temp->display($temp_display);
?>
