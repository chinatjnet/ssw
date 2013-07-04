<?php /* Smarty version 2.6.26, created on 2011-05-19 08:42:26
         compiled from friend.html */ ?>
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
<script charset="utf-8" src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/editor/kindeditor.js"></script>

</head>

<?php echo '

<script>

function class_edit(s){
   var edit_obj=Get_id(\'class_edit\'+s);
   var replace_var=\'<input name="edit_input"  id="edit_input\'+s+\'" type="text"  value="\'+edit_obj.innerHTML+\'"     onfocus="this.style.border=\\\'#21759B  solid  1px\\\'"   onblur="this.style.border=\\\'#A5ACB2  solid  1px\\\'"/>\';

   edit_obj.innerHTML=replace_var;
   //alert(edit_obj.innerHTML);
}

function edit_location(m){

  var obj=Get_id(\'edit_input\'+m);
  var href_str="index.php?display=friend&do=edit&do_id="+m+"&edit_classname="+encodeURI(Get_id(\'edit_input\'+m).value);
  var location_a=Get_id(\'edit_a\'+m);
      location_a.href=href_str;

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
/images/friend_center.png" width="31" height="34"   class="control_logo"/>
           <h1>好友管理</h1>
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

        <div  class="content_block   main_tool">
               <div  class="content_block_title">好友列表</div>
               <div  class="content_block_main">
                        <span  class="tool_info">
                        <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_visitor.gif" width="16" height="17" />
                        &nbsp;&nbsp;<b>共有好友</b>890&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#friend_add"   class="popup  tooltip"  title="请确保您与您的好友使用的都是本网站系统"   rel="width:460;height:240"><b>[&nbsp;添加好友&nbsp;]</b></a>&nbsp;&nbsp;
                        <a href="#friend_class_manage"   class="popup"   rel="width:500;height:240"><b>[&nbsp;好友分类管理&nbsp;]</b></a>
                        </span>



                        <div  style="display:none">
                        <span  id="friend_add" >

                        <form action="index.php?display=friend" method="POST">

                        <input name="display" type="hidden"  value="friend" />
                        <input name="do" type="hidden"   value="add_new_friend" />


                            <b>好友主页地址</b>
                            <input name="new_friend_website" type="text"   class="article_title"    onfocus="this.style.border='#21759B  solid  1px'"  onblur="this.style.border='#A5ACB2  solid  1px'"/><br>
                            <b>好友请求留言</b>
                            <textarea name="new_add_reason" cols="" rows=""  onfocus="this.style.border='#21759B  solid  1px'"  onblur="this.style.border='#A5ACB2  solid  1px'"></textarea><br>

                            <input type="submit" name="shield"   class="article_act"  value="发送请求" />


                        </form>
                        </span>

                        <span  id="friend_class_manage" >

                        <form  action="index.php?display=friend" method="POST" name="add_class"  style="padding-left:15px;">

                           <input name="display" type="hidden"  value="friend" />
                           <input name="location_url" type="hidden"  value="<?php echo $this->_tpl_vars['location_url']; ?>
" />
                           <input name="do" type="hidden"   value="add_class" />

                            <b>分类名称：</b>
                            <input name="new_classname" type="text"   class="article_title" style="width:240px;margin-right:20px;"   onfocus="this.style.border='#21759B  solid  1px'"  onblur="this.style.border='#A5ACB2  solid  1px'"/>
                            <input type="submit" name="add_newclass"   class="article_act"  value="新建分类"  /><br><br>
                            <b>分类管理：</b>

                            <?php unset($this->_sections['friend_class_list']);
$this->_sections['friend_class_list']['name'] = 'friend_class_list';
$this->_sections['friend_class_list']['loop'] = is_array($_loop=$this->_tpl_vars['friend_class_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['friend_class_list']['show'] = true;
$this->_sections['friend_class_list']['max'] = $this->_sections['friend_class_list']['loop'];
$this->_sections['friend_class_list']['step'] = 1;
$this->_sections['friend_class_list']['start'] = $this->_sections['friend_class_list']['step'] > 0 ? 0 : $this->_sections['friend_class_list']['loop']-1;
if ($this->_sections['friend_class_list']['show']) {
    $this->_sections['friend_class_list']['total'] = $this->_sections['friend_class_list']['loop'];
    if ($this->_sections['friend_class_list']['total'] == 0)
        $this->_sections['friend_class_list']['show'] = false;
} else
    $this->_sections['friend_class_list']['total'] = 0;
if ($this->_sections['friend_class_list']['show']):

            for ($this->_sections['friend_class_list']['index'] = $this->_sections['friend_class_list']['start'], $this->_sections['friend_class_list']['iteration'] = 1;
                 $this->_sections['friend_class_list']['iteration'] <= $this->_sections['friend_class_list']['total'];
                 $this->_sections['friend_class_list']['index'] += $this->_sections['friend_class_list']['step'], $this->_sections['friend_class_list']['iteration']++):
$this->_sections['friend_class_list']['rownum'] = $this->_sections['friend_class_list']['iteration'];
$this->_sections['friend_class_list']['index_prev'] = $this->_sections['friend_class_list']['index'] - $this->_sections['friend_class_list']['step'];
$this->_sections['friend_class_list']['index_next'] = $this->_sections['friend_class_list']['index'] + $this->_sections['friend_class_list']['step'];
$this->_sections['friend_class_list']['first']      = ($this->_sections['friend_class_list']['iteration'] == 1);
$this->_sections['friend_class_list']['last']       = ($this->_sections['friend_class_list']['iteration'] == $this->_sections['friend_class_list']['total']);
?>

                            <font>
							   <b  id="class_edit<?php echo $this->_tpl_vars['friend_class_list'][$this->_sections['friend_class_list']['index']]['classid']; ?>
"><?php echo $this->_tpl_vars['friend_class_list'][$this->_sections['friend_class_list']['index']]['classname']; ?>
</b>
							   <a href="javascript:void(0);"  id="edit_a<?php echo $this->_tpl_vars['friend_class_list'][$this->_sections['friend_class_list']['index']]['classid']; ?>
"  onclick="class_edit('<?php echo $this->_tpl_vars['friend_class_list'][$this->_sections['friend_class_list']['index']]['classid']; ?>
');this.innerHTML='提交更改';this.style.lineHeight='40px';this.onclick=function()<?php echo '{'; ?>
edit_location('<?php echo $this->_tpl_vars['friend_class_list'][$this->_sections['friend_class_list']['index']]['classid']; ?>
');<?php echo '}'; ?>
">编辑</a>
							   <a href="javascript:void(0);" onclick="CheckForm(this);location.href='index.php?display=friend&do=del&do_id=<?php echo $this->_tpl_vars['friend_class_list'][$this->_sections['friend_class_list']['index']]['classid']; ?>
'">删除</a>
							</font>

							<?php endfor; endif; ?>

                            <div class="clear" style="padding-bottom:30px;"></div>
                        </form>

                        </span>


                        <span  id="friend_edit_note" >

                        <form action="index.php?display=friend" name="friend_edit_note"  method="POST" style="padding-left:15px;">

                        <input name="display" type="hidden"  value="friend" />
                        <input name="do" type="hidden"   value="edit_note" />
                        <input name="do_id" type="hidden" id="do_id"  value="edit_note" />

                            <br>
                            <b>好友昵称：</b><em style="font-style:normal" id="edit_name">天之骄子</em><br>
                            <b>备注名称：</b>
                            <input name="edit_notename" type="text" value="张洋" id="edit_notename"  class="article_title"    onfocus="this.style.border='#21759B  solid  1px'"  onblur="this.style.border='#A5ACB2  solid  1px'"/><br>

                            <input type="submit" name="shield"   class="article_act"  value="提交修改"  />


                        </form>
                        </span>



                        </div>




                        <span  class="tool_bar">
                             <form action="" method="get">
                                   <input name="" type="checkbox" value=""  onclick="select_all(this.checked);"/>全选
                                   <label>
                                     <input type="submit" name="shield" id="add" value="  打个招呼"/>
                                     <input type="button" name="button" id="del"  <?php echo $this->_tpl_vars['request_class']; ?>
"  onclick="CheckForm(this);Get_id('batch_do').value='batch_del';document.friend_list_handle.submit();"   value="  删除好友"/>
                                   </label>

                                  <select name="jumpMenu2" id="top_jump" <?php echo $this->_tpl_vars['request_class']; ?>
 onchange="if(this.selectedIndex>-1)Get_id('batch_do').value='batch_chg_class';Get_id('chg_classid').value=this.options[this.selectedIndex].value;document.friend_list_handle.submit();">

                                  <option value="0"  selected="selected" >移动<?php echo $this->_tpl_vars['request_top_button_str']; ?>
至</option>
                                  <?php unset($this->_sections['friend_class_list']);
$this->_sections['friend_class_list']['name'] = 'friend_class_list';
$this->_sections['friend_class_list']['loop'] = is_array($_loop=$this->_tpl_vars['friend_class_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['friend_class_list']['show'] = true;
$this->_sections['friend_class_list']['max'] = $this->_sections['friend_class_list']['loop'];
$this->_sections['friend_class_list']['step'] = 1;
$this->_sections['friend_class_list']['start'] = $this->_sections['friend_class_list']['step'] > 0 ? 0 : $this->_sections['friend_class_list']['loop']-1;
if ($this->_sections['friend_class_list']['show']) {
    $this->_sections['friend_class_list']['total'] = $this->_sections['friend_class_list']['loop'];
    if ($this->_sections['friend_class_list']['total'] == 0)
        $this->_sections['friend_class_list']['show'] = false;
} else
    $this->_sections['friend_class_list']['total'] = 0;
if ($this->_sections['friend_class_list']['show']):

            for ($this->_sections['friend_class_list']['index'] = $this->_sections['friend_class_list']['start'], $this->_sections['friend_class_list']['iteration'] = 1;
                 $this->_sections['friend_class_list']['iteration'] <= $this->_sections['friend_class_list']['total'];
                 $this->_sections['friend_class_list']['index'] += $this->_sections['friend_class_list']['step'], $this->_sections['friend_class_list']['iteration']++):
$this->_sections['friend_class_list']['rownum'] = $this->_sections['friend_class_list']['iteration'];
$this->_sections['friend_class_list']['index_prev'] = $this->_sections['friend_class_list']['index'] - $this->_sections['friend_class_list']['step'];
$this->_sections['friend_class_list']['index_next'] = $this->_sections['friend_class_list']['index'] + $this->_sections['friend_class_list']['step'];
$this->_sections['friend_class_list']['first']      = ($this->_sections['friend_class_list']['iteration'] == 1);
$this->_sections['friend_class_list']['last']       = ($this->_sections['friend_class_list']['iteration'] == $this->_sections['friend_class_list']['total']);
?>

                                     <option value="<?php echo $this->_tpl_vars['friend_class_list'][$this->_sections['friend_class_list']['index']]['classid']; ?>
"><?php echo $this->_tpl_vars['friend_class_list'][$this->_sections['friend_class_list']['index']]['classname']; ?>
</option>

                                  <?php endfor; endif; ?>

                                     <option value="-1">黑名单</option>
                                   </select>


                                  <select name="jumpMenu2" id="top_jump" style="display:none;<?php echo $this->_tpl_vars['allow_button']; ?>
"  onchange="if(this.selectedIndex>-1)Get_id('batch_do').value='batch_allow_request';Get_id('chg_classid').value=this.options[this.selectedIndex].value;document.friend_list_handle.submit();">

                                     <option value="0"  selected="selected" >好友请求处理</option>
                                     <option value="5">通过请求</option>
                                     <option value="-2">忽略请求</option>

                                   </select>


                        </form>
                        </span>
                       <div  class="sep_border"></div>
                        <span  class="tool_clsss">
                          <a href="index.php?display=friend&classid=0&allow=1"  style="<?php echo $this->_tpl_vars['class_all']; ?>
">全部好友</a><h4>|</h4>

                          <?php unset($this->_sections['friend_class_list']);
$this->_sections['friend_class_list']['name'] = 'friend_class_list';
$this->_sections['friend_class_list']['loop'] = is_array($_loop=$this->_tpl_vars['friend_class_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['friend_class_list']['show'] = true;
$this->_sections['friend_class_list']['max'] = $this->_sections['friend_class_list']['loop'];
$this->_sections['friend_class_list']['step'] = 1;
$this->_sections['friend_class_list']['start'] = $this->_sections['friend_class_list']['step'] > 0 ? 0 : $this->_sections['friend_class_list']['loop']-1;
if ($this->_sections['friend_class_list']['show']) {
    $this->_sections['friend_class_list']['total'] = $this->_sections['friend_class_list']['loop'];
    if ($this->_sections['friend_class_list']['total'] == 0)
        $this->_sections['friend_class_list']['show'] = false;
} else
    $this->_sections['friend_class_list']['total'] = 0;
if ($this->_sections['friend_class_list']['show']):

            for ($this->_sections['friend_class_list']['index'] = $this->_sections['friend_class_list']['start'], $this->_sections['friend_class_list']['iteration'] = 1;
                 $this->_sections['friend_class_list']['iteration'] <= $this->_sections['friend_class_list']['total'];
                 $this->_sections['friend_class_list']['index'] += $this->_sections['friend_class_list']['step'], $this->_sections['friend_class_list']['iteration']++):
$this->_sections['friend_class_list']['rownum'] = $this->_sections['friend_class_list']['iteration'];
$this->_sections['friend_class_list']['index_prev'] = $this->_sections['friend_class_list']['index'] - $this->_sections['friend_class_list']['step'];
$this->_sections['friend_class_list']['index_next'] = $this->_sections['friend_class_list']['index'] + $this->_sections['friend_class_list']['step'];
$this->_sections['friend_class_list']['first']      = ($this->_sections['friend_class_list']['iteration'] == 1);
$this->_sections['friend_class_list']['last']       = ($this->_sections['friend_class_list']['iteration'] == $this->_sections['friend_class_list']['total']);
?>

                          <a href="index.php?display=friend&classid=<?php echo $this->_tpl_vars['friend_class_list'][$this->_sections['friend_class_list']['index']]['classid']; ?>
&allow=1"    style="<?php echo $this->_tpl_vars['friend_class_list'][$this->_sections['friend_class_list']['index']]['list_class']; ?>
"><?php echo $this->_tpl_vars['friend_class_list'][$this->_sections['friend_class_list']['index']]['classname']; ?>
</a><h4>|</h4>

                          <?php endfor; endif; ?>
                          <a href="index.php?display=friend&allow=4"  style="<?php echo $this->_tpl_vars['class_allow4']; ?>
">黑名单</a><h4>┃</h4>
                          <a href="index.php?display=friend&allow=5"  style="<?php echo $this->_tpl_vars['class_allow5']; ?>
">未分类</a><h4>|</h4>
                          <a href="index.php?display=friend&allow=3"  style="<?php echo $this->_tpl_vars['class_allow3']; ?>
">单向链接</a><h4>|</h4>
                          <a href="index.php?display=friend&allow=0"  style="<?php echo $this->_tpl_vars['class_allow0']; ?>
">好友请求</a><h4>|</h4>
                        </span>
                        <div  class="sep_border"></div>

             </div>
           <div class="clear"></div>
           </div>



           <div  class="content_block   latest_act"   id="list_check">

               <div  class="content_block_main    guestbook_list     visitor_list     friends_list">
                  <form action="index.php?display=friend" method="POST" name="friend_list_handle">

                  <input name="display" type="hidden"  value="friend" />
                  <input name="pg" type="hidden"  value="<?php echo $this->_tpl_vars['pg']; ?>
" />
                  <input name="chg_classid" type="hidden"   id="chg_classid" value="" />
                  <input name="do" type="hidden"   id="batch_do" value="batch_del" />

                  <ul>

                   <?php unset($this->_sections['friend_list']);
$this->_sections['friend_list']['name'] = 'friend_list';
$this->_sections['friend_list']['loop'] = is_array($_loop=$this->_tpl_vars['friend_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['friend_list']['show'] = true;
$this->_sections['friend_list']['max'] = $this->_sections['friend_list']['loop'];
$this->_sections['friend_list']['step'] = 1;
$this->_sections['friend_list']['start'] = $this->_sections['friend_list']['step'] > 0 ? 0 : $this->_sections['friend_list']['loop']-1;
if ($this->_sections['friend_list']['show']) {
    $this->_sections['friend_list']['total'] = $this->_sections['friend_list']['loop'];
    if ($this->_sections['friend_list']['total'] == 0)
        $this->_sections['friend_list']['show'] = false;
} else
    $this->_sections['friend_list']['total'] = 0;
if ($this->_sections['friend_list']['show']):

            for ($this->_sections['friend_list']['index'] = $this->_sections['friend_list']['start'], $this->_sections['friend_list']['iteration'] = 1;
                 $this->_sections['friend_list']['iteration'] <= $this->_sections['friend_list']['total'];
                 $this->_sections['friend_list']['index'] += $this->_sections['friend_list']['step'], $this->_sections['friend_list']['iteration']++):
$this->_sections['friend_list']['rownum'] = $this->_sections['friend_list']['iteration'];
$this->_sections['friend_list']['index_prev'] = $this->_sections['friend_list']['index'] - $this->_sections['friend_list']['step'];
$this->_sections['friend_list']['index_next'] = $this->_sections['friend_list']['index'] + $this->_sections['friend_list']['step'];
$this->_sections['friend_list']['first']      = ($this->_sections['friend_list']['iteration'] == 1);
$this->_sections['friend_list']['last']       = ($this->_sections['friend_list']['iteration'] == $this->_sections['friend_list']['total']);
?>

                      <li>
                       <input name="friend_handle[]" type="checkbox" value="<?php echo $this->_tpl_vars['friend_list'][$this->_sections['friend_list']['index']]['fid']; ?>
"   class="visitor_list_check"/>
                       <a  href="<?php echo $this->_tpl_vars['friend_list'][$this->_sections['friend_list']['index']]['website']; ?>
" target="_blank"  class="friend_head_pic"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/act_img.jpg" width="40" height="40" title="地理位置:<?php echo $this->_tpl_vars['friend_list'][$this->_sections['friend_list']['index']]['location']; ?>
&nbsp;&nbsp;&nbsp;IP:<?php echo $this->_tpl_vars['friend_list'][$this->_sections['friend_list']['index']]['ip']; ?>
"  class="tooltip"/></a>
                       <span  class="act_emotion">
                         <a href="#friend_edit_note" target="_blank"  title="点击修改备注&nbsp;&nbsp;&nbsp;好友昵称:<?php echo $this->_tpl_vars['friend_list'][$this->_sections['friend_list']['index']]['name']; ?>
&nbsp;&nbsp;&nbsp;备注:<?php echo $this->_tpl_vars['friend_list'][$this->_sections['friend_list']['index']]['notename']; ?>
" alt="<?php echo $this->_tpl_vars['friend_list'][$this->_sections['friend_list']['index']]['notename']; ?>
" name="&nbsp;<?php echo $this->_tpl_vars['friend_list'][$this->_sections['friend_list']['index']]['name']; ?>
"  rel="width:430;height:160" class="tooltip  popup"  onclick="Get_id('edit_name').innerHTML=this.name;Get_id('edit_notename').value=this.alt;Get_id('do_id').value=<?php echo $this->_tpl_vars['friend_list'][$this->_sections['friend_list']['index']]['fid']; ?>
;"><b style="font-weight:normal">&nbsp;<?php echo $this->_tpl_vars['friend_list'][$this->_sections['friend_list']['index']]['show_name']; ?>
</b></a>
                         <font ><?php echo $this->_tpl_vars['friend_list'][$this->_sections['friend_list']['index']]['province_location']; ?>
</font><a>男</a><font   style="text-align:center">22岁</font>
                         <a><?php echo $this->_tpl_vars['request_str']; ?>
加友时间：</a><font><em style="color:#666"><?php echo $this->_tpl_vars['friend_list'][$this->_sections['friend_list']['index']]['time']; ?>
</em></font>
                       </span>
                       <span  class="act_emotion  site_url">
                            <font><h4 style="float:left; display:block;margin-top:2px;">主页地址</h4><a href="<?php echo $this->_tpl_vars['friend_list'][$this->_sections['friend_list']['index']]['website']; ?>
" target="_blank"><?php echo $this->_tpl_vars['friend_list'][$this->_sections['friend_list']['index']]['website']; ?>
</a><a  style="margin-left:15px;"><?php echo $this->_tpl_vars['friend_list'][$this->_sections['friend_list']['index']]['add_reason']; ?>
</a></font>
                            <label>
                              <input name="button2"    type="submit"   id="button" value="  打个招呼"  <?php echo $this->_tpl_vars['request_class']; ?>
 >
                            </label>
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

<!--site_foot start-->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "site_foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!--site_foot  END-->