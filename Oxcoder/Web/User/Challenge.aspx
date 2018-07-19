<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Challenge.aspx.cs" Inherits="Web.User.Challenge" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>挑战</title>
    <!-- #Include virtual="/Common/header.html" -->
</head>
<body>
    <!-- #Include virtual="/Common/user_menu.html" -->
    <div class="container">
		<div class="row">

			<div class="col-md-12">
				<section>

					<div id="content">
						<div class="row">
							<div class="col-md-12">
								<div class="container-fluid">
									<section>
                                        <asp:Repeater ID="rpt_challenge" runat="server">
                                            <ItemTemplate>
                                                <div class="page-header" style="border-bottom: none;">
                                                    <h1><%# Eval("Challenge_Name")%>
												——
												<%# Eval("Enterprice_FullName")%>
                                                    </h1>
                                                    <div class="challenge-simple-desc">
                                                        <span class="desc-label">月薪：   
													<%# Eval("Challenge_Salary")%>
												   
                                                        </span><span class="desc-label">职位诱惑：
                                                            <%# Eval("Challenge_Position0")%>&nbsp;
                                                        <%# Eval("Challenge_Position1")%>&nbsp;
                                                        <%# Eval("Challenge_Position2")%>&nbsp;</span> 
                                                        <span class="desc-label">时间： <%# Eval("Challenge_EnTime")%>
                                                        </span><span class="desc-label"><%# Eval("Challenge_Num")%>人已接受挑战</span>
                                                        <p>
                                                        </p>
                                                    </div>
                                                </div>
                                            </ItemTemplate>
                                        </asp:Repeater>
										<!-- /.page-header -->
										<div id="Div1">
											<div class="row">
                                                <asp:Repeater ID="quiz1" runat="server">
                                                    <ItemTemplate>
                                                        <div class="col-md-4">
                                                            <div class="panel panel-default project">
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <div class="pull-left">
                                                                                <h4>
                                                                                    <a href="javascript:;"><%# Eval("Quiz_Name")%></a>
                                                                                </h4>
                                                                                <h5 class="text-muted"><%# Eval("Quiz_Content")%>
                                                                                </h5>
                                                                            </div>
                                                                            <div class="pull-right client-info"></div>
                                                                        </div>
                                                                        <!-- /.col-xs-12 -->
                                                                    </div>
                                                                    <!-- /.row -->
                                                                    <hr>
                                                                    <h4>开发能力</h4>
                                                                    <div class="well">
                                                                       <%#  Eval("Quiz_Content")%>
                                                                    </div>
                                                                </div>
                                                                <!-- /.panel-body -->
                                                                <div class="panel-footer">
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <span class="small muted">项目难度</span>
                                                                        </div>
                                                                        <!-- /.col-sm-4 -->
                                                                        <div class="col-sm-8">
                                                                            <p>
                                                                                <%#  Eval("Quiz_Level")%>
                                                                            </p>
                                                                        </div>
                                                                        <!-- /.col-sm-8 -->
                                                                    </div>
                                                                    <!-- /.row -->
                                                                </div>
                                                                <!-- /.panel-footer -->
                                                            </div>
                                                            <!-- /.panel -->
                                                        </div>
                                                    </ItemTemplate>
                                                </asp:Repeater>
                                                <asp:Repeater ID="quiz2" runat="server">
                                                    <ItemTemplate>
                                                        <div class="col-md-4">
                                                            <div class="panel panel-default project">
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <div class="pull-left">
                                                                                <h4>
                                                                                    <a href="javascript:;"><%# Eval("Quiz_Name")%></a>
                                                                                </h4>
                                                                                <h5 class="text-muted"><%# Eval("Quiz_Content")%>
                                                                                </h5>
                                                                            </div>
                                                                            <div class="pull-right client-info"></div>
                                                                        </div>
                                                                        <!-- /.col-xs-12 -->
                                                                    </div>
                                                                    <!-- /.row -->
                                                                    <hr>
                                                                    <h4>开发能力</h4>
                                                                    <div class="well">
                                                                       <%# Eval("Quiz_Content")%>
                                                                    </div>
                                                                </div>
                                                                <!-- /.panel-body -->
                                                                <div class="panel-footer">
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <span class="small muted">项目难度</span>
                                                                        </div>
                                                                        <!-- /.col-sm-4 -->
                                                                        <div class="col-sm-8">
                                                                            <p>
                                                                                <%#  Eval("Quiz_Level")%>
                                                                            </p>
                                                                        </div>
                                                                        <!-- /.col-sm-8 -->
                                                                    </div>
                                                                    <!-- /.row -->
                                                                </div>
                                                                <!-- /.panel-footer -->
                                                            </div>
                                                            <!-- /.panel -->
                                                        </div>
                                                    </ItemTemplate>
                                                </asp:Repeater>
                                                <asp:Repeater ID="quiz3" runat="server">
                                                    <ItemTemplate>
                                                        <div class="col-md-4">
                                                            <div class="panel panel-default project">
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <div class="pull-left">
                                                                                <h4>
                                                                                    <a href="javascript:;"><%# Eval("Quiz_Name")%></a>
                                                                                </h4>
                                                                                <h5 class="text-muted"><%# Eval("Quiz_Content")%>
                                                                                </h5>
                                                                            </div>
                                                                            <div class="pull-right client-info"></div>
                                                                        </div>
                                                                        <!-- /.col-xs-12 -->
                                                                    </div>
                                                                    <!-- /.row -->
                                                                    <hr>
                                                                    <h4>开发能力</h4>
                                                                    <div class="well">
                                                                       <%#  Eval("Quiz_Content")%>
                                                                    </div>
                                                                </div>
                                                                <!-- /.panel-body -->
                                                                <div class="panel-footer">
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <span class="small muted">项目难度</span>
                                                                        </div>
                                                                        <!-- /.col-sm-4 -->
                                                                        <div class="col-sm-8">
                                                                            <p>
                                                                                <%#  Eval("Quiz_Level")%>
                                                                            </p>
                                                                        </div>
                                                                        <!-- /.col-sm-8 -->
                                                                    </div>
                                                                    <!-- /.row -->
                                                                </div>
                                                                <!-- /.panel-footer -->
                                                            </div>
                                                            <!-- /.panel -->
                                                        </div>
                                                    </ItemTemplate>
                                                </asp:Repeater>
                                            </div>
										</div>
									</section>
								</div>
									<div style="text-align: center;" class="col-md-12">
										 <a id="btn-run-not-sub" href="User_Test.aspx?order=0&cid=<%#id %>"><button class="btn btn-new1">开始挑战</button></a>
									</div>
							</div>
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
    <!-- #Include virtual="/Common/footer.html" -->
</body>
</html>
