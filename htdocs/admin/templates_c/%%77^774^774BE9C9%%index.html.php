<?php /* Smarty version 2.6.26, created on 2011-05-24 13:38:14
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'index.html', 87, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "site_head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!--site_head  *top and title END-->

<link href="<?php echo $this->_tpl_vars['temp_dir']; ?>
/css/index.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/js/common.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/js/emotion_images.js"></script>
</head>
<?php echo '
<script>
window.onload = function (){

	 img_box();
	 str_limit();

	}


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
/images/user_center.png" width="31" height="34"   class="control_logo"/>
           <h1>动态中心</h1>
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
        <div  id="main_left">    <!--main_left start-->

           <div  class="content_block   emotion_publish">
               <div  class="content_block_title">快速发表心情</div>
               <div  class="content_block_main">
                 <form action="index.php?display=emotion" method="post"  name="emotion_add_form">

                   <INPUT TYPE=hidden   NAME=display  VALUE="emotion">
                   <INPUT TYPE=hidden   NAME=do  VALUE="emotion_add">

                   <textarea  name=message  maxlength="250"   id="textarea_emoution"  class="emotion_input"   onclick="textarea_in()"  onblur="textarea_out()">说说你今天的心情吧。。。。</textarea>
                   <input type=image height=60 width=60  src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/publish.gif"/>

                  <span> <input name="fff" type="checkbox" value="fff" /><label>同步到个性签名</label> <p  id="tips"></p> </span>
                  <div  id="emotion_img_box"  style="display:none;" >
                  </div>
                 </form>

               </div>
           <div class="clear"></div>
           </div>



           <div  class="content_block   latest_act">
               <div  class="content_block_title">最新动态</div>
               <div  class="content_block_main">
                  <ul>
     
					   
					  <?php unset($this->_sections['action_list']);
$this->_sections['action_list']['name'] = 'action_list';
$this->_sections['action_list']['loop'] = is_array($_loop=$this->_tpl_vars['action_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['action_list']['show'] = true;
$this->_sections['action_list']['max'] = $this->_sections['action_list']['loop'];
$this->_sections['action_list']['step'] = 1;
$this->_sections['action_list']['start'] = $this->_sections['action_list']['step'] > 0 ? 0 : $this->_sections['action_list']['loop']-1;
if ($this->_sections['action_list']['show']) {
    $this->_sections['action_list']['total'] = $this->_sections['action_list']['loop'];
    if ($this->_sections['action_list']['total'] == 0)
        $this->_sections['action_list']['show'] = false;
} else
    $this->_sections['action_list']['total'] = 0;
if ($this->_sections['action_list']['show']):

            for ($this->_sections['action_list']['index'] = $this->_sections['action_list']['start'], $this->_sections['action_list']['iteration'] = 1;
                 $this->_sections['action_list']['iteration'] <= $this->_sections['action_list']['total'];
                 $this->_sections['action_list']['index'] += $this->_sections['action_list']['step'], $this->_sections['action_list']['iteration']++):
$this->_sections['action_list']['rownum'] = $this->_sections['action_list']['iteration'];
$this->_sections['action_list']['index_prev'] = $this->_sections['action_list']['index'] - $this->_sections['action_list']['step'];
$this->_sections['action_list']['index_next'] = $this->_sections['action_list']['index'] + $this->_sections['action_list']['step'];
$this->_sections['action_list']['first']      = ($this->_sections['action_list']['iteration'] == 1);
$this->_sections['action_list']['last']       = ($this->_sections['action_list']['iteration'] == $this->_sections['action_list']['total']);
?>
					   
					   <li>
                       
                         <a href="#"  class="friend_head_pic"  title="地理位置：<?php echo $this->_tpl_vars['action_list'][$this->_sections['action_list']['index']]['location']; ?>
&nbsp;&nbsp;IP：<?php echo $this->_tpl_vars['action_list'][$this->_sections['action_list']['index']]['ip']; ?>
"><img src="<?php echo $this->_tpl_vars['action_list'][$this->_sections['action_list']['index']]['head_pic']; ?>
" width="46" height="46" /></a>
                       
                         <ol>

                           <?php unset($this->_sections['latest_action_list']);
$this->_sections['latest_action_list']['name'] = 'latest_action_list';
$this->_sections['latest_action_list']['loop'] = is_array($_loop=$this->_tpl_vars['action_list'][$this->_sections['action_list']['index']]['latest_action_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['latest_action_list']['show'] = true;
$this->_sections['latest_action_list']['max'] = $this->_sections['latest_action_list']['loop'];
$this->_sections['latest_action_list']['step'] = 1;
$this->_sections['latest_action_list']['start'] = $this->_sections['latest_action_list']['step'] > 0 ? 0 : $this->_sections['latest_action_list']['loop']-1;
if ($this->_sections['latest_action_list']['show']) {
    $this->_sections['latest_action_list']['total'] = $this->_sections['latest_action_list']['loop'];
    if ($this->_sections['latest_action_list']['total'] == 0)
        $this->_sections['latest_action_list']['show'] = false;
} else
    $this->_sections['latest_action_list']['total'] = 0;
if ($this->_sections['latest_action_list']['show']):

            for ($this->_sections['latest_action_list']['index'] = $this->_sections['latest_action_list']['start'], $this->_sections['latest_action_list']['iteration'] = 1;
                 $this->_sections['latest_action_list']['iteration'] <= $this->_sections['latest_action_list']['total'];
                 $this->_sections['latest_action_list']['index'] += $this->_sections['latest_action_list']['step'], $this->_sections['latest_action_list']['iteration']++):
$this->_sections['latest_action_list']['rownum'] = $this->_sections['latest_action_list']['iteration'];
$this->_sections['latest_action_list']['index_prev'] = $this->_sections['latest_action_list']['index'] - $this->_sections['latest_action_list']['step'];
$this->_sections['latest_action_list']['index_next'] = $this->_sections['latest_action_list']['index'] + $this->_sections['latest_action_list']['step'];
$this->_sections['latest_action_list']['first']      = ($this->_sections['latest_action_list']['iteration'] == 1);
$this->_sections['latest_action_list']['last']       = ($this->_sections['latest_action_list']['iteration'] == $this->_sections['latest_action_list']['total']);
?>

                           <span  class="act_<?php echo $this->_tpl_vars['action_list'][$this->_sections['action_list']['index']]['latest_action_list'][$this->_sections['latest_action_list']['index']]['type']; ?>
">
						      <a href="<?php echo $this->_tpl_vars['action_list'][$this->_sections['action_list']['index']]['website']; ?>
"><?php echo $this->_tpl_vars['action_list'][$this->_sections['action_list']['index']]['show_name']; ?>
</a><?php echo $this->_tpl_vars['action_list'][$this->_sections['action_list']['index']]['latest_action_list'][$this->_sections['latest_action_list']['index']]['type_title']; ?>

						      <font>
							  <?php echo ((is_array($_tmp=$this->_tpl_vars['action_list'][$this->_sections['action_list']['index']]['latest_action_list'][$this->_sections['latest_action_list']['index']]['dateline'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d") : smarty_modifier_date_format($_tmp, "%m-%d")); ?>
&nbsp;&nbsp;&nbsp;
							  <?php echo ((is_array($_tmp=$this->_tpl_vars['action_list'][$this->_sections['action_list']['index']]['latest_action_list'][$this->_sections['latest_action_list']['index']]['dateline'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M:%S") : smarty_modifier_date_format($_tmp, "%H:%M:%S")); ?>

							  </font>
						   </span>
                           <div  class="act_content">
						     <h3><a href=""><?php echo $this->_tpl_vars['action_list'][$this->_sections['action_list']['index']]['latest_action_list'][$this->_sections['latest_action_list']['index']]['title']; ?>
</a></h3>
                             <p>
							 <?php echo $this->_tpl_vars['action_list'][$this->_sections['action_list']['index']]['latest_action_list'][$this->_sections['latest_action_list']['index']]['content']; ?>

                             </p>
                             <a href="#"   style="color:#21759B; font-size:12px;margin-left:300px;">»点击查看</a>
                           </div>  

                           <?php endfor; endif; ?>
                                                
                         </ol>
                       
                       <div  class="show_more"><a href="#">展开更多<?php echo $this->_tpl_vars['action_list'][$this->_sections['action_list']['index']]['more_action']; ?>
条动态↓</a></div>
                       <div  class="sep_border"></div>
                       
                       </li>
                       <?php endfor; endif; ?>




                       <li>
                       <a href="#"  class="friend_head_pic"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/act_img.jpg" width="48" height="48" /></a>
                       <span  class="act_pic"><a href="">admin</a>上传了新相册图片<font>02-15  15:33</font></span>
                       <div  class="act_content">
                        <p>
                         <a href="#"  class="act_content_img"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/act_img.jpg" width="48" height="48" /></a>
                         <a href="#"  class="act_content_img"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/act_img.jpg" width="48" height="48" /></a>
                         <a href="#"  class="act_content_img"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/act_img.jpg" width="48" height="48" /></a>
                         <a href="#"  class="act_content_img"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/act_img.jpg" width="48" height="48" /></a>
                         <a href="#"  class="act_content_img"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/act_img.jpg" width="48" height="48" /></a>
                         <a href="#"   style="color:#21759B; font-size:12px;">查看更多...</a>
                        </p>
                       </div>

                       <div  class="sep_border"></div>
                       </li>


                       <li>
                       <a href="#"  class="friend_head_pic"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/act_img.jpg" width="48" height="48" /></a>
                       <span  class="act_article"><a href="">admin</a>发表了新文章日志<font>02-15  15:33</font></span>
                       <div  class="act_content">
                        <h3><a href="">论语的生活智慧</a></h3>
                        <p>宋代著名儒学家朱熹，选取儒家的四部重要经典，即《大学》、《中庸》、《论语》、《孟子》，合起来称为“四书”。《论语》</p>
                       </div>

                       <div  class="sep_border"></div>
                       </li>

                       <li>
                       <a href="#"  class="friend_head_pic"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/act_img.jpg" width="48" height="48" /></a>
                       <span  class="act_emotion"><a href="">admin</a>发表了新心情微博<font>02-15  15:33</font></span>
                       <div  class="act_content">
                        <p> <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/smiley/loveliness.gif" width="20" height="20"  class="act_content_emotion_img"/>生活是如何，我们总在期待着，总在失望着，总在这种过程中循环着，那么生活到底是什么？</p>
                       </div>

                       <div  class="sep_border"></div>
                       </li>

                       <li>
                       <a href="#"  class="friend_head_pic"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/act_img.jpg" width="48" height="48" /></a>
                       <span  class="act_music"><a href="">admin</a>添加了新音乐<font>02-15  15:33</font></span>
                       <div  class="act_content">
                        <h3><a href="">宽容</a></h3>
                        <p></p>
                       </div>

                       <div  class="sep_border"></div>
                       </li>

                       <li>
                       <a href="#"  class="friend_head_pic"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/act_img.jpg" width="48" height="48" /></a>
                       <span  class="act_resource"><a href="">admin</a>添加了新资源<font>02-15  15:33</font></span>
                       <div  class="act_content">
                        <h3><a href="">网站制作常用软件</a></h3>
                        <p></p>
                       </div>

                       <div  class="sep_border"></div>
                       </li>

                       <li>
                       <a href="#"  class="friend_head_pic"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/act_img.jpg" width="48" height="48" /></a>
                       <span  class="act_collect"><a href="">admin</a>添加了新收藏<font>02-15  15:33</font></span>
                       <div  class="act_content">
                        <h3><a href="">网站制作常用软件</a></h3>
                        <p></p>
                       </div>

                       <div  class="sep_border"></div>
                       </li>

                  </ul>

               <div class="more"><a href="#">» 查看更多</a></div>
               <div class="clear"></div>
               </div>


 <!-- ===========friend  head  img  list      START============-->
            <div  class="content_block  friend_list">
               <div  class="content_block_title"><b>我的好友</b><a href="#">»more</a></div>
               <div  class="content_block_main">
                         <a href="#"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/act_img.jpg" width="48" height="48" /><font>六度空间</font></a>
                         <a href="#"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/act_img.jpg" width="48" height="48" /><font>灰色地带</font></a>
                         <a href="#"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/act_img.jpg" width="48" height="48" /><font>开心</font></a>
                         <a href="#"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/act_img.jpg" width="48" height="48" /><font>红尘</font></a>
                         <a href="#"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/act_img.jpg" width="48" height="48" /><font>梦蝶</font></a>
                         <a href="#"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/act_img.jpg" width="48" height="48" /><font>冰凌</font></a>
                         <a href="#"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/act_img.jpg" width="48" height="48" /><font>蝴蝶世界</font></a>
              </div>
           <div class="clear"></div>
           </div>

 <!-- ===========friend  head  img  list      END============-->

 <!-- ===========friend  head  img  list      START============-->
          <div  class="content_block  friend_list">
               <div  class="content_block_title"><b>系统新成员</b><a href="#">»more</a></div>
               <div  class="content_block_main">
                         <a href="#"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/act_img.jpg" width="48" height="48" /><font>六度空间</font></a>
                         <a href="#"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/act_img.jpg" width="48" height="48" /><font>灰色地带</font></a>
                         <a href="#"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/act_img.jpg" width="48" height="48" /><font>开心</font></a>
                         <a href="#"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/act_img.jpg" width="48" height="48" /><font>红尘</font></a>
                         <a href="#"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/act_img.jpg" width="48" height="48" /><font>梦蝶</font></a>
                         <a href="#"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/act_img.jpg" width="48" height="48" /><font>冰凌</font></a>
                         <a href="#"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/act_img.jpg" width="48" height="48" /><font>蝴蝶世界</font></a>
              </div>
           <div class="clear"></div>
           </div>

 <!-- ===========friend  head  img  list      END============-->




           <div class="clear"></div>
           </div>


        </div>                <!--main_left  end-->



     <div  id="main_right">     <!--main_right  start-->

<div  class="content_block  admin_info ">
               <div  class="content_block_title">档案信息</div>
               <div  class="content_block_main">
                     <span>
                     <font>昵&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;称：<?php echo $this->_tpl_vars['nickname']; ?>
</font><br>
                     <font>生&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;日：<?php echo $this->_tpl_vars['birthday']; ?>
</font><br>
                     <font>家&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;乡：<?php echo $this->_tpl_vars['birthplace']; ?>
</font><br>
                     <font>今日来访：140</font><br>
                     <font>访问总量：140</font><br>
                     </span>
                     <a  href="#"><img src="<?php echo $this->_tpl_vars['head_big']; ?>
" width="62" height="70"/></a>
                     <a  href="#">编辑个人资料</a></div>
         <div class="clear"></div>
       </div>










 <div    id="Scroll1"    class="content_block  love_act   rapid_read"    onselectstart="return false" onmousewheel="ScrollWheel(1)">
               <div  class="content_block_title">动态速览</div>
               <div  class="content_block_main"   >
                   <div  id="ScroLeft1">
                   <ul>
                    <li><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_guestbook.gif" width="16" height="16" /><a  href="#"><b>湖北省荆州市</b>网友：<b>给我留言</b></a><font>09-14  20:09</font></li>
                    <li><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_pic.gif" width="16" height="16" /><a  href="#"><b>湖北省荆州市</b>网友：<b>评论相册</b></a><font>今天&nbsp;&nbsp;&nbsp;20:09</font></li>
                    <li><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_emotion.gif" width="16" height="16" /><a  href="#"><b>湖北省荆州市</b>网友：<b>评论心情</b></a><font>昨天&nbsp;&nbsp;&nbsp;20:09</font></li>
                    <li><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_love.gif" width="16" height="16" /><a  href="#"><b>湖北省荆州市</b>网友：<b>情侣祝福</b></a><font>09-14  20:09</font></li>
                    <li><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_friend.gif" width="16" height="16" /><a  href="#"><b>湖北省荆州市</b>网友：<b>申请加友</b></a><font>09-14  20:09</font></li>
                    <li><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_friend.gif" width="16" height="16" /><a  href="#"><b>湖北省荆州市</b>网友：<b>通过加友</b></a><font>09-14  20:09</font></li>
                    <li><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_resource.gif" width="16" height="16" /><a  href="#"><b>湖北省荆州市</b>网友：<b>评论资源</b></a><font>09-14  20:09</font></li>
                    <li><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_article.gif" width="16" height="16" /><a  href="#"><b>湖北省荆州市</b>网友：<b>评论日志</b></a><font>09-14  20:09</font></li>
                    <li><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_love.gif" width="16" height="16" /><a  href="#"><b>湖北省荆州市</b>网友：<b>情侣祝福</b></a><font>09-14  20:09</font></li>
                    <li><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_friend.gif" width="16" height="16" /><a  href="#"><b>湖北省荆州市</b>网友：<b>申请加友</b></a><font>09-14  20:09</font></li>
                    <li><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_friend.gif" width="16" height="16" /><a  href="#"><b>湖北省荆州市</b>网友：<b>通过加友</b></a><font>09-14  20:09</font></li>
                    <li><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_resource.gif" width="16" height="16" /><a  href="#"><b>湖北省荆州市</b>网友：<b>评论资源</b></a><font>09-14  20:09</font></li>
                    <li><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_article.gif" width="16" height="16" /><a  href="#"><b>湖北省荆州市</b>网友：<b>评论日志</b></a><font>09-14  20:09</font></li>

                   </ul>
                   </div>
           <div class="more"><a href="#">» 查看更多</a></div>
          </div>
          <div id="ScroRight1" onclick="ScroNow(event,1)">
               <div id="ScroLine1" OnMouseDown="ScroMove(1)"></div>
          </div>

       <div class="clear"></div>
       </div>





       <div   id="Scroll2"   class="content_block   love_act"   onselectstart="return false" onmousewheel="ScrollWheel(2)">
               <div  class="content_block_title">情侣动作</div>
               <div  class="content_block_main">
                    <div  id="ScroLeft2">
                    <ul>
                    <li><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_guestbook.gif" width="16" height="16" /><a  href="#"><b>小丫头</b>：<b>揍了我一拳</b></a><font>09-14 20:09:38</font></li>
                    <li><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_pic.gif" width="16" height="16" /><a  href="#"><b>我</b>：<b>揍了小丫头一拳</b></a><font>今天&nbsp;&nbsp;&nbsp;20:03:36</font></li>
                    <li><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_emotion.gif" width="16" height="16" /><a  href="#"><b>小丫头</b>：<b>偷吻了一下</b></a><font>昨天&nbsp;&nbsp;&nbsp;20:09:25</font></li>
                    <li><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_love.gif" width="16" height="16" /><a  href="#"><b>小丫头</b>：<b>拉我逛街</b></a><font>09-14 20:09:21</font></li>
                    <li><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_friend.gif" width="16" height="16" /><a  href="#"><b>我</b>：<b>陪小丫头买礼物</b></a><font>09-14 20:09:10</font></li>
                    <li><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_friend.gif" width="16" height="16" /><a  href="#"><b>小丫头</b>：<b>对我说悄悄话</b></a><font>09-14 20:09:06</font></li>
                    <li><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_resource.gif" width="16" height="16" /><a  href="#"><b>我</b>：<b>对小丫头生气</b></a><font>09-14 20:09:04</font></li>
                    <li><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_article.gif" width="16" height="16" /><a  href="#"><b>小丫头</b>：<b>抱了我一下</b></a><font>09-14 20:09:02</font></li>
                    <li><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_friend.gif" width="16" height="16" /><a  href="#"><b>我</b>：<b>陪小丫头买礼物</b></a><font>09-14 20:09:10</font></li>
                    <li><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_friend.gif" width="16" height="16" /><a  href="#"><b>小丫头</b>：<b>对我说悄悄话</b></a><font>09-14 20:09:06</font></li>
                    <li><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_resource.gif" width="16" height="16" /><a  href="#"><b>我</b>：<b>对小丫头生气</b></a><font>09-14 20:09:04</font></li>
                    <li><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_article.gif" width="16" height="16" /><a  href="#"><b>小丫头</b>：<b>抱了我一下</b></a><font>09-14 20:09:02</font></li>

                    </ul>
                    </div>
           <div class="more"><a href="#">» 查看更多</a></div>
           </div>

           <div id="ScroRight2" onclick="ScroNow(event,2)">
               <div id="ScroLine2" OnMouseDown="ScroMove(2)"></div>
           </div>
       <div class="clear"></div>
       </div>





            <div  id="Scroll3"  class="content_block  latest_visitor"   onselectstart="return false" onmousewheel="ScrollWheel(3)">
              <div  class="content_block_title">最近访客</div>
               <div  class="content_block_main">
                    <div  id="ScroLeft3">
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

                    <li><a  href="#"  title="<?php echo $this->_tpl_vars['visitor_list'][$this->_sections['visitor_list']['index']]['location']; ?>
"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/p1.jpg" width="30" height="30" /><?php echo $this->_tpl_vars['visitor_list'][$this->_sections['visitor_list']['index']]['show_location']; ?>
</a>
                    <font><?php echo ((is_array($_tmp=$this->_tpl_vars['visitor_list'][$this->_sections['visitor_list']['index']]['dateline'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d") : smarty_modifier_date_format($_tmp, "%m-%d")); ?>
&nbsp;&nbsp;  <?php echo ((is_array($_tmp=$this->_tpl_vars['visitor_list'][$this->_sections['visitor_list']['index']]['dateline'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M:%S") : smarty_modifier_date_format($_tmp, "%H:%M:%S")); ?>
</font><br><font><?php echo $this->_tpl_vars['visitor_list'][$this->_sections['visitor_list']['index']]['ip']; ?>
</font>
                    </li>

                    <?php endfor; endif; ?>

                    </ul>
                    </div>
           <div class="more"><a href="#">» 查看更多</a></div>
           </div>

           <div id="ScroRight3" onclick="ScroNow(event,3)">
               <div id="ScroLine3" OnMouseDown="ScroMove(3)"></div>
           </div>

           <div class="clear"></div>
       </div>


    </div>                <!--main_right  end-->

  </div>                          <!--main  end-->


<!--site_foot  start-->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "site_foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!--site_foot  END-->