<?php
@header("Expires: -1");
@header("Cache-Control: no-store, private, post-check=0, pre-check=0, max-age=0", FALSE);
@header("Pragma: no-cache");
@header("Content-type: application/xml; charset=utf-8");
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<?php if($xml=='config'): ?>
<parameter>
	<allowsExtend>
		<extend depict="All Image File(*.jpg,*.jpeg,*.gif,*.png)">*.jpg,*.gif,*.png,*.jpeg</extend>
	</allowsExtend>
	<language>
		<create>创建</create>
		<notCreate>取消</notCreate>
		<albumName>相册名</albumName>
		<createTitle>创建新相册</createTitle>
		<okbtn>继续</okbtn>
		<cancelbtn>查看</cancelbtn>
		<fileName>文件名</fileName>
		<depict>描述(单击修改)</depict>
		<size>文件大小</size>
		<stat>上传进度</stat>
		<aimAlbum>上传到:</aimAlbum>
		<browser>浏览</browser>
		<delete>删除</delete>
		<upload>上传</upload>
		<okTitle>上传完成</okTitle>
		<okMsg>所有文件上传完成!</okMsg>
		<uploadTitle>正在上传</uploadTitle>
		<uploadMsg1>状态码：</uploadMsg1>
		<uploadMsg2>个文件等待上传,正在上传第</uploadMsg2>
		<uploadMsg3></uploadMsg3>
		<bigFile>文件过大</bigFile>
		<uploaderror></uploaderror>
	</language>
	<config>
		<userid>1</userid>
		<hash></hash>
		<maxupload>1000000</maxupload>
	</config>
	<albums>

    <?php

	 $query0="SELECT * FROM `".DB_PRE."class`  WHERE  upid=$_SESSION[album_upid]  ORDER BY c_order";
	 $result=$db->query($query0);
	 while($row=$db->fetch_array($result)){

	   echo '<album  id="'.$row[classid].'">'.$row[classname].'</album>\n';

	 }
	?>

	</albums>

</parameter>
<?php elseif($xml=='result'): ?>
<uploadResponse>
	<message> <?php if($status=="success"): ?>完成<?php else: ?>失败<?php endif; ?></message>
	<status><?php echo $status; ?></status>
	<proid><?php echo $proid; ?></proid>
	<albumid><?php echo $albumid; ?></albumid>
	<picid><?php echo $picid; ?></picid>
	<?php

    $time=$time+$proid;

    $query="INSERT INTO `".DB_PRE."photos` (`pid`, `classid`, `upid`, `title`, `path`, `c_num`,`cover`,`origin`, `dateline`,`user`) VALUES (NULL,'$albumid', '$upid','$title', '$path','0','0', '0', '$time', '$user')";
    $db->query($query);

    $last_aid=$db->insert_id();

    if(!isset($_SESSION['time_limit']) or ($time-$_SESSION['time_limit'])>10){
    //send our actions to our friends
    $faction=new friend_action_add("$last_aid","$albumid","$upid","$album_name","$title","$url_this","photo","$ip","$time","$user");
    $faction->action_send();
    }

    $_SESSION['time_limit']=$time;
	?>
</uploadResponse>
<?php endif; ?>
