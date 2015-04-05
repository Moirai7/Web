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
		<div class="section group">
		  <div class="cont span_2_of_3">
		  <h2 class="head">Products</h2>
		  <div class="top-box1">
		    <div class="col_1_of_3 span_1_of_3"> 
			   <a href="{:U('Shop/add')}">
				<div class="inner_content clearfix">
					<div class="product_image">
						<img src=__PUBLIC__/images/add.jpg  alt=""/>
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
		    <volist name="list" id="bookboxs"  empty="有好书记得分享哦~" key="k">
			 <div class="col_1_of_3 span_1_of_3"> 
				<div class="inner_content clearfix">
			   <a href="{:U('Shop/changeinfo','id='.$bookboxs['isbn'])}">
					<div class="product_image">
						<img src=__PUBLIC__/upload/<?php echo $bookboxs['images']?>  alt=""/>
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
			</div>
			</volist>
			<div class="clear"></div>
		  </div>	
		</div>
		</div>
		</div>
		<div class="mens-toolbar">
		  	 <div class="pager">   
       		<ul class="dc_pagination dc_paginationA dc_paginationA06"><li><a>共有<?php echo ceil($counts/20);?>页</a></li>
<?php
$first=1;
$prev=$page-1;
$next=$page+1;
$last=$counts;

if ($page > 1)
{ ?>
　<li><a  href="{:U('Shop/seller?page='.$first)}">首页</a></li>
　<li><a  href="{:U('Shop/seller?page='.$pagepre)}">&lt;&lt;</a></li>
<?php }

if($page<7&&$counts>7){?>
<li><a  href="{:U('Shop/seller?page=1')}">1</a></li>
<li><a  href="{:U('Shop/seller?page=2')}">2</a></li>
<li><a  href="{:U('Shop/seller?page=3')}">3</a></li>
<li><a  href="{:U('Shop/seller?page=4')}">4</a></li>
<li><a  href="{:U('Shop/seller?page=5')}">5</a></li>
<li><a  href="{:U('Shop/seller?page=6')}">6</a></li>
<li><a  href="{:U('Shop/seller?page=7')}">7</a></li>
<li><a  href="">...</a></li>
<?php }elseif($page<7&&$counts<7){
for($i=1;$i<=$counts;$i++){ 
?>
<li><a  href="{:U('Shop/seller?page='.$i)}"><?php echo $i;?></a></li>
<?php } }elseif($page>7&&$page<$counts-7){?>
<li><a  href="{:U('Shop/seller?page=1')}">1</a></li>
<li><a  href="{:U('Shop/seller?page=2')}">2</a></li>
<li><a  href="">...</a></li>
<li><a  href="{:U('Shop/seller?page='.$page-1)}">$page</a></li>
<li><a  href="{:U('Shop/seller?page='.$page)}">$page+1</a></li>
<li><a  href="{:U('Shop/seller?page='.$page+1)}">$page+2</a></li>
<li><a  href="{:U('Shop/seller?page='.$page+2)}">$page+3</a></li>
<li><a  href="">...</a></li>
<?php }elseif($page<7&&$counts<7){
for($i=1;$i<=$counts;$i++){ 
?>
<li><a  href="{:U('Shop/seller?page='.$i)}"><?php echo $i;?></a></li>
<?php } }
if($page<$counts){ ?>
　<li><a  href="{:U('Shop/seller?page='.$next)}">&gt;&gt;</a></li>
　<li><a  href="{:U('Shop/seller?page='.$last)}">最后一页</a></li>
<?php } ?>
		  	</ul>
	   		<div class="clear"></div>
    		</div>
     		<div class="clear"></div>
	 		</div>
	</div>
</div>
<script type="text/javascript" src=__PUBLIC__/js/index.js></script>
<include file="Common:footer" />
<script language="javascript">
		function firm(myid){
			var deletehref = "/S&S/index.php/Home/Shop/deletebook/id/"+myid;
   			if(confirm("确认删除？")){
        		location.href=deletehref;
   			}
      	}
    </script>