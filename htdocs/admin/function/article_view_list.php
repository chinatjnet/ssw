<?php
/*
 * Created on 2011-3-28
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

 if(@isset($_GET[view_id])){

      $query="SELECT `title` FROM `".DB_PRE."articles`  WHERE   aid=$_GET[view_id] ";
      $result=mysql_query($query);
      while($row=mysql_fetch_array($result)){
          $view_title=$row[title];

      }



 	  $query2="SELECT `message` FROM `".DB_PRE."articles_content`  WHERE  mid=$_GET[view_id]";//get  article's content'
      $result2=$db->query($query2);
      while($row2=$db->fetch_array($result2)){

             $view_content=$row2[message];

      }



    $temp->assign("view_title",$view_title);
    $temp->assign("view_content",$view_content);

 }else{

    header("location:../../404.htm");

 }



?>
