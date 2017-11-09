<?php
namespace Admin\Model;
use Think\Model\ViewModel;
class CategoryViewModel extends ViewModel {
   public $viewFields = array(
     'Category'=>array('id','pid','rideo','url','name')
   );
}
?>