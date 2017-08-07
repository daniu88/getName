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
              <a href="/">首页</a></li>
            <li>
              <a href="/jie/">全部帖</a></li>
            <li class="layui-this">
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
        <li class="fly-list-li">
          <a href="/u/168" class="fly-list-avatar">
            <img src="//cdn.layui.com/avatar/168.jpg?t=1490352249902" alt="贤心"></a>
          <h2 class="fly-tip">
            <a href="/jie/12136/">layui 将于本月中旬发布历史性版本：2.0</a>
            <span class="fly-tip-stick">置顶</span></h2>
          <p>
            <span>
              <a href="/u/168">贤心</a></span>
            <span>2天前</span>
            <span>layui</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>165
              <i class="iconfont" title="人气"></i>5274</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/168" class="fly-list-avatar">
            <img src="//cdn.layui.com/avatar/168.jpg?t=1490352249902" alt="贤心"></a>
          <h2 class="fly-tip">
            <a href="/jie/11996/">即日起，【案例】必须符合以下要求</a>
            <span class="fly-tip-stick">置顶</span></h2>
          <p>
            <span>
              <a href="/u/168">贤心</a></span>
            <span>8天前</span>
            <span>官方公告</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>25
              <i class="iconfont" title="人气"></i>3485</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5940312" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/57D9C9A4164E9A93EE9DD3EF9A98A26C/100" alt="Fate699"></a>
          <h2 class="fly-tip">
            <a href="/jie/12244/">请问贤心大神你社区的这个富文本在哪儿能弄到呀</a></h2>
          <p>
            <span>
              <a href="/u/5940312">Fate699</a></span>
            <span>7小时前</span>
            <span>layui</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>2
              <i class="iconfont" title="人气"></i>59</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5853120" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/4B6EC941CFF0A24210F548D9E3E6BDCA/100" alt="月渡迷津"></a>
          <h2 class="fly-tip">
            <a href="/jie/12243/">不知道为什么会出现图片中的效果 试了好久。求指导一下 怎么改</a></h2>
          <p>
            <span>
              <a href="/u/5853120">月渡迷津</a></span>
            <span>8小时前</span>
            <span>layui</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>0
              <i class="iconfont" title="人气"></i>26</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5938800" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/0EFAAF23620566176427A19B2935FD38/100" alt="逍遥军军"></a>
          <h2 class="fly-tip">
            <a href="/jie/12242/">layer弹窗大小自适应问题</a></h2>
          <p>
            <span>
              <a href="/u/5938800">逍遥军军</a></span>
            <span>9小时前</span>
            <span>layer弹层</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>1
              <i class="iconfont" title="人气"></i>43</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/3461640" class="fly-list-avatar">
            <img src="http://q.qlogo.cn/qqapp/101235792/F29628F991A57B4F2F96FA8534CCAA5E/100" alt="drama"></a>
          <h2 class="fly-tip">
            <a href="/jie/12241/">laytpl 加载页面就渲染 我数据还没请求 报错了要怎么办</a></h2>
          <p>
            <span>
              <a href="/u/3461640">drama</a></span>
            <span>9小时前</span>
            <span>layui</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>0
              <i class="iconfont" title="人气"></i>31</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5919312" class="fly-list-avatar">
            <img src="//cdn.layui.com/avatar/5919312.jpg?t=1501669314094" alt="小慕"></a>
          <h2 class="fly-tip">
            <a href="/jie/12240/">layUi 前端+App混合开发分享案例大礼包~~~</a></h2>
          <p>
            <span>
              <a href="/u/5919312">小慕</a></span>
            <span>13小时前</span>
            <span>layui</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>1
              <i class="iconfont" title="人气"></i>151</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5550048" class="fly-list-avatar">
            <img src="//res.layui.com/images/fly/avatar/0.jpg" alt="念旧丶"></a>
          <h2 class="fly-tip">
            <a href="/jie/12238/">在layer.use(),外面如何访问括号里的变量</a></h2>
          <p>
            <span>
              <a href="/u/5550048">念旧丶</a></span>
            <span>13小时前</span>
            <span>layui</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>0
              <i class="iconfont" title="人气"></i>35</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5937792" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/FE3585B161C19CCA31453ECCC4D4C4C1/100" alt="o(╯□╰)o小熊"></a>
          <h2 class="fly-tip">
            <a href="/jie/12237/">请问：layer弹出层兼容到ie呀！ 谢谢！</a></h2>
          <p>
            <span>
              <a href="/u/5937792">o(╯□╰)o小熊</a></span>
            <span>14小时前</span>
            <span>layer弹层</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>1
              <i class="iconfont" title="人气"></i>43</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/1136352" class="fly-list-avatar">
            <img src="http://q.qlogo.cn/qqapp/101235792/09CC77C309CA5FE00DB7AF8CC5F9E9CB/100" alt="ee"></a>
          <h2 class="fly-tip">
            <a href="/jie/12236/">element.js 能不能在页面在界面加载完成以后在调用？</a></h2>
          <p>
            <span>
              <a href="/u/1136352">ee</a></span>
            <span>14小时前</span>
            <span>layui</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>1
              <i class="iconfont" title="人气"></i>36</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5936952" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/EDA8C9E755698DA8B7A0117E1F36B20C/100" alt="倔强113"></a>
          <h2 class="fly-tip">
            <a href="/jie/12235/">layui 上传图片 后台怎样接收？</a></h2>
          <p>
            <span>
              <a href="/u/5936952">倔强113</a></span>
            <span>14小时前</span>
            <span>layui</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>2
              <i class="iconfont" title="人气"></i>57</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5937120" class="fly-list-avatar">
            <img src="//cdn.layui.com/avatar/5937120.jpg?t=1501753131569" alt="SmallmingQiu"></a>
          <h2 class="fly-tip">
            <a href="/jie/12234/">layer.photos 多次渲染的问题</a></h2>
          <p>
            <span>
              <a href="/u/5937120">SmallmingQiu</a></span>
            <span>14小时前</span>
            <span>layer弹层</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>2
              <i class="iconfont" title="人气"></i>21</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5934096" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/593695630ACB374889E3E68217BB82E7/100" alt="好菇凉"></a>
          <h2 class="fly-tip">
            <a href="/jie/12233/">layui.layedit 还有很多欠缺无法生产环境下使用</a></h2>
          <p>
            <span>
              <a href="/u/5934096">好菇凉</a></span>
            <span>14小时前</span>
            <span>layui</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>2
              <i class="iconfont" title="人气"></i>48</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5932584" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/F5C3A2F4C1A7CCFCD3C77BC501201E7B/100" alt="一头牛"></a>
          <h2 class="fly-tip">
            <a href="/jie/12231/">弹出 iframe 进度条</a></h2>
          <p>
            <span>
              <a href="/u/5932584">一头牛</a></span>
            <span>15小时前</span>
            <span>layer弹层</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>4
              <i class="iconfont" title="人气"></i>76</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5931912" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/E036B67FB7E241780BD3857C8675055E/100" alt="lonelyke"></a>
          <h2 class="fly-tip">
            <a href="/jie/12230/">从数据库读取完数据在搜索下拉框中不能写入</a></h2>
          <p>
            <span>
              <a href="/u/5931912">lonelyke</a></span>
            <span>16小时前</span>
            <span>layui</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>5
              <i class="iconfont" title="人气"></i>74</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5892264" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/D3F2E91BDEFC6B7DB5948FD75E69E00D/100" alt="秀外慧中尤美丽"></a>
          <h2 class="fly-tip">
            <a href="/jie/12229/">求一个LayUI分页的具体实现(Asp.net)</a></h2>
          <p>
            <span>
              <a href="/u/5892264">秀外慧中尤美丽</a></span>
            <span>16小时前</span>
            <span>layui</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>3
              <i class="iconfont" title="人气"></i>95</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/4314912" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/FA0C19915344BEDD020C225705A7598B/100" alt="zhens"></a>
          <h2 class="fly-tip">
            <a href="/jie/12228/">layui-form 表单的复选框，下拉框，单选全部失效。</a></h2>
          <p>
            <span>
              <a href="/u/4314912">zhens</a></span>
            <span>16小时前</span>
            <span>layui</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>6
              <i class="iconfont" title="人气"></i>59</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5921832" class="fly-list-avatar">
            <img src="//res.layui.com/images/fly/avatar/1.jpg" alt="小南哥"></a>
          <h2 class="fly-tip">
            <a href="/jie/12227/">Layer弹层 解决回车确认连续弹出的一个解决方案</a></h2>
          <p>
            <span>
              <a href="/u/5921832">小南哥</a></span>
            <span>16小时前</span>
            <span>layer弹层</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>1
              <i class="iconfont" title="人气"></i>61</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5853120" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/4B6EC941CFF0A24210F548D9E3E6BDCA/100" alt="月渡迷津"></a>
          <h2 class="fly-tip">
            <a href="/jie/12226/">入门新手，求大神指导 现遇到select 动态问题 代码如下 插不进去</a></h2>
          <p>
            <span>
              <a href="/u/5853120">月渡迷津</a></span>
            <span>16小时前</span>
            <span>layui</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>4
              <i class="iconfont" title="人气"></i>38</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/683760" class="fly-list-avatar">
            <img src="http://res.layui.com/images/fly/avatar/2.jpg" alt="爱死寂寞人"></a>
          <h2 class="fly-tip">
            <a href="/jie/12225/">layer,初期就全屏弹出后，ipad上横竖屏切换时，如何能自适应</a></h2>
          <p>
            <span>
              <a href="/u/683760">爱死寂寞人</a></span>
            <span>16小时前</span>
            <span>layer弹层</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>3
              <i class="iconfont" title="人气"></i>46</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5807928" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/666B55004FE829D8D92F6428C60FF47B/100" alt="幻SiT"></a>
          <h2 class="fly-tip">
            <a href="/jie/12224/">请问layerUI怎么在父层获得子层的数据</a></h2>
          <p>
            <span>
              <a href="/u/5807928">幻SiT</a></span>
            <span>16小时前</span>
            <span>layer弹层</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>1
              <i class="iconfont" title="人气"></i>38</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5778360" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/70F3D32AC2047D5FB4F153444FF06001/100" alt="一丛小溪"></a>
          <h2 class="fly-tip">
            <a href="/jie/12223/">layim会话窗口的问题</a></h2>
          <p>
            <span>
              <a href="/u/5778360">一丛小溪</a></span>
            <span>17小时前</span>
            <span>LayIM即时通讯</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>0
              <i class="iconfont" title="人气"></i>50</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/1887144" class="fly-list-avatar">
            <img src="//cdn.layui.com/avatar/1887144.jpg?t=1501739668262" alt="明宝"></a>
          <h2 class="fly-tip">
            <a href="/jie/12222/">为什么会在页面上先渲染？</a></h2>
          <p>
            <span>
              <a href="/u/1887144">明宝</a></span>
            <span>18小时前</span>
            <span>layui</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>0
              <i class="iconfont" title="人气"></i>76</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5200608" class="fly-list-avatar">
            <img src="//res.layui.com/images/fly/avatar/7.jpg" alt="LGGGGG"></a>
          <h2 class="fly-tip">
            <a href="/jie/12221/">layui的select组件可以实现多选吗？</a></h2>
          <p>
            <span>
              <a href="/u/5200608">LGGGGG</a></span>
            <span>19小时前</span>
            <span>layui</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>4
              <i class="iconfont" title="人气"></i>108</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5913264" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/50677D8623DC813D35C0576AC5A3AA0F/100" alt="右眸Remnant"></a>
          <h2 class="fly-tip">
            <a href="/jie/12220/">按钮图标无法正常显示，求解！！！！</a></h2>
          <p>
            <span>
              <a href="/u/5913264">右眸Remnant</a></span>
            <span>19小时前</span>
            <span>layui</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>3
              <i class="iconfont" title="人气"></i>47</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5560800" class="fly-list-avatar">
            <img src="//res.layui.com/images/fly/avatar/10.jpg" alt="Osacar"></a>
          <h2 class="fly-tip">
            <a href="/jie/12219/">我想单独使用layeditor这个富文本编辑器，如何弄？</a></h2>
          <p>
            <span>
              <a href="/u/5560800">Osacar</a></span>
            <span>20小时前</span>
            <span>layui</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>1
              <i class="iconfont" title="人气"></i>58</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/3872232" class="fly-list-avatar">
            <img src="http://res.layui.com/images/fly/avatar/0.jpg" alt="layim_fans"></a>
          <h2 class="fly-tip">
            <a href="/jie/12218/">layim 使用原生wesocket无法在微信浏览器中连接的问题？</a></h2>
          <p>
            <span>
              <a href="/u/3872232">layim_fans</a></span>
            <span>20小时前</span>
            <span>LayIM即时通讯</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>2
              <i class="iconfont" title="人气"></i>53</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/5926704" class="fly-list-avatar">
            <img src="//res.layui.com/images/fly/avatar/10.jpg" alt="hhcat_com"></a>
          <h2 class="fly-tip">
            <a href="/jie/12217/">购买授权咨询</a></h2>
          <p>
            <span>
              <a href="/u/5926704">hhcat_com</a></span>
            <span>20小时前</span>
            <span>LayIM即时通讯</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>2
              <i class="iconfont" title="人气"></i>123</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/4366992" class="fly-list-avatar">
            <img src="//q.qlogo.cn/qqapp/101235792/316A5CA2F0FC2F1210B97DBA45DE676D/100" alt="一下雨就想睡觉"></a>
          <h2 class="fly-tip">
            <a href="/jie/12215/">layui的表单输入框，非必填项未填写为什么会返回NaN？</a></h2>
          <p>
            <span>
              <a href="/u/4366992">一下雨就想睡觉</a></span>
            <span>20小时前</span>
            <span>layui</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>0
              <i class="iconfont" title="人气"></i>51</span></p>
        </li>
        <li class="fly-list-li">
          <a href="/u/2183496" class="fly-list-avatar">
            <img src="http://q.qlogo.cn/qqapp/101235792/9EFCBE54AD022512B25517509FA32E80/100" alt="没心没肺"></a>
          <h2 class="fly-tip">
            <a href="/jie/12214/">老版Layui的弹出页滚动条问题。</a></h2>
          <p>
            <span>
              <a href="/u/2183496">没心没肺</a></span>
            <span>20小时前</span>
            <span>layer弹层</span>
            <span class="fly-list-hint">
              <i class="iconfont" title="回答"></i>0
              <i class="iconfont" title="人气"></i>35</span></p>
        </li>
      </ul>
      <div style="text-align: center">
        <div class="laypage-main">
          <span class="laypage-curr">1</span>
          <a href="/jie/unsolved/page/2/">2</a>
          <a href="/jie/unsolved/page/3/">3</a>
          <a href="/jie/unsolved/page/4/">4</a>
          <a href="/jie/unsolved/page/5/">5</a>
          <span>…</span>
          <a href="/jie/unsolved/page/322/" class="laypage-last" title="尾页">尾页</a>
          <a href="/jie/unsolved/page/2/" class="laypage-next">下一页</a></div>
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