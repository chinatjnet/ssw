<?php
/*
 * Created on 2011-6-1
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
  if(isset($_POST['do'])){

      if($_POST['do']=='update'){

      	$list_upid=(int)$_POST['list_upid'];
      	$label_upid=(int)$_POST['label_upid'];
      	$label_classid=(int)$_POST['label_classid'];
      	$label_belong=$_POST['label_belong'];
      	$type=$_POST['type'];


        $label_check=$_POST['label_check'];
        $label_style=$_POST['label_style'];
        $label_num=$_POST['label_num'];
        $label_tlength=$_POST['label_tlength'];
        $label_clength=$_POST['label_clength'];


        #DELETE THE OLD LABEL
        $query="DELETE FROM `".DB_PRE."label` WHERE (`show_id`='$list_upid' AND `upid`='$label_upid' AND `classid`='$label_classid' AND `type`='$type' )";
        $db->query($query);

        #UPDATE LABEL
 		for($i=0;$i <count($label_check);$i++){

 		   $label=$label_check[$i];
           $label_style_str=urldecode($label_style[$i]);
           $label_num_str=(int)$label_num[$i];
           $label_tlength_str=(int)$label_tlength[$i];
           $label_clength_str=(int)$label_clength[$i];

           //insert the new label
           $query="INSERT INTO `".DB_PRE."label` (`lid`, `show_id`, `type`, `upid`, `classid`,`label`, `style`,`num`,`tlength`,`clength`, `belong`, `user`) VALUES (NULL, '$list_upid', '$type', '$label_upid', '$label_classid', '$label', '$label_style_str', '$label_num_str', '$label_tlength_str', '$label_clength_str', '$label_belong', '$_SESSION[user]')";
           $db->query($query);

 		}
        echo 'ok';

      }else{

      	echo 'wrong';

      }

      exit();



  }



?>
