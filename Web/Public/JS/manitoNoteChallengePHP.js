/**
 * 注释的次序
 */
var cNum = 1;
/**
 * 提示的类型: 4为C
 */
var pType = 4;

var isFocus = 0;
/**
 * 大神是否开启
 */
var manitoSwitch = true;
/**
 * 判断是否第一次获得焦点
 */
var isFirst = true;
/**
 * 点击“自己写”之后，保存的文件内容
 */
var backupContent;
$(document).ready(function() {
	// 点击自己写后，第一次获得焦点时，打印一行注释
	editor.on("focus", function() {

		if (manitoSwitch && isFirst && editor.getValue().trim() == "") {

			getManitoNote();
			isFirst = false;
		}
	});
	// 点击自己写，清空内容
	$("#btn-by-own").click(function() {
		backupContent = editor.getValue();
		editor.setValue("");
		isFirst = true;
	});
	//点击“恢复”按钮，恢复内容
	$("#btn-renew").click(function(){
		editor.setValue(backupContent);
	});
	$("#btn_manito").click(function() {
		if (manitoSwitch) {
			$("#btn_manito").text("开启大神");
			manitoSwitch = false;
		} else {
			$("#btn_manito").text("关闭大神");
			manitoSwitch = true;
		}
	});

	// 为光标移动绑定监听事件，更新当前行数currentInsertRowNo
	editor.selection.on("changeCursor", function() {

		currentInsertRowNo = editor.selection.getCursor().row;
	});
	// 为回车绑定监听事件
/*	editor.commands.addCommand({
		name : 'myCommand',
		bindKey : {
			win : 'Enter',
			mac : 'Enter'
		},
		exec : function(editor) {
			if (manitoSwitch) {
				getManitoNote();
			} else {
				editor.insert("\n");
			}

		},
		readOnly : false
	// false if this command should not apply in readOnly mode
	});*/

	// type();
});
/*
 * i = 0; function type() { text = "//大神的提示"; str = text.substr(0, i);
 * $(".textarea_code").val(str + ""); i++; if (i > text.length) { i = 0; return; }
 * setTimeout("type()", 100); }
 */
/**
 * ajax获取大神指点
 */
var currentInsertRowNo;
var currentInsertRowCon;

var currentSearchRowNo;
var currentSearchRowCon;
function getManitoNote() {
	// 这里是大神提示的使用次数
	$.post("statistics.action", {
		"pid" : $("#input-pid").val(),
		"flag" : "manito"
	}, function(data) {
		console.log("统计大神提示次数");
	}, "json");

	currentInsertRowNo = editor.selection.getCursor().row;
	currentSearchRowCon = getCurrentRow();

	if (currentSearchRowCon == "") {

		$.post("manitoChallengeNote.action", {
			"manitotype" : 1,
			"ptype" : 7,
			"pname" : $("#input-filename").attr("value"),
			"currentline" : currentSearchRowCon.trim()
		}, function(data) {
			editor.find(data);
			editor.replace("");
			editor.insert("\n" + data + "\n");
		}, "json");
		// alert("你在测试" + currentSearchRowNo);
	}else if (currentSearchRowCon.indexOf("//完成") >= 0) {

		/*$.post("manitoNote.action", {
			"manitotype" : 2,
			"ptype" : 2,
			"pname" : $("#input-filename").attr("value"),
			"filepath" : filepath,
			"currentline" : currentSearchRowCon.trim()
		}, function(data) {
			editor.find(data);
			editor.replace("");
			editor.insert("\n" + data + "\n");
		}, "json");*/
		alert("项目完成");
		manitoSwitch = false;
	}  else if (currentSearchRowCon.indexOf("//") >= 0) {

		$.post("manitoChallengeNote.action", {
			"manitotype" : 2,
			"ptype" : 7,
			"pname" : $("#input-filename").attr("value"),
			"currentline" : currentSearchRowCon.trim()
		}, function(data) {
			editor.find(data);
			editor.replace("");
			editor.insert("\n" + data + "\n");
		}, "json");
		// alert("$$$$$"+currentSearchRowCon);
		// alert("你在测试中间" + currentSearchRowNo);
	}else {

		$.post("manitoChallengeNote.action", {
			"manitotype" : 3,
			"ptype" : 7,
			"pname" : $("#input-filename").attr("value"),
			"currentline" : currentSearchRowCon.trim()
		}, function(data) {

			if (data == "" && currentSearchRowCon != "}") {
				editor.find(data);
				editor.replace("");
				editor.insert("\n");
				//alert("呀，你输错了，快点检查一下。然后再继续。");
			} else {

				editor.find(data);
				editor.replace("");
				//editor.insert("\n" + data + "\n");
				editor.insert("\n");
			}
		}, "json");
		// alert("你在正常输入代码" + currentSearchRowNo);
	}

}
/**
 * 获取当前行的文字
 */
function getCurrentRow() {
	currentSearchRowNo = currentInsertRowNo;
	while (currentSearchRowNo >= 0) {

		currentSearchRowCon = editor.session.getLine(currentSearchRowNo);

		if (currentSearchRowCon.trim() != ""&&currentSearchRowCon.indexOf("/**代码区开始**/")<0 && currentSearchRowCon.indexOf("/**代码区结束**/")<0) {
			// alert(currentSearchRowCon + currentSearchRowCon.trim() != "");
			return currentSearchRowCon;
		}
		currentSearchRowNo--;
	}

	// 这里是为了恢复正确的行数
	currentSearchRowNo++;
	return "";
}
/**
 * 插入文字
 * 
 * @param obj
 * @param str
 */
/*
 * function insertText(obj,str) { if (document.selection) { var sel =
 * document.selection.createRange(); sel.text = str; } else if (typeof
 * obj.selectionStart === 'number' && typeof obj.selectionEnd === 'number') {
 * var startPos = obj.selectionStart, endPos = obj.selectionEnd, cursorPos =
 * startPos, tmpStr = obj.value; obj.value = tmpStr.substring(0, startPos) + str +
 * tmpStr.substring(endPos, tmpStr.length); cursorPos += str.length;
 * obj.selectionStart = obj.selectionEnd = cursorPos; } else { obj.value += str; } }
 */