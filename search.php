<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>搜索</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/pick-pcc.css"/>
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/search.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/pick-pcc.js"></script>
</head>
<body>
	<?php include 'header_nav.php'; ?>
	<div class="search_box">
		<div class="container">
			<div class="search_top">
				<div class="search_left">
					<div class="search_item">
						<span>所在地</span>
						<!-- <div class="box"> -->
							<div class="pick-area pick-area2" name=""></div>
							<!-- <select name="" id="">
								<option value="">广州市</option>
							</select> -->
						<!-- </div> -->
					</div>
					<div class="search_item">
						<span>年龄</span>
						<div class="box">
							<select name="" id="">
								<option value="">18</option>
							</select>
						</div>
					</div>
					<div class="search_item">
						<span>身高</span>
						<div class="box">
							<select name="" id="">
								<option value="">155cm以下</option>
								<option value="">160-165cm</option>
								<option value="">165-170cm</option>
								<option value="">170cm以上</option>
							</select>
						</div>
					</div>
					<div class="search_item">
						<span>发型</span>
						<div class="box">
							<select name="" id="">
								<option value="">直发</option>
								<option value="">卷发</option>
							</select>
						</div>
					</div>
					<div class="search_item">
						<span>身材</span>
						<div class="box">
							<select name="" id="">
								<option value=""></option>
							</select>
						</div>
					</div>
					<div class="search_item">
						<span>发色</span>
						<div class="box">
							<select name="" id="">
								<option value="">黑色</option>
								<option value="">棕色</option>
							</select>
						</div>
					</div>
					<div class="search_item">
						<span>体重</span>
						<div class="box">
							<select name="" id="">
								<option value=""></option>
							</select>
						</div>
					</div>
					<div class="search_item">
						<span>是否抽烟</span>
						<div class="box">
							<select name="" id="">
								<option value=""></option>
							</select>
						</div>
					</div>
					<div class="search_item">
						<span>职业</span>
						<div class="box">
							<select name="" id="">
								<option value=""></option>
							</select>
						</div>
					</div>
					<div class="search_item">
						<span>是否喝酒</span>
						<div class="box">
							<select name="" id="">
								<option value=""></option>
							</select>
						</div>
					</div>
					<div class="search_item">
						<span>净值</span>
						<div class="box">
							<select name="" id="">
								<option value=""></option>
							</select>
						</div>
					</div>
					<div class="search_item">
						<span>年收入</span>
						<div class="box">
							<select name="" id="">
								<option value=""></option>
							</select>
						</div>
					</div>
				</div>
				<div class="search_right">
					<div class="service_type">
						<div>
							<h5>服务类型</h5>
							<ul>
								<li><input type="checkbox" name="" id="">叫醒服务</li>
								<li><input type="checkbox" name="" id="">假扮女友</li>
								<li><input type="checkbox" name="" id="">旅游陪伴</li>
								<li><input type="checkbox" name="" id="">出席商务场合</li>
							</ul>
						</div>
						<a href="">搜索</a>
					</div>
				</div>
				<div class="filter_box">
					<span class="span">筛选条件</span>
					<div class="filter_ul">
						<div class="filter_item">
							<span>所在地：广州市</span><img src="images/close.png" alt="">
						</div>
						<div class="filter_item">
							<span>身高：160-165CM</span><img src="images/close.png" alt="">
						</div>
						<div class="filter_item">
							<span>发色：黑色</span><img src="images/close.png" alt="">
						</div>
						<div class="filter_item">
							<span>年龄：25-30</span><img src="images/close.png" alt="">
						</div>
						<div class="filter_item">
							<span>服务类型：假扮女友</span><img src="images/close.png" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="search_bottom">
				<div class="result_item">
					<a href="vip_detail.php">
						<div class="img"><img src="images/girl_img1.jpg" alt=""></div>
						<div class="info">
							<h4>林晓霞<img src="images/collect.png" alt=""></h4>
							<h5>26、杭州市江干区</h5>
							<h6>期待奢华的生活方式</h6>
							<p>身高：169CM</p>
							<p>身材：丰满<span>一个月前加入</span></p>
						</div>
					</a>
				</div>
				<div class="result_item">
					<a href="vip_detail.php">
						<div class="img"><img src="images/girl_img2.jpg" alt=""></div>
						<div class="info">
							<h4>林晓霞<img src="images/collect.png" alt=""></h4>
							<h5>26、杭州市江干区</h5>
							<h6>期待奢华的生活方式</h6>
							<p>身高：169CM</p>
							<p>身材：丰满<span>一个月前加入</span></p>
						</div>
					</a>
				</div>
				<div class="result_item">
					<a href="vip_detail.php">
						<div class="img"><img src="images/girl_img3.jpg" alt=""></div>
						<div class="info">
							<h4>林晓霞<img src="images/collect.png" alt=""></h4>
							<h5>26、杭州市江干区</h5>
							<h6>期待奢华的生活方式</h6>
							<p>身高：169CM</p>
							<p>身材：丰满<span>一个月前加入</span></p>
						</div>
					</a>
				</div>
				<div class="result_item">
					<a href="vip_detail.php">
						<div class="img"><img src="images/girl_img4.jpg" alt=""></div>
						<div class="info">
							<h4>林晓霞<img src="images/collect.png" alt=""></h4>
							<h5>26、杭州市江干区</h5>
							<h6>期待奢华的生活方式</h6>
							<p>身高：169CM</p>
							<p>身材：丰满<span>一个月前加入</span></p>
						</div>
					</a>
				</div>
				<div class="result_item">
					<a href="vip_detail.php">
						<div class="img"><img src="images/girl_img5.jpg" alt=""></div>
						<div class="info">
							<h4>林晓霞<img src="images/collect.png" alt=""></h4>
							<h5>26、杭州市江干区</h5>
							<h6>期待奢华的生活方式</h6>
							<p>身高：169CM</p>
							<p>身材：丰满<span>一个月前加入</span></p>
						</div>
					</a>
				</div>
				<div class="result_item">
					<a href="vip_detail.php">
						<div class="img"><img src="images/girl_img6.jpg" alt=""></div>
						<div class="info">
							<h4>林晓霞<img src="images/collect.png" alt=""></h4>
							<h5>26、杭州市江干区</h5>
							<h6>期待奢华的生活方式</h6>
							<p>身高：169CM</p>
							<p>身材：丰满<span>一个月前加入</span></p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
<script>
	$(".pick-area2").pickArea({
	    "format":"北京市/市辖区", //格式
	    "width":"300",
	    "borderColor":"#7b68ee",//文本边框的色值
	    "arrowColor":"#7b68ee",//箭头颜色
	    "listBdColor":"#7b68ee",//下拉框父元素ul的border色值
	    "color":"#7b68ee",//字体颜色
	    "fontSize":"16px",//字体大小
	    "hoverColor":"#7b68ee",
	    "paddingLeft":"10px",
	    "arrowRight":"10px",
	    "getVal":function(){
	        //console.log($(".pick-area-hidden").val())
	        //console.log($(".pick-area-dom").val())
	        var thisdom = $("."+$(".pick-area-dom").val());
	        thisdom.next().val($(".pick-area-hidden").val());
	    }
	});
</script>
</html>