<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的钱包</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/vip.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.knob.js"></script>
</head>
<body>
	<?php include 'header_nav.php'; ?>
	<div class="wallet_box">
		<div class="container">
			<div class="left">
				<?php include 'wallet_left.php'; ?>
			</div>
			<div class="right">
				<h4>我的钱包</h4>
				<div class="box">
					<div class="over_money">
						<span>￥</span>
						<div>
							<h6>当前余额</h6>
							<p>18988.00</p>
						</div>
					</div>
					<div class="over_rate">
						<input class="knob" data-fgColor="#be0020" style="outline: none;" data-thickness=".05" data-readOnly="true" value="70">
						<p>超过70%的平台用户</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
<script>
	$(function(){
		$(".knob").knob({
			'width': '180'
		});
	})
</script>
</html>