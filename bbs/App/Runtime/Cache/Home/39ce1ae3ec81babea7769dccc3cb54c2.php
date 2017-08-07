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
            <li class="layui-this">
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
      <ul class="fly-panel fly-list">
        <li class="fly-list-li">
          <a href="/u/5867568" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/7046C34A0C18BFB97D18CD6379C7DE69/100"
            alt="YongKun">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/12106/">
              使用 layui-form 表单的样式之后
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/5867568">
                YongKun
              </a>
            </span>
            <span>
              23小时前
            </span>
            <span>
              layui
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              8
              <i class="iconfont" title="人气">
                
              </i>
              107
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/1732080" class="fly-list-avatar">
            <img src="http://q.qlogo.cn/qqapp/101235792/A81B97EA59EFD38AFA8C68C2842542B5/100"
            alt="intel">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/12104/">
              关于layer ui 分页的一个疑惑。 jump里面的代码
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/1732080">
                intel
              </a>
            </span>
            <span>
              1天前
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
              84
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/4752552" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/8D58A57B82F7BF090729F805B666DCD7/100"
            alt=".332">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/12078/">
              分页组件使用问题
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/4752552">
                .332
              </a>
            </span>
            <span>
              3天前
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
              100
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5846064" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/D7C8948408D45D2A97A49251A36B83B9/100"
            alt="宇cccc">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/12062/">
              分页插件如何重新渲染
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/5846064">
                宇cccc
              </a>
            </span>
            <span>
              3天前
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
              91
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5786088" class="fly-list-avatar">
            <img src="//res.layui.com/images/fly/avatar/3.jpg" alt="SunY0n9">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/12055/">
              layer.msg能设置显示的时间吗?自定义一下显示多久消失
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/5786088">
                SunY0n9
              </a>
            </span>
            <span>
              3天前
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
              77
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/3230976" class="fly-list-avatar">
            <img src="http://q.qlogo.cn/qqapp/101235792/73BC8A1EF6E12661C327D87E7422737E/100"
            alt="杜风(Victor)爱素食">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/12051/">
              使用layui.all.js和layui.js两种不同方式得到的效果弹窗，信息框等大小不一致
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/3230976">
                杜风(Victor)爱素食
              </a>
            </span>
            <span>
              3天前
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
              89
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/4058880" class="fly-list-avatar">
            <img src="http://q.qlogo.cn/qqapp/101235792/E5848A98C60CB32EBDDEC8C98582FEF2/100"
            alt="智佳思远">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/12030/">
              关于模板引擎 显示iconfont
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/4058880">
                智佳思远
              </a>
            </span>
            <span>
              4天前
            </span>
            <span>
              layui
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              1
              <i class="iconfont" title="人气">
                
              </i>
              77
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5693856" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/CD02B99E25D8A9D24C83DCF46E030855/100"
            alt="jovien">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/12015/">
              闲心大帅 关于BUTTON，放在FORM 中，自带SUBMIT 功能，如何取消？
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/5693856">
                jovien
              </a>
            </span>
            <span>
              4天前
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
              121
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5821536" class="fly-list-avatar">
            <img src="//res.layui.com/images/fly/avatar/9.jpg" alt="bubble11">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/12001/">
              laytpl不支持三元运算符吗？
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/5821536">
                bubble11
              </a>
            </span>
            <span>
              4天前
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
              106
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5820360" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/70D1752EC456058021AEFD552D53C9EE/100"
            alt="灬依情">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11998/">
              求助，侧边导航怎么取消默认展开
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/5820360">
                灬依情
              </a>
            </span>
            <span>
              5天前
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
              78
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5803056" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/743DD671AAF9ED079FE7D0DC57F13C62/100"
            alt="露仔爱瘪锅">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11950/">
              弹出层拖动问题！！！求救！
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/5803056">
                露仔爱瘪锅
              </a>
            </span>
            <span>
              6天前
            </span>
            <span>
              layer弹层
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              3
              <i class="iconfont" title="人气">
                
              </i>
              69
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/2761584" class="fly-list-avatar">
            <img src="http://q.qlogo.cn/qqapp/101235792/D99795FD19A898C9065248D6A5FEE599/100"
            alt="奔梦小开">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11942/">
              form中的select下拉搜索框不能兼容苹果手机？
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/2761584">
                奔梦小开
              </a>
            </span>
            <span>
              6天前
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
              67
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5786088" class="fly-list-avatar">
            <img src="//res.layui.com/images/fly/avatar/3.jpg" alt="SunY0n9">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11936/">
              关于checkbox复选框选中状态,怎么获取到他的选中状态
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/5786088">
                SunY0n9
              </a>
            </span>
            <span>
              6天前
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
              95
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5794656" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/3F15D883D9050A538D1D028CF85A4C28/100"
            alt="天明kiss">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11934/">
              教程错误了。。。
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/5794656">
                天明kiss
              </a>
            </span>
            <span>
              6天前
            </span>
            <span>
              layui
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              1
              <i class="iconfont" title="人气">
                
              </i>
              168
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5786088" class="fly-list-avatar">
            <img src="//res.layui.com/images/fly/avatar/3.jpg" alt="SunY0n9">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11932/">
              关于表格宽度问题
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/5786088">
                SunY0n9
              </a>
            </span>
            <span>
              6天前
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
              77
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5415144" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/4940596A56CDB3EFD2A1E043DC1828FC/100"
            alt="清风明月22">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11921/">
              lay-verify="date"的验证问题
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/5415144">
                清风明月22
              </a>
            </span>
            <span>
              6天前
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
              61
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/2187696" class="fly-list-avatar">
            <img src="http://q.qlogo.cn/qqapp/101235792/2A06B32C7DEF0BD0525FB056145B9887/100"
            alt="张甲龙">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11920/">
              寻找一篇帖子 关于和Layui很像的的另外一个框架 求地址。
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/2187696">
                张甲龙
              </a>
            </span>
            <span>
              6天前
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
              165
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5777184" class="fly-list-avatar">
            <img src="//res.layui.com/images/fly/avatar/2.jpg" alt="xjlone">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11903/">
              我想用tips代替那个好蠢的验证提示，怎么搞？
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/5777184">
                xjlone
              </a>
            </span>
            <span>
              7天前
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
              164
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/1732080" class="fly-list-avatar">
            <img src="http://q.qlogo.cn/qqapp/101235792/A81B97EA59EFD38AFA8C68C2842542B5/100"
            alt="intel">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11902/">
              关于【图片懒加载问题】 我抄官方的文档的代码。但是图片是全部加载，没有懒加载。
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/1732080">
                intel
              </a>
            </span>
            <span>
              7天前
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
              115
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5771976" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/B534A6E39203653AE4490885F122AD24/100"
            alt="影清如梦">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11896/">
              关于layui表单的可搜索的下拉框问题
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/5771976">
                影清如梦
              </a>
            </span>
            <span>
              8天前
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
              143
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5002872" class="fly-list-avatar">
            <img src="//res.layui.com/images/fly/avatar/3.jpg" alt="暗夜幽风">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11895/">
              layer.confirm使用的时候，是黑屏，不出现
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/5002872">
                暗夜幽风
              </a>
            </span>
            <span>
              8天前
            </span>
            <span>
              layer弹层
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              3
              <i class="iconfont" title="人气">
                
              </i>
              99
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/4565736" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/A3F2DEDD671D487FD3F81268450785A6/100"
            alt="橙留香">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11891/">
              搜索框弹窗
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/4565736">
                橙留香
              </a>
            </span>
            <span>
              9天前
            </span>
            <span>
              layer弹层
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              1
              <i class="iconfont" title="人气">
                
              </i>
              147
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5721912" class="fly-list-avatar">
            <img src="//res.layui.com/images/fly/avatar/10.jpg" alt="老白">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11888/">
              表情问题。。。
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/5721912">
                老白
              </a>
            </span>
            <span>
              9天前
            </span>
            <span>
              layui
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              12
              <i class="iconfont" title="人气">
                
              </i>
              240
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5740728" class="fly-list-avatar">
            <img src="//res.layui.com/images/fly/avatar/5.jpg" alt="qq2556324519">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11876/">
              使用layui消息提示，现在加入刷新后，提示消息不见了，请问大神，怎么处理这个问题。有什么办法刷新页
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/5740728">
                qq2556324519
              </a>
            </span>
            <span>
              10天前
            </span>
            <span>
              layer弹层
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              3
              <i class="iconfont" title="人气">
                
              </i>
              109
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5705616" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/FD9E51B98357BE76009EDE284B9E0368/100"
            alt="6324upup">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11872/">
              网站内容居中问题
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/5705616">
                6324upup
              </a>
            </span>
            <span>
              10天前
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
              134
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5701080" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/EDBBBC2F0ACC36D9A108C995BB1736D4/100"
            alt="大大可笑糖">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11858/">
              下拉框展开的框可以变成上拉框吗？
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/5701080">
                大大可笑糖
              </a>
            </span>
            <span>
              10天前
            </span>
            <span>
              layui
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              7
              <i class="iconfont" title="人气">
                
              </i>
              151
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/4292232" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/93D62ED9A6B4B7CE6370CF7A8DA6120A/100"
            alt="大宝哥">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11857/">
              想问一下select最大能承受多少条数据不会出现异常
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/4292232">
                大宝哥
              </a>
            </span>
            <span>
              10天前
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
              154
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5700576" class="fly-list-avatar">
            <img src="//cdn.layui.com/avatar/5700576.jpg?t=1500355290575" alt="Viory">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11855/">
              怎么把layer的tips写到iframe层的input
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/5700576">
                Viory
              </a>
            </span>
            <span>
              10天前
            </span>
            <span>
              layer弹层
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              4
              <i class="iconfont" title="人气">
                
              </i>
              96
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5415144" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/4940596A56CDB3EFD2A1E043DC1828FC/100"
            alt="清风明月22">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11853/">
              分页插件初始化的时候会走一遍jump里面的内容
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/5415144">
                清风明月22
              </a>
            </span>
            <span>
              11天前
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
              92
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5739720" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/245EAB46DAA09BB08243632B95081BC5/100"
            alt="是的吧记得">
          </a>
          <h2 class="fly-tip">
            <a href="/jie/11840/">
              lay tab 怎么设置第一个不带关闭 其他的带关闭按钮
            </a>
          </h2>
          <p>
            <span>
              <a href="/u/5739720">
                是的吧记得
              </a>
            </span>
            <span>
              11天前
            </span>
            <span>
              layui
            </span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答">
                
              </i>
              13
              <i class="iconfont" title="人气">
                
              </i>
              282
            </span>
          </p>
        </li>
      </ul>
      <div style="text-align: center">
        <div class="laypage-main">
          <span class="laypage-curr">
            1
          </span>
          <a href="/jie/solved/page/2/">
            2
          </a>
          <a href="/jie/solved/page/3/">
            3
          </a>
          <a href="/jie/solved/page/4/">
            4
          </a>
          <a href="/jie/solved/page/5/">
            5
          </a>
          <span>
            …
          </span>
          <a href="/jie/solved/page/76/" class="laypage-last" title="尾页">
            尾页
          </a>
          <a href="/jie/solved/page/2/" class="laypage-next">
            下一页
          </a>
        </div>
      </div>
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