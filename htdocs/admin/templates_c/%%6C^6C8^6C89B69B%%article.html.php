<?php /* Smarty version 2.6.26, created on 2011-05-15 16:00:39
         compiled from article.html */ ?>
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
               <div  class="content_block_title">文章列表</div>
               <div  class="content_block_main">
                        <span  class="tool_info"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_article.gif" width="16" height="17" /><b>文章总数</b><?php echo $this->_tpl_vars['article_num']; ?>
篇
                        </span>

                        <span  class="tool_bar">
                        <form action="" method="get">
                         <input name="input" type="checkbox" value=""   onclick="select_all(this.checked);"/>全选

                         <label>
                         <input type="button" name="shield" id="add"   onclick="window.location.href='index.php?display=article_add&list_upid=<?php echo $this->_tpl_vars['list_upid']; ?>
'"    value="  添加文章"/>
                         <input type="button" name="del" id="del"  value="  删除所选"/   onclick="CheckForm(this);Get_id('batch_do').value='batch_del';document.article_list_handle.submit();">
                         <select name="jumpMenu2" id="top_jump" onchange="if(this.selectedIndex>0)Get_id('batch_do').value='batch_show';Get_id('batch_show').value=this.options[this.selectedIndex].value;document.article_list_handle.submit();">
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

                        <a href="index.php?display=article&list_upid=<?php echo $this->_tpl_vars['list_upid']; ?>
"  style="<?php echo $this->_tpl_vars['class_all']; ?>
">全部文章</a><h4>|</h4>

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

                        <a href="index.php?display=article&list_upid=<?php echo $this->_tpl_vars['list_upid']; ?>
&list_classid=<?php echo $this->_tpl_vars['cclass_list'][$this->_sections['cclass_list']['index']]['cclass_id']; ?>
"    <?php echo $this->_tpl_vars['cclass_list'][$this->_sections['cclass_list']['index']]['cclass_list_class']; ?>
><?php echo $this->_tpl_vars['cclass_list'][$this->_sections['cclass_list']['index']]['cclass_name']; ?>
</a><h4>|</h4>

                        <?php endfor; endif; ?>

                        <a href="index.php?display=article&list_upid=<?php echo $this->_tpl_vars['list_upid']; ?>
&list_classid=-1"  style="<?php echo $this->_tpl_vars['class_draft']; ?>
">草稿箱</a>

                        </span>
                        <div  class="sep_border"></div>

             </div>
           <div class="clear"></div>
           </div>



           <div  class="content_block   latest_act   resource_list   article_list"     id="list_check">

               <div  class="content_block_main">
                  <form action="index.php?display=article" method="get"  name="article_list_handle">
                  <input name="display" type="hidden"  value="article" />
                  <input name="location_url" type="hidden"  value="<?php echo $this->_tpl_vars['location_url']; ?>
" />
                  <input name="do" type="hidden"   id="batch_do" value="batch_del" />
                  <input name="batch_show_type" type="hidden"   id="batch_show" value="0" />
                  <ul>


                      <?php unset($this->_sections['article_list']);
$this->_sections['article_list']['name'] = 'article_list';
$this->_sections['article_list']['loop'] = is_array($_loop=$this->_tpl_vars['article_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['article_list']['show'] = true;
$this->_sections['article_list']['max'] = $this->_sections['article_list']['loop'];
$this->_sections['article_list']['step'] = 1;
$this->_sections['article_list']['start'] = $this->_sections['article_list']['step'] > 0 ? 0 : $this->_sections['article_list']['loop']-1;
if ($this->_sections['article_list']['show']) {
    $this->_sections['article_list']['total'] = $this->_sections['article_list']['loop'];
    if ($this->_sections['article_list']['total'] == 0)
        $this->_sections['article_list']['show'] = false;
} else
    $this->_sections['article_list']['total'] = 0;
if ($this->_sections['article_list']['show']):

            for ($this->_sections['article_list']['index'] = $this->_sections['article_list']['start'], $this->_sections['article_list']['iteration'] = 1;
                 $this->_sections['article_list']['iteration'] <= $this->_sections['article_list']['total'];
                 $this->_sections['article_list']['index'] += $this->_sections['article_list']['step'], $this->_sections['article_list']['iteration']++):
$this->_sections['article_list']['rownum'] = $this->_sections['article_list']['iteration'];
$this->_sections['article_list']['index_prev'] = $this->_sections['article_list']['index'] - $this->_sections['article_list']['step'];
$this->_sections['article_list']['index_next'] = $this->_sections['article_list']['index'] + $this->_sections['article_list']['step'];
$this->_sections['article_list']['first']      = ($this->_sections['article_list']['iteration'] == 1);
$this->_sections['article_list']['last']       = ($this->_sections['article_list']['iteration'] == $this->_sections['article_list']['total']);
?>

                       <li>
                       <input name="article_handle[]" type="checkbox"   class="visitor_list_check" value="<?php echo $this->_tpl_vars['article_list'][$this->_sections['article_list']['index']]['aid']; ?>
" />
                       <span  class="act_emotion">
                         <a href="index.php?display=article_view&view_id=<?php echo $this->_tpl_vars['article_list'][$this->_sections['article_list']['index']]['aid']; ?>
"    class="popup"   rel="width:750px;height:400px"><b><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_article.gif" width="16" height="16" /><?php echo $this->_tpl_vars['article_list'][$this->_sections['article_list']['index']]['title']; ?>
</b></a>
                         <a  href="index.php?<?php echo $this->_tpl_vars['article_now_url']; ?>
&re_do=edit&do_id=<?php echo $this->_tpl_vars['article_list'][$this->_sections['article_list']['index']]['aid']; ?>
&location_url=<?php echo $this->_tpl_vars['location_url']; ?>
" class="edit">编辑</a>
                         <a  href="javascript:void(0)" onclick="CheckForm();location.href='index.php?<?php echo $this->_tpl_vars['send_url']; ?>
&do=del&do_id=<?php echo $this->_tpl_vars['article_list'][$this->_sections['article_list']['index']]['aid']; ?>
'"  class="del">删除</a>
                         <select name="change_show" class="jumpMenu"  onchange="if(this.selectedIndex>=0)location.href=this.options[this.selectedIndex].value">
                   
					       <option value="index.php?display=article&do=chg_show&do_id=<?php echo $this->_tpl_vars['article_list'][$this->_sections['article_list']['index']]['aid']; ?>
&show=3&location_url=<?php echo $this->_tpl_vars['location_url']; ?>
"  <?php echo $this->_tpl_vars['article_list'][$this->_sections['article_list']['index']]['array_show_3']; ?>
>所有可见</option>
                           <option value="index.php?display=article&do=chg_show&do_id=<?php echo $this->_tpl_vars['article_list'][$this->_sections['article_list']['index']]['aid']; ?>
&show=2&location_url=<?php echo $this->_tpl_vars['location_url']; ?>
"  <?php echo $this->_tpl_vars['article_list'][$this->_sections['article_list']['index']]['array_show_2']; ?>
>好友可见</option>
                           <option value="index.php?display=article&do=chg_show&do_id=<?php echo $this->_tpl_vars['article_list'][$this->_sections['article_list']['index']]['aid']; ?>
&show=1&location_url=<?php echo $this->_tpl_vars['location_url']; ?>
"  <?php echo $this->_tpl_vars['article_list'][$this->_sections['article_list']['index']]['array_show_1']; ?>
>情侣可见</option>
                           <option value="index.php?display=article&do=chg_show&do_id=<?php echo $this->_tpl_vars['article_list'][$this->_sections['article_list']['index']]['aid']; ?>
&show=0&location_url=<?php echo $this->_tpl_vars['location_url']; ?>
"  <?php echo $this->_tpl_vars['article_list'][$this->_sections['article_list']['index']]['array_show_0']; ?>
>主人可见</option>";

                         </select>
                       </span>

                       <span  class="act_emotion    resource_intro">
                       <font><i>个人分类：</i><a href="index.php?display=article&list_upid=<?php echo $this->_tpl_vars['article_list'][$this->_sections['article_list']['index']]['upid']; ?>
&list_classid=<?php echo $this->_tpl_vars['article_list'][$this->_sections['article_list']['index']]['classid']; ?>
"  class="article_class"><?php echo $this->_tpl_vars['article_list'][$this->_sections['article_list']['index']]['result_classname']; ?>
</a><?php echo $this->_tpl_vars['article_list'][$this->_sections['article_list']['index']]['publish_time']; ?>
</font>
                       <font  class="article_sketch"><?php echo $this->_tpl_vars['article_list'][$this->_sections['article_list']['index']]['content']; ?>
</font>
                       <font  class="article_comment"><i>阅读（<?php echo $this->_tpl_vars['article_list'][$this->_sections['article_list']['index']]['viewnum']; ?>
）</i><a  href="http://easyframework.com"   class="popup"   rel="width:800px;height:300px" >评论<em  style="color:#fb522b;font-style:normal">（<?php echo $this->_tpl_vars['article_list'][$this->_sections['article_list']['index']]['c_num']; ?>
）</em></a></font>
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