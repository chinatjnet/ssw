<?php /* Smarty version 2.6.26, created on 2011-05-17 09:59:35
         compiled from visitor.html */ ?>
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
<script charset="utf-8" src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/editor/kindeditor.js"></script>
</head>

<?php echo '
		<script>
			KE.show({
				id : \'textarea_emoution\',
				newlineTag :\'br\',
				resizeMode : 0,
				allowPreviewEmoticons : false,
				allowUpload : false,
				items : [
				\'fontname\', \'fontsize\', \'|\', \'textcolor\', \'bgcolor\', \'bold\', \'italic\', \'underline\',
				\'removeformat\', \'|\', \'justifyleft\', \'justifycenter\', \'justifyright\', \'insertorderedlist\',
				\'insertunorderedlist\', \'|\', \'emoticons\', \'image\', \'link\'],
                 afterSetData : function(id) {
					 left_str=50- KE.count(id, \'text\');
					 if( left_str>=0){
					  KE.$(\'tips\').innerHTML =\'你还可以输入<b>\'+left_str+\'</b>个字符\';
					  }else{
				      KE.$(\'tips\').innerHTML =\'<font color="#FD6645">你已超过输入<b>\'+Math.abs(left_str)+\'</b>个字符</font>\';

						  }
				}

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
/images/visitor_center.png" width="31" height="34"   class="control_logo"/>
           <h1>最近访客</h1>
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

       <div  class="content_block   main_tool">
               <div  class="content_block_title">访客列表</div>
               <div  class="content_block_main">
                        <span  class="tool_info"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_visitor.gif" width="16" height="17" /><b>访问总数</b><?php echo $this->_tpl_vars['visit_total']; ?>
次&nbsp;&nbsp;&nbsp;&nbsp;<b>独立IP</b><?php echo $this->_tpl_vars['visit_ip']; ?>

                        &nbsp;&nbsp;&nbsp;&nbsp;<b>|</b><b>今日来访</b><?php echo $this->_tpl_vars['visit_today']; ?>
次&nbsp;&nbsp;&nbsp;&nbsp;<b>独立IP</b><?php echo $this->_tpl_vars['today_ip']; ?>

                        </span>
                        <span  class="tool_bar">
                             <form action="" method="get">
                                   <input name="" type="checkbox" value=""  onclick="select_all(this.checked);"/>全选
                                   <label>
                                     <input type="button" name="shield" id="shield" onclick="CheckForm<?php echo $this->_tpl_vars['shield_do']; ?>
(this);Get_id('batch_do').value='batch_shield_<?php echo $this->_tpl_vars['shield_do']; ?>
';document.visitor_list_handle.submit();"  value="  <?php echo $this->_tpl_vars['shield_var']; ?>
"/>
                                     <input type="button" name="button" id="del" onclick="CheckForm(this);Get_id('batch_do').value='batch_del';document.visitor_list_handle.submit();" value="   清除列表"/>
                                   </label>
                             </form>
                        </span>
                 <div  class="sep_border"></div>
                        <span  class="tool_clsss" id="visitor_class">
                            <a href="index.php?display=visitor&list=today" style="<?php echo $this->_tpl_vars['today_class']; ?>
">今日访客</a><h4>|</h4>
                            <a href="index.php?display=visitor&list=yesterday" style="<?php echo $this->_tpl_vars['yesterday_class']; ?>
">昨日访客</a><h4>|</h4>
                            <a href="index.php?display=visitor&list=all" style="<?php echo $this->_tpl_vars['all_class']; ?>
">所有访客</a><h4>|</h4>
                            <a href="index.php?display=visitor&list=shield" style="<?php echo $this->_tpl_vars['shield_class']; ?>
">黑名单</a>
                        </span>
                        <div  class="sep_border"></div>

             </div>
           <div class="clear"></div>
           </div>



           <div  class="content_block   latest_act"   id="list_check">

               <div  class="content_block_main    guestbook_list     visitor_list">

                  <form action="index.php?display=visitor" method="POST"  name="visitor_list_handle">

                  <input name="display" type="hidden"  value="visitor" />
                  <input name="pg" type="hidden"  value="<?php echo $this->_tpl_vars['pg']; ?>
" />
                  <input name="list" type="hidden"   id="" value="<?php echo $this->_tpl_vars['list']; ?>
" />
                  <input name="do" type="hidden"   id="batch_do" value="batch_del" />

                  <ul>


                    <?php unset($this->_sections['visitor_list']);
$this->_sections['visitor_list']['name'] = 'visitor_list';
$this->_sections['visitor_list']['loop'] = is_array($_loop=$this->_tpl_vars['visitor_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['visitor_list']['show'] = true;
$this->_sections['visitor_list']['max'] = $this->_sections['visitor_list']['loop'];
$this->_sections['visitor_list']['step'] = 1;
$this->_sections['visitor_list']['start'] = $this->_sections['visitor_list']['step'] > 0 ? 0 : $this->_sections['visitor_list']['loop']-1;
if ($this->_sections['visitor_list']['show']) {
    $this->_sections['visitor_list']['total'] = $this->_sections['visitor_list']['loop'];
    if ($this->_sections['visitor_list']['total'] == 0)
        $this->_sections['visitor_list']['show'] = false;
} else
    $this->_sections['visitor_list']['total'] = 0;
if ($this->_sections['visitor_list']['show']):

            for ($this->_sections['visitor_list']['index'] = $this->_sections['visitor_list']['start'], $this->_sections['visitor_list']['iteration'] = 1;
                 $this->_sections['visitor_list']['iteration'] <= $this->_sections['visitor_list']['total'];
                 $this->_sections['visitor_list']['index'] += $this->_sections['visitor_list']['step'], $this->_sections['visitor_list']['iteration']++):
$this->_sections['visitor_list']['rownum'] = $this->_sections['visitor_list']['iteration'];
$this->_sections['visitor_list']['index_prev'] = $this->_sections['visitor_list']['index'] - $this->_sections['visitor_list']['step'];
$this->_sections['visitor_list']['index_next'] = $this->_sections['visitor_list']['index'] + $this->_sections['visitor_list']['step'];
$this->_sections['visitor_list']['first']      = ($this->_sections['visitor_list']['iteration'] == 1);
$this->_sections['visitor_list']['last']       = ($this->_sections['visitor_list']['iteration'] == $this->_sections['visitor_list']['total']);
?>

                       <li>
                       <input name="visitor_handle[]" type="checkbox" value="<?php echo $this->_tpl_vars['visitor_list'][$this->_sections['visitor_list']['index']]['vid']; ?>
"   class="visitor_list_check"/>
                       <a  href="<?php echo $this->_tpl_vars['visitor_list'][$this->_sections['visitor_list']['index']]['originpage']; ?>
" target="_blank"  class="friend_head_pic  tooltip"  title="地理位置:<?php echo $this->_tpl_vars['visitor_list'][$this->_sections['visitor_list']['index']]['location']; ?>
"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/act_img.jpg" width="40" height="40" /></a>
                       <span  class="act_emotion">
                            <a href="<?php echo $this->_tpl_vars['visitor_list'][$this->_sections['visitor_list']['index']]['originpage']; ?>
" target="_blank"><b title="IP:<?php echo $this->_tpl_vars['visitor_list'][$this->_sections['visitor_list']['index']]['ip']; ?>
"  class="tooltip"  style="font-weight:normal;font-size:12px;">&nbsp;<?php echo $this->_tpl_vars['visitor_list'][$this->_sections['visitor_list']['index']]['location']; ?>
</b></a>
                            <font><i style="color:#666"><?php echo $this->_tpl_vars['visitor_list'][$this->_sections['visitor_list']['index']]['time']; ?>
</i>&nbsp;&nbsp;&nbsp;&nbsp;from  <?php echo $this->_tpl_vars['visitor_list'][$this->_sections['visitor_list']['index']]['origin']; ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IP:<?php echo $this->_tpl_vars['visitor_list'][$this->_sections['visitor_list']['index']]['ip']; ?>
</font>
                            <h4 style="color:#21759B">今日（<?php echo $this->_tpl_vars['visitor_list'][$this->_sections['visitor_list']['index']]['today']; ?>
）/总（<?php echo $this->_tpl_vars['visitor_list'][$this->_sections['visitor_list']['index']]['total']; ?>
）</h4>
                       </span>
                       <span  class="act_emotion  site_url">
                            <font><h4>首访页面:</h4><a href="<?php echo $this->_tpl_vars['visitor_list'][$this->_sections['visitor_list']['index']]['firstpage']; ?>
" title="<?php echo $this->_tpl_vars['visitor_list'][$this->_sections['visitor_list']['index']]['firstpage']; ?>
"><?php echo $this->_tpl_vars['visitor_list'][$this->_sections['visitor_list']['index']]['title_firstpage']; ?>
/</a></font>
                            <font><h4>来路页面：</h4><a href="<?php echo $this->_tpl_vars['visitor_list'][$this->_sections['visitor_list']['index']]['originpage']; ?>
" title="<?php echo $this->_tpl_vars['visitor_list'][$this->_sections['visitor_list']['index']]['originpage']; ?>
"><?php echo $this->_tpl_vars['visitor_list'][$this->_sections['visitor_list']['index']]['title_originpage']; ?>
</a></font>
                            <label>
                              <input name="shield_ip"  onclick="CheckForm<?php echo $this->_tpl_vars['shield_do']; ?>
();location.href='index.php?display=visitor&do=<?php echo $this->_tpl_vars['shield_do']; ?>
&do_id=<?php echo $this->_tpl_vars['visitor_list'][$this->_sections['visitor_list']['index']]['vid']; ?>
&list=<?php echo $this->_tpl_vars['list']; ?>
&pg=<?php echo $this->_tpl_vars['pg']; ?>
'"  type="button"   id="button" value="<?php echo $this->_tpl_vars['shield_var1']; ?>
" >
                            </label>
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