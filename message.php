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
				<h4><a href="message.php">我的消息</a>&gt;&gt;<span>私信</span><label for="read"><input type="checkbox" name="read" id="read">只看未读</label></h4>
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
								<div class="cancle"><a href="">取消屏蔽</a></div>
								<div class="set_box">
									<span class="set_img"></span>
									<div class="setting_layer">
										<div class="screen_a"><a href="javascript:void(0);">屏蔽她</a></div>
										<div class="del_ta"><a href="javascript:void(0);">删除她</a></div>
										<div class="del_img"><a href="javascript:void(0);">删除此消息</a></div>
									</div>
								</div>
								<div class="h_down">
									<img src="images/down3.png" alt="">
								</div>
								<div class="h_new">
									<span>2019-03-07 18:33</span>
									<div>
										<span class="new">新</span>
										<!-- <img src="images/delete.png" class="del_img" alt=""> -->
									</div>
								</div>
							</div>
						</div>
						<div class="open_mess_box">
							<div class="mess_scroll">
								<div class="mess_item">
									<p class="time">2019-03-15  14:50</p>
									<div class="send_mess">
										<img src="images/message_img1.jpg" class="head" alt="">
										<p class="content">我想约你在深圳世界之窗门口，这周日见面，你看怎么样？</p>
									</div>
								</div>
								<div class="mess_item me">
									<p class="time">2019-03-15  15:20</p>
									<h6>我的投诉</h6>
									<div class="send_mess">
										<img src="images/message_img2.jpg" class="head" alt="">
										<p class="content">我想约你在深圳世界之窗门口，这周日见面，你看怎么样？</p>
									</div>
								</div>
							</div>
							<div class="reply_mess_box">
								<form action="">
									<textarea name="message" id="" placeholder="请在此填入您的消息" cols="30" rows="10"></textarea>
									<input type="submit" class="submit_btn" value="发送">
								</form>
							</div>
						</div>
					</div>
					<div class="message_item">
						<div class="mess_default">
							<div class="h_left">
								<img src="images/message_img2.jpg" class="img" alt="">
								<div class="info">
									<h5><span class="name">凉凉</span><span>27</span><span><img src="images/address3.png" alt="">上海市普陀区</span></h5>
									<p>奢华的生活爱好者</p>
								</div>
							</div>
							<div class="h_right">
								<div class="cancle"><a href="">取消屏蔽</a></div>
								<div class="set_box">
									<span class="set_img"></span>
									<div class="setting_layer">
										<div class="screen_a"><a href="javascript:void(0);">屏蔽她</a></div>
										<div class="del_ta"><a href="javascript:void(0);">删除她</a></div>
										<div class="del_img"><a href="javascript:void(0);">删除此消息</a></div>
									</div>
								</div>
								<div class="h_down">
									<img src="images/down3.png" alt="">
								</div>
								<div class="h_new">
									<span>2019-03-07 18:33</span>
									<div>
										<span class="new">新</span>
										<!-- <img src="images/delete.png" class="del_img" alt=""> -->
									</div>
								</div>
							</div>
						</div>
						<div class="open_mess_box">
							<div class="mess_scroll">
								<div class="mess_item">
									<p class="time">2019-03-15  14:50</p>
									<div class="send_mess">
										<img src="images/message_img1.jpg" class="head" alt="">
										<p class="content">我想约你在深圳世界之窗门口，这周日见面，你看怎么样？</p>
									</div>
								</div>
								<div class="mess_item me">
									<p class="time">2019-03-15  15:20</p>
									<h6>我的投诉</h6>
									<div class="send_mess">
										<img src="images/message_img2.jpg" class="head" alt="">
										<p class="content">我想约你在深圳世界之窗门口，这周日见面，你看怎么样？</p>
									</div>
								</div>
							</div>
							<div class="reply_mess_box">
								<form action="">
									<textarea name="message" id="" placeholder="请在此填入您的消息" cols="30" rows="10"></textarea>
									<input type="submit" class="submit_btn" value="发送">
								</form>
							</div>
						</div>
					</div>
					<div class="message_item">
						<div class="mess_default">
							<div class="h_left">
								<img src="images/message_img3.jpg" class="img" alt="">
								<div class="info">
									<h5><span class="name">凉凉</span><span>27</span><span><img src="images/address3.png" alt="">上海市普陀区</span></h5>
									<p>奢华的生活爱好者</p>
								</div>
							</div>
							<div class="h_right">
								<div class="cancle"><a href="">取消屏蔽</a></div>
								<div class="set_box">
									<span class="set_img"></span>
									<div class="setting_layer">
										<div class="screen_a"><a href="javascript:void(0);">屏蔽她</a></div>
										<div class="del_ta"><a href="javascript:void(0);">删除她</a></div>
										<div class="del_img"><a href="javascript:void(0);">删除此消息</a></div>
									</div>
								</div>
								<div class="h_down">
									<img src="images/down3.png" alt="">
								</div>
								<div class="h_new">
									<span>2019-03-07 18:33</span>
									<div>
										<!-- <span class="new">新</span> -->
										<img src="images/delete.png" class="del_img" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="open_mess_box">
							<div class="mess_scroll">
								<div class="mess_item">
									<p class="time">2019-03-15  14:50</p>
									<div class="send_mess">
										<img src="images/message_img1.jpg" class="head" alt="">
										<p class="content">我想约你在深圳世界之窗门口，这周日见面，你看怎么样？</p>
									</div>
								</div>
								<div class="mess_item me">
									<p class="time">2019-03-15  15:20</p>
									<h6>我的投诉</h6>
									<div class="send_mess">
										<img src="images/message_img2.jpg" class="head" alt="">
										<p class="content">我想约你在深圳世界之窗门口，这周日见面，你看怎么样？</p>
									</div>
								</div>
							</div>
							<div class="reply_mess_box">
								<form action="">
									<textarea name="message" id="" placeholder="请在此填入您的消息" cols="30" rows="10"></textarea>
									<input type="submit" class="submit_btn" value="发送">
								</form>
							</div>
						</div>
					</div>
					<div class="message_item active">
						<div class="mess_default">
							<div class="h_left">
								<img src="images/message_img4.jpg" class="img" alt="">
								<div class="info">
									<h5><span class="name">凉凉</span><span>27</span><span><img src="images/address3.png" alt="">上海市普陀区</span></h5>
									<p>奢华的生活爱好者</p>
								</div>
							</div>
							<div class="h_right">
								<div class="cancle"><a href="">取消屏蔽</a></div>
								<div class="set_box">
									<span class="set_img"></span>
									<div class="setting_layer">
										<div class="screen_a"><a href="javascript:void(0);">屏蔽她</a></div>
										<div class="del_ta"><a href="javascript:void(0);">删除她</a></div>
										<div class="del_img"><a href="javascript:void(0);">删除此消息</a></div>
									</div>
								</div>
								<div class="h_down">
									<img src="images/down3.png" alt="">
								</div>
								<div class="h_new">
									<span>2019-03-07 18:33</span>
									<div>
										<span class="new">新</span>
										<!-- <img src="images/delete.png" class="del_img" alt=""> -->
									</div>
								</div>
							</div>
						</div>
						<div class="open_mess_box">
							<div class="mess_scroll">
								<div class="mess_item">
									<p class="time">2019-03-15  14:50</p>
									<div class="send_mess">
										<img src="images/message_img1.jpg" class="head" alt="">
										<p class="content">我想约你在深圳世界之窗门口，这周日见面，你看怎么样？</p>
									</div>
								</div>
								<div class="mess_item me">
									<p class="time">2019-03-15  15:20</p>
									<h6>我的投诉</h6>
									<div class="send_mess">
										<img src="images/message_img2.jpg" class="head" alt="">
										<p class="content">我想约你在深圳世界之窗门口，这周日见面，你看怎么样？</p>
									</div>
								</div>
							</div>
							<div class="reply_mess_box">
								<form action="">
									<textarea name="message" id="" placeholder="请在此填入您的消息" cols="30" rows="10"></textarea>
									<input type="submit" class="submit_btn" value="发送">
								</form>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
	<div class="modal_layer"></div>
	<div class="modal_box screen_modal fix">
		<img src="images/close.png" class="close_img" alt="">
		<div class="box">
			<p>屏蔽该会员后，她将被禁止给您发私信，您确定要屏蔽她吗？</p>
			<ul>
				<li><a href="javascript:void(0);" class="modal_screen_btn">确认</a></li>
				<li><a href="javascript:void(0);" class="modal_cancle_btn last">取消</a></li>
			</ul>
		</div>
	</div>
	<div class="modal_box del_person_modal fix">
		<img src="images/close.png" class="close_img" alt="">
		<div class="box">
			<p>您确定要删除她吗？</p>
			<ul>
				<li><a href="javascript:void(0);" class="modal_delete_btn">确认</a></li>
				<li><a href="javascript:void(0);" class="modal_cancle_btn last">取消</a></li>
			</ul>
		</div>
	</div>
	<div class="modal_box del_modal fix">
		<img src="images/close.png" class="close_img" alt="">
		<div class="box">
			<p>您确定要删除该消息吗？</p>
			<ul>
				<li><a href="javascript:void(0);" class="modal_del_mess_btn">确认</a></li>
				<li><a href="javascript:void(0);" class="modal_cancle_btn last">取消</a></li>
			</ul>
		</div>
	</div>
	<div class="modal_box report_modal">
		<img src="images/close.png" class="close_img" alt="">
		<div class="box">
			<p>您确定要举报她吗？</p>
			<h6 style="color: #939393;">请选择举报该会员的理由：</h6>
			<div class="label_box">
				<label for="reason1"><input type="radio" name="reason[]" id="reason1">怀疑是妓女</label>
				<label for="reason2"><input type="radio" name="reason[]" id="reason2">未成年</label>
				<label for="reason3"><input type="radio" name="reason[]" id="reason3">犯罪嫌疑</label>
				<label for="reason4"><input type="radio" name="reason[]" id="reason4">虚假会员</label>
				<label for="reason5"><input type="radio" name="reason[]" id="reason5">不合适的简介内容</label>
				<label for="reason6"><input type="radio" name="reason[]" id="reason6">不合适的行为举止</label>
			</div>
			<ul>
				<li><a href="javascript:void(0);" class="modal_report_btn">确认</a></li>
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
		$(".message_box").on("click",".screen_a",function(){
			index = $(this).parents(".message_item").index();
			modal.showModal(".screen_modal");
		})
		$(".message_box").on("click",".del_ta",function(){
			index = $(this).parents(".message_item").index();
			modal.showModal(".del_person_modal");
		})
		$(".message_box").on("click",".del_img",function(){
			index = $(this).parents(".message_item").index();
			modal.showModal(".del_modal");
		})
		$(".message_box").on("click",".report_a",function(){
			index = $(this).parents(".message_item").index();
			modal.showModal(".report_modal");
		})
		// 屏蔽确定
		$(".modal_screen_btn").click(function(){
			// alert("ok"+index);
			modal.cancleModal(".screen_modal")
		})
		// 删除她确定
		$(".modal_delete_btn").click(function(){
			// alert("ok"+index);
			modal.cancleModal(".del_person_modal")
		})
		// 删除消息确定
		$(".modal_del_mess_btn").click(function(){
			// alert("ok"+index);
			modal.cancleModal(".del_modal")
		})
		// 举报确定
		$(".modal_report_btn").click(function(){
			// alert("ok"+index);
			modal.cancleModal(".report_modal")
		})
		
		$(".message_item").on("click",".h_down",function(e){
			if($(this).hasClass("active")){
				// 隐藏
				$(this).removeClass("active");
				$(this).siblings(".h_new").show();
				$(this).siblings(".set_box").hide();				
				$(this).parent().parent().siblings().hide();
			}else{
				// 展开
				$(this).addClass("active");
				$(this).siblings(".h_new").hide();
				$(this).siblings(".set_box").show();
				$(this).parent().parent().siblings().show();
			}
		})
		
		// 举报弹框
		$(".label_box").on("click","label",function(e){
			$(this).addClass("active").siblings().removeClass("active");
		})
	})
</script>
</html>