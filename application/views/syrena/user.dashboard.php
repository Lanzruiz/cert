<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,width=device-width,height=device-height,target-densitydpi=device-dpi,user-scalable=yes" />
    <title>Syrena Admin Template</title>
    
    <!-- fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/app/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/app/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/app/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>application/views/syrena/assets/app/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>application/views/syrena/assets/app/ico/favico.png">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>application/views/syrena/assets/app/ico/favico.ico">

    <!-- theme fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300italic,300,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- theme bootstrap stylesheets -->
    <link href="<?php echo base_url(); ?>application/views/syrena/assets/bootstrap/css/bootstrap.css" rel="stylesheet" />

    <!-- theme dependencies stylesheets -->
    <link href="<?php echo base_url(); ?>application/views/syrena/assets/app/css/dependencies.css" rel="stylesheet" />

    <!-- theme app main.css (this import of all custom css, you can use requirejs for optimizeCss or grunt to optimize them all) -->
    <link href="<?php echo base_url(); ?>application/views/syrena/assets/app/css/syrena-admin.css" rel="stylesheet" />
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- content wrapper to define fullpage or container -->
    <!-- (recomended: dont change the id value) -->
    <section id="wrapper" class="container">
        <!-- define side left theme -->
        <aside class="side-left">
            <!-- side header -->
            <div class="side-header">
                <!-- place your brand (recomended: dont change the id value) -->
                <!-- (recomended: dont change the id value) -->
                <h1 id="brand" class="brand">
                    <a href="<?php echo base_url(); ?>users">
                        CERT
                    </a>
                </h1><!-- /brand -->

                <!-- form search, remove class hide if you not place your brand -->
                <!-- (recomended: dont change the id value) -->
                <form id="smart-search" class="side-form hide" role="form">
                    <input type="text" class="form-control" data-target=".side-wrapper" placeholder="Smart Finder">
                </form><!-- /side wrapper -->
            </div><!-- /side header -->

            <!-- side body -->
            <div class="side-body">
                <!-- this you can place your search result with ajax -->
                <div class="side-wrapper side-wrapper-large">
                    <div class="side-wrapper-status lead">No result, please start typing!</div>
                    <div class="side-wrapper-result">
                        <!-- just sample result -->
                        <div class="panel panel-default bordered-none no-radius">
                            <a href="#" class="panel-body-heading full-line">
                                <div class="pb-object pb-object-circle pb-object-sm">
                                    <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar1.png" alt="">
                                </div><!-- /pb-object -->
                                <h3 class="pb-title pb-title-sm">
                                    Post title <small>Lorem ipsum dolor sit amet, consectetur</small>
                                </h3><!-- /pb-title -->
                            </a><!-- /panel-body-heading -->
                        </div><!-- /panel -->

                        <div class="panel panel-default bordered-none no-radius">
                            <a href="#" class="panel-body-heading full-line">
                                <div class="pb-object pb-object-circle pb-object-sm">
                                    <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar2.png" alt="">
                                </div><!-- /pb-object -->
                                <h3 class="pb-title pb-title-sm">
                                    Username <small>Lorem ipsum dolor sit amet, consectetur</small>
                                </h3><!-- /pb-title -->
                            </a><!-- /panel-body-heading -->
                        </div><!-- /panel -->

                        <div class="panel panel-default bordered-none no-radius">
                            <a href="#" class="panel-body-heading full-line">
                                <div class="pb-object pb-object-circle pb-object-sm">
                                    <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar3.png" alt="">
                                </div><!-- /pb-object -->
                                <h3 class="pb-title pb-title-sm">
                                    Item name <small>Lorem ipsum dolor sit amet, consectetur</small>
                                </h3><!-- /pb-title -->
                            </a><!-- /panel-body-heading -->
                        </div><!-- /panel -->

                        <div class="panel panel-default bordered-none no-radius">
                            <a href="#" class="panel-body-heading full-line">
                                <div class="pb-object pb-object-circle pb-object-sm">
                                    <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar4.png" alt="">
                                </div><!-- /pb-object -->
                                <h3 class="pb-title pb-title-sm">
                                    Other result <small>Lorem ipsum dolor sit amet, consectetur</small>
                                </h3><!-- /pb-title -->
                            </a><!-- /panel-body-heading -->
                        </div><!-- /panel -->

                        <div class="panel panel-default bordered-none no-radius">
                            <a href="#" class="panel-body-heading full-line">
                                <div class="pb-object pb-object-circle pb-object-sm">
                                    <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar5.png" alt="">
                                </div><!-- /pb-object -->
                                <h3 class="pb-title pb-title-sm">
                                    Something else <small>Lorem ipsum dolor sit amet, consectetur</small>
                                </h3><!-- /pb-title -->
                            </a><!-- /panel-body-heading -->
                        </div><!-- /panel -->

                        <div class="panel panel-default bordered-none no-radius">
                            <a href="#" class="panel-body-heading full-line">
                                <div class="pb-object pb-object-circle pb-object-sm">
                                    <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar1.png" alt="">
                                </div><!-- /pb-object -->
                                <h3 class="pb-title pb-title-sm">
                                    Post title <small>Lorem ipsum dolor sit amet, consectetur</small>
                                </h3><!-- /pb-title -->
                            </a><!-- /panel-body-heading -->
                        </div><!-- /panel -->

                        <div class="panel panel-default bordered-none no-radius">
                            <a href="#" class="panel-body-heading full-line">
                                <div class="pb-object pb-object-circle pb-object-sm">
                                    <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar2.png" alt="">
                                </div><!-- /pb-object -->
                                <h3 class="pb-title pb-title-sm">
                                    Username <small>Lorem ipsum dolor sit amet, consectetur</small>
                                </h3><!-- /pb-title -->
                            </a><!-- /panel-body-heading -->
                        </div><!-- /panel -->

                        <div class="panel panel-default bordered-none no-radius">
                            <a href="#" class="panel-body-heading full-line">
                                <div class="pb-object pb-object-circle pb-object-sm">
                                    <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar3.png" alt="">
                                </div><!-- /pb-object -->
                                <h3 class="pb-title pb-title-sm">
                                    Item name <small>Lorem ipsum dolor sit amet, consectetur</small>
                                </h3><!-- /pb-title -->
                            </a><!-- /panel-body-heading -->
                        </div><!-- /panel -->
                    </div><!-- /side-wrapper-result -->
                </div><!-- /side wrapper -->

                <!-- separate nav for ease development -->
                <nav class="side-nav">
                    <!-- open nav ul -->
                    <ul>
                        <li class="side-nav-item active">
                            <a href="<?php echo base_url(); ?>users/">
                                <i class="nav-item-icon icon ion-home"></i>
                                Dashboard
                            </a>
                        </li><!-- /coverage -->                   
                        <li class="side-nav-item">
                            <a href="#pages">
                                <i class="nav-item-caret"></i>
                                <i class="nav-item-icon icon ion-document"></i>
                                Pages
                            </a>
                            <!-- pages child -->
                            <ul id="pages" class="side-nav-child">
                                <li class="side-nav-item-heading">
                                    <a href="#" class="side-nav-back">
                                        <i class="nav-item-caret"></i>
                                        Pages
                                    </a>
                                </li><!-- /header pages child -->
                                <li class="side-nav-item">
                                    <a href="<?php echo base_url(); ?>users/pages/list">
                                        <i class="nav-item-icon icon ion-ios7-photos-outline"></i>
                                        List of Pages
                                    </a>
                                </li><!-- /dashboard #2 -->
                                <li class="side-nav-item">
                                    <a href="<?php echo base_url(); ?>users/pages/new">
                                        <i class="nav-item-icon icon ion-ios7-plus-outline"></i>
                                        Add New
                                    </a>
                                </li><!-- /profile -->
                               
                            </ul><!-- /pages child -->
                        </li><!-- /pages -->
                        <li class="side-nav-item">
                            <a href="#categories">
                                <i class="nav-item-caret"></i>
                                <i class="nav-item-icon icon ion-document"></i>
                                Categories
                            </a>
                            <!-- pages child -->
                            <ul id="categories" class="side-nav-child">
                                <li class="side-nav-item-heading">
                                    <a href="#" class="side-nav-back">
                                        <i class="nav-item-caret"></i>
                                        Categories
                                    </a>
                                </li><!-- /header pages child -->
                                <li class="side-nav-item">
                                    <a href="<?php echo base_url(); ?>users/pages/categories">
                                        <i class="nav-item-icon icon ion-ios7-photos-outline"></i>
                                        List of Categories
                                    </a>
                                </li><!-- /dashboard #2 -->
                                <li class="side-nav-item">
                                    <a href="<?php echo base_url(); ?>users/pages/newcategory">
                                        <i class="nav-item-icon icon ion-ios7-plus-outline"></i>
                                        Add New
                                    </a>
                                </li><!-- /profile -->
                               
                            </ul><!-- /pages child -->
                        </li><!-- /pages -->
                         <li class="side-nav-item">
                            <a href="#kits">
                                <i class="nav-item-caret"></i>
                                <i class="nav-item-icon icon ion-document"></i>
                                Kits
                            </a>
                            <!-- pages child -->
                            <ul id="kits" class="side-nav-child">
                                <li class="side-nav-item-heading">
                                    <a href="#" class="side-nav-back">
                                        <i class="nav-item-caret"></i>
                                        Kits
                                    </a>
                                </li><!-- /header pages child -->
                                <li class="side-nav-item">
                                    <a href="<?php echo base_url(); ?>users/pages/kits">
                                        <i class="nav-item-icon icon ion-ios7-photos-outline"></i>
                                        List of Kits
                                    </a>
                                </li><!-- /dashboard #2 -->
                                <li class="side-nav-item">
                                    <a href="<?php echo base_url(); ?>users/pages/newkits">
                                        <i class="nav-item-icon icon ion-ios7-plus-outline"></i>
                                        Add New
                                    </a>
                                </li><!-- /profile -->
                               
                            </ul><!-- /pages child -->
                        </li><!-- /pages -->
                       
                    </ul><!-- /nav ul-->
                </nav>

            </div><!-- /side body -->
        </aside><!-- /side left -->

        <!-- define content theme, use data-swipe="true" to enable gesture event -->
        <!-- (recomended: dont change the id value) -->
        <section id="content" class="content">
            <!-- define your content header here -->
            <header class="content-header">
                <!-- header actions -->
                <div class="header-actions pull-right">
                    <!-- (recomended: dont change the id value) -->
                    <div class="btn-group">
                        <a id="notif-alerts" class="btn btn-icon hide-sm dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="icon ion-alert-circled"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-extend pull-right" role="menu">
                            <li class="dropdown-header">Notofications</li><!-- /dropdown-header -->
                            <li class="notif-minimal">
                                <a class="notif-item" href="#">
                                    <div class="notif-ico bg-danger">
                                        <i class="icon ion-ios7-heart-outline"></i>
                                    </div>
                                    <p class="notif-text"><span class="text-danger">Mr. Doe</span> favorite your Post</p>
                                </a><!-- /notif-item -->
                                <a class="notif-item" href="#">
                                    <div class="notif-ico bg-warning">
                                        <i class="icon ion-ios7-personadd-outline"></i>
                                    </div>
                                    <p class="notif-text"><span class="text-warning">Iin T</span> register as a Member</p>
                                </a><!-- /notif-item -->
                                <a class="notif-item" href="#">
                                    <div class="notif-ico bg-success">
                                        <i class="icon ion-ios7-heart-outline"></i>
                                    </div>
                                    <p class="notif-text"><span class="text-success">Harab</span> purchase an Item</p>
                                </a><!-- /notif-item -->
                                <a class="notif-item" href="#">
                                    <div class="notif-ico bg-danger">
                                        <i class="icon ion-ios7-chatbubble-outline"></i>
                                    </div>
                                    <p class="notif-text"><span class="text-danger">Pathoel</span> Comment on your Post</p>
                                </a><!-- /notif-item -->
                                <a class="notif-item" href="#">
                                    <div class="notif-ico bg-info">
                                        <i class="icon ion-social-twitter-outline"></i>
                                    </div>
                                    <p class="notif-text"><span class="text-info">Imran</span> is now following you</p>
                                </a><!-- /notif-item -->
                                <a class="notif-item" href="#">
                                    <div class="notif-ico bg-success">
                                        <i class="icon ion-ios7-cloud-upload-outline"></i>
                                    </div>
                                    <p class="notif-text"><span class="text-success">Bent</span> upload new Portofolio</p>
                                </a><!-- /notif-item -->
                            </li><!-- /dropdown-alert -->
                            <li class="dropdown-footer">
                                <a class="view-all" tabindex="-1" href="#">
                                    <i class="icon ion-ios7-arrow-thin-right pull-right"></i> See all notifications
                                </a>
                            </li><!-- /dropdown-footer -->
                        </ul><!-- /dropdown-extend -->
                    </div><!-- /btn-group notifications -->

                    <!-- (recomended: dont change the id value) -->
                    <div class="btn-group">
                        <a id="notif-messages" class="btn btn-icon hide-sm dropdown-toggle active" data-toggle="dropdown" role="button">
                            <i class="icon ion-chatboxes"></i>
                            <span class="badge">3</span>
                        </a>
                        <ul class="dropdown-menu dropdown-extend pull-right" role="menu">
                            <li class="dropdown-header">You have 3 new messages</li><!-- /dropdown-header -->
                            <li class="notif-media">
                                <a class="notif-item" href="messages.html">
                                    <div class="notif-img pull-left">
                                        <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar11.png" alt="" class="img-circle" />
                                    </div>
                                    <h3 class="notif-heading">Account Team <small>58 min</small></h3>
                                    <p class="notif-text">Spread the Word & Earn!</p>
                                </a><!-- /notif-item -->
                                <a class="notif-item" href="messages.html">
                                    <div class="notif-img pull-left">
                                        <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar5.png" alt="" class="img-circle" />
                                    </div>
                                    <h3 class="notif-heading">Mahatma, me (6) <small>Wed</small></h3>
                                    <p class="notif-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, officia</p>
                                </a><!-- /notif-item -->
                                <a class="notif-item" href="messages.html">
                                    <div class="notif-img pull-left">
                                        <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar4.png" alt="" class="img-circle" />
                                    </div>
                                    <h3 class="notif-heading">Wrapbootstrap <small>Tue</small></h3>
                                    <p class="notif-text">Consectetur adipisicing elit. Sequi, pariatur vel eum porro quae! Eos!</p>
                                </a><!-- /notif-item -->
                                <a class="notif-item" href="messages.html">
                                    <div class="notif-img pull-left">
                                        <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar6.png" alt="" class="img-circle" />
                                    </div>
                                    <h3 class="notif-heading">Stilearning <small>Tue</small></h3>
                                    <p class="notif-text">Approval for new design</p>
                                </a><!-- /notif-item -->
                                <a class="notif-item" href="messages.html">
                                    <div class="notif-img pull-left">
                                        <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar9.png" alt="" class="img-circle" />
                                    </div>
                                    <h3 class="notif-heading">janesmith@mail.com <small>Mon</small></h3>
                                    <p class="notif-text">Consectetur adipisicing elit. Sequi, pariatur vel eum porro quae! Eos!</p>
                                </a><!-- /notif-item -->
                                <a class="notif-item" href="messages.html">
                                    <div class="notif-img pull-left">
                                        <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar8.png" alt="" class="img-circle" />
                                    </div>
                                    <h3 class="notif-heading">Microsoft Customer Support <small>Mon</small></h3>
                                    <p class="notif-text">Thanks for ordering Windows 8 (order #WD12345678)</p>
                                </a><!-- /notif-item -->
                            </li><!-- /dropdown-alert -->
                            <li class="dropdown-footer">
                                <a class="view-all" tabindex="-1" href="messages.html">
                                    <i class="icon ion-ios7-arrow-thin-right pull-right"></i> See all messages
                                </a>
                            </li><!-- /dropdown-footer -->
                        </ul><!-- /dropdown-extend -->
                    </div><!-- /btn-group new messages -->

                    <!-- (recomended: dont change the id value) -->
                    <div class="btn-group">
                        <a id="users-setting" class="btn btn-icon data-toggle" data-toggle="dropdown" role="button">
                            <i class="icon ion-gear-b"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-extend pull-right" role="menu">
                            <li class="dropdown-profile">
                                <div class="dp-cover">
                                    <img class="img-bg" src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/cover-blur.jpg" alt="">
                                    <a class="img-avatar" href="<?php echo base_url(); ?>users/pages/profile">
                                        <img class="img-circle" src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar4.png" alt="">
                                    </a>
                                    <div class="dp-details">Mr. Doe - UI Designer</div>
                                </div>
                            </li>
                            <li>
                                <div class="row text-center">
                                    <a href="#" class="col-lg-4 col-sm-4 col-sm-4 col-xs-4">138 <small>Posts</small></a>
                                    <a href="#" class="col-lg-4 col-sm-4 col-sm-4 col-xs-4">26 <small>Items</small></a>
                                    <a href="#" class="col-lg-4 col-sm-4 col-sm-4 col-xs-4">570 <small>Follow</small></a>
                                </div>
                            </li>
                            <li class="dropdown-footer">
                                <div class="clearfix">
                                    <a href="<?php echo base_url(); ?>/systems/process/user/logout" class="btn btn-sm btn-default pull-right">Sign out</a>
                                    <a href="<?php echo base_url(); ?>users/pages/profile" class="btn btn-sm btn-default pull-left">Profile</a>
                                </div>
                            </li><!-- /dropdown-footer -->
                        </ul><!-- /dropdown-extend -->
                    </div><!-- /btn-group setting -->

                    <!-- (recomended: dont change the id value) -->
                    <a id="toggle-aside" class="btn btn-icon" role="button"><i class="icon ion-navicon-round"></i></a>
                </div><!-- /header actions -->

                <!-- header actions -->
                <div class="header-actions pull-left">
                    <!-- (recomended: dont change the id value) -->
                    <button id="toggle-content" class="btn btn-icon" type="button"><i class="icon ion-navicon-round"></i></button>
                    <!-- (recomended: dont change the id value) -->
                    <button id="toggle-search" class="btn btn-icon" type="button"><i class="icon ion-search"></i></button>
                </div><!-- /header actions -->

                <!-- your Awesome App title -->
                <h1 class="content-title">Dashboard</h1>
            </header><!-- /side left -->
            

            <!-- define content row -->
            <div class="content-spliter">
                <!-- define your awesome apps here -->
                <!-- (recomended: dont change the id value) -->
                <section id="content-main" class="content-main">
                    
                    <!-- your app content -->
                    <div class="content-app fixed-header">
                        <!-- app header -->
                        <div class="app-header">
                            <div class="pull-right">
                                <button class="btn btn-flat btn-default" id="dashboard-range">
                                    <span class="icon ion-ios7-calendar-outline"></span>
                                    <span class="text-date">Oct 30, 2013 - Nov 29, 2013</span> 
                                    <b class="caret"></b>
                                </button>
                            </div>
                            <h3 class="app-title pull-left hidden-xs">Weekly Resume <small>Oct 30 - Nov 29, 2013</small></h3>
                        </div><!-- /app header -->

                        <!-- app body -->
                        <div class="app-body">
                            
                            <!-- app content here -->
                            <div class="magic-layout" data-cols="4">
                                <div class="panel panel-default magic-element">
                                    <a href="#" class="panel-body-heading full-line">
                                        <div class="pb-object pb-object-circle">
                                            <i class="pbo-icon icon ion-ios7-plus-empty"></i>
                                        </div><!-- /pb-object -->
                                        <h3 class="pb-title ">
                                            <span class="text-info">278</span> <small>New Users</small>
                                        </h3><!-- /pb-title -->
                                        <span class="pb-watermark">
                                            <i class="icon ion-ios7-personadd-outline"></i>
                                        </span><!-- /pb-watermark -->
                                    </a><!-- /panel-body-heading -->
                                </div><!-- /panel -->

                                <div class="panel panel-default magic-element">
                                    <a href="#" class="panel-body-heading full-line">
                                        <div class="pb-object pb-object-circle">
                                            <i class="pbo-icon icon ion-ios7-arrow-thin-up"></i>
                                        </div><!-- /pb-object -->
                                        <h3 class="pb-title ">
                                            <span class="text-success">2,987,433</span> <small>Downloads</small>
                                        </h3><!-- /pb-title -->
                                        <span class="pb-watermark">
                                            <i class="icon ion-ios7-star-outline"></i>
                                        </span><!-- /pb-watermark -->
                                    </a><!-- /panel-body-heading -->
                                </div><!-- /panel -->

                                
                            </div><!-- /magic-layout -->
                            



                            <div class="magic-layout">
                                <div class="panel panel-default magic-element" style="width: 100%">
                                    <div class="panel-body-heading">
                                        <h3 class="pb-title">
                                            Downloads Users Statistics
                                        </h3><!-- /pb-title -->
                                    </div><!-- /panel-body-heading -->
                                    <div class="kits-chart">
                                        <div id="revenue-chart" class="chart"></div>
                                    </div><!-- /kits-chart -->
                                    <div class="panel-body">
                                        <div class="text-center">
                                            <button type="button" class="btn btn-ion btn-sm btn-primary">Day</button>
                                            <button type="button" class="btn btn-ion btn-sm btn-primary">Week</button>
                                            <button type="button" class="btn btn-ion btn-sm btn-primary">Month</button>
                                        </div>
                                    </div><!-- /panel-body -->
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <i class="icon ion-arrow-up-b text-success"></i> 236 &nbsp;&nbsp;
                                                <span class="text-success">+</span> 11%
                                            </div>
                                            <div>MO <small class="text-muted">OCT W5</small></div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <i class="icon ion-arrow-down-b text-danger"></i> 137 &nbsp;&nbsp;
                                                <span class="text-danger">-</span> 32%
                                            </div>
                                            <div>TU <small class="text-muted">OCT W5</small></div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <i class="icon ion-arrow-up-b text-success"></i> 275 &nbsp;&nbsp;
                                                <span class="text-success">+</span> 18%
                                            </div>
                                            <div>WE <small class="text-muted">NOV W1</small></div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <i class="icon ion-arrow-up-b text-success"></i> 380 &nbsp;&nbsp;
                                                <span class="text-success">+</span> 40%
                                            </div>
                                            <div>TH <small class="text-muted">NOV W1</small></div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <i class="icon ion-arrow-up-b text-success"></i> 655 &nbsp;&nbsp;
                                                <span class="text-success">+</span> 88%
                                            </div>
                                            <div>FR <small class="text-muted">NOV W1</small></div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <i class="icon ion-arrow-down-b text-danger"></i> 571 &nbsp;&nbsp;
                                                <span class="text-danger">-</span> 12%
                                            </div>
                                            <div>SA <small class="text-muted">NOV W1</small></div>
                                        </li>
                                    </ul><!-- /list-group -->
                                </div><!-- /panel -->

                               

                               

                </section><!-- /content main -->
                

                
                <!-- define your extra apps here -->
                <!-- (recomended: dont change the id value) -->
                <section id="content-aside" class="content-aside">
                    <!-- your module content -->
                    <div class="content-module fixed-header">
                    
                        <!-- module body -->
                        <div class="module-body">
                            
                            <!-- app module here -->
                            <!-- chat module -->
                            <div class="chats-module">
                                <div class="cm-contact">
                                    <div class="cm-contact-separate">Top contacts</div>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar8.png" alt="">
                                        </div>
                                        <p class="cmci-name">Iin Bent <small>Team Leader</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar1.png" alt="">
                                        </div>
                                        <p class="cmci-name">Mr. Doe <small>UI Designer</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar9.png" alt="">
                                        </div>
                                        <p class="cmci-name">Yu Darsih <small>Data Analyst</small></p>
                                    </a>

                                    <div class="cm-contact-separate">More contacts</div>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar2.png" alt="">
                                        </div>
                                        <p class="cmci-name">Mba Jessica <small>PHP Programmer</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar1.png" alt="">
                                        </div>
                                        <p class="cmci-name">Doel Jony <small>Rubi Programmer</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar11.png" alt="">
                                        </div>
                                        <p class="cmci-name">Yumiko <small>Java Programmer</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar4.png" alt="">
                                        </div>
                                        <p class="cmci-name">Mark Londrian <small>PHP Programmer</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar5.png" alt="">
                                        </div>
                                        <p class="cmci-name">Mahatma <small>PHP Programmer</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar6.png" alt="">
                                        </div>
                                        <p class="cmci-name">Harab <small>Junior Designer</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar7.png" alt="">
                                        </div>
                                        <p class="cmci-name">Sungep <small>Acountant</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar10.png" alt="">
                                        </div>
                                        <p class="cmci-name">Pathoel <small>Acountant</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar6.png" alt="">
                                        </div>
                                        <p class="cmci-name">Opytama <small>Data Analyst</small></p>
                                    </a>
                                </div><!-- /chat module contact -->

                                <div class="cm-content">
                                    <a href="#" class="cm-content-heading">
                                        <h3><i class="icon ion-ios7-arrow-left"></i> Mr. Doe</h3>
                                    </a><!-- /cm-content-heading -->

                                    <div class="cm-content-chats">
                                        <div class="chat-in">
                                            <div class="chat-avatar">
                                                <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar5.png" title="" />
                                            </div>
                                            <div class="chat-msg">
                                                <p>In eget pellentesque vehicula, quam aliquet turpis convallis</p>
                                                <time datetime="2013-12-13T20:00">Mr. Doe - 12 min</time>
                                            </div>
                                        </div><!-- /chat-in -->

                                        <div class="chat-out">
                                            <div class="chat-avatar">
                                                <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar4.png" title="" />
                                            </div>
                                            <div class="chat-msg">
                                                <p>lorem nibh nam suspendisse lacinia</p>
                                                <time datetime="2013-12-13T20:00">8 min</time>
                                            </div>
                                        </div><!-- /chat-out -->

                                        <div class="chat-in">
                                            <div class="chat-avatar">
                                                <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar5.png" title="" />
                                            </div>
                                            <div class="chat-msg">
                                                <p>massa cursus auctor urna parturient</p>
                                                <p>
                                                    <small><a href="#"><i class="icon ion-paperclip"></i> paperclips.zip</a></small>
                                                </p>
                                                <time datetime="2013-12-13T20:00">Mr. Doe - 5 min</time>
                                            </div>
                                        </div><!-- /chat-in -->

                                        <div class="chat-out">
                                            <div class="chat-avatar">
                                                <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar4.png" title="" />
                                            </div>
                                            <div class="chat-msg">
                                                <p>Great!</p>
                                                <time datetime="2013-12-13T20:00">4 min</time>
                                            </div>
                                        </div><!-- /chat-out -->

                                        <div class="chat-in">
                                            <div class="chat-avatar">
                                                <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/avatar5.png" title="" />
                                            </div>
                                            <div class="chat-msg">
                                                <p>Pulvinar aute massa amet dapibus, etiam consectetuer consectetuer sagittis, egestas massa nibh vestibulum, sapien in sodales, quisque nec habitasse phasellus ultricies tempus</p>
                                                <time datetime="2013-12-13T20:00">Mr. Doe - 2 min</time>
                                            </div>
                                        </div><!-- /chat-in -->
                                    </div><!-- /cm-content-chats -->

                                    <div class="cm-content-status">
                                        <i class="icon ion-chatbubble-working"></i> Mr. Doe is typing...
                                    </div><!-- /cm-content-status -->

                                    <div class="cm-content-input">
                                        <form id="frm-send-chat" role="form">
                                            <button type="button" class="btn btn-lg btn-transparent" title="Attach file">
                                                <i class="icon ion-paperclip"></i>
                                            </button>
                                            <input type="text" name="chat-msg" class="form-control" placeholder="Write a message" />
                                            <button type="submit" class="btn btn-lg btn-transparent" title="Send">
                                                <i class="icon ion-ios7-paperplane-outline"></i>
                                            </button>
                                        </form>
                                    </div><!-- /cm-content-input -->
                                </div><!-- /chat module content -->
                            </div><!-- /chat module -->
                            
                        </div><!-- /module content -->
                    </div><!-- /content module -->
                </section><!-- /content asside -->
            </div><!-- /content spliter -->

        </section><!-- /content -->
    </section><!-- /wrapper -->

    


    <!-- jQuery, theme required for theme -->
    <script src="<?php echo base_url(); ?>application/views/syrena/assets/jquery/jquery.js"></script>
    <script src="<?php echo base_url(); ?>application/views/syrena/assets/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- theme dependencies -->
    <!-- 
        Contents List
        1. Raphaël
        2. Isotope
        3. verge
        4. Moment
        5. Prettify
    -->
    <script src="<?php echo base_url(); ?>application/views/syrena/assets/app/js/dependencies.js"></script>
        
        <!-- other dependencies -->
        <script src="<?php echo base_url(); ?>application/views/syrena/assets/jquery-icheck/jquery.icheck.min.js"></script>
        <script src="<?php echo base_url(); ?>application/views/syrena/assets/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="<?php echo base_url(); ?>application/views/syrena/assets/morris/morris.min.js"></script>
        <script src="<?php echo base_url(); ?>application/views/syrena/assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
        <script src="<?php echo base_url(); ?>application/views/syrena/assets/select2/select2.min.js"></script>
        <script src="<?php echo base_url(); ?>application/views/syrena/assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

        <script src="<?php echo base_url(); ?>application/views/syrena/assets/datatables/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>application/views/syrena/assets/datatables/js/datatables.js"></script>
    
    
    <!-- theme app main.js -->
    <script src="<?php echo base_url(); ?>application/views/syrena/assets/app/js/main.js"></script>
    <script type="text/javascript">
    $(function () {
        
        // date range picker
        $('#dashboard-range').daterangepicker(
            {
              ranges: {
                 'Today': [moment(), moment()],
                 'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                 'Last 7 Days': [moment().subtract('days', 6), moment()],
                 'Last 30 Days': [moment().subtract('days', 29), moment()],
                 'This Month': [moment().startOf('month'), moment().endOf('month')],
                 'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
              },
              startDate: moment().subtract('days', 6),
              endDate: moment()
            },
            function(start, end) {
                $('#dashboard-range .text-date').text(start.format('MMM D, YYYY') + ' - ' + end.format('MMM D, YYYY'));
            }
        );


        
        // charts
        // chart revenue
        var data1 = [
            {dates: '2013-10-30', sales: 236},
            {dates: '2013-10-31', sales: 137},
            {dates: '2013-11-01', sales: 275},
            {dates: '2013-11-02', sales: 380},
            {dates: '2013-11-03', sales: 655},
            {dates: '2013-11-04', sales: 571}
        ],
        revenueChart = Morris.Line({
            element: 'revenue-chart',
            data: data1,
            lineColors: ['#3498db'],
            gridTextColor: '#34495e',
            pointFillColors: ['#3498db'],
            xkey: 'dates',
            ykeys: ['sales'],
            labels: ['Downloads'],
            barRatio: 0.4,
            hideHover: 'auto'
        }),
        salesChart = Morris.Donut({
            element: 'sales-chart',
            data: [
                {label: 'Download Sales', value: 25 },
                {label: 'In-Store Sales', value: 40 },
                {label: 'Mail-Order Sales', value: 25 },
                {label: 'Respond Sales', value: 10 }
            ],
            colors: ['#f39c12', '#3498db', '#2ecc71', '#e74c3c'],
            gridTextColor: '#3498db',
            formatter: function (y) { return y + "%" }
        }),
        data_items = [
            {themes: 'Stilearn', purchase: 136},
            {themes: 'StilMetro', purchase: 137},
            {themes: 'Syrena', purchase: 675},
            {themes: 'Biosia', purchase: 380},
            {themes: 'GlitFlat', purchase: 655},
            {themes: 'Zahra', purchase: 1571}
        ],
        itemsChart = Morris.Bar({
            element: 'items-chart',
            data: data_items,
            barColors: ['#3498db'],
            gridTextColor: '#34495e',
            xkey: 'themes',
            ykeys: ['purchase'],
            labels: ['Purchase'],
            barRatio: 0.4,
            xLabelAngle: 30,
            hideHover: 'auto'
        });

        // update data on content or window resize
        var update = function(){
            revenueChart.redraw();
            salesChart.redraw();
            itemsChart.redraw();
        }

        // handle chart responsive on toggle .content
        $(window).on('resize', function(){
            update();
        })
        $('#toggle-aside').on('click', function(){
            // update chart after transition finished
            $("#content").bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function(){
                update();
                $(this).unbind();
            });
        })
        $('#toggle-content').on('click', function(){
            update();
        })
        // end chart



        // todo list
        $('.icheck').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green',
            increaseArea: '20%' // optional
        }).on('ifChanged', function(){
            var $this = $(this),
                todo = $(this).parent().parent().parent();

            todo.toggleClass('todo-marked');
            todo.find('.label').toggleClass('label-success');
        });



        // Quick Mail
        $('#quick-mail-reseiver').tagsInput({
            height: '70px',
            width:'auto',           // support percent (90%)
            defaultText: '+ reseiver'
        });
        // manual style for .tagsinput
        $('div.tagsinput input').on('focus', function(){
            var tagsinput = $(this).parent().parent();
            tagsinput.addClass('focus');
        }).on('focusout', function(){
            var tagsinput = $(this).parent().parent();
            tagsinput.removeClass('focus');
        });
        $('#quick-mail-content').wysihtml5({
            "font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
            "emphasis": true, //Italics, bold, etc. Default true
            "lists": false, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
            "html": false, //Button which allows you to edit the generated HTML. Default false
            "link": true, //Button to insert a link. Default true
            "image": true, //Button to insert an image. Default true,
            "color": false, //Button to change color of font  
            "size": 'sm' // use button small ion and primary
        });


    })
    </script>
  </body>
</html>