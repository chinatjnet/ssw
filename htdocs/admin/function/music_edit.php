<?php
/*
 * Created on 2011-4-18
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */



#EDIT  COLLECT

if(@isset($_GET[do_id])){

#COLLECT'S  TITLE
$query="SELECT * FROM `".DB_PRE."musics` WHERE  music_id=$_GET[do_id]";
$result=$db->query($query);
while($row=mysql_fetch_array($result)){

    $temp->assign("name",$row[name]);
    $temp->assign("singer",$row[singer]);
    $temp->assign("lyric",$row[lyric]);
    $temp->assign("path",$row[path]);
    $temp->assign("description",$row[description]);
}

    $temp->assign("do_id",$_GET[do_id]);

}



#ARTICLE'S  UPDATE


if(isset($_POST["do_id"]) and !empty($_POST["do_id"])){

 	$a_fclassid= $_POST["a_fclassid"];
 	$a_cclassid= $_POST["a_cclassid"];
 	$name= $_POST["name"];
  	$singer= $_POST["singer"];
  	$lyric= $_POST["lyric"];
    $path_select=$_POST["path_select"];
    $net_path=$_POST["net_path"];
    $local_path=$_FILES["local_path"];
    $rank=$_POST["rank"];
    $description=$_POST["description"];
    $music_show= $_POST["music_show"];
 	$origin= "1";
 	$time=strtotime("+8 hours");
 	$user= $_SESSION["user"];
 	$location_url = "index.php?"."$_POST[location_url]";



    $path=($path_select=="self_upload")?$local_path:$net_path;


    $check_name=trim($name);
    $check_url=trim($path);

    if(!empty($check_name) and !empty($check_url)){


        if($path_select=="self_upload"){


           #unlink  the  pre_file
           $file_path='../'.$_POST[unlink_file_path];

           if(file_exists($file_path)){
               unlink($file_path);

           }

    	    $uptypes=array(

                'audio/mpeg',
                'audio/wav',

                  );

        $max_file_size=7000000;     //上传文件大小限制, 单位BYTE
        $UploadPath=substr($BasePath,0,strpos(ADMIN_ROOT,"/admin"));
        $destination_folder="../upload/music/"; //上传文件路径

    	include("upload.php");

        $path="upload/music/".$fname;


        }


        //to ensure the file type is mp3
        $check_path=strstr(strtolower($path),".mp3");
        if($check_path==false){
        	show_reminder("index.php?display=music_add&list_upid=$a_fclassid","<font color=\"#FF3300\">仅支持MP3格式音乐!</font>");
        	exit();
        }


        $query=" UPDATE `".DB_PRE."musics` SET   `classid`=$a_cclassid,`upid`=$a_fclassid, `name`='$name',`singer`='$singer',`lyric`='$lyric', `path`='$path', `rank`='$rank', `description`='$description', `dateline`='$time'   WHERE (`music_id`=$_POST[do_id]) LIMIT 1";
        $db->query($query);

        $reminder_str="音乐更新成功！";
        show_reminder("$location_url",$reminder_str);

    }else{

    	 show_reminder("$location_url","<font color=\"#FF3300\">音乐名称或URL不能为空！</font>");

    }






}


?>