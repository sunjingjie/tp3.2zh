<?php 
namespace Home\Model;
use Think\Model\ViewModel;
class ProductViewModel extends ViewModel {
 
 public $viewFields = array(
     'Product'=>array('id','name','image_path','price','price_c','thumb_path','count','time','pj','xsl','hd','cm','color','cz','hh','pp','xc','yms','lx','nl','xsqd','bx','zhxs','lz','ta','year','fg','yc','xx'),
     'Category'=>array('name'=>'Category_name', '_on'=>'Product.Category=Category.id'),
   );
 
 }

?>