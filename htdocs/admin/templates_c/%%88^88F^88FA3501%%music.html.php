<?php /* Smarty version 2.6.26, created on 2011-06-22 03:25:21
         compiled from music.html */ ?>
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
/js/swfobject.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/js/1bit.js"></script>
<?php echo '
<script type="text/javascript">
	oneBit = new OneBit(\'../admin/themes/default/js/1bit.swf\');
	oneBit.ready(function() {
	    // Using specify you can set \'color\', \'background\', \'playerSize\', \'position\' and \'analytics\' - all are optional
		oneBit.specify(\'color\', \'#349919\');
		// Apply is called after options are specified and includes the CSS selector
		oneBit.specify(\'playerSize\', \'9\');
		oneBit.apply(\'a\');
	});
</script>
'; ?>



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
/images/music_center.png" width="31" height="34"   class="control_logo"/>
           <h1>我的音乐</h1>
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

       <div  class="content_block   main_tool   music_main_tool">
               <div  class="content_block_title">音乐列表</div>
               <div  class="content_block_main">
                        <span  class="tool_info"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_music.gif" width="16" height="17" /><b>全部音乐</b><?php echo $this->_tpl_vars['music_num']; ?>
个
                        </span>
                        <span  class="tool_bar">
                             <form action="" method="get">
                                   <input name="input" type="checkbox" value=""   onclick="select_all(this.checked);"/>全选
                                   <label>
                                     <input type="button" name="shield" id="add" onclick="window.location.href='index.php?display=music_add&list_upid=<?php echo $this->_tpl_vars['list_upid']; ?>
'"  value="  新增音乐"/>
                                     <input type="button" name="button" id="play"  value="  播放所选"  onclick="Get_id('batch_do').value='batch_play';document.music_list_handle.target='_blank';document.music_list_handle.submit();"/>
                                     <input type="button" name="button" id="del"  value="  删除所选"  onclick="CheckForm(this);Get_id('batch_do').value='batch_del';document.music_list_handle.submit();"/>
                                   </label>
                             </form>
                        </span>

                        <div  class="sep_border"></div>
                        <span  class="tool_clsss"   id="class_list_bar">

                        <a href="index.php?display=music&list_upid=<?php echo $this->_tpl_vars['list_upid']; ?>
"  style="<?php echo $this->_tpl_vars['class_all']; ?>
">全部音乐</a><h4>|</h4>

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

                        <a href="index.php?display=music&list_upid=<?php echo $this->_tpl_vars['list_upid']; ?>
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



           <div  class="content_block   music_list"     id="list_check">

               <div  class="content_block_main">

                 <form action="index.php?display=music" method="get"  name="music_list_handle"   target="">

                  <input name="display" type="hidden"  value="music" />
                  <input name="location_url" type="hidden"  value="<?php echo $this->_tpl_vars['location_url']; ?>
" />
                  <input name="do" type="hidden"   id="batch_do" value="batch_del" />
                  <input name="batch_show_type" type="hidden"   id="batch_show" value="0" />




                  <ul>



                   <?php unset($this->_sections['music_list']);
$this->_sections['music_list']['name'] = 'music_list';
$this->_sections['music_list']['loop'] = is_array($_loop=$this->_tpl_vars['music_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['music_list']['show'] = true;
$this->_sections['music_list']['max'] = $this->_sections['music_list']['loop'];
$this->_sections['music_list']['step'] = 1;
$this->_sections['music_list']['start'] = $this->_sections['music_list']['step'] > 0 ? 0 : $this->_sections['music_list']['loop']-1;
if ($this->_sections['music_list']['show']) {
    $this->_sections['music_list']['total'] = $this->_sections['music_list']['loop'];
    if ($this->_sections['music_list']['total'] == 0)
        $this->_sections['music_list']['show'] = false;
} else
    $this->_sections['music_list']['total'] = 0;
if ($this->_sections['music_list']['show']):

            for ($this->_sections['music_list']['index'] = $this->_sections['music_list']['start'], $this->_sections['music_list']['iteration'] = 1;
                 $this->_sections['music_list']['iteration'] <= $this->_sections['music_list']['total'];
                 $this->_sections['music_list']['index'] += $this->_sections['music_list']['step'], $this->_sections['music_list']['iteration']++):
$this->_sections['music_list']['rownum'] = $this->_sections['music_list']['iteration'];
$this->_sections['music_list']['index_prev'] = $this->_sections['music_list']['index'] - $this->_sections['music_list']['step'];
$this->_sections['music_list']['index_next'] = $this->_sections['music_list']['index'] + $this->_sections['music_list']['step'];
$this->_sections['music_list']['first']      = ($this->_sections['music_list']['iteration'] == 1);
$this->_sections['music_list']['last']       = ($this->_sections['music_list']['iteration'] == $this->_sections['music_list']['total']);
?>

                       <li>
                       <input name="music_handle[]" type="checkbox"   class="visitor_list_check" value="<?php echo $this->_tpl_vars['music_list'][$this->_sections['music_list']['index']]['music_id']; ?>
" />
                       <input name="file_path[<?php echo $this->_tpl_vars['music_list'][$this->_sections['music_list']['index']]['music_id']; ?>
]" type="hidden"   class="visitor_list_check" value="<?php echo $this->_tpl_vars['music_list'][$this->_sections['music_list']['index']]['file_path']; ?>
"   style="display:none"/>
                       <a  class="music_title" title="<?php echo $this->_tpl_vars['music_list'][$this->_sections['music_list']['index']]['name']; ?>
"><?php echo $this->_tpl_vars['music_list'][$this->_sections['music_list']['index']]['name_show']; ?>
</a>
                       <a  class="music_author"><?php echo $this->_tpl_vars['music_list'][$this->_sections['music_list']['index']]['singer']; ?>
</a>

                       <!--<span class="onebit_mp3">-->
                           <a href="<?php echo $this->_tpl_vars['music_list'][$this->_sections['music_list']['index']]['path']; ?>
"  class="music_play"  title="下载音乐"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/arrow-down.png" width="16" height="16" /></a>
                          <!-- <span></span>
                       </span>-->

                       <a  class="love_grade"  title="喜爱级别">
                          <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/love_grade<?php echo $this->_tpl_vars['music_list'][$this->_sections['music_list']['index']]['rank']; ?>
.png" width="75" height="14" />
                       </a>

                       <a  class="love_num"  title="喜欢">
                        (<?php echo $this->_tpl_vars['music_list'][$this->_sections['music_list']['index']]['samelove']; ?>
)
                       </a>
                       <a  class="hate_num"  title="不喜欢">
                        (<?php echo $this->_tpl_vars['music_list'][$this->_sections['music_list']['index']]['notlove']; ?>
)
                       </a>

                       <a  href="index.php?<?php echo $this->_tpl_vars['article_now_url']; ?>
&re_do=edit&do_id=<?php echo $this->_tpl_vars['music_list'][$this->_sections['music_list']['index']]['music_id']; ?>
&path=<?php echo $this->_tpl_vars['music_list'][$this->_sections['music_list']['index']]['file_path']; ?>
&location_url=<?php echo $this->_tpl_vars['location_url']; ?>
"   class="edit">&nbsp;&nbsp;编辑&nbsp;&nbsp;</a>
                       <a  href="javascript:void(0)" onclick="CheckForm();location.href='index.php?<?php echo $this->_tpl_vars['send_url']; ?>
&do=del&do_id=<?php echo $this->_tpl_vars['music_list'][$this->_sections['music_list']['index']]['music_id']; ?>
&path=<?php echo $this->_tpl_vars['music_list'][$this->_sections['music_list']['index']]['file_path']; ?>
'"  class="del">&nbsp;&nbsp;删除&nbsp;&nbsp;</a>
                       <b  onclick="privacy_set(<?php echo $this->_tpl_vars['music_list'][$this->_sections['music_list']['index']]['music_id']; ?>
)">查看描述</b>

                       <p  id="privacy_set<?php echo $this->_tpl_vars['music_list'][$this->_sections['music_list']['index']]['music_id']; ?>
"  style="display:none;">
                            <?php echo $this->_tpl_vars['music_list'][$this->_sections['music_list']['index']]['description']; ?>

                       </p>

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