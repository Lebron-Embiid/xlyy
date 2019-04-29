<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>会员详情</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/vip.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/common.js"></script>
	<style>
		.modal_box a{
			width: 2rem;
		}
		.modal_letter_box{
			text-align: left;
			padding: .25rem .3rem .6rem !important;
		}
		.modal_box .box{
			padding: 0 !important;
		}
	</style>
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
			<ul>
				<li><a href="" title="关注"><img src="images/person_icon1.png" alt=""></a></li>
				<li><a href="" title="评论"><img src="images/person_icon2.png" alt=""></a></li>
				<li class="letter_btn"><a href="javascript:void(0);" title="私信"><img src="images/person_icon3.png" alt=""></a></li>
				<li><a href="" title="红包"><img src="images/person_icon4.png" alt=""></a></li>
			</ul>
		</div>
	</div>
	<div class="vip_detail_box">
		<div class="container">
			<div class="vip_left">
				<?php include 'vip_info.php'; ?>
				<?php include 'vip_left.php'; ?>
				<h4>常见问题</h4>
				<div class="common_question">
					<ul>
						<li><a href="question.php">这女会员靠谱吗？</a></li>
						<li><a href="question.php">这女会员靠谱吗？</a></li>
						<li><a href="question.php">这女会员靠谱吗？</a></li>
						<li><a href="question.php">这女会员靠谱吗？</a></li>
					</ul>
					<a href="question.php" class="more">显示更多</a>
				</div>
			</div>
			<div class="vip_right">
				<!-- <div class="her_photo_box">
					<div class="img">
						<img src="images/level_img.jpg" class="photo" alt="">
						<div class="layer">
							<p>照片(10)</p>
							<img src="images/lock.png" class="lock" alt="">
						</div>
					</div>
					<div class="word">
						<p>您目前不能查看“阿妹”的照片，同时您也无法使用“私信”、“转发”、“关注”和“红包”功能，请升级成为会员。</p>
						<a href="" class="up_level">缴费升级</a>
					</div>
				</div> -->
				<div class="her_photo_box member">
					<ul>
						<li><img src="images/lock_img1.jpg" alt=""></li>
						<li><img src="images/lock_img2.jpg" alt=""></li>
						<li><img src="images/lock_img3.jpg" alt=""></li>
						<li><img src="images/lock_img4.jpg" alt=""></li>
						<li>
							<div class="img">
								<img src="images/level_img.jpg" class="photo" alt="">
								<div class="layer">
									<p>照片(10)</p>
									<img src="images/lock.png" class="lock" alt="">
									<a href="" class="see">申请查看</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<!-- <div class="offter_service_box">
					<h5>提供服务</h5>
					<ul>
						<li>
							<img src="images/offer_icon1.png" alt="">
							<h6>叫醒服务</h6>
							<p>（初级会员可享）</p>
						</li>
						<li>
							<img src="images/offer_icon2.png" alt="">
							<h6>假扮女友</h6>
							<p>（初级会员可享）</p>
						</li>
						<li>
							<img src="images/offer_icon5.png" alt="">
							<h6>更多服务</h6>
						</li>
					</ul>
				</div> -->
				<div class="offter_service_box member">
					<h5><span>提供服务</span><span>可前往异地</span><span>收款方式</span><span>报价</span></h5>
					<div class="service_table">
						<div class="table_item">
							<div class="box"><img src="images/offer_icon1.png" alt=""><div><span>叫醒服务</span></div></div>
							<span>可以</span>
							<span>线上支付</span>
							<span>10元</span>
							<a href="invite.php">预约</a>
						</div>
						<div class="table_item">
							<div class="box"><img src="images/offer_icon2.png" alt=""><div><span>假扮女友</span></div></div>
							<span>可以</span>
							<span>线上支付</span>
							<span>100元/1天</span>
							<a href="invite.php">预约</a>
						</div>
						<div class="table_item">
							<div class="box"><img src="images/offer_icon3.png" alt=""><div><span>旅游伴侣</span></div></div>
							<span>可以</span>
							<span>线上支付</span>
							<span>10元</span>
							<a href="invite.php">预约</a>
						</div>
						<div class="table_item">
							<div class="box"><img src="images/offer_icon4.png" alt=""><div><span>出席商务场合</span></div></div>
							<span>可以</span>
							<span>线上支付</span>
							<span>10元</span>
							<a href="invite.php">预约</a>
						</div>
						<div class="table_item">
							<div class="box"><img src="images/offer_icon5.png" alt=""><div><span>叫醒服务</span><span>(VIP会员可见)</span></div></div>
						</div>
					</div>
				</div>
				<div class="her_person_info">
					<h5>个人信息</h5>
					<ul>
						<li>年龄：29</li>
						<li>所在地：深圳</li>
						<li>吸烟：不吸烟</li>
						<li>身高：170CM</li>
						<li>身材：丰满</li>
						<li>饮酒：偶尔</li>
						<li>职业：美容师</li>
						<li>学历：本科</li>
						<li>发型：直发</li>
						<li>发色：黑色</li>
					</ul>
				</div>
				<div class="her_feature_box">
					<h5>身材标签</h5>
					<ul>
						<li>婀娜多姿</li>
						<li>小巧玲珑</li>
						<li>肥臀丰乳</li>
					</ul>
				</div>
				<div class="her_character_box">
					<h5>性格标签</h5>
					<ul>
						<li>温柔大方</li>
						<li>善良体贴</li>
						<li>知书达理</li>
					</ul>
				</div>
				<div class="her_self_introduce">
					<h5>自我介绍</h5>
					<p>我是××号选手XXX。我来自陕西，西北的山城，北方的江南。我喜欢旅行、喜欢运动、更喜欢阅读。在我看来做主持人与做教师无异.</p>
				</div>
				<div class="her_self_introduce her_self_find">
					<h5>寻找</h5>
					<p>他很懒，没有填写任何内容<a href="">请求他填写</a></p>
				</div>
				<div class="her_comment_box">
					<h5>邀约评论</h5>
					<ul class="comment_ul">
						<li class="comment_item">
							<div class="item_box">
								<img src="images/commit_img1.jpg" class="avatar" alt="">
								<div class="center">
									<h4>零老板</h4>
									<h6>综合评价：<img src="images/star.png" alt=""><img src="images/star.png" alt=""><img src="images/star.png" alt=""><img src="images/star.png" alt=""><img src="images/star.png" alt=""></h6>
									<p>这个姑娘的叫醒服务很及时，下次再继续使用！</p>
								</div>
								<div class="right">
									<img src="images/down1.png" class="down_icon" alt="">
									<p>2018-10-23 09:50</p>
								</div>
							</div>
						</li>
						<li class="comment_item">
							<div class="item_box">
								<img src="images/commit_img1.jpg" class="avatar" alt="">
								<div class="center">
									<h4>零老板</h4>
									<h6>综合评价：<img src="images/star.png" alt=""><img src="images/star.png" alt=""><img src="images/star.png" alt=""><img src="images/star.png" alt=""><img src="images/star.png" alt=""></h6>
									<p>这个姑娘的叫醒服务很及时，下次再继续使用！</p>
								</div>
								<div class="right">
									<img src="images/down1.png" class="down_icon" alt="">
									<p>2018-10-23 09:50</p>
								</div>
							</div>
						</li>
						<li class="comment_item">
							<div class="item_box">
								<img src="images/commit_img1.jpg" class="avatar" alt="">
								<div class="center">
									<h4>零老板</h4>
									<h6>综合评价：<img src="images/star.png" alt=""><img src="images/star.png" alt=""><img src="images/star.png" alt=""><img src="images/star.png" alt=""><img src="images/star.png" alt=""></h6>
									<p>这个姑娘的叫醒服务很及时，下次再继续使用！</p>
								</div>
								<div class="right">
									<img src="images/down1.png" class="down_icon" alt="">
									<p>2018-10-23 09:50</p>
								</div>
							</div>
							<div class="comment_child">
								<ul>
									<li class="comment_item">
										<img src="images/commit_img4.jpg" class="avatar" alt="">
										<div class="center">
											<h4>零老板</h4>
											<h6>综合评价：<img src="images/star.png" alt=""><img src="images/star.png" alt=""><img src="images/star.png" alt=""><img src="images/star.png" alt=""><img src="images/star.png" alt=""></h6>
											<p>这个姑娘的叫醒服务很及时，下次再继续使用！</p>
										</div>
										<div class="right">
											<p>2018-10-23 09:50</p>
										</div>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
				<div class="her_complaint_box">
					<h5>邀约投诉</h5>
					<ul>
						<li class="comment_item">
							<img src="images/commit_img1.jpg" class="avatar" alt="">
							<div class="center">
								<h4>零老板</h4>
								<h6><img src="images/bad.png" alt=""></h6>
								<p>阿妹服务态度不好，不推荐给其他会员！</p>
							</div>
							<div class="right">
								<p>2018-10-23 09:50</p>
							</div>
						</li>
					</ul>
				</div>
				<div class="user_consult_box">
					<h5>用户咨询</h5>
					<div class="consult_item">
						<div class="left">
							<img src="images/commit_img1.jpg" alt="">
							<p>凌老板</p>
						</div>
						<div class="right">
							<h6>这个邀约的价格包括一切费用吗？我往返的交通费用是要自己承担吗？</h6>
							<div>
								<span>官方回复：</span>
								<p>您好！价格是不包含来往交通费的，请根据你的自身条件选择前往约定地点。如您需要对方承担您往返的交通费用，请事先与对方协商。感谢您对xxx网站的支持，祝您生活愉快。</p>
							</div>
							<p class="time">2018-10-23 09:50</p>
						</div>
					</div>
					<div class="consult_item">
						<div class="left">
							<img src="images/commit_img1.jpg" alt="">
							<p>凌老板</p>
						</div>
						<div class="right">
							<h6>这个邀约的价格包括一切费用吗？我往返的交通费用是要自己承担吗？</h6>
							<div>
								<span>官方回复：</span>
								<p>您好！价格是不包含来往交通费的，请根据你的自身条件选择前往约定地点。如您需要对方承担您往返的交通费用，请事先与对方协商。感谢您对xxx网站的支持，祝您生活愉快。</p>
							</div>
							<p class="time">2018-10-23 09:50</p>
						</div>
					</div>
					<div class="consult_item">
						<div class="left">
							<img src="images/commit_img1.jpg" alt="">
							<p>凌老板</p>
						</div>
						<div class="right">
							<h6>这个邀约的价格包括一切费用吗？我往返的交通费用是要自己承担吗？</h6>
							<div>
								<span>官方回复：</span>
								<p>您好！价格是不包含来往交通费的，请根据你的自身条件选择前往约定地点。如您需要对方承担您往返的交通费用，请事先与对方协商。感谢您对xxx网站的支持，祝您生活愉快。</p>
							</div>
							<p class="time">2018-10-23 09:50</p>
						</div>
					</div>
				</div>
				<div class="write_question_box">
					<form action="">
						<textarea name="" id="" cols="30" rows="10" placeholder="请在此处填入您的问题"></textarea>
						<p>10-50个字符</p>
						<input type="submit" class="consult_btn" value="立即咨询">
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modal_layer"></div>
	<div class="modal_box modal_letter_box">
		<img src="images/close.png" class="close_img" alt="">
		<div class="box">
			<div class="letter_box">
				<img src="images/avatar_img1.jpg" class="img" alt="">
				<h5>林总</h5>
				<h6><img src="images/address4.png" alt="">上海市普陀区</h6>
				<p>全球商务精英</p>
			</div>
			<textarea name="letter" id="" cols="30" placeholder="请输入私信内容" rows="10"></textarea>
			<a href="javascript:void(0);" class="modal_confirm_btn modal_letter_btn">发送</a>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
<script>
	$(function(){
		var modal = new LModal();
		$(".letter_btn").click(function(){
			modal.showModal(".modal_letter_box");
		})
		$(".modal_letter_btn").click(function(){
			alert("ok");
			modal.cancleModal(".modal_letter_box")
		})
		
		$(".comment_ul").on("click",".down_icon",function(){
			if($(this).parent().parent().parent().hasClass("active")){
				$(this).parent().parent().parent().removeClass("active");
				$(this).parent().parent().siblings().removeClass("active");
			}else{
				$(this).parent().parent().parent().addClass("active");
				$(this).parent().parent().siblings().addClass("active");
			}
		})
	})
</script>
</html>