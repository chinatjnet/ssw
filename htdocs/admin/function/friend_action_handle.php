<?php
/*
 * Created on 2011-5-17
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */


 include("../class/friend_action_class.php");


 if(isset($_GET['website']) and $_GET['do']=="new_action"){

	  $did=(int)$_GET['did'];
	  $classid=$_GET['classid'];
	  $upid=(int)$_GET['upid'];
	  $title=urldecode($_GET['title']);
	  $content=urldecode($_GET['content']);
	  $website=$_GET['website'];
	  $type=$_GET['type'];
	  $dateline=strtotime("+8 hours");
	  $user=$_GET['user'];



     $faction=new friend_action_add($did,$classid,$upid,$title,$content,$website,$type,$ip,$dateline,$user);
     $faction->action_get();


  }


?>
