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



//LABEL FCHANGE-----------

	//发送请求函数1-------------------------
	function sendRequestPost(url,param){
		createXMLHttpRequest();
		xmlHttpRequest.open("POST",url,true);
		xmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		xmlHttpRequest.onreadystatechange = processResponse;
		xmlHttpRequest.send(param);
	}
	//处理返回信息函数1
	function processResponse(){
        var s1=s1
	  	if(xmlHttpRequest.readyState == 1) {

		   //Get_id('ajax_change').style.color="#2c76c3";
		   Get_id('ajax_change').innerHTML = "<center style='margin-top:50px;margin-bottom:20px;color:#2C76C3'><img src='function/waiting.gif'><center>程序执行中，Please wait ....";

	    }

		if(xmlHttpRequest.readyState == 4){
			if(xmlHttpRequest.status == 200){
				var res = xmlHttpRequest.responseText;

		        Get_id('ajax_change').innerHTML =res;
				//window.alert("添加分类成功！");


				//Get_id("easy_popup").style.display="none";
				//Get_id("easy_popup_content").style.display="none";
				//Get_id('ajax_wait_text').value = "";

			}else{
				window.alert("请求页面异常");
			}
		}
	}
	//
	function label_fchange(surl,upid,type,s1,s2){
			var url = surl;
			var s1=s1;
			var param = "list_upid="+upid+"&type="+type+"&label_upid="+s1+"&belong="+s2+"&t="+(new Date().getTime());
			

            nav_a=Get_id('label_fnav').getElementsByTagName('a');
			for(i=0;i<nav_a.length;i++){
		      nav_a[i].style.color="#21759b";
			  nav_a[i].style.fontWeight="normal";
			}
			sendRequestPost(url,param);

	}




//LABEL CCHANGE-----------

	//发送请求函数1-------------------------
	function sendRequestPost2(url,param){
		createXMLHttpRequest();
		xmlHttpRequest.open("POST",url,true);
		xmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		xmlHttpRequest.onreadystatechange = processResponse2;
		xmlHttpRequest.send(param);
	}
	//处理返回信息函数1
	function processResponse2(){
        var s1=s1
	  	if(xmlHttpRequest.readyState == 1) {

		   //Get_id('ajax_change').style.color="#2c76c3";
		   Get_id('ajax_cchange').innerHTML = "<center style='margin-top:10px;margin-bottom:20px;color:#2C76C3'><img src='function/waiting.gif'><center>程序执行中，Please wait ....";

	    }

		if(xmlHttpRequest.readyState == 4){
			if(xmlHttpRequest.status == 200){
				var res = xmlHttpRequest.responseText;

		        Get_id('ajax_cchange').innerHTML =res;


			}else{
				window.alert("请求页面异常");
			}
		}
	}
	//
	function label_cchange(surl,upid,type,s1,s2,s3){
			var url = surl;
			var s1=s1;
			var param = "list_upid="+upid+"&type="+type+"&label_upid="+s1+"&label_classid="+s2+"&belong="+s3+"&t="+(new Date().getTime());
			
            //alert (url);
            nav_a=Get_id('label_cnav').getElementsByTagName('a');
			for(i=0;i<nav_a.length;i++){
		      nav_a[i].style.color="#21759b";
			  nav_a[i].style.fontWeight="normal";
			}
			sendRequestPost2(url,param);

	}




//LABEL POST-----------

	//发送请求函数1-------------------------
	function sendRequestPost3(url,param){
		createXMLHttpRequest();
		xmlHttpRequest.open("POST",url,true);
		xmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		xmlHttpRequest.onreadystatechange = processResponse3;
		xmlHttpRequest.send(param);
	}
	//处理返回信息函数1
	function processResponse3(){
        var s1=s1
	  	if(xmlHttpRequest.readyState == 1) {

		   //Get_id('ajax_change').style.color="#2c76c3";
           showview();
		   Get_id('view_content').innerHTML = "<center style='margin-top:10px;margin-bottom:20px;color:#2C76C3'><img src='function/waiting.gif'><center>数据更新中，Please wait ....";

	    }

		if(xmlHttpRequest.readyState == 4){
			if(xmlHttpRequest.status == 200){
				var res = xmlHttpRequest.responseText;
				//alert(res);
                 if(res=="ok"){
		            Get_id('view_content').innerHTML = "<center style='margin-top:10px;margin-bottom:20px;color:#2C76C3'><b>数据保存成功！</b><center>";
                 }else{
				    Get_id('view_content').innerHTML = "<center style='margin-top:10px;margin-bottom:20px;color:#2C76C3'><b>数据保存失败，请检查网络状况！</b><center>";
				 }

			}else{
				window.alert("请求页面异常");
			}
		}
	}
   

  function   postchg(){

	  　//获取表单对象和用户信息值
　      var f = document.label_set;
　      var display = f.display.value;
　      var list_upid = f.list_upid.value;
　      var type = f.type.value;
　      var label_upid = f.label_upid.value;
　      var label_classid = f.label_classid.value;
        var label_belong = f.label_belong.value;
        var label_check=document.getElementsByName("label_check");
		var label_num = document.getElementsByName("label_num");
		var label_tlength = document.getElementsByName("label_tlength");
		var label_clength = document.getElementsByName("label_clength");

		var post_str="";
        for  (var   i=0;i<label_check.length;i++){ 
			  var element_value=label_check[i].value;
			  if(label_check[i].checked == true){
				  //alert(element_value);
				   var style_str=document.getElementsByName('style_'+element_value);
				   style_str=style_str[0].value;

			       post_str+='&label_check[]='+ element_value+'&label_style[]='+encodeURIComponent(style_str)+'&label_num[]='+label_num[i].value+'&label_tlength[]='+label_tlength[i].value+'&label_clength[]='+label_clength[i].value;
					  
			  }
			  
	     }
//alert(post_str);
        url="index.php";
		param="display="+display+"&do=update"+"&list_upid="+list_upid+"&type="+type+"&label_upid="+label_upid+"&label_classid="+label_classid+"&label_belong="+label_belong+post_str;
		
		sendRequestPost3(url,param);
		//alert(param);



  }   
