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
	<div id="register">
	<div class="container">
	         	 <div class="register ">
                     <h1>注册</h1>
                     <form role="form" action="/weixin/index.php/Home/Index/doregister" method="post" id="register_form">
                         <div class="form-group">
                         	 <input type="text" class="form-control" name="email" id="email" placeholder="电子邮箱"/>
                         	 <i class="icon icon-envelope"></i>
                         </div>
                         <div class="form-group">
                         	 <input type="text" class="form-control" name="username" id="username" placeholder="账号"/>
                         	 <i class="icon  icon-user"/></i>
                         </div>
                         <div class="form-group">
                         	 <input type="password" class="form-control" name="password" id="password" placeholder="密码"/>
                         	 <i class="icon icon-shield"></i>
                         </div>
                         <div class="form-group">
                         	 <input type="password" class="form-control" name="repassword" id="repassword" placeholder="确认密码"/>
                         	 <i class="icon icon-shield"></i>
                         </div>
                         <div class="form-group">
                         	 <div class="form-left">
                         	  <input type="text" class="form-control" name="code" id="code" class="code" placeholder="验证码"/>
                         	 <i class="icon icon-key"></i>
                         	 </div>
                         	 <div class="form-right">
                         	 	  <img class="code" alt="验证码" src="<?php echo U('Home/Index/verify_c',array());?>"  onclick="this.src=this.src+'?'" title="点击刷新">
                         	 </div>
                         </div>
                         <label class="check">
                         	 <input type="checkbox" id="check" name="check">&nbsp;&nbsp;请同意
                         	 <a href="" target="_blank" class="a">
				                隐私条款
				             </a>
				             <a href="" target="_blank" class="a">
				                隐私条款
				             </a>
                         </label>
                         <div class="form-group">
                             <button type="submit" id="submit_btn" class="btn-default form-control btn">立即注册</button>
                         </div>
                     </form>
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
		var form = $('#register_form');
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
				"email":{required:1,email:1},
				"username":{required:1},
				"password":{required:1,minlength:6,maxlength:20},
				"repassword":{required:1,minlength:6,maxlength:20,equalTo: "#password" },
				"check":{required:1}
			},
			//验证未通过提示消息
			messages : {
				"username":{required:"请输入昵称！"},
				"email":{required:"请输入邮箱！",email:"邮箱格式不正确，请重新输入！"},
				"password":{required:"请输入密码",minlength:"密码最少输入6位！",maxlength:"密码最多输入20位！"},
				"repassword":{required:"请再次输入密码！",minlength:"密码最少输入6位！",maxlength:"密码最多输入20位！",equalTo: "两次输入密码不一致！" },
				"check":{required:"请同意注册协议！"}
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
							layer.alert('验证码填写错误');
						}
						else if(d['status'] == 0){
							layer.alert('用户名已存在',1);
						}else if(d['status'] == 4){
							layer.alert('验证码填写错误');
						}else if(d['status'] == 1){
							layer.alert('邮箱已注册',1);
						}else if(d['status'] == 3){
							layer.alert('注册失败，请重试!',1);
						}else{
							layer.msg('注册成功');
							 window.location.href="/weixin/index.php/Home/Index/login";
						}
					}
				});
			}
		});
	});
});
</script>