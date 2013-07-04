<?php
/*
 * Created on 2011-5-1
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
include("../class/page.class.php");

 #EMOTION  LIST
   $psize=8;
   $pageSize=$psize;
   //$total=mysql_fetch_array(mysql_query("select count(*) FROM `".DB_PRE."guestbook`"));
   $total=mysql_num_rows(mysql_query("select guestid  FROM `".DB_PRE."guestbook` WHERE user='$_SESSION[user]'"));

   pageft($total,$pageSize,1,1,1,5);

   $temp->assign("guestbook_num", $total[0]);
   $temp->assign("pagenav", $pagenav);
   $temp->assign("back_page", $page);


   //$page_num=$page-1;

   $offset=$pageSize*($page-1);

   $query="SELECT * FROM `".DB_PRE."guestbook`   ORDER BY  dateline  DESC   LIMIT $offset,$pageSize";
   $result=mysql_query($query);
   while($row=mysql_fetch_array($result)){

           $message=$row[message];
           $origin=($row[origin]=="1")?"Web":"Mobile";
           $guestbook_list[]=array(

                           "guestid"=>$row[guestid],
                           "nickname"=>$row[nickname],
                           "message"=>$message,
                           "c_num"=>$row[c_num],
                           "origin"=>$origin,
                           "ip"=>$row[ip],
                           "time"=>date("m-d   H:i",$row[dateline]),
                           );


   }


   $temp->assign("guestbook_list",$guestbook_list);














?>
