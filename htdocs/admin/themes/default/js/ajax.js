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
		 Get_id('ajax_wait_text').innerHTML = "程序执行中，Please wait ....";
	    }

		if(xmlHttpRequest.readyState == 4){
			if(xmlHttpRequest.status == 200){
				var res = xmlHttpRequest.responseText;

				window.alert("添加分类成功！");

				cclass[Get_id('new_upid').value].push(Get_id('new_classname').value,res);  // Add  nwe   array  element  to  the  array

                a_fclassid=Get_id("a_fclassid");  // trigger  the  a_fclassid  select  get  change

				if   (a_fclassid.fireEvent) {
                    a_fclassid.fireEvent("onchange")

                     }else{
                     a_fclassid.onchange();}


				Get_id("easy_popup").style.display="none";
				Get_id("easy_popup_content").style.display="none";
				Get_id('ajax_wait_text').value = "";

				var body_select=document.getElementsByTagName("select");
				for(i=0;i<body_select.length;i++){
				   body_select[i].style.visibility="visible";
				}


			}else{
				window.alert("请求页面异常");
			}
		}
	}
	//身份验证函数
	function add_class(surl,s1,s2){
			var url = surl;
			var param = "new_upid="+s1+"&new_classname="+s2+"&t="+(new Date().getTime());

			sendRequestPost(url,param);

	}




	//发送请求函数1-------------------------
	function sendRequestPost1(url,param,s1){
		createXMLHttpRequest();
		xmlHttpRequest.open("POST",url,true);
		xmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		xmlHttpRequest.onreadystatechange =function(){ processResponse1(s1);}
		xmlHttpRequest.send(param);
	}
	//处理返回信息函数1
	function processResponse1(s1){
        var s1=s1
	  	if(xmlHttpRequest.readyState == 1) {

		   Get_id(s1).style.color="#2c76c3";
		   Get_id(s1).innerHTML = "<img src='function/check_waiting.gif' style='margin-top:-5px;'><em>（Checking ....）</em>";

	    }

		if(xmlHttpRequest.readyState == 4){
			if(xmlHttpRequest.status == 200){
				var res = xmlHttpRequest.responseText;
                var show_color="#1CA01C";
                if(res=="× password_wrong"||res=="× answer_wrong"){
				
				    show_color="#FF3300";
				
				}
		        Get_id(s1).style.color=show_color;
		        Get_id(s1).innerHTML = ""+res+"";

			}else{
				window.alert("请求页面异常");
			}
		}
	}
	//
	function check_info(surl,s1,s2,s3){
			var url = surl;
			var s1=s1;
			var param = "do="+s1+"&check_str="+s2+"&q_value="+s3+"&t="+(new Date().getTime());
			sendRequestPost1(url,param,s1);

	}
