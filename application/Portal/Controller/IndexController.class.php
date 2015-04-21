<?php
namespace Portal\Controller;
use Common\Controller\HomeBaseController; 
/**
 * 首页
 */
class IndexController extends HomeBaseController {
	
    //首页
	public function index() {
		$links_obj= M("Links");
		$father = $links_obj->where("link_status=1")->order("listorder ASC")->where("link_type=0")->select();
		//var_dump($father);
		$falength = count($father);
		$sons = array();
		foreach ($father as $key=>$value) {
			 $sons[$key] = $links_obj->where("link_status=1")->order("listorder ASC")->where("link_type=%d",$value['link_id'])->select();	
			}
		//var_dump($father);
		//var_dump($sons);
		$this->assign("falength",$falength);
		$this->assign("father",$father);
		$this->assign("sons",$sons);
    	$this->display(":index");
    }   

}


