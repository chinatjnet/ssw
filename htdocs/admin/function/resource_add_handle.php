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


 	$a_fclassid= $_POST["a_fclassid"];
 	$a_cclassid= $_POST["a_cclassid"];
 	$name= $_POST["name"];
    $path_select=$_POST["path_select"];
    $net_path=$_POST["net_path"];
    $local_path=$_FILES["local_path"];
    $rank=$_POST["rank"];
    $description=$_POST["description"];
    $resource_show= $_POST["resource_show"];


 	$origin= "1";
 	$time=strtotime("+8 hours");
 	$user= $_SESSION["user"];


    $path=($path_select=="self_upload")?$local_path:$net_path;



    $check_name=trim($name);
    $check_url=trim($path);

    if(!empty($check_name) and !empty($check_url)){

        $type="unknow";
        $size="unknow";

        if($path_select=="self_upload"){

    	    $uptypes=array(

                'audio/mpeg',
                'audio/wav',
                'image/jpg',
                'image/jpeg',
                'image/png',
                'image/pjpeg',
                'image/gif',
                'image/bmp',
                'image/x-png',
                'text/plain',
                'application/zip',
                'application/octet-stream',
                'application/x-zip-compressed',
			    'application/x-shockwave-flash',

                  );

        $max_file_size=10485760;     //上传文件大小限制, 单位BYTE
        $UploadPath=substr($BasePath,0,strpos(ADMIN_ROOT,"/admin"));
        $destination_folder="../upload/resource/"; //上传文件路径

    	include("upload.php");

        $path="upload/resource/".$fname;
        $type=$ftype;
        $size=$fsize;
        }


        $query="INSERT INTO `".DB_PRE."resources` (`reso_id`, `classid`, `upid`, `name`, `path`, `description`, `rank`, `type`, `size`, `show`, `view_num`, `down_num`, `origin`,`dateline`, `user`) VALUES (NULL, '$a_cclassid','$a_fclassid', '$name', '$path', '$description', '$rank', '$type', '$size', '$resource_show', '0', '0','$origin','$time', '$user')";
        $db->query($query);


        $last_aid=$db->insert_id();

        //send our actions to our friends

        $send_content=mb_substr(html2text($description),0,50,'utf-8');
        $faction=new friend_action_add("$last_aid","$a_cclassid","$a_fclassid","$name","$send_content",SITE_ROOT,"resource","$ip","$time","$user");
        $faction->action_send();


        $reminder_str="添加资源成功！";
        show_reminder($_SERVER["HTTP_REFERER"],$reminder_str);

    }else{

    	 show_reminder($_SERVER["HTTP_REFERER"],"<font color=\"#FF3300\">资源标题或地址不能为空！</font>");

    }







 	}







?>
