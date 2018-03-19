<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Worthy | Free Powerful Theme by HtmlCoder</title>
		<meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="css/animations.css" rel="stylesheet">

		<!-- Worthy core CSS file -->
		<link href="css/style.css" rel="stylesheet">

		<!-- Custom css --> 
		<link href="css/custom.css" rel="stylesheet">
	</head>

	<body class="no-trans">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- header start -->
		<!-- ================ --> 
		<header class="header fixed clearfix navbar navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<!-- header-left start -->
						<!-- ================ -->
						<div class="header-left clearfix">

							<!-- logo -->
							<div class="logo smooth-scroll">
								<a href="#banner"><img id="logo" src="images/logo.png" alt="Worthy"></a>
							</div>

							<!-- name-and-slogan -->
							<div class="site-name-and-slogan smooth-scroll">
								<div class="site-name"><a href="#banner">Worthy</a></div>
								<div class="site-slogan">Free Bootstrap Theme by <a target="_blank" href="http://htmlcoder.me">HtmlCoder</a></div>
							</div>

						</div>
						<!-- header-left end -->

					</div>
					<div class="col-md-8">

						<!-- header-right start -->
						<!-- ================ -->
						<div class="header-right clearfix">

							<!-- main-navigation start -->
							<!-- ================ -->
							<div class="main-navigation animated">

								<!-- navbar start -->
								<!-- ================ -->
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">

										<!-- Toggle get grouped for better mobile display -->
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>

										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right">
												<li class="active"><a href="#banner">Home</a></li>
												<li><a href="/reg/">登记</a></li>
												<li><a href="#services">登记</a></li>
												<li><a href="#portfolio">Portfolio</a></li>
												<li><a href="#clients">Clients</a></li>
												<li><a href="#contact">Contact</a></li>
											</ul>
										</div>

									</div>
								</nav>
								<!-- navbar end -->

							</div>
							<!-- main-navigation end -->

						</div>
						<!-- header-right end -->

					</div>
				</div>
			</div>
		</header>
		<!-- header end -->

		<!-- banner start -->
		<!-- ================ -->
		<div class="row">
							
				<div class="col-xs-12 text-center" style="margin: 2% 0;">
					<img src="../img/decoration.png"/>
					<span style="font-size: 3.2rem;vertical-align: middle;">报名参会(已截止）</span>
					<img src="../img/decoration.png"/>
				</div>
				<div class="col-xs-10 col-xs-offset-1 col-sm-offset-2">
					<h3>尊敬的与会嘉宾:</h3>
					<h4 class="col-sm-offset-1" >　　欢迎您选择预登记系统注册本次参会信息，一旦您的会议信息注册成功，您在登记</h4>
					<h4 class="col-sm-offset-1" style="margin-bottom: 50px">报名时预留的手机号码或者邮箱即可收到我们发送的短信或邮件，请注意查收。</h4>
				</div>
				<div class="box">
				<form action="../reg.php" class="demoform">
						
						<div class="col-xs-12">
							<label class="col-xs-4 col-xs-offset-0 col-md-2 col-md-offset-1 text-right">姓名：</label>
							<input class="form-control col-xs-12 col-md-8" type="text" name="name" dataType="*" />
							<span class="Validform_checktip col-xs-10 col-xs-offset-2 col-md-2"></span>
						</div>
						<div class="col-xs-12">
							<label class="col-xs-4 col-xs-offset-0 col-md-2 col-md-offset-1 text-right">性别：</label>
							<select class="form-control col-xs-12 col-md-8"  id="sex" name="A" dataType="*">
								<option value="">请选择</option>
								<option value="男">男</option>
								<option value="女">女</option>
							</select>
							<span class="Validform_checktip col-xs-10 col-xs-offset-2 col-md-2"></span>
						</div>

						<div class="col-xs-12">
							<label class="col-xs-4 col-xs-offset-0 col-md-2 col-md-offset-1  text-right">工作单位：</label>
							<input class="form-control col-xs-12 col-md-8" type="text" name="company" dataType="*" />
							<span class="Validform_checktip col-xs-10 col-xs-offset-2 col-md-2"></span>
						</div>


			
						<div class="col-xs-12">
							<label class="col-xs-4 col-xs-offset-0 col-md-2 col-md-offset-1 text-right">职务：</label>
							<input class="form-control col-xs-8" type="text" name="title" dataType="*" />
							<span class="Validform_checktip col-xs-10 col-xs-offset-2 col-md-2"></span>
						</div>


					

							<div class="col-xs-12">
							<label class="col-xs-4 col-xs-offset-0 col-md-2 col-md-offset-1 text-right">手机：</label>
							<input class="form-control col-xs-8" type="text" name="mobile" dataType="m" id="phone"/>
							<span class="Validform_checktip col-xs-10 col-xs-offset-2 col-md-2"></span>
						</div>



						<div class="col-xs-12">
							<label class="col-xs-4 col-xs-offset-0 col-md-2 col-md-offset-1 text-right">验证码：</label>
							<input class="form-control col-xs-3 col-md-4" style="width: 25%;" name="yzm" type="text" dataType="*" />
							<input type="button" class="yzm" class="col-xs-2" value="获取验证码"/>
							<span class="Validform_checktip col-xs-10 col-xs-offset-2 col-md-2"></span>
						</div>

						<div class="col-xs-12">
							<label class="col-xs-4 col-xs-offset-0 col-md-2 col-md-offset-1 text-right">邮箱：</label>
							<input class="form-control col-xs-8" type="text" name="email" dataType="e" />
							<span class="Validform_checktip col-xs-10 col-xs-offset-2 col-md-2"></span>
						</div>


						<div class="col-xs-12">
							<label class="col-xs-5 col-xs-offset-0 col-md-2 col-md-offset-1 text-right">参加论坛选项：</label>
							<span class="Validform_checktip col-xs-10 col-xs-offset-2 col-md-2"></span>
							<label class="col-xs-11 col-xs-offset-1 col-md-9 col-md-offset-3"><input type="checkbox" dataType="*" name="B[]" value="1"/>重大新药科技重大专项成果展示</label>
							<label class="col-xs-11 col-xs-offset-1 col-md-9 col-md-offset-3"><input type="checkbox" name="B[]"  value="2"/>药物与制剂国际化之路创新论坛</label>
							<label class="col-xs-11 col-xs-offset-1 col-md-9 col-md-offset-3"><input type="checkbox" name="B[]"  value="3"/>生物诊断技术创新论坛</label>
							
						</div>

						<div class="col-xs-4 col-md-2 col-md-offset-5 col-xs-offset-5">
							<input type="submit" class="upload"/>
						</div>
				</form>
				<div class="col-xs-10 col-xs-offset-1 col-sm-offset-1">
					<h4 style="margin-top: 50px ;text-align: left;">为了让您参会更加便捷，一旦您的参会时间和航班确定，请再次登录本网站，
					点击“会议回执”，进入页面填写您的详细参会信息，谢谢您的配合！</h4>
					<h4 style="text-align: left;">缴纳会议费的嘉宾，请登录本网站，点击“交费说明”，进入网页填写您的详细交费信息，谢谢您的配合！</h4>
				</div>

			</div>
			
		<!-- banner end -->

		<!-- footer start -->
		<!-- ================ -->
		<footer id="footer">

			

			<!-- .subfooter start -->
			<!-- ================ -->
			<div class="subfooter">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="text-center">Copyright © 2014 Worthy by <a target="_blank" href="http://htmlcoder.me">HtmlCoder</a>.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- .subfooter end -->

		</footer>
		<!-- footer end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
		
		<!-- Backstretch javascript -->
		<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/jquery.appear.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>

	</body>
</html>
