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
		setTimeout(function(){
			invokeSettime(".getCode");
		},500)
	})
})