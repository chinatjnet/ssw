<?php
/*
 * Created on 2011-6-19
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

 $SiteRoot= 'http://'.$_SERVER['SERVER_NAME'].$_SERVER["SCRIPT_NAME"];
 $SiteRoot = str_replace("/login.php","",$SiteRoot);
 echo  file_get_contents("$SiteRoot/index.php?display=login");

?>
