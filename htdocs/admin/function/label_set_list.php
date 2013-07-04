<?php
/*
 * Created on 2011-6-1
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */


 if(isset($_REQUEST['display']) and (isset($_REQUEST['type'])||isset($_REQUEST['list_upid'])||isset($_REQUEST['label_upid']))){




    #CLASS ALL
    $Array_class_belong=Array("emotion","self_info","article","album","music","resource","collect","guestbook","lover");
    $list_upid=(int)$_REQUEST['list_upid'];

    $get_type=explode("_",$_REQUEST['type']);
    if($_REQUEST['type']=="self_info_index"){

    	$get_type[1]='index';

    }elseif($_POST['type']!=""){

    	$get_type[1]=$_POST['type'];

    }



    $tool_title=($get_type[1]=="list")?'列表页':'阅读页';
    if($get_type[1]=="index"){$tool_title='目录页';}

    $temp->assign("tool_title",$tool_title);
    $temp->assign("get_type",$get_type[1]);



    #GET fclass FROM TABLE 'class'

    $query="SELECT classid,classname,belong  FROM `".DB_PRE."class`  WHERE  user=$_SESSION[user]  AND  upid=0  ORDER BY  c_order";
    $result=$db->query($query);
    while($row=$db->fetch_array($result)){

	   $fbelong=$Array_class_belong[$row[belong]-1];

       $fclass[]=array(

               "fclassid"=>$row[classid],
               "fclassname"=>$row[classname],
               "fbelong"=>$fbelong,

               );

    }
    $temp->assign("fclass", $fclass);
    $temp->assign("list_upid",(int)$_REQUEST['list_upid']);




    #GET THE LABEL_UPID
    if(isset($_REQUEST['label_upid'])){

    	$label_upid=(int)$_REQUEST['label_upid'];
    	$label_upid_str='_'.$label_upid;


    }else{

    	//$label_upid=$fclass[0]['fclassid'];
    	$label_upid="-1";
    }



    #GET THE LABEL BELONG
    if(isset($_REQUEST['belong'])){

    	$label_fbelong=$_REQUEST['belong'];

    }else{

    	//$label_fbelong=$fclass[0]['fbelong'];
    	$label_fbelong="-1";
    }




    #GET cclass FROM TABLE 'class'

    $query="SELECT classid,classname,belong  FROM `".DB_PRE."class`  WHERE  user=$_SESSION[user]  AND  upid=$label_upid  ORDER BY  c_order";
    $result=$db->query($query);
    while($row=$db->fetch_array($result)){

	   $cbelong=$Array_class_belong[$row[belong]-1];

       $cclass[]=array(

               "cclassid"=>$row[classid],
               "cclassname"=>$row[classname],
               "cbelong"=>$cbelong,

               );

    }



    #GET THE LABEL CLASSID
    if(isset($_REQUEST['label_classid'])and $_REQUEST['label_classid']!=-1){

    	$label_classid=(int)$_REQUEST['label_classid'];

    	$label_classid_str='_'.$label_classid;
    	$label_all_style="style='display:none;'";

    }else{

    	$label_classid='-1';
    	$label_all_style="style='display:block;'";
    }



    $temp->assign("cclass", $cclass);

    $temp->assign("label_fbelong",$label_fbelong);
    $temp->assign("label_upid",$label_upid);
    $temp->assign("label_classid",$label_classid);
    //print_r($cclass);





    #GET THE LABEL LIST

      $query="SELECT * FROM `".DB_PRE."label` WHERE show_id=$list_upid  AND type='$get_type[1]' AND upid=$label_upid  AND classid=$label_classid";
      $result=$db->query($query);
      while($row=$db->fetch_array($result)){

        if($row['label']=='unit'){

      	    $label_str=$row['belong']."_".$row['upid']."_".$row['label'];

      	}else{

      	    $label_str=$row['belong']."_".$row['upid']."_".$row['classid']."_".$row['label'];
      	}

      	$label_style=$row['style'];

      	${$label_str}=$label_style;
      	${$label_str."_check"}='checked';
        ${$label_str."_num"}=$row['num'];
        ${$label_str."_tlength"}=$row['tlength'];
        ${$label_str."_clength"}=$row['clength'];

      	$temp->assign($label_str,$label_style);

      }






    #LABEL F  GET CHANGE
    if(isset($_REQUEST['label_upid'])and !isset($_REQUEST['label_classid'])){

    	include('function/label_set_fchange.php');
        unset($_REQUEST['list_upid']);
        exit();
    }


    if(isset($_REQUEST['label_upid'])and isset($_REQUEST['label_classid'])){

    	include('function/label_set_cchange.php');
        unset($_REQUEST['label_upid']);
        exit();
    }


    unset($fclass);
    unset($cclass);




 }




?>
