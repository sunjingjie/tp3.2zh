<?php if (!defined('THINK_PATH')) exit();?> <div class="templatemo-content-container"><h3><a href="/tp3.23/admin.php/News/add">新闻添加</a></h3>
          <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
                    <td><a href="" class="white-text templatemo-sort-by">新闻ID <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">新闻标题 <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">新闻分类 <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">新闻图片 <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">发布时间  <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">发布人 <span class="caret"></span></a></td>
                    <td>Edit</td>
                    <td>Delete</td>
                  </tr>
                </thead>
                <tbody><?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
                    <td><?php echo ($v["id"]); ?></td>
                    <td><?php echo ($v["title"]); ?></td>
                    <td><?php echo ($v["category_name"]); ?></td>              
					<td><img src="<?php if(($v["thumb_path"] == '')): ?>/tp3.23/public/uploads/timg.jpg
									<?php else: ?>/tp3.23/<?php echo ($v["thumb_path"]); endif; ?>" width="30" height="30"/></td>
                    <td><?php echo date('Y-m-d',$v['time']);?></td>
                    <td><?php echo ($v["author"]); ?></td>
                    <td><a href="/tp3.23/admin.php/News/update/id/<?php echo ($v["id"]); ?>" class="templatemo-edit-btn">Edit</a></td>
                    <td><a href="/tp3.23/admin.php/News/delete/id/<?php echo ($v["id"]); ?>" class="templatemo-edit-btn">Delete</a></td>
                  </tr><?php endforeach; endif; ?>
                 
                </tbody>
              </table>    
            </div>                          
          </div>  
          <div class="pagination-wrap">
            <ul class="pagination">
              <?php echo ($page); ?>
              
            </ul>
          </div>