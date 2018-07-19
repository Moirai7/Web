
$(document).ready(function () {
    
    $("#select-salary").change(function () {
        
        //alert($("#select-salary").val()+"#"+$("#province").val()+"#"+$("#city").val()+"#"+$("#woo-form-album").attr("action"));
        location.replace(encodeURI("User_Index.aspx?flag=" + $("#input-flag").val() + "&salary=" + $("#select-salary").val() + "&province=" + $("#province").val() + "&retype=" + $("#input-retype").val()));
        /*$("#woo-form-album").attr("action", "battle.action?flag="+$("#input-flag").val()+"&salary="+$("#select-salary").val()+"&province="+$("#province").val()+"&city="+$("#city").val()+"&page=");*/
        ;
    });
    $("#province").change(function () {
        //alert($("#province").find("option:selected").attr("name"));
        //alert($("#select-salary").val()+"#"+$("#province").val()+"#"+$("#city").val());
        location.replace(encodeURI("User_Index.aspx?flag=" + $("#input-flag").val() + "&salary=" + $("#select-salary").val() + "&province=" + $("#province").val() + "&retype=" + $("#input-retype").val()));

    });

    $("#select-retype").change(function () {
        //console.log("项目类型" + $("#select-retype").val()); 
        location.replace(encodeURI("User_Index.aspx?flag=" + $("#input-flag").val() + "&salary=" + $("#select-salary").val() + "&province=" + $("#province").val() + "&retype=" + $("#select-retype").val()));
        //location.replace("index.action?flag="+$("#input-flag").val()+"&salary="+$("#select-salary").val()+"&province="+$("#province").val()+"&retype="+$("#retype").val().attr("name")+"&selectedCity="+$("#province").find("option:selected").attr("name"));s

        //alert($("#select-salary").val()+"#"+$("#province").val()+"#"+$("#city").val());
    });

    /*$(".woo").addClass("md-col-3");*/

});
$.extend({
    getUrlVars: function () {
        var vars = [], hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for (var i = 0; i < hashes.length; i++) {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    },
    getUrlVar: function (name) {
        return $.getUrlVars()[name];
    }
});