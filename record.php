<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>账单记录</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/vip.css">
	<link rel="stylesheet" href="css/wallet.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<?php include 'header_nav.php'; ?>
	<div class="wallet_box">
		<div class="container">
			<div class="left">
				<?php include 'wallet_left.php'; ?>
			</div>
			<div class="right">
				<h4><a href="wallet.php">我的钱包</a>&gt;&gt;<span>账单记录</span></h4>
				<div class="record_box">
					<div class="title"><span>账单</span><span>金额</span><span>时间日期</span></div>
					<ul class="record_ul list">
						<li><span>我发送红包给“小青”50元</span><span>-50元</span><span>2018-10-19 15：25</span></li>
						<li><span>我发送红包给“小青”50元</span><span>-50元</span><span>2018-10-19 15：25</span></li>
						<li><span>我发送红包给“小青”50元</span><span>-50元</span><span>2018-10-19 15：25</span></li>
						<li><span>我发送红包给“小青”50元</span><span>-50元</span><span>2018-10-19 15：25</span></li>
						<li><span>我发送红包给“小青”50元</span><span>-50元</span><span>2018-10-19 15：25</span></li>
						<li><span>我发送红包给“小青”50元</span><span>-50元</span><span>2018-10-19 15：25</span></li>
						<li><span>我发送红包给“小青”50元</span><span>-50元</span><span>2018-10-19 15：25</span></li>
						<li><span>我发送红包给“小青”50元</span><span>-50元</span><span>2018-10-19 15：25</span></li>
						<li><span>我发送红包给“小青”50元</span><span>-50元</span><span>2018-10-19 15：25</span></li>
						<li><span>我发送红包给“小青”50元</span><span>-50元</span><span>2018-10-19 15：25</span></li>
						<li><span>我发送红包给“小青”50元</span><span>-50元</span><span>2018-10-19 15：25</span></li>
						<li><span>我发送红包给“小青”50元</span><span>-50元</span><span>2018-10-19 15：25</span></li>
						<li><span>我发送红包给“小青”50元</span><span>-50元</span><span>2018-10-19 15：25</span></li>
					</ul>
				</div>
				<a href="javascript:void(0);" class="load_more">加载更多<img src="images/down2.png" alt=""></a>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
<script>
	$(function(){
		var _content = []; //临时存储li循环内容
		var jq22 = {
			_default:10, //默认显示图片个数
			_loading:6,  //每次点击按钮后加载的个数
			init:function(){
				var lis = $(".record_ul li");
				$(".record_ul.list").html("");
				for(var n=0;n<jq22._default;n++){
					lis.eq(n).appendTo(".record_ul.list");
				}
				for(var i=jq22._default;i<lis.length;i++){
					_content.push(lis.eq(i));
				}
				$(".record_ul.hidden").html("");
			},
			loadMore:function(){
				var mLis = $(".record_ul.list li").length;
				for(var i =0;i<jq22._loading;i++){
					var target = _content.shift();
					if(!target){
						$('.load_more').html("全部加载完毕...");
						break;
					}
					$(".record_ul.list").append(target);
				}
			}
		}
		jq22.init();

		$(".load_more").click(function(){
			jq22.loadMore();
		})
	})
</script>
</html>