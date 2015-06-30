<%@ Page Language="C#" AutoEventWireup="true"  ValidateRequest="false" CodeBehind="Invite.aspx.cs" Inherits="Web.Enterprise.Invite" %>
<!DOCTYPE html>
<!-- saved from url=(0060)http://www.oxcoder.com/hr-recruit-go-invite.action?reid=1116 -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="BootstrapStyler">

<title>猿圈 邀请挑战</title>

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
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style><style id="style-1-cropbar-clipper">/* Copyright 2014 Evernote Corporation. All rights reserved. */
.en-markup-crop-options {
    top: 18px !important;
    left: 50% !important;
    margin-left: -100px !important;
    width: 200px !important;
    border: 2px rgba(255,255,255,.38) solid !important;
    border-radius: 4px !important;
}

.en-markup-crop-options div div:first-of-type {
    margin-left: 0px !important;
}
</style></head>

<body style="">

	<!-- 引入header -->
	 <!--#include virtual="/Common/Enterprise_menu.html"-->
<script type="text/javascript">
    function validateSession() {
        var k = 2
        if (k == null) {
            location.replace("session-timeout-log.htm");
        }
    }
</script>
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<section>
					<div id="content">
						<div class="row">

							<div class="col-md-9">
								<h2 class="h2-tab" id="rname" runat="server">
									[初级]Java工程师
									-邀请挑战
								</h2>

								<p class="text-muted">您可以邀请其他渠道获取的人才到oxcoder，通过挑战来识别他们的能力。</p>

								<form id="defaultForm" runat="server">
                                    <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
									<input type="hidden" id="reid" value="1116" runat ="server">
									<button type="submit" class="bv-hidden-submit" disabled="disabled" style="display: none; width: 0px; height: 0px;"></button>
									<div class="form-group" id="one">
										
										
										<input type="hidden" id="inviteNumVal" name="inviteNumVal" value="3" runat="server"> <label><span class="grey">输入邮箱地址(剩余邀请数：<a id ="numDiv" runat="server">3</a>)
										</span></label> 
                                        
                                        <input type="email" name="oneEmail" id="oneEmail" runat="server" class="form-control" placeholder="多个邮件地址请用&#39;,&#39;分隔" onblur="checkInviteNum()" data-bv-field="oneEmail"> <span class="text-muted">邮件将会单独发送给多个候选人。候选人很多？<a href="http://www.oxcoder.com/hr-recruit-go-invite.action?reid=1116#" onclick="change1()">批量上传</a></span> <span class="help-block has-error" id="hint1">
										<!-- 										<div class="alert alert-danger" id="invitehint" -->
										<!-- 											style="text-align: center; display: none" role="alert"> -->
										<!-- 											您的邀请次数已不足 <a href="hr-payment-list.action">去充值</a> -->
										<!-- 										</div> -->
										<span class="help-block has-error" id="invitehint" runat="server" style="display: none"> <small class="help-block">您的邀请次数已不足
												<a href="http://www.oxcoder.com/hr-payment-list.action">去充值</a>
										</small>
										</span>
									<small class="help-block" data-bv-validator="emailAddress" data-bv-for="oneEmail" data-bv-result="NOT_VALIDATED" style="display: none;">请输入正确的邮箱格式，多个邮件地址请用','分隔</small><small class="help-block" data-bv-validator="notEmpty" data-bv-for="oneEmail" data-bv-result="NOT_VALIDATED" style="display: none;">请输入候选人邮箱地址</small></span></div>


									<div class="form-group" id="two" style="display: none;">
										<label><span class="grey">批量上传邮箱地址</span></label><a href="http://www.oxcoder.com/assets/batch-invite-example.xls" target="_blank" class="pull-right">下载导入模板</a> <input type="file" name="emailFile" tabindex="-1" style="position: fixed; left: -500px;" id="corp-pic" onchange="fileChange(this);" data-bv-field="emailFile"><div class="bootstrap-filestyle input-group"><input type="text" class="form-control " disabled="" placeholder="Choose file"> <span class="input-group-btn" tabindex="0">  <label for="corp-pic" class="btn btn-default">	<span class="glyphicon glyphicon-folder-open"></span>   </label></span></div> <span class="text-muted">不想导入？<a href="http://www.oxcoder.com/hr-recruit-go-invite.action?reid=1116#" onclick="change2()">输入邮箱地址</a></span> <span class="help-block has-error" id="hint2">
									<small class="help-block" data-bv-validator="notEmpty" data-bv-for="emailFile" data-bv-result="NOT_VALIDATED" style="display: none;">请上传邮箱地址文件</small></span></div>
									<div class="form-group">
										<label><span class="grey">邮件主题</span></label> <input readonly="" type="text" name="subject" id="mailSubject" runat="server" class="form-control" value="-在线笔试邀请函" data-bv-field="subject"> <span class="text-danger" id="error1" style="display: none;">请输入公司简称</span>
										<span class="help-block has-error" id="hint3">
									<small class="help-block" data-bv-validator="notEmpty" data-bv-for="subject" data-bv-result="NOT_VALIDATED" style="display: none;">请输入邮件主题</small></span></div>
									<div class="form-group">
										<label><span class="grey">邮件内容</span></label>
										<textarea readonly="" name="content" id="mailContent" runat="server" rows="9" class="form-control" data-bv-field="content">您好：&lt;br&gt;我们非常高兴地通知您，您已通过了我们的简历筛选，为了评估您的真实编程能力，我们准备了[[职位]]的在线编程挑战，希望您能完成！&lt;br&gt;点击下面的链接进入在线编程挑战:&lt;br&gt;[链接]&lt;br&gt;[密码]感谢您的配合！&lt;br&gt;&lt;br&gt;[公司]&lt;br&gt;[时间]</textarea>
										
										<span class="text-muted">请勿删除邮件内容中的[公司][职位][链接][密码]及[时间]，否则邮件无法正常发送。</span>
										<span class="help-block has-error" id="hint4">
									<small class="help-block" data-bv-validator="notEmpty" data-bv-for="content" data-bv-result="NOT_VALIDATED" style="display: none;">请输入邮件内容</small></span></div>

									<div class="form-group form-actions pull-right">
										<div class="form-group form-actions pull-right">
											<asp:Button id="sendBtn" onclick="send_Btn_Click" class="btn btn-new1" runat="server" Text="邀请"/>
											
											

												<!-- 												<a href="hr-recruit-list.action"><button class="btn" -->
												<!-- 														style="margin-left: 10px;">返回</button></a> -->

												<a href="Recruit_list.aspx" class="btn btn-default">返回</a>

											
										</div>
									</div>
								</form>
							</div>
							<!-- 引入right -->
							

<div class="col-md-3 profile-info">
	<div class="panel-user">
		<div class="panel-heading">
			<div class="panel-title">
				<div class="media">
					<a class="pull-left"> <img src="../Public/Images/default.jpg" class="media-object">
					</a>
					<div class="media-body">
						<h4 class="media-heading">
							<!-- <span class="welcome">Hello</span> -->
							<span> </span>
						</h4>
						<span class="text-muted"><small>上次登录日期: <br> 2015-05-22 08:47:49
						</small> </span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="panel panel-outline panel-no-padding hidden-xs">
		<div class="panel-body">
			<div class="stat-block stat-danger">
				<div class="icon">
					<b class="icon-cover"></b> <i class="fa fa-bell"></i>
				</div>
				<div class="details">
					<div class="number">
						0
					</div>
					<div class="description">今日接受挑战人数</div>
				</div>
			</div>
			<div class="stat-block stat-success">
				<div class="icon">
					<b class="icon-cover"></b> <i class="fa fa-bar-chart-o"></i>
				</div>
				<div class="details">
					<div class="number">
						0
					</div>
					<div class="description">今日完成挑战人数</div>
				</div>
			</div>
			<div class="stat-block stat-primary">
				<div class="icon">
					<b class="icon-cover"></b> <i class="fa fa-tachometer"></i>
				</div>
				<div class="details">
					<div class="number">
						0
					</div>
					<div class="description">共帮您识别的人才</div>
				</div>
			</div>
		</div>
		<!-- /.panel-body -->
	</div>
	<!-- /.panel -->
</div>
							<!-- 							<div class="col-md-3 profile-info"> -->
							<!-- 								<div class="panel-user"> -->
							<!-- 									<div class="panel-heading"> -->
							<!-- 										<div class="panel-title"> -->
							<!-- 											<div class="media"> -->
							<!-- 												<a class="pull-left"> <img -->
							
							<!-- 													class="media-object"> -->
							<!-- 												</a> -->

							<!-- 												<div class="media-body"> -->
							<!-- 													<h4 class="media-heading"> -->
							<!-- 														<span class="welcome">Hello</span> -->
							
							<!-- 													</h4> -->
							
							
							
							<!-- 												</div> -->
							<!-- 											</div> -->
							<!-- 										</div> -->
							<!-- 									</div> -->
							<!-- 								</div> -->

							<!-- 								<div class="panel panel-outline panel-no-padding hidden-xs"> -->
							<!-- 									<div class="panel-body"> -->
							<!-- 										<div class="stat-block stat-danger"> -->
							<!-- 											<div class="icon"> -->
							<!-- 												<b class="icon-cover"></b> <i class="fa fa-bell"></i> -->
							<!-- 											</div> -->
							<!-- 											<div class="details"> -->
							<!-- 												<div class="number"> -->
							
							<!-- 												</div> -->
							<!-- 												<div class="description">今日接受挑战人数</div> -->
							<!-- 											</div> -->
							<!-- 										</div> -->
							<!-- 										<div class="stat-block stat-success"> -->
							<!-- 											<div class="icon"> -->
							<!-- 												<b class="icon-cover"></b> <i class="fa fa-bar-chart-o"></i> -->
							<!-- 											</div> -->
							<!-- 											<div class="details"> -->
							<!-- 												<div class="number"> -->
							
							<!-- 												</div> -->
							<!-- 												<div class="description">今日通过挑战人数</div> -->
							<!-- 											</div> -->
							<!-- 										</div> -->
							<!-- 										<div class="stat-block stat-primary"> -->
							<!-- 											<div class="icon"> -->
							<!-- 												<b class="icon-cover"></b> <i class="fa fa-tachometer"></i> -->
							<!-- 											</div> -->
							<!-- 											<div class="details"> -->
							<!-- 												<div class="number"> -->
							
							<!-- 												</div> -->
							<!-- 												<div class="description">共帮您识别的人才</div> -->
							<!-- 											</div> -->
							<!-- 										</div> -->
							<!-- 									</div> -->
							<!-- 									/.panel-body -->
							<!-- 								</div> -->
							<!-- 								/.panel -->
							<!-- 							</div> -->


						</div>
						<!-- /.row -->
						
					</div>
					<!-- /#content -->

				</section>
			</div>


		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->

	<!-- jQuery -->
	<script src="../Public/JS/jquery-1.11.0.min.js"></script>

	<!-- Bootstrap core JavaScript -->
	<script src="../Public/JS/bootstrap.min.js"></script>

	<!-- Sparkline -->
	<script src="../Public/JS/jquery.sparkline.min.js"></script>

	<!-- Bootstrap Switch -->
	<script src="../Public/JS/bootstrap-switch.min.js"></script>

	<!-- Bootstrap Select -->
	<script src="../Public/JS/bootstrap-select.min.js"></script>

	<!-- Bootstrap File -->
	<script src="../Public/JS/bootstrap-filestyle.js"></script>


	<!-- Summernote -->
	<script src="../Public/JS/summernote.min.js"></script>

	<!-- Theme script -->
	<script src="../Public/JS/script.js"></script>
	<script src="../Public/JS/bootstrapValidator.js"></script>
	<script type="text/javascript">
	    $(document).ready(function () {
	        $('#defaultForm').bootstrapValidator({
	            message: 'This value is not valid',
	            fields: {
	                oneEmail: {
	                    container: '#hint1',
	                    validators: {
	                        emailAddress: {
	                            multiple: true,
	                            separator: /[,]/,
	                            message: '请输入正确的邮箱格式，多个邮件地址请用\'\,\'分隔'
	                        },
	                        notEmpty: {
	                            message: '请输入候选人邮箱地址'
	                        }
	                    }
	                },
	                emailFile: {
	                    container: '#hint2',
	                    validators: {
	                        notEmpty: {
	                            message: '请上传邮箱地址文件'
	                        }
	                    }
	                },
	                subject: {
	                    container: '#hint3',
	                    validators: {
	                        notEmpty: {
	                            message: '请输入邮件主题'
	                        }
	                    }
	                },
	                content: {
	                    container: '#hint4',
	                    validators: {
	                        notEmpty: {
	                            message: '请输入邮件内容'
	                        }
	                    }
	                },
	            }
	        });
	    });

	    var inviteFlag = false;
	    /**检查邮件邀请人数是否超量**/
	    function checkInviteNum() {
	        var emailstr = $("#oneEmail").val();
	        var emails = new Array();
	        emails = emailstr.split(",");
	        if (emails.length > $("#inviteNumVal").val()) {
	            $("#invitehint").show();
	            inviteFlag = false;

	        } else {
	            $("#invitehint").hide();
	            inviteFlag = true;
	        }
	    }

	    function checkInput() {
	        if ($("#invitehint").is(':hidden'))
	            return true;
	        else
	            return inviteFlag;
	    }
	</script>
	<script type="text/javascript">
	    function change1() {
	        $('#one').hide();
	        $('#two').show();
	    };
	    function change2() {
	        $('#two').hide();
	        $('#one').show();
	    };
	</script>
	<script type="text/javascript">
	    var isIE = /msie/i.test(navigator.userAgent) && !window.opera;
	    function fileChange(target, id) {
	        var fileSize = 0;
	        var filetypes = [".xls", ".xlsx"];
	        var filepath = target.value;
	        var filemaxsize = 1024 * 2;//2M
	        if (filepath) {
	            var isnext = false;
	            var fileend = filepath.substring(filepath.indexOf("."));
	            if (filetypes && filetypes.length > 0) {
	                for (var i = 0; i < filetypes.length; i++) {
	                    if (filetypes[i] == fileend) {
	                        isnext = true;
	                        break;
	                    }
	                }
	            }
	            if (!isnext) {
	                alert("只能上传.xls及.xlsx文件！");
	                target.value = "";
	                return false;
	            }
	        } else {
	            return false;
	        }
	        if (isIE && !target.files) {
	            var filePath = target.value;
	            var fileSystem = new ActiveXObject("Scripting.FileSystemObject");
	            if (!fileSystem.FileExists(filePath)) {
	                alert("附件不存在，请重新输入！");
	                return false;
	            }
	            var file = fileSystem.GetFile(filePath);
	            fileSize = file.Size;
	        } else {
	            fileSize = target.files[0].size;
	        }

	        var size = fileSize / 1024;
	        if (size > filemaxsize) {
	            alert("附件大小不能大于" + filemaxsize / 1024 + "M！");
	            target.value = "";
	            return false;
	        }
	        if (size <= 0) {
	            alert("附件大小不能为0M！");
	            target.value = "";
	            return false;
	        }
	    }
	</script>
	<!-- 引入footer -->
	

    <div class="afooter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    © 2015 oxcoder.com <a href="http://www.oxcoder.com/contact-us.action">联系我们</a> <a href="http://jq.qq.com/?_wv=1027&k=eeKvVb" target="_blank">QQ交流群:77590762</a> <a href="http://www.mikecrm.com/f.php?t=7GdYKp" target="_blank">意见反馈</a> <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://"); document.write(unescape("%3Cspan id='cnzz_stat_icon_1253509620'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s23.cnzz.com/z_stat.php%3Fid%3D1253509620%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script><span id="cnzz_stat_icon_1253509620"><a href="http://www.cnzz.com/stat/website.php?web_id=1253509620" target="_blank" title="站长统计"><img border="0" hspace="0" vspace="0" src="../Public/Images/pic.gif"></a></span><script src="../Public/JS/z_stat.php" type="text/javascript"></script><script src="../Public/JS/core.php" charset="utf-8" type="text/javascript"></script>
                </div>
            </div>
            
        </div>
    </div>
<script type="text/javascript">

    //如果页面内容高度小于屏幕高度，div#footer将绝对定位到屏幕底部，否则div#footer保留它的正常静态定位
    if (($(document.body).height() + 50) < $(window).height()) {
        $(".afooter").addClass("navbar-fixed-bottom");
    };
</script>


<script id="hiddenlpsubmitdiv" style="display: none;"></script><script>try { for (var lastpass_iter = 0; lastpass_iter < document.forms.length; lastpass_iter++) { var lastpass_f = document.forms[lastpass_iter]; if (typeof (lastpass_f.lpsubmitorig2) == "undefined") { lastpass_f.lpsubmitorig2 = lastpass_f.submit; if (typeof (lastpass_f.lpsubmitorig2) == 'object') { continue; } lastpass_f.submit = function () { var form = this; var customEvent = document.createEvent("Event"); customEvent.initEvent("lpCustomEvent", true, true); var d = document.getElementById("hiddenlpsubmitdiv"); if (d) { for (var i = 0; i < document.forms.length; i++) { if (document.forms[i] == form) { if (typeof (d.innerText) != 'undefined') { d.innerText = i; } else { d.textContent = i; } } } d.dispatchEvent(customEvent); } form.lpsubmitorig2(); } } } } catch (e) { }</script></body></html>
