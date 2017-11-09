<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">  
	    <title>Visual Admin - Login</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">
        <base  href="/tp3.23/Public/adminstatic/" />
   	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/templatemo-style.css" rel="stylesheet">
	    <script type="text/javascript" src="js/jQuery.1.8.2.min.js"></script>

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body class="light-gray-bg">
		<div class="templatemo-content-widget templatemo-login-widget white-bg">
			<header class="text-center">
	          <div class="square"></div>
	          <h1>Visual Admin</h1>
	        </header>
	        <form action="" class="templatemo-login-form" method="post">
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" class="form-control" required placeholder="js@dashboard.com" name="username"
						<?php if(($_COOKIE['username']!= '')): ?>value="<?php echo (cookie('username')); ?>"<?php endif; ?>
						>           
		          	</div>	
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		
		              	<input type="password" class="form-control" required placeholder="******" name="password"
						<?php if(($_COOKIE['password']!= '')): ?>value="<?php echo (cookie('password')); ?>"<?php endif; ?>>           
		          	</div>	
	        	</div>	
               <div class="form-group" id="captcha-container" style="float:left; font-size:20px"> 验证码：<div style="float:right" class="input-group" ><input class="form-control" placeholder="验证码" style="width:100px;" type="text" name="verify" required /> 
               
               
<!--              <img src="<?php echo U('Admin/User/verify','','');?>" id="code"/>
-->             &nbsp;&nbsp;<img src="/tp3.23/admin.php/User/verify/" id="code" height="30"  alt="验证码" src="<?php echo U('Admin/User/verify',array());?>" title="点击刷新" />

 
  
  
  	</div>	
	        	</div>	
                
          	
	          	<div class="form-group">
				        <input type="checkbox" id="c1" name="cookie" value="1" 
				<?php if(($_COOKIE['coo']== 1)): ?>checked="checked"<?php endif; ?>
/>
						<label for="c1"><span></span>Remember me</label>
				    </div>				    
			
				<div class="form-group">
					<button type="submit" class="templatemo-blue-button width-100">Login</button>
				</div>
	        </form>

		</div>
		<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
			<p>Not a registered user yet? <strong><a href="#" class="blue-text">Sign up now!</a></strong></p>
		</div>
	</body>
</html>
<script type="application/javascript">
var captcha_img = $('#captcha-container').find('img')  
var verifyimg = captcha_img.attr("src");  
captcha_img.attr('title', '点击刷新');  
captcha_img.click(function(){  
    if( verifyimg.indexOf('?')>0){  
        $(this).attr("src", verifyimg+'&random='+Math.random());  
    }else{  
        $(this).attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());  
    }  
});  
</script>