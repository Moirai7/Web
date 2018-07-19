<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="User_Corp_Detail.aspx.cs" Inherits="Web.User.User_Corp_Detail" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>猿圈 企业</title>
    <!-- #Include virtual="/Common/header.html" -->
</head>
<body>
    <!-- #Include virtual="/Common/user_menu.html" -->
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-no-left-padding">
                <section class="middle">
                    <h2 class="col-md-12">
                        <i class="fa  fa-th-large"></i>进行中的挑战
                    </h2>
                    <asp:Repeater ID="rpt_challenge" runat="server">
                        <ItemTemplate>
                            <div class="col-md-4">
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
                                            <a href="User_Challenge.aspx?add=<%# Eval("Challenge_ID")%>">
                                                <button class="btn btn-new1">接受挑战</button></a>
                                        </div>
                                        <!-- /.panel-footer -->
                                    </div>
                                </section>
                            </div>

                        </ItemTemplate>
                    </asp:Repeater>
                </section>
            </div>
            <asp:Repeater ID="rpt_corp" runat="server">
                <ItemTemplate>
                    <div class="col-md-3">
                        <section id="Section1">
                            <div class="panel panel-default resume-block">
                                <div class="panel-body">
                                    <h2 class="grey">
                                        <itemtemplate><img src="<%# Eval("Enterprice_Logo")%>" height="40px" width="40px;"></itemtemplate>
                                    </h2>
                                    <p>
                                        <itemtemplate><span class="resume-label"><%# Eval("Enterprice_FullName")%></span></itemtemplate>
                                    </p>
                                    <p>
                                        <itemtemplate><span class="resume-label">地点:<%# Eval("Enterprice_Location")%></span> <span class="resume-label">规模:<%# Eval("Enterprice_Scale")%>人</span></itemtemplate>
                                    </p>
                                    <p>
                                        <itemtemplate><span class="resume-label">公司网址:<a href="<%# Eval("Enterprice_Url")%>"></a></span></itemtemplate>
                                    </p>
                                    <ul class="companyTags">
                                    </ul>

                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <div class="panel panel-default resume-block">
                                <div class="panel-body">
                                    <h3>
                                        <i class="fa fa-align-left"></i>公司简介
                                    </h3>
                                    <itemtemplate><p>
                                            <%# Eval("Enterprice_Introduction")%>
                                        </p></itemtemplate>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                        </section>
                    </div>
                </ItemTemplate>
            </asp:Repeater>
            <div class="col-md-12">
                <section id="Section2">
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
