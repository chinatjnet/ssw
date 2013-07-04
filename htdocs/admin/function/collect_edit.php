<?php
/*
 * Created on 2011-4-16
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

#EDIT  COLLECT

if(@isset($_GET[do_id])){

#COLLECT'S  TITLE
$query="SELECT * FROM `".DB_PRE."collects` WHERE  collect_id=$_GET[do_id]";
$result=$db->query($query);
while($row=mysql_fetch_array($result)){

    $temp->assign("re_name",$row[name]);
    $temp->assign("re_url",$row[url]);
    $temp->assign("re_target",$row[target]);
    $temp->assign("re_description",$row[description]);
}

    $temp->assign("do_id",$_GET[do_id]);

}




#ARTICLE'S  UPDATE


if(isset($_POST["do_id"]) and !empty($_POST["do_id"])){


 	$a_fclassid= $_POST["a_fclassid"];
 	$a_cclassid= $_POST["a_cclassid"];
 	$collect_name= $_POST["collect_name"];
  	$collect_url= $_POST["collect_url"];
 	$collect_target= $_POST["collect_target"];
 	$collect_description= $_POST["collect_description"];
    $collect_show= $_POST["collect_show"];
 	$origin= "1";
 	$time=strtotime("+8 hours");
 	$user= $_SESSION["user"];
 	$location_url = "index.php?"."$_POST[location_url]";

    $check_name=trim($collect_name);
    $check_url=trim($collect_url);



    if(!empty($check_name) and !empty($check_url)){

        $query=" UPDATE `".DB_PRE."collects` SET   `classid`=$a_cclassid,`upid`=$a_fclassid, `name`='$collect_name', `url`='$collect_url', `target`='$collect_target', `description`='$collect_description', `show`='$collect_show',  `dateline`='$time'   WHERE (`collect_id`=$_POST[do_id]) LIMIT 1";
        $db->query($query);

        $reminder_str="更新收藏成功！";
        show_reminder("$location_url",$reminder_str);

    }else{

    	 show_reminder("$location_url","<font color=\"#FF3300\">收藏名称或URL不能为空！</font>");

    }






}





?>
