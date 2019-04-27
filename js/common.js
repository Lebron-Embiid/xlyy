$(function(){
	// 显示弹框
	$(".modal_box a,.modal_box .close_img,.modal_layer").click(function(){
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
	$(".input_box").on("click",".right_eye",function(){
		
	})
	
})