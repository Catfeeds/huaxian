<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"E:\WWW\huaxian\public/../application/admin\view\file\lst_file.html";i:1527218517;}*/ ?>
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
<title>内部文件管理</title>
</head>
<body>

<nav class="breadcrumb"> 
     内部文件管理 <span class="c-gray en">&gt;</span> 
     内部文件列表 
     <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>

<div class="pd-20">
	<div class="text-c">
	<form action="<?php echo url('File/lst_file'); ?>" method="get">		
		<input type="text" class="input-text" style="width:250px" placeholder="请输入文件标题" id="" name="keywords" value="">
		<button type="submit" class="btn btn-success">
		<i class="Hui-iconfont">&#xe665;</i> 查询</button> 
	</div>
	</form>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> 
    <span class="l">
          <a href="<?php echo url('File/add_file'); ?>" class="btn btn-danger radius" >
          <i class="Hui-iconfont">&#xe600;</i> 上传文件</a>
    </span>
    <form action="<?php echo url('File/p_del'); ?>" method="post"> 
	    <?php if(in_array('258',$privilege1)){ ?>
        <span class="l" style="margin-left: 10px;">
            <button type="submit" class="btn btn-danger radius" onclick="return confirm('确定要删除吗？')" >
            <i class="Hui-iconfont">&#xe6e2;</i> 批量删除</button> 
            <!--<a class="btn btn-primary radius" onclick="picture_add('添加管理员','<?php echo url('Admin/add'); ?>')" href="javascript:;"  >
          <i class="Hui-iconfont">&#xe600;</i> 添加资讯</a>-->
        </span> 
        <?php } ?>
        <!-- <span class="r">共有数据：<strong><?php echo $counts; ?></strong> 条</span>   -->
    <span class="r">共有数据：<strong><?php echo $counts; ?></strong> 条</span> 
    </div>
    <div class="mt-20">
	    <table class="table table-border table-bordered table-hover table-bg table-sort">
		    <thead>
			    <tr class="text-c">
			    	<th width="10%"><input type="checkbox" name="" value=""></th>
				    <th width="10%">ID</th>
				    <th width="30%">文件名(点击文件名即可下载文件)</th>
				    <th width="10%">上传人</th>
				    <th width="20%">上传时间</th>
				    <th width="10%">操作</th>
			    </tr>
		    </thead>
		    <tbody>
		       <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "<p class='nulltext'>暂无相关信息</p>" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
			    <tr class="text-c">
			    	<td><input type="checkbox" value="<?php echo $v['id']; ?>" name="id[]"></td>
				    <td><?php echo $v['id']; ?></td>
				    <td><a href="<?php echo url('File/download',array('id'=>$v['id'])); ?>" style="text-decoration: none;" title="<?php echo $v['file']; ?>"><?php echo $v['file']; ?></a></td>
				    <td><?php echo $v['user']; ?></td>
				    <td><?php echo $v['time']; ?></td>
				    <td class="td-manage">
				    	<!-- <a title="预览"  href="<?php echo url('File/preview',array('id'=>$v['id'])); ?>" class="ml-5" style="text-decoration:none">
                    	<i class="Hui-iconfont">&#xe6df;</i></a> -->
                        <?php if(in_array('257',$privilege1)){ ?>
                        	<a title="删除" href="<?php echo url('File/del',array('id'=>$v['id'])); ?>"  onclick="return confirm('确定要删除吗？')" class="ml-5" style="text-decoration:none">
                        <i class="Hui-iconfont">&#xe6e2;</i></a><?php } ?>
				    </td>
			    </tr>
			  <?php endforeach; endif; else: echo "<p class='nulltext'>暂无相关信息</p>" ;endif; ?>
		    </tbody>
	    </table>
	    <div id="paging1" class="page light-theme simple-pagination"><?php echo $page; ?></div>
    </div>
    </form>
</div>
</body>
</html>