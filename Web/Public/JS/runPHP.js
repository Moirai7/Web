$(document).ready(function(){
	var javaCode = "";
	
	
	
	$("#btn_by_own").click(function(){
	
		$(".textarea_code").removeAttr("readonly");
		$(".textarea_code").css("background", "#fff");
		if($(".textarea_code").val()!=""){
			$(".textarea_code").val("自己写的代码");
		}
		
	});
	$("#btn_show_java,#btn_show_android").click(function(){
		
		$(".textarea_code").attr("readonly","readonly");
		$(".textarea_code").css("background", "#f1f1f1");
		//$(".textarea_code").val("");
		$(".textarea_code").val("这里是大神示范");
	});
	//点击“项目运行”按钮
	$("#btn_run_android").click(function(){
		$('#show-android').modal({
			keyboard: true
		});
	});
	//观看教学视频
	$(".a-show-video").click(function(){
		//window.open(sURL,sName,sFeatures,bReplace);
		var openUrl = "./video.html";//弹出窗口的url
		var iWidth=1200; //弹出窗口的宽度;
		var iHeight=900; //弹出窗口的高度;
		var iTop = (window.screen.availHeight-30-iHeight)/2; //获得窗口的垂直位置;
		var iLeft = (window.screen.availWidth-10-iWidth)/2; //获得窗口的水平位置;
		window.open(openUrl,"","height="+iHeight+", width="+iWidth+", top="+iTop+", left="+iLeft); 
		//window.open(openUrl,"","height=400,width=400,top=0,left=0,toolbar=no,menubar=no,scrollbars=no, resizable=no,location=no, status=no");
	});
	
	$().click();
});