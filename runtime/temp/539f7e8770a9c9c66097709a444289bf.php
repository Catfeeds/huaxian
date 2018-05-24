<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"E:\WWW\huaxian\public/../application/index\view\work\lst_dianli.html";i:1526888794;s:66:"E:\WWW\huaxian\public/../application/index\view\common\header.html";i:1527069463;s:66:"E:\WWW\huaxian\public/../application/index\view\common\footer.html";i:1526031971;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>电力接入</title>
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
    <div class="wrap" style="padding:15px 0;"> 
        <div class="wgPower">
            <!-- 顶部面包屑导航 -->
            <div>
                <p class="top_title">您现在的位置 | <a href="<?php echo url('Work/index'); ?>">办事指南</a> > | <span> 电力接入 </span></p>
            </div>              
            <div class="wgPower_content">
                 <h2>—— 电力接入 ——</h2>
                 <h3>一、 申报材料</h3>
                     <?php echo $dianli['content']; ?>
                 <!-- <p>5、公司公章</p> -->
                 <h3>二、 地址</h3>  
                 <p><?php echo $dianli['address']; ?></p>  
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