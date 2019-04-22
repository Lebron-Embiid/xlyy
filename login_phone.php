<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>验证码登录</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/login.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/code.js"></script>
	<style>
		.login_form_box .container{
			padding-bottom: .8rem;
		}
		.forget{
			margin-bottom: 0;
		}
	</style>
</head>
<body>
	<?php include 'header.php'; ?>
	<div class="login_form_box">
		<div class="container">
			<form action="vip_index.php">
				<div class="input_box white">
					<img src="images/form_icon2.png" class="left_icon" alt="">
					<input type="text" class="input phone_txt" placeholder="手机号码" name="phone">
					<img src="images/close.png" class="right_icon right_close" alt="">
				</div>
				<div class="input_box white">
					<img src="images/form_icon3.png" class="left_icon" alt="">
					<input type="text" placeholder="验证码" name="code">
					<input type="button" value="获取验证码" class="getCode"></input>
				</div>
				<div class="warn">
					<img src="images/warning.png" alt="">未注册过的手机号码将自动创建新账号
				</div>
				<input type="submit" value="登录" class="login_btn">
				<p class="forget"><a href="javascript:void(0);"></a><a href="login.php">帐号密码登录</a></p>
			</form>
		</div>
	</div>	
	<?php include 'common_service.php'; ?>
	<?php include 'footer.php'; ?>
</body>
</html>