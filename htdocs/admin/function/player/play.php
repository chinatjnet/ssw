<?php
/*
 * Created on 2011-4-18
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

$str=<<<EOT


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>天骄天下-个人网站系统_SSW_V 1.0</title>


<style>
#view_main{ width:690px;
     margin:0px auto;
	padding:0px 0px;
	padding-bottom:40px;
	background:url(../images/all_bg.gif) center repeat-y;
	font-family:Arial, Helvetica, sans-serif;
	border:#535252 solid 4px;

}
#view_main  .view_title{ width:665px; margin-bottom:20px;font-size:14px; background:#535252; color:#FFF; font-weight:bold;padding:5px;padding-left:20px;}
#view_main  .view_sep_border{ width:690px;}
.view_sep_border {
	float:left;
	width:467px;
	border-bottom:#A8C5D0 dashed 1px;
	font-size:0px;
	height:1px;
	margin:6px 0px 4px 0px;
}

#view_main   a{ text-decoration:none;}
.clear{ clear:both;}
</style>


</head>
<body>
<div  id="view_main">
    <div  class="view_title">音乐欣赏</div>
    <center><b>天骄天下网页播放器</b></center>

   <div  class="view_sep_border"></div>
<p ><!--===================================-->
  <img src="ad.jpg" width="230" height="245" />
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="349" height="220">
  <param name="movie" value="player.swf" />
  <param name="quality" value="high" />
  <param name="allowScriptAccess" value="always" />
  <param name="wmode" value="transparent">
  <embed src="player.swf"
      quality="high"
      type="application/x-shockwave-flash"
      WMODE="transparent"
      width="349"
      height="220"
      pluginspage="http://www.macromedia.com/go/getflashplayer"
      allowScriptAccess="always" />
</object>


</p><!--===================================-->




<div  class="clear"></div>
</div>



</body>
</html>




EOT;


echo  "$str";

//unlink($file);

?>
