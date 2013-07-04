<?php
/*
 * Created on 2011-4-17
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
include("function/reminder.php");
@include("../class/friend_action_class.php");

$Array_limit=Array(
             "保存草稿"=>4,
             "所有可见"=>3,
             "好友可见"=>2,
             "情侣可见"=>1,
             "主人可见"=>0,
             );

 if(isset($_POST["do"]) and $_POST["do"]=="add"){

    extract($_POST);
 	$a_fclassid=(int)$_POST["a_fclassid"];
 	$a_cclassid=(int)$_POST["a_cclassid"];
 	//$name= $_POST["name"];
  	//$singer= $_POST["singer"];
  	//$lyric= $_POST["lyric"];
    //$path_select=$_POST["path_select"];
    //$net_path=$_POST["net_path"];
    //$local_path=$_FILES["local_path"];
    //$rank=$_POST["rank"];
    //$description=$_POST["description"];
    //$music_show= $_POST["music_show"];


 	$origin= "1";
 	$time=strtotime("+8 hours");
 	$user= $_SESSION["user"];

    $path=($path_select=="self_upload")?$local_path:$net_path;

    $check_name=trim($name);
    $check_url=trim($path);

    if(!empty($check_name) and !empty($check_url)){


        if($path_select=="self_upload"){

    	    $uptypes=array(

                'audio/mpeg',

                  );

        $max_file_size=10485760;     //上传文件大小限制, 单位BYTE
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


        $query="INSERT INTO `".DB_PRE."musics` (`music_id`, `classid`, `upid`, `name`, `singer`, `lyric`, `path`, `rank`, `description`, `show`, `notlove`, `samelove`, `origin`, `dateline`, `user`) VALUES (NULL, '$a_cclassid','$a_fclassid', '$name', '$singer', '$lyric', '$path', '$rank', '$description', '$music_show', '0', '0', '$origin','$time', '$user')";
        $db->query($query);


        $last_aid=$db->insert_id();

        //send our actions to our friends

        $send_content=mb_substr(html2text($description),0,50,'utf-8');
        $faction=new friend_action_add("$last_aid","$a_cclassid","$a_fclassid","$name","$send_content",SITE_ROOT,"music","$ip","$time","$user");
        $faction->action_send();

        $reminder_str="添加音乐成功！";
        show_reminder("index.php?display=music_add&list_upid=$a_fclassid",$reminder_str);

    }else{

    	 show_reminder("index.php?display=music_add&list_upid=$a_fclassid","<font color=\"#FF3300\">音乐标题或地址不能为空!</font>");

    }







 	}







?>
