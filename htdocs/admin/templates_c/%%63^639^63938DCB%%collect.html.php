<?php /* Smarty version 2.6.26, created on 2011-06-22 02:39:58
         compiled from collect.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'upper', 'collect.html', 105, false),)), $this); ?>
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
<script charset="utf-8" src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/editor/kindeditor.js"></script>

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

       <div  class="content_block   main_tool   resource_main_tool">
               <div  class="content_block_title">收藏列表</div>
               <div  class="content_block_main">
                        <span  class="tool_info"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_resource.gif" width="16" height="17" /><b>全部收藏</b><?php echo $this->_tpl_vars['collect_num']; ?>
个
                        </span>
                        <span  class="tool_bar">
                             <form action="" method="get">
                                   <input name="input" type="checkbox" value=""   onclick="select_all(this.checked);"/>全选
                                   <label>
                                     <input type="button" name="shield" id="add"  onclick="javascript:window.location.href='index.php?display=collect_add&list_upid=<?php echo $this->_tpl_vars['list_upid']; ?>
'"  value="   添加网址"/>
                                     <input type="button" name="del" id="del"  value="  删除所选"/   onclick="CheckForm(this);Get_id('batch_do').value='batch_del';document.collect_list_handle.submit();">
                                     <select name="jumpMenu2" id="top_jump" onchange="if(this.selectedIndex>0)Get_id('batch_do').value='batch_show';Get_id('batch_show').value=this.options[this.selectedIndex].value;document.collect_list_handle.submit();">
                                         <option value="" selected="selected" >隐私设置</option>
                                        <option value="3">所有可见</option>
                                        <option value="2">好友可见</option>
                                        <option value="1">情侣可见</option>
                                        <option value="0">主人可见</option>
                                     </select>
                                   </label>
                             </form>
                        </span>
                        <div  class="sep_border"></div>

                        <span  class="tool_clsss"   id="class_list_bar">

                        <a href="index.php?display=collect&list_upid=<?php echo $this->_tpl_vars['list_upid']; ?>
"  style="<?php echo $this->_tpl_vars['class_all']; ?>
">全部收藏</a><h4>|</h4>

                        <?php unset($this->_sections['cclass_list']);
$this->_sections['cclass_list']['name'] = 'cclass_list';
$this->_sections['cclass_list']['loop'] = is_array($_loop=$this->_tpl_vars['cclass_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cclass_list']['show'] = true;
$this->_sections['cclass_list']['max'] = $this->_sections['cclass_list']['loop'];
$this->_sections['cclass_list']['step'] = 1;
$this->_sections['cclass_list']['start'] = $this->_sections['cclass_list']['step'] > 0 ? 0 : $this->_sections['cclass_list']['loop']-1;
if ($this->_sections['cclass_list']['show']) {
    $this->_sections['cclass_list']['total'] = $this->_sections['cclass_list']['loop'];
    if ($this->_sections['cclass_list']['total'] == 0)
        $this->_sections['cclass_list']['show'] = false;
} else
    $this->_sections['cclass_list']['total'] = 0;
if ($this->_sections['cclass_list']['show']):

            for ($this->_sections['cclass_list']['index'] = $this->_sections['cclass_list']['start'], $this->_sections['cclass_list']['iteration'] = 1;
                 $this->_sections['cclass_list']['iteration'] <= $this->_sections['cclass_list']['total'];
                 $this->_sections['cclass_list']['index'] += $this->_sections['cclass_list']['step'], $this->_sections['cclass_list']['iteration']++):
$this->_sections['cclass_list']['rownum'] = $this->_sections['cclass_list']['iteration'];
$this->_sections['cclass_list']['index_prev'] = $this->_sections['cclass_list']['index'] - $this->_sections['cclass_list']['step'];
$this->_sections['cclass_list']['index_next'] = $this->_sections['cclass_list']['index'] + $this->_sections['cclass_list']['step'];
$this->_sections['cclass_list']['first']      = ($this->_sections['cclass_list']['iteration'] == 1);
$this->_sections['cclass_list']['last']       = ($this->_sections['cclass_list']['iteration'] == $this->_sections['cclass_list']['total']);
?>

                        <a href="index.php?display=collect&list_upid=<?php echo $this->_tpl_vars['list_upid']; ?>
&list_classid=<?php echo $this->_tpl_vars['cclass_list'][$this->_sections['cclass_list']['index']]['cclass_id']; ?>
"    <?php echo $this->_tpl_vars['cclass_list'][$this->_sections['cclass_list']['index']]['cclass_list_class']; ?>
><?php echo $this->_tpl_vars['cclass_list'][$this->_sections['cclass_list']['index']]['cclass_name']; ?>
</a><h4>|</h4>

                        <?php endfor; endif; ?>


                        </span>

                        <div  class="sep_border"></div>

             </div>
           <div class="clear"></div>
           </div>



           <div  class="content_block   latest_act   resource_list   collect_list"     id="list_check">

               <div  class="content_block_main">
                  <form action="index.php?display=collect" method="get"  name="collect_list_handle">

                  <input name="display" type="hidden"  value="collect" />
                  <input name="location_url" type="hidden"  value="<?php echo $this->_tpl_vars['location_url']; ?>
" />
                  <input name="do" type="hidden"   id="batch_do" value="batch_del" />
                  <input name="batch_show_type" type="hidden"   id="batch_show" value="0" />

                  <ul>

                      <?php unset($this->_sections['collect_list']);
$this->_sections['collect_list']['name'] = 'collect_list';
$this->_sections['collect_list']['loop'] = is_array($_loop=$this->_tpl_vars['collect_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['collect_list']['show'] = true;
$this->_sections['collect_list']['max'] = $this->_sections['collect_list']['loop'];
$this->_sections['collect_list']['step'] = 1;
$this->_sections['collect_list']['start'] = $this->_sections['collect_list']['step'] > 0 ? 0 : $this->_sections['collect_list']['loop']-1;
if ($this->_sections['collect_list']['show']) {
    $this->_sections['collect_list']['total'] = $this->_sections['collect_list']['loop'];
    if ($this->_sections['collect_list']['total'] == 0)
        $this->_sections['collect_list']['show'] = false;
} else
    $this->_sections['collect_list']['total'] = 0;
if ($this->_sections['collect_list']['show']):

            for ($this->_sections['collect_list']['index'] = $this->_sections['collect_list']['start'], $this->_sections['collect_list']['iteration'] = 1;
                 $this->_sections['collect_list']['iteration'] <= $this->_sections['collect_list']['total'];
                 $this->_sections['collect_list']['index'] += $this->_sections['collect_list']['step'], $this->_sections['collect_list']['iteration']++):
$this->_sections['collect_list']['rownum'] = $this->_sections['collect_list']['iteration'];
$this->_sections['collect_list']['index_prev'] = $this->_sections['collect_list']['index'] - $this->_sections['collect_list']['step'];
$this->_sections['collect_list']['index_next'] = $this->_sections['collect_list']['index'] + $this->_sections['collect_list']['step'];
$this->_sections['collect_list']['first']      = ($this->_sections['collect_list']['iteration'] == 1);
$this->_sections['collect_list']['last']       = ($this->_sections['collect_list']['iteration'] == $this->_sections['collect_list']['total']);
?>

                       <li>
                       <input name="collect_handle[]" type="checkbox"   class="visitor_list_check" value="<?php echo $this->_tpl_vars['collect_list'][$this->_sections['collect_list']['index']]['collect_id']; ?>
" />
                       <span  class="act_emotion">
                            <a href="<?php echo $this->_tpl_vars['collect_list'][$this->_sections['collect_list']['index']]['url']; ?>
"  target="_blank"  style="width:120px;"><b><?php echo $this->_tpl_vars['collect_list'][$this->_sections['collect_list']['index']]['name']; ?>
</b></a>
                            <font><a  href="<?php echo $this->_tpl_vars['collect_list'][$this->_sections['collect_list']['index']]['url']; ?>
"  target="_blank"  title="<?php echo $this->_tpl_vars['collect_list'][$this->_sections['collect_list']['index']]['url_show']; ?>
" style="width:180px;"><?php echo $this->_tpl_vars['collect_list'][$this->_sections['collect_list']['index']]['url_show']; ?>
</a></font>
                            <a  href="index.php?display=collect&list_upid=<?php echo $this->_tpl_vars['collect_list'][$this->_sections['collect_list']['index']]['upid']; ?>
&list_classid=<?php echo $this->_tpl_vars['collect_list'][$this->_sections['collect_list']['index']]['classid']; ?>
"  class="collect_class"  style="width:100px;"><?php echo $this->_tpl_vars['collect_list'][$this->_sections['collect_list']['index']]['result_classname']; ?>
</a>
                            <a  class="collect_class"  style="width:60px;"><?php echo ((is_array($_tmp=$this->_tpl_vars['collect_list'][$this->_sections['collect_list']['index']]['target'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</a>
                            <a  href="index.php?display=collect_add&list_upid=<?php echo $this->_tpl_vars['list_upid']; ?>
&re_do=edit&do_id=<?php echo $this->_tpl_vars['collect_list'][$this->_sections['collect_list']['index']]['collect_id']; ?>
&location_url=<?php echo $this->_tpl_vars['location_url']; ?>
">&nbsp;&nbsp;编辑&nbsp;&nbsp;</a>
                            <a  href="javascript:void(0)" onclick="CheckForm();location.href='index.php?<?php echo $this->_tpl_vars['send_url']; ?>
&do=del&do_id=<?php echo $this->_tpl_vars['collect_list'][$this->_sections['collect_list']['index']]['collect_id']; ?>
'">&nbsp;&nbsp;删除&nbsp;&nbsp;</a>
                            <select name="change_show" class="jumpMenu"  onchange="if(this.selectedIndex>=0)location.href=this.options[this.selectedIndex].value">
					           <option value="index.php?display=collect&do=chg_show&do_id=<?php echo $this->_tpl_vars['collect_list'][$this->_sections['collect_list']['index']]['collect_id']; ?>
&show=3&location_url=<?php echo $this->_tpl_vars['location_url']; ?>
"  <?php echo $this->_tpl_vars['collect_list'][$this->_sections['collect_list']['index']]['array_show_3']; ?>
>所有可见</option>
                               <option value="index.php?display=collect&do=chg_show&do_id=<?php echo $this->_tpl_vars['collect_list'][$this->_sections['collect_list']['index']]['collect_id']; ?>
&show=2&location_url=<?php echo $this->_tpl_vars['location_url']; ?>
"  <?php echo $this->_tpl_vars['collect_list'][$this->_sections['collect_list']['index']]['array_show_2']; ?>
>好友可见</option>
                               <option value="index.php?display=collect&do=chg_show&do_id=<?php echo $this->_tpl_vars['collect_list'][$this->_sections['collect_list']['index']]['collect_id']; ?>
&show=1&location_url=<?php echo $this->_tpl_vars['location_url']; ?>
"  <?php echo $this->_tpl_vars['collect_list'][$this->_sections['collect_list']['index']]['array_show_1']; ?>
>情侣可见</option>
                               <option value="index.php?display=collect&do=chg_show&do_id=<?php echo $this->_tpl_vars['collect_list'][$this->_sections['collect_list']['index']]['collect_id']; ?>
&show=0&location_url=<?php echo $this->_tpl_vars['location_url']; ?>
"  <?php echo $this->_tpl_vars['collect_list'][$this->_sections['collect_list']['index']]['array_show_0']; ?>
>主人可见</option>";

                            </select>
                       </span>

                       <div  class="sep_border"></div>

                       </li>

                      <?php endfor; endif; ?>



                  </ul>
               </form>
               <div class="page"><div class="sabrosus"><?php echo $this->_tpl_vars['pagenav']; ?>
</div></div>
               <div class="clear"></div>
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