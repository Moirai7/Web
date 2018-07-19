<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="User_Center.aspx.cs" Inherits="Web.User.User_Center" %>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>猿圈 用户个人中心</title>
 <!-- #Include virtual="/Common/header.html" -->
</head>

<body>
	<!-- 引入header -->
	<!-- #Include virtual="/Common/user_menu.html" -->

	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<section id="middle">
					<div class="panel panel-default resume-block">
						<div>
							<!-- <h4>Level 1 菜鸟</h4> -->
						</div>
						<div class="panel-body shadow-effect">
							<div>
								<!-- <h3><i class="fa fa-money"></i> 我的身价</h3> -->
								<span style="padding: 10px; background-color: #3872a4; margin: 0px 0 0 -15px; color: #fff;">编程综合表现</span>
								<dl class="dl-horizontal">
									<!-- 									<dt>数据分析图</dt> -->
									<dd>
										<canvas id="myChart" width="400" height="400" style="width: 400px; height: 400px;"></canvas>
										<span class="help-block small">红色的点是使用猿圈用户的平均值，蓝色的是用户的数值。</span>
									</dd>
									<!-- <dd class="text-muted">灰色的点是使用猿圈用户的平均值，蓝色的是用户的数值</dd> -->
								</dl>
								<dl class="dl-horizontal">
									<dt>职业素质评价</dt>
									<dd>
										<span class="pull-center label label-primary">0.0 </span> <span style="margin-left: 10px" class="label label-primary">战胜了
											
																		0
																	  %的人
										</span> <span class="help-block small">此项为用户综合能力评分。</span>
									</dd>
								</dl>
								<dl class="dl-horizontal">
									<dt>编程熟练度</dt>
									<!-- <dd>这里显示和代码敲击速度相关的数据，以及该项评价</dd> -->
									<dd>
										<span class="pull-middle label label-info">0.0 </span><span style="margin-left: 10px" class="label label-info">战胜了 
																		0
																	  %的人
										</span> <span class="help-block small">此项是对于用户编程速度快慢的综合评价。</span>
									</dd>
								</dl>
								<dl class="dl-horizontal">
									<dt>编程专注值</dt>
									<!-- <dd>这里显示和 项目耗费时长/项目跨越长度/平均学习时长 综合分析后的相关数据，以及该项评价</dd> -->
									<dd>
										<span class="pull-middle label label-primary">0.0 </span><span style="margin-left: 10px" class="label label-primary">战胜了
											
																		0
																	  %的人
										</span> <span class="help-block small">此项是对于项目耗费时长/项目跨越长度/平均学习时长综合分析后的相关数据。</span>
									</dd>
								</dl>
								<dl class="dl-horizontal">
									<dt>偏差值</dt>
									<!-- <dd>这里显示和用户出错相关的数据（可能涉及与其他用户的出错率的比较），以及该项评价</dd> -->
									<dd>
										<span class="pull-middle label label-warning">3.14 </span> <span style="margin-left: 10px" class="label label-warning">战胜了
											 
												47.45
											 %的人
										</span> <span class="help-block small">此项是对于用户编程过程中的出错频率的统计分析数据。


										</span>

									</dd>



								</dl>
								<dl class="dl-horizontal">
									<dt>宅指数</dt>
									<!-- <dd>这里显示和ip地址切换频繁程度相关的数据，以及该项的评价</dd> -->
									<dd>
										<span class="pull-center label label-success">1.82 </span><span style="margin-left: 10px" class="label label-success">战胜了  
												17.16
											 %的人
										</span> <span class="help-block small">此项是用户“宅”在网站上的频繁程度。</span>
									</dd>
								</dl>


							</div>
						</div>
				</div></section>
			</div>
			<div class="col-md-3">
				<section id="middle">
					<div class="panel-body shadow-effect">
						<!-- <h3><i class="fa fa-money"></i> 我的身价</h3> -->
						<span style="padding: 10px; background-color: #3872a4; margin: 0px 0 0 -15px; color: #fff;">我的身价</span>
						<div class="align-center">
							<h1 style="color: #3872a4; font-size: 48px;">
								<%=user0[4] %>
							</h1>
						</div>
						<span class="label label-warning"><%=user0[3] %></span>
						<p class="help-block">
							菜鸟：你在老大的指导下学习技能知识，做一些简单的模块，copy和paste是你的好伙伴。正在快速的成长入门。
						</p>
						<!-- <p>网站排名：8765</p> -->
					</div>
					<div class="panel-body shadow-effect" style="margin-top: 20px;">

						<!-- <h3><i class="fa fa-money"></i> 我的身价</h3> -->
						<span style="padding: 10px; background-color: #3872a4; margin: 0px 0 0 -15px; color: #fff;">绑定信息</span>
						<p></p>
						<div class="col-md-4 center">
							
							
								<a href="http://www.oxcoder.com/user-resume.action#" id="sina" title="新浪微博" class="img-show"> <img src="../Public/Images/sina2.png">
								</a>
							
							
							
								<div class="img-hide">
									<a target="_blank" href="https://api.weibo.com/oauth2/authorize?client_id=3064453059&response_type=code&forcelogin=true&redirect_uri=http://www.oxcoder.com/auth-sina.action">绑定</a>

								</div>
							
							<p class="text-muted">微博</p>
						</div>
						<div class="col-md-4 center">
							
							
								<a href="http://www.oxcoder.com/user-resume.action#" id="github" title="github" class="img-show"><img src="../Public/Images/github2.png"></a>
							
							
							
								<div class="img-hide">
									<!-- 																	本地						  d1ca074d5dcc05ce594e -->
<!-- 									<a -->
<!-- 										href="https://github.com/login/oauth/authorize?client_id=d1ca074d5dcc05ce594e&redirect_uri=http://localhost:8080/Training/auth-github.action" -->
<!-- 										target="_blank">绑定</a> -->
										 <a href="https://github.com/login/oauth/authorize?client_id=cb26d4b4731db53e8a90&redirect_uri=http://www.oxcoder.com/auth-github.action" target="_blank">绑定</a>
								</div>
							
							<p class="text-muted text-center">Github</p>
						</div>
						
<!-- 						<div class="col-md-4 center"> -->
<!-- 							<img src="img/github2.png"></a> -->
<!-- 							<p class="text-muted text-center">暂未开放</p> -->
<!-- 						</div> -->
						<div class="col-md-4 center">
							<!-- 							<a href="#" id="zhihu" class="img-show" target="_blank"> -->
							<img src="../Public/Images/zhihu2.png">
							<!-- 								</a> -->
							<!-- 							<div class="img-hide"> -->
							<!-- 								<a href="">绑定</a> -->
							<p class="text-muted text-center">暂未开放</p>
						</div>
						<div class="col-md-4 center">
							<!-- <a href="#" id="quora" class="img-show"> -->
							<img src="../Public/Images/quora2.png">
							<!-- </a> -->
							<!-- <div class="img-hide">
								<a href="#">绑定</a>
							</div> -->
							<p class="text-muted text-center">暂未开放</p>
						</div>

						<div class="col-md-4 center">
							<!-- <a href="#" id="stackoverflow" class="img-show"> -->
							<img src="../Public/Images/stackoverflow2.png">
							<!-- </a> -->
							<!-- <div class="img-hide">
								<a href="#">绑定</a>
							</div> -->
							<p class="text-muted text-center">暂未开放</p>
						</div>
						<div class="col-md-4 center">
							<!-- <a href="#" id="sf" class="img-show"> -->
							<img src="../Public/Images/sf2.png">
							<!-- </a> -->
							<!-- <div class="img-hide">
								<a href="#">绑定</a>
							</div> -->
							<p class="text-muted text-center">暂未开放</p>
						</div>
						<div class="col-md-4 center">
							<!-- <a href="#" id="csdn" class="img-show"> -->
							<img src="../Public/Images/csdn2.png">
							<!-- </a> -->
							<!-- <div class="img-hide">
								<a href="#">绑定</a>
							</div> -->
							<p class="text-muted text-center">暂未开放</p>
						</div>
					</div>
					<!-- /.panel-body -->
					<div class="panel-body shadow-effect" style="margin-top: 20px;">

						<!-- <h3><i class="fa fa-money"></i> 我的身价</h3> -->
						<span style="padding: 10px; background-color: #3872a4; margin: 0px 0 0 -15px; color: #fff;">基本资料</span>
						<h3>
							<%=user0[1] %>
						</h3>
						<p>
							<span class="resume-label">性别:<%=user0[8] %>
								
							</span><span class="resume-label">年龄:<%=user0[6] %>
							</span>
						</p>
						<p>
							<span class="resume-label">手机:<%=user0[5] %></span>
						</p>
						<p>
							<span class="resume-label">邮箱:<%=user0[7] %></span>
						</p>
						<p class="pull-right">
							<a href="User_Info.aspx" class="resume-action">编辑</a>
						</p>
					</div>
					<!-- /.panel-body -->


				</section>
			</div>



		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->


	<form>
		<input id="speedOfAll" name="speedOfAll" type="hidden" value="7.81" runat="server"/> 
        <input id="manitoOfAll" name="manitoOfAll" type="hidden" value="2.2" runat="server"/> 
        <input id="errorOfAll" name="errorOfAll" type="hidden" value="5.27" runat="server"/> 
        <input id="timeOfAll" name="timeOfAll" type="hidden" value="2.58" runat="server"/> 
        <input id="speed" name="speed" type="hidden" value="0.0" runat="server"/> 
        <input id="manito" name="manito" type="hidden" value="0.0" runat="server"/> 
        <input id="error" name="error" type="hidden" value="0.0" runat="server"/> 
        <input id="time" name="time" type="hidden" value="0.0" runat="server"/>
	</form>

	

	<!-- Chart.js  -->
	<script src="../Public/JS/Chart.js"></script>

	<script>
	    $(document).ready(
				function () {
				    //Get the context of the canvas element we want to select
				    var ctx = document.getElementById("myChart").getContext(
							"2d");
				    var data = {
				        labels: ["编程熟练度", "编程专注值", "偏差值", "宅指数"],
				        datasets: [
								{
								    fillColor: "rgba(220,0,0,0.5)",
								    strokeColor: "rgba(220,220,220,1)",
								    pointColor: "rgba(220,10,10,1)",
								    pointStrokeColor: "#fff",
								    data: [$("#speedOfAll").val(),
											$("#manitoOfAll").val(),
											$("#errorOfAll").val(),
											$("#timeOfAll").val()]
								},
								{
								    fillColor: "rgba(0,0,220,0.5)",
								    strokeColor: "rgba(151,187,205,1)",
								    pointColor: "rgba(100,100,205,9)",
								    pointStrokeColor: "#fff",
								    data: [$("#speed").val(),
											$("#manito").val(),
											$("#error").val(),
											$("#time").val()]
								}]
				    };
				    var options = {

				        //Boolean - If we show the scale above the chart data			
				        scaleOverlay: false,

				        //Boolean - If we want to override with a hard coded scale
				        scaleOverride: false,

				        //** Required if scaleOverride is true **
				        //Number - The number of steps in a hard coded scale
				        scaleSteps: null,
				        //Number - The value jump in the hard coded scale
				        scaleStepWidth: null,
				        //Number - The centre starting value
				        scaleStartValue: null,

				        //Boolean - Whether to show lines for each scale point
				        scaleShowLine: true,

				        //String - Colour of the scale line	
				        scaleLineColor: "rgba(0,0,0,.1)",

				        //Number - Pixel width of the scale line	
				        scaleLineWidth: 1,

				        //Boolean - Whether to show labels on the scale	
				        scaleShowLabels: false,

				        //Interpolated JS string - can access value

				        //String - Scale label font declaration for the scale label
				        scaleFontFamily: "'Arial'",

				        //Number - Scale label font size in pixels	
				        scaleFontSize: 12,

				        //String - Scale label font weight style	
				        scaleFontStyle: "normal",

				        //String - Scale label font colour	
				        scaleFontColor: "#666",

				        //Boolean - Show a backdrop to the scale label
				        scaleShowLabelBackdrop: true,

				        //String - The colour of the label backdrop	
				        scaleBackdropColor: "rgba(255,255,255,0.75)",

				        //Number - The backdrop padding above & below the label in pixels
				        scaleBackdropPaddingY: 2,

				        //Number - The backdrop padding to the side of the label in pixels	
				        scaleBackdropPaddingX: 2,

				        //Boolean - Whether we show the angle lines out of the radar
				        angleShowLineOut: true,

				        //String - Colour of the angle line
				        angleLineColor: "rgba(0,0,0,.1)",

				        //Number - Pixel width of the angle line
				        angleLineWidth: 1,

				        //String - Point label font declaration
				        pointLabelFontFamily: "'Arial'",

				        //String - Point label font weight
				        pointLabelFontStyle: "normal",

				        //Number - Point label font size in pixels	
				        pointLabelFontSize: 12,

				        //String - Point label font colour	
				        pointLabelFontColor: "#666",

				        //Boolean - Whether to show a dot for each point
				        pointDot: true,

				        //Number - Radius of each point dot in pixels
				        pointDotRadius: 3,

				        //Number - Pixel width of point dot stroke
				        pointDotStrokeWidth: 1,

				        //Boolean - Whether to show a stroke for datasets
				        datasetStroke: true,

				        //Number - Pixel width of dataset stroke
				        datasetStrokeWidth: 2,

				        //Boolean - Whether to fill the dataset with a colour
				        datasetFill: true,

				        //Boolean - Whether to animate the chart
				        animation: true,

				        //Number - Number of animation steps
				        animationSteps: 60,

				        //String - Animation easing effect
				        animationEasing: "easeOutQuart",

				        //Function - Fires when the animation is complete
				        onAnimationComplete: null

				    };
				    new Chart(ctx).Radar(data, options);
				});
	</script>
	<!-- 引入footer -->
    <!-- #Include virtual="/Common/footer.html" -->
</body>
</html>