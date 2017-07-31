<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>
      注册 - Fly社区
    </title>
    <link rel="stylesheet" href="//at.alicdn.com/t/font_mqhl04idhqx8byb9.css">
    <link rel="stylesheet" href="/P201703/bbs/Public/layui/css/layui.css">
    <link rel="stylesheet" href="/P201703/bbs/Public/css/global.css">
    <script src="/P201703/bbs/Public/layui/layui.js"></script>
  </head>
  
  <body>
    <div class="header">
      <div class="main">
        <a class="logo" href="/P201703/bbs" title="Fly">
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
                  <img src="/P201703/bbs/<?php echo $_SESSION['face'] ?>">
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

    <div class="main layui-clear">
  <div class="fly-panel fly-panel-user" pad20>
    <div class="layui-tab layui-tab-brief" lay-filter="user">
      <ul class="layui-tab-title">
        <li class="layui-this">
          登入
        </li>
        <li>
          <a href="<?php echo U('home/reg/index');?>">
            注册
          </a>
        </li>
      </ul>
      <div class="layui-form layui-tab-content" id="LAY_ucm" style="padding: 20px 0;">
        <div class="layui-tab-item layui-show">
          <div class="layui-form layui-form-pane">
            <form method="post">
              <div class="layui-form-item">
                <label for="L_email" class="layui-form-label">
                  邮箱
                </label>
                <div class="layui-input-inline">
                  <input type="text" id="L_email" name="email" required lay-verify="required"
                  autocomplete="off" class="layui-input">
                </div>
              </div>
              <div class="layui-form-item">
                <label for="L_pass" class="layui-form-label">
                  密码
                </label>
                <div class="layui-input-inline">
                  <input type="password" id="L_pass" name="password" required lay-verify="required"
                  autocomplete="off" class="layui-input">
                </div>
              </div>
              <div class="layui-form-item">
                <label for="L_vercode" class="layui-form-label">
                  人类验证
                </label>
                <div class="layui-input-inline">
                  <input type="text" id="L_vercode" name="vercode" required lay-verify="required"
                  placeholder="请回答后面的问题" autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid">
                  <span style="color: #c00;">
                    <?php echo $question; ?>
                  </span>
                </div>
              </div>
              <div class="layui-form-item">
                <button class="layui-btn" lay-filter="login" lay-submit>
                  立即登录
                </button>
                <span style="padding-left:20px;">
                  <a href="/user/forget">
                    忘记密码？
                  </a>
                </span>
              </div>
              <div class="layui-form-item fly-form-app">
                <span>
                  或者使用社交账号登入
                </span>
                <a href="http://fly.layui.com/app/qq" onclick="layer.msg('正在通过QQ登入', {icon:16, shade: 0.1, time:0})"
                class="iconfont icon-qq" title="QQ登入">
                </a>
                <a href="http://fly.layui.com/app/weibo/" onclick="layer.msg('正在通过微博登入', {icon:16, shade: 0.1, time:0})"
                class="iconfont icon-weibo" title="微博登入">
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    layui.use(['form','jquery'], function(){
      var form = layui.form();
      $ = layui.jquery;
      
      //监听提交
      form.on('submit(login)', function(data){

        $.ajax({
          url: '<?php echo U('home/login/checkdata');?>',
          type: 'POST',
          dataType: 'json',
          data: data.field,
        })
        .done(function(res) {
           if(res.error==1){
              layer.msg(res.info,function(){});
           }else{
              layer.alert(res.info, {icon: 6},function(){
                  location.href="<?php echo U('home/set/index');?>";
              });
           }
        })
        .fail(function() {
          console.log("error");
        })

        return false;

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
  </body>

</html>