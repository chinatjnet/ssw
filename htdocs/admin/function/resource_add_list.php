<?php
/*
 * Created on 2011-4-17
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

include("function/reminder.php");
include("function/class_select.php");


if(isset($_GET[re_do])||isset($_POST[do_id])){

    $pre_file_path=$_GET[path];

	include("function/resource_edit.php");
	$tool_title="编辑资源";
	$tool_submit="提交更改";
	$tool_do="update";
	$tool_do_name="re_do";

}else{

	$tool_title="添加资源";
    $tool_submit="确认添加";
    $tool_do="add";
    $tool_do_name="do";
    $pre_file_path="no";
}



$select_array=class_select("resource","a_fclassid","a_cclassid","resource_add_form");
//$select_option=array($select_option,$cclass_array,$fclass_array,$cclass_option);
//echo $select_array[1];
$temp->assign("select_option",$select_array[0]);
$temp->assign("cclass_array",$select_array[1]);
$temp->assign("fclass_array",$select_array[2]);
$temp->assign("cclass_option",$select_array[3]);

$temp->assign("tool_title",$tool_title);
$temp->assign("tool_submit",$tool_submit);
$temp->assign("tool_do",$tool_do);
$temp->assign("tool_do_name",$tool_do_name);
$temp->assign("location_url",$_GET[location_url]);
$temp->assign("pre_file_path",$pre_file_path);



?>
