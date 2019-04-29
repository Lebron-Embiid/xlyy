<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>举报不良信息</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/vip.css">
	<link rel="stylesheet" href="css/setting.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/common.js"></script>
</head>
<body>
	<?php include 'header_nav.php'; ?>
	<div class="wallet_box">
		<div class="container">
			<div class="left">
				<?php include 'setting_left.php'; ?>
			</div>
			<div class="right">
				<h4><a href="setting.php">设置</a>&gt;&gt;<span>举报不良信息</span></h4>
				<div class="feedback_box report_box">
					<form action="" method="post">
						<h5>举报不良信息</h5>
						<div class="feed_item report_item">
							<label for="report1">涉嫌广告，传销等内容<input type="radio" name="report[]" id="report1"></label>
							<label for="report2">欺诈（酒托，饭托等）<input type="radio" name="report[]" id="report2"></label>
							<label for="report3">涉嫌政治或暴力内容<input type="radio" name="report[]" id="report3"></label>
							<label for="report4">恶意骚扰，不文明行为<input type="radio" name="report[]" id="report4"></label>
							<label for="report5">淫秽色情<input type="radio" name="report[]" id="report5"></label>
							<label for="report6">其他<input type="radio" name="report[]" id="report6"></label>
						</div>
						<div class="feed_item">
							<h6>请上传相关照片</h6>
							<ul class="photo_ul">
								<!-- <li>
									<img src="images/delete.png" class="delete_icon delete_pic1" alt="">
								</li> -->
							</ul>
							<div class="add_box">
								<div class="add_photo">
									<input type="file" id="file1" accept="image/*" />
									<span>+</span>
									<p>添加照片</p>
								</div>
							</div>
						</div>
						<input type="submit" class="submit_btn" value="提交">
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modal_layer"></div>
	<div class="modal_box feedback_modal fix">
		<img src="images/close.png" class="close_img" alt="">
		<div class="box">
			<p>感谢您的宝贵意见，如有需要，我们可能会与您联系，再次感谢！</p>
			<a href="javascript:void(0);" class="modal_cancle_btn">确认</a>
		</div>
	</div>
	<div class="modal_box photo_modal fix">
		<img src="images/close.png" class="close_img" alt="">
		<div class="box">
			<p>确定要删除该图片？</p>
			<ul>
				<li><a href="javascript:void(0);" class="modal_confirm_btn modal_pic_btn">确认</a></li>
				<li><a href="javascript:void(0);" class="modal_cancle_btn last">取消</a></li>
			</ul>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
<link rel="stylesheet" href="css/photo.css">
<script src="js/LocalResizeIMG.js"></script>
<script>
$(function(){
	var modal = new LModal();
	$("form").submit(function(){
		modal.showModal(".feedback_modal");
		return false;
	})
	$(".modal_pic_btn").click(function(){
		alert("ok");
		modal.cancleModal(".photo_modal")
	})
	
	var picArr1 = new Array();// 存储图片
	var aa = "";
	var that = "";
	$('#file1').localResizeIMG({
		width:800,// 宽度
		quality: 1, // 压缩参数 1 不压缩 越小清晰度越低
		success: function (result) {
			var img = new Image();
			img.src = result.base64;
			var _str = "<li class='pic_look'><img src='"+img.src+"' class='img'/><img src='images/delete.png' class='delete_icon delete_pic1' alt=''></li>";
			$('.photo_ul').append(_str);
			var _i =  picArr1.length;
			picArr1[_i] = result.base64;
			console.log(picArr1)
		}
	});
	// 删除
	$(document).on('click', '.delete_pic1', function(event) {
		aa = $(this).parents(".pic_look").index();
		that = $(this).parents(".pic_look");
		modal.showModal(".photo_modal");
	}); 
	
	$(".modal_confirm_btn").click(function(){
		picArr1.splice(aa,1);
		that.remove();
		console.log(picArr1);
		modal.cancleModal(".photo_modal")
	})
})
</script>
</html>