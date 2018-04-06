<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>登录</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= $webRoot ?>/static/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= $SwebRoot ?>/static/css/login.css" rel="stylesheet">
</head>

<body>
<form class="form-signin">
    <div class="text-center mb-4">
        <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Floating labels</h1>
        <p>Build form controls with floating labels via the <code>:placeholder-shown</code> pseudo-element. <a
                    href="https://caniuse.com/#feat=css-placeholder-shown">Works in latest Chrome, Safari, and
                Firefox.</a></p>
    </div>

    <div class="form-label-group">
        <input type="email" id="inputEmail" name="name" class="form-control" placeholder="Email address" required
               autofocus>
        <label for="inputEmail">Email address</label>
    </div>

    <div class="form-label-group">
        <input type="telphone" id="inputPassword" name="tel" class="form-control" placeholder="telphone" required>
        <label for="inputPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="button" id="login">Sign in</button>
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
</form>
<script type="text/javascript" src="<?= $webRoot ?>/plugins/jquery.min.js"></script>
<script type="text/javascript" src="<?= $webRoot ?>/static/bootstrap/js/bootstrap.min.js"></script>
<!-- Modernizr javascript -->
<script type="text/javascript" src="plugins/modernizr.js"></script>

<!-- Isotope javascript -->
<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>

<!-- Backstretch javascript -->
<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

<!-- Appear javascript -->
<script type="text/javascript" src="plugins/jquery.appear.js"></script>
<!-- submit提交会出现问题 -->
<script>
    $('#login').click(function () {
        var name = $('[name="name"]').val();
        var mobile = $('[name="tel"]').val();
        $.ajax({
            url: '/login/yz',
            type: 'post',
            dataType: 'json',
            data: {'name': name, 'tel': mobile},
            success: function (res) {
                if (res.error == 0) {
                    //alert(res.msg);
                    window.location = '<?= TXApp::$base->session->lastUrl?>';
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

</body>
</html>
