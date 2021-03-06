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
        <a class="logo" href="<?php echo U('home/index/index');?>" title="Fly">
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
  <div class="wrap">
    <div class="content" style="margin-right:0">
      <div class="fly-tab">
        <div class="layui-tab layui-tab-brief">
          <ul class="layui-tab-title">
            <li>
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
            <li class="layui-this">
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
      <ul class="fly-panel fly-list">
        <li class="fly-list-li">
          <a href="/u/2493120" class="fly-list-avatar">
            <img src="/avatar/2493120.png" alt="易墨">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11843/">
              layui中使用autocomplete.js踩坑记录
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/2493120">
                易墨
              </a>
            </span>
            <span>
              11天前
            </span>
            <span>
              技术闲谈
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              4
              <i class="iconfont" title="人气">
                
              </i>
              324
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/3387384" class="fly-list-avatar">
            <img src="//cdn.layui.com/avatar/3387384.jpg?t=1495017160526" alt="Esofar">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11641/">
              [开源]Elight.MVC 一款基于Web的通用管理系统轻量级解决方案
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/3387384">
                Esofar
              </a>
            </span>
            <span>
              18天前
            </span>
            <span>
              layui
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              17
              <i class="iconfont" title="人气">
                
              </i>
              1248
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5497296" class="fly-list-avatar">
            <img src="//res.layui.com/images/fly/avatar/10.jpg" alt="jack1986">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11585/">
              layui2.0的停摆，看似偶然，其实必然！！
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/5497296">
                jack1986
              </a>
            </span>
            <span>
              20天前
            </span>
            <span>
              layui
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              34
              <i class="iconfont" title="人气">
                
              </i>
              2969
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5612712" class="fly-list-avatar">
            <img src="//res.layui.com/images/fly/avatar/10.jpg" alt="erdangjiade">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11578/">
              感谢Fly社区模板 本人用PHP实现了一个较完整CMS系统和商城系统
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/5612712">
                erdangjiade
              </a>
            </span>
            <span>
              20天前
            </span>
            <span>
              技术闲谈
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              5
              <i class="iconfont" title="人气">
                
              </i>
              904
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/4867968" class="fly-list-avatar">
            <img src="//cdn.layui.com/avatar/4867968.jpg?t=1498616774119" alt="Gods_巨蚁">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11549/">
              感谢Fly社区模板 本人用Java实现了一个较完整社区
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/4867968">
                Gods_巨蚁
              </a>
            </span>
            <span>
              21天前
            </span>
            <span>
              技术闲谈
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              7
              <i class="iconfont" title="人气">
                
              </i>
              840
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/3656688" class="fly-list-avatar">
            <img src="http://q.qlogo.cn/qqapp/101235792/679B2253EBC156D8C57BE08666BFC87A/100"
            alt="SuperMan1992">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11505/">
              关于看到的对于2.0的话题，我也想说几句
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/3656688">
                SuperMan1992
              </a>
            </span>
            <span>
              24天前
            </span>
            <span>
              技术闲谈
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              9
              <i class="iconfont" title="人气">
                
              </i>
              1039
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/4789512" class="fly-list-avatar">
            <img src="//cdn.layui.com/avatar/4789512.jpg?t=1499677666982" alt="下划线加点">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11500/">
              使用asp.net mvc+sqlserver编写的仿fly社区的开源代码共享
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/4789512">
                下划线加点
              </a>
            </span>
            <span>
              24天前
            </span>
            <span>
              技术闲谈
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              3
              <i class="iconfont" title="人气">
                
              </i>
              424
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/4408320" class="fly-list-avatar">
            <img src="//res.layui.com/images/fly/avatar/0.jpg" alt="誓yi個人">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11489/">
              忍不住，想说两句关于2.0（个人观点，不当请指正，勿喷或轻喷）
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/4408320">
                誓yi個人
              </a>
            </span>
            <span>
              24天前
            </span>
            <span>
              layui
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              31
              <i class="iconfont" title="人气">
                
              </i>
              1477
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5497296" class="fly-list-avatar">
            <img src="//res.layui.com/images/fly/avatar/10.jpg" alt="jack1986">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11442/">
              FLY社区玩票的太多，这样不利于一个框架的成长！！
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/5497296">
                jack1986
              </a>
            </span>
            <span>
              25天前
            </span>
            <span>
              layui
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              15
              <i class="iconfont" title="人气">
                
              </i>
              827
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/4058880" class="fly-list-avatar">
            <img src="http://q.qlogo.cn/qqapp/101235792/E5848A98C60CB32EBDDEC8C98582FEF2/100"
            alt="智佳思远">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11407/">
              整天追问2.0的网友，请设身处地的为他人考虑一下
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/4058880">
                智佳思远
              </a>
            </span>
            <span>
              26天前
            </span>
            <span>
              技术闲谈
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              9
              <i class="iconfont" title="人气">
                
              </i>
              1010
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/2366616" class="fly-list-avatar">
            <img src="http://q.qlogo.cn/qqapp/101235792/35D07D5C3C19F5377E455DC1D5EA5445/100"
            alt="尹瑾柱-小微OA">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11314/">
              通过异步加载js 完美解决调用第三方jQuery插件
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/2366616">
                尹瑾柱-小微OA
              </a>
            </span>
            <span>
              2017-06-30
            </span>
            <span>
              layui
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              2
              <i class="iconfont" title="人气">
                
              </i>
              418
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/2471952" class="fly-list-avatar">
            <img src="//cdn.layui.com/avatar/2471952.jpg?t=1491054187034" alt="潜心">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11313/">
              前方战报！请耐心等待layui2.0
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/2471952">
                潜心
              </a>
            </span>
            <span>
              2017-06-30
            </span>
            <span>
              layui
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              23
              <i class="iconfont" title="人气">
                
              </i>
              1958
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/3279360" class="fly-list-avatar">
            <img src="//cdn.layui.com/avatar/3279360.jpg?t=1497163630907" alt="蛮族之王">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11293/">
              6月30号我就辞职了，写给layui
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/3279360">
                蛮族之王
              </a>
            </span>
            <span>
              2017-06-30
            </span>
            <span>
              layui
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              6
              <i class="iconfont" title="人气">
                
              </i>
              1725
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5461512" class="fly-list-avatar">
            <img src="//cdn.layui.com/avatar/5461512.gif?t=1498729698104" alt="李满满">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11259/">
              Layui完美加载第三方jQuery插件的正确姿势
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/5461512">
                李满满
              </a>
            </span>
            <span>
              2017-06-29
            </span>
            <span>
              layui
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              9
              <i class="iconfont" title="人气">
                
              </i>
              1970
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/2989056" class="fly-list-avatar">
            <img src="http://res.layui.com/images/fly/avatar/0.jpg" alt="夏羽天">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11172/">
              分享一个layui风格的grid、treegrid
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/2989056">
                夏羽天
              </a>
            </span>
            <span>
              2017-06-27
            </span>
            <span>
              layui
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              20
              <i class="iconfont" title="人气">
                
              </i>
              3431
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/924000" class="fly-list-avatar">
            <img src="http://res.layui.com/images/fly/avatar/8.jpg" alt="dht_shark">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11090/">
              给2.0一些期待
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/924000">
                dht_shark
              </a>
            </span>
            <span>
              2017-06-23
            </span>
            <span>
              layui
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              14
              <i class="iconfont" title="人气">
                
              </i>
              1289
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/3198216" class="fly-list-avatar">
            <img src="//cdn.layui.com/avatar/3198216.jpg?t=1498050138416" alt="驊驊龔頾">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11049/">
              完全基于 layui 开发的后台管理模板
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/3198216">
                驊驊龔頾
              </a>
            </span>
            <span>
              2017-06-21
            </span>
            <span>
              layui
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              47
              <i class="iconfont" title="人气">
                
              </i>
              5551
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/3656688" class="fly-list-avatar">
            <img src="http://q.qlogo.cn/qqapp/101235792/679B2253EBC156D8C57BE08666BFC87A/100"
            alt="SuperMan1992">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11046/">
              麻烦朋友们投个票呗，FLY社区模板+thinkphp5驱动+个人DIY
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/3656688">
                SuperMan1992
              </a>
            </span>
            <span>
              2017-06-21
            </span>
            <span>
              layui
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              4
              <i class="iconfont" title="人气">
                
              </i>
              756
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/4687872" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/369FA4BFEB2C9AFD7775E10FE3B5C2F7/100"
            alt="防腐基">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/10961/">
              心姐，求提前公布2.0发布时间，代表广大layui脑残粉的呼声！
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/4687872">
                防腐基
              </a>
            </span>
            <span>
              2017-06-17
            </span>
            <span>
              layui
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              27
              <i class="iconfont" title="人气">
                
              </i>
              2463
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/3470712" class="fly-list-avatar">
            <img src="http://q.qlogo.cn/qqapp/101235792/E964C14980C1B9B69A1627108464EE57/100"
            alt="Templet360">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/10814/">
              layui+Thinkphp5实现QQ互联一键登录代码教程
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/3470712">
                Templet360
              </a>
            </span>
            <span>
              2017-06-13
            </span>
            <span>
              技术闲谈
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              0
              <i class="iconfont" title="人气">
                
              </i>
              733
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/1216152" class="fly-list-avatar">
            <img src="/avatar/1216152.jpg" alt="php菜鸟">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/10757/">
              基于layui+thinkphp3.2.3的极速后台开发框架cnadmin
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/1216152">
                php菜鸟
              </a>
            </span>
            <span>
              2017-06-11
            </span>
            <span>
              layui
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              3
              <i class="iconfont" title="人气">
                
              </i>
              1048
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/3279360" class="fly-list-avatar">
            <img src="//cdn.layui.com/avatar/3279360.jpg?t=1497163630907" alt="蛮族之王">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/10753/">
              myHome后台管理框架（纯html）
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/3279360">
                蛮族之王
              </a>
            </span>
            <span>
              2017-06-11
            </span>
            <span>
              layui
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              6
              <i class="iconfont" title="人气">
                
              </i>
              1573
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/406728" class="fly-list-avatar">
            <img src="http://q.qlogo.cn/qqapp/101235792/261AD0DB53DBA5A11069F21B214FDC89/100"
            alt="夜风">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/10547/">
              基于Layui前端框架的jPHP博客系统
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/406728">
                夜风
              </a>
            </span>
            <span>
              2017-06-04
            </span>
            <span>
              技术闲谈
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              6
              <i class="iconfont" title="人气">
                
              </i>
              1694
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/109200" class="fly-list-avatar">
            <img src="http://q.qlogo.cn/qqapp/101235792/5BAD5EBBDBBA45FC5166AD2CD0C785EC/100"
            alt="larry">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/10428/">
              基于Layui的后台管理模板LarryCMS V01_UTF8_1.09 ( iframe版 )更新
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/109200">
                larry
              </a>
            </span>
            <span>
              2017-05-31
            </span>
            <span>
              layui
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              18
              <i class="iconfont" title="人气">
                
              </i>
              6293
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/4029984" class="fly-list-avatar">
            <img src="http://q.qlogo.cn/qqapp/101235792/AB6DD88B4455640C81E8EA58BB43C736/100"
            alt="东南戏北">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/10285/">
              用layui做管理后台的请进
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/4029984">
                东南戏北
              </a>
            </span>
            <span>
              2017-05-23
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
              1871
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/2933112" class="fly-list-avatar">
            <img src="/avatar/2933112.png" alt="vip_admin">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/10227/">
              vip-admin Html v1.7.0 更新了 - 基于layui的后台模板
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/2933112">
                vip_admin
              </a>
            </span>
            <span>
              2017-05-22
            </span>
            <span>
              技术闲谈
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              8
              <i class="iconfont" title="人气">
                
              </i>
              1999
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/3656688" class="fly-list-avatar">
            <img src="http://q.qlogo.cn/qqapp/101235792/679B2253EBC156D8C57BE08666BFC87A/100"
            alt="SuperMan1992">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/10218/">
              fly社区的模板，thinkphp5驱动 0.0 见笑
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/3656688">
                SuperMan1992
              </a>
            </span>
            <span>
              2017-05-21
            </span>
            <span>
              技术闲谈
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              2
              <i class="iconfont" title="人气">
                
              </i>
              367
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/4900728" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/D9887186BBF7E142734DBB01D1050DF7/100"
            alt="Bet虚拟云">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/10201/">
              P8OS PHP全能环境面板
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/4900728">
                Bet虚拟云
              </a>
            </span>
            <span>
              2017-05-20
            </span>
            <span>
              技术闲谈
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              2
              <i class="iconfont" title="人气">
                
              </i>
              978
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/3387384" class="fly-list-avatar">
            <img src="//cdn.layui.com/avatar/3387384.jpg?t=1495017160526" alt="Esofar">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/10114/">
              基于Layui开发一个捐赠小插件
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/3387384">
                Esofar
              </a>
            </span>
            <span>
              2017-05-17
            </span>
            <span>
              layui
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              4
              <i class="iconfont" title="人气">
                
              </i>
              1255
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/2610384" class="fly-list-avatar">
            <img src="http://res.layui.com/images/fly/avatar/2.jpg" alt="狠狠亲一口">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/9982/">
              大了一个博客列表页，求建议
            </a>
            <span class="fly-tip-jing">
              精帖
            </span>
          </h2>
          <p>
            <span>
              <a href="/u/2610384">
                狠狠亲一口
              </a>
            </span>
            <span>
              2017-05-12
            </span>
            <span>
              layui
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              4
              <i class="iconfont" title="人气">
                
              </i>
              685
            </span>
          </p>
        </li>
      </ul>
      <div style="text-align: center">
        <div class="laypage-main">
          <span class="laypage-curr">
            1
          </span>
          <a href="/jie/wonderful/page/2/">
            2
          </a>
          <a href="/jie/wonderful/page/3/">
            3
          </a>
          <a href="/jie/wonderful/page/4/">
            4
          </a>
          <a href="/jie/wonderful/page/5/">
            5
          </a>
          <span>
            …
          </span>
          <a href="/jie/wonderful/page/10/" class="laypage-last" title="尾页">
            尾页
          </a>
          <a href="/jie/wonderful/page/2/" class="laypage-next">
            下一页
          </a>
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