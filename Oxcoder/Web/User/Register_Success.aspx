<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Register_Success.aspx.cs" Inherits="Web.User.Register_Success" %>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>猿圈 个人注册</title>
<!-- #Include virtual="/Common/header.html" -->
</head>
<body style="">
	<!-- 引入header -->
	<!-- #Include virtual="/Common/User_menu.html" -->
<script type="text/javascript">
function validateSession(){
  var k= 1
  if(k==null){
	  location.replace("session-timeout-log.htm");
}
}
</script>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-push-3 col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2">
				<section id="middle">
					<form  id="defaultForm" class="form-vertical" method="post">
						<h3 class="grey">账号注册成功</h3>
						<div class="form-group">
							<label>
								<p class="text-muted">您可以点击以下图标绑定其他帐号，我们会智能分析您的信息，得出最完整的个人报告，并且提高您的简历识别度。</p>
							</label>
							<div class="col-md-12">
								<div class="col-md-2 textcenter">
									
									
										<a target="_blank" href="https://api.weibo.com/oauth2/authorize?client_id=3064453059&response_type=code&forcelogin=true&redirect_uri=http://www.oxcoder.com/auth-sina-register-first.action" id="sina"><img src="../../Public/Images/sina2.png"></a>
									
									<p class="text-muted">新浪微博</p>
								</div>
								<div class="col-md-2 text-center">
									
									
										<a href="https://github.com/login/oauth/authorize?client_id=cb26d4b4731db53e8a90&redirect_uri=http://www.oxcoder.com/auth-github-register-first.action" target="_blank"><img src="../../Public/Images/github2.png"></a>
									
									<p class="text-muted">Github</p>
									
								</div>
<!-- 								<div class="col-md-2 text-center"> -->
<!-- 									<img src="img/github2.png"> -->
<!-- 									<p class="text-muted">暂未开放</p> -->
<!-- 								</div> -->
								<div class="col-md-2 text-center">
									<img src="../../Public/Images/zhihu2.png">
									<p class="text-muted">暂未开放</p>
								</div>
								<div class="col-md-2 text-center">
									<img src="../../Public/Images/quora2.png">
									<p class="text-muted">暂未开放</p>
								</div>
								<div class="col-md-2 text-center">
									<img src="../../Public/Images/stackoverflow2.png">
									<p class="text-muted">暂未开放</p>
								</div>
								<div class="col-md-2 text-center">
									<img src="../../Public/Images/sf2.png">
									<p class="text-muted">暂未开放</p>
								</div>
								<div class="col-md-2 text-center">
									<img src="../../Public/Images/csdn2.png">
									<p class="text-muted">暂未开放</p>
								</div>
							</div>
							<a href="User_Index.aspx" class="btn btn-primary" style="float: right;">进入挑战</a>
						</div>
					</form>
				</section>
			</div>



		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->


	<!-- 引入footer -->
<!-- #Include virtual="/Common/footer.html" -->
</body>
</html>
