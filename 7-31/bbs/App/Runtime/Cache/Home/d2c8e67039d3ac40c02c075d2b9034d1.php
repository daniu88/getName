<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>
      注册 - Fly社区
    </title>
    <link rel="stylesheet" href="//at.alicdn.com/t/font_mqhl04idhqx8byb9.css">
    <link rel="stylesheet" href="/GetName/7-31/bbs/Public/layui/css/layui.css">
    <link rel="stylesheet" href="/GetName/7-31/bbs/Public/css/global.css">
    <script src="/GetName/7-31/bbs/Public/layui/layui.js"></script>
  </head>
  
  <body>
    <div class="header">
      <div class="main">
        <a class="logo" href="/GetName/7-31/bbs" title="Fly">
          Fly社区
        </a>
        <div class="nav">
          <a href="/jie/">
            <i class="iconfont icon-wenda">
            </i>
            讨论8888
          </a>
          <a href="/case/2017/">
            <i class="iconfont icon-iconmingxinganli" style="top: 2px;">
            </i>
            案例
          </a>
          <a href="http://www.layui.com/">
            <i class="iconfont icon-ui">
            </i>
            框架
          </a>
        </div>
        <?php if(isset($_SESSION['uid'])){ ?>
              <div class="nav-user">
                <a class="avatar" href="<?php echo U('home/user/index');?>">
                  <img src="/GetName/7-31/bbs/<?php echo $_SESSION['face'] ?>">
                  <cite>
                    <?php echo $_SESSION['nickname'] ?>
                  </cite>
                </a>
                <div class="nav">
                  <a href="<?php echo U('home/set/index');?>">
                    <i class="iconfont icon-shezhi">
                    </i>
                    设置
                  </a>
                  <a href="<?php echo U('home/login/logout');?>">
                    <i class="iconfont icon-tuichu" style="top: 0; font-size: 22px;">
                    </i>
                    退了
                  </a>
                </div>
              </div>
        <?php }else{ ?>
              <div class="nav-user">
                <a class="unlogin" href="/user/login/">
                  <i class="iconfont icon-touxiang">
                  </i>
                </a>
                <span>
                  <a href="<?php echo U('home/login/index');?>">
                    登入
                  </a>
                  <a href="<?php echo U('home/reg/index');?>">
                    注册
                  </a>
                </span>
                <p class="out-login">
                  <a href="http://fly.layui.com/app/qq" onclick="layer.msg('正在通过QQ登入', {icon:16, shade: 0.1, time:0})"
                  class="iconfont icon-qq" title="QQ登入">
                  </a>
                  <a href="http://fly.layui.com/app/weibo/" onclick="layer.msg('正在通过微博登入', {icon:16, shade: 0.1, time:0})"
                  class="iconfont icon-weibo" title="微博登入">
                  </a>
                </p>
              </div>
        <?php } ?>
        
        
      </div>
    </div>

    <div class="fly-home" style="background-image: url();">
    <img src="/GetName/7-31/bbs/<?php echo $user['face']; ?>" alt="冰凉冰凉">
    <h1>
        <?php echo $user['nickname']; ?>
        <i class="iconfont         ">
        </i>
    </h1>
    <p class="fly-home-info">
        <i class="iconfont icon-zuichun" title="飞吻">
        </i>
        <span style="color: #FF7200;">
            <?php echo $user['kiss']; ?>飞吻
        </span>
        <i class="iconfont icon-shijian">
        </i>
        <span>
            <?php echo Ctime($user['create_time']); ?> 加入
        </span>
        <i class="iconfont icon-chengshi">
        </i>
        <span>
            来自中国 <?php echo $user['city']; ?>
        </span>
    </p>
    <p class="fly-home-sign">
        <?php if($user['sign']) { ?>
            (<?php echo $user['sign']; ?>)
        <?php }else{ ?>
            （这个人懒得留下签名）
        <?php } ?>
        
    </p>
</div>
<div class="main fly-home-main">
    <div class="layui-inline fly-home-jie">
        <div class="fly-panel">
            <h3 class="fly-panel-title">
                冰凉冰凉 最近的提问
            </h3>
            <ul class="jie-row">
                <li>
                    <a href="/jie/12090/" class="jie-title">
                        问个问题，表单控件能获取到自定义的data-commentid这样的值吗
                    </a>
                    <i>
                        1天前
                    </i>
                    <em>
                        55阅/2答
                    </em>
                </li>
                <li>
                    <a href="/jie/5474/" class="jie-title">
                        layui会出layui手机移动版吗?
                    </a>
                    <i>
                        2016-11-29
                    </i>
                    <em>
                        386阅/2答
                    </em>
                </li>
            </ul>
        </div>
    </div>
    <div class="layui-inline fly-home-da">
        <div class="fly-panel">
            <h3 class="fly-panel-title">
                冰凉冰凉 最近的回答
            </h3>
            <ul class="home-jieda">
                <div class="fly-none" style="min-height: 50px; padding:30px 0; height:auto;">
                    <span>
                        没有回答任何问题
                    </span>
                </div>
            </ul>
        </div>
    </div>
</div>

    <div class="footer">
      <p>
        <a href="http://fly.layui.com/">
          Fly社区
        </a>
        2017 &copy;
        <a href="http://www.layui.com/">
          layui.com
        </a>
      </p>
      <p>
        <a href="http://fly.layui.com/jie/3147.html" target="_blank">
          产品授权
        </a>
        <a href="http://fly.layui.com/jie/8157.html" target="_blank">
          获取Fly社区模版
        </a>
        <a href="http://fly.layui.com/jie/2461.html" target="_blank">
          微信公众号
        </a>
      </p>
    </div>
  </body>

</html>