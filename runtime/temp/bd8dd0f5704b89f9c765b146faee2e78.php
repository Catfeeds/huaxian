<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:88:"E:\WWW\huaxian\public/../application/index\view\personalcenter\personalcenter_index.html";i:1511921625;s:66:"E:\WWW\huaxian\public/../application/index\view\common\header.html";i:1513838096;s:64:"E:\WWW\huaxian\public/../application/index\view\common\left.html";i:1511158695;s:66:"E:\WWW\huaxian\public/../application/index\view\common\footer.html";i:1522318885;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>个人中心</title>
    <link rel="icon" href="" type="image/x-icon"/>
    <link href="../../static/index/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../static/index/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css">
    <link rel="stylesheet"  href="__PUBLIC__/css/higo.css" />
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
                            <em>易冷链承运</em>
                        </a>
                    <?php else: if($user_u['check_state'] != '1'): ?>
                            <a href="<?php echo url('Personalcenter/personalcenter_index'); ?>" onClick="return confirm('请您先认证！')">
                                <em>易冷链承运</em>
                            </a>
                        <?php else: ?>
                            <a href="<?php echo url('Entrust/entrust'); ?>">
                                <em>易冷链承运</em>
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
                        <li><a href="<?php echo url('Internation/internationmoney'); ?>">国际订车</a></li>
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
        
        <?php if($userres['check_state'] == '1'): ?>
        <span>已认证</span>
        <?php else: ?>
        <span>未认证</span>
        <?php endif; if($userres['is_company'] == '0'): ?>
        <span>非自营</span>
        <?php else: ?>
        <span>自营</span>
        <?php endif; ?>
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
    <?php if($userres['check_state'] == '1'): ?>
        <dl>
            <dt class=""><i class="glyphicon glyphicon-th-list"></i>&nbsp;我的订单</dt>
            <div class="hideleft" style="display:none;">
                <dd class="person-dd ">
                    <?php if($userres['type'] == '物流公司'): ?>
                        <a href="<?php echo url('Personalcenterorder/myorder_findcar'); ?>">我的抢单</a>
                    <?php elseif($userres['type'] == '车主'): ?>
                        <a href="<?php echo url('Personalcenterorder/myorder_findgoodscar'); ?>">我的抢单</a>
                    <?php elseif($userres['type'] == '库主'): ?>
                        <a href="<?php echo url('Personalcenterorder/myorder_findgoodsku'); ?>">我的抢单</a>
                    <?php else: ?>
                        <a href="<?php echo url('Personalcenterorder/myorder_findcar'); ?>">我的抢单</a>
                    <?php endif; ?>
                </dd>
            
                <dd class="person-dd ">
                    <?php if($userres['type'] == '物流公司'): ?>
                        <a href="<?php echo url('Personalcenterorder/acceptorder_goodscar'); ?>">接受订单</a>
                    <?php elseif($userres['type'] == '车主'): ?>
                        <a href="<?php echo url('Personalcenterorder/acceptorder_goodscar'); ?>">接受订单</a>
                    <?php elseif($userres['type'] == '库主'): ?>
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
        <?php if($userres['is_company'] == '1'): ?>
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
        <?php else: if($userres['type'] == '物流公司'): ?>
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
            <?php elseif($userres['type'] == '车主'): ?>
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
            <?php elseif($userres['type'] == '库主'): ?>
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
            <?php endif; endif; else: endif; ?>     
</div>
        <!-- 左侧结束 -->
       
        <!-- 右侧开始 -->
        <div class="person-right fr">
	        
            <div class="per-img">
                <!-- <div class="heda-inputFile fl">
                    <div class="perImg-bac">
                    	<img class="mj-useBac userphoto" src="__PUBLIC__/images/default.png">
                    </div>
                </div> -->
                <div class="pers-left fl my-left">
                    <p>您好,<?php echo session('username')?></p>
                   
                        <p class="per-time">
                            上次登录时间：
                            <span><?php echo session('timeshow')?></span>
                        </p>
                </div>
                <div class="pers-right fr">
                    <div>
                        <i class="mjFont"></i><p>登录密码：</p><a href="<?php echo url('Personalcenter/changepassword'); ?>">修改</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="per-img1">
                <div class="panel panel-default publicmeg">
                    <div class="panel-heading meg-head" style="color: #f57707;">公告</div>
                    <div class="panel-body">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default publicmeg1">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span class="fl">主题：<?php echo $publicmeg['title']; ?></span><span class="fr">发布时间：<?php echo $publicmeg['time']; ?></span>
                                            <div class="clearfix"></div>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        内容：<?php echo $publicmeg['text']; ?>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="panel panel-default publicmeg1">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                  <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      公告2
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        公告列表
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="mj-personList">
                <!-- 未进行认证 -->
                <?php if($userres['check_state'] == '0'): ?>
                    <ul class="clearfix">
                        <li class="fl">
                            <div id="mj-vertical" class="mj-brand mj-vertical">
    							<a class="mj-Fza authphoto" mjtarget="t" href="<?php echo url('Personalcenter/logisticsauth'); ?>">
    								<span class="fa fa-building"></span>
    							</a>
    						</div>
                            <p>物流公司未认证</p>
                        </li>
                        <li class="fl">
                           
                            <div id="mj-vertical" class="mj-brand mj-vertical">
    							<a class="mj-Fza authphoto" mjtarget="t" href="<?php echo url('Personalcenter/driverauth'); ?>">
                                    <span class="glyphicon glyphicon-user"></span>
                                </a>
    						</div>
                            <p>个体司机未认证</p>
                        </li>
                        <li class="fl">
                            
                            <div id="mj-vertical" class="mj-brand mj-vertical">
    							<a class="mj-Fza authphoto" mjtarget="t" href="<?php echo url('Personalcenter/shipperauth'); ?>">
                                    <span class="fa fa-cube"></span>
                                </a>
    						</div>
                            <p>货主未认证</p>
                        </li>
                        <li class="fl">
                           
                            <div id="mj-vertical" class="mj-brand mj-vertical">
    							<a class="mj-Fza authphoto" mjtarget="t" href="<?php echo url('Personalcenter/warehouse_master_auth'); ?>">
                                    <span class="fa fa-university"></span>
                                </a>
    						</div>
                            <p>库主未认证</p>
                        </li>
                    </ul>
                <?php elseif($userres['check_state'] == '1'): if($userres['is_company'] == '1'): ?>
                        <ul class="clearfix" style="padding-left: 0px;">
                            <li style="margin: 0 auto;">
                                <div id="mj-vertical" style="text-align: center;">
                                    <a class="mj-Fza authsuccess" mjtarget="t" href="<?php echo url('Personalcenter/check_message'); ?>" title="查看认证信息">
                                        <span class="glyphicon glyphicon-ok"></span>
                                    </a>
                                </div>
                                <p>用户您好，您的账号身份为自营账号！</p>
                            </li>
                        </ul>
                    <?php else: ?>
                        <!-- 认证通过 -->
                        <ul class="clearfix" style="padding-left: 0px;">
                            <li style="margin: 0 auto;">
                                <div id="mj-vertical" style="text-align: center;">
                                    <a class="mj-Fza authsuccess" mjtarget="t" href="<?php echo url('Personalcenter/check_message'); ?>" title="查看认证信息">
                                        <span class="glyphicon glyphicon-ok"></span>
                                    </a>
                                </div>
                                <?php if($userres['type'] == '个体货主'): ?>
                                <p>您好，您的个体货主身份认证已经通过</p>
                                <?php elseif($userres['type'] == '车主'): ?>
                                <p>您好，您的个体司机身份认证已经通过</p>
                                <?php elseif($userres['type'] == '库主'): ?>
                                <p>您好，您的库主身份认证已经通过</p>
                                <?php elseif($userres['type'] == '物流公司'): ?>
                                <p>您好，您的物流公司身份认证已经通过</p>
                                <?php else: ?>
                                <p>您好，您的公司货主身份认证已经通过</p>
                                <?php endif; ?>
                                
                            </li>
                        </ul>
                    <?php endif; elseif($userres['check_state'] == '2'): ?>
                    <!-- 认证不通过 -->
                    <ul class="clearfix" style="padding-left: 0px; border-bottom: 10px solid #f5f5f5;">
                        <li style="margin: 0 auto;">
                            <div id="mj-vertical" style="text-align: center;">
                                <a class="mj-Fza authsuccess" mjtarget="t" href="">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </a>
                            </div>
                            <p>您的身份认证未通过，请重新提交认证信息。</p>
                        </li>
                    </ul>
                    <ul class="clearfix">
                        <li class="fl">
                            <div id="mj-vertical" class="mj-brand mj-vertical">
                                <a class="mj-Fza authphoto" mjtarget="t" href="<?php echo url('Personalcenter/logisticsauth'); ?>">
                                    <span class="fa fa-building"></span>
                                </a>
                            </div>
                            <p>物流公司未认证</p>
                        </li>
                        <li class="fl">
                           
                            <div id="mj-vertical" class="mj-brand mj-vertical">
                                <a class="mj-Fza authphoto" mjtarget="t" href="<?php echo url('Personalcenter/driverauth'); ?>">
                                    <span class="glyphicon glyphicon-user"></span>
                                </a>
                            </div>
                            <p>个体司机未认证</p>
                        </li>
                        <li class="fl">
                            
                            <div id="mj-vertical" class="mj-brand mj-vertical">
                                <a class="mj-Fza authphoto" mjtarget="t" href="<?php echo url('Personalcenter/shipperauth'); ?>">
                                    <span class="fa fa-cube"></span>
                                </a>
                            </div>
                            <p>货主未认证</p>
                        </li>
                        <li class="fl">
                           
                            <div id="mj-vertical" class="mj-brand mj-vertical">
                                <a class="mj-Fza authphoto" mjtarget="t" href="<?php echo url('Personalcenter/warehouse_master_auth'); ?>">
                                    <span class="fa fa-university"></span>
                                </a>
                            </div>
                            <p>库主未认证</p>
                        </li>
                    </ul>
                <?php else: if($userres['is_company'] == '1'): ?>
                        <ul class="clearfix" style="padding-left: 0px;">
                            <li style="margin: 0 auto;">
                                <div id="mj-vertical" style="text-align: center;">
                                    <a class="mj-Fza authsuccess" mjtarget="t" href="" >
                                        <span class="glyphicon glyphicon-minus"></span>
                                    </a>
                                </div>
                                <p>用户您好，您的自营账号身份正在审核中，请等待！</p>
                            </li>
                        </ul>
                    <?php else: ?>
                        <!-- 认证通过 -->
                        <ul class="clearfix" style="padding-left: 0px;">
                            <li style="margin: 0 auto;">
                                <div id="mj-vertical" style="text-align: center;">
                                    <a class="mj-Fza authsuccess" mjtarget="t" href="" >
                                        <span class="glyphicon glyphicon-minus"></span>
                                    </a>
                                </div>
                                <?php if($userres['type'] == '个体货主'): ?>
                                    <p>您好，您的个体货主身份认证正在审核中，请等待！</p>
                                <?php elseif($userres['type'] == '车主'): ?>
                                    <p>您好，您的个体司机身份认证正在审核中，请等待！</p>
                                <?php elseif($userres['type'] == '库主'): ?>
                                    <p>您好，您的库主身份认证正在审核中，请等待！</p>
                                <?php elseif($userres['type'] == '物流公司'): ?>
                                    <p>您好，您的物流公司身份认证正在审核中，请等待！</p>
                                <?php else: ?>
                                    <p>您好，您的公司货主身份认证正在审核中，请等待！</p>
                                <?php endif; ?>
                                
                            </li>
                        </ul>
                    <?php endif; endif; ?>
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
    <p><span style="color: #eee">版权所有</span>&nbsp;郑州国际陆港开发建设有限公司 <span style="color: #eee; margin-left: 20px;">备案号：</span>&nbsp;<a style="color: #fff;" target="_blank" href="http://www.miibeian.gov.cn">豫ICP备17007279号</a>
</div>
<div class="kf">
    <!-- <a style="outline: none;" href="http://42.228.11.187/chat/index.php?nick=<?php echo $username; ?>" target="_blank"> -->
    <!-- <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=917739011&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:917739011:51" alt="点击这里给我发消息" title="点击这里给我发消息"/> --><!-- </a> -->
        <!-- <img src="__PUBLIC__/images/helper03.png"> -->
        <!-- <p>在线客服</p> -->
        <a href="tencent://message/?uin=1761095324&Site=-&Menu=yes" target="_blank">
        <!-- <a href="http://q.url.cn/s/B96ijym" target="_blank">班列购跳转客服地址 -->
            <img src="__PUBLIC__/images/helper03.png">
        <p>在线客服</p>
    </a>
</div> 
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/bootstrap.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/main.js"></script>
<script type="text/javascript">
    $('.nav_wrap').find('li').removeClass('now');
    $('.nav_wrap').children('li').eq(0).addClass('now');
    $('.person-left dl').find('.hideleft').hide();
    $('.person-left dl').eq(0).find('.hideleft').show();
    $('.person-left dl').find('dt').removeClass('active');
    $('.person-left dl').eq(0).find('dt').addClass('active');
    $('.person-left dl').eq(0).find('.hideleft').find('dd').eq(0).addClass('active'); 
</script>
</body>
</html>