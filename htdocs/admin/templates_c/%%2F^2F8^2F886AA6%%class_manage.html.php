<?php /* Smarty version 2.6.26, created on 2011-05-14 07:06:08
         compiled from class_manage.html */ ?>
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
/images/class_center.png" width="31" height="34"   class="control_logo"/>
           <h1>栏目管理</h1>
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
               <div  class="content_block_title">栏目管理</div>
               <div  class="info_main">
                   <div  id="top_tool"  class="info_title"   style="border-bottom-style:dashed">
                   <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_class.gif" width="16" height="17" /> <b href="javascript:void(0);"  class="info_now">栏目列表</b>
                   <div class="clear"></div>
                   </div>


                   <div  id="class_manage">
                   <form  action="index.php">
                   <INPUT TYPE=hidden NAME=display  VALUE="class_manage">
                   <INPUT TYPE=hidden NAME=do  VALUE="add">
                    <ul>
                       <li>
                             <span  class="class_order"><font>&nbsp;&nbsp;&nbsp;&nbsp;</font><b>显示顺序</b></span>
                             <span  class="class_name"><b>栏目名称</b></span>
                             <span  class="class_belong"><b>栏目类别</b></span>
                             <span  class="class_show"><b>导航显示</b></span>
                             <span  class="class_temp"><b>模板页面</b></span>
                             <span  class="class_handle"><b>栏目操作</b></span>
                       <div  class="clear"></div>
                       </li>

                      <?php unset($this->_sections['fclass']);
$this->_sections['fclass']['name'] = 'fclass';
$this->_sections['fclass']['loop'] = is_array($_loop=$this->_tpl_vars['fclass']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['fclass']['show'] = true;
$this->_sections['fclass']['max'] = $this->_sections['fclass']['loop'];
$this->_sections['fclass']['step'] = 1;
$this->_sections['fclass']['start'] = $this->_sections['fclass']['step'] > 0 ? 0 : $this->_sections['fclass']['loop']-1;
if ($this->_sections['fclass']['show']) {
    $this->_sections['fclass']['total'] = $this->_sections['fclass']['loop'];
    if ($this->_sections['fclass']['total'] == 0)
        $this->_sections['fclass']['show'] = false;
} else
    $this->_sections['fclass']['total'] = 0;
if ($this->_sections['fclass']['show']):

            for ($this->_sections['fclass']['index'] = $this->_sections['fclass']['start'], $this->_sections['fclass']['iteration'] = 1;
                 $this->_sections['fclass']['iteration'] <= $this->_sections['fclass']['total'];
                 $this->_sections['fclass']['index'] += $this->_sections['fclass']['step'], $this->_sections['fclass']['iteration']++):
$this->_sections['fclass']['rownum'] = $this->_sections['fclass']['iteration'];
$this->_sections['fclass']['index_prev'] = $this->_sections['fclass']['index'] - $this->_sections['fclass']['step'];
$this->_sections['fclass']['index_next'] = $this->_sections['fclass']['index'] + $this->_sections['fclass']['step'];
$this->_sections['fclass']['first']      = ($this->_sections['fclass']['iteration'] == 1);
$this->_sections['fclass']['last']       = ($this->_sections['fclass']['iteration'] == $this->_sections['fclass']['total']);
?>
                       <li>
                             <span  class="class_order"><font   id="show_child_font<?php echo $this->_tpl_vars['fclass'][$this->_sections['fclass']['index']]['fclassid']; ?>
" onclick="show_child_class(<?php echo $this->_tpl_vars['fclass'][$this->_sections['fclass']['index']]['click_show_id']; ?>
);"><?php echo $this->_tpl_vars['fclass'][$this->_sections['fclass']['index']]['click_show']; ?>
</font><input name="pref_classid[]" type="hidden"   value="<?php echo $this->_tpl_vars['fclass'][$this->_sections['fclass']['index']]['fclassid']; ?>
"/><input name="pref_order[]" type="text"   value="<?php echo $this->_tpl_vars['fclass'][$this->_sections['fclass']['index']]['forder']; ?>
"/></span>
                             <span  class="class_name"><input name="pref_name[]" type="text"   value="<?php echo $this->_tpl_vars['fclass'][$this->_sections['fclass']['index']]['fclassname']; ?>
"/><?php echo $this->_tpl_vars['fclass'][$this->_sections['fclass']['index']]['add_class']; ?>
</span>
                             <span  class="class_belong"><font><?php echo $this->_tpl_vars['fclass'][$this->_sections['fclass']['index']]['fbelong']; ?>
</font></span>
                             <span  class="class_show">
                               <select name="pref_show[]">
                                 <?php echo $this->_tpl_vars['fclass'][$this->_sections['fclass']['index']]['fshow']; ?>

                               </select>
                             </span>
                             <span  class="class_temp"><input name="pref_temp[]" type="text"   value="<?php echo $this->_tpl_vars['fclass'][$this->_sections['fclass']['index']]['ftemp']; ?>
"/></span>
                             <span  class="class_handle"><a  href="javascript:void(0)" onclick="javascript:CheckForm(this);location.href='index.php?display=class_manage&do=del&do_id=<?php echo $this->_tpl_vars['fclass'][$this->_sections['fclass']['index']]['fclassid']; ?>
';">删除</a></span><br>

                             <div id="child_class<?php echo $this->_tpl_vars['fclass'][$this->_sections['fclass']['index']]['fclassid']; ?>
"  style="display:none"><!--=======+++++++========-->

                             <?php unset($this->_sections['cclass']);
$this->_sections['cclass']['name'] = 'cclass';
$this->_sections['cclass']['loop'] = is_array($_loop=$this->_tpl_vars['fclass'][$this->_sections['fclass']['index']]['cclass']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cclass']['show'] = true;
$this->_sections['cclass']['max'] = $this->_sections['cclass']['loop'];
$this->_sections['cclass']['step'] = 1;
$this->_sections['cclass']['start'] = $this->_sections['cclass']['step'] > 0 ? 0 : $this->_sections['cclass']['loop']-1;
if ($this->_sections['cclass']['show']) {
    $this->_sections['cclass']['total'] = $this->_sections['cclass']['loop'];
    if ($this->_sections['cclass']['total'] == 0)
        $this->_sections['cclass']['show'] = false;
} else
    $this->_sections['cclass']['total'] = 0;
if ($this->_sections['cclass']['show']):

            for ($this->_sections['cclass']['index'] = $this->_sections['cclass']['start'], $this->_sections['cclass']['iteration'] = 1;
                 $this->_sections['cclass']['iteration'] <= $this->_sections['cclass']['total'];
                 $this->_sections['cclass']['index'] += $this->_sections['cclass']['step'], $this->_sections['cclass']['iteration']++):
$this->_sections['cclass']['rownum'] = $this->_sections['cclass']['iteration'];
$this->_sections['cclass']['index_prev'] = $this->_sections['cclass']['index'] - $this->_sections['cclass']['step'];
$this->_sections['cclass']['index_next'] = $this->_sections['cclass']['index'] + $this->_sections['cclass']['step'];
$this->_sections['cclass']['first']      = ($this->_sections['cclass']['iteration'] == 1);
$this->_sections['cclass']['last']       = ($this->_sections['cclass']['iteration'] == $this->_sections['cclass']['total']);
?>

                             <div   style="float:left;width:690px;">
                             <span  class="class_handle  append_handle"></span>
                             <span  class="class_order  append_order"><input name="prec_classid[]" type="hidden"   value="<?php echo $this->_tpl_vars['fclass'][$this->_sections['fclass']['index']]['cclass'][$this->_sections['cclass']['index']]['cclassid']; ?>
"/><input name="prec_order[]" type="text"   value="<?php echo $this->_tpl_vars['fclass'][$this->_sections['fclass']['index']]['cclass'][$this->_sections['cclass']['index']]['corder']; ?>
"/><font>├────</font></span>
                             <span  class="class_name"><input name="prec_name[]" type="text"   value="<?php echo $this->_tpl_vars['fclass'][$this->_sections['fclass']['index']]['cclass'][$this->_sections['cclass']['index']]['cclassname']; ?>
"/></span>
                             <span  class="class_temp  append_temp"></span>
                             <span  class="class_handle"><a  href="javascript:void(0)" onclick="javascript:CheckForm(this);location.href='index.php?display=class_manage&do=del&do_id=<?php echo $this->_tpl_vars['fclass'][$this->_sections['fclass']['index']]['cclass'][$this->_sections['cclass']['index']]['cclassid']; ?>
'">删除</a></span>
                             <br>
                             </div>

                             <?php endfor; endif; ?>



                             </div><!--=======++++++++========-->


                      <div  class="clear"></div>
                       </li>
                      <?php endfor; endif; ?>

                       <li>
                             <span  class="class_order"></span>
                             <span  class="class_name"><a  onclick="append_father()"  style="width:120px;line-height:20px;color:#E36E21">添加一级栏目</a></span>
                       <div  class="clear"></div>
                       </li>

                       <li>
                             <span  class="class_order"></span>
                             <span  class="class_name"><input type="submit" name="shield"   class="class_submit"  value="提交设置"/></span>
                       <div  class="clear"></div>
                       </li>


                    </ul>
                 </form>
                 <div class="clear"></div>
                 </div>




               </div>
           <div class="clear"></div>
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