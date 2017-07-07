<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:92:"D:\wamp\www\thinkphp_5.0.9\thinkphp_5.0.9\public/../application/admin\view\hangye\index.html";i:1498798563;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />
	<!--[if lt IE 9]>
	<script type="text/javascript" src="__STATIC__/admin/lib/html5shiv.js"></script>
	<script type="text/javascript" src="__STATIC__/admin/lib/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="__STATIC__/admin/static/h-ui/css/H-ui.min.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/admin/static/h-ui.admin/css/H-ui.admin.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/admin/static/h-ui.admin/css/style.css" />
	<!--[if IE 6]>
	<script type="text/javascript" src="__STATIC__/admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
	<script>DD_belatedPNG.fix('*');</script>
	<![endif]-->
	<title>图片列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 图片管理 <span class="c-gray en">&gt;</span> 图片列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c"> 日期范围：
		<input type="text" onfocus="" id="logmin" class="input-text Wdate" style="width:120px;">
		-
		<input type="text" onfocus="" id="logmax" class="input-text Wdate" style="width:120px;">
		<input type="text" name="" id="" placeholder=" 图片名称" style="width:250px" class="input-text">
		<button name="inp" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜图片</button>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> 
		<a class="btn btn-primary radius"  href="<?php echo url('hangye/add'); ?>"><i class="Hui-iconfont">&#xe600;</i> 添加图片</a></span> <span class="r">共有数据：<strong>54</strong> 条</span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
			<tr class="text-c">
				<th width="40"><input name="" type="checkbox" value=""></th>
				<th width="80">ID</th>
				<th width="100">标题</th>

				<th width="100">内容</th>
				<th>图片</th>
				<th width="150">更新时间</th>
				<th width="60">发布状态</th>
				<th width="100">操作</th>
			</tr>
			</thead>
			<tbody>
		<?php if(is_array($index) || $index instanceof \think\Collection || $index instanceof \think\Paginator): $i = 0; $__LIST__ = $index;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<tr class="text-c">
				<td><input name="" type="checkbox" value=""></td>
				<td><?php echo $key+1; ?></td>
				<td class="text-l"><?php echo $vo['title']; ?></td>
				<td ><a class="picture-thumb " href="javascript:;"><?php echo $vo['content']; ?></a></td>
				<td  style="width: 60px;height: 60px;"><img style="width: 60px;height: 60px;"  src="<?php echo $vo['logo']; ?>"></td>
				<td><?php echo $vo['create_time']; ?></td>
				<td class="td-status"><span class="label label-success radius">已发布</span></td>
				<td class="td-manage"><a style="text-decoration:none" onClick="product_stop(this,'10001')" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a> <a style="text-decoration:none" class="ml-5" onClick="product_edit('产品编辑','<?php echo url('hangye/edit',['id'=>$vo['id']]); ?>','10001')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
					<a style="text-decoration:none" class="ml-5" onClick="product_del(<?php echo $vo['id']; ?>)" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
	</div>
</div>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="__STATIC__/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__STATIC__/lib/admin/zTree/v3/js/jquery.ztree.all-3.5.min.js"></script>
<script type="text/javascript" src="__STATIC__/lib/admin/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="__STATIC__/lib/admin/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="__STATIC__/lib/admin/laypage/1.2/laypage.js"></script>
<script type="text/javascript">

	var setting = {
		view: {
			dblClickExpand: false,
			showLine: false,
			selectedMulti: false
		},
		data: {
			simpleData: {
				enable:true,
				idKey: "id",
				pIdKey: "pId",
				rootPId: ""
			}
		},
		callback: {
			beforeClick: function(treeId, treeNode) {
				var zTree = $.fn.zTree.getZTreeObj("tree");
				if (treeNode.isParent) {
					zTree.expandNode(treeNode);
					return false;
				} else {
					//demoIframe.attr("src",treeNode.file + ".html");
					return true;
				}
			}
		}
	};

	var zNodes =[
		{ id:1, pId:0, name:"一级分类", open:true},
		{ id:11, pId:1, name:"二级分类"},
		{ id:111, pId:11, name:"三级分类"},
		{ id:112, pId:11, name:"三级分类"},
		{ id:113, pId:11, name:"三级分类"},
		{ id:114, pId:11, name:"三级分类"},
		{ id:115, pId:11, name:"三级分类"},
		{ id:12, pId:1, name:"二级分类 1-2"},
		{ id:121, pId:12, name:"三级分类 1-2-1"},
		{ id:122, pId:12, name:"三级分类 1-2-2"},
	];



	$(document).ready(function(){
		var t = $("#treeDemo");
		t = $.fn.zTree.init(t, setting, zNodes);
		//demoIframe = $("#testIframe");
		//demoIframe.on("load", loadReady);
		var zTree = $.fn.zTree.getZTreeObj("tree");
		//zTree.selectNode(zTree.getNodeByParam("id",'11'));
	});

	$('.table-sort').dataTable({
		"aaSorting": [[ 1, "desc" ]],//默认第几个排序
		"bStateSave": true,//状态保存
		"aoColumnDefs": [
			{"orderable":false,"aTargets":[0,7]}// 制定列不参与排序
		]
	});
	/*产品-添加*/
	function product_add(title,url){
		var index = layer.open({
			type: 2,
			title: title,
			content: url
		});
		layer.full(index);
	}
	/*产品-查看*/
	function product_show(title,url,id){
		var index = layer.open({
			type: 2,
			title: title,
			content: url
		});
		layer.full(index);
	}
	/*产品-审核*/
	function product_shenhe(obj,id){
		layer.confirm('审核文章？', {
					btn: ['通过','不通过'],
					shade: false
				},
				function(){
					$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="product_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
					$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
					$(obj).remove();
					layer.msg('已发布', {icon:6,time:1000});
				},
				function(){
					$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="product_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
					$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
					$(obj).remove();
					layer.msg('未通过', {icon:5,time:1000});
				});
	}
	/*产品-下架*/
	function product_stop(obj,id){
		layer.confirm('确认要下架吗？',function(index){
			$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="product_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
			$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下架</span>');
			$(obj).remove();
			layer.msg('已下架!',{icon: 5,time:1000});
		});
	}

	/*产品-发布*/
	function product_start(obj,id){
		layer.confirm('确认要发布吗？',function(index){
			$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="product_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
			$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
			$(obj).remove();
			layer.msg('已发布!',{icon: 6,time:1000});
		});
	}

	/*产品-申请上线*/
	function product_shenqing(obj,id){
		$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
		$(obj).parents("tr").find(".td-manage").html("");
		layer.msg('已提交申请，耐心等待审核!', {icon: 1,time:2000});
	}

	/*产品-编辑*/
	function product_edit(title,url,id){
		var index = layer.open({
			type: 2,
			title: title,
			content: url
		});
		layer.full(index);
	}

	/*产品-删除*/
	function product_del(obj,id){
		layer.confirm('确认要删除吗？',function(index){
			$.ajax({
				type: 'POST',
				url: '',
				dataType: 'json',
				success: function(data){
					$(obj).parents("tr").remove();
					layer.msg('已删除!',{icon:1,time:1000});
				},
				error:function(data) {
					console.log(data.msg);
				},
			});
		});
	}
</script>
</body>
</html>