<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="User_Test.aspx.cs" Inherits="Web.User.User_Test" %>

<!DOCTYPE html>

<html>
<head>
    <!-- #Include virtual="/Common/Header_Test.html" -->
</head>
<body style="position: relative" avalonctrl="codingModel">
	<div class="navbar navbar-coding navbar-fixed-top" style="text-align: center; border-radius: 0; -webkit-border-radius: 0;">
		<div class="navbar-header">
            <a class="navbar-brand hidden-sm" href="javascript:history.go(-2)" style="font-size: 13px;"><i class="fa fa-chevron-left" style="padding-right: 5px;"></i>返回</a>
        </div>
        <div class="top-bar-new" style="width: 260px; cursor: default;">
			<label for="fontsize">字号</label> <select id="Select1" style="color:black" size="1">
				<option value="10px">10px</option>
				<option value="11px">11px</option>
				<option value="12px">12px</option>
				<option value="13px">13px</option>
				<option value="14px" selected="selected">14px</option>
				<option value="16px">16px</option>
				<option value="18px">18px</option>
				<option value="20px">20px</option>
				<option value="24px">24px</option>
			</select>&nbsp;&nbsp;&nbsp;
			<button id="btn-run" class="btn btn-success btn-sm">运行</button>&nbsp;
			<button id="btn-submit" class="btn btn-primary btn-sm">提交</button>
			
		</div>
	</div>

    <form style="display: none">
        <asp:Repeater ID="rpt_quiz_info" runat="server">
            <ItemTemplate>
                <input id="input-pid" type="hidden" value="<%# Eval("Quiz_ID")%>">
                <input id="input-uid" type="hidden" value="<%#uid %>">
                <input id="input-reid" type="hidden" value="<%#id %>">
                <input id="input-projectpath" type="hidden" value="<%# Eval("Quiz_Info")%>">
            </ItemTemplate>
        </asp:Repeater>
    </form>

    <div class="editor-panel panel-primary div-left" style="padding-top: 50px; width: 300px;">
        <i class="fa fa-toggle-left" style="position: absolute; right: 0; top: 50px; font-size: 17px;" id="button" onclick="hideleft()"></i>
        <asp:Repeater ID="rpt_quiz" runat="server">
            <ItemTemplate>
                <div class="step-header page-header" style="padding: 15px; margin: 0;">
                    <h3 id="testnew" class="text-primary">
                        <span><%# Eval("Quiz_Name")%></span> &nbsp;
                        <small><%# Eval("Quiz_Type")%></small>
                    </h3>
                </div>
                <div class="step-header page-header" style="padding: 15px; margin: 0;">
                    <h4 id="clock">
                        <i class="fa fa-clock-o" style="margin-right: 10px;"></i>倒计时：<font id="count-down"><%# Eval("Quiz_Time")%></font>
                    </h4>
                </div>
                <!-- 步骤 -->
                <div class="panel-group" id="accordion">
                    <section id="Section1">
                        <div class="panel-group" id="accordion-1">

                            <div class="panel panel-outline">
                                <!-- /.panel-heading -->

                                <div class="panel-heading">
                                    <h4 class="panel-title">项目需求</h4>
                                </div>
                                <div id="collapse" class="panel-collapse collapse in" style="height: auto;">
                                    <div class="panel-body">
                                        <p>
                                            <%# Eval("Quiz_Content")%>
                                        </p>
                                    </div>
                                </div>
                            </div>
                    </section>
                </div>
            </ItemTemplate>
        </asp:Repeater>
    </div>

    <div class="div-right" style="top: 50px; left: 300px;">
        <i class="fa fa-toggle-right" style="position: absolute; left: 0; top: 0; font-size: 17px; display: none; color: #fff; z-index: 10;" id="showleft" onclick="showleft()"></i>
        <pre id="editor" class=" ace_editor ace_dark ace-idle-fingers ace_focus" style="font-size: 14px; bottom: 0px;">
            <textarea class="ace_text-input" wrap="off" spellcheck="false" style="opacity: 0; height: 17px; width: 7.703125px; right: 950.59375px; bottom: 176px;"></textarea>
        </pre>
        <div class="maxsize-log" style="display: none;">
			<div id="div-minisize"></div>
		</div>
		<textarea class="text-log" readonly="" style="position: absolute; right: 0px; bottom: 0px; width: 49px; height: 34px; max-height: 221px;">				
			</textarea>
		<div class="minisize-log">
			<div id="div-maxsize"></div>
		</div>
    </div>

    <script>
        var langTools = ace.require("ace/ext/language_tools");
        var editor = ace.edit("editor");
        editor.setTheme("ace/theme/idle_fingers");
        editor.setOptions({
            enableBasicAutocompletion: true,
            enableLiveAutocompletion: true
        });
        // uses http://rhymebrain.com/api.html
        editor.commands.on("afterExec", function (e) {
            if (e.command.name == "insertstring" && /^[\\.\(.]$/.test(e.args)) {
                editor.execCommand("startAutocomplete");
            }
        });
        var rhymeCompleter = {
            getCompletions: function (editor, session, pos, prefix, callback) {
                console.log("prefix" + prefix);//TODO
                $.getJSON("loadCodeNote.action?filePath="
						+ $("#input-projectpath").val(),
						function (wordList) {
						    console.log(wordList);
						    // wordList like [{"word":"flow","freq":24,"score":300,"flags":"bc","syllables":"1"}]
						    callback(null, wordList.map(function (ea) {
						        return {
						            name: ea.word,
						            value: ea.word,
						            score: ea.score,
						            meta: "rhyme"
						        }
						    }));
						})
            }
        }
        langTools.addCompleter(rhymeCompleter);
	</script>
    <!-- Large modal -->
    <!-- Modal -->
    <!-- Large modal -->
	<!-- Modal -->
	<div class="modal fade bs-example-modal-lg" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">×</span><span class="sr-only">Close</span>
					</button>
					<!-- <h4 class="modal-title" id="myModalLabel">Modal title</h4> -->
				</div>
				<div class="modal-body">
					<center>
						<iframe height="498" width="510" src="" frameborder="0" allowfullscreen=""></iframe>
					</center>
				</div>
			</div>
		</div>
	</div>

	<!-- 等待编译 -->
	<!-- 编程时间到等待编译 -->
	<div class="modal fade bs-example-modal-sm" id="waiting" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					
					<h4 class="modal-title" id="myModalLabel"></h4>
				</div>
				<div class="modal-body">
					<center>
						<img style="width:200px;height:150px" src="../Public/Images/waiting.gif">
					</center>
					<!-- <center>
						<div ms-widget="loading" data-loading-type="spinning-bubbles"
					style="width: 200px; height: 120px; position: relative; zoom: 1;"></div>
					</center> -->
				</div>
				<div class="modal-footer"><button disabled="" id="btn-stop-compile" type="button" class="btn btn-danger"><span>取消编译</span></button></div>
			</div>
		</div>
	</div>
	<!-- </div> -->
	<!-- 编译超时的弹出框 -->
	<div class="modal fade bs-example-modal" id="modal-notice" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">×</span><span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title" id="H1"></h4>
				</div>
				<div class="modal-body"></div>
				<div class="modal-footer">
					<a href="javascript:;" id="btn-close-timeout" type="button" class="btn btn-primary" data-dismiss="modal">关闭</a>
				</div>
			</div>
		</div>
	</div>
	<!-- 选择在线展示还是下载安装 -->
	<div id="modal-confirm" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">×</span><span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title" id="H2">确定提交吗？</h4>
				</div>
				<div class="modal-body">
					1.点击下方“提交”按钮，将会提交该项目作为最后评分依据，如果编译不通过，会极大的影响您本项目的得分。<br>
					2.如果您还不想提交，请点击右上角关闭。
				</div>
				<div class="modal-footer">
					<!-- <button id="btn-online" type="button" class="btn btn-default"
						data-dismiss="modal">在线展示</button> -->
					<a id="btn-confirm-submit" type="button" class="btn btn-primary" data-dismiss="modal">&nbsp;&nbsp;&nbsp;提交&nbsp;&nbsp;&nbsp;</a>
				</div>
			</div>
		</div>
	</div>
	<!-- 挑战完成提示框 -->
	<div class="modal fade bs-example-modal-sm" id="modal-complete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					
					<h4 class="modal-title" id="H3"></h4>
				</div>
				<div class="modal-body">
					<div id="info-div"></div>
				</div>
				<div class="modal-footer"></div>
			</div>
		</div>
	</div>
	<!-- 编程时间到等待编译 -->
	<div class="modal fade bs-example-modal-sm" id="waiting-auto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					
					<h4 class="modal-title" id="H4">编译中，请稍候... ...</h4>
				</div>
				<div class="modal-body">
					<center>
						<img style="width:200px;height:150px" src="../Public/Images/waiting.gif">
					</center>
				</div>
				<div class="modal-footer"></div>
			</div>
		</div>
	</div>
    <!-- 控制左侧标签的js -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../Public/JS/bootstrap.min.js" type="text/javascript"></script>
    <script src="../Public/JS/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        // Accordion
        $("#menu-collapse").accordion({
            header: "h3"
        });
        $("#menu-collapse1").accordion({
            header: "h3"
        });
        $(document).ready(function () {
            $(document).bind("contextmenu", function (e) {
                return false;
            });
        });
    </script>
    <script type="text/javascript">
        $("#preview").click(function () {
            // 点击"编译运行"按钮
            $('#show-android').modal({
                keyboard: false,
                backdrop: 'static',
                show: true
            });
        });
	</script>
	<script type="text/javascript">
	    function hideleft() {
	        $(".div-left").css("left", "-300px");
	        $(".div-right").css("left", "0");
	        $("#showleft").show();
	    }
	    function showleft() {
	        $(".div-left").css("left", "0");
	        $(".div-right").css("left", "300px");
	        $("#showleft").hide();
	    }

	  </script>


    <script id="hiddenlpsubmitdiv" style="display: none;"></script>
    <script>try { for (var lastpass_iter = 0; lastpass_iter < document.forms.length; lastpass_iter++) { var lastpass_f = document.forms[lastpass_iter]; if (typeof (lastpass_f.lpsubmitorig2) == "undefined") { lastpass_f.lpsubmitorig2 = lastpass_f.submit; if (typeof (lastpass_f.lpsubmitorig2) == 'object') { continue; } lastpass_f.submit = function () { var form = this; var customEvent = document.createEvent("Event"); customEvent.initEvent("lpCustomEvent", true, true); var d = document.getElementById("hiddenlpsubmitdiv"); if (d) { for (var i = 0; i < document.forms.length; i++) { if (document.forms[i] == form) { if (typeof (d.innerText) != 'undefined') { d.innerText = i; } else { d.textContent = i; } } } d.dispatchEvent(customEvent); } form.lpsubmitorig2(); } } } } catch (e) { }</script>
</body>
</html>
