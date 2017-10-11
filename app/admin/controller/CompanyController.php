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

use app\admin\model\ProfessionClassificationModel;
use app\admin\model\RelationCompanyFinanceModel;
use app\admin\model\RelationCompanyTeamModel;
use app\admin\model\RelationCompanyMergeModel;
use app\admin\model\RelationCompanyRaisingModel;
use app\admin\model\RelationCompanyProductModel;
use app\admin\model\RelationCompanyProfessionModel;
use app\admin\model\InvestorModel;
use app\admin\model\BigDataCorpModel;
use app\admin\model\BlockchainCorpModel;
use app\admin\model\InsuranceCorpModel;
use app\admin\model\InsuranceTypeModel;
use app\admin\service\CompanyService;
use cmf\controller\AdminBaseController;
use app\admin\model\ThemeModel;
use app\admin\model\CompanyInfoModel;
use app\admin\service\ApiService;
use think\Db;

/**
 * Class SettingController
 * @package app\admin\controller
 * @adminMenuRoot(
 *     'name'   =>'公司信息',
 *     'action' =>'default',
 *     'parent' =>'',
 *     'display'=> true,
 *     'order'  => 0,
 *     'icon'   =>'bank',
 *     'remark' =>'公司信息入口'
 * )
 */
class CompanyController extends AdminBaseController
{
    /**
     * 公司信息
     * @adminMenu(
     *     'name'   => '公司信息',
     *     'parent' => 'admin/Company/default',
     *     'display'=> true,
     *     'hasView'=> true,
     *     'order'  => 10000,
     *     'icon'   => '',
     *     'remark' => '公司信息',
     *     'param'  => ''
     * )
     */
    public function index()
    {
	$param = $this->request->param();
	$categoryId = $this->request->param('category', 0, 'intval');
	$companyCategoryModel = new ProfessionClassificationModel();
	$categoryTree        = $companyCategoryModel->adminCategoryTree($categoryId);
	$companyInfoModel = new CompanyService();
	$data = $companyInfoModel->adminCompanyList($param);

	#$data = array("0"=>array("id"=>45,"parent_id"=>0,"post_title"=>"test","user_nickname"=>"","post_hits"=>0,"user_nickname"=>"","post_hits"=>0));

	$this->assign('keyword', isset($param['keyword']) ? $param['keyword'] : '');
	$this->assign('companies', $data->items());
	#$this->assign('companies', $data);
	$this->assign('category_tree', $categoryTree);
	$this->assign('category', $categoryId);
	$this->assign('page', $data->render());
	#foreach($data->items() as $key=>$va){echo $key.'=>'.$va;}
	return	$this->fetch();
    }

    /**
     * 公司分类选择对话框
     * @adminMenu(
     *     'name'   => '公司分类选择对话框',
     *     'parent' => 'admin/Company/default',
     *     'display'=> false,
     *     'hasView'=> true,
     *     'order'  => 10000,
     *     'icon'   => '',
     *     'remark' => '公司分类选择对话框',
     *     'param'  => ''
     * )
     */
    public function select()
    {
        $ids                 = $this->request->param('ids');
	$types                 = $this->request->param('types');
        $selectedIds         = explode(',', $ids);
	$rel = new ProfessionClassificationModel();
	if ($types=="radio"){
	$tpl = <<<tpl
<tr class='data-item-tr'>
    <td>
        <input type='radio' class='js-check' data-yid='js-check-y' data-xid='js-check-x' name='ids[]'
               value='\$id' data-name='\$name' \$checked>
    </td>
    <td>\$id</td>
    <td>\$spacer \$name</td>
</tr>
tpl;
}else{
        $tpl = <<<tpl
<tr class='data-item-tr'>
    <td>
        <input type='checkbox' class='js-check' data-yid='js-check-y' data-xid='js-check-x' name='ids[]'
               value='\$id' data-name='\$name' \$checked>
    </td>
    <td>\$id</td>
    <td>\$spacer \$name</td>
</tr>
tpl;
}
        $categoryTree = $rel->adminCategoryTableTree($selectedIds, $tpl);
        $categories = $rel->select();

        $this->assign('categories', $categories);
        $this->assign('selectedIds', $selectedIds);
        $this->assign('categories_tree', $categoryTree);
        return $this->fetch();
    }

    /**
     * 公司保险选择对话框
     * @adminMenu(
     *     'name'   => '公司保险选择对话框',
     *     'parent' => 'admin/Company/default',
     *     'display'=> false,
     *     'hasView'=> true,
     *     'order'  => 10000,
     *     'icon'   => '',
     *     'remark' => '公司保险选择对话框',
     *     'param'  => ''
     * )
     */
    public function selectIns()
    {
        $ids                 = $this->request->param('ids');
        $selectedIds         = explode(',', $ids);
	$rel = new InsuranceTypeModel();
	$tpl = <<<tpl
<tr class='data-item-tr'>
    <td>
        <input type='checkbox' class='js-check' data-yid='js-check-y' data-xid='js-check-x' name='ids[]'
               value='\$id' data-name='\$name' \$checked>
    </td>
    <td>\$id</td>
    <td>\$spacer \$name</td>
</tr>
tpl;
        $categoryTree = $rel->adminCategoryTableTree($selectedIds, $tpl);
        $categories = $rel->select();

        $this->assign('categories', $categories);
        $this->assign('selectedIds', $selectedIds);
        $this->assign('categories_tree', $categoryTree);
        return $this->fetch();
    }
    /**
     * 添加公司
     * @adminMenu(
     *     'name'   => '添加公司',
     *     'parent' => 'admin/Company/default',
     *     'display'=> false,
     *     'hasView'=> true,
     *     'order'  => 10000,
     *     'icon'   => '',
     *     'remark' => '添加公司',
     *     'param'  => ''
     * )
     */
    public function add()
    {
	$themeModel        = new ThemeModel();
	$articleThemeFiles = $themeModel->getActionThemeFiles('portal/Article/index');
	$this->assign('article_theme_files', $articleThemeFiles);
	return  $this->fetch();
    }
    /**
     * 添加公司金融信息
    * @adminMenu(
     *     'name'   => '添加公司金融信息',
     *     'parent' => 'admin/Company/default',
     *     'display'=> false,
     *     'hasView'=> true,
     *     'order'  => 10000,
     *     'icon'   => '',
     *     'remark' => '添加公司金融信息',
     *     'param'  => ''
     * )
     */
    public function editFinance()
    {
	$id = $this->request->param('id', 0, 'intval');
        if ($this->request->isPost()) {
            $data   = $this->request->param();
            $post   = $data['finance'];
	    $where = ['company_id'=>$id];
	   
            $portalPostModel = new RelationCompanyFinanceModel();
	    $post['company_id'] = $id;
	    if (!empty($post['id'])){
	        $portalPostModel->adminAddCompany($post,true);
	    }else{
	        $portalPostModel->adminAddCompany($post);
            }
            $this->success('添加成功!', url('Company/edit', ['id' => $portalPostModel->company_id]));
        }
    }
    public function editTeam()
    {
        $id = $this->request->param('id', 0, 'intval');
        if ($this->request->isPost()) {
            $data   = $this->request->param();
            $post   = $data['team'];
            $where = ['company_id'=>$id];

            $portalPostModel = new RelationCompanyTeamModel();
            $post['company_id'] = $id;
            if (!empty($post['id'])){
                $portalPostModel->adminAddCompany($post,true);
            }else{
                $portalPostModel->adminAddCompany($post);
            }
            $this->success('添加成功!', url('Company/edit', ['id' => $portalPostModel->company_id]));
        }
    }
    public function editMerge()
    {
        $id = $this->request->param('id', 0, 'intval');
        if ($this->request->isPost()) {
            $data   = $this->request->param();
            $post   = $data['merge'];
            $where = ['company_id'=>$id];

            $portalPostModel = new RelationCompanyMergeModel();
            $post['company_id'] = $id;
            if (!empty($post['id'])){
                $portalPostModel->adminAddCompany($post,true);
            }else{
                $portalPostModel->adminAddCompany($post);
            }
            $this->success('添加成功!', url('Company/edit', ['id' => $portalPostModel->company_id]));
        }
    }
    public function editRaise()
    {
        $id = $this->request->param('id', 0, 'intval');
        if ($this->request->isPost()) {
            $data   = $this->request->param();
            $post   = $data['raise'];
            $where = ['company_id'=>$id];

            $portalPostModel = new RelationCompanyRaisingModel();
            $post['company_id'] = $id;
            if (!empty($post['id'])){
                $portalPostModel->adminAddCompany($post,true);
            }else{
                $portalPostModel->adminAddCompany($post);
            }
            $this->success('添加成功!', url('Company/edit', ['id' => $portalPostModel->company_id]));
        }
    }
    public function editProduct()
    {
        $id = $this->request->param('id', 0, 'intval');
        if ($this->request->isPost()) {
            $data   = $this->request->param();
            $post   = $data['product'];
            $where = ['company_id'=>$id];

            $portalPostModel = new RelationCompanyProductModel();
            $post['company_id'] = $id;
            if (!empty($post['id'])){
                $portalPostModel->adminAddCompany($post,true);
            }else{
                $portalPostModel->adminAddCompany($post);
            }
            $this->success('添加成功!', url('Company/edit', ['id' => $portalPostModel->company_id]));
        }
    }
    /**
     * 添加公司基本信息
     * @adminMenu(
     *     'name'   => '添加公司基本信息',
     *     'parent' => 'admin/Company/default',
     *     'display'=> false,
     *     'hasView'=> true,
     *     'order'  => 10000,
     *     'icon'   => '',
     *     'remark' => '添加公司基本信息',
     *     'param'  => ''
     * )
     */
    public function addBasic()
    {
        if ($this->request->isPost()) {
            $data   = $this->request->param();
            $post   = $data['post'];
            $portalPostModel = new CompanyInfoModel(); 
	    $post['company_type']=$post['company_sel'];
	    $portalPostModel->adminAddCompany($post);
	    if ($post['company_sel']=='bigdata'){
		$bd   = $data['bigdata'];
		$bd['company_id'] = $portalPostModel->company_id;
		$bigDataModel = new BigDataCorpModel();
		$bigDataModel->adminAddCompany($bd);
	    }elseif ($post['company_sel']=='blockchain'){
		$bc   = $data['blockchain'];
		$bc['company_id'] = $portalPostModel->company_id;
		$block = new BlockchainCorpModel();
		$block->adminAddCompany($bc);

	    }elseif ($post['company_sel']=='insurance'){
		$insurance   = $data['insurance'];
		$insurance['company_id'] = $portalPostModel->company_id;
		$ins = new InsuranceCorpModel();
		$ins->adminAddCompany($insurance);
	    }

	    $data['post']['id'] = $portalPostModel->company_id;
            $hookParam          = [
                'is_add'  => true,
                'article' => $data['post']
            ];
            hook('portal_admin_after_save_article', $hookParam);
            $this->success('添加成功!', url('Company/edit', ['id' => $portalPostModel->company_id]));
        }
    }
    public function editBasic()
    {
	$id = $this->request->param('id', 0, 'intval');
        if ($this->request->isPost()) {
            $data   = $this->request->param();
            $post   = $data['post'];

            $portalPostModel = new CompanyInfoModel();
	    $where = ['company_id'=>$id];
	    $res = $portalPostModel->where('company_id', $id)->find();
	    $post['company_type']=$post['company_sel'];
	    $post['company_id']=$id;
            $professionClassificationModel = new RelationCompanyProfessionModel();
	    $professionClassificationModel->where($where)->delete();
            $portalPostModel->adminAddCompany($post,true); 
	    if ($res['company_type']=='bigdata'){
		$bigDataModel = new BigDataCorpModel();
                $bigDataModel->where($where)->delete();
	    }elseif ($res['company_type']=='blockchain'){
		$block = new BlockchainCorpModel();
		$block->where($where)->delete();
	    }elseif ($res['company_type']=='insurance'){
                $ins = new InsuranceCorpModel();
                $ins->where($where)->delete();
            }
	    
            if ($post['company_sel']=='bigdata'){
                $bd   = $data['bigdata'];
                $bd['company_id'] = $portalPostModel->company_id;
                $bigDataModel = new BigDataCorpModel();
                $bigDataModel->adminAddCompany($bd);
            }elseif ($post['company_sel']=='blockchain'){
                $bc   = $data['blockchain'];
                $bc['company_id'] = $portalPostModel->company_id;
                $block = new BlockchainCorpModel();
                $block->adminAddCompany($bc);

            }elseif ($post['company_sel']=='insurance'){
                $insurance   = $data['insurance'];
                $insurance['company_id'] = $portalPostModel->company_id;
                $ins = new InsuranceCorpModel();
                $ins->adminAddCompany($insurance);
            }
            #$data['post']['id'] = $portalPostModel->company_id;
            #$hookParam          = [
            #    'is_add'  => true,
            #    'article' => $data['post']
            #];
            #hook('portal_admin_after_save_article', $hookParam);
            $this->success('添加成功!', url('Company/edit', ['id' => $portalPostModel->company_id]));
        }
    }
    /**
     * 公司删除
     * @adminMenu(
     *     'name'   => '公司删除',
     *     'parent' => 'admin/Company/default',
     *     'display'=> false,
     *     'hasView'=> false,
     *     'order'  => 10000,
     *     'icon'   => '',
     *     'remark' => '公司删除',
     *     'param'  => ''
     * )
     */
    public function delete()
    {
        $param           = $this->request->param();
        $portalPostModel = new CompanyInfoModel();
        if (isset($param['id'])) {
		$where = ['company_id'=>$param['id']];
		$portalPostModel->where($where)->delete();
		$this->success("删除成功！", '');
	}
        if (isset($param['ids'])) {
		$where = ['company_id'=>['in', $ids]];
		$portalPostModel->where($where)->delete();
		$this->success("删除成功！", '');
	}
    }

    public function readBigData($id){
	$bigDataModel = new BigDataCorpModel();
	$bigData = $bigDataModel->where('company_id', $id)->find();
	if (empty($bigData)){
		$bigData = [];
		$bigData['big_data_corp_type']="";
		$bigData['big_data_corp_field']="";
	}
	return $bigData;
    }
    public function readBlockchain($id){
        $block = new BlockchainCorpModel();
        $bc = $block->where('company_id', $id)->find();
	if (empty($bc)){
		$bc=[];
		$bc['corp_assessment']="";
		$bc['tech_characteristic']="";
		$bc['tech_platform']="";
		$bc['tech_feasibility']="";
		$bc['tech_blockchain_type']="";
		$bc['analysis_plan']="";
		$bc['analysis_application']="";
		$bc['analysis_competitor']="";
		$bc['analysis_audit']="";
		$bc['analysis_evaluation']="";
		$bc['analysis_profit_model']="";
		$bc['analysis_correlation']="";
		$bc['official_website']="";
		$bc['data_source']="";
	}
	return $bc;
    }
    public function readInsurance($id){
	$ins = new InsuranceCorpModel();
	$bc = $ins->where('company_id', $id)->find();
	if (empty($bc)){
		$bc=[];
		$bc['customer_number']="";
		$bc['insurance_number']="";
		$bc['tech_description']="";
	}
	return $bc;
    }
    public function readFinance($id){
        $ins = new RelationCompanyFinanceModel();
        $bc = $ins->where('company_id', $id)->select();
        /**if (empty($bc)){
                $bc['id']="";
		$bc['year']="";
		$bc['quarter']="";
                $bc['earning']="";
                $bc['cost']="";
                $bc['profit']="";
                $bc['source']="";
        }**/
        return $bc;
    }
    public function readTeam($id){
        $ins = new RelationCompanyTeamModel();
        $bc = $ins->where('company_id', $id)->select();
        /**if (empty($bc)){
		$bc['id']="";
                $bc['name']="";
                $bc['position']="";
                $bc['resume']="";
                $bc['description']="";
                $bc['profit']="";
                $bc['source']="";
        }**/
        return $bc;
    }
    public function readMerge($id){
        $ins = new RelationCompanyMergeModel();
        $bc = $ins->where('company_id', $id)->select();
	foreach($bc as $p){
		$p['investorId'] = $p['investor_id'];
		$pc = new InvestorModel();
		$p['investorName'] = $pc->where('investor_id',$p['investorId'])->find()['investor_name'];
	}
        return $bc;
    }
    public function readRaise($id){
        $ins = new RelationCompanyRaisingModel();
        $bc = $ins->where('company_id', $id)->select();
        foreach($bc as $p){
                $p['investorId'] = $p['investor_id'];
                $pc = new InvestorModel();
                $p['investorName'] = $pc->where('investor_id',$p['investorId'])->find()['investor_name'];
        }
        return $bc;
    }
    public function readProduct($id){
	$ins = new RelationCompanyProductModel();
        $bc = $ins->where('company_id', $id)->select();
	foreach($bc as $p){
		$p['productCategoryIds'] = $p['profession_classification_id'];
		$pc = new ProfessionClassificationModel();
		$p['productCategories']  = $pc->where('profession_classification_id', $p['profession_classification_id'])->find()['name'];
		//$p['productCategories']  = $p->categories()->alias('a')->column('a.name', 'a.id');
	        //$p['productCategoryIds'] = implode(',', array_keys($p['productCategories']));
	}
        return $bc;
    }
    public function readPost($id){
        $companyModel = new CompanyInfoModel();
        $post            = $companyModel->where('company_id', $id)->find();
        if (empty($post['company_logo'])){
                $post['company_logo']='__TMPL__/public/assets/images/default-thumbnail.png';
        }else{
                $post['company_logo']='/upload/'.$post['company_logo'];
        }
        $post['postCategories']  = $post->categories()->alias('a')->column('a.name', 'a.id');
        $post['postCategoryIds'] = implode(',', array_keys($post['postCategories']));
	return $post;
    }
    /**
     * 编辑公司
     * @adminMenu(
     *     'name'   => '编辑公司',
     *     'parent' => 'admin/Company/default',
     *     'display'=> false,
     *     'hasView'=> true,
     *     'order'  => 10000,
     *     'icon'   => '',
     *     'remark' => '编辑公司',
     *     'param'  => ''
     * )
     */
    public function edit()
    {
        $id = $this->request->param('id', 0, 'intval');
	
	#print_r($post);
	$post = $this->readPost($id);
	$bigData = $this->readBigData($id);
	$bc =  $this->readBlockchain($id);
	$insu = $this->readInsurance($id);
	$fina = $this->readFinance($id);
        $team = $this->readTeam($id);
	$merge = $this->readMerge($id);
	$raise = $this->readRaise($id);
	$product = $this->readProduct($id);

        $themeModel        = new ThemeModel();
        $articleThemeFiles = $themeModel->getActionThemeFiles('portal/Article/index');
        $this->assign('article_theme_files', $articleThemeFiles);
        $this->assign('post', $post);
	$this->assign('bigdata',$bigData);
        $this->assign('block',$bc);
        $this->assign('ins',$insu);
        $this->assign('finance',$fina);
        $this->assign('team',$team);
        $this->assign('merge',$merge);
        $this->assign('raise',$raise);
        $this->assign('product',$product);
	$this->assign('id',$id);
        return $this->fetch();
    }
}
