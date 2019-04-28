<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>充值</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/vip.css">
	<link rel="stylesheet" href="css/wallet.css">
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
				<?php include 'wallet_left.php'; ?>
			</div>
			<div class="right">
				<h4><a href="wallet.php">我的钱包</a>&gt;&gt;<span>充值</span></h4>
				<div class="recharge_box">
					<h6>充值金额</h6>
					<div class="price_box">
						<div class="rb_left">
							<div><span>￥</span><input type="number" name="price" placeholder="10-10000"></div>
							<p>此处可以手动填入金额</p>
						</div>
						<div class="rb_right"><a href="javascript:void(0);" class="recharge_a">充值</a></div>
					</div>
					<div class="account_box">
						<p class="active"><span>使用账户</span><img src="images/wechat.png" alt=""><span>微信到账</span><span>(9851*235)</span><a href="javascript:void(0);" class="acc_btn">换成支付宝充值</a></p>
						<p><span>使用账户</span><img src="images/wechat.png" alt=""><span>支付宝到账</span><span>(9851*235)</span><a href="javascript:void(0);" class="acc_btn">换成微信充值</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal_layer"></div>
	<div class="modal_box recharge_modal fix">
		<img src="images/close.png" class="close_img" alt="">
		<div class="box">
			<p>您确认从微信账号245-689充值8000元吗？</p>
			<ul>
				<li><a href="javascript:void(0);" class="modal_confirm_btn">确认</a></li>
				<li><a href="javascript:void(0);" class="modal_cancle_btn last">取消</a></li>
			</ul>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
<script>
	$(function(){
		var modal = new LModal();
		$(".recharge_a").click(function(){
			modal.showModal(".recharge_modal");
		})
		$(".modal_confirm_btn").click(function(){
			alert("ok");
			modal.cancleModal(".recharge_modal")
		})
		
		$(".account_box").on("click",".acc_btn",function(){
			$(this).parent().removeClass("active").siblings().addClass("active");
		})
	})
</script>
</html>