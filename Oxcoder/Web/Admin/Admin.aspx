<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Admin.aspx.cs" Inherits="Web.Admin.Admin" %>

<!DOCTYPE html>
<!-- saved from url=(0045)http://www.oxcoder.com/hr-payment-info.action -->
<html lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="BootstrapStyler">

<title>后台</title>

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
<link href="../Public/CSS/my_style.css" rel="stylesheet" type="text/css">
<link href="../Public/CSS/theme.min.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>

<body>
<div class="navbar navbar-default navbar-fixed-top" onload="validateSession()">

	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand hidden-sm" href="Index.html" style="padding: 0;"><img src="../Public/Images/wlogo_sm.png" style="max-height: 35px;margin:7px;"></a>
		</div>
		<div class="navbar-collapse collapse" role="navigation">
			<ul class="nav navbar-nav navbar-right">
				
				<li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><span class="text">admin</span> <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="/Common/Index.html">退出</a></li>
					</ul></li>
			</ul>
		</div>
	</div>
</div>
<div class="sidebar sting ">
  <h1>用户管理</h1>
    <ul>
	<li class="sil"><a href="Admin.aspx">个人用户管理<span class="hover"></span></a></li>
    <li class="sil"><a href="Admin_Enterprise.aspx">企业用户管理<span class="hover"></span></a>
	</li>
  </ul>
  <h1>挑战管理</h1>
    <ul>
	<li class="sil"><a href="Admin_Challenge.aspx">挑战信息管理<span class="hover"></span></a></li>
    <li class="sil"><a href="Admin_Challenge_Item.aspx">挑战题目管理<span class="hover"></span></a>
	</li>
  </ul>
</div>
<form class="J_ajaxForm form-search" method="post" action="/tyt/index.php?g=&amp;m=admin_post&amp;a=index"> 
<div class="search_type cc mb10"> 
<div class="mb10"> <span class="mr20">分类：
        <select class="select_2" name="term"> 
		<option value="0">全部</option> 
		<option value="3">1</option>
		<option value="4">2</option>
		<option value="5">3</option> 
		</select>
        &nbsp; &nbsp;关键字：
        <input type="text" class="input length_2" name="keyword" style="width:200px;" value="" placeholder="请输入关键字..."> <input type="submit" class="btn btn-primary" value="搜索"> </span> 
</div> 
</div> 
</form>
<form class="J_ajaxForm" action="" method="post"> 
<div class="table_list"> 
<table width="100%" class="table table-hover table-bordered"> 
<thead> 
 <tr> 
 <th width="50">ID</th>
 <th>姓名</th> 
 <th width="50">年龄</th>
 <th width="50">性别</th>
 <th width="50">手机</th>
 <th width="50">邮箱</th> 
 <th width="50">身价</th>
 <th width="50">级别</th>
 <th width="60">操作</th> 
 </tr> 
 </thead> 
 <tbody>
 <tr>
   <asp:Repeater ID="rpt_Challenge" runat="server">
                    <ItemTemplate><td><a><%# Eval("User_ID")%></a></td> 
   <td><span><%# Eval("User_Name")%></span></td> 
   <td><%# Eval("User_Age")%></td>
   <td><%# Eval("User_Sex")%></td> 
   <td><%# Eval("User_Phone")%></td> 
   <td><%# Eval("User_Email")%></td> 
   <td><%# Eval("User_Price")%></td> 
   <td><%# Eval("User_Level")%></td> 
   <td><a href="">屏蔽</a> |
		            	<a href="">详情</a>|
		            	<a href="" class="J_ajax_del">Rock</a> |
		            	<a href="" class="J_ajax_del">时间机器</a> 
	</td> </ItemTemplate>
                </asp:Repeater>
</tr> 
</tbody>
</table> 
<div class="pagination">&nbsp;<span class="current">1</span> <a href=""> 2</a> &nbsp;<a href="">下一页</a> <a href="">尾页</a> </div> </div> </form>

    <!-- #Include virtual="/Common/footer.html" -->
<script type="text/javascript">

    //如果页面内容高度小于屏幕高度，div#footer将绝对定位到屏幕底部，否则div#footer保留它的正常静态定位
    if (($(document.body).height() + 50) < $(window).height()) {
        $(".afooter").addClass("navbar-fixed-bottom");
    };
</script>



</body></html>