<?php /* Smarty version 2.6.26, created on 2011-06-15 16:58:22
         compiled from label_set.html */ ?>
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
<script type="text/javascript" src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/js/label_set_change.js"></script>
</head>

<?php echo '


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
/images/label_center.png" width="31" height="34"   class="control_logo"/>
           <h1>标签设置</h1>
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
               <div  class="content_block_title"><?php echo $this->_tpl_vars['tool_title']; ?>
标签设置</div> 
               <div  class="content_block_main">
                        <span  class="tool_info"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/user_system.gif" width="16" height="17" /><b><?php echo $this->_tpl_vars['tool_title']; ?>
调用内容</b></span>

                        <div  class="sep_border"></div>
                        
                        <span  class="tool_clsss"  style="line-height:20px;"  id="label_fnav">

<a href="javascript:void(0);"   onclick="label_fchange('index.php?display=label_set',Get_id('list_upid').value,Get_id('type').value,'<?php echo $this->_tpl_vars['fclass'][$this->_sections['fclass']['index']]['fclassid']; ?>
','<?php echo $this->_tpl_vars['fclass'][$this->_sections['fclass']['index']]['fbelong']; ?>
');this.style.color='#333';this.style.fontWeight='bold'"   style="font-weight:bold;color:#333" >标签说明</a><h4>|</h4>


						<?php unset($this->_sections['fclass']);
$this->_sections['fclass']['name'] = 'fclass';
$this->_sections['fclass']['loop'] = is_array($_loop=$this->_tpl_vars['fclass']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['fclass']['show'] = true;
$this->_sections['fclass']['max'] = $this->_sections['fclass']['loop'];
$this->_sections['fclass']['step'] = 1;
$this->_sections['fclass']['start'] = $this->_sections['fclass']['step'] > 0 ? 0 : $this->_sections['fclass']['loop']-1;
if ($this->_sections['fclass']['show']) {
    $this->_sections['fclass']['total'] = $this->_sections['fclass']['loop'];
    if ($this->_sections['fclass']['total'] == 0)
        $this->_sections['fclass']['show'] = false;
} else
    $this->_sections['fclass']['total'] = 0;
if ($this->_sections['fclass']['show']):

            for ($this->_sections['fclass']['index'] = $this->_sections['fclass']['start'], $this->_sections['fclass']['iteration'] = 1;
                 $this->_sections['fclass']['iteration'] <= $this->_sections['fclass']['total'];
                 $this->_sections['fclass']['index'] += $this->_sections['fclass']['step'], $this->_sections['fclass']['iteration']++):
$this->_sections['fclass']['rownum'] = $this->_sections['fclass']['iteration'];
$this->_sections['fclass']['index_prev'] = $this->_sections['fclass']['index'] - $this->_sections['fclass']['step'];
$this->_sections['fclass']['index_next'] = $this->_sections['fclass']['index'] + $this->_sections['fclass']['step'];
$this->_sections['fclass']['first']      = ($this->_sections['fclass']['iteration'] == 1);
$this->_sections['fclass']['last']       = ($this->_sections['fclass']['iteration'] == $this->_sections['fclass']['total']);
?>

                        <a href="javascript:void(0);"   onclick="label_fchange('index.php?display=label_set',Get_id('list_upid').value,Get_id('type').value,'<?php echo $this->_tpl_vars['fclass'][$this->_sections['fclass']['index']]['fclassid']; ?>
','<?php echo $this->_tpl_vars['fclass'][$this->_sections['fclass']['index']]['fbelong']; ?>
');this.style.color='#333';this.style.fontWeight='bold'" ><?php echo $this->_tpl_vars['fclass'][$this->_sections['fclass']['index']]['fclassname']; ?>
</a><h4>|</h4>

						<?php endfor; endif; ?>


                        </span>
                        
                        <div  class="sep_border"></div>  
                     
               
           </div>
           <div class="clear"></div>
           </div>
  
 
 
           <div  class="content_block   latest_act"   id="list_check"> 
               
               <div  class="content_block_main    guestbook_list     visitor_list">


                  <form action="index.php?display=label_set" method="GET"  name="label_set">

                   <INPUT TYPE=hidden NAME=display  VALUE="label_set" id="display"  style="visibility:hidden">
                   <INPUT TYPE=hidden NAME=list_upid  VALUE="<?php echo $this->_tpl_vars['list_upid']; ?>
"  id="list_upid" style="visibility:hidden">
                   <INPUT TYPE=hidden NAME='type'  VALUE="<?php echo $this->_tpl_vars['get_type']; ?>
" id="type"  style="visibility:hidden">
                   <input name="do" type="hidden"   id="update" value="update"  style="visibility:hidden"/>

                   <div  id="ajax_change">

                        <br><br><font style='font-size:12px;margin-left:15px;'>请按规则进行数据调用。</font>

                   </div>

                  </form>
               <div class="page"><a href="#"></a></div>
               <div class="clear"></div>                           
               </div>
               
               
                

           <div class="clear"></div>    
 
		   </div>
		   
<?php echo '

<style>
#send_view{color:#21759B;padding:0px  3px;margin-top:3px;}
#send_view:hover{background:#21759B;color:#fff;}
#view_cover{
	background:#000;
	height:300%;
    _height:2000px;
	width:100%;
	_width:200%;
    position:absolute;
	top:0px;
	left:0px;
	filter:alpha(opacity=50);
	opacity: .50;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
	}


#view_main{
	width:400px;
    position:FIXED;
	top:35%;
    _top:25%;
	left:35%;
	margin:opx  auto;
	_margin-top:100px;
	padding:0px 0px;
	font-family:Arial, Helvetica, sans-serif;
	color:#2B2B2B;
    border:solid  #fff   10px;
	_position:absolute;
    _top:expression(eval(document.documentElement.scrollTop));  
    _margin-top:200px;
	}

#view_close{
	position:absolute;
	top:-20px;
	right:-20px;
	}

#view_close  img{ border:0px;cursor:pointer;}
#view_content{
    background:#FFF;
	border:solid  #DDDDDD   10px;
    font-size:13px;
    line-height:20px;
	overflow-y:hidden;
	color:#2B2B2B;
    line-height:23px;

	}

</style>

<script>
function showview(){
	document.getElementById("view_cover").style.display="block";
    document.getElementById("view_main").style.display="block";
	//document.body.style.overflow="hidden";
	}

function hideview(){
	document.getElementById("view_cover").style.display="none";
    document.getElementById("view_main").style.display="none";
    document.body.style.overflow="scroll";
	}
</script>


<div id="view_cover"  style="display:none">
</div>

<div id="view_main"  style="display:none">
<a  onclick="javascript:hideview()"   id="view_close"><img src="function/icon_close.gif" class="cntrl" title="Close" /></a>
    <div  id="view_content"><!--===================================-->
    </div><!--===================================-->
<div  style="clear:both;"></div>

</div>
'; ?>

  
        </div> <!--main_left  end-->
  
  </div>                          <!--main  end-->
  
<!--site_foot start-->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "site_foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!--site_foot  END-->