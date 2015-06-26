<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Buy.aspx.cs" Inherits="Web.Enterprise.Buy" %>
<!DOCTYPE html>
<!-- saved from url=(0048)http://www.oxcoder.com/sub-payment-choose.action -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="BootstrapStyler">

        <title>猿圈 企业充值</title>

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
        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>

    <body style="">          

    <!-- 引入header -->
	 <!--#include virtual="/Common/Enterprise_menu.html"-->
<script type="text/javascript">
    function validateSession() {
        var k = 2
        if (k == null) {
            location.replace("session-timeout-log.action");
        }
    }
</script>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-push-3 col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2">
                    <div id="content">
                        <div class="row">
                            <div class="form-group form-actions">
                                <div id="orderDetail" runat="server">
                            	<input id="payment-url" type="hidden" value="https://mapi.alipay.com/gateway.do?_input_charset=utf-8&amp;body=套餐二&amp;logistics_fee=0.00&amp;logistics_payment=SELLER_PAY&amp;logistics_type=EXPRESS&amp;notify_url=http://www.oxcoder.com/hr-payment-notify.action&amp;out_trade_no=1432099044245&amp;partner=2088002081390452&amp;payment_type=1&amp;price=1900&amp;quantity=1&amp;receive_address=oxcoder&amp;receive_mobile=13312341234&amp;receive_name=oxcoder&amp;receive_phone=0571-88158090&amp;receive_zip=100044&amp;return_url=http://www.oxcoder.com/hr-payment-return.action&amp;seller_email=daneiku@yahoo.com.cn&amp;service=create_partner_trade_by_buyer&amp;show_url=http://www.oxcoder.com/sub-payment-choose.action?type=4&amp;sign=63583c7ff3fbd64a649f8f94950d0b28&amp;sign_type=MD5&amp;subject=套餐一">
                                <h2 class="grey">感谢您购买oxcoder套餐4</h2>
                                <p>商品详情：
                                
                                
                                80个邀请+4个挑战
                                
                                </p>
                                <p>应付金额：1900元</p>
                                <span class="help-block"><a class="btn btn-primary" href="https://mapi.alipay.com/gateway.do?_input_charset=utf-8&body=%E5%A5%97%E9%A4%90%E4%BA%8C&logistics_fee=0.00&logistics_payment=SELLER_PAY&logistics_type=EXPRESS&notify_url=http://www.oxcoder.com/hr-payment-notify.action&out_trade_no=1432099044245&partner=2088002081390452&payment_type=1&price=1900&quantity=1&receive_address=oxcoder&receive_mobile=13312341234&receive_name=oxcoder&receive_phone=0571-88158090&receive_zip=100044&return_url=http://www.oxcoder.com/hr-payment-return.action&seller_email=daneiku@yahoo.com.cn&service=create_partner_trade_by_buyer&show_url=http://www.oxcoder.com/sub-payment-choose.action?type=4&sign=63583c7ff3fbd64a649f8f94950d0b28&sign_type=MD5&subject=%E5%A5%97%E9%A4%90%E4%B8%80">去付款</a></span>
                                </div>
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

        <!-- Sparkline -->
        <script src="../Public/JS/jquery.sparkline.min.js"></script>

        <!-- Bootstrap Switch -->
        <script src="../Public/JS/bootstrap-switch.min.js"></script>

        <!-- Bootstrap Select -->
        <script src="../Public/JS/bootstrap-select.min.js"></script>

        <!-- Bootstrap File -->
        <script src="../Public/JS/bootstrap-filestyle.js"></script>

        

        <!-- Summernote -->
        <script src="../Public/JS/summernote.min.js"></script>

        <!-- Theme script -->
        <script src="../Public/JS/script.js"></script>
<!-- 注册成功后自动跳转到填写个人信息页面 -->
<script type="text/javascript">
    /* 	$("document").ready(function(){
            setTimeout(locateToInfoPage, 500);
        });
        function locateToInfoPage(){
            location.replace($("#payment-url").val());
        } */
</script>
<!-- 引入footer -->
	

    <div class="afooter navbar-fixed-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    © 2015 oxcoder.com <a href="http://www.oxcoder.com/contact-us.action">联系我们</a> <a href="http://jq.qq.com/?_wv=1027&k=eeKvVb" target="_blank">QQ交流群:77590762</a> <a href="http://www.mikecrm.com/f.php?t=7GdYKp" target="_blank">意见反馈</a> <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://"); document.write(unescape("%3Cspan id='cnzz_stat_icon_1253509620'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s23.cnzz.com/z_stat.php%3Fid%3D1253509620%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script><span id="cnzz_stat_icon_1253509620"><a href="http://www.cnzz.com/stat/website.php?web_id=1253509620" target="_blank" title="站长统计"><img border="0" hspace="0" vspace="0" src="../Public/Images/pic.gif"></a></span><script src="../Public/JS/z_stat.php" type="text/javascript"></script><script src="../Public/JS/core.php" charset="utf-8" type="text/javascript"></script>
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