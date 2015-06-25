<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Forgot_Password_Sub.aspx.cs" Inherits="Web.Common.Forgot_Password_Sub" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>猿圈 找回密码</title>
<!-- Bootstrap core CSS -->
        <link href="http://www.oxcoder.com/bootstrap/css/bootstrap.min.css?v=3.1.1" rel="stylesheet"/>

        <!-- Font Awesome CSS -->
        <link href="http://www.oxcoder.com/fonts/font-awesome/css/font-awesome.min.css?v=4.0.3" rel="stylesheet"/>

        <!-- Bootstrap Switch -->
        <link href="http://www.oxcoder.com/css/libs/bootstrap-switch.min.css?v=3.0.0" rel="stylesheet"/>

        <!-- Bootstrap Select -->
        <link href="http://www.oxcoder.com/css/libs/bootstrap-select.min.css" rel="stylesheet"/>

        <!-- IcoMoon CSS -->
        <link href="http://www.oxcoder.com/fonts/icomoon/style.css?v=1.0" rel="stylesheet"/>

        

        <!-- Summernote -->
        <link href="http://www.oxcoder.com/css/libs/summernote.css" rel="stylesheet"/>
        <link href="http://www.oxcoder.com/css/libs/summernote-bs3.css" rel="stylesheet"/>

        <!-- Custom styles for this template -->
        <link href="../Public/CSS/style.css" rel="stylesheet" type="text/css"/>

        <!-- Max css -->
        <link href="../Public/CSS/style_new.css" rel="stylesheet" type="text/css"/>
        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>

    <body style="">          

<!-- 引入header -->


<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand hidden-sm" href="index.html" style="padding: 0;"><img src="../Public/Images/wlogo_sm.png" style="max-height: 35px; margin: 7px;"/></a>
		</div>
		<div class="navbar-collapse collapse" role="navigation">
			<ul class="nav navbar-nav">
				<li><a href="http://www.oxcoder.com/index.action?pageflag=user">开发者</a></li>
				<li><a href="http://www.oxcoder.com/index.action?pageflag=cooper">企业</a></li>
				<li><a href="http://www.oxcoder.com/oxcoder-customers.action">客户案例</a></li>
				<li><a href="http://www.oxcoder.com/oxcoder-reports.action">媒体报道</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="Login.aspx">登录</a></li>
				<li><a href="Register.aspx">注册</a></li>
			</ul>
		</div>
	</div>
</div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-push-3 col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2">
                    <div id="content">
                        <div class="row">
                            

                            <div class="form-group form-actions">
                                <h3 class="grey">密码找回</h3>
                                <span class="help-block">
						重置密码的验证邮件已经发送，请登录邮箱按照步骤操作。你还可以选择<a href="Login.aspx" style="color: #0f83b5">登录</a>或<a style="color: #0f83b5" href="index.html">返回首页</a></span>
                            </div>

                        </div><!-- /.row -->
                    </div>
                </div>
                

                
            </div><!-- /.row -->
        </div><!-- /.container -->
        
       
	<!-- jQuery -->
	<script src="../Public/JS/jquery-1.11.0.min.js"></script>

	<!-- Bootstrap core JavaScript -->
	<script src="../Public/JS/bootstrap.min.js"></script>

	<!-- Bootstrap Switch -->
	<script src="../Public/JS/bootstrap-switch.min.js"></script>

	<!-- Bootstrap Select -->
	<script src="../Public/JS/bootstrap-select.min.js"></script>

	<!-- Bootstrap File -->
	<script src="../Public/JS/bootstrap-filestyle.js"></script>

	<!-- Sparkline -->
	<script src="../Public/JS/jquery.sparkline.min.js"></script>

	<!-- Summernote -->
	<script src="../Public/JS/summernote.min.js"></script>


	<!-- Theme script -->
	<script src="../Public/JS/script.js"></script>

	<script src="../Public/JS/bootstrapValidator.js"></script>
         <!-- 引入footer -->

    <div class="afooter navbar-fixed-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    © 2015 oxcoder.com <a href="http://www.oxcoder.com/contact-us.action">联系我们</a> <a href="http://jq.qq.com/?_wv=1027&k=eeKvVb" target="_blank">QQ交流群:77590762</a> <a href="http://www.mikecrm.com/f.php?t=7GdYKp" target="_blank">意见反馈</a> <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253509620'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s23.cnzz.com/z_stat.php%3Fid%3D1253509620%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script><span id="cnzz_stat_icon_1253509620"><a href="http://www.cnzz.com/stat/website.php?web_id=1253509620" target="_blank" title="站长统计"><img border="0" hspace="0" vspace="0" src="./猿圈 找回密码1_files/pic.gif"></a></span><script src="./猿圈 找回密码1_files/z_stat.php" type="text/javascript"></script><script src="./猿圈 找回密码1_files/core.php" charset="utf-8" type="text/javascript"></script>
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

    
</body></html>
