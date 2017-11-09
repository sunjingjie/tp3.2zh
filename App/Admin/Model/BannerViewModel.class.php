<?php 
namespace Admin\Model;
use Think\Model\ViewModel;
class BannerViewModel extends ViewModel {
   public $viewFields = array(
     'Banner'=>array('id','image_path','thumb_path','url'),
   );
}




?>