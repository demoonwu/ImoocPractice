$(function(){
		$(document).on("focus", ".section_box1 :input",removeNotice);
		//$(document).on("blur", ".section_box1 :input[name='mobilephone']",{"checkName":"MOBILEPHONE"}, checkFn);
		$(document).on("blur", ".section_box1 :input[name='mobilephone']",{"checkName":"MOBILEPHONE"}, checkMobile);
		$(document).on("blur", ".section_box1 :input[name='username']",{"checkName":"USERNAME"}, checkFn);
		function checkMobile(event){
			//console.log(this.value=this.value.replace(/^1[34578]\d{9}$/,''));
			var meObj=$(this);
			var checkValue=$(this).val();
			if(/0?(13|14|15|18)[0-9]{9}/g.test(checkValue)){
				if(checkValue.length>0){
					$.post("./server.php", {
					"action":"checkFn",
					"checkName":event.data.checkName,
					"checkValue":checkValue
				}, function(data,status){
						if(data.success=='true'){
							if(data.count!=0){
								meObj.after("<div class='notice'><span>已被使用</span></div>");
							}else{
								return false;
							}
						}else{
							return false;
						}
					})
				}
			}else{
				$(this).val("");
				meObj.after("<div class='notice'><span>非法的电话号码</span></div>");
			}
			//console.log(/0?(13|14|15|18)[0-9]{9}/g.test(this.value));
		}
		function removeNotice(){
			$(this).next("div.notice").remove();
		}
		function checkFn(event){
			var meObj=$(this);
			var checkValue=$(this).val();
			if(checkValue.length>0){
				$.post("./server.php", {
				"action":"checkFn",
				"checkName":event.data.checkName,
				"checkValue":checkValue
			}, function(data,status){
					if(data.success=='true'){
						if(data.count!=0){
							meObj.after("<div class='notice'><span>已被使用</span></div>");
						}else{
							return false;
						}
					}else{
						return false;
					}
				})
			}
			
			
		}
	})
		