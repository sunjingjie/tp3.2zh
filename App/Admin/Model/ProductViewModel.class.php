<?php 
namespace Admin\Model;
use Think\Model\ViewModel;
class ProductViewModel extends ViewModel {
   public $viewFields = array(
     'Product'=>array('id','name','thumb_path','price','count','time'),
     'Category'=>array('name'=>'category_name', '_on'=>'Product.category=Category.id'),
   );
}




?>