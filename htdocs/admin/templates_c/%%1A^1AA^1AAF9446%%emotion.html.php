<?php /* Smarty version 2.6.26, created on 2011-05-24 14:12:44
         compiled from emotion.html */ ?>
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
/images/emotion_center.png" width="31" height="34"   class="control_logo"/>
           <h1>心情微博</h1>
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
               <div  class="content_block_title">心情微博</div>
               <div  class="content_block_main">
                 <form action="index.php?display=emotion" method="post"  name="emotion_add_form">

                   <INPUT TYPE=hidden   NAME=display  VALUE="emotion">
                   <INPUT TYPE=hidden   NAME=do  VALUE="emotion_add">

                   <textarea name=message   maxlength="250"   id="textarea_emoution"  class="emotion_input"   onclick="textarea_in()"  onblur="textarea_out()">说说你今天的心情吧。。。。</textarea>
                   <input type=image height=60 width=60  src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/publish.gif"/>

                  <span> <input name="to_uniqsign" type="checkbox" value="1" /><label>同步到个性签名</label> <p  id="tips"></p> </span>
                  <div  id="emotion_img_box"  style="display:none;" >
                  </div>
                 </form>

               </div>
           <div class="clear"></div>
           </div>



           <div  class="content_block   latest_act">

               <div  class="content_block_main">
                  <ul>



                   <?php unset($this->_sections['emotion_list']);
$this->_sections['emotion_list']['name'] = 'emotion_list';
$this->_sections['emotion_list']['loop'] = is_array($_loop=$this->_tpl_vars['emotion_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['emotion_list']['show'] = true;
$this->_sections['emotion_list']['max'] = $this->_sections['emotion_list']['loop'];
$this->_sections['emotion_list']['step'] = 1;
$this->_sections['emotion_list']['start'] = $this->_sections['emotion_list']['step'] > 0 ? 0 : $this->_sections['emotion_list']['loop']-1;
if ($this->_sections['emotion_list']['show']) {
    $this->_sections['emotion_list']['total'] = $this->_sections['emotion_list']['loop'];
    if ($this->_sections['emotion_list']['total'] == 0)
        $this->_sections['emotion_list']['show'] = false;
} else
    $this->_sections['emotion_list']['total'] = 0;
if ($this->_sections['emotion_list']['show']):

            for ($this->_sections['emotion_list']['index'] = $this->_sections['emotion_list']['start'], $this->_sections['emotion_list']['iteration'] = 1;
                 $this->_sections['emotion_list']['iteration'] <= $this->_sections['emotion_list']['total'];
                 $this->_sections['emotion_list']['index'] += $this->_sections['emotion_list']['step'], $this->_sections['emotion_list']['iteration']++):
$this->_sections['emotion_list']['rownum'] = $this->_sections['emotion_list']['iteration'];
$this->_sections['emotion_list']['index_prev'] = $this->_sections['emotion_list']['index'] - $this->_sections['emotion_list']['step'];
$this->_sections['emotion_list']['index_next'] = $this->_sections['emotion_list']['index'] + $this->_sections['emotion_list']['step'];
$this->_sections['emotion_list']['first']      = ($this->_sections['emotion_list']['iteration'] == 1);
$this->_sections['emotion_list']['last']       = ($this->_sections['emotion_list']['iteration'] == $this->_sections['emotion_list']['total']);
?>

                       <li>

                       <a href="#"  class="friend_head_pic"><img src="<?php echo $this->_tpl_vars['head_pic']; ?>
" width="48" height="48" /></a>
                       <span  class="act_emotion"><a href=""> <?php echo $this->_tpl_vars['nickname']; ?>
 </a>发表了新心情微博&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['emotion_list'][$this->_sections['emotion_list']['index']]['time']; ?>
</span>
                       <div  class="act_content">
                          <p><?php echo $this->_tpl_vars['emotion_list'][$this->_sections['emotion_list']['index']]['message']; ?>
</p>
                          <div  class="ip_edit"  style="background:none; color:#B7B7B7">
                              <font>from  <?php echo $this->_tpl_vars['emotion_list'][$this->_sections['emotion_list']['index']]['origin']; ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IP:<?php echo $this->_tpl_vars['emotion_list'][$this->_sections['emotion_list']['index']]['ip']; ?>
</font>
                              <a href="index.php?display=emotion_comment&do_id=<?php echo $this->_tpl_vars['emotion_list'][$this->_sections['emotion_list']['index']]['eid']; ?>
"   class="emotion_comment_link   popup"   rel="width:800;height:300">评论<b>(<?php echo $this->_tpl_vars['emotion_list'][$this->_sections['emotion_list']['index']]['c_num']; ?>
)</b></a>
                              <a  href="javascript:void(0);" onclick="CheckForm(this);location.href='index.php?display=emotion&do=del&do_id=<?php echo $this->_tpl_vars['emotion_list'][$this->_sections['emotion_list']['index']]['eid']; ?>
&back_page=<?php echo $this->_tpl_vars['back_page']; ?>
'">删除</a>
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