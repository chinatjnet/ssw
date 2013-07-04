<?php
/*
 * Created on 2011-4-18
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

/******************************************************************************

参数说明:
$max_file_size  : 上传文件大小限制, 单位BYTE
$destination_folder : 上传文件路径
$watermark   : 是否附加水印(1为加水印,其他为不加水印);

使用说明:
1. 将PHP.INI文件里面的"extension=php_gd2.dll"一行前面的;号去掉,因为我们要用到GD库;
2. 将extension_dir =改为你的php_gd2.dll所在目录;
******************************************************************************/


#GET  THE  FILE  SIZE

function sizecount($filesize) {
 if($filesize >= 1073741824) {
  $filesize = round($filesize / 1073741824 * 100) / 100 . ' GB';
 } elseif($filesize >= 1048576) {
  $filesize = round($filesize / 1048576 * 100) / 100 . ' MB';
 } elseif($filesize >= 1024) {
  $filesize = round($filesize / 1024 * 100) / 100 . ' KB';
 } else {
  $filesize = $filesize . ' bytes';
 }
 return $filesize;
}


//$path='../upload/music/1303111779.mp3';
//echo sizecount(filesize($path));



# UPLOAD  FILE

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (!is_uploaded_file($_FILES["local_path"][tmp_name]))
    //是否存在文件
    {
         show_reminder("index.php?display=$_POST[display]","<font color=\"#FF3300\">文件不存在!</font>");
         exit;
    }

    $file = $_FILES["local_path"];
    if($max_file_size < $file["size"])
    //检查文件大小
    {
        show_reminder("index.php?display=$_POST[display]","<font color=\"#FF3300\">文件太大( 限制大小:".sizecount($max_file_size).") !</font>");
        exit;
    }

    if(!in_array($file["type"], $uptypes))
    //检查文件类型
    {
        show_reminder("index.php?display=$_POST[display]","<font color=\"#FF3300\">文件类型不符!</font>".$file["type"]);
        exit;
    }

    if(!file_exists($destination_folder))
    {
        mkdir($destination_folder);
    }

    $filename=$file[tmp_name];
    $fsize =sizecount(filesize($filename));
    $pinfo=pathinfo($file["name"]);
    $ftype=$pinfo['extension'];
    $destination = $destination_folder.time().".".$ftype;
    if (file_exists($destination) && $overwrite != true)
    {
        show_reminder("index.php?display=$_POST[display]","<font color=\"#FF3300\">同名文件已经存在了!</font>");
        exit;
    }

    if(!move_uploaded_file ($filename, $destination))
    {
        show_reminder("index.php?display=$_POST[display]","<font color=\"#FF3300\">移动文件出错!");
        exit;
    }

    $pinfo=pathinfo($destination);
    $fname=$pinfo[basename];
   // echo " <font color=red>已经成功上传</font><br>文件名:  <font color=blue>".$destination_folder.$fname."</font><br>";
   // echo " 宽度:".$image_size[0];
   // echo " 长度:".$image_size[1];
   // echo "<br> 大小:".$file["size"]." bytes";
   // echo "<img src=\"".$destination_folder.$fname."\">";
  //  echo "<img src=\"/sunsonworld/upload/music/1303061821.jpg\">";

}




?>
