<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title> Shop & Share </title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href=/S&S/Public/css/style.css rel="stylesheet" type="text/css" media="all" />
<link href=/S&S/Public/css/my_style.css rel="stylesheet" type="text/css" media="all" />
<link href=/S&S/Public/css/form.css rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src=/S&S/Public/js/jquery1.min.js></script>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<!-- start menu -->
<link href=/S&S/Public/css/megamenu.css rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src=/S&S/Public/js/megamenu.js></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script type="text/javascript" src=/S&S/Public/js/jquery-1.11.1.min.js></script>
    <script type="text/javascript" src=/S&S/Public/js/Validform_v5.3.2_min.js></script>
    <script type="text/javascript">
    $(function(){
        $(".registerform").Validform();
    })
    </script>
</head>
<body>
<div id="container ">
        	<div class="header-top">
	   <div class="wrap"> 
			 <div class="cssmenu">
				<ul>
					<li class="active"><li><a href="/S&S">about</a></li> |
					<li><a href=<?php echo $linkmsg?>><?php echo $msg;?></a></li>
				</ul>
			</div>
			<div class="clear"></div>
 		</div>
	</div>
	<div class="header-bottom">
	    <div class="wrap">
			<div class="header-bottom-left">
				<div class="logo">
					<a href="/S&S"><img src=/S&S/Public/images/logo.png  alt=""/></a>
				</div>
				<div class="menu">
	        <ul class="megamenu skyblue">
				<li class="active grid"><a href="/S&S">HOME</a></li>
				<li><a class="color4" href="<?php echo U('Shop/booklist?id=1&page=1');?>">家电</a>
					<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4><a class="color6" href="<?php echo U('Shop/booklist?id=2&page=1');?>">空调</a></h4>
								<ul>
									<li><a href="<?php echo U('Shop/booklist?id=3&page=1');?>">格力</a></li>
									<li><a href="<?php echo U('Shop/booklist?id=4&page=1');?>">美的</li>
									<li><a href="<?php echo U('Shop/booklist?id=5&page=1');?>">海尔</a></li>
									<li><a href="<?php echo U('Shop/booklist?id=6&page=1');?>">TCL</a></li>
									<li><a href="<?php echo U('Shop/booklist?id=7&page=1');?>">志高</a></li>
									<li><a href="<?php echo U('Shop/booklist?id=8&page=1');?>">海信</a></li>
									<li><a href="<?php echo U('Shop/booklist?id=9&page=1');?>">长虹</a></li>
									<li><a href="<?php echo U('Shop/booklist?id=10&page=1');?>">松下</a></li>
									<li><a href="<?php echo U('Shop/booklist?id=11&page=1');?>">其他</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4><a class="color4" href="<?php echo U('Shop/booklist?id=12&page=1');?>">平板电视</a></h4>
								<ul>
									<li><a href="<?php echo U('Shop/booklist?id=13&page=1');?>">海信</a></li>
									<li><a href="<?php echo U('Shop/booklist?id=14&page=1');?>">创维</li>
									<li><a href="<?php echo U('Shop/booklist?id=15&page=1');?>">酷开</li>
									<li><a href="<?php echo U('Shop/booklist?id=16&page=1');?>">夏普</li>
									<li><a href="<?php echo U('Shop/booklist?id=17&page=1');?>">TCL</li>
									<li><a href="<?php echo U('Shop/booklist?id=18&page=1');?>">三星</li>
									<li><a href="<?php echo U('Shop/booklist?id=19&page=1');?>">索尼</li>
									<li><a href="<?php echo U('Shop/booklist?id=20&page=1');?>">LG</li>
									<li><a href="<?php echo U('Shop/booklist?id=21&page=1');?>">长虹</li>
									<li><a href="<?php echo U('Shop/booklist?id=22&page=1');?>">其他</li>
								</ul>	
							</div>							
						</div>
					</div>
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4><a class="color4" href="<?php echo U('Shop/booklist?id=23&page=1');?>">家庭影院</a></h4>
								<ul>
									<li><a href="<?php echo U('Shop/booklist?id=24&page=1');?>">飞利浦</a></li>
									<li><a href="<?php echo U('Shop/booklist?id=25&page=1');?>">索尼</a></li>
									<li><a href="<?php echo U('Shop/booklist?id=26&page=1');?>">三星</a></li>
									<li><a href="<?php echo U('Shop/booklist?id=27&page=1');?>">TCL</a></li>
									<li><a href="<?php echo U('Shop/booklist?id=28&page=1');?>">小米</a></li>
									<li><a href="<?php echo U('Shop/booklist?id=29&page=1');?>">其他</a></li>
								</ul>	
							</div>												
						</div>
					</div>
					</div>
				</li>
				<li><a class="color4" href="<?php echo U('Shop/booklist?id=30&page=1');?>">电子产品</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4><a class="color4" href="<?php echo U('Shop/booklist?id=72&page=1');?>">手机</a></h4>
								<ul>
									<li><a href="<?php echo U('Shop/booklist?id=31&page=1');?>">苹果</li>
									<li><a href="<?php echo U('Shop/booklist?id=32&page=1');?>">三星</li>
									<li><a href="<?php echo U('Shop/booklist?id=33&page=1');?>">小米</li>
									<li><a href="<?php echo U('Shop/booklist?id=34&page=1');?>">魅族</li>
									<li><a href="<?php echo U('Shop/booklist?id=35&page=1');?>">华为</li>
									<li><a href="<?php echo U('Shop/booklist?id=36&page=1');?>">中兴</li>
									<li><a href="<?php echo U('Shop/booklist?id=37&page=1');?>">酷派</li>
									<li><a href="<?php echo U('Shop/booklist?id=38&page=1');?>">诺基亚</li>
									<li><a href="<?php echo U('Shop/booklist?id=39&page=1');?>">HTC</li>
									<li><a href="<?php echo U('Shop/booklist?id=40&page=1');?>">其他</a></li>
								</ul>	
							</div>	
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4><a class="color4" href="<?php echo U('Shop/booklist?id=73&page=1');?>">笔记本</a></h4>
								<ul>
									<li><a href="<?php echo U('Shop/booklist?id=41&page=1');?>">联想</li>
									<li><a href="<?php echo U('Shop/booklist?id=42&page=1');?>">惠普</li>
									<li><a href="<?php echo U('Shop/booklist?id=43&page=1');?>">华硕</li>
									<li><a href="<?php echo U('Shop/booklist?id=44&page=1');?>">宏基</li>
									<li><a href="<?php echo U('Shop/booklist?id=45&page=1');?>">神州</li>
									<li><a href="<?php echo U('Shop/booklist?id=46&page=1');?>">三星</li>
									<li><a href="<?php echo U('Shop/booklist?id=47&page=1');?>">外星人</li>
									<li><a href="<?php echo U('Shop/booklist?id=48&page=1');?>">HTC</li>
									<li><a href="<?php echo U('Shop/booklist?id=49&page=1');?>">GL</li>
									<li><a href="<?php echo U('Shop/booklist?id=50&page=1');?>">ThinkPad</li>
									<li><a href="<?php echo U('Shop/booklist?id=51&page=1');?>">Mac</li>
									<li><a href="<?php echo U('Shop/booklist?id=52&page=1');?>">其他</a></li>
								</ul>	
							</div>	
						</div>
					</div>
				</div>
				</li>	
				<li><a class="color4" href="<?php echo U('Shop/booklist?id=71&page=1');?>">其他</a>
					<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4><a class="color6" href="<?php echo U('Shop/booklist?id=53&page=1');?>">摄像机</a></h4>
								<ul>
									<li><a href="<?php echo U('Shop/booklist?id=54&page=1');?>">佳能</a></li>
									<li><a href="<?php echo U('Shop/booklist?id=55&page=1');?>">卡西欧</a></li>
									<li><a href="<?php echo U('Shop/booklist?id=56&page=1');?>">尼康</a></li>
									<li><a href="<?php echo U('Shop/booklist?id=57&page=1');?>">索尼</a></li>
									<li><a href="<?php echo U('Shop/booklist?id=58&page=1');?>">富士</a></li>
									<li><a href="<?php echo U('Shop/booklist?id=59&page=1');?>">其他</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4><a class="color6" href="<?php echo U('Shop/booklist?id=60&page=1');?>">移动储存</a></h4>
								<ul>
									<li><a href="<?php echo U('Shop/booklist?id=61&page=1');?>">金士顿</a></li>
									<li><a href="<?php echo U('Shop/booklist?id=62&page=1');?>">威刚</a></li>
									<li><a href="<?php echo U('Shop/booklist?id=63&page=1');?>">闪迪</a></li>
									<li><a href="<?php echo U('Shop/booklist?id=64&page=1');?>">希捷</a></li>
									<li><a href="<?php echo U('Shop/booklist?id=65&page=1');?>">东芝</a></li>
									<li><a href="<?php echo U('Shop/booklist?id=66&page=1');?>">西部数据</a></li>
									<li><a href="<?php echo U('Shop/booklist?id=67&page=1');?>">惠普</a></li>
									<li><a href="<?php echo U('Shop/booklist?id=68&page=1');?>">索尼</a></li>
									<li><a href="<?php echo U('Shop/booklist?id=69&page=1');?>">威刚</a></li>
									<li><a href="<?php echo U('Shop/booklist?id=70&page=1');?>">其他</a></li>
								</ul>	
							</div>							
						</div>
					</div>
					</div>
				</li>
			</ul>
			</div>
		</div>
	   <div class="header-bottom-right">
         <div class="search">
			<form name="keyform" method="post" action="/S&S/index.php/Home/Shop/search">		 
				<input type="text" name="id" class="textbox" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}">
				<input type="submit" value="Subscribe" id="submit">
			</form>
		 </div>
	  <div class="tag-list">
		<ul class="icon1 sub-icon1 profile_img">
			<li><a class="active-icon c2" href="#"> </a>
				<ul class="sub-icon1 list">
					<?php if(!$cartnum) echo '<li><h3>没找到？试试搜索吧</h3><a href=""></a></li>
					<li><p> 众里寻他千百度，蓦然回首 </p></li>
					<li><p> 那“书”却在，灯火阑珊处 </p></li>'; else echo '<li><h3>是他是他就是他</h3><a href=""></a></li>
					<li><p> 衣带渐宽终不悔，为“书”消得人憔悴。</p></li>';?>
				</ul>
			</li>
		</ul>
	     <ul class="last"><li><a href="<?php echo U('Shop/showcart');?>">Cart(<?php if($cartnum) echo $cartnum;else echo 0;?>)</a></li></ul>
	  </div>
    </div>
     <div class="clear"></div>
     </div>
	</div>
    	<div class="mens" style="min-height:1210px">    
<?php
if($email=="12301055"){?>
<div class="sidebar sting ">
  <h1><i class="fa fa-bars push"></i>Account <span class="color">Menu</span></h1>
    <ul>
	<li class="sil"><a href="{:U('Shop/user')}"><i class="fa fa-dashboard push"></i>Account Dashboard<i class="fa fa-angle-right"></i></a><span class="hover"></span></li>
    <li class="sil"><a href="<?php echo U('Shop/editinfo');?>"><i class="fa fa-dashboard push"></i>Account Information<i class="fa fa-angle-right"></i></a><span class="hover"></span>
	</li>
    <li class="sil"><a href="<?php echo U('Shop/history');?>"><i class="fa fa-user push"></i>Shopping History<i class="fa fa-angle-right"></i></a><span class="hover"></span>
    </li>
    <li class="sil"><a href="<?php echo U('Shop/seller');?>"><i class="fa fa-cog push"></i>Seller center<i class="fa fa-angle-right"></i></a><span class="hover"></span>
    </li>
	<li class="sil"><a href="<?php echo U('Shop/management');?>"><i class="fa fa-cog push"></i>Customer management<i class="fa fa-angle-right"></i></a><span class="hover"></span>
    </li>
  </ul>
</div>
<?php
}else{ ?>
<div class="sidebar sting ">
  <h1><i class="fa fa-bars push"></i>Account <span class="color">Menu</span></h1>
    <ul>
	<li class="sil"><a href="<?php echo U('Shop/user');?>"><i class="fa fa-dashboard push"></i>Account Dashboard<i class="fa fa-angle-right"></i></a><span class="hover"></span></li>
    <li class="sil"><a href="<?php echo U('Shop/editinfo');?>"><i class="fa fa-dashboard push"></i>Account Information<i class="fa fa-angle-right"></i></a><span class="hover"></span>
	</li>
    <li class="sil"><a href="<?php echo U('Shop/history');?>"><i class="fa fa-user push"></i>Shopping History<i class="fa fa-angle-right"></i></a><span class="hover"></span>
    </li>
    <li class="sil"><a href="<?php echo U('Shop/seller');?>"><i class="fa fa-cog push"></i>Seller center<i class="fa fa-angle-right"></i></a><span class="hover"></span>
    </li>
  </ul>
</div>
<?php
}?>	
    
    <div class="col-main" style="margin-left:250px">
        <div class="my-account register_account">
            <div class="page-title">
                <h1>Edit Account Information</h1>
            </div>
        <form action="<?php echo U('Admin/change');?>" method="post" id="form-validate" class="registerform">
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
        <form action="<?php echo U('Admin/changephone');?>" method="post" id="form-validate">
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
<script type="text/javascript" src=/S&S/Public/js/index.js></script>
 <div class="footer">
		<div class="footer-bottom">
			<div class="wrap">
	             <div class="copy">
			        <p>Copyright &copy; 2014.数据库实践大作业</p>
		         </div>
				<div class="f-list2">
				 <ul>
					<li><a href="http://moirai.cn">About Us</a></li> |
					<li><a href="http://moirai.cn">Contact Us</a></li> 
				 </ul>
			    </div>
			    <div class="clear"></div>
		      </div>
	     </div>
	</div>
<div style="display:none"></div>
</body>
</html>