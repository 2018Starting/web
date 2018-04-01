<!DOCTYPE html>
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
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
    <link rel="shortcut icon" href="<?= $webRoot ?>/static/images/favicon.ico">

    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="<?= $webRoot ?>/static/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="<?= $webRoot ?>/static/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Plugins -->
    <link href="<?= $webRoot ?>/static/css/animations.css" rel="stylesheet">

    <!-- Worthy core CSS file -->
    <link href="<?= $webRoot ?>/static/css/style.css" rel="stylesheet">

    <!-- Custom css -->
    <link href="<?= $webRoot ?>/static/css/custom.css" rel="stylesheet">

    <!--reg css-->
    <link href="<?= $webRoot ?>/static/css/reg.css" rel="stylesheet">
</head>

<body class="no-trans">

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
                        <a href="#banner"><img id="logo" src="<?= $webRoot ?>/static/images/logo.png" alt="Worthy"></a>
                    </div>

                    <!-- name-and-slogan -->
                    <div class="site-name-and-slogan smooth-scroll">
                        <div class="site-name"><a href="#banner">Worthy</a></div>
                        <div class="site-slogan">Free Bootstrap Theme by <a target="_blank" href="http://htmlcoder.me">HtmlCoder</a>
                        </div>
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
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                            data-target="#navbar-collapse-1">
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
                                        <li><a href="/reg">登记</a></li>
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
<div class="statement">
                
                <p style="font-size: 3.2rem;font-weight: 300;margin-left: 50px;">尊敬的与会嘉宾：</p>
                <p style="text-indent: 2em;width: 80%;margin: 0 auto;font-size: 2.2rem;margin-bottom: 25px">
                 欢迎您选择预登记系统注册本次参会信息，一旦您的会议信息注册成功，您在登记报名时预留的手机号码或者邮箱即可收到我们发送的短信或邮件，会议报道当天，请凭本人名片及以下ID<?= TXApp::$base->session->userId?>，前往会议报到处注册报道即可。谢谢参会。                
                </p>

                <div class="code">
                    
                    
                    
                </div>
                <div style="text-align: center;">
                    <input type="button" value="会议回执" class="btn1">
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
                        <p class="text-center">Copyright © 2014 Worthy by <a target="_blank" href="http://htmlcoder.me">HtmlCoder</a>.
                        </p>
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
    <script type="text/javascript" src="<?= $webRoot ?>/static/bootstrap/js/bootstrap.min.js"></script>

    <!-- Modernizr javascript -->
    <script type="text/javascript" src="plugins/modernizr.js"></script>

    <!-- Isotope javascript -->
    <script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>

    <!-- Backstretch javascript -->
    <script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

    <!-- Appear javascript -->
    <script type="text/javascript" src="plugins/jquery.appear.js"></script>

    <!-- Initialization of Plugins -->
    <script type="text/javascript" src="<?= $webRoot ?>/static/js/template.js"></script>

    <!-- Custom Scripts -->
    <script type="text/javascript" src="<?= $webRoot ?>/static/js/custom.js"></script>
    <!--流程控制语句start-->
		<script>

        $('.btn1').click(function(){
            window.location='/hz';
        })

    </script>
		<!--流程控制语句end-->

</body>
</html>
