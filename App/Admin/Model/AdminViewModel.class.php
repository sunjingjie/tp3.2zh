<?php 
namespace Admin\Model;
use Think\Model\ViewModel;
class AdminViewModel extends ViewModel {
   public $viewFields = array(
     'Admin'=>array('id','username','password','level_id','time'),
     'Level'=>array('name'=>'level_name', '_on'=>'Admin.level_id=level.id'),
   );
}




?>