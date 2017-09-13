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
        <link rel="stylesheet" href="/GetName/bbs/Public/admin/layui2.0/layui.css" media="all">
        <script src="/GetName/bbs/Public/admin/lib/layui/layui.js" charset="utf-8">
        </script>
        <script src="/GetName/bbs/Public/admin/layui2.0/layui.js" charset="utf-8">
        </script>
        <script src="/GetName/bbs/Public/admin/js/x-admin.js"></script>
        <script src="/GetName/bbs/Public/admin/js/x-layui.js"></script>
    </head>
        <body>
        <div class="x-nav">
            <span class="layui-breadcrumb">
              <a><cite>首页</cite></a>
              <a><cite>会员管理</cite></a>
              <a><cite>角色管理</cite></a>
            </span>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
        </div>
        <div class="x-body">
            
            <xblock><button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon">&#xe640;</i>批量删除</button><button class="layui-btn" onclick="role_add('添加用户','<?php echo U('admin/admin/addrole');?>','900','500')"><i class="layui-icon">&#xe608;</i>添加</button><span class="x-right" style="line-height:40px">共有数据： <?php echo Count($user); ?>  条</span></xblock>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="" value="">
                        </th>
                        <th>
                            ID
                        </th>
                        <th>
                            角色名
                        </th>
                        <th>
                            拥有权限规则
                        </th>
                        <th>
                            描述
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($user as $row) { ?>
               
                    <tr>
                        <td>
                            <input type="checkbox" value="1" name="">
                        </td>
                        <td>
                            <?php echo $row['id']; ?>
                        </td>
                        <td>
                            <?php echo $row['title']; ?>
                        </td>
                        <td >
                            <?php echo $row['rulename']; ?>
                        </td>
                        <td >
                            <?php echo $row['detail']; ?>
                        </td>
                        <td class="td-manage">
                            <a title="编辑" href="javascript:;" onclick="role_edit('编辑','<?php echo U('admin/admin/rolEedit',array('id'=>$row['id']));?>','4','','510')"
                            class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">&#xe642;</i>
                            </a>
                            <a title="删除" href="javascript:;" onclick="role_del(this,'<?php echo $row['id']; ?>')" 
                            style="text-decoration:none">
                                <i class="layui-icon">&#xe640;</i>
                            </a>
                        </td>
                    </tr>
                 <?php } ?>
                </tbody>
            </table>

            <div id="page"></div>
        </div>
        <script>
            layui.use(['laydate','element','laypage','layer'], function(){
                $ = layui.jquery;//jquery
              laydate = layui.laydate;//日期插件
              lement = layui.element();//面包导航
              laypage = layui.laypage;//分页
              layer = layui.layer;//弹出层

              //以上模块根据需要引入
            });

            //批量删除提交
             function delAll () {
                layer.confirm('确认要删除吗？',function(index){
                    //捉到所有被选中的，发异步进行删除
                    layer.msg('删除成功', {icon: 1});
                });
             }
             /*添加*/
            function role_add(title,url,w,h){
                x_admin_show(title,url,w,h);
            }

             
            //编辑
            function role_edit (title,url,id,w,h) {
                x_admin_show(title,url,w,h); 
            }
            /*删除*/
            function role_del(obj,uids){
                layer.confirm('确认要删除吗？',function(index){
                    //发异步删除数据
                    
                    $.ajax({
                        url: '<?php echo U('admin/admin/deleDel');?>',
                        type: 'post',
                        dataType: 'json',
                        data: {uids: uids},
                    })
                    .done(function(res) {
                        if (res.error==0) {
                            location.reload();
                            layer.msg('删除成功', {icon: 1});
                        };
                    })


                    // $(obj).parents("tr").remove();
                    // layer.msg('已删除!',{icon:1,time:1000});
                });
            }
            </script>
    </body>
</html>