<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<link href="/platform/Public/js/bootstrap/dist/css/bootstrap.min.css"
	rel="stylesheet">
<link href="/platform/Public/js/font-awesome/css/font-awesome.min.css"
	rel="stylesheet">
<link href="/platform/Public/js/nprogress/nprogress.css" rel="stylesheet">
<link href="/platform/Public/js/animate.css/animate.min.css" rel="stylesheet">
<link
	href="/platform/Public/js/bootstrap-validator/dist/css/bootstrapValidator.min.css"
	rel="stylesheet">
<link href="/platform/Public/css/custom.min.css" rel="stylesheet">
<title>用户登录</title>
<style type="text/css">
.nomargin {
	margin: 0 !important;
}

.error-span {
	text-align: left !important;
	font-size: 16px;
}
</style>
</head>
<body class="login">
	<div>
		<a class="hiddenanchor" id="signup"></a> <a class="hiddenanchor"
			id="signin"></a>

		<div class="login_wrapper">
			<div class="animate form login_form">
				<section class="login_content">
					<form id="loginForm" method="post" action=""> 
						<input id="loginMobile" type="hidden" name="mobile" /> 
						<input id="loginEmail" type="hidden" name="email" />
						<h1>用户登录</h1>
						<div>
							<div class="input-group">
								<label class="input-group-addon" for="username"><i
									class="fa fa-user fa-fw"></i></label> <input type="text"
									class="form-control nomargin" id="username" name="username"
									placeholder="请输入用户名" />
							</div>
							<span class="error-span" id="error-username"></span>
						</div>
						<div>
							<div class="input-group">
								<label class="input-group-addon" for="password"><i
									class="fa fa-key fa-fw"></i></label> <input type="password"
									class="form-control nomargin" id="password" name="password"
									placeholder="请输入密码" />
							</div>
							<span class="error-span" id="error-password"></span>
						</div>
						<div>
							<div class="input-group">
								<input type="text" class="form-control nomargin" id="validCode"
									name="validCode" autocomplete="off" placeholder="请输入验证码" /> <label
									class="input-group-addon" for="validCode"
									style="background: transparent; border: 0; padding: 0; cursor: pointer;"><a
									title="点击刷新"><img alt="点击刷新验证码" src="<?php echo U('Home/Index/verify',array());?>"
										style="margin-right: -15px; height: 34px; border-top-right-radius: 3px; border-bottom-right-radius: 3px;"
										class="validCodeImg"></a></label>
							</div>
							<span class="error-span" id="error-validCode"></span>
						</div>
						<div>
							<input type="submit" class="btn btn-default submit" value="登录">
							<input type="checkbox" style="margin-top: 13px;" id="cookie">
							10天内免登录
							<!-- <a class="reset_pass" href="#">忘记密码？</a> -->
						</div>

						<div class="clearfix"></div>
					</form>
				</section>
			</div>
		</div>
	</div>
</body>
</html>