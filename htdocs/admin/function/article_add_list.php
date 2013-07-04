<?php
/*
 * Created on 2011-3-27
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

include("function/reminder.php");
include("function/class_select.php");

if(isset($_GET[re_do])||isset($_POST[do_id])){

	include("function/article_edit.php");
	$tool_title="编辑日志";
	$tool_submit="更新日志";
	$tool_do="update";
	$tool_do_name="re_do";

}else{

	$tool_title="写新日志";
    $tool_submit="发表日志";
    $tool_do="add";
    $tool_do_name="do";
}

$select_array=class_select("article","a_fclassid","a_cclassid","article_add_form");
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
$temp->assign("list_upid",(int)$_GET[list_upid]);
?>
