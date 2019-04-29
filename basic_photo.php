<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的照片</title>
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
	<script src="js/common.js"></script>
</head>
<body>
	<?php include 'header_nav.php'; ?>
	<div class="basic_info_box">
		<div class="container">
			<div class="basic_left">
				<?php include 'basic_left.php'; ?>
			</div>
			<div class="basic_right">
				<h4>头像<span>所有人都可以看到的公开图片</span></h4>
				<div class="basic_photo_box">
					<div class="change_photo">
						<input type="file" id="file" accept="image/*" />
						<img src="" class="avatar_img" alt="">
						<img src="images/camera.png" class="camera_img" alt="">
					</div>
					<div class="del_box"><img src="images/delete.png" class="delete_avatar" alt=""></div>
					<div class="photo_note">
						<h5>所有人都可以看到</h5>
						<p>- 确保五官清晰，正面、微侧皆可。勿上传裸露、模糊或他人照片；</p>
						<p>- 对于希望保护隐私的用户，脸部半遮掩的照片也是允许的；</p>
						<p>- 照片尺寸180X180像素，最大不能超过10M。</p>
					</div>
					<div class="photo_demo">
						<div class="demo_left">
							<h6><img src="images/demo_ok.png" alt=""><span>正确示范</span><a href="">查看完整指南</a></h6>
							<ul>
								<li><img src="images/demo_img1.jpg" alt=""></li>
								<li><img src="images/demo_img2.jpg" alt=""></li>
								<li><img src="images/demo_img3.jpg" alt=""></li>
							</ul>
							<p>正面全身照或者脸部半遮掩的照片都是允许的</p>
						</div>
						<div class="demo_right">
							<h6><img src="images/demo_wrong.png" alt=""><span>错误示范</span></h6>
							<ul>
								<li><img src="images/demo_img4.jpg" alt=""></li>
								<li><img src="images/demo_img5.jpg" alt=""></li>
								<li><img src="images/demo_img6.jpg" alt=""></li>
							</ul>
							<p>没有脸部正面，或者过于裸露的照片是不允许的</p>
						</div>
					</div>
				</div>
				<div class="public_photo_box">
					<h5>公开照片<span>所有会员都可以看到的公开图片</span><a href="">查看完整指南</a></h5>
					<ul class="photo_ul public_ul">
						
					</ul>
					<div class="add_box">
						<div class="add_photo">
							<input type="file" id="file1" accept="image/*" />
							<span>+</span>
							<p>添加照片</p>
						</div>
						<p>所有会员都可以看到您的公开照片</p>
					</div>
				</div>
				<div class="public_photo_box privacy_photo_box">
					<h5>私密照片<span>隐私照片只有你允许的会员才可以看到</span><a href="">我授权的会员</a></h5>
					<ul class="photo_ul privacy_ul">
						
					</ul>
					<div class="add_box">
						<div class="add_photo">
							<input type="file" id="file2" accept="image/*" />
							<span>+</span>
							<p>添加照片</p>
						</div>
						<p>只有您授权的会员可以看到您的公开照片</p>
					</div>
				</div>
				<a href="" class="save_btn">保存</a>
			</div>
		</div>
	</div>
	<div class="modal_box photo_modal1 fix">
		<img src="images/close.png" class="close_img" alt="">
		<div class="box">
			<p>确定要删除该图片？</p>
			<ul>
				<li><a href="javascript:void(0);" class="modal_confirm_btn modal_confirm_btn1">确认</a></li>
				<li><a href="javascript:void(0);" class="modal_cancle_btn last">取消</a></li>
			</ul>
		</div>
	</div>
	<div class="modal_box photo_modal2 fix">
		<img src="images/close.png" class="close_img" alt="">
		<div class="box">
			<p>确定要删除该图片？</p>
			<ul>
				<li><a href="javascript:void(0);" class="modal_confirm_btn modal_confirm_btn2">确认</a></li>
				<li><a href="javascript:void(0);" class="modal_cancle_btn last">取消</a></li>
			</ul>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
<link rel="stylesheet" href="css/photo.css">
<script src="js/LocalResizeIMG.js"></script>
<script>
	$(function(){
		var modal = new LModal();
		// 更换头像
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
		$(".change_photo").on("change","input",function(){
			var _this = this;
			run(_this, function (data) {
				$(".avatar_img").attr('src',data);
			});
		})
		
		$(".delete_avatar").click(function(){
			$(".avatar_img").attr('src',"");
		})
		
		// 公开照片
		var picArr1 = new Array();// 存储图片
		var aa = "";
		var that = "";
		$('#file1').localResizeIMG({
			width:800,// 宽度
			quality: 1, // 压缩参数 1 不压缩 越小清晰度越低
			success: function (result) {
				var img = new Image();
				img.src = result.base64;
				var _str = "<li class='pic_look'><img src='"+img.src+"' class='img'/><img src='images/delete.png' class='delete_icon delete_pic1' alt=''></li>";
				$('.public_ul').append(_str);
				var _i =  picArr1.length;
				picArr1[_i] = result.base64;
				console.log(picArr1)
			}
		});
		// 删除
		$(document).on('click', '.delete_pic1', function(event) {
			aa = $(this).parents(".pic_look").index();
			that = $(this).parents(".pic_look");
			modal.showModal(".photo_modal1");
		}); 
		$(".modal_confirm_btn1").click(function(){
			picArr1.splice(aa,1);
			that.remove();
			console.log(picArr1);
			modal.cancleModal(".photo_modal1")
		})
		
		// 私密照片
		var picArr2 = new Array();// 存储图片
		var bb = "";
		var that1 = "";
		$('#file2').localResizeIMG({
			width:800,// 宽度
			quality: 1, // 压缩参数 1 不压缩 越小清晰度越低
			success: function (result) {
				var img = new Image();
				img.src = result.base64;
				var _str = "<li class='pic_look'><img src='"+img.src+"' class='img'/><img src='images/delete.png' class='delete_icon delete_pic2' alt=''></li>";
				$('.privacy_ul').append(_str);
				var _i =  picArr2.length;
				picArr2[_i] = result.base64;
				console.log(picArr2)
			}
		});
		// 删除
		$(document).on('click', '.delete_pic2', function(event) {
			bb = $(this).parents(".pic_look").index();
			that1 = $(this).parents(".pic_look");
			modal.showModal(".photo_modal2");
		}); 
		$(".modal_confirm_btn2").click(function(){
			picArr2.splice(bb,1);
			that1.remove();
			console.log(picArr2);
			modal.cancleModal(".photo_modal2")
		})
	})
</script>
</html>