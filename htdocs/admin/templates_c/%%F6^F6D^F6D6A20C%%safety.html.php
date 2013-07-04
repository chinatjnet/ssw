<?php /* Smarty version 2.6.26, created on 2011-05-24 13:57:32
         compiled from safety.html */ ?>
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
/js/ajax.js"></script>
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
/images/safe_center.png" width="31" height="34"   class="control_logo"/>
           <h1>安全设置</h1>
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
               <div  class="content_block_title">安全设置</div>
               <div  class="info_main">
                   <div  id="top_tool"  class="info_title"   style="border-bottom-style:dashed">
                   <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_safe.gif" width="16" height="17" /> <b href="javascript:void(0);"  class="info_now">安全设置</b>
                   <div class="clear"></div>
                   </div>


                   <div  id="info_content">
                   <form action="index.php?display=safety" method="POST"  name="safety_edit">

                   <INPUT TYPE=hidden NAME=display  VALUE="safety">
                   <INPUT TYPE=hidden NAME=do  VALUE="safety_update">

                   <span   class="info_span"><b></b>
                          <p><b  style="border:0px; background:none;margin-left:60px;_margin-left:30px;width:150px;">验证当前用户信息</b></p>
                   </span>

                   <span  class="info_span"><b>当前用户名</b>
                        <p>
                          <font style="margin-top:6px;font-weight:bold;font-size:13px;"><?php echo $this->_tpl_vars['username']; ?>
</font>
                        </p>
                   </span>

                   <span  class="info_span"><b>当前密码</b>
                        <p>
                          <input name="now_password" type="password"  value="" class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input';check_info('index.php?display=safety_check&do=password_check','password_check',this.value,'')"/>
                          <font style="margin-top:8px;font-weight:bold"  id="password_check"></font>
                        </p>
                   </span>

                   <span  class="info_span"><b>密保问题</b>
                        <p>
                          <select name="now_question" id="now_question">
                           <option value="0">无安全提问</option>
                           <option value="1">母亲的生日</option>
                           <option value="2">父亲的生日</option>
                           <option value="3">情侣的生日</option>
                           <option value="4">你的工号</option>
                           <option value="5">你喜欢的音乐</option>
                           <option value="6">你其中一位老师的名字</option>
                           <option value="7">你和情侣的纪念日</option>
                           <option value="8">你最喜欢的颜色</option>
                           <option value="9">1+1=？</option>
                          </select>

                        </p>
                   </span>

                   <span  class="info_span"><b>密保答案</b>
                        <p>
                           <input name="now_answer" type="text"   class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input';check_info('index.php?display=safety_check&do=answer_check','answer_check',this.value,Get_id('now_question').value)"/>
                           <font style="margin-top:8px;color:#FF3300;font-weight:bold"  id="answer_check"></font>
                        </p>

                   </span>

                   <span   class="info_span"><b></b>
                          <p><b  style="border:0px; background:none;margin-left:60px;_margin-left:30px;width:150px;">设置新用户名密码</b></p>
                   </span>

                   <span  class="info_span"><b>新用户名</b>
                        <p>
                          <input name="new_username" type="text"  value="<?php echo $this->_tpl_vars['username']; ?>
"  class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/>
                        </p>
                   </span>

                   <span  class="info_span"><b>新密码</b>
                        <p>
                          <input name="new_password" type="password"   id="new_password" class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/>
                        </p>
                   </span>

                   <span  class="info_span"><b>确认密码</b>
                        <p>
                          <input name="ensure_password" type="password"   class="text_input"   onfocus="this.className='text_input   text_input_hover';"  onblur="this.className='text_input';s=Get_id('ensure_show');s.innerHTML='√ 输入正确!';s.style.color='#1CA01C';if(Get_id('new_password').value!=this.value||this.value=='')<?php echo '{'; ?>
s.innerHTML='× 密码输入不一致或不能为空!';s.style.color='#FF3300';<?php echo '}'; ?>
"/>
						  <font style="margin-top:8px;color:#FF3300;font-weight:bold"  id="ensure_show"></font>
                        </p>
                   </span>

                   <span  class="info_span"><b>密保问题</b>
                        <p>
                          <select name="new_question" id="new_question">
                           <option value="999" selected>保持原有的问题和答案</option>
                           <option value="0">无安全提问</option>
                           <option value="1">母亲的生日</option>
                           <option value="2">父亲的生日</option>
                           <option value="3">情侣的生日</option>
                           <option value="4">你的工号</option>
                           <option value="5">你喜欢的音乐</option>
                           <option value="6">你其中一位老师的名字</option>
                           <option value="7">你和情侣的纪念日</option>
                           <option value="8">你最喜欢的颜色</option>
                           <option value="9">1+1=？</option>
                          </select>

                        </p>
                   </span>

                   <span  class="info_span"><b>密保答案</b>
                        <p>
                           <input name="new_answer" type="text"   class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/>
                        </p>

                   </span>


                   <span  class="info_span"><b>密保邮箱</b>
                        <p>
                           <input name="new_email" type="text"   class="text_input"  value="<?php echo $this->_tpl_vars['email']; ?>
"  onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/>
                        </p>

                   </span>


                   <span   class="info_span"><b></b>
                        <p></p>
                   </span>


                   <span   class="info_span"><b></b>
                        <p><b  onclick="document.safety_edit.submit()">确定修改</b></p>
                   </span>

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