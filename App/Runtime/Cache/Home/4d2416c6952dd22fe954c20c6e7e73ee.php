<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<base  href="/tp3.23/Public/static/" />


</head>

<body>

	<!--所有页面的头部-->
	<div class="header">
		<div class="headbox">
			<div class="logo">
				<a href="index.html"><img src="images/ducvy_logo.jpg" /></a>
			</div>
			<div class="headbox_right">
				<div class="headbox_right_link">
					<p class="link_left">
						欢迎来到本网站&nbsp;&nbsp;&nbsp;
                        <?php if($_SESSION['user_home']== ''): ?><a href="/tp3.23/index.php/Login/login"> 请登录</a> 
                        <a href="/tp3.23/index.php/Login/zhuce">免费注册</a>
                        <?php else: ?>
                        <span><strong>Welcome</strong></span>&nbsp;&nbsp;&nbsp;<span style="color:red; font-weight:600px;"><?php echo (session('user_home')); ?></span>
                        <a href="/tp3.23/index.php/Login/logout">注销登录</a><?php endif; ?>
					</p>
					<p class="link_right">
						<a href="/tp3.23/index.php/User/index" class="personcenter"> 个人中心</a> 
                        <a href="/tp3.23/index.php/User/buybus" class="mycookies"> 我的购物车（<span ><?php echo ($cart_arr["num"]); ?></span>）</a> 
                      
					</p>
					<p class="clear_float"></p>
				</div>
				<div class="headbox_right_form">
               
                
					<form method="post" action="/tp3.23/index.php/Index/search">
						<input type="text" id="keyword" name="keyword" class="text"  maxlength="15" required="required" placeholder="请输入关键字" onclick="this.value=&quot;&quot" /> 
                        <input type="submit" class="submit" name="Submit1" value="搜索" /> 
                        <span class="clear_float"></span>
					</form>
				</div>
				<div class="clear_float"></div>
			</div>
			<div class="clear_float"></div>

		</div>
	</div>



	<!--所有的顶导航  main_nav-->
	<div class="main_nav">
        <ul><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["rideo"] == 1): ?><a href="/tp3.23/index.php/<?php echo ($vo["url"]); ?>/index"<?php if(($vo["url"] == $cat) OR ($vo["url"] == center) ): ?>class="inthis"<?php endif; ?>
 ><li style="width:140px;" <?php if(($vo["url"] == $cat) OR ($vo["url"] == center)): ?>class="main_nav_inthis"<?php endif; ?>><?php echo ($vo["name"]); ?>
    
</li></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
			<!--<a href="/tp3.23/index.php/Index/index" class="inthis"><li class="main_nav_inthis">首&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;页</li></a>
			<a href="/tp3.23/index.php/Company/index"><li>品牌介绍</li></a>
			<a href="/tp3.23/index.php/News/index"><li>新闻中心</li></a>
			<em></em><a href="/tp3.23/index.php/Product/index"><li><em>产品中心</em></li>
			</a>
			<a href="/tp3.23/index.php/Contact/index"><li>联系我们</li></a>
			<a href="/tp3.23/index.php/User/index"><li class="lastchild">会员中心</li></-->
			
		</ul>
	</div>