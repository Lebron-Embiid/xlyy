<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>系统消息</title>
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
				<h4><a href="message.php">我的消息</a>&gt;&gt;<span>系统消息</span><label for="read"><input type="checkbox" name="read" id="read">只看未读</label></h4>
				<div class="window_box">
					<div class="window_item">
						<div class="w_left">
							<img src="images/window_img1.jpg" class="img" alt="">
							<p>红包</p>
						</div>
						<div class="w_right">
							<p>收到会员“美罗”红包800元<a href="">请点击此处查看</a></p>
							<div class="w_new">
								<span>2019-03-07 18:33</span>
								<div>
									<span class="new">新</span>
									<!-- <img src="images/delete.png" class="del_img" alt=""> -->
								</div>
							</div>
						</div>
					</div>
					<div class="window_item">
						<div class="w_left">
							<img src="images/window_img2.jpg" class="img" alt="">
							<p>客服</p>
						</div>
						<div class="w_right">
							<p>客服“笑笑”向您发送消息：你好，刘总，您还没有绑定微信/支付宝账号，您无法使用提现服务。建议您尽快绑定。<a href="">请点击此处去绑定</a></p>
							<div class="w_new">
								<span>2019-03-07 18:33</span>
								<div>
									<!-- <span class="new">新</span> -->
									<img src="images/delete.png" class="del_img" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="window_item">
						<div class="w_left">
							<img src="images/window_img1.jpg" class="img" alt="">
							<p>红包</p>
						</div>
						<div class="w_right">
							<p>收到会员“美罗”红包800元<a href="">请点击此处查看</a></p>
							<div class="w_new">
								<span>2019-03-07 18:33</span>
								<div>
									<!-- <span class="new">新</span> -->
									<img src="images/delete.png" class="del_img" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal_layer"></div>
	<div class="modal_box del_modal">
		<img src="images/close.png" class="close_img" alt="">
		<div class="box">
			<p>您确定要删除该消息吗？</p>
			<ul>
				<li><a href="javascript:void(0);" class="modal_confirm_btn">确认</a></li>
				<li><a href="javascript:void(0);" class="modal_cancle_btn last">取消</a></li>
			</ul>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
<script>
	$(function(){
		var modal = new LModal();
		var index = "";
		$(".window_box").on('click',".del_img",function(){
			index = $(this).parents(".window_item").index();
			modal.showModal(".del_modal");
		})
		$(".modal_confirm_btn").click(function(){
			alert("ok"+index);
			modal.cancleModal(".del_modal")
		})
	})
</script>
</html>