<div class="mens">    
  <div class="main">
     <div class="wrap">
		<div class="cont span_2_of_3">
		  	<h2 class="head"><?php if($name)echo $name;else echo "";?></h2>
		</div>
		<ul class="megamenu skyblue">
				<li><a href={:U('Shop/booklist',array('id'=>$id,'level'=>1))}>Home Level</a></li>
				<li><a href={:U('Shop/booklist',array('id'=>$id,'level'=>2))}>Enterprise Level</a></li>
				<li><a href={:U('Shop/booklist',array('id'=>$id,'level'=>4))}>按添加时间</a></li>
				<li><a href={:U('Shop/booklist',array('id'=>$id,'level'=>5))}>按点击量</a></li>
				<li><a href={:U('Shop/booklist',array('id'=>$id,'level'=>6))}>按价格</a></li>
			</ul>
		<div class="top-box">
		<volist name="list" id="bookboxs"  empty="有好东西记得分享哦~" key="k">
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
       		<ul class="dc_pagination dc_paginationA dc_paginationA06"><li>共有<?php echo ceil($counts/20);?>页</li>
<?php
$first=1;
$prev=$page-1;
$next=$page+1;
$last=$counts;

if ($page > 1)
{ ?>
　<li><a  href="{:U('Shop/booklist?id='.$id.'&page='.$first)}">首页</a></li>
　<li><a  href="{:U('Shop/booklist?id='.$id.'&page='.$pagepre)}">&lt;&lt;</a></li>
<?php }

if($page<7&&$counts>7){?>
<li><a  href="{:U('Shop/booklist?id='.$id.'&page=1')}">1</a></li>
<li><a  href="{:U('Shop/booklist?id='.$id.'&page=2')}">2</a></li>
<li><a  href="{:U('Shop/booklist?id='.$id.'&page=3')}">3</a></li>
<li><a  href="{:U('Shop/booklist?id='.$id.'&page=4')}">4</a></li>
<li><a  href="{:U('Shop/booklist?id='.$id.'&page=5')}">5</a></li>
<li><a  href="{:U('Shop/booklist?id='.$id.'&page=6')}">6</a></li>
<li><a  href="{:U('Shop/booklist?id='.$id.'&page=7')}">7</a></li>
<li><a  href="">...</a></li>
<?php }elseif($page<7&&$counts<7){
for($i=1;$i<=$counts;$i++){ 
?>
<li><a  href="{:U('Shop/booklist?id='.$id.'&page='.$i)}"><?php echo $i;?></a></li>
<?php } }elseif($page>7&&$page<$counts-7){?>
<li><a  href="{:U('Shop/booklist?id='.$id.'&page=1')}">1</a></li>
<li><a  href="{:U('Shop/booklist?id='.$id.'&page=2')}">2</a></li>
<li><a  href="">...</a></li>
<li><a  href="{:U('Shop/booklist?id='.$id.'&page='.$page-1)}">$page</a></li>
<li><a  href="{:U('Shop/booklist?id='.$id.'&page='.$page)}">$page+1</a></li>
<li><a  href="{:U('Shop/booklist?id='.$id.'&page='.$page+1)}">$page+2</a></li>
<li><a  href="{:U('Shop/booklist?id='.$id.'&page='.$page+2)}">$page+3</a></li>
<li><a  href="">...</a></li>
<?php }elseif($page<7&&$counts<7){
for($i=1;$i<=$counts;$i++){ 
?>
<li><a  href="{:U('Shop/booklist?id='.$id.'&page='.$i)}"><?php echo $i;?></a></li>
<?php } }
if($page<$counts){ ?>
　<li><a  href="{:U('Shop/booklist?id='.$id.'&page='.$next)}">&gt;&gt;</a></li>
　<li><a  href="{:U('Shop/booklist?id='.$id.'&page='.$last)}">最后一页</a></li>
<?php } ?>
		  	</ul>
	   		<div class="clear"></div>
    		</div>
     		<div class="clear"></div>
	 		</div>
	</div>
	<script language="javascript">
		function firm(myid){
			var idhref = "/S&S/index.php/Home/Shop/buy/id/"+myid;
   			if(confirm("买或者不买，我都在这里，不离不弃~")){
        		location.href=idhref;
   			}
      	}
    </script>
</div>
</div>