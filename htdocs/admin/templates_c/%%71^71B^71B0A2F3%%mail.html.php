<?php /* Smarty version 2.6.26, created on 2011-05-25 16:44:19
         compiled from mail.html */ ?>
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
</head>
<?php echo '
<script>

window.onload = function (){
	 timezone_select();
	}


function  timezone_select(){
  var  selectItem=Get_id(\'time_zone\')

  for (var i=0; i < selectItem.options.length; i++) {
     if (selectItem.options[i].value == "'; ?>
<?php echo $this->_tpl_vars['timezone']; ?>
<?php echo '"){

        selectItem.options[i].selected = true;
			 //alert(selectItem.options[i].value);
	 }
  }
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
/images/mail_center.png" width="31" height="34"   class="control_logo"/>
           <h1>邮件配置</h1>
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
               <div  class="content_block_title">邮件配置</div>
               <div  class="info_main">
                   <div  id="top_tool"  class="info_title"   style="border-bottom-style:dashed">
                   <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_mail.gif" width="16" height="17" /> <b href="javascript:void(0);"  class="info_now">配置信息</b>
                   <div class="clear"></div>
                   </div>


                   <div  id="info_content">
                   <form  action="index.php?display=mail" method="POST"  name="site_config">

                   <input name="display" type="hidden"  value="mail" />
                   <input name="do" type="hidden"  value="update"  id="do"/>

                   <span  class="info_span"><b>发件人</b>
                        <p>
                          <input name="smtpusermail" type="text"  value="<?php echo $this->_tpl_vars['smtpusermail']; ?>
" class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/>
                          <font style="margin-top:8px;">（SMTP服务器的用户邮箱）</font>
                        </p>
                   </span>

                   <span  class="info_span"><b>服务器</b>
                        <p>
                           <input name="smtpserver" type="text"  value="<?php echo $this->_tpl_vars['smtpserver']; ?>
" class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/>
                          <font style="margin-top:8px;">（SMTP服务器）</font>
                        </p>
                   </span>

                   <span  class="info_span"><b>端口</b>
                        <p>
                           <input name="smtpserverport" type="text"  value="<?php echo $this->_tpl_vars['smtpserverport']; ?>
" class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/>
                          <font style="margin-top:8px;">（SMTP服务器端口）</font>
                        </p>
                   </span>

                   <span  class="info_span"><b>用户帐号</b>
                         <p><input name="smtpuser" type="text" value="<?php echo $this->_tpl_vars['smtpuser']; ?>
"  class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/>
                         <font style="margin-top:8px;">（SMTP服务器的用户帐号）</font>

                         </p>
                   </span>

                   <span  class="info_span"><b>用户密码</b>
                         <p><input name="smtppass" type="password"  value="<?php echo $this->_tpl_vars['smtppass']; ?>
"  class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/>
						 <font style="margin-top:8px;">（SMTP服务器的用户密码）</font>
						 </p>
                   </span>





                   <span   class="info_span"><b></b>
                        <p><b  onclick="Get_id('do').value='update';document.site_config.submit()">保存设置</b></p>
                   </span>


                   <span   class="info_span"><b></b>
                        <p></p>
                   </span>

                   <span  class="info_span"><b>收件人</b>
                         <p><input name="smtpemailto" type="text"  value="<?php echo $this->_tpl_vars['url']; ?>
"  class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/>
						 <font style="margin-top:8px;">（请输入您的邮箱地址，点击按钮发送测试邮件）</font>
						 </p>
                   </span>

                   <span   class="info_span"><b></b>
                        <p><b  onclick="Get_id('do').value='test';document.site_config.submit()">发送测试</b></p>
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