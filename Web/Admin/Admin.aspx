<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Admin.aspx.cs" Inherits="Web.Admin.Admin" %>

<!DOCTYPE html>
<!-- saved from url=(0045)http://www.oxcoder.com/hr-payment-info.action -->
<html lang="en"><head>
<!-- #Include virtual="/Common/header.html" -->
</body>
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
	<li class="sil"><a href="Admin.html">个人用户管理<span class="hover"></span></a></li>
    <li class="sil"><a href="Admin_Enterprise.html">企业用户管理<span class="hover"></span></a>
	</li>
    <li class="sil"><a href="Admin_Enterprise_Check.html">企业入驻审批<span class="hover"></span></a>
    </li>
  </ul>
  <h1>挑战管理</h1>
    <ul>
	<li class="sil"><a href="Admin_Challenge.html">挑战信息管理<span class="hover"></span></a></li>
    <li class="sil"><a href="Admin_Challenge_Item.html">挑战题目管理<span class="hover"></span></a>
	</li>
  </ul>
  <h1>练习场管理</h1>
    <ul>
	<li class="sil"><a href="Admin_Exercise.html">练习场题目管理<span class="hover"></span></a></li>
  </ul>
  <h1>收入</h1>
    <ul>
	<li class="sil"><a href="Admin_Revenue.html">收入管理<span class="hover"></span></a></li>
  </ul>
  <h1>通知</h1>
    <ul>
	<li class="sil"><a href="Admin_Notice.html">通知管理<span class="hover"></span></a></li>
  </ul>
  <h1>管理员</h1>
    <ul>
	<li class="sil"><a href="Admin_Col.html">管理员管理<span class="hover"></span></a></li>
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
   <td><%# Eval("User_Sex_Name")%></td> 
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