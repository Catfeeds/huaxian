<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"E:\WWW\huaxian\public/../application/index\view\gov\eventsdetail.html";i:1527069566;s:66:"E:\WWW\huaxian\public/../application/index\view\common\header.html";i:1527069463;s:66:"E:\WWW\huaxian\public/../application/index\view\common\footer.html";i:1526031971;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>大事记</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="__PUBLIC__/css/base.css">
    <link rel="stylesheet" href="__PUBLIC__/css/poor.css">
    <link rel="stylesheet" href="__PUBLIC__/css/swiper-4.2.2.min.css">
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
                    <a href="##" onclick="loginShow()">登录</a>
                    <span>|</span>
                    <a href="##" onclick="newShow()">注册</a>
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
                            <div class="dd" name='zhengce'>政府</div>
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
                                $('input').attr('placeholder','请输入'+$(this).text()+'信息.......');
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
                            width: 230px;
                        }
                    </style>
                    <form class="wenjian left"><input class="left" placeholder="搜索文件、政策、新闻" type="search" name="" id="" value=""></form>
                    <form class="zhengce left" style="display: none;"><input class="left" placeholder="搜索文件、政策、新闻" type="search" name="" id="" value=""></form>
                    <form class="xinwen left" style="display: none"><input class="left" placeholder="搜索文件、政策、新闻" type="search" name="" id="" value=""></form>
                    <script type="text/javascript">
                        $(function(){
                            $()
                        })
                    </script>
                    <button class="left">搜索</button>
                </div>
            </div>
            <div class="top-nav">
                <ul>
                    <li class="current"><a href="<?php echo url('Index/index'); ?>">首页</a></li>
                    <li><a href="<?php echo url('Gov/index'); ?>">政治风貌</a></li>
                    <li><a href="<?php echo url('City/index'); ?>">城市建设</a></li>
                    <li><a href="<?php echo url('Company/index'); ?>">企业风采</a></li>
                    <li><a href="<?php echo url('Work/index'); ?>">办事指南</a></li>
                    <li><a href="<?php echo url('Message/index'); ?>">进言献策</a></li>
                    <li><a href="<?php echo url('Call/call'); ?>">联系我们</a></li>
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
                <div class="popup_input" style="margin-top: 70px;">
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
                <a href="#" class="zhuce">注册</a>
                <a href="javascript:;" class="popup_login">立即登录</a>
                <a href="javascript:;" class="popup_forget">忘记密码</a>
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
                <div class="popup_input" style="margin-top: 70px;">
                    <span>手机号</span>
                    <input type="text">
                </div>
                <div class="popup_input">
                    <span>密&nbsp;&nbsp;&nbsp;码</span>
                    <input type="text" style="margin-left: 29px;">
                </div>

                <a href="#" class="zhuce">登录</a>
                <a href="javascript:;" class="popup_new" style="    width: 114px;margin-top: 43px;margin-left: 250px;display: inline-block;color: #000;font-size: 14px;border-right: 1px solid #777;">注册新账号</a>
                <a href="javascript:;" class="popup_forget">忘记密码</a>
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
    <div class="center">
        <p class="top_title">您现在的位置 | <a href="<?php echo url('Gov/index'); ?>">政府风貌</a> > | <span> 大事记 </span></p>
        <div class="head1">滑县产业聚集区发展历程</div>
        <style>
            .file_list_center {
                overflow: hidden;
                height: 500px;
            }
            .head1 {
                width: 100%;
                height: 80px;
                text-align: center;
                font: bold 20px/80px Arial,Verdana,"\5b8b\4f53";
            }
            .swiper-container p {
                width: 90%;
                margin:0 auto;
                height: 140px;
                overflow: hidden;
                text-align: center;
                font-size: 16px;
                line-height: 20px;
                margin-top: 20px;
            }
            .swiper-container img {
                width: 90%;
                height: 320px;
                text-align: top;
                display: block;
                margin: 0 auto;
            }
            .swiper-container {
                width: 930px;
                height: 500px;
            }
            .swiper-slide {
                background-repeat: no-repeat;
                background-position: center 170px;
                /*background-size: cover;*/
                width: 100%;
                height: 500px;
                background-size: 90% 310px;
            }
            .swiper-button-next,.swiper-button-prev {
                top: 68%;
            }
        </style>
        <div class="file_list">
            <div class="file_list_center">
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php if(is_array($events) || $events instanceof \think\Collection || $events instanceof \think\Paginator): $i = 0; $__LIST__ = $events;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <!-- <div class="swiper-slide" style="background-image:url('__IMG__<?php echo $vo['image']; ?>')"> -->
                            <div class="swiper-slide">
                                <p><?php echo $i; ?>、<?php echo $vo['description']; ?><br>----<?php echo $vo['title']; ?></p>
                                <img src="__IMG__<?php echo $vo['image']; ?>"/>
                            </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>

                        <div class="swiper-slide" style="background-image:url(__PUBLIC__/images/big_1.png)"><p>2018年年水电费健康时间放得开时空大家疯狂的健身房年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年----------滑县成立</p></div>
                        <div class="swiper-slide" style="background-image:url(__PUBLIC__/images/big_2.png)"><p>2019年年水电费健康时间放得开时空大家疯狂的健身房年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年----------滑县成立</p></div>
                        <div class="swiper-slide" style="background-image:url(__PUBLIC__/images/big_3.png)"><p>2010年年水电费健康时间放得开时空大家疯狂的健身房年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年年----------滑县成立</p></div>
                    </div>

                    <!-- Add Pagination -->
                   <!-- <div class="swiper-pagination"></div>-->

                    <!-- Add Arrows -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <!-- Swiper JS -->
                <script src="__PUBLIC__/js/swiper-4.2.2.min.js"></script>

                <!-- Initialize Swiper -->
                <script>
                    var mySwiper = new Swiper ('.swiper-container', {
                        loop: true,
                        autoplay: {
                            disableOnInteraction: false,//用户点击之后不停止自动轮播,true为用户点击后停止自动轮播
                            delay: 1500
                        },

                        effect: 'flip', //切换效果
                        grabCursor: true,
                        speed: 2000,  //滑块切换速度
                        // 如果需要分页器
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                            renderBullet: function (index, className) {
                                return '<span class="' + className + '">' + (index + 1) + '</span>';
                            },
                        },
                        // 如果需要前进后退按钮
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev'
                        },
                    })
                    $('.swiper-slide').mouseenter(function () {
                        mySwiper.autoplay.stop();
                    })
                    $('.swiper-slide').mouseleave(function () {
                        mySwiper.autoplay.start();
                    })
                </script>
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
                    <a href="##">网站首页</a><span>|</span>
                    <a href="##">供应服务</a><span>|</span>
                    <a href="##">新闻中心</a><span>|</span>
                    <a href="##">荣誉资质</a><span>|</span>
                    <a href="##">人才招聘</a><span>|</span>
                    <a href="##">联系方式</a><span>|</span>
                    <a href="##">举报</a>
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