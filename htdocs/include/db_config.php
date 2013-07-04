<?php
/*
 *配置文件
 *
 */ 
 
 define("PW_BACK","sunsonworld");
 
 //----------------------------------------------
 
 $host          ="localhost";        //host名
 $host_name     ="root";      //host用户名
 $host_password ="zy19910801";  //host密码
 $dbs           ="ppp";      //数据库名
 $code  		 ="utf8";         //编码制
 $prefix        ="ssw_";       //表名前缀

 
 $db =  new mysql($host,$host_name,$host_password,$dbs,'',$code);

 define("DB_PRE","ssw_");

 //----------------------------------------------

 
?>