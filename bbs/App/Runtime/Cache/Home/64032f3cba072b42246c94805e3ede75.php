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
    <li class="layui-nav-item layui-this">
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
    <li class="layui-nav-item ">
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
    <div class="layui-tab layui-tab-brief" lay-filter="user" id="LAY_uc">
      <div class="fly-msg">
        您的邮箱尚未验证，这比较影响您的帐号安全，
        <a href="/user/activate/">
          立即去激活？
        </a>
      </div>
      <ul class="layui-tab-title" id="LAY_mine">
        <li data-type="mine-jie" lay-id="index" class="layui-this">
          我发的帖（
          <span>
          <?php echo $num[0]['t1']; ?>
          </span>
          ）
        </li>
        <li data-type="collection" data-url="/collection/find/" lay-id="collection">
          我收藏的帖（
          <span>
            0
          </span>
          ）
        </li>
      </ul>
      <div class="layui-tab-content" id="LAY_ucm" style="padding: 20px 0;">
        <div class="layui-tab-item layui-show">
          <ul class="mine-view jie-row">
            <div class="fly-msg">
           <ul class="mine-view jie-row">
           <?php if (!$Ucard) { ?>
              <?php  echo "<div class=\"fly-msg\">没有相关数据</div>"; ?>  
           <?php }else{ ?>
              <?php foreach ($Ucard as $carde) { ?>
                <li>
                   <a class="jie-title" href="<?php echo U('home/jie/index',array('id'=>$carde['qid']));?>" target="_blank"><?php echo $carde['title']; ?></a>
                    <i><?php echo Ctime($carde['create_time']); ?></i>
                    <a class="mine-edit" href="<?php echo U('home/jie/edit',array('id'=>$carde['qid']));?>">编辑</a>
                    <em><?php echo $carde['view_num']; ?>/<?php echo $carde['answer_num']; ?></em>
                </li>
            <?php } ?>  
         <?php  } ?>
           </ul>
            </div>
          </ul>
          <div id="LAY_page">
          </div>
        </div>
        <div class="layui-tab-item">
          <ul class="mine-view jie-row">

            <div class="fly-msg">
              没有相关数据
            </div>
       

        <li>
          <a class="jie-title" href="/jie/12273/" target="_blank">铁证！做开发真的不好做女朋友</a>
          <i>收藏于刚刚</i>
        </li>




      </ul>
          <div id="LAY_page1">
          </div>
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
      //监听提交
      // form.on('submit(edit)', function(data){
        // $.ajax({
        //   url: '<?php echo U('home/set/edit');?>',
        //   type: 'POST',
        //   dataType: 'json',
        //   data: data.field,
        // })
        // .done(function(respones) {
        //       if (respones.error==1) {
        //       layer.msg(respones.info, function(){});
        //       }else{
        //       layer.alert(respones.info, {icon: 6},function(){
        //        location.reload();
        //        });
        //          console.log("error");
        //       };
        // })
        // .fail(function() {
          
      

        // return false;
        

      // });

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