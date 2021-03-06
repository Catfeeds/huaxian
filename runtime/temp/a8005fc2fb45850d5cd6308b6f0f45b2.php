<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"E:\WWW\huaxian\public/../application/admin\view\company\lst_project.html";i:1526438275;}*/ ?>
﻿   <!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,member-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="icon" href="" type="image/x-icon"/>
<link href="__PUBLIC__/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/lib/icheck/icheck.css" rel="stylesheet" type="text/css" />
<link href="../../../static/admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/js/jquery.simplePagination.js"></script> 
<link type="text/css" rel="stylesheet" href="__PUBLIC__/css/page.css"/>
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>重点项目管理</title>
</head>
<body>

<nav class="breadcrumb"> 
     重点项目管理 <span class="c-gray en">&gt;</span> 
     重点项目列表 
     <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>

<div class="pd-20">
	<div class="text-c"> 
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> 
    <span class="l">
          <a href="<?php echo url('Company/projectadd'); ?>" class="btn btn-danger radius" >
          <i class="Hui-iconfont">&#xe600;</i> 添加重点项目</a>
    </span> 
    <span class="r">共有数据：<strong><?php echo $counts; ?></strong> 条</span> 
    </div>
    <div class="mt-20">
	    <table class="table table-border table-bordered table-hover table-bg table-sort">
		    <thead>
			    <tr class="text-c">
				    <th width="5%">ID</th>
				    <th width="20%">标题</th>
				    <th width="20%">图片</th>
				    <th width="10%">上传人</th>
				    <th width="15%">上传时间</th>
				    <th width="5%">操作</th>
			    </tr>
		    </thead>
		    <tbody>
		       <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
			    <tr class="text-c">
				    <td><?php echo $v['id']; ?></td>
				    <td><?php echo $v['title']; ?></td>
				    <td><div class="pptimg"><img src="__IMG__<?php echo $v['image']; ?>" /></div></td>
				    <td><?php echo $v['user']; ?></td>
				    <td><?php echo $v['time']; ?></td>
				    <td class="td-manage">
				        <a title="编辑"  href="<?php echo url('Company/projectedit',array('id'=>$v['id'])); ?>" class="ml-5" style="text-decoration:none">
                        <i class="Hui-iconfont">&#xe6df;</i></a>
                        <a title="删除" href="<?php echo url('Company/projectdel',array('id'=>$v['id'])); ?>"  onclick="return confirm('确定要删除吗？')" class="ml-5" style="text-decoration:none">
                        <i class="Hui-iconfont">&#xe6e2;</i></a>
				    </td>
			    </tr>
			  <?php endforeach; endif; else: echo "" ;endif; ?>
		    </tbody>
	    </table>
	    <div id="paging1" class="page light-theme simple-pagination"><?php echo $page; ?></div>
    </div>
</div>
</body>
</html>