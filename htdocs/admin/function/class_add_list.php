<?php
/*
 * Created on 2011-3-29
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

 include("function/reminder.php");

 if(isset($_POST[new_upid])){

    $newc_upid=$_POST["new_upid"];
    $newc_order="0";
    $newc_name=$_POST["new_classname"];
    $newc_belong="0";
    $newc_show="1";
    $newc_temp="0";

    $checkn_name=trim($_POST['new_classname']);

	if(!empty($checkn_name)){

		$time=strtotime("+8 hours");

		$query="INSERT INTO `".DB_PRE."class` (`classid`, `upid`, `c_order`, `classname`, `belong`, `show`, `temp`, `dateline`,`user`) VALUES (NULL,$newc_upid, $newc_order,'$newc_name', '$newc_belong', $newc_show,'$newc_temp',$time,$_SESSION[user])";
		$db->query($query);

		echo $db->insert_id();
	}



 }


?>
