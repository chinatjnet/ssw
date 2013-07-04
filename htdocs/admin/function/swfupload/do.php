<?php

session_start();

include("../../../class/mysql.class.php");
include("../../../class/friend_action_class.php");
include("../../../include/db_config.php");

$url_this = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER["SCRIPT_NAME"];
$url_this = str_replace("/admin/function/swfupload/do.php","",$url_this);#需以后处理地方；

$album_name=$db->fetch_array($db->query("SELECT classname FROM `".DB_PRE."class` WHERE classid=$_SESSION[album_upid]  LIMIT 1"));

$album_name=$album_name['classname'];

$ac = $_GET['ac'];
$op = $_GET['op'];
if($op == 'config'){
	$xml="config";
}
elseif($op == 'finish'){
	$str = '上传成功：'.date("Y-m-d H:i:s")."\r\n";
	$handle = fopen('log.txt', 'a+');
	fwrite($handle, $str);
	fclose($handle);
}
elseif($_FILES && $_POST){
	$FILE = $_FILES["Filedata"];
	$tmp_name = $FILE['tmp_name'];
	$pinfo=pathinfo($FILE['name']);
    $ftype=$pinfo['extension'];
	$new_name = '../../../upload/photos/'.time().rand(100,999).".".$ftype; //上传目录

	#TO  INSERT  THE DATES  TO  THE  DB;
    $classid = $albumid;
    $proid = $_POST['proid'];
    $title = urldecode($_POST['title']);
    $path=str_replace("../../../","",$new_name);
 	$time=strtotime("+8 hours");
 	$user= $_SESSION["user"];
    $upid=$_SESSION[album_upid];




	$status = "success";
	if(@copy($tmp_name, $new_name)) {

		@unlink($tmp_name);

	} elseif((function_exists('move_uploaded_file') && @move_uploaded_file($tmp_name, $new_name))) {

	} elseif(@rename($tmp_name, $new_name)) {
	} else {
		$status = "failure";
	}
	$albumid = $_POST['albumid'];
	$xml="result";
}
else{

}
include 'swfupload.xml.php';

?>