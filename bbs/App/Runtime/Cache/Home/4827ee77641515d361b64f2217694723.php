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
          <a href="/u/5828760/">
            <i class="layui-icon">
              &#xe609;
            </i>
            我的主页
          </a>
        </li>
        <li class="layui-nav-item ">
          <a href="/user/">
            <i class="layui-icon">
              &#xe612;
            </i>
            用户中心
          </a>
        </li>
        <li class="layui-nav-item layui-this">
          <a href="/user/set/">
            <i class="layui-icon">
              &#xe620;
            </i>
            基本设置
          </a>
        </li>
        <li class="layui-nav-item ">
          <a href="/user/message/">
            <i class="layui-icon">
              &#xe611;
            </i>
            我的消息
          </a>
        </li>
        <li class="layui-nav-item ">
          <a href="/auth/get/">
            <i class="layui-icon">
              &#xe61e;
            </i>
            产品授权
          </a>
        </li>
      </ul>
      <div class="site-tree-mobile layui-hide">
        <i class="layui-icon">
          &#xe602;
        </i>
      </div>
      <div class="site-mobile-shade">
      </div>
      <div class="fly-panel fly-panel-user" pad20>
        <div class="layui-tab layui-tab-brief" lay-filter="user">
          <ul class="layui-tab-title" id="LAY_mine">
            <li class="layui-this" lay-id="info">
              我的资料
            </li>
            <li lay-id="avatar">
              头像
            </li>
            <li lay-id="pass">
              密码
            </li>
            <li lay-id="bind">
              帐号绑定
            </li>
          </ul>
          <div class="layui-tab-content" style="padding: 20px 0;">
            <div class="layui-form layui-form-pane layui-tab-item layui-show">
              <form method="post">
                <div class="layui-form-item">
                  <label for="L_email" class="layui-form-label">
                    邮箱
                  </label>
                  <div class="layui-input-inline">
                    <input type="text" id="L_email" name="email" required lay-verify="email"
                    autocomplete="off" value="<?php echo $user['email'] ?>" class="layui-input">
                  </div>
                  <div class="layui-form-mid layui-word-aux">
                    如果您在邮箱已激活的情况下，变更了邮箱，需
                    <a href="/user/activate/" style="font-size: 12px; color: #4f99cf;">
                      重新验证邮箱
                    </a>
                    。
                  </div>
                </div>
                <div class="layui-form-item">
                  <label for="L_username" class="layui-form-label">
                    昵称
                  </label>
                  <div class="layui-input-inline">
                    <input type="text" id="L_username" name="username" required lay-verify="required"
                    autocomplete="off" value="<?php echo $user['nickname'] ?>" class="layui-input">
                  </div>
                  <div class="layui-inline">
                    <div class="layui-input-inline">
                      <input type="radio" name="sex" value="0" title="男">
                      <input type="radio" name="sex" value="1" title="女">
                    </div>
                  </div>
                </div>
                <div class="layui-form-item">
                  <label for="L_city" class="layui-form-label">
                    城市
                  </label>
                  <div class="layui-input-inline">
                    <input type="text" id="L_city" name="city" autocomplete="off" value="<?php echo $user['city']; ?>"
                    class="layui-input">
                  </div>
                </div>
                <div class="layui-form-item layui-form-text">
                  <label for="L_sign" class="layui-form-label">
                    签名
                  </label>
                  <div class="layui-input-block">
                    <textarea placeholder="随便写些什么刷下存在感" id="L_sign" name="sign" autocomplete="off"
                    class="layui-textarea" style="height: 80px;"><?php echo $user['sign'] ?></textarea>
                  </div>
                </div>
                <div class="layui-form-item">
                  <button class="layui-btn" key="set-mine" lay-filter="*" lay-submit>
                    确认修改
                  </button>
                </div>
            </div>
            <div class="layui-form layui-form-pane layui-tab-item">
              <div class="layui-form-item">
                <div class="avatar-add">
                  <p>
                    建议尺寸168*168，支持jpg、png、gif，最大不能超过30KB
                  </p>
                  <div class="upload-img">
                    <input type="file" name="file" id="LAY-file" lay-title="上传头像">
                  </div>
                  <img src="//q.qlogo.cn/qqapp/101235792/F8035B6808607A48E1CC361E88C01472/100">
                  <span class="loading">
                  </span>
                </div>
              </div>
            </div>
            <div class="layui-form layui-form-pane layui-tab-item">
              <form action="/user/repass" method="post">
                <div class="layui-form-item">
                  <label for="L_pass" class="layui-form-label">
                    新密码
                  </label>
                  <div class="layui-input-inline">
                    <input type="password" id="L_pass" name="pass" required lay-verify="required"
                    autocomplete="off" class="layui-input">
                  </div>
                  <div class="layui-form-mid layui-word-aux">
                    6到16个字符
                  </div>
                </div>
                <div class="layui-form-item">
                  <label for="L_repass" class="layui-form-label">
                    确认密码
                  </label>
                  <div class="layui-input-inline">
                    <input type="password" id="L_repass" name="repass" required lay-verify="required"
                    autocomplete="off" class="layui-input">
                  </div>
                </div>
                <div class="layui-form-item">
                  <button class="layui-btn" key="set-mine" lay-filter="*" lay-submit>
                    确认修改
                  </button>
                </div>
              </form>
            </div>
            <div class="layui-form layui-form-pane layui-tab-item">
              <ul class="app-bind">
                <li class="fly-msg  app-havebind">
                  <i class="iconfont icon-qq">
                  </i>
                  <span>
                    已成功绑定，您可以使用QQ帐号直接登录Fly社区，当然，您也可以
                  </span>
                  <a href="javascript:;" class="acc-unbind" type="qq_id">
                    解除绑定
                  </a>
                </li>
                <li class="fly-msg ">
                  <i class="iconfont icon-weibo">
                  </i>
                  <a href="http://fly.layui.com/app/weibo/" class="acc-weibo" type="weibo_id"
                  onclick="layer.msg('正在绑定微博', {icon:16, shade: 0.1, time:0})">
                    立即绑定
                  </a>
                  <span>
                    ，即可使用微博帐号登录Fly社区
                  </span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  <script>
    layui.use(['form','jquery','element'], function(){
      var form = layui.form();
      $ = layui.jquery;
      var element = layui.element();
      
      //监听提交
      form.on('submit(reg)', function(data){


      });

        
    });
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