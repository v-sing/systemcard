<!DOCTYPE html>
<html  class="x-admin-sm">
<head>
	<meta charset="UTF-8">
	<title>建业至尊营销中心</title>
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="./static/xadmin/css/font.css">
    <link rel="stylesheet" href="./static/xadmin/css/login.css">
	  <link rel="stylesheet" href="./static/xadmin/css/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="./lib/layui/layui.js" charset="utf-8"></script>
    <!--[if lt IE 9]>
      <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
      <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-bg">
    <div class="login layui-anim layui-anim-up">
        <div class="message">建业至尊营销中心-管理登录</div>
        <div id="darkbannerwrap"></div>
        <form method="post" class="layui-form" >
            @csrf
            <input name="adminName" placeholder="用户名"  type="text" lay-verify="required" class="layui-input" value="">
            <hr class="hr15">
            <input name="password" lay-verify="required" placeholder="密码"  type="password" class="layui-input" value="">
            <hr class="hr15">
            <input value="登录" lay-submit lay-filter="login" style="width:100%;" type="submit">
            <hr class="hr20" >
        </form>
    </div>
</body>
    <script>
        $(function  () {
            layui.use('form', function(){
              var form = layui.form;
                form.on('submit(login)', function(data){
                  $.post('/login',data.field,function (res) {
                      if(res.status=='success'){
                          location.href='/'
                      }else{
                          layer.alert(res.msg,{icon:5});
                      }
                  });
                return false;
              });
            });
        });
        if(top.location != location){
            top.location.href= location.href;
        }
    </script>
</html>
