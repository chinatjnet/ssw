<?php /* Smarty version 2.6.26, created on 2011-05-15 09:28:58
         compiled from self_info.html */ ?>
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
/js/PopupCalendar.js" ></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/js/Pro_City.js" ></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/js/self_info_change.js"></script>
<script charset="utf-8" src="<?php echo $this->_tpl_vars['admin_root']; ?>
/function/editor/kindeditor.js"></script>
</head>

<?php echo '


		<script>
			KE.show({
				id : \'textarea_uniqsign\',
				resizeMode : 1,

				newlineTag : \'br\',
			    imageUploadJson : \'../../upload_json.php\',
			    fileManagerJson : \'../../file_manager_json.php\',
			    allowFileManager : true,
				allowUpload: true,
				allowPreviewEmoticons : false,

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
                   <a href="javascript:void(0);"  class="info_now"  onclick="location.reload();" >基本资料</a>
                   <a href="javascript:void(0);"  class=""  onclick="dynamic_change('index.php?display=self_info','contact_info',1);">联系方式</a>
                   <a href="javascript:void(0);"  class=""  onclick="dynamic_change('index.php?display=self_info','edu_info',2)">教育工作</a>
                   <a href="javascript:void(0);"  class=""  onclick="dynamic_change('index.php?display=self_info','hobby_info',3)">兴趣爱好</a>
                   <div class="clear"></div>
                   </div>


                   <div  id="info_content">
                   <form action="index.php?display=self_info" method="POST"  name="selfinfo_edit"   class="info_form">

                   <INPUT TYPE=hidden NAME=display  VALUE="self_info">
                   <INPUT TYPE=hidden NAME=do  VALUE="basic_info">

                   <span  class="info_span"><b>用户昵称</b>
                        <p>
                          <input name="nickname" type="text"  value="<?php echo $this->_tpl_vars['nickname']; ?>
"  class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/>
                        </p>
                         <select name="selfinfo_show[]" >
                             <option value="3" <?php echo $this->_tpl_vars['show_class1_3']; ?>
>所有可见</option>
                             <option value="2" <?php echo $this->_tpl_vars['show_class1_2']; ?>
>好友可见</option>
                             <option value="1" <?php echo $this->_tpl_vars['show_class1_1']; ?>
>情侣可见</option>
                             <option value="0" <?php echo $this->_tpl_vars['show_class1_0']; ?>
>主人可见</option>
                         </select>
                   </span>

                   <span  class="info_span"><b>真实姓名</b>
                   <p><input name="truename" type="text" value="<?php echo $this->_tpl_vars['truename']; ?>
"  class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/></p>
                         <select name="selfinfo_show[]">
                             <option value="3" <?php echo $this->_tpl_vars['show_class2_3']; ?>
>所有可见</option>
                             <option value="2" <?php echo $this->_tpl_vars['show_class2_2']; ?>
>好友可见</option>
                             <option value="1" <?php echo $this->_tpl_vars['show_class2_1']; ?>
>情侣可见</option>
                             <option value="0" <?php echo $this->_tpl_vars['show_class2_0']; ?>
>主人可见</option>
                         </select>
                   </span>

                   <span  class="info_span"><b>性别</b>
                         <p><select name="sex">
                             <option value="male" <?php echo $this->_tpl_vars['sex_class_male']; ?>
 >男</option>
                             <option value="female" <?php echo $this->_tpl_vars['sex_class_female']; ?>
>女</option>
                         </select>
                         </p>
                         <select name="selfinfo_show[]" >
                             <option value="3" <?php echo $this->_tpl_vars['show_class3_3']; ?>
>所有可见</option>
                             <option value="2" <?php echo $this->_tpl_vars['show_class3_2']; ?>
>好友可见</option>
                             <option value="1" <?php echo $this->_tpl_vars['show_class3_1']; ?>
>情侣可见</option>
                             <option value="0" <?php echo $this->_tpl_vars['show_class3_0']; ?>
>主人可见</option>
                         </select>
                   </span>

                   <span  class="info_span"><b>出生日期</b>
                         <p><input name="birthday" type="text" value="<?php echo $this->_tpl_vars['birthday']; ?>
"  class="text_input"  onClick="getDateString(this,oCalendarChs)"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'" /><font>(格式：2011-03-07)</font></p>
                         <select name="selfinfo_show[]" >
                             <option value="3" <?php echo $this->_tpl_vars['show_class4_3']; ?>
>所有可见</option>
                             <option value="2" <?php echo $this->_tpl_vars['show_class4_2']; ?>
>好友可见</option>
                             <option value="1" <?php echo $this->_tpl_vars['show_class4_1']; ?>
>情侣可见</option>
                             <option value="0" <?php echo $this->_tpl_vars['show_class4_0']; ?>
>主人可见</option>
                         </select>
                   </span>
                   <span   class="info_span"><b>出生城市</b>
                         <p  onclick="inti(0)">
                           <select name=birth_pro id="azone"  class="area_pro" onChange="this.value=this.options[this.selectedIndex].value;altcls();inps.value=optn.options[0].value;">
                              <option value="选择省份" disabled="disabled">选择省份</option>
                           </select>
                           <select name=birth_city  id="cls" onChange="if(this.options[0].text!='选择城区')inps.value=this.options[this.selectedIndex].value;">
                              <option value=0>选择城区</option>
                           </select>
                           <input type="text"  id="inps" name="inps" size="5" value="" onkeyup="if(this.value.length>1)inti(0);findarea();"  class="area_code">
                         <font style="margin-top:5px;color:#2C76C3">已选择：<?php echo $this->_tpl_vars['birthplace']; ?>
</font>
                         </p>
                         <select name="selfinfo_show[]" >
                             <option value="3" <?php echo $this->_tpl_vars['show_class5_3']; ?>
>所有可见</option>
                             <option value="2" <?php echo $this->_tpl_vars['show_class5_2']; ?>
>好友可见</option>
                             <option value="1" <?php echo $this->_tpl_vars['show_class5_1']; ?>
>情侣可见</option>
                             <option value="0" <?php echo $this->_tpl_vars['show_class5_0']; ?>
>主人可见</option>
                         </select>
                   </span>
                   <span   class="info_span"><b>现居城市</b>
                         <p  onclick="inti(1)">
                           <select name=now_pro  id="azone1"  class="area_pro" onChange="this.value=this.options[this.selectedIndex].value;altcls();inps.value=optn.options[0].value;">
                             <option value="选择省份" disabled="disabled">选择省份</option>
                           </select>
                           <select name=now_city  id="cls1" onChange="if(this.options[0].text!='选择城区')inps.value=this.options[this.selectedIndex].value;">
                              <!--<option value=0>选择城区</option>-->
                           </select>
                           <input type="text" id="inps1" name="inps" size="5" value="" onkeyup="if(this.value.length>1)inti(1);findarea();"  class="area_code">
                           <font style="margin-top:5px;color:#2C76C3">已选择：<?php echo $this->_tpl_vars['nowplace']; ?>
</font>
                         </p>
                   <select name="selfinfo_show[]" >
                             <option value="3" <?php echo $this->_tpl_vars['show_class6_3']; ?>
>所有可见</option>
                             <option value="2" <?php echo $this->_tpl_vars['show_class6_2']; ?>
>好友可见</option>
                             <option value="1" <?php echo $this->_tpl_vars['show_class6_1']; ?>
>情侣可见</option>
                             <option value="0" <?php echo $this->_tpl_vars['show_class6_0']; ?>
>主人可见</option>
                   </select>
                   </span>

                   <span   class="info_span"><b>情感状态</b>
                        <p>

                            <input type="radio" name="lovestate" value="1" class="input_radio" <?php echo $this->_tpl_vars['lovestate_class_1']; ?>
/><font>单身</font>
                            <input type="radio" name="lovestate" value="2" class="input_radio" <?php echo $this->_tpl_vars['lovestate_class_2']; ?>
/><font>热恋</font>
                            <input type="radio" name="lovestate" value="3" class="input_radio" <?php echo $this->_tpl_vars['lovestate_class_3']; ?>
/><font>已婚</font>
                            <input type="radio" name="lovestate" value="4" class="input_radio" <?php echo $this->_tpl_vars['lovestate_class_4']; ?>
/><font>离异</font>
                            <input type="radio" name="lovestate" value="5" class="input_radio" <?php echo $this->_tpl_vars['lovestate_class_5']; ?>
/><font>保密</font>
                        </p>
                        <select name="selfinfo_show[]" >
                             <option value="3" <?php echo $this->_tpl_vars['show_class7_3']; ?>
>所有可见</option>
                             <option value="2" <?php echo $this->_tpl_vars['show_class7_2']; ?>
>好友可见</option>
                             <option value="1" <?php echo $this->_tpl_vars['show_class7_1']; ?>
>情侣可见</option>
                             <option value="0" <?php echo $this->_tpl_vars['show_class7_0']; ?>
>主人可见</option>
                       </select>

                   </span>


                   <span   class="info_span"><b>血型</b>
                        <p>

                            <input type="radio" name="bloodtype" value="A" class="input_radio" <?php echo $this->_tpl_vars['bloodtype_class_A']; ?>
/><font>A</font>
                            <input type="radio" name="bloodtype" value="B" class="input_radio" <?php echo $this->_tpl_vars['bloodtype_class_B']; ?>
 /><font>B</font>
                            <input type="radio" name="bloodtype" value="O" class="input_radio" <?php echo $this->_tpl_vars['bloodtype_class_O']; ?>
/><font>O</font>
                            <input type="radio" name="bloodtype" value="AB" class="input_radio" <?php echo $this->_tpl_vars['bloodtype_class_AB']; ?>
/><font>AB</font>
                            <input type="radio" name="bloodtype" value="other" class="input_radio" <?php echo $this->_tpl_vars['bloodtype_class_other']; ?>
/><font>其它</font>
                        </p>
                        <select name="selfinfo_show[]" >
                             <option value="3" <?php echo $this->_tpl_vars['show_class8_3']; ?>
>所有可见</option>
                             <option value="2" <?php echo $this->_tpl_vars['show_class8_2']; ?>
>好友可见</option>
                             <option value="1" <?php echo $this->_tpl_vars['show_class8_1']; ?>
>情侣可见</option>
                             <option value="0" <?php echo $this->_tpl_vars['show_class8_0']; ?>
>主人可见</option>
                       </select>

                   </span>


                   <span   class="info_span"><b>个性签名</b>
                         <p>
                         <textarea  id="textarea_uniqsign"  name="uniqsign"><?php echo $this->_tpl_vars['uniqsign']; ?>
</textarea>
                         </p>
                        <select name="selfinfo_show[]" >
                             <option value="3" <?php echo $this->_tpl_vars['show_class9_3']; ?>
>所有可见</option>
                             <option value="2" <?php echo $this->_tpl_vars['show_class9_2']; ?>
>好友可见</option>
                             <option value="1" <?php echo $this->_tpl_vars['show_class9_1']; ?>
>情侣可见</option>
                             <option value="0" <?php echo $this->_tpl_vars['show_class9_0']; ?>
>主人可见</option>
                         </select>
                   </span>
                   <span  class="info_span"><b>个人说明</b>
                         <p>
                           <textarea  id="textarea_self_intro"  name="selfintro"><?php echo $this->_tpl_vars['selfintro']; ?>
</textarea>
                         </p>
                         <select name="selfinfo_show[]" >
                             <option value="3" <?php echo $this->_tpl_vars['show_class10_3']; ?>
>所有可见</option>
                             <option value="2" <?php echo $this->_tpl_vars['show_class10_2']; ?>
>好友可见</option>
                             <option value="1" <?php echo $this->_tpl_vars['show_class10_1']; ?>
>情侣可见</option>
                             <option value="0" <?php echo $this->_tpl_vars['show_class10_0']; ?>
>主人可见</option>
                         </select>
                   </span>

                   <span  class="info_span"><b>个人主页</b>
                        <p> <input name="ownpage" type="text"  value="<?php echo $this->_tpl_vars['ownpage']; ?>
"   class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/></p>
                         <select name="selfinfo_show[]" >
                             <option value="3" <?php echo $this->_tpl_vars['show_class11_3']; ?>
>所有可见</option>
                             <option value="2" <?php echo $this->_tpl_vars['show_class11_2']; ?>
>好友可见</option>
                             <option value="1" <?php echo $this->_tpl_vars['show_class11_1']; ?>
>情侣可见</option>
                             <option value="0" <?php echo $this->_tpl_vars['show_class11_0']; ?>
>主人可见</option>
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

<!--site_foot start-->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "site_foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!--site_foot  END-->