<?php if (!defined('THINK_PATH')) exit();?>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">新闻修改</h2>
            <p>Here goes another form and form controls.</p>
            <form action="" class="templatemo-login-form" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo ($res["id"]); ?>"/>
              <div class="row form-group">
                         
              </div>
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">新闻标题</label>
                    <input type="text" placeholder="New Title" value="<?php echo ($res["title"]); ?>" name="title" required="required" class="form-control" id="inputNewPassword">                   
                </div>
               
              </div>
			    <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group"> 
                  <label class="control-label templatemo-block">新闻分类</label>                 
                  <select class="form-control"  name="category">
                  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option <?php if(($vo["id"]) == $res["category"]): ?>selected="selected"<?php endif; ?>  value ="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>                 
                  </select>
                </div>
               
              </div>
              <div class="row form-group">
           <div class="col-lg-12">
                  <label class="control-label templatemo-block">修改图片</label> 
				  <img src="<?php if(($res["thumb_path"] == '')): ?>/tp3.23/public/uploads/timg.jpg
									<?php else: ?>/tp3.23/<?php echo ($res["thumb_path"]); endif; ?>" id="img0" width="200" height="150" />
                  <!-- <input type="file" name="fileToUpload" id="fileToUpload" class="margin-bottom-10"> -->
                  <input type="file" name="image_path" id="fileToUpload" class="filestyle" data-buttonName="btn-primary" data-buttonBefore="true" data-icon="false">
				  
                  <p>Maximum upload size is 2 MB.</p>                  
                </div>
				                </div>
								<div class="row form-group">
                <div class="col-lg-12 form-group">                   
                    <div class="margin-right-15 templatemo-inline-block">
                      <input type="checkbox" name="server" id="c3" value="1" >
                      <label for="c3" class="font-weight-400"><span></span>加水印</label>
                    </div>
                   
                </div>
              </div>
              <div class="row form-group">
                <div class="col-lg-12 form-group">                   
                    <label class="control-label" for="inputNote">新闻简介</label>
                    <textarea class="form-control" name="tedian"  required="required"   placeholder="News Content" id="inputNote" rows="3"><?php echo ($res["tedian"]); ?></textarea>
                </div>
              </div>
           
           
              <div class="row form-group">
                <div class="col-lg-12 form-group">                   
                    <label class="control-label" for="inputNote">新闻内容</label>
                    <textarea class="form-control" name="content"  required="required"   placeholder="News Content" id="inputNote" rows="3"><?php echo ($res["content"]); ?></textarea>
                </div>
              </div>
             
              
     
              <div class="form-group text-right">
                
                <input  type="submit" style="width:105px;" value="Submit"class="templatemo-white-button"/>
                <input  type="reset" style="width:105px;" value="Reset"class="templatemo-white-button"/>
              </div>                           
            </form>
          </div>
		     <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>        <!-- jQuery -->
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>  <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>  
      <script>	
$("#fileToUpload").change(function(){
	var objUrl = getObjectURL(this.files[0]) ;
	console.log("objUrl = "+objUrl) ;
	if (objUrl) {
		$("#img0").attr("src", objUrl) ;
	}
}) ;
//建立一個可存取到該file的url
function getObjectURL(file) {
	var url = null ; 
	if (window.createObjectURL!=undefined) { // basic
		url = window.createObjectURL(file) ;
	} else if (window.URL!=undefined) { // mozilla(firefox)
		url = window.URL.createObjectURL(file) ;
	} else if (window.webkitURL!=undefined) { // webkit or chrome
		url = window.webkitURL.createObjectURL(file) ;
	}
	return url ;
}
</script>       <!-- Templatemo Script -->