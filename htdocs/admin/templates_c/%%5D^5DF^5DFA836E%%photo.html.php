<?php /* Smarty version 2.6.26, created on 2011-05-17 09:57:58
         compiled from photo.html */ ?>
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
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['temp_dir']; ?>
/css/jquery.fancybox-1.3.4.css" media="screen" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/js/common.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/js/jquery.min.js"></script>
<?php echo '
<script>
		!window.jQuery && document.write(\'<script src="{$temp_dir}/js/jquery-1.4.3.min.js"><\\/script>\');
</script>
'; ?>

<script type="text/javascript" src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/js/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/js/jquery.fancybox-1.3.4.pack.js"></script>
</head>
<?php echo '

<script>
function checkbox()
{
var str=document.getElementsByName("photo_handle[]");
var list_upid=document.getElementById("list_upid").value;
var class_id=document.getElementById("class_id").value;
var objarray=str.length;
var chestr="";
var edit_a=document.getElementById("photo_edit");
for (i=0;i<objarray;i++)
{
  if(str[i].checked == true)
  {
   chestr+="&photo_handle%5B%5D="+str[i].value;

  }
}
if(chestr == "")
{
edit_a.href="index.php?display=photo_edit";

}
else
{
  edit_a.href="index.php?display=photo_edit&do=batch_edit&list_upid="+list_upid+"&class_id="+class_id+chestr;
 // alert(edit_a.href);
  //alert("您先择的是："+edit_a.href+"");
}
}


function check_set_cover(){

var str=document.getElementsByName("photo_handle[]");
var cover_path=document.getElementById("cover_path");

var j=0;
for (i=0;i<str.length;i++)
{
  if(str[i].checked == true)
  {
   j+=1;
  cover_path.value=str[i].title;
  }
}

if(j==0){
  alert("请选择一张图片作为封面.")
  window.stop();
}

if(j>1){
  alert("只能选择一张图片作为封面，请重新挑选。")
  window.stop();
}



//alert(cover_path.value);
}
</script>




<script type="text/javascript">
		$(document).ready(function() {
			/*
			*   Examples - images
			*/


			$("a[rel=example_group]").fancybox({

				\'titlePosition\'	        : \'inside\',
				\'titleFormat\'		: function(title, currentArray, currentIndex, currentOpts) {
					return \'<span id="fancybox-title-over"  style="">[\' + (currentIndex + 1) + \' / \' + currentArray.length+\']\'+(title.length ? " &nbsp; " + title : "") + \'</span>\';
				}
			});
			var  winWidth = document.body.clientWidth;
			var  winHeight = document.body.clientHeight;
			var  width_p=(850/winWidth)*100+"%";
			var  heidht_p=300/winHeight;
			//alert(width_p);
			$("#photo_edit").fancybox({
				\'width\'				: width_p,
				\'height\'			: \'75%\',
				\'autoScale\'			: false,
				\'transitionIn\'		: \'none\',
				\'transitionOut\'		: \'none\',
				\'type\'				: \'iframe\'
			});

			/*
			*   Examples - various
			*/


		});
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
/images/photo_center.png" width="31" height="34"   class="control_logo"/>
           <h1>相片列表</h1>
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
               <div  class="content_block_title">相片列表</div>
               <div  class="content_block_main">
                        <span  class="tool_info"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_pic.gif" width="16" height="17" /><b><?php echo $this->_tpl_vars['album_name']; ?>
</b><?php echo $this->_tpl_vars['pic_num']; ?>
张
                        </span>
                        <span  class="tool_bar">
                             <form action="" method="get">
                                   <input name="input" type="checkbox" value=""   onclick="select_all(this.checked);"/>全选
                                   <label>
                                     <input type="button" name="shield" id="add"  onclick="window.location.href='index.php?display=photo_add&list_upid=<?php echo $this->_tpl_vars['list_upid']; ?>
'"    value="  上传相片"/>
                                     <input type="button" name="button" id="del"  onclick="CheckForm(this);Get_id('batch_do').value='batch_del';document.photo_list_handle.submit();" value="  删除所选"/>
                                     <a  style="color:#317FD5">移动相片至</a>
                                     <select name="jumpMenu2" id="top_jump" onchange="if(this.selectedIndex>0)Get_id('batch_do').value='chg_class';Get_id('chg_class_id').value=this.options[this.selectedIndex].value;document.photo_list_handle.submit();">
                                          <option value="" selected="selected" >相册分类</option>

                                          <?php unset($this->_sections['album_list']);
$this->_sections['album_list']['name'] = 'album_list';
$this->_sections['album_list']['loop'] = is_array($_loop=$this->_tpl_vars['album_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['album_list']['show'] = true;
$this->_sections['album_list']['max'] = $this->_sections['album_list']['loop'];
$this->_sections['album_list']['step'] = 1;
$this->_sections['album_list']['start'] = $this->_sections['album_list']['step'] > 0 ? 0 : $this->_sections['album_list']['loop']-1;
if ($this->_sections['album_list']['show']) {
    $this->_sections['album_list']['total'] = $this->_sections['album_list']['loop'];
    if ($this->_sections['album_list']['total'] == 0)
        $this->_sections['album_list']['show'] = false;
} else
    $this->_sections['album_list']['total'] = 0;
if ($this->_sections['album_list']['show']):

            for ($this->_sections['album_list']['index'] = $this->_sections['album_list']['start'], $this->_sections['album_list']['iteration'] = 1;
                 $this->_sections['album_list']['iteration'] <= $this->_sections['album_list']['total'];
                 $this->_sections['album_list']['index'] += $this->_sections['album_list']['step'], $this->_sections['album_list']['iteration']++):
$this->_sections['album_list']['rownum'] = $this->_sections['album_list']['iteration'];
$this->_sections['album_list']['index_prev'] = $this->_sections['album_list']['index'] - $this->_sections['album_list']['step'];
$this->_sections['album_list']['index_next'] = $this->_sections['album_list']['index'] + $this->_sections['album_list']['step'];
$this->_sections['album_list']['first']      = ($this->_sections['album_list']['iteration'] == 1);
$this->_sections['album_list']['last']       = ($this->_sections['album_list']['iteration'] == $this->_sections['album_list']['total']);
?>

                                          <option value="<?php echo $this->_tpl_vars['album_list'][$this->_sections['album_list']['index']]['classid']; ?>
"><?php echo $this->_tpl_vars['album_list'][$this->_sections['album_list']['index']]['classname']; ?>
</option>

                                          <?php endfor; endif; ?>

                                    </select>
                                   </label>
                             </form>
                        </span>
                        <div  class="sep_border"></div>
                        <span  class="tool_clsss">
                        <b><a>其他操作</a></b><h4>：</h4><a  href="javascript:void(0);" onclick="edit_photo();">【显示操作】</a><h4></h4>
                        <a href="" id="photo_edit"   onclick="checkbox();" >编辑相片信息</a><h4></h4>
                        <a style="cursor:pointer"  onclick="Get_id('batch_do').value='set_cover';Get_id('display').value='photo_edit';check_set_cover();document.photo_list_handle.submit();">设为封面</a><h4></h4>
                        <a href="index.php?display=album&list_upid=<?php echo $this->_tpl_vars['list_upid']; ?>
">&laquo;返回相册列表</a>
                        </span>
                        <div  class="sep_border"></div>

             </div>
           <div class="clear"></div>
           </div>



           <div  class="content_block   latest_act   resource_list   photo_list"     id="list_check">

               <div  class="content_block_main">
                  <form action="index.php" method="POST"  name="photo_list_handle">
                  <INPUT TYPE=hidden NAME=display  VALUE="photo" id="display"  style="visibility:hidden">
                  <INPUT TYPE=hidden NAME=list_upid  VALUE="<?php echo $this->_tpl_vars['list_upid']; ?>
"  id="list_upid" style="visibility:hidden">
                  <INPUT TYPE=hidden NAME=class_id  VALUE="<?php echo $this->_tpl_vars['class_id']; ?>
" id="class_id"  style="visibility:hidden">
                  <INPUT TYPE=hidden NAME=do_id  VALUE="<?php echo $this->_tpl_vars['do_id']; ?>
"   style="visibility:hidden">
                  <input name="do" type="hidden"   id="batch_do" value="batch_del"  style="visibility:hidden"/>
                  <input name="cover_path" type="hidden"   id="cover_path" value=""  style="visibility:hidden"/>
                  <input name="chg_class_id" type="hidden"   id="chg_class_id" value="0"   style="visibility:hidden"/>


                  <ul>
                       <li>

                       <?php unset($this->_sections['photo_list']);
$this->_sections['photo_list']['name'] = 'photo_list';
$this->_sections['photo_list']['loop'] = is_array($_loop=$this->_tpl_vars['photo_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['photo_list']['show'] = true;
$this->_sections['photo_list']['max'] = $this->_sections['photo_list']['loop'];
$this->_sections['photo_list']['step'] = 1;
$this->_sections['photo_list']['start'] = $this->_sections['photo_list']['step'] > 0 ? 0 : $this->_sections['photo_list']['loop']-1;
if ($this->_sections['photo_list']['show']) {
    $this->_sections['photo_list']['total'] = $this->_sections['photo_list']['loop'];
    if ($this->_sections['photo_list']['total'] == 0)
        $this->_sections['photo_list']['show'] = false;
} else
    $this->_sections['photo_list']['total'] = 0;
if ($this->_sections['photo_list']['show']):

            for ($this->_sections['photo_list']['index'] = $this->_sections['photo_list']['start'], $this->_sections['photo_list']['iteration'] = 1;
                 $this->_sections['photo_list']['iteration'] <= $this->_sections['photo_list']['total'];
                 $this->_sections['photo_list']['index'] += $this->_sections['photo_list']['step'], $this->_sections['photo_list']['iteration']++):
$this->_sections['photo_list']['rownum'] = $this->_sections['photo_list']['iteration'];
$this->_sections['photo_list']['index_prev'] = $this->_sections['photo_list']['index'] - $this->_sections['photo_list']['step'];
$this->_sections['photo_list']['index_next'] = $this->_sections['photo_list']['index'] + $this->_sections['photo_list']['step'];
$this->_sections['photo_list']['first']      = ($this->_sections['photo_list']['iteration'] == 1);
$this->_sections['photo_list']['last']       = ($this->_sections['photo_list']['iteration'] == $this->_sections['photo_list']['total']);
?>

                       <div   class="photo_box">
                       <input name="photo_handle[]" type="checkbox"   class="visitor_list_check"  value="<?php echo $this->_tpl_vars['photo_list'][$this->_sections['photo_list']['index']]['pid']; ?>
"  title="<?php echo $this->_tpl_vars['photo_list'][$this->_sections['photo_list']['index']]['cover_path']; ?>
" style="visibility:hidden" />
                       <input name="photo_path[<?php echo $this->_tpl_vars['photo_list'][$this->_sections['photo_list']['index']]['pid']; ?>
]" type="hidden"  value="<?php echo $this->_tpl_vars['photo_list'][$this->_sections['photo_list']['index']]['cover_path']; ?>
"style="visibility:hidden;" />
                       <a  rel="example_group" href="<?php echo $this->_tpl_vars['photo_list'][$this->_sections['photo_list']['index']]['path']; ?>
" title="<?php echo $this->_tpl_vars['photo_list'][$this->_sections['photo_list']['index']]['title']; ?>
" ><img src="<?php echo $this->_tpl_vars['photo_list'][$this->_sections['photo_list']['index']]['thumb_path']; ?>
" width="100" height="75"  class="<?php echo $this->_tpl_vars['photo_list'][$this->_sections['photo_list']['index']]['cover_class']; ?>
"/></a><font><?php echo $this->_tpl_vars['photo_list'][$this->_sections['photo_list']['index']]['title_sub']; ?>
</font>
                       </div>

                       <?php endfor; endif; ?>


                       </li>







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

<!--site_foot start-->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "site_foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!--site_foot  END-->