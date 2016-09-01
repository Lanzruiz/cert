<!DOCTYPE html>
<html>
<head>
	<title>Detail Admin - DataTables</title>
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
    <link href="<?php echo base_url(); ?>application/views/b3/css/lib/font-awesome.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>application/views/b3/css/lib/jquery.dataTables.css" type="text/css" rel="stylesheet" />
    
    <!-- this page specific styles -->
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
             <a class="navbar-brand" href="index.html">
                CERT PROJECT
            </a>
            
        </div>
        <ul class="nav navbar-nav pull-right hidden-xs">
            <li class="hidden-xs">
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
                    <li><a href="#" class="active">list</a></li>
                    <li><a href="<?php echo base_url(); ?>users/pages/addpage">Add New</a></li>
                    
                </ul>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->


	<!-- main container -->
    <div class="content">
        
      
        <div id="pad-wrapper" class="datatables-page">
            
            <div class="row">
                <div class="col-md-12">

                    <table id="example">
                        <thead>
                            <tr>
                                <th tabindex="0" rowspan="1" colspan="1">Name Page
                                </th>
                                <th tabindex="0" rowspan="1" colspan="1">Status
                                </th>
                                <th tabindex="0" rowspan="1" colspan="1">Published
                                </th>
                                <th tabindex="0" rowspan="1" colspan="1">Parent
                                </th>
                               
                            </tr>
                        </thead>
                        
                        <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">Name Page</th>
                                <th rowspan="1" colspan="1">Status</th>
                                <th rowspan="1" colspan="1">Published</th>
                                <th rowspan="1" colspan="1">Parent</th>
                                
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Map</td>
                                <td>Active</td>
                                <td>July 1, 2016</td>
                                <td>Disaster</td>
                               
                            </tr>
                            <tr>
                                <td>Anouncemnt</td>
                                <td>Hold</td>
                                <td>July 2, 2016</td>
                                <td>Disaster</td>
                            </tr>
                           
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
    <!-- end main container -->

	<!-- scripts -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo base_url(); ?>application/views/b3/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>application/views/b3/js/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>application/views/b3/js/theme.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').dataTable({
                "sPaginationType": "full_numbers"
            });
        });
    </script>
</body>
</html>