<?php /* Smarty version 2.6.26, created on 2011-05-15 02:29:57
         compiled from resource_add.html */ ?>
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
				id : \'resource_description\',
				resizeMode : 2,

				newlineTag : \'br\',
			    imageUploadJson : \'../../upload_json.php\',
			    fileManagerJson : \'../../file_manager_json.php\',
			    allowFileManager : true,
				allowUpload: true,
				allowPreviewEmoticons : false,

				items : [
				\'fontname\', \'fontsize\', \'|\', \'textcolor\', \'bgcolor\', \'bold\',
				 \'|\', \'emoticons\', \'image\', \'link\']
			});

			KE.show({
				id : \'textarea_self_intro\',
				resizeMode : 1,
				allowPreviewEmoticons : false,
				allowUpload : false,
				items : [
				\'fontname\', \'fontsize\', \'|\', \'textcolor\', \'bgcolor\', \'bold\',
				 \'|\', \'emoticons\', \'image\', \'link\']
			});

		</script>

'; ?>


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
/images/resource_center.png" width="31" height="34"   class="control_logo"/>
           <h1>资源下载</h1>
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
               <div  class="content_block_title"><?php echo $this->_tpl_vars['tool_title']; ?>
</div>
               <div  class="info_main">
                   <div  id="top_tool"  class="info_title"   style="border-bottom-style:dashed">
                   <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_resource.gif" width="16" height="17" /> <b href="javascript:void(0);"  class="info_now"><?php echo $this->_tpl_vars['tool_title']; ?>
</b>
                   <div class="clear"></div>
                   </div>


                   <div  id="info_content">
                   <form action="index.php?display=resource_add" enctype="multipart/form-data"   method="post"  name="resource_add_form">


                   <INPUT TYPE=hidden NAME=display  VALUE="resource_add">
                   <INPUT TYPE=hidden NAME=<?php echo $this->_tpl_vars['tool_do_name']; ?>
  VALUE="<?php echo $this->_tpl_vars['tool_do']; ?>
">
                   <INPUT TYPE=hidden NAME=do_id  VALUE="<?php echo $this->_tpl_vars['do_id']; ?>
">
                   <INPUT TYPE=hidden NAME=location_url  VALUE="<?php echo $this->_tpl_vars['location_url']; ?>
">
                   <INPUT TYPE=hidden NAME=unlink_file_path  VALUE="<?php echo $this->_tpl_vars['pre_file_path']; ?>
">
                   <span  class="info_span"><b>资源名称</b>
                        <p>
                          <input name="name" type="text" value="<?php echo $this->_tpl_vars['name']; ?>
"  class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/>
                        </p>
                   </span>

                   <span   class="info_span"><b>资源地址</b>
                        <p>
                            <input name="path_select" type="radio" class="input_radio" value="network"  checked="checked"   onclick="music_input_url()"/><font><strong>网络地址</strong></font>
                            <input type="radio" name="path_select" value="self_upload"  class="input_radio"/    onclick="music_input_upload()"><font><strong>上传资源</strong></font>
                        </p>

                   </span>
                  <span  class="info_span"  id="music_url">
                         <b></b>
                         <p><input name="net_path" type="text" value="<?php echo $this->_tpl_vars['path']; ?>
"   class="text_input"   onClick="getDateString(this,oCalendarChs)"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'" /><font>(请输入网络资源地址)</font></p>
                   </span>

                   <span  class="info_span"  id="music_upload">
                         <b></b>
                         <p>
		                 <input type="file" name="local_path"   style="*margin-left:-40px;"/><font>(大小限制：10M)</font>
                         </p>
                   </span>


                   <span   class="info_span"><b>推荐级别</b>
                        <p>

                        <p>

                            <input name="rank" type="radio" class="input_radio" value="1" checked="checked"/>
                            <font>
                               <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/love_grade.jpg" width="12" height="12" />
                            </font>
                            <input type="radio" name="rank" value="2" class="input_radio"/>
                            <font>
                              <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/love_grade.jpg" width="12" height="12" /><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/love_grade.jpg" width="12" height="12" />
                            </font>
                            <input type="radio" name="rank" value="3" class="input_radio"/>
                            <font>
                              <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/love_grade.jpg" width="12" height="12" /><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/love_grade.jpg" width="12" height="12" /><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/love_grade.jpg" width="12" height="12" />
                            </font>
                            <input type="radio" name="rank" value="4" class="input_radio"/>
                            <font>
                              <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/love_grade.jpg" width="12" height="12" /><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/love_grade.jpg" width="12" height="12" /><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/love_grade.jpg" width="12" height="12" /><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/love_grade.jpg" width="12" height="12" />
                            </font>
                            <input type="radio" name="rank" value="5" class="input_radio"/>
                            <font>
                              <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/love_grade.jpg" width="12" height="12" /><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/love_grade.jpg" width="12" height="12" /><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/love_grade.jpg" width="12" height="12" /><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/love_grade.jpg" width="12" height="12" /><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/love_grade.jpg" width="12" height="12" />
                            </font>

                        </p>

                   </span>

                   <span   class="info_span"><b>资源介绍</b>
                         <p>
                          <textarea   id="resource_description"  name="description"  onfocus="this.style.border='#21759B  solid  1px'"  onblur="this.style.border='#A5ACB2  solid  1px'"   style="*margin-left:-40px;width:300px;height:150px;"><?php echo $this->_tpl_vars['description']; ?>
</textarea>
                         </p>
                   </span>

                   <span  class="info_span"><b>个人分类</b>
                        <?php echo $this->_tpl_vars['select_option']; ?>

                         <p>
                           <select  size="1"  name=a_fclassid    id="a_fclassid" onchange=changeselect(this.value) >
                              <?php echo $this->_tpl_vars['fclass_array']; ?>

                           </select><font style="float:left;margin-top:3px;">├──</font>

                           <select  size="1"  name=a_cclassid>
                              <?php echo $this->_tpl_vars['cclass_option']; ?>

                           </select>
                         <a  style="color:#21759B; margin-left:10px;line-height:25px;"    href="#friend_add"   class="popup"   rel="width:410;height:180">新建分类</a>
                         </p>

                   </span>

                   <span  class="info_span"><b>隐私设置</b>
                         <p>

                         <select name="resource_show" size="1">
                            <option  value="3">所有可见</option>
                            <option  value="2">好友可见</option>
                            <option  value="1">情侣可见</option>
                            <option  value="0">主人可见</option>
                         </select>

                         </p>

                   </span>


                   <span   class="info_span"><b></b>
                        <p></p>
                   </span>


                   <span   class="info_span"><b></b>
                        <p><b  onclick="document.resource_add_form.submit()"><?php echo $this->_tpl_vars['tool_submit']; ?>
</b></p>
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
                           <em  id="ajax_wait_text"  style="color:#2C76C3"></em>
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