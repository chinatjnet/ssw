<?php /* Smarty version 2.6.26, created on 2011-05-15 04:15:59
         compiled from photo_edit.html */ ?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>天骄天下-个人网站系统_SSW_V 1.0</title>

<link href="<?php echo $this->_tpl_vars['temp_dir']; ?>
/css/common.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['temp_dir']; ?>
/css/popup.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/js/common.js"></script>


<?php echo '

<script>
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


}
</script>
'; ?>



</head>
<body>
<div  id="popup_main">
    <div  class="popup_title">编辑相片信息</div>
    <div  id="head_tool">
        <input name="" type="checkbox" value=""  onclick="select_all(this.checked);"/><font>全选</font>
        <b  onclick="Get_id('batch_do').value='batch_update';document.photo_edit_list.submit();">更新信息</b>
        <b  onclick="CheckForm(this);Get_id('display').value='photo';Get_id('batch_do').value='batch_del';document.photo_edit_list.submit();">删除</b>
        <b  onclick="Get_id('batch_do').value='set_cover';check_set_cover();document.photo_edit_list.submit();">设为封面</b>
        <select name="jumpMenu2" id="top_jump" onchange="if(this.selectedIndex>0)Get_id('display').value='photo';Get_id('batch_do').value='chg_class';Get_id('chg_class_id').value=this.options[this.selectedIndex].value;document.photo_edit_list.submit();">
                <option value="" selected="selected" >更改分类</option>

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
      <div  class="clear"></div>
   </div>


   <div  class="sep_border"></div>

   <form action="index.php" method="post"  name="photo_edit_list">

    <INPUT TYPE=hidden NAME=display  VALUE="photo_edit"  id="display" style="visibility:hidden">
    <INPUT TYPE=hidden NAME=<?php echo $this->_tpl_vars['tool_do_name']; ?>
  VALUE="<?php echo $this->_tpl_vars['tool_do']; ?>
"   style="visibility:hidden">
    <input name="do" type="hidden"   id="batch_do" value="batch_del"  style="visibility:hidden"/>
    <input name="list_upid" type="hidden"   id="list_upid" value="<?php echo $this->_tpl_vars['list_upid']; ?>
"  style="visibility:hidden"/>
    <input name="class_id" type="hidden"   id="class_id" value="<?php echo $this->_tpl_vars['class_id']; ?>
"  style="visibility:hidden"/>
    <input name="cover_path" type="hidden"   id="cover_path" value=""  style="visibility:hidden"/>
    <input name="batch_show_type" type="hidden"   id="batch_show" value="0"   style="visibility:hidden"/>
    <input name="chg_class_id" type="hidden"   id="chg_class_id" value="0"   style="visibility:hidden"/>
    <INPUT TYPE=hidden NAME=update  VALUE="1"  id="list_upid" style="visibility:hidden">

    <ul  id="list_check">


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

       <li>

       <input name="photo_handle[]" type="checkbox"  value="<?php echo $this->_tpl_vars['photo_list'][$this->_sections['photo_list']['index']]['pid']; ?>
" title=<?php echo $this->_tpl_vars['photo_list'][$this->_sections['photo_list']['index']]['path']; ?>
  class="album_select"/>
       <input name="update_handle[]" type="hidden" value="<?php echo $this->_tpl_vars['photo_list'][$this->_sections['photo_list']['index']]['pid']; ?>
"   class="album_select"   style="visibility:hidden;"/>
       <a  href="#" title="<?php echo $this->_tpl_vars['photo_list'][$this->_sections['photo_list']['index']]['title']; ?>
"  style="<?php echo $this->_tpl_vars['photo_list'][$this->_sections['photo_list']['index']]['cover_class']; ?>
"><img src="<?php echo $this->_tpl_vars['photo_list'][$this->_sections['photo_list']['index']]['thumb_path']; ?>
" width="100" height="75" style="padding:5px  5px;" /></a>
       <span><b>相片描述</b>
       <textarea name="photo_title[]" cols="" rows=""  onfocus="this.style.border='#21759B  solid  1px'"  onblur="this.style.border='#A5ACB2  solid  1px'"><?php echo $this->_tpl_vars['photo_list'][$this->_sections['photo_list']['index']]['title']; ?>
</textarea>
       </span>
       </li>

       <div  class="sep_border"></div>

      <?php endfor; endif; ?>




    </ul>

    <div  id="bottom_tool">
        <input name="" type="checkbox" value=""  onclick="select_all(this.checked);"/><font>全选</font>
        <b  onclick="Get_id('batch_do').value='batch_update';document.photo_edit_list.submit();">更新信息</b>
        <b  onclick="CheckForm(this);Get_id('display').value='photo';Get_id('batch_do').value='batch_del';document.photo_edit_list.submit();">删除</b>
        <b  onclick="Get_id('batch_do').value='set_cover';check_set_cover();document.photo_edit_list.submit();">设为封面</b>

        <select name="jumpMenu2" id="top_jump" onchange="if(this.selectedIndex>0)Get_id('display').value='photo';Get_id('batch_do').value='chg_class';Get_id('chg_class_id').value=this.options[this.selectedIndex].value;document.photo_edit_list.submit();"  style=" background:url(<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/select_bg.gif)    repeat-x; border:1px  solid  #6D6D6D; color:#3C3C3C;padding:3px  0px; color:#333;margin-left:10px;">
                <option value="" selected="selected" >更改分类</option>

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

    </div>

<div  class="clear"></div>
</form>
<div  class="clear"></div>
</div>



</body>
</html>