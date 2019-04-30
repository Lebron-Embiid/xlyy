<div class="header_nav">
	<div class="container">
		<a href="index.php" class="logo"><img src="images/logo.png" alt=""></a>
		<ul class="nav_ul">
			<li><a href="vip_index.php"><span class="icon"></span><p>首页</p></a></li>
			<li><a href="search.php"><span class="icon"></span>搜索</a></li>
			<li><a href="message.php"><span class="icon"><span class="badge">7</span></span>消息</a></li>
			<li><a href="attention.php"><span class="icon"></span>关注</a></li>
			<li><a href="basic_info.php"><span class="icon"></span>我的</a></li>
		</ul>
		<div class="vip_box">
			<div class="info">
				<p>洪先生</p>
				<p><span class="active">普通用户</span><span>普通会员</span></p>
				<a href="buy_vip.php" class="active">购买会员</a>
				<a href="buy_vip.php">升级会员</a>
			</div>
			<div class="my_vip">
				<a href="basic_photo.php" class="avatar_nav_img">
					<img src="images/avatar_default1.jpg" alt="">
				</a>
				<ul>
					<li><a href="my_vip.php">我的会员</a></li>
					<li><a href="wallet.php">我的钱包</a></li>
					<li><a href="setting.php">设置</a></li>
					<li class="login_out_btn"><a href="javascript:void(0);">退出登录</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="mt92"></div>

<div class="modal_layer"></div>
<div class="modal_box login_modal fix">
	<img src="images/close.png" class="close_img" alt="">
	<div class="box">
		<p>退出登录</p>
		<h6 style="color: #aaa;font-size: .14rem;">您确定要退出登录吗？</h6>
		<ul>
			<li><a href="javascript:void(0);" class="modal_confirm_btn modal_login_out">确认</a></li>
			<li><a href="javascript:void(0);" class="modal_cancle_btn last">取消</a></li>
		</ul>
	</div>
</div>


<script src="js/modal.js"></script>
<script>
	$(function(){
		var modal = new LModal();
		$(".login_out_btn").click(function(){
			modal.showModal(".login_modal");
		})
		$(".modal_login_out").click(function(){
			modal.cancleModal(".login_modal");
			window.location = "login.php";
		})
	
		$(".my_vip").mouseover(function(){
			$(".my_vip ul").stop().slideDown(300)
		})
		$(".my_vip").mouseleave(function(){
			$(".my_vip ul").stop().slideUp(300)
		})
	})
</script>