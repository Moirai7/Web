<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Register_enterprice_Success.aspx.cs" Inherits="Web.Enterprice.Register_enterprice_Success" %>
<!DOCTYPE html>
<!-- saved from url=(0044)http://www.oxcoder.com/hr-to-new-info.action -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="BootstrapStyler">

<title>猿圈 企业注册</title>
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
						<!-- 错误信息 -->
						<font color="red"></font>
						<form id="defaultForm" runat="server" class="form-vertical bv-form" enctype="multipart/form-data" novalidate="novalidate"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>

							<div class="form-group">
								<label><h3 class="grey">公司全称</h3></label> <input runat="server" type="text" name="cname" class="form-control" id="corpname" placeholder="请输入公司在营业执照上的全称" data-bv-field="cname"> <span class="help-block has-error" id="hint1">
							<small class="help-block" data-bv-validator="notEmpty" data-bv-for="cname" data-bv-result="NOT_VALIDATED" style="display: none;">请输入公司在营业执照上的全称</small><small class="help-block" data-bv-validator="stringLength" data-bv-for="cname" data-bv-result="NOT_VALIDATED" style="display: none;">公司全称不能超过30个字符</small></span></div>

							<div class="form-group">
								<label><h3 class="grey">公司相关证明文件</h3></label> <input runat="server" type="file" name="image" tabindex="-1" style="position: fixed; left: -500px;" id="corppic" accept="image/*" data-bv-field="image"><div class="bootstrap-filestyle input-group"><input type="text" class="form-control " disabled="" placeholder="Choose file"> <span class="input-group-btn" tabindex="0">  <label for="corp-pic" class="btn btn-default">	<span class="glyphicon glyphicon-folder-open"></span>   </label></span></div> <span>如营业执照、组织代码证、税务登记证或工牌等扫描文件</span><span class="help-block has-error" id="hint2">

							<small class="help-block" data-bv-validator="notEmpty" data-bv-for="image" data-bv-result="NOT_VALIDATED" style="display: none;">请上传公司营业执照、组织代码证、税务登记证或工牌等扫描文件</small></span></div>

							<div class="form-group">
								<label><h3 class="grey">招聘负责人联系方式</h3></label> <input type="text" runat="server"  name="phone" class="form-control" id="phone" data-bv-field="phone">
								<span>请输入招聘负责人的手机</span> <span class="help-block has-error" id="hint3">
							<small class="help-block" data-bv-validator="notEmpty" data-bv-for="phone" data-bv-result="NOT_VALIDATED" style="display: none;">请输入联系方式</small><small class="help-block" data-bv-validator="phone" data-bv-for="phone" data-bv-result="NOT_VALIDATED" style="display: none;">请输入正确的联系方式</small></span></div>
							<div class="form-group form-actions">
								<asp:Button runat="server" class="btn btn-primary btn-lg" style="border-radius: 3px;" OnClick="FillEnterpriceInfo" Text="确认"></asp:Button>
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
	<script type="text/javascript" src="../Public/JS/jquery.city.select.js"></script>


	<script src="../Public/JS/bootstrapValidator.js"></script>

	<script type="text/javascript">
        
        $(document).ready(function() {
            $('#defaultForm').bootstrapValidator({
                message: 'This value is not valid',
                fields: {
                	cname: {
                        container: '#hint1',
                        validators: {
                            notEmpty: {
                                message: '请输入公司在营业执照上的全称'
                            },
                            stringLength: {
                                max: 30,
                                message: '公司全称不能超过30个字符'
                            }
                        }
                    },
                    image: {
                        container: '#hint2',
                        validators: {
                            notEmpty: {
                                message: '请上传公司营业执照、组织代码证、税务登记证或工牌等扫描文件'
                            }
                        }
                    },
                    phone: {
                        container: '#hint3',
                        validators: {
                            notEmpty: {
                                message: '请输入联系方式'
                            },
                            phone: {
                                message: '请输入正确的联系方式',
                                country: 'CN'
                            }
                        }
                    }
                }
            });
        });
        </script>

	<!-- 引入footer -->
	<!-- #Include virtual="/Common/footer.html" -->


<script id="hiddenlpsubmitdiv" style="display: none;"></script><script>try{for(var lastpass_iter=0; lastpass_iter < document.forms.length; lastpass_iter++){ var lastpass_f = document.forms[lastpass_iter]; if(typeof(lastpass_f.lpsubmitorig2)=="undefined"){ lastpass_f.lpsubmitorig2 = lastpass_f.submit; if (typeof(lastpass_f.lpsubmitorig2)=='object'){ continue;}lastpass_f.submit = function(){ var form=this; var customEvent = document.createEvent("Event"); customEvent.initEvent("lpCustomEvent", true, true); var d = document.getElementById("hiddenlpsubmitdiv"); if (d) {for(var i = 0; i < document.forms.length; i++){ if(document.forms[i]==form){ if (typeof(d.innerText) != 'undefined') { d.innerText=i; } else { d.textContent=i; } } } d.dispatchEvent(customEvent); }form.lpsubmitorig2(); } } }}catch(e){}</script></body></html>