<?php /* Smarty version 2.6.26, created on 2011-05-14 13:12:19
         compiled from album.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
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
          <h1>相册列表</h1>
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
               <div  class="content_block_title">相册列表</div>
               <div  class="content_block_main">
                        <span  class="tool_info"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_pic.gif" width="16" height="17" /><b>共有相册</b><?php echo $this->_tpl_vars['album_num']; ?>
个
                        </span>
                        <span  class="tool_bar">
                           <form action="" method="get">
                                   <input name="input" type="checkbox" value=""   onclick="select_all(this.checked);"/>全选
                                   <label>
                                     <input type="button" name="shield" id="add" onclick="window.location.href='index.php?display=photo_add&list_upid=<?php echo $this->_tpl_vars['list_upid']; ?>
'"  value="  上传相片"/>
                                     <input type="button" name="button" id="del" onclick="CheckForm(this);Get_id('batch_do').value='batch_del';document.album_list_handle.submit();"  value="  删除所选"/>
                                   </label>
                                   <a  style="color:#317FD5;margin-left:15px;">隐私设置</a>
                                   <select name="jumpMenu2" id="top_jump" onchange="if(this.selectedIndex>0)Get_id('batch_do').value='batch_show';Get_id('batch_show').value=this.options[this.selectedIndex].value;document.album_list_handle.submit();">
                                      <option value="" selected="selected" >隐私设置</option>
                                      <option value="3">所有可见</option>
                                      <option value="2">好友可见</option>
                                      <option value="1">情侣可见</option>
                                      <option value="0">主人可见</option>
                                   </select>
                            </form>
                        </span>
                 <div  class="sep_border"></div>
                        <span  class="tool_clsss">
                        <b><a>其他操作</a></b><h4>：</h4><a  href="javascript:void(0);" onclick="edit_photo();">【显示操作】</a><h4></h4><a href=""   class="emotion_comment_link   popup"  id="album_edit"   onclick="checkbox();" rel="width:740;height:400">编辑相册信息</a><h4></h4><a href="#friend_add"   class="emotion_comment_link   popup"   rel="width:420;height:180">创建新相册</a>
                        </span>
                        <div  class="sep_border"></div>

             </div>
           <div class="clear"></div>
           </div>



           <div  class="content_block   latest_act   resource_list   photo_list   album"     id="list_check">

               <div  class="content_block_main">
                  <form action="index.php?display=album" method="POST"  name="album_list_handle">

                  <input name="display" type="hidden"  value="album"   style="visibility:hidden"/>
                  <input name="do" type="hidden"   id="batch_do" value="batch_del"   style="visibility:hidden"/>
                  <input name="batch_show_type" type="hidden"   id="batch_show" value="0"  style="visibility:hidden" />
                  <INPUT TYPE=hidden NAME=list_upid  VALUE="<?php echo $this->_tpl_vars['list_upid']; ?>
"  id="list_upid" style="visibility:hidden">


                  <ul>
                       <li>

                       <?php unset($this->_sections['album_list']);
$this->_sections['album_list']['name'] = 'album_list';
$this->_sections['album_list']['loop'] = is_array($_loop=$this->_tpl_vars['album_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['album_list']['show'] = true;
$this->_sections['album_list']['max'] = $this->_sections['album_list']['loop'];
$this->_sections['album_list']['step'] = 1;
$this->_sections['album_list']['start'] = $this->_sections['album_list']['step'] > 0 ? 0 : $this->_sections['album_list']['loop']-1;
if ($this->_sections['album_list']['show']) {
    $this->_sections['album_list']['total'] = $this->_sections['album_list']['loop'];
    if ($this->_sections['album_list']['total'] == 0)
        $this->_sections['album_list']['show'] = false;
} else
    $this->_sections['album_list']['total'] = 0;
if ($this->_sections['album_list']['show']):

            for ($this->_sections['album_list']['index'] = $this->_sections['album_list']['start'], $this->_sections['album_list']['iteration'] = 1;
                 $this->_sections['album_list']['iteration'] <= $this->_sections['album_list']['total'];
                 $this->_sections['album_list']['index'] += $this->_sections['album_list']['step'], $this->_sections['album_list']['iteration']++):
$this->_sections['album_list']['rownum'] = $this->_sections['album_list']['iteration'];
$this->_sections['album_list']['index_prev'] = $this->_sections['album_list']['index'] - $this->_sections['album_list']['step'];
$this->_sections['album_list']['index_next'] = $this->_sections['album_list']['index'] + $this->_sections['album_list']['step'];
$this->_sections['album_list']['first']      = ($this->_sections['album_list']['iteration'] == 1);
$this->_sections['album_list']['last']       = ($this->_sections['album_list']['iteration'] == $this->_sections['album_list']['total']);
?>

                       <div   class="photo_box">
                       <input name="album_handle[]" type="checkbox"   class="visitor_list_check" value="<?php echo $this->_tpl_vars['album_list'][$this->_sections['album_list']['index']]['classid']; ?>
" style="visibility:hidden" />
                       <a  href="index.php?display=photo&list_upid=<?php echo $this->_tpl_vars['list_upid']; ?>
&list_classid=<?php echo $this->_tpl_vars['album_list'][$this->_sections['album_list']['index']]['classid']; ?>
" title="<?php echo $this->_tpl_vars['album_list'][$this->_sections['album_list']['index']]['classname']; ?>
">
                       <img src="<?php echo $this->_tpl_vars['album_list'][$this->_sections['album_list']['index']]['cover']; ?>
" width="100" height="75" />
                       </a>
                       <font><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/<?php echo $this->_tpl_vars['album_list'][$this->_sections['album_list']['index']]['show']; ?>
_access.gif" width="14" height="15" /><?php echo $this->_tpl_vars['album_list'][$this->_sections['album_list']['index']]['classname']; ?>

                       <a href="index.php?display=photo&list_upid=<?php echo $this->_tpl_vars['list_upid']; ?>
&list_classid=<?php echo $this->_tpl_vars['album_list'][$this->_sections['album_list']['index']]['classid']; ?>
" title="<?php echo $this->_tpl_vars['album_list'][$this->_sections['album_list']['index']]['classname']; ?>
">(<?php echo $this->_tpl_vars['album_list'][$this->_sections['album_list']['index']]['pic_num']; ?>
)</a></font>
                       </div>

                       <?php endfor; endif; ?>

                    </li>







                  </ul>
               </form>

               <div class="clear"></div>
               </div>




           <div class="clear"></div>
           </div>
                         <div  style="display:none">
                         <form  name="add_class" action="index.php?display=album" method="post">
                         <input name="display" type="hidden"  value="album"  />
                         <input name="do" type="hidden"  value="add_class"  />
                         <input name="new_upid" type="hidden"  value="<?php echo $this->_tpl_vars['list_upid']; ?>
" />
                         <input name="new_classname" type="hidden"  value=""  id="new_classname"/>
                         <span  id="friend_add" >
                           <b>分类名称&nbsp;&nbsp;&nbsp;&nbsp;</b>
                           <input name="input_classname" type="text"   class="article_title"  value="新建分类名称"  onfocus="this.style.border='#21759B  solid  1px'"  onblur="this.style.border='#A5ACB2  solid  1px';Get_id('new_classname').value=this.value;"/><br>
                           <input type="button" name="shield"   class="article_act"  value="添加分类"  onclick="document.add_class.submit()"/>
                         </span>
                          </form>
                        </div>

        </div> <!--main_left  end-->

  </div>                          <!--main  end-->

<!--site_foot  start-->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "site_foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!--site_foot  END-->