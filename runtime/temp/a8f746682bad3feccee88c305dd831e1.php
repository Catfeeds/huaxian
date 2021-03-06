<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:86:"E:\WWW\transport\public/../application/index\view\personalcenter\warehouse_revise.html";i:1508755072;s:68:"E:\WWW\transport\public/../application/index\view\common\header.html";i:1508989788;s:66:"E:\WWW\transport\public/../application/index\view\common\left.html";i:1509590134;s:68:"E:\WWW\transport\public/../application/index\view\common\footer.html";i:1509431569;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>修改库源</title>
    <link rel="icon" href="" type="image/x-icon"/>
    <link rel="stylesheet" href="../../../../static/index/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../static/index/css/font-awesome.min.css">
    <link rel="stylesheet" href="__PUBLIC__/css/style.css">
    <link rel="stylesheet" href="__PUBLIC__/css/auth.css">
    <link rel="stylesheet" href="__PUBLIC__/css/city-picker.css">
    <link rel="stylesheet"  href="__PUBLIC__/css/higo.css">
</head>
<body>
<!-- 头部开始 -->
<div class="top">
    <div class="clearfix wrap-1200">
        <p class="fl"><!-- <span>易冷链，专注冷鲜，用心服务。&nbsp;&nbsp;</span> --><span><a class="glyphicon glyphicon-earphone" style="color: white;"></a>&nbsp;&nbsp;服务热线：0371—55172118</span></p>
        <?php if(session('username') == ''): ?>
            <p class="fr reg">
                <a href="<?php echo url('Login/login'); ?>" onClick="return confirm('请登录！')">
                    <span><i class="glyphicon glyphicon-user"></i>&nbsp;个人中心</span>
                </a>    
                <a href="<?php echo url('Login/login'); ?>"><span>登录</span></a>
                <a href="<?php echo url('Login/register'); ?>"><span>注册</span></a>
            </p>
            <?php else: ?>
            <p class="fr reg">
                <a href="<?php echo url('Personalcenter/personalcenter_index'); ?>">
                    <span><i class="glyphicon glyphicon-user"></i>&nbsp;个人中心</span>
                </a>  
                <span>欢迎您：<?php echo session('username')?> </span>
                <a href="<?php echo url('Login/logout'); ?>"><span>退出</span></a>
            </p>
        <?php endif; ?>
    </div>
</div>

<!-- 头部结束 -->
<!-- 导航开始 -->
<div class="head clearfix" style="overflow: visible;">
            <div class="logo" style="width: auto;">
            <a class="fl" href="<?php echo url('Index/index'); ?>">
                <img src="__IMG__<?php echo $banner['logo']; ?>" alt=""/>
                <!-- <h2 style="width:200px; text-align: center; line-height: 26px; margin-top: 10px; margin-left: 40px;"><span style="font-size: 24px; ">陆港易冷链</span><br><span>LUGANG YILENGLIAN</span></h2> -->
                </a>
                <!-- <div class="fr logofont">
                <p>专注冷鲜</p>
                <p style="margin-left: 16px;">用心服务</p>
                </div> -->
                <!-- <div class="fr logoimg">
                    <img src="__PUBLIC__/images/a2.png">
                </div> -->
                <div class="clearfix"></div>
            </div>
            <ul class="nav_wrap clearfix fr" style="margin-left: 0px; margin-right: -20px;">
                
                <li class="now">
                    <a href="<?php echo url('Index/index'); ?>">
                        <em>首页</em>
                    </a>
                </li>
                <li class="now">
                    <?php if(session('username') == ''): ?>
                        <a href="<?php echo url('Login/login'); ?>" onClick="return confirm('请登录！')">
                            <em>网上托运</em>
                        </a>
                    <?php else: if($user_u['check_state'] != '1'): ?>
                            <a href="<?php echo url('Personalcenter/personalcenter_index'); ?>" onClick="return confirm('请您先认证！')">
                                <em>网上托运</em>
                            </a>
                        <?php else: ?>
                            <a href="<?php echo url('Entrust/entrust'); ?>">
                                <em>网上托运</em>
                            </a>
                        <?php endif; endif; ?>
                </li>
                <li class="now">
                    <a href="<?php echo url('Goods/goods_car'); ?>">
                        <em>货源信息</em>
                    </a>
                </li>
                <li class="now">
                    <a href="<?php echo url('Path/path'); ?>">
                        <em>车源信息</em>
                    </a>
                </li>
                <li class="now">
                    <a href="<?php echo url('Warehouse/warehouse'); ?>">
                        <em>库源信息</em>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('Inland/inlandcoldchain'); ?>">
                        <em>国内冷链</em>
                    </a>
                    <ul class="drowdown">
                        <li><a href="<?php echo url('Inland/inlandcoldchain'); ?>">业务介绍</a></li>
                        <li><a href="<?php echo url('Inland/inlandmoney'); ?>">国内订车</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo url('Internation/internationcoldchain'); ?>" >
                        <em>国际冷链</em>
                    </a>
                    <ul class="drowdown">
                        <li><a href="<?php echo url('Internation/internationcoldchain'); ?>">业务介绍</a></li>
                        <li><a href="<?php echo url('Internation/internationmoney'); ?>">国际订舱</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo url('Rent/boxrent'); ?>">
                        <em>箱库租赁</em>
                    </a>
                    <ul class="drowdown" >
                        <li><a href="<?php echo url('Rent/boxrent'); ?>">冷藏箱租赁</a></li>
                        <li><a href="<?php echo url('Rent/storerent'); ?>">冷库租赁</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo url('Aboutus/aboutus'); ?>">
                        <em>关于我们</em>
                    </a>
                    <ul class="drowdown">
                        <li><a href="<?php echo url('Aboutus/aboutus'); ?>">公司简介</a></li>
                        <li><a href="<?php echo url('Aboutus/cultural'); ?>">实力展示</a></li>
                        <li><a href="<?php echo url('Aboutus/honor'); ?>">荣誉资质</a></li>
                    </ul>
                </li>
                <!-- <li>
                    <a href="<?php echo url('Goods/goods_car'); ?>">
                        <em>信息共享</em>
                    </a>
                    <ul class="drowdown">
                        <li><a href="<?php echo url('Path/path'); ?>">车源信息</a></li>
                        <li><a href="<?php echo url('Warehouse/warehouse'); ?>">库源信息</a></li>
                        <li><a href="<?php echo url('Goods/goods_car'); ?>">货源信息</a></li>
                    </ul>
                </li> -->
                <!-- <li>
                    <a href="<?php echo url('Personalcenter/personalcenter_index'); ?>">
                        <em>个人中心</em>
                    </a>
                </li> -->
            </ul>
            <div class="clearfix"></div>
        </div>


<!-- 头部结束 -->
<div class="personCenter">
    <div class="wrap-1200 clearfix" style="padding: 40px 0 45px 0;">
    	<!-- 左侧开始 -->
        <div class="person-left fl">
    <div class="photo">
        <img src="__PUBLIC__/images/default.png" alt="">
        <p><?php echo session('username')?></p>
        <p style="margin-top: 4px;">
        <?php if(is_array($userres1) || $userres1 instanceof \think\Collection || $userres1 instanceof \think\Paginator): $i = 0; $__LIST__ = $userres1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['check_state'] == '1'): ?>
        <span>已认证</span>
        <?php else: ?>
        <span>未认证</span>
        <?php endif; if($v['is_company'] == '0'): ?>
        <span>非自营</span>
        <?php else: ?>
        <span>自营</span>
        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </p>
    </div>
    <dl>
        <dt class="active"><i class="glyphicon glyphicon-user"></i>&nbsp;个人中心</dt>
        <div class="hideleft">
            <dd class="person-dd active">
                <a href="<?php echo url('Personalcenter/personalcenter_index'); ?>">用户信息<i class="glyphicon glyphicon-chevron-right arrow" aria-hidden="true"></i></a>
            </dd>
            <!-- <dd class="person-dd">
                <a href="">常用地址</a>
            </dd>
            <dd class="person-dd ">
                <a href="">我的消息</a>
            </dd>
            <dd class="person-dd ">
                <a href="">我要推荐</a>
            </dd>
            <dd class="person-dd ">
               <a href="">网站编辑</a>
            </dd> -->
        </div>
    </dl>
    <?php if(is_array($userres) || $userres instanceof \think\Collection || $userres instanceof \think\Paginator): $i = 0; $__LIST__ = $userres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['check_state'] == '1'): ?>
        <dl>
            <dt class=""><i class="glyphicon glyphicon-th-list"></i>&nbsp;我的订单</dt>
            <div class="hideleft" style="display:none;">
                <dd class="person-dd ">
                    <?php if($vo['type'] == '物流公司'): ?>
                        <a href="<?php echo url('Personalcenterorder/myorder_findcar'); ?>">我的抢单</a>
                    <?php elseif($vo['type'] == '车主'): ?>
                        <a href="<?php echo url('Personalcenterorder/myorder_findgoodscar'); ?>">我的抢单</a>
                    <?php elseif($vo['type'] == '库主'): ?>
                        <a href="<?php echo url('Personalcenterorder/myorder_findgoodsku'); ?>">我的抢单</a>
                    <?php else: ?>
                        <a href="<?php echo url('Personalcenterorder/myorder_findcar'); ?>">我的抢单</a>
                    <?php endif; ?>
                </dd>
            
                <dd class="person-dd ">
                    <?php if($vo['type'] == '物流公司'): ?>
                        <a href="<?php echo url('Personalcenterorder/acceptorder_goodscar'); ?>">接受订单</a>
                    <?php elseif($vo['type'] == '车主'): ?>
                        <a href="<?php echo url('Personalcenterorder/acceptorder_goodscar'); ?>">接受订单</a>
                    <?php elseif($vo['type'] == '库主'): ?>
                        <a href="<?php echo url('Personalcenterorder/acceptorder_goodsku'); ?>">接受订单</a>
                    <?php else: ?>
                        <a href="<?php echo url('Personalcenterorder/acceptorder_path'); ?>">接受订单</a>
                    <?php endif; ?>
                </dd>
                <!-- <dd class="person-dd ">
                    <a href="">货主订单</a>
                </dd>
            
                <dd class="person-dd ">
                    <a href="">车主订单</a>
                </dd>
            
                <dd class="person-dd ">
                    <a href="">库主订单</a>
                </dd> -->
            </div>
    	</dl>
        <!-- <dl>
            <dt class=""><i class="glyphicon glyphicon-jpy" style="font-size: 20px; font-weight: bold;"></i>&nbsp;我的钱包</dt>
            <div class="hideleft" style="display:none;">
                <dd class="person-dd ">
                    <a href="">钱包管理</a>
                </dd>
                <dd class="person-dd ">
                    <a href="">充值记录</a>
                </dd>
                <dd class="person-dd ">
                    <a href="">提现记录</a>
                </dd>
            </div>
        </dl> -->
        <?php if($vo['is_company'] == '1'): ?>
            <dl style="display: none;">
                <dt class=""><i class="glyphicon glyphicon-th-large"></i>&nbsp;托运管理</dt>
                <div class="hideleft">
                    <dd class="person-dd active">
                        <a href="<?php echo url('Entrust/receive_entrust'); ?>">接受托运<i class="glyphicon glyphicon-chevron-right arrow" aria-hidden="true"></i></a>
                    </dd>
                </div>
            </dl>
            <dl>
                <dt class=""><i class="glyphicon glyphicon-th-large"></i>&nbsp;货源管理</dt>
                <div class="hideleft" style="display:none;">
                     <dd class="person-dd">
                        <a href="<?php echo url('Personalcenter/goodsadd'); ?>">发布货源</a>
                    </dd>
                    
                    <dd class=" person-dd ">
                        <a href="<?php echo url('Personalcenter/goodslist_car'); ?>">管理货源</a>
                    </dd>
                </div>
            </dl>
            <dl>
                <dt class=""><i class="glyphicon glyphicon-log-out"></i>&nbsp;车源管理</dt>
               <div class="hideleft" style="display:none;">
                    <dd class="person-dd ">
                        <a href="<?php echo url('Personalcenter/pathadd'); ?>">发布车源</a>
                    </dd>
                     <dd class=" person-dd ">
                        <a href="<?php echo url('Personalcenter/pathlist'); ?>">管理车源</a>
                    </dd>
               </div>
            </dl>
            <dl>
                <dt class=""><i class="glyphicon glyphicon-home"></i>&nbsp;仓库管理</dt>
                <div class="hideleft" style="display:none;">
                    <dd class="person-dd ">
                        <a href="<?php echo url('Personalcenter/warehouseadd'); ?>">发布库源</a>
                    </dd>
                    <dd class="person-dd ">
                        <a href="<?php echo url('Personalcenter/warehouselist'); ?>">我的仓库</a>
                    </dd>
                </div>
            </dl>
        <?php else: if($vo['type'] == '物流公司'): ?>
                <dl>
                    <dt class=""><i class="glyphicon glyphicon-th-large"></i>&nbsp;托运管理</dt>
                    <div class="hideleft">
                        <dd class="person-dd active">
                            <a href="<?php echo url('Entrust/myentrust'); ?>">我的托运<i class="glyphicon glyphicon-chevron-right arrow" aria-hidden="true"></i></a>
                        </dd>
                    </div>
                </dl>
                <dl>
                    <dt class=""><i class="glyphicon glyphicon-th-large"></i>&nbsp;货源管理</dt>
                    <div class="hideleft" style="display:none;">
                         <dd class="person-dd">
                            <a href="<?php echo url('Personalcenter/goodsadd'); ?>">发布货源</a>
                        </dd>
                        
                        <dd class=" person-dd ">
                            <a href="<?php echo url('Personalcenter/goodslist_car'); ?>">管理货源</a>
                        </dd>
                    </div>
                </dl>
                <dl>
                    <dt class=""><i class="glyphicon glyphicon-log-out"></i>&nbsp;车源管理</dt>
                   <div class="hideleft" style="display:none;">
                        <dd class="person-dd ">
                            <a href="<?php echo url('Personalcenter/pathadd'); ?>">发布车源</a>
                        </dd>
                         <dd class=" person-dd ">
                            <a href="<?php echo url('Personalcenter/pathlist'); ?>">管理车源</a>
                        </dd>
                   </div>
                </dl>
                <dl>
                    <dt class=""><i class="glyphicon glyphicon-home"></i>&nbsp;仓库管理</dt>
                    <div class="hideleft" style="display:none;">
                        <dd class="person-dd ">
                            <a href="<?php echo url('Personalcenter/warehouseadd'); ?>">发布库源</a>
                        </dd>
                        <dd class="person-dd ">
                            <a href="<?php echo url('Personalcenter/warehouselist'); ?>">我的仓库</a>
                        </dd>
                    </div>
                </dl>
            <?php elseif($vo['type'] == '车主'): ?>
                <dl>
                    <dt class=""><i class="glyphicon glyphicon-log-out"></i>&nbsp;车源管理</dt>
                    <div class="hideleft" style="display:none;">
                        <dd class="person-dd ">
                            <a href="<?php echo url('Personalcenter/pathadd'); ?>">发布车源</a>
                        </dd>
                         <dd class=" person-dd ">
                            <a href="<?php echo url('Personalcenter/pathlist'); ?>">管理车源</a>
                        </dd>
                   </div>
                </dl>
            <?php elseif($vo['type'] == '库主'): ?>
                <dl>
                    <dt class=""><i class="glyphicon glyphicon-home"></i>&nbsp;仓库管理</dt>
                    <div class="hideleft" style="display:none;">
                        <dd class="person-dd ">
                            <a href="<?php echo url('Personalcenter/warehouseadd'); ?>">发布库源</a>
                        </dd>
                        <dd class="person-dd ">
                            <a href="<?php echo url('Personalcenter/warehouselist'); ?>">我的仓库</a>
                        </dd>
                    </div>
                </dl>
            <?php else: ?>
                <dl>
                    <dt class=""><i class="glyphicon glyphicon-th-large"></i>&nbsp;托运管理</dt>
                    <div class="hideleft">
                        <dd class="person-dd active">
                            <a href="<?php echo url('Entrust/myentrust'); ?>">我的托运<i class="glyphicon glyphicon-chevron-right arrow" aria-hidden="true"></i></a>
                        </dd>
                    </div>
                </dl>
                <dl>
                    <dt class=""><i class="glyphicon glyphicon-th-large"></i>&nbsp;货源管理</dt>
                    <div class="hideleft" style="display:none;">
                         <dd class="person-dd">
                            <a href="<?php echo url('Personalcenter/goodsadd'); ?>">发布货源</a>
                        </dd>
                        
                        <dd class=" person-dd ">
                            <a href="<?php echo url('Personalcenter/goodslist_car'); ?>">管理货源</a>
                        </dd>
                    </div>
                </dl>
            <?php endif; endif; else: endif; endforeach; endif; else: echo "" ;endif; ?>       
</div>
        <!-- 左侧结束 -->
       
        <!-- 右侧开始 -->
        <div class="person-right fr mjy-add mj-pro0">
            <div class="mj-adds clearfix mj-addNav">
                 <p class="active">修改仓库</p>
            </div>
            <form id="addCarGoodsResource" enctype="multipart/form-data" method="post" novalidate="novalidate" class="form1" action="<?php echo url('Personalcenter/warehouse_revise'); ?>">
             <input type="hidden" name="wh_uid" value="<?php echo session('username')?>">
             <input type="hidden" name="is_company" value="<?php echo $userres[0]['is_company']; ?>">
             <input type="hidden" name="id" value="<?php echo $warehouse['id']; ?>">
             <input type="hidden" name="is_recycle" value="0">
             <input type="hidden" name="check_state" value="1">
                <div class="rz-Form" style="margin-left: 200px;">
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">仓库名称：&nbsp;</p>
                            <p class="editinfo"><?php echo $warehouse['wh_name']; ?></p>
                        </div>
                    </div>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">仓库地址：&nbsp;</p>
                            <p class="editinfo"><?php echo $warehouse['wh_address']; ?></p>
                        </div>
                    </div>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">详细地址：&nbsp;</p>
                            <p class="editinfo"><?php echo $warehouse['wh_address_detail']; ?></p>
                        </div>
                    </div>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">仓库价格&nbsp;</p>
                        </div>
                        <input onblur="xsReg(this)"  name="wh_price" id="idCard" class="sfz" type="text" placeholder="请输入仓库价格" style="width: 230px;" value="<?php echo $warehouse['wh_price']; ?>">
                        <select name="wh_price_type" class="siteselect" style="width: 230px;">
                            <option value="" <?php if($warehouse['wh_price_type'] == ''): ?>selected <?php endif; ?>>元/天/托</option>
                            <option value="1" <?php if($warehouse['wh_price_type'] == '1'): ?>selected <?php endif; ?>>元/天/平</option>
                            <option value="2" <?php if($warehouse['wh_price_type'] == '2'): ?>selected <?php endif; ?>>元/天/吨</option>
                            <option value="3" <?php if($warehouse['wh_price_type'] == '3'): ?>selected <?php endif; ?>>元/天/方</option>
                        </select>
                        <label>请输入正确格式的仓库价格</label>
                    </div>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">仓库类型</p>
                        </div>
                        <div class="libraryarea">
                            <input type="checkbox" name="wh_type[]" value="平堆库" <?php for($i=0; $i<count($wh_type);$i++){ if($wh_type[$i]=='平堆库') {echo "checked";} }?> >&nbsp;平堆库
                        </div>
                        <div class="libraryarea">
                            <input type="checkbox" name="wh_type[]" value="货架库" <?php for($i=0; $i<count($wh_type);$i++){ if($wh_type[$i]=='货架库') {echo "checked";} }?> >&nbsp;货架库
                        </div>
                        <div class="libraryarea">
                            <input type="checkbox" name="wh_type[]" value="自动化库" <?php for($i=0; $i<count($wh_type);$i++){ if($wh_type[$i]=='自动化库') {echo "checked";} }?> >&nbsp;自动化库
                        </div>
                        <div class="libraryarea">
                            <input type="checkbox" name="wh_type[]" value="保税库" <?php for($i=0; $i<count($wh_type);$i++){ if($wh_type[$i]=='保税库') {echo "checked";} }?> >&nbsp;保税库
                        </div>
                        <label>请选择仓库类型</label>
                    </div>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">发票</p>
                        </div>
                        <div class="libraryarea">
                            <input type="radio" name="wh_invoice" checked="" value="提供发票" <?php if($warehouse['wh_invoice'] == '提供发票'): ?>checked <?php endif; ?>>&nbsp;提供发票
                        </div>
                        <div class="libraryarea">
                            <input type="radio" name="wh_invoice" checked="" value="不提供发票" <?php if($warehouse['wh_invoice'] == '不提供发票'): ?>checked <?php endif; ?>>&nbsp;不提供发票
                        </div>
                        <label>请选择是否提供发票</label>
                    </div>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">增值服务</p>
                        </div>
                        <div class="libraryarea">
                            <input type="checkbox" name="wh_service[]" value="提供拖车" <?php for($i=0; $i<count($wh_service);$i++){ if($wh_service[$i]=='提供拖车') {echo "checked";} }?> >&nbsp;提供拖车
                        </div>
                        <div class="libraryarea">
                            <input type="checkbox" name="wh_service[]" value="提供装卸" <?php for($i=0; $i<count($wh_service);$i++){ if($wh_service[$i]=='提供装卸') {echo "checked";} }?> >&nbsp;提供装卸
                        </div>
                        <label>请选择提供的增值服务</label>
                    </div>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">仓库面积&nbsp;</p>
                        </div>
                        <div class="libraryarea">
                            <span>常温</span>
                            <input onblur="xsReg(this)"  name="normal_area" id="name" class="xm" type="text" placeholder="请输入仓库面积" style="width: 200px;" value="<?php echo $warehouse['normal_area']; ?>">
                            <span>&nbsp;平方&nbsp;</span>
                            <input onblur="xsReg(this)"  name="normal_volume" id="name" class="xm" type="text" placeholder="请输入仓库面积" style="width: 200px;" value="<?php echo $warehouse['normal_volume']; ?>">
                            <span>&nbsp;立方&nbsp;</span>
                            <label>请输入正确格式的仓库面积</label>
                        </div>
                        <div class="libraryarea">
                            <span>冷藏</span>
                            <input onblur="xsReg(this)"  name="coldstorage_area" id="name" class="xm" type="text" placeholder="请输入仓库面积" style="width: 200px;" value="<?php echo $warehouse['coldstorage_area']; ?>">
                            <span>&nbsp;平方&nbsp;</span>
                            <input onblur="xsReg(this)"  name="coldstorage_volume" id="name" class="xm" type="text" placeholder="请输入仓库面积" style="width: 200px;" value="<?php echo $warehouse['coldstorage_volume']; ?>">
                            <span>&nbsp;立方&nbsp;</span>
                            <label>请输入正确格式的仓库面积</label>
                        </div>
                        <div class="libraryarea">
                            <span>冷冻</span>
                            <input onblur="xsReg(this)"  name="freeze_area" id="name" class="xm" type="text" placeholder="请输入仓库面积" style="width: 200px;" value="<?php echo $warehouse['freeze_area']; ?>">
                            <span>&nbsp;平方&nbsp;</span>
                            <input onblur="xsReg(this)"  name="freeze_volume" id="name" class="xm" type="text" placeholder="请输入仓库面积" style="width: 200px;" value="<?php echo $warehouse['freeze_volume']; ?>">
                            <span>&nbsp;立方&nbsp;</span>
                            <label>请输入正确格式的仓库面积</label>
                        </div>
                        <div class="libraryarea">
                            <span>急冻</span>
                            <input onblur="xsReg(this)"  name="quickfreeze_area" id="name" class="xm" type="text" placeholder="请输入仓库面积" style="width: 200px;" value="<?php echo $warehouse['quickfreeze_area']; ?>">
                            <span>&nbsp;平方&nbsp;</span>
                            <input onblur="xsReg(this)"  name="quickfreeze_volume" id="name" class="xm" type="text" placeholder="请输入仓库面积" style="width: 200px;" value="<?php echo $warehouse['quickfreeze_volume']; ?>">
                            <span>&nbsp;立方&nbsp;</span>
                            <label>请输入正确格式的仓库面积</label>
                        </div>
                        <div class="libraryarea">
                            <span>深冷</span>
                            <input onblur="xsReg(this)" name="deepcold_area" id="name" class="xm" type="text" placeholder="请输入仓库面积" style="width: 200px;" value="<?php echo $warehouse['deepcold_area']; ?>">
                            <span>&nbsp;平方&nbsp;</span>
                            <input onblur="xsReg(this)" name="deepcold_volume" id="name" class="xm" type="text" placeholder="请输入仓库面积" style="width: 200px;" value="<?php echo $warehouse['deepcold_volume']; ?>">
                            <span>&nbsp;立方&nbsp;</span>
                            <label>请输入正确格式的仓库面积</label>
                        </div>
                        
                    </div>
                    <!-- <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">可用库存&nbsp;</p>
                        </div>
                        <div class="libraryarea">
                            <input onblur="mzReg(this)" name="useable_area" id="name" class="xm" type="text" placeholder="请输入可用库存" style="width: 200px;" value="<?php echo $warehouse['useable_area']; ?>">
                            <span>&nbsp;平方&nbsp;</span>
                            <input onblur="mzReg(this)" name="useable_volume" id="name" class="xm" type="text" placeholder="请输入可用库存" style="width: 200px;" value="<?php echo $warehouse['useable_volume']; ?>">
                            <span>&nbsp;立方&nbsp;</span>
                        </div>
                    </div> -->
                    <!-- <div class="clearfix rz-model">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">仓库图片</p>
                        </div>
                       <div class="img_show">
                            <img src="__PUBLIC__/images/sci.png" id='show'>
                        </div>
                        <span class="fileinput-button">
                            <span>点击上传</span>
                            <input type="file" name="wh_photo" id='file'; onchange="c()" class="sfz"  placeholder="请上传仓库图片" value="<?php echo $warehouse['wh_photo']; ?>">
                        </span>
                    </div> -->
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">联系人：&nbsp;</p>
                            <p class="editinfo"><?php echo $warehouse['wh_contact']; ?></p>
                        </div>
                    </div>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">联系电话&nbsp;</p>
                        </div>
                        <input onblur="uxPhone(this)" name="wh_phone" id="idCard" class="sfz" type="text" placeholder="请输入联系电话" value="<?php echo $warehouse['wh_phone']; ?>">
                        <label>请输入联系电话</label>
                    </div>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <!-- <p class="fl rz-i"></p> -->
                            <p class="fl">备注</p>
                        </div>
                        <textarea name="wh_remark" class="remark" maxlength="30" ><?php echo $warehouse['wh_remark']; ?></textarea>
                        <p style="width: auto;">您还可以输入<span id="word">30</span>个字</p>
                    </div>
                    <div class="rz-model" style="position:relative">
                        <input type="submit" name="" class="rz_sub" value="提交" style="padding:0px;">
                   </div>
                </div>
            </form>
        </div>
        <!-- 右侧结束 -->
    </div>
</div>

<!-- <div class="dibu">
    <div class="dibu_jz">
        <div class="dibu_zuo">
            <p>联系地址：郑州国际陆港开发建设有限公司<br>
            电 话：0851-85594612   <br></p>
        </div>
        <div class="dibu_you">
            <ul>
                <li><a href="<?php echo url('Service/brokerage'); ?>">报关报检&nbsp;&nbsp;</a>｜</li>
                <li><a href="<?php echo url('Service/labelprint'); ?>">标签印刷&nbsp;&nbsp;</a>｜</li>
                <li><a href="<?php echo url('Service/secondpack'); ?>">二次包装&nbsp;&nbsp;</a>｜</li>
                <li><a href="<?php echo url('Service/joinus'); ?>">合作加盟&nbsp;&nbsp;</a></li>
                <div style="clear: both;"></div>
            </ul>
            <img class="dibu_logo" src="__PUBLIC__/images/dibu_03.png"> 
        </div>
    </div>
</div>
<div class="dibu_1">
    <p>版权所有 郑州国际陆港开发建设有限公司 豫ICP备10001741号
</p>
</div> -->


<div class="footer" style="background: #337cc9; margin-top: 0px;">
    <div class="row higo-content-floor higo-friend-link " style="width: 1200px; margin: 0 auto; text-align: center;padding: 20px 0px;">
        <div class="col-md-3 col-xs-3" style="border-right: 1px dashed #5496e8;height: 180px;">
            <ul>
                <li>
                    <!-- <img src="__PUBLIC__/images/ewm.png" alt="" style="width:130px; height: 130px;"> -->
                    <img src="__PUBLIC__/images/底部二维码.png" alt="" style="width:130px; height: 130px;">
                    <p>扫描二维码，了解我们</p>
                </li>
            </ul>
        </div>
        <div class="col-md-2 col-xs-2" style="border-right: 1px dashed #5496e8;height: 180px;">
            <ul style="line-height: 24px;">
                <li class="higo-firend-head">关于平台</li>
                <li><a href="<?php echo url('Foot/aboutplant'); ?>">平台介绍</a></li>
                <li><a href="<?php echo url('Foot/contactus'); ?>">联系我们</a></li>
            </ul>
        </div>
        <div class="col-md-2 col-xs-2" style="border-right: 1px dashed #5496e8;height: 180px;">
            <ul style="line-height: 24px;">
                <li class="higo-firend-head">用户指南</li>
                <li><a href="<?php echo url('Foot/register_flowpath'); ?>">注册指南</a></li>
                <li><a href="<?php echo url('Foot/auth_flowpath'); ?>">认证指南</a></li>
                <li><a href="<?php echo url('Foot/upload_flowpath'); ?>">发布指南</a></li>
                <li><a href="<?php echo url('Foot/deal_flowpath'); ?>">交易指南</a></li>
                <li><a href="<?php echo url('Service/onlineorder'); ?>">下单流程</a></li>
            </ul>
        </div>
         <div class="col-md-2 col-xs-2"  style="border-right: 1px dashed #5496e8;height: 180px;">
            <ul style="line-height: 24px;">
                <li class="higo-firend-head">友情链接</li>
                <li><a href="http://www.zzguojilugang.com/" target="_blank">郑州陆港</a></li>
                <li><a href="" target="_blank">中陆官网</a></li>
                <li><a href="http://banliego.com/" target="_blank">班列购</a></li>
            </ul>
        </div>
        <div class="col-md-2 col-xs-2" >
            <ul style="line-height: 24px;">
                <li class="higo-firend-head">使用帮助</li>
                <li><a href="<?php echo url('Foot/problem'); ?>">常见问题</a></li>
                 <!-- <li><a href="">联系客服</a></li> -->
            </ul>
        </div>

    </div>
</div>
<div class="footer1" style="background: #0066b3; padding:20px 0px; text-align: center;color: #fff">
    <p><span style="color: #eee">版权所有</span>&nbsp;郑州国际陆港开发建设有限公司 <span style="color: #eee; margin-left: 20px;">备案号：</span>&nbsp;豫ICP备17007279号
</div>
<div class="kf">
    <a style="outline: none;" href="http://42.228.11.187/chat/index.php?nick=<?php echo $username; ?>" target="_blank">
        <img src="__PUBLIC__/images/helper03.png">
        <p>在线客服</p>
    </a>
</div>
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script src="__PUBLIC__/js/auth.js"></script>
<script src="__PUBLIC__/js/sitepicker.js"></script>
<script src="__PUBLIC__/js/main.js"></script>
<script type="text/javascript">
    function c () {
        var r= new FileReader();
        f=document.getElementById('file').files[0];
        r.readAsDataURL(f);
        r.onload=function  (e) {
        document.getElementById('show').src=this.result;
        };
    }
    $('.nav_wrap').find('li').removeClass('now');
    $('.nav_wrap').children('li').eq(0).addClass('now');
    $('.person-left dl').find('.hideleft').hide();
    $('.person-left dl').eq(5).find('.hideleft').show();
    $('.person-left dl').find('dt').removeClass('active');
    $('.person-left dl').eq(5).find('dt').addClass('active');
    $('.person-left dl').eq(5).find('.hideleft').find('dd').eq(1).addClass('active'); 
</script>
</body>
</html>