<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的会员</title>
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
				<div class="vip_card_box">
					<h5>我的会员</h5>
					<div class="vip_card">
						<div class="card_box">
							<img src="images/vip_card.jpg" alt="">
							<div class="card_layer">
								<span>首次开通：2017-11-25</span><span>有效期至：2019-12-30</span>
							</div>
						</div>
						<ul class="card_nav">
							<li class="red"><a href="buy_vip.php">会员续费</a></li>
							<li class="orange"><a href="buy_vip.php">会员升级</a></li>
							<li><a href="wallet.php">我的钱包</a></li>
						</ul>
					</div>
				</div>
				<div class="my_power_box">
					<h5>我的特权</h5>
					<ul class="power_box">
						<li><a href="javascript:void(0);"><img src="images/power_icon1.png" alt=""><p>浏览</p></a></li>
						<li><a href="javascript:void(0);"><img src="images/power_icon2.png" alt=""><p>无限关注</p></a></li>
						<li><a href="javascript:void(0);"><img src="images/power_icon3.png" alt=""><p>搜索</p></a></li>
						<li><a href="javascript:void(0);"><img src="images/power_icon4.png" alt=""><p>转发</p></a></li>
						<li><a href="javascript:void(0);"><img src="images/power_icon5.png" alt=""><p>发红包</p></a></li>
						<li><a href="javascript:void(0);"><img src="images/power_icon6.png" alt=""><p>谁看过我</p></a></li>
						<li><a href="javascript:void(0);"><img src="images/power_icon7.png" alt=""><p>我的粉丝</p></a></li>
						<li><a href="javascript:void(0);"><img src="images/power_icon8.png" alt=""><p>投诉</p></a></li>
						<li><a href="javascript:void(0);"><img src="images/power_icon9.png" alt=""><p>隐私设置</p></a></li>
						<li><a href="javascript:void(0);"><img src="images/power_icon10.png" alt=""><p>充值提现</p></a></li>
					</ul>
				</div>
				<div class="can_buy_box">
					<h5>可以购买</h5>
					<ul>
						<li><a href="javascript:void(0);"><img src="images/offer_icon1.png" alt=""><p>叫醒服务</p></a></li>
						<li><a href="javascript:void(0);"><img src="images/offer_icon2.png" alt=""><p>假扮女友</p></a></li>
						<li><a href="javascript:void(0);"><img src="images/offer_icon3.png" alt=""><p>旅游陪伴</p></a></li>
						<li><a href="javascript:void(0);"><img src="images/offer_icon4.png" alt=""><p>出席商务场合</p></a></li>
						<li><a href="javascript:void(0);"><img src="images/offer_icon5.png" alt=""><p>更多服务</p></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>