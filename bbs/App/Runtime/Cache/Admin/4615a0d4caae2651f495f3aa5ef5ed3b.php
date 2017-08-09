<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>
            X-admin v1.0
        </title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" href="/GetName/bbs/Public/admin/images/favicon.ico" type="image/x-icon" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" href="/GetName/bbs/Public/admin/css/x-admin.css" media="all">
        <script src="/GetName/bbs/Public/admin/lib/layui/layui.js" charset="utf-8">
        </script>
        <script src="/GetName/bbs/Public/admin/js/x-admin.js"></script>
        <script src="/GetName/bbs/Public/admin/js/x-layui.js"></script>
    </head>
        <body>
        <div class="x-body">
            <blockquote class="layui-elem-quote">
                <img src="/GetName/bbs/<?php echo $user['face']; ?>" class="layui-circle" style="width:50px;float:left">
                <dl style="margin-left:80px; color:#019688">
                <dt><span ><?php echo $user['nikename']; ?></span> <span >飞吻：<?php echo $user['kiss']; ?> </span></dt>
                <dd style="margin-left:0"><?php echo $user['sign']; ?></dd>
              </dl>
            </blockquote>
            <div class="pd-20">
              <table  class="layui-table" lay-skin="line">
                <tbody>
                  <tr>
                    <th  width="80">性别：</th>
                    <td><?php echo $user['sex']; ?></td>
                  </tr>
                  <tr>
                    <th>手机：</th>
                    <td>13000000000</td>
                  </tr>
                  <tr>
                    <th>邮箱：</th>
                    <td><?php echo $user['email']; ?></td>
                  </tr>
                  <tr>
                    <th>地址：</th>
                    <td><?php echo $user['city']; ?></td>
                  </tr>
                  <tr>
                    <th>注册时间：</th>
                    <td><?php echo Ctime($user['create_time']); ?></td>
                  </tr>
                  <tr>
                    <th>积分：</th>
                    <td><?php echo $user['kiss']; ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
        <script>
            layui.use(['form','layer'], function(){
                $ = layui.jquery;
              var form = layui.form()
              ,layer = layui.layer;
            
              //自定义验证规则
              form.verify({
                nikename: function(value){
                  if(value.length < 5){
                    return '昵称至少得5个字符啊';
                  }
                }
                ,pass: [/(.+){6,12}$/, '密码必须6到12位']
                ,repass: function(value){
                    if($('#L_pass').val()!=$('#L_repass').val()){
                        return '两次密码不一致';
                    }
                }
              });

              console.log(parent);
              //监听提交
              form.on('submit(add)', function(data){
                console.log(data);
                //发异步，把数据提交给php
                layer.alert("增加成功", {icon: 6},function () {
                    // 获得frame索引
                    var index = parent.layer.getFrameIndex(window.name);
                    //关闭当前frame
                    parent.layer.close(index);
                });
                return false;
              });
              
              
            });
        </script>
        
    </body>

</html>