<?php
/*
 * Created on 2011-5-2
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

 $Array_class_name=Array(

    "emotion"=>"心情微博",
    "self_info"=>"个人档案",
    "article"=>"文章",
    "album"=>"相片",
    "music"=>"音乐",
    "resource"=>"资源",
    "collect"=>"收藏",
    "guestbook"=>"访客留言",
    "lover"=>"情侣空间"
    );

 $class_name_str=$Array_class_name[$_POST['belong']];


 if($_POST['belong']=="article"||$_POST['belong']=="collect"||$_POST['belong']=="music"||$_POST['belong']=="resource"||$_POST['belong']=="album"){


    for($i=0;$i<count($cclass);$i++){

        $label_classid_in=$cclass[$i]['cclassid'];
		$cnav_str.="<a  href=\"javascript:void(0);\"  onclick=\" label_cchange('index.php?display=label_set',Get_id('list_upid').value,Get_id('type').value,'$label_upid','$label_classid_in','$label_fbelong');this.style.color='#333';this.style.fontWeight='bold'\">".$cclass[$i]['cclassname']."</a><h4>|</h4>";

		}

//echo ${$label_fbelong."_".$label_upid."_unit"};
//echo $label_fbelong."_".$label_upid."_".$label_classid."_latest";
    $belong_str=<<<EOT

				   <INPUT TYPE=hidden NAME=label_belong  VALUE="{$label_fbelong}" >
                   <span  class="tool_clsss  label_title_blue"  id="label_cnav"  style=" background:#EEF5FD;padding-bottom:4px;margin-top:-4px;">

                        <a href="javascript:void(0);"  onclick="label_cchange('index.php?display=label_set',Get_id('list_upid').value,Get_id('type').value,'$label_upid','-1','$label_fbelong');this.style.color='#333';this.style.fontWeight='bold';"   style="color:#333;font-weight:bold">整体标签</a><h4>|</h4>
                        $cnav_str

                   </span>

                   <div  id="ajax_cchange" >


                   <INPUT TYPE=hidden NAME=label_upid  VALUE="{$label_upid}"  id="label_upid">
                   <INPUT TYPE=hidden NAME=label_classid  VALUE="{$label_classid}"  id="label_classid">

                   <span  class="label" $label_all_style>
                       <input name="label_check" type="checkbox" value="unit"  class="label_check"  ${$label_fbelong."_".$label_upid."_unit_check"}/>
                       <input name="label_num" type="hidden" value="0">
                       <input name="label_tlength" type="hidden" value="0">
                       <input name="label_clength" type="hidden" value="0">
                       旗下栏目：
                       <font class="label_str">{\${$label_fbelong}_{$label_upid}_unit}</font>
                       <img src="$temp->template_dir/images/class_add_hover.gif"  class="show_label" onclick="privacy_set(2)"  width="16" height="16" />
                       【提示：分开调用请使用：{\${$label_fbelong}{$label_upid_str}_unit_\$i}】
                       <p  id="privacy_set2" style="display:none">
                         <textarea name="style_unit" cols="" rows="3"   onfocus="this.style.border='#21759B  solid  1px';this.style.background='#fff'"  onblur="this.style.border='#A5ACB2  solid  1px';this.style.background='#fff'">${$label_fbelong."_".$label_upid."_unit"}</textarea>
                         <input type="submit" name="button"  class="reset_default"  id="button" value="恢复默认" />
                       </p>
                       <div  class="sep_border"></div>
                   </span>

                   <span  class="label">
                       <input name="label_check" type="checkbox" value="latest"  class="label_check"  ${$label_fbelong."_".$label_upid."_".$label_classid."_latest_check"}/>
                       最新{$class_name_str}：
                       <font class="label_str">{\${$label_fbelong}{$label_upid_str}{$label_classid_str}_latest}</font>
                       <img src="$temp->template_dir/images/class_add_hover.gif"  class="show_label" onclick="privacy_set(3)"  width="16" height="16" />
                        调用个数：<input name="label_num" type="text"   class="label_num" value=${$label_fbelong."_".$label_upid."_".$label_classid."_latest_num"} />&nbsp;&nbsp;&nbsp;&nbsp;
                        标题长度：<input name="label_tlength" type="text"   class="label_num" value=${$label_fbelong."_".$label_upid."_".$label_classid."_latest_tlength"} />&nbsp;&nbsp;&nbsp;&nbsp;
                        内容长度：<input name="label_clength" type="text"   class="label_num" value=${$label_fbelong."_".$label_upid."_".$label_classid."_latest_clength"} />
                       <p  id="privacy_set3" style="display:none">
                         <textarea name="style_latest" cols="" rows="3"   onfocus="this.style.border='#21759B  solid  1px';this.style.background='#fff'"  onblur="this.style.border='#A5ACB2  solid  1px';this.style.background='#fff'">${$label_fbelong."_".$label_upid."_".$label_classid."_latest"}</textarea>
                         <input type="submit" name="button"  class="reset_default"  id="button" value="恢复默认" />
                       </p>
                       <div  class="sep_border"></div>
                   </span>
EOT;

    if($_POST['belong']=="article")

    $belong_str.=<<<EOT

                   <span  class="label">
                       <input name="label_check" type="checkbox" value="mview"  class="label_check"  ${$label_fbelong."_".$label_upid."_".$label_classid."_mview_check"}/>
                       点击最多：
                       <font class="label_str">{\${$label_fbelong}{$label_upid_str}{$label_classid_str}_mview}</font>
                       <img src="$temp->template_dir/images/class_add_hover.gif"  class="show_label" onclick="privacy_set(4)"  width="16" height="16" />
                        调用个数：<input name="label_num" type="text"   class="label_num" value=${$label_fbelong."_".$label_upid."_".$label_classid."_mview_num"}  />&nbsp;&nbsp;&nbsp;&nbsp;
                        标题长度：<input name="label_tlength" type="text"   class="label_num"  value=${$label_fbelong."_".$label_upid."_".$label_classid."_mview_tlength"}  />&nbsp;&nbsp;&nbsp;&nbsp;
                        内容长度：<input name="label_clength" type="text"   class="label_num"  value=${$label_fbelong."_".$label_upid."_".$label_classid."_mview_clength"}  />
                       <p  id="privacy_set4" style="display:none">
                         <textarea name="style_mview" cols="" rows="3"   onfocus="this.style.border='#21759B  solid  1px';this.style.background='#fff'"  onblur="this.style.border='#A5ACB2  solid  1px';this.style.background='#fff'">${$label_fbelong."_".$label_upid."_".$label_classid."_mview"}</textarea>
                         <input type="submit" name="button"  class="reset_default"  id="button" value="恢复默认" />
                       </p>
                       <div  class="sep_border"></div>
                   </span>


                   <span  class="label">
                       <input name="label_check" type="checkbox" value="mcomment"  class="label_check"  ${$label_fbelong."_".$label_upid."_".$label_classid."_mcomment_check"}/>
                       评论最多：
                       <font class="label_str">{\${$label_fbelong}{$label_upid_str}{$label_classid_str}_mcomment}</font>
                       <img src="$temp->template_dir/images/class_add_hover.gif"  class="show_label" onclick="privacy_set(5)"  width="16" height="16" />
                        调用个数：<input name="label_num" type="text"   class="label_num" value=${$label_fbelong."_".$label_upid."_".$label_classid."_mcomment_num"} />&nbsp;&nbsp;&nbsp;&nbsp;
                        标题长度：<input name="label_tlength" type="text"   class="label_num" value=${$label_fbelong."_".$label_upid."_".$label_classid."_mcomment_tlength"} />&nbsp;&nbsp;&nbsp;&nbsp;
                        内容长度：<input name="label_clength" type="text"   class="label_num" value=${$label_fbelong."_".$label_upid."_".$label_classid."_mcomment_clength"} />
                       <p  id="privacy_set5" style="display:none">
                         <textarea name="style_mcomment" cols="" rows="3"   onfocus="this.style.border='#21759B  solid  1px';this.style.background='#fff'"  onblur="this.style.border='#A5ACB2  solid  1px';this.style.background='#fff'">${$label_fbelong."_".$label_upid."_".$label_classid."_mcomment"}</textarea>
                         <input type="submit" name="button"  class="reset_default"  id="button" value="恢复默认" />
                       </p>
                       <div  class="sep_border"></div>
                   </span>

EOT;

$belong_str.=<<<EOT

                   <span  class="label">
                       <input name="label_check" type="checkbox" value="random"  class="label_check"  ${$label_fbelong."_".$label_upid."_".$label_classid."_random_check"}/>
                       随机{$class_name_str}：
                       <font class="label_str">{\${$label_fbelong}{$label_upid_str}{$label_classid_str}_random}</font>
                       <img src="$temp->template_dir/images/class_add_hover.gif"  class="show_label" onclick="privacy_set(6)"  width="16" height="16" />
                        调用个数：<input name="label_num" type="text"   class="label_num" value=${$label_fbelong."_".$label_upid."_".$label_classid."_random_num"} />&nbsp;&nbsp;&nbsp;&nbsp;
                        标题长度：<input name="label_tlength" type="text"   class="label_num" value=${$label_fbelong."_".$label_upid."_".$label_classid."_random_tlength"}  />&nbsp;&nbsp;&nbsp;&nbsp;
                        内容长度：<input name="label_clength" type="text"   class="label_num" value=${$label_fbelong."_".$label_upid."_".$label_classid."_random_clength"} />
                       <p  id="privacy_set6" style="display:none">
                         <textarea name="style_random" cols="" rows="3"   onfocus="this.style.border='#21759B  solid  1px';this.style.background='#fff'"  onblur="this.style.border='#A5ACB2  solid  1px';this.style.background='#fff'">${$label_fbelong."_".$label_upid."_".$label_classid."_random"}</textarea>
                         <input type="submit" name="button"  class="reset_default"  id="button" value="恢复默认" />
                       </p>
                       <div  class="sep_border"></div>
                   </span>
EOT;

    if($_POST['belong']=="article")

    $belong_str.=<<<EOT
                   <span  class="label">
                       <input name="label_check" type="checkbox" value="imgtext"  class="label_check"  ${$label_fbelong."_".$label_upid."_".$label_classid."_imgtext_check"}/>
                       图片文章：
                       <font class="label_str">{\${$label_fbelong}{$label_upid_str}{$label_classid_str}_imgtext}</font>
                       <img src="$temp->template_dir/images/class_add_hover.gif"  class="show_label" onclick="privacy_set(7)"  width="16" height="16" />
                        每页调用：<input name="label_num" type="text"   class="label_num" value=${$label_fbelong."_".$label_upid."_".$label_classid."_imgtext_num"} />&nbsp;&nbsp;&nbsp;&nbsp;
                        标题长度：<input name="label_tlength" type="text"   class="label_num" value=${$label_fbelong."_".$label_upid."_".$label_classid."_imgtext_tlength"} />&nbsp;&nbsp;&nbsp;&nbsp;
                        内容长度：<input name="label_clength" type="text"   class="label_num" value=${$label_fbelong."_".$label_upid."_".$label_classid."_imgtext_clength"} />
                       <p  id="privacy_set7" style="display:none">
                         <textarea name="style_imgtext" cols="" rows="3"   onfocus="this.style.border='#21759B  solid  1px';this.style.background='#fff'"  onblur="this.style.border='#A5ACB2  solid  1px';this.style.background='#fff'">${$label_fbelong."_".$label_upid."_".$label_classid."_imgtext"}</textarea>
                         <input type="submit" name="button"  class="reset_default"  id="button" value="恢复默认" />
                         <input name="label_check" type="checkbox" value="imgtext_page" style="margin-left:90px;" class="label_check"  ${$label_fbelong."_".$label_upid."_".$label_classid."_imgtext_page_check"}/>分页
                         <textarea name="style_imgtext_page" cols="" rows="3" style="display:none">imgtext_page</textarea>
                         <input name="label_num" type="hidden" value="0">
                         <input name="label_tlength" type="hidden" value="0">
                         <input name="label_clength" type="hidden" value="0">
                         <i style="margin-left:10px;">分页标签：</i><font class="label_str">{\${$label_fbelong}{$label_upid_str}{$label_classid_str}_imgtext_page}</font>
                       </p>
                       <div  class="sep_border"></div>
                   </span>

EOT;

$belong_str.=<<<EOT
                    <span  class="label">
                       <input name="label_check" type="checkbox" value="list"  class="label_check" ${$label_fbelong."_".$label_upid."_".$label_classid."_list_check"}/>
                       {$class_name_str}列表：
                       <font class="label_str">{\${$label_fbelong}{$label_upid_str}{$label_classid_str}_list}</font>
                       <img src="$temp->template_dir/images/class_add_hover.gif"  class="show_label" onclick="privacy_set(8)"  width="16" height="16" />
                        每页调用：<input name="label_num" type="text"   class="label_num" value=${$label_fbelong."_".$label_upid."_".$label_classid."_list_num"} />&nbsp;&nbsp;&nbsp;&nbsp;
                        标题长度：<input name="label_tlength" type="text"   class="label_num" value=${$label_fbelong."_".$label_upid."_".$label_classid."_list_tlength"} />&nbsp;&nbsp;&nbsp;&nbsp;
                        内容长度：<input name="label_clength" type="text"   class="label_num" value=${$label_fbelong."_".$label_upid."_".$label_classid."_list_clength"} />
                       <p  id="privacy_set8" style="display:none">
                         <textarea name="style_list" cols="" rows="3"   onfocus="this.style.border='#21759B  solid  1px';this.style.background='#fff'"  onblur="this.style.border='#A5ACB2  solid  1px';this.style.background='#fff'">${$label_fbelong."_".$label_upid."_".$label_classid."_list"}</textarea>
                         <input type="submit" name="button"  class="reset_default"  id="button" value="恢复默认" />
                         <i style="margin-left:90px;">分页标签：</i><font class="label_str">{\${$label_fbelong}{$label_upid_str}{$label_classid_str}_list_page}</font>
                       </p>
                       <div  class="sep_border"></div>
                   </span>
EOT;

$belong_str.=<<<EOT


                   <div  style="clear:both"></div>
                   </div>

EOT;

    if($_POST['belong']=="article")

    $belong_str.=<<<EOT
                   <span  class="tool_clsss  label_title_blue" >
                        <input name="label_check" type="checkbox" value="pageview"  class="label_check"  ${$label_fbelong."_".$label_upid."_".$label_classid."_pageview_check"} />
                        <input name="label_num" type="hidden" value="0">
                        <input name="label_tlength" type="hidden" value="0">
                        <input name="label_clength" type="hidden" value="0">
                        <b><a href="">文章阅读页</a></b>
                        【注意事项：以下内容只能由阅读页面调用，其他页面无法调用】
                        <textarea name="style_pageview" cols="" rows="3"  style="display:none">pageview</textarea>
                   </span>

                   <span  class="label">
                       <input  type="checkbox" value=""  style="visibility:hidden"/>
                       文章标题：<font class="label_str">{\$article{$label_upid_str}_title}</font>
                       文章分类：<font class="label_str">{\$article{$label_upid_str}_belong}</font>
                       发表时间：<font class="label_str">{\$article{$label_upid_str}_time}</font><br>
                       <div  class="sep_border"></div>
                       <input  type="checkbox" value=""  style="visibility:hidden"/>
                       文章内容：<font class="label_str">{\$article{$label_upid_str}_content}</font>
                       阅读次数：<font class="label_str">{\$article{$label_upid_str}_viewnum}</font>
                       评论数量：<font class="label_str">{\$article{$label_upid_str}_cnum}</font>

                       <div  class="sep_border"></div>
                   </span>


                   <span  class="label">
                       <input  type="checkbox"  style="visibility:hidden"/>
                       <input name="label_check" type="checkbox" value="comment"  class="label_check"  ${$label_fbelong."_".$label_upid."_".$label_classid."_comment_check"}/>
                       评论列表：
                       <font class="label_str"  style="width:165px;">{\$article{$label_upid_str}_comment}</font>
                       <img src="$temp->template_dir/images/class_add_hover.gif"  class="show_label" onclick="privacy_set(9)"  width="16" height="16" />
                        每页调用：<input name="label_num" type="text"   class="label_num" value=${$label_fbelong."_".$label_upid."_".$label_classid."_comment_num"} />&nbsp;&nbsp;&nbsp;&nbsp;
                        标题长度：<input name="label_tlength" type="text"   class="label_num" value=${$label_fbelong."_".$label_upid."_".$label_classid."_comment_tlength"} />&nbsp;&nbsp;&nbsp;&nbsp;
                        内容长度：<input name="label_clength" type="text"   class="label_num" value=${$label_fbelong."_".$label_upid."_".$label_classid."_comment_clength"} />
                       <p  id="privacy_set9" style="display:none">
                         <textarea name="style_comment" cols="" rows="3"   onfocus="this.style.border='#21759B  solid  1px';this.style.background='#fff'"  onblur="this.style.border='#A5ACB2  solid  1px';this.style.background='#fff'">${$label_fbelong."_".$label_upid."_".$label_classid."_comment"}</textarea>
                         <input type="submit" name="button"  class="reset_default"  id="button" value="恢复默认" />
                         <i style="margin-left:90px;">分页标签：</i><font class="label_str">{\$article{$label_upid_str}_comment_page}</font>
                       </p>
                       <div  class="sep_border"></div>
                   </span>
EOT;

$belong_str.=<<<EOT

                   <span   class="label">
                        <p><input type="button" name="button"  class="reset_default"  id="button" value="保存设置"  style="font-weight:bold;margin-left:300px;"  onclick="postchg();"/></p>
                   </span>

EOT;




 }



 if($_POST['belong']=="self_info"){




    $belong_str=<<<EOT

				   <INPUT TYPE=hidden NAME=label_belong  VALUE="{$label_fbelong}" >

                   <div  id="ajax_cchange" >


                   <INPUT TYPE=hidden NAME=label_upid  VALUE="{$label_upid}"  id="label_upid">
                   <INPUT TYPE=hidden NAME=label_classid  VALUE="{$label_classid}"  id="label_classid">

                   <span  class="tool_clsss  label_title_blue" style=" background:#EEF5FD;padding-bottom:4px;margin-top:-4px;">
                        <input name="label_check" type="checkbox" value="basic_info"  class="label_check"  ${$label_fbelong."_".$label_upid."_".$label_classid."_basic_info_check"} />
                        <input name="label_num" type="hidden" value="0">
                        <input name="label_tlength" type="hidden" value="0">
                        <input name="label_clength" type="hidden" value="0">
                        <b><a href="">基本资料</a></b>
                        <textarea name="style_basic_info" cols="" rows="3"  style="display:none">basic_info</textarea>
                   </span>

                   <span  class="label">
                       <input  type="checkbox" value=""  style="visibility:hidden"/>
                       用户昵称：<font class="label_str">{\$s_nickname}</font>
                       真实姓名：<font class="label_str">{\$s_truename}</font>
                       性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：<font class="label_str">{\$s_sex}</font><br>
                       <div  class="sep_border"></div>
                       <input  type="checkbox" value=""  style="visibility:hidden"/>
                       出生日期：<font class="label_str">{\$s_birthday}</font>
                       出生城市：<font class="label_str">{\$s_birthplace}</font>
                       现居城市：<font class="label_str">{\$s_nowplace}</font>
                       <div  class="sep_border"></div>
                       <input  type="checkbox" value=""  style="visibility:hidden"/>
                       情感状态：<font class="label_str">{\$s_lovestate}</font>
                       血&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;型：<font class="label_str">{\$s_bloodtype}</font>
                       个性签名：<font class="label_str">{\$s_uniqsign}</font>
                       <div  class="sep_border"></div>
                       <input  type="checkbox" value=""  style="visibility:hidden"/>
                       个人说明：<font class="label_str">{\$s_selfintro}</font>
                       个人主页：<font class="label_str">{\$s_ownpage}</font>
                       头像&nbsp;(小)：<font class="label_str">{\$s_headpic_s}</font>
                       <div  class="sep_border"></div>
                       <input  type="checkbox" value=""  style="visibility:hidden"/>
                       头像&nbsp;(大)：<font class="label_str">{\$s_headpic_b}</font>
                       <div  class="sep_border"></div>

                   </span>




                   <span  class="tool_clsss  label_title_blue" >
                        <input name="label_check" type="checkbox" value="contact_info"  class="label_check"  ${$label_fbelong."_".$label_upid."_".$label_classid."_contact_info_check"} />
                        <input name="label_num" type="hidden" value="0">
                        <input name="label_tlength" type="hidden" value="0">
                        <input name="label_clength" type="hidden" value="0">
                        <b><a href="">联系方式</a></b>
                        <textarea name="style_contact_info" cols="" rows="3"  style="display:none">contact_info</textarea>
                   </span>

                   <span  class="label">
                       <input  type="checkbox" value=""  style="visibility:hidden"/>
                       固定电话：<font class="label_str">{\$s_phone}</font>
                       手&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;机：<font class="label_str">{\$s_mobile}</font>
                       Q&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Q号：<font class="label_str">{\$s_qq}</font><br>
                       <div  class="sep_border"></div>
                       <input  type="checkbox" value=""  style="visibility:hidden"/>
                       MSN账号：<font class="label_str">{\$s_msn}</font>
                       Email&nbsp;&nbsp;&nbsp;&nbsp;：<font class="label_str">{\$s_email}</font>

                       <div  class="sep_border"></div>
                   </span>




                   <span  class="tool_clsss  label_title_blue" >
                        <input name="label_check" type="checkbox" value="edu_info"  class="label_check"  ${$label_fbelong."_".$label_upid."_".$label_classid."_edu_info_check"} />
                        <input name="label_num" type="hidden" value="0">
                        <input name="label_tlength" type="hidden" value="0">
                        <input name="label_clength" type="hidden" value="0">
                        <b><a href="">教育工作</a></b>
                        <textarea name="style_edu_info" cols="" rows="3"  style="display:none">edu_info</textarea>
                   </span>

                   <span  class="label">
                       <input  type="checkbox" value=""  style="visibility:hidden"/>
                       学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;历：<font class="label_str">{\$s_edu_bg}</font>
                       毕业小学：<font class="label_str">{\$s_prischool}</font>
                       毕业中学：<font class="label_str">{\$s_midschool}</font><br>
                       <div  class="sep_border"></div>
                       <input  type="checkbox" value=""  style="visibility:hidden"/>
                       毕业大学：<font class="label_str">{\$s_university}</font>
                       研究生院：<font class="label_str">{\$s_academy}</font>
                       职&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;业：<font class="label_str">{\$s_profession}</font>
                       <div  class="sep_border"></div>
                       <input  type="checkbox" value=""  style="visibility:hidden"/>
                       公&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;司：<font class="label_str">{\$s_company}</font>
                       职&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;位：<font class="label_str">{\$s_position}</font>
                       年收入&nbsp;&nbsp;&nbsp;&nbsp;：<font class="label_str">{\$s_income}</font>

                       <div  class="sep_border"></div>
                   </span>


                   <span  class="tool_clsss  label_title_blue" >
                        <input name="label_check" type="checkbox" value="hobby_info"  class="label_check"  ${$label_fbelong."_".$label_upid."_".$label_classid."_hobby_info_check"} />
                        <input name="label_num" type="hidden" value="0">
                        <input name="label_tlength" type="hidden" value="0">
                        <input name="label_clength" type="hidden" value="0">
                        <b><a href="">兴趣爱好</a></b>
                        <textarea name="style_hobby_info" cols="" rows="3"  style="display:none">hobby_info</textarea>
                   </span>

                   <span  class="label">
                       <input  type="checkbox" value=""  style="visibility:hidden"/>
                       我的偶像：<font class="label_str">{\$s_idol}</font>
                       喜爱音乐：<font class="label_str">{\$s_music}</font>
                       喜爱电影：<font class="label_str">{\$s_movie}</font><br>
                       <div  class="sep_border"></div>
                       <input  type="checkbox" value=""  style="visibility:hidden"/>
                       喜爱书籍：<font class="label_str">{\$s_book}</font>
                       喜爱运动：<font class="label_str">{\$s_sport}</font>
                       其它爱好：<font class="label_str">{\$s_other_hobby}</font>
                       <div  class="sep_border"></div>
                   </span>


                   <span   class="label">
                        <p><input type="button" name="button"  class="reset_default"  id="button" value="保存设置"  style="font-weight:bold;margin-left:300px;"  onclick="postchg();"/></p>
                   </span>



                   <div  style="clear:both"></div>
                   </div>

EOT;





 }


 if($_POST['belong']=="lover"){


 	$belong_str="<br><br><font style='font-size:12px;margin-left:15px;'>模块正在调试中，请关注后续版本系统</font>";


 }



 if($_POST['belong']=="emotion"||$_POST['belong']=="guestbook"){



    $belong_str=<<<EOT

				   <INPUT TYPE=hidden NAME=label_belong  VALUE="{$label_fbelong}" >

                   <div  id="ajax_cchange" >

                   <INPUT TYPE=hidden NAME=label_upid  VALUE="{$label_upid}"  id="label_upid">
                   <INPUT TYPE=hidden NAME=label_classid  VALUE="{$label_classid}"  id="label_classid">

                   <span  class="label">
                       <input name="label_check" type="checkbox" value="latest"  class="label_check"  ${$label_fbelong."_".$label_upid."_".$label_classid."_latest_check"}/>
                       最新发表：
                       <font class="label_str">{\${$label_fbelong}_latest}</font>
                       <img src="$temp->template_dir/images/class_add_hover.gif"  class="show_label" onclick="privacy_set(3)"  width="16" height="16" />
                        调用个数：<input name="label_num" type="text"   class="label_num" value=${$label_fbelong."_".$label_upid."_".$label_classid."_latest_num"} />&nbsp;&nbsp;&nbsp;&nbsp;
                       <input name="label_tlength" type="text"   class="label_num"  style="display:none;"  value=${$label_fbelong."_".$label_upid."_".$label_classid."_latest_tlength"}/>
                        内容长度：<input name="label_clength" type="text"   class="label_num" value=${$label_fbelong."_".$label_upid."_".$label_classid."_latest_clength"} />
                       <p  id="privacy_set3" style="display:none">
                         <textarea name="style_latest" cols="" rows="3"   onfocus="this.style.border='#21759B  solid  1px';this.style.background='#fff'"  onblur="this.style.border='#A5ACB2  solid  1px';this.style.background='#fff'">${$label_fbelong."_".$label_upid."_".$label_classid."_latest"}</textarea>
                         <input type="submit" name="button"  class="reset_default"  id="button" value="恢复默认" />
                       </p>
                       <div  class="sep_border"></div>
                   </span>


                    <span  class="label">
                       <input name="label_check" type="checkbox" value="list"  class="label_check" ${$label_fbelong."_".$label_upid."_".$label_classid."_list_check"}/>
                       内容列表：
                       <font class="label_str">{\${$label_fbelong}_list}</font>
                       <img src="$temp->template_dir/images/class_add_hover.gif"  class="show_label" onclick="privacy_set(8)"  width="16" height="16" />
                        每页调用：<input name="label_num" type="text"   class="label_num" value=${$label_fbelong."_".$label_upid."_".$label_classid."_list_num"} />&nbsp;&nbsp;&nbsp;&nbsp;
                       <input name="label_tlength" type="text"   class="label_num"   style="display:none;"  value=${$label_fbelong."_".$label_upid."_".$label_classid."_list_tlength"}/>
                        内容长度：<input name="label_clength" type="text"   class="label_num" value=${$label_fbelong."_".$label_upid."_".$label_classid."_list_clength"} />
                       <p  id="privacy_set8" style="display:none">
                         <textarea name="style_list" cols="" rows="3"   onfocus="this.style.border='#21759B  solid  1px';this.style.background='#fff'"  onblur="this.style.border='#A5ACB2  solid  1px';this.style.background='#fff'">${$label_fbelong."_".$label_upid."_".$label_classid."_list"}</textarea>
                         <input type="submit" name="button"  class="reset_default"  id="button" value="恢复默认" />
                         <i style="margin-left:90px;">分页标签：</i><font class="label_str">{\${$label_fbelong}_list_page}</font>
                       </p>
                       <div  class="sep_border"></div>
                   </span>



                   <div  style="clear:both"></div>
                   </div>


                   <span   class="label">
                        <p><input type="button" name="button"  class="reset_default"  id="button" value="保存设置"  style="font-weight:bold;margin-left:300px;"  onclick="postchg();"/></p>
                   </span>



EOT;




 }

 if($_POST['belong']=="collect1"||$_POST['belong']=="music1"||$_POST['belong']=="resource1"){


    $belong_str=<<<EOT

				   <INPUT TYPE=hidden NAME=label_belong  VALUE="{$label_fbelong}" >

                   <div  id="ajax_cchange" >


                   <INPUT TYPE=hidden NAME=label_upid  VALUE="{$label_upid}"  id="label_upid">
                   <INPUT TYPE=hidden NAME=label_classid  VALUE="{$label_classid}"  id="label_classid">

EOT;

 }




 echo $belong_str;


?>
