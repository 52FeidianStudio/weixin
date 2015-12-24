<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link href="/weixin/Public/css/bootstrap.css" rel="stylesheet">
	<link href="/weixin/Public/css/font-awesome.min.css" rel="stylesheet">
  <link href="/weixin/Public/css/home.css" rel="stylesheet">
</head>
<body class="reg-log">
    <section class="header">
        <nav class="navbar navbar-default navbar-custom" role="navigation">
           <div class="container">
             <div class="navbar-header">
                          <button  type="button"  class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse ">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <p class="navbar-brand">
                    <img src="/weixin/Public/img/logo.png"/>
                </p>
            </div>
            <div class="collapse navbar-collapse navbar-responsive-collapse nav-menu">
                <ul class="nav navbar-nav navbar-right navbar-item">
                    <li><a href="index.html">首页</a></li>
                    <li><a href="">产品</a></li>
                    <li><a href="">关于</a></li>
                </ul>
            </div>
           </div>     
        </nav>
   	<div id="login">
		<div class="container">
	         <div class="row">
	         	 <div class="login">
                     <h1>登录</h1>
                     <form role="form" action="/weixin/index.php/Home/Index/dologin" method="post" id="login_form">
                        <div class="form-group">
                           <input type="text" class="form-control" name="email" id="email" placeholder="邮箱"/>
                           <i class="icon  icon-user"/></i>
                         </div>
                         <div class="form-group">
                           <input type="password" class="form-control" name="password" id="password" placeholder="密码"/>
                           <i class="icon icon-key"></i>
                         </div>
                         <div class="form-group">
                             <div class="form-left">
                              <input type="text" class="form-control" name="code" id="code" class="code" placeholder="验证码"/>
                             <i class="icon icon-shield"></i>
                             </div>
                             <div class="form-right">
                                <img class="code" id="code" alt="验证码" src="<?php echo U('Home/Index/verify_c',array());?>" onclick="this.src=this.src+'?'"  title="点击刷新">
                             </div>
                         </div>
                             
                         <label class="text-left">
                           <input type="checkbox">&nbsp;&nbsp;记住我
                        </label>
                         <div class="form-group">
                             <button type="submit" id="submit_btn" class="btn-default form-control btn">立即登录</button>
                         </div>
                     </form>
	         	 </div>
	         </div>
		</div>
    </div>
  <script src="/weixin/Public/js/jquery.min.js"></script>
  <script src="/weixin/Public/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/weixin/Public/js/validate.js"></script>
  <script type="text/javascript" src="/weixin/Public/layer/layer.min.js"></script>
  </body>
</html>
<script type="text/javascript">
	$(function(){ 
    $(document).keydown(function(event){ 
	  if(event.keyCode==13){ 
		  $("#submit_btn").submit();
	  } 
    });

    $(function() {
		var form = $('#login_form');
		var actionUrl = form.attr('action');

		//表单验证开始
		form.validate({
			//是否在获取焦点时验证
			onfocusout : false,
			//是否在敲击键盘时验证
			onkeyup : false,
			//当鼠标点击时验证
			onclick : false,
			//验证错误
			showErrors : function(errorMap, errorArr) {
				//errorMap {'name':'错误信息'}
				//errorArr [{'message':'错误信息',element:({})}]
				try {
					layer.alert(errorArr[0].message, 3);
				} catch (err) {
				}
			},
			//验证规则
			rules : {
				"email":{required:1},"password":{required:1},"code":{required:1}
			},
			//验证未通过提示消息
			messages : {
				"email":{required:"请输入邮箱！"},
				"password":{required:"请输入密码"},
				"code":{require:"请输入验证码!"}
			},
			//给未通过验证的元素加效果,闪烁等
			highlight : false,
			//是否在获取焦点时验证
			onfocusout : false,
			//验证通过，提交表单
			submitHandler : function(forms) {
				$.ajax({
					type : 'post',
					url : actionUrl,
					data :form.serialize(),
					dataType : "json",
					success : function(d) {
					   if(d['code'] == 0){
					   	   layer.alert('验证码填写错误!');
					   }else if(d['status'] == 0){
							layer.alert('该邮箱未注册！');
						}else if(d['status'] == 1){
							layer.alert('密码错误');
						}else{
						  window.location.href="/weixin/index.php/Home/Main";
						}
					}
				});
			}
		});
	});
});
</script>