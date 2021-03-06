<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:101:"E:\WWW\transport\public/../application/index\view\personalcenterorder\acceptorder_goodsku_detail.html";i:1508926105;s:68:"E:\WWW\transport\public/../application/index\view\common\header.html";i:1508719130;s:66:"E:\WWW\transport\public/../application/index\view\common\left.html";i:1508765778;s:68:"E:\WWW\transport\public/../application/index\view\common\footer.html";i:1507716955;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>订单详情</title>
    <link rel="icon" href="" type="image/x-icon"/>
    <link rel="stylesheet" href="../../../../static/index/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../static/index/css/font-awesome.min.css">
    <link rel="stylesheet" href="__PUBLIC__/css/higo.css">
    <link rel="stylesheet" href="__PUBLIC__/css/city-picker.css">
    <link rel="stylesheet" href="__PUBLIC__/css/style.css">
    <style type="text/css">
        .personCenter{
            min-height: 800px;
        }
        .goods_detail table th{
            background: #fff;
        }
    </style>
</head>
<body>
<!-- 头部开始 -->
<div class="top">
    <div class="clearfix wrap-1200">
        <p class="fl"><!-- <span>易冷链，专注冷鲜，用心服务。&nbsp;&nbsp;</span> --><span><a class="glyphicon glyphicon-earphone" style="color: white;"></a>&nbsp;&nbsp;服务热线：0371—55172118</span></p>
        <?php if(session('username') == ''): ?>
            <p class="fr reg">
                <a href="<?php echo url('Personalcenter/personalcenter_index'); ?>">
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
                    <a href="<?php echo url('Entrust/entrust'); ?>">
                        <em>网上托运</em>
                    </a>
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
<div class="personCenter goods_info">
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
            <dl>
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
            <div class="m-infortabBack">
            <div id="m-infonavCont">
                <div class="m-infonavContent2 mj-xlxx goods_detail" style="background: #fff">
                    <div class="orderdetail">
                        <h3>
                          <span style="float: left;">订单详情</span>
                          <a class="back" href="<?php echo url('Personalcenterorder/acceptorder_goodsku'); ?>">返回</a>
                          <div class="clearfix"></div>
                        </h3>
                        <p>
                            <span>订单编号:<?php echo $order['order_number']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
                            <span style="float: right;">订单状态：
                            <?php if($order['ku_state'] == '1'): ?>
                              订单待确认
                            <?php elseif($order['ku_state'] == '2'): ?>
                              订单已确认，待付款
                            <?php elseif($order['ku_state'] == '3'): ?>
                              订单已支付，等待货物入库
                            <?php elseif($order['ku_state'] == '4'): if($order['order_state'] == '3'): ?>
                                交易完成，等待平台支付
                              <?php elseif($order['order_state'] == '4'): ?> 
                                交易完成，平台已支付
                              <?php endif; else: ?>
                              交易取消
                            <?php endif; ?>
                            </span>
                        </p>
                    </div>
                    <table style="max-width: 970px; width: 100%">
                      <thead>
                        <th>货主信息</th>
                        <th>库主信息</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <ul class="u-inforUl detail">
                             <li class="orderdetail_tit">货主基本信息</li>
                              <li class="clearfix"><a>货主姓名：</a><span>
                              <?php if($user1['company_name'] != ''): ?>
                                     <?php echo $user1['company_name']; elseif($user1['real_name'] != ''): ?>
                                    <?php echo $user1['real_name']; endif; ?></span></li>
                              <li class="clearfix"><a>认证类型： </a><span>
                              <?php if($user1['type_id'] == '1'): ?>
                                      货主
                              <?php elseif($user1['type_id'] == '2'): ?>
                                      车主
                              <?php elseif($user1['type_id'] == '3'): ?>
                                      库主
                              <?php else: ?>
                                      物流公司
                              <?php endif; ?>(<?php echo $user1['type']; ?>)
                              </span></li>
                              <li class="clearfix"><a>联系方式：</a><span><?php echo $goods['phone']; ?></span></li>
                            </ul>
                            <ul class="u-inforUl detail">
                             <li class="orderdetail_tit">货源详情</li>
                              
                              <li class="clearfix"><a>货物名称:</a><span><?php echo $goods['goods_name']; ?></span></li>
                              <li class="clearfix"><a>货物类型:</a><span>
                              <?php if(is_array($goods_type) || $goods_type instanceof \think\Collection || $goods_type instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;if($v1['id'] == $goods['goods_type']): ?>
                                <?php echo $v1['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                              </span></li>
                              <li class="clearfix"><a>货物规格:</a><span><?php echo $goods['standard_ton']; ?>吨 <?php echo $goods['standard_square']; ?>方</span></li>
                              <li class="clearfix"><a>包装类型： </a><span><?php echo $goods['package_type']; ?></span></li>
                              <li class="clearfix"><a>存储费用（不包含其他费用）： </a><span><?php echo $order['order_money']; ?>&nbsp;元</span></li>
                              <li class="clearfix"><a>价格类型： </a><span><?php echo $goods['price_type']; ?></span></li>
                              <li class="clearfix"><a>支付方式： </a>
                              <span>
                                <?php if(is_array($payment_mode) || $payment_mode instanceof \think\Collection || $payment_mode instanceof \think\Paginator): $i = 0; $__LIST__ = $payment_mode;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v5): $mod = ($i % 2 );++$i;if($v5['id'] == $goods['payment_mode']): ?>
                                <?php echo $v5['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                              </span>
                              </li>
                              <li class="clearfix"><a>是否需要发票： </a><span><?php echo $goods['invoice']; ?></span></li>
                              <li class="clearfix"><a>货物图片：</a><span><img src="__IMG__<?php echo $goods['goods_photo']; ?>" style="width: 200px;height: 200px" /></span></li>
                            </ul>
                            <ul class="u-inforUl detail">
                             <li class="orderdetail_tit">所需仓库信息</li>
                              <li class="clearfix"><a>所需冷库地址： </a><span><?php echo $goods['whaddress']; ?></span></li>
                              <li class="clearfix"><a>所需冷库温度： </a>
                                <span>
                                  <?php if(is_array($goods_t) || $goods_t instanceof \think\Collection || $goods_t instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_t;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;if($vv['id'] == $goods['need_wh_temperature']): ?>
                                      <?php echo $vv['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                                </span>
                              </li>
                              <li class="clearfix"><a>入库时间： </a><span><?php echo $goods['enter_wh_time']; ?></span></li>
                              <li class="clearfix"><a>预计库存时间： </a>
                              <span>
                                <?php if(is_array($storage_time) || $storage_time instanceof \think\Collection || $storage_time instanceof \think\Paginator): $i = 0; $__LIST__ = $storage_time;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;if($v2['id'] == $goods['storage_time']): ?>
                                  <?php echo $v2['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                              </span>
                              </li>
                              
                            </ul>

                            <ul class="u-inforUl detail">
                             <li class="orderdetail_tit">联系信息</li>
                              <li class="clearfix"><a>货物联系人：</a><span><?php echo $goods['contact']; ?></span></li>
                              <li class="clearfix"><a>货物联系人电话：</a><span><?php echo $goods['phone']; ?></span></li>
                              <li class="clearfix"><a>备注：</a><span><?php echo $goods['goods_remark']; ?></span></li>
                              
                            </ul>
                          </td>
                          <td>
                            <ul class="u-inforUl detail">
                                <li class="orderdetail_tit">库主基本信息</li>
                                <li class="clearfix"><a>库主姓名：</a><span>
                                <?php if($user2['company_name'] != ''): ?>
                                       <?php echo $user2['company_name']; elseif($user2['real_name'] != ''): ?>
                                      <?php echo $user2['real_name']; endif; ?></span></li>
                                <li class="clearfix"><a>认证类型： </a><span>
                                <?php if($user2['type_id'] == '1'): ?>
                                        货主
                                <?php elseif($user2['type_id'] == '2'): ?>
                                        车主
                                <?php elseif($user2['type_id'] == '3'): ?>
                                        库主
                                <?php else: ?>
                                        物流公司
                                <?php endif; ?>(<?php echo $user2['type']; ?>)
                                </span></li>
                                <li class="clearfix"><a>联系方式：</a><span><?php echo $warehouse['wh_phone']; ?></span></li>
                            </ul>
                            </ul>
                            <ul class="u-inforUl detail">
                             <li class="orderdetail_tit">库源详情</li>
                              <li class="clearfix"><a>仓库名称：</a><span><?php echo $warehouse['wh_name']; ?></span></li>
                              <li class="clearfix"><a>仓库类型：</a><span><?php echo $warehouse['wh_type']; ?></span></li>
                              <li class="clearfix"><a>仓库价格：</a><span><?php echo $warehouse['wh_price']; if($warehouse['wh_price_type'] == '0'): ?>
                              元/天/托
                              <?php elseif($warehouse['wh_price_type'] == '1'): ?>
                                元/天/平
                              <?php elseif($warehouse['wh_price_type'] == '2'): ?>
                                元/天/吨
                              <?php elseif($warehouse['wh_price_type'] == '3'): ?>
                                元/天/方
                              <?php endif; ?></span></li>
                              <li class="clearfix"><a>仓库面积：</a><span>
                              <?php if($warehouse['normal_area'] != ''): ?>
                              常温：<?php echo $warehouse['normal_area']; ?>平方；<?php echo $warehouse['normal_volume']; ?>立方
                              <?php else: endif; ?>
                              <p style="margin-left: 94px;">
                              <?php if($warehouse['coldstorage_area'] != ''): ?>    
                                冷藏：<?php echo $warehouse['coldstorage_area']; ?>平方；<?php echo $warehouse['coldstorage_volume']; ?>立方
                                <?php else: endif; ?>
                              </p>
                              <p style="margin-left: 94px;">
                                <?php if($warehouse['freeze_area'] != ''): ?>
                                  冷冻：<?php echo $warehouse['freeze_area']; ?>平方；<?php echo $warehouse['freeze_volume']; ?>立方
                                  <?php else: endif; ?>
                              </p>
                              <p style="margin-left: 94px;">
                                <?php if($warehouse['quickfreeze_area'] != ''): ?>
                                  急冻：<?php echo $warehouse['quickfreeze_area']; ?>平方；<?php echo $warehouse['quickfreeze_volume']; ?>立方
                                  <?php else: endif; ?>
                              </p>
                              <p style="margin-left: 94px;">
                                <?php if($warehouse['deepcold_area'] != ''): ?>
                                  深冷：<?php echo $warehouse['deepcold_area']; ?>平方；<?php echo $warehouse['deepcold_volume']; ?>立方
                                  <?php else: endif; ?>
                              </p></span>
                              </li>
                              <!-- <li class="clearfix"><a>可用库容：</a><span><?php echo $warehouse['useable_area']; ?>平方；<?php echo $warehouse['useable_volume']; ?>立方</span></li> -->
                              <li class="clearfix"><a>增值服务：</a><span><?php echo $warehouse['wh_service']; ?></span></li>
                              <li class="clearfix"><a>是否需要发票：</a><span><?php echo $warehouse['wh_invoice']; ?></span></li>
                              <li class="clearfix"><a>发布日期：</a><span><?php echo $warehouse['wh_time']; ?></span></li>
                              <li class="clearfix"><a>仓库实拍图：</a><span><img src="__IMG__<?php echo $warehouse['wh_photo']; ?>" style="width: 200px;height: 200px" /></span></li>
                            </ul>
                             <ul class="u-inforUl detail">
                             <li class="orderdetail_tit">仓库地址信息</li>
                              
                              <li class="clearfix"><a>仓库地址：</a><span><?php echo $warehouse['wh_address']; ?></span></li>
                              <li class="clearfix"><a>仓库详细地址：</a><span><?php echo $warehouse['wh_address_detail']; ?></span></li>
                            </ul>
                            <ul class="u-inforUl detail">
                             <li class="orderdetail_tit">联系信息</li>
                              <li class="clearfix"><a>联系人：</a><span><?php echo $warehouse['wh_contact']; ?></span></li>
                              <li class="clearfix">
                                <a>联系方式：</a>
                                <span id="phone">
                                <?php echo $warehouse['wh_phone']; ?>
                                </span>
                              </li>
                              
                            </ul>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
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
    <a style="outline: none;" href="http://42.228.11.171/chat/index.php?nick=<?php echo $username; ?>" target="_blank">
        <img src="__PUBLIC__/images/helper03.png">
        <p>在线客服</p>
    </a>
</div>
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script src="__PUBLIC__/js/auth.js"></script>
<script src="__PUBLIC__/js/sitepicker.js"></script>
<script type="text/javascript">
    $('.person-left dl dt').click(function(){
        $('.person-left dl dt').removeClass('active');
        $(this).addClass('active');
        $('.person-left dl .hideleft').hide();
        $(this).next('.hideleft').show();
    });
    $('.person-left dl').find('.hideleft').hide();
    $('.person-left dl').eq(1).find('.hideleft').show();
    $('.person-left dl').find('dt').removeClass('active');
    $('.person-left dl').eq(1).find('dt').addClass('active');
    $('.nav_wrap').find('li').removeClass('now');
    $('.nav_wrap').children('li').eq(0).addClass('now');
</script>
</body>
</html>