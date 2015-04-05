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
<script type="text/javascript" src=/S&S/Public/js/jquery.easydropdown.js></script>
<script type= "text/javascript" src=/S&S/Public/js/domutil.js ></script>
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
        <div class="cont span_2_of_3 register_account">
    <form  action="upload" method="POST" enctype="multipart/form-data" autocomplete="on">  
            <input type='file'  name='photo'/>
			<input id="isbn" name="isbn" required="required" type="text" placeholder="商品号"/>
            <input id="name" name="name" required="required" type="text" placeholder="商品名"/>
            <input id="press" name="press" required="required" type="text" placeholder="生产商"/>
            <input id="date" name="date" required="required" type="text" placeholder="生产日期"/>
            <input id="stock" name="stock" required="required" type="text" placeholder="库存"/>
            <select id="sort" name="sort" required="required" type="text"/>
                <option value="null">商品分类</option>
                <option value="1">家电</option>         
                <option value="2">空调</option>  
                <option value="12">平板电视</option>
                <option value="23">家庭影院</option>
                <option value="30">电子产品</option>
                <option value="72">手机</option>
                <option value="73">笔记本</option>
                <option value="53">摄像机</option>
                <option value="60">移动储存</option>
                <option value="71">其他</option>
            </select>
			<select id="board" name="board" required="required" type="text"/>
                <option value="null">品牌</option>
                <option value="3">格力</option>         
                <option value="4">美的</option>  
                <option value="5">海尔</option>
                <option value="6">TCL</option>
                <option value="7">志高</option>
                <option value="8">海信</option>
                <option value="9">长虹</option>
                <option value="10">松下</option>
                <option value="14">创维</option>
                <option value="15">酷开</option>
				<option value="16">夏普</option>         
                <option value="18">三星</option>  
                <option value="19">索尼</option>
                <option value="20">LG</option>
                <option value="11">其他</option>
            </select>
            <input id="price" name="price" required="required" type="text" placeholder="原价"/>
            <input id="current_price" name="current_price" required="required" type="text" placeholder="现价"/>
			<input id="choice_id" name="choice_id" required="required" type="text" placeholder="总配置项"/>
			<table id="tab" border="1" style =" align:center;text-align:center ">  
        <thead style="background:#C5C5C5" onmouseover="over(this)" onmouseout="out(this)">  
            <tr>    
                <th onclick="sortTable('tab',1,'int')" style="cursor:pointer">编号</th>  
                <th onclick="sortTable('tab',2,'汉字')" style="cursor:pointer">配置名</th>  
                <th onclick="sortTable('tab',3,'float')" style="cursor:pointer">价格</th>   
                <th style="cursor:pointer">操作</th>  
            </tr>  
        </thead>  
        <tbody id="tbody">  
           
        </tbody>  
        <tfoot style="background:#FFFFFF">  
            <tr onmouseover="over(this)" onmouseout="out(this)">  
                <td colspan="6">  
                <input type="button" value="添加配置" onclick="addRow()" />       
                </td>  
            </tr>  
        </tfoot>  
    </table>  
	
            <div class="toogle">
     <!--     <h3 class="m_3">Product Details</h3>
            <textarea class="m_text" id="detail"  name="detail"></textarea>-->
         <button class="grey">Submit</button>
         </div>
     </form>   
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
<script type="text/javascript">   
        /* 
        全局变量 
        ID:    保存插入数据的编号 
        color：保存原来的背景色 
        */  
        var ID,color;  
        window.onload = function(){  
            var myTab = $q("#tab");  
            ID = myTab.rows.length-1;  
        }  
        //鼠标悬浮在某元素时  
        function over(node){  
            color = node.style.backgroundColor;  
            node.style.backgroundColor = '#439462';  
        }  
        //鼠标离开某元素时  
        function out(node){  
            node.style.backgroundColor = color;  
        }  
  
        //添加一行数据  
        function addRow(){  
            var myTab = $q("#tab");  
            var rowLength = myTab.rows.length;  
            var newRow = document.createElement("tr"); //创建一行  
            //设置隔行变色  
            if(rowLength%2 == 1){  
                newRow.style.background = "#C5C5C5";  
            }else{  
                newRow.style.background = "#FFFFFF";  
            }  
            if(newRow.addEventListener){  
                //给创建的行添加鼠标悬浮的事件  
                newRow.addEventListener("mouseover",function(){over(newRow);},false);  
                //给创建的行添加鼠标离开的事件  
                newRow.addEventListener("mouseout",function(){out(newRow);},false);  
            }else if(newRow.attachEvent){  
                //给创建的行添加鼠标悬浮的事件  
                newRow.attachEvent("onmouseover",function(){over(newRow);});  
                //给创建的行添加鼠标离开的事件  
                newRow.attachEvent("onmouseout",function(){out(newRow);});  
            }else{  
                //给创建的行添加鼠标悬浮的事件  
                newRow.onmouseover = function(){over(newRow);};  
                //给创建的行添加鼠标离开的事件  
                newRow.onmouseout = function(){out(newRow);};  
            }    
            //创建多列  
            var newCell2 = document.createElement("td");  
            newCell2.innerHTML = ID;  
              
            var newCell3 = document.createElement("td");  
            newCell3.innerHTML = '<input id="choices_'+ID+'" name="choices_'+ID+'" required="required" type="text" placeholder="配置名"/>';
			//prompt("请输入配置名：","");  
            var newCell4 = document.createElement("td");  
            newCell4.innerHTML = '<input id="choices_price_'+ID+'" name="choices_price_'+ID+'"required="required" type="text" placeholder="配置价格"/>';
			//prompt("请输入配置价格：",""); 
			var newCell7 = document.createElement("td");  			
            newCell7.innerHTML = '<input type="button" value="删除" onclick="deleteRow(this.parentNode.parentNode)" />' ;  
            //将创建的多列添加到行  
            newRow.appendChild(newCell2);  
            newRow.appendChild(newCell3);  
            newRow.appendChild(newCell4);   
            newRow.appendChild(newCell7);  
            var tbody = myTab.tBodies[0]; //获取表格的tbody  
            tbody.appendChild(newRow); 
			ID += 1;//将创建的行添加到表格body里  
        }   
        //删除一行数据  
        function deleteRow(currentRow){  
            var tab = $q("#tab"); //获得表格节点  
            tab.deleteRow(currentRow.rowIndex); //删除选中的行  
        }  
        //删除多行数据  
        function deleteChecked(){  
            var tab = $q("#tab"); //获得表格节点  
            var checkArr = $q("$checkbox");  //得到tbody行的集合  
            for(var i=0;i<checkArr.length;i++){  
                if(checkArr[i].checked){  //用循环删除选中的行  
                    var index = checkArr[i].parentNode.parentNode.rowIndex;  
                    tab.deleteRow(index);  
                }  
            }  
        }  
        //转换数据类型,v为值，dataType为数据类型  
        function convert(v,dataType){  
            switch(dataType){  
                case "int":  
                    return parseInt(v);  
                case "float":  
                    return parseFloat(v);  
                case "date":  
                    return (new Date(Date.parse(v)));  
                default:  
                    return v.toString();  
            }  
        }  
        //排序函数,index为索引，type为数据类型  
        function pai(index,dataType){  
            if(dataType === "汉字"){  
                return function compare(a,b){  
                            var str1 = convert(a.cells[index].innerHTML,dataType);   
                            var str2 = convert(b.cells[index].innerHTML,dataType);  
                            return str1.localeCompare(str2);  
                        };  
            }else{  
                return function compare(a,b){  
                            //var str1 = convert(a.cells[index].firstChild.nodeValue,dataType);  
                            //var str2 = convert(b.cells[index].firstChild.nodeValue,dataType);  
                            var str1 = convert(a.cells[index].innerHTML,dataType); //两种方法效果一样  
                            var str2 = convert(b.cells[index].innerHTML,dataType);  
                            if(str1 < str2){  
                                return -1;  
                            }else if(str1 > str2){  
                                return 1;  
                            }else{   
                                return 0;  
                            }  
                        };  
            }  
        }  
        //排序的过程  
        function sortTable(tableID,index,dataType){  
            var tab = $q("#"+tableID); //获取表格的ID  
            var td = tab.tBodies[0]; //获取表格的tbody  
            var newRows = td.rows;   //获取tbody里的所有行  
            var arr = new Array();   //定义arr数组用于存放tbody里的行  
            //用循环将所有行放入数组  
            for(var i=0;i<newRows.length;i++){  
                arr.push(newRows[i]);  
            }  
            //判断最后一次排序的列是否与现在要进行排序的列相同，如果是就反序排列  
            if(tab.sortCol == index){  
                arr.reverse();  
            }else{   
                //使用数组的sort方法，传进排序函数  
                arr.sort(pai(index,dataType));  
            }  
            var oFragment = document.createDocumentFragment(); //创建文档碎片  
            for (var i=0; i < arr.length; i++) {  //把排序过的aTRs数组成员依次添加到文档碎片  
                if(i%2 == 1){  
                    arr[i].style.background = "#C5C5C5";  
                    oFragment.appendChild(arr[i]);  
                }else{  
                    arr[i].style.background = "#FFFFFF";  
                    oFragment.appendChild(arr[i]);  
                }  
            }  
            td.appendChild(oFragment); //把文档碎片添加到tbody,完成排序后的显示更新  
            tab.sortCol = index;  //记录最后一次排序的列索引  
        }  
    </script>