<?php
namespace Admin\Model;
use Think\Model\ViewModel;
class CateViewModel extends Model{//��Ӧ���ݿ��еı�xp_cate
protected $_auto=array(
array('path','tclm',3,'callback'), 
); 

function tclm(){
$pid=isset($_POST['pid'])?(int)$_POST['pid']:0;
echo ($pid);
if($pid==0){
$data=0;
}else{
$list=$this->where("id=$pid")->find();
$data=$list['path'].'-'.$list['id'];//�����pathΪ�����path���ϸ����id
}
return $data; 
}
}
?>