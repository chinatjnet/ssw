<?php /* Smarty version 2.6.26, created on 2011-05-24 13:02:45
         compiled from head_info.html */ ?>
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
               <div  class="content_block_title">头像展示</div>
               <div  class="info_main">

                 <div  id="head_info_content">
                    <b>当前我的头像</b><br>
                   <font>如果你还没有设置自己的头像，系统会显示为默认头像，你需要自己上传一张新照片来作为自己的个人头像。</font><br>
                   <img src="<?php echo $this->_tpl_vars['head_big']; ?>
" width="165" height="200"   class="head_now" /><img src="<?php echo $this->_tpl_vars['head_small']; ?>
" width="48" height="48" class="head_now_small" /><br>
                   <div style="clear:both;"></div>
                   <b>修改我的头像</b><br>
                   <font>请选择一个新照片进行上传编辑。</font><br>
                   <font>头像保存后，你需要<em  style="color:#093; font-style:normal; cursor:pointer;"  onclick="location.reload()">刷新</em>一下本页面(按F5键)，才能查看最新的头像效果。</font><br>
                    <font>你也可以选择：<em  onclick="useCamera()"  style="color:#093; font-style:normal; cursor:pointer;">用摄像头</em>拍大头贴</font><br>

	               <form enctype="multipart/form-data" method="post" name="upform" target="upload_target" action="<?php echo $this->_tpl_vars['admin_root']; ?>
/function/pic_cut/upload.php">

		              <input type="file" name="Filedata" id="Filedata"/>
		              <input style="margin-right:20px;" type="submit" name="" value="上传形象照" onclick="return checkFile();"   id="head_up"/>
                     <span style="visibility:hidden;" id="loading_gif">
                          <img src="../admin/function/pic_cut/loading.gif" align="absmiddle" />上传中，请稍侯......
                     </span>
		           </form>
		           <iframe src="about:blank" name="upload_target" style="display:none;"></iframe>
		           <div id="avatar_editor"></div>


<?php echo '
<script type="text/javascript">
		//允许上传的图片类型
		var extensions = \'jpg,jpeg,gif,png\';
		//保存缩略图的地址.
		var saveUrl =\'../admin/function/pic_cut/save_avatar.php\';//============
		//保存摄象头白摄图片的地址.
		var cameraPostUrl = \'../admin/function/pic_cut/camera.php\';//==================
		//头像编辑器flash的地址.
		var editorFlaPath = \'../admin/function/pic_cut/AvatarEditor.swf\';//===============
		//Download by http://www.codefans.net
		function useCamera()
		{
			var content = \'<embed height="464" width="514" \';
			content +=\'flashvars="type=camera\';
			content +=\'&postUrl=\'+cameraPostUrl+\'?&radom=1\';
			content += \'&saveUrl=\'+saveUrl+\'?radom=1" \';
			content +=\'pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" \';
			content +=\'allowscriptaccess="always" quality="high" \';
			content +=\'src="\'+editorFlaPath+\'"/>\';
			document.getElementById(\'avatar_editor\').innerHTML = content;
		}
		function buildAvatarEditor(pic_id,pic_path,post_type)
		{
			var content = \'<embed height="464" width="514"\';
			content+=\'flashvars="type=\'+post_type;
			content+=\'&photoUrl=\'+pic_path;
			content+=\'&photoId=\'+pic_id;
			content+=\'&postUrl=\'+cameraPostUrl+\'?&radom=1\';
			content+=\'&saveUrl=\'+saveUrl+\'?radom=1"\';
			content+=\' pluginspage="http://www.macromedia.com/go/getflashplayer"\';
			content+=\' type="application/x-shockwave-flash"\';
			content+=\' allowscriptaccess="always" quality="high" src="\'+editorFlaPath+\'"/>\';
			document.getElementById(\'avatar_editor\').innerHTML = content;
		}
			/**
			  * 提供给FLASH的接口 ： 没有摄像头时的回调方法
			  */
			 function noCamera(){
				 alert("俺是小狗, 俺没有camare ：）");
			 }

			/**
			 * 提供给FLASH的接口：编辑头像保存成功后的回调方法
			 */
			function avatarSaved(){
				alert(\'恭喜您，头像保存成功！\');
				//window.location.href = \'/profile.do\';
			}

			 /**
			  * 提供给FLASH的接口：编辑头像保存失败的回调方法, msg 是失败信息，可以不返回给用户, 仅作调试使用.
			  */
			 function avatarError(msg){
				 alert("出问题了，上传失败了呀！");
			 }

			 function checkFile()
			 {
				 var path = document.getElementById(\'Filedata\').value;
				 var ext = getExt(path);
				 var re = new RegExp("(^|\\\\s|,)" + ext + "($|\\\\s|,)", "ig");
				  if(extensions != \'\' && (re.exec(extensions) == null || ext == \'\')) {
				 alert(\'对不起，只能上传jpg, gif, png类型的图片\');
				 return false;
				 }
				 showLoading();
				 return true;
			 }

			 function getExt(path) {
				return path.lastIndexOf(\'.\') == -1 ? \'\' : path.substr(path.lastIndexOf(\'.\') + 1, path.length).toLowerCase();
			}
              function	showLoading()
			  {
				  document.getElementById(\'loading_gif\').style.visibility = \'visible\';
			  }
			  function hideLoading()
			  {
				document.getElementById(\'loading_gif\').style.visibility = \'hidden\';
			  }
</script>
'; ?>


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