<?php

namespace app\admin\model;
use think\Model;
use tree\Tree;
class DistrictModel extends Model{
    
    public function all_distrct(){
	$where = [];
	$categories = $this->where($where)->select()->toArray();
	$tree       = new Tree();
	$tree->init($categories);
	$arr = $tree->getTreeArray(0);
	return $arr;
    }
}
