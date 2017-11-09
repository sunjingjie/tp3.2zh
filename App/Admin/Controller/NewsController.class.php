<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends PublicController {
   public function index(){
		$news = D('NewsView');;// 实例化User对象
		import('ORG.Util.Page');// 导入分页类
		$count      = $news->where(array('news.is_delete'=>0))->count();// 查询满足要求的总记录数
		$Page       = new  \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		//$list = $news->where('is_delete=0')->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$newsview = D('NewsView');
		$list=$newsview->where(array('news.is_delete'=>0))->order('news.id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('data',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->view(); // 输出模板
      


//列表
		/*$res = $news->field('id,title,time,author')->where(array('is_delete'=>0))->order('id desc')->select();
		//print_r($res);die;
		$this->assign('data',$res);
	$this->view(); */
	}
	  public function add(){
		  
          
		
		  $categoryview = D('CategoryView');
		$list= $this->getCategory();
		$this->assign('list',$list);// 赋值数据集
		  if(IS_POST){
			$news = M('news'); 
			if($_FILES['image_path']['name']!==""){
			$this->image();
			}else{};	
			
			$_POST['time']=time();
			$_POST['author']= session('user');
			//print_r($_POST);die;
			// print_r($info);die;
			if($news->data($_POST)->add()){
				//echo $news->getLastsql();die();
				$this->success('新增成功','index');
				exit;
				}else{
					
					$this->error('新增失败');}
			  }
			  
		    
			 $this->view(); 
		
	}
	 public function update(){
	 

		 $news = M('news');
		 
		 
	$categoryview = D('CategoryView');
		$list= $this->getCategory();
		  if(IS_POST){ 
			if($_FILES['image_path']['name']!==""){
			$this->image();
			}else{};		 
			//print_r($_POST);die;
			//echo  $news->getLastSql();die;
			//print_r(getLastsql());die;
			if($news->where(array('id'=>$_GET['id']))->data($_POST)->save()){
				$this->success('修改成功',U('News/index'));
				exit;
				}else{
					
					$this->error('修改失败');exit;}
			  }
			  $res = $news->where(array('id'=>$_GET['id']))->find();
			  //echo  $news->getLastSql();die;
		//print_r($res);die;
		$this->assign('res',$res);
		 $this->assign('list',$list) ;
			  $this->view(); 
		
		
	}
	 public function wl_delete(){//物理
		  if(IS_GET){
			$news = M('news'); 
			$row = $news->where(array('id'=>$_GET['id']))->delete(); 
			//echo  $news->getLastSql();die;
			//print_r(getLastsql());die;
			if($row==1){
				$this->success('删除成功',U('News/index'));
				exit;
				}else{
					
					$this->error('删除失败');exit;}
			  }
			  $this->view(); 
		
		
	}
	 public function delete(){//逻辑
		  if(IS_GET){
			$news = M('news'); 
			$row = $news->where(array('id'=>$_GET['id']))->data(array('is_delete'=>1))->save(); 
			//echo  $news->getLastSql();die;
			//print_r(getLastsql());die;
			if($row==1){
				$this->success('删除成功',U('News/index'));
				exit;
				}else{
					
					$this->error('删除失败');exit;}
			  }
			  $this->view(); 
		
		
	}
}