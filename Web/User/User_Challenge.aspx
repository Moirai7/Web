<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="User_Challenge.aspx.cs" Inherits="Web.User.User_Challenge" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>猿圈 挑战主页</title>
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
                <section id="Section1" class="col-md-12">
                    <div class="btn-group">
                        <a class="btn btn-default dropdown-toggle btn-demo-space top-search" data-toggle="dropdown" href="User_Challenge.aspx">全部 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="User_Challenge.aspx?flag=underway&reustate=all">全部</a></li>
                            <li><a href="User_Challenge.aspx?flag=underway&reustate=unfinished">未完成的挑战</a></li>
                            <li><a href="User_Challenge.aspx?flag=underway&reustate=passed">通过的挑战</a></li>
                            <li><a href="User_Challenge.aspx?flag=underway&reustate=failed">不通过的挑战</a></li>
                        </ul>
                    </div>
                </section>
                <asp:Repeater ID="rpt_Challenge" runat="server">
			    <ItemTemplate>
                <div class="col-md-3">
                    <section id="Section2">
                        <div class="panel panel-default shadow-effect">
                            <div class="col-xs-12 panel-header">
                                <div class="pull-left">
                                    <h4 class="line-control">
                                        <a href="Challenge.aspx?reid=983">[中级]php工程师
												</a>
                                    </h4>
                                    <h4 class="line-control">
                                        <a href="User_Corp_Detail.aspx?cid=960">融果金融
													
												</a>
                                    </h4>
                                </div>
                                <div class="pull-right client-info">
                                    <span class="percent text-danger">
                                        <img class="img-circle" style="width: 60px; height: 60px" src="../Public/Images/960.png"></span>
                                </div>
                            </div>
                            <div class="panel-body ">
                                <ul class="list-unstyled">
                                    <li>月薪： 
												  
													8k~10k
												   
											</li>
                                    <li>职位诱惑：</li>
                                    <li>
                                        <ul class="companyTags">
                                            <li>五险一金</li>
                                            <li>股份期权</li>
                                            <li>绩效奖金</li>
                                        </ul>
                                    </li>
                                    <li>挑战项目：</li>
                                    <li>
                                        <ul>
                                            <li>php数组排序 </li>

                                            <li>快速排序 </li>

                                            <li>冒泡排序php </li>

                                        </ul>
                                    </li>
                                    <li>难度： 
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-calendar"></i>2015-04-30~2015-05-30</li>
                                    <li><i class="fa fa-user"></i>6人已接受挑战</li>
                                    <li class="progress-info"><span class="ongoing">
                                        <br>
                                    </span></li>
                                </ul>
                            </div>
                            <!-- /.panel-body -->
                            <div class="panel-footer align-center">
                                <a href="Challenge.aspx?cid=112">
                                    <button class="btn btn-new1">开始挑战</button></a>
                                <a href="User_Challenge.aspx?delete=112" class="btn btn-new2">放弃</a>
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
    <!-- /.container -->
    <!-- #Include virtual="/Common/footer.html" -->
</body>
</html>
