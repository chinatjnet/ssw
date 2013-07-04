<?php /* Smarty version 2.6.26, created on 2011-03-21 02:06:33
         compiled from hobby_info.html */ ?>
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
/js/PopupCalendar.js" ></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/js/Pro_City.js" ></script>
<script charset="utf-8" src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/editor/kindeditor.js"></script>
</head>

<?php echo '
<style>

textarea{margin-left:-40px;}


</style>

<script>

window.onload = function (){

	 location();
	}


</script>

		<script>
			KE.show({
				id : \'textarea_uniqsign\',
				resizeMode : 1,
				allowPreviewEmoticons : false,
				allowUpload : false,
				items : [
				\'fontname\', \'fontsize\', \'|\', \'textcolor\', \'bgcolor\', \'bold\',
				 \'|\', \'emoticons\', \'image\', \'link\']
			});

			KE.show({
				id : \'textarea_self_intro\',
				resizeMode : 1,
				allowPreviewEmoticons : false,
				allowUpload : false,
				items : [
				\'fontname\', \'fontsize\', \'|\', \'textcolor\', \'bgcolor\', \'bold\',
				 \'|\', \'emoticons\', \'image\', \'link\']
			});

		</script>



<script >
var oCalendarEn=new PopupCalendar("oCalendarEn");	//初始化控件时,请给出实例名称如:oCalendarEn
oCalendarEn.Init();
var oCalendarChs=new PopupCalendar("oCalendarChs");	//初始化控件时,请给出实例名称:oCalendarChs
oCalendarChs.weekDaySting=new Array("日","一","二","三","四","五","六");
oCalendarChs.monthSting=new Array("一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月");
oCalendarChs.oBtnTodayTitle="今天";
oCalendarChs.oBtnCancelTitle="取消";
oCalendarChs.Init();
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
/images/info_center.png" width="31" height="34"   class="control_logo"/>
           <h1>个人资料</h1>
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
               <div  class="content_block_title">修改个人资料</div>
               <div  class="info_main">
                   <div  id="top_tool">
                   <a href=""  class="info_now">基本资料</a><a href="">联系方式</a><a href="">教育工作</a><a href="">兴趣爱好</a>
                   <div class="clear"></div>
                   </div>


                   <div  id="info_content">
                   <form action="" method="get"  name="selfinfo_edit">
                   <span  class="info_span"><b>我的偶像</b>
                        <p>
                          <input name="input" type="text"   class="text_input"   onfocus="this.style.border='#21759B  solid  1px'"  onblur="this.style.border='#A5ACB2  solid  1px'"/>
                        </p>
                         <select name="jumpMenu2" >
                             <option value="?id=11" selected="selected" >所有可见</option>
                             <option value="?id=11" >好友可见</option>
                             <option value="?id=11" >情侣可见</option>
                             <option value="?id=2">主人可见</option>
                         </select>
                   </span>

                   <span   class="info_span"><b>喜爱的音乐</b>
                         <p>
                         <textarea     name="content"    onfocus="this.style.border='#21759B  solid  1px'"  onblur="this.style.border='#A5ACB2  solid  1px'"></textarea>
                         </p>
                        <select name="jumpMenu2" >
                             <option value="?id=11" selected="selected" >所有可见</option>
                             <option value="?id=11" >好友可见</option>
                             <option value="?id=11" >情侣可见</option>
                             <option value="?id=2">主人可见</option>
                         </select>
                   </span>

                   <span   class="info_span"><b>喜爱的电影</b>
                         <p>
                         <textarea     name="content"  onfocus="this.style.border='#21759B  solid  1px'"  onblur="this.style.border='#A5ACB2  solid  1px'"></textarea>
                         </p>
                        <select name="jumpMenu2" >
                             <option value="?id=11" selected="selected" >所有可见</option>
                             <option value="?id=11" >好友可见</option>
                             <option value="?id=11" >情侣可见</option>
                             <option value="?id=2">主人可见</option>
                         </select>
                   </span>


                   <span   class="info_span"><b>喜爱的书籍</b>
                         <p>
                         <textarea     name="content"   onfocus="this.style.border='#21759B  solid  1px'"  onblur="this.style.border='#A5ACB2  solid  1px'"></textarea>
                         </p>
                        <select name="jumpMenu2" >
                             <option value="?id=11" selected="selected" >所有可见</option>
                             <option value="?id=11" >好友可见</option>
                             <option value="?id=11" >情侣可见</option>
                             <option value="?id=2">主人可见</option>
                         </select>
                   </span>


                   <span   class="info_span"><b>喜爱的运动</b>
                         <p>
                         <textarea     name="content"  onfocus="this.style.border='#21759B  solid  1px'"  onblur="this.style.border='#A5ACB2  solid  1px'"></textarea>
                         </p>
                        <select name="jumpMenu2" >
                             <option value="?id=11" selected="selected" >所有可见</option>
                             <option value="?id=11" >好友可见</option>
                             <option value="?id=11" >情侣可见</option>
                             <option value="?id=2">主人可见</option>
                         </select>
                   </span>

                   <span   class="info_span"><b>其它的爱好</b>
                         <p>
                         <textarea     name="content"  onfocus="this.style.border='#21759B  solid  1px'"  onblur="this.style.border='#A5ACB2  solid  1px'"></textarea>
                         </p>
                        <select name="jumpMenu2" >
                             <option value="?id=11" selected="selected" >所有可见</option>
                             <option value="?id=11" >好友可见</option>
                             <option value="?id=11" >情侣可见</option>
                             <option value="?id=2">主人可见</option>
                         </select>
                   </span>




                   <span   class="info_span"><b></b>
                        <p><b  onclick="document.selfinfo_edit.submit()">保存</b></p>
                   </span>

                   </form>
                   <div class="clear"></div>
                 </div>




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



</script>-->
</div>

<div class="clear"></div>
</div>                                              <!--webpage  end-->
</body>
</html>