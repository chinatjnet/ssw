<?php
/*
 * Created on 2011-3-20
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

 if((@isset($_GET[display])||@isset($_POST[display]))and $_GET[display]!=""){

 	if(@isset($_GET[display])){

 	$temp_display=str_replace("/","",$_GET[display]).".html";
 	$include_file="function/".str_replace("/","",$_GET[display])."_list.php";

 	}else{

 	$temp_display=str_replace("/","",$_POST[display]).".html";
 	$include_file="function/".str_replace("/","",$_POST[display])."_list.php";

 	}

 	if(file_exists($include_file)){

 		include($include_file);

 		}


 }else{

    include_once ('function/index_list.php');
	$temp_display="index.html";


 }

//echo $temp_display;
?>
