/**
 * 思考时间
 */
var thinkTime = 0;
/**
 * 打字速度
 */
var speed=0;
/**
 * 判断是否第一次获得焦点
 */
var isSpeedStart = true;
var startStr;
var endLength;

/**
 * 开始的时间
 */
var thinkTimeStart = 0;
var thinkTimeEnd = 0;
var myDateStart = 0;
var firstInput = true;

function initStatistics() {
	myDateStart = new Date();
	//获取思考时间
	//获取开始时间
	thinkTimeStart = myDateStart.getTime();
	console.log("开始思考"+thinkTimeStart);
	$("#editor").keydown(function(event) {
		if(firstInput){
			firstInput = false;
			//思考时间
			var myDateEnd = new Date();
			thinkTimeEnd = myDateEnd.getTime();
			console.log("思考结束"+thinkTimeEnd);
			thinkTime = thinkTimeEnd - thinkTimeStart;
			console.log("思考时间"+thinkTime);
			console.log(thinkTimeEnd+"时间"+thinkTimeStart);
			//打字速度
			startStr = editor.getValue();
			setTimeout(getSpeed, 1000*20);//这里是测30秒的字数
		}
		
	});
	
	
}
//获取打字速度
function getSpeed(){
	
	speed = (getLength(editor.getValue())-getLength(startStr))*3;
	
	console.log("打字速度："+speed+"思考时间："+thinkTime);
	/*$.post("statistics-challenge.action", {
		"flag" : "speed",
		"speed" : speed,
		"thinkTime" : thinkTime,
		"pid" : $("#input-pid").val()
	}, "json");*/
}
function getLength(str) {
    ///<summary>获得字符串实际长度，中文2，英文1</summary>
    ///<param name="str">要获得长度的字符串</param>
    var realLength = 0, len = str.length, charCode = -1;
    for (var i = 0; i < len; i++) {
        charCode = str.charCodeAt(i);
        if (charCode >= 0 && charCode <= 128) realLength += 1;
        else realLength += 2;
    }
    return realLength;
};