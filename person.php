<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人中心</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/vip.css">
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
			<ul class="vip_look">
				<li><a href="my_invite.php">查看我的邀约</a></li>
				<li class="active"><a href="basic_info.php">修改我的简介</a></li>
			</ul>
		</div>
	</div>
	<div class="vip_detail_box">
		<div class="container">
			<div class="vip_left">
				<?php include 'vip_info.php'; ?>
				<?php include 'vip_left.php'; ?>	
			</div>
			<div class="vip_right">
				<div class="her_photo_box member">
					<ul>
						<li><img src="images/lock_img1.jpg" alt=""></li>
						<li><img src="images/lock_img2.jpg" alt=""></li>
						<li><img src="images/lock_img3.jpg" alt=""></li>
						<li><img src="images/lock_img4.jpg" alt=""></li>
					</ul>
				</div>
				<div class="write_data_box">
					<p>请完整填写您的个人资料，让其他会员可以查看到您</p>
					<!-- <img src="images/process2.jpg" alt=""> -->
					<ul class="pc_process_box">
						<li class="active">
							<span></span>
							<p>基本信息</p>
						</li>
						<li class="active">
							<span></span>
							<p>照片</p>
						</li>
						<li class="active">
							<span></span>
							<p>描述</p>
						</li>
						<li>
							<span></span>
							<p>实名认证</p>
						</li>
					</ul>
				</div>
				<div class="my_person_info">
					<h5>林总的个人信息</h5>
					<ul>
						<li>年龄：39</li>
						<li>身材：健壮</li>
						<li>饮酒：偶尔</li>
						<li>体型：正常</li>
						<li>吸烟：不吸烟</li>
						<li>学历：博士</li>
						<li>净值：500万</li>
						<li>身高：170CM</li>
						<li>职业：投资经理</li>
					</ul>
				</div>
				<div class="my_self_info">
					<h5>自我介绍</h5>
					<div class="box">
						<p>我是××号选手XXX。我来自陕西，西北的山城，北方的江南。我喜欢旅行、喜欢运动、更喜欢阅读。在我看来做主持人与做教师无异，因为电视媒体能为我提供一个更大的讲台，因而一个好的主持人能够启迪更多的人!来之前，有朋友说这
里是没有硝烟的战场。看不见的对手，你四面楚歌;顶着对手的重炮，提防着处处的陷阱。说的够残酷，不过所谓地狱在左，天堂在右，我倒是更愿意将这里比做现在的股市。</p>
					</div>
				</div>
				<div class="my_find_info">
					<h5>寻求</h5>
					<div class="box">
						<p>女方性格温柔体贴，善解人意。愿意陪我旅行。</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>