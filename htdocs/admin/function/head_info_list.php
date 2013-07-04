<?php
/*
 * Created on 2011-5-24
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

$query="SELECT head_pic  FROM `".DB_PRE."self_info` WHERE `user`='$_SESSION[user]' LIMIT 1";
$row=$db->fetch_array($db->query($query));

$head_pic_origin=$row[head_pic];
$head_pic_name=str_replace(".jpg","",$head_pic_origin);

$pic_path=SITE_ROOT.'/admin/function/pic_cut';

$head_origin=$pic_path.'/avatar_origin/'.$head_pic_name.'.jpg';
$head_big=$pic_path.'/avatar_big/'.$head_pic_name.'_big.jpg';
$head_small=$pic_path.'/avatar_small/'.$head_pic_name.'_small.jpg';

$temp->assign("head_origin",$head_origin);
$temp->assign("head_big",$head_big);
$temp->assign("head_small",$head_small);

?>
