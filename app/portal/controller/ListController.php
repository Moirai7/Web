<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 老猫 <thinkcmf@126.com>
// +----------------------------------------------------------------------
namespace app\portal\controller;

use cmf\controller\HomeBaseController;
use app\portal\service\ApiService;
use app\portal\model\PortalCategoryModel;

class ListController extends HomeBaseController
{
    public function index()
    {
        $id                  = $this->request->param('id', 0, 'intval');
        $apiService = new ApiService();
        $categories = $apiService->subCategories('7');
        $_categories = Array();
        foreach ($categories as $category) {
                $_categories[] = $category['id'];
        }
        $portalCategoryModel = new PortalCategoryModel();

        $category = $portalCategoryModel->where('id', $id)->where('status', 1)->find();
       
        $this->assign('category', $category);
	$this->assign('categories', implode(",",$_categories));

        $listTpl = empty($category['list_tpl']) ? 'list' : $category['list_tpl'];
        return $this->fetch('/' . $listTpl);
    }

}
