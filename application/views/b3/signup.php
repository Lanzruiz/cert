<!DOCTYPE html>
<html class="login-bg">
<head>
	<title>Detail Admin - Sign up</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- bootstrap -->
    <link href="<?php echo base_url(); ?>application/views/b3/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>application/views/b3/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>application/views/b3/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/views/b3/css/compiled/layout.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/views/b3/css/compiled/elements.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/views/b3/css/compiled/icons.css" />

    <!-- libraries -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/views/b3/css/lib/font-awesome.css" />
    
    <!-- this page specific styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/b3/css/compiled/signup.css" type="text/css" media="screen" />

    <!-- open sans font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <div class="header">
        <a href="index.html">
            <img src="<?php echo base_url(); ?>application/views/b3/img/logo.png" class="logo" alt="logo" />
        </a>
    </div>
    <div class="login-wrapper">

        <?php echo form_open('systems/process/user/signup'); ?>
        <div class="box">
            <div class="content-wrap">
                <h6>Sign Up</h6>
                <input class="form-control" type="text" name="email" placeholder="E-mail address">
                <input class="form-control" type="password" name="password" placeholder="Password">
                <input class="form-control" type="password" name="repassword" placeholder="Confirm Password">
                <div class="action">
                    <button class="btn-glow primary signup">Sign up</button>
                </div>                
            </div>
        </div>

        <?php echo form_close(); ?>

        <div class="already">
            <p>Already have an account?</p>
            <a href="<?php echo base_url(); ?>users/signin">Sign in</a>
        </div>
    </div>

	<!-- scripts -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo base_url(); ?>application/views/b3/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>application/views/b3/js/theme.js"></script>

</body>
</html>