<?php

namespace app\admin\model;
use think\Model;
class CompanyInfoModel extends Model
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
        #$data['user_id'] = cmf_get_current_admin_id();
        if (!empty($data['more']['thumbnail'])) {
            $data['company_logo'] = cmf_asset_relative_url($data['more']['thumbnail']);
        }else{
            $data['company_logo'] = "";
	}
	#else{
	#    $data['company_logo'] ="__TMPL__/public/assets/images/default-thumbnail.png";
	#}
        $this->allowField(true)->data($data, true)->isUpdate($isUpdate)->save();
        #$this->allowField(true)->isUpdate(true)->data($data, true)->save();
	if (!empty($data['categories'])){
		$categories = $data['categories'];
	        if (is_string($categories)) {
	            $categories = explode(',', $categories);
	        }
	        $this->categories()->save($categories);
        }
        #$data['post_keywords'] = str_replace('，', ',', $data['post_keywords']);

        #$keywords = explode(',', $data['post_keywords']);

        #$this->addTags($keywords, $this->id);
	return $this;
    }
/*
    public function adminEditCompany($data)
    {
        if (!empty($data['more']['thumbnail'])) {
            $data['more']['thumbnail'] = cmf_asset_relative_url($data['more']['thumbnail']);
        }
        $this->allowField(true)->isUpdate(true)->data($data, true)->save();
        if (!empty($data['categories'])){
                $categories = $data['categories'];
                if (is_string($categories)) {
                    $categories = explode(',', $categories);
                }
                $this->categories()->save($categories);
        }
        return $this;
    }
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
