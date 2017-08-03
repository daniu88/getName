<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>
      登入 - Fly社区
    </title>
    <link rel="stylesheet" href="//at.alicdn.com/t/font_mqhl04idhqx8byb9.css">
    <link rel="stylesheet" href="/GetName/bbs/Public/layui/css/layui.css">
    <link rel="stylesheet" href="/GetName/bbs/Public/css/global.css">
    <script src="/GetName/bbs/Public/layui/layui.js"></script>
  </head>
  
  <body>
    <div class="header">
      <div class="main">
        <a class="logo" href="/GetName/bbs" title="Fly">
          Fly社区
        </a>
        <div class="nav">
          <a href="/jie/">
            <i class="iconfont icon-wenda">
            </i>
            讨论
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
        <?php if (isset($_SESSION['uid'])) { ?>

          <div class="nav-user">
            <a class="avatar" href="<?php echo U('home/user/index');?>">
              <img src="/GetName/bbs/<?php echo $_SESSION['face'] ?>">
              <cite>
                <?php echo $_SESSION['nickname']; ?>
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




     <div class="main fly-user-main layui-clear">
  <ul class="layui-nav layui-nav-tree layui-inline" lay-filter="user">
    <li class="layui-nav-item">
      <a href="<?php echo U('home/u/index',array('id'=>$_SESSION['uid']));?>">
        <i class="layui-icon">
          
        </i>
        我的主页
      </a>
    </li>
    <li class="layui-nav-item ">
      <a href="<?php echo U('home/user/index');?>">
        <i class="layui-icon">
          
        </i>
        用户中心
      </a>
    </li>
    <li class="layui-nav-item ">
      <a href="<?php echo U('home/set/index');?>">
        <i class="layui-icon">
          
        </i>
        基本设置
      </a>
    </li>
    <li class="layui-nav-item layui-this">
      <a href="<?php echo U('home/news/index');?>">
        <i class="layui-icon">
          
        </i>
        我的消息
      </a>
    </li>
    <li class="layui-nav-item ">
      <a href="<?php echo U('home/clear/index');?>">
        <i class="layui-icon">
          
        </i>
        产品授权
      </a>
    </li>
    <span class="layui-nav-bar" style="height: 0px; top: 212.5px; opacity: 0;">
    </span>
  </ul>
  <div class="site-tree-mobile layui-hide">
    <i class="layui-icon">
      
    </i>
  </div>
  <div class="site-mobile-shade">
  </div>
  <div class="fly-panel fly-panel-user" pad20="">
    <div class="layui-tab layui-tab-brief" lay-filter="user" id="LAY_msg"
    style="margin-top: 15px;">
      <button class="layui-btn layui-btn-danger layui-hide" id="LAY_delallmsg">
        清空全部消息
      </button>
      <div id="LAY_minemsg" style="margin-top: 10px;">
        <div class="fly-none">
          您暂时没有最新消息
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  layui.use(['form','jquery','element'], function(){
      var form = layui.form();
      $ = layui.jquery;
      var element = layui.element();
        })
</script>




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