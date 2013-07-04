<?php
/*
 * Created on 2011-4-25
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

 @$list_upid=(int)$_GET[list_upid];
 @$_SESSION['album_upid']=(int)$_GET[list_upid];

 $query="SELECT * FROM `".DB_PRE."class`  WHERE  upid='$list_upid'";
 $result=$db->query($query);
 while($row=$db->fetch_array($result)){

    $temp->assign("albumid",$row[classid]);

 }


 $url = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']).'/function';
 $temp->assign("url",$url);


?>
