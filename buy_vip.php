<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>购买会员</title>
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
	<script src="js/common.js"></script>
</head>
<body>
	<?php include 'header_nav.php'; ?>
	<div class="person_box">
		<div class="container">
			<h3>购买高级会员</h3>
			<div class="vip_select">
				<div class="box">
					<label for="vip1"><p>1888元/月</p><input type="radio" id="vip1" checked name="vip[]"></label>
					<label for="vip2"><p><span>1776元</span>1600元/2个月</p><input type="radio" id="vip2" name="vip[]"></label>
					<label for="vip3"><p><span>2667元</span>2100元/3个月</p><input type="radio" id="vip3" name="vip[]"></label>
				</div>
			</div>
			<div class="vip_buy primary">
				<div class="box">
					<div class="vip">
						<div class="left">
							<p>注册用户</p>
						</div>
						<img src="images/arrow.png" alt="">
						<div class="right">
							<div>
								<img src="images/com_vip.png" alt="">
								<p>初级会员</p>
							</div>
							<span>30天</span>
						</div>
					</div>
				</div>
			</div>
			<div class="vip_buy high">
				<div class="box">
					<div class="vip">
						<div class="left">
							<ul>
								<li><img src="images/A_vip.png" alt="">初级会员</li>
								<li>现剩余</li>
								<li>15天</li>
							</ul>
						</div>
						<img src="images/arrow.png" alt="">
						<div class="right">
							<ul>
								<li><img src="images/high_vip.png" alt="">高级会员</li>
								<li>将补偿</li>
								<li>3天</li>
							</ul>
						</div>
					</div>					
				</div>
			</div>
			<div class="pay_money">
				<div class="box">
					<ul>
						<li>总服务天天数<span>33天</span></li>
						<li>应付金额<span>888元</span></li>
					</ul>
				</div>
			</div>
			<a href="javascript:void(0);" class="buy_btn">立即购买</a>
			<h5 class="pay_till">您现在将支付888元人名币。</h5>
			<h6 class="pay_care">（注意：我们不会提供退款服务）</h6>
		</div>
	</div>
	<div class="modal_layer"></div>
	<div class="modal_box pay_modal fix">
		<img src="images/close.png" class="close_img" alt="">
		<div class="box">
			<h4>金额合计<span>70元</span></h4>
			<div class="pay_ul">
				<label for="wx_pay"><input type="radio" name="pay[]" checked id="wx_pay"><img src="images/wx_icon.png" alt="">微信</label>
				<label for="zfb_pay"><input type="radio" name="pay[]" id="zfb_pay"><img src="images/zfb_icon.png" alt="">支付宝</label>
			</div>
			<ul style="padding: 0 .3rem;">
				<li><a href="javascript:void(0);" class="modal_confirm_btn modal_buy_vip">确认</a></li>
				<li><a href="javascript:void(0);" class="modal_cancle_btn last">取消</a></li>
			</ul>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
<script>
	$(function(){
		var modal = new LModal();
		$(".buy_btn").on("click",function(){
			modal.showModal(".pay_modal");
		})
		$(".modal_buy_vip").click(function(){
			alert("ok");
			modal.cancleModal(".pay_modal")
		})
	})
</script>
</html>