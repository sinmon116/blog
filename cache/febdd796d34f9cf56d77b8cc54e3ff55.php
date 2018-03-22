<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>登录</title>
<link rel="stylesheet" type="text/css" href="/public/index/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="/public/index/css/demo.css" />
<!--必要样式-->
<link rel="stylesheet" type="text/css" href="/public/index/css/component.css" />
<!--[if IE]>
<script src="js/html5.js"></script>
<![endif]-->
<style>
		.getyzm{color: #546172;position: absolute;left: 858px;top:270px;}
		.getyzm1{color: #546172;position: absolute;left: 955px;top:270px;}
		 a:hover{color:#fff;}
</style>
</head>
<body>
		<div class="container demo-1">
			<div class="content">
				<div id="large-header" class="large-header">
				<a   class='getyzm' href='/index.php?m=user&a=email'  id='btn2'>密码忘了？</a><a   class='getyzm1' href='/index.php?m=user&a=regist'  id='btn2'>立即注册</a>
					<canvas id="demo-canvas"></canvas>
					<div class="logo_box">
						<h3>欢迎你</h3>
						<form action="index.php?m=user&a=dologin" name="f" method="post">
							<div class="input_outer">
								<span class="u_user"></span>
								<input name="username" class="text" style="color: #FFFFFF !important" type="text" placeholder="请输入账户">
							</div>
							<div class="input_outer">
								<span class="us_uer"></span>
								<input name="password" class="text" style="color: #FFFFFF !important; position:absolute; z-index:100;"value="" type="password" placeholder="请输入密码">
							</div>
							<div class="mb2"><input type='submit' class="act-but submit" style="color: #FFFFFF" value = '                            登录                            '></div>
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