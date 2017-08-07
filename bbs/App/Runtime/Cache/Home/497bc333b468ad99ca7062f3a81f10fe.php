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



     <style type="text/css">
	.biaoti{
		width: 70%;
		height: 40px;
		/*background: green;*/
		margin: 0 auto;
		line-height: 45px;
		border-bottom: 1px solid #E2E2E2;

	}
	.layui-input{
		width: 43.5%;
		/*margin: 0 auto;*/
		height: 40px;
	}
	.layui-btn-primary{
		height: 40px;
		width: 80px;
		float: right;
		position: absolute;
		top: 0px;
		left: 37.5%;
	}
	.kuang{
		width: 70%;
		margin: 0 auto;
		position: relative;

	}
	.leirou{
		width: 70%;
		/*border: 1px solid #fff;*/
		height: 100px;
		/*display: none;*/
		text-overflow:ellipsis;
		overflow:hidden;
		white-space:nowrap;
		/*width:360px;*/
		margin:20px auto 0  auto;
		/*background: #fff;*/
		
	}
	.leirou h2{
		font-size: 20px;
		
	}
	.leirou h2 a{
		color: #001BA0;
	}
	.leirou h2 a:hover{
		text-decoration:underline

	}
	.b_attribution{
		color: green;
	}
	.layui-icon{
		line-height: 47px;
		font-size: 25px;
	}
</style>
<div >
	<form  action="<?php echo U('home/search/index');?> " method="get">
		<div class="kuang">
			<input type="text" name="q" lay-verify="required" placeholder="输入搜搜看" autocomplete="off" class="layui-input">
			<input class="layui-icon layui-btn layui-btn-radius layui-btn-primary" type="submit" value="&#xe615;">
		</div>
		<div class="biaoti">
			<h1>&nbsp;&nbsp;有关<strong><span style="color:red;"><?php echo $words; ?></span> </strong> 的全部帖子</h1>   

		</div> 
	</form>
	<?php foreach ($question as $row) { ?>
		<div class="leirou">
		<h2>
			<a target="_blank" href="<?php echo U('home/jie/index',array('id'=>$row['qid']));?>"><?php echo $row['title']; ?>
			</a>
		</h2>
		<p>
			<?php echo htmlspecialchars_decode($row['content']); ?>
		</p>
	</div>
<?php	} ?>
	
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