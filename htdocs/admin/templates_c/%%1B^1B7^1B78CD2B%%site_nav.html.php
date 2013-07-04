<?php /* Smarty version 2.6.26, created on 2011-06-23 09:25:37
         compiled from site_nav.html */ ?>
  <div  id="head">               <!--head  start-->
    <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/logo.gif" width="40" height="62" alt="天骄天下"  id="logo"/><font  id="site_info">天骄天下个人网站系统 SSW_V 1.0</font>
    <div id="user_info">
        <span>欢迎您，<a href="index.php?display=safety"><?php echo $_SESSION['username']; ?>
</a>|<a href="<?php echo $this->_tpl_vars['site_root']; ?>
/index.php" target="_blank">查看首页</a>|<a href="<?php echo $this->_tpl_vars['admin_root']; ?>
/login_out.php">安全退出</a></span>
     </div>
     <div id="fast_function">
      <ul class="nav_now">
           <li><a   class="nav_now_title" ><font  class="index.php?display=emotion"  onclick=" window.location.href=this.className;">发表心情</font><span  onclick="Get_iduse(0,0)"  id="use0"></span></a>
            <p  id="class1content0"  class="class1content"   style="display:none;Z-index:100;">
            <a href="index.php?display=article_add">发表日志</a>
            <a href="index.php?display=lover">情侣空间</a>
            <a href="index.php?display=visitor">最近访客</a>
            <a href="index.php?display=class_manage">栏目管理</a>
            <a href="index.php?display=safety">安全设置</a>
            <a href="index.php?display=site_config">系统配置</a>

            </p>
          </li>
       </ul>
     </div>
     <div id="help">
     <a href="http://blog.sunsonworld.com">&nbsp;&nbsp;帮助</a>
     </div>

  </div>                         <!--head  end-->


  <div  id="navbar">             <!--navbar  start-->

  <!--user_center  start-->
      <ul class="nav_now  <?php if ($this->_tpl_vars['style_center'] == '1' || $_GET['type'] == 'index_index'): ?><?php else: ?>nav_title<?php endif; ?> user_center">
      <li><a    class="nav_now_title"><font  class="index.php"  title="个人中心" onclick="window.location.href=this.className;">个人中心</font><span  onclick="Get_iduse(-1,<?php if ($this->_tpl_vars['style_center'] == '1' || $_GET['type'] == 'index_index'): ?>0<?php else: ?>1<?php endif; ?>)"  id="use-1"></span></a>
          <p  id="class1content-1"  class="class1content"   style="display:<?php if ($this->_tpl_vars['style_center'] == '1' || $_GET['type'] == 'index_index'): ?>block<?php else: ?>none<?php endif; ?>;">
            <a href=""  class="<?php if ($this->_tpl_vars['style_center'] == '1'): ?>nav_now_link<?php else: ?><?php endif; ?>">个人动态</a>

		    <a href="index.php?display=label_set&type=index_index"  <?php if ($this->_tpl_vars['get_type'] == 'index'): ?> <?php if ($_GET['list_upid'] == $this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['fclassid']): ?>class="nav_now_link"<?php endif; ?><?php endif; ?>>
		    <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/label_handle.gif" style="margin-bottom:-2px;">
		    首页标签
		    </a>
            <a href="">信息档案</a>
          </p>
      </li>
      </ul>
  <!--user_center   end-->
     <div class="separate_char"></div>
  <!--====================user_menu start============================-->

     <div class="separate_border"></div>

  <?php unset($this->_sections['nav_list']);
$this->_sections['nav_list']['name'] = 'nav_list';
$this->_sections['nav_list']['loop'] = is_array($_loop=$this->_tpl_vars['nav_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['nav_list']['show'] = true;
$this->_sections['nav_list']['max'] = $this->_sections['nav_list']['loop'];
$this->_sections['nav_list']['step'] = 1;
$this->_sections['nav_list']['start'] = $this->_sections['nav_list']['step'] > 0 ? 0 : $this->_sections['nav_list']['loop']-1;
if ($this->_sections['nav_list']['show']) {
    $this->_sections['nav_list']['total'] = $this->_sections['nav_list']['loop'];
    if ($this->_sections['nav_list']['total'] == 0)
        $this->_sections['nav_list']['show'] = false;
} else
    $this->_sections['nav_list']['total'] = 0;
if ($this->_sections['nav_list']['show']):

            for ($this->_sections['nav_list']['index'] = $this->_sections['nav_list']['start'], $this->_sections['nav_list']['iteration'] = 1;
                 $this->_sections['nav_list']['iteration'] <= $this->_sections['nav_list']['total'];
                 $this->_sections['nav_list']['index'] += $this->_sections['nav_list']['step'], $this->_sections['nav_list']['iteration']++):
$this->_sections['nav_list']['rownum'] = $this->_sections['nav_list']['iteration'];
$this->_sections['nav_list']['index_prev'] = $this->_sections['nav_list']['index'] - $this->_sections['nav_list']['step'];
$this->_sections['nav_list']['index_next'] = $this->_sections['nav_list']['index'] + $this->_sections['nav_list']['step'];
$this->_sections['nav_list']['first']      = ($this->_sections['nav_list']['iteration'] == 1);
$this->_sections['nav_list']['last']       = ($this->_sections['nav_list']['iteration'] == $this->_sections['nav_list']['total']);
?>

      <ul  class="nav_now   <?php echo $this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['nav_class']; ?>
   user_<?php echo $this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['fbelong_name']; ?>
" >
      <li><a    class="nav_now_title" >
	         <font  class="index.php?display=<?php echo $this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['fbelong_name']; ?>
&list_upid=<?php echo $this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['fclassid']; ?>
"  title="<?php echo $this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['fclassname']; ?>
" style="width:56px;" onclick=" javascript:window.location.href=this.className;"><?php echo $this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['subname']; ?>
</font>
	         <span  onclick="Get_iduse(<?php echo $this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['fclassid']; ?>
,<?php if ($this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['nav_class'] == ""): ?>0<?php else: ?>1<?php endif; ?>)"  id="use<?php echo $this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['fclassid']; ?>
"></span>
	      </a>
		  <p  id="class1content<?php echo $this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['fclassid']; ?>
"  class="class1content"  <?php if ($this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['nav_class'] == ""): ?> style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?>>
		  <?php unset($this->_sections['nav_child']);
$this->_sections['nav_child']['name'] = 'nav_child';
$this->_sections['nav_child']['loop'] = is_array($_loop=$this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['nav_child']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['nav_child']['show'] = true;
$this->_sections['nav_child']['max'] = $this->_sections['nav_child']['loop'];
$this->_sections['nav_child']['step'] = 1;
$this->_sections['nav_child']['start'] = $this->_sections['nav_child']['step'] > 0 ? 0 : $this->_sections['nav_child']['loop']-1;
if ($this->_sections['nav_child']['show']) {
    $this->_sections['nav_child']['total'] = $this->_sections['nav_child']['loop'];
    if ($this->_sections['nav_child']['total'] == 0)
        $this->_sections['nav_child']['show'] = false;
} else
    $this->_sections['nav_child']['total'] = 0;
if ($this->_sections['nav_child']['show']):

            for ($this->_sections['nav_child']['index'] = $this->_sections['nav_child']['start'], $this->_sections['nav_child']['iteration'] = 1;
                 $this->_sections['nav_child']['iteration'] <= $this->_sections['nav_child']['total'];
                 $this->_sections['nav_child']['index'] += $this->_sections['nav_child']['step'], $this->_sections['nav_child']['iteration']++):
$this->_sections['nav_child']['rownum'] = $this->_sections['nav_child']['iteration'];
$this->_sections['nav_child']['index_prev'] = $this->_sections['nav_child']['index'] - $this->_sections['nav_child']['step'];
$this->_sections['nav_child']['index_next'] = $this->_sections['nav_child']['index'] + $this->_sections['nav_child']['step'];
$this->_sections['nav_child']['first']      = ($this->_sections['nav_child']['iteration'] == 1);
$this->_sections['nav_child']['last']       = ($this->_sections['nav_child']['iteration'] == $this->_sections['nav_child']['total']);
?>

            <a href="index.php?display=<?php if ($this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['fbelong_name'] == 'album'): ?>photo<?php else: ?><?php echo $this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['fbelong_name']; ?>
<?php endif; ?>&list_upid=<?php echo $this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['fclassid']; ?>
&list_classid=<?php echo $this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['nav_child'][$this->_sections['nav_child']['index']]['cclassid']; ?>
"  class="<?php echo $this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['nav_child'][$this->_sections['nav_child']['index']]['nav_now_link']; ?>
"><?php echo $this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['nav_child'][$this->_sections['nav_child']['index']]['cclassname']; ?>
</a>

		  <?php endfor; endif; ?>
		  <a href="index.php?display=label_set&list_upid=<?php echo $this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['fclassid']; ?>
&type=<?php echo $this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['fbelong_name']; ?>
_index"  <?php if ($this->_tpl_vars['get_type'] == 'index'): ?> <?php if ($_GET['list_upid'] == $this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['fclassid']): ?>class="nav_now_link"<?php endif; ?><?php endif; ?>>
		  <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/label_handle.gif" style="margin-bottom:-2px;">
		  目录页
		  </a>

		  <a href="index.php?display=label_set&list_upid=<?php echo $this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['fclassid']; ?>
&type=<?php echo $this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['fbelong_name']; ?>
_list"  <?php if ($this->_tpl_vars['get_type'] == 'list'): ?> <?php if ($_GET['list_upid'] == $this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['fclassid']): ?>class="nav_now_link"<?php endif; ?><?php endif; ?>>
		  <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/label_handle.gif" style="margin-bottom:-2px;">
		  列表页
		  </a>
          <?php if ($this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['fbelong_name'] == 'article'): ?>
		  <a href="index.php?display=label_set&list_upid=<?php echo $this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['fclassid']; ?>
&type=<?php echo $this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['fbelong_name']; ?>
_view"  <?php if ($this->_tpl_vars['get_type'] == 'view'): ?> <?php if ($_GET['list_upid'] == $this->_tpl_vars['nav_list'][$this->_sections['nav_list']['index']]['fclassid']): ?>class="nav_now_link"<?php endif; ?><?php endif; ?>>
		  <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/label_handle.gif" style="margin-bottom:-2px;">
		  阅读页
		  </a>
		  <?php endif; ?>
          </p>
      </li>
      </ul>

   <?php endfor; endif; ?>

     <div class="separate_border"></div>

  <!--============================user_menu end========================-->
  <div class="separate_char"></div>


  <!--=====================default_menu start=====================-->
      <ul class="nav_now  <?php if ($this->_tpl_vars['style_visitor'] == '1'): ?><?php else: ?>nav_title<?php endif; ?>  user_visitor" >
      <li><a     class="nav_now_title" ><font  class="index.php?display=visitor" title="最近访客" onclick=" window.location.href=this.className;">最近访客</font><span  onclick="Get_iduse(42,<?php if ($this->_tpl_vars['style_visitor'] == '1'): ?>0<?php else: ?>1<?php endif; ?>)"  id="use42"></span></a>
          <p  id="class1content42"  class="class1content"   style="display:<?php if ($this->_tpl_vars['style_visitor'] == '1'): ?>block<?php else: ?>none<?php endif; ?>;">
            <a href="index.php?display=visitor">最近访客</a>
          </p>
      </li>
      </ul>


      <ul class="nav_now  <?php if ($this->_tpl_vars['style_friend'] == '1'): ?><?php else: ?>nav_title<?php endif; ?>  user_friend" >
      <li><a     class="nav_now_title" ><font  class="index.php?display=friend" title="好友管理" onclick=" window.location.href=this.className;">好友管理</font><span  onclick="Get_iduse(43,<?php if ($this->_tpl_vars['style_friend'] == '1'): ?>0<?php else: ?>1<?php endif; ?>)"  id="use43"></span></a>
          <p  id="class1content43"  class="class1content"   style="display:<?php if ($this->_tpl_vars['style_friend'] == '1'): ?>block<?php else: ?>none<?php endif; ?>;">
            <a href="index.php?display=friend">好友管理</a>
			<a href="index.php?display=friend_action">好友动态</a>
          </p>
      </li>
      </ul>

      <ul class="nav_now  <?php if ($this->_tpl_vars['style_head_info'] == '1'): ?><?php else: ?>nav_title<?php endif; ?>  user_friend" >
      <li><a     class="nav_now_title" ><font  class="index.php?display=head_info" title="好友管理" onclick=" window.location.href=this.className;">头像管理</font><span  onclick="Get_iduse(44,<?php if ($this->_tpl_vars['style_head_info'] == '1'): ?>0<?php else: ?>1<?php endif; ?>)"  id="use44"></span></a>
          <p  id="class1content44"  class="class1content"   style="display:<?php if ($this->_tpl_vars['style_head_info'] == '1'): ?>block<?php else: ?>none<?php endif; ?>;">
            <a href="index.php?display=head_info">头像设置</a>
          </p>
      </li>
      </ul>
  <!--====================default_menu end========================-->

  <div class="separate_char"></div>
  <!--================tool_menu start====================================-->
      <ul class="nav_now  <?php if ($this->_tpl_vars['style_class_manage'] == '1'): ?><?php else: ?>nav_title<?php endif; ?>  user_class">
      <li><a     class="nav_now_title" ><font  class="index.php?display=class_manage" title="栏目管理" onclick=" window.location.href=this.className;">栏目管理</font><span  onclick="Get_iduse(60,<?php if ($this->_tpl_vars['style_class_manage'] == '1'): ?>0<?php else: ?>1<?php endif; ?>)"  id="use60"></span></a>
          <p  id="class1content60"  class="class1content"   style="display:<?php if ($this->_tpl_vars['style_class_manage'] == '1'): ?>block<?php else: ?>none<?php endif; ?>;">
            <a href="index.php?display=class_manage" <?php if ($_GET['display'] == 'class_manage'): ?>class="nav_now_link"<?php endif; ?>>栏目设置</a>
          </p>
      </li>
      </ul>

      <ul class="nav_now  <?php if ($this->_tpl_vars['style_file'] == '1'): ?><?php else: ?>nav_title<?php endif; ?>  user_file">
      <li><a    class="nav_now_title" ><font  class="index.php?display=file" title="文件管理" onclick="alert('温馨提示：公测阶段，此功能暂不对外开放，请关注后续更新版本！')">文件管理</font><span  onclick="Get_iduse(61,<?php if ($this->_tpl_vars['style_file'] == '1'): ?>0<?php else: ?>1<?php endif; ?>)"  id="use61"></span></a>
          <p  id="class1content61"  class="class1content"   style="display:<?php if ($this->_tpl_vars['style_file'] == '1'): ?>block<?php else: ?>none<?php endif; ?>;">
            <a href="javascript:void(0)">文件管理</a>
          </p>
      </li>
      </ul>

      <ul class="nav_now  <?php if ($this->_tpl_vars['style_safety'] == '1'): ?><?php else: ?>nav_title<?php endif; ?>  user_safe">
      <li><a     class="nav_now_title" ><font class="index.php?display=safety" title="安全设置" onclick=" window.location.href=this.className;">安全设置</font><span  onclick="Get_iduse(62,<?php if ($this->_tpl_vars['style_safety'] == '1'): ?>0<?php else: ?>1<?php endif; ?>)"  id="use62"></span></a>
          <p  id="class1content62"  class="class1content"   style="display:<?php if ($this->_tpl_vars['style_safety'] == '1'): ?>block<?php else: ?>none<?php endif; ?>;">
            <a href="index.php?display=safety" <?php if ($_GET['display'] == 'safety'): ?>class="nav_now_link"<?php endif; ?>>安全设置</a>
          </p>
      </li>
      </ul>

      <ul class="nav_now  <?php if ($this->_tpl_vars['style_site_config'] == '1'): ?><?php else: ?>nav_title<?php endif; ?>  user_system ">
      <li><a     class="nav_now_title" ><font  class="index.php?display=site_config" title="系统配置" onclick=" window.location.href=this.className;">系统配置</font><span  onclick="Get_iduse(63,<?php if ($this->_tpl_vars['style_site_config'] == '1'): ?>0<?php else: ?>1<?php endif; ?>)"  id="use63"></span></a>
          <p  id="class1content63"  class="class1content"   style="display:<?php if ($this->_tpl_vars['style_site_config'] == '1'): ?>block<?php else: ?>none<?php endif; ?>;">
            <a href="index.php?display=site_config"  <?php if ($_GET['display'] == 'site_config'): ?>class="nav_now_link"<?php endif; ?>>基本配置</a>
			<a href="index.php?display=theme">模板选择</a>
			<a href="index.php?display=mail">邮件配置</a>
          </p>
      </li>
      </ul>

      <ul class="nav_now  nav_title  ie6_bug_ul"  >
        <li</li>
      </ul>

      <div    class="copyright"><div>技术支持：<a href="http://blog.sunsonworld.com">天之骄子</a><br>版权所有：<a href="http://www.sunsonworld.com">天骄天下</a></div></div>
 <!--tool_menu end-->


  </div>                         <!--navbar  end-->