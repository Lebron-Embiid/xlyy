<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的描述</title>
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
			width: 30%;
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
				<h4>描述</h4>
				<!-- 男会员 -->
				<div class="desc_boy">
					<div class="description_box">
						<div class="desc_item">
							<h5>自我介绍</h5>
							<textarea name="self" id="" cols="30" rows="10"></textarea>
							<p>25-300字符</p>
						</div>
						<div class="desc_item">
							<h5>寻找</h5>
							<textarea name="find" id="" cols="30" rows="10"></textarea>
							<p>25-300字符</p>
						</div>
					</div>
					<a href="" class="save_btn">保存</a>
				</div>
				<!-- 女会员 -->
				<div class="desc_girl">
					<div class="description_box">
						<div class="desc_item">
							<h5>自我介绍</h5>
							<textarea name="self" id="" cols="30" rows="10"></textarea>
							<p>25-300字符</p>
						</div>
						<div class="desc_item">
							<h5>性格标签（请选择最符合您性格的三项)</h5>
							<ul class="label_sel_ul">
								<li><a href="javascript:void(0);">温柔和婉</a></li>
								<li><a href="javascript:void(0);">活泼可爱</a></li>
								<li><a href="javascript:void(0);">善解人意</a></li>
								<li><a href="javascript:void(0);">热情奔放</a></li>
								<li><a href="javascript:void(0);">小鸟依人</a></li>
								<li><a href="javascript:void(0);">落落大方</a></li>
								<li><a href="javascript:void(0);">开朗大方</a></li>
								<li><a href="javascript:void(0);">性感迷人</a></li>
								<li><a href="javascript:void(0);">清纯可人</a></li>
								<li><a href="javascript:void(0);">仪态端庄</a></li>
								<li><a href="javascript:void(0);">高冷御姐</a></li>
								<li><a href="javascript:void(0);">优雅动人</a></li>
								<li><a href="javascript:void(0);">温柔和婉</a></li>
								<li><a href="javascript:void(0);">亭亭玉立</a></li>
							</ul>
						</div>
					</div>
					<a href="" class="save_btn">保存</a>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
<script>
	$(function(){
		var sel_arr = [];
		$(".label_sel_ul").on("click","li",function(){
			var idx = $(this).index();
			if($(this).hasClass("active")){
				$(this).removeClass("active");
				sel_arr.pop();
			}else{
				if(sel_arr.length < 3){
					sel_arr.push(idx);
					$(this).addClass("active");
				}
			}
		})
	})
</script>
</html>