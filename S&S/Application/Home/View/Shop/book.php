<html>
<head>
<title> Shop & Share </title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href=__PUBLIC__/css/style.css rel="stylesheet" type="text/css" media="all" />
<link href=__PUBLIC__/css/form.css rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src=__PUBLIC__/js/jquery1.min.js></script>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<!-- start menu -->
<link href=__PUBLIC__/css/megamenu.css rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src=__PUBLIC__/js/megamenu.js></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script type="text/javascript" src=__PUBLIC__/js/jquery.jscrollpane.min.js></script>
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
<script src=__PUBLIC__/js/slides.min.jquery.js></script>
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
	<link rel="stylesheet" href=__PUBLIC__/css/zoome-min.css />
	<script type="text/javascript" src=__PUBLIC__/js/zoome-e.js></script>
	<script type="text/javascript">
		$(function(){
		$('#img1,#img2,#img3,#img4').zoome({showZoomState:true,magnifierSize:[250,250]});
	});
	</script>		
</head>
<body>
<div id="container ">
	<include file="Common:header" />
<div class="mens">    
  <div class="main">
     <div class="wrap">
		<div class="cont span_2_of_3">
		  	<div class="grid images_3_of_2">
						<div id="container">
							<div id="products_example">
								<div id="products">
									<div class="slides_container">
									    <a href="#"><img class="a" id="img1" src=__PUBLIC__/upload/<?php echo $list['images']?>  /></a>
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
					$i=0;
					foreach ($arr as $value) {
					//echo $value;
					$v=json_decode($value,true);
					$i++;
					?>
					
          <tr style="background:#C5C5C5" >  
                <td><input type="checkbox" name="checkbox" /></td>  
                <td id="name" ><?php echo $v['choices']?></td>  
                <td id=<?php echo "price".$i?>><?php echo $v['choices_price']?></td>  
                <td id="number"><input id=<?php echo "item".$i?> name="item" required="required" type="text" placeholder="0"/></td>  
            </tr>  
					<?php
					}
					?>
					   
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
						<form action="{:U('Shop/cart')}" method="post" id="form-validate">
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
<volist name="click" id="bookboxs"  empty="有好东西记得分享哦~" key="k">
			<li><img src=__PUBLIC__/upload/<?php echo $bookboxs['images'] ?> /><a href="{:U('Shop/book','id='.$bookboxs['isbn'])}"><p>&#65509; <?php echo $bookboxs['current_price']?></p></a></li>
</volist>
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
	<script type="text/javascript" src=__PUBLIC__/js/jquery.flexisel.js></script>
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
<include file="Common:footer" />
