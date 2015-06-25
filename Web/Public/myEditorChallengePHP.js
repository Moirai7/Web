/**
 * 循环执行请求执行结果的函数
 */
var interval;
/**
 * 首次运行Java返回的数据
 */
var startData;

//挑战的顺序
var order;
// 倒计时的时间间隔
var intervalCountdown = 1000;
// 倒计时的总时间
var totalTime = 10;
// 判断是否到时间
var istimeout = false;
/**
 * 编译开始时间
 */
var compileStartTime;
$(document).ready(
		function() {
			totalTime = $("#input-countdown").val();
			
			//设置编译开始时间
			compileStartTime = (new Date()).getTime();
			
			// START OF 倒计时
			var inter = setInterval(function() {

				totalTime--;
				$("#count-down").html(totalTime);
				if (totalTime <= 10) {
					$("#count-down").css("color", "red");
				}
				if (totalTime <= 0) {
					//设置已经超时
					istimeout = true;
					clearInterval(inter);
					
					$.post("User_Test.aspx", {
						"content" : editor.getValue(),
						"pid" : $("#input-pid").val(),
						"path" : $("#input-code-path").val(),
						"flag" : 1,
						"type" : 2,
						"retype":6,
						"reid" : $("#input-reid").val(),
						"filename" : $("#input-filename").val(),
						"fullpath" : $("#input-code-path2").val(),
						"savetype" : $("#input-save-type").val(),
						"order" : $("#input-order").val(),
						"thinkTime" : thinkTime,
						"speed" : speed,
						"costTime" : (new Date()).getTime() - thinkTimeStart,
						"ip" : returnCitySN["cip"]
					}, function(data) {
						// alert(data.result+"#"+data.state);
						// 显示等待的模态框
						$('#waiting-auto').modal({
							keyboard : false
						});
						if (data.result == null) {

							console.log(data.result);
						}
						console.log(data.result);
						console.log(data.id);
						if (data.result == "pending") {
							startData = data;
							interval = setInterval(getRes, 5000);
						} else {
							if (data.result == null) {

								console.log("result为空");
							}
							console.log(data.result);
							console.log(data.id);
							if (data.result.indexOf("Success:") >= 0) {
								$('#waiting-auto').modal('hide');
								$('#download-apk').modal({
									keyboard : true
								});
								var x1 = data.result
										.indexOf("Debug Package:");
								var x2 = data.result
										.indexOf("[propertyfile]");
								var position1 = data.result.substring(x1,
										x2);
								var x = position1.indexOf("/tmp/");
								// var x=position1.indexOf("\\temp\\");

								var position = data.result.substring(x)
										.trim();
								console.log("项目地址：" + position);
								// alert(x1+"*"+x2+"*"+x)
								$("#btn-start-download").attr("href",
										"/Training" + position);
							} else {
								$('#waiting-auto').modal('hide');
								$(".text-log").text(data.result);
								stateOfLog = 1;
								setSize(stateOfLog);
								clearInterval(interval);
							}
						}
					}, "json");
				}
			}, intervalCountdown);
			// END OF 倒计时
			$('#btn-info-close-not-sub').click(function(){
				
				$('#complete-dialog-not-sub').modal('hide');
			});
			
			
			//设置scrollpastend
			editor.setOption("scrollPastEnd", true);
			// 点击自己写按钮，清空editor
			
			// 进入Java学习页面，默认加载代码
			$.post("User_Test.aspx", {
				"type" : 6,
				"filename" : $("#input-filename").attr("value")
			}, function(data) {
				editor.setValue("\n" + data);
			}, "json");

			$("#editor").css("font-size", "13px");

			editor.commands.addCommand({
				name : 'fullScreen',
				bindKey : {
					win : 'F11',
					mac : 'F11'
				},
				exec : function(editor) {
					if (manitoSwitch) {
						var fullScreen = dom.toggleCssClass(document.body,
								"fullScreen");
						dom.setCssClass(editor.container, "fullScreen",
								fullScreen);
						editor.setAutoScrollEditorIntoView(!fullScreen);
						editor.resize();
					}
				},
				readOnly : false
			// false if this command should not apply in readOnly mode
			});

			// log框的状态
			var stateOfLog = 0;

			$("#fontsize").change(
					function() {
						document.getElementById('editor').style.fontSize = $(
								"#fontsize").val();
					});

			$("#theme").change(function() {
				if (1 == $("#theme").val()) {
					editor.setTheme("ace/theme/xcode");
				} else if (2 == $("#theme").val()) {
					editor.setTheme("ace/theme/twilight");
				}
			});

			setSize(stateOfLog);
			$(window).resize(function() {
				setSize(stateOfLog);
			});

			$("#div-maxsize").click(function() {
				stateOfLog = 3;
				setSize(stateOfLog);
			});
			$("#div-minisize").click(function() {
				stateOfLog = 2;
				setSize(stateOfLog);
			});

			// 鼠标移动事件
			$(".top-bar").mousedown(function(e)// e鼠标事件
			{
				$(this).css("cursor", "move");// 改变鼠标指针的形状

				var offset = $(this).offset();// DIV在页面的位置
				var x = e.pageX - offset.left;// 获得鼠标指针离DIV元素左边界的距离
				var y = e.pageY - offset.top;// 获得鼠标指针离DIV元素上边界的距离
				$(document).bind("mousemove", function(ev)// 绑定鼠标的移动事件，因为光标在DIV元素外面也要有效果，所以要用doucment的事件，而不用DIV元素的事件
				{
					$(".top-bar").stop();// 加上这个之后

					var _x = ev.pageX - x;// 获得X轴方向移动的值
					var _y = ev.pageY - y;// 获得Y轴方向移动的值

					$(".top-bar").animate({
						left : _x + "px",
						top : _y + "px"
					}, 1);
				});

			});

			$(document).mouseup(function() {
				$(".top-bar").css("cursor", "default");
				$(this).unbind("mousemove");
			});

			//只是编译，不运行
			$("#btn_run_not_sub").click(function() {
				//设置编译开始时间
				compileStartTime = (new Date()).getTime();
				// 点击"编译运行"按钮
							// alert($("#a-step1").attr("filepath")+"#"+$("#input-filename").val());
							// alert(manitoCount);
							$.post("runChallenge.action", {
								"content" : editor.getValue(),
								"pid" : $("#input-pid").val(),
								"path" : $("#input-code-path").val(),
								"flag" : 1,
								"type" : 1,
								"retype":6,
								"reid" : $("#input-reid").val(),
								"filename" : $("#input-filename").val(),
								"fullpath" : $("#input-code-path2").val(),
								"savetype" : $("#input-save-type").val(),
								"order" : $("#input-order").val(),
								"thinkTime" : thinkTime,
								"speed" : speed,
								"costTime" : (new Date()).getTime() - thinkTimeStart,
								"ip" : returnCitySN["cip"]
							}, function(data) {
								// alert(data.result+"#"+data.state);
								// 显示等待的模态框
								$('#waiting').modal({
									keyboard : false
								});
								if (data.result == null) {

									console.log(data.result);
								}
								console.log(data.result);
								console.log(data.id);
								if (data.result == "pending") {
									startData = data;
									interval = setInterval(getResNotSub, 5000);
								} else {
									if (data.result == null) {

										console.log("result为空");
									}
									console.log(data.result);
									console.log(data.id);
									if (data.result.indexOf("Success:") >= 0) {
										$('#waiting').modal('hide');
										var x1 = data.result
												.indexOf("Debug Package:");
										var x2 = data.result
												.indexOf("[propertyfile]");
										var position1 = data.result.substring(x1,
												x2);
										var x = position1.indexOf("/tmp/");

										var position = data.result.substring(x)
												.trim();
										console.log("项目地址：" + position);
										// alert(x1+"*"+x2+"*"+x)
										$("#btn-start-download").attr("href",
												"/Training" + position);
									} else {
										$('#waiting').modal('hide');
										$(".text-log").text(data.result);
										stateOfLog = 1;
										setSize(stateOfLog);
										clearInterval(interval);
									}
								}
							}, "json");

			});
			// 点击运行Java
			$("#btn_run").click(function() {
				$('#run-choose').modal({
					keyboard : true
				});
			});
			$("#btn-download").click(
					function() {
						//设置编译开始时间
						compileStartTime = (new Date()).getTime();
						// alert($("#a-step1").attr("filepath")+"#"+$("#input-filename").val());
						// alert(manitoCount);
						$.post("runChallenge.action", {
							"content" : editor.getValue(),
							"pid" : $("#input-pid").val(),
							"path" : $("#input-code-path").val(),
							"flag" : 1,
							"type" : 2,
							"retype":6,
							"reid" : $("#input-reid").val(),
							"filename" : $("#input-filename").val(),
							"fullpath" : $("#input-code-path2").val(),
							"savetype" : $("#input-save-type").val(),
							"order" : $("#input-order").val(),
							"thinkTime" : thinkTime,
							"speed" : speed,
							"costTime" : (new Date()).getTime() - thinkTimeStart,
							"ip" : returnCitySN["cip"]
						}, function(data) {
							// 显示等待的模态框
							$('#waiting').modal({
								keyboard : false
							});
							if (data.result == null) {

								console.log(data.result);
							}
							console.log(data.result);
							console.log(data.id);
							if (data.result == "pending") {
								startData = data;
								interval = setInterval(getRes, 5000);
							} else {
								if (data.result == null) {

									console.log("result为空");
								}
								console.log(data.result);
								console.log(data.id);
								if (data.result.indexOf("Success:") >= 0) {
									$('#waiting').modal('hide');
									$('#download-apk').modal({
										keyboard : true
									});
									var x1 = data.result
											.indexOf("Debug Package:");
									var x2 = data.result
											.indexOf("[propertyfile]");
									var position1 = data.result.substring(x1,
											x2);
									var x = position1.indexOf("/tmp/");

									var position = data.result.substring(x)
											.trim();
									console.log("项目地址：" + position);
									// alert(x1+"*"+x2+"*"+x)
									$("#btn-start-download").attr("href",
											"/Training" + position);
								} else {
									$('#waiting').modal('hide');
									$(".text-log").text(data.result);
									stateOfLog = 1;
									setSize(stateOfLog);
									clearInterval(interval);
								}
							}
						}, "json");

					});
			// 点击停止编译按钮
			$("#btn-stop-compile").click(function() {

				$('#waiting').modal('hide');
				clearInterval(interval);
			});
			// 点击步骤对应的按钮
			$(".a-step").click(function() {
				$.post("noteJava.action", {
					"step" : $(this).attr("val"),
					"projectname" : $("#input-filename").val()
				}, function(data) {
					editor.setValue(data);
				}, "json");
			});
		});
// 根据情况调整log的尺寸
function setSize(flag) {
	$(".text-log").css({
		"position" : 'absolute',
		"right" : '0',
		"bottom" : '0'
	});
	if (0 == flag) { // 初始状态
		$("#editor").css("bottom", 0);
		$(".text-log").width(60);
		$(".text-log").height("20px");
		$(".minisize-log").show();
		$(".maxsize-log").hide();
	} else if (1 == flag) { // 显示结果时

		$(".text-log").width($(".div-right").width());
		$(".text-log").height("150px");
		$(".minisize-log").hide();
		$(".maxsize-log").show();
		$(".maxsize-log").css("bottom", $(".text-log").height() + 15);
		$("#editor").css("bottom", $(".text-log").height() + 15);
		editor.resize();
	} else if (2 == flag) { // 点击最小化的时候
		$(".maxsize-log").hide();
		$(".text-log").animate({
			height : '0px',
			width : '0'
		}, 500, function() {
			$("#editor").css("bottom", 0);
			$(".minisize-log").show();
		});
	} else if (3 == flag) { // log框还原
		$(".minisize-log").hide();
		$(".text-log").animate({
			height : '150px',
			width : $(".div-right").width()
		}, 500, function() {

			$("#editor").css("bottom", $(".text-log").height() + 15);
			$(".maxsize-log").show();
			$(".maxsize-log").css("bottom", $(".text-log").height() + 15);
		});
	}

	$(".text-log").css("max-height", $(window).height() / 3);
}
//重复执行，请求结果的函数
function getRes() {
	
	
	$.post("runChallenge.action", {
		"pid" : $("#input-pid").val(),
		"content" : editor.getValue(),
		"path" : $("#input-code-path").val(),
		"reid" : $("#input-reid").val(),
		"flag" : 2,
		"type" : 2,
		"retype":6,
		"filename" : $("#input-filename").val(),
		"id" : startData.id,
		"order" : $("#input-order").val(),
		"thinkTime" : thinkTime,
		"speed" : speed,
		"costTime" : (new Date()).getTime() - thinkTimeStart,
		"ip" : returnCitySN["cip"]
	}, function(data) {
		
		console.log("restate"+data.restate+"reid"+data.reid+"newrestate"+data.newrestate);
		if (data.result == null) {

			console.log("result为空");
		}
		console.log(data.result);
		console.log(data.id);

		if (!istimeout) {
			if (data.result == "pending") {

				if((new Date()).getTime()-compileStartTime>20000){
					$('#waiting').modal('hide');
					clearInterval(interval);
					$('#modal-timeout').modal({
						keyboard : false
					});
					console.log("超时");
				}else{
					setTimeout(getResNotSub, 3000);
				}
			} else {
				if (data.result == null) {

					console.log("result为空");
				}
				// alert(data.result+"#"+data.state);
				if (data.result.toString().indexOf("Success:") >= 0) {
					// 设置挑战项目的order
					$("#input-order").val(data.order);

					order = data.order;
					$('#waiting').modal('hide');
					if (data.order != 3) {

						$('#complete-dialog').find("#info-div").html(
								"您已经完成了第" + data.order + "个挑战项目，3秒后进入下一个");
						setTimeout(tonext, 3000);
					} else {

						$('#complete-dialog').find("#info-div").html(
								"您已经完成了第" + data.order + "个挑战项目，所有的挑战项目已完成！");
						setTimeout(toResult, 3000);
					}

					$('#complete-dialog').modal({
						keyboard : false
					});
					
					console.log(data.result);
					clearInterval(interval);
				}
				// 请求统计数据

				else {
					$("#input-order").val(data.order);

					order = data.order;
					
					if (data.order != 3) {

						$('#complete-dialog').find("#info-div").html(
								"第" + data.order + "个挑战项目编译未通过，3秒后进入下一个");
						setTimeout(tonext, 3000);
					} else {

						$('#complete-dialog').find("#info-div").html(
								"第" + data.order + "个挑战项目编译未通过，所有的挑战项目已完成！");
						setTimeout(toResult, 3000);
					}
					$('#complete-dialog').modal({
						keyboard : false
					});
					console.log(data.result);
					$('#waiting').modal('hide');
					$(".text-log").text(data.result);
					stateOfLog = 1;
					setSize(stateOfLog);
					clearInterval(interval);
				}
			}

		} else {
			if (data.result == "pending") {

				if((new Date()).getTime()-compileStartTime>20000){
					$('#waiting').modal('hide');
					clearInterval(interval);
					$('#modal-timeout').modal({
						keyboard : false
					});
					console.log("超时");
				}else{
					setTimeout(getResNotSub, 3000);
				}
			} else {
				
				if (data.result == null) {

					console.log("result为空");
				}
				if (data.result.toString().indexOf("Success:") >= 0) {
					// 设置挑战项目的order
					$("#input-order").val(data.order);
					order = data.order;
					
					$('#waiting-auto').modal('hide');
					if (data.order != 3) {

						$('#complete-dialog').find("#info-div").html(
								"您已经完成了第" + data.order + "个挑战，3秒后进入下一个");
						setTimeout(tonext, 3000);
					} else {

						$('#complete-dialog').find("#info-div").html(
								"您已经完成了第" + data.order + "个挑战，所有的挑战项目已完成！");
						setTimeout(toResult, 3000);
					}

					$('#complete-dialog').modal({
						keyboard : false
					});
					
					console.log(data.result);
					clearInterval(interval);

				}else {
					// 设置挑战项目的order
					order = data.order;
					$("#input-order").val(data.order);

					$('#waiting-auto').modal('hide');

					if (data.order != 3) {

						$('#complete-dialog').find("#info-div").html(
								"第" + data.order + "个挑战项目编译未通过，3秒后进入下一个");
						setTimeout(tonext, 3000);
					} else {

						$('#complete-dialog').find("#info-div").html(
								"第" + data.order + "个挑战项目编译未通过，您已经完成了所有的挑战！");
						setTimeout(toResult, 3000);
					}

					$('#complete-dialog').modal({
						keyboard : false
					});
					console.log(data.result);
					clearInterval(interval);

				}
			}
		}
	}, "json");
}
/**
 * 跳转到下一页
 */
function tonext() {
	// 跳转到下一题目的页面
	$('#complete-dialog').modal('hide');
	location.replace("user-challenge.action?order=" + order + "&reid="
			+ $("#input-reid").val());

}
/**
 * 跳转到练习场
 */
function toBattleField() {
	// 跳转到下一题目的页面
	$('#complete-dialog').modal('hide');
	location.replace("user-roadmap-java.action");

}
function toResult() {
	// 跳转到下一题目的页面
	$('#complete-dialog').modal('hide');
	location.replace("user-challenge-result.action?reid="+$("#input-reid").val());

}
//只是运行，不提交
function getResNotSub() {
	
	$.post("runChallenge.action", {
		"pid" : $("#input-pid").val(),
		"content" : editor.getValue(),
		"path" : $("#input-code-path").val(),
		"reid" : $("#input-reid").val(),
		"flag" : 2,
		"type" : 1,
		"retype":6,
		"filename" : $("#input-filename").val(),
		"id" : startData.id,
		"order" : $("#input-order").val(),
		"thinkTime" : thinkTime,
		"speed" : speed,
		"costTime" : (new Date()).getTime() - thinkTimeStart,
		"ip" : returnCitySN["cip"]
	}, function(data) {
		
		console.log("restate"+data.restate+"reid"+data.reid+"newrestate"+data.newrestate);
		if (data.result == null) {

			console.log("result为空");
		}
		console.log(data.result);
		console.log(data.id);

		if (!istimeout) {
			if (data.result == "pending") {
				if((new Date()).getTime()-compileStartTime>20000){
					$('#waiting').modal('hide');
					clearInterval(interval);
					$('#modal-timeout').modal({
						keyboard : false
					});
					console.log("超时");
				}else{
					setTimeout(getResNotSub, 3000);
				}
				
			} else {
				if (data.result == null) {

					console.log("result为空");
				}
				// alert(data.result+"#"+data.state);
				if (data.result.toString().indexOf("Success:") >= 0) {
					$(".text-log").css("color", "green");
					$('#waiting').modal('hide');
					$(".text-log").text(data.result);
					stateOfLog = 1;
					setSize(stateOfLog);
					clearInterval(interval);
				}

				else {
					console.log(data.result);
					$(".text-log").css("color", "red");
					$('#waiting').modal('hide');
					$(".text-log").text(data.result);
					stateOfLog = 1;
					setSize(stateOfLog);
					clearInterval(interval);
				}
			}

		} else {
			if (data.result == "pending") {

				if((new Date()).getTime()-compileStartTime>20000){
					$('#waiting').modal('hide');
					clearInterval(interval);
					$('#modal-timeout').modal({
						keyboard : false
					});
					console.log("超时");
				}else{
					setTimeout(getResNotSub, 3000);
				}
			} else {
				if (data.result == null) {

					console.log("result为空");
				}
				// alert(data.result+"#"+data.state);
				if (data.result.toString().indexOf("Success:") >= 0) {
					// 设置挑战项目的order
					$("#input-order").val(data.order);

					order = data.order;
					$('#waiting-auto').modal('hide');

					$('#complete-dialog-not-sub').modal({
						keyboard : false
					});
					setTimeout(tonext, 3000);
					console.log(data.result);
					clearInterval(interval);

				}else {
					// 设置挑战项目的order
					$("#input-order").val(data.order);

					order = data.order;
					$('#waiting-auto').modal('hide');

					$('#complete-dialog-not-sub').modal({
						keyboard : false
					});
					console.log(data.result);
					clearInterval(interval);

				}
			}
		}
		
	}, "json");
}