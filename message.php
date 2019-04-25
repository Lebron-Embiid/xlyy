<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>私信</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/vip.css">
	<link rel="stylesheet" href="css/message.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/common.js"></script>
</head>
<body>
	<?php include 'header_nav.php'; ?>
	<div class="wallet_box message">
		<div class="container">
			<div class="left">
				<?php include 'message_left.php'; ?>
			</div>
			<div class="right">
				<h4><a href="setting.php">我的消息</a>&gt;&gt;<span>私信</span><label for="read"><input type="checkbox" name="read" id="read">只看未读</label></h4>
				<div class="message_box">
					<div class="message_item">
						<div class="mess_default">
							<div class="h_left">
								<img src="images/message_img1.jpg" class="img" alt="">
								<div class="info">
									<h5><span class="name">凉凉</span><span>27</span><span><img src="images/address3.png" alt="">上海市普陀区</span></h5>
									<p>奢华的生活爱好者</p>
								</div>
							</div>
							<div class="h_right">
								<div class="set_box">
									<span class="set_img"></span>
									<div class="setting_layer">
										<div><a href="javascript:void(0);">屏蔽她</a></div>
										<div><a href="javascript:void(0);">删除她</a></div>
										<div><a href="javascript:void(0);">删除此消息</a></div>
									</div>
								</div>
								<div class="h_down">
									<img src="images/down3.png" alt="">
								</div>
								<div class="h_new">
									<span>2019-03-07 18:33</span>
									<div>
										<span class="new">新</span>
										<!-- <img src="images/delete.png" alt=""> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal_layer"></div>
	<div class="modal_box recharge_modal screen_modal">
		<img src="images/close.png" alt="">
		<div class="box">
			<p>屏蔽该会员后，她将被禁止给您发私信，您确定要屏蔽她吗？</p>
			<ul>
				<li><a href="javascript:void(0);">确认</a></li>
				<li><a href="javascript:void(0);">取消</a></li>
			</ul>
		</div>
	</div>
	<div class="modal_box recharge_modal del_modal">
		<img src="images/close.png" alt="">
		<div class="box">
			<p>您确定要删除该消息吗？</p>
			<ul>
				<li><a href="javascript:void(0);">确认</a></li>
				<li><a href="javascript:void(0);">取消</a></li>
			</ul>
		</div>
	</div>
	<div class="modal_box recharge_modal report_modal ">
		<img src="images/close.png" alt="">
		<div class="box">
			<p>您确定要删除该消息吗？</p>
			<h6 style="color: #939393;">请选择举报该会员的理由：</h6>
			<div>
				<label for="reason1"><input type="radio" name="reason[]" id="reason1">怀疑是妓女</label>
				<label for="reason1"><input type="radio" name="reason[]" id="reason1">未成年</label>
				<label for="reason1"><input type="radio" name="reason[]" id="reason1">犯罪嫌疑</label>
				<label for="reason1"><input type="radio" name="reason[]" id="reason1">虚假会员</label>
				<label for="reason1"><input type="radio" name="reason[]" id="reason1">不合适的简介内容</label>
				<label for="reason1"><input type="radio" name="reason[]" id="reason1">不合适的行为举止</label>
			</div>
			<ul>
				<li><a href="javascript:void(0);">确认</a></li>
				<li><a href="javascript:void(0);">取消</a></li>
			</ul>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>