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
            <form class="layui-form">
                <div class="layui-form-item">
                    <label for="L_username" class="layui-form-label">
                        昵称
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_username" name="username" disabled="" value="小明" class="layui-input">
                    </div>
                </div>
                <!-- <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>旧密码
                    </label>
                    <div class="layui-input-inline">
                        <input type="password" id="L_repass" name="oldpass" required="" lay-verify="required"
                        autocomplete="off" class="layui-input">
                    </div>
                </div> -->
                <div class="layui-form-item">
                    <label for="L_pass" class="layui-form-label">
                        <span class="x-red">*</span>新密码
                    </label>
                    <div class="layui-input-inline">
                        <input type="password" id="L_pass" name="newpass" required="" lay-verify="required"
                        autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">
                        6到16个字符
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>确认密码
                    </label>
                    <div class="layui-input-inline">
                        <input type="password" id="L_repass" name="repass" required="" lay-verify="required"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <button  class="layui-btn" lay-filter="save" lay-submit="">
                        增加
                    </button>
                </div>
            </form>
        </div>
        <script>
            layui.use(['form','layer','element'], function(){
                $ = layui.jquery;
              var form = layui.form()
              ,layer = layui.layer;
              var element = layui.element();
            
              //自定义验证规则
              // form.verify({
              //   nikename: function(value){
              //     if(value.length < 5){
              //       return '昵称至少得5个字符啊';
              //     }
              //   }
              //   ,pass: [/(.+){6,12}$/, '密码必须6到12位']
              //   ,repass: function(value){
              //       if($('#L_pass').val()!=$('#L_repass').val()){
              //           return '两次密码不一致';
              //       }
              //   }
              // });
              //监听提交
              form.on('submit(save)', function(data){
                // console.log(data);
                //发异步，把数据提交给php
                    $.ajax({
                    url: '<?php echo U('admin/Password/index');?>',
                    type: 'POST',
                    dataType: 'json',
                    data: data.field,
                  })
                  .done(function(respones) {
                        if (respones.error==1) {
                        layer.msg(respones.info, function(){});
                        }else{
                        layer.alert(respones.info, {icon: 6},function(){
                         location.reload();
                         });
                           console.log("error");
                        };
                  })
                  .fail(function() {
                    
                  })
                // layer.alert("增加成功", {icon: 6},function () {
                //     // 获得frame索引
                //     var index = parent.layer.getFrameIndex(window.name);
                //     //关闭当前frame
                //     parent.layer.close(index);
                // });
                return false;
              });
   
              
            });
        </script>
        
    </body>

</html>