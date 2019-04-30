<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>账号密码登录</title>
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
	<script src="js/common.js"></script>
</head>
<body>
	<?php include 'header_login.php'; ?>
	<div class="login_form_box">
		<div class="container">
			<form action="vip_index.php">
				<div class="input_box white">
					<img src="images/form_icon2.png" class="left_icon" alt="">
					<input type="text" class="input show_text phone_txt" placeholder="手机号码" name="phone">
					<img src="images/close.png" class="right_icon right_close" alt="">
				</div>
				<div class="input_box white">
					<img src="images/form_icon4.png" class="left_icon" alt="">
					<input type="password" class="input pwd_input" placeholder="密码" name="password">
					<img src="images/eye.png" class="right_eye right_eye1 active" alt="">
					<img src="images/eye1.png" class="right_eye right_eye2" alt="">
				</div>
				<div class="remember_box">
					<label for="remember"><input type="checkbox" name="remember" id="remember">记住我</label>
					<span>上次登录方式：手机登录</span>
				</div>
				<input type="submit" value="登录" class="login_btn">
				<p class="forget"><a href="">忘记密码</a><a href="login_phone.php">短信验证码登录</a></p>
				<p class="new"><a href="register.php?sex=0">新用户注册</a><span>|</span><a href="">社交帐号登录</a></p>
			</form>
		</div>
	</div>	
	<?php include 'common_service.php'; ?>
	<?php include 'footer.php'; ?>
</body>
</html>