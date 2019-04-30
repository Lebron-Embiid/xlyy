<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
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
	<script src="js/common.js"></script>
</head>
<body>
	<?php include 'header_login.php'; ?>
	<div class="register_banner">
		<div class="container">
			<div class="register_box">
				<form action="">
					<div class="sex_box">
						<span>我是</span>
						<div>
							<input type="radio" name="sex" value="0" <?php if($_GET['sex'] == 0){ echo 'checked'; } ?>>
							<input type="radio" name="sex" value="1" <?php if($_GET['sex'] == 1){ echo 'checked'; } ?>>
						</div>
					</div>
					<div class="input_box">
						<img src="images/form_icon1.png" class="left_icon" alt="">
						<input type="text" class="input show_text" placeholder="用户名" name="username">
						<img src="images/close.png" class="right_icon right_close" alt="">
					</div>
					<div class="input_box">
						<img src="images/form_icon2.png" class="left_icon" alt="">
						<input type="text" class="input show_text phone_txt" placeholder="手机号码" name="phone">
						<img src="images/close.png" class="right_icon right_close" alt="">
					</div>
					<div class="input_box">
						<img src="images/form_icon3.png" class="left_icon" alt="">
						<input type="text" placeholder="验证码" name="code">
						<input type="button" value="获取验证码" class="getCode"></input>
					</div>
					<div class="input_box">
						<img src="images/form_icon4.png" class="left_icon" alt="">
						<input type="password" class="input pwd_input" placeholder="密码" name="password">
						<img src="images/eye.png" class="right_eye right_eye1 active" alt="">
						<img src="images/eye1.png" class="right_eye right_eye2" alt="">
					</div>
					<p class="agree_p"><input type="checkbox" name="agree">同意本网站的<a href="">用户协议</a>，<a href="privacy_policy.php">隐私声明</a>和<a href="platform_agreement.php">平台协议</a></p>
					<input type="submit" value="注册" class="reg_btn">
					<p class="to_login">已有账号？<a href="login.php">登录</a></p>
				</form>
			</div>
		</div>
	</div>
	<?php include 'common_service.php'; ?>
	<?php include 'footer.php'; ?>
</body>
</html>