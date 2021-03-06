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
    1 <body>
        <div class="x-nav">
            <span class="layui-breadcrumb">
              <a><cite>首页</cite></a>
              <a><cite>会员管理</cite></a>
              <a><cite>会员列表</cite></a>
            </span>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
        </div>
        <div class="x-body">
            <form method="get" class="layui-form x-center" action="" style="width:800px">
                <div class="layui-form-pane" style="margin-top: 15px;">
                  <div class="layui-form-item">
                    <label class="layui-form-label">日期范围</label>
                    <div class="layui-input-inline">
                      <input name="start" value="<?php echo $data['start']; ?>" class="layui-input" placeholder="开始日" id="LAY_demorange_s">
                    </div>
                    <div class="layui-input-inline">
                      <input name="end" value="<?php echo $data['end']; ?>" class="layui-input" placeholder="截止日" id="LAY_demorange_e">
                    </div>
                    <div class="layui-input-inline">
                      <input type="text" value="<?php echo $data['nikname']; ?>" name="nikname"  placeholder="请输入用户名" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                        <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
                    </div>
                  </div>
                </div> 
            </form>
            <xblock><button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon">&#xe640;</i>批量删除</button><button class="layui-btn" onclick="member_add('添加用户','<?php echo U('admin/user/add');?>','600','500')"><i class="layui-icon">&#xe608;</i>添加</button><span class="x-right" style="line-height:40px">共有数据： <?php echo $tot[0]['tot']; ?>  条</span></xblock>
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
                            用户名
                        </th>
                        <th>
                            性别
                        </th>
                        <th>
                            飞吻
                        </th>
                        <th>
                            邮箱
                        </th>
                        <th>
                            地址
                        </th>
                        <th>
                            加入时间
                        </th>
                        <th>
                            状态
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
                            <input class="son" type="checkbox" value="<?php echo $row['uid']; ?>" name="">
                        </td>
                        <td>
                            <?php echo $row['uid']; ?>
                        </td>
                        <td>
                            <u style="cursor:pointer"  onclick="member_show('<?php echo $row['nickname']; ?>','<?php echo U('admin/user/Member',array('uid'=>$row['uid']));?>','10001','360','400')">
                                <?php echo $row['nickname']; ?>
                            </u>
                        </td>
                        <td >
                            <?php echo $row['sex']; ?>
                        </td>
                        <td >
                            <?php echo $row['kiss']; ?>
                        </td>
                        <td >
                            <?php echo $row['email']; ?>
                        </td>
                        <td >
                            <?php echo $row['city']; ?>
                        </td>
                        <td>
                            <?php echo Ctime($row['create_time']); ?>
                        </td>
                        <td class="td-status">
                            <span class="layui-btn  layui-btn-mini <?php if ($row['status']){ echo "layui-btn-disabled"; }else{ echo "layui-btn-normal"; }?> ">
                                <?php if ($row['status']) { echo "已停用"; }else{ echo "已启用"; } ?>
                            </span>
                        </td>
                        <td class="td-manage">
                            <a msg="确认要停用吗" class="status" style="text-decoration:none" onclick="member_stop(this,'10001')" href="javascript:;" title="停用" uid="<?php echo $row['uid']; ?> ">
                                <?php if ($row['status']) { ?>
                                   <i class="layui-icon">   </i>
                                <?php }else{ ?>
                                    <i class="layui-icon">&#xe601;</i>
                                   <?php } ?> 
                            </a>
                            <a title="编辑" href="javascript:;" onclick="member_edit('编辑','<?php echo U('admin/edit/index',array('uid'=>$row['uid']));?>','4','','510')"
                            class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">&#xe642;</i>
                            </a>
                            <a style="text-decoration:none"  onclick="member_password('修改密码','<?php echo U('admin/passwords/index',array('uid'=>$row['uid']));?>','10001','600','400')"
                            href="javascript:;" title="修改密码">
                                <i class="layui-icon">&#xe631;</i>
                            </a>
                            <a title="删除" href="javascript:;" onclick="member_del(this,'1')" 
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


              $('#all').click(function(event) {
                    if ($(this).prop("checked")) {
                        $('.son').prop("checked",true);
                    }else{
                        $('.son').prop("checked",false);
                    };
                 });






              //以上模块根据需要引入
              $('.status').click(function(event) {
                  that = $(this);
                  msg = $(this).attr('msg');

                  layer.confirm(msg,function(index){

                    uid = that.attr('uid');

                    $.ajax({
                        url: '<?php echo U('admin/user/status');?>',
                        type: 'post',
                        dataType: 'json',
                        data: {uid:uid},
                    })
                    .done(function(res) {
                        if (res.error==0) {
                            layer.msg('已停用!',{icon: 5,time:1000});
                            that.html('<i class="layui-icon">&#xe62f;</i>');

                            that.parent().siblings('.td-status').children('span').addClass('layui-btn-disabled').removeClass('layui-btn-normal').text("已停用");

                            that.attr('msg','你确定要启用吗');

                        }else{
                            layer.msg('已启用!',{icon: 6,time:1000});
                            that.html('<i class="layui-icon">&#xe601;</i>');

                            that.parent().siblings('.td-status').children('span').addClass('layui-btn-normal').removeClass('layui-btn-disabled').text("已启用");
                        };
                    })
                    
                  })

              });

              
              var start = {
                min: "2017-07-01"
                ,max: '2099-06-16 23:59:59'
                ,istoday: false
                ,choose: function(datas){
                  end.min = datas; //开始日选好后，重置结束日的最小日期
                  end.start = datas //将结束日的初始值设定为开始日
                }
              };
              
              var end = {
                min: "2017-07-01"
                ,max: '2099-06-16 23:59:59'
                ,istoday: false
                ,choose: function(datas){
                  start.max = datas; //结束日选好后，重置开始日的最大日期
                }
              };
              
              document.getElementById('LAY_demorange_s').onclick = function(){
                start.elem = this;
                laydate(start);
                
              }
              document.getElementById('LAY_demorange_e').onclick = function(){
                end.elem = this
                laydate(end);
              }
              
            });

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
                        url: '<?php echo U('admin/user/deleAll');?>',
                        type: 'post',
                        dataType: 'json',
                        data: {uids: uids},
                    })
                    .done(function(res) {
                        if (res.error==0) {
                            parent.location.reload();
                            // $('.son:checked').parents('tr').remove();
                            layer.msg('删除成功', {icon: 1});
                        //     // var index = parent.layer.getFrameIndex(window.name);
                        //     // parent.layer.close(index);
                        //     // parent.location.reload();
                        };
                    })





                    layer.msg('删除成功', {icon: 1});
                });
             }
             /*用户-添加*/
            function member_add(title,url,w,h){
                x_admin_show(title,url,w,h);
            }
            /*用户-查看*/
            function member_show(title,url,id,w,h){
                x_admin_show(title,url,w,h);
            }

             /*用户-停用*/
            function member_stop(obj,id){
                layer.confirm('确认要停用吗？',function(index){
                    //发异步把用户状态进行更改
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_start(this,id)" href="javascript:;" title="启用"><i class="layui-icon">&#xe62f;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="layui-btn layui-btn-disabled layui-btn-mini">已停用</span>');
                    $(obj).remove();
                    layer.msg('已停用!',{icon: 5,time:1000});
                });
            }

            /*用户-启用*/
            function member_start(obj,id){
                layer.confirm('确认要启用吗？',function(index){
                    //发异步把用户状态进行更改
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_stop(this,id)" href="javascript:;" title="停用"><i class="layui-icon">&#xe601;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="layui-btn layui-btn-normal layui-btn-mini">已启用</span>');
                    $(obj).remove();
                    layer.msg('已启用!',{icon: 6,time:1000});
                });
            }
            // 用户-编辑
            function member_edit (title,url,id,w,h) {
                x_admin_show(title,url,w,h); 
            }
            /*密码-修改*/
            function member_password(title,url,id,w,h){
                x_admin_show(title,url,w,h);  
            }
            /*用户-删除*/
            function member_del(obj,id){
                layer.confirm('确认要删除吗？',function(index){
                    //发异步删除数据
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!',{icon:1,time:1000});
                });
            }

            </script>
        
    </body>
</html>