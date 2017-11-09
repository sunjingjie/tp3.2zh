<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends PublicController {
   public function index(){
		
		//if(!session('?user')){
			//$this->redirect('User/login');
			//}else{
			$this->redirect('News/index');
				//
				//}
			

	
	}
}