<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Change_Enterprice_Password.aspx.cs" Inherits="Web.Enterprice.Change_Enterprice_Password" %>

<!DOCTYPE html>
<!-- saved from url=(0048)http://www.oxcoder.com/user-to-change-pwd.action -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="BootstrapStyler">

<title>猿圈 修改密码</title>
<!-- #Include virtual="/Common/header.html" -->
 </head>

<body style="">
	<!-- 引入header -->
    <!-- #Include virtual="/Common/enterprise_menu.html" -->
	
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-push-3 col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2">
				<div id="content">
					<div class="row">
						<form id="defaultForm1" runat="server" class="form-horizontal bv-form" enctype="multipart/form-data" novalidate="novalidate"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
							<div class="form-group">
								<label for="exampleInputEmail">旧密码</label> <input runat="server" name="old" type="password" class="form-control" id="old1" placeholder="请输入旧密码" data-bv-field="old">
							<small class="help-block" data-bv-validator="notEmpty" data-bv-for="old" data-bv-result="VALID" style="display: none;">请输入旧密码</small></div>
							<div class="form-group has-success">
								<label for="exampleInputEmail">新密码</label> <input runat="server" name="pwd" type="password" class="form-control" id="pwd1" placeholder="请输入新密码" data-bv-field="pwd">
							<small class="help-block" data-bv-validator="notEmpty" data-bv-for="pwd" data-bv-result="NOT_VALIDATED" style="display: none;">请输入新密码</small><small class="help-block" data-bv-validator="stringLength" data-bv-for="pwd" data-bv-result="VALID" style="display: none;">密码应大于6位，小于30位</small></div>
							<div class="form-group">
								<label for="exampleInputEmail">重复新密码</label> <input runat="server" name="rePwd" type="password" class="form-control" id="rePwd1" placeholder="请输入重复新密码" data-bv-field="rePwd">
							<small class="help-block" data-bv-validator="notEmpty" data-bv-for="rePwd" data-bv-result="NOT_VALIDATED" style="display: none;">请输入新密码</small><small class="help-block" data-bv-validator="identical" data-bv-for="rePwd" data-bv-result="NOT_VALIDATED" style="display: none;">两次输入的密码不一致</small><small class="help-block" data-bv-validator="stringLength" data-bv-for="rePwd" data-bv-result="NOT_VALIDATED" style="display: none;">密码应大于6位，小于30位</small></div>
							<asp:Button runat="server" class="btn btn-new1" Text="修改密码" OnClick="ChangeEnPassword"></asp:Button>
						</form>
						<!-- 错误信息 -->
						<font color="red"> </font>
					</div>
					<!-- /.row -->
				</div>
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->

    <!-- #Include virtual="/Common/footer.html" -->

<script src="../Public/JS/bootstrapValidator.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#defaultForm').bootstrapValidator({
            message: 'This value is not valid',

            fields: {
                old: {
                    validators: {
                        notEmpty: {
                            message: '请输入旧密码'
                        }
                    }
                },
                pwd: {
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


</script><script id="hiddenlpsubmitdiv" style="display: none;"></script><script>    try { for (var lastpass_iter = 0; lastpass_iter < document.forms.length; lastpass_iter++) { var lastpass_f = document.forms[lastpass_iter]; if (typeof (lastpass_f.lpsubmitorig2) == "undefined") { lastpass_f.lpsubmitorig2 = lastpass_f.submit; if (typeof (lastpass_f.lpsubmitorig2) == 'object') { continue; } lastpass_f.submit = function () { var form = this; var customEvent = document.createEvent("Event"); customEvent.initEvent("lpCustomEvent", true, true); var d = document.getElementById("hiddenlpsubmitdiv"); if (d) { for (var i = 0; i < document.forms.length; i++) { if (document.forms[i] == form) { if (typeof (d.innerText) != 'undefined') { d.innerText = i; } else { d.textContent = i; } } } d.dispatchEvent(customEvent); } form.lpsubmitorig2(); } } } } catch (e) { }</script>

</body>

</html>
