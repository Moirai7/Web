<?php
namespace Home\Controller;
use Think\Controller;
class ShopController extends Controller {
	public function _initialize(){ // //  
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
	public function senduptodate(){
	$this->display();
	}
    public function changeinfo(){
		$Shop = M('Shop');
		if(I('get.id',0)){
			$id=$_GET['id'];
			$condition['isbn']=$_GET['id']; 
			$list = $Shop->where($condition)->find();
			$file=M('file');
			$data=$list[images];
			if(file_exists("./Public/upload/".$data)){unlink("./Public/upload/".$data);}
		}
		$this->list=$list;
		$this->display();
	}
	public function order(){
		$adminModel=M('Admin');
		$condition['user']=$this->email;
		$res = $adminModel->where($condition)->find();
		$this->phone=$res['phone'];
		$this->id=I('get.id',0);
		$this->display();
	}
    public function book(){
		$Shop = M('Shop');
		$Admin = M('Admin');
		if(I('get.id',0)){
			$condition['isbn']=$_GET['id']; 
			$list = $Shop->where($condition)->find();
			$data['click']=$list['click']+1;
			$Shop->where($condition)->save($data);
			$arr = json_decode(base64_decode($list['choices']));
			//var_dump(base64_decode($list['choices']));
			$click = $Shop->where('stock>0')->order('click desc')->limit(0,5)->select();
			$buyeremail['user'] = $this->email;
			$buyer =$Admin->where($buyeremail)->find();
			if($buyer['ulevel']==0)
				$this->ulevel=10;
			elseif($buyer['ulevel']==1)
				$this->ulevel=20;
			elseif($buyer['ulevel']==0)
				$this->ulevel=30;
		}
		$this->arr=$arr;
		$this->list=$list;
		$this->click=$click;
		$this->display();
	}
	public function delete(){
		$Cart = M('Cart');
		$condition['email'] = $this->email;
		$condition['isbn']=$_GET['id']; 
		$list = $Cart ->where($condition)->find();
		if($list['num']==1){
			if($list['count']==0) $Cart ->where($condition)->delete();
			else{
				$buyinfo2['num']=$list['num']-1;
				$Cart->where($condition)->save($buyinfo2);
			}
			$this->cartnum-=1;
			$_SESSION[("CARTNUM")]=$this->cartnum;
		}else{
			$buyinfo2['num']=$list['num']-1;
			$Cart->where($condition)->save($buyinfo2);
		}
		$this->success("购物车删除成功");
	}
	public function deletebook(){
		$Shop = M('Shop');
		$condition['isbn']=$_GET['id'];
		$res = $Shop ->where($condition)->delete();
		if($res)
		$this->success("删除成功");
		else
		$this->error("已经有人购买（或者放入购物车了），不能删除哦~");
	}
	public function returnemail(){

		import('ORG.Util.Email');
		$Cart = M('Cart');
		$buyinfo['email'] = $_GET['buyer'];
		$buyinfo['isbn'] = $_GET['id'];
		$ifhave = $Cart->where($buyinfo)->find();
		if($ifhave){
			$smtpemailto = $buyinfo['email'].'@bjtu.edu.cn'; //
			$mailsubject = "订单已确认"; //邮件主题
			$str = "书名：".$ifhave[name];
			$str3 = "购买人学生号：".$buyinfo['email'];
			$url = "http://" . $_SERVER ['HTTP_HOST'] . "/S&S/index.php/Home/Shop/book/id/".$_GET['id'];
			$mailbody = "<center><table align='center' border='0' cellpadding='0' cellspacing='0' height='100%' width='100%' style='background-color:#f2f2f2;width:100%!important;padding:0;margin:0;height:100%!important;border-collapse:collapse!important'>
        <tbody><tr><td align='center' valign='top' style='width:100%!important;padding:50px;margin:0;height:100%!important'>
         <table border='0' cellpadding='0' cellspacing='0' style='border:1px solid #dddddd;border-bottom-color:#cccccc;max-width:500px!important;border-collapse:collapse!important'>
              <tbody><tr>
                <td align='center' valign='top'>
                  <table border='0' cellpadding='0' cellspacing='0' width='100%' style='border-bottom:1px solid #cccccc;border-top:1px solid #ffffff;background-color:#ffffff;border-collapse:collapse!important'>
                    <tbody><tr>
                      <td valign='top' style='text-align:center;padding-left:20px;padding-bottom:30px;padding-right:20px;padding-top:30px;line-height:150%;font-size:15px;font-family:Helvetica;color:#424f59'>
                        <h1 style='text-align:center;margin-left:0;margin-bottom:10px;margin-right:0;margin-top:0;letter-spacing:normal;line-height:100%;font-weight:normal;font-style:normal;font-size:26px;font-family:Helvetica;display:block;color:#424f59!important'>恭喜！</h1>
                        <br>
                        订单已确认
						<br>\"$str\"
						<br>\"$str3\"
                      </td>
                    </tr>
                    <tr width='100%'>
                      <td align='center' valign='top'>
                        <table border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse:collapse!important'>
                          <tbody><tr height='47'>
                            <td align='center' valign='top'>
                              <table border='0' cellpadding='0' cellspacing='0' width='65%' style='border-collapse:collapse!important'>
                                <tbody><tr>
                                  <td align='center' valign='top'>
                                    <table border='0' cellpadding='0' cellspacing='0' width='280' style='border-radius:4px;background-color:#0095dd;width:100%!important;border-collapse:separate'>
                                      <tbody><tr>
                                        <td align='center' valign='middle' style='text-align:center;line-height:100%;font-weight:normal;font-size:20px;font-family:Helvetica;color:#ffffff'>
                                            <a href='$url' style='text-decoration:none;font-size:20px;font-family:Helvetica;display:block;color:#ffffff;padding:15px!important' target='_blank'>去网站看看</a>
                                        </td>
                                      </tr>
                                    </tbody></table>
                                    
                                  </td>
                                </tr>
                              </tbody></table> 
                            </td>
                          </tr>
                        </tbody></table>
                      </td>
                    </tr>
                  </tbody></table>
                </td>
              </tr>
            </tbody></table>
          </td>
        </tr>
      </tbody></table>
    </center>";
					$emaildata['mailto']=$smtpemailto;
					$emaildata['subject']=$mailsubject;
					$emaildata['body']=$mailbody;
					$mail = new \Org\Util\Email;
					if($mail->send($emaildata)){
					$this->success("邮件发送成功！",'/S&S');
					}else{
						$this->error("邮件发送失败！主人快来debug");
					}
		}
	}
	public function sendemail(){
if($this->email=="12301055"){
$Admin=M('Admin');
$list=$Admin->select();
	}
else
	$this->error("权限不对~");
	foreach($list as $name){
		import('ORG.Util.Email');
			$smtpemailto = $name['user'].'@bjtu.edu.cn'; //
			$mailsubject = "new messages"; //邮件主题
			$url = "http://" . $_SERVER ['HTTP_HOST'] . "/S&S";
			$str=$_POST['detail'];
			if(!$str)
				$str = level change
			$mailbody = "<center><table align='center' border='0' cellpadding='0' cellspacing='0' height='100%' width='100%' style='background-color:#f2f2f2;width:100%!important;padding:0;margin:0;height:100%!important;border-collapse:collapse!important'>
        <tbody><tr><td align='center' valign='top' style='width:100%!important;padding:50px;margin:0;height:100%!important'>
         <table border='0' cellpadding='0' cellspacing='0' style='border:1px solid #dddddd;border-bottom-color:#cccccc;max-width:500px!important;border-collapse:collapse!important'>
              <tbody><tr>
                <td align='center' valign='top'>
                  <table border='0' cellpadding='0' cellspacing='0' width='100%' style='border-bottom:1px solid #cccccc;border-top:1px solid #ffffff;background-color:#ffffff;border-collapse:collapse!important'>
                    <tbody><tr>
                      <td valign='top' style='text-align:center;padding-left:20px;padding-bottom:30px;padding-right:20px;padding-top:30px;line-height:150%;font-size:15px;font-family:Helvetica;color:#424f59'>
                        <h1 style='text-align:center;margin-left:0;margin-bottom:10px;margin-right:0;margin-top:0;letter-spacing:normal;line-height:100%;font-weight:normal;font-style:normal;font-size:26px;font-family:Helvetica;display:block;color:#424f59!important'>恭喜！</h1>
                        <br>
                        新消息
						<br>
						\"$str\"
                      </td>
                    </tr>
                    <tr width='100%'>
                      <td align='center' valign='top'>
                        <table border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse:collapse!important'>
                          <tbody><tr height='47'>
                            <td align='center' valign='top'>
                              <table border='0' cellpadding='0' cellspacing='0' width='65%' style='border-collapse:collapse!important'>
                                <tbody><tr>
                                  <td align='center' valign='top'>
                                    <table border='0' cellpadding='0' cellspacing='0' width='280' style='border-radius:4px;background-color:#0095dd;width:100%!important;border-collapse:separate'>
                                      <tbody><tr>
                                        <td align='center' valign='middle' style='text-align:center;line-height:100%;font-weight:normal;font-size:20px;font-family:Helvetica;color:#ffffff'>
                                            <a href='$url' style='text-decoration:none;font-size:20px;font-family:Helvetica;display:block;color:#ffffff;padding:15px!important' target='_blank'>去网站看看</a>
                                        </td>
                                      </tr>
                                    </tbody></table>
                                    
                                  </td>
                                </tr>
                              </tbody></table> 
                            </td>
                          </tr>
                        </tbody></table>
                      </td>
                    </tr>
                  </tbody></table>
                </td>
              </tr>
            </tbody></table>
          </td>
        </tr>
      </tbody></table>
    </center>";
					$emaildata['mailto']=$smtpemailto;
					$emaildata['subject']=$mailsubject;
					$emaildata['body']=$mailbody;
					$mail = new \Org\Util\Email;
					if($mail->send($emaildata)){
					$this->success("邮件发送成功！",'/S&S');
					}else{
						$this->error("邮件发送失败！主人快来debug");
					}
		}
	}
	public function buy(){
	if($this->email){
		import('ORG.Util.Email');

		$Shop = M('Shop');
		$Admin = M('Admin');
		$Cart = M('Cart');
		if(I('get.id',0)){
			$condition['isbn']=$_GET['id'];
			$list = $Shop->where($condition)->find();
			if($list['stock']>0){
				$owneremail['user'] = $list['seller'];
				$owner =$Admin->where($owneremail)->find();

				if($owner){
					$smtpemailto = $owner['user'].'@bjtu.edu.cn'; //
					$mailsubject = "有人想买您的书啦"; //邮件主题
					$str = "书名：".$list[name];
					$str3 = "购买人学生号：".$this->email;

					$buyeremail['user'] = $this->email;
					$buyer =$Admin->where($buyeremail)->find();
					if ($buyer['phone']) {	
						$str2 = "购买人电话：".$buyer['phone'];
					}else{
						$str2 = "购买人未预留手机号";
					}
					$url = "http://" . $_SERVER ['HTTP_HOST'] . "/S&S/index.php/Home/Shop/returnemail/id/".$_GET['id']."/buyer/".$this->email;
					$mailbody = "<center><table align='center' border='0' cellpadding='0' cellspacing='0' height='100%' width='100%' style='background-color:#f2f2f2;width:100%!important;padding:0;margin:0;height:100%!important;border-collapse:collapse!important'>
        <tbody><tr><td align='center' valign='top' style='width:100%!important;padding:50px;margin:0;height:100%!important'>
         <table border='0' cellpadding='0' cellspacing='0' style='border:1px solid #dddddd;border-bottom-color:#cccccc;max-width:500px!important;border-collapse:collapse!important'>
              <tbody><tr>
                <td align='center' valign='top'>
                  <table border='0' cellpadding='0' cellspacing='0' width='100%' style='border-bottom:1px solid #cccccc;border-top:1px solid #ffffff;background-color:#ffffff;border-collapse:collapse!important'>
                    <tbody><tr>
                      <td valign='top' style='text-align:center;padding-left:20px;padding-bottom:30px;padding-right:20px;padding-top:30px;line-height:150%;font-size:15px;font-family:Helvetica;color:#424f59'>
                        <h1 style='text-align:center;margin-left:0;margin-bottom:10px;margin-right:0;margin-top:0;letter-spacing:normal;line-height:100%;font-weight:normal;font-style:normal;font-size:26px;font-family:Helvetica;display:block;color:#424f59!important'>恭喜！</h1>
                        <br>
                        您好, 有人想买东西。
						<br>\"$str\"
						<br>\"$str3\"
						<br>\"$str2\"
                      </td>
                    </tr>
                    <tr width='100%'>
                      <td align='center' valign='top'>
                        <table border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse:collapse!important'>
                          <tbody><tr height='47'>
                            <td align='center' valign='top'>
                              <table border='0' cellpadding='0' cellspacing='0' width='65%' style='border-collapse:collapse!important'>
                                <tbody><tr>
                                  <td align='center' valign='top'>
                                    <table border='0' cellpadding='0' cellspacing='0' width='280' style='border-radius:4px;background-color:#0095dd;width:100%!important;border-collapse:separate'>
                                      <tbody><tr>
                                        <td align='center' valign='middle' style='text-align:center;line-height:100%;font-weight:normal;font-size:20px;font-family:Helvetica;color:#ffffff'>
                                            <a href='$url' style='text-decoration:none;font-size:20px;font-family:Helvetica;display:block;color:#ffffff;padding:15px!important' target='_blank'>回复确认邮件</a>
                                        </td>
                                      </tr>
                                    </tbody></table>
                                    
                                  </td>
                                </tr>
                              </tbody></table> 
                            </td>
                          </tr>
                        </tbody></table>
                      </td>
                    </tr>
                  </tbody></table>
                </td>
              </tr>
            </tbody></table>
          </td>
        </tr>
      </tbody></table>
    </center>";
					$phonebody = "尊敬的会员您好 ,有人想买您的书啦.\"$str\"\"$str3\"\"$str2\""; //短信内容
					$emaildata['mailto']=$smtpemailto;
					$emaildata['subject']=$mailsubject;
					$emaildata['body']=$mailbody;
					$mail = new \Org\Util\Email;
					if($mail->send($emaildata)){
						$data['buy']=$list['buy']+1;
						$data['stock']=$list['stock']-1;
						$Shop->where($condition)->save($data);

						$buyinfo['email'] = $this->email;
						$buyinfo['isbn'] = $_GET['id'];
						$ifhave = $Cart->where($buyinfo)->find();
						if($ifhave){
							$num = $Cart->where($buyinfo)->getField('num');
							$count = $Cart->where($buyinfo)->getField('count');
							if($num==1){
								$this->cartnum-=1;
								$_SESSION[("CARTNUM")]=$this->cartnum;
							}
							if($num>0){
							$buyinfo2['num']=$num-1;
							}
							$buyinfo2['count']=$count+1;
							$Cart->where($buyinfo)->save($buyinfo2);
						}else{
							$buyinfo['num']=0;
							$buyinfo['count']=1;
							$Cart->add($buyinfo);
						}
						if ($owner['phone']) {	
							$phone = new \Org\Util\PHPFetion('18811442500','dzl742612');
							if($phone->send($owner['phone'],$phonebody ))
								$this->success("短信发送成功！",'/S&S');
							else
								$this->success("邮件发送成功！",'/S&S');
						}
						$this->success("邮件发送成功！",'/S&S');
					}else{
						$this->error("邮件发送失败！主人快来debug");
					}
				}else{
					$this->error("买家找不到？主人快来debug");
				}
			}else{
				$buyinfo['email'] = $this->email;
				$buyinfo['isbn'] = $_GET['id'];
				$book = $Cart->where($buyinfo)->find();
				if($book['num']>1||$book['count']>0){
					$buyinfo2['num']=$book['num']-1;
					$res = $Cart->where($buyinfo)->save($buyinfo2);
					$this->error("卖光了");
				}else
					$this->error("卖光了");
			}
		}
	}else{
		 $this->error("未登录~");
	}
}
public function cart(){
	if($this->email){
		$Cart = M('Cart');
		$condition['isbn'] = $_POST['isbn'];
		$condition['email'] = $this->email;
		$info= $Cart->where($condition)->find();
		if($info){
			$data['num']=1+$info['num'];
			$data2['isbn'] = $_POST['isbn'];
			$data['money'] = $_POST['money'];
			$data2['email'] =$this->email;
			if($info['num']==0)
				$_SESSION[("CARTNUM")]=$this->cartnum+1;
			$res = $Cart->where($data2)->save($data);
			if($res)
				$this->success("添加成功，继续购物吧~",'/S&S');
			else
				$this->error("yi主人快来debug~");
		}else{
			$data['num']=1;
			$this->cartnum+=1;
			$_SESSION[("CARTNUM")]=$this->cartnum;
			$data['isbn'] = $_POST['isbn'];
			$data['email'] =$this->email;
			$data['money'] = $_POST['money'];
			$res = $Cart->add($data);
			if($res)
				$this->success("添加成功，继续购物吧~",'/S&S');
			else
				$this->error("主人快来debug~");
		}
	}else{
		 $this->error("未登录~");
	}
}
public function management(){
if($this->email=="12301055"){
$Admin=M('Admin');
$this->list=$Admin->select();
	$this->display();
	}
else
	$this->error("权限不对~");
}
	public function seller(){
		$Shop = M('Shop');
		$num = I('get.page',1);
		$data['seller'] = $this->email;
		$list = $Shop->where($data)->order('addtime desc')->limit(11*($num-1),11)->select();		
		$counts =$Shop->where($data)->count();
		$count=ceil($counts/11);
		if ($num){$page=intval($_GET['page']);}else{$page=1;}
		$this->counts=$count;
		$this->page= $page;
		$this->list=$list;
		$this->display();
	}
	public function user(){
		$adminModel=M('Admin');
		$condition['user']=$this->email;
		$res = $adminModel->where($condition)->find();
		if($buyer['ulevel']==0)
				$this->ulevel="Basic customer";
			elseif($buyer['ulevel']==1)
				$this->ulevel="Silver customer";
			elseif($buyer['ulevel']==0)
				$this->ulevel="Golden customer";
		$this->display();
	}
	public function editinfo(){
		$adminModel=M('Admin');
		$condition['user']=$this->email;
		$res = $adminModel->where($condition)->find();
		$this->phone=$res['phone'];
		$this->display();
	}
	public function search(){
		$num = I('get.page',0);
		$id =$_POST['id'];
		if($id){
			$_SESSION["SEARCHID"] = $id;
		}else{
			$id = $_SESSION["SEARCHID"];
		}
		$Shop = M('Shop');
		$condition['stock'] = array('gt',0);
		$all = $Shop->where($condition)->select();
		if ($num){$page=intval($_GET['page']);}else{$page=1;}
		$temp = 0;
		for($i = 0; $i < count($all); $i++){
			if(strstr($all[$i]['name'],$id)){
				$list[$temp] = $all[$i];
				++$temp;
			}
		}
		$counts=count($list);
		$count=ceil($counts/20);
		$this->counts=$count;
		$this->page= $page;
		$offset=20*($page - 1);
		$lists=array_slice($list,$offset,20,true);
		$this->list=$lists;
		$this->name= $id;
		$this->display('Shop/search');
	}
	public function showcart(){
		if($this->email){
			$Cart = M('Cart');
			$condition['email'] = $this->email;
			$condition ['num'] = array('gt',0);
			$num = I('get.page',0);
			$cartbook= $Cart->where($condition)->select();
			$Shop = M('Shop');
			$temp=0;
			for($i = 0; $i < count($cartbook); $i++){
				$data['isbn']=$cartbook[$i]['isbn'];
				$abook= $Shop->where($data)->find();
				$num2=$cartbook[$i]['num'];
				$temp=$i+$temp;
				while($num2>=1) {
					$list[$temp] = $abook;
					++$temp;
					--$num2;
				}
			}
			$counts=count($list);
			$count=ceil($counts/20);
			if ($num){$page=intval($_GET['page']);}else{$page=1;}
			$this->counts=$count;
			$this->page= $page;
			$offset=20*($page - 1);
			$lists=array_slice($list,$offset,20,true);
			$this->list=$lists;
			$this->name= '购物车';
			$this->display('Shop/cart');
		}else{
			$this->error("未登录~");
		}
	}
	public function history(){
		$Cart = M('Cart');
		$num = I('get.page',0);
		$data['email'] = $this->email;
		$condition ['count'] = array('gt',0);
		$cartbook= $Cart ->where($data)->select();
		$Shop = M('Shop');
		$temp=0;
		for($i = 0; $i < count($cartbook); $i++){
			$con['isbn']=$cartbook[$i]['isbn'];
			$abook= $Shop->where($con)->find();
			$count=$cartbook[$i]['count'];
			$temp=$i+$temp;
			while($count>=1) {
				$list[$temp] = $abook;
				++$temp;
				--$count;
			}
		}
		$counts=count($list);
		$count=ceil($counts/12);
		if ($num){$page=intval($_GET['page']);}else{$page=1;}
		$this->counts=$count;
		$this->page= $page;
		$offset=12*($page - 1);
		$lists=array_slice($list,$offset,12,true);
		$this->list=$lists;
		$this->display();
	}
	public function add(){
		$this->display();
	}
	public function upload2(){
  	 	 $upload = new \Think\Upload();// 实例化上传类
   		 $upload->maxSize   =     3145728 ;// 设置附件上传大小
   		 $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
   		 $upload->rootPath  =     './Public/upload/'; // 设置附件上传根目录
   		 $upload->savePath  = '';
   		 $upload->saveName = 'time';
   		 $upload->thumb = true;
   		 $upload->imageClassPath = 'ORG.Net.Image';
   		 $upload->thumbPrefix ='m_';
   		 $upload->thumbMaxWidth = '400,100';
   		 $upload->thumbMaxHeight = '400,100';
   		 $upload->thumbPath = './Public/upload/';
   		 $upload->thumbExt = 'jpg';
   		 $upload->saveRule = uniqid;
   		  $upload->thumbRemoveOrigin = true;
  		  if(!$upload->upload()) {// 上传错误提示错误信息
   		     $this->error($upload->getError());
  		  }else{// 上传成功 获取上传文件信息
  		  		$Shop = M('Shop');
  		  		if($Shop->create()){
					$choice_id = $_POST['choice_id'];
					$jc='';
					$cs=array();
					for( $i=1;$i<=(int)$choice_id;$i++){
						$obj[choices]= $_POST['choices_'.$i];
						$obj[choices_price]= $_POST['choices_price_'.$i];
						$cs[$i]= json_encode($obj);
					}
					if(isset($_POST['level1'])&&isset($_POST['level2']))
						$data['level']=3;
					elseif(isset($_POST['level1']))
						$data['level']=1;
					elseif(isset($_POST['level2']))
						$data['level']=2;
					$data['choices']=base64_encode(json_encode($cs));
					$data['name'] = $_POST['name'];
					$data['isbn'] = $_POST['isbn'];
					$data['price'] = $_POST['price'];
					$data['current_price'] = $_POST['current_price'];
					$data['date'] = $_POST['date'];
					$data['press'] = $_POST['press'];
					$data['stock'] = $_POST['stock'];
                    $data['sort'] = $_POST['sort'];
					$data['board'] = $_POST['board'];
					$data['images'] = $upload->addr;
                    $data['seller'] = $this->email;
                    if($_POST['current_price']<=$_POST['price']*0.5){
						$data['sale']=1;
					}else{
						$data['sale']=0;
					}$data['new']=1;
					$res = $Shop->save($data);
					if($res){
						$this->success("发布成功，好东西要和大家分享哦~",'/S&S');
					}else{
						 $this->error("添加失败~");
					}
				}
		  }
	}
	public function upload(){
  	 	 $upload = new \Think\Upload();// 实例化上传类
   		 $upload->maxSize   =     3145728 ;// 设置附件上传大小
   		 $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
   		 $upload->rootPath  =     './Public/upload/'; // 设置附件上传根目录
   		 $upload->savePath  = '';
   		 $upload->saveName = 'time';
   		 $upload->thumb = true;
   		 $upload->imageClassPath = 'ORG.Net.Image';
   		 $upload->thumbPrefix ='m_';
   		 $upload->thumbMaxWidth = '400,100';
   		 $upload->thumbMaxHeight = '400,100';
   		 $upload->thumbPath = './Public/upload/';
   		 $upload->thumbExt = 'jpg';
   		 $upload->saveRule = uniqid;
   		  $upload->thumbRemoveOrigin = true;
  		  if(!$upload->upload()) {// 上传错误提示错误信息
   		     $this->error($upload->getError());
  		  }else{// 上传成功 获取上传文件信息
  		  		$Shop = M('Shop');
  		  		if($Shop->create()){
					$choice_id = $_POST['choice_id'];
					$jc='';
					$cs=array();
					for( $i=1;$i<=(int)$choice_id;$i++){
						$obj[choices]= $_POST['choices_'.$i];
						$obj[choices_price]= $_POST['choices_price_'.$i];
						$cs[$i]= json_encode($obj);
					}
					$data['choices']=base64_encode(json_encode($cs));
					$data['name'] = $_POST['name'];
					$data['isbn'] = $_POST['isbn'];
					$data['price'] = $_POST['price'];
					$data['current_price'] = $_POST['current_price'];
					$data['date'] = $_POST['date'];
					$data['press'] = $_POST['press'];
					$data['stock'] = $_POST['stock'];
                    $data['sort'] = $_POST['sort'];
					$data['board'] = $_POST['board'];
					if(isset($_POST['level1'])&&isset($_POST['level2']))
						$data['level']=3;
					elseif(isset($_POST['level1']))
						$data['level']=1;
					elseif(isset($_POST['level2']))
						$data['level']=2;
					$data['images'] = $upload->addr;
                    $data['seller'] = $this->email;
                    if($_POST['current_price']<=$_POST['price']*0.5){
						$data['sale']=1;
					}else{
						$data['sale']=0;
					}$data['new']=1;
					$res = $Shop->data($data)->add();
					if($res){
						$this->success("发布成功，好东西要和大家分享哦~",'/S&S');
					}else{
						 $this->error("添加失败~");
					}
				}
		  }
	}
} 
?>