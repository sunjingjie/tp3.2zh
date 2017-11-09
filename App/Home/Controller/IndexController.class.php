<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends PublicController {
    public function index(){
		$this->myCart();
		//$news = D('ProductView');// 实例化User对象
		//import('ORG.Util.Page');// 导入分页类
		//$count      = $news->where(array('product.is_delete'=>0,'product.tuijian'=>5))->count();// 查询满足要求的总记录数
		//$Page       = new Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数
		//$show       = $Page->show();// 分页显示输出$Page->firstRow.','.$Page->listRows
		$newsview = D('ProductView');
		$list=$newsview->where(array('product.is_delete'=>0,'product.tuijian'=>5))->order('product.id desc')->limit(3)->select();
		$this->assign('data',$list);// 赋值数据集
        $this->view('Site:index');
    }
}