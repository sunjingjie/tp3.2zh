<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Visual Admin Dashboard - Home</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    
    <base  href="/tp3.23/Public/adminstatic/" />
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body> 
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1>Visual Admin</h1>
        </header>
        <div class="profile-photo-container">
          <img src="images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
        </div>      
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">           
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">          
          <ul><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(in_array(($vo["id"]), is_array($_SESSION['level'])?$_SESSION['level']:explode(',',$_SESSION['level']))): if($vo["rideo"] == 0): ?><li><a href="/tp3.23/admin.php/<?php echo ($vo["url"]); ?>/index"<?php if($vo["url"] == $cat): ?>class="active"<?php endif; ?>
 ><i class="fa fa-home fa-fw"></i> <?php echo ($vo["name"]); ?>
 
    
</a></li><?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>


            <!--<li><a href="/tp3.23/admin.php/news/index"><i class="fa fa-bar-chart fa-fw"></i>新闻管理</a></li>
            <li><a href="/tp3.23/admin.php/product/index"><i class="fa fa-database fa-fw"></i>产品管理</a></li>
            <li><a href="/tp3.23/admin.php/category/index"><i class="fa fa-map-marker fa-fw"></i>分类管理</a></li>
            <li><a href="manage-users.html"><i class="fa fa-users fa-fw"></i>Manage Users</a></li>
            <li><a href="preferences.html"><i class="fa fa-sliders fa-fw"></i>Preferences</a></li>
            <li><a href="login.html"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>-->
            
          </ul>  
          
        </nav>
      </div> 
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row"> <div style=" margin-top:px;background:#FFF;float:right;font-weight:800">欢迎您！<span style=" float:right;color:#F00; font-weight:800"><?php echo (session('user')); ?>，<a style=" display:inline; float:right;background:#FFF;" href="/tp3.23/admin.php/User/logout">退出</a></span></div> 
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              
            </nav>
          </div>
        </div>