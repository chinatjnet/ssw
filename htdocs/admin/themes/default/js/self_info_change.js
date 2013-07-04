	var xmlHttpRequest;
	function createXMLHttpRequest(){
		try
	    {
	   // Firefox, Opera 8.0+, Safari
	    xmlHttpRequest=new XMLHttpRequest();
	    }
	 catch (e)
	    {

	  // Internet Explorer
	   try
	      {
		   xmlHttpRequest=new ActiveXObject("Msxml2.XMLHTTP");
	      }
	   catch (e)
	      {

	      try
	         {
	    	  xmlHttpRequest=new ActiveXObject("Microsoft.XMLHTTP");
	         }
	      catch (e)
	         {
	         alert("您的浏览器不支持AJAX！");
	         return false;
	         }
	      }
	    }

	}
	//发送请求函数
	function sendRequestPost(url,param){
		createXMLHttpRequest();
		xmlHttpRequest.open("POST",url,true);
		xmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		xmlHttpRequest.onreadystatechange = processResponse;
		xmlHttpRequest.send(param);
	}
	//处理返回信息函数
	function processResponse(){

	  	if(xmlHttpRequest.readyState == 1) {
		 Get_id('info_content').innerHTML = "<center style='margin-top:50px;margin-bottom:20px;color:#2C76C3'><img src='function/waiting.gif'><center>程序执行中，Please wait ....";
	    }

		if(xmlHttpRequest.readyState == 4){
			if(xmlHttpRequest.status == 200){
				var res = xmlHttpRequest.responseText;

				//window.alert("程序执行成功！");

                Get_id('info_content').innerHTML = res ;


			}else{
				window.alert("请求页面异常");
			}
		}
	}
	//身份验证函数
	function dynamic_change(surl,s1,s2){


	        var dynamic_id=Get_id('top_tool').getElementsByTagName('a');
            var info_now=dynamic_id[s2];
	        for(i=0;i<dynamic_id.length;i++){
		           dynamic_id[i].className='';
		     }
				 //alert(dynamic_id[2].href);
		    info_now.className='info_now';


			var url = surl;
			var param = "change="+s1+"&t="+(new Date().getTime());

			sendRequestPost(url,param);

	}

