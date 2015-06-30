<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Recruit_list.aspx.cs" Inherits="Web.Enterprise.Recruit_list" %>

<!DOCTYPE html>
<!-- saved from url=(0042)http://www.oxcoder.com/hr-recruit-list.htm -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="BootstrapStyler">

<title>猿圈 挑战管理</title>

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
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style><style type="text/css">@media print{.lpiframeoverlay{display:none}}</style><style id="style-1-cropbar-clipper">/* Copyright 2014 Evernote Corporation. All rights reserved. */
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

								<div class="container-fluid">
									<section>
										<section id="middle">
											<h2 class="h2-tab">
												<a href="Recruit_list.aspx">进行中的挑战</a>
											</h2>
											<h2 class="h2-tab">
												<a href="History.aspx" class="off">挑战历史</a>
											</h2>
											<a href="PublishChallenge_BaseInfo.aspx"><button class="btn btn-new1 pull-right" style="margin-top: 20px;">新增挑战邀请</button></a>
										</section>
										<!-- /.page-header -->
										<div id="OngoingList" runat="server">
											<div class="row">
												
												
													
														<div class="col-md-12">
															<div class="panel panel-default project ">
																<div class="panel-body">
																	<div class="row">
																		<!-- new start-->
																		<div class="col-md-5">
																			<h2 style="margin: 12px 0 2px 0;">
																				<a href="http://www.oxcoder.com/hr-recruit-resume-list.action?reid=1116&searchOrder=ranking">[初级]Java工程师</a>
																			</h2>
																			<div style="width: 280px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
																				<small>[2015/05/20]
																						大小写转换
																					
																						日期比较
																					
																						计算时针分针夹角
																					</small>
																			</div>

																		</div>
																		<div class="col-md-2">
																			<ul class="list-unstyled" style="margin: 7px 0;">
																				<li><span class="badge badge-info">0</span>个新接受</li>
																				<li><span class="badge badge-danger">0</span>个新完成</li>
																			</ul>
																		</div>
																		<div class="col-md-2">
																			<ul class="list-unstyled" style="margin: 20px 0;">
																				<li><span class="red">0.0</span>%已合格</li>
																			</ul>
																		</div>
																		<div class="col-md-3">
																			<a href="Resume.html"><button type="button" class="btn btn-new1">去筛选</button></a> <a href="Invite.html"><button type="button" class="btn btn-new1" style="margin: 16px 5px;">邀请</button></a>
																		</div>
																		<!-- new end-->
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
						<span class="text-muted"><small>上次登录日期: <br> 2015-05-21 15:59:42
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
						
							<div class="col-md-12">
								<section id="Section1">
									<ul class="pagination">
										
											<li class="disabled"><a href="javascript:;">«</a></li>
										
										
										 <li class="active"><a>1</a></li>

										
											<li class="disabled"><a href="javascript:;">»</a></li>
										
										
									</ul>
								</section>
							</div>
						
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



<script>try { function lpshowmenudiv(id) { closelpmenus(id); var div = document.getElementById('lppopup' + id); var btn = document.getElementById('lp' + id); if (btn && div) { var btnstyle = window.getComputedStyle(btn, null); var divstyle = window.getComputedStyle(div, null); var posx = btn.offsetLeft; posx -= 80; var divwidth = parseInt(divstyle.getPropertyValue('width')); if (posx + divwidth > window.innerWidth - 25) { posx -= ((posx + divwidth) - window.innerWidth + 25); } div.style.left = posx + "px"; div.style.top = (btn.offsetTop + parseInt(btnstyle.getPropertyValue('height'))) + "px"; if (div.style.display == 'block') { div.style.display = 'none'; if (typeof (slideup) == 'function') { slideup(); } } else div.style.display = 'block'; } } function closelpmenus(id) { if (typeof (lpgblmenus) != 'undefined') { for (var i = 0; i < lpgblmenus.length; i++) { if ((id == null || lpgblmenus[i] != 'lppopup' + id) && document.getElementById(lpgblmenus[i])) document.getElementById(lpgblmenus[i]).style.display = 'none'; } } } var lpcustomEvent = document.createEvent('Event'); lpcustomEvent.initEvent('lpCustomEventMenu', true, true); } catch (e) { }</script><script>    try { if (typeof (lpgblmenus) == 'undefined') { lpgblmenus = new Array(); } lpgblmenus[lpgblmenus.length] = 'lppopupnever'; } catch (e) { }</script><script>    try { document.addEventListener('mouseup', function (e) { if (typeof (closelpmenus) == 'function') { closelpmenus(); } }, false) } catch (e) { }</script></body></html>