<html>
<head>
<title> Shop & Share </title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href=__PUBLIC__/css/style.css rel="stylesheet" type="text/css" media="all" />
<link href=__PUBLIC__/css/my_style.css rel="stylesheet" type="text/css" media="all" />
<link href=__PUBLIC__/css/form.css rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src=__PUBLIC__/js/jquery1.min.js></script>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<!-- start menu -->
<link href=__PUBLIC__/css/megamenu.css rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src=__PUBLIC__/js/megamenu.js></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script type="text/javascript" src=__PUBLIC__/js/jquery-1.11.1.min.js></script>
    <script type="text/javascript" src=__PUBLIC__/js/Validform_v5.3.2_min.js></script>
    <script type="text/javascript">
    $(function(){
        $(".registerform").Validform();
    })
    </script>
</head>
<body>
<div id="container ">
        <include file="Common:header" />
    	<div class="mens" style="min-height:1210px">    
<?php
if($email=="12301055"){?>
<include file="Common:accountsildebar2" />
<?php
}else{
?>
<include file="Common:accountsildebar" />
<?php
}?>	
 <form action="{:U('Shop/sendemail')}" method="post" id="form-validate" class="registerform">
<textarea class="m_text" id="detail" name="detail" style="
    width: 70%;
    height: 90%;
"></textarea>
<div class="buttons-set">
                <button type="submit" title="Save" class="button"><span><span>Save</span></span></button>
            </div>
</form>
    </div>
</div>
<script type="text/javascript" src=__PUBLIC__/js/index.js></script>
<include file="Common:footer" />