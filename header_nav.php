<div class="header_nav">
	<div class="container">
		<a href="index.php" class="logo"><img src="images/logo.png" alt=""></a>
		<ul class="nav_ul">
			<li><a href="vip_index.php"><span class="icon"></span><p>首页</p></a></li>
			<li><a href="search.php"><span class="icon"></span>搜索</a></li>
			<li><a href=""><span class="icon"><span class="badge">7</span></span>消息</a></li>
			<li><a href=""><span class="icon"></span>关注</a></li>
			<li><a href=""><span class="icon"></span>我的</a></li>
		</ul>
		<div class="vip_box">
			<div class="info">
				<p>洪先生</p>
				<p>普通会员</p>
				<a href="">升级会员</a>
			</div>
			<div class="my_vip">
				<a href="person.php" class="avatar_nav_img">
					<img src="images/avatar_default1.jpg" alt="">
				</a>
				<ul>
					<li><a href="my_vip.php">我的会员</a></li>
					<li><a href="wallet.php">我的钱包</a></li>
					<li><a href="setting.php">设置</a></li>
					<li><a href="login.php">退出登录</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="mt92"></div>


<script>
	$(function(){
		$(".my_vip").mouseover(function(){
			$(".my_vip ul").stop().slideDown(300)
		})
		$(".my_vip").mouseleave(function(){
			$(".my_vip ul").stop().slideUp(300)
		})
	})
</script>