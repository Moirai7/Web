<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2017 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 小夏 < 449134904@qq.com>
// +----------------------------------------------------------------------
namespace app\admin\controller;

use app\admin\model\InvestorModel;
use cmf\controller\AdminBaseController;
use app\admin\model\ThemeModel;
use app\admin\model\CompanyInfoModel;
use app\admin\service\ApiService;
use think\Db;

class InvestorController extends AdminBaseController
{
    public function select()
    {
        $ids                 = $this->request->param('ids');
        $selectedIds         = explode(',', $ids);
        $rel = new InvestorModel();
        $categories = $rel->select();

        $this->assign('investor', $categories);
        $this->assign('selectedIds', $selectedIds);
        return $this->fetch();
    }

}
