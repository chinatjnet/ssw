<?php
/*
 * Created on 2011-5-11
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

 if(isset($_POST['do'])){

 	//sleep(5);

    $time=strtotime("+8 hours");
    $user= $_SESSION['user'];
    Define('SALT','sunsonworld');

    $_SESSION['safety_check']=false;


    #CHECK PASSWORD
    if(@$_POST['do']=="password_check"){

 	    $query="SELECT  password  FROM `".DB_PRE."safety` WHERE user=$user LIMIT 1";
 	    $row=$db->fetch_array($db->query($query));
 	    $pw=$row['password'];

 	    $now_pw=trim($_POST['check_str']);

        if(md5(SALT.$now_pw)==$pw){

            $_SESSION["safety_check"]=true;
        	echo "√ password_ok";

        }else{

           $_SESSION["safety_check"]=false;
        	echo "× password_wrong";


        }


   	}


    #CHECK SAFETY QUESTION
    if(@$_POST['do']=="answer_check"){

 	    $now_aw=trim($_POST['check_str']);
 	    $now_q=(int)$_POST['q_value'];

 	    $query="SELECT  answer  FROM `".DB_PRE."safety` WHERE  question=$now_q AND user=$user LIMIT 1";
 	    $row=$db->fetch_array($db->query($query));
 	    $aw=$row['answer'];

        if(md5(SALT.$now_aw)==$aw){

            $_SESSION["safety_check"]=true;
        	echo "√ answer_ok";

        }else{

            $_SESSION["safety_check"]=false;
        	echo "× answer_wrong";


        }


   	}





 }


?>
