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
	<!-- #Include virtual="/Common/enterprise_menu.html" -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-push-3 col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2">
                    <div id="content">
                        <div class="row">
                            <img src="../Public/Images/corp_step2.png">
                            <div class="tag-group">
                            
                            	
                                <input type="button" class="btn btn-order" onclick="addTag('五险一金')" value="五险一金">
                                <input type="button" class="btn btn-order" onclick="addTag('年底双薪')" value="年底双薪">
                                <input type="button" class="btn btn-order" onclick="addTag('股份期权')" value="股份期权">
                            	<input type="button" class="btn btn-order" onclick="addTag('年终分红')" value="年终分红">
                                <input type="button" class="btn btn-order" onclick="addTag('绩效奖金')" value="绩效奖金">
                                <input type="button" class="btn btn-order" onclick="addTag('岗位晋升')" value="岗位晋升">
                                <input type="button" class="btn btn-order" onclick="addTag('年度旅游')" value="年度旅游">
                                <input type="button" class="btn btn-order" onclick="addTag('弹性工作')" value="弹性工作">
                                <input type="button" class="btn btn-order" onclick="addTag('免费班车')" value="免费班车">
                                <input type="button" class="btn btn-order" onclick="addTag('扁平管理')" value="扁平管理">
                                <input type="button" class="btn btn-order" onclick="addTag('技能培训')" value="技能培训">
                                <input type="button" class="btn btn-order" onclick="addTag('管理规范')" value="管理规范">
                                <input type="button" class="btn btn-order" onclick="addTag('节日礼物')" value="节日礼物">
                                <input type="button" class="btn btn-order" onclick="addTag('专项奖金')" value="专项奖金">
                                <input type="button" class="btn btn-order" onclick="addTag('交通补助')" value="交通补助">
                                <input type="button" class="btn btn-order" onclick="addTag('管吃管住')" value="管吃管住">
                                <input type="button" class="btn btn-order" onclick="addTag('午餐补助')" value="午餐补助">
                                <input type="button" class="btn btn-order" onclick="addTag('定期体检')" value="定期体检">
                                <input type="button" class="btn btn-order" onclick="addTag('帅哥多')" value="帅哥多">
                                <input type="button" class="btn btn-order" onclick="addTag('美女多')" value="美女多">
                                <input type="button" class="btn btn-order" onclick="addTag('领导好')" value="领导好">
                            
                            </div>
                            <div class="form-group">
                                <div class="input-group">
	<input type="text" id="selftag" name="selftag" maxlength="4" class="form-control" placeholder="添加自定义标签">
								<div class="input-group-btn">
									<button type="button" class="btn btn-new1 dropdown-toggle" id="add"onclick="return addSelfTag()">添加</button>
								</div>
                                </div>
                            </div>

                            <div class="tag-group">
                                
                            </div>
                             <input type="button" class="btn btn-new1" id="bntNew1" value="" style="display:none">
                             <input type="button" class="btn btn-new1" id="bntNew2" value="" style="display:none">
                            <input type="button" class="btn btn-new1" id="bntNew3" value="" style="display:none">
                            <span class="text-danger">您只能选择3个标签，要选择最有竞争力的3个呦~</span>
                            <div class="form-group form-actions pull-right">
                            	<form runat="server">
                            		<input runat="server" type="hidden" name="tagstr" id="tagstr" value="" >
                            		<asp:Button runat="server" class="btn btn-new1 btn-lg" style="border-radius: 3px;" OnClick="FillEnterpriceInfo1" Text="保存  下一步"></asp:Button>
                            	</form>
                            </div>

                        </div><!-- /.row -->
                    </div>
                </div>
                

                
            </div><!-- /.row -->
        </div><!-- /.container -->

                 <!-- #Include virtual="/Common/footer.html" -->
    

<script type="text/javascript">
    var count = 0;
    var str = $("#tagstr").val();
    var arr = new Array();
    arr = str.split(",")
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
	if ($("#tagstr").val() == "") {
	    document.getElementById("tagstr").value = $("#selftag").val();
	    document.getElementById("bntNew1").value = $("#selftag").val();
	    $("#bntNew1").show();
	    count++;
	} else {    
	    var str = $("#tagstr").val();
	    if (count == 1) {
	        document.getElementById("tagstr").value = $("#tagstr").val() + "," + $("#selftag").val();
	        document.getElementById("bntNew2").value = $("#selftag").val();
	        $("#bntNew2").show();
	        count++;
	    } else if (count == 2) {
	        document.getElementById("tagstr").value = $("#tagstr").val() + "," + $("#selftag").val();
	        document.getElementById("bntNew3").value = $("#selftag").val();
	       // document.getElementById("bntNew2").value = $("#selftag").val();
	        $("#bntNew3").show();
	        count++;
	    } else {
	        document.getElementById("tagstr").value = $("#tagstr").val();
	    }
	}
	

	var a = "FillEnterpriceInfo2.aspx?flag=add&strchoose="
			+ $("#tagstr").val() + "&chooseTagStr=" + tag;

	//window.location.replace(a);
//window.location.href(a);

	return true;
}

function addTag(tag) {
    var str = tag;
    if ($("#tagstr").val() == "") {
        document.getElementById("tagstr").value = str;
        document.getElementById("bntNew1").value = str;
        $("#bntNew1").show();
        count++;
    } else {
       // var str = $("#tagstr").val();
        if (count == 1) {
            document.getElementById("tagstr").value = $("#tagstr").val() + "," + str;
            document.getElementById("bntNew2").value = str;
            $("#bntNew2").show();
            count++;
        } else if (count == 2) {
            document.getElementById("tagstr").value = $("#tagstr").val() + "," + str;
            document.getElementById("bntNew3").value = str;
            // document.getElementById("bntNew2").value = $("#selftag").val();
            $("#bntNew3").show();
            count++;
        } else {
            document.getElementById("tagstr").value = $("#tagstr").val();
        }
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
