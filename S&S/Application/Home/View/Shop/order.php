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
    <div class="col-main" >
        <div class="my-account register_account">
            <div class="page-title">
                <h1>Edit order Information</h1>
            </div>
        <form action={:U(\'Shop/buy\',\'id=\'.$id)} method="post" id="form-validate" class="registerform">
            <div class="fieldset">
            <input name="form_key" type="hidden" >
            <h2 class="legend">Order Information</h2>
            <ul class="form-list">
			 <li>
                <label for="Name" class="required"><em>*</em>Name</label>
                <div class="input-box">
                    <input type="text" name="Name" id="Name" value=<?php echo $msg?> title="Name" readonly="readonly" class="input-text required-entry validate-email">
                </div>
            </li>
            <li>
                <label for="email" class="required"><em>*</em>Email Address</label>
                <div class="input-box">
                    <input type="text" name="email" id="email" value=<?php echo $email?> title="Email Address" readonly="readonly" class="input-text required-entry validate-email">
                </div>
            </li>
			<li>
                <label for="Address" class="required"><em>*</em>Address</label>
                <div class="input-box">
                    <input type="text" name="Address" id="Address" value='' title="Address"  class="input-text required-entry validate-email">
                </div>
            </li>
			<li>
                <label for="phone" class="required"><em>*</em>Phone</label>
                <div class="input-box">
                    <input type="text" name="phone" id="phone" value=<?php echo $phone?> title="Phone" readonly="readonly" class="input-text required-entry validate-email">
                </div>
            </li>
			<li>
                <label for="Card" class="required"><em>*</em>Credit/Debit Card</label>
                <div class="input-box">
                    <input type="text" name="Card" id="Card" value='' title="Card" class="input-text required-entry validate-email">
                </div>
            </li>
            
            </ul>
            </div>
            <div class="buttons-set">
                <p class="required">* Required Fields</p>
                <button type="submit" title="Buy" class="button"><span><span>Buy</span></span></button>
            </div>
        </form>
        </div>                
    </div>
    </div>
</div>
<script type="text/javascript" src=__PUBLIC__/js/index.js></script>
<include file="Common:footer" />