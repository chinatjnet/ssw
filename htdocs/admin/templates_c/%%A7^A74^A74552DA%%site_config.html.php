<?php /* Smarty version 2.6.26, created on 2011-05-14 07:08:45
         compiled from site_config.html */ ?>
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
/images/system_center.png" width="31" height="34"   class="control_logo"/>
           <h1>系统配置</h1>
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
               <div  class="content_block_title">系统配置</div>
               <div  class="info_main">
                   <div  id="top_tool"  class="info_title"   style="border-bottom-style:dashed">
                   <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_system.gif" width="16" height="17" /> <b href="javascript:void(0);"  class="info_now">网站信息</b>
                   <div class="clear"></div>
                   </div>


                   <div  id="info_content">
                   <form  action="index.php?display=site_config" method="POST"  name="site_config">

                   <input name="display" type="hidden"  value="site_config" />
                   <input name="do" type="hidden"  value="update" />

                   <span  class="info_span"><b>网站Title</b>
                        <p>
                          <input name="title" type="text"  value="<?php echo $this->_tpl_vars['title']; ?>
" class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/>
                          <font style="margin-top:8px;">（显示在浏览器窗口标题）</font>
                        </p>
                   </span>

                   <span  class="info_span"><b>网站名称</b>
                        <p>
                           <input name="sitename" type="text"  value="<?php echo $this->_tpl_vars['sitename']; ?>
" class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/>
                          <font style="margin-top:8px;">（显示在其它地方）</font>
                        </p>
                   </span>

                   <span   class="info_span"><b>网站描述</b>
                         <p>
                          <textarea     name="description"  onfocus="this.style.border='#21759B  solid  1px'"  onblur="this.style.border='#A5ACB2  solid  1px'"   style="*margin-left:-40px;height:60px;"><?php echo $this->_tpl_vars['description']; ?>
</textarea>
                          <font style="margin-top:8px;">（Meta 的Description）</font>
                         </p>
                   </span>

                   <span  class="info_span"><b>Meta关键字</b>
                         <p><input name="keyword" type="text" value="<?php echo $this->_tpl_vars['keyword']; ?>
"  class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/>
                         <font style="margin-top:8px;">（Meta 的Keywords）</font>

                         </p>
                   </span>

                   <span  class="info_span"><b>网站URL</b>
                         <p><input name="url" type="text"  value="<?php echo $this->_tpl_vars['url']; ?>
"  class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/>
						 <font style="margin-top:8px;">（格式:http://www.sunsonworld.com）</font>
						 </p>
                   </span>

                   <span   class="info_span"><b>统计代码</b>
                         <p>
                          <textarea     name="statistic"    onfocus="this.style.border='#21759B  solid  1px'"  onblur="this.style.border='#A5ACB2  solid  1px'"   style="*margin-left:-40px;height:60px;"><?php echo $this->_tpl_vars['statistic']; ?>
</textarea>
                         </p>
                   </span>

                   <span   class="info_span"><b>访问权限</b>
                        <p>
                            <input type="radio" name="show" value="3" class="input_radio"   onclick="access_check()" <?php echo $this->_tpl_vars['show_3']; ?>
/><font><strong>所有可见</strong></font>
                            <input type="radio" name="show" value="5" class="input_radio"/  onclick="close_reason()" <?php echo $this->_tpl_vars['show_5']; ?>
><font><strong>关闭站点</strong></font>
                            <input type="radio" name="show" value="1" class="input_radio"/  onclick="access_check()" <?php echo $this->_tpl_vars['show_1']; ?>
><font><strong>情侣可见</strong></font>
                            <input type="radio" name="show" value="2" class="input_radio"/  onclick="access_check()" <?php echo $this->_tpl_vars['show_2']; ?>
><font><strong>好友可见</strong></font>
                            <input type="radio" name="show" value="6" class="input_radio"/  onclick="access_question()" <?php echo $this->_tpl_vars['show_6']; ?>
><font><strong>密码访问</strong></font>
                        </p>

                   </span>

<div  id="close_reason"  style="display:none;<?php echo $this->_tpl_vars['show_textarea_5']; ?>
">
                   <span   class="info_span"><b  style="color:#317FD5">站点关闭原因</b>
                         <p>
                          <textarea   name="closereason"  onfocus="this.style.border='#21759B  solid  1px'"  onblur="this.style.border='#A5ACB2  solid  1px'"   style="*margin-left:-40px;height:60px;"><?php echo $this->_tpl_vars['close_reason']; ?>
</textarea>
                         </p>
                   </span>
</div>

<div  id="access_question"  style="display:none;<?php echo $this->_tpl_vars['show_textarea_6']; ?>
">
                   <span  class="info_span"><b  style="color:#317FD5">访问问题</b>
                         <p><input name="question" type="text"  value="<?php echo $this->_tpl_vars['question']; ?>
"  class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/></p>
                   </span>
                   <span  class="info_span"><b  style="color:#317FD5">问题答案</b>
                         <p><input name="answer" type="text"  value="<?php echo $this->_tpl_vars['answer']; ?>
"  class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/></p>
                   </span>
</div>

                   <span   class="info_span"><b>情侣空间开启</b>
                        <p>
                            <input name="loverzone_on" type="radio" class="input_radio" value="1" <?php echo $this->_tpl_vars['loverzone_1']; ?>
   onclick="music_input_url()"/><font><strong>开启</strong></font>
                            <input type="radio" name="loverzone_on" value="0" class="input_radio"/   onclick="music_input_upload()" <?php echo $this->_tpl_vars['loverzone_0']; ?>
><font><strong>关闭</strong></font>
                        </p>

                   </span>

                   <span   class="info_span"><b>拟静态开启</b>
                        <p>
                            <input name="rewrite_on" type="radio" class="input_radio" value="1" <?php echo $this->_tpl_vars['rewrite_1']; ?>
  onclick="music_input_url()"/><font><strong>开启</strong></font>
                            <input type="radio" name="rewrite_on" value="0"  <?php echo $this->_tpl_vars['rewrite_0']; ?>
  class="input_radio"/   onclick="music_input_upload()"><font><strong>关闭</strong></font>
                        </p>

                   </span>
                   <span  class="info_span"><b>默认时差</b>
                         <p>

                           <select name="timezone"  id="time_zone"><option value="+8">使用系统默认</option>
                              <option value="-12">(GMT -12:00) 埃尼威托克岛, 夸贾林环礁</option>
                              <option value="-11">(GMT -11:00) 中途岛, 萨摩亚群岛</option>
                              <option value="-10">(GMT -10:00) 夏威夷</option>
                              <option value="-9">(GMT -09:00) 阿拉斯加</option>
                              <option value="-8">(GMT -08:00) 太平洋时间(美国和加拿大), 提华纳</option>
                              <option value="-7">(GMT -07:00) 山区时间(美国和加拿大), 亚利桑那</option>
                              <option value="-6">(GMT -06:00) 中部时间(美国和加拿大), 墨西哥城</option>
                              <option value="-5">(GMT -05:00) 东部时间(美国和加拿大), 利马, 基多</option>
                              <option value="-4">(GMT -04:00) 大西洋时间(加拿大), 加拉加斯, 拉巴斯</option>
                              <option value="-3.5">(GMT -03:30) 纽芬兰</option>
                              <option value="-3">(GMT -03:00) 巴西利亚, 布宜诺斯艾利斯, 福克兰群岛</option>
                              <option value="-2">(GMT -02:00) 中大西洋, 阿森松群岛, 圣赫勒拿岛</option>
                              <option value="-1">(GMT -01:00) 亚速群岛, 都柏林, 伦敦, 里斯本</option>
                              <option value="0">(GMT) 卡萨布兰卡，都柏林，爱丁堡，伦敦，里斯本</option>
                              <option value="+1">(GMT +01:00) 柏林, 布鲁塞尔,马德里, 巴黎, 罗马</option>
                              <option value="+2">(GMT +02:00) 赫尔辛基, 加里宁格勒, 南非, 华沙</option>
                              <option value="+3">(GMT +03:00) 巴格达, 利雅得, 莫斯科, 奈洛比</option>
                              <option value="+3.5">(GMT +03:30) 德黑兰</option>
                              <option value="+4">(GMT +04:00) 阿布扎比, 巴库, 马斯喀特, 特比利斯</option>
                              <option value="+4.5">(GMT +04:30) 坎布尔</option>
                              <option value="+5">(GMT +05:00) 叶卡特琳堡, 伊斯兰堡, 卡拉奇, 塔什干</option>
                              <option value="+5.5">(GMT +05:30) 孟买, 加尔各答, 马德拉斯, 新德里</option>
                              <option value="+5.75">(GMT +05:45) 加德满都</option>
                              <option value="+6">(GMT +06:00) 阿拉木图, 科伦坡, 达卡, 新西伯利亚</option>
                              <option value="+6.5">(GMT +06:30) 仰光</option>
                              <option value="+7">(GMT +07:00) 曼谷, 河内, 雅加达</option>
                              <option value="+8">(GMT +08:00) 北京, 香港, 新加坡, 台北</option>
                              <option value="+9">(GMT +09:00) 大阪, 札幌, 首尔, 东京, 雅库茨克</option>
                              <option value="+9.5">(GMT +09:30) 阿德莱德, 达尔文</option>
                              <option value="+10">(GMT +10:00) 堪培拉, 关岛, 墨尔本, 悉尼, 海参崴</option>
                              <option value="+11">(GMT +11:00) 马加丹, 新喀里多尼亚, 所罗门群岛</option>
                              <option value="+12">(GMT +12:00) 奥克兰, 惠灵顿, 斐济, 马绍尔群岛</option>
                           </select>

                         </p>
                   </span>


                   <span   class="info_span"><b></b>
                        <p></p>
                   </span>


                   <span   class="info_span"><b></b>
                        <p><b  onclick="document.site_config.submit()">提交更新</b></p>
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