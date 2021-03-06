<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,width=device-width,height=device-height,target-densitydpi=device-dpi,user-scalable=yes" />
    <title>Syrena Admin Template</title>
    
    <!-- fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>application/views/syrena/assets/app/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>application/views/syrena/assets/app/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>application/views/syrena/assets/app/ico/apple-touch-icon-72-precomposed.png">
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
                    <a href="index.html">
                        <!-- <i class="icon ion-waterdrop"></i> -->
                        <img src="<?php echo base_url(); ?>application/views/syrena/assets/app/img/brand.png" alt="Brand">   <!-- 32px image logo -->
                        Syrena
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
                            <a href="index.html">
                                <i class="nav-item-icon icon ion-social-rss-outline"></i>
                                Dashboard
                            </a>
                        </li><!-- /coverage -->
                        <li class="side-nav-item">
                            <a href="#layouts">
                                <i class="nav-item-caret"></i>
                                <i class="nav-item-icon icon ion-ios7-monitor-outline"></i>
                                Layouts
                            </a>
                            <ul id="layouts" class="side-nav-child">
                                <li class="side-nav-item-heading">
                                    <a href="#" class="side-nav-back">
                                        <i class="nav-item-caret"></i>
                                        Layouts
                                    </a>
                                </li><!-- /header layouts child -->
                                <li class="side-nav-item">
                                    <a href="layout_blank.html">
                                        <i class="nav-item-icon icon ion-laptop"></i>
                                        Blank Page
                                    </a>
                                </li><!-- /blank -->
                                <li class="side-nav-item">
                                    <a href="layout_static.html">
                                        <i class="nav-item-icon icon ion-laptop"></i>
                                        Static Header App
                                    </a>
                                </li><!-- /variation -->
                                <li class="side-nav-item">
                                    <a href="layout_variation.html">
                                        <i class="nav-item-icon icon ion-laptop"></i>
                                        Variation Header App
                                    </a>
                                </li><!-- /variation -->
                                <li class="side-nav-item">
                                    <a href="layout_transition.html">
                                        <i class="nav-item-icon icon ion-laptop"></i>
                                        Transition Layout
                                    </a>
                                </li><!-- /transition -->
                                <li class="side-nav-item">
                                    <a href="layout_magic.html">
                                        <i class="nav-item-icon icon ion-laptop"></i>
                                        Magic Layout
                                    </a>
                                </li><!-- /magic -->
                            </ul><!-- /layouts child -->
                        </li><!-- /layout -->
                        <li class="side-nav-item">
                            <a href="messages.html">
                                <span class="badge">3</span>
                                <i class="nav-item-icon icon ion-ios7-email-outline"></i>
                                Messages
                            </a>
                        </li><!-- /messages -->
                        <li class="side-nav-item">
                            <a href="#uielements">
                                <span class="badge">7</span>
                                <i class="nav-item-caret"></i>
                                <i class="nav-item-icon icon ion-ios7-navigate-outline"></i>
                                UI Elements
                            </a>
                            <!-- ui elements child -->
                            <ul id="uielements" class="side-nav-child">
                                <li class="side-nav-item-heading">
                                    <a href="#" class="side-nav-back">
                                        <i class="nav-item-caret"></i>
                                        UI Elements
                                    </a>
                                </li><!-- /header ui elements child -->
                                <li class="side-nav-item">
                                    <a href="components.html">
                                        <span class="badge">New</span>
                                        <i class="nav-item-icon icon ion-ios7-flag-outline"></i>
                                        General Elements
                                    </a>
                                </li><!-- /components -->
                                <li class="side-nav-item">
                                    <a href="typography.html">
                                        <i class="nav-item-icon icon ion-ios7-paperplane-outline"></i>
                                        Typography
                                    </a>
                                </li><!-- /typography -->
                                <li class="side-nav-item">
                                    <a href="grids.html">
                                        <i class="nav-item-icon icon ion-grid"></i>
                                        Grids
                                    </a>
                                </li><!-- /grids -->
                                <li class="side-nav-item">
                                    <a href="buttons.html">
                                        <i class="nav-item-icon icon ion-ios7-circle-outline"></i>
                                        Buttons
                                    </a>
                                </li><!-- /Buttons -->
                                <li class="side-nav-item">
                                    <a href="icons.html">
                                        <i class="nav-item-icon icon ion-ios7-ionic-outline"></i>
                                        Icons
                                    </a>
                                </li><!-- /icons -->
                                <li class="side-nav-item">
                                    <a href="nestable_list.html">
                                        <span class="badge">New</span>
                                        <i class="nav-item-icon icon ion-ios7-drag"></i>
                                        Nestable List
                                    </a>
                                </li><!-- /nestable list -->
                                <li class="side-nav-item">
                                    <a href="calendar.html">
                                        <span class="badge">New</span>
                                        <i class="nav-item-icon icon ion-ios7-calendar-outline"></i>
                                        Calendar
                                    </a>
                                </li><!-- /calendar -->
                                <li class="side-nav-item">
                                    <a href="helper_class.html">
                                        <i class="nav-item-icon icon ion-ios7-help-outline"></i>
                                        Helper Class
                                    </a>
                                </li><!-- /helper class -->
                            </ul><!-- /ui elements child -->
                        </li><!-- /ui elements -->
                        <li class="side-nav-item">
                            <a href="#widgets">
                                <i class="nav-item-caret"></i>
                                <i class="nav-item-icon icon ion-ios7-heart-outline"></i>
                                Widgets
                            </a>
                            <!-- widgets child -->
                            <ul id="widgets" class="side-nav-child">
                                <li class="side-nav-item-heading">
                                    <a href="#" class="side-nav-back">
                                        <i class="nav-item-caret"></i>
                                        Widgets
                                    </a>
                                </li><!-- /header pages child -->
                                <li class="side-nav-item">
                                    <a href="widget_panels.html">
                                        <i class="nav-item-icon icon ion-ios7-glasses-outline"></i>
                                        Panels
                                    </a>
                                </li><!-- /panel -->
                                <li class="side-nav-item">
                                    <a href="widget_kits.html">
                                        <i class="nav-item-icon icon ion-ios7-glasses-outline"></i>
                                        Kits
                                    </a>
                                </li><!-- /panel -->
                                <li class="side-nav-item">
                                    <a href="widget_tabs.html">
                                        <i class="nav-item-icon icon ion-ios7-glasses-outline"></i>
                                        Tabs
                                    </a>
                                </li><!-- /panel -->
                            </ul><!-- /widgets child -->
                        </li><!-- /widgets -->
                        <li class="side-nav-item">
                            <a href="#forms">
                                <i class="nav-item-caret"></i>
                                <i class="nav-item-icon icon ion-ios7-compose-outline"></i>
                                Forms
                            </a>
                            <!-- forms child -->
                            <ul id="forms" class="side-nav-child">
                                <li class="side-nav-item-heading">
                                    <a href="#" class="side-nav-back">
                                        <i class="nav-item-caret"></i>
                                        Forms
                                    </a>
                                </li><!-- /header pages child -->
                                <li class="side-nav-item">
                                    <a href="form_elements.html">
                                        <i class="nav-item-icon icon ion-ios7-compose-outline"></i>
                                        Form Elements
                                    </a>
                                </li><!-- /form-element -->
                                <li class="side-nav-item">
                                    <a href="form_wizard.html">
                                        <i class="nav-item-icon icon ion-ios7-compose-outline"></i>
                                        Wizard & Validation
                                    </a>
                                </li><!-- /wizard&validation -->
                                <li class="side-nav-item">
                                    <a href="form_wysiwyg.html">
                                        <i class="nav-item-icon icon ion-ios7-compose-outline"></i>
                                        Wysiwyg
                                    </a>
                                </li><!-- /wysiwyg -->
                                <li class="side-nav-item">
                                    <a href="form_dropzone.html">
                                        <span class="badge">New</span>
                                        <i class="nav-item-icon icon ion-ios7-compose-outline"></i>
                                        Dropzone
                                    </a>
                                </li><!-- /dropzone -->
                            </ul><!-- /forms child -->
                        </li><!-- /forms -->
                        <li class="side-nav-item">
                            <a href="tables.html">
                                <i class="nav-item-icon icon ion-ios7-at-outline"></i>
                                Tables
                            </a>
                        </li><!-- /tables -->
                        <li class="side-nav-item">
                            <a href="#charts">
                                <i class="nav-item-caret"></i>
                                <i class="nav-item-icon icon ion-stats-bars"></i>
                                Charts
                            </a>
                            <!-- charts child -->
                            <ul id="charts" class="side-nav-child">
                                <li class="side-nav-item-heading">
                                    <a href="#" class="side-nav-back">
                                        <i class="nav-item-caret"></i>
                                        Charts
                                    </a>
                                </li><!-- /header pages child -->
                                <li class="side-nav-item">
                                    <a href="chart_morris.html">
                                        <i class="nav-item-icon icon ion-arrow-graph-up-right"></i>
                                        Morris Chart
                                    </a>
                                </li><!-- /xChart -->
                                <li class="side-nav-item">
                                    <a href="chart_others.html">
                                        <span class="badge">New</span>
                                        <i class="nav-item-icon icon ion-ios7-pie-outline"></i>
                                        Other Charts
                                    </a>
                                </li><!-- /other charts -->
                            </ul><!-- /charts child -->
                        </li><!-- /charts -->
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
                                    <a href="page_dashboard2.html">
                                        <i class="nav-item-icon icon ion-ios7-speedometer-outline"></i>
                                        Dashboard #2
                                    </a>
                                </li><!-- /dashboard #2 -->
                                <li class="side-nav-item">
                                    <a href="page_profile.html">
                                        <i class="nav-item-icon icon ion-ios7-person-outline"></i>
                                        Profile
                                    </a>
                                </li><!-- /profile -->
                                <li class="side-nav-item">
                                    <a href="page_gallery.html">
                                        <i class="nav-item-icon icon ion-ios7-albums-outline"></i>
                                        Gallery
                                    </a>
                                </li><!-- /galery -->
                                <li class="side-nav-item">
                                    <a href="page_invoice.html">
                                        <i class="nav-item-icon icon ion-ios7-checkmark-outline"></i>
                                        Invoice
                                    </a>
                                </li><!-- /invoice -->
                                <li class="side-nav-item">
                                    <a href="page_pricing.html">
                                        <span class="badge">New</span>
                                        <i class="nav-item-icon icon ion-ios7-briefcase-outline"></i>
                                        Pricing Table
                                    </a>
                                </li><!-- /invoice -->
                                <li class="side-nav-item">
                                    <a href="page_help.html">
                                        <span class="badge">New</span>
                                        <i class="nav-item-icon icon ion-ios7-help-outline"></i>
                                        Help page
                                    </a>
                                </li><!-- /invoice -->
                                <li class="side-nav-item">
                                    <a href="page_search.html">
                                        <span class="badge">New</span>
                                        <i class="nav-item-icon icon ion-ios7-search-strong"></i>
                                        Search page
                                    </a>
                                </li><!-- /invoice -->
                                <li class="side-nav-item">
                                    <a href="page_signin.html">
                                        <i class="nav-item-icon icon ion-ios7-locked-outline"></i>
                                        Signin Page
                                    </a>
                                </li><!-- /signin -->
                                <li class="side-nav-item">
                                    <a href="page_404.html">
                                        <i class="nav-item-icon icon ion-ios7-minus-outline"></i>
                                        404 Page
                                    </a>
                                </li><!-- /404 -->
                            </ul><!-- /pages child -->
                        </li><!-- /pages -->
                        <li class="side-nav-item">
                            <a href="#level1">
                                <span class="badge">4</span>
                                <i class="nav-item-caret"></i>
                                <i class="nav-item-icon icon ion-navicon"></i>
                                Level Menu
                            </a>
                            <!-- /level menu child -->
                            <ul id="level1" class="side-nav-child">
                                <li class="side-nav-item-heading">
                                    <a href="#" class="side-nav-back">
                                        <i class="nav-item-caret"></i>
                                        Level Menu
                                    </a>
                                </li><!-- /header level menu child -->
                                <li class="side-nav-item">
                                    <a href="#">
                                        <i class="nav-item-icon icon ion-ios7-help-outline"></i>
                                        Menu
                                    </a>
                                </li><!-- /menu -->
                                <li class="side-nav-item">
                                    <a href="#level2">
                                        <i class="nav-item-caret"></i>
                                        <i class="nav-item-icon icon ion-ios7-help-outline"></i>
                                        Go to level 2
                                    </a>
                                    <ul id="level2" class="side-nav-child">
                                        <li class="side-nav-item-heading">
                                            <a href="#" class="side-nav-back">
                                                <i class="nav-item-caret"></i>
                                                Go to level 2
                                            </a>
                                        </li><!-- /header level2 child -->
                                        <li class="side-nav-item">
                                            <a href="#level3">
                                                <i class="nav-item-caret"></i>
                                                <i class="nav-item-icon icon ion-ios7-help-outline"></i>
                                                Go to level 3
                                            </a>
                                            <ul id="level3" class="side-nav-child">
                                                <li class="side-nav-item-heading">
                                                    <a href="#" class="side-nav-back">
                                                        <i class="nav-item-caret"></i>
                                                        Go to level 3
                                                    </a>
                                                </li><!-- /header level3 child -->
                                                <li class="side-nav-item">
                                                    <a href="#">
                                                        <i class="nav-item-icon icon ion-ios7-help-outline"></i>
                                                        List menu
                                                    </a>
                                                </li><!-- /list menu -->
                                                <li class="side-nav-item">
                                                    <a href="#">
                                                        <i class="nav-item-icon icon ion-ios7-help-outline"></i>
                                                        Other list Menu
                                                    </a>
                                                </li><!-- /other list menu -->
                                                <li class="side-nav-item">
                                                    <a href="#">
                                                        <i class="nav-item-icon icon ion-ios7-help-outline"></i>
                                                        Unlimited Menu
                                                    </a>
                                                </li><!-- /unlimited menu -->
                                            </ul><!-- /level3 child -->
                                        </li><!-- /level3 -->
                                    </ul><!-- /level2 child -->
                                </li><!-- /level2 -->
                                <li class="side-nav-item">
                                    <a href="#">
                                        <i class="nav-item-icon icon ion-ios7-help-outline"></i>
                                        Other menu
                                    </a>
                                </li><!-- /other menu -->
                                <li class="side-nav-item">
                                    <a href="#otherlevel2">
                                        <i class="nav-item-caret"></i>
                                        <i class="nav-item-icon icon ion-ios7-help-outline"></i>
                                        Other level 2
                                    </a>
                                    <ul id="otherlevel2" class="side-nav-child">
                                        <li class="side-nav-item-heading">
                                            <a href="#" class="side-nav-back">
                                                <i class="nav-item-caret"></i>
                                                Other level 2
                                            </a>
                                        </li><!-- /header other level2 -->
                                        <li class="side-nav-item">
                                            <a href="#">
                                                <i class="nav-item-icon icon ion-ios7-help-outline"></i>
                                                List menu #other
                                            </a>
                                        </li><!-- /other menu #other -->
                                    </ul><!-- /other level2 child -->
                                </li><!-- /other level2 -->
                            </ul><!-- /level menu child -->
                        </li><!-- /level menu -->
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
                                    <a class="img-avatar" href="page_profile.html">
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
                                    <a href="page_signin.html" class="btn btn-sm btn-default pull-right">Sign out</a>
                                    <a href="page_profile.html" class="btn btn-sm btn-default pull-left">Profile</a>
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
                                <a class="btn btn-default" role="button">Left</a>
                                <a class="btn btn-default" role="button">Midle</a>
                                <a class="btn btn-default" role="button">Right</a>
                            </div>
                            <ol class="breadcrumb bg-none pull-left hide-xs">
                                <li><a href="#">Dashboard</a></li>
                               
                            </ol>
                            <!-- <h3 class="app-title">Drop App Modules</h3> -->
                        </div><!-- /app header -->

                        <!-- app body -->
                        <div class="app-body">
                            
                            <!-- app content here -->
                            <div class="magic-layout">
                              

                                <div class="panel panel-default magic-element width-full">
                                    <div class="panel-body-heading">
                                        <h3 class="pb-title">Monthly Average Temperature</h3>
                                        <div class="pb-actions">
                                            <button id="toggle-action" class="btn btn-default btn-sm pull-right">Action</button>
                                        </div>
                                    </div>
                                    <div id="chart-other" class="chart"></div>
                                </div><!-- /panel -->
                            </div>
                            <!-- /magic-layout -->
                            
                        </div><!-- /app body -->
                    </div><!-- /content app -->

                </section><!-- /content main -->
                

                
                <!-- define your extra apps here -->
                <!-- (recomended: dont change the id value) -->
                <section id="content-aside" class="content-aside">
                    <!-- your module content -->
                    <div class="content-module fixed-header">
                        <!-- module header -->
                        <div class="module-header">
                            <h3 class="module-title">
                                <i class="icon ion-ios7-chatboxes-outline"></i> Chats
                            </h3>
                        </div><!-- /module header -->

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
                            
                        </div><!-- /module body -->
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
        <script src="<?php echo base_url(); ?>application/views/syrena/assets/morris/morris.min.js"></script>
    
    <!-- theme app main.js -->
    <script src="<?php echo base_url(); ?>application/views/syrena/assets/app/js/main.js"></script>
    <script type="text/javascript">
    $(function () {
        'use strict';


        
        // other chart example
        var data_other = [
            {period: "2013-01", tokyo: 7.0, newyork: -0.2, berlin: -0.9, london: 3.9},
            {period: "2013-02", tokyo: 6.9, newyork: 0.8, berlin: 0.6, london: 4.2},
            {period: "2013-03", tokyo: 9.5, newyork: 5.7, berlin: 3.5, london: 5.7},
            {period: "2013-04", tokyo: 14.5, newyork: 11.3, berlin: 8.4, london: 8.5},
            {period: "2013-05", tokyo: 18.2, newyork: 17.0, berlin: 13.5, london: 11.9},
            {period: "2013-06", tokyo: 21.5, newyork: 22.0, berlin: 17.0, london: 15.2},
            {period: "2013-07", tokyo: 25.2, newyork: 24.8, berlin: 18.6, london: 17.0},
            {period: "2013-08", tokyo: 26.5, newyork: 24.1, berlin: 17.9, london: 16.6},
            {period: "2013-09", tokyo: 23.3, newyork: 20.1, berlin: 14.3, london: 14.2},
            {period: "2013-10", tokyo: 18.3, newyork: 14.1, berlin: 9.0, london: 10.3},
            {period: "2013-11", tokyo: 13.9, newyork: 8.6, berlin: 3.9, london: 6.6},
            {period: "2013-12", tokyo: 9.6, newyork: 2.5, berlin: 1.0, london: 4.8}
        ],
        chart_other = Morris.Line({
            element: 'chart-other',
            data: data_other,
            lineColors: ['#3498db', '#f39c12', '#2ecc71', '#e74c3c'],
            gridTextColor: '#34495e',
            xkey: 'period',
            ykeys: ['tokyo', 'newyork', 'berlin', 'london'],
            labels: ['Tokyo', 'New York', 'Berlin', 'London'],
            hideHover: 'auto'
        });
        
        

        /* this example to use realtime chart with morris
        // realtime update chart
        var nReloads = 0,
        data_realtime = function(offset) {
          var ret = [];
          for (var x = 0; x <= 360; x += 10) {
            var v = (offset + x) % 360;
            ret.push({
                x: x,
                y: Math.sin(Math.PI * v / 180).toFixed(4),
                z: Math.cos(Math.PI * v / 180).toFixed(4)
            });
          }
          return ret;
        },
        chart_realtime = Morris.Line({
            element: 'chart-realtime',
            data: data_realtime(0),
            xkey: 'x',
            ykeys: ['y', 'z'],
            labels: ['sin()', 'cos()'],
            parseTime: false,
            ymin: -1.0,
            ymax: 1.0,
            hideHover: true
        }),
        realtime_update = function() {
            nReloads++;

            chart_realtime.setData(data_realtime(5 * nReloads));
            console.log('Reload status: ' + nReloads + ' reloads');
        };
        setInterval(realtime_update, 800);
        */

        // update data on content or window resize
        var update = function(){
            chart_line.redraw();
            chart_area.redraw();
            chart_bar.redraw();
            chart_donut.redraw();
            chart_other.redraw();
            // chart_realtime.redraw();
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
    });
    </script>
  </body>
</html>