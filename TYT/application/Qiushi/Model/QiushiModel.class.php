<?php
namespace Qiushi\Model;
use Common\Model\CommonModel;
class QiushiModel extends CommonModel
{
	
	protected $_validate = array(
			//array(��֤�ֶ�,��֤����,������ʾ,��֤����,���ӹ���,��֤ʱ��)
			//array('title', 'require', '���ⲻ��Ϊ�գ�', 1, 'regex', 3),
			array('cid', 'checkCid', '���಻���ڣ�', 1, 'callback', 1),
			array('content', 'require', '���ݲ���Ϊ�գ�', 1, 'regex', 3),
			
			
	);
	
	protected $_auto = array (          
			 array('createtime','time',1,'function'), // ��createtime�ֶ���������ʱ��д�뵱ǰʱ���     
	);
	
	public function checkCid($cid){
		$find_cat=M("QiushiCat")->where(array("id"=>$cid,"status"=>1))->find();
		if($find_cat){
			return true;
		}else{
			return false;
		}
	}
	
	
}

