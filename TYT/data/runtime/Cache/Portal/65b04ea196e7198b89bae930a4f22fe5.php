<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Set render engine for 360 browser -->
	<meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->

	<link href="/tyt/statics/simpleboot/themes/<?php echo C('SP_ADMIN_STYLE');?>/theme.min.css" rel="stylesheet">
    <link href="/tyt/statics/simpleboot/css/simplebootadmin.css" rel="stylesheet">
    <link href="/tyt/statics/js/artDialog/skins/default.css" rel="stylesheet" />
    <link href="/tyt/statics/simpleboot/font-awesome/4.2.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
    <style>
		.length_3{width: 180px;}
		form .input-order{margin-bottom: 0px;padding:3px;width:40px;}
	</style>
	<!--[if IE 7]>
	<link rel="stylesheet" href="/tyt/statics/simpleboot/font-awesome/4.2.0/css/font-awesome-ie7.min.css">
	<![endif]-->
<script type="text/javascript">
//全局变量
var GV = {
    DIMAUB: "/tyt/",
    JS_ROOT: "statics/js/",
    TOKEN: ""
};
</script>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/tyt/statics/js/jquery.js"></script>
    <script src="/tyt/statics/js/wind.js"></script>
    <script src="/tyt/statics/simpleboot/bootstrap/js/bootstrap.min.js"></script>
<?php if(APP_DEBUG): ?><style>
		#think_page_trace_open{
			z-index:9999;
		}
	</style><?php endif; ?>
<body class="J_scroll_fixed">
<div class="wrap J_check_wrap">
  <ul class="nav nav-tabs">
     <li class="active"><a href="javascript:;">所有文章</a></li>
     <li><a href="<?php echo U('AdminPost/add',array('term'=>empty($term['term_id'])?'':$term['term_id']));?>"  target="_self">添加文章</a></li>
  </ul>
  <form class="well form-search" method="post" action="<?php echo u('AdminPost/index');?>">
    <div class="search_type cc mb10">
      <div class="mb10"> 
        <span class="mr20">分类：
        <select class="select_2" name="term">
          	<option value='0' >全部</option>
          	<?php echo ($taxonomys); ?>
        </select>
        &nbsp;&nbsp;时间：
        <input type="text" name="start_time" class="input length_2 J_date" value="<?php echo ((isset($formget["start_time"]) && ($formget["start_time"] !== ""))?($formget["start_time"]):''); ?>" style="width:80px;" autocomplete="off">-<input type="text" class="input length_2 J_date" name="end_time" value="<?php echo ($formget["end_time"]); ?>" style="width:80px;" autocomplete="off">
        
               &nbsp; &nbsp;关键字：
        <input type="text" class="input length_2" name="keyword" style="width:200px;" value="<?php echo ($formget["keyword"]); ?>" placeholder="请输入关键字...">
        <input type="submit" class="btn btn-primary" value="搜索"/>
        </span>
      </div>
    </div>
  </form>
  <form class="J_ajaxForm" action="" method="post">
    <div class="table_list">
      <table width="100%" class="table table-hover table-bordered">
        <thead>
        	<tr>
          		<td colspan="14">
          			<label class="checkbox inline" for="check_all"><input type="checkbox" class="J_check_all" data-direction="y" data-checklist="J_check_y" id="check_all">全选</label>                
			        <button class="btn btn-primary btn-small J_ajax_submit_btn" type="submit" data-action="<?php echo u('AdminPost/listorders');?>">排序</button>
			        <button class="btn btn-primary btn-small J_ajax_submit_btn" type="submit" data-action="<?php echo u('AdminPost/check',array('check'=>1));?>" data-subcheck="true" >审核</button>
			        <button class="btn btn-primary btn-small J_ajax_submit_btn" type="submit" data-action="<?php echo u('AdminPost/check',array('uncheck'=>1));?>" data-subcheck="true" >取消审核</button>
			        <button class="btn btn-primary btn-small J_ajax_submit_btn" type="submit" data-action="<?php echo u('AdminPost/top',array('top'=>1));?>" data-subcheck="true" >置顶</button>
			        <button class="btn btn-primary btn-small J_ajax_submit_btn" type="submit" data-action="<?php echo u('AdminPost/top',array('untop'=>1));?>" data-subcheck="true" >取消置顶</button>
			        <button class="btn btn-primary btn-small J_ajax_submit_btn" type="submit" data-action="<?php echo u('AdminPost/recommend',array('recommend'=>1));?>" data-subcheck="true" >推荐</button>
			        <button class="btn btn-primary btn-small J_ajax_submit_btn" type="submit" data-action="<?php echo u('AdminPost/recommend',array('unrecommend'=>1));?>" data-subcheck="true" >取消推荐</button>
			        <button class="btn btn-primary btn-small J_ajax_submit_btn" type="submit" data-action="<?php echo u('AdminPost/delete');?>" data-subcheck="true" data-msg="你确定删除吗？">删除</button>
			        <button class="btn btn-primary btn-small" type="button" id="J_Content_remove">批量移动</button>
          		</td>
          	</tr>
	          <tr>
	            <th width="15"><label><input type="checkbox" class="J_check_all" data-direction="x" data-checklist="J_check_x"></label></th>
                <th width="50">排序</th>
	            <th width="50">ID</th>
	            <th>标题</th>
	            <th width="50">点击量</th>
                <th width="50">评论量</th>
                <th width="50">关键字</th>
                <th width="50">来源</th>
                <th width="50">摘要</th>
                <th width="50">缩略图</th>
	            <th width="80">发布人</th>
	            <th width="70">发布时间</th>
	            <th width="50">状态</th>
	            <th width="60">操作</th>
	          </tr>
        </thead>
        	<?php $status=array("1"=>"已审核","0"=>"未审核"); $top_status=array("1"=>"已置顶","0"=>"未置顶"); $recommend_status=array("1"=>"已推荐","0"=>"未推荐"); ?>
        	<?php if(is_array($posts)): foreach($posts as $key=>$vo): ?><tr>
		            <td><input type="checkbox" class="J_check" data-yid="J_check_y" data-xid="J_check_x" name="ids[]" value="<?php echo ($vo["tid"]); ?>" ></td>
		            <td><input name='listorders[<?php echo ($vo["tid"]); ?>]' class="input input-order"  type='text' size='3' value='<?php echo ($vo["listorder"]); ?>'></td>
		            <td><a><?php echo ($vo["tid"]); ?></a></td>
		            <td>
		            	<a href="<?php echo U('portal/article/index',array('id'=>$vo['tid']));?>" target="_blank">
		            		<span><?php echo ($vo["post_title"]); ?></span>
		            	</a>
		            </td>
		            <td><?php echo ($vo["post_hits"]); ?></td>
		            <td><?php echo ($vo["comment_count"]); ?></td>
                    <td><?php echo ($excerpt_keywords = empty($vo['post_keywords'])?" ":'已填写'); ?></td>
                    <td><?php echo ($excerpt_source = empty($vo['post_source'])?" ":'已填写'); ?></td>
                    <td><?php echo ($excerpt_excerpt = empty($vo['post_excerpt'])?" ":'已填写'); ?></td>
    	            <td>
    	            <?php $smeta=json_decode($vo['smeta'],true); ?>
    	            	<?php if(!empty($smeta['thumb'])): ?><a href="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>" target='_blank'>查看</a><?php endif; ?>
    	            </td>
		            <td><?php echo ($users[$vo['post_author']]['user_login']); ?></td>
		            <td><?php echo ($vo["post_date"]); ?></td>
		            <td><?php echo ($status[$vo['post_status']]); ?><br><?php echo ($top_status[$vo['istop']]); ?><br><?php echo ($recommend_status[$vo['recommended']]); ?></td>
		            <td>
		            	<a href="javascript:open_iframe_dialog('<?php echo u('comment/commentadmin/index',array('post_id'=>$vo['id']));?>','评论列表')">查看评论</a> |
		            	<a href="<?php echo U('AdminPost/edit',array('term'=>empty($term['term_id'])?'':$term['term_id'],'id'=>$vo['id']));?>">修改</a>|
		            	<a href="<?php echo U('AdminPost/delete',array('term'=>empty($term['term_id'])?'':$term['term_id'],'tid'=>$vo['tid']));?>" class="J_ajax_del" >删除</a>
					</td>
	          	</tr><?php endforeach; endif; ?>
          	<tr>
          		<td colspan="14">
          			<label class="checkbox inline"><input type="checkbox" class="J_check_all" data-direction="y" data-checklist="J_check_y">全选</label>                
			        <button class="btn btn-primary btn-small J_ajax_submit_btn" type="submit" data-action="<?php echo u('AdminPost/listorders');?>">排序</button>
			        <button class="btn btn-primary btn-small J_ajax_submit_btn" type="submit" data-action="<?php echo u('AdminPost/check',array('check'=>1));?>" data-subcheck="true" >审核</button>
			        <button class="btn btn-primary btn-small J_ajax_submit_btn" type="submit" data-action="<?php echo u('AdminPost/check',array('uncheck'=>1));?>" data-subcheck="true" >取消审核</button>
			        <button class="btn btn-primary btn-small J_ajax_submit_btn" type="submit" data-action="<?php echo u('AdminPost/top',array('top'=>1));?>" data-subcheck="true" >置顶</button>
			        <button class="btn btn-primary btn-small J_ajax_submit_btn" type="submit" data-action="<?php echo u('AdminPost/top',array('untop'=>1));?>" data-subcheck="true" >取消置顶</button>
			        <button class="btn btn-primary btn-small J_ajax_submit_btn" type="submit" data-action="<?php echo u('AdminPost/recommend',array('recommend'=>1));?>" data-subcheck="true" >推荐</button>
			        <button class="btn btn-primary btn-small J_ajax_submit_btn" type="submit" data-action="<?php echo u('AdminPost/recommend',array('unrecommend'=>1));?>" data-subcheck="true" >取消推荐</button>
			        <button class="btn btn-primary btn-small J_ajax_submit_btn" type="submit" data-action="<?php echo u('AdminPost/delete');?>" data-subcheck="true" data-msg="你确定删除吗？">删除</button>
			        <button class="btn btn-primary btn-small" type="button" id="J_Content_remove">批量移动</button>
          		</td>
          	</tr>
          </table>
          <div class="pagination"><?php echo ($Page); ?></div>
     
    </div>
  </form>
</div>
<script src="/tyt/statics/js/common.js"></script>
<script>

function refersh_window() {
    var refersh_time = getCookie('refersh_time');
    if (refersh_time == 1) {
        window.location="<?php echo u('AdminPost/index',$formget);?>";
    }
}
setInterval(function(){
	refersh_window();
}, 2000);
$(function () {
	setCookie("refersh_time",0);
    Wind.use('ajaxForm','artDialog','iframeTools', function () {
        //批量移动
        $('#J_Content_remove').click(function (e) {
            var str = 0;
            var id = tag = '';
            $("input[name='ids[]']").each(function () {
                if ($(this).attr('checked')) {
                    str = 1;
                    id += tag + $(this).val();
                    tag = ',';
                }
            });
            if (str == 0) {
				art.dialog.through({
					id:'error',
					icon: 'error',
					content: '您没有勾选信息，无法进行操作！',
					cancelVal: '关闭',
					cancel: true
				});
                return false;
            }
            var $this = $(this);
            art.dialog.open("/tyt/index.php?g=portal&m=AdminPost&a=move&ids=" + id, {
                title: "批量移动",
                width:"80%"
            });
        });
    });
});


</script>
</body>
</html>