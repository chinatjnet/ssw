<?php /* Smarty version 2.6.26, created on 2011-05-31 12:23:16
         compiled from template.html */ ?>
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
/js/easy.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/js/main.js"></script>
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
/images/system_center.png" width="31" height="34"   class="control_logo"/>
           <h1>模板选择</h1>
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
               <div  class="content_block_title">模板选择</div> 
               <div  class="info_main">
                   <div  id="top_tool"  class="info_title"   style="border-bottom-style:dashed">
                   <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_system.gif" width="16" height="17" /> <b href="javascript:void(0);"  class="info_now">模板选择</b>
                   <div class="clear"></div>
                   </div>
                   
               
                   <div  id="info_content">
                   <form action="" method="get"  name="selfinfo_edit">
                   
                   <span  class="info_span"><b>当前模板</b></span>
 
                   <span  class="info_span"> <img src="ad.jpg" width="150" height="150" /><strong>default</strong></span>
                   
                   <span  class="info_span"><b>可用模板</b></span>   
                    
                   <span  class="info_span">
                    <ul  class="theme_list">

					  <?php unset($this->_sections['theme']);
$this->_sections['theme']['name'] = 'theme';
$this->_sections['theme']['loop'] = is_array($_loop=$this->_tpl_vars['theme']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['theme']['show'] = true;
$this->_sections['theme']['max'] = $this->_sections['theme']['loop'];
$this->_sections['theme']['step'] = 1;
$this->_sections['theme']['start'] = $this->_sections['theme']['step'] > 0 ? 0 : $this->_sections['theme']['loop']-1;
if ($this->_sections['theme']['show']) {
    $this->_sections['theme']['total'] = $this->_sections['theme']['loop'];
    if ($this->_sections['theme']['total'] == 0)
        $this->_sections['theme']['show'] = false;
} else
    $this->_sections['theme']['total'] = 0;
if ($this->_sections['theme']['show']):

            for ($this->_sections['theme']['index'] = $this->_sections['theme']['start'], $this->_sections['theme']['iteration'] = 1;
                 $this->_sections['theme']['iteration'] <= $this->_sections['theme']['total'];
                 $this->_sections['theme']['index'] += $this->_sections['theme']['step'], $this->_sections['theme']['iteration']++):
$this->_sections['theme']['rownum'] = $this->_sections['theme']['iteration'];
$this->_sections['theme']['index_prev'] = $this->_sections['theme']['index'] - $this->_sections['theme']['step'];
$this->_sections['theme']['index_next'] = $this->_sections['theme']['index'] + $this->_sections['theme']['step'];
$this->_sections['theme']['first']      = ($this->_sections['theme']['iteration'] == 1);
$this->_sections['theme']['last']       = ($this->_sections['theme']['iteration'] == $this->_sections['theme']['total']);
?>

                      <li>
                         <img src="<?php echo $this->_tpl_vars['theme'][$this->_sections['theme']['index']]['view']; ?>
" width="150" height="150" /><br>
                         <font><?php echo $this->_tpl_vars['theme'][$this->_sections['theme']['index']]['name']; ?>
</font><br>&nbsp;&nbsp;&nbsp;
                         <a  href="#">启用</a>&nbsp;&nbsp;&nbsp;
                         <a  href="#">预览</a>
                      </li>

					  <?php endfor; endif; ?>
                      
                                   
                    </ul>    
                    </span>
                                   
                   <span   class="info_span">
                      <b></b>
                      <p></p>  
                   </span>   

                   
                   <span   class="info_span"><b></b>
                        <p><b  onclick="document.selfinfo_edit.submit()">确定添加</b></p>  
                   </span>                            
                   
                   </form>                      
                   <div class="clear"></div>
                 </div>
                   
                   
                   
                   
               </div>
           <div class="clear"></div>
           </div>
  
 
                         <div  style="display:none">
                         <form  name="add_class">      
                         <span  id="friend_add" >
                           <b>分类名称&nbsp;&nbsp;&nbsp;&nbsp;</b> 
                           <input name="" type="text"   class="article_title"    onfocus="this.style.border='#21759B  solid  1px'"  onblur="this.style.border='#A5ACB2  solid  1px'"/><br>
                           <input type="button" name="shield"   class="article_act"  value="添加分类"  onclick="document.add_class.submit()"/>
                         </span>
                          </form>
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