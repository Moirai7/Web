<?php
namespace Home\Controller;
use Think\Controller;

class AdminController extends Controller {
		public function login(){
		if (!isset($_session[c("USER_AUTH_KEY")])) {
            // 没有通过认证，就调用 admin控制器对应的 admin文件夹下/login的模板文件
            $this->display();
        }else {
            // 通过认证，跳转到模板index文件夹下的/index的模板文件
            $this->redirect('/');
        }
	}
	public function resume() {
        $this->display(); 
    }
	public function logout() {
         if (isset($_SESSION[C("USER_AUTH_KEY")])) {
            unset($_SESSION[C("USER_AUTH_KEY")]);
            unset($_SESSION[C("EMAIL")]);
            unset($_SESSION[C("CART")]);
            $this->success("成功退出！",'/S&S');
        }else {
            $this->error("已经注销登录！");
        }
    }
	public function change(){
		$adminModel=M('Admin');
		$condition['user']=$_POST['email'];
		$res = $adminModel->where($condition)->find();
		if($res)
		{
			if($res['password'] !=substr(md5($_POST['current_password']),0,10)) {
					$this->error('密码错误！');
				}else{
				$data['user']=$_POST['email'];
				$data['password']=md5($_POST['password']);
				$adminModel->where('id='.$res['id'])->save($data);
				$this->success('修改成功!','/');
			}
		}else
		{
			$this->error('帐号不存在或者已被禁用！!');
        }
	}

	public function submit(){
		$adminModel=M('Admin');
		$condition['user']=$_GET['usermail'];
		$res = $adminModel->where($condition)->find();
		if($res)
		{	
			if($res['iscurrent']!=0){
				if($res['password'] !=substr(md5($_GET['password']),0,10)) {
					$this->error('密码错误！');
				}else{
					$Cart = M('Cart');
					$data['email'] =$_GET['usermail'];
					$data ['num'] = array('gt',0);
					$num = $Cart->where($data)->count();
					if ($num) {
						$_SESSION[('CARTNUM')] = $num;
					}else{
						$_SESSION[('CARTNUM')] = 0;
					}
					
					$_SESSION[C("USER_AUTH_KEY")]=$res['username'];
					$_SESSION[C('EMAIL')] = $res['user'];
					$this->redirect('/');
				}
			}else{
				$this->error('用户未激活!');
			}
		}else
		{
			$this->error('帐号不存在或者已被禁用！!');
        }
	}
	public function emailVerify(){
		$adminModel=M('Admin');
		$condition['currentinfo']=$_GET['str'];
		$res = $adminModel->where($condition)->find();
		if($res)
		{
			$Cart = M('Cart');
			$_SESSION[('CARTNUM')] = 0;
			$_SESSION[C("USER_AUTH_KEY")]=$res['username'];
			$_SESSION[C('EMAIL')] = $res['user'];
			$data['iscurrent']=1;
			$adminModel->where($condition)->save($data);
			$this->success('激活成功!','/');
		}
	}
	public function changephone(){
		$adminModel=M('Admin');
		$condition['user']=$_POST['email'];
		$res = $adminModel->where($condition)->find();
		if($res)
		{
			if($_POST['current_phone']){
				$data['phone']=$_POST['current_phone'];
				$phone = new \Org\Util\PHPFetion('18811442500','dzl742612');
				$phone->addFriend($_POST['current_phone']);
			}else{
				$data['phone'] = $res['phone'];
            }
			if($_POST['current_username']){
				$data['username']=$_POST['current_username'];
			}else{
				$data['username'] = $res['username'];
            }
			$_SESSION[C("USER_AUTH_KEY")]=$data['username'] ;
			$data['user']=$_POST['email'];
			$adminModel->where('id='.$res['id'])->save($data);
			$this->success('修改成功!','/');
		}else
		{
			$this->error('帐号不存在或者已被禁用！!');
        }
	}
	public function joinus(){			
		import('ORG.Util.PHPMailerAutoload');//导入本类

//SendMail("12301055@bjtu.edu.cn","邮件标题","邮件正文");	
		$condition['username']=$_GET['usernamesignup'];
		$condition['user']=$_GET['emailsignup'];
		$condition['password']=md5($_GET['passwordsignup']);
		
		$email = $_GET['emailsignup'];
		$x = md5 ($email);
		$str = substr(base64_encode ( $email.time().$x ),0,64);
		$condition['currentinfo']=$str;
		$adminModel=M('Admin');
		$res=$adminModel->data($condition)->add();
		
        if($res){
		$smtpemailto = $email.'@bjtu.edu.cn'; //发送给谁
		$mailsubject = "帐号注册邮件激活"; //邮件主题
		$url = "http://" . $_SERVER ['HTTP_HOST'] . "/S&S/index.php/Home/Admin/emailVerify/" . $str;
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
                        尊敬的会员您好, 只要再用几秒钟的时间就可以验证您的 跳瘙市场 账号了。
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
                                            <a href='$url' style='text-decoration:none;font-size:20px;font-family:Helvetica;display:block;color:#ffffff;padding:15px!important' target='_blank'>验证</a>
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
			$this->success("邮件发送成功！",'/');
		}else{
			$this->success("邮件发送失败！");
		}}else{
            $this->success("此用户已经注册！");
        }	
	}
}?>