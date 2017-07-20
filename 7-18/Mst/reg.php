
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>留言版</title>
    <link href="./tpl/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css"> 
      .form-horizontal{
        width: 1000px;
        /*height: 200px;*/
        margin: 0 auto;
      }
      .info{
      line-height: 35px;
    }
      .glyphicon-ok{
        color: #22B14C;
      }

      .glyphicon-remove{
        color: red;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">留言板</a>
        </div>



        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
           <!--  <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control"> -->
            </div>
           <!--  <button type="submit" class="btn btn-success">登陆</button>
            <a href="./reg.php" class="btn btn-success">注册</a> -->

          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="bg"></div>
   <div class="container" style="margin-top:100px;">

      
         <form method="post" action="./adduser.php" class="form-horizontal">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="username" name="username" placeholder="username">
            </div>
            <div class="info col-sm-5">
            </div>

          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">邮箱</label>
            <div class="info col-sm-5">
              <input type="email" class="form-control" id="emile"  name="email" placeholder="Email">
            </div>
            
            <div class="info col-sm-5">
              <!-- <span class="info glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;用户名可以用 -->
            </div>

            

          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
            <div class="info col-sm-5">
              <input type="password" class="form-control" id="Password1" name="password" placeholder="Password">
            </div>
          
          <div class="info col-sm-5">
              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp;密码格式错误请重新输入 
            </div>
          </div>

          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">确认密码</label>
            <div class="info col-sm-5">
              <input type="password" class="form-control" id="Password2" name="password" placeholder="Password">
            </div>
          
          <div class="info col-sm-5">
              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp;密码格式错误请重新输入 
            </div>
          </div>




          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-5">
              <button type="submit" class="btn btn-default" disabled="">注册</button>
            </div>
          </div>
        </form>
    
  

       

    <hr>

          <footer>
            <p>&copy; 2016 Company. Yuan.</p>
          </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

  <script type="text/javascript">
    $(function  () {
        $('#username').blur(function(event) {
           data=$(this).val();
           thex=$(this);
           $.ajax({
             url: './checkReg.php',
             type: 'post',
             dataType: 'json',
             data: {username: data}, 
           })
           .done(function(respones) {
            console.log(respones.error)

            if (respones.error==0) {
                thex.parent().siblings('.info').html("<span class='info glyphicon glyphicon-ok' aria-hidden='true'></span>&nbsp;"+respones.info);
                  // thex.css('border', '1px solid #CCCCCC');
            }else{
                thex.parent().siblings('.info').html("<span class='info glyphicon  glyphicon-remove' aria-hidden='true'></span>&nbsp;"+respones.info);
                thex.css('border', '1px solid red');
            }

           })
           .fail(function() {
             console.log("error");
           })


            $('#username').focus(function(event) {
              $(this).css('border', '1px solid #CCCCCC');
              $(this). parent().siblings('.info').html('');
            });
        });
      
  

    $('#emile').blur(function(event) {
        data=$(this).val();
        thex=$(this);
        $.ajax({
          url: './checkReg.php',
          type: 'post',
          dataType: 'json',
          data: {emile: data},
        })
        .done(function(youxiang) {
          console.log(youxiang.error);
            if (youxiang.error==0) {
                thex.parent().siblings('.info').html("<span class='info glyphicon glyphicon-ok' aria-hidden='true'></span>&nbsp;"+youxiang.info);
                  // thex.css('border', '1px solid #CCCCCC');
            }else{
                thex.parent().siblings('.info').html("<span class='info glyphicon  glyphicon-remove' aria-hidden='true'></span>&nbsp;"+youxiang.info);
                thex.css('border', '1px solid red');
            }


        })
        .fail(function() {
          console.log("error");
        })
             $('#emile').focus(function(event) {
              $(this).css('border', '1px solid #CCCCCC');
              $(this). parent().siblings('.info').html('');
        });
        
    });


    $('#Password1').blur(function(event) {
        // password_zz();
        alert(8888);
    });

    $('#Password2').blur(function(event) {
        // password_cc();
    });


   $.ajax({
        url: './checkReg.php',
        type: 'post',
        dataType: 'json',
        data: {Password1: data;Password2: data;},
      })
      .done(function() {
        console.log("success");
      })
      .fail(function() {
        console.log("error");
      })
      .always(function() {
        console.log("complete");
      });
         

















    })





















  </script>











  </body>
</html>
