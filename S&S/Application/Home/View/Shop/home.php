<!-- start slider -->
    <div id="fwslider">
        <div class="slider_container">
            <div class="slide"> 
                <!-- Slide image -->
                    <img src=__PUBLIC__/images/banner.jpg alt=""/>
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h4 class="title">月既不解饮，影徒随我身</h4>
                        <!-- /Text title -->
                        
                        <!-- Text description -->
                        <p class="description">暂伴月将影，行乐须及春</p>
                        <!-- /Text description -->
                    </div>
                </div>
                 <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
                <img src=__PUBLIC__/images/banner1.jpg alt=""/>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">Slowly, gently night unfurls its splendour </h4>
                        <p class="description">Grasp it, sense it - tremulous and tender</p>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div>
    <!--/slider -->
	<div class="main">
	<div class="wrap">
		<div class="section group">
		  <div class="cont span_2_of_3">
		  <h2 class="head">Featured Products</h2>
		  <div class="top-box1">
		    <volist name="list" id="bookboxs"  empty="有好东西记得分享哦~" key="k">
			 <div class="col_1_of_3 span_1_of_3"> 
				<div class="inner_content clearfix">
  <a href="{:U('Shop/book','id='.$bookboxs['isbn'])}">
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
							<div class="price1"><span class="actual">&#65509;<?php echo $bookboxs['current_price']?></span></div>
						</div>
						<div class="cart-right" onclick="firm(<?php echo $bookboxs[isbn]?>)"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
			</div>
			</volist>
			<div class="clear"></div>
		  </div>	
		  <h2 class="head">Staff Pick</h2>
		  <div class="top-box1">
		   <volist name="click" id="bookboxs2"  empty="有好东西记得分享哦~" key="k">
			  <div class="col_1_of_3 span_1_of_3">
				<div class="inner_content clearfix">
<a href="{:U('Shop/book','id='.$bookboxs2['isbn'])}">
					<div class="product_image">
						<img src=__PUBLIC__/upload/<?php echo $bookboxs2['images']?>  alt=""/>
					</div>
                     <?php  if($bookboxs2['new']){
                    		if(intval((strtotime()-strtotime(date('y-m-d', $bookboxs2['addtime'])))/86400)<=3) {
                    			echo '<div class="sale-box"><span class="on_sale title_shop">New</span></div>';
                    		}else{
                    			$Shop = M('Shop');
                    			$data['new']=0;
                    			$condition['isbn']=$bookboxs2['isbn']; 
								$Shop->where($condition)->save($data);
                    		}
                    	}?>
<?php  if($bookboxs2['sale']) echo '<div class="sale-box1"><span class="on_sale title_shop">sale</span></div>'	?>	
</a>
                    <div class="price">
					   <div class="cart-left">
							<p class="title"><?php echo $bookboxs2['name']?></p>
							<div class="price1"><span class="actual"> &#65509;<?php echo $bookboxs2['current_price']?></span></div>
						</div>
						<div class="cart-right" onclick="firm(<?php echo $bookboxs[isbn]?>)"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
				</div>
				</volist>
				<div class="clear"></div>
			</div>	
	        <h2 class="head">New Products</h2>	
		    <div class="section group">
			  <volist name="price" id="bookboxs3"  empty="有好东西记得分享哦~" key="k">
			  <div class="col_1_of_3 span_1_of_3">
				<div class="inner_content clearfix">
<a href="{:U('Shop/book','id='.$bookboxs3['isbn'])}">
					<div class="product_image">
						<img src=__PUBLIC__/upload/<?php echo $bookboxs3['images']?>  alt=""/>
					</div>
                     <?php  if($bookboxs['new']){
                    		if(intval((strtotime()-strtotime(date('y-m-d', $bookboxs3['addtime'])))/86400)<=3) {
                    			echo '<div class="sale-box"><span class="on_sale title_shop">New</span></div>';
                    		}else{
                    			$Shop = M('Shop');
                    			$data['new']=0;
                    			$condition['isbn']=$bookboxs3['isbn']; 
								$Shop->where($condition)->save($data);
                    		}
                    	}?>
<?php  if($bookboxs3['sale']) echo '<div class="sale-box1"><span class="on_sale title_shop">sale</span></div>'	?>	
</a>
                    <div class="price">
					   <div class="cart-left">
							<p class="title"><?php echo $bookboxs3['name']?></p>
							<div class="price1"><span class="actual"> &#65509;<?php echo $bookboxs3['current_price']?></span></div>
						</div>
						<div class="cart-right" onclick="firm(<?php echo $bookboxs[isbn]?>)"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
				</div>
				</volist>
				<div class="clear"></div>
			</div>				 			    
		  </div>
	   <div class="clear"></div>
	</div>
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