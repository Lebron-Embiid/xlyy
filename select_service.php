<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>选择服务类型</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/pick-pcc.css"/>
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/basic.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<style>
		.save_btn{
			margin-top: .5rem;
		}
	</style>
</head>
<body>
	<?php include 'header_nav.php'; ?>
	<div class="basic_info_box">
		<div class="container">
			<div class="basic_left">
				<?php include 'basic_left.php'; ?>
			</div>
			<div class="basic_right">
				<h4>选择服务类型<span>其他会员就可以看到并且预约您选择提供的服务</span></h4>
				<!-- 初级会员 服务 -->
				<div class="select_service_box">
					<div class="s_table_th">
						<span>可提供服务</span>
						<span>选择</span>
						<span>可前往异地</span>
						<span>报价</span>
						<span>收款方式</span>
					</div>
					<div class="s_table_tr">
						<div class="s_table_td">叫醒服务</div>
						<div class="s_table_td"><img src="images/selected.png" alt=""></div>
						<div class="s_table_td"></div>
						<div class="s_table_td">
							<div class="s_math_box">
								<span class="s_minus">-</span>
								<div><input type="text" name="price" value="10" class="s_price" value="10">元/次</div>
								<span class="s_plus">+</span>
							</div>
						</div>
						<div class="s_table_td">线上支付</div>						
					</div>
					<div class="s_table_tr">
						<div class="s_table_td">假扮女友</div>
						<div class="s_table_td"><img src="images/selected.png" alt=""></div>
						<div class="s_table_td"><img src="images/selected.png" alt=""></div>
						<div class="s_table_td">
							<div class="s_math_box">
								<span class="s_minus">-</span>
								<div><input type="text" name="price" value="1000" class="s_price" value="10">元/次</div>
								<span class="s_plus">+</span>
							</div>
						</div>
						<div class="s_table_td">
							<label for=""><input type="radio" name="pay[]" checked>当面支付</label>
							<label for=""><input type="radio" name="pay[]">线上支付</label>
						</div>						
					</div>
				</div>
				<!-- VIP 服务 -->
				<div class="select_service_box">
					<div class="s_table_th">
						<span>可提供服务</span>
						<span>选择</span>
						<span>可前往异地</span>
						<span>报价</span>
						<span>收款方式</span>
					</div>
					<div class="s_table_tr">
						<div class="s_table_td">叫醒服务</div>
						<div class="s_table_td"><img src="images/selected.png" alt=""></div>
						<div class="s_table_td"><img src="images/selected.png" alt=""></div>
						<div class="s_table_td">
							<div class="s_math_box">
								<span class="s_minus">-</span>
								<div><input type="text" name="price" value="10" class="s_price" value="10">元/次</div>
								<span class="s_plus">+</span>
							</div>
						</div>
						<div class="s_table_td">线上支付</div>						
					</div>
					<div class="s_table_tr">
						<div class="s_table_td">假扮女友</div>
						<div class="s_table_td"><img src="images/selected.png" alt=""></div>
						<div class="s_table_td"><img src="images/selected.png" alt=""></div>
						<div class="s_table_td">
							<div class="s_math_box">
								<span class="s_minus">-</span>
								<div><input type="text" name="price" value="1000" class="s_price" value="10">元/次</div>
								<span class="s_plus">+</span>
							</div>
						</div>
						<div class="s_table_td">
							<label for=""><input type="radio" name="pay1[]" checked>当面支付</label>
							<label for=""><input type="radio" name="pay1[]">线上支付</label>
						</div>						
					</div>
					<div class="s_table_tr">
						<div class="s_table_td">旅游陪伴</div>
						<div class="s_table_td"><img src="images/selected.png" alt=""></div>
						<div class="s_table_td"><img src="images/selected.png" alt=""></div>
						<div class="s_table_td">
							<div class="s_math_box">
								<span class="s_minus">-</span>
								<div><input type="text" name="price" value="1000" class="s_price" value="10">元/次</div>
								<span class="s_plus">+</span>
							</div>
						</div>
						<div class="s_table_td">
							<label for=""><input type="radio" name="pay2[]" checked>当面支付</label>
							<label for=""><input type="radio" name="pay2[]">线上支付</label>
						</div>						
					</div>
					<div class="s_table_tr">
						<div class="s_table_td">出席商务场合</div>
						<div class="s_table_td"><img src="images/selected.png" alt=""></div>
						<div class="s_table_td"><img src="images/selected.png" alt=""></div>
						<div class="s_table_td">
							<div class="s_math_box">
								<span class="s_minus">-</span>
								<div><input type="text" name="price" value="1000" class="s_price" value="10">元/次</div>
								<span class="s_plus">+</span>
							</div>
						</div>
						<div class="s_table_td">
							<label for=""><input type="radio" name="pay3[]" checked>当面支付</label>
							<label for=""><input type="radio" name="pay3[]">线上支付</label>
						</div>						
					</div>
				</div>
				<div class="level_box">
					<p>如果您希望提供更多服务，请先升级会员</p><a href="">升级</a>
				</div>
				<div class="more_service_box">
					<ul>
						<li><span>旅游陪伴</span><span>高级会员可选</span></li>
						<li><span>出席商务场合</span><span>高级会员可选</span></li>
						<li><span>更多服务</span></li>
					</ul>
				</div>
				<div class="save_box">
					<a href="" class="save_btn">保存</a>
					<a href="" class="save_btn cancle_btn">取消</a>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
<script>
	$(function(){
		$(".select_service_box").on("click",".s_minus",function(){
			var m_price = parseInt($(this).siblings().find(".s_price").val());
			m_price-=10;
			if(m_price <= 0){
				m_price = 0;
			}
			$(this).siblings().find(".s_price").val(m_price);
		})
		
		$(".select_service_box").on("input",".s_price",function(){
			price = parseInt($(this).val());
		})
		
		$(".select_service_box").on("click",".s_plus",function(){
			var m_price = parseInt($(this).siblings().find(".s_price").val());
			m_price+=10;
			// if(m_price >= 10000){
			// 	m_price = 10000;
			// }
			$(this).siblings().find(".s_price").val(m_price);
		})
	})
</script>
</html>