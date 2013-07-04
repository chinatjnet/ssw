<?php
/*
 * Created on 2011-5-3
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
//header("Content-type: text/html; charset=utf-8");


 include("../class/page.class.php");
 include('../class/class_qqwry.php');

    $QQWry=new QQWry;


 if(isset($_SESSION["user"])){


    //get the time zero
    $time=strtotime("+8 hours");


    $today_zero = strtotime(date('Y-m-d 00:00:00', $time));//today zero
    $time_interval = $time-$today_zero;

    $z = strtotime('+1 day+8 hours');
    $tomorrow_zero=$z-$time_interval;//tomorrow zero

    $y = strtotime('-1 day+8 hours');
    $yesterday_zero=$y-$time_interval;//yesterday zero


    $list=(isset($_GET['list']))?str_replace("/","",$_GET['list']):"today";
    $shield_var="屏蔽IP";
    $shield_var1="屏蔽该IP";
    $shield_do="shield_ip";

    switch ($list){

    	case "today":

    	$condition="WHERE  dateline>=$today_zero AND dateline<$tomorrow_zero AND shield='0' ";

    	break;

    	case "yesterday":

    	$condition="WHERE  dateline>=$yesterday_zero AND dateline<$today_zero AND shield='0' ";

    	break;

    	case "all":

    	$condition="WHERE  shield='0' ";

    	break;

    	case "shield":

    	$condition="WHERE  shield='1'";
    	$shield_var="解除屏蔽";
    	$shield_var1="解除屏蔽";
    	$shield_do="unshield_ip";

    	break;

    	default:
    	;
    }

    @$user= $_SESSION["user"];


 	#VISITOR  LIST
    $psize=8;
    $pageSize=$psize;
    $total=mysql_num_rows(mysql_query("SELECT vid FROM `".DB_PRE."visitors` $condition  AND user=$user"));

    //the  unique ip of total
    $total_ip=mysql_num_rows(mysql_query("SELECT vid  FROM `".DB_PRE."visitors` WHERE shield='0' AND user=$user"));

    //the  visit number of total
    $visit_total=mysql_fetch_array(mysql_query("SELECT SUM(total)  FROM `".DB_PRE."visitors` WHERE shield='0' AND user=$user"));
    $visit_total=$visit_total[0];

    //the  unique ip of today
    $today_ip=mysql_num_rows(mysql_query("SELECT vid  FROM `".DB_PRE."visitors` WHERE shield='0' AND dateline>$today_zero AND dateline<$tomorrow_zero AND  user=$user"));

    //the  visit number of today

    $visit_today=mysql_fetch_array(mysql_query("SELECT SUM(total)  FROM `".DB_PRE."visitors` WHERE shield='0' AND dateline>$today_zero AND dateline<$tomorrow_zero AND  user=$user"));;
    $visit_today=$visit_today[0];
    if($visit_today==""){$visit_today=0;}

    //get the visitor list data
    pageft($total,$pageSize,1,1,1,5);

    $temp->assign("pagenav", $pagenav);
    $temp->assign("back_page", $page);

    $offset=$pageSize*($page-1);

    $query="SELECT * FROM `".DB_PRE."visitors` $condition  AND user=$user  ORDER BY  dateline  DESC   LIMIT $offset,$pageSize";
    $result=mysql_query($query);

    while($row=mysql_fetch_array($result)){

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


    	$origin=($row[origin]=="1")?"Web":"Mobile";
    	$show_time=date("Y",$row[dateline]).'年'.date("m",$row[dateline]).'月'.date("d",$row[dateline]).'日&nbsp;&nbsp;'.date("H:i",$row[dateline]);
        $title_firstpage=mb_substr($row[firstpage],0,30,'utf-8');
        $title_orginpage=mb_substr($row[originpage],0,30,'utf-8');


        $visitor_list[]=array(

                           "vid"=>$row[vid],
                           "ip"=>$row[ip],
                           "location"=>$location,
                           "originpage"=>$row[originpage],
                           "firstpage"=>$row[firstpage],
                           "title_originpage"=>$title_orginpage,
                           "title_firstpage"=>$title_firstpage,
                           "dateline"=>$row[dateline],
                           "total"=>$row[total],
                           "today"=>$row[today],
                           "origin"=>$origin,
                           "time"=>$show_time,
                           );



    }

    $temp->assign("visitor_list",$visitor_list);
    $temp->assign("visit_total",$visit_total);//the total visit number
    $temp->assign("visit_ip",$total_ip); //the total visit IP
    $temp->assign("visit_today",$visit_today); //today's visit number
    $temp->assign("today_ip",$today_ip);//today's visit IP

    $temp->assign("pg",$page); //page number of this page
    $temp->assign("list",$list); //list name of this page
    $temp->assign($list."_class","font-weight:bold;color:#333");//the nav font style
    $temp->assign("shield_var",$shield_var); //the string  of the top shield button
    $temp->assign("shield_var1",$shield_var1); //the string  of the  list shield button
    $temp->assign("shield_do",$shield_do); //the value we get to change "0"(unshield) or "1"(shield)
    unset($visitor_list);

 }

?>
