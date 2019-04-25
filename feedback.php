<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>意见反馈</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/vip.css">
	<link rel="stylesheet" href="css/setting.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
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
				<h4><a href="setting.php">设置</a>&gt;&gt;<span>意见反馈</span></h4>
				<div class="feedback_box">
					<form action="" method="post">
						<h5>意见反馈</h5>
						<div class="feed_item">
							<h6>反馈内容</h6>
							<textarea name="content" placeholder="请详细描述您的问题" id="" cols="30" rows="10"></textarea>
						</div>
						<div class="feed_item">
							<h6>联系方式</h6>
							<input type="text" name="contact" placeholder="请留下您的联系方式（电子邮箱或者电话号码），方便我们与您联系">
						</div>
						<div class="feed_item">
							<h6>请上传相关照片</h6>
							<ul class="photo_ul">
								<li>
									<img src="images/delete.png" class="delete_icon" alt="">
								</li>
							</ul>
							<div class="add_box">
								<div class="add_photo">
									<span>+</span>
									<p>添加照片</p>
								</div>
							</div>
						</div>
						<input type="submit" class="submit_btn" value="提交">
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modal_layer"></div>
	<div class="modal_box recharge_modal feedback_modal">
		<img src="images/close.png" alt="">
		<div class="box">
			<p>感谢您的宝贵意见，如有需要，我们可能会与您联系，再次感谢！</p>
			<a href="javascript:void(0);">确认</a>
		</div>
	</div>
	<div class="modal_box recharge_modal photo_modal">
		<img src="images/close.png" alt="">
		<div class="box">
			<p>确定要删除该图片？</p>
			<ul>
				<li><a href="javascript:void(0);">确认</a></li>
				<li><a href="javascript:void(0);" class="last">取消</a></li>
			</ul>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>