<?php /* Smarty version 2.6.26, created on 2011-05-15 16:29:51
         compiled from article_add.html */ ?>
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
<script charset="utf-8" src="<?php echo $this->_tpl_vars['admin_root']; ?>
/function/editor/kindeditor.js"></script>
</head>
<?php echo '
		<script>
			KE.show({
				id : \'article_content\',
				width : \'748px\',
				height:  \'400px\',
				resizeMode : 1,
				newlineTag : \'br\',
			    imageUploadJson : \'../../upload_json.php\',
			    fileManagerJson : \'../../file_manager_json.php\',
			    allowFileManager : true,
				allowUpload: true,

				afterCreate : function(id) {
					KE.event.ctrl(document, 13, function() {
						KE.util.setData(id);
						document.forms[\'example\'].submit();
					});
					KE.event.ctrl(KE.g[id].iframeDoc, 13, function() {
						KE.util.setData(id);
						document.forms[\'example\'].submit();
					});
				}







			});

		</script>



'; ?>


<body  onbeforeunload="checkLeave('article_content')"   style="overflow:auto;*position:absolute">
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
/images/article_center.png" width="31" height="34"   class="control_logo"/>
           <h1>文章日志</h1>
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

        <div  class="content_block   main_tool   resource_main_tool">
               <div  class="content_block_title"><?php echo $this->_tpl_vars['tool_title']; ?>
</div>
               <div  class="content_block_main">
                      <span  class="tool_info"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_article.gif" width="16" height="17" /><b><?php echo $this->_tpl_vars['tool_title']; ?>
</b></span>
               <div  class="sep_border"></div>
               </div>

        <div class="clear"></div>
        </div>



     <div  class="content_block   article_add">

             <div  class="content_block_main">
                  <form action="index.php?display=article_add" method="POST"  name="article_add_form"  onsubmit="body.onbeforeunload='';">

                  <INPUT TYPE=hidden NAME=display  VALUE="article_add">
                  <INPUT TYPE=hidden NAME=<?php echo $this->_tpl_vars['tool_do_name']; ?>
  VALUE="<?php echo $this->_tpl_vars['tool_do']; ?>
">
                  <INPUT TYPE=hidden NAME=do_id  VALUE="<?php echo $this->_tpl_vars['do_id']; ?>
">
                  <INPUT TYPE=hidden NAME=list_upid  VALUE="<?php echo $this->_tpl_vars['list_upid']; ?>
">
                  <?php echo $this->_tpl_vars['select_option']; ?>

                  <input name="article_title" type="text"   class="article_title" id="article_title"  value="<?php echo $this->_tpl_vars['re_title']; ?>
" onfocus="this.style.border='#21759B  solid  1px'"  onblur="this.style.border='#A5ACB2  solid  1px';this.value=(this.value.Trim()=='')?'>>友情提示：标题不能为空！':this.value;"/><br>
                  <textarea name="article_content" cols="" rows=""  id="article_content"><?php echo $this->_tpl_vars['re_content']; ?>
</textarea>
                  <br>
                  <b>个人分类：</b>

                  <select  size="1"  name=a_fclassid    id="a_fclassid" onchange=changeselect(this.value) >
                   <?php echo $this->_tpl_vars['fclass_array']; ?>

                  </select>├──

                  <select  size="1"  name=a_cclassid>
                   <?php echo $this->_tpl_vars['cclass_option']; ?>

                  </select>

                  <a  href="#friend_add"   class="popup"   rel="width:430;height:180">添加分类</a><br>
                  <b>隐私设置：</b>
                  <select name="article_show" size="1">
                    <option  value="3">所有可见</option>
                    <option  value="2">好友可见</option>
                    <option  value="1">情侣可见</option>
                    <option  value="0">主人可见</option>
                  </select>
                  <input name="comment_on" type="checkbox" value="0" /> <i>不允许评论</i><br>

                  <label>
                    <input type="submit" name="article_publish"   class="article_act"  value="<?php echo $this->_tpl_vars['tool_submit']; ?>
"/>
                    <input type="submit" name="article_save"   class="article_act"  value="保存草稿"/>
                  </label>


                  <a     value="预览文章" id="send_view"  onclick="Get_id('view_title').innerHTML=Get_id('article_title').value;Get_id('view_content').innerHTML=KE.html('article_content');showview();"   href="#"    class="emotion_comment_link"/>预览文章</a>
               </form>

             <div class="clear"></div>
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
                           <em  id="ajax_wait_text"  style="color:#2C76C3"></em>
                         </span>
                          </form>
                        </div>

    </div> <!--main_left  end-->

  </div>                          <!--main  end-->





<?php echo '

<style>
#send_view{color:#21759B;padding:0px  3px;margin-top:3px;}
#send_view:hover{background:#21759B;color:#fff;}
#view_cover{
	background:#000;
	height:100%;
        _height:2000px;
	width:100%;
    position:absolute;
	top:0px;
	left:0px;
	filter:alpha(opacity=70);
	opacity: .70;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=70)";
	}


#view_main{
	width:690px;
    position:absolute;
	top:15%;
         _top:5%;
	left:26%;
	margin:opx  auto;
	_margin-top:100px;
	background:#fff;
	border:solid  #FFFFFF   10px;
	padding:0px 10px;
	padding-bottom:40px;
	font-family:Arial, Helvetica, sans-serif;
	color:#2B2B2B;
    line-height:23px;
	}
#view_main  .view_title{ width:665px; line-height:14px; margin-bottom:20px;font-size:14px; background:#535252; color:#FFF; font-weight:bold;padding:5px;padding-left:20px;}

#view_close{
	position:absolute;
	top:-20px;
	right:-20px;
	}

#view_close  img{ border:0px;cursor:pointer;}
#view_content{
    background:#FFF;
    height:300px;
    font-size:13px;
    line-height:20px;
	overflow-y:scroll;
	color:#2B2B2B;
    line-height:23px;

	}

#view_main  .view_sep_border{ width:690px;}
.view_sep_border {
	float:left;
	width:467px;
	border-bottom:#A8C5D0 dashed 1px;
	font-size:0px;
	height:1px;
	margin:6px 0px 10px 0px;
}

</style>

<script>
function showview(){
	document.getElementById("view_cover").style.display="block";
        document.getElementById("view_main").style.display="block";
	document.body.style.overflow="hidden";
	}

function hideview(){
	document.getElementById("view_cover").style.display="none";
        document.getElementById("view_main").style.display="none";
        document.body.style.overflow="scroll";
	}
</script>


<div id="view_cover"  style="display:none"  onclick="javascript:hideview()">
<div  style="clear:both;"></div>
</div>

<div id="view_main"  style="display:none">
<a  onclick="javascript:hideview()"   id="view_close"><img src="function/icon_close.gif" class="cntrl" title="Close" /></a>
    <div  class="view_title">文章预览</div>
    <center><b  id="view_title">我的生活</b></center>

    <div  class="view_sep_border"></div>
    <div  id="view_content"><!--===================================-->

    </div><!--===================================-->
<div  style="clear:both;"></div>
</div>

'; ?>


<!--site_nav  start-->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "site_foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!--site_nav  END-->