<?php
namespace app\admin\service;
use app\admin\model\CompanyInfoModel;

class CompanyService
{
    public function adminCompanyList($filter)
    {
        $where = [];
        #$join = [['ciprc_relation_company_profession u','a.company_id = u.company_id'],['ciprc_profession_classification p','u.profession_classification_id = p.profession_classification_id']];
        #$field = 'a.*,p.first_level_classification';

        $keyword = empty($filter['keyword']) ? '' : $filter['keyword'];
        if (!empty($keyword)) {
            $where['a.company_full_name'] = ['like', "%$keyword%"];
        }

	$companyInfoModel = new CompanyInfoModel();

        $category = empty($filter['category']) ? 0 : intval($filter['category']);
        if (!empty($category)) {
            $where['u.profession_classification_id'] = ['eq', $category];
	    $join = [['ciprc_relation_company_profession u','a.company_id = u.company_id'],['ciprc_profession_classification p','u.profession_classification_id = p.profession_classification_id']];
	    $field = 'a.*,p.name';
            $articles = $companyInfoModel->alias('a')->field($field)
            ->join($join)
            ->where($where)
            #->order('update_time', 'DESC')
            ->paginate(10);
        }else{
            $articles = $companyInfoModel->alias('a')
            ->where($where)
            #->order('update_time', 'DESC')
            ->paginate(10);
	}
        return $articles;
    }
}
