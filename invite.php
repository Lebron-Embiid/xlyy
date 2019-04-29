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
	<link rel="stylesheet" href="css/pick-pcc.css"/>
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/invite.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/laydate.js"></script>
	<script src="js/pick-pcc.js"></script>
	<script src="js/common.js"></script>
</head>
<body>
	<?php include 'header_nav.php'; ?>
	<div class="invite_top_info">
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
								<input type="text" class="input" name="start_date" value="" id="date1">
								<div class="date_icon" onClick="laydate({elem: '#date1'});"><img src="images/date.png" alt=""></div>
							</div>
						</div>
						<div class="invite_item">
							<div class="left">
								<img src="images/invate_mess1.png" alt="">
								<span>截止日期</span>
							</div>
							<div class="right">
								<input type="text" class="input" name="end_date" value="" id="date2">
								<div class="date_icon" onClick="laydate({elem: '#date2'});"><img src="images/date.png" alt=""></div>
							</div>
						</div>
						<div class="invite_item">
							<div class="left">
								<img src="images/invate_mess1.png" alt="">
								<span>天数</span>
							</div>
							<div class="right single">
								<input type="text" class="input" name="day_num" value="">
							</div>
						</div>
						<div class="invite_item">
							<div class="left">
								<img src="images/invate_mess2.png" alt="">
								<span>具体时间</span>
							</div>
							<div class="right number">
								<input type="number" class="input" name="hour" placeholder="时" value="" max="23" min="0">
								<input type="number" class="input" name="minute" placeholder="分" value="" max="59" min="0">
							</div>
							<div class="warning"><img src="images/warning2.png" alt="">为了您的安全，请选择白天人多的公共场合见面。</div>
						</div>
						<div class="invite_item">
							<div class="left">
								<img src="images/invate_mess3.png" alt="">
								<span>具体时间</span>
							</div>
							<div class="right number">
								<div class="pick-area pick-area3" name=""></div>
								<input type="text" class="input" name="detail" placeholder="请填写详细的预约地点">
							</div>
							<div class="warning default"><img src="images/warning1.png" alt=""></div>
						</div>
						<div class="invite_item">
							<div class="left">
								<img src="images/invate_mess4.png" alt="">
								<span>服务类型</span>
							</div>
							<div class="right single">
								<div class="box">
									<select name="" id="">
										<option value="">出席商务场合</option>
									</select>
								</div>
							</div>
						</div>
						<div class="invite_item">
							<div class="left">
								<img src="images/invate_mess5.png" alt="">
								<span>报价</span>
							</div>
							<div class="right">
								<div class="price_box">
									<input type="button" class="input_btn minus" value="-">
									<input type="text" value="2000" name="price" class="price_input"><span>元/天</span>
									<input type="button" class="input_btn plus" value="+">
								</div>
							</div>
						</div>
						<div class="invite_item">
							<div class="left">
								<img src="images/invate_mess6.png" alt="">
								<span>总金额</span>
							</div>
							<div class="right">
								<input type="text" class="noborder" name="all_price" placeholder="请填写总金额" value="10000">元
							</div>
						</div>
						<div class="invite_item">
							<div class="left">
								<img src="images/invate_mess7.png" alt="">
								<span>联系人</span>
							</div>
							<div class="right">
								<input type="text" class="noborder" name="contact" placeholder="请填写联系人" value="林华青老板">
							</div>
						</div>
						<div class="invite_item">
							<div class="left">
								<img src="images/invate_mess8.png" alt="">
								<span>联系号码</span>
							</div>
							<div class="right">
								<input type="text" class="noborder" name="phone" placeholder="请填写手机号，方便联系" value="">
							</div>
						</div>
						<div class="invite_remark">
							<span>备注</span>
							<textarea name="" id="" placeholder="请在此填写其他关于本次预约服务的备注。" cols="30" rows="10"></textarea>
						</div>
						<input type="submit" value="发送" class="submit_btn">
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="modal_layer"></div>
	<div class="modal_box invite_modal fix">
		<p>您的邀约已经发送给对方，请等待对方回复！</p>
		<a href="javascript:void(0);" class="modal_cancle_btn">确认</a>
	</div>
	<?php include 'footer.php'; ?>
</body>
<script>
	$(function(){
		var modal = new LModal();
		$("form").submit(function(){
			modal.showModal(".invite_modal");
			return false;
		})
		// $(".modal_confirm_btn").click(function(){
		// 	alert("ok");
		// 	modal.cancleModal(".invite_modal")
		// })
		
		var price = $(".price_input").val()
		$(".minus").click(function(){
			price-=100;
			if(price<=0){
				price=0;
			}
			$(".price_input").val(price);
		})
		$(".plus").click(function(){
			price+=100;
			$(".price_input").val(price);
		})
		
		$(".pick-area3").pickArea({
			"format":"北京市/市辖区", //格式
			"width":"300",
			"borderColor":"#E3E3E3",//文本边框的色值
			"arrowColor":"#E3E3E3",//箭头颜色
			"listBdColor":"#E3E3E3",//下拉框父元素ul的border色值
			"color":"#E3E3E3",//字体颜色
			"fontSize":"16px",//字体大小
			"hoverColor":"#E3E3E3",
			"paddingLeft":"10px",
			"arrowRight":"10px",
			"getVal":function(){
				//console.log($(".pick-area-hidden").val())
				//console.log($(".pick-area-dom").val())
				var thisdom = $("."+$(".pick-area-dom").val());
				// thisdom.next().val($(".pick-area-hidden").val());
			}
		});
	})
</script>
</html>