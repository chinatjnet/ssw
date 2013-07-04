<?php

/**
 * @author sunsonworld.com
 * @copyright 2011
 * ==============
 * 安装页面
 * ==============
 */
 error_reporting(0);
 ob_start();


    header("Content-type: text/html; charset=utf-8");
    include_once("includes/install_template.php");

    
/*------------------------------------------------------ */
//-- 定义路径
/*------------------------------------------------------ */ 
        $now_dir = str_replace("\\","/",dirname(__FILE__));
        $project_dir = substr($now_dir,0,-8);   //后台位置
        
        define("PROJECT_PATH",$project_dir);//项目位置  
        if(file_exists(PROJECT_PATH."/install/data/ssw_install.lock") AND $_REQUEST['step']!="complete"){
		
		echo "系统已经存在，如果需要重新安装，请删除data目录下的ssw_install.lock文件!";
		exit();
		
		}
/*------------------------------------------------------ */
//-- 处理传递变量
/*------------------------------------------------------ */  
            
    /*没有传值时默认为空*/
    if(empty($_REQUEST['step'])){
        $_REQUEST['step'] = '';
    }else{
        $inject = inject_check($_REQUEST['step']);
        if($inject){
            header("index.php");
        }
    }
    
/*------------------------------------------------------ */
//-- 安装首页
/*------------------------------------------------------ */  
    if($_REQUEST['step'] ==''){
        showHeader();//头部
        indexTemplate();
        showFooter();//底部
        if(isset($_POST['agree'])){
            header("location:index.php?step=1");
        }
        $test = "1111";
    }

/*------------------------------------------------------ */
//-- 安装第一步
/*------------------------------------------------------ */   
    if($_REQUEST['step'] =='1'){
        showHeader();//头部
        step1();
        showFooter();//底部
        if(isset($_POST['previous'])){
            header("location:index.php");
        }
        if(isset($_POST['next'])){
            header("location:index.php?step=2");
        }
		ob_end_flush();
    }   

/*------------------------------------------------------ */
//-- 安装第二步
/*------------------------------------------------------ */   
    if($_REQUEST['step'] =='2'){
        showHeader();//头部
        step2();
        showFooter();//底部
        if(isset($_POST['previous'])){
            header("location:index.php");
        }
        if(isset($_POST['next'])){
            header("location:index.php?step=3&data=".$_POST['data']);
        }
    }  
    
/*------------------------------------------------------ */
//-- 安装第三步
/*------------------------------------------------------ */       
    if($_REQUEST['step'] =='3'){
        
        showHeader();//头部
        step3();
        showFooter();//底部

    }

/*------------------------------------------------------ */
//-- 安装第四步
/*------------------------------------------------------ */   
    if($_REQUEST['step'] =='4'){

        if(!isset($_POST)){
            header("location:index.php");
            exit();
        }
        $config_dir = PROJECT_PATH."/include/db_config.php";//写入的配置文件
        $data_dir = PROJECT_PATH."/install/data/";//读取sql的路径
        
        showHeader();//头部
        step4();
        $config_result = writeConfig($_POST,$config_dir);
        
        $Complete = install_info($config_result,"all",$data_dir,$config_dir);
        if($Complete=="Complete"){
            echo '<script type="text/javascript">setTimeout(function(){window.location=\'index.php?step=complete\'}, 3000);</script>';
        }
        showFooter();//底部
		ob_end_flush();
    }
    
/*------------------------------------------------------ */
//-- 安装完成
/*------------------------------------------------------ */  
    if($_REQUEST['step'] =='complete'){

        showHeader();//头部
        stepComplete();
        showFooter();//底部
    }
/** 
 * 
 * 防SQL注入
 * 
 * @access  public
 * @param string $get
 * @return bool
 */
 
function inject_check($get){
			
	return preg_match('#select|update|insert|delete|union|into|load_file|outfile|\'|\*\.#',$get);
			
}
?>