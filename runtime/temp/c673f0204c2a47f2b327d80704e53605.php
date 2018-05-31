<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"E:\WWW\huaxian\public/../application/index\view\index\index.html";i:1527218517;s:66:"E:\WWW\huaxian\public/../application/index\view\common\header.html";i:1527726933;s:66:"E:\WWW\huaxian\public/../application/index\view\common\footer.html";i:1527586945;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/base-base.css">
    <link rel="stylesheet" href="__PUBLIC__/css/base.css">
    <link rel="stylesheet" href="__PUBLIC__/css/yc.css">
    <script src="__PUBLIC__/js/jquery-3.3.1.js"></script>
    <script src="__PUBLIC__/js/topNav.js"></script>
    <title>产品聚集区官网</title>
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
                        <!-- <div class="box2" style="display: none;"> -->
                        <div class="ddselect" style="display: none;" name='wenjian'>文件</div>
                        <div class="ddselect" style="display: none;" name='zhengce'>政策</div>
                        <div class="ddselect" style="display: none;" name='xinwen'>新闻</div>
                        <!-- </div -->
                    </div>
                    <script>
                        $(function () {
                            $('.select').on('mouseenter', function () {
                                $('.ddselect').show();
                            });
                            $('.select').on('mouseleave', function () {
                                $('.ddselect').hide();
                            });
                            $('.ddselect').on('click', function (event) {
                                $('.dt').text($(this).text());
                                $('.ddselect').hide();
                                // $('input').attr('placeholder','请输入'+$(this).text()+'信息.......');
                                var str = $(this).attr('name');
                                /*alert(str);*/
                                $('.xuanze').hide();
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
                    <form class="wenjian left xuanze" action="<?php echo url('Index/search_file'); ?>" method="post" enctype="multipart/form-data">
                        <input class="left" placeholder="请输入要搜索的政府文件" type="search" name="keywords" id="" value="">
                        <button class="left">搜索</button>
                    </form>
                    <form class="zhengce left xuanze" style="display: none;" action="<?php echo url('Index/search_zhengce'); ?>" method="post" enctype="multipart/form-data">
                        <input class="left" placeholder="请输入要搜索的政策标题" type="search" name="keywords" id="" value="">
                        <button class="left">搜索</button>
                    </form>
                    <form class="xinwen left xuanze" style="display: none" action="<?php echo url('Index/search_news'); ?>" method="post" enctype="multipart/form-data">
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
    
    <div class="wrap">
        <!--顶部导航条开始-->
        <div class="box">
            <div class="t_news">
                <b>最新播报：</b>
                <ul class="news_li">
                    <!-- 轮播公告 -->
                    <?php if(is_array($notice) || $notice instanceof \think\Collection || $notice instanceof \think\Paginator): $i = 0; $__LIST__ = $notice;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li><a href="<?php echo url('Index/noticedetail',array('id'=>$vo['id'])); ?>" ><?php echo $vo['title']; ?></a><span><?php echo date('Y-m-d',strtotime($vo['time'])); ?></span></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <ul class="swap"></ul>
            </div>
        </div>
        <!--轮播图、公告信息-->
        <div class="slider1 clearfix">
            <!--轮播图位置-->
            <div class="left">
                <!--轮播图插件-->
                <div class="content">
                    <div class="a-content">
                        <div class="carousel-content">
                            <ul class="carousel">
                                <!-- 轮播图 -->
                                <?php if(is_array($imgs) || $imgs instanceof \think\Collection || $imgs instanceof \think\Paginator): $i = 0; $__LIST__ = $imgs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
                                    <li><div><img src="__IMG__<?php echo $v1['image']; ?>"></div>
                                        <div class="bana_title"><h3><?php echo $v1['name']; ?></h3></div>
                                    </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                            <ul class="img-index"></ul>
                            <div class="carousel-prev"><img src="__PUBLIC__/images/left1.png"></div>
                            <div class="carousel-next"><img src="__PUBLIC__/images/right1.png"></div>
                        </div>
                    </div>
                </div>
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
            </div>
            <!--公告栏位置-->
            <div class="right">
                <div class="notice">
                    <!--自制tab自动切换效果-->
                    <script>
                       $(function () {
                           var timer = null,flag = 1;
                           $("#first-ul li").on("click", function () {
                               clearInterval(timer);
                               $(this).children("i").fadeIn();
                               $(this).children("ul").fadeIn();
                               $(this).siblings().children("i").hide();
                               $(this).siblings().children("ul").hide();
                               /*flag = $(this).index();
                               $("#first-ul").on("mouseleave", function () {
                                   clearInterval(timer);
                                   timer = setInterval(function () {
                                       if(flag<$("#first-ul>li").length-1){
                                           flag++;
                                       }else {
                                           flag = 0;
                                       };
                                       $("#first-ul>li").children("i").fadeOut(1000);
                                       $("#first-ul>li").children("ul").fadeOut(1000);
                                       $("#first-ul>li").eq(flag).children("i").fadeIn(2000);
                                       $("#first-ul>li").eq(flag).children("ul").fadeIn(2000);

                                   },4000);
                               });*/
                           });
                          /* $("#first-ul").on("mouseenter", function () {
                               clearInterval(timer);
                           })*/
                           /*clearInterval(timer);
                           timer = setInterval(function () {
                               $("#first-ul>li").children("i").fadeOut(1000);
                               $("#first-ul>li").children("ul").fadeOut(1000);
                               $("#first-ul>li").eq(flag).children("i").fadeIn(2000);
                               $("#first-ul>li").eq(flag).children("ul").fadeIn(2000);
                               console.log($("#first-ul>li").length);
                               if(flag<$("#first-ul>li").length-1){
                                   flag++;
                               }else {
                                   flag = 0;
                               }
                           },4000);*/
                       });
                    </script>
                    <ul id="first-ul">
                        <li>新闻动态
                            <ul>
                                <?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
                                    <li><a href="<?php echo url('Index/newsdetail',array('id'=>$v2['id'])); ?>"><?php echo $v2['title']; ?></a><span>[<?php echo $v2['newstime']; ?>]</span></li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                <!-- <li><a href="##">李克强李克强李克强李克强李克强近平总书记</a><span>[2018-05-01]</span></li> -->
                                <li style="margin-top: 10px;"><a href="<?php echo url('Index/news'); ?>" style="float: right;margin-right: 20px;background: none;color: #666;">更多>></a></li>
                            </ul>
                            <i></i>
                        </li>
                        <li>通知公告
                            <ul>
                                <?php if(is_array($notice) || $notice instanceof \think\Collection || $notice instanceof \think\Paginator): $i = 0; $__LIST__ = $notice;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v3): $mod = ($i % 2 );++$i;?>
                                    <li><a href="<?php echo url('Index/noticedetail',array('id'=>$v3['id'])); ?>"><?php echo $v3['title']; ?></a><span>[<?php echo date('Y-m-d',strtotime($v3['time'])); ?>]</span></li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                <!-- <li><a href="##">习近平总书记习近平总书记近平总书记</a><span>[2018-05-10]</span></li> -->
                            </ul>
                            <i></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--四个选项卡-->
        <div class="choose-for clearfix">
            <ul>
                <li style="margin-left: 0;"><a href="<?php echo url('Index/file'); ?>"><img src="__PUBLIC__/images/1政府文件.png" alt=""></a></li>
                <li><a href="<?php echo url('Index/business'); ?>"><img src="__PUBLIC__/images/2招商引资.png" alt=""></a></li>
                <li><a href="<?php echo url('Index/help'); ?>"><img src="__PUBLIC__/images/3扶贫攻坚.png" alt=""></a></li>
                <li><a href="<?php echo url('Index/events'); ?>"><img src="__PUBLIC__/images/4大事记.png" alt=""></a></li>
            </ul>
        </div>
        <!--重点企业展示-->
        <div class="show-inportant">
            <div class="top">
                <h3>重点企业展示</h3>
            </div>
            <div class="line"></div>
            <div class="big-slide">
                <div class="left-right">
                    <span class="btn-left"><</span>
                    <span class="btn-right">></span>
                </div>
                <div class="slide-inner">
                    <ul class="clearfix slider2">
                        <!-- 后四张图 -->
                        <?php if(is_array($company2) || $company2 instanceof \think\Collection || $company2 instanceof \think\Paginator): $i = 0; $__LIST__ = $company2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v4): $mod = ($i % 2 );++$i;?>
                            <li>
                                <div class="dt"><a href="##"><img src="__IMG__<?php echo $v4['image']; ?>" alt=""></a></div>
                                <!--<div class="dd">
                                    <p>重点企业</p>
                                    <p>绿色产品，坚韧耐用</p>
                                </div>-->
                            </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        
                        <!-- 中间的图 -->
                        <?php if(is_array($company) || $company instanceof \think\Collection || $company instanceof \think\Paginator): $i = 0; $__LIST__ = $company;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v5): $mod = ($i % 2 );++$i;?>
                        <li>
                            <div class="dt"><a href="##"><img src="__IMG__<?php echo $v5['image']; ?>" alt=""></a></div>
                            <!--<div class="dd">
                                <p>重点企业</p>
                                <p>绿色产品，坚韧耐用</p>
                            </div>-->
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>

                        <!-- 前四张图 -->
                        <?php if(is_array($company) || $company instanceof \think\Collection || $company instanceof \think\Paginator): $i = 0; $__LIST__ = $company;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v6): $mod = ($i % 2 );++$i;?>
                            <li>
                                <div class="dt"><a href="##"><img src="__IMG__<?php echo $v6['image']; ?>" alt=""></a></div>
                                <!--<div class="dd">
                                    <p>重点企业</p>
                                    <p>绿色产品，坚韧耐用</p>
                                </div>-->
                            </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    <!--首页轮播图自定义script-->
                    <script>
                         $(function () {
                            var index = 4,timer3 = null;
                            clearInterval(timer3);
                            var timer3 = setInterval(function () {
                                /*clearInterval(timer3);*/
                                index++;
                                if(index > $(".slider2 li").length-4){
                                    $('.slider2').css('left','-1020px');
                                    index = 5;
                                };
                                $('.slider2').animate({
                                    left:-index*255
                                },500);
                            },2000);
                            $(".btn-left").on("click", function () {
                                clearInterval(timer3);
                                index--;
                                if(index<0){
                                    $('.slider2').css('left','-1530px');
                                    index = 5;
                                }
                                /*if(index>)*/
                                $(".slider2").animate({
                                    left: -index*255
                                },500);
                            }).on("mouseleave", function () {
                                clearInterval(timer3);
                                timer3 = setInterval(function () {
                                    index++;
                                    if(index > $(".slider2 li").length-4){
                                        $('.slider2').css('left','-1020px');
                                        index = 5;
                                    }
                                    $('.slider2').animate({
                                        left:-index*255
                                    },500);
                                },2000);
                            });
                            $(".btn-right").on("click", function () {
                                clearInterval(timer3);
                                index++;
                                if(Math.abs(index)>$(".slider2 li").length-4){
                                    $(".slider2").css('left','-1020px');
                                    index = 5;
                                }
                                $(".slider2").animate({
                                    left: -index*255
                                },500);
                            }).on("mouseleave", function () {
                                clearInterval(timer3);
                                timer3 = setInterval(function () {
                                    index++;
                                    if(index > $(".slider2 li").length-4){
                                        $('.slider2').css('left','-1020px');
                                        index = 5;
                                    }
                                    $('.slider2').animate({
                                        left:-index*255
                                    },500);
                                },2000);
                            });
                        })
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
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
                    <a href="<?php echo $vo['linkurl']; ?>"><img src="__IMG__/<?php echo $vo['image']; ?>" alt=""></a>
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
</body>
</html>