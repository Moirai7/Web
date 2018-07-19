<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="User_Info.aspx.cs" Inherits="Web.User.User_Info" %>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head >
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>猿圈 个人信息</title>
<!-- #Include virtual="/Common/header.html" -->
</head>

<body style="">

	<!-- 引入header -->
    <!-- #Include virtual="/Common/user_menu.html" -->
	<div class="container">
		<div class="row">
			<!--                 <div class="alert alert-info col-md-8 col-md-push-2" role="alert"> -->
			
			<!--                             </div> -->
			<div class="col-md-6 col-md-push-3 col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2">
				<section id="middle">
					<form id="defaultForm" runat="server" class="form-vertical bv-form"  novalidate="novalidate">

						<div class="form-group">
							<label><h3 class="grey">真实姓名</h3></label> <input type="text" id="name" name="name"  value="<%=user0[1] %>" class="form-control" placeholder="" data-bv-field="name"></input>
						<small class="help-block" data-bv-validator="notEmpty" data-bv-for="name" data-bv-result="NOT_VALIDATED" style="display: none;">请输入姓名</small></div>

						<div class="form-group">
							<label><h3 class="grey">年龄</h3></label> <input type="text" id="age" name="age" value="<%=user0[4] %> " class="form-control" data-bv-field="age"/><span class="text-danger" id="error1" style="display: none;"></span> <span class="help-block" id="hint1">
						</span><small class="help-block" data-bv-validator="notEmpty" data-bv-for="age" data-bv-result="NOT_VALIDATED" style="display: none;">请输入年龄</small><small class="help-block" data-bv-validator="regexp" data-bv-for="age" data-bv-result="NOT_VALIDATED" style="display: none;">请输入数字</small><small class="help-block" data-bv-validator="between" data-bv-for="age" data-bv-result="NOT_VALIDATED" style="display: none;">年龄应在1到100之间</small></div>

						<div class="form-group">
							<label><h3 class="grey">性别</h3></label>
							<div>
								<label class="radio-inline" for="example-inline-radio1">
									<input runat="server" type="radio" id="radio1" name="sex" value="1" data-bv-field="sex">
                                    男
								</label> <label class="radio-inline" for="example-inline-radio2">
									<input runat="server" checked="" type="radio" id="radio2" name="sex" value="0" data-bv-field="sex">
                                    女
								</label>
							</div>
						</div>

						<div class="form-group">
							<label><h3 class="grey">手机</h3></label> <input type="text" id="phone" name="phone" value="<%=user0[2] %>" class="form-control" data-bv-field="phone">
						<small class="help-block" data-bv-validator="notEmpty" data-bv-for="phone" data-bv-result="NOT_VALIDATED" style="display: none;">请输入手机</small><small class="help-block" data-bv-validator="phone" data-bv-for="phone" data-bv-result="NOT_VALIDATED" style="display: none;">请输入正确的联系方式</small></div>
						<div class="form-group form-actions pull-right">
							<asp:Button runat="server" class="btn btn-new1 btn-lg" style="border-radius: 3px;" Text="保存" OnClick="ChangeUserInfo"></asp:Button>
						</div>

					</form>


				</section>
			</div>



		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->

	<script type="text/javascript">
		$(document).ready(function() {
			$('#defaultForm').bootstrapValidator({
				message : 'This value is not valid',
				fields : {
					name : {
						validators : {
							notEmpty : {
								message : '请输入姓名'
							}
						}
					},
					sex : {
						validators : {
							notEmpty : {
								message : '请选择性别'
							}
						}
					},
					age : {
						validators : {
							notEmpty : {
								message : '请输入年龄'
							},
							regexp : {
								regexp : /^[0-9]+$/,
								message : '请输入数字'
							},
							between : {
								min : 1,
								max : 100,
								message : '年龄应在1到100之间'
							}
						}
					},
					phone : {
						validators : {
							notEmpty : {
								message : '请输入手机'
							},
							phone : {
								message : '请输入正确的联系方式',
								country : 'CN'
							}
						}
					}
				}
			});
		});
	</script>

	<!-- 引入footer -->
     <!-- #Include virtual="/Common/footer.html" -->
</body>
</html>
