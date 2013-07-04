<?php
/*
 * Created on 2011-4-18
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

//error_reporting(0);


if($_GET['do']=="play"){
    include("../../../class/mysql.class.php");
    include("../../../include/db_config.php");	
}


 $str="";
 $str.= "<player>\n";
 $str.=  "<playlist>\n";

 if(@$_GET["do"]=="batch_play"||$_GET['do']=="play"){

            $batch_handle_id=$_GET[$display."_handle"];

            if($_GET['do']=="play"){

				$batch_handle_id=Array(0=>$_GET['mid']);
				$xmlPath='player.xml';

			}else{
			
			    $xmlPath='function/player/player.xml';
			
			}

            for($i=0;$i <count($batch_handle_id);$i++){

 		        $query="SELECT * FROM `".DB_PRE."musics`  WHERE  music_id=$batch_handle_id[$i]";//get  article's content'
                $result=$db->query($query);

                while($row=$db->fetch_array($result)){

                    if(is_int(strpos($row[path],"http:"))){
              	      $path=$row[path];
              	    }else{
              	      $path="../../../".$row[path];
                    }

                      $str.= "<track>\n";
                      $str.= "<file>$path</file>\n";
                      $str.= "<title>$row[name]</title>\n";
                      $str.= "<artist>$row[singer]</artist>\n";
                      $str.= "<album>$row[lyric]</album>\n";
                      $str.= "</track>\n";
               }

           }



  };



$str.= "</playlist>\n";
$str.= "</player>\n";


if (!$fh = fopen($xmlPath, 'w')) {
    exit("不能打开文件 'player.xml'");
}
if(fwrite($fh,$str)===false){
    exit("不能写入文件 'player.xml'");
}
fclose($fh);
echo "XML成功更新！";




if($_GET['do']=="play"){

    Header("Location:play.php");

}else{

    Header("Location:function/player/play.php");

}
?>
