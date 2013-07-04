<?php
/*
 * Created on 2011-4-17
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */


 if(isset($_SESSION["user"])){

 	$user= $_SESSION["user"];
 	$query="SELECT * FROM `".DB_PRE."self_info` WHERE user=$user";
 	$result=$db->query($query);
 	$field_len=mysql_num_fields($result);

    #SELF INFO LIST
 	while($row=$db->fetch_array($result)){

        for($i=0;$i<=$field_len;$i++){

        	${mysql_field_name($result,$i)}=explode("`",$row[mysql_field_name($result,$i)]);


        	$field_var=mysql_field_name($result,$i);
        	$field_value=${mysql_field_name($result,$i)}[0];

        	$show=${mysql_field_name($result,$i)}[1];
        	$show_class_var="show_class".$i."_".$show;
        	$show_class_value='selected="selected"';
            ${$show_class_var}=$show_class_value;

            $temp->assign("$field_var",$field_value);
            $temp->assign($show_class_var,$show_class_value);
        }


        //sex select
        $sex_var="sex_class_".$sex[0];

        $temp->assign($sex_var,$show_class_value);


        //lovestate select
        $lovestate_var="lovestate_class_".$lovestate[0];

        $temp->assign($lovestate_var,"checked=\"checked\"");

        //bloodtype select
        $bloodtype_var="bloodtype_class_".$bloodtype[0];

        $temp->assign($bloodtype_var,"checked=\"checked\"");

        //edu_bg select
        $edu_bg_var="edu_bg_class_".$edu_bg[0];
        ${$edu_bg_var}=$show_class_value;


 	}

    #SELF INFO GET CHANGE
    if(isset($_POST[change])){

    	include("function/self_info_change.php");
        unset($_POST[change]);
        exit();
    }



 }


?>
