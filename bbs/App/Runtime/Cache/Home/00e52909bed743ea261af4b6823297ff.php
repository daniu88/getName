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




       <div class="main layui-clear">
  <div class="wrap">
    <div class="content">
      <div class="fly-tab">
        <div class="layui-tab layui-tab-brief">
          <ul class="layui-tab-title">
            <li class="layui-this">
              <a href="/">
                首页
              </a>
            </li>
            <li>
              <a href="/jie/">
                全部帖
              </a>
            </li>
            <li>
              <a href="/jie/unsolved/">
                未结帖
              </a>
            </li>
            <li>
              <a href="<?php echo U('home/solved/index');?>">
                已采纳
              </a>
            </li>
            <li>
              <a href="<?php echo U('home/wonderful/index');?>">
                精华帖
              </a>
            </li>
            <li>
              <a href="<?php echo U('home/user/index');?>">
                我的帖
              </a>
            </li>
          </ul>
        </div>
        <i class="layui-icon fly-search">
          
        </i>
      </div>
      <ul class="fly-panel fly-list fly-list-top">
        <li class="fly-list-li">
          <a href="/u/168" class="fly-list-avatar">
            <img src="//cdn.layui.com/avatar/168.jpg?t=1490352249902" alt="贤心">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/12031/">
              请勿将 layui 2.0 的新增组件提前挖出来公开分享
            </a>
            <span class="fly-tip-stick">
              置顶
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/168">
                贤心
              </a>
            </span>
            <span>
              4天前
            </span>
            <span>
              官方公告
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              36
              <i class="iconfont" title="人气">
                
              </i>
              3042
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/168" class="fly-list-avatar">
            <img src="//cdn.layui.com/avatar/168.jpg?t=1490352249902" alt="贤心">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11996/">
              即日起，【案例】必须符合以下要求
            </a>
            <span class="fly-tip-stick">
              置顶
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/168">
                贤心
              </a>
            </span>
            <span>
              5天前
            </span>
            <span>
              官方公告
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              24
              <i class="iconfont" title="人气">
                
              </i>
              2377
            </span>
          </p>
        </li>
      </ul>
      <ul class="fly-panel fly-list">
        <li class="fly-list-li">
          <a href="/u/1355424" class="fly-list-avatar">
            <img src="/avatar/1355424.gif" alt="笨小孩333">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/12126/">
              问一个题外话，关于PHP post发送数据的问题，谢谢
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/1355424">
                笨小孩333
              </a>
            </span>
            <span>
              8小时前
            </span>
            <span>
              技术闲谈
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              1
              <i class="iconfont" title="人气">
                
              </i>
              31
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5385240" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/68174754F82E99604FA77AAEEC053DBA/100"
            alt="灰太狼642">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/12125/">
              用PHP如何接受这个登录信息？我的代码接受不到！
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/5385240">
                灰太狼642
              </a>
            </span>
            <span>
              10小时前
            </span>
            <span>
              layui
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              5
              <i class="iconfont" title="人气">
                
              </i>
              48
            </span>
          </p>
        </li>
      </ul>
      <div style="text-align: center">
        <div class="laypage-main">
          <a href="/jie/page/2/" class="laypage-next">
            更多求解
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="edge">
    <div class="jie-add">
      <a href="<?php echo U('home/jie/add');?>" class="layui-btn layui-btn-big">
        发表新帖
      </a>
      <a href="javascript:layer.msg('尚未开放');" class="layui-btn layui-btn-big layui-btn-normal"
      style="margin-left: 10px;">
        共享组件
      </a>
    </div>
    <div class="fly-panel leifeng-rank">
      <h3 class="fly-panel-title">
        回答月榜
      </h3>
      <dl>
        <dd>
          <a href="/u/846384">
            <img src="http://q.qlogo.cn/qqapp/101235792/877A59408D28490522A54BB9FD46CE9D/100">
            <cite>
              艾大叔是土匪
            </cite>
            <i>
              97次回答
            </i>
          </a>
        </dd>
        
      </dl>
    </div>
   
   
    <dl class="fly-panel fly-list-one">
      <dt class="fly-panel-title">
        近期热议
      </dt>

       <?php foreach ($hotQues as $res) { ?>
      <dd>
        <a href="<?php echo U('home/jie/index',array('id'=>$res['qid']));?>"><?php echo $res['title']; ?></a>
        <span>
          <i class="iconfont"></i><?php echo $res['answer_num']; ?></span>
      </dd>
      <?php } ?>
      
    </dl>
    <div class="fly-panel fly-link">
      <h3 class="fly-panel-title">
        友情链接
      </h3>
      <dl>
        <dd>
          <a href="http://layim.layui.com/" target="_blank">
            WebIM
          </a>
        </dd>
        <dd>
        </dd>
        <dd>
          <a href="http://layer.layui.com/" target="_blank">
            layer
          </a>
        </dd>
        <dd>
        </dd>
        <dd>
          <a href="http://www.bejson.com/" target="_blank">
            JSON在线工具
          </a>
        </dd>
        <dd>
        </dd>
        <dd>
          <a href="http://www.smeoa.com/" target="_blank">
            小微OA
          </a>
        </dd>
        <dd>
        </dd>
        <dd>
          <a href="http://www.fineui.com/" target="_blank">
            FineUI开源控件
          </a>
        </dd>
        <dd>
        </dd>
      </dl>
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