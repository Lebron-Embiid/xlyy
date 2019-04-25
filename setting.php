<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的设置</title>
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
				<h4>我的设置</h4>
				<!-- <h4><a href="setting.php">设置</a>&gt;&gt;<span>我的设置</span></h4> -->
				<div class="setting_box">
					<div class="cert_box">
						<h5>实名认证</h5>
						<p>您已经上传您的身份证信息、平台正在审核中，请耐心等待！</p>
						<div class="cert_card">
							<img src="images/cert_card.png" class="card_img" alt="">
							<span></span>
						</div>
					</div>
					<div class="third_part">
						<h5>第三方平台</h5>
						<p>绑定第三方账号，认证您的身份, 增加您的可信度。</p>
						<ul>
							<li><img src="images/third_part1.png" alt=""><span>英领</span><a href="">开通</a></li>
							<li><img src="images/third_part2.png" alt=""><span>Q Q</span><a href="">开通</a></li>
							<li><img src="images/third_part3.png" alt=""><span>微信</span><a class="then" href="javascript:void(0);">已开通</a></li>
							<li><img src="images/third_part4.png" alt=""><span>芝麻认证</span><a href="">开通</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>