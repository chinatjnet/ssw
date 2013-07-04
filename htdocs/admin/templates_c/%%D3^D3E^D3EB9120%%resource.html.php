<?php /* Smarty version 2.6.26, created on 2011-05-31 13:40:05
         compiled from resource.html */ ?>
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

       <div  class="content_block   main_tool   resource_main_tool">
               <div  class="content_block_title">资源列表</div>
               <div  class="content_block_main">
                        <span  class="tool_info"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_resource.gif" width="16" height="17" /><b>资源总数</b><?php echo $this->_tpl_vars['resource_num']; ?>
个
                        </span>
                        <span  class="tool_bar">
                             <form action="" method="get">
                                   <input name="input" type="checkbox" value=""   onclick="select_all(this.checked);"/>全选
                                   <label>
                                     <input type="button" name="shield" id="add" onclick="location.href='index.php?display=resource_add&list_upid=<?php echo $this->_tpl_vars['list_upid']; ?>
'"  value="  添加资源"/>
                                     <input type="button" name="button" id="del"  onclick="CheckForm();Get_id('batch_do').value='batch_del';document.resource_list_handle.submit();"  value="  删除所选"/>
                                   </label>
                             </form>
                        </span>
                        <div  class="sep_border"></div>
                        <span  class="tool_clsss"   id="class_list_bar">

                        <a href="index.php?display=resource&list_upid=<?php echo $this->_tpl_vars['list_upid']; ?>
"  style="<?php echo $this->_tpl_vars['class_all']; ?>
">全部资源</a><h4>|</h4>

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

                        <a href="index.php?display=resource&list_upid=<?php echo $this->_tpl_vars['list_upid']; ?>
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



           <div  class="content_block   latest_act   resource_list"     id="list_check">

               <div  class="content_block_main">
                 <form action="index.php?display=resource"   method="get"   name="resource_list_handle"   target="">

                  <input name="display" type="hidden"  value="resource" />
                  <input name="location_url" type="hidden"  value="<?php echo $this->_tpl_vars['location_url']; ?>
" />
                  <input name="do" type="hidden"   id="batch_do" value="batch_del" />
                  <input name="batch_show_type" type="hidden"   id="batch_show" value="0" />


                  <ul>


                    <?php unset($this->_sections['resource_list']);
$this->_sections['resource_list']['name'] = 'resource_list';
$this->_sections['resource_list']['loop'] = is_array($_loop=$this->_tpl_vars['resource_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['resource_list']['show'] = true;
$this->_sections['resource_list']['max'] = $this->_sections['resource_list']['loop'];
$this->_sections['resource_list']['step'] = 1;
$this->_sections['resource_list']['start'] = $this->_sections['resource_list']['step'] > 0 ? 0 : $this->_sections['resource_list']['loop']-1;
if ($this->_sections['resource_list']['show']) {
    $this->_sections['resource_list']['total'] = $this->_sections['resource_list']['loop'];
    if ($this->_sections['resource_list']['total'] == 0)
        $this->_sections['resource_list']['show'] = false;
} else
    $this->_sections['resource_list']['total'] = 0;
if ($this->_sections['resource_list']['show']):

            for ($this->_sections['resource_list']['index'] = $this->_sections['resource_list']['start'], $this->_sections['resource_list']['iteration'] = 1;
                 $this->_sections['resource_list']['iteration'] <= $this->_sections['resource_list']['total'];
                 $this->_sections['resource_list']['index'] += $this->_sections['resource_list']['step'], $this->_sections['resource_list']['iteration']++):
$this->_sections['resource_list']['rownum'] = $this->_sections['resource_list']['iteration'];
$this->_sections['resource_list']['index_prev'] = $this->_sections['resource_list']['index'] - $this->_sections['resource_list']['step'];
$this->_sections['resource_list']['index_next'] = $this->_sections['resource_list']['index'] + $this->_sections['resource_list']['step'];
$this->_sections['resource_list']['first']      = ($this->_sections['resource_list']['iteration'] == 1);
$this->_sections['resource_list']['last']       = ($this->_sections['resource_list']['iteration'] == $this->_sections['resource_list']['total']);
?>

                       <li>
                       <input name="resource_handle[]" type="checkbox"   class="visitor_list_check" value="<?php echo $this->_tpl_vars['resource_list'][$this->_sections['resource_list']['index']]['reso_id']; ?>
" />
                       <input name="file_path[<?php echo $this->_tpl_vars['resource_list'][$this->_sections['resource_list']['index']]['reso_id']; ?>
]" type="hidden"   class="visitor_list_check" value="<?php echo $this->_tpl_vars['resource_list'][$this->_sections['resource_list']['index']]['file_path']; ?>
"/>
                       <span  class="act_emotion">
                            <a href="<?php echo $this->_tpl_vars['resource_list'][$this->_sections['resource_list']['index']]['path']; ?>
" target="_blank"><b><?php echo $this->_tpl_vars['resource_list'][$this->_sections['resource_list']['index']]['name']; ?>
</b></a><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/love_grade<?php echo $this->_tpl_vars['resource_list'][$this->_sections['resource_list']['index']]['rank']; ?>
.png" width="75" height="14"  style="float:left;margin-right:150px;" /><font><a  href="<?php echo $this->_tpl_vars['resource_list'][$this->_sections['resource_list']['index']]['path']; ?>
"  target="_blank">下载资源</a></font>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a  href="index.php?<?php echo $this->_tpl_vars['article_now_url']; ?>
&re_do=edit&do_id=<?php echo $this->_tpl_vars['resource_list'][$this->_sections['resource_list']['index']]['reso_id']; ?>
&path=<?php echo $this->_tpl_vars['resource_list'][$this->_sections['resource_list']['index']]['file_path']; ?>
&location_url=<?php echo $this->_tpl_vars['location_url']; ?>
">&nbsp;&nbsp;编辑&nbsp;&nbsp;</a>
                            <a   href="javascript:void(0)"  onclick="CheckForm();location.href='index.php?<?php echo $this->_tpl_vars['send_url']; ?>
&do=del&do_id=<?php echo $this->_tpl_vars['resource_list'][$this->_sections['resource_list']['index']]['reso_id']; ?>
&path=<?php echo $this->_tpl_vars['resource_list'][$this->_sections['resource_list']['index']]['file_path']; ?>
'">&nbsp;&nbsp;删除&nbsp;&nbsp;</a>
                       </span>
                       <span  class="act_emotion    resource_intro">
                            <font><i>归类</i>：【<a  href="index.php?display=resource&list_upid=<?php echo $this->_tpl_vars['resource_list'][$this->_sections['resource_list']['index']]['upid']; ?>
&list_classid=<?php echo $this->_tpl_vars['resource_list'][$this->_sections['resource_list']['index']]['classid']; ?>
"><?php echo $this->_tpl_vars['resource_list'][$this->_sections['resource_list']['index']]['result_classname']; ?>
</a>】&nbsp;&nbsp;&nbsp;&nbsp;
                                  <i>上传日期</i>：<?php echo $this->_tpl_vars['resource_list'][$this->_sections['resource_list']['index']]['publish_time']; ?>

                                  <i  style="margin-left:25px;">大小</i>：<?php echo $this->_tpl_vars['resource_list'][$this->_sections['resource_list']['index']]['size']; ?>

                                  <i  style="margin-left:25px;">下载</i>：<?php echo $this->_tpl_vars['resource_list'][$this->_sections['resource_list']['index']]['down_num']; ?>

                                  <i  style="margin-left:25px;">浏览</i>：<?php echo $this->_tpl_vars['resource_list'][$this->_sections['resource_list']['index']]['view_num']; ?>

                                  <a  href="http://easyframework.com"   class="popup"  style="margin-left:25px;"  rel="width:800;height:300">评论（30）</a>
                            </font>

                            <font><i><a href="">资源介绍</a></i>：<?php echo $this->_tpl_vars['resource_list'][$this->_sections['resource_list']['index']]['description']; ?>
</font>
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