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
<body class="index">
    <section class="header">
        <nav class="navbar navbar-default navbar-custom" role="navigation">
           <div class="container">
             <div class="navbar-header">
                <button  type="button"  class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
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
           <div class="slider">
              <div class="container">
                   <div class="row">
                           <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                                  <div id="myCarousel" class="col-lg-8 carousel slide" data-ride="carousel" data-interval="2000">
                                      <ol class="carousel-indicators">
			      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			      <li data-target="#myCarousel" data-slide-to="1"></li>
			      <li data-target="#myCarousel" data-slide-to="2"></li>
	                        </ol>  
		         <div class="carousel-inner">
			      <div class="item active">
			         <img src="/weixin/Public/img/slide1.png" alt="First slide">
			      </div>
			      <div class="item">
			         <img src="/weixin/Public/img/slide2.png" alt="Second slide">
			      </div>
			      <div class="item">
			         <img src="/weixin/Public/img/slide3.png" alt="Third slide">
			      </div>
	                     </div>
			     <a class="carousel-control left" href="#myCarousel" 
			      data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			     <a class="carousel-control right" href="#myCarousel" 
			      data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	 	     </div>
                           </div>
                           <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                                     <h1>离你身边最近的微信</h1>
                                     <h2>this will always be with you</h2>
                                     <div class="link">
	                                     <a class="btn btn-primary register-btn btn-lg" href="/weixin/index.php/Home/Index/register">注册</a>
	                                     <a class="btn btn-primary login-btn btn-lg" href="/weixin/index.php/Home/Index/login">登陆</a>
                                     </div>
                           </div>
                   </div>
              </div>
       </div>
       </section>
       <section class="feature">
            <div class="container">
                 <div class="row use-case">
                 	  <div class="col-md-6">
                 	  	    <img src="/weixin/Public/img/1.png"/>
                 	  </div>
                 	  <div class="col-md-6">
                            <h2 class="detail">Code, Test, Deploy, repeat.</h2>
                            <p>After code is pushed and tested by your CI, spikenode can be triggered to automatically deploy to live servers, in any environment you choose.</p>
                 	  </div>
                 </div>
                 <div class="row use-case">
                      <div class="col-md-6">
                            <h2 class="detail">Code, Test, Deploy, repeat.</h2>
                            <p>After code is pushed and tested by your CI, spikenode can be triggered to automatically deploy to live servers, in any environment you choose.</p>
                 	  </div>
                 	  <div class="col-md-6">
                 	  	    <img src="/weixin/Public/img/2.png"/>
                 	  </div>
                 </div>
                 <div class="row use-case">
                 	  <div class="col-md-6">
                 	  	    <img src="/weixin/Public/img/3.png"/>
                 	  </div>
                 	  <div class="col-md-6">
                            <h2 class="detail">Code, Test, Deploy, repeat.</h2>
                            <p>After code is pushed and tested by your CI, spikenode can be triggered to automatically deploy to live servers, in any environment you choose.</p>
                 	  </div>
                 </div>
                 <div class="row use-case">
                      <div class="col-md-6">
                            <h2 class="detail">Code, Test, Deploy, repeat.</h2>
                            <p>After code is pushed and tested by your CI, spikenode can be triggered to automatically deploy to live servers, in any environment you choose.</p>
                 	  </div>
                 	  <div class="col-md-6">
                 	  	    <img src="/weixin/Public/img/4.png"/>
                 	  </div>
                 </div>
            </div>     
       </section>
       <section class="application">
       	<div class="container">
             <div class="row">
             	 <div class="col-md-12">
             	 	    <h2>我们的应用</h2>
             	 </div>
             </div>
             <div class="row">
	             <div class="col-md-4 app">
	                  <img class="img-responsive" src="/weixin/Public/img/3c3dd0e8.library.png"/>
	                  <p>电影</p>
	             </div>
	             <div class="col-md-4 app">
	                  <img class="img-responsive" src="/weixin/Public/img/9abdc69d.api.png"/>
	                  <p>电影</p>
	             </div>
	             <div class="col-md-4 app">
	                  <img  class="img-responsive" src="/weixin/Public/img/13e231c8.callback.png"/>
	                  <p>电影</p>
	             </div>
            </div>
            <div class="row">
	             <div class="col-md-4 app">
	                  <img class="img-responsive" src="/weixin/Public/img/21dba60e.scheduling.png"/>
	                  <p>电影</p>
	             </div>
	             <div class="col-md-4 app">
	                  <img  class="img-responsive" src="/weixin/Public/img/0184b212.container.png"/>
	                  <p>电影</p>
	             </div>
	             <div class="col-md-4 app">
	                  <img class="img-responsive" src="/weixin/Public/img/e94c6ac9.editor.png"/>
	                  <p>电影</p>
	             </div>
            </div>
       	</div>

       </section>
       <section class="footer">
            <div class="container">
            	<div class="row">
            		<div class="col-md-12">
                         <ul class="links list-inline">
                             <li><a href="">沸点官网</a></li>
                             <li><a href="">信息学院</a></li>
                             <li><a href="">sunshine个人主页</a></li>
                             <li><a href="">bootstrap中文网</a></li>
                         </ul> 
            		</div>
              <div class="row">
                <div class="col-md-12 copyright">
                    <p><span class="ll"><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1254826874'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1254826874%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script></span>&nbsp;&nbsp;&nbsp;Copyright ©2015 All Rights Reserved </p>
                </div>
              </div>
            	</div>
            </div>
       </section>

  <script src="/weixin/Public/js/jquery.min.js"></script>
  <script src="/weixin/Public/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/weixin/Public/js/validate.js"></script>
  <script type="text/javascript" src="/weixin/Public/layer/layer.min.js"></script>
  </body>
</html>