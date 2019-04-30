$(function(){
	function invokeSettime(obj){
		var countdown=60;
		settime(obj);
		function settime(obj) {
			if (countdown <=1) {
				$(obj).prop("disabled",false);
				$(obj).val("获取验证码");
				countdown = 60;
				return;
			} else {
				countdown--;
				$(obj).prop("disabled",true);
				$(obj).val(countdown+"s");
			}
			setTimeout(function() {
					settime(obj) }
			,1000)
		}
	}
	$(".getCode").click(function(){
		var phone = $(".phone_txt").val();
		if(phone == ""){
			alert("请输入手机号！");
			return false;
		}
		if(!(/^1[34578]\d{9}$/.test(phone))){
			alert("请输入有效的手机号！");
			return false;
		}
		setTimeout(function(){
			invokeSettime(".getCode");
		},500)
	})
})