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
		<div class="my-account">
		<div class="section group">
		  <div class="cont span_2_of_3">
		  <h2 class="head">Products</h2>
		  <div class="top-box1">
		    <div class="col_1_of_3 span_1_of_3"> 
			   <a href="<?php echo U('Shop/add');?>">
				<div class="inner_content clearfix">
					<div class="product_image">
						<img src=/S&S/Public/images/add.jpg  alt=""/>
					</div>
					<div class="price">
					   <div class="cart-left">
							<p class="title">点击添加新书</p>
							<div class="price1"><span class="actual">有好书要分享哦</span></div>
						</div>
						<div class="clear"></div>
					 </div>	
				</div>
                </a>
			</div>
		    <?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "有好书记得分享哦~" ;else: foreach($__LIST__ as $key=>$bookboxs): $mod = ($k % 2 );++$k;?><div class="col_1_of_3 span_1_of_3"> 
				<div class="inner_content clearfix">
			   <a href="<?php echo U('Shop/changeinfo','id='.$bookboxs['isbn']);?>">
					<div class="product_image">
						<img src=/S&S/Public/upload/<?php echo $bookboxs['images']?>  alt=""/>
					</div>
                 </a>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title"><?php echo $bookboxs['name']?></p>
							<div class="price1"><span class="actual">&#65509;<?php echo $bookboxs['current_price']?></span></div>
						</div>
      					</script>
						<div class="cart-right" onclick="firm(<?php echo $bookboxs[isbn]?>)"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
			</div><?php endforeach; endif; else: echo "有好书记得分享哦~" ;endif; ?>
			<div class="clear"></div>
		  </div>	
		</div>
		</div>
		</div>
		<div class="mens-toolbar">
		  	 <div class="pager">   
       		<ul class="dc_pagination dc_paginationA dc_paginationA06"><li><a>共有<?php echo ceil($counts/20);?>页</a></li>
<?php
$first=1; $prev=$page-1; $next=$page+1; $last=$counts; if ($page > 1) { ?>
　<li><a  href="<?php echo U('Shop/seller?page='.$first);?>">首页</a></li>
　<li><a  href="<?php echo U('Shop/seller?page='.$pagepre);?>">&lt;&lt;</a></li>
<?php } if($page<7&&$counts>7){?>
<li><a  href="{:U('Shop/seller?page=1')}">1</a></li>
<li><a  href="<?php echo U('Shop/seller?page=2');?>">2</a></li>
<li><a  href="<?php echo U('Shop/seller?page=3');?>">3</a></li>
<li><a  href="<?php echo U('Shop/seller?page=4');?>">4</a></li>
<li><a  href="<?php echo U('Shop/seller?page=5');?>">5</a></li>
<li><a  href="<?php echo U('Shop/seller?page=6');?>">6</a></li>
<li><a  href="<?php echo U('Shop/seller?page=7');?>">7</a></li>
<li><a  href="">...</a></li>
<?php }elseif($page<7&&$counts<7){ for($i=1;$i<=$counts;$i++){ ?>
<li><a  href="<?php echo U('Shop/seller?page='.$i);?>"><?php echo $i;?></a></li>
<?php } }elseif($page>7&&$page<$counts-7){?>
<li><a  href="{:U('Shop/seller?page=1')}">1</a></li>
<li><a  href="<?php echo U('Shop/seller?page=2');?>">2</a></li>
<li><a  href="">...</a></li>
<li><a  href="<?php echo U('Shop/seller?page='.$page-1);?>">$page</a></li>
<li><a  href="<?php echo U('Shop/seller?page='.$page);?>">$page+1</a></li>
<li><a  href="<?php echo U('Shop/seller?page='.$page+1);?>">$page+2</a></li>
<li><a  href="<?php echo U('Shop/seller?page='.$page+2);?>">$page+3</a></li>
<li><a  href="">...</a></li>
<?php }elseif($page<7&&$counts<7){ for($i=1;$i<=$counts;$i++){ ?>
<li><a  href="<?php echo U('Shop/seller?page='.$i);?>"><?php echo $i;?></a></li>
<?php } } if($page<$counts){ ?>
　<li><a  href="<?php echo U('Shop/seller?page='.$next);?>">&gt;&gt;</a></li>
　<li><a  href="<?php echo U('Shop/seller?page='.$last);?>">最后一页</a></li>
<?php } ?>
		  	</ul>
	   		<div class="clear"></div>
    		</div>
     		<div class="clear"></div>
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
<script language="javascript">
		function firm(myid){
			var deletehref = "/S&S/index.php/Home/Shop/deletebook/id/"+myid;
   			if(confirm("确认删除？")){
        		location.href=deletehref;
   			}
      	}
    </script>