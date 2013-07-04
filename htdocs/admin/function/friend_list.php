<?php
/*
 * Created on 2011-5-5
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 include("../class/page.class.php");
 include('../class/class_qqwry.php');

 $QQWry=new QQWry;

 $Friend_limit=Array(
             "未分类"=>4,
             "黑名单"=>4,
             "单向链接"=>3,
             "我的请求"=>2,
             "通过请求"=>1,
             "好友请求"=>0,

             );

 $time=strtotime("+8 hours");
 $user= $_SESSION["user"];


 if(isset($_SESSION['user'])){

     if(($_GET['classid']=="0"and $_GET['allow']=="1")or!isset($_GET['allow'])){

     	$class_all="font-weight:bold;color:#333";//the style of the link "all friends"
     	$friend_list_condition="allow=1";

     }else{

     	$class_all="";
     	if($_GET['classid']!="0"and $_GET['allow']=="1"){

     		$friend_list_condition="classid=".(int)$_GET['classid']."  AND  allow=1";

     	}elseif($_GET['allow']!="1"){

            $friend_list_condition="allow=".(int)$_GET['allow'];


     	}

     }


     $friend_total=mysql_num_rows(mysql_query("SELECT fid FROM `".DB_PRE."friends` WHERE allow=1  AND user=$user"));


     #FRIEND LIST
     $total=mysql_num_rows(mysql_query("SELECT fid FROM `".DB_PRE."friends` WHERE  $friend_list_condition  AND user=$user"));
     $psize=8;
     $pageSize=$psize;

     pageft($total,$pageSize,1,1,1,5);

     $temp->assign("pagenav", $pagenav);
     $temp->assign("back_page", $page);

     $offset=$pageSize*($page-1);

     if($total!=0){
         $query="SELECT * FROM `".DB_PRE."friends` WHERE    $friend_list_condition  AND  user=$_SESSION[user] ORDER BY dateline DESC  LIMIT $offset,$pageSize";
         $result=$db->query($query);
         while($row=$db->fetch_array($result)){

             $ip=$row[ip];

             $ipinfo = $QQWry->QQWry($ip);
             $coutry=iconv('gb2312', 'utf-8',$QQWry->Country);
             $local=iconv('gb2312', 'utf-8',$QQWry->Local);
             $location=$coutry.$local;

             if(ereg("^(127)",$ip)){

        	     $location='本地网络';

             }elseif(ereg("^(192)",$ip)){

             	$location='局域网';

             }

             $province_location=str_replace($local,"",$location);

             $show_time=date("Y",$row[dateline]).'年'.date("m",$row[dateline]).'月'.date("d",$row[dateline]).'日';
             $show_name=($row['notename']=="no")?mb_substr($row['name'],0,20,'utf-8'):$row['notename'];

             $add_reason=($_GET['allow']=="0")?"【请求理由】：".$row['add_reason']:"";

		     $friend_list[]=array(

                            "fid"=>$row['fid'],
                            "did"=>$row['did'],
                            "classid"=>$row['classid'],
                            "name"=>$row['name'],
                            "notename"=>$row['notename'],
                            "show_name"=>$show_name,
                            "ip"=>$row['ip'],
                            "location"=>$location,
                            "province_location"=>$province_location,
                            "add_reason"=>$add_reason,
                            "website"=>$row['website'],
						    "list_class"=>$list_class,
						    "time"=>$show_time,

                           );

         }

         $temp->assign("friend_list",$friend_list);
     }




     #FRIEND CLASS LIST
	 $query="SELECT classid,classname FROM `".DB_PRE."friends_class` WHERE user=$_SESSION[user] ORDER BY dateline DESC";
	 $result=$db->query($query);
	 while($row=$db->fetch_array($result)){

         $list_class=($row['classid']==$_GET['classid'])?"font-weight:bold;color:#333":"";
		 $friend_class_list[]=array(

                            "classid"=>$row['classid'],
                            "classname"=>$row['classname'],
						    "list_class"=>$list_class,

                           );


	 }



     #THE CHANGE OF MY REQUEST || FRIENS REQUEST
     if($_GET['allow']=="0"){

     	$request_class="style='display:none;'";
     	$allow_button="display:inline;";

     	if($_GET['allow']=="0"){
     	$request_handle='<select name="jumpMenu2" id="top_jump" style="margin-top:-5px!important;margin-top:0px;" onchange="if(this.selectedIndex>-1)Get_id(\'chg_classid\').value=this.options[this.selectedIndex].value;document.friend_list_handle.submit();"><option value="0">移动申请至</option>';


                 for($i=0;$i<count($friend_class_list);$i++){

                 $request_handle.='<option value="'.$friend_class_list[$i][classid].'"  >'.$friend_class_list[$i][classname].'</option>';

                 }

                $request_handle.='<option value="-1">黑名单</option></select>';

     	}

     }else{

     	$request_top_button_str="好友";

     }


//echo $request_handle;
	 $temp->assign("friend_class_list",$friend_class_list);
     $temp->assign("class_all",$class_all);
     $temp->assign("class_allow".$_GET['allow'],"font-weight:bold;color:#333");//the style of "single-handed links||my request||friend request"
     $temp->assign("friend_total",$friend_total);
     $temp->assign("request_class",$request_class);//the style of  my request||friend request's change'
     $temp->assign("request_handle",$request_handle);
     $temp->assign("allow_button",$allow_button);




 }


?>
