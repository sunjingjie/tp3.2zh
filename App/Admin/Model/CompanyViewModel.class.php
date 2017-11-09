<?php 
namespace Admin\Model;
use Think\Model\ViewModel;
class CompanyViewModel extends ViewModel {
   public $viewFields = array(
     'Company'=>array('id','content','title','author','thumb_path','time'),
     'Category'=>array('name'=>'category_name', '_on'=>'Company.category=Category.id'),
   );
}




?>