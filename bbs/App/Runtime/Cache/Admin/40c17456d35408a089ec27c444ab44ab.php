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
              <a><cite>权限规则</cite></a>
            </span>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
        </div>
        <div class="x-body">
            <form method="post" class="layui-form x-center" action="" style="width:70%">
                <div class="layui-form-pane" style="margin-top: 15px;">
                  <div class="layui-form-item">
                    <div class="layui-input-inline">
                        <select name="cid">
                            <option value="">请选择分类</option>
                            <?php foreach ($cate as $row) { ?>
                                <option value="<?php echo $row['cid']; ?>"><?php echo $row['cname']; ?></option>
                            <?php } ?>
                            
                           
                        </select>
                    </div>
                    <div class="layui-input-inline">
                      <input type="text" name="name"  placeholder="模块/控制器/方法" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline">
                      <input type="text" name="title"  placeholder="权限名称" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                        <button class="layui-btn"  lay-submit="" lay-filter="add"><i class="layui-icon">&#xe608;</i>添加</button>
                    </div>
                  </div>
                </div> 
            </form>
            <xblock><button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon">&#xe640;</i>批量删除</button><span class="x-right" style="line-height:40px">共有数据：<?php echo Count($rules); ?> 条</span></xblock>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>
                            <input id="all" type="checkbox" name="" value="">
                        </th>
                        <th>
                            ID
                        </th>
                        <th>
                            权限规则
                        </th>
                        <th>
                            权限名称
                        </th>
                        <th>
                            所属分类
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody id="x-link">
                <?php foreach ($rules as $res) { ?>
                    <tr>
                        <td>
                            <input class="son" type="checkbox" value="<?php echo $res['id']; ?>" name="">
                        </td>
                        <td>
                            <?php echo $res['id']; ?>
                        </td>
                        <td>
                            <?php echo $res['name']; ?>
                        </td>
                        <td>
                            <?php echo $res['title']; ?>
                        </td>
                        <td>
                            <?php echo $res['cname'] ?>
                        </td>
                        <td class="td-manage">
                            <!-- <a title="编辑" href="javascript:;" onclick="rule_edit('编辑','rule-edit.html','4','','510')"
                            class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">&#xe642;</i>
                            </a> -->
                            <style type="text/css">
                                .zz{
                                    font-size: 25px;
                                    color: red;

                                }
                                
                            </style>
                            <a title="删除" href="javascript:;" onclick="rule_del(this,'<?php echo $res['id']; ?>')" 
                            style="text-decoration:none">
                                <i class="layui-icon zz">&#xe640;</i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>

            <div id="page"></div>
        </div>
        <script>
            layui.use(['element','laypage','layer','form'], function(){
                $ = layui.jquery;//jquery
              lement = layui.element();//面包导航
              laypage = layui.laypage;//分页
              layer = layui.layer;//弹出层
              form = layui.form();//弹出层

              $('#all').click(function(event) {
                    if ($(this).prop("checked")) {
                        $('.son').prop("checked",true);
                    }else{
                        $('.son').prop("checked",false);
                    };
                 });



              //监听提交
                form.on('submit(add)', function(data){
                console.log(data);

                $.ajax({
                        url: '<?php echo U('admin/admin/addrule');?>',
                        type: 'post',
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





                // layer.alert("增加成功", {icon: 6});
                return false;
              });
            })

              //以上模块根据需要引入

            //批量删除提交
             function delAll () {
                layer.confirm('确认要删除吗？',function(index){
                    //捉到所有被选中的，发异步进行删除
                    uids = '';

                    for (var i = 0; i < $('.son:checked').length; i++) {
                        uids+=$('.son:checked').eq(i).val();
                        uids+=',';
                    };
                    $.ajax({
                        url: '<?php echo U('admin/admin/deleAll');?>',
                        type: 'post',
                        dataType: 'json',
                        data: {uids: uids},
                    })
                    .done(function(res) {
                        if (res.error==0) {
                            parent.location.reload();
                            layer.msg('删除成功', {icon: 1});
                        };
                    })
                });
             }
            
            

            //-编辑
            function rule_edit (title,url,id,w,h) {
                x_admin_show(title,url,w,h); 
            }
            
            /*删除*/
            function rule_del(obj,uids){
                layer.confirm('确认要删除吗？',function(index){
                    //发异步删除数据
                    $.ajax({
                        url: '<?php echo U('admin/admin/deleAll');?>',
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