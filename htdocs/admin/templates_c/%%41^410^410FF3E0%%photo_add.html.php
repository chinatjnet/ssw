<?php /* Smarty version 2.6.26, created on 2011-05-14 12:51:56
         compiled from photo_add.html */ ?>
﻿<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "site_head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!--site_head  *top and title END-->

<link href="<?php echo $this->_tpl_vars['temp_dir']; ?>
/css/common.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['temp_dir']; ?>
/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/js/common.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/js/easy.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/js/main.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/js/ajax.js"></script>
</head>

<body>
<div id="all">                                                      <!--webpage  start-->

<!--site_nav  start-->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "site_nav.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!--site_nav  END-->



  <div  id="main">               <!--main  start-->

        <div  id="main_head"> <!--main_head  start-->
           <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/photo_center.png" width="31" height="34"   class="control_logo"/>
           <h1>我的相册</h1>
           <div id="news">
                   <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/news.gif" width="20" height="24" /><font>飞鸽消息：</font>
                   <div  id="news_list">
                      <script type="text/javascript" src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/js/news.js"></script>
                   </div>
           <div class="clear"></div>
           </div>
        </div>
        <div  id="main_content">    <!--main_left start-->

           <div  class="content_block   emotion_publish">
               <div  class="content_block_title">图片上传</div>
               <div  class="info_main">
                   <div  id="top_tool"  class="info_title"   style="border-bottom-style:dashed">
                   <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_pic.gif" width="16" height="17" /> <b href="javascript:void(0);"  class="info_now"  style="font-size:12px;">图片上传</b>
                   <div class="clear"></div>
                   </div>


                   <div  id="info_content">
                 <form action="" method="get"  name="selfinfo_edit">
                     <span  class="info_span"  id="music_upload">
                         <b></b>
                         <p>
		                 <input type="file" name="Filedata"   style="*margin-left:-40px;"/>
                         </p>
                   </span>
                   <font  style="line-height:25px;"><b style="margin-left:-5px;">【提示信息】</b>上传图片前，请先选择顶级分类，新建相册分类请在栏目管理中操作。</font><br>
                   <span  class="info_span"><b>个人分类</b>
                   <p>
                         <select name="jumpMenu2">
                             <option value="?id=11" selected="selected" >默认分类</option>
                             <option value="?id=11" >经典音乐</option>
                             <option value="?id=11" >流行音乐</option>
                         </select>

                   </p>

                   </span>
                   <span class="info_span" style="text-align:center;padding-bottom:50px;">
                         <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,45,0" width="520" height="400">
                           <param name="movie" value="<?php echo $this->_tpl_vars['admin_root']; ?>
/function/swfupload/upload.swf?site=<?php echo $this->_tpl_vars['url']; ?>
/swfupload/&albumid=<?php echo $this->_tpl_vars['albumid']; ?>
&topicid=0" />
                           <param name="quality" value="high" />
                           <embed src="<?php echo $this->_tpl_vars['admin_root']; ?>
/function/swfupload/upload.swf?site=<?php echo $this->_tpl_vars['url']; ?>
/swfupload/&albumid=<?php echo $this->_tpl_vars['albumid']; ?>
&topicid=0" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="520" height="400"></embed>
                         </object>
                   </span>
                   </form>
                   <div class="clear"></div>
                 </div>




               </div>
           <div class="clear"></div>
           </div>


                        <div  style="display:none">
                         <form  name="add_class_form">
                         <span  id="friend_add" ><br>

                          <b>顶级分类&nbsp;&nbsp;&nbsp;&nbsp;</b>
                           <select  size="1"  name=new_upid  id="new_upid" >
                              <?php echo $this->_tpl_vars['fclass_array']; ?>

                           </select><br>

                           <b>分类名称&nbsp;&nbsp;&nbsp;&nbsp;</b>
                           <input name="new_classname" id="new_classname" type="text"   class="article_title"  value="新建分类名称"   onfocus="this.style.border='#21759B  solid  1px'"  onblur="this.style.border='#A5ACB2  solid  1px'"/><br>
                           <input type="button" name="add_class_submit"   class="article_act"  value="添加分类"  onclick="add_class('index.php?display=class_add',Get_id('new_upid').value,Get_id('new_classname').value)"/>

                         </span>
                          </form>
                        </div>



        </div> <!--main_left  end-->

  </div>                          <!--main  end-->

<!--site_foot start-->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "site_foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!--site_foot  END-->