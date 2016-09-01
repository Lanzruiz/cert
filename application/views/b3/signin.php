<!DOCTYPE html>
<html class="login-bg">
<head>
	<title>Detail Admin - Sign in</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- bootstrap -->
    <link href="<?php echo base_url(); ?>application/views/b3/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>application/views/b3/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/views/b3/css/compiled/layout.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/views/b3/css/compiled/elements.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/views/b3/css/compiled/icons.css" />

    <!-- libraries -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/views/b3//lib/font-awesome.css" />
    
    <!-- this page specific styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/b3/css/compiled/signin.css" type="text/css" media="screen" />

    <!-- open sans font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>


   

    <div class="login-wrapper">
        <a href="index.html">
            <img class="logo" src="<?php echo base_url(); ?>application/views/b3/img/logo-white.png" alt="logo" />
        </a>

        <div class="box">

            <?php echo form_open('systems/process/user/login'); ?>
            <div class="content-wrap">
                <h6>Log in</h6>
                <input class="form-control" type="text" name="email" placeholder="E-mail address">
                <input class="form-control" type="password" name="password" placeholder="Your password">
                <a href="#" class="forgot">Forgot password?</a>
                <div class="remember">
                    <input id="remember-me" type="checkbox">
                    <label for="remember-me">Remember me</label>
                </div>
                <button class="btn-glow primary login">Log in</button>
            </div>
        </div>

        <?php echo form_close(); ?>

        <div class="no-account">
            <p>Don't have an account?</p>
            <a href="<?php echo base_url(); ?>users/signup">Sign up</a>
        </div>
    </div>

	<!-- scripts -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>

    <!-- pre load bg imgs -->
    <script type="text/javascript">
        $(function () {
            // bg switcher
            var $btns = $(".bg-switch .bg");
            $btns.click(function (e) {
                e.preventDefault();
                $btns.removeClass("active");
                $(this).addClass("active");
                var bg = $(this).data("img");

                $("html").css("background-image", "url('<?php echo base_url(); ?>application/views/b3/img/bgs/" + bg + "')");
            });

        });
    </script>
</body>
</html>