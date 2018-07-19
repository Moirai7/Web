//全局的编程相关的viewModal
var vm = null;
$("document").ready(
		function () {

		    vm = avalon.define({
		        $id: "codingModel",
		        projectInfo: {
		            pid: "",
		            pname: "",
		            chineseName: "",
		            ptype: "",
		            ptypeName: "",
		            target: "",
		            totalTime: 0,
		            countDown: 0,
		            order: "",
		            code: "",
		            previewfileExist: false,
		            input: ""
		        },
		        projectRuntime: {
		            compileSwitch: true,
		            compileSwitchCountdown: 3,
		            intervalCompile: null,
		            timeoutCompile: false,
		            isSub: 0
		        },
		        projectOrder: 0,
		        intervalCountdown: null,
		        modalInfo: {
		            modalTitle: "",
		            modalContent: "",
		            modalBtn: ""
		        },
		        firstName: "司徒",
		        lastName: "正美",
		        fullName: {// 一个包含set或get的对象会被当成PropertyDescriptor，
		            set: function (val) {// 里面必须用this指向scope，不能使用scope
		                var array = (val || "").split(" ");
		                this.firstName = array[0] || "";
		                this.lastName = array[1] || "";
		            },
		            get: function () {
		                return this.firstName + " " + this.lastName;
		            }
		        }
		    })
		    avalon.scan()
		    $(function () {
		        // 设置jQuery Ajax全局的参数
		        $.ajaxSetup({
		            type: "POST",
		            error: function (jqXHR, textStatus, errorThrown) {
		                switch (jqXHR.status) {
		                    case (500):
		                        console.log("服务器系统内部错误");
		                        break;
		                    case (401):
		                        console.log("未登录");
		                        break;
		                    case (403):
		                        console.log("无权限执行此操作");
		                        break;
		                    case (408):
		                        console.log("请求超时");
		                        break;
		                    default:
		                        console.log("连接失败，请检查网络。");
		                }
		            },
		            success: function (data) {
		                // alert("操作成功");
		            }
		        });
		    });
		    $.ajax({
		        async: true,
		        type: "post",
		        dataType: "json",
		        url: "User_Test_Quiz.aspx",
		        data: {
		            "pid": $("#input-pid").val(),
		            "reid": $("#input-reid").val(),
		            "order": vm.projectOrder
		        },
		        success: function (data) {
		            vm.projectInfo = data;
		            //console.log("调试信息：倒计时（请求刚完成时）" + vm.projectInfo.countDown)
		            editor.setValue(data.code);
		            // 重置统计数据
		            recoveryAll();
		            initStatistics();
		            // 开始倒计时
		            countDown();
		            initEditor(data.ptype);
		        },
		        error: function (data) {
		            console.log(data);
		        }
		    });
		    // 监听项目的顺序
		    vm.$watch("projectOrder", function (newValue, oldValue) {
		        if (vm.projectOrder >= 0 && vm.projectOrder <= 2) {
		            $.ajax({
		                async: true,
		                type: "post",
		                dataType: "json",
		                url: "User_Test_Quiz.aspx",
		                data: {
		                    "pid": $("#input-pid").val(),
		                    "reid": $("#input-reid").val(),
		                    "order": newValue
		                },
		                success: function (data) {
		                    vm.projectInfo = data;
		                    editor.setValue(data.code);
		                    avalon.log("调试信息：项目的总编译时间为"
									+ vm.projectInfo.totalTime + "秒")
		                    // $('#modal-complete').modal("hide");
		                    recoveryAll();
		                    initStatistics();
		                    // countDown();
		                },
		                error: function (XMLHttpRequest, textStatus,
								errorThrown) {
		                    console.log(XMLHttpRequest.status);
		                    console.log(XMLHttpRequest.readyState);
		                    console.log(textStatus);
		                    alert("与服务器连接出现错误：" + textStatus
									+ "！请确保网络状况良好并刷新页面。");
		                }
		            });
		        }

		    })
            
		    // 编译超时
		    vm.projectRuntime.$watch("timeoutCompile", function (newValue,
					oldValue) {
		        if (newValue) {
		            if (vm.projectRuntime.isSub == 0) {
		                clearInterval(intervalCompile);
		                hideModal("#waiting");
		                vm.modalInfo = {
		                    modalTitle: "编译超时",
		                    modalContent: "编译超时，请检查程序逻辑。",
		                    modalBtn: ""
		                };
		                $('#modal-notice').modal({
		                    keyboard: false
		                });
		                vm.projectRuntime.timeoutCompile = false;
		            } else {
		                hideModal("#waiting-auto");
		                if (vm.projectOrder < 2) {
		                    vm.modalInfo = {
		                        modalTitle: "",
		                        modalContent: "正在载入下一题。请稍候......",
		                        modalBtn: ""
		                    }
		                } else {
		                    vm.modalInfo = {
		                        modalTitle: "",
		                        modalContent: "所有题目都已完成，正在跳转到结果页面。",
		                        modalBtn: ""
		                    }
		                }

		                $('#modal-complete').modal({
		                    keyboard: false
		                });
		                setTimeout(function () {
		                    hideModal("#modal-complete");

		                }, 2000);
		                vm.projectOrder++;
		            }

		        }

		    });
		    // 编译超时
		    vm.projectRuntime.$watch("compileSwitchCountdown", function (newValue,
					oldValue) {
		        if (newValue > 0) {
		            //						$('#areaSelect').attr("disabled",true); 
		            //						$('#areaSelect').attr("disabled","disabled"); 
		            $("#btn-stop-compile").attr("disabled", true);
		        } else {
		            $("#btn-stop-compile").attr("disabled", false);
		        }

		    });
		    // 点击运行按钮
		    $("#btn-run").click(function () {
		        compile(0);
		    });
		    // 点击提交按钮
		    $("#btn-submit").click(function () {
		        $('#modal-confirm').modal({
		            keyboard: false
		        });
		    });
		    // 提交确认提示框的提交按钮
		    $("#btn-confirm-submit").click(function () {
		        compile(1);
		    });
		    // 设置信息显示框的大小
		    setSize(LOG_SIZE_CONSTANT.initial);
		    $(window).resize(function () {
		        setSize(LOG_SIZE_CONSTANT.initial);
		    });
		    $("#div-maxsize").click(function () {
		        setSize(LOG_SIZE_CONSTANT.maxsize);
		    });
		    $("#div-minisize").click(function () {
		        setSize(LOG_SIZE_CONSTANT.minisize);
		    });
		    // 点击停止编译按钮
		    $("#btn-stop-compile").click(function () {
		        hideModal("#waiting");
		        clearInterval(intervalCompile);
		    });
		});
function countDown() {
    clearInterval(intervalCountdown);
    // 初始化倒计时,并倒计时
    if (vm.projectInfo.countDown > 0) {
        intervalCountdown = setInterval(function () {

            vm.projectInfo.countDown--;
            if (vm.projectInfo.countDown <= 10) {
                $("#count-down").css("color", "red");
            }
            $("#count-down").html(vm.projectInfo.countDown);
            if (vm.projectInfo.countDown <= 0) {
                compile(1);
                vm.projectInfo.countDown == 0;
                clearInterval(intervalCountdown);
            }
        }, 1000)
    } else if (vm.projectInfo.countDown <= 0) {
        compile(1);
        vm.projectInfo.countDown = 0;
    }

}
// 编译
function compile(isSub) {
    vm.projectRuntime.isSub = isSub;
    // 设置编译开始时间
    var compileStartTime = (new Date()).getTime();

    // 最小化运行状态提示框
    setSize(LOG_SIZE_CONSTANT.minisize);
    // 清空信息
    $(".text-log").text("");
    // 模态框显示的内容
    vm.modalInfo = {
        modalTitle: "编译中，请稍候...",
        modalContent: "",
        modalBtn: "停止编译"
    }
    console.log("调试信息：开始编译时，项目order是" + vm.projectOrder);
    // 标志第几次编译
    var requestOrder = 1;
    // 显示等待的模态框
    if (vm.projectRuntime.isSub == 0) {

        $('#waiting').modal({
            keyboard: false,
            backdrop: "static",
            show: true
        });
        console.log("这是");
        countdownCompile();
    } else {
        $('#waiting-auto').modal({
            keyboard: false,
            backdrop: "static",
            show: true
        });
    }

    intervalCompile = setInterval(
			function () {

			    // 超时判断
			    $.ajax({
			        async: true,
			        type: "post",
			        dataType: "json",
			        url: "User_Test_Compile.aspx",
			        data: {
			            "code": editor.getValue(),
			            "lang": vm.projectInfo.ptype,
			            "input": vm.projectInfo.input,
			        },
			        success: function (data) {
                        
			            avalon.log(data);
			            // 编译出错
			            if (data.StatusCode == 0
                                || data.StatusCode == 1) {
			                if (vm.projectRuntime.isSub == 0) {
			                    if (data.StatusCode == 0) {
			                        $(".text-log").css("color",
                                            "red");
			                    } else {
			                        $(".text-log").css("color",
                                            "green");
			                    }
			                    $(".text-log").text(data.RunInfo);
			                    setSize(LOG_SIZE_CONSTANT.maxsize);
			                } else if (vm.projectRuntime.isSub == 1) {
			                    // 如果是提交的话，不显示运行编译的信息
			                    $(".text-log").text("");
			                } else {
			                    console.log("调试信息：isSub错误");
			                }
			                hideModal("#waiting");
			                hideModal("#waiting-auto");
			                // $('#waiting').modal('hide');
			                clearInterval(intervalCompile);

			                if (1 == vm.projectRuntime.isSub) {
			                    if (vm.projectOrder < 2) {
			                        vm.modalInfo = {
			                            modalTitle: "",
			                            modalContent: "正在载入下一题。请稍候......",
			                            modalBtn: ""
			                        }
			                    } else {
			                        vm.modalInfo = {
			                            modalTitle: "",
			                            modalContent: "所有题目都已完成，正在跳转到结果页面。",
			                            modalBtn: ""
			                        }
			                    }

			                    $('#modal-complete').modal({
			                        keyboard: false
			                    });
			                    setTimeout(function () {
			                        hideModal("#modal-complete");

			                    }, 2000);
			                    if (vm.projectOrder < 2) {
			                        vm.projectOrder++;
			                        $.post("User_NextQuiz.aspx",
                                        {
                                            time: vm.projectInfo.countDown,
                                            result: data.Result,
                                            order: vm.projectOrder,
                                            cid: $("#input-reid").val()
                                        });
			                        //window.location.href = "User_Test.aspx?order=" + vm.projectOrder + "&cid="
                                    //                + $("#input-reid").val();
			                        console.log("调试信息：正在跳转到下页面。");
			                    } else {
			                        vm.projectOrder++;
			                        $.post("User_NextQuiz.aspx",
                                        {
                                            time: vm.projectInfo.countDown,
                                            result: data.Result,
                                            order: vm.projectOrder,
                                            cid: $("#input-reid").val()
                                        });
			                        window.location.href = "User_Result.aspx?cid="
                                                    + $("#input-reid").val();
			                        console.log("调试信息：正在跳转到结果页面。");
			                    }
			                }
			            } else if (data.StatusCode == -1) {
			                console.log("编译超时");
			                clearInterval(intervalCompile);
			                vm.projectRuntime.timeoutCompile = true;
			            } else if (data.StatusCode == -2) {
			                clearInterval(intervalCompile);
			                hideModal("#waiting");
			                hideModal("#waiting-auto");
			                vm.modalInfo = {
			                    modalTitle: "代码错误",
			                    modalContent: "代码错误，请检查程序逻辑。",
			                    modalBtn: ""
			                }
			                $('#modal-notice').modal({
			                    keyboard: false
			                });
			            }
			            requestOrder++;
			        },
			        error: function (data) {
			            alert("与服务器连接出现错误！请确保网络状况良好并刷新页面。");
			            hideModal("#waiting");
			            hideModal("#waiting-auto");
			            clearInterval(intervalCompile);
			        }
			    });
			},10000);

}
// 根据情况调整log的尺寸
function setSize(flag) {
    $(".text-log").css({
        "position": 'absolute',
        "right": '0',
        "bottom": '0'
    });
    if (LOG_SIZE_CONSTANT.initial == flag) { // 初始状态
        $("#editor").css("bottom", 0);
        $(".text-log").width("30px");
        $(".text-log").height("15px");
        $(".minisize-log").show();
        $(".maxsize-log").hide();
    } else if (LOG_SIZE_CONSTANT.showRes == flag) { // 显示结果时

        $(".text-log").width($(".div-right").width());
        $(".text-log").height("150px");
        $(".minisize-log").hide();
        $(".maxsize-log").show();
        $(".maxsize-log").css("bottom", $(".text-log").height() + 15);
        $("#editor").css("bottom", $(".text-log").height() + 15);
        editor.resize();
    } else if (LOG_SIZE_CONSTANT.minisize == flag) { // 点击最小化的时候
        $(".maxsize-log").hide();
        $(".text-log").animate({
            height: '0px',
            width: '0'
        }, 500, function () {
            $("#editor").css("bottom", 0);
            $(".minisize-log").show();
        });
    } else if (LOG_SIZE_CONSTANT.maxsize == flag) { // log框还原
        $(".minisize-log").hide();
        $(".text-log").animate({
            height: '150px',
            width: $(".div-right").width()
        }, 500, function () {

            $("#editor").css("bottom", $(".text-log").height() + 15);
            $(".maxsize-log").show();
            $(".maxsize-log").css("bottom", $(".text-log").height() + 15);
        });
    }

    $(".text-log").css("max-height", $(window).height() / 3);
}
//停止编译的倒计时
function countdownCompile() {
    vm.projectRuntime.compileSwitchCountdown = 3;
    intervalCompileCountdown = setInterval(function () {
        vm.projectRuntime.compileSwitchCountdown--;
        if (vm.projectRuntime.compileSwitchCountdown <= 0) {
            clearInterval(intervalCompileCountdown);
        }
    }, 1000);

}
// 恢复所有数值
function recoveryAll() {

    // 恢复统计相关
    $("#count-down").css("color", "black");
    /**
	 * 思考时间
	 */
    thinkTime = 0;
    /**
	 * 打字速度
	 */
    speed = 0;
    /**
	 * 判断是否第一次获得焦点
	 */
    isSpeedStart = true;
    startStr;
    endLength;

    /**
	 * 开始的时间
	 */
    thinkTimeStart = (new Date()).getTime();
    console.log("调试信息：开始时间重置");
    thinkTimeEnd = 0;
    firstInput = true;

    // 恢复编译超时
    vm.projectRuntime.timeoutCompile = false;
    // 恢复提交
    vm.projectRuntime.isSub = 0;
    clearInterval(intervalCountdown);
    // 开始倒计时
    countDown();
}
// 隐藏模态框
function hideModal(modalId) {
    $(modalId).modal("hide");
    $(".modal-backdrop").hide();
}
// 初始化编辑器
function initEditor(ptype) {
    var langTools = ace.require("ace/ext/language_tools");
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/idle_fingers");
    switch (ptype) {
        case 1:
            editor.getSession().setMode("ace/mode/java");
            console.log("切换到java");
            break;
        case 2:
            editor.getSession().setMode("ace/mode/java");
            console.log("切换到android");
            break;
        case 3:
            editor.getSession().setMode("ace/mode/objectivec");
            console.log("切换到oc");
            break;
        case 4:
            editor.getSession().setMode("ace/mode/c_cpp");
            console.log("切换到c");
            break;
        case 5:
            editor.getSession().setMode("ace/mode/c_cpp");
            console.log("切换到c++");
            break;
        case 6:
            editor.getSession().setMode("ace/mode/php");
            console.log("切换到php");
            break;
        case 7:
            editor.getSession().setMode("ace/mode/python");
            console.log("切换到python");
            break;
        case 8:
            editor.getSession().setMode("ace/mode/ruby");
            console.log("切换到ruby");
            break;
        default:
            break;
    }
    editor.setOptions({
        enableBasicAutocompletion: true,
        enableLiveAutocompletion: true
    });
    // uses http://rhymebrain.com/api.html
    //	editor.commands.on("afterExec", function(e) {
    //		if (e.command.name == "insertstring" && /^[\\.\(.]$/.test(e.args)) {
    //			editor.execCommand("startAutocomplete");
    //		}
    //	});
    //	var rhymeCompleter = {
    //		getCompletions : function(editor, session, pos, prefix, callback) {
    //			console.log("prefix" + prefix);
    //			$.getJSON("coding-load-code-note.action?filePath="
    //					+ $("#input-projectpath").val() + "/"
    //					+ /* $("#input-filename").val() + */"main.php", function(
    //					wordList) {
    //				console.log("@@@@@" + wordList);
    //				// wordList like
    //				// [{"word":"flow","freq":24,"score":300,"flags":"bc","syllables":"1"}]
    //				callback(null, wordList.map(function(ea) {
    //					return {
    //						name : ea.word,
    //						value : ea.word,
    //						score : ea.score,
    //						meta : "rhyme"
    //					}
    //				}));
    //			})
    //		}
    //	}
    //	langTools.addCompleter(rhymeCompleter);

}
