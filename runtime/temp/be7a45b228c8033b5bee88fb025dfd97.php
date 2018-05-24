<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"E:\WWW\huaxian\public/../application/index\view\gov\yuanqudetail.html";i:1526884637;s:66:"E:\WWW\huaxian\public/../application/index\view\common\header.html";i:1526371372;s:66:"E:\WWW\huaxian\public/../application/index\view\common\footer.html";i:1526031971;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>园区详情</title>
  <link rel="stylesheet" href="__PUBLIC__/css/base.css">
  <link rel="stylesheet" href="__PUBLIC__/css/fileDownloadDetail.css">
</head>
<body>
  <!-- 引用公共头部 -->
    <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    
    
    
    <title>baseHead</title>
</head>
<body> -->
    <script src="__PUBLIC__/js/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="__PUBLIC__/css/base-base.css">
    <script src="__PUBLIC__/js/base.js"></script>
    <div class="wrap">
        <!--base头部开始-->
        <div class="top">
            <div class="top-login">
                <div class="right">
                    <a href="##">登录</a>
                    <span>|</span>
                    <a href="##">注册</a>
                </div>
            </div>
            <div class="top-center">
                <img src="__PUBLIC__/images/logo.png" alt="" class="left">
                <div class="right">
                    <input class="left" placeholder="搜索文件、政策、新闻" type="search" name="" id="">
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
                    <li style="padding-left: 0; width: 170px"><a href="<?php echo url('Call/call'); ?>">联系我们</a></li>
                </ul>
            </div>
        </div>
    </div>
<!-- </body> -->
<!-- </html> -->
  <div class="wrap">
    <div class="center">
      <p class="top_title">您现在的位置 | <a href="<?php echo url('Gov/index'); ?>">政府风貌</a> > | <span> 园区详情 </span></p>
      <!-- <div class="download_button">
        <a href="#">
          <img src="__PUBLIC__/images/download1.png" alt="请重新加载">
          点击下载
        </a>
      </div> -->
      <div class="content">
        <?php echo $detail['content']; ?>
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