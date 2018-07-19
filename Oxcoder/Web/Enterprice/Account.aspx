<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Account.aspx.cs" Inherits="Web.Enterprise.Account" %>
<!DOCTYPE html>
<!-- saved from url=(0045)http://www.oxcoder.com/hr-payment-info.action -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="BootstrapStyler">

<title>猿圈 账户余额</title>

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
<link rel="stylesheet" href="http://www.oxcoder.com/css/libs/bootstrapValidator.css">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>

<body style="">

	<!-- 引入header -->
	 <!--#include virtual="/Common/Enterprise_menu.html"-->
<script type="text/javascript">
    function validateSession() {
        var k = 2
        if (k == null) {
            location.replace("session-timeout-log.action");
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

								<div class="container-fluid">
									<section>
										<section id="middle">
											<h2 class="h2-tab">账户余额</h2>
											<!-- <a href="oxcoder_corp_new_challenge.html"><button class="btn btn-new1 pull-right" style="margin-top:20px;">去充值</button></a> -->
											<p class="text-muted">多买多划算！</p>
										</section>
										<!-- /.page-header -->
										<div id="Div1">
											<div class="row">
												<div class="col-md-12">
													<div class="panel panel-default project ">
														<div class="panel-body">
															
															<div class="row">
																<div class="col-md-4">
																	<h2 id ="AccountLeft" runat="server">
																		3
																		个邀请+
																		0
																		个挑战
																	</h2>
																</div>
																<div class="col-md-3">
																	<ul class="list-unstyled" style="margin: 7px 0;">
																		<li>共使用<span class="red">0</span>个邀请
																		</li>
																		<li>共发起<span class="red">1</span>个挑战
																		</li>
																	</ul>
																</div>
																<div class="col-md-2">
																	<ul class="list-unstyled" style="margin: 7px 0;">
																		<li>您还可以使用<span class="red" id="inviteNum" runat="server">3</span>个邀请
																		</li>
																	</ul>
																</div>
																<div class="col-md-3">
																	<a href="Charge.aspx">
																		<button type="button" class="btn btn-new1" style="margin: 16px 0;">去充值</button>
																	</a>
																</div>
															</div>
															<!-- /.row -->


														</div>
														<!-- /.panel-footer -->
													</div>
													<!-- /.panel -->

												</div>
											</div>
											<!-- /.row -->
										</div>
										<!-- /#content -->

									</section>
								</div>
								<!-- /.container-fluid  -->
								<div class="container-fluid">
									<section>
										<section id="Section1">
											<h2 class="h2-tab">优惠码</h2>
											<p class="text-muted">您可以通过输入优惠码，获得免费的邀请与挑战</p>
										</section>
										<div id="Div2">
											<div class="row">
												<div class="col-md-12">
													<div class="panel panel-default project ">
														<div class="panel-body">
															<font color="green"></font>
															<font color="red"></font>
															<div class="row">
																<form id="defaultForm" method="post" class="form-horizontal bv-form" action="http://www.oxcoder.com/hr-sub-moneycode.action" novalidate="novalidate"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
																	<div class="form-group has-feedback" style="width: 400px; margin-left: 20px;">
																		<input type="text" name="moneycode" class="form-control" placeholder="请输入优惠码" data-bv-field="moneycode"><i class="form-control-feedback bv-no-label" data-bv-icon-for="moneycode" style="display: none;"></i> <span class="help-block has-error" id="hint1">
																	<small class="help-block" data-bv-validator="notEmpty" data-bv-for="moneycode" data-bv-result="NOT_VALIDATED" style="display: none;">请输入优惠码</small><small class="help-block" data-bv-validator="stringLength" data-bv-for="moneycode" data-bv-result="NOT_VALIDATED" style="display: none;">优惠码最长不能超过18位</small></span></div>
																	<div class="col-xs-12">
																		<button type="submit" class="btn btn-new1">确认</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
							<!-- 引入right -->
							

<div class="col-md-3 profile-info">
	<div class="panel-user">
		<div class="panel-heading">
			<div class="panel-title">
				<div class="media">
					<a class="pull-left"> <img src="../Public/Images/1052.png" class="media-object">
					</a>
					<div class="media-body">
						<h4 class="media-heading">
							<!-- <span class="welcome">Hello</span> -->
							<span><asp:Label runat="server" Text=<%#Name %>></asp:Label> </span>
						</h4>
						<span class="text-muted"><small>上次登录日期: <br> 2015-05-20 13:11:21
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
							<!--                             <div class="col-md-3 profile-info"> -->
							<!-- 								<div class="panel-user"> -->
							<!-- 									<div class="panel-heading"> -->
							<!-- 										<div class="panel-title"> -->
							<!-- 											<div class="media"> -->
							
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
							
							<!-- 												<div class="description">今日接受挑战人数</div> -->
							<!-- 											</div> -->
							<!-- 										</div> -->
							<!-- 										<div class="stat-block stat-success"> -->
							<!-- 											<div class="icon"> -->
							<!-- 												<b class="icon-cover"></b> <i class="fa fa-bar-chart-o"></i> -->
							<!-- 											</div> -->
							<!-- 											<div class="details"> -->
							
							<!-- 												<div class="description">今日通过挑战人数</div> -->
							<!-- 											</div> -->
							<!-- 										</div> -->
							<!-- 										<div class="stat-block stat-primary"> -->
							<!-- 											<div class="icon"> -->
							<!-- 												<b class="icon-cover"></b> <i class="fa fa-tachometer"></i> -->
							<!-- 											</div> -->
							<!-- 											<div class="details"> -->
							
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
	            feedbackIcons: {
	                valid: 'glyphicon glyphicon-ok',
	                invalid: 'glyphicon glyphicon-remove',
	                validating: 'glyphicon glyphicon-refresh'
	            },
	            fields: {
	                moneycode: {
	                    container: '#hint1',
	                    validators: {
	                        notEmpty: {
	                            message: '请输入优惠码'
	                        },
	                        stringLength: {
	                            max: 18,
	                            message: '优惠码最长不能超过18位'
	                        }
	                    }
	                }
	            }
	        });
	    });
	</script>
	<!-- 引入footer -->
	

    <div class="afooter navbar-fixed-bottom">
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



</body></html>