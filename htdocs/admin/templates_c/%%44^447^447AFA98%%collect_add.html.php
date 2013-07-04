<?php /* Smarty version 2.6.26, created on 2011-05-14 10:29:01
         compiled from collect_add.html */ ?>
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
/images/collect_center.png" width="31" height="34"   class="control_logo"/>
           <h1>网址收藏</h1>
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
/images/user_collect.gif" width="16" height="17" /> <b href="javascript:void(0);"  class="info_now"  style="font-size:12px;"><?php echo $this->_tpl_vars['tool_title']; ?>
</b>
                   <div class="clear"></div>
                   </div>


                   <div  id="info_content">
                   <form action="index.php?display=collect_add" method="POST"  name="collect_add_form"  onsubmit="body.onbeforeunload='';">

                   <INPUT TYPE=hidden NAME=display  VALUE="collect_add">
                   <INPUT TYPE=hidden NAME=<?php echo $this->_tpl_vars['tool_do_name']; ?>
  VALUE="<?php echo $this->_tpl_vars['tool_do']; ?>
">
                   <INPUT TYPE=hidden NAME=do_id  VALUE="<?php echo $this->_tpl_vars['do_id']; ?>
">
                   <INPUT TYPE=hidden NAME=location_url  VALUE="<?php echo $this->_tpl_vars['location_url']; ?>
">

                   <span  class="info_span"><b>显示名称</b>
                        <p>
                          <input name="collect_name" type="text"   class="text_input" value="<?php echo $this->_tpl_vars['re_name']; ?>
"  onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/>
                        </p>
                   </span>

                   <span  class="info_span"><b>URL地址</b>
                        <p>
                          <input name="collect_url" type="text"   class="text_input"  value="<?php echo $this->_tpl_vars['re_url']; ?>
"  onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/>
                          <font  style="margin-top:5px;font-size:13px;color:#999">( 如：http://www.sunsonworld.com )</font>
                        </p>
                   </span>

                   <span   class="info_span"><b>网址描述</b>
                         <p>
                          <textarea     name="collect_description"  onfocus="this.style.border='#21759B  solid  1px'"  onblur="this.style.border='#A5ACB2  solid  1px'"    style="*margin-left:-40px;"><?php echo $this->_tpl_vars['re_description']; ?>
</textarea>
                         </p>
                   </span>

                   <span   class="info_span"><b>目标窗口</b>
                        <p>

                            <input type="radio" name="collect_target" value="_self" class="input_radio"  checked="checked"/>
                            <font  title="在当前窗体打开链接,此为默认值"  style="CURSOR: help"  class="tooltip">_SELF</font>
                            <input name="collect_target" type="radio" class="input_radio" value="_top" />
                            <font  title="在当前窗体打开链接，并替换当前的整个窗体(框架页)"  style="CURSOR: help"  class="tooltip">_TOP</font>
                            <input type="radio" name="collect_target" value="_parent" class="input_radio"/>
                            <font  title="在父窗体中打开链接"  style="CURSOR: help"  class="tooltip">_PARENT</font>
                            <input type="radio" name="collect_target" value="_blank" class="input_radio"/>
                            <font  title="在新窗口中打开链接"  style="CURSOR: help"  class="tooltip">_BLANK</font>

                        </p>

                   </span>

                   <span  class="info_span">

                      <?php echo $this->_tpl_vars['select_option']; ?>


                      <b>个人分类：</b>
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

                         <select name="collect_show" size="1">
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
                        <p><b  onclick="document.collect_add_form.submit()"><?php echo $this->_tpl_vars['tool_submit']; ?>
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