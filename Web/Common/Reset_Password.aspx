<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Reset_Password.aspx.cs" Inherits="Web.Common.Reset_Password" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>猿圈 重置密码</title>

<!-- Bootstrap core CSS -->
<link href="http://www.oxcoder.com/bootstrap/css/bootstrap.min.css?v=3.1.1" rel="stylesheet">

<!-- Font Awesome CSS -->
<link href="http://www.oxcoder.com/fonts/font-awesome/css/font-awesome.min.css?v=4.0.3" rel="stylesheet">

<!-- Bootstrap Switch -->
<link href="http://www.oxcoder.com/css/libs/bootstrap-switch.min.css?v=3.0.0" rel="stylesheet">

<!-- Bootstrap Select -->
<link href="http://www.oxcoder.com/css/libs/bootstrap-select.min.css" rel="stylesheet">

<!-- IcoMoon CSS -->
<link href="http://www.oxcoder.com/fonts/icomoon/style.css?v=1.0" rel="stylesheet">



<!-- Summernote -->
<link href="http://www.oxcoder.com/css/libs/summernote.css" rel="stylesheet">
<link href="http://www.oxcoder.com/css/libs/summernote-bs3.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../Public/CSS/style.css" rel="stylesheet" type="text/css">

<!-- Max css -->
<link href="../Public/CSS/style_new.css" rel="stylesheet" type="text/css">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
<body style="">
	<!-- 引入header -->
	
	
	
		

<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand hidden-sm" href="http://www.oxcoder.com/index.action" style="padding: 0;"><img src="../../Public/Images/wlogo_sm.png" style="max-height: 35px; margin: 7px;"/></a>
		</div>
		<div class="navbar-collapse collapse" role="navigation">
			<ul class="nav navbar-nav">
				<li><a href="http://www.oxcoder.com/index.action?pageflag=user">开发者</a></li>
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

			<div class="col-md-12">
				<section>

					<div id="content">
						<div class="row">
							<div class="col-md-12">
								<section>
									<div class="container">
										<!--<div class="page-header">
									        <h1>Dashboard</h1>
									    </div>-->
										<div class="page-body">
											<div class="row">

												<div class="panel panel-outline">
													<div class="panel-body">

														<!-- 错误信息 -->
														<font color="red">
														</font>
														<!-- 成功信息 -->
														<font color="green">
														</font>
														<form runat="server" class="form-horizontal bv-form" enctype="multipart/form-data"  id="defaultForm" novalidate="novalidate"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
															<!-- <div class="form-group">
																<label class="col-md-3 control-label" for="name"><font
																	color=red>*</font>旧密码</label>
																<div class="col-md-5">
																	<input type="password" id="name" name="old"
																		class="form-control"
																		value=''>
																</div>
															</div> -->
															<div class="form-group has-feedback">
																<label class="col-md-3 control-label" for="pwd"><font color="red">*</font>新密码</label>
																<div class="col-md-5">
																	<input runat="server" type="password" id="pwd" name="pwd" class="form-control" data-bv-field="pwd"/><i class="form-control-feedback" data-bv-icon-for="pwd" style="display: none;"></i>
																</div>
															</div>
															<div class="form-group has-feedback">
																<label class="col-md-3 control-label" for="rePwd"><font color="red">*</font>重复新密码</label>
																<div class="col-md-5">
																	<input runat="server" type="password" id="rePwd" name="rePwd" class="form-control" value="" data-bv-field="rePwd"/><i class="form-control-feedback" data-bv-icon-for="rePwd" style="display: none;"></i>
																</div>
															</div>
															<div class="form-group form-actions">
																<div class="col-md-9 col-md-offset-3 div-login">
																	<asp:Button  class="btn btn-new1" runat="server" Text="提交" OnClick="ResetPassword"></asp:Button>
																	<a href="index.html" type="submit" class="btn btn-warning">
																		&nbsp;&nbsp;放弃修改&nbsp;&nbsp; 
																	</a>
																	<!--  <button type="reset" class="btn btn-warning">重置 <i class="fa fa-repeat"></i></button>-->
																</div>
															</div>
														</form>
													</div>
													<!-- /.panel-body -->
												</div>
											</div>
											<!--/.row   -->
										</div>
									</div>
								</section>
								<!-- /.profile-stream -->
							</div>
						</div>
						<!-- /.row -->
					</div>
					<!-- /#content -->

				</section>
			</div>
			<!-- /.col-md-10 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->

    <!-- #Include virtual="/Common/footer.html" -->


	<script src="../../Public/JS/bootstrapValidator.js"></script>
         <!-- 引入footer -->

        <script type="text/javascript">
            $(document).ready(function () {
                $('#defaultForm').bootstrapValidator({
                    message: 'This value is not valid',
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        pwd: {
                            container: '#hint2',
                            validators: {
                                notEmpty: {
                                    message: '请输入新密码'
                                },
                                stringLength: {
                                    min: 6,
                                    max: 30,
                                    message: '密码应大于6位，小于30位'
                                }
                            }
                        },
                        rePwd: {
                            container: '#hint3',
                            validators: {
                                notEmpty: {
                                    message: '请输入新密码'
                                },
                                identical: {
                                    field: 'pwd',
                                    message: '两次输入的密码不一致'
                                },
                                stringLength: {
                                    min: 6,
                                    max: 30,
                                    message: '密码应大于6位，小于30位'
                                }
                            }
                        }
                    }
                });
            });
        </script>
	

</body></html>