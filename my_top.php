<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的置顶</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/person.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<?php include 'header_nav.php'; ?>
	<div class="vip_top_info">
		<div class="container">
			<div class="profile">
				<h4>阿妹,<span>25</span></h4>
				<h6><img src="images/address2.png" alt="">杭州</h6>
				<p>寻找梦中的白马王子</p>
			</div>
		</div>
	</div>
	<div class="vip_detail_box">
		<div class="container">
			<div class="vip_left">
				<?php include 'vip_info.php'; ?>
			</div>
			<div class="vip_right">
				<div class="my_top_box">
					<h5>我的置顶</h5>
					<ul>
						<li>
							<img src="images/top_icon1.png" class="icon" alt="">
							<span>首页置顶</span>
							<p><img src="images/top_ok1.png" alt="">已置顶</p>
							<a href="">咨询</a>
						</li>
						<li>
							<img src="images/top_icon2.png" class="icon" alt="">
							<span>搜索结果页面置顶</span>
							<p><img src="images/top_ok1.png" alt="">已置顶</p>
							<a href="">咨询</a>
						</li>
						<li>
							<img src="images/top_icon3.png" class="icon" alt="">
							<span>发现页面置顶</span>
							<p><img src="images/top_ok.png" alt="">未置顶</p>
							<a href="">咨询</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>