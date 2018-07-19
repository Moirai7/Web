<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Forgot_Password.aspx.cs" Inherits="Web.Common.Forgot_Password" %>
<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="BootstrapStyler">

<title>猿圈 找回密码</title>
 <link rel="shortcut icon" href="..\Public\Images\platform.png" />
<!-- #Include virtual="/Common/header.html" -->
</head>

<body style="">

	<!-- 引入header -->
	

<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand hidden-sm" href="index.html" style="padding: 0;"><img src="..\Public\Images\wlogo_sm.png" style="max-height: 35px; margin: 7px;"></a>
		</div>
		<div class="navbar-collapse collapse" role="navigation">
			<ul class="nav navbar-nav">
				<li><a href="Index.aspx">开发者</a></li>
				<li><a href="http://www.oxcoder.com/index.action?pageflag=cooper">企业</a></li>
				<li><a href="http://www.oxcoder.com/oxcoder-customers.action">客户案例</a></li>
				<li><a href="http://www.oxcoder.com/oxcoder-reports.action">媒体报道</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="Login.aspx">登录</a></li>
				<li><a href="Register.aspx">注册</a></li>
			</ul>
		</div>
	</div>
</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-push-3 col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2">
				<div id="content">
					<div class="row">
						<form  id="defaultForm" class="form-horizontal bv-form" novalidate="novalidate" runat="server"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
							<div class="form-group">
								<label for="exampleInputEmail">邮箱</label> <input runat="server" name="email" type="email" class="form-control" id="exampleInputEmail" placeholder="请输入您注册的邮箱地址" data-bv-field="email"> <span class="help-block has-error" id="hint1" style="margin-left: 20px;">
							<small class="help-block" data-bv-validator="notEmpty" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">请输入邮箱地址</small><small class="help-block" data-bv-validator="emailAddress" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">请输入正确的邮箱格式</small></span></div>
							<div class="form-group">
								<asp:Button class="btn btn-new1" runat="server" Text="找回密码" OnClick="SendResetEmail"></asp:Button>
							</div>
							<div class="form-group">
								<span class="help-block">我们将会发送一封找回密码邮件到您的邮箱，接按邮件内提示进行操作。</span>
								<span class="help-block has-error" style=""> <small class="help-block"></small>
								</span>
							</div>
						</form>


					</div>
					<!-- /.row -->
				</div>
			</div>



		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
 <!-- #Include virtual="/Common/footer.html" -->
	<script type="text/javascript">
		$(document).ready(function() {
			$('#defaultForm').bootstrapValidator({
				message : 'This value is not valid',
				fields : {
					email : {
						container : '#hint1',
						validators : {
							notEmpty : {
								message : '请输入邮箱地址'
							},
							emailAddress : {
								message : '请输入正确的邮箱格式'
							}
						}
					}
				}
			});
		});
	</script>
</body></html>

