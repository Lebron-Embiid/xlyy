<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>基本信息</title>
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
	<script type="text/javascript" src="js/pick-pcc.js"></script>
</head>
<body>
	<?php include 'header_nav.php'; ?>
	<div class="basic_info_box">
		<div class="container">
			<div class="basic_left">
				<?php include 'basic_left.php'; ?>
			</div>
			<div class="basic_right">
				<h4>基本信息<span>标记*号的为必填项</span></h4>
				<!-- 基本信息-女 -->
				<div class="basic_info_content basic_info_girl">
					<div class="info_item">
						<div class="left_box">
							<p>会员名<span>*</span></p>
						</div>
						<div class="right_box">
							<input type="text" name="username" placeholder="">
						</div>
					</div>
					<div class="info_item nomargin">
						<div class="left_box">
							<p>一句话介绍<span>*</span></p>
						</div>
						<div class="right_box">
							<input type="text" name="profile" placeholder="">
						</div>
					</div>
					<p class="info_till">字数范围是5-12个字符</p>
					<div class="info_item down">
						<div class="left_box">
							<p>年龄<span>*</span></p>
						</div>
						<div class="right_box">
							<select name="" id="">
								<option value="">20</option>
							</select>
						</div>
					</div>
					<div class="info_item">
						<div class="left_box">
							<p>所在地<span>*</span></p>
						</div>
						<div class="right_box">
							<div class="pick-area pick-area2" name=""></div>
						</div>
					</div>
					<div class="info_item down">
						<div class="left_box">
							<p>职业<span>*</span></p>
						</div>
						<div class="right_box">
							<select name="" id="">
								<option value="">学生</option>
							</select>
						</div>
					</div>
					<div class="info_item down">
						<div class="left_box">
							<p>身高<span>*</span></p>
						</div>
						<div class="right_box">
							<select name="" id="">
								<option value="">175CM</option>
							</select>
						</div>
					</div>
					<div class="info_item down">
						<div class="left_box">
							<p>身材<span>*</span></p>
						</div>
						<div class="right_box">
							<select name="" id="">
								<option value="">普通</option>
							</select>
						</div>
					</div>
					<div class="info_item">
						<div class="left_box">
							<p>身材标签<span>*</span></p>
							<h6>最多选择三个</h6>
						</div>
						<div class="right_box label_box">
							<ul class="label_ul">
								<li><a href="javascript:void(0);">婀娜多姿</a></li>
								<li><a href="javascript:void(0);">小巧玲珑</a></li>
								<li><a href="javascript:void(0);">肥臀丰乳</a></li>
								<li><a href="javascript:void(0);">肤白如雪</a></li>
								<li><a href="javascript:void(0);">性感热辣</a></li>
								<li><a href="javascript:void(0);">太平公主</a></li>
								<li><a href="javascript:void(0);">丰姿卓约</a></li>
								<li><a href="javascript:void(0);">魔鬼身材</a></li>
								<li><a href="javascript:void(0);">匀称标志</a></li>
								<li><a href="javascript:void(0);">玲珑有致</a></li>
								<li><a href="javascript:void(0);">喷火尤物</a></li>
								<li><a href="javascript:void(0);">娇艳欲滴</a></li>
								<li><a href="javascript:void(0);">修长高挑</a></li>
								<li><a href="javascript:void(0);">亭亭玉立</a></li>
								<li><a href="javascript:void(0);">小家碧玉</a></li>
							</ul>
						</div>
					</div>
					<div class="info_item down">
						<div class="left_box">
							<p>发型<span>*</span></p>
						</div>
						<div class="right_box">
							<select name="" id="">
								<option value="">直发</option>
							</select>
						</div>
					</div>
					<div class="info_item down">
						<div class="left_box">
							<p>发色<span>*</span></p>
						</div>
						<div class="right_box">
							<select name="" id="">
								<option value="">金色</option>
							</select>
						</div>
					</div>
					<div class="info_item down">
						<div class="left_box">
							<p>体重<span>*</span></p>
						</div>
						<div class="right_box">
							<select name="" id="">
								<option value="">60公斤</option>
							</select>
						</div>
					</div>
					<div class="info_item down">
						<div class="left_box">
							<p>学历<span>*</span></p>
						</div>
						<div class="right_box">
							<select name="" id="">
								<option value="">大专</option>
							</select>
						</div>
					</div>
					<div class="info_item down">
						<div class="left_box">
							<p>是否吸烟<span>*</span></p>
						</div>
						<div class="right_box">
							<select name="" id="">
								<option value="">吸烟</option>
							</select>
						</div>
					</div>
					<div class="info_item down">
						<div class="left_box">
							<p>是否饮酒<span>*</span></p>
						</div>
						<div class="right_box">
							<select name="" id="">
								<option value="">饮酒</option>
							</select>
						</div>
					</div>
					<a href="" class="save_btn">保存</a>
				</div>
				<!-- 基本信息-男 -->
				<div class="basic_info_content basic_info_boy">
					<div class="info_item">
						<div class="left_box">
							<p>会员名<span>*</span></p>
						</div>
						<div class="right_box">
							<input type="text" name="username" placeholder="">
						</div>
					</div>
					<div class="info_item nomargin">
						<div class="left_box">
							<p>一句话介绍<span>*</span></p>
						</div>
						<div class="right_box">
							<input type="text" name="profile" placeholder="">
						</div>
					</div>
					<p class="info_till">字数范围是5-12个字符</p>
					<div class="info_item down">
						<div class="left_box">
							<p>年龄<span>*</span></p>
						</div>
						<div class="right_box">
							<select name="" id="">
								<option value="">20</option>
							</select>
						</div>
					</div>
					<div class="info_item">
						<div class="left_box">
							<p>所在地<span>*</span></p>
						</div>
						<div class="right_box">
							<div class="pick-area pick-area2" name=""></div>
						</div>
					</div>
					<div class="info_item down">
						<div class="left_box">
							<p>职业<span>*</span></p>
						</div>
						<div class="right_box">
							<select name="" id="">
								<option value="">学生</option>
							</select>
						</div>
					</div>
					<div class="info_item down">
						<div class="left_box">
							<p>身高<span>*</span></p>
						</div>
						<div class="right_box">
							<select name="" id="">
								<option value="">175CM</option>
							</select>
						</div>
					</div>
					<div class="info_item down">
						<div class="left_box">
							<p>学历<span>*</span></p>
						</div>
						<div class="right_box">
							<select name="" id="">
								<option value="">大专</option>
							</select>
						</div>
					</div>
					<div class="info_item down">
						<div class="left_box">
							<p>是否吸烟<span>*</span></p>
						</div>
						<div class="right_box">
							<select name="" id="">
								<option value="">不吸烟</option>
							</select>
						</div>
					</div>
					<div class="info_item down">
						<div class="left_box">
							<p>是否饮酒<span>*</span></p>
						</div>
						<div class="right_box">
							<select name="" id="">
								<option value="">偶尔喝酒</option>
							</select>
						</div>
					</div>
					<h5>财务状况</h5>
					<div class="info_item down">
						<div class="left_box">
							<p>净资产<span>*</span></p>
						</div>
						<div class="right_box">
							<select name="" id="">
								<option value="">100w</option>
							</select>
						</div>
					</div>
					<div class="info_item down">
						<div class="left_box">
							<p>年收入<span>*</span></p>
						</div>
						<div class="right_box">
							<select name="" id="">
								<option value="">100w</option>
							</select>
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
	$(".pick-area2").pickArea({
	    "format":"province/city", //格式
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
	        thisdom.next().val($(".pick-area-hidden").val());
			console.log($(".pick-area-hidden").val());
	    }
	});
</script>
</html>