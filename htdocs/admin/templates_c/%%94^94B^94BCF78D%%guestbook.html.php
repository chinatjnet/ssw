<?php /* Smarty version 2.6.26, created on 2011-05-17 09:36:37
         compiled from guestbook.html */ ?>
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
<script charset="utf-8" src="<?php echo $this->_tpl_vars['admin_root']; ?>
/function/editor/kindeditor.js"></script>
</head>

<?php echo '
		<script>
			KE.show({
				id : \'textarea_guestbook\',
				newlineTag :\'br\',
				resizeMode : 0,
				allowPreviewEmoticons : false,
				allowUpload : false,
				items : [
				\'fontname\', \'fontsize\', \'|\', \'textcolor\', \'bgcolor\', \'bold\', \'italic\', \'underline\',
				\'removeformat\', \'|\', \'justifyleft\', \'justifycenter\', \'justifyright\', \'insertorderedlist\',
				\'insertunorderedlist\', \'|\', \'emoticons\', \'image\', \'link\'],
                 afterSetData : function(id) {
					 left_str=250- KE.count(id, \'text\');
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
/images/guestbook_center.png" width="31" height="34"   class="control_logo"/>
           <h1>访客留言</h1>
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

       <div  class="content_block   guest_book">
               <div  class="content_block_title">访客留言</div>
               <div  class="content_block_main">
                 <span><b>主人寄语：</b> 成熟的人生才更有活着的价值，每个人都是这世上不可缺少的一部分，珍惜生命，珍惜自己！</span>
                 <div  class="sep_border"></div>
                 <form action="index.php?display=guestbook" method="post" name="word_publish">
                   <INPUT TYPE=hidden   NAME=display  VALUE="guestbook">
                   <INPUT TYPE=hidden   NAME=do  VALUE="add">
                   <textarea  id="textarea_guestbook"  name="message"></textarea>
                   <span  class="guest_limit">
                      <input type="submit" name="article_save"   class="article_act" style="margin-top:-5px;" value="发表留言"/>
                      <input name="to_uniqsign" type="checkbox" value="fff" />
                      <label>同步到个性签名</label> <div  id="tips"></div>
                   </span>
                 </form>

         </div>
           <div class="clear"></div>
           </div>



           <div  class="content_block   latest_act">

               <div  class="content_block_main    guestbook_list">

                  <ul>

                      <?php unset($this->_sections['guestbook_list']);
$this->_sections['guestbook_list']['name'] = 'guestbook_list';
$this->_sections['guestbook_list']['loop'] = is_array($_loop=$this->_tpl_vars['guestbook_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['guestbook_list']['show'] = true;
$this->_sections['guestbook_list']['max'] = $this->_sections['guestbook_list']['loop'];
$this->_sections['guestbook_list']['step'] = 1;
$this->_sections['guestbook_list']['start'] = $this->_sections['guestbook_list']['step'] > 0 ? 0 : $this->_sections['guestbook_list']['loop']-1;
if ($this->_sections['guestbook_list']['show']) {
    $this->_sections['guestbook_list']['total'] = $this->_sections['guestbook_list']['loop'];
    if ($this->_sections['guestbook_list']['total'] == 0)
        $this->_sections['guestbook_list']['show'] = false;
} else
    $this->_sections['guestbook_list']['total'] = 0;
if ($this->_sections['guestbook_list']['show']):

            for ($this->_sections['guestbook_list']['index'] = $this->_sections['guestbook_list']['start'], $this->_sections['guestbook_list']['iteration'] = 1;
                 $this->_sections['guestbook_list']['iteration'] <= $this->_sections['guestbook_list']['total'];
                 $this->_sections['guestbook_list']['index'] += $this->_sections['guestbook_list']['step'], $this->_sections['guestbook_list']['iteration']++):
$this->_sections['guestbook_list']['rownum'] = $this->_sections['guestbook_list']['iteration'];
$this->_sections['guestbook_list']['index_prev'] = $this->_sections['guestbook_list']['index'] - $this->_sections['guestbook_list']['step'];
$this->_sections['guestbook_list']['index_next'] = $this->_sections['guestbook_list']['index'] + $this->_sections['guestbook_list']['step'];
$this->_sections['guestbook_list']['first']      = ($this->_sections['guestbook_list']['iteration'] == 1);
$this->_sections['guestbook_list']['last']       = ($this->_sections['guestbook_list']['iteration'] == $this->_sections['guestbook_list']['total']);
?>

                       <li>

                       <a href="#"  class="friend_head_pic"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/act_img.jpg" width="48" height="48" /></a>
                       <span  class="act_emotion"><a href=""><?php echo $this->_tpl_vars['guestbook_list'][$this->_sections['guestbook_list']['index']]['nickname']; ?>
&nbsp;&nbsp;</a>给我留言&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['guestbook_list'][$this->_sections['guestbook_list']['index']]['time']; ?>
</span>
                       <div  class="act_content">
                          <p><?php echo $this->_tpl_vars['guestbook_list'][$this->_sections['guestbook_list']['index']]['message']; ?>
</p>
                          <div  class="ip_edit"  style="background:none; color:#B7B7B7">
                              <font>from   <?php echo $this->_tpl_vars['guestbook_list'][$this->_sections['guestbook_list']['index']]['origin']; ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IP:<?php echo $this->_tpl_vars['guestbook_list'][$this->_sections['guestbook_list']['index']]['ip']; ?>
</font>
                              <a href="http://easyframework.com"   class="emotion_comment_link   popup"   rel="width:800;height:300">回复<b>(<?php echo $this->_tpl_vars['guestbook_list'][$this->_sections['guestbook_list']['index']]['c_num']; ?>
)</b></a>
                              <a href="javascript:void(0);" onclick="CheckForm(this);location.href='index.php?display=guestbook&do=del&do_id=<?php echo $this->_tpl_vars['guestbook_list'][$this->_sections['guestbook_list']['index']]['guestid']; ?>
&back_page=<?php echo $this->_tpl_vars['back_page']; ?>
'" >删除</a>
                        </div>
                        </div>

                        <div  class="sep_border"></div>

                       </li>

                      <?php endfor; endif; ?>


                  </ul>

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