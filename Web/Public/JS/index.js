$(document).ready(function(){

	$("#select-salary").change(function(){
		
		//alert($("#select-salary").val()+"#"+$("#province").val()+"#"+$("#city").val()+"#"+$("#woo-form-album").attr("action"));
		location.replace("User_Index.aspx?flag="+$("#input-flag").val()+"&salary="+$("#select-salary").val()+"&province="+$("#province").val()+"&retype="+$("#input-retype").val());
		/*$("#woo-form-album").attr("action", "battle.action?flag="+$("#input-flag").val()+"&salary="+$("#select-salary").val()+"&province="+$("#province").val()+"&city="+$("#city").val()+"&page=");*/
		
	});
	$("#province").change(function(){
		//alert($("#province").find("option:selected").attr("name"));
		//alert($("#select-salary").val()+"#"+$("#province").val()+"#"+$("#city").val());
		location.replace("User_Index.aspx?flag="+$("#input-flag").val()+"&salary="+$("#select-salary").val()+"&province="+$("#province").val()+"&retype="+$("#input-retype").val());
	});
	
	$("#select-retype").change(function(){
		console.log("项目类型"+$("#select-retype").val());
		location.replace("User_Index.aspx?flag="+$("#input-flag").val()+"&salary="+$("#select-salary").val()+"&province="+$("#province").val()+"&retype="+$("#select-retype").val());
		//location.replace("User_Index.aspx?flag="+$("#input-flag").val()+"&salary="+$("#select-salary").val()+"&province="+$("#province").val()+"&retype="+$("#retype").val().attr("name")+"&selectedCity="+$("#province").find("option:selected").attr("name"));s

		//alert($("#select-salary").val()+"#"+$("#province").val()+"#"+$("#city").val());
	});
	
	/*$(".woo").addClass("md-col-3");*/
	
});
