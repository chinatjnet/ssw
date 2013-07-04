// JavaScript Document

$(document).ready(function(){

	$("#install").click(function(){
		var admin_password = $("#password").val();
		var re_password = $("#re_password").val();
		
		if(admin_password==''){
			$("#password_tr").css("color","red");
			return false;
		}
		
		if(admin_password!=re_password){
			$("#re_password_tr").css("color","red");
			return false;
		}
		
		if(admin_password==re_password){
			$("#install_form").submit();
		}
	});
	
});

function showmessage(message) {
	document.getElementById('install_info').innerHTML += message + '<br />';
	document.getElementById('install_info').scrollTop = 100000000;
}