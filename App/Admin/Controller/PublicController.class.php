<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller {
   public $model=null;
    public function __construct(){
		parent::__construct();
		if(!session('?user')){
			$this->redirect('User/login');};
			$this->model = I(0);
			$category=M('category');
		$list=$category->where(array('is_delete'=>0,'level'=>0))->select();
		//print_r($this->model);die;
		$this->assign('list',$list);
		$this->assign('cat',$this->model);

			                }
	public function image(){
	//import('ORG.Net.UploadFile');
			$upload = new \Think\UploadFile();// 实例化上传类
			$upload->maxSize  = 2097152 ;// 设置附件上传大小
			$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath =  './Public/Uploads/';// 设置附件上传目录
			$upload->autoSub = true;
			$upload->subType = 'date';
			$upload->dateFormat = 'Y-m-d';
			$upload->saveRule = 'time';
			$upload->thumb = true;
			$upload->thumbMaxWidth = '50,200';
			$upload->thumbMaxHeight = '50,200';
			$upload->thumbPrefix = 'thumb_';
			$upload->thumbPath = './Public/Uploads/thumb/';
			
			if(!$upload->upload()) {// 上传错误提示错误信息$upload->getErrorMsg()
			$this->error($upload->getErrorMsg());
			}else{// 上传成功 获取上传文件信息
			$info =  $upload->getUploadFileInfo();
                 }
		    $img_name = substr($info[0]['savename'],11);	 
			$_POST['image_path'] = $info[0]['savepath'].$info[0]['savename'];
			$_POST['thumb_path'] = $upload->thumbPath.'thumb_'.$img_name;
			if($_POST['server']==1){
			//import('ORG.Util.Image');
	        //$Image = new Image();
			// 给avator.jpg 图片添加logo水印
			//$Image->water($info[0]['savepath'].$info[0]['savename'],'./Public/Uploads/water/water.png');}
			$image = new \Think\Image(); 
			$path  = $info[0]['savepath'].$info[0]['savename'];


// 在图片右下角添加水印文字 ThinkPHP 并保存为new.jpg
$image->open($info[0]['savepath'].$info[0]['savename'])->water('./Public/Uploads/water/water.png',\Think\Image::IMAGE_WATER_NORTHWEST)->save($path); 
            
           
	}
			}
public	function getCategory($pid=0,$cat_arr=array(),$level=0){
	$category = M('Category');;// 实例化User对象
		import('ORG.Util.Page');// 导入分页类
	$result=$category->where(array('is_delete'=>0,'pid'=>$pid))->select();//查询顶级目录
	if($result!=="" || $level<10){
		//当$result为空，表示没有下一级，没有下一级就不用再调用自身，相当于推出当前的递归，返回到上一级
		foreach( $result as $v){
			//print_r($v);
			//$v['level']=$level;
			$level_str ='<font style=" font-weight:600;" color="red">';
			for($i=0;$i<$level;$i++){
				$level_str.='|-';
				}
				$level_str.='</font>';
				$v['name']=$level_str.$v['name'];
				$cat_arr[]=$v;//往数组的最后一个元素差入当前的分类          
				$pid=$v['id'];
				//$level的传参不能用$level++,因为++后。$level本身也加1，而只是传参的值加1，本身当前级别是不会变
				$cat_arr=$this->getCategory($pid,$cat_arr,$level+1);//把$cat_arr重新赋值
				
				//echo'返回了上一级'；
				//第一次循环后，得到是顶级及其下一级的数组
				//递归算法的退出就是指不再调用自身
				//print_r($result_2);
			}
			//echo'循环结束';
		}
	    //echo'结束';
        return $cat_arr;
	}
 public	function tianjia($biao,$data=array()){
	
	$insert_str ='';
	//拼组SQL语句
	foreach($data as $k=>$v){
		$insert_str .= $k.'="'.$v.'",';
		}
	$insert_str= substr($insert_str,0,-1);//进行对sql语句的完善
	$sql="insert into $biao set $insert_str";
	//print_r($sql);
	//die();
	$row = mysql_query($sql);
	return mysql_affected_rows();
	}
	

	public function view($view){
		
		     $this->display('Public:header'); 
			 $this->display($view); 
			 $this->display('Public:footer');  
	                            }
       public function image11(){
    $upload = new \Think\UploadFile();// 实例化上传类
    $upload->maxSize   =     3145728 ;// 设置附件上传大小
    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    $upload->rootPath  =     './Public/Uploads/'; // 设置附件上传根目录
    $upload->savePath  =     ''; // 设置附件上传（子）目录
    // 上传文件 
	$upload->autoSub = true;
    $upload->subName = array('date','Y-m-d');
	$upload->thumb = true;
	$upload->thumbMaxWidth = '50,200';
	$upload->thumbMaxHeight = '50,200';
	$upload->thumbPrefix = 'thumb_';
	$upload->thumbPath = './Public/Uploads/thumb/';
	//print_r($upload);die;
    $info   =   $upload->upload();
    if(!$info) {// 上传错误提示错误信息
        $this->error($upload->getError());
    }else{// 上传成功
	
       foreach($info as $file){
        //echo $file['savepath'].$file['savename'];die;
		$img_name = substr($info[0]['savename'],11);
$_POST['image_path'] = './Public/Uploads/'.$file['savepath'].$file['savename'];	
$_POST['thumb_path'] = './Public/Uploads/'.'thumb_'.$img_name;	
   }
    }
}


}