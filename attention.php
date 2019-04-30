<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>关注</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/attention.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/common.js"></script>
</head>
<body>
	<?php include 'header_nav.php'; ?>
	<div class="attention_box">
		<div class="container">
			<div class="attention_content">
				<ul class="atten_nav">
					<li><a href="">谁看了我</a></li>
					<li><a href="">我关注了谁</a></li>
					<li><a href="">谁关注了我</a></li>
					<li><a href="">我屏蔽了谁</a></li>
				</ul>
				<div class="atten_list">
					<div class="atten_item">
						<div class="img"><img src="images/attention_img1.jpg" alt=""></div>
						<div class="profile">
							<h5>美美</h5>
							<h6><img src="images/address4.png" alt="">上海</h6>
							<p>想要奢华的生活</p>
							<span>我在2018年12月30号20：29分屏蔽了美美</span>
						</div>
						<ul class="info">
							<li>年龄：30</li>
							<li>身高：170CM</li>
							<li>身材：丰满</li>
							<li>学历：本科</li>
							<li>发色：黑色</li>
							<li>职业：美容师</li>
						</ul>
						<!-- <div class="btn_box active"><a href="javascript:void(0);" class="a btn_a">取消屏蔽</a></div> -->
						<div class="btn_box active"><a href="javascript:void(0);" class="a atten_a">取消关注</a></div>
					</div>
					<div class="atten_item">
						<div class="img"><img src="images/attention_img2.jpg" alt=""></div>
						<div class="profile">
							<h5>美美</h5>
							<h6><img src="images/address4.png" alt="">上海</h6>
							<p>想要奢华的生活</p>
							<span>我在2018年12月30号20：29分屏蔽了美美</span>
						</div>
						<ul class="info">
							<li>年龄：30</li>
							<li>身高：170CM</li>
							<li>身材：丰满</li>
							<li>学历：本科</li>
							<li>发色：黑色</li>
							<li>职业：美容师</li>
						</ul>
						<div class="btn_box active"><a href="javascript:void(0);" class="a btn_a">取消屏蔽</a></div>
					</div>
					<div class="please_vip">
						<p>普通用户只能看到一位，如果您希望查看更多，请升级</p><a href="buy_vip.php">升级</a>
					</div>
					<div class="atten_item">
						<div class="img"><img src="images/attention_img2.jpg" alt=""></div>
						<div class="profile">
							<h5>---</h5>
							<h6><img src="images/address4.png" alt="">---</h6>
							<p>---</p>
							<span></span>
						</div>
						<ul class="info">
							<li>年龄：---</li>
							<li>身高：---</li>
							<li>身材：---</li>
							<li>学历：---</li>
							<li>发色：---</li>
							<li>职业：---</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal_layer"></div>
	<div class="modal_box screen_modal fix">
		<img src="images/close.png" class="close_img" alt="">
		<div class="box">
			<p>您确认取消对会员“小罗”的屏蔽？</p>
			<ul>
				<li><a href="javascript:void(0);" class="modal_confirm_btn modal_screen_btn">确认</a></li>
				<li><a href="javascript:void(0);" class="modal_cancle_btn last">取消</a></li>
			</ul>
		</div>
	</div>
	<div class="modal_layer"></div>
	<div class="modal_box attention_modal fix">
		<img src="images/close.png" class="close_img" alt="">
		<div class="box">
			<p>您是否确认不再关注此会员？</p>
			<ul>
				<li><a href="javascript:void(0);" class="modal_confirm_btn modal_attention_btn">确认</a></li>
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
		$(".atten_list").on("click",".btn_a",function(){
			index = $(this).parents(".atten_item").index();
			modal.showModal(".screen_modal");
		})
		$(".atten_list").on("click",".atten_a",function(){
			index = $(this).parents(".atten_item").index();
			modal.showModal(".attention_modal");
		})
		$(".modal_screen_btn").click(function(){
			alert("ok"+index);
			modal.cancleModal(".screen_modal")
		})
		$(".modal_attention_btn").click(function(){
			alert("ok"+index);
			modal.cancleModal(".attention_modal")
		})
	})
</script>
</html>