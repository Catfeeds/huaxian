<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"E:\WWW\huaxian\public/../application/index\view\gov\index.html";i:1527587046;s:66:"E:\WWW\huaxian\public/../application/index\view\common\header.html";i:1527726933;s:66:"E:\WWW\huaxian\public/../application/index\view\common\footer.html";i:1527586945;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>政府风貌</title>
  <link rel="stylesheet" href="__PUBLIC__/css/base.css">
  <link rel="stylesheet" href="__PUBLIC__/css/swiper-4.2.2.min.css">
  <link rel="stylesheet" href="__PUBLIC__/css/governmentStyle.css">
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
    <div class="center">
      <div class="center_left_top">
        <img src="__IMG__<?php echo $detail['image']; ?>" alt="请重新加载">
        <a class="center_detail" href="<?php echo url('Gov/yuanqudetail'); ?>">进入详情 >>></a>
        <p><?php echo $detail['title']; ?></p>
      </div>
      <div class="center_right_top">
        <p class="top_text">党政领导<span><a href="<?php echo url('Gov/lst_leader'); ?>" style="color: #666;">更多>></a></span></p>
        <div class="center_right_detail">
          <img src="__IMG__<?php echo $leader['image']; ?>" alt="请重新加载">
          <p><?php echo $leader['name']; ?></p>
          <!-- <p>滑县县委副书记、县长</p> -->
          <p>领导分工：</p>
          <!-- <p>分管：财政局和人事局。</p> -->
          <p><?php echo $leader['work']; ?></p>
        </div>
      </div>
      <div class="center_left_bottom">
        <p class="top_text">政府文件<span><a href="<?php echo url('Gov/file'); ?>" style="color: #666;">更多>></a></span></p>
        <ul>
          <?php if(is_array($file) || $file instanceof \think\Collection || $file instanceof \think\Paginator): $i = 0; $__LIST__ = $file;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li><span><!-- <a href="<?php echo url('Gov/download',array('id'=>$vo['id'])); ?>" style="text-decoration: none !important;color: #333;"> --><?php echo $vo['file']; ?><!-- </a> --></span><a href="<?php echo url('Gov/filedetail',array('id'=>$vo['id'])); ?>">查看详情</a></li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
          <!-- <li><span>滑县产业扶贫加工基地金泰服装建设</span><a href="#">查看详情</a></li> -->
        </ul>
      </div>
      <div class="center_right_bottom">
        <div class="center_content">
          <div class="right_title">招商引资</div>
          <h1 style="height:46px;line-height: 46px;overflow: hidden;">滑县支持招商引资项招商引招商引招商引招商引</h1>
          <p>各乡（镇）人民政府，产业聚集区管理委员会，县人民政府各部门及有关单位:</p>
          <p>现将《滑县支持招商引资项目建设暂行办法》印发给你们，请认真参照执行。</p>
          <a href="<?php echo url('Gov/businessdetail'); ?>">点击查看详情</a>
        </div>
      </div>
    </div>
    <div class="big_title">
      <p>
        <span>滑县产业集聚区大事记</span>
      </p>
    </div>
    <div class="big_thing">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php if(is_array($events) || $events instanceof \think\Collection || $events instanceof \think\Paginator): $i = 0; $__LIST__ = $events;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
            <div class="swiper-slide">
              <a href="<?php echo url('Gov/eventsdetail'); ?>" style="color: #666;">
                <img src="__IMG__<?php echo $v1['image']; ?>" alt="请重新加载">
                <div class="slide_right">
                  <h2><?php echo $v1['title']; ?><!-- 18个村合并成"超级大社区" --></h2>
                  <p><?php echo $v1['description']; ?><!-- 省政府批准同意调整我县部分行政区规划————同意撤销道口镇、城关镇，设立道口镇街道办事处、城关镇街道办事处、同时，撤销四间房乡，设立四间房镇。 --></p>
                </div>
              </a>
            </div>
          <?php endforeach; endif; else: echo "" ;endif; ?>
          <!-- <div class="swiper-slide">
            <img src="images/governmentStyle4.jpg" alt="请重新加载">
            <div class="slide_right">
              <h2>18个村合并成"超级大社区"</h2>
              <p>省政府批准同意调整我县部分行政区规划————同意撤销道口镇、城关镇，设立道口镇街道办事处、城关镇街道办事处、同时，撤销四间房乡，设立四间房镇。</p>
            </div>
          </div> -->
        </div>
        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
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
  <script src="__PUBLIC__/js/jquery-3.3.1.js"></script>
  <script src="__PUBLIC__/js/swiper-4.2.2.min.js"></script>
  <script src="__PUBLIC__/js/governmentStyle.js"></script>
</html>