<?php
/*
 * Created on 2011-4-15
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

 function html2text($str,$encode = 'utf-8'){
 $str = preg_replace("/<style .*?<\/style>/is", "", $str);
 $str = preg_replace("/<script .*?<\/script>/is", "", $str);
 //$str = preg_replace("/<br \s*\/?\/>/i", "\n", $str);
 $str = preg_replace("/<\/?p>/i", "\n", $str);
 $str = preg_replace("/<\/?td>/i", "\n", $str);
 $str = preg_replace("/<\/?div>/i", "\n", $str);
 $str = preg_replace("/<\/?span>/i", "", $str);
 $str = preg_replace("/<\/?blockquote>/i", "\n", $str);
 $str = preg_replace("/<\/?li>/i", "\n", $str);
 $str = preg_replace("/\&nbsp\;/i", " ", $str);
 $str = preg_replace("/\&nbsp/i", " ", $str);
 $str = preg_replace("/\&amp\;/i", "&", $str);
 $str = preg_replace("/\&amp/i", "&", $str);
 $str = preg_replace("/\&lt\;/i", "<", $str);
 $str = preg_replace("/\&lt/i", "<", $str);
 $str = preg_replace("/\&ldquo\;/i", '"', $str);
 $str = preg_replace("/\&ldquo/i", '"', $str);
 $str = preg_replace("/\&lsquo\;/i", "'", $str);
 $str = preg_replace("/\&lsquo/i", "'", $str);
 $str = preg_replace("/\&rsquo\;/i", "'", $str);
 $str = preg_replace("/\&rsquo/i", "'", $str);
 $str = preg_replace("/\&gt\;/i", ">", $str);
 $str = preg_replace("/\&gt/i", ">", $str);
 $str = preg_replace("/\&rdquo\;/i", '"', $str);
 $str = preg_replace("/\&rdquo/i", '"', $str);
 $str = strip_tags($str);
 $str = html_entity_decode($str, ENT_QUOTES, $encode);
 $str = preg_replace("/\&\#.*?\;/i", "", $str);
 return $str;}



function unhtml($content){								//定义自定义函数的名称
	$content=htmlspecialchars($content);                //转换文本中的特殊字符
	$content=str_replace(chr(13),"<br>",$content);		//替换文本中的换行符
    $content=str_replace(chr(32),"&nbsp;",$content);		//替换文本中的&nbsp;
    $content=str_replace("[_[","<",$content);			//替换文本中的大于号
    $content=str_replace(")_)",">",$content);			//替换文本中的小于号
    $content=str_replace("|_|","",$content);				//替换文本中的空格
                                                       // $content= ereg_replace(" ","",$content);
	return trim($content);								//删除文本中首尾的空格
}

?>
