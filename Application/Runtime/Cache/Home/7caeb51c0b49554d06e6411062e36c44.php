<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link href="/weixin/Public/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/weixin/Public/css/admin.css">
	<link href="/weixin/Public/css/font-awesome.min.css" rel="stylesheet">
    <script src="/weixin/Public/js/jquery.min.js"></script>
    <script src="/weixin/Public/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-full">
         <div class="row-full">
               <div class="navbar navbar-default admin-nav" role="navigation">
                  <div class="navbar-header">
                  <button  type="button"  class="navbar-toggle"  data-toggle="collapse"
                  data-target=".sidebar-menu">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand  forever" href="#">华农微信后台</a>
                  </div>
                </div>
            <div class="main-content">
               <div class="collapse navbar-collapse sidebar-menu">
                    <a href="#userMeun" class="nav-header menu-first collapsed" data-toggle="collapse"><i class="icon-user-md icon-large"></i> 基础应用</a>
                    <ul id="userMeun" class="nav nav-list collapse menu-second">
                        <li><a href="#"><i class="icon-user"></i> 网上投票</a></li>
                        <li><a href="#"><i class="icon-edit"></i> 计协义修</a></li>
                        <li><a href="#"><i class="icon-trash"></i> 沸点宣传</a></li>
                        <li><a href="#"><i class="icon-list"></i> 加油fighting</a></li>
                 
                    </ul>
                    <a href="#articleMenu" class="nav-header menu-first collapsed" data-toggle="collapse"><i class="icon-book icon-large"></i>我的大学</a>
                    <ul id="articleMenu" class="nav nav-list collapse menu-second">
                        <li><a href="#"><i class="icon-pencil"></i> 添加应用</a></li>
                        <li><a href="#"><i class="icon-list-alt"></i> 应用列表</a></li>
                    </ul>
                    <a href="#logout" class="nav-header menu-first collapsed"><i class=" icon-signout icon-large"></i>退出</a>
               </div>
            </div>
         </div> 

    </div>
<!--       <div class="container-full">
           <div class="row-full">
           	   <div class="sidebar">
           	   	<div class="sidebar-header">
           	   		<img  class="person"src="/weixin/Public/img/index.png"/>
           	   	</div>
                    <ul class="menu-nav">
                    	<li>
                    		<a href=""><i class="icon icon-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                          <span>首页</span><i class="icon icon-angle-left"></i></a>
                             <ul class="child-menu">
                             	<li><a href=""><i class="icon icon-angle-right"></i>子目录</a></li>
                             	<li><a href=""><i class="icon icon-angle-right"></i>子目录</a></li>
                             	<li><a href=""><i class="icon icon-angle-right"></i>子目录</a></li>
                             </ul>
                    	</li>
                    	<li><a href=""><i class="icon icon-leaf"></i>&nbsp;&nbsp;&nbsp;&nbsp;基础应用</a></li>
                    	<li><a href="">目录一</a></li>
                    	<li><a href="">目录一</a></li>
                    </ul>
           	   </div>
           	<div class="navbar navbar-fixed-top">
              <span class="date">2015-11-30 星期四</span>
              <ul class="nav navbar-nav  navbar-right">
                  <li><a href="index.html"><i class="icon icon-home"></i>首页</a></li>
                  <li><a href=""><i class="icon icon-cog"></i>修改密码</a></li>
                  <li><a href=""><i class="icon icon-off"></i>退出</a></li>
              </ul>
            </div>
           </div>
      </div>
 -->
</body>
</html>