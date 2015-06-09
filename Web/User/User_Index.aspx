<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="User_Index.aspx.cs" Inherits="Web.User.User_Index" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>猿圈</title>
    <!-- #Include virtual="/Common/header.html" -->
</head>
<body>
    <!-- #Include virtual="/Common/user_menu.html" -->
    <!-- 轮播图 -->
    <div style="margin: -20px 0 20px 0;" id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="../Public/Images/code.png" alt="First slide"/>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>hire.through(code)</h1>
                        <h2>= 招到优秀程序员的最佳方式</h2>
                        <br/>
                        <p>让人才更快地脱颖而出，让企业做出更明智的招聘决策</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-no-left-padding col-md-offset-2">
                <section class="middle">
                    <div class="col-md-2 col-no-left-padding" style="margin-bottom: 10px;">
                        <select id="select-retype" class="form-control">
                            <option selected="" value="">技术方向</option>
                            <option value="1">Java</option>
                            <option value="2">Android</option>
                            <option value="3">iOS</option>
                            <option value="4">C语言</option>
                            <option value="5">C++</option>
                            <option value="6">php</option>
                            <option value="7">python</option>
                        </select>
                    </div>
                    <div class="col-md-2 col-no-left-padding" style="margin-bottom: 10px;">
                        <select id="select-salary" class="form-control">
                            <option selected="" value="">起始薪资</option>
                            <option value="1">2k~5k</option>
                            <option value="2">5k~8k</option>
                            <option value="3">8k~10k</option>
                            <option value="4">10k~12k</option>
                            <option value="5">12k~15k</option>
                            <option value="6">15k以上</option>
                        </select>
                    </div>
                    <div class="col-md-2 col-no-left-padding" style="margin-bottom: 10px;">
                        <select id="province" class="form-control">
                            <option value="">全部地区</option>
                            <option value="北京">北京</option>
                            <option value="天津">天津</option>
                            <option value="河北">河北</option>
                            <option value="山西">山西</option>
                            <option value="内蒙古">内蒙古</option>
                            <option value="辽宁">辽宁</option>
                            <option value="吉林">吉林</option>
                            <option value="黑龙江">黑龙江</option>
                            <option value="上海">上海</option>
                            <option value="江苏">江苏</option>
                            <option value="浙江">浙江</option>
                            <option value="安徽">安徽</option>
                            <option value="福建">福建</option>
                            <option value="江西">江西</option>
                            <option value="山东">山东</option>
                            <option value="河南">河南</option>
                            <option value="湖北">湖北</option>
                            <option value="湖南">湖南</option>
                            <option value="广东">广东</option>
                            <option value="广西">广西</option>
                            <option value="海南">海南</option>
                            <option value="重庆">重庆</option>
                            <option value="四川">四川</option>
                            <option value="贵州">贵州</option>
                            <option value="云南">云南</option>
                            <option value="西藏">西藏</option>
                            <option value="陕西">陕西</option>
                            <option value="甘肃">甘肃</option>
                            <option value="青海">青海</option>
                            <option value="宁夏">宁夏</option>
                            <option value="新疆">新疆</option>
                            <option value="台湾">台湾</option>
                            <option value="香港">香港</option>
                            <option value="澳门">澳门</option>
                            <option value="海外">海外</option>
                        </select>
                    </div>
                    <div style="col-md-6">
                        <form class="input-group" action="/User/User_Index.aspx" method="get">
                            <input name="salary" id="input-salary" type="hidden" value="">
                            <input name="province" id="input-province" type="hidden" value="">
                            <input name="retype" id="input-retype" type="hidden" value="">
                            <input name="flag" id="input-flag" type="hidden" value="">
                            <input name="location" id="input-selected-province" type="hidden" value="">
                            <input name="searchCondition" class="form-control" placeholder="请输入关键词，如公司名称等" value="">
                            <span class="input-group-btn">
                                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                            </span>
                        </form>
                    </div>
                </section>
            </div>
            <div class="col-md-4 col-no-left-padding col-md-offset-8" style="margin-top: 20px;">
                <section id="middle" style="margin-bottom: 20px;">
                    排序： <a href="User_Index.aspx?flag=3" class="btn btn-order" id="btn-order-on">时间</a> <a href="User_Index.aspx?flag=1" class="btn btn-order">热度</a> <a href="User_Index.aspx?flag=2" class="btn btn-order">薪资</a>
                </section>
                <!--  排序这边默认什么都不选。默认排序按推荐、热度、时间搞一个算法，推荐一直在最前
                    筛选地区那边默认为用户的期望工作地点 -->
            </div>
            <div class="row">
                <div id="content" class="col-md-12">

                    <div id="woo-holder">
                        <a name="woo-anchor"></a>
                        <ul id="switchholder">
                            <li class="woo-swa woo-cur"></li>
                            <!-- <li class="woo-swa"><a href="javascript:;">时间升序</a></li>
									<li class="woo-swa"><a href="javascript:;">工资降序</a></li> -->
                            <!-- <li class="woo-swa"><a href="javascript:;">顺序4</a></li> -->
                        </ul>
                        <div class="woo-swb woo-cur" style="display: block;">
                            <!-- data-totalunits is set here, then pager nums would be fixed -->
                            <!-- It would have been Hasnext Mode if you didn't do it -->
                            <div class="woo-tmpmasn woo-pcont woo-masned" style="position: relative; height: 0; overflow: hidden; margin: 0; padding: 0;"></div>
                            <div class="woo-pcont woo-masned" data-totalunits="600" style="position: relative; width: 1150px; height: 1368px; visibility: visible;">

								<asp:Repeater ID="rpt_Challenge" runat="server">
								<ItemTemplate>
                                <div class="col-xs-12 col-lg-3 col-md-4 woo co0" data-ht="456" data-idx="0" style="top: 0px; left: 0px;">
                                    <section id="Section1">
                                        <div class="panel panel-default shadow-effect">
                                            <div class="col-xs-12 panel-header">
                                                <div class="pull-left">
                                                    <h4 title="<%# Eval("Challenge_Name")%>" class="line-control"><%# Eval("Challenge_Name")%></h4>
                                                    <h4 title="<%# Eval("Enterprice_FullName")%>" class="line-control"><a href="User_Corp_Detail.aspx?cid=960"><%# Eval("Enterprice_FullName")%></a></h4>
                                                </div>
                                                <div class="pull-right client-info hidden-md">
                                                    <span class="percent text-danger">
                                                        <img class="img-circle" style="width: 60px; height: 60px" src="<%# Eval("Enterprice_Logo")%>"></span>
                                                </div>
                                                <span class="hot-tag">推荐</span>
                                            </div>
                                            <div class="panel-body ">
                                                <ul class="list-unstyled">
                                                    <li>月薪： <%# Eval("Challenge_Salary")%></li>
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
                            </div>
                        </div>
                        <!-- Woo holder over -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <!-- #Include virtual="/Common/footer.html" -->
</body>
</html>
