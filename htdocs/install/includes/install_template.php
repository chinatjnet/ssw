<?php

/**
 * @author sunsonworld.com
 * @copyright 2011
 * ===============
 * 安装文件模版方法
 * ===============
 */
    $now_dir = str_replace("\\","/",dirname(__FILE__));
    $project_dir = substr($now_dir,0,-16);   //项目位置

    include_once($project_dir."class/mysql.class.php");
    
/*------------------------------------------------------ */
//-- 头部模版
/*------------------------------------------------------ */ 
    function showHeader(){
        $test = array('test'=>'天骄天下个人建站系统安装向导');
        $title = $test['test'];
        echo <<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>$title</title>
<link href="images/reset.css" rel="stylesheet" media="screen" />
<link href="images/style.css" rel="stylesheet" media="screen" />
<script src="images/jquery.js" type="text/javascript"></script>
<script src="images/index.js" type="text/javascript"></script>
</head>

<body>
<div id="header">
	<h1></h1>
    <span>天骄天下个人建站系统 SSW_V 1.0</span>
</div>   
EOT;
        
    }

/*------------------------------------------------------ */
//-- 底部模版
/*------------------------------------------------------ */ 
    function showFooter(){
        echo <<<EOT
</body>
</html>
EOT;
    }

/*------------------------------------------------------ */
//-- 首页模版
/*------------------------------------------------------ */  
    function indexTemplate(){
        echo <<<EOT
<div id="main">        
  <div class="text_show">
    <h1>本版为天骄天下个人建站系统测试版本V1.0</h1>
    <p>版权所有 (c) 2010-2012 天骄天下网络中心保留所有权利。</p>
    <p>感谢您选择SSW_V1.0产品。希望我们的努力能为您提供一个高效快速的小型企业自助建站解决方案。</p>
    <p>SSW_V1.0英文全称为 Sunsonworld version 1.0，中文全称为 天骄天下个人建站系统，以下简称 SSW_V1.0。</p>
    <p>ZhangYang为 SSW_V1.0 产品的开发者，依法独立拥有 Sunsonworld 产品著作权。</p>
    <p>使用者：无论个人或组织、盈利与否、用途如何（包括以学习和研究为目的），均需仔细阅读本协议，在理解、同意、并遵守本协议的全部条款后，方可开始使用 Sunsonworld 软件。</p>
    <p>本授权协议适用且仅适用于 SSW_V1.0 版本，ZhangYang拥有对本授权协议的最终解释权。</p>
    <h3>I. 协议许可的权利</h3>
    <ol>
      <li>您可以在完全遵守本最终用户授权协议的基础上，将本软件应用于非商业用途，而不必支付软件版权授权费用。</li>
      <li>您可以在协议规定的约束和限制范围内修改Sunsonworld 源代码(如果被提供的话)或界面风格以适应您的网站要求。</li>
      <li>您拥有使用本软件构建的论坛中全部管理员资料、文章及相关信息的所有权，并独立承担与文章内容的相关法律义务。</li>
      <li>获得商业授权之后，您可以将本软件应用于商业用途，同时依据所购买的授权类型中确定的技术支持期限、技术支持方式和技术支持内容，自购买时刻起，在技术支持期限内拥有通过指定的方式获得指定范围内的技术支持服务。商业授权用户享有反映和提出意见的权力，相关意见将被作为首要考虑，但没有一定被采纳的承诺或保证。</li>
    </ol>
    <h3>II. 协议规定的约束和限制</h3>
    <ol>
      <li>未获制作者同意之前，不得将本软件用于商业用途（包括但不限于企业网站、经营性网站、以营利为目或实现盈利的网站）联系QQ:1040058145了解详情。</li>
      <li>不得对本软件或与之关联的商业授权进行出租、出售、抵押或发放子许可证。</li>
      <li>无论如何，即无论用途如何、是否经过修改或美化、修改程度如何，只要使用SSW_V1.0的整体或任何部分，未经书面许可，论坛都必须保留，而不能清除或修改。</li>
      <li>禁止在 SSW_V1.0 的整体或任何部分基础上以发展任何派生版本、修改版本或第三方版本用于重新分发。</li>
      <li>如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回，并承担相应法律责任。</li>
    </ol>
    <h3>III. 有限担保和免责声明</h3>
    <ol>
      <li>本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的。</li>
      <li>用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未购买产品技术服务之前，我们不承诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任。</li>
    </ol>
    <p>有关 SSW_V1.0 最终用户授权协议、商业授权与技术服务的详细内容，均由 ZhangYang个人独家提供</p>
    <p>电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和等同的法律效力。您一旦开始安装 SSW_V1.0，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。</p>
  </div>
  
  <div class="botton_area">
  <form action="" method="post" style="text-align:center;">
    <input id="agree" name="agree" type="submit" value="我同意" style="margin-right:15px;"/>
    <input id="disagree" name="disagree" type="button" value="我不同意" />
  </form>
  </div>
</div>
EOT;
    }  

/*------------------------------------------------------ */
//-- 步骤1模版
/*------------------------------------------------------ */  
    function step1(){
        
        //php版本
        $phpVerson = PHP_VERSION;
        $php_class = strcmp($phpVerson,"4.3")? "viable" : "unviable";
        
        //gd版本
        $gdData = function_exists('gd_info') ? gd_info() : array();
        $gdVerson = empty($gdData['GD Version'])? 'none' : $gdData['GD Version'];
        preg_match("#\d#",$gdVerson,$verson);
        $gd_class = strcmp($verson[0],"1")? "viable" : "unviable";
        
        //上传空间限制
        $uploadMax = @ini_get('file_uploads') ? ini_get('upload_max_filesize') : 'unknow';
        
        //硬盘空间
        if(function_exists('disk_free_space')) {
            $diskRoom = floor(disk_free_space(PROJECT_PATH) / (1024*1024)).'M';
        } else {
            $diskRoom = 'unknow';
        }
        $disk_class = $diskRoom>25? "viable" : "unviable";
        
        //操作系统
        $os = constant("PHP_OS");
        
        //mysql方法检验
        if(function_exists('mysql_connect')){
            $mysql_class = "viable";
            $mysql_solution = "无";
            $mysql_support = "支持";
        }else{
            $mysql_class = "unviable";
            $mysql_solution = "重新安装PHP";
            $mysql_support = "不支持";
        }
        
        //preg_mach
        if(function_exists('preg_match')){
            $preg_class = "viable";
            $preg_solution = "无";
            $preg_support = "支持";
        }else{
            $preg_class = "unviable";
            $preg_solution = "重新安装PHP";
            $preg_support = "不支持";
        }
        
        //file_get_contents
        if(function_exists('file_get_contents')){
            $file_get_class = "viable";
            $file_get_solution = "无";
            $file_get_support = "支持";
        }else{
            $file_get_class = "unviable";
            $file_get_solution = "重新安装PHP";
            $file_get_support = "不支持";
        }

        //file_put_contents
        if(function_exists('file_put_contents')){
            $file_put_class = "viable";
            $file_put_solution = "无";
            $file_put_support = "支持";
        }else{
            $file_put_class = "unviable";
            $file_put_solution = "重新安装PHP";
            $file_put_support = "不支持";
        }
        
       echo <<<EOT
<div id="step">
	<div class="step1">
    	<h1>开始安装</h1>
        <p>环境以及文件目录权限检查</p>
    </div>
    
  <div class="step_show">
   	<ul>
        	<li class="current"></li>
            <li class="unactivated"></li>
            <li class="unactivated"></li>
            <li class="unactivated"></li>
      </ul>
      <div class="step_bg"></div>
    </div>
</div>  
<div id="main">     
<div class="show_content">
    <h2>环境检查</h2>
        <table width="94%" border="0" cellspacing="0" class="show_table">
          <tr>
            <th width="17%" align="left">检查项目</th>
            <th width="26%" align="left">SSW_V1.0所需配置</th>
            <th width="26%" align="left">SSW_V1.0最佳配置</th>
            <th width="31%" align="left">当前配置</th>
          </tr>
          <tr>
            <td>操作系统</td>
            <td>不限制</td>
            <td>类Unix</td>
            <td class="now_setting viable">$os</td>
          </tr>
          <tr>
            <td>PHP 版本</td>
            <td>4.3</td>
            <td>5.3.0或以上</td>
            <td class="now_setting $php_class">$phpVerson</td>
          </tr>
          <tr>
            <td>附件上传</td>
            <td>不限制</td>
            <td>2M</td>
            <td class="now_setting viable">$uploadMax</td>
          </tr>
          <tr>
            <td>GD 库</td>
            <td>1.0</td>
            <td>2.0或以上</td>
            <td class="now_setting $php_class">$gdVerson</td>
          </tr>
          <tr>
            <td>磁盘空间</td>
            <td>25M</td>
            <td>不限制</td>
            <td class="now_setting $disk_class">$diskRoom</td>
          </tr>
        </table>
        
        <h2>函数检查</h2>
        <table width="94%" border="0" cellspacing="0" class="show_table">
          <tr>
            <th width="45%" align="left">函数名称</th>
            <th width="33%" align="left">检查结果</th>
            <th width="22%" align="left">解决方案</th>
          </tr>
          <tr>
            <td>mysql_connect()</td>
            <td class="now_setting $mysql_class">$mysql_support</td>
            <td>$mysql_solution</td>
          </tr>
          <tr>
            <td>preg_match()</td>
            <td class="now_setting $preg_class">$preg_support</td>
            <td>$preg_solution</td>
          </tr>
          <tr>
            <td>file_get_contents()</td>
            <td class="now_setting $file_get_class">$file_get_support</td>
            <td>$file_get_solution</td>
          </tr>
          <tr>
            <td>file_put_contents()</td>
            <td class="now_setting $file_put_class">$file_put_support</td>
            <td>$file_put_solution</td>
          </tr>
        </table>
        
    </div>
    <div class="botton_area">
  <form action="" method="post" style="text-align:center;">
  		<input name="previous" type="submit" value="上一步" style="margin-right:15px;" />
        <input name="next" type="submit" value="下一步" />
  </form>
  </div>
</div>    

EOT;
    }   

/*------------------------------------------------------ */
//-- 步骤2模版
/*------------------------------------------------------ */  
    function step2(){
        
    echo <<<EOT
<div id="step">
	<div class="step2">
    	<h1>设置安装数据</h1>
        <p>是否安装测试数据</p>
    </div>
    
  <div class="step_show">
   	<ul>
        	<li class="unactivated"></li>
            <li class="current"></li>
            <li class="unactivated"></li>
            <li class="unactivated"></li>
      </ul>
      <div class="step_bg"></div>
    </div>
</div>
<div id="main">
<form action="" method="post">
  <div class="show_content">
    	<p><input name="data" type="radio" value="1" checked="checked" />安装测试数据</p>
        <p><input name="data" type="radio" value="0" />不想安装测试数据已节省空间</p>
    
    
   </div>
   <div class="botton_area">
        <input name="next" type="submit" value="下一步" />
  </div>
</form>
</div>
EOT;
    }

/*------------------------------------------------------ */
//-- 步骤3模版
/*------------------------------------------------------ */      
     function step3(){
            echo <<<EOT
<div id="step">
	<div class="step3">
    	<h1>配置数据库</h1>
        <p>配置数据库中的基本数据设置</p>
    </div>
    
  <div class="step_show">
   	<ul>
        	<li class="unactivated"></li>
            <li class="unactivated"></li>
            <li class="current"></li>
            <li class="unactivated"></li>
      </ul>
      <div class="step_bg"></div>
    </div>
</div>
<div id="main">
  <div class="show_content">
  <form action="index.php?step=4" method="post" id="install_form">
    <h2>填写数据库信息</h2>
        <table width="94%" border="0" cellspacing="0" class="show_table">
          <tr>
            <td width="24%" align="left">数据库服务器:</td>
            <td width="36%" align="left"><input type="text" class="textbox" name="dbhost" value="localhost"/></td>
            <td width="40%" align="left">数据库服务器地址, 一般为 localhost</td>
          </tr>
          <tr>
            <td>数据库名:</td>
            <td><input type="text" class="textbox" name="dbname" value="ssw_v1.0" /></td>
            <td></td>
          </tr>
          <tr>
            <td>数据库用户名:</td>
            <td><input type="text" class="textbox" name="dbuser" value="root"/></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>数据库密码:</td>
            <td><input type="text" class="textbox" name="dbpassword" value="root"/></td>
            <td></td>
          </tr>

          <tr>
            <td>表名前缀:</td>
            <td><input type="text" class="textbox" name="prefix" value="ssw_" /></td>
            <td></td>
          </tr>

        </table>
        
    <h2>填写管理员信息</h2>
        <table width="94%" border="0" cellspacing="0" class="show_table">
          <tr>
            <td width="24%" align="left">管理员账号:</td>
            <td width="36%" align="left"><input type="text" class="textbox" name="admin_name" value="admin"/></td>
            <td width="40%" align="left">&nbsp;</td>
          </tr>
          <tr id="password_tr">
            <td>管理员密码:</td>
            <td><input type="password" class="textbox" name="admin_password" id="password" /></td>
            <td>密码不能为空</td>
          </tr>
          <tr id="re_password_tr">
            <td>重复密码:</td>
            <td><input type="password" class="textbox" name="re_password" id="re_password" /></td>
            <td>&nbsp;</td>
          </tr>
        </table>
        <div class="botton_area">
        <input name="next" type="button" value="下一步" id="install" />
 		 </div>
    </form>
  </div>
EOT;
     }
/*------------------------------------------------------ */
//-- 步骤4模版
/*------------------------------------------------------ */ 
    function step4(){
         echo <<<EOT
<div id="step">
	<div class="step4">
    	<h1>安装数据库</h1>
        <p>执行安装数据程序</p>
    </div>
    
  <div class="step_show">
   	<ul>
        	<li class="unactivated"></li>
            <li class="unactivated"></li>
            <li class="unactivated"></li>
            <li class="current"></li>
      </ul>
      <div class="step_bg"></div>
    </div>
</div>
<div id="main">
<div class="show_content" style="padding: 10px 0;">
 		<div id="install_info">
        	
        </div>
  </div>
  <div class="botton_area">
    <input name="input" type="button" value="正在安装.."  disabled="disabled"/>
  </div>
</div>
EOT;
    }  
    
/*------------------------------------------------------ */
//-- 写入config页面
/*------------------------------------------------------ */   
    function writeConfig($data,$dir){
        $host = $data['dbhost'];
        $dbuser = $data['dbuser'];
        $dbpassword = $data['dbpassword'];
        $dbname = $data['dbname'];
		$prefix = $data['prefix'];
        
        $content = <<<EOT
<?php
/*
 *配置文件
 *
 */ 
 
 define("PW_BACK","sunsonworld");
 
 //----------------------------------------------
 
 \$host          ="$host";        //host名
 \$host_name     ="$dbuser";      //host用户名
 \$host_password ="$dbpassword";  //host密码
 \$dbs           ="$dbname";      //数据库名
 \$code  		 ="utf8";         //编码制
 \$prefix        ="$prefix";       //表名前缀

 
 \$db =  new mysql(\$host,\$host_name,\$host_password,\$dbs,'',\$code);

 define("DB_PRE","$prefix");

 //----------------------------------------------

 
?>
EOT;
        if(!file_put_contents($dir,$content)){
            echo "写入失败!";
        }else{
            return true;
        }
    }
    
/*------------------------------------------------------ */
//-- 安装状态输出页面
/*------------------------------------------------------ */   
    function install_info($config_result,$type="all",$data_dir,$config_dir){
        if($type=="all"){
            $sql_data = $data_dir."ssw.sql";
            $sql_content = file_get_contents($sql_data);
            
      		include_once($config_dir);
    		$creat_db_sql = "CREATE DATABASE  `$dbs` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
            $db_flag = mysql_query($creat_db_sql)?1:0;

            if($db_flag){
			    unset($db);
                $db =  new mysql($host,$host_name,$host_password,$dbs,'',$code);
            }else{
                echo "无法创建(数据库已经存在或没有权限)";
            }
            
            
    		$sql_array = explode(";\n",$sql_content);//分割SQL语句,因为过长不能执行

    		foreach($sql_array as $sql_value){
                if(preg_match_all('/EXISTS.*`/',$sql_value,$table_data)){
                    $table  = preg_replace("/EXISTS/","",$table_data[0][0]);   //把所有EXISTS替换为空
				
                    $insert_flag = "创建".$prefix.$table."数据表";
                    
                }else{
                    $insert_flag = "插入".$table."数据";
                }

                //添加表前缀

                $sql_value= preg_replace("/CREATE[\sA-Z]+EXISTS\s+`\s?(\w+)\s?`\s?\(?/","CREATE TABLE IF NOT EXISTS `$prefix$1` (",$sql_value);          			
                $sql_value= preg_replace("/INSERT\s+INTO\s+`\s*(\w+)\s*`\s*\(?/","INSERT INTO `$prefix$1` (",$sql_value); 
                      			

				$result_data = $db->query($sql_value); //传入的还原SQL执行
    			
    			if($result_data){
                    $show_result = $insert_flag."成功..";				
    			}
                
                showStatus($show_result);
    		}//end foreach
        }



		Define('SALT','sunsonworld');//更改管理员信息
        $time=strtotime("+8 hours");
		$password=md5(SALT.trim($_POST['admin_password']));;
 	    $query="UPDATE `".$prefix."safety` SET `username`='$_POST[admin_name]', `password`='$password', `dateline`='$time' WHERE (`user`='0') LIMIT 1";
 	    $db->query($query);


        file_put_contents($data_dir."ssw_install.lock","");
        return "Complete";
    }

/*------------------------------------------------------ */
//-- 安装状态输出页面
/*------------------------------------------------------ */  
    function showStatus($message){
       echo '<script type="text/javascript">showmessage(\''.addslashes($message).' \');</script>'."\r\n";
    }

/*------------------------------------------------------ */
//-- 安装完成页面
/*------------------------------------------------------ */  
    function stepComplete(){
                echo <<<EOT
<div id="main">        
  <div class="complete_show">
    <h1>安装成功!</h1>
    <p><a href="../index.php">查看前台页面</a></p>
    <p><a href="../admin/login.php">进入后台页面管理</a></p>
  </div>
</div>
EOT;
    }
?>