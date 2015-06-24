<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="FillEnterpriceInfo2.aspx.cs" Inherits="Web.Enterprice.FillEnterpriceInfo2" %>
<!DOCTYPE html>
<!-- saved from url=(0058)http://www.oxcoder.com/enterprise-info-change-step2.action -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="BootstrapStyler">

        <title>猿圈 企业完善企业信息</title>
    <!-- #Include virtual="/Common/header.html" -->
</head>

    <body style="">          

	<!-- 引入header -->
	<!-- #Include virtual="/Common/enterprice_menu.html" -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-push-3 col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2">
                    <div id="content">
                        <div class="row">
                            <img src="../Public/Images/corp_step2.png">
                            <div class="tag-group">
                            
                            	
                                <button type="button" class="btn btn-order" onclick="addTag('五险一金')">五险一金</button>
                            	<a href="#" class="btn btn-order">年底双薪</a>
                            
                            	<a href="#" class="btn btn-order">股份期权</a>
                            
                            	<a href="#" class="btn btn-order">年终分红</a>
                            
                            	<a href="#" class="btn btn-order">绩效奖金</a>
                            
                            	<a href="FillEnterpriceInfo2.apsx?choose='岗位晋升'" class="btn btn-order">岗位晋升</a>
                            
                            	<a href="http://www.oxcoder.com/hr-info-step3-to.action?flag=add&strchoose=&chooseTagStr=%E5%B9%B4%E5%BA%A6%E6%97%85%E6%B8%B8" class="btn btn-order">年度旅游</a>
                            
                            	<a href="http://www.oxcoder.com/hr-info-step3-to.action?flag=add&strchoose=&chooseTagStr=%E5%BC%B9%E6%80%A7%E5%B7%A5%E4%BD%9C" class="btn btn-order">弹性工作</a>
                            
                            	<a href="http://www.oxcoder.com/hr-info-step3-to.action?flag=add&strchoose=&chooseTagStr=%E5%85%8D%E8%B4%B9%E7%8F%AD%E8%BD%A6" class="btn btn-order">免费班车</a>
                            
                            	<a href="#" class="btn btn-order">扁平管理</a>
                            
                            	<a href="#" class="btn btn-order">技能培训</a>
                            
                            	<a href="#" class="btn btn-order">管理规范</a>
                            
                            	<a href="#" class="btn btn-order">节日礼物</a>
                            
                            	<a href="#" class="btn btn-order">专项奖金</a>
                            
                            	<a href="#" class="btn btn-order">交通补助</a>
                            
                            	<a href="#" class="btn btn-order">管吃管住</a>
                            
                            	<a href="#" class="btn btn-order">午餐补助</a>
                            
                            	<a href="#" class="btn btn-order">定期体检</a>
                            
                            	<a href="#" class="btn btn-order">帅哥多</a>
                            
                            	<a href="#" class="btn btn-order">美女多</a>
                            
                            	<a href="#" class="btn btn-order">领导好</a>
                            
                            </div>
                            <div class="form-group">
                                <div class="input-group">
<!--                                   <form action="hr-info-step3-to.action?flag=add" method="post"> -->
<!-- 									<input type="hidden" name="strchoose" id="strchoose" -->

<!-- 									<input type="text" id="chooseTagStr" name="chooseTagStr" maxlength="10" -->
<!-- 										class="form-control" placeholder="添加自定义标签"> -->
<!-- 									<div class="input-group-btn"> -->
<!-- 										<button type="submit" class="btn btn-new1 dropdown-toggle" -->
<!-- 											onClick="return addSelfTag()">添加</button> -->
<!-- 									</div> -->
<!-- 								</form> -->
	<input type="text" id="selftag" name="selftag" maxlength="4" class="form-control" placeholder="添加自定义标签">
								<div class="input-group-btn">
									<button type="button" class="btn btn-new1 dropdown-toggle" onclick="return addSelfTag()">添加</button>
								</div>
                                </div>
                            </div>

                            <div class="tag-group">
                                
                            </div>
                            <span class="text-danger">您只能选择3个标签，要选择最有竞争力的3个呦~</span>
                            <div class="form-group form-actions pull-right">
                            	<form>
                            		<input runat="server" type="hidden" name="tagstr" id="tagstr" value="">
                            		<button type="submit" class="btn btn-new1 btn-lg" style="border-radius: 3px;">保存&amp;下一步</button>
                            	</form>
                            </div>

                        </div><!-- /.row -->
                    </div>
                </div>
                

                
            </div><!-- /.row -->
        </div><!-- /.container -->

                 <!-- #Include virtual="/Common/footer.html" -->
    

<script type="text/javascript">

function addSelfTag() {

	var tag = $("#selftag").val();
	if (tag == null || tag == "") {
		alert("请输入标签");
		return false;
	}
	//判断输入是否 过长
	if (tag.length>4) {
		alert("标签长度过长");
		return false;
	} else if (tag.length < 3) {
		alert("标签长度过短");
		return false;
	}
	var a = "FillEnterpriceInfo2.aspx?flag=add&strchoose="
			+ $("#tagstr").val() + "&chooseTagStr=" + tag;
	window.location.replace(a);
//window.location.href(a);

	return true;
}
function addTag(tag) {
    var a = "FillEnterpriceInfo2.aspx?flag=add&strchoose="
			+ $("#tagstr").val() + "&chooseTagStr=" + tag;
    var temp = $("#tagstr").val();
    var temp2 = new Array();
    temp2 = temp.split('-');
    if (temp2.length <= 2) {
        window.location.replace(a);
    } else {

    }
   
}


function countlength(inputStar) {
	 var bytesCount = 0;
	 for (var i = 0; i < inputStar.length; i++) {
	  var c = inputStar.charAt(i);
	  if (/^[\u0000-\u00ff]$/.test(c)) {
	   bytesCount += 1;
	  }
	  else {
	   bytesCount += 2;
	  }
	 }
	 return bytesCount;
	}
</script></body></html>
