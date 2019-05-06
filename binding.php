<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>绑定帐号</title>
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
	<script src="js/modal.js"></script>
	<script src="js/code.js"></script>
</head>
<body>
	<?php include 'header_nav.php'; ?>
	<div class="wallet_box">
		<div class="container">
			<div class="left">
				<?php include 'wallet_left.php'; ?>
			</div>
			<div class="right">
				<h4><a href="wallet.php">我的钱包</a>&gt;&gt;<span>绑定微信/支付宝账号</span></h4>
				<div class="binding_box">
					<ul>
						<li>
							<div class="img"><img src="images/wx_icon.png" alt=""><h5>微信</h5></div>
							<span>帐号</span>
							<p>00000000000000000</p>
							<!-- <a href="javascript:void(0);" class="bind_btn">绑定</a> -->
							<a href="" class="untied_btn">解除绑定</a>
						</li>
						<li>
							<div class="img"><img src="images/zfb_icon.png" alt=""><h5>支付宝</h5></div>
							<span>帐号</span>
							<p>00000000000000000</p>
							<a href="javascript:void(0);" class="bind_btn">绑定</a>
							<!-- <a href="" class="untied_btn">解除绑定</a> -->
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="modal_layer"></div>
	<div class="modal_box bind_modal">
		<img src="images/close.png" class="close_img" alt="">
		<div class="box" style="padding: .5rem .3rem 0 !important;">
			<p style="font-size: .26rem;">绑定支付宝</p>
			<div class="form">
				<div class="input_item">
					<span>支付宝帐号</span>
					<input type="text" class="input" placeholder="请填写支付宝帐号" name="pay_number">
				</div>
				<div class="input_item">
					<span>再次填入支付宝账号</span>
					<input type="text" class="input" placeholder="请再次填写支付宝帐号" name="pay_again">
				</div>
				<div class="input_item nomargin">
					<span>填写手机号码</span>
					<input type="text" class="input" placeholder="请填写手机号码" name="phone">
				</div>
				<h4>*为了您帐号的安全，请使用注册时的手机号码。</h4>
				<div class="input_item">
					<span>验证码</span>
					<input type="text" placeholder="请填写验证码" name="code">
					<input type="button" value="获取验证码" class="getCode"></input>
				</div>
			</div>
			<a href="javascript:void(0);" style="width: 60%;" class="modal_confirm_btn">保存</a>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
<script>
	$(function(){
		var modal = new LModal();
		$(".bind_btn").click(function(){
			modal.showModal(".bind_modal");
		})
		$(".modal_confirm_btn").click(function(){
			// alert("ok");
			modal.cancleModal(".bind_modal")
		})
	})
</script>
</html>