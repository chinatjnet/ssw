<?php /* Smarty version 2.6.26, created on 2011-04-06 10:02:23
         compiled from article111.html */ ?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>天骄天下-个人网站系统_SSW_V 1.0</title>

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
</head>
<?php echo '
<script>

window.onload = function (){

	 location();
	}

}

</script>
'; ?>


<body>
<div id="all">                                                      <!--webpage  start-->
  <div  id="head">               <!--head  start-->
    <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/logo.gif" width="40" height="62" alt="天骄天下"  id="logo"/><font  id="site_info">天骄天下个人网站系统 SSW_V 1.0</font>
    <div id="user_info">
        <span>欢迎您，<a href="">天之骄子</a>|<a href="">安全退出</a></span>
     </div>
     <div id="fast_function">
      <ul class="nav_now">
           <li><a   class="nav_now_title" ><font  title="http://www.sunsonworld.com"  onclick=" javascript:window.location.href=this.title;window.navigate(this.title);">发表心情</font><span  onclick="Get_iduse(0,0)"  id="use0"></span></a>
             <p  id="class1content0"  class="class1content"   style="display:none;">
            <a href="">个人动态</a>
            <a href="">信息档案</a>
            <a href="">信息档案</a>
            </p>
          </li>
       </ul>
     </div>
     <div id="help">
     <a href="">&nbsp;&nbsp;帮助</a>
     </div>

  </div>                         <!--head  end-->


  <div  id="navbar">             <!--navbar  start-->

  <!--user_center  start-->
      <ul class="nav_now   user_center">
      <li><a    class="nav_now_title"><font  title="http://www.sunsonworld.com" >个人中心</font><span  onclick="Get_iduse(1,0)"  id="use1"></span></a>
          <p  id="class1content1"  class="class1content"   style="display:block;">
            <a href=""  class="nav_now_link">个人动态</a>
            <a href="">信息档案</a>
            <a href="">信息档案</a>
          </p>
      </li>
      </ul>
  <!--user_center   end-->
     <div class="separate_char"></div>
  <!--====================user_menu start============================-->
      <div class="separate_border"></div>
      <ul  class="nav_now   nav_title  user_emotion" >
      <li><a    class="nav_now_title" ><font  title="http://www.sunsonworld.com">心情微博</font><span  onclick="Get_iduse(2,1)"  id="use2"></span></a>
          <p  id="class1content2"  class="class1content"   style="display:none;">
            <a href="">个人动态</a>
            <a href="">信息档案</a>
            <a href="">信息档案</a>
          </p>
      </li>
      </ul>

      <ul  class="nav_now   nav_title  user_info" >
      <li><a   class="nav_now_title" ><font  title="http://www.sunsonworld.com">个人档案</font><span  onclick="Get_iduse(3,1)"  id="use3"></span></a>
          <p  id="class1content3"  class="class1content"   style="display:none;">
            <a href="">个人动态</a>
            <a href="">信息档案</a>
            <a href="">信息档案</a>
          </p>
      </li>
      </ul>

      <ul  class="nav_now   nav_title  user_pic" >
      <li><a   class="nav_now_title" ><font  title="http://www.sunsonworld.com">个人相册</font><span  onclick="Get_iduse(4,1)"  id="use4"></span></a>
          <p  id="class1content4"  class="class1content"   style="display:none;">
            <a href="">个人动态</a>
            <a href="">信息档案</a>
            <a href="">信息档案</a>
          </p>
      </li>
      </ul>

      <ul  class="nav_now   nav_title    user_article" >
      <li><a   class="nav_now_title" ><font  title="http://www.sunsonworld.com">文章日志</font><span  onclick="Get_iduse(5,1)"  id="use5"></span></a>
          <p  id="class1content5"  class="class1content"   style="display:none;">
            <a href="">个人动态</a>
            <a href="">信息档案</a>
            <a href="">信息档案</a>
          </p>
      </li>
      </ul>

      <ul  class="nav_now   nav_title  user_music" >
      <li><a    class="nav_now_title" ><font  title="http://www.sunsonworld.com">我的音乐</font><span  onclick="Get_iduse(6,1)"  id="use6"></span></a>
          <p  id="class1content6"  class="class1content"   style="display:none;">
            <a href="">个人动态</a>
            <a href="">信息档案</a>
            <a href="">信息档案</a>
          </p>
      </li>
      </ul>

      <ul  class="nav_now   nav_title   user_resource" >
      <li><a    class="nav_now_title" ><font  title="http://www.sunsonworld.com">资源下载</font><span  onclick="Get_iduse(7,1)"  id="use7"></span></a>
          <p  id="class1content7"  class="class1content"   style="display:none;">
            <a href="">个人动态</a>
            <a href="">信息档案</a>
            <a href="">信息档案</a>
          </p>
      </li>
      </ul>

      <div class="separate_border"></div>

  <!--============================user_menu end========================-->
  <div class="separate_char"></div>


  <!--=====================default_menu start=====================-->
      <ul class="nav_now  nav_title  user_guestbook" >
      <li><a    class="nav_now_title" ><font  title="http://www.sunsonworld.com">访客留言</font><span  onclick="Get_iduse(40,1)"  id="use40"></span></a>
          <p  id="class1content40"  class="class1content"   style="display:none;">
            <a href="">个人动态</a>
            <a href="">信息档案</a>
            <a href="">信息档案</a>
          </p>
      </li>
      </ul>

      <ul class="nav_now  nav_title   user_love" >
      <li><a    class="nav_now_title" ><font  title="http://www.sunsonworld.com">情侣空间</font><span  onclick="Get_iduse(41,1)"  id="use41"></span></a>
          <p  id="class1content41"  class="class1content"   style="display:none;">
            <a href="">个人动态</a>
            <a href="">信息档案</a>
            <a href="">信息档案</a>
          </p>
      </li>
      </ul>

      <ul class="nav_now  nav_title  user_visitor" >
      <li><a     class="nav_now_title" ><font  title="http://www.sunsonworld.com">最近访客</font><span  onclick="Get_iduse(42,1)"  id="use42"></span></a>
          <p  id="class1content42"  class="class1content"   style="display:none;">
            <a href="">个人动态</a>
            <a href="">信息档案</a>
            <a href="">信息档案</a>
          </p>
      </li>
      </ul>


      <ul class="nav_now  nav_title  user_friend" >
      <li><a     class="nav_now_title" ><font  title="http://www.sunsonworld.com">好友管理</font><span  onclick="Get_iduse(43,1)"  id="use430"></span></a>
          <p  id="class1content43"  class="class1content"   style="display:none;">
            <a href="">个人动态</a>
            <a href="">信息档案</a>
            <a href="">信息档案</a>
          </p>
      </li>
      </ul>

      <ul class="nav_now  nav_title  user_collect" >
      <li><a     class="nav_now_title" ><font  title="http://www.sunsonworld.com">网址收藏</font><span  onclick="Get_iduse(44,1)"  id="use44"></span></a>
          <p  id="class1content44"  class="class1content"   style="display:none;">
            <a href="">个人动态</a>
            <a href="">信息档案</a>
            <a href="">信息档案</a>
          </p>
      </li>
      </ul>

  <!--====================default_menu end========================-->

  <div class="separate_char"></div>
  <!--================tool_menu start====================================-->
      <ul class="nav_now  nav_title  user_class">
      <li><a     class="nav_now_title" ><font  title="http://www.sunsonworld.com">栏目管理</font><span  onclick="Get_iduse(60,1)"  id="use60"></span></a>
          <p  id="class1content60"  class="class1content"   style="display:none;">
            <a href="">个人动态</a>
            <a href="">信息档案</a>
            <a href="">信息档案</a>
          </p>
      </li>
      </ul>

      <ul class="nav_now  nav_title  user_file">
      <li><a    class="nav_now_title" ><font  title="http://www.sunsonworld.com">文件管理</font><span  onclick="Get_iduse(61,1)"  id="use61"></span></a>
          <p  id="class1content61"  class="class1content"   style="display:none;">
            <a href="">个人动态</a>
            <a href="">信息档案</a>
            <a href="">信息档案</a>
          </p>
      </li>
      </ul>

      <ul class="nav_now  nav_title  user_safe">
      <li><a     class="nav_now_title" ><font  title="http://www.sunsonworld.com">安全设置</font><span  onclick="Get_iduse(62,1)"  id="use62"></span></a>
          <p  id="class1content62"  class="class1content"   style="display:none;">
            <a href="">个人动态</a>
            <a href="">信息档案</a>
            <a href="">信息档案</a>
          </p>
      </li>
      </ul>

      <ul class="nav_now  nav_title  user_system ">
      <li><a     class="nav_now_title" ><font  title="http://www.sunsonworld.com">系统配置</font><span  onclick="Get_iduse(63,1)"  id="use63"></span></a>
          <p  id="class1content63"  class="class1content"   style="display:none;">
            <a href="">个人动态</a>
            <a href="">信息档案</a>
            <a href="">信息档案</a>
          </p>
      </li>
      </ul>

     <ul class="nav_now  nav_title  ie6_bug_ul"  >
         <li></li>
     </ul>

      <div    class="copyright"><div>技术支持：<a href="http://blog.sunsonworld.com">天之骄子</a><br>版权所有：<a href="http://www.sunsonworld.com">天骄天下</a></div></div>
 <!--tool_menu end-->


  </div>                         <!--navbar  end-->



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
/images/user_article.gif" width="16" height="17" /><b>文章总数</b>1800个
                        </span>

                        <span  class="tool_bar">
                   <form action="" method="get">
                         <input name="input" type="checkbox" value=""   onclick="select_all(this.checked);"/>全选

                         <label>
                         <input type="button" name="shield" id="add"  onclick="javascript:location.href='index.php?display=article_add'"    value="  添加文章"/>
                         <input type="submit" name="del" id="del"  value="  删除所选"/>
                         <select name="jumpMenu2" id="top_jump" onchange="if(this.selectedIndex>0)location.href=this.options[this.selectedIndex].value">
                                <option value="?id=11" selected="selected" >隐私设置</option>
                                <option value="?id=2">所有可见</option>
                                <option value="?id=11">好友可见</option>
                                <option value="http://www.sunsonworld.com">情侣可见</option>
                                <option>主人可见</option>
                         </select>
                         </label>

                     </form>
                        </span>
                 <div  class="sep_border"></div>
                        <span  class="tool_clsss"   id="class_list_bar">

                        <a href="index.php?display=article&list_upid=<?php echo $this->_tpl_vars['list_upid']; ?>
"  style="font-weight:bold;color:#333333">全部资源</a><h4>|</h4>

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

                        </span>
                        <div  class="sep_border"></div>

             </div>
           <div class="clear"></div>
           </div>



           <div  class="content_block   latest_act   resource_list   article_list"     id="list_check">

               <div  class="content_block_main">
                  <form action="" method="get">
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
                            <a href=""><b><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_article.gif" width="16" height="16" /><?php echo $this->_tpl_vars['article_list'][$this->_sections['article_list']['index']]['title']; ?>
</b></a>
                            <a  href="index.php?<?php echo $this->_tpl_vars['article_now_url']; ?>
&do=edit&do_id=<?php echo $this->_tpl_vars['article_list'][$this->_sections['article_list']['index']]['aid']; ?>
" class="edit">编辑</a>
                         <a  href="index.php?<?php echo $this->_tpl_vars['article_now_url']; ?>
&do=del&do_id=<?php echo $this->_tpl_vars['article_list'][$this->_sections['article_list']['index']]['aid']; ?>
" class="del">删除</a>
                         <select name="jumpMenu3" class="jumpMenu"  onchange="if(this.selectedIndex>0)location.href=this.options[this.selectedIndex].value">
                           <option value="#" selected="selected">隐私设置</option>
                           <option value="http://www.sunsonworld.com">所有可见</option>
                           <option value="http://www.sunsonworld.com">好友可见</option>
                           <option value="http://www.sunsonworld.com">情侣可见</option>
                           <option>主人可见</option>
                         </select>
                       </span>

                       <span  class="act_emotion    resource_intro">
                       <font><i>个人分类：</i><a href="#"  class="article_class"><?php echo $this->_tpl_vars['article_list'][$this->_sections['article_list']['index']]['result_classname']; ?>
</a><?php echo $this->_tpl_vars['article_list'][$this->_sections['article_list']['index']]['publish_time']; ?>
</font>
                       <font  class="article_sketch"><?php echo $this->_tpl_vars['article_list'][$this->_sections['article_list']['index']]['title']; ?>
</font>
                       <font  class="article_comment"><i>阅读（<?php echo $this->_tpl_vars['article_list'][$this->_sections['article_list']['index']]['viewnum']; ?>
）</i><a  href="http://easyframework.com"   class="popup"   rel="width:800;height:300">评论（<?php echo $this->_tpl_vars['article_list'][$this->_sections['article_list']['index']]['c_num']; ?>
）</a></font>
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

<div id="foot">
  <center>
  版权所有<a href="#"> 天骄天下网络中心</a> © 2001-2010 <a href="#">天骄天下</a> <br>
GMT+8, 2011-1-31 22:27 , Processed in 0.059636 second(s), 15 queries .
  </center>


</div>

<div class="clear"></div>
</div>                                              <!--webpage  end-->
</body>
</html>