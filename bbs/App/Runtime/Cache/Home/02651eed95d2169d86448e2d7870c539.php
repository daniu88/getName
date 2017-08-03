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
    <li class="layui-nav-item ">
      <a href="<?php echo U('home/news/index');?>">
        <i class="layui-icon">
          
        </i>
        我的消息
      </a>
    </li>
    <li class="layui-nav-item layui-this">
      <a href="<?php echo U('home/clear/index');?>">
        <i class="layui-icon">
          
        </i>
        产品授权
      </a>
    </li>
    <span class="layui-nav-bar" style="top: 212.5px; height: 0px; opacity: 0;">
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
    <div class="layui-tab layui-tab-brief" lay-filter="user">
      <ul class="layui-tab-title">
        <li class="layui-this" lay-id="apply">
          申请授权
        </li>
        <li lay-id="awarded">
          已获授权
        </li>
      </ul>
      <div class="layui-form layui-tab-content" id="LAY_ucm" style="padding: 20px 0;">
        <div class="layui-tab-item layui-show">
          <form method="post">
            <div class="layui-form-item">
              <label class="layui-form-label">
                授权产品：
              </label>
              <div class="layui-input-inline">
                <select name="authProduct">
                  <option value="vip">
                    提升VIP
                  </option>
                  <option value="layim">
                    LayIM官方版
                  </option>
                  <option value="laychat">
                    LayChat合作通用版
                  </option>
                  <option value="laylive">
                    LayLive合作客服版
                  </option>
                </select>
                <div class="layui-unselect layui-form-select">
                  <div class="layui-select-title">
                    <input type="text" placeholder="提升VIP" value="提升VIP" readonly="" class="layui-input layui-unselect">
                    <i class="layui-edge">
                    </i>
                  </div>
                  <dl class="layui-anim layui-anim-upbit">
                    <dd lay-value="vip" class="layui-this">
                      提升VIP
                    </dd>
                    <dd lay-value="layim" class="">
                      LayIM官方版
                    </dd>
                    <dd lay-value="laychat" class="">
                      LayChat合作通用版
                    </dd>
                    <dd lay-value="laylive" class="">
                      LayLive合作客服版
                    </dd>
                  </dl>
                </div>
              </div>
              <div class="layui-form-mid">
                <a href="http://fly.layui.com/jie/3147.html" target="_blank">
                  <i title="帮助" id="LAY_authHelp" class="layui-icon" style="cursor: pointer; color: #393D49; font-size: 16px;">
                    
                  </i>
                </a>
              </div>
            </div>
            <div class="layui-form-item">
              <label for="L_rmb" class="layui-form-label">
                已付金额：
              </label>
              <div class="layui-input-inline">
                <input type="text" id="L_rmb" name="rmb" required="" lay-verify="required"
                placeholder="￥" autocomplete="off" class="layui-input">
              </div>
            </div>
            <div class="layui-form-item layui-form-text">
              <label for="L_authDesc" class="layui-form-label">
                付费证明：
              </label>
              <div class="layui-input-block">
                <div class="layui-unselect fly-edit">
                  <span type="face" title="插入表情">
                    <i class="iconfont icon-yxj-expression" style="top: 1px;">
                    </i>
                  </span>
                  <span type="picture" title="插入图片：img[src]">
                    <i class="iconfont icon-tupian">
                    </i>
                  </span>
                  <span type="href" title="超链接格式：a(href)[text]">
                    <i class="iconfont icon-lianjie">
                    </i>
                  </span>
                  <span type="code" title="插入代码或引用">
                    <i class="iconfont icon-emwdaima" style="top: 1px;">
                    </i>
                  </span>
                  <span type="hr" title="插入水平线">
                    hr
                  </span>
                  <span type="yulan" title="预览">
                    <i class="iconfont icon-yulan1">
                    </i>
                  </span>
                </div>
                <textarea id="L_authDesc" name="authDesc" required="" lay-verify="required"
                placeholder="付费截图或支付宝/微信昵称" class="layui-textarea fly-editor" style="height: 150px;">
                </textarea>
              </div>
            </div>
            <div class="layui-form-item">
              <label for="L_vercode" class="layui-form-label">
                人类验证：
              </label>
              <div class="layui-input-inline">
                <input type="text" id="L_vercode" name="vercode" required="" lay-verify="required"
                placeholder="请回答后面的问题" autocomplete="off" class="layui-input">
              </div>
              <div class="layui-form-mid">
                <span style="color: #c00;">
                  0加92等于几？
                </span>
              </div>
            </div>
            <div class="layui-form-item">
              <div class="layui-input-block">
                <button class="layui-btn" alert="1" lay-filter="*" lay-submit="">
                  提交授权
                </button>
              </div>
            </div>
          </form>
        </div>
        <div class="layui-tab-item">
          <blockquote class="layui-elem-quote">
            您尚未获得任何授权
          </blockquote>
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