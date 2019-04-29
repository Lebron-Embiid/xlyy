<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>实名认证</title>
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
				<h4>实名认证</h4>
				<div class="verified_box">
					<div class="verify_photo">
						<div class="verify_item">
							<div class="vi_photo">
								<input type="file" id="file1" accept="image/*" />
								<img src="" class="ver_img" alt="">
								<img src="images/camera1.png" class="camera_img" alt="">
							</div>
							<p>身份证正面</p>
						</div>
						<div class="verify_item">
							<div class="vi_photo">
								<input type="file" id="file2" accept="image/*" />
								<img src="" class="ver_img" alt="">
								<img src="images/camera1.png" class="camera_img" alt="">
							</div>
							<p>身份证反面</p>
						</div>
						<div class="verify_item">
							<div class="vi_photo">
								<input type="file" id="file3" accept="image/*" />
								<img src="" class="ver_img" alt="">
								<img src="images/camera1.png" class="camera_img" alt="">
							</div>
							<p>清晰头像</p>
						</div>
					</div>
					<input type="text" name="realname" placeholder="真实姓名">
					<input type="text" name="id_card" placeholder="身份证号">
				</div>
				<a href="" class="save_btn">保存</a>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
<script>
	function run(input_file,get_data){
	    /*input_file：文件按钮对象*/
	    /*get_data: 转换成功后执行的方法*/
	    if ( typeof(FileReader) === 'undefined' ){
	        alert("抱歉，你的浏览器不支持 FileReader，不能将图片转换为Base64，请使用现代浏览器操作！");
	    } else {
	        try{
	            /*图片转Base64 核心代码*/
	            var file = input_file.files[0];
	            //这里我们判断下类型如果不是图片就返回 去掉就可以上传任意文件
	            if(!/image\/\w+/.test(file.type)){
	                alert("请确保文件为图像类型");
	                return false;
	            }
	            var reader = new FileReader();
	            reader.onload = function(){
	                get_data(this.result);
	            }
	            reader.readAsDataURL(file);
	        }catch (e){
	            alert('图片转Base64出错啦！'+ e.toString())
	        }
	    }
	}
	$(".verify_photo").on("change","input",function(){
		var _this = this;
		run(_this, function (data) {
			console.log(data)
			$(_this).siblings(".ver_img").attr('src',data);
		});
	})
</script>
</html>