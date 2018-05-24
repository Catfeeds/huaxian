<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"E:\wamp\www\transport\public/../application/admin\view\goods\check1.html";i:1506418982;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
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
<link href="../../../../../static/admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>车找货货源审核</title>
</head>
<body>
<a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" 
    href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
<div class="pd-20">
	<form action="<?php echo url('Goods/checkcar'); ?>" method="post" class="form form-horizontal" id="form-admin-add">
	<input type="hidden" name="id" value="<?php echo $list['id']; ?>">
	    <div class="row cl">
			<label class="form-label col-3">始发地:</label>
			<div class="formControls col-7">
				<input name="starting_address" type="text" class="input-text" value="<?php echo $list['starting_address']; ?>" readonly="true" style="width: 45%" title="<?php echo $list['starting_address']; ?>">——
				<input name="startingaddress_detail" type="text" class="input-text" value="<?php echo $list['startingaddress_detail']; ?>" readonly="true" style="width: 45%" title="<?php echo $list['startingaddress_detail']; ?>">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">目的地:</label>
			<div class="formControls col-7">
				<input name="destination" type="text" class="input-text" value="<?php echo $list['destination']; ?>" readonly="true" style="width: 45%" title="<?php echo $list['destination']; ?>">——
				<input name="destination_detail" type="text" class="input-text" value="<?php echo $list['destination_detail']; ?>" readonly="true" style="width: 45%" title="<?php echo $list['destination_detail']; ?>">
			</div>
		</div>
        <div class="row cl">
			<label class="form-label col-3">货物品类：</label>
			<div class="formControls col-5">
			    <?php if(is_array($goods_sort2) || $goods_sort2 instanceof \think\Collection || $goods_sort2 instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_sort2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['id'] == $list['goods_sort']): ?>
				<input name="goods_sort" type="text" class="input-text" value="<?php echo $v['typename']; ?>" readonly="true" >
			    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		 <div class="row cl">
			<label class="form-label col-3">货物类型：</label>
			<div class="formControls col-5">
			    <?php if(is_array($goods_type2) || $goods_type2 instanceof \think\Collection || $goods_type2 instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_type2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['id'] == $list['goods_type']): ?>
				<input name="goods_type" type="text" class="input-text" value="<?php echo $v['typename']; ?>" readonly="true" >
			    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">货物名称：</label>
			<div class="formControls col-5">
				<input name="goods_name" type="text" class="input-text" value="<?php echo $list['goods_name']; ?>" readonly="true">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">温度要求:</label>
			<div class="formControls col-5">
				<input name="low_temperature" type="text" class="input-text" value="<?php echo $list['low_temperature']; ?>" readonly="true" style="width: 45%">——
				<input name="high_temperature" type="text" class="input-text" value="<?php echo $list['high_temperature']; ?>" readonly="true" style="width: 45%">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">货物规格:</label>
			<div class="formControls col-5">
				<input name="standard_ton" type="text" class="input-text" value="<?php echo $list['standard_ton']; ?>" readonly="true" style="width: 40%">(吨)——
				<input name="standard_square" type="text" class="input-text" value="<?php echo $list['standard_square']; ?>" readonly="true" style="width: 40%">(方)
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">装车时间:</label>
			<div class="formControls col-5">
				<input name="start_loadingtime" type="text" class="input-text" value="<?php echo $list['start_loadingtime']; ?>" readonly="true" style="width: 45%">——
				<input name="end_loadingtime" type="text" class="input-text" value="<?php echo $list['end_loadingtime']; ?>" readonly="true" style="width: 45%">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">到货时间:</label>
			<div class="formControls col-5">
				<input name="start_arrivetime" type="text" class="input-text" value="<?php echo $list['start_arrivetime']; ?>" readonly="true" style="width: 45%">——
				<input name="end_arrivetime" type="text" class="input-text" value="<?php echo $list['end_arrivetime']; ?>" readonly="true" style="width: 45%">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">需要车长：</label>
			<div class="formControls col-5">
			    <?php if(is_array($car_length2) || $car_length2 instanceof \think\Collection || $car_length2 instanceof \think\Paginator): $i = 0; $__LIST__ = $car_length2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['id'] == $list['car_length']): ?>
				<input name="car_length" type="text" class="input-text" value="<?php echo $v['typename']; ?>" readonly="true" >
			    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">需要车型：</label>
			<div class="formControls col-5">
			    <?php if(is_array($car_type2) || $car_type2 instanceof \think\Collection || $car_type2 instanceof \think\Paginator): $i = 0; $__LIST__ = $car_type2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['id'] == $list['car_type']): ?>
				<input name="car_type" type="text" class="input-text" value="<?php echo $v['typename']; ?>" readonly="true" >
			    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">运输费用：</label>
			<div class="formControls col-5">
				<input name="carriage" type="text" class="input-text" value="<?php echo $list['carriage']; ?>" readonly="true">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">支付方式：</label>
			<div class="formControls col-5">
			    <?php if(is_array($payment_mode2) || $payment_mode2 instanceof \think\Collection || $payment_mode2 instanceof \think\Paginator): $i = 0; $__LIST__ = $payment_mode2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['id'] == $list['payment_mode']): ?>
				<input name="payment_mode2" type="text" class="input-text" value="<?php echo $v['typename']; ?>" readonly="true" >
			    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">发票：</label>
			<div class="formControls col-5">
			    <?php if($list['invoice'] == '是'): ?>
				<input name="payment_mode2" type="text" class="input-text" value="是" readonly="true" >
				<?php else: ?>
				<input name="payment_mode2" type="text" class="input-text" value="否" readonly="true" >
			    <?php endif; ?>
			</div>
		</div>
		<!--<div class="row cl">
			<label class="form-label col-3">货物图片：</label>
			<div class="formControls col-5">
			<?php if($list['goods_photo'] != ''): ?>
				<div class="userimg"><img src="__IMG__<?php echo $list['goods_photo']; ?>" title="点击右键保存图片" /></div>
				<span class="btn-upload form-group">
                    <a href="__IMG__<?php echo $list['goods_photo']; ?>" class="btn btn-primary radius upload-btn" target="_blank" >
                    <i class="Hui-iconfont">&#xe642;</i> 点击查看原图</a>
                </span>
			<?php else: ?>
			    <div>暂无图片</div>
			<?php endif; ?>
			</div>
		</div>-->
		<div class="row cl">
			<label class="form-label col-3">联系人：</label>
			<div class="formControls col-5">
				<input name="contact" type="text" class="input-text" value="<?php echo $list['contact']; ?>" readonly="true">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">联系电话：</label>
			<div class="formControls col-5">
				<input name="phone" type="text" class="input-text" value="<?php echo $list['phone']; ?>" readonly="true">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">发布人账号：</label>
			<div class="formControls col-5">
				<input name="uid" type="text" class="input-text" value="<?php echo $list['uid']; ?>" readonly="true">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">备注：</label>
			<div class="formControls col-5">
				<textarea name="" class="textarea"  readonly="true"><?php echo $list['goods_remark']; ?></textarea>
			</div>
		</div>
        <div class="row cl">
			<label class="form-label col-3">发布时间：</label>
			<div class="formControls col-5">
				<input name="time" type="text" class="input-text" value="<?php echo $list['time']; ?>" readonly="true">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">是否自营：</label>
			<div class="formControls col-5">
			<?php if($list['is_company'] == 0): ?>
				<input name="is_company" type="text" class="input-text" value="非自营" readonly="true">
			<?php elseif($list['is_company'] == 1): ?>
			    <input name="is_company" type="text" class="input-text" value="自营" readonly="true">
			<?php endif; ?>
			</div>
		</div>
		<div class="row cl">
            <label class="form-label col-3">审核结果：</label>
            <div class="formControls col-5"> <span class="select-box">
                <select class="select" size="1" name="check_state" datatype="*" nullmsg="请选择审核结果！">
                    <option value="" selected>请选择审核结果</option>
                        <option value="2">审核通过</option>
                        <option value="3">审核不通过</option>
                </select>
            </span> </div>
            <div class="col-2"> </div>
        </div>
        <div class="row cl">
			<div class="col-9 col-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
				<a class="btn btn-primary radius" href="<?php echo url('Goods/checkcarlst'); ?>">&nbsp;&nbsp;返回&nbsp;&nbsp;</a>
			</div>
		</div>
	</form>
</div>
<script type="text/javascript" src="__PUBLIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/Validform/5.3.2/Validform.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/layer/1.9.3/layer.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.admin.js"></script> 
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	$.Huitab("#tab-system .tabBar span","#tab-system .tabCon","current","click","0");

	$('.userimg').hover(function(){
		$(this).next('.userimg1').show();
	},function(){
		$(this).next('.userimg1').hide();
	});

	$("#form-admin-add").Validform({
		tiptype:2,
		callback:function(form){
			form[0].submit();
			var index = parent.layer.getFrameIndex(window.name);
			parent.$('.btn-refresh').click();
			parent.layer.close(index);
		}
	});

});
</script>
</body>
</html>