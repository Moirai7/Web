
//编译的代码对应的常量
var COMPILE_INFO = {
	success : 0,
	error : 1,
	running : 2,
	timeout : 3,
	codeError:4
}
//心跳对应的常量
var CODING_STATUS = {
	CODING_CONNECT_OK : 0,
	CODING_TIMEOUT : 1,
	CODING_NET_WORK_ERROR : 2,
	CODING_LOGIN_ERROR : 3,
	CODING_ERR : 4
}
var LOG_SIZE_CONSTANT = {
		initial:0,
		showRes:1,
		minisize:2,
		maxsize:3,
}
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
//请求编译结果的循环
var intervalCompile;

//倒计时的循环
var intervalCountdown;
//停止编译按钮的倒计时
var intervalCompileCountdown;
//编辑器
var editor;