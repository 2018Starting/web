<!DOCTYPE html>
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>回执</title>
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
                                        <li><a href="/hz">登记</a></li>
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
<div class="col-xs-12 text-center">

    <form class="receipt">
        <table class="table table-bordered">
            <caption class="text-center" style="font-size: 2.5rem;">会议回执</caption>
            <caption style="font-size: 1.5rem;">
                尊敬的与会嘉宾：
                <br>
                　　为了让您的参会更加便捷，请您详细、准确填写本页信息，每项信息都需填写，不能有漏项，否则无法提交您的信息，谢谢！
            </caption>

            <tbody>
            <tr>
                <td class="col-xs-2">姓名</td>
                <td colspan="2"><input style="width: 100%;" type="text" readonly value=
                    <?= TxApp::$model->cus->Name ?>
                    ></td>
                <td class="col-xs-2">手机</td>
                <td><input style="width: 100%;" type="text" readonly value=<?= TxApp::$model->cus->Tel ?>></td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <td rowspan="4" class="col-xs-2" style="vertical-align: middle;">交通事宜</td>
                <td class="col-xs-2">到达日期</td>
                <td class="col-xs-3"><input type="text" style="width: 100%;" class="arrive" name="C" datatype="*" lay-key="3"></td>
                <td class="col-xs-2">到达时间</td>
                <td class="col-xs-3"><input type="text" style="width: 100%;" class="arrive_time" name="D" datatype="*"  lay-key="1"></td>
            </tr>
            <tr>
                <td class="col-xs-2">交通信息</td>
                <td class="col-xs-3"><input type="text" style="width: 100%;" datatype="*" name="E"></td>
                <td class="col-xs-2">接站需求</td>
                <td class="col-xs-3">
                    <label><input type="radio" name="F" value="需要" datatype="*">&nbsp;需要</label>
                    &nbsp;&nbsp;
                    <label><input type="radio" value="不需要" name="F">&nbsp;不需要</label>
                </td>
            </tr>
            <tr>
                <td class="col-xs-2">离开日期</td>
                <td class="col-xs-3"><input type="text" style="width: 100%;" class="leave" name="G" datatype="*"
                                            lay-key="4"></td>
                <td class="col-xs-2">离开时间</td>
                <td class="col-xs-3"><input type="text" style="width: 100%;" class="leave_time" name="H" datatype="*"
                                            lay-key="2"></td>
            </tr>
            <tr>
                <td class="col-xs-2">交通信息</td>
                <td class="col-xs-3"><input type="text" style="width: 100%;" name="I" datatype="*"></td>
                <td class="col-xs-2">送站需求</td>
                <td class="col-xs-3">
                    <label><input type="radio" name="J" value="需要" datatype="*">&nbsp;需要</label>
                    &nbsp;&nbsp;
                    <label><input type="radio" name="J" value="不需要">&nbsp;不需要</label>
                </td>
            </tr>
            <tr>
                <td class="col-xs-2" style="vertical-align: middle;">住宿要求</td>
                <td colspan="4" class="text-left">
                    &nbsp;&nbsp;
                    <label><input type="radio" name="K" value="不需要">&nbsp;不需要</label>
                    &nbsp;&nbsp;
                    <label><input type="radio" name="K" datatype="*" value="单人间">&nbsp;单人间</label>
                    &nbsp;&nbsp;
                    <label><input type="radio" name="K" value="双人间">&nbsp;双人间</label>
                    &nbsp;&nbsp;
                    同住嘉宾信息：<input style="border-bottom: 1px solid #000;width: 30%;" type="text" name="L" datatype="*">
                    <br>
                    &nbsp;&nbsp;
                    备注：同住宾客信息“有”请填写姓名和手机号码，没有直接填写“无”。
                </td>
            </tr>
            <tr>
                <td class="col-xs-2" style="vertical-align: middle;">参观路线</td>
                <td colspan="4" class="text-left">
                    &nbsp;&nbsp;
                    <label><input type="radio" name="M" datatype="*" value="东线">&nbsp;东线：</label>
                    观摩高新区山东国际生物科技园（含医药健康产业宣传展示中心）、绿叶产业园、东方海洋
                    <br>
                    &nbsp;&nbsp;
                    <label><input type="radio" name="M" value="西线">&nbsp;西线：</label>
                    观摩开发区荣昌生物科技园、迈百瑞、东诚生化、正海生物。
                    <br>
                    &nbsp;&nbsp;
                    <label><input type="radio" name="M" value="不参与">&nbsp;不参与</label>
                </td>
            </tr>
            </tbody>
        </table>

        <div class="col-xs-4 col-md-2 col-md-offset-5 col-xs-offset-4">
            <input type="button" class="upload" value="提交">
        </div>

    </form>
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
    $('.upload').click(function () {

        $.ajax({
            url: '/hz/renew',
            type: 'post',
            dataType: 'json',
            data: $('.receipt').serialize(),
            success: function (res) {
                if (res.error == 0) {
                    alert(res.msg);
                    window.location = '/';
                }
                else {
                    alert(res.msg);
                }
            },
            error: function () {
                console.log("ajax请求失败");
            }
        })
    })
</script>
<!--流程控制语句end-->

</body>
</html>
