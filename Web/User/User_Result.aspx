<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="User_Result.aspx.cs" Inherits="Web.User.User_Result" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>挑战结果</title>
<!-- #Include virtual="/Common/header.html" -->
</head>
<body>
    <!-- #Include virtual="/Common/user_menu.html" -->
    <div class="container">
		<div class="row">
			<div class="col-md-12">
				<section>
                <asp:Repeater ID="rpt_Challenge" runat="server">
                    <ItemTemplate>
					<div id="content">
						<div class="row">
							<div class="col-md-12">
								<div class="container-fluid">
									<section>
										<div class="page-header">
											<h2>
												<%# Eval("Challenge_Name")%>
												（<%# Eval("Enterprice_FullName")%>）挑战结果
											</h2>
											<div class="col-md-2">
													<img src="<%# Eval("Enterprice_Logo")%>">
											</div>
											<div class="col-md-10">
												<h4 style="color: #3872a4;">
													当前身价￥<%# Eval("User_Price")%>
												</h4>
												<span class="label label-warning">Lv.<%# Eval("User_Level")%></span>

											</div>
											<div class="bdsharebuttonbox bdshare-button-style1-24" data-bd-bind="1434945854012">
												<a href="" class="bds_more" data-cmd="more"></a><a href="" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="http://www.oxcoder.com/user-challenge-result.action?reid=1364#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
											</div>
											<script>
											    window._bd_share_config = {
											        "common": {
											            "bdSnsKey": {},
											            "bdText": "我在猿圈上完成了[初级]Java工程师挑战，挑战结果是通过。现在身价是7758元，级别是#大虾#：开始在指导下独立负责单独的模块，开始思考，协助解决部分问题，熟练的使用搜索引擎，努力加油呦~。",
											            "bdMini": "2",
											            "bdMiniList": false,
											            "bdPic": "http://www.oxcoder.com/img/indexpic.png",
											            "bdStyle": "1",
											            "bdSize": "24"
											        },
											        "share": {},
											        "selectShare": {
											            "bdContainerClass": null,
											            "bdSelectMiniList": [
																"qzone",
																"tsina",
																"renren"]
											        }
											    };
											    with (document)
											        0[(getElementsByTagName('head')[0] || body)
															.appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='
															+ ~(-new Date() / 36e5)];
											</script>

											<hr>
											
												<h2>您的答题结果：</h2>
												
													<li class="btn btn-alt btn-primary" style="margin-right: 15px;"><%# Eval("Test_Quiz0")%></li>
												    <li class="btn btn-alt btn-primary" style="margin-right: 15px;"><%# Eval("Test_Quiz1")%></li>
											        <li class="btn btn-alt btn-primary" style="margin-right: 15px;"><%# Eval("Test_Quiz2")%></li>
											
										</div>
										
												<h2>推荐给您的学习资料</h2>
												
													<div class="alert alert-info" style="text-align: center" role="alert">还没有相关资料，敬请期待~</div>
												
												
										
										
										<br>
										<a href="User_Challenge.aspx"><button class="btn btn-new1 btn-lg">回到挑战列表</button></a>

									</section>
								</div>

							</div>

						</div>
						<!-- /.row -->
					</div>
					<!-- /#content -->
                    </ItemTemplate>
                </asp:Repeater>
				</section>
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
     <!-- #Include virtual="/Common/footer.html" -->
</body>
</html>
