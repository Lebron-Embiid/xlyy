$(function(){
	// 显示弹框
	$(".modal_cancle_btn,.modal_box .close_img,.modal_layer").click(function(){
		$(".modal_layer,.modal_box").hide();
	})
	
	// 设置按钮移入效果
	$(".history_info,.mess_default").on("mouseover",".set_box",function(){
		$(this).addClass("active").find(".setting_layer").addClass("active");
	}).on("mouseout",".set_box",function(){
		$(this).removeClass("active").find(".setting_layer").removeClass("active");
	})
	$(".history_info,.mess_default").on("mouseover",".setting_layer",function(){
		$(this).addClass("active");
	}).on("mouseout",".setting_layer",function(){
		$(this).removeClass("active");
	})
	
	//显示密码
	$('.input_box').on('input','input',function(){
		if($(this).val() == ""){
			$(this).parent().find('.right_close').removeClass('active');				
		}else{
			$(this).parent().find('.right_close').addClass('active');
		}
		if($(this).prop('type') == 'password'){
			$(this).parent().find('.right_eye1').addClass('active');
		}else{
			$(this).parent().find('.right_eye2').addClass('active');				
		}
	})
	$(".input_box").on("click",".right_close",function(){
		$(this).removeClass('active');
		$(this).siblings('.show_text').val("");
	})
	$(".input_box").on("click",".right_eye1",function(){
		$(this).removeClass('active');
		$(this).siblings('.right_eye2').addClass('active');
		$(this).siblings('.pwd_input').prop('type','text');
	})
	$(".input_box").on("click",".right_eye2",function(){
		$(this).removeClass('active');
		$(this).siblings('.right_eye1').addClass('active');
		$(this).siblings('.pwd_input').prop('type','password');
	})
})