<?php
/*
 * Created on 2011-3-23
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
include("function/reminder.php");
$Array_class=Array(
             "emotion"=>1,
             "self_info"=>2,
             "article"=>3,
             "album"=>4,
             "music"=>5,
             "resource"=>6,
             "collect"=>7,
             "guestbook"=>8,
             "lover"=>9
             );

$Array_class_key=array_keys($Array_class);


//UPDATE  CLASS  SET

if(isset($_GET["pref_name"])){
   $pref_classid=$_GET["pref_classid"];
   $pref_order=$_GET["pref_order"];
   $pref_name=$_GET["pref_name"];
   $pref_show=$_GET["pref_show"];
   $pref_temp=$_GET["pref_temp"];

   $prec_classid=$_GET["prec_classid"];
   $prec_order=$_GET["prec_order"];
   $prec_name=$_GET["prec_name"];

   for($i=0;$i <count($pref_name);$i++){
   $query_updatef="UPDATE `".DB_PRE."class` SET `c_order`='$pref_order[$i]', `classname`='$pref_name[$i]', `show`='$pref_show[$i]', `temp`='$pref_temp[$i]' WHERE (`classid`='$pref_classid[$i]') LIMIT 1";
   $db->query($query_updatef);
   }

   for($i=0;$i <count($prec_name);$i++){
   $query_updatec="UPDATE `".DB_PRE."class` SET `c_order`='$prec_order[$i]', `classname`='$prec_name[$i]'  WHERE (`classid`='$prec_classid[$i]') LIMIT 1";
   $db->query($query_updatec);
   }

}





//ADD  FATHER   CLASS
if(isset($_GET["newf_name"])){



 $newf_order=$_GET["newf_order"];
 $newf_name=$_GET["newf_name"];
 $newf_belong=$_GET["newf_belong"];
 $newf_show=$_GET["newf_show"];
 $newf_temp=$_GET["newf_temp"];


 $count_lover= mysql_fetch_array(mysql_query("SELECT COUNT(*)  AS total  FROM `".DB_PRE."class`  WHERE  user=$_SESSION[user]  AND  belong=$Array_class[lover]"));
 $lover_reminder=($count_lover[0]=="0")?"":"<font color=\"#FF3300\">·已有情侣·不可添加小三哦</font>";

for($i=0;$i <count($newf_name);$i++){
	$check_name=trim($newf_name[$i]);

	if(!empty($check_name)){

		$belong=$Array_class[$newf_belong[$i]];
		if($belong==$Array_class[lover] and $count_lover[0]!=="0"){
			$add_reminder=$lover_reminder;
		}else{
		    $newf_temp[$i]=="default"||$newf_temp[$i]==""?$temp=$Array_class_key[$belong-1].".html":$temp=$newf_temp[$i];
		    $time=strtotime("+8 hours");

		    $query="INSERT INTO `".DB_PRE."class` (`classid`, `upid`, `c_order`, `classname`, `belong`, `show`, `temp`, `dateline`,`user`) VALUES (NULL,0, $newf_order[$i],'$newf_name[$i]', $belong, $newf_show[$i],'$temp',$time,$_SESSION[user])";
		    $db->query($query);
		    $add_reminder="";
		}

	}
}


}





//ADD  CHILD   CLASS

if(isset($_GET["newc_name"])){


 $newc_upid=$_GET["newc_upid"];
 $newc_order=$_GET["newc_order"];
 $newc_name=$_GET["newc_name"];
 $newc_belong="0";
 $newc_show="1";
 $newc_temp="0";


for($i=0;$i <count($newc_name);$i++){
	$checkc_name=trim($newc_name[$i]);

	if(!empty($checkc_name)){

		$time=strtotime("+8 hours");

		$query2="INSERT INTO `".DB_PRE."class` (`classid`, `upid`, `c_order`, `classname`, `belong`, `show`, `temp`, `dateline`,`user`) VALUES (NULL,$newc_upid[$i], $newc_order[$i],'$newc_name[$i]', '$newc_belong', $newc_show,'$newc_temp',$time,$_SESSION[user])";
		$db->query($query2);

	}
}


}



//DELETE  CLASS

if(isset($_GET["do"])and $_GET["do"]=="del"){

  $query=" DELETE FROM `".DB_PRE."class` WHERE (`classid`='$_GET[do_id]') LIMIT 1";
  $db->query($query);
  $query=" DELETE FROM `".DB_PRE."class` WHERE (`upid`='$_GET[do_id]')";
  $db->query($query);
}



$show_reminder_str="栏目设置成功".$add_reminder."!";


show_reminder("index.php?display=class_manage",$show_reminder_str);
?>
