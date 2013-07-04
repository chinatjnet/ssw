<?php
/*
 * Created on 2011-3-20
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
error_reporting(0);
header("Content-Type: text/html; charset=utf-8");
session_start();
//$_SESSION["user"]="0";
if((isset($_SESSION["user"]) and isset($_SESSION["username"]))||($_GET['display']=='login')){

include("../class/mysql.class.php");
include("../include/db_config.php");
include("function/common_function.php");
include("include/function_to.php");
include("temp_display.php");

}else{


	echo "badrequire";
    exit();


}


?>
