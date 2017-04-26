window.onload=initAll;
var activeH;
function initAll(){
	activeH=document.getElementById("section_box1").getElementsByClassName("active")[0];
	document.getElementById("loginId").onblur=form_check;
}

function changetab(obj){
	activeH.removeAttribute("class");
	(activeH.nextSibling.nodeType==3?activeH.nextSibling.nextSibling:activeH.nextSibling).removeAttribute("class");
	obj.setAttribute("class","active");
	activeH=obj;
	(obj.nextSibling.nodeType==3?obj.nextSibling.nextSibling:obj.nextSibling).setAttribute("class","active");
}


function form_check(){
	var loginId = document.getElementById("loginId").value; 
	var username= document.getElementsByName("username")[0].value;
	var password=document.getElementsByName("password")[0].value;
	if((!/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(loginId))&&(!/^[1][0-9][0-9]{9}$/.test(loginId))) { 
		alert("手机邮箱格式错误!不是邮箱也不是电话号码"); 
		//document.getElementsByName("loginId")[0].focus(); //让邮箱文本框获得焦点 老是重复弹出
		return false; 
	} 
	if(!/^[a-zA-z]+[a-zA-z]{0,17}$/.test(username)) { 
		alert("用户名格式错误!中、英文均可，最长18个英文或9个汉字"); 
		//document.getElementsByName("username")[0].focus(); //用户名:中、英文均可，最长18个英文或9个汉字，汉字的正则表达式不会写
		return false; 
	} 
	if(!/^[a-zA-z]+\w{4,19}$/.test(password)) { 
		alert("密码格式错误!5-20位英文、数字、符号，区别大小写"); 
		//document.getElementsByName("password")[0].focus(); //密码:5-20位英文、数字、符号，区别大小写
		return false; 
	}
	return true; 
}


