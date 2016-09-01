<!DOCTYPE html>
<html>
<head>
	<title>Detail Admin - Form Wizard</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- bootstrap -->
    <link href="<?php echo base_url(); ?>application/views/b3/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>application/views/b3/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- libraries -->
    <link href="<?php echo base_url(); ?>application/views/b3/css/lib/uniform.default.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>application/views/b3/css/lib/select2.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>application/views/b3/css/lib/bootstrap.datepicker.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>application/views/b3/css/lib/font-awesome.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>application/views/b3/css/lib/jquery.dataTables.css" type="text/css" rel="stylesheet" />
    

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/views/b3/css/compiled/layout.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/views/b3/css/compiled/elements.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/views/b3/css/compiled/icons.css" />
    
    <!-- this page specific styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/b3/css/compiled/form-wizard.css" type="text/css" media="screen" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/views/b3/css/compiled/code-editor.css" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/b3/css/compiled/datatables.css" type="text/css" media="screen" />

    <!-- open sans font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

    <!-- navbar -->
    <header class="navbar navbar-inverse" role="banner">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" id="menu-toggler">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="<?php echo base_url(); ?>application/views/b3/img/logo.png" alt="logo" /></a>
        </div>
        <ul class="nav navbar-nav pull-right hidden-xs">
            <li class="hidden-xs hidden-sm">
                <input class="search" type="text" />
            </li>
            <li class="notification-dropdown hidden-xs hidden-sm">
                <a href="#" class="trigger">
                    <i class="icon-warning-sign"></i>
                    <span class="count">8</span>
                </a>
                <div class="pop-dialog">
                    <div class="pointer right">
                        <div class="arrow"></div>
                        <div class="arrow_border"></div>
                    </div>
                    <div class="body">
                        <a href="#" class="close-icon"><i class="icon-remove-sign"></i></a>
                        <div class="notifications">
                            <h3>You have 6 new notifications</h3>
                            <a href="#" class="item">
                                <i class="icon-signin"></i> New user registration
                                <span class="time"><i class="icon-time"></i> 13 min.</span>
                            </a>
                            <a href="#" class="item">
                                <i class="icon-signin"></i> New user registration
                                <span class="time"><i class="icon-time"></i> 18 min.</span>
                            </a>
                            <a href="#" class="item">
                                <i class="icon-envelope-alt"></i> New message from Alejandra
                                <span class="time"><i class="icon-time"></i> 28 min.</span>
                            </a>
                            <a href="#" class="item">
                                <i class="icon-signin"></i> New user registration
                                <span class="time"><i class="icon-time"></i> 49 min.</span>
                            </a>
                            <a href="#" class="item">
                                <i class="icon-download-alt"></i> New order placed
                                <span class="time"><i class="icon-time"></i> 1 day.</span>
                            </a>
                            <div class="footer">
                                <a href="#" class="logout">View all notifications</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="notification-dropdown hidden-xs hidden-sm">
                <a href="#" class="trigger">
                    <i class="icon-envelope"></i>
                </a>
                <div class="pop-dialog">
                    <div class="pointer right">
                        <div class="arrow"></div>
                        <div class="arrow_border"></div>
                    </div>
                    <div class="body">
                        <a href="#" class="close-icon"><i class="icon-remove-sign"></i></a>
                        <div class="messages">
                            <a href="#" class="item">
                                <img src="img/contact-img.png" class="display" alt="user" />
                                <div class="name">Alejandra Galván</div>
                                <div class="msg">
                                    There are many variations of available, but the majority have suffered alterations.
                                </div>
                                <span class="time"><i class="icon-time"></i> 13 min.</span>
                            </a>
                            <a href="#" class="item">
                                <img src="img/contact-img2.png" class="display" alt="user" />
                                <div class="name">Alejandra Galván</div>
                                <div class="msg">
                                    There are many variations of available, have suffered alterations.
                                </div>
                                <span class="time"><i class="icon-time"></i> 26 min.</span>
                            </a>
                            <a href="#" class="item last">
                                <img src="img/contact-img.png" class="display" alt="user" />
                                <div class="name">Alejandra Galván</div>
                                <div class="msg">
                                    There are many variations of available, but the majority have suffered alterations.
                                </div>
                                <span class="time"><i class="icon-time"></i> 48 min.</span>
                            </a>
                            <div class="footer">
                                <a href="#" class="logout">View all messages</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle hidden-xs hidden-sm" data-toggle="dropdown">
                    Your account
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="personal-info.html">Personal info</a></li>
                    <li><a href="#">Account settings</a></li>
                    <li><a href="#">Billing</a></li>
                    <li><a href="#">Export your data</a></li>
                    <li><a href="#">Send feedback</a></li>
                </ul>
            </li>
            <li class="settings hidden-xs hidden-sm">
                <a href="personal-info.html" role="button">
                    <i class="icon-cog"></i>
                </a>
            </li>
            <li class="settings hidden-xs hidden-sm">
                <a href="signin.html" role="button">
                    <i class="icon-share-alt"></i>
                </a>
            </li>
        </ul>
    </header>
    <!-- end navbar -->

   <!-- sidebar -->
    <div id="sidebar-nav">
        <ul id="dashboard-menu">
            <li>                
                <a href="<?php echo base_url(); ?>users/">
                    <i class="icon-home"></i>
                    <span>Home</span>
                </a>
            </li>  
            <!--          
            <li>
                <a href="chart-showcase.html">
                    <i class="icon-signal"></i>
                    <span>Charts</span>
                </a>
            </li> !-->
            <li class="active">
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
                <a class="dropdown-toggle" href="#">
                     <i class="icon-tablet"></i>
                    <span>Pages</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="active submenu">
                    <li><a href="<?php echo base_url(); ?>users/pages/pages">list</a></li>
                    <li><a href="#" class="active">Add New</a></li>
                    
                </ul>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->


	<!-- main container -->
    <div class="content">
        
      
        
        <div id="pad-wrapper">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div id="fuelux-wizard" class="wizard row">
                        <ul class="wizard-steps">
                            <li data-target="#step1" class="active">
                                <span class="step">1</span>
                                <span class="title">Name &<br> Content</span>
                            </li>
                            <li data-target="#step2">
                                <span class="step">2</span>
                                <span class="title">Date to<br> Publish</span>
                            </li>
                            <li data-target="#step3">
                                <span class="step">3</span>
                                <span class="title">Parent <br> Page</span>
                            </li>
                            <li data-target="#step4">
                                <span class="step">4</span>
                                <span class="title">Verification</span>
                            </li>
                        </ul>                            
                    </div>
                    <div class="step-content">
                        <div class="step-pane active" id="step1">
                            <div class="row form-wrapper">
                                <div class="col-md-8">
                                    <form>
                                        <div class="field-box">
                                            <label>Name:</label>
                                            <input class="form-control" type="text" />
                                        </div>
                                        <div class="field-box">
                                            <label>Type of Content</label>
                                            <select id="select_content">
                                                <option> -- Choose -- </option>
                                                <option value="instruction">Instruction</option>
                                                <option value="reminders">Announcement</option>
                                                <option value="product">Product</option>
                                                <option value="map">Map</option>
                                            </select>
                                        </div>
                                        <div class="field-box" id="result_content">
                                           
                                        </div>
                                       
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="step-pane" id="step2">
                            <div class="row form-wrapper">
                                <div class="col-md-8">
                                    <form>
                                        <div class="field-box">
                                            <label>Address:</label>
                                            <input type="text" class="form-control" id="datepicker">
                                        </div>
                                       
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="step-pane" id="step3">
                            <div class="row form-wrapper">
                                <div class="col-md-8">
                                    <form>
                                        <div class="field-box">
                                            <label>Username:</label>
                                            <input class="form-control" type="text" />
                                        </div>
                                        <div class="field-box">
                                            <label>Photo:</label>
                                            <input type="file" />
                                        </div>
                                        <div class="field-box">
                                            <label>App name:</label>
                                            <input class="form-control" type="text" />
                                        </div>
                                        <div class="field-box">
                                            <label>Time zone:</label>
                                            <select>
                                                <option value="Hawaii">(GMT-10:00) Hawaii</option>
                                                <option value="Alaska">(GMT-09:00) Alaska</option>
                                                <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                                <option value="Arizona">(GMT-07:00) Arizona</option>
                                                <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                                <option value="Central Time (US &amp; Canada)">(GMT-06:00) Central Time (US &amp; Canada)</option>
                                                <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                                <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option><option value="" disabled="disabled">-------------</option>
                                                <option value="American Samoa">(GMT-11:00) American Samoa</option>
                                                <option value="International Date Line West">(GMT-11:00) International Date Line West</option>
                                                <option value="Midway Island">(GMT-11:00) Midway Island</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="step-pane" id="step4">
                            <div class="row form-wrapper payment-info">
                                <div class="col-md-8">
                                    <form>
                                        <div class="field-box">
                                            <label>Subscription Plan:</label>
                                            <select id="plan">
                                                <option value="66">Basic - $2.99/month (USD)</option>
                                                <option value="67">Pro - $9.99/month (USD)</option>
                                                <option value="68">Premium - $49.99/month (USD)</option>
                                            </select>
                                        </div>
                                        <div class="field-box">
                                            <label>Credit Card Number:</label>
                                            <input class="form-control" type="text" />
                                        </div>
                                        <div class="field-box">
                                            <label>Expiration:</label>
                                            <input class="form-control" style="width:60px;display:inline" placeholder="MM" type="text" /> 
                                            &nbsp; / &nbsp;
                                            <input class="form-control" style="width:85px;display:inline" placeholder="YYYY" type="text" />
                                        </div>
                                        <div class="field-box">
                                            <label>Card CVC Number:</label>
                                            <input class="form-control" type="text" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wizard-actions">
                        <button type="button" disabled class="btn-glow primary btn-prev"> 
                            <i class="icon-chevron-left"></i> Prev
                        </button>
                        <button type="button" class="btn-glow primary btn-next" data-last="Finish">
                            Next <i class="icon-chevron-right"></i>
                        </button>
                        <button type="button" class="btn-glow success btn-finish">
                            Setup your account!
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end main container -->

	<!-- scripts for this page -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo base_url(); ?>application/views/b3/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>application/views/b3/js/theme.js"></script>
    <script src="<?php echo base_url(); ?>application/views/b3/js/fuelux.wizard.js"></script>
    <script src="<?php echo base_url(); ?>application/views/b3/js/ace/ace.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application/views/b3/js/jquery.dataTables.js"></script>

    <script type="text/javascript">
        $(function () {


        

           $('#select_content').change(function(){ 
               
               var val = $(this).val();

               if(val == "reminders") {

                    $('#result_content').empty();
                    
                    document.getElementById('result_content').innerHTML += '<div class="col-md-12">';
                    document.getElementById('result_content').innerHTML += '<div class="row">';
                    document.getElementById('result_content').innerHTML += '<div class="col-md-2">';
                    document.getElementById('result_content').innerHTML += '<input type="checkbox" checked="checked" class="check" />';
                    document.getElementById('result_content').innerHTML += '</div>';
                    document.getElementById('result_content').innerHTML += '<div class="col-md-3">';
                    document.getElementById('result_content').innerHTML += 'Title';
                    document.getElementById('result_content').innerHTML += '</div>';


                    document.getElementById('result_content').innerHTML += '</div>';
                    document.getElementById('result_content').innerHTML += '</div>';
                    
               }
               else if(val == "product") {
               
                   $('#result_content').empty();
                   document.getElementById('result_content').innerHTML += 'hello';

               }
           });
            

            var $wizard = $('#fuelux-wizard'),
                $btnPrev = $('.wizard-actions .btn-prev'),
                $btnNext = $('.wizard-actions .btn-next'),
                $btnFinish = $(".wizard-actions .btn-finish");

            $wizard.wizard().on('finished', function(e) {
                // wizard complete code
            }).on("changed", function(e) {
                var step = $wizard.wizard("selectedItem");
                // reset states
                $btnNext.removeAttr("disabled");
                $btnPrev.removeAttr("disabled");
                $btnNext.show();
                $btnFinish.hide();

                if (step.step === 1) {
                    $btnPrev.attr("disabled", "disabled");
                } else if (step.step === 4) {
                    $btnNext.hide();
                    $btnFinish.show();
                }
            });

            $btnPrev.on('click', function() {
                $wizard.wizard('previous');
            });
            $btnNext.on('click', function() {
                $wizard.wizard('next');
            });

            $( "#datepicker" ).datepicker();
        });


        $(document).ready(function() {
            $('#example').dataTable({
                "sPaginationType": "full_numbers"
            });
        });

       

        
    </script>
</body>
</html>