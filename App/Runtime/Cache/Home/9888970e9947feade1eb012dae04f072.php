<?php if (!defined('THINK_PATH')) exit();?>	<!--首页面-->
    <link rel="stylesheet" type="text/css" href="css/base_ducvy.css" />
<script type="text/javascript" src="js/jQuery.1.8.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<title>首页</title>
	<div class="indexcontent">
		
			<div class="link_cloth"><?php if(is_array($data)): foreach($data as $key=>$v): ?><div class="link_one link_one_margin">
                	<p></p>
                    <div class="link">
                    	<a  href="/tp3.23/index.php/Product/center/id/<?php echo ($v["id"]); ?>/cate/<?php echo ($cate_id); ?>">
                            <div><img src="/tp3.23/<?php echo ($v["image_path"]); ?>" width="112" height="146" /></div>
                            <div class="text">
                                <span><?php echo ($v["name"]); ?></span>
                                <span>品牌：<?php echo ($v["pp"]); ?></span>
                                <span>风格：<?php echo ($v["fg"]); ?></span>
                                <span>版型：<?php echo ($v["bx"]); ?></span>
                            </div>
                         </a> 
                    </div>
                </div><?php endforeach; endif; ?>
                
               
                
                <div class="clear_float"></div>
            
            </div>


	</div>