<?php
/*
 * Created on 2011-3-20
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

//header("Content-Type: text/html; charset=utf-8");
//include("../../class/mysql.class.php");
//$db =  new mysql('localhost','root','zy19910801','ssw_v1.0','',"UTF8");


function   class_select($type,$s1="s1",$s2="s2",$form="form1"){

    $Array_class=Array(
                 "emotion"=>1,
                 "self_info"=>2,
                 "article"=>3,
                 "photo"=>4,
                 "music"=>5,
                 "resource"=>6,
                 "collect"=>7,
                 "guestbook"=>8,
                 "lover"=>9
    );

    $Array_class_key=array_keys($Array_class);


    $fclass_belong=$Array_class[$type];

    if(isset($_GET[list_upid])){

    	$condition="classid=".(int)$_GET[list_upid];
    }else{

    	$condition="belong=".$fclass_belong;

    }

    $query="SELECT * FROM `".DB_PRE."class`  WHERE  $condition  ORDER  BY  c_order";
    $fclass_result=mysql_query($query);

    $i=0;
    while($fclass_row=mysql_fetch_array($fclass_result)){

    	$query2="SELECT * FROM `".DB_PRE."class`  WHERE  upid=$fclass_row[classid]  ORDER  BY  c_order";
        $cclass_result=mysql_query($query2);

        $j=0;

        while($cclass_row=mysql_fetch_array($cclass_result)){

            $cclass_name_str.="\"$cclass_row[classname]\",\"$cclass_row[classid]\",";
            $cclass_option_str[$j]="<OPTION value=\"$cclass_row[classid]\">$cclass_row[classname]</OPTION>";
            $j++;
        }

        $cclass_array_str="cclass[$fclass_row[classid]]= new Array(".$cclass_name_str.");";
	    $fclass_array_str.="<OPTION value=$fclass_row[classid]>$fclass_row[classname]</OPTION>";

        $cclass_array.=str_replace(",)",")", $cclass_array_str);
        $cclass_option_array[$i]=$cclass_option_str;
        $i++;
        unset($cclass_name_str);
        unset($cclass_option_str);
    }

       $fclass_array.=$fclass_array_str;
       $cclass_option=implode("", $cclass_option_array[0]);



$select_option=<<<EOT

<SCRIPT language=javascript>

var cclass=new Array();
       $cclass_array

function  changeselect(i){
	document.$form.$s2.length = 0;
	var class_length=(cclass[i].length)/2;
	for(j=0;j<class_length;j++){

		document.$form.$s2.options[j] = new Option(cclass[i][0+j*2],cclass[i][1+j*2]);
		document.$form.$s2.options[0].selected=true;

		};

	}


</SCRIPT>


EOT;



$select_option=array($select_option,$cclass_array,$fclass_array,$cclass_option);

return  $select_option;

}

//$select_array=class_select("article");
//echo $select_array[1];
?>
