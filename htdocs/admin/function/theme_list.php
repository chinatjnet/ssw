<?php
/*
 * Created on 2011-5-31
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

 #PRESENT THEME

  $query="SELECT theme  FROM `".DB_PRE."siteconfig` LIMIT 1";
  $theme_present=$db->fetch_array($db->query($query));
  $theme_present=$theme_present['theme'];
  $theme_present_view='../themes/'.$theme_present.'/view.png';
  if(file_exists($theme_present_view)){

      $theme_present_view='../themes/'.$theme_present.'/view.png';

  }else{

      $theme_present_view='function/no_view.png';

  }



  $temp->assign("theme_present_view", $theme_present_view);
  $temp->assign("theme_present", $theme_present);



 #THE THEME THAT WE HAVE

  $directory="../themes";

   $mydir=dir($directory);

   while($file=$mydir->read()){

      if((is_dir("$directory/$file")) AND ($file!=".") AND ($file!=".."))
      {

      	$view_url='../themes/'.$file.'/view.png';
      	if(file_exists($view_url)){

      		$view_url='../themes/'.$file.'/view.png';

      	}else{

      		$view_url='function/no_view.png';

      	}
      	//echo $view_url;
      	$theme[]=array(

            	"name"=>$file,
            	"view"=>$view_url,

      	);

      }

   }

   $temp->assign("theme", $theme);
   $mydir->close();



?>
