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
                                    <img src="assets/app/img/avatar1.png" alt="">
                                </div><!-- /pb-object -->
                                <h3 class="pb-title pb-title-sm">
                                    Post title <small>Lorem ipsum dolor sit amet, consectetur</small>
                                </h3><!-- /pb-title -->
                            </a><!-- /panel-body-heading -->
                        </div><!-- /panel -->

                        <div class="panel panel-default bordered-none no-radius">
                            <a href="#" class="panel-body-heading full-line">
                                <div class="pb-object pb-object-circle pb-object-sm">
                                    <img src="assets/app/img/avatar2.png" alt="">
                                </div><!-- /pb-object -->
                                <h3 class="pb-title pb-title-sm">
                                    Username <small>Lorem ipsum dolor sit amet, consectetur</small>
                                </h3><!-- /pb-title -->
                            </a><!-- /panel-body-heading -->
                        </div><!-- /panel -->

                        <div class="panel panel-default bordered-none no-radius">
                            <a href="#" class="panel-body-heading full-line">
                                <div class="pb-object pb-object-circle pb-object-sm">
                                    <img src="assets/app/img/avatar3.png" alt="">
                                </div><!-- /pb-object -->
                                <h3 class="pb-title pb-title-sm">
                                    Item name <small>Lorem ipsum dolor sit amet, consectetur</small>
                                </h3><!-- /pb-title -->
                            </a><!-- /panel-body-heading -->
                        </div><!-- /panel -->

                        <div class="panel panel-default bordered-none no-radius">
                            <a href="#" class="panel-body-heading full-line">
                                <div class="pb-object pb-object-circle pb-object-sm">
                                    <img src="assets/app/img/avatar4.png" alt="">
                                </div><!-- /pb-object -->
                                <h3 class="pb-title pb-title-sm">
                                    Other result <small>Lorem ipsum dolor sit amet, consectetur</small>
                                </h3><!-- /pb-title -->
                            </a><!-- /panel-body-heading -->
                        </div><!-- /panel -->

                        <div class="panel panel-default bordered-none no-radius">
                            <a href="#" class="panel-body-heading full-line">
                                <div class="pb-object pb-object-circle pb-object-sm">
                                    <img src="assets/app/img/avatar5.png" alt="">
                                </div><!-- /pb-object -->
                                <h3 class="pb-title pb-title-sm">
                                    Something else <small>Lorem ipsum dolor sit amet, consectetur</small>
                                </h3><!-- /pb-title -->
                            </a><!-- /panel-body-heading -->
                        </div><!-- /panel -->
                    </div><!-- /side-wrapper-result -->
                </div><!-- /side wrapper -->

                <!-- separate nav for ease development -->
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
                                Categories
                            </a>
                            <!-- pages child -->
                            <ul id="pages" class="side-nav-child">
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
                                        <img src="assets/app/img/avatar11.png" alt="" class="img-circle" />
                                    </div>
                                    <h3 class="notif-heading">Account Team <small>58 min</small></h3>
                                    <p class="notif-text">Spread the Word & Earn!</p>
                                </a><!-- /notif-item -->
                                <a class="notif-item" href="messages.html">
                                    <div class="notif-img pull-left">
                                        <img src="assets/app/img/avatar5.png" alt="" class="img-circle" />
                                    </div>
                                    <h3 class="notif-heading">Mahatma, me (6) <small>Wed</small></h3>
                                    <p class="notif-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, officia</p>
                                </a><!-- /notif-item -->
                                <a class="notif-item" href="messages.html">
                                    <div class="notif-img pull-left">
                                        <img src="assets/app/img/avatar4.png" alt="" class="img-circle" />
                                    </div>
                                    <h3 class="notif-heading">Wrapbootstrap <small>Tue</small></h3>
                                    <p class="notif-text">Consectetur adipisicing elit. Sequi, pariatur vel eum porro quae! Eos!</p>
                                </a><!-- /notif-item -->
                                <a class="notif-item" href="messages.html">
                                    <div class="notif-img pull-left">
                                        <img src="assets/app/img/avatar6.png" alt="" class="img-circle" />
                                    </div>
                                    <h3 class="notif-heading">Stilearning <small>Tue</small></h3>
                                    <p class="notif-text">Approval for new design</p>
                                </a><!-- /notif-item -->
                                <a class="notif-item" href="messages.html">
                                    <div class="notif-img pull-left">
                                        <img src="assets/app/img/avatar9.png" alt="" class="img-circle" />
                                    </div>
                                    <h3 class="notif-heading">janesmith@mail.com <small>Mon</small></h3>
                                    <p class="notif-text">Consectetur adipisicing elit. Sequi, pariatur vel eum porro quae! Eos!</p>
                                </a><!-- /notif-item -->
                                <a class="notif-item" href="messages.html">
                                    <div class="notif-img pull-left">
                                        <img src="assets/app/img/avatar8.png" alt="" class="img-circle" />
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
                                    <img class="img-bg" src="assets/app/img/cover-blur.jpg" alt="">
                                    <a class="img-avatar" href="page_profile.html">
                                        <img class="img-circle" src="assets/app/img/avatar4.png" alt="">
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
                <h1 class="content-title">Create Category</h1>
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
                                <li><a href="<?php echo base_url(); ?>users/">Home</a></li>
                                <li><a href="<?php echo base_url(); ?>users/pages/categories">Categories</a></li>
                                <li class="active">Create New</li>
                            </ol>
                            <!-- <h3 class="app-title">Drop App Modules</h3> -->
                        </div><!-- /app header -->

                        <!-- app body -->
                        <div class="app-body">
                            
                            <!-- app content here -->
                            <form id="form-wizard-1" role="form" class="form-horizontal">
                                <div id="wizard-1">
                                    <h3>Create Category</h3>
                                    <section>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="username">Name of category*</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" id="username" name="username" type="text">
                                            </div>
                                        </div><!-- /form-group -->

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="password">Parent</label>
                                           <div class="col-sm-9">
                                               <select class="form-control" id="inputSelect">
                                                        <option>- Select One -</option>
                                                        <option>Text</option>
                                                        <option>List</option>
                                                        <option>Map</option>
                                                        <option>Disaster Info</option>
                                                        
                                                    </select>
                                            </div>
                                        </div><!-- /form-group -->

                                       
                                        <div class="clearfix"></div>
                                    </section><!-- /step 1 -->

                                    <h3>Content</h3>
                                    <section>
                                       
                                                                       <div class="col-sm-12">
                                    <div id="panel-wysiwyg1" class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-icon"><i class="icon ion-edit"></i></div>
                                            <div class="panel-actions">
                                                <a role="button" data-collapse="#panel-wysiwyg1" title="collapse" class="btn btn-sm btn-icon">
                                                    <i class="icon ion-chevron-down"></i>
                                                </a>
                                                <a role="button" data-close="#panel-wysiwyg1" title="close" class="btn btn-sm btn-icon">
                                                    <i class="icon ion-close-round"></i>
                                                </a>
                                            </div><!-- /panel-actions -->
                                            <h3 class="panel-title">Bootstrap Wysihtml5</h3>
                                        </div>                                        
                                        <div class="panel-body">
                                            <form role="form">
                                                <div class="form-group">
                                                    <textarea id="wysihtml5-1" name="wysihtml5-1" class="form-control" style="width:100%" rows="10" placeholder="Enter text ..."></textarea>
                                                </div><!-- /form-group -->
                                            </form><!-- /form -->
                                        </div>
                                    </div><!-- /panel -->
                                </div><!-- /cols -->


                                    </section><!-- /step 2 -->

                                    <h3>Published</h3>
                                    <section class="row">
                                       <div class="col-md-12">
                                             <div class="form-group">
                                                <label class="col-sm-3 control-label" for="username">Date Published</label>
                                                 <div class='input-group date' id='datetimepicker1'>
                                                    <input type='text' class="form-control" data-format="YYYY/MM/DD" />
                                                    <span class="input-group-addon">
                                                        <span class="icon ion-ios7-calendar-outline"></span>
                                                    </span>
                                                </div>
                                            </div><!-- /form-group -->
                                        </div>    
                                       
                                    </section><!-- /step 3 -->

                                    <h3>Finish</h3>
                                    <section>
                                        <div class="form-group">
                                            <div class="col-sm-offset-1 col-sm-7">
                                                <div class="checkbox">
                                                    <label for="agree">
                                                        <input id="agree" name="agree" type="checkbox">
                                                        I agree with the Terms and Conditions.
                                                    </label>
                                                </div>
                                            </div>
                                        </div><!-- /form-group -->
                                    </section><!-- /step 4 -->
                                </div><!-- /wizard -->
                            </form><!-- /form wizard -->

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
                                            <img src="assets/app/img/avatar8.png" alt="">
                                        </div>
                                        <p class="cmci-name">Iin Bent <small>Team Leader</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="assets/app/img/avatar1.png" alt="">
                                        </div>
                                        <p class="cmci-name">Mr. Doe <small>UI Designer</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="assets/app/img/avatar9.png" alt="">
                                        </div>
                                        <p class="cmci-name">Yu Darsih <small>Data Analyst</small></p>
                                    </a>

                                    <div class="cm-contact-separate">More contacts</div>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="assets/app/img/avatar2.png" alt="">
                                        </div>
                                        <p class="cmci-name">Mba Jessica <small>PHP Programmer</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="assets/app/img/avatar1.png" alt="">
                                        </div>
                                        <p class="cmci-name">Doel Jony <small>Rubi Programmer</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="assets/app/img/avatar11.png" alt="">
                                        </div>
                                        <p class="cmci-name">Yumiko <small>Java Programmer</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="assets/app/img/avatar4.png" alt="">
                                        </div>
                                        <p class="cmci-name">Mark Londrian <small>PHP Programmer</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="assets/app/img/avatar5.png" alt="">
                                        </div>
                                        <p class="cmci-name">Mahatma <small>PHP Programmer</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="assets/app/img/avatar6.png" alt="">
                                        </div>
                                        <p class="cmci-name">Harab <small>Junior Designer</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="assets/app/img/avatar7.png" alt="">
                                        </div>
                                        <p class="cmci-name">Sungep <small>Acountant</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="assets/app/img/avatar10.png" alt="">
                                        </div>
                                        <p class="cmci-name">Pathoel <small>Acountant</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="assets/app/img/avatar6.png" alt="">
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
                                                <img src="assets/app/img/avatar5.png" title="" />
                                            </div>
                                            <div class="chat-msg">
                                                <p>In eget pellentesque vehicula, quam aliquet turpis convallis</p>
                                                <time datetime="2013-12-13T20:00">Mr. Doe - 12 min</time>
                                            </div>
                                        </div><!-- /chat-in -->

                                        <div class="chat-out">
                                            <div class="chat-avatar">
                                                <img src="assets/app/img/avatar4.png" title="" />
                                            </div>
                                            <div class="chat-msg">
                                                <p>lorem nibh nam suspendisse lacinia</p>
                                                <time datetime="2013-12-13T20:00">8 min</time>
                                            </div>
                                        </div><!-- /chat-out -->

                                        <div class="chat-in">
                                            <div class="chat-avatar">
                                                <img src="assets/app/img/avatar5.png" title="" />
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
                                                <img src="assets/app/img/avatar4.png" title="" />
                                            </div>
                                            <div class="chat-msg">
                                                <p>Great!</p>
                                                <time datetime="2013-12-13T20:00">4 min</time>
                                            </div>
                                        </div><!-- /chat-out -->

                                        <div class="chat-in">
                                            <div class="chat-avatar">
                                                <img src="assets/app/img/avatar5.png" title="" />
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
        <script src="<?php echo base_url(); ?>application/views/syrena/assets/jquery-steps/jquery.steps.min.js"></script>
        <script src="<?php echo base_url(); ?>application/views/syrena/assets/jquery.validation/jquery.validate.js"></script>

        <script src="<?php echo base_url(); ?>application/views/syrena/assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <script src="<?php echo base_url(); ?>application/views/syrena/assets/bootstrap-markdown/js/bootstrap-markdown.js"></script>

        <script src="<?php echo base_url(); ?>application/views/syrena/assets/jquery-icheck/jquery.icheck.min.js"></script>
        <script src="<?php echo base_url(); ?>application/views/syrena/assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
        <script src="<?php echo base_url(); ?>application/views/syrena/assets/select2/select2.min.js"></script>
        <script src="<?php echo base_url(); ?>application/views/syrena/assets/multiselect/js/jquery.multi-select.js"></script>
        <script src="<?php echo base_url(); ?>application/views/syrena/assets/bootstrap-jasny/js/inputmask.js"></script>
        <script src="<?php echo base_url(); ?>application/views/syrena/assets/bootstrap-jasny/js/fileinput.js"></script>
        <script src="<?php echo base_url(); ?>application/views/syrena/assets/moment/moment.min.js"></script>
        <script src="<?php echo base_url(); ?>application/views/syrena/assets/bootstrap3-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
        <script src="<?php echo base_url(); ?>application/views/syrena/assets/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="<?php echo base_url(); ?>application/views/syrena/assets/mjaalnir-bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="<?php echo base_url(); ?>application/views/syrena/assets/jquery-simplecolorpicker/jquery.simplecolorpicker.js"></script>

    
    <!-- theme app main.js -->
    <script src="<?php echo base_url(); ?>application/views/syrena/assets/app/js/main.js"></script>

    <script type="text/javascript">
    $(function(){
        'use strict';

        $("#form-wizard-1").validate({
            errorElement: "small",
            errorClass: "help-block text-danger",
            errorPlacement: function(error, element) {
                if(element.is(':checkbox') || element.is(':radio')) {
                    $(element).parent().parent().after(error);
                }
                else{
                    element.after(error);
                }
            },
            highlight: function (element, errorClass) {
                $(element.form).find("label[for=" + element.id + "]").parent().addClass('has-error');
            },
            unhighlight: function (element, errorClass) {
                $(element.form).find("label[for=" + element.id + "]").parent().removeClass('has-error');
            },

            rules: {
                username: {
                    required: true,
                    minlength: 2
                },
                password: {
                    required: true,
                    minlength: 5
                },
                confirm: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },
                firstname: "required",
                lastname: "required",
                email: {
                    required: true,
                    email: true
                },
                agree: "required"
            }
        });

        $('#wizard-1').steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "fade",
            autoFocus: true,
            titleTemplate: '<span class="number">#index#</span> #title#',

            /* Labels */
            labels: {
                finish: "Finish",
                next: "Next",
                previous: "Prev"
            },
            onStepChanging: function (event, currentIndex, newIndex){
                $("#form-wizard-1").validate().settings.ignore = ":disabled,:hidden";
                return $("#form-wizard-1").valid();
            },
            onFinishing: function (event, currentIndex){
                $("#form-wizard-1").validate().settings.ignore = ":disabled";
                return $("#form-wizard-1").valid();
            },
            onFinished: function (event, currentIndex){
                alert("Submitted!");
            }
        });


        
        // bootstrap3-datetimepicker
        $('#datetimepicker1').datetimepicker({
            icons : {
                time: 'icon ion-ios7-clock-outline',
                date: 'icon ion-ios7-calendar-outline',
                up:   'icon ion-ios7-arrow-up',
                down: 'icon ion-ios7-arrow-down'
            }
        });
        $('#datetimepicker2').datetimepicker({
            icons : {
                time: 'icon ion-ios7-clock-outline',
                date: 'icon ion-ios7-calendar-outline',
                up:   'icon ion-ios7-arrow-up',
                down: 'icon ion-ios7-arrow-down'
            },
            pickDate: false
        });
        $('#datetimepicker3').datetimepicker({
            icons : {
                time: 'icon ion-ios7-clock-outline',
                date: 'icon ion-ios7-calendar-outline',
                up:   'icon ion-ios7-arrow-up',
                down: 'icon ion-ios7-arrow-down'
            },
            pickTime: false
        });
        $('#datetimepicker4').datetimepicker({
            icons : {
                time: 'icon ion-ios7-clock-outline',
                date: 'icon ion-ios7-calendar-outline',
                up:   'icon ion-ios7-arrow-up',
                down: 'icon ion-ios7-arrow-down'
            }
        });
        

        // date range picker
        $('#daterangepicker1').daterangepicker();
        $('#daterangepicker2').daterangepicker(
            {
              ranges: {
                 'Today': [moment(), moment()],
                 'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                 'Last 7 Days': [moment().subtract('days', 6), moment()],
                 'Last 30 Days': [moment().subtract('days', 29), moment()],
                 'This Month': [moment().startOf('month'), moment().endOf('month')],
                 'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
              },
              startDate: moment().subtract('days', 29),
              endDate: moment()
            },
            function(start, end) {
                $('#daterangepicker2 .text-date').text(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }
        );



        /*$('#form-validate').validate({
            errorElement: 'div',
            errorClass: 'help-block',
            focusInvalid: false,
            rules: {
                first_name: {
                    required: true,
                },
            },
            messages: {
                first_name: {
                    required: "Please provide your name"
                },
            }
        });*/

    })
    </script>
  </body>
</html>