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
  <div class="wrap">
    <div class="content detail">
      <div class="fly-panel detail-box">
        <h1><?php echo $question['title']; ?></h1>
        <div class="fly-tip fly-detail-hint">
          <span><?php echo $question['status']; ?></span>
          <div class="jie-admin-box" data-id="12151"></div>
          <div class="fly-list-hint">
            <a href="#comment">
              <i class="iconfont" title="回答"></i><?php echo $question['answer_num']; ?></a>
            <i class="iconfont" title="人气"></i><?php echo $question['view_num']; ?></div></div>
        <div class="detail-about">
          <a class="jie-user" href="/u/5892600/">
            <img src="/GetName/bbs/<?php echo $question['face']; ?>" alt="<?php echo $question['nickname']; ?>">
            <cite><?php echo $question['nickname']; ?>
              <em><?php echo Ctime($question['create_time']); ?></em></cite>
          </a>
          <div class="detail-hits" id="LAY_jieAdmin" data-id="12151">
            <span style="color:#FF7200">悬赏：<?php echo $question['kiss']; ?>飞吻</span>

            
            <span id="shou" class="layui-btn layui-btn-mini jie-admin " type="collect" data-type="add">收藏</span>


          </div>
        </div>
        <div class="detail-body photos">
          <?php echo htmlspecialchars_decode($question['content']); ?>
        </div>
      </div>
     
      <div class="fly-panel detail-box" style="padding-top: 0;">
        <ul class="jieda photos" id="jieda">

        
        <?php if ($answer) { ?>
          <?php foreach ($answer as $row) { ?>
      
          <li data-id="42101">
            <a name="item-1501570234697"></a>
            <div class="detail-about detail-about-reply">
              <a class="jie-user" href="<?php echo U('home/u/index',array('id'=>$row['uid']));?>">


                <img src="/GetName/bbs/<?php echo $row['face']; ?>" alt="<?php echo $row['nickname']; ?>" layer-index="2">
                <cite>
                  <i><?php echo $row['nickname']; ?></i>
                </cite>
              </a>
              <div class="detail-hits">
                <span><?php echo Ctime($row['create_time']); ?></span></div>
            </div>
            <div class="detail-body jieda-body"><?php echo htmlspecialchars_decode($row['content']); ?></div>
            <div class="jieda-reply">
              <span class="jieda-zan " type="zan">
                <i class="iconfont icon-zan"></i>
                <em>0</em></span>
              <span type="reply">
                <i class="iconfont icon-svgmoban53"></i>回复</span>
            </div>
          </li>
            <?php } ?>
        <?php }else{ ?>
          <li class="fly-none">没有任何回答</li>
          <?php } ?>

        

        </ul>
        <div class="layui-form layui-form-pane">
          <form action="/jie/reply/" method="post">
            <div class="layui-form-item layui-form-text">
              <a name="comment"></a>
              <div class="layui-input-block">
                <textarea id="L_content" required="" placeholder="我要回答" class="layui-textarea fly-editor" style="height: 150px;"></textarea>
              </div>
            </div>
            <div class="layui-form-item">
              <input type="hidden" name="qid" value="<?php echo $_GET['id'] ?>">
              <button class="layui-btn" lay-filter="add" lay-submit="">提交回答</button></div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="edge">
    <dl class="fly-panel fly-list-one">
      <dt class="fly-panel-title">近期热议</dt>
      
      <?php foreach ($hotQues as $res) { ?>
      <dd>
        <a href="<?php echo U(home/jie/index,array('id'=>$res['qid']));?>"><?php echo $res['title']; ?></a>
        <span>
          <i class="iconfont"></i><?php echo $res['answer_num']; ?></span>
      </dd>
      <?php } ?>
    </dl>
   
  </div>
</div> 

<script type="text/javascript">
      layui.use(['form','jquery','layedit'], function(){
            var form = layui.form();
            $ = layui.jquery;
            var layedit = layui.layedit;

            layedit.set({
              uploadImage: {
                url: '<?php echo U('home/jie/ping');?>' //接口url
                ,type: '' //默认post
              }
            });

            index = layedit.build('L_content'); //建立编辑器

            
            
            //监听提交
            form.on('submit(add)', function(data){
             
              data.field.content = layedit.getContent(index);
              if(data.field.content.length<10){
                  layer.msg("内容必须大于10个字符",function(){});
              }
              // // // layer.msg(JSON.stringify(data.field));

              $.ajax({
                url: '<?php echo U('home/jie/reply');?>',
                type: 'POST',
                dataType: 'json',
                data: data.field,
              })
              .done(function(res) {
                 if(res.error==1){
                    layer.msg(res.info,function(){});
                 }else{
                    layer.alert(res.info, {icon: 6},function(){
                        location.reload();
                    });
                 }
              })
              .fail(function() {
                console.log("error");
              })

              return false; 

            });


        $("#shou").click(function(){
            var yRgb ="#fff";
            var rgb = $(this).css('background-color'); 
            if(rgb!=yRgb ){
                $(this).css('background-color',yRgb ); 
            }else{
            $(this).css('background-color',red); 
            }
          






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