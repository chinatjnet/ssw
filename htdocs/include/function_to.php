<?php
/*
 * Created on 2011-3-20
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

if(isset($_GET["do"])||isset($_POST["do"])){

      	if(isset($_GET["do"])){$include__handle_file="function/".str_replace("/","",$_GET[display])."_handle.php";
      	}else{
      		$include__handle_file="function/".str_replace("/","",$_POST[display])."_handle.php";

      	}

      	if(file_exists($include__handle_file)){
 		    include($include__handle_file);
 		}


}
?>
