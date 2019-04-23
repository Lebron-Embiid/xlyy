<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>服务邀约</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/invite.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<?php include 'header_nav.php'; ?>
	<div class="vip_top_info">
		<div class="container">
			<div class="profile">
				<img src="images/girl_img1.jpg" class="avatar" alt="">
				<h4>阿妹,<span>25</span></h4>
				<h6><img src="images/address2.png" alt="">杭州</h6>
				<p>寻找梦中的白马王子</p>
			</div>
		</div>
	</div>
	<div class="invite_content">
		<div class="container">
			<div class="invite_process_box">
				<h4>预约流程</h4>
				<img src="images/process_img1.jpg" alt="">
			</div>
			<div class="write_invite_mess">
				<h4>填写邀约信息</h4>
				<form action="">
					<div class="invite_box">
						<div class="invite_item">
							<div class="left">
								<img src="images/invate_mess1.png" alt="">
								<span>起始日期</span>
							</div>
							<div class="right">
								<input type="text" name="start_date" value="2019-03-05">
								<div class="date_icon"><img src="images/date.png" alt=""></div>
							</div>
						</div>
						<div class="invite_item">
							<div class="left">
								<img src="images/invate_mess1.png" alt="">
								<span>截止日期</span>
							</div>
							<div class="right">
								<input type="text" name="end_date" value="2019-03-05">
								<div class="date_icon"><img src="images/date.png" alt=""></div>
							</div>
						</div>
						<div class="invite_item">
							<div class="left">
								<img src="images/invate_mess1.png" alt="">
								<span>天数</span>
							</div>
							<div class="right single">
								<input type="text" name="day_num" value="">
							</div>
						</div>
						<div class="invite_item">
							<div class="left">
								<img src="images/invate_mess2.png" alt="">
								<span>具体时间</span>
							</div>
							<div class="right number">
								<input type="number" name="hour" placeholder="时" value="" max="23" min="0">
								<input type="number" name="minute" placeholder="分" value="" max="59" min="0">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>