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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/views/b3/css/lib/font-awesome.css" />
    
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
      
        <div class="box">
            <div class="content-wrap">
            <?php echo validation_errors(); ?>
            <?php echo form_open('systems/login/admin'); ?>
                <h6>Log in</h6>
                <input class="form-control" type="text" id="email" name="email" placeholder="E-mail address">
                <input class="form-control" type="password" id="password" name="password" placeholder="Your password">
                <a href="#" class="forgot">Forgot password?</a>
                <div class="remember">
                    <input id="remember-me" type="checkbox">
                    <label for="remember-me">Remember me</label>
                </div>
                <button class="btn-glow primary login" onClick="login()">Log in</button>
            </div>
            </form>
        </div>

       

        <div class="no-account">
            <p>Don't have an account?</p>
            <a>Sign up</a>
        </div>
    </div>

	<!-- scripts -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo base_url(); ?>application/views/b3/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>application/views/b3/js/theme.js"></script>
    <script>

     function login() {

        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;

        

         $.post( "<?php echo base_url(); ?>/cert/system/call/login/get", function( data ) {
                alert(data);
         });
     }

    </script>

    
</body>
</html>