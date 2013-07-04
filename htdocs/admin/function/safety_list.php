<?php
/*
 * Created on 2011-5-9
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
  @include_once("function/common_function.php");
 $site_limit=Array(

             "密码访问"=>6,
             "关闭站点"=>5,
             "所有可见"=>3,
             "好友可见"=>2,
             "情侣可见"=>1,

             );

 if(isset($_SESSION['user'])){

        $time=strtotime("+8 hours");
 	    $user= $_SESSION["user"];


        #SAFETY  LIST
        $query="SELECT * FROM `".DB_PRE."safety` WHERE user='$user'";
        $result=$db->query($query);
        $field_len=mysql_num_fields($result);

        while($row=$db->fetch_array($result)){

            for($i=0;$i<=$field_len;$i++){

        	    ${mysql_field_name($result,$i)}=$row[mysql_field_name($result,$i)];


        	    $field_var=mysql_field_name($result,$i);
        	    $field_value=${mysql_field_name($result,$i)};


                $temp->assign("$field_var",$field_value);

             }


         //loverzone select
         $loverzone_var="loverzone_".$row['loverzone_on'];
         $temp->assign($loverzone_var,"checked=\"checked\"");


         //rewrite select
         $rewrite_var="rewrite_".$row['rewrite_on'];
         $temp->assign($rewrite_var,"checked=\"checked\"");

         //show limit select
         $show_var="show_".$row['show'];
         if($row['show']=="5"||$row['show']=="6"){

            $temp->assign("show_textarea_".$row['show'],"display:block");

         }
         $temp->assign($show_var,"checked=\"checked\"");

        }






 }


?>
