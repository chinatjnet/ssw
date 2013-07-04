<?php
/*
 * Created on 2011-3-25
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
//header("Content-Type: text/html; charset=utf-8");
//include("../../class/mysql.class.php");
//$db =  new mysql('localhost','root','zy19910801','ssw_v1.0','',"UTF8");


$Array_class_belong=Array("心情微博","个人档案","文章日志","个人相册","我的音乐","资源下载","网址收藏","访客留言","情侣空间");


$query="SELECT * FROM `".DB_PRE."class`  WHERE  user=$_SESSION[user]  AND  upid=0  ORDER BY  c_order";


$result=$db->query($query);
while($row=$db->fetch_array($result)){


	$query2="SELECT * FROM `".DB_PRE."class`  WHERE  user=$_SESSION[user]  AND  upid=$row[classid]  ORDER BY  c_order";
	$result2=mysql_query($query2);

    while($row2=mysql_fetch_array($result2)){

    	$cclass[]=array("cclassid"=>$row2[classid],"corder"=>$row2[c_order],"cclassname"=>$row2[classname],"cshow"=>$row2[show]);

    }




    $count_class= mysql_fetch_array(mysql_query("SELECT COUNT(*)  AS total  FROM `".DB_PRE."class`  WHERE  user=$_SESSION[user]  AND  upid='$row[classid]'"));
    $click_show=($count_class[0]==0?"&nbsp;":"[&nbsp;+&nbsp;]");
    $click_show_id=($count_class[0]==0? "":"$row[classid]");


    $fshow=($row[show]=="1"?"<option selected='selected'  value='1'>是</option><option  value='0'>否</option>":"<option  value='1'>是</option><option  selected='selected'  value='0'>否</option>");

	if($row[belong]=="1"or$row[belong]=="2"or$row[belong]=="8"or$row[belong]=="9"){
		$add_class="<a  onclick=\"alert('此栏目不可新建二级栏目')\"></a>";}else{
		$add_class="<a  onclick=\"append($row[classid])\"></a>";
		};

	$fbelong=$Array_class_belong[$row[belong]-1];

    $fclass[]=array(

		      "add_class"=>$add_class,
		      "click_show"=>$click_show,
		      "click_show_id"=>$click_show_id,
		      "fclassid"=>$row[classid],
		      "forder"=>$row[c_order],
		      "fclassname"=>$row[classname],
		      "fbelong"=>$fbelong,
		      "fshow"=>$fshow,
		      "ftemp"=>$row[temp],
		      "cclass"=>$cclass

		      );
     unset($cclass);


}

$temp->assign("fclass", $fclass);


unset($cclass);
unset($fclass);
?>
