<?php
/*
 * Created on 2011-5-2
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

 if($_POST['change']=="contact_info"){


    $change_str=<<<EOT

                   <form action="index.php?display=self_info" method="POST"  name="selfinfo_edit"   class="info_form">

                   <INPUT TYPE=hidden NAME=display  VALUE="self_info">
                   <INPUT TYPE=hidden NAME=do  VALUE="contact_info">

                   <span  class="info_span"><b>固定电话</b>
                        <p>
                          <input name="phone" type="text"   value="$phone[0]"  class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/>
                        </p>
                         <select name="selfinfo_show[]" >
                             <option value="3" $show_class12_3>所有可见</option>
                             <option value="2" $show_class12_2>好友可见</option>
                             <option value="1" $show_class12_1>情侣可见</option>
                             <option value="0" $show_class12_0>主人可见</option>
                         </select>
                   </span>

                   <span  class="info_span"><b>手机</b>
                   <p><input name="mobile" type="text"  value="$mobile[0]" class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/></p>
                         <select name="selfinfo_show[]" >
                             <option value="3" $show_class13_3>所有可见</option>
                             <option value="2" $show_class13_2>好友可见</option>
                             <option value="1" $show_class13_1>情侣可见</option>
                             <option value="0" $show_class13_0>主人可见</option>
                         </select>
                   </span>

                   <span  class="info_span"><b>QQ号</b>
                         <p><input name="qq" type="text" value="$qq[0]"  class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/></p>
                         <select name="selfinfo_show[]" >
                             <option value="3" $show_class14_3>所有可见</option>
                             <option value="2" $show_class14_2>好友可见</option>
                             <option value="1" $show_class14_1>情侣可见</option>
                             <option value="0" $show_class14_0>主人可见</option>
                         </select>
                   </span>

                   <span  class="info_span"><b>MSN账号</b>
                         <p><input name="msn" type="text"  value="$msn[0]"  class="text_input"    onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'" /><font>(格式：2011-03-07)</font></p>
                         <select name="selfinfo_show[]" >
                             <option value="3" $show_class15_3>所有可见</option>
                             <option value="2" $show_class15_2>好友可见</option>
                             <option value="1" $show_class15_1>情侣可见</option>
                             <option value="0" $show_class15_0>主人可见</option>
                         </select>
                   </span>

                   <span  class="info_span"><b>Email</b>
                         <p><input name="email" type="text"  value="$email[0]"  class="text_input"    onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'" /><font>(格式：2011-03-07)</font></p>
                         <select name="selfinfo_show[]" >
                             <option value="3" $show_class16_3>所有可见</option>
                             <option value="2" $show_class16_2>好友可见</option>
                             <option value="1" $show_class16_1>情侣可见</option>
                             <option value="0" $show_class16_0>主人可见</option>
                         </select>
                   </span>

                   <span   class="info_span"><b></b>
                        <p><b  onclick="document.selfinfo_edit.submit()">保存</b></p>
                   </span>

                   </form>
                   <div class="clear"></div>


EOT;
 }



 if($_POST['change']=="edu_info"){


    $change_str=<<<EOT

                   <form action="index.php?display=self_info" method="POST"  name="selfinfo_edit"   class="info_form">

                   <INPUT TYPE=hidden NAME=display  VALUE="self_info">
                   <INPUT TYPE=hidden NAME=do  VALUE="edu_info">

                   <span   class="info_span"><b></b>
                          <p><b  style="border:0px; background:none;margin-left:100px;_margin-left:50px;">教育情况</b></p>
                   </span>
                   <span  class="info_span"><b>学历</b>
                         <p><select name="edu_bg">
                             <option value="prischool" $edu_bg_class_prischool>小学</option>
                             <option value="midschool" $edu_bg_class_midschool>高中</option>
                             <option value="junior_college" $edu_bg_class_junior_college>专科</option>
                             <option value="undergraduate" $edu_bg_class_undergraduate>本科</option>
                             <option value="master" $edu_bg_class_master>硕士</option>
                             <option value="doctor" $edu_bg_class_doctor>博士</option>
                             <option value="other" $edu_bg_class_other>其它</option>
                         </select>
                         </p>
                         <select name="selfinfo_show[]" >
                             <option value="3" $show_class17_3>所有可见</option>
                             <option value="2" $show_class17_2>好友可见</option>
                             <option value="1" $show_class17_1>情侣可见</option>
                             <option value="0" $show_class17_0>主人可见</option>
                         </select>
                   </span>




                   <span  class="info_span"><b>毕业小学</b>
                        <p>
                          <input name="prischool" type="text"  value="$prischool[0]" class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/>
                        </p>
                         <select name="selfinfo_show[]" >
                             <option value="3" $show_class18_3>所有可见</option>
                             <option value="2" $show_class18_2>好友可见</option>
                             <option value="1" $show_class18_1>情侣可见</option>
                             <option value="0" $show_class18_0>主人可见</option>
                         </select>
                   </span>

                   <span  class="info_span"><b>毕业中学</b>
                   <p><input name="midschool" type="text"   value="$midschool[0]" class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/></p>
                         <select name="selfinfo_show[]" >
                             <option value="3" $show_class19_3>所有可见</option>
                             <option value="2" $show_class19_2>好友可见</option>
                             <option value="1" $show_class19_1>情侣可见</option>
                             <option value="0" $show_class19_0>主人可见</option>
                         </select>
                   </span>

                   <span  class="info_span"><b>毕业大学</b>
                   <p><input name="university" type="text"  value="$university[0]"  class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/></p>
                         <select name="selfinfo_show[]" >
                             <option value="3" $show_class20_3>所有可见</option>
                             <option value="2" $show_class20_2>好友可见</option>
                             <option value="1" $show_class20_1>情侣可见</option>
                             <option value="0" $show_class20_0>主人可见</option>
                         </select>
                   </span>

                    <span  class="info_span"><b>研究生院校</b>
                   <p><input name="academy" type="text"  value="$academy[0]"  class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/></p>
                         <select name="selfinfo_show[]" >
                             <option value="3" $show_class21_3>所有可见</option>
                             <option value="2" $show_class21_2>好友可见</option>
                             <option value="1" $show_class21_1>情侣可见</option>
                             <option value="0" $show_class21_0>主人可见</option>
                         </select>
                   </span>

                   <span   class="info_span"><b></b>
                          <p><b  style="border:0px; background:none;margin-left:100px;_margin-left:50px;">工作情况</b></p>
                   </span>

                   <span  class="info_span"><b>职业</b>
                   <p><input name="profession" type="text" value="$profession[0]"  class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/></p>
                         <select name="selfinfo_show[]" >
                             <option value="3" $show_class22_3>所有可见</option>
                             <option value="2" $show_class22_2>好友可见</option>
                             <option value="1" $show_class22_1>情侣可见</option>
                             <option value="0" $show_class22_0>主人可见</option>
                         </select>
                   </span>

                   <span  class="info_span"><b>公司</b>
                   <p><input name="company" type="text" value="$company[0]"  class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/></p>
                         <select name="selfinfo_show[]" >
                             <option value="3" $show_class23_3>所有可见</option>
                             <option value="2" $show_class23_2>好友可见</option>
                             <option value="1" $show_class23_1>情侣可见</option>
                             <option value="0" $show_class23_0>主人可见</option>
                         </select>
                   </span>
                   <span  class="info_span"><b>职位</b>
                   <p><input name="position" type="text"  value="$position[0]"   class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/></p>
                         <select name="selfinfo_show[]" >
                             <option value="3" $show_class24_3>所有可见</option>
                             <option value="2" $show_class24_2>好友可见</option>
                             <option value="1" $show_class24_1>情侣可见</option>
                             <option value="0" $show_class24_0>主人可见</option>
                         </select>
                   </span>

                   <span  class="info_span"><b>年收入</b>
                   <p><input name="income" type="text" value="$income[0]"  class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/></p>
                         <select name="selfinfo_show[]" >
                             <option value="3" $show_class25_3>所有可见</option>
                             <option value="2" $show_class25_2>好友可见</option>
                             <option value="1" $show_class25_1>情侣可见</option>
                             <option value="0" $show_class25_0>主人可见</option>
                         </select>
                   </span>


                   <span   class="info_span"><b></b>
                        <p><b  onclick="document.selfinfo_edit.submit()">保存</b></p>
                   </span>




                   </form>
                   <div class="clear"></div>


EOT;
 }


 if($_POST['change']=="hobby_info"){


    $change_str=<<<EOT

                   <form action="index.php?display=self_info" method="POST"  name="selfinfo_edit"   class="info_form">

                   <INPUT TYPE=hidden NAME=display  VALUE="self_info">
                   <INPUT TYPE=hidden NAME=do  VALUE="hobby_info">

                   <span  class="info_span"><b>我的偶像</b>
                        <p>
                          <input name="idol" type="text" value="$idol[0]"  class="text_input"   onfocus="this.className='text_input   text_input_hover'"  onblur="this.className='text_input'"/>
                        </p>
                         <select name="selfinfo_show[]" >
                             <option value="3" $show_class26_3>所有可见</option>
                             <option value="2" $show_class26_2>好友可见</option>
                             <option value="1" $show_class26_1>情侣可见</option>
                             <option value="0" $show_class26_0>主人可见</option>
                         </select>
                   </span>

                   <span   class="info_span"><b>喜爱的音乐</b>
                         <p>
                         <textarea     name="music"  style="*MARGIN-LEFT: -40px"  onfocus="this.style.border='#21759B  solid  1px'"  onblur="this.style.border='#A5ACB2  solid  1px'">$music[0]</textarea>
                         <font style="margin-left:10px;">(多个选项请用“|”隔开)</font>
                         </p>
                         <select name="selfinfo_show[]" >
                             <option value="3" $show_class27_3>所有可见</option>
                             <option value="2" $show_class27_2>好友可见</option>
                             <option value="1" $show_class27_1>情侣可见</option>
                             <option value="0" $show_class27_0>主人可见</option>
                         </select>
                   </span>

                   <span   class="info_span"><b>喜爱的电影</b>
                         <p>
                         <textarea     name="movie"  style="*MARGIN-LEFT: -40px"  onfocus="this.style.border='#21759B  solid  1px'"  onblur="this.style.border='#A5ACB2  solid  1px'">$movie[0]</textarea>
                         <font style="margin-left:10px;">(多个选项请用“|”隔开)</font>
                         </p>
                         <select name="selfinfo_show[]" >
                             <option value="3" $show_class28_3>所有可见</option>
                             <option value="2" $show_class28_2>好友可见</option>
                             <option value="1" $show_class28_1>情侣可见</option>
                             <option value="0" $show_class28_0>主人可见</option>
                         </select>
                   </span>


                   <span   class="info_span"><b>喜爱的书籍</b>
                         <p>
                         <textarea     name="book"   style="*MARGIN-LEFT: -40px"  onfocus="this.style.border='#21759B  solid  1px'"  onblur="this.style.border='#A5ACB2  solid  1px'">$book[0]</textarea>
                         <font style="margin-left:10px;">(多个选项请用“|”隔开)</font>
                         </p>
                         <select name="selfinfo_show[]" >
                             <option value="3" $show_class29_3>所有可见</option>
                             <option value="2" $show_class29_2>好友可见</option>
                             <option value="1" $show_class29_1>情侣可见</option>
                             <option value="0" $show_class29_0>主人可见</option>
                         </select>
                   </span>


                   <span   class="info_span"><b>喜爱的运动</b>
                         <p>
                         <textarea     name="sport"   style="*MARGIN-LEFT: -40px"  onfocus="this.style.border='#21759B  solid  1px'"  onblur="this.style.border='#A5ACB2  solid  1px'">$sport[0]</textarea>
                         <font style="margin-left:10px;">(多个选项请用“|”隔开)</font>
                         </p>
                         <select name="selfinfo_show[]" >
                             <option value="3" $show_class30_3>所有可见</option>
                             <option value="2" $show_class30_2>好友可见</option>
                             <option value="1" $show_class30_1>情侣可见</option>
                             <option value="0" $show_class30_0>主人可见</option>
                         </select>
                   </span>

                   <span   class="info_span"><b>其它的爱好</b>
                         <p>
                         <textarea     name="other_hobby"   style="*MARGIN-LEFT: -40px"  onfocus="this.style.border='#21759B  solid  1px'"  onblur="this.style.border='#A5ACB2  solid  1px'">$other_hobby[0]</textarea>
                         <font style="margin-left:10px;">(多个选项请用“|”隔开)</font>
                         </p>
                         <select name="selfinfo_show[]" >
                             <option value="3" $show_class31_3>所有可见</option>
                             <option value="2" $show_class31_2>好友可见</option>
                             <option value="1" $show_class31_1>情侣可见</option>
                             <option value="0" $show_class31_0>主人可见</option>
                         </select>
                   </span>




                   <span   class="info_span"><b></b>
                        <p><b  onclick="document.selfinfo_edit.submit()">保存</b></p>
                   </span>

                   </form>
                   <div class="clear"></div>
                 </div>




               </div>
           <div class="clear"></div>




EOT;
 }

 echo $change_str;
?>
