<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>注册</title>
<link rel="stylesheet" type="text/css" href="/public/index/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="/public/index/css/demo.css" />
<!--必要样式-->
<link rel="stylesheet" type="text/css" href="/public/index/css/component.css" />
 <script src="/public/index/js/jquery-1.11.1.min.js" type="text/javascript"></script>
<style>
		.getyzm{color: #546172;position: absolute;left: 858px;top:423px;}
		
		 a:hover{color:#fff;}
</style>
<!--[if IE]>
<script src="js/html5.js"></script>
<![endif]-->

<!-- ajax获取值 -->
<script type="text/javascript"> 
$(function(){
				
		 	$('#btn2').click(function(){
				<!-- alert('qqqqqq');   -->
		 		var phone=$('#dx').val();
					 <!-- alert(phone);  -->
		 		data={
		 			'tel':phone
		 		}
		 		$.post('/index.php?m=User&a=phone',data,function(data){
				<!-- alert(data); -->
						
		 		})
		 	})
		 })

</script>
</head>
<body>


		<div class="container demo-1">
			<div class="content">
				<div id="large-header" class="large-header">
				<a   class='getyzm' href='javascript:;'  id='btn2'>点击获取验证码</a>
					<canvas id="demo-canvas"></canvas>
					<div class="logo_box">
						<h3>欢迎注册</h3>
						<form action="index.php?m=User&a=doregist" name="f" method="post">
							<div class="input_outer">
								<span class="u_user"></span>
								<input name="username" class="text" style="color: #FFFFFF !important" type="text" placeholder="请输入用户名">
							</div>
		
							<div class="input_outer">
								<span class="us_uer"></span>
								<input name="password" class="text" style="color: #FFFFFF !important; position:absolute; z-index:100;"value="" type="password" placeholder="请输入密码">
							</div>
							<div class="input_outer">
								<span class="us_uer"></span>
								<input name="email" class="text" style="color: #FFFFFF !important; position:absolute; z-index:100;"value="" type="email" placeholder="请输入邮箱">
							</div>
							<div class="input_outer">
								<span class="us_uer"></span>
								<input name='tel' id='dx' class="text" style="color: #FFFFFF !important; position:absolute; z-index:100;"value="" type="text" placeholder="请输入手机号">
							
							</div>
							<div class="input_outer">
								<span class="us_uer"></span>
								<input name="yzm" class="text" style="color: #FFFFFF !important; position:absolute; z-index:100;"value="" type="text" placeholder="手机验证码">
							</div>
							<div class="mb2"><input type='submit' class="act-but submit" style="color: #FFFFFF" value = '                            注册                            '></div>
						</form>
					</div>
				</div>
			</div>
		</div><!-- /container -->
		<script src="/public/index/js/TweenLite.min.js"></script>
		<script src="/public/index/js/EasePack.min.js"></script>
		<script src="/public/index/js/rAF.js"></script>
		<script src="/public/index/js/demo-1.js"></script>
	</body>
</html>