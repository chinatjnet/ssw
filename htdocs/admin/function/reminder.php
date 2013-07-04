<?php
/*
 * Created on 2011-3-25
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
function  show_reminder($url, $show = '新建分类成功！'){

$reminder_text='
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="3; URL='.$url.'" />
</head>
<title>天骄天下-个人网站系统_SSW_V 1.0</title>
<style>
#body_cover{
	background:#999999;
    display:none;
	height:100%;
	width:100%;
    position:absolute;
	top:0px;
	left:0px;
	filter:alpha(opacity=80);
	opacity: .80;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
	}

#reminder{
	width:400px;
    position:absolute;
	top:20%;
	left:36%;
	_margin-top:100px;
	background:#DDDDDD;
	border:solid  #FFFFFF   10px;
	}

#reminder_close{
	position:absolute;
	top:-20px;
	right:-20px;
	}

#reminder_close  img{ border:0px;}
#reminder_content{
	color:#21759B;
	font-size:13px;
	text-align:center;
	 width:340px;
	 background:#fff;
	 margin:20px;
	 padding:10px;


	}

</style>
<script>

function hideReminder(){
	document.getElementById("body_cover").style.display="none";location.href="'.$url.'"
	}

</script>
<body  style="overflow-y:hidden;">
<div id="body_cover"  style="display:block">
<div id="reminder">
<a href="javascript:hideReminder()"   id="reminder_close"><img src="function/icon_close.gif" class="cntrl" title="Close" /></a>
<div id="reminder_content">
<b>'.$show.'</b>
</div>
</div>
<div  style="clear:both;"></div>
</div>
</body>
</html>
';

echo  $reminder_text;
exit ();


}

?>