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

		$cnav_str.="<a  href=\"javascript:void(0);\"  oncick=\" label_cchange()\">".$cclass[$i]['cclassname']."</a><h4>|</h4>";

		}

//echo ${$label_fbelong."_".$label_upid."_unit"};
//echo $label_fbelong."_".$label_upid."_".$label_classid."_latest";

    $belong_str=<<<EOT


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


 }

//sleep(30);

 echo $belong_str;


?>
