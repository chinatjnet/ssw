// function ResumeError() {
    // return true;
//}
//window.onerror = ResumeError;


var new_list=new Array();
var new_list=Get_id('news_list').getElementsByTagName('a');
var marqueeContent=new Array();   //滚动主题
                  	
marqueeContent[0]='<a href="http://www.sunsonworld.com/" target="_blank">+[2008-05-16] 天骄天下个人网站系统升级啦！最新版下载地址SSW_V1.1 </a>';
marqueeContent[1]='<a href="http://www.sunsonworld.com/" target="_blank">+ 这里是测试内容</a>';
marqueeContent[2]='<a href="http://www.sunsonworld.com/" target="_blank">+ 这里是公告内容</a>';
marqueeContent[3]='<a href="http://www.sunsonworld.com/" target="_blank">+ 这里是测试标题</a>';
marqueeContent[4]='<a href="http://www.sunsonworld.com/" target="_blank">+ 测试测试测试!</a>';

var marqueeInterval=new Array();  //定义一些常用而且要经常用到的变量
var marqueeId=0;
var marqueeDelay=2000;
var marqueeHeight=38;
function initMarquee() {
 var str=marqueeContent[0];
 document.write('<div id=marqueeBox style="overflow:hidden;height:'+marqueeHeight+'px" onmouseover="clearInterval(marqueeInterval[0])" onmouseout="marqueeInterval[0]=setInterval(\'startMarquee()\',marqueeDelay)"><div>'+str+'</div></div>');
 marqueeId++;
 marqueeInterval[0]=setInterval("startMarquee()",marqueeDelay);
 }
function startMarquee() {
 var str=marqueeContent[marqueeId];
  marqueeId++;
 if(marqueeId>=marqueeContent.length) marqueeId=0;
 if(marqueeBox.childNodes.length==1) {
  var nextLine=document.createElement('DIV');
  nextLine.innerHTML=str;
  marqueeBox.appendChild(nextLine);
  }
 else {
  marqueeBox.childNodes[0].innerHTML=str;
  marqueeBox.appendChild(marqueeBox.childNodes[0]);
  marqueeBox.scrollTop=0;
  }
 clearInterval(marqueeInterval[1]);
 marqueeInterval[1]=setInterval("scrollMarquee()",10);
 }
function scrollMarquee() {
 marqueeBox.scrollTop++;
 if(marqueeBox.scrollTop%marqueeHeight==marqueeHeight){
  clearInterval(marqueeInterval[1]);
  }
 }
initMarquee();
