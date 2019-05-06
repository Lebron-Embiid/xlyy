<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>分享隐私照片</title>
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
				<h4><a href="setting.php">设置</a>&gt;&gt;<span>我分享隐私照片的会员</span></h4>
				<div class="secrecy_photo_box">
					<ul>
						<li>
							<div class="img"><img src="images/secrecy_photo1.jpg" alt=""></div>
							<div class="info">
								<h5>小青</h5>
								<p>27、上海市普陀区</p>
								<p>寻找梦中的白马王子</p>
							</div>
							<a href="javascript:void(0);" class="cancle_a">取消分享</a>
						</li>
						<li>
							<div class="img"><img src="images/secrecy_photo2.jpg" alt=""></div>
							<div class="info">
								<h5>小青</h5>
								<p>27、上海市普陀区</p>
								<p>寻找梦中的白马王子</p>
							</div>
							<a href="javascript:void(0);" class="cancle_a">取消分享</a>
						</li>
						<li>
							<div class="img"><img src="images/secrecy_photo3.jpg" alt=""></div>
							<div class="info">
								<h5>小青</h5>
								<p>27、上海市普陀区</p>
								<p>寻找梦中的白马王子</p>
							</div>
							<a href="javascript:void(0);" class="cancle_a">取消分享</a>
						</li>
						<li>
							<div class="img"><img src="images/secrecy_photo4.jpg" alt=""></div>
							<div class="info">
								<h5>小青</h5>
								<p>27、上海市普陀区</p>
								<p>寻找梦中的白马王子</p>
							</div>
							<a href="javascript:void(0);" class="cancle_a">取消分享</a>
						</li>
						<li>
							<div class="img"><img src="images/secrecy_photo5.jpg" alt=""></div>
							<div class="info">
								<h5>小青</h5>
								<p>27、上海市普陀区</p>
								<p>寻找梦中的白马王子</p>
							</div>
							<a href="javascript:void(0);" class="cancle_a">取消分享</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="modal_layer"></div>
	<div class="modal_box cancle_modal fix">
		<img src="images/close.png" class="close_img" alt="">
		<div class="box">
			<p>您将取消给会员“小青”查看您隐私照片的权限，您确定吗？</p>
			<ul>
				<li><a href="javascript:void(0);" class="modal_confirm_btn modal_serect_btn">确认</a></li>
				<li><a href="javascript:void(0);" class="modal_cancle_btn last">取消</a></li>
			</ul>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
<script>
	$(function(){
		var modal = new LModal();
		var index = "";
		$(".secrecy_photo_box").on('click',".cancle_a",function(){
			index = $(this).parents("li").index();
			modal.showModal(".cancle_modal");
		})
		$(".modal_serect_btn").click(function(){
			// alert("ok"+index);
			modal.cancleModal(".cancle_modal")
		})
	})
</script>
</html>