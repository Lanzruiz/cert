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
       

        <!-- define content theme, use data-swipe="true" to enable gesture event -->
        <!-- (recomended: dont change the id value) -->
        <section id="content" class="content" style="padding-left: 0px; !important">
            <!-- define your content header here -->
            <header class="content-header">
                <!-- header actions -->
            

                <!-- your Awesome App title -->
                <h1 class="content-title">Fill in your details</h1>
            </header><!-- /side left -->
            

            <!-- define content row -->
            <div>
                <!-- define your awesome apps here -->
                <!-- (recomended: dont change the id value) -->
                <section id="content-main" class="content-main">
                    
                   
                        <!-- app body -->
                        <div class="app-body">
                            
                            <!-- app content here -->
                            <form id="form-wizard-1" role="form" class="form-horizontal">
                                <div id="wizard-1">
                                    <h3>Account</h3>
                                    <section>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="username">Email *</label>
                                            <div class="col-sm-7">
                                                <input class="form-control" id="username" name="username" type="text" value="<?php echo $email; ?>">
                                            </div>
                                        </div><!-- /form-group -->

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="password">Password *</label>
                                            <div class="col-sm-7">
                                                <input class="form-control" id="password" name="password" type="password">
                                            </div>
                                        </div><!-- /form-group -->

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="confirm">Confirm Password *</label>
                                            <div class="col-sm-7">
                                                <input class="form-control" id="confirm" name="confirm" type="password">
                                            </div>
                                        </div><!-- /form-group -->
                                        <div class="clearfix"></div>
                                    </section><!-- /step 1 -->

                                    <h3>Profile</h3>
                                    <section>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="firstname">First name *</label>
                                            <div class="col-sm-7">
                                                <input class="form-control" id="firstname" name="firstname" type="text">
                                            </div>
                                        </div><!-- /form-group -->

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="lastname">Last name *</label>
                                            <div class="col-sm-7">
                                                <input class="form-control" id="lastname" name="lastname" type="text">
                                            </div>
                                        </div><!-- /form-group -->

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="email">Email *</label>
                                            <div class="col-sm-7">
                                                <input class="form-control" id="email" name="email" type="text" class="required email">
                                            </div>
                                        </div><!-- /form-group -->

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="address">Address</label>
                                            <div class="col-sm-7">
                                                <input class="form-control" id="address" name="address" type="text">
                                            </div>
                                        </div><!-- /form-group -->
                                    </section><!-- /step 2 -->

                                    <h3>Hints</h3>
                                    <section>
                                        <div class="alert  alert-info">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum ab excepturi odio dicta asperiores id?</p>
                                        </div>
                                        <div class="alert  alert-warning">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, consequatur laborum maxime aperiam quis saepe!</p>
                                        </div>
                                        <div class="alert  alert-danger">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque omnis porro nisi deserunt ipsum inventore.</p>
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