<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>
      <?php echo $title; ?> - <?php echo C("SITE_NAME"); ?>
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
          <a href="<?php echo U('home/index/all');?>">
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
<?php ?>



     <div class="main layui-clear">
  <div class="fly-panel" pad20 style="padding-top: 5px;">
    <div class="layui-form-pane">
      <div class="layui-tab layui-tab-brief">
        <ul class="layui-tab-title">
          <li class="layui-this">发表新帖</li></ul>
        <div class="layui-form layui-tab-content" id="LAY_ucm" style="padding: 20px 0;">
          <div class="layui-tab-item layui-show">
            <form action="" method="post">
              <div class="layui-form-item">
                <label for="L_title" class="layui-form-label">标题</label>
                <div class="layui-input-block">
                  <input type="text" id="L_title" name="title" required lay-verify="xbstitle" autocomplete="off" class="layui-input"></div>
              </div>
              <div class="layui-form-item layui-form-text">
                <div class="layui-input-block">
                  <textarea id="L_content" name="content" required  placeholder="请输入内容" class="layui-textarea fly-editor" style="height: 260px;"></textarea>
                </div>
                <label for="L_content" class="layui-form-label" style="top: -2px;">描述</label></div>
              <div class="layui-form-item">
                <div class="layui-inline">
                  <label class="layui-form-label">所在类别</label>
                  <div class="layui-input-block">
                    <select lay-verify="required" name="cid">
                      <option></option>

                      <?php foreach ($category as $father) { ?>
                      
                      <optgroup label="<?php echo $father['cname'] ?>">
                          <?php foreach ($father['son'] as $son) { ?>
                              <option value="<?php echo $son['cid'] ?>"><?php echo $son['cname'] ?></option>
                          <?php } ?>
                      </optgroup>

                      <?php } ?>

                        
                    </select>
                  </div>
                </div>
                <div class="layui-inline">
                  <label class="layui-form-label">悬赏飞吻</label>
                  <div class="layui-input-block">
                    <select name="kiss">
                      <option value="5">5</option>
                      <option value="20">20</option>
                      <option value="50">50</option>
                      <option value="100">100</option></select>
                  </div>
                </div>
              </div>
              <div class="layui-form-item">
                <label for="L_vercode" class="layui-form-label">人类验证</label>
                <div class="layui-input-inline">
                  <input type="text" id="L_vercode" name="vercode" required lay-verify="required" placeholder="请回答后面的问题" autocomplete="off" class="layui-input"></div>
                <div class="layui-form-mid">
                  <span style="color: #c00;"><?php echo $question ?></span></div>
              </div>
              <div class="layui-form-item">
                <button class="layui-btn" lay-filter="add" lay-submit>立即发布</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    layui.use(['form','jquery','layedit'], function(){
      var form = layui.form();
      $ = layui.jquery;
      var layedit = layui.layedit;

      layedit.set({
        uploadImage: {
          url: '<?php echo U('home/jie/upload');?>' //接口url
          ,type: '' //默认post
        }
      });

      index = layedit.build('L_content'); //建立编辑器

      //自定义验证规则
      form.verify({
        xbstitle: function(value){
          if(value.length < 5){
            return '标题至少得5个字符啊';
          }
        }
      });
      
      //监听提交
      form.on('submit(add)', function(data){
       
        data.field.content = layedit.getContent(index);
        // // layer.msg(JSON.stringify(data.field));

        $.ajax({
          url: '<?php echo U('home/jie/ajaxadd');?>',
          type: 'POST',
          dataType: 'json',
          data: data.field,
        })
        .done(function(res) {
           if(res.error==1){
              layer.msg(res.info,function(){});
           }else{
              layer.alert(res.info, {icon: 6},function(){
                  location.href=res.url;
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