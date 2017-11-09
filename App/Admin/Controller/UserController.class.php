<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    public function login(){
		
		if(IS_POST){//if($_SESSION['verify'] != md5($_POST['code'])) {
//                $this->error('验证码错误！');
//                 }
			$verify = I('param.verify','');  
if(!check_verify($verify)){  
    $this->error("亲，验证码输错了哦！",$this->site_url,9);  
} 	 
			$admin=M('admin');
			$where=array('username'=>$_POST['username'],password=>md5($_POST['password']));
			$res=$admin->where($where)->find();
			
			if($res){
			$level=M('level');
		    $level_res=$level->where(array('id'=>$res['level_id']))->find();
			//echo $level->getLastsql();die;
		     $_SESSION['level']=json_decode($level_res['menu']);
			if(I('cookie')==1){
			cookie('username',$res['username'],3600);
			cookie('password',I('password'),3600);
			cookie('coo',1,3600);
			
			 
			
			}else{
			cookie('username',null);
			cookie('password',null);
			cookie('coo',null);
			
			}
				session('user',$res['username']);
				$this->redirect('Index/index');
				}else{
					$this->error("用户名或密码不正确！！！");
					}
			
			}
			
       $this->display('login');	
    }
	public function logout(){
				session('user',null);
				$this->success("退出成功！！！",'login');
				
				} 
				
				public function verify(){  
				$Verify = new \Think\Verify();  
				$Verify->fontSize = 18;  
				$Verify->length   = 4;  
				$Verify->useNoise = false;  
				$Verify->codeSet = '0123456789';  
				$Verify->imageW = 130;  
				$Verify->imageH = 50;  
				//$Verify->expire = 600;  
				$Verify->entry();  
			}  
}