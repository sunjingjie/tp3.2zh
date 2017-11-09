<?php 
namespace Admin\Model;
use Think\Model\ViewModel;
class AboutViewModel extends ViewModel {
   public $viewFields = array(
     'About'=>array('id','q','qq','tel','email'),
     
   );
}




?>