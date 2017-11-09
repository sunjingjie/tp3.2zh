<?php 
namespace Admin\Model;
use Think\Model\ViewModel;
class NewsViewModel extends ViewModel {
   public $viewFields = array(
     'News'=>array('id','title','thumb_path','tedian','author','time'),
     'Category'=>array('name'=>'category_name', '_on'=>'News.category=Category.id'),
   );
}




?>