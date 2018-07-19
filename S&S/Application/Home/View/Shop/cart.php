<html>
<head>
<title> Shop & Share </title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href=__PUBLIC__/css/style.css rel="stylesheet" type="text/css" media="all" />
<link href=__PUBLIC__/css/form.css rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src=__PUBLIC__/js/jquery1.min.js></script>
<!-- start menu -->
<link href=__PUBLIC__/css/megamenu.css rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src=__PUBLIC__/js/megamenu.js></script>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script type="text/javascript" src=__PUBLIC__/js/jquery.jscrollpane.min.js></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
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
		  	<h2 class="head"><?php if($name)echo $name;else echo "最新书籍";?></h2>
		</div>
		<div class="top-box">
		<volist name="list" id="bookboxs"  empty="有好书记得分享哦~" key="k">
			 <div class="col_1_of_3 span_1_of_3"> 
				<div class="inner_content clearfix">
					<a href={:U(\'Shop/book\',\'id=\'.$bookboxs[isbn])}>
					<div class="product_image">
						<img src=__PUBLIC__/upload/<?php echo $bookboxs['images']?>  alt=""/>
					</div>
					</a>
                     <?php  if($bookboxs['new']){
                    		if(intval((strtotime()-strtotime(date('y-m-d', $bookboxs['addtime'])))/86400)<=3) {
                    			echo '<div class="sale-box"><span class="on_sale title_shop">New</span></div>';
                    		}else{
                    			$Shop = M('Shop');
                    			$data['new']=0;
                    			$condition['isbn']=$bookboxs['isbn']; 
								$Shop->where($condition)->save($data);
                    		}
                    	}?>
<?php  if($bookboxs['sale']) echo '<div class="sale-box1"><span class="on_sale title_shop">sale</span></div>'	?>
                    <div class="price">
					   <div class="cart-left">
							<p class="title"><?php echo $bookboxs['name']?></p>
							<div class="price1"><span class="actual">&#65509;<?php echo $bookboxs['price']?></span></div>
						</div>
						<div class="cart-right" onclick="firm(<?php echo $bookboxs[isbn]?>)"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
			</div>
			</volist>
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
　<li><a  href="{:U('Shop/showcart?page='.$first)}">首页</a></li>
　<li><a  href="{:U('Shop/showcart?page='.$pagepre)}">&lt;&lt;</a></li>
<?php }


if($page<7&&$counts>7){?>
<li><a  href="{:U('Shop/showcart?page=1')}">1</a></li>
<li><a  href="{:U('Shop/showcart?page=2')}">2</a></li>
<li><a  href="{:U('Shop/showcart?page=3')}">3</a></li>
<li><a  href="{:U('Shop/showcart?page=4')}">4</a></li>
<li><a  href="{:U('Shop/showcart?page=5')}">5</a></li>
<li><a  href="{:U('Shop/showcart?page=6')}">6</a></li>
<li><a  href="{:U('Shop/showcart?page=7')}">7</a></li>
<li><a  href="">...</a></li>
<?php }elseif($page<7&&$counts<7){
for($i=1;$i<=$counts;$i++){ 
?>
<li><a  href="{:U('Shop/showcart?&page='.$i)}"><?php echo $i;?></a></li>
<?php } }elseif($page>7&&$page<$counts-7){?>
<li><a  href="{:U('Shop/showcart?page=1')}">1</a></li>
<li><a  href="{:U('Shop/showcart?page=2')}">2</a></li>
<li><a  href="">...</a></li>
<li><a  href="{:U('Shop/showcart?page='.$page-1)}">$page</a></li>
<li><a  href="{:U('Shop/showcart?page='.$page)}">$page+1</a></li>
<li><a  href="{:U('Shop/showcart?page='.$page+1)}">$page+2</a></li>
<li><a  href="{:U('Shop/showcart?page='.$page+2)}">$page+3</a></li>
<li><a  href="">...</a></li>
<?php }elseif($page<7&&$counts<7){
for($i=1;$i<=$counts;$i++){ 
?>
<li><a  href="{:U('Shop/showcart?page='.$i)}"><?php echo $i;?></a></li>
<?php } }
if($page<$counts){ ?>
　<li><a  href="{:U('Shop/showcart?page='.$next)}">&gt;&gt;</a></li>
　<li><a  href="{:U('Shop/showcart?page='.$last)}">最后一页</a></li>
<?php } ?>

		  	</ul>
	   		<div class="clear"></div>
    		</div>
     		<div class="clear"></div>
	 		</div>
		</div>	
</div>
</div>
	<include file="Common:footer" />
	<script language="javascript">
		function firm(myid){
			var idhref = "/S&S/index.php/Home/Shop/order/id/"+myid;
			var deletehref = "/S&S/index.php/Home/Shop/delete/id/"+myid;
   			if(confirm("买或者不买，我都在这里，不离不弃~")){
        		location.href=idhref;
   			}else{
   				location.href=deletehref;
   			}
      	}
    </script>
</div>