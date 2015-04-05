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
    
    <div class="col-main" style="margin-left:250px">
        <div class="my-account register_account">
            <div class="page-title">
                <h1>Edit Account Level</h1>
            </div>
        <form action="" method="post" id="form-validate" class="registerform">
            <div class="fieldset">
            <input name="form_key" type="hidden" >
            <h2 class="legend">ACCOUNT</h2>
            <ul class="form-list">
			<volist name="list" id="bookboxs"  empty="有好东西记得分享哦~" key="k">
			<li>
			
                <div class="input-box">
					<label for="current_password" ><?php echo $bookboxs['user']?></label>
                    <select id="sort" name="sort" required="required" type="text" style="width:70%"/>
					
                <option value="null">Change level</option>
                <option value="0">Basic customer</option>         
                <option value="1">Silver customer</option>  
                <option value="2">Golden customer</option>
            </select>
                </div>
            </li>
			</volist>
           
            </ul>
            </div>
            <div class="buttons-set">
                <p class="required">* Required Fields</p>
                <button type="submit" title="Save" class="button"><span><span>Change</span></span></button>
            </div>
        </form>
        </div>                
    </div>
    </div>
</div>
<script type="text/javascript" src=__PUBLIC__/js/index.js></script>
<include file="Common:footer" />