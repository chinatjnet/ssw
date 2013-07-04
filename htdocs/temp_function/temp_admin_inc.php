<?php
/*
 * Created on 2010-8-7
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

include_once("Smarty.class.php");
$temp=new Smarty();
$temp->config_dir="Config_File.class.php";
$temp->caching=false;
$temp->template_dir="../admin/themes/default";
$temp->compile_dir="../admin/templates_c";
$temp->cache_dir="../admin/template_cache";
$temp->left_delimiter="{";
$temp->right_delimiter="}";


?>
