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
              <a href="<?php echo U('home/index/index');?>">
                首页
              </a>
            </li>
            <li>
              <a href="<?php echo U('home/index/all');?>">
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
        
        <?php foreach ($topQues as $row) { ?>
        <li class="fly-list-li">
          <a href="<?php echo U('home/u/index',array('id'=>$row['uid']));?>" class="fly-list-avatar">
            <img src="/GetName/bbs/<?php echo $row['face']; ?>" alt="<?php echo $row['nickname']; ?>">
          </a>
          <h2 class="fly-tip">
            <a href="<?php echo U('home/jie/index',array('id'=>$row['qid']));?>">
              <?php echo $row['title']; ?>
            </a>
            
             <?php if ($row['top']==1) { echo '<span class="fly-tip-stick">置顶</span>'; }elseif ($row['top']==2) { echo '<span class="fly-tip-jing">精华</span>'; } ?>
            
          </h2>
          <p>
            <span>
              <a href="<?php echo U('home/u/index',array('id'=>$row['uid']));?>">
                <?php echo $row['nickname']; ?>
              </a>
            </span>
            <span>
             <?php echo Ctime($row['create_time']); ?>
            </span>
            <span>
              <?php echo $row['cname']; ?>
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              <?php echo $row['answer_num']; ?>
              <i class="iconfont" title="人气">
                
              </i>
              <?php echo $row['view_num']; ?>
            </span>
          </p>
        </li>
      <?php  } ?>
       
       


      </ul>
      <ul class="fly-panel fly-list">
      

      <?php foreach ($question as $row) { ?>
        <li class="fly-list-li">
          <a href="<?php echo U('home/u/index',array('id'=>$row['uid']));?>" class="fly-list-avatar">
            <img src="/GetName/bbs/<?php echo $row['face']; ?>" alt="<?php echo $row['nickname']; ?>">
          </a>
          <h2 class="fly-tip">
            <a href="<?php echo U('home/jie/index',array('id'=>$row['qid']));?>">
              <?php echo $row['title']; ?>
            </a>
            <?php if($row['top']==1){ echo "<span class='fly-tip-stick'>置顶</span>"; }elseif($row['top']==2){ echo "<span class='fly-tip-jing'>精华</span>"; } ?>
          </h2>
          <p>
            <span>
              <a href="<?php echo U('home/u/index',array('id'=>$row['uid']));?>">
                <?php echo $row['nickname']; ?>
              </a>
            </span>
            <span>
              <?php echo Ctime($row['create_time']); ?>
            </span>
            <span>
              <?php echo $row['cname']; ?>
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              <?php echo $row['answer_num']; ?>
              <i class="iconfont" title="人气">
                
              </i>
              <?php echo $row['view_num']; ?>
            </span>
          </p>
        </li>
      <?php } ?>


      </ul>
      <div style="text-align: center">
        <div class="laypage-main">
          <a href="<?php echo U('home/index/all',array(p=>'2'));?>" class="laypage-next">
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
        <?php foreach ($hotuser as $row) { ?>
          <dd>
          <a href="<?php echo U('home/u/index',array('id'=>$row['uid']));?>">
            <img src="/GetName/bbs/<?php echo $row['face']; ?>">
            <cite>
              <?php echo $row['nickname']; ?>
            </cite>
            <i>
              <?php echo $row['answer_num']; ?>次回答
            </i>
          </a>
        </dd>
       <?php } ?>
        
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