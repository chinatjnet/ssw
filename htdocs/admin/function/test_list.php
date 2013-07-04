<?php
/*
 * Created on 2011-5-25
 *
 * To change the template for this generated file go to
* Window - Preferences - PHPeclipse - PHP - Code Templates
*/


 $title="测试";

 $temp->assign("title",$title);

 $str="<a href=\'\'>$title</a><span>测试是否成功</span>";
 $str=str_replace("{","",$str);
 $str=str_replace("}","",$str);

 $temp->assign("test","$str");

//$article_250_15_list;

/*
function tree($directory)
{
$mydir=dir($directory);

while($file=$mydir->read()){

   if((is_dir("$directory/$file")) AND ($file!=".") AND ($file!=".."))
   {
   	echo $file.'<br>';

   }


}


echo "</ul> ";
$mydir->close();
}


//开始运行
echo "<h2>目录为粉红色</h2><br> ";
tree("../function");
*/

?>

