<?php
/*
 * Created on 2011-4-26
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 error_reporting(0);
 include("../../class/class_image_edit.php");
//$_GET[path]="../../upload/photos/1303800349993.jpg";
//$_GET[width]=100;
//$_GET[height]=75;

 $p=new image_resized("$_GET[path]",$_GET[width],$_GET[height]);
?>
