<?php /* Smarty version 2.6.26, created on 2011-05-17 13:37:38
         compiled from lover.html */ ?>
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

<?php echo '
<script>

window.onload = function (){
     lover_img_show();

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
/images/love_center.png" width="31" height="34"   class="control_logo"/>
           <h1>情侣空间</h1>
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

           <div  class="content_block">
               <div  class="content_block_title">情侣空间</div>
           </div>



           <div  class="content_block   latest_act">

               <div  class="content_block_main">
                 <div  class="lover_zone_title" ><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/lover.png" width="24" height="24" /><b>情侣动作</b></div>

                   <div    class="sweet_word"  style="position:relative;*+position:fixed;_position:relative;"><b>情侣蜜语</b>
                           <span  class="sweet_word_img"   onmouseover="Get_id('sweet_word_img__show').style.display='block';" onmouseout="Get_id('sweet_word_img__show').style.display='none';"><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/lover_img/blank.gif"   alt="blank"  width="20" height="20" id="sweet_img_now"/></span>
                     <form action="" method="get"  name="sweet_word"><input name="" type="text" /><em  onclick="document.sweet_word.submit()">说出蜜语</em></form>
                           <span  id="sweet_word_img__show"  style="display:none"   onmouseover="this.style.display='block';" onmouseout="this.style.display='none';">
                              <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/lover_img/blank.gif"  alt="blank"  width="20" height="20"/>
                              <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/lover_img/heart.gif"  alt="heart"  width="20" height="20"/>
                              <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/lover_img/sun.gif"    alt="sun"  width="20" height="20" />
                              <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/lover_img/beauty.gif"  alt="beauty"  width="20" height="20"/>
                              <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/lover_img/gift.gif"  alt="gift"  width="20" height="20" />
                              <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/lover_img/kiss.gif"  alt="kiss"   width="20" height="20" />
                              <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/lover_img/pet.gif"  alt="pet" width="20" height="20" />
                              <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/lover_img/money.gif"  alt="money"  width="20" height="20" />
                              <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/lover_img/cry.gif"  alt="cry"  width="20" height="20" />
                              <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/lover_img/engry.gif"  alt="engry"  width="20" height="20" />
                              <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/lover_img/flower.gif"  alt="flower"   width="20" height="20" />
                              <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/lover_img/pig.gif"  alt="pig" width="20" height="20" />
                              <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/lover_img/hit.gif"  alt="hit"  width="20" height="20" />
                              <img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/lover_img/sweet_kiss.gif"  alt="sweet_kiss"  width="20" height="20" />



                           </span>
                    <div class="clear"></div>
                    </div>
                    <div  class="sweet_word"  style="padding-top:20px;_padding-top:10px;*margin-top:50px;_margin-top:0px;"><b>情侣趣事</b>
                    <span  style="width:500px; display:block; float:left"><a  class="sweet_act">牵下手</a><a  class="sweet_act">牵下手</a><a  class="sweet_act">牵下手</a><a  class="sweet_act">牵下手</a><a  class="sweet_act">牵下手</a><a  class="sweet_act">牵下手</a>

<a  class="sweet_act">牵下手</a><a  class="sweet_act">牵下手</a><a  class="sweet_act">牵下手</a><a  class="sweet_act">牵下手</a><a  class="sweet_act">牵下手</a><a  class="sweet_act">牵下手</a>
                    </span>

                    <div class="clear"></div>
                    </div>


                    <div  class="lover_zone_title" ><img src="<?php echo $this->_tpl_vars['temp_dir']; ?>
/images/lover_act.png" width="24" height="24" /><b>空间动态</b></div>
                    <div  class="lover_act_list">湖北省荆州市网友</div>



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