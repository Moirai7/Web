<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function _initialize(){ // // 
	if(!isset($_SESSION)){
    session_start();die();
	}
    if(!isset($_SESSION[C("USER_AUTH_KEY")]))
		{
			$linkmsg = U('Admin/login');
			$msg="login"; 
		}
		else
		{
			$msg=$_SESSION[C("USER_AUTH_KEY")];
			$email=$_SESSION[C("EMAIL")];
			$cartnum=$_SESSION[("CARTNUM")];
			$linkmsg = U('Shop/user');
			$checklogin= true;
		}
		$this->assign('email',$email);
		$this->assign('msg',$msg);
		$this->assign('cartnum',$cartnum);
		$this->assign('linkmsg',$linkmsg);
    }
    public function info(){
		$Shop = M('Shop');
		$Sort = M('Sort');
		$level = I('get.level',3);
		if(I('get.id',0)){
			$num = I('get.page',0);
			$condition['sort']=$_GET['id'];
			$condition['stock'] = array('gt',0);
			if($level==1||$level==2)
				$condition['level'] = $level;//0 not level,1 home, 2 en,3 both
			$counts = $Shop->where($condition)->count();
			$count=ceil($counts/20);
			if ($num){$page=intval($_GET['page']);}else{$page=1;}
			$offset=20*($page - 1);
			if($level==4)
				$list = $Shop->where($condition)->order('addtime desc')->limit($offset,20)->select();
			elseif($level==5)
				$list = $Shop->where($condition)->order('click desc')->limit($offset,20)->select();
			elseif($level==6)
				$list = $Shop->where($condition)->order('current_price asc')->limit($offset,20)->select();
			else
				$list = $Shop->where($condition)->order('addtime desc')->limit($offset,20)->select();
			$date['cid']=$_GET['id'];
			$name = $Sort->where($date)->find();
		}else{
			$num = I('get.page',0);
			$list = $Shop->where('stock>0')->order('addtime desc')->limit($offset,20)->select();
		}
		$this->counts=$count;
		$this->page= $page;
		$this->id=$_GET['id'];
		$this->name= $name['name'];
		$this->list=$list;
		$this->display();
	}
	public function index(){
		$Shop = M('Shop');
		
		$list = $Shop->where('stock>0')->order('addtime desc')->limit(0,10)->select();
		$this->list=$list;
		
		$click = $Shop->where('stock>0')->order('click desc')->limit(0,10)->select();
		$this->click=$click;

		$price = $Shop->where('stock>0')->order('current_price asc')->limit(0,10)->select();
		$this->price=$price;
		
		$this->display();
	}
}?>