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
    <div class="content" style="margin-right:0">
      <div class="fly-tab">
        <div class="layui-tab layui-tab-brief">
          <ul class="layui-tab-title">
            <li>
              <a href="/GetName/bbs">首页</a></li>
            <li class="layui-this">
              <a href="/jie/">全部帖</a></li>
            <li>
              <a href="/jie/unsolved/">未结帖</a></li>
            <li>
              <a href="/jie/solved/">已采纳</a></li>
            <li>
              <a href="/jie/wonderful/">精华帖</a></li>
            <li>
              <a href="/user/">我的帖</a></li>
          </ul>
        </div>
        <i class="layui-icon fly-search"></i></div>
      <ul class="fly-panel fly-list">
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
     
      <style type="text/css">
        .scc{
          padding-top: 30px;
          padding-bottom: 15px;
        }
        .scc a{
          padding: 8px 20px;
          border:1px solid #B5E61D;
          margin: 2px;
        }
        
        .scc .current{
          background: #22B14C;
          color: #fff;
           padding: 10px 20px;
          border:1px solid #B5E61D;
          margin: 2px;
        }




      </style>  

      <div class="scc" style="text-align: center">
     
          <?php echo $page; ?>
      
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