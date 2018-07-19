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
                <h1>Edit Account Information</h1>
            </div>
        <form action="{:U('Admin/change')}" method="post" id="form-validate" class="registerform">
            <div class="fieldset">
            <input name="form_key" type="hidden" >
            <h2 class="legend">ACCOUNT INFORMATION</h2>
            <ul class="form-list">
            <li>
                <label for="email" class="required"><em>*</em>Email Address</label>
                <div class="input-box">
                    <input type="text" name="email" id="email" value=<?php echo $email?> title="Email Address" readonly="readonly" class="input-text required-entry validate-email">
                </div>
            </li>
            <li>
                <label for="current_password" class="required"><em>*</em>Current Password</label>
                <div class="input-box">
                    <input type="password" datatype="*6-15" errormsg="密码范围在6~15位之间！" title="Current Password" class="input-text required-entry"id="current_password" name="current_password">
                </div>
            </li>
            <li class="fields">
                <div class="field">
                    <label for="password" class="required"><em>*</em>New Password</label>
                    <div class="input-box">
                        <input type="password" title="New Password" datatype="*6-15" errormsg="密码范围在6~15位之间！" class="input-text validate-password required-entry" name="password" id="password">
                    </div>
                </div>
                <div class="field">
                    <label for="confirmation" class="required"><em>*</em>Confirm New Password</label>
                    <div class="input-box">
                        <input type="password" title="Confirm New Password" datatype="*" recheck="password" errormsg="您两次输入的账号密码不一致！"  class="input-text validate-cpassword required-entry" name="confirmation">
                    </div>
                </div>
            </li>
            
            </ul>
            </div>
            <div class="buttons-set">
                <p class="required">* Required Fields</p>
                <button type="submit" title="Save" class="button"><span><span>Save</span></span></button>
            </div>
        </form>
        <form action="{:U('Admin/changephone')}" method="post" id="form-validate">
            <div class="fieldset">
            <input name="form_key" type="hidden" >
            <h2 class="legend">CHANGE</h2>
            <ul class="form-list">
                 <li>
                    <label for="email" class="required"><em>*</em>Email Address</label>
                     <div class="input-box">
                        <input type="text" readonly="readonly"  name="email" id="email" value=<?php echo $email?> title="Email Address" class="input-text required-entry validate-email">
                   </div>
                 </li>
				 <li>
                    <label for="Address" class="required"><em>*</em>Address</label>
                     <div class="input-box">
                        <input type="text" readonly="readonly"  name="Address" id="Address" value='' title="Address" class="input-text required-entry validate-email">
                   </div>
                 </li>
				 <li>
                    <label for="Card" class="required"><em>*</em>Credit/Debit Card</label>
                     <div class="input-box">
                        <input type="text" readonly="readonly"  name="Card" id="Card" value='' title="Address" class="input-text required-entry validate-email">
                   </div>
                 </li>
                <li>
                <label for="phone" >Phone</label>
                <div class="input-box">
                    <input type="text" title="Phone" class="input-text" name="current_phone" value=<?php echo $phone?>>
                </div>
                </li>
                <li>
                <label for="username" >User Name</label>
                <div class="input-box">
                    <input type="text" title="username" class="input-text" name="current_username" value=<?php echo $msg?>>
                </div>
                </li>
            </ul>
            </div>
            <div class="buttons-set">
                <p class="required">* Required Fields</p>
                <button type="submit" title="Save" class="button"><span><span>Save</span></span></button>
            </div>
            </li>
        </form>
        </div>                
    </div>
    </div>
</div>
<script type="text/javascript" src=__PUBLIC__/js/index.js></script>
<include file="Common:footer" />