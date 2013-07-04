<?php
/*
 * Created on 2011-5-2
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

 @include("function/reminder.php");

  #UPDATE  SELF INFO
 if(@isset($_POST['do'])){


 	if($_POST['do']=="basic_info"){

        $show=$_POST['selfinfo_show'];

       // print_r($show);
        //echo $show[0];
 		$nickname=$_POST['nickname'].'`'.$show[0];
 		$truename=$_POST['truename'].'`'.$show[1];
 		$sex=$_POST['sex'].'`'.$show[2];
 		$birthday=$_POST['birthday'].'`'.$show[3];

 		$birth_pro=$_POST['birth_pro'];
 		$birth_city=$_POST['birth_city'];
 		$birthplace=$birth_pro.'-'.$birth_city.'`'.$show[4];

 		$now_pro=$_POST['now_pro'];
 		$now_city=$_POST['now_city'];
 		$nowplace=$now_pro.'-'.$now_city.'`'.$show[5];

 		$birthpalce_condition=($birth_city=="0")?"":", `birthplace`='$birthplace'";
 		$nowpalce_condition=($now_city=="0")?"":", `nowplace`='$nowplace'";

 		$lovestate=$_POST['lovestate'].'`'.$show[6];
 		$bloodtype=$_POST['bloodtype'].'`'.$show[7];
 		$uniqsign=$_POST['uniqsign'].'`'.$show[8];
 		$selfintro=$_POST['selfintro'].'`'.$show[9];
 		$ownpage=$_POST['ownpage'].'`'.$show[10];

 	    $time=strtotime("+8 hours");
 	    $user= $_SESSION["user"];

 		$query="UPDATE `".DB_PRE."self_info` SET  `nickname`='$nickname', `truename`='$truename', `sex`='$sex', `birthday`='$birthday'".$birthpalce_condition.$nowpalce_condition.", `lovestate`='$lovestate', `bloodtype`='$bloodtype', `uniqsign`='$uniqsign', `selfintro`='$selfintro', `ownpage`='$ownpage',`dateline`='$time'  WHERE (`user`='$user') LIMIT 1";
        $db->query($query);
        //echo $query;

        show_reminder($_SERVER['HTTP_REFERER'],"基本资料更新成功！");
 	}




    #UPDATE  CONTACT INFO
 	if($_POST['do']=="contact_info"){

        $show=$_POST['selfinfo_show'];

 		$phone=$_POST['phone'].'`'.$show[0];
 		$mobile=$_POST['mobile'].'`'.$show[1];
 		$qq=$_POST['qq'].'`'.$show[2];
 		$msn=$_POST['msn'].'`'.$show[3];
 		$email=$_POST['email'].'`'.$show[4];


 	    $time=strtotime("+8 hours");
 	    $user= $_SESSION["user"];

 		$query="UPDATE `".DB_PRE."self_info` SET `phone`='$phone', `mobile`='$mobile', `qq`='$qq', `msn`='$msn', `email`='$email',`dateline`='$time'   WHERE (`user`='$user') LIMIT 1";
        $db->query($query);
        //echo $query;

        show_reminder($_SERVER['HTTP_REFERER'],"联系方式更新成功！");
 	}





    #UPDATE  EDU  INFO
 	if($_POST['do']=="edu_info"){

        $show=$_POST['selfinfo_show'];

 		$edu_bg=$_POST['edu_bg'].'`'.$show[0];
 		$prischool=$_POST['prischool'].'`'.$show[1];
 		$midschool=$_POST['midschool'].'`'.$show[2];
 		$university=$_POST['university'].'`'.$show[3];
 		$academy=$_POST['academy'].'`'.$show[4];
 		$profession=$_POST['profession'].'`'.$show[5];
 		$company=$_POST['company'].'`'.$show[6];
 		$position=$_POST['position'].'`'.$show[7];
 		$income=$_POST['income'].'`'.$show[8];


 	    $time=strtotime("+8 hours");
 	    $user= $_SESSION["user"];

 		$query="UPDATE `".DB_PRE."self_info` SET `edu_bg`='$edu_bg', `prischool`='$prischool', `midschool`='$midschool', `university`='$university', `academy`='$academy', `profession`='$profession', `company`='$company', `position`='$position', `income`='$income',`dateline`='$time'  WHERE (`user`='$user') LIMIT 1";
        $db->query($query);
        //echo $query;

        show_reminder($_SERVER['HTTP_REFERER'],"教育工作情况更新成功！");
 	}




    #UPDATE  HOBBY  INFO
 	if($_POST['do']=="hobby_info"){

        $show=$_POST['selfinfo_show'];

 		$idol=$_POST['idol'].'`'.$show[0];
 		$music=$_POST['music'].'`'.$show[1];
 		$movie=$_POST['movie'].'`'.$show[2];
 		$book=$_POST['book'].'`'.$show[3];
 		$sport=$_POST['sport'].'`'.$show[4];
 		$other_hobby=$_POST['other_hobby'].'`'.$show[5];


 	    $time=strtotime("+8 hours");
 	    $user= $_SESSION["user"];

 		$query="UPDATE `".DB_PRE."self_info` SET `idol`='$idol', `music`='$music', `movie`='$movie', `book`='$book', `sport`='$sport', `other_hobby`='$other_hobby', `dateline`='$time' WHERE (`user`='$user') LIMIT 1";
        $db->query($query);
        //echo $query;

        show_reminder($_SERVER['HTTP_REFERER'],"兴趣爱好更新成功！");
 	}





 }












?>
