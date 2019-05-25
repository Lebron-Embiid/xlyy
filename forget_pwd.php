<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>忘记密码</title>
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
	<style>
		.login_form_box .container{
			padding-bottom: .8rem;
		}
		.forget{
			margin-bottom: 0;
		}
		.login_btn{
			margin-top: 1rem;
		}
	</style>
</head>
<body>
	<?php include 'header_login.php'; ?>
	<div class="login_form_box">
		<div class="container">
			<form action="" method="post">
				<div class="input_box white">
					<img src="images/form_icon2.png" class="left_icon" alt="">
					<input type="text" class="input show_text phone_txt" placeholder="手机号码" name="phone">
					<img src="images/close.png" class="right_icon right_close" alt="">
				</div>
				<div class="input_box white">
					<img src="images/form_icon3.png" class="left_icon" alt="">
					<input type="text" placeholder="验证码" name="code">
					<input type="button" value="获取验证码" class="getCode"></input>
				</div>
				<div class="input_box white">
					<img src="images/form_icon4.png" class="left_icon" alt="">
					<input type="password" class="input pwd_input" placeholder="密码" name="password">
					<img src="images/eye.png" class="right_eye right_eye1 active" alt="">
					<img src="images/eye1.png" class="right_eye right_eye2" alt="">
				</div>
				<input type="submit" value="提交" class="login_btn">
				<p class="forget"><a href="javascript:void(0);"></a><a href="login.php">返回登录</a></p>
			</form>
		</div>
	</div>	
	<?php include 'common_service.php'; ?>
	<?php include 'footer.php'; ?>
</body>
</html>