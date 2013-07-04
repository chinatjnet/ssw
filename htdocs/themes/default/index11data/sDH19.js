/*
 * Author:linqiang.gx@gmail.com
 */
function set_cookie(cookieName, cookieValue, expires, path, domain, secure)
{
	document.cookie =
		escape(cookieName) + '=' + escape(cookieValue)
		+ (expires ? '; expires=' + expires.toGMTString() : '')
		+ (path ? '; path=' + path : '')
		+ (domain ? '; domain=' + domain : '')
		+ (secure ? '; secure' : '');
}

function get_cookie(cookieName)
{
	var cookieValue = '';
	var posName = document.cookie.indexOf(escape(cookieName) + '=');
	if (posName != -1) {
		var posValue = posName + (escape(cookieName) + '=').length;
		var endPos = document.cookie.indexOf(';', posValue);
		if (endPos != -1) cookieValue = unescape(document.cookie.substring(posValue, endPos));
		else cookieValue = unescape(document.cookie.substring(posValue));
	}
	return (cookieValue);
}

function cmt_init()
{
	for (var i=0; i<document.forms.length; i++) {
		var f1 = document.forms[i];
		//if (f1.cname.value == '' && f1.name.value == '') {
		if (f1.checksum) {
			var tmp = f1.checksum.value;
			f1.checksum.value = tmp.substring(0, 15) + 'l' + tmp.substring(16, tmp.length);
			try{
			f1.homepage.value = get_cookie('cmt_homepage');
                        
			var name = get_cookie('cmt_name');
			if (name != '') {
				f1.cname.value = name;
				f1.name.value = name;
				f1.email.value = get_cookie('cmt_email');
				f1.homepage.value = get_cookie('cmt_homepage');
				f1.remember.checked = true;
			} else if (get_cookie('cmt_remember') == 'no') {
				f1.homepage.value = '';
				f1.remember.checked = false;
			}
			}catch(e){}
		}
		//}
	}
}

function check_cmt(obj)
{
	if ( obj.content.value=='') {
		alert('评论内容为必填项');
		document.getElementById('submit_comment').disabled=false;
		return false;
	}
	if ( obj.cname.value == ''){
		obj.cname.value = obj.name.value;
	}

	if (obj.remember && obj.remember.checked) {
		save_cmt_cookie(obj.cname.value, obj.email.value, obj.homepage.value);
	} else {
		clear_cmt_cookie();
	}

	return true;
}

function save_cmt_cookie(user, email, homepage)
{
	var now = new Date();
	var domain = get_domain();
	var expires = new Date(now.getTime()+3600000*24*30);
	set_cookie('cmt_name', user, expires, '/', domain);
	set_cookie('cmt_email', email, expires, '/', domain);
	set_cookie('cmt_homepage', homepage, expires, '/', domain);
}

function clear_cmt_cookie()
{
	var now = new Date();
	var domain = get_domain();
	var expires = new Date(now.getTime()-10000000);
	set_cookie('cmt_name', 0, expires, '/', domain);
	set_cookie('cmt_email', 0, expires, '/', domain);
	set_cookie('cmt_homepage', 0, expires, '/', domain);
	set_cookie('cmt_remember', 'no', new Date(now.getTime()+3600000*24*1000), '/', domain);
}

function get_domain()
{
	var url = document.location.href;
	url=  url.substring (7,  url.length-1)+'/';
	return url.substring( url.indexOf ('.', 1),  url.indexOf ('/', 1) );
}

cmt_init();
