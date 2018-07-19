var CustomFunctions = {
	//获取子节点的集合（ie，ff通用）
	getChildNodes:function(node){
		var arr = [];
		var nodes = node.childNodes;
		for(var i in nodes){
			if(nodes[i].nodeType == 1){ //查找元素节点
				arr.push(nodes[i]);
			}
		}
		return arr;
	},
	//获取第一个元素子节点（ie，ff通用）
	getFirstElementChild : function(node){
		return node.firstElementChild ? node.firstElementChild : node.firstChild ;
	},
	//获取最后一个元素子节点（ie，ff通用）
	getLastElementChild : function(node){
		return node.lastElementChild ? node.lastElementChild : node.lastChild ;
	},
	//获取上一个相邻节点（ie，ff通用）
	getPreviousSibling : function(node){
		//找到上一个节点就返回节点，没找到就返回null
		do{
			node = node.previousSibling;
		}while(node && node.nodeType!=1)
		return node;
	},
	//获取下一个相邻节点 （ie，ff通用）
	getNextSibling : function(node){
		//找到下一个节点就返回节点，没找到就返回null
		do{
			node = node.nextSibling;
		}while(node && node.nodeType!=1)
		return node;
	},
	//将元素插入到指定的node节点后面
	insertAfter : function(newNode,targetNode){
		if(newNode && targetNode){
			var parent = targetNode.parentNode;
			var nextNode = this.getNextSibling(targetNode);
			if(nextNode && parent){
				parent.insertBefore(newNode,nextNode);
			}else{
				parent.appendChild(newNode);
			}
		}
	}
};

/*清除字符串前后的空格*/
String.prototype.trim=function(){
	return this.replace(/^\s*|\s*$/,"");
};

/*
查找元素：
$q("div"):bytagname
$q(".l"):byclassname
$q("#l"):byid
$q("$name"):byname
selector:选择符
parentElement:父元素
*/
window.$q = function(selector,parentElement){
	if(selector && (typeof selector) === 'string'){
		selector = selector.trim();//去掉前后空格
		var parentEl = parentElement || document;
		var nodeArr = new Array();	
		var firstChar = selector.substr(0,1);	//取得第一个字符
		//以#开头，表示根据ID查找
		if(firstChar === '#'){
			return parentEl.getElementById(selector.substr(1));
		}
		//以$开头，根据name查找
		else if(firstChar === '$'){
			var all = parentEl.getElementsByTagName("*");
			for(var i=0;i<all.length;i++){
				var name = all[i].getAttribute("name");
				if(name === selector.substr(1)){
					nodeArr.push(all[i]);
				}
			}
			delete i;
			return nodeArr;
		}
		//以.开头，根据class名查找
		else if(firstChar === '.'){
			var className = selector.substr(1);
			if(parentEl.getElementsByClassName){
				return parentEl.getElementsByClassName(className);
			}
			else{
				var childList = parentEl.getElementsByTagName("*");
				for(var i=0;i<childList.length;i++){
					var nodeClassName = childList[i].className;
					var classNameArr = nodeClassName.split(' ');
					for(var j=0;j<classNameArr.length;j++){
						if(classNameArr[j]===className){
							nodeArr.push(childList[i]);
						}
					}
					delete j;
				}
				delete i;
				return nodeArr;
			}
		}
		//否则，根据标签名查找
		else{
			return parentEl.getElementsByTagName(selector);
		}
		
	}
	else{
		return document.all || document.getElementsByTagName("*");
	}

};
