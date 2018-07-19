//require(["loading/avalon.loading"], function() {
//                avalon.define("test", function(vm) {
//                    vm.loading = {
//                    }
//                    vm.$skipArray = ["loading"]
//                })
//                avalon.scan()
//            })
$("document").ready(function(){
	$("#editor").css("font-size", "14px");
	$("#fontsize").change(
						function() {
							document.getElementById('editor').style.fontSize = $(
									"#fontsize").val();
						});
});

//// 进度条重置并且开始
//function progressBarStart() {
//	avalon.vmodels.$aa.reset()
//	avalon.vmodels.$aa.start()
//}
//// 进度条完成
//function progressBarComplete() {
//	avalon.vmodels.$aa.end(100)
//}