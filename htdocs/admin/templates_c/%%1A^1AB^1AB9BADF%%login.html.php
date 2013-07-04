<?php /* Smarty version 2.6.26, created on 2011-06-19 11:12:08
         compiled from login.html */ ?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="zh-CN">
<head>
<title>天骄天下 &rsaquo; 登录</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel='stylesheet' id='login-css'  href='<?php echo $this->_tpl_vars['temp_dir']; ?>
/css/Mfi1.css' type='text/css' media='all' />
<link rel='stylesheet' id='colors-fresh-css'  href='<?php echo $this->_tpl_vars['temp_dir']; ?>
/css/Mfi3.css' type='text/css' media='all' />
<meta name='robots' content='noindex,nofollow' />
</head>
<body class="login">

<div id="login"><h1><a href="http://sunsonworld.com/" title="由 SUNSONWORLD 所驱动">天骄天下</a></h1>

<form name="loginform" id="loginform" action=index.php?display=login method="post">
    <input type="hidden" name="display" value="login" />
	<input type="hidden" name="do" value="check_login" />
	<p>
		<label>用户名<br />
		<input type="text" name="log" id="user_login" class="input" value="" size="20" tabindex="10" /></label>
	</p>
    
  <p>
		<label>密码<br />
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" tabindex="20" /></label>
	</p>
    
 	<p>
		<label>验证码<br>
        <input type="text" name="verifycode" id="user_pass" class="input" value="" style="width:150px;"/>
	    <img  src="<?php echo $this->_tpl_vars['admin_root']; ?>
/function/login_verify.php?t=1000"  title="看不请验证码？点击更换一张" onclick="this.src='<?php echo $this->_tpl_vars['admin_root']; ?>
/function/login_verify.php?t='+Math.random();"  style="width:100px;margin-bottom:-10px;margin-left:8px;"><br><br></label>
	</p> 
      
	<p class="forgetmenot"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever" tabindex="90" /> 记住我的登录信息</label></p>
    
  <p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="登录" tabindex="100" />
		<input type="hidden" name="redirect_to" value="http://127.0.0.1/wordpress/wp-admin/" />
		<input type="hidden" name="testcookie" value="1" />
	</p>
</form>

<p id="nav">
<a href="http://127.0.0.1/wordpress/wp-login.php?action=lostpassword" title="找回密码">忘记密码？</a>
</p>

<p id="backtoblog"><a href="<?php echo $this->_tpl_vars['site_root']; ?>
" title="不知道自己在哪？">&larr; 返回 天骄天下</a></p>
</div>
<?php echo '
<script type="text/javascript">
try{document.getElementById(\'user_login\').focus();}catch(e){}
</script>
'; ?>

</body>
</html>