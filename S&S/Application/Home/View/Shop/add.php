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
<script type="text/javascript" src=__PUBLIC__/js/jquery.easydropdown.js></script>
<script type= "text/javascript" src=__PUBLIC__/js/domutil.js ></script>
</head>
<body>
<div id="container ">
    <include file="Common:header" />
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
			<label><input name="level1" type="checkbox" value="" />Home Level </label> 
<label><input name="level2" type="checkbox" value="" />Enterprise Level </label> 
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
<include file="Common:footer" />
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