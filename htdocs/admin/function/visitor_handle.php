<?php
/*
 * Created on 2011-5-4
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
   @include("function/reminder.php");



   #SHIELD||UNSHIELD THE IP WE SELECT
   if(isset($_POST['do'])||isset($_GET['do'])){

   	  if($_GET['do']=="shield_ip"||$_GET['do']=="unshield_ip"){

   	  	$shield_value=($_GET['do']=="shield_ip")?"1":"0";
   	  	$shield_str=($_GET['do']=="shield_ip")?"该IP成功屏蔽！":"该IP解除屏蔽成功！";

   	  	$shield_id=(int)$_GET[do_id];
   	  	$query="UPDATE `".DB_PRE."visitors` SET `shield`='$shield_value' WHERE (`vid`='$shield_id') LIMIT 1";
   	  	$db->query($query);
   	    //echo $query;

        show_reminder("index.php?display=visitor&list=".$_GET['list']."&page=".$_GET[pg],"$shield_str");


   	  }



   #BATCH  SHIELD||UNSHIELD  THE IP WE SELECT
   if($_POST['do']=="batch_shield_shield_ip"||$_POST['do']=="batch_shield_unshield_ip"||$_POST['do']=="batch_del"){

   	  	$batch_handle_id=$_POST["visitor_handle"];

        for($i=0;$i <count($batch_handle_id);$i++){

            $do_id=(int)$batch_handle_id[$i];
            if($_POST['do']=="batch_shield_shield_ip"){

            	$query="UPDATE `".DB_PRE."visitors` SET `shield`='1' WHERE (`vid`='$do_id') LIMIT 1";
            	$show_str="批量IP屏蔽成功！";

            }elseif($_POST['do']=="batch_shield_unshield_ip"){

            	$query="UPDATE `".DB_PRE."visitors` SET `shield`='0' WHERE (`vid`='$do_id') LIMIT 1";
            	$show_str="批量IP解除屏蔽成功！";


            }else{

            	$query="DELETE FROM `".DB_PRE."visitors` WHERE (`vid`='$do_id') LIMIT 1";
            	$show_str="列表批量删除成功！";

            }
   	  	    $db->query($query);
   	        //echo $query."<br>";

   	        }

        show_reminder("index.php?display=visitor&list=".$_POST['list']."&page=".$_POST[pg],$show_str);


   	}






   }



?>
