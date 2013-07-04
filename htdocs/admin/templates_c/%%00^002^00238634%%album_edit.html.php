<?php /* Smarty version 2.6.26, created on 2011-05-14 08:04:35
         compiled from album_edit.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "site_head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!--site_head  *top and title END-->

<link href="<?php echo $this->_tpl_vars['temp_dir']; ?>
/css/common.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['temp_dir']; ?>
/css/popup.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/js/common.js"></script>
</head>
<body>
<div  id="popup_main">
    <div  class="popup_title">编辑相片信息</div>
    <div  id="head_tool">
        <input name="" type="checkbox" value=""  onclick="select_all(this.checked);"/><font>全选</font>
        <b  onclick="Get_id('batch_do').value='batch_update';document.album_list_edit.submit()">更新信息</b>
        <b  onclick="CheckForm(this);Get_id('display').value='album';Get_id('batch_do').value='batch_del';document.album_list_edit.submit()">删除</b>

    </div>


   <div  class="sep_border"></div>

   <form action="index.php?display=album_edit" method="POST"  name="album_list_edit">

     <input name="display" type="hidden"  value="album_edit" id="display"  style="visibility:hidden"/>
     <input name="do" type="hidden"   id="batch_do" value="batch_del"   style="visibility:hidden"/>
     <input name="batch_show_type" type="hidden"   id="batch_show" value="0"  style="visibility:hidden" />
     <INPUT TYPE=hidden NAME=list_upid  VALUE="<?php echo $this->_tpl_vars['list_upid']; ?>
"  id="list_upid" style="visibility:hidden">
     <INPUT TYPE=hidden NAME=update  VALUE="1"  id="list_upid" style="visibility:hidden">

   <ul  id="list_check">

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

       <li>
       <input name="album_handle[]" type="checkbox"   class="visitor_list_check" value="<?php echo $this->_tpl_vars['album_list'][$this->_sections['album_list']['index']]['classid']; ?>
" />
       <input name="update_handle[]" type="hidden" value="<?php echo $this->_tpl_vars['album_list'][$this->_sections['album_list']['index']]['classid']; ?>
"   class="album_select"   style="visibility:hidden;"/>
       <input name="album_exsist[]" type="hidden"   value="<?php echo $this->_tpl_vars['album_list'][$this->_sections['album_list']['index']]['album_exsist']; ?>
"  style="visibility:hidden" />
       <a  href="#" title="<?php echo $this->_tpl_vars['album_list'][$this->_sections['album_list']['index']]['album_name']; ?>
"><img src="<?php echo $this->_tpl_vars['album_list'][$this->_sections['album_list']['index']]['cover']; ?>
" width="100" height="75" /></a>
       <span><b>相册名称</b><input name="album_name[]" type="text" value="<?php echo $this->_tpl_vars['album_list'][$this->_sections['album_list']['index']]['album_name']; ?>
"  class="info_input"   onfocus="this.style.border='#21759B  solid  1px'"  onblur="this.style.border='#A5ACB2  solid  1px'"/></span>
       <span><b>隐私设置</b>
             <select name="album_show[]" id="top_jump">
                     <option value=""  >隐私设置</option>
                     <option value="5" <?php echo $this->_tpl_vars['album_list'][$this->_sections['album_list']['index']]['show_class5']; ?>
>密码访问</option>
                     <option value="3" <?php echo $this->_tpl_vars['album_list'][$this->_sections['album_list']['index']]['show_class3']; ?>
>所有可见</option>
                     <option value="2" <?php echo $this->_tpl_vars['album_list'][$this->_sections['album_list']['index']]['show_class2']; ?>
>好友可见</option>
                     <option value="1" <?php echo $this->_tpl_vars['album_list'][$this->_sections['album_list']['index']]['show_class1']; ?>
>情侣可见</option>
                     <option value="0" class="<?php echo $this->_tpl_vars['album_list'][$this->_sections['album_list']['index']]['show_class0']; ?>
">主人可见</option>
             </select>
       </span>
       <span><b>提示问题</b><input name="album_question[]" type="text" value="<?php echo $this->_tpl_vars['album_list'][$this->_sections['album_list']['index']]['question']; ?>
"  class="info_input"   onfocus="this.style.border='#21759B  solid  1px'"  onblur="this.style.border='#A5ACB2  solid  1px'"/></span>
       <span><b>密码答案</b><input name="album_answer[]" type="text"  value="<?php echo $this->_tpl_vars['album_list'][$this->_sections['album_list']['index']]['answer']; ?>
" class="info_input"   onfocus="this.style.border='#21759B  solid  1px'"  onblur="this.style.border='#A5ACB2  solid  1px'"/></span>
       </li>
       <div  class="sep_border"></div>

       <?php endfor; endif; ?>

   </ul>

    <div  id="bottom_tool">
        <input name="" type="checkbox" value=""  onclick="select_all(this.checked);"/><font>全选</font>
        <b  onclick="Get_id('batch_do').value='batch_update';document.album_list_edit.submit()">更新信息</b>
        <b  onclick="CheckForm(this);Get_id('batch_do').value='batch_del';document.album_edit.submit()">删除</b>

    </div>

<div  class="clear"></div>
</form>
<div  class="clear"></div>
</div>



</body>
</html>