<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title> Shop & Share </title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href=/S&S/Public/css/style.css rel="stylesheet" type="text/css" media="all" />
<link href=/S&S/Public/css/form.css rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src=/S&S/Public/js/jquery1.min.js></script>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<!-- start menu -->
<link href=/S&S/Public/css/megamenu.css rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src=/S&S/Public/js/megamenu.js></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script type="text/javascript" src=/S&S/Public/js/jquery.jscrollpane.min.js></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
function countItem(){
	items=document.all["checkbox"];
	var ulevel= 100-parseFloat(document.getElementById("ulevel").innerHTML)
	var m = 0
	for (i=0;i<items.length;++ i)
	{
		if (items[i].checked)
		{
			var che = i+1
			var price = document.getElementById("price"+che).innerHTML
			var nu = document.getElementById("item"+che).value
			m+=parseFloat(price)*parseFloat(nu);
		}
	}
	var mun=(parseFloat(document.getElementById("thenum").innerHTML) + m)*ulevel/100
	document.getElementById("allnum").innerHTML="总价： " + mun
	document.getElementById("money").value=mun
}
</script>
<!-- start details -->
<script src=/S&S/Public/js/slides.min.jquery.js></script>
   <script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
	</script>
		<!-- start zoom -->
	<link rel="stylesheet" href=/S&S/Public/css/zoome-min.css />
	<script type="text/javascript" src=/S&S/Public/js/zoome-e.js></script>
	<script type="text/javascript">
		$(function(){
		$('#img1,#img2,#img3,#img4').zoome({showZoomState:true,magnifierSize:[250,250]});
	});
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
<div class="mens">    
  <div class="main">
     <div class="wrap">
		<div class="cont span_2_of_3">
		  	<div class="grid images_3_of_2">
						<div id="container">
							<div id="products_example">
								<div id="products">
									<div class="slides_container">
									    <a href="#"><img class="a" id="img1" src=/S&S/Public/upload/<?php echo $list['images']?>  /></a>
									</div>
								</div>
							</div>
						</div>
	            </div>
		         <div class="desc1 span_3_of_2">
		         	<h3 class="m_3"><?php echo $list['name']?></h3>
					<h3 class="m_3">生产商&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $list['press']?></h3>
					<h3 class="m_3">生产日期&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $list['date']?></h3>
					<h3 class="m_3">库存&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $list['stock']?></h3>
					<input type="text" value=<?php echo count($arr);?> name="numbers" id="numbers" style="display:none">
					<table id="tab" border="1" style =" align:center;text-align:center ">  
        <thead style="background:#C5C5C5" >  
            <tr>    <th>选择</th> 
                <th style="cursor:pointer">配置名</th>  
                <th style="cursor:pointer">价格</th> 
<th style="cursor:pointer">数量</th>			
            </tr>  
        </thead>  
        <tbody id="tbody">  
					<?php
 $i=0; foreach ($arr as $value) { $v=json_decode($value,true); $i++; ?>
					
          <tr style="background:#C5C5C5" >  
                <td><input type="checkbox" name="checkbox" /></td>  
                <td id="name" ><?php echo $v['choices']?></td>  
                <td id=<?php echo "price".$i?>><?php echo $v['choices_price']?></td>  
                <td id="number"><input id=<?php echo "item".$i?> name="item" required="required" type="text" placeholder="0"/></td>  
            </tr>  
					<?php
 } ?>
					   
        </tbody>  
		<tfoot style="background:#FFFFFF">  
            <tr >  
                <td colspan="6">  
				<p  style="margin-top:10px"/>
                <input type="button" value="计算价格" onclick="countItem()" />       
                </td>  
            </tr>  
        </tfoot>  
    </table>
		             <p class="m_5">&#65509 <span id="thenum"><?php echo $list['current_price']?></span><span class="reducedfrom"> &#65509 <?php echo $list['price']?></span ></p>
					 <p class="m_5" id="allnum">总价： &#65509 <?php echo $list['current_price']?></p>
					 <p class="m_5" id="ulevel" style="display:none"><?php echo $ulevel?></p>
		         	 <div class="btn_form">
						<form action="<?php echo U('Shop/cart');?>" method="post" id="form-validate">
							<input type="text" value=<?php echo $list['isbn']?> name="isbn" id="isbn" style="display:none">
							<input type="text" value=<?php echo $list['current_price']?> name="money" id="money" style="display:none">
							<input type="submit" value="buy" title="">
						</form>
					 </div>
				     <p class="m_text2"> </p>
			     </div>
			   <div class="clear"></div>	
	    <div class="clients">
	    <h3 class="m_3">10 Other Products in the same category</h3>
		<ul id="flexiselDemo3">
<?php if(is_array($click)): $k = 0; $__LIST__ = $click;if( count($__LIST__)==0 ) : echo "有好东西记得分享哦~" ;else: foreach($__LIST__ as $key=>$bookboxs): $mod = ($k % 2 );++$k;?><li><img src=/S&S/Public/upload/<?php echo $bookboxs['images'] ?> /><a href="<?php echo U('Shop/book','id='.$bookboxs['isbn']);?>"><p>&#65509; <?php echo $bookboxs['current_price']?></p></a></li><?php endforeach; endif; else: echo "有好东西记得分享哦~" ;endif; ?>
</ul>
	<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel();
			$("#flexiselDemo2").flexisel({
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src=/S&S/Public/js/jquery.flexisel.js></script>
     </div>
     <div class="toogle">
     	<h3 class="m_3">Product Details</h3>
     	<p class="m_text"><?php echo $list['detail']?></p>
     </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
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