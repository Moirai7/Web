<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="User_History.aspx.cs" Inherits="Web.User.User_History" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <!-- #Include virtual="/Common/header.html" -->
</head>
<body>
    <!-- #Include virtual="/Common/user_menu.html" -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section id="middle">
                    <h2 class="h2-tab">
                        <a href="User_Challenge.aspx">我接受的挑战</a>
                    </h2>
                    <h2 class="h2-tab">
                        <a href="User_History.aspx" class="off">挑战历史</a>
                    </h2>
                </section>
            </div>
            <div class="col-md-12 col-no-left-padding">
                <section id="Section2" class="col-md-12">
                    <div class="btn-group">
                        <a class="btn btn-default dropdown-toggle btn-demo-space top-search" data-toggle="dropdown" href="User_Challenge.aspx">全部 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="User_History.aspx?flag=0&reustate=-1">全部</a></li>
                            <li><a href="User_History.aspx?flag=0&reustate=0">未完成的挑战</a></li>
                            <li><a href="User_History.aspx?flag=0&reustate=1">通过的挑战</a></li>
                            <li><a href="User_History.aspx?flag=0&reustate=2">不通过的挑战</a></li>
                        </ul>
                    </div>
                </section>
                <asp:Repeater ID="rpt_Challenge" runat="server">
                    <ItemTemplate>
                        <div class="col-md-3">
                            <section id="Section3">
                                <div class="panel panel-default shadow-effect">
                                    <div class="col-xs-12 panel-header">
                                        <div class="pull-left">
                                            <h4 class="line-control">
                                                    <a href="Challenge.aspx?cid=<%# Eval("Challenge_ID")%>"><%# Eval("Challenge_Name")%>
                                                    </a>
                                                </h4>
                                                <h4 class="line-control">
                                                    <a href="User_Corp_Detail.aspx?cid=<%# Eval("Enterprice_ID")%>"><%# Eval("Enterprice_FullName")%>
                                                    </a>
                                                </h4>
                                        </div>
                                        <div class="pull-right client-info">
                                            <span class="percent text-danger">
                                                <img class="img-circle" style="width: 60px; height: 60px" src="<%# Eval("Enterprice_Logo")%>"></span>
                                        </div>
                                    </div>
                                    <div class="panel-body ">
                                        <ul class="list-unstyled">
                                            <li>月薪：<%# Eval("Challenge_Salary")%></li>
                                            <li>职位诱惑：</li>
                                            <li>
                                                <ul class="companyTags">
                                                    <li><%# Eval("Challenge_Position0")%></li>
                                                    <li><%# Eval("Challenge_Position1")%></li>
                                                    <li><%# Eval("Challenge_Position2")%></li>
                                                </ul>
                                            </li>
                                            <li>挑战项目：</li>
                                            <li>
                                                <ul>
                                                    <li><%# Eval("Challenge_Quiz0")%></li>
                                                    <li><%# Eval("Challenge_Quiz1")%></li>
                                                    <li><%# Eval("Challenge_Quiz2")%></li>
                                                </ul>
                                            </li>
                                            <li>难度：<%# Eval("Challenge_Level")%></li>
                                            <li><i class="fa fa-calendar"></i><%# Eval("Challenge_EnTime")%></li>
                                            <li><i class="fa fa-user"></i><%# Eval("Challenge_Num")%>人已接受挑战</li>
                                            <li class="progress-info"><span class="ongoing">
                                                <br>
                                            </span></li>
                                        </ul>
                                    </div>
                                    <!-- /.panel-body -->
                                    <div class="panel-footer align-center">
                                        <a style="color: white" href="javascript:;"
                                            class="btn btn-primary">挑战通过</a>
                                        <a style="color: white" href="javascript:;"
                                            class="btn btn-primary">挑战不通过</a>
                                    </div>
                                    <!-- /.panel-footer -->
                                </div>
                            </section>
                        </div>

                    </ItemTemplate>
                </asp:Repeater>
            </div>
            <div class="col-md-12">
                <section id="Section3">
                    <ul class="pagination">
                        <li class="disabled"><a href="javascript:;">«</a></li>
                        <li class="active"><a>1</a></li>
                        <li class="disabled"><a href="javascript:;">»</a></li>
                    </ul>
                </section>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- #Include virtual="/Common/footer.html" -->
</body>
</html>
