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
            <form action="" method="post" class="layui-form layui-form-pane">
                <div class="layui-form-item">
                    <label for="name" class="layui-form-label">
                        <span class="x-red">*</span>角色名
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="name" name="title" required="" lay-verify="required"
                        autocomplete="off" value="<?php echo $user['title'] ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item layui-form-text">
                    <label class="layui-form-label">
                        拥有权限
                    </label>
                    <table  class="layui-table layui-input-block">
                        <tbody>
                        <?php foreach ($rules as $key => $row) { ?>
                            <tr>
                                <td>
                                    <?php echo $key; ?>
                                </td>
                               
                                     <td>
                                        <div class="layui-input-block">
                                         <?php foreach ($row as $res) { ?>
                                            <input <?php if(in_array($res['id'], explode(',', $user['rules']))){ echo "checked" ;} ?> name="rules[<?php echo $res['id']; ?>]" type="checkbox" value="<?php echo $res['id']; ?>"> <?php echo $res['title']; ?>  
                                         <?php } ?>
                                        </div>
                                    </td>
                               
                                   
                            </tr>
                        <?php } ?>
                            
                        </tbody>
                    </table>
                </div>
                <div class="layui-form-item layui-form-text">
                    <label for="desc" class="layui-form-label">
                        描述
                    </label>
                    <div class="layui-input-block">
                        <textarea placeholder="请输入内容" id="desc" name="detail" class="layui-textarea"><?php echo $user['detail'] ?></textarea>
                    </div>
                </div>
                <div class="layui-form-item">
                <button class="layui-btn" lay-submit="" lay-filter="add">增加</button>
              </div>
            </form>
        </div>
        <script>
            layui.use(['form','layer'], function(){
                $ = layui.jquery;
              var form = layui.form()
              ,layer = layui.layer;

              //监听提交
              form.on('submit(add)', function(data){
                console.log(data);
                //发异步，把数据提交给php
               
                $.ajax({
                        url: '<?php echo U('admin/admin/editrole');?>',
                        type: 'post',
                        dataType: 'json',
                        data: data.field,
                    })
                .done(function(res) {
                   if(res.error==1){
                      layer.msg(res.info,function(){});
                   }else{

                     layer.alert("增加成功", {icon: 6},function () {
                    // 获得frame索引
                    var index = parent.layer.getFrameIndex(window.name);
                    //关闭当前frame
                    parent.layer.close(index);

                    parent.location.reload();
                     });
                   }
                })
                .fail(function() {
                    console.log("error");
                })











                
                return false;
              });
              
              
            });
        </script>
    </body>