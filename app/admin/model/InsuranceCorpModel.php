<?php

namespace app\admin\model;
use think\Model;
class InsuranceCorpModel extends Model
{
    /**
     * 关联分类表
     */
    public function categories()
    {
        return $this->belongsToMany('ProfessionClassificationModel', 'relation_company_profession', 'profession_classification_id', 'company_id');
    }

    /**
     * 后台管理添加文章
     * @param array $data 文章数据
     * @param array|string $categories 文章分类 id
     * @return $this
     */
    public function adminAddCompany($data,$isUpdate=false)
    {
        $this->allowField(true)->data($data, true)->isUpdate($isUpdate)->save();
	return $this;
    }
/*
    public function adminCompanyList($filter, $isPage = false)
    {
	$where = [];
        $join = [['__Relation_Company_Profession__ u','a.company_id = u.company_id'],['__profession_classification__ p','u.profession_classification_id = p.profession_classification_id']];
	$field = 'a.*,p.first_level_classification';

        $category = empty($filter['category']) ? 0 : intval($filter['category']);
        if (!empty($category)) {
            $where['u.profession_classification_id'] = ['eq', $category];
        }
        $keyword = empty($filter['keyword']) ? '' : $filter['keyword'];
        if (!empty($keyword)) {
            $where['a.company_full_name'] = ['like', "%$keyword%"];
        }

	$articles = $this->alias('a')->field($field)
            ->join($join)
            ->where($where)
            #->order('update_time', 'DESC')
            ->paginate(10);


        return $article;
    }
*/

}
