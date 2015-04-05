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
        <div class="my-account">
		<div class="dashboard">
			<div class="page-title">
				<h1>My Dashboard</h1>
			</div>
        <div class="welcome-msg">
			<p class="hello"><strong>Hello,<?php echo $msg?>!</strong></p>
			<p>From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>
			<a href="{:U('Admin/logout')}">logout</a>
		</div>
        <div class="box-account box-info">
        <div class="box-head">
            <h2>ACCOUNT INFORMATION</h2>
        </div>
        <div class="col2-set">
			<div class="col-1">
				<div class="box-info">
					<div class="box-title">
						<h3>CONTACT INFORMATION</h3>
							<a href="">Edit</a>
					</div>
				<div class="box-content">
                <p>
                    <?php echo $msg?><br>
                </p>
				<p>
                    <?php echo $ulevel?><br>
                </p>
				</div>
				</div>
			</div>
		</div>
		<div class="col2-set">
			<div class="col-1">
				<div class="box-info">
					<div class="box-title">
						<h3>SHOPPING HISTORY</h3>
					</div>
				<div class="box-content">
                <p>
                    Online shopping or e-shopping is a form of electronic commerce which allows consumers to directly buy goods or services from a seller over the Internet using a web browser.
                </p>
				</div>
				</div>
			</div>
		</div>
		<div class="col2-set">
			<div class="col-1">
				<div class="box-info">
					<div class="box-title">
						<h3>SELLER CENTER</h3>
					</div>
				<div class="box-content">
                <p>
                    An online shop evokes the physical analogy of buying products or services at a bricks-and-mortar retailer or shopping center; the process is called business-to-consumer (B2C) online shopping. 
                </p>
				</div>
				</div>
			</div>
		</div>
		</div>
		</div>
		</div>  
	</div>
	</div>        
</div>
<script type="text/javascript" src=__PUBLIC__/js/index.js></script>
<include file="Common:footer" />