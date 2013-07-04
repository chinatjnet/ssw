<?php /* Smarty version 2.6.26, created on 2011-05-14 07:09:45
         compiled from article_view.html */ ?>
﻿<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "site_head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!--site_head  *top and title END-->

<?php echo '

<SCRIPT LANGUAGE="JavaScript">
<!--
     function ResumeError() {
     return true;
}
window.onerror = ResumeError;
// -->
</SCRIPT>


<style>
body{background:#fff}
#popup_main{ width:690px;
     margin:0px auto;
	padding:0px 10px;
	padding-bottom:40px;
	background:url(../images/all_bg.gif) center repeat-y;
	font-family:Arial, Helvetica, sans-serif;
	color:#2B2B2B;
    line-height:23px;
}
#popup_main  .popup_title{ width:673px;line-height:14px; margin-bottom:20px;font-size:13px; background:#535252; color:#FFF; font-weight:bold;padding:5px;padding-left:20px;}
#popup_main  .sep_border{ width:690px;}
.sep_border {
	float:left;
	width:467px;
	border-bottom:#A8C5D0 dashed 1px;
	font-size:0px;
	height:1px;
	margin:6px 0px 4px 0px;
}

a{ text-decoration:none;}
.clear{ clear:both;}
</style>
'; ?>


</head>
<body>
<div  id="popup_main">
    <div  class="popup_title">文章预览</div>
    <center><b  style="color:#2B2B2B;font-size:14px;"><?php echo $this->_tpl_vars['view_title']; ?>
</b></center>

   <div  class="sep_border"></div>
<p><!--===================================-->

<?php echo $this->_tpl_vars['view_content']; ?>


</p><!--===================================-->




<div  class="clear"></div>
</div>



</body>
</html>