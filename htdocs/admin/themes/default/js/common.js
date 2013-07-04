// JavaScript Document



function ResumeError() {
     return true;
}
window.onerror = ResumeError;



// flexible  menu
function Get_id(element){
return element = document.getElementById(element);
}
function Get_idD(show_id){
var rd=Get_id('class1content'+show_id);
var rh=rd.offsetHeight;
var maxh=60;


function dmove(){
rh+=8; //设置层展开的速度
if(rh>=maxh){
rd.style.height='auto';
clearInterval(iIntervalId);
}else{
rd.style.display='block';
rd.style.height=rh+'px';
}
}
iIntervalId=setInterval(dmove,2);
}
function Get_idD2(show_id){
var rd=Get_id('class1content'+show_id);
var rh=rd.offsetHeight;
var maxh=60;
function dmove(){
rh-=10;//设置层收缩的速度
if(rh<=0){
rd.style.display='none';
clearInterval(iIntervalId);
}else{
rd.style.height=rh+'px';
}
}
iIntervalId=setInterval(dmove,2);
}
function Get_iduse(show_id,bg){
var rd=Get_id('class1content'+show_id);
var sb=Get_id('stateBut');
var bg_choose=bg;
 bg_choose=='0'?bg_style='url(themes/default/images/menu-bits.gif)   6px 154px':bg_style='url(themes/default/images/menu-bits.gif)   6px 252px';
 bg_choose=='0'?bg_style2='url(themes/default/images/menu-bits.gif)   6px 174px':bg_style2='url(themes/default/images/menu-bits.gif)   6px 272px';
if(rd.style.display=='none'){
Get_idD(show_id);
 Get_id('use'+show_id).style.background=bg_style;
}else{
Get_idD2(show_id);
 Get_id('use'+show_id).style.background=bg_style2;
}
}





//delete the content  blank  space  function=============
// Trim() , Ltrim() , RTrim()
String.prototype.Trim = function()
{
return this.replace(/(^\s*)|(\s*Get_id)/g, "");
}
String.prototype.LTrim = function()
{
return this.replace(/(^\s*)/g, "");
}
String.prototype.RTrim = function()
{
return this.replace(/(\s*Get_id)/g, "");
}
//delete end=============





//emotion_publish  effect====

function textarea_in(){
	var emotion_box=Get_id('emotion_img_box');
	    emotion_box.style.display="block";
    var textarea_emoution=Get_id('textarea_emoution');
	  if(textarea_emoution.value=='说说你今天的心情吧。。。。')
      {textarea_emoution.value='';}
	  textarea_emoution.style.color='#464646';
	  textarea_emoution.style.background='#fff';
	  textarea_emoution.style.border='#7FB2E1 1px solid' ;
}
function textarea_out(){

    var emotion_box=Get_id('emotion_img_box');

    var textarea_emoution=Get_id('textarea_emoution');
	    textarea_emoution.style.color='#ACACAC';
		textarea_emoution.style.border='1px solid #B6D5E2';
		textarea_emoution.style.background='#F8F8F8';
		value_check=textarea_emoution.value.Trim();
        if(value_check.length==0){
		  textarea_emoution.value='说说你今天的心情吧。。。。';
	      Get_id('tips').innerHTML='<em>输入内容不能为空</em>';

		  }




	}



//image_box  display  function===========


function Insert(str) {

	 if(Get_id("textarea_emoution").value=='说说你今天的心情吧。。。。'){
	   Get_id("textarea_emoution").value='';
	   }
       var obj = document.getElementById('textarea_emoution');
         if(document.selection) {
         obj.focus();
         var sel=document.selection.createRange();
         document.selection.empty();
         sel.text = str;
         } else {
         var prefix, main, suffix;
         prefix = obj.value.substring(0, obj.selectionStart);
         main = obj.value.substring(obj.selectionStart, obj.selectionEnd);
         suffix = obj.value.substring(obj.selectionEnd);
         obj.value = prefix + str + suffix;
         }
     obj.focus();
	 var emotion_box=Get_id('emotion_img_box');
	 emotion_box.style.display="none";


}



function img_box(){

 var img_box=Get_id('emotion_img_box');
     img_box.innerHTML='';
	 //alert('11');
  img_arr=new Array('biggrin','cry','dizzy','funk','huffy','lol','loveliness','mad','sad','shocked','shy','sleepy','smile','sweat','titter','tongue');
  img_title_arr=new Array('露齿而笑','哭泣','眩晕','恐惧','发怒','大声笑','可爱','疯狂','忧愁','震惊','害羞','困乏','微笑','出汗','偷笑','吐舌头');
 for(i=0;i<img_arr.length;i++){
	   var insert_str="[:"+img_arr[i]+"]";
	   var click_str="\"javascript:Insert('"+insert_str+"');\"";
	   img_box.innerHTML+='<IMG  title="'+img_title_arr[i]+'" alt="[:'+img_arr[i]+']"   src="themes/default/images/smiley/'+img_arr[i]+'.gif"   onclick='+click_str+'>';
	   //javascript:Insert('+img_arr[i]+');

	   }
	  // alert(img_box.innerHTML);
}





//=======================================




/*navbar  location.href     start================
function  location(){

	   var font_click=Get_id('navbar').getElementsByTagName('font');
		  for(f=0;f<font_click.length;f++){
	       Get_id('navbar').getElementsByTagName('font')[f].onclick=function(){
		 //alert(this.title);
		         window.location.href=this.title;
				 //window.navigate(this.title);
				 //return false;

                   }
	        }

}
 *///navbar  location.href     end================








//emotion_input  str_length   limit  function     start================

function  str_limit(){

var js=Get_id('textarea_emoution');//获取文本域
	var info=Get_id('tips');//获取要插入提示信息的元素
	var max=js.getAttribute('maxlength');//获取限制输入的最大长度
	var tip=Get_id('tips');//新建一个提示span

  js.onkeyup=js.onchange=js.onfocus=function(){
	  var tip=Get_id('tips');
	  cur=max-js.value.length;
	  if(cur>=0){
	  	tip.innerHTML='你还可以输入<em>'+cur+'</em>个字符';
		}else{
		tip.innerHTML='你还可以输入<em>0</em>个字符';
		js.value=js.value.substring(0,max);
			  }

       }

}

 //emotion_input  str_length   limit  function     end================






function Get_id(o){return document.getElementById(o)}

function ScroMove(i){
	Scrolling=true;chg_id=i;
    document.onmousemove=function(e){if(Scrolling==false)return;ScroNow(e,chg_id)}
    document.onmouseup=function(e){Scrolling=false}

}
function ScroNow(event,i){
 var event=event?event:(window.event?window.event:null);
 var Y=event.clientY-Get_id("Scroll"+i).getBoundingClientRect().top-Get_id("ScroLine"+i).clientHeight/2-60;
 var H=Get_id("ScroRight"+i).clientHeight-Get_id("ScroLine"+i).clientHeight;
 var SH=Y/H*(Get_id("ScroLeft"+i).scrollHeight-Get_id("ScroLeft"+i).clientHeight);
 if (Y<0)Y=0;if (Y>H)Y=H;
 Get_id("ScroLine"+i).style.top=Y+"px";
 Get_id("ScroLeft"+i).scrollTop=SH;
 }
function ScrollWheel(i){
 var Y=Get_id("ScroLeft"+i).scrollTop;
 var H=Get_id("ScroLeft"+i).scrollHeight-Get_id("ScroLeft"+i).clientHeight;
 if (event.wheelDelta >=120){Y=Y-80}else{Y=Y+80}
 if(Y<0)Y=0;if(Y>H)Y=H;
 Get_id("ScroLeft"+i).scrollTop=Y;
 var SH=Y/H*Get_id("ScroRight"+i).clientHeight-Get_id("ScroLine"+i).clientHeight;
 if(SH<0)SH=0;
 Get_id("ScroLine"+i).style.top=SH+"px";
}












function  select_all(status){
	//alert(status);
	var  select_id=Get_id("list_check").getElementsByTagName("input");
	if(status){
	for(i=0;i<=select_id.length;i++){

	select_id[i].checked="checked";}
	}else{
	for(i=0;i<=select_id.length;i++){
    select_id[i].checked="";}


	}
}





function  edit_photo(edit_id){
	//alert(status);
	var  select_id=Get_id("list_check").getElementsByTagName("input");
	visible=select_id[0].style.visibility;
	if(visible=='hidden'){
	for(i=0;i<=select_id.length;i++){

	select_id[i].style.visibility="visible";}
	}else{
	for(i=0;i<=select_id.length;i++){
    select_id[i].style.visibility="hidden";}


		}




	}





function privacy_set(i){
	var  privacy_id=Get_id("privacy_set"+i);
	var  privacy_style=privacy_id.style.display;
	var  privacy_a=privacy_id.getElementsByTagName("a");

	if(privacy_style=='none'){
		//alert(privacy_style);
		privacy_id.style.display="block";
	   }else{
	    privacy_id.style.display="none";

		}


	}

function privacy_set_a(i){
	var  privacy_id=Get_id("privacy_set"+i);
         privacy_id.style.display="none";

	}














	function checkLeave(id){

	  var content=KE.isEmpty(id);
	   if(content==false){
　　　　event.returnValue="您的输入的文章内容还没有发表或保存！";}
　　　}







function dynamic_js(i,j){

	var dynamic_id=Get_id('top_tool').getElementsByTagName('a');
    var info_now=dynamic_id[i];
	for(i=0;i<dynamic_id.length;i++){
		dynamic_id[i].className='';
		}
		info_now.className='info_now';

        Get_id('dynamic_chg').src=j;
		//alert(Get_id('dynamic_chg').src);



	}







	function  music_input_url(){
		Get_id('music_url').style.display='block';
		Get_id('music_upload').style.display='none';
		}

	function  music_input_upload(){
		Get_id('music_url').style.display='none';
		Get_id('music_upload').style.display='block';
		}

	function  access_check(){
		Get_id('close_reason').style.display='none'
		Get_id('access_question').style.display='none'
	}

	function  access_question(){
		Get_id('close_reason').style.display='none'
		Get_id('access_question').style.display='block'
	}

	function  close_reason(){
		Get_id('close_reason').style.display='block'
		Get_id('access_question').style.display='none'
	}

function  lover_img_show(){
	var  show_id=Get_id('sweet_word_img__show');
	var  show_id_a=Get_id('sweet_word_img__show').getElementsByTagName('img');
	    for(i=0;i<show_id_a.length;i++){
			show_id_a[i].onclick=function() {
				//alert(this.alt);
				Get_id('sweet_img_now').src='themes/default/images/lover_img/'+this.alt+'.gif';


				}





			}



	}

//add  new  child  class====================

var sign=0;
function append(i){

	var node=document.getElementById("child_class"+i);
	var newNode=document.createElement("div");
	    newNode.innerHTML='<div style="float: left;width: 690px;"  id="child_class'+sign+'"> <span class="class_handle   append_handle"></span> <span class="class_order  append_order"><input name="newc_upid[]" type="hidden" value="'+i+'"/><input name="newc_order[]" type="text" value="0"/><font>├────</font></span> <span class="class_name"><input name="newc_name[]" type="text" value=""/></span> <span class="class_temp   append_temp"></span></div>';

	    //newNode.appendChild(document.createTextNode("插入节点"+sign));
         //获取节点的父节点,并将创建的节点插入到该节点的下一个节点之前.
	    node.appendChild(newNode);
        sign++;


	    Get_id("child_class"+i).style.display="block";
		Get_id("show_child_font"+i).innerHTML='[&nbsp;-&nbsp;]';
}





function  show_child_class(i){
	//alert(this.innerHTML);
	var  child_id=Get_id("child_class"+i);
	var  child_display=child_id.style.display;
	     if(child_display=="none"){
	     child_id.style.display="block";
		 Get_id("show_child_font"+i).innerHTML='[&nbsp;-&nbsp;]';
		// alert(child_font_inner);
		 }else{
			child_id.style.display="none";
		    Get_id("show_child_font"+i).innerHTML="[&nbsp;+&nbsp;]";

			 }




	}



//add  new  father  class====================

var sign_f=0;
function append_father(){

	var  node=document.getElementById("class_manage").getElementsByTagName('li');
	     li_length=node.length-1;
		 node=node[li_length];
	var newNode=document.createElement("div");
	    newNode.innerHTML=' <li   id="newf_class'+sign_f+'"> <span class="class_order"><font>&nbsp;&nbsp;</font><input name="newf_order[]" type="text" value="0"/></span> <span class="class_name"><input name="newf_name[]" type="text" value=""/></span> <span class="class_belong"> <select name="newf_belong[]"><option  value="self_info">个人档案</option><option  value="emotion">心情微博</option><option  value="article">文章日志</option><option  value="photo">个人相册</option> <option  value="music">我的音乐</option> <option  value="resource">资源下载</option><option  value="lover">情侣空间</option><option  value="guestbook">访客留言</option><option   value="collect">网址收藏</option></select></span> <span class="class_show"> <select name="newf_show[]"> <option  value="1">是</option> <option  value="0">否</option> </select> </span> <span class="class_temp"><input name="newf_temp[]" type="text" value="default"  onclick="if(this.value==\'default\'){this.value=\'\'};this.style.color=\'#464155\';"  style="color:#A4B9D7"/></span> <span class="class_handle"><a href="#"></a></span><div  class="clear"></div></li>';

	    //newNode.appendChild(document.createTextNode("插入节点"+sign));
         //获取节点的父节点,并将创建的节点插入到该节点的下一个节点之前.
	     node.parentNode.insertBefore(newNode,node);
         sign_f++;



}


function showReminder(){
	document.getElementById("body_cover").style.display="block";
	//document.getElementById("body_cover").filters('alpha').opacity="100";
    document.getElementById("body_cover").style.opacity="100";
	//alert(elem);
	//if(value<=100){

	//setInterval("alpha_change()", 100);
	//}
	}



function hideReminder(){
	document.getElementById("body_cover").style.display="none";
	}



//the delete check function

function CheckForm(m){


  if ( confirm("警告：删除后将无法恢复，您确认删除吗？"))
  { return true;}
  else{window.stop();
}

}


function CheckForm2(m){


  if ( confirm("警告：删除分类后将删除该类下所有文章并无法恢复，您确认删除吗？"))
  { return true;}
  else{window.stop();}

}

//the visitor ip check function

function CheckFormshield_ip(m){


  if ( confirm("温馨提示：屏蔽IP后，该IP将无法再次访问本站，您确认屏蔽吗？"))
  { return true;}
  else{window.stop();}

}

function CheckFormunshield_ip(m){


  if ( confirm("温馨提示：您确定解除屏蔽？"))
  { return true;}
  else{window.stop();}

}




// the album function
function checkbox()
{
var str=document.getElementsByName("album_handle[]");
var list_upid=document.getElementById("list_upid").value;
var objarray=str.length;
var chestr="";
var edit_a=document.getElementById("album_edit");
for (i=0;i<objarray;i++){
   if(str[i].checked == true)
  {
   chestr+="&album_handle%5B%5D="+str[i].value;

  }
}

if(chestr == "")
{

//alert("请选择一个相册进行操作");
edit_a.href="index.php?display=album_edit";

}
else
{
  edit_a.href="index.php?display=album_edit&do=batch_edit&list_upid="+list_upid+""+chestr;
  //alert("您先择的是："+edit_a.href+"");
}
}
