<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"D:\phpStudy\WWW\huaxian\public/../application/index\view\city\index.html";i:1527237396;s:75:"D:\phpStudy\WWW\huaxian\public/../application/index\view\common\header.html";i:1527239288;s:75:"D:\phpStudy\WWW\huaxian\public/../application/index\view\common\footer.html";i:1527214262;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>城市建设</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="__PUBLIC__/css/base.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/main.css">
    <script src="__PUBLIC__/js/jquery-3.3.1.js"></script>
</head>
<body>
     <!-- 引用公共头部 -->
    <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/base-base.css">
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/base.js"></script>
    <title>baseHead</title>
</head>
<body> -->
    <link rel="stylesheet" href="__PUBLIC__/css/base-base.css">
    <script src="__PUBLIC__/js/jquery-3.3.1.js"></script>
    <script src="__PUBLIC__/js/base.js"></script>
    <link rel="stylesheet" href="__PUBLIC__/css/base.css">
    <link rel="stylesheet" href="__PUBLIC__/css/poor.css">
    <div class="wrap">
        <!--base头部开始-->
        <div class="top">
            <div class="top-login">
                <div class="right">
                    <?php if(session('username') != ''): ?>
                        <a href="##" >欢迎您：<?php echo session('username')?></a>
                        <span>|</span>
                        <a href="<?php echo url('Login/logout'); ?>" onclick="newShow()">退出</a>
                    <?php else: ?>
                        <a href="##" onclick="loginShow()">登录</a>
                        <span>|</span>
                        <a href="##" onclick="newShow()">注册</a>
                    <?php endif; ?>
                </div>
            </div>
            <!-- <div class="top-center">
                <img src="__PUBLIC__/images/logo.png" alt="" class="left">
                <div class="right">
                    <input class="left" placeholder="搜索文件、政策、新闻" type="search" name="" id="">
                    <button class="left">搜索</button>
                </div>
            </div> -->
            <div class="top-center">
                <img src="__PUBLIC__/images/logo.png" alt="" class="left">
                <div class="right">
                    <div class="select">
                        <div class="dt">文件</div>
                        <div class="box2" style="display: none;">
                            <div class="dd" name='wenjian'>文件</div>
                            <div class="dd" name='zhengce'>政策</div>
                            <div class="dd" name='xinwen'>新闻</div>
                        </div>
                    </div>
                    <script>
                        $(function () {
                            $('.dt').on('mouseenter', function () {
                                $('.box2').toggle();
                            });
                            $('.box2').on('mouseleave', function () {
                                $('.box2').hide();
                            });
                            $('.box2 .dd').on('click', function (event) {
                                $('.dt').text($(this).text());
                                $('.box2').hide();
                                // $('input').attr('placeholder','请输入'+$(this).text()+'信息.......');
                                var str = $(this).attr('name');
                                /*alert(str);*/
                                $('form').hide();
                                $('.'+str).show();
                                return false;
                            })
                        })
                    </script>
                    <style type="text/css">
                        form {
                            width: 340px;
                        }
                    </style>
                    <form class="wenjian left" action="<?php echo url('Index/search_file'); ?>" method="post" enctype="multipart/form-data">
                        <input class="left" placeholder="请输入要搜索的政府文件" type="search" name="keywords" id="" value="">
                        <button class="left">搜索</button>
                    </form>
                    <form class="zhengce left" style="display: none;" action="<?php echo url('Index/search_zhengce'); ?>" method="post" enctype="multipart/form-data">
                        <input class="left" placeholder="请输入要搜索的政策标题" type="search" name="keywords" id="" value="">
                        <button class="left">搜索</button>
                    </form>
                    <form class="xinwen left" style="display: none" action="<?php echo url('Index/search_news'); ?>" method="post" enctype="multipart/form-data">
                        <input class="left" placeholder="请输入要搜索的新闻标题" type="search" name="keywords" id="" value="">
                        <button class="left">搜索</button>
                    </form>
                
                    <!-- <button class="left">搜索</button> -->
                </div>
            </div>
            <div class="top-nav">
                <ul>
                    <li tipName='产品聚集区官网'><a href="<?php echo url('Index/index'); ?>">首页</a></li>
                    <li tipName='政府风貌'><a href="<?php echo url('Gov/index'); ?>">政治风貌</a></li>
                    <li tipName='城市建设'><a href="<?php echo url('City/index'); ?>">城市建设</a></li>
                    <li tipName='企业风采'><a href="<?php echo url('Company/index'); ?>">企业风采</a></li>
                    <li tipName='办事指南'><a href="<?php echo url('Work/index'); ?>">办事指南</a></li>
                    <li tipName='进言献策'><a href="<?php echo url('Message/index'); ?>">进言献策</a></li>
                    <li tipName='联系我们'><a href="<?php echo url('Call/call'); ?>">联系我们</a></li>
                    <script>
                    $(function(){
                        /*var str = window.location;
                        str = str.toString();
                        
                        alert(str.length);*/
                        var name = $('title').text();
                        $('.top-nav li').each(function(){
                            if($(this).attr('tipName') == name){
                                $(this).addClass('current').siblings().removeClass('current');
                            }
                        })
                    })

                    </script>
                </ul>
            </div>
        </div>

        <!-- 注册弹窗 -->
        <div class="popup" id="new">
            <div class="popup_detail">
                <div class="popup_top">
                    <img onclick="popup_close()" src="__PUBLIC__/images/popup_close.png" alt="请重新加载">
                </div>
                <p>立即注册</p>
                <div class="line">
                    <i></i>
                    <b></b>
                </div>
                <form action="<?php echo url('Login/register'); ?>" method="post" class="login3" enctype="multipart/form-data">
                    <div class="popup_input" style="margin-top: 70px;">
                        <span>手机号</span>
                        <input type="text" name="username" placeholder="请输入您有效的手机号码">
                    </div>
                    <!-- <div class="popup_input popup_code">
                        <span>输入验证码</span>
                        <input type="text">
                        <button>获取验证码</button>
                    </div> -->
                    <div class="popup_input popup_pwd">
                        <span>设置密码</span>
                        <input type="password" name="password" placeholder="请输入密码">
                    </div>
                    <div class="popup_input popup_pwd">
                        <span>确认密码</span>
                        <input type="password" name="repwd" placeholder="请再次输入密码" value="">
                    </div>
                    <button class="zhuce"><!-- <a href="#" class="zhuce"> -->注册<!-- </a> --></button>
                    <a href="javascript:;" class="popup_login" style="border-right: none;margin: 0 auto;display: block;padding-right: 0;width: 60px;text-align: center;">立即登录</a>
                </form>
                
                
                <!-- <a href="javascript:;" class="popup_forget">忘记密码</a> -->
            </div>
        </div>





        <!-- 登录弹窗 -->
        <div class="popup" id="login">
            <div class="popup_detail">
                <div class="popup_top">
                    <img onclick="popup_close()" src="__PUBLIC__/images/popup_close.png" alt="请重新加载">
                </div>
                <p>立即登录</p>
                <div class="line">
                    <i></i>
                    <b></b>
                </div>



                <style type="text/css">
                    form.login3 {width: 600px;margin: 0 auto;}
                </style>




                <form action="<?php echo url('Login/login'); ?>" method="post" class="login3" enctype="multipart/form-data">
                    <div class="popup_input" style="margin-top: 70px;">
                        <span>手机号</span>
                        <input type="text" placeholder="请输入登录账号" name="username">
                    </div>
                    <div class="popup_input">
                        <span>密&nbsp;&nbsp;&nbsp;码</span>
                        <input type="password" style="margin-left: 29px;" name="password" placeholder="请输入密码">
                    </div>
                    <button class="zhuce"><!-- <a href="#" class="zhuce"> -->登录<!-- </a> --></button>
                    <a href="javascript:;" class="popup_new" style="    width: 114px;margin:0 auto; margin-top: 43px;display: block;color: #000; text-align: center;font-size: 14px;">注册新账号</a>
                </form>
                
                <!-- <a href="javascript:;" class="popup_forget">忘记密码</a> -->
            </div>
        </div>






        <!-- 忘记密码弹窗 -->
        <div class="popup" id="forget">
            <div class="popup_detail">
                <div class="popup_top">
                    <img onclick="popup_close()" src="__PUBLIC__/images/popup_close.png" alt="请重新加载">
                </div>
                <p>忘记密码</p>
                <div class="line">
                    <i></i>
                    <b></b>
                </div>
                <div class="popup_input">
                    <span>手机号</span>
                    <input type="text">
                </div>
                <div class="popup_input popup_code">
                    <span>输入验证码</span>
                    <input type="text">
                    <button>获取验证码</button>
                </div>
                <div class="popup_input popup_pwd">
                    <span>设置密码</span>
                    <input type="text">
                </div>
                <div class="popup_input popup_pwd">
                    <span>确认密码</span>
                    <input type="text">
                </div>
                <a href="#" class="zhuce">完成</a>
                <a href="javascript:;" class="popup_login" style="margin-top: 20px;">立即登录</a>
                <a href="javascript:;" class="popup_new" style="width: 114px;
    margin-top: 43px;
    display: inline-block;
    color: #000;
    font-size: 14px;
    text-align: right;">注册新用户</a>
            </div>
        </div>

        <script type="text/javascript">
            function popup_close(){
                var popup = document.getElementsByClassName('popup');
                for(var i = 0 ;i < popup.length;i++){
                    popup[i].style.display = 'none';
                }
            }
            function loginShow(){
                var login = document.getElementById('login');
                login.style.display = 'block';
            }
            function newShow(){
                var zc = document.getElementById('new');
                zc.style.display = 'block';
            }
        </script>
        <script>
            $(function () {
                $('.popup_login').on("click", function () {
                    $('#login').show();
                    $('#new,#forget').hide();
                });
                $('.popup_new').on("click", function () {
                    $('#new').show();
                    $('#login,#forget').hide();
                });
                $('.popup_forget').on("click", function () {
                    $('#forget').show();
                    $('#new,#login').hide();
                })
            })
        </script>
    </div>
</body>
</html>

    <div class="wrap" style="padding:15px 0;"> 
        <div class="cityBuild">  
            <!-- 产业定位 -->
            <div class="city_top clearfix">
                <!-- 左侧内容展示 -->
                <div class="city_topL left">
                     <div class="city_title">
                        <h3>产业定位</h3>
                     </div>
                     <div class="city_content">
                        <h3>主导产业培育</h3>
                        <p>产业集聚区以农副食品加工、装备制造业为主导产业，服装加工业主新兴产业，煤化工为辅助产业，商贸物流等多产业协调发展。装备制造和食品加工两大主导产业增加值30.54亿元<a href="<?php echo url('City/maindetail'); ?>">详情</a></p>
                        
                     </div>
                     <div class="city_content">
                        <h3>远期规划</h3>
                        <p>随着市场经济的发展和世界经济的全球化、一体化发展，投资者投资的交换需求已不仅仅局限于土地资源、优惠政策、廉价的劳动力上，而产业集聚区的环境容量在逐渐减少。今后产业集聚区的建设上将减少高耗能、高污染、低回报的项目落户，由“招商引资”向“招商选资”转变，把重点放在引进有利于产业优化、用地少、附加值高、污染小的项目上，并且在“引进来”中选优、选强<a href="<?php echo url('City/plandetail'); ?>">详情</a></p>
                        
                     </div>
                </div> 
                <!-- 右侧轮播图 -->
                <div class="city_topR right">
                     <!--轮播图插件-->
                <div class="content">
                    <div class="a-content">
                        <div class="carousel-content">
                            <ul class="carousel">
                                <?php if(is_array($jinhe) || $jinhe instanceof \think\Collection || $jinhe instanceof \think\Paginator): $i = 0; $__LIST__ = $jinhe;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <li><div><img src="__IMG__<?php echo $vo['image']; ?>"></div>
                                    <div class="bana_title"><h3><?php echo $vo['title']; ?></h3></div>
                                    </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                <!-- <li>
                                    <div><img src="images/pic2.png"></div>
                                    <div class="bana_title"><h3>滑县城市建设2</h3></div>
                                </li> -->
                            
                            </ul>
                            <ul class="img-index"></ul>
                            <div class="carousel-prev"><img src="__PUBLIC__/images/left1.png"></div>
                            <div class="carousel-next"><img src="__PUBLIC__/images/right1.png"></div>
                        </div>
                    </div>
                </div>
               
                </div> 
            </div>
            <!-- 规划布局 -->
            <div class="city_down">
                <div class="city_top clearfix">
                <!-- 左侧内容展示 -->
                <div class="city_topL left">
                     <div class="city_title">
                        <h3>规划布局</h3>
                     </div>
                    <div class="empty" style="margin-top: 40px;"></div>
                     <div class="city_content">
                        <h3>园区规划</h3>
                        <p>当日，昆明地铁4、5号线正在进行建设，由于施工影响，穿城而过的一段百年滇越铁路被拆除，“老铁路”为“新铁路”建设让步...当日，昆明地铁4、5号线正在进行建设，由于施工影响，穿城而过的一段百年滇越铁路被拆除，“老铁路”为“新铁路”建设让步...当日，昆明地铁4、5号线正在进行建设，由于施工影响，穿城而过的一段百年滇越铁路被拆除，“老铁路”为“新铁路”建设让步...<a href="<?php echo url('City/yuanqudetail'); ?>">详情</a></p>
                        
                     </div>
                    <div class="empty" style="margin-top: 52px;"></div>
                     <div class="city_content">
                        <h3>六通一平情况</h3>
                        <p>当日，昆明地铁4、5号线正在进行建设，由于施工影响，穿城而过的一段百年滇越铁路被拆除，“老铁路”为“新铁路”建设让步...当日，昆明地铁4、5号线正在进行建设，由于施工影响，穿城而过的一段百年滇越铁路被当日，昆明地铁4、5号线正在进行建设，由于施工影响，穿城而过的一段百年滇越铁路被<a href="<?php echo url('City/liutongdetail'); ?>">详情</a></p>
                        
                     </div>
                </div> 
                <!-- 右侧轮播图 -->
                <div class="city_downR right">
                     <!--轮播图插件-->
                <div class="city_topL left">
                     
                     <div class="city_content">
                        <h3>污水处理厂</h3>
                        <p>当日，昆明地铁4、5号线正在进行建设，由于施工影响，穿城而过的一段百年滇越铁路被拆除，“老铁路”为“新铁路”建设让步...当日，昆明地铁4、5号线正在进行建设，由于施工影响，穿城而过的一段百年滇越铁路被拆除，“老铁路”为“新铁路”建设让步...当日，昆明地铁4、5号线正在进行建设，由于施工影响，穿城而过的一段百年滇越铁路被拆除，“老铁路”为“新铁路”建设让步...<a href="<?php echo url('City/waterdetail'); ?>">详情</a></p>
                        
                     </div>
                     <!--<div class="city_fac">-->
                        <div class="city_title">
                        <h3>基础设施</h3>
                        </div>
                        <!--<div>
                            <a href="##"><img src="images/city_1.png" alt="优化营商环境政策集成"></a>    
                        </div>-->
                         <div class="city_content">
                             <h3>基础设施</h3>
                             <p>当日，昆明地铁4、5号线正在进行建设，由于施工影响，穿城而过的一段百年滇越铁路被拆除，“老铁路”为“新铁路”建设让步...当日，昆明地铁4、5号线正在进行建设，由于施工影响，穿城而过的一段百年滇越铁路被拆除，“老铁路”为“新铁路”建设让步...当日，昆明地铁4、5号线正在进行建设，由于施工影响，穿城而过的一段百年滇越铁路被拆除，“老铁路”为“新铁路”建设让步...<a href="<?php echo url('City/basic'); ?>"> v 详情</a></p>

                         </div>
                     <!--</div>-->
                </div> 
               
                </div> 
            </div>
            </div>
        </div>   
    </div>
</body>
<!-- 引用公共底部 -->
    <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/base-base.css">
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/base.js"></script>
    <title>baseFooter</title>
   
</head>
<body> -->
    <div class="wrap" style="background: none;margin-top: 20px">
        <!--footer开始-->
        <div class="footer">
            <div class="link">
                <h3>友情链接</h3>
                <div class="link-to clearfix">
                    <?php if(is_array($link) || $link instanceof \think\Collection || $link instanceof \think\Paginator): $i = 0; $__LIST__ = $link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="##"><img src="__IMG__/<?php echo $vo['image']; ?>" alt=""></a>
                    <!-- <a href="##"><img src="__PUBLIC__/images/link2.png" alt=""></a> -->
                    <!-- <a href="##"><img src="__PUBLIC__/images/link3.png" alt=""></a> -->
                    <!-- <a href="##"><img src="__PUBLIC__/images/link4.png" alt=""></a> -->
                    <!-- <a href="##"><img src="__PUBLIC__/images/link5.png" alt=""></a> -->
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <div class="line"></div>
            <div class="bottom">
                <div class="first">
                    <!-- <a href="##">网站首页</a><span>|</span>
                    <a href="##">供应服务</a><span>|</span>
                    <a href="##">新闻中心</a><span>|</span>
                    <a href="##">荣誉资质</a><span>|</span>
                    <a href="##">人才招聘</a><span>|</span>
                    <a href="##">联系方式</a><span>|</span>
                    <a href="##">举报</a> -->
                    <a href="<?php echo url('Index/index'); ?>">首页</a><span>|</span>
                    <a href="<?php echo url('Gov/index'); ?>">政治风貌</a><span>|</span>
                    <a href="<?php echo url('City/index'); ?>">城市建设</a><span>|</span>
                    <a href="<?php echo url('Company/index'); ?>">企业风采</a><span>|</span>
                    <a href="<?php echo url('Work/index'); ?>">办事指南</a><span>|</span>
                    <a href="<?php echo url('Message/index'); ?>">进言献策</a><span>|</span>
                    <a href="<?php echo url('Call/call'); ?>">联系我们</a><span>|</span>
                    <a href="http://192.168.18.228/huaxian/public/index.php/admin/index/index.html">后台管理</a>
                </div>
                <div class="second">
                    <span>备案链接：</span>
                    <a href="##">发改委备案</a>
                    <span>|</span>
                    <a href="##">环境影响评价备案</a>
                </div>
                <div class="last">
                    <span>©2018  河南省滑县新区工业园产业聚集区  版权所有</span>
                    <span>技术支持：河南中浩信息科技有限公司</span>
                </div>
            </div>
        </div>
    </div>
<!-- </body> -->
<!-- </html> -->
 <!--引用插件-->
     <script type="text/javascript" src="__PUBLIC__/js/carousel.js"></script>
        <script type="text/javascript">
            $(function(){
                $(".carousel-content").carousel({
                    carousel : ".carousel",//轮播图容器
                    indexContainer : ".img-index",//下标容器
                    prev : ".carousel-prev",//左按钮
                    next : ".carousel-next",//右按钮
                    timing : 3000,//自动播放间隔
                    animateTime : 700,//动画时间
                    autoPlay : true,//是否自动播放 true/false
                    direction : "left",//滚动方向 right/left
                });

                $(".carousel-content").hover(function(){
                    $(".carousel-prev,.carousel-next").fadeIn(300);
                },function(){
                    $(".carousel-prev,.carousel-next").fadeOut(300);
                });

                $(".carousel-prev").hover(function(){
                    $(this).find("img").attr("src","__PUBLIC__/images/left2.png");
                },function(){
                    $(this).find("img").attr("src","__PUBLIC__/images/left1.png");
                });
                $(".carousel-next").hover(function(){
                    $(this).find("img").attr("src","__PUBLIC__/images/right2.png");
                },function(){
                    $(this).find("img").attr("src","__PUBLIC__/images/right1.png");
                });
            });
        </script>           
</html>