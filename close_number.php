<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>关闭账号</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/vip.css">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/setting.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/code.js"></script>
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
				<h4><a href="setting.php">设置</a>&gt;&gt;<span>关闭账号</span></h4>
				<div class="change_password_box">
					<div class="close_box">
						<h5>关闭账号</h5>
						<p>关闭账号您的信息将不再被服务器保存并永久删除无法恢复，他人将无法再看到您的个人信息。请慎重考虑。关闭后，您再次登录该账号，系统将自动为您打开。</p>
					</div>
					<form action="" method="post">
						<span>手机号码</span>
						<div class="input_box mb20">
							<img src="images/form_icon2.png" class="left_icon" alt="">
							<input type="text" class="input" placeholder="手机号" name="phone">
							<img src="images/close.png" class="right_icon right_close" alt="">
						</div>
						<p>*为了您帐号的安全，请使用注册时的手机号码</p>
						<span>验证码</span>
						<div class="input_box">
							<img src="images/form_icon3.png" class="left_icon" alt="">
							<input type="text" placeholder="验证码" name="code">
							<input type="button" value="获取验证码" class="getCode"></input>
						</div>
						<span>密码</span>
						<div class="input_box mb20">
							<img src="images/form_icon4.png" class="left_icon" alt="">
							<input type="password" class="input" placeholder="6-16位字母/数字" name="password">
							<img src="images/eye.png" class="right_eye active" alt="">
							<img src="images/eye1.png" class="right_eye" alt="">
						</div>
						<div class="form_btn">
							<input type="submit" class="submit_btn" value="确定">
							<input type="reset" class="reset_btn" value="取消">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>