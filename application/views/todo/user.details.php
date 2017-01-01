<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Web Application | todo</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/todo/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/todo/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/todo/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/todo/css/font.css" type="text/css" cache="false" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/todo/js/select2/select2.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/todo/js/fuelux/fuelux.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/todo/js/datepicker/datepicker.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/todo/js/slider/slider.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/todo/css/plugin.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/todo/css/app.css" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/respond.min.js" cache="false"></script>
    <script src="js/ie/html5.js" cache="false"></script>
    <script src="js/ie/fix.js" cache="false"></script>
  <![endif]-->
</head>
<body>
  <section class="hbox stretch">
    <!-- .aside -->
     <aside class="bg-success dker aside-sm nav-vertical" id="nav">
      <section class="vbox">
        <header class="bg-black nav-bar">
          <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
            <i class="icon-reorder"></i>
          </a>
          <a href="#" class="nav-brand" data-toggle="fullscreen">ERapp</a>
          <a class="btn btn-link visible-xs" data-toggle="collapse" data-target=".navbar-collapse">
            <i class="icon-comment-alt"></i>
          </a>
        </header>
        <section>
        
        </section>
        
      </section>
    </aside>
    <!-- /.aside -->
    <!-- .vbox -->
    <section id="content">
      <section class="vbox">
        <header class="header bg-dark bg-gradient">
          <ul class="nav nav-tabs">
            
            <li class=""><a href="#wizard" data-toggle="tab">Fill Up the Information</a></li>
          </ul>
        </header>
        <section class="scrollable wrapper">
          <div class="tab-content">
            
            <section class="tab-pane active" id="wizard">
              <div class="panel">
                <div class="wizard clearfix" id="form-wizard">
                  <ul class="steps">
                    <li data-target="#step1" class="active"><span class="badge badge-info">1</span>Accounts</li>
                    <li data-target="#step2"><span class="badge badge-info">2</span>Personal</li>
                    <li data-target="#step3"><span class="badge">2</span>Emergency Team</li>
                   
                  </ul>
                </div>
                <div class="step-content">
                  
                    <div class="step-pane active margin-top-20" id="step1">

                      <p>Email*</p>
                      <input type="text" class="form-control" id="email" name="email" data-trigger="change"  value="<?php echo $email; ?>">

                      <input type="hidden" id="process" value="useradd">

                      <p class="margin-top-20">Password*</p>
                      <input type="text" class="form-control" data-type="password" id="password" name="password" data-trigger="change"  placeholder="Type the information">


                    


                      
                    </div>

                     <div class="step-pane margin-top-20" id="step2">


                      <p class="margin-top-20">First Name*</p>
                      <input type="text" class="form-control" name="fname" id="fname" data-trigger="change" placeholder="Type the information">


                       <p class="margin-top-20">Last Name*</p>
                      <input type="text" class="form-control" name="lname" id="lname" data-trigger="change" placeholder="Type the information">

                     

                     </div>
                  
                    <div class="step-pane" id="step3">
                      <p class="margin-top-20">Response Group Name*</p>

                      <input type="text" class="form-control" name="team" id="team" data-trigger="change" placeholder="Type the information">

                      <p class="margin-top-20">Code*</p>
                      <input type="text" class="form-control" id="code" data-trigger="change"  placeholder="Type the information">


                       
                    </div>
                    <div class="actions m-t">
                    <button type="button" class="btn btn-white btn-sm btn-prev" data-target="#form-wizard" data-wizard="previous" disabled="disabled">Prev</button>
                    <button type="button" id="button" class="btn btn-white btn-sm btn-next" data-target="#form-wizard" data-wizard="next" data-last="Finish">Next</button>
                  </div>
                                
                  
                 
                </div>
              </div>
            </section>
          </div>
        </section>
      </section>
    </section>
    <!-- /.vbox -->
  </section>
  
  <script src="<?php echo base_url(); ?>application/views/todo/js/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/bootstrap.js"></script>
  <!-- app -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/app.js"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/app.plugin.js"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/app.data.js"></script>
  <!-- fuelux -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/fuelux/fuelux.js"></script>
  <!-- datepicker -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/datepicker/bootstrap-datepicker.js"></script>
  <!-- slider -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/slider/bootstrap-slider.js"></script>
  <!-- file input -->  
  <script src="<?php echo base_url(); ?>application/views/todo/js/file-input/bootstrap.file-input.js"></script>
  <!-- combodate -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/libs/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/combodate/combodate.js" cache="false"></script>
  <!-- parsley -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/parsley/parsley.min.js" cache="false"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/parsley/parsley.extend.js" cache="false"></script>
  <!-- select2 -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/select2/select2.min.js" cache="false"></script>
  <!-- wysiwyg -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/wysiwyg/jquery.hotkeys.js" cache="false"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/wysiwyg/bootstrap-wysiwyg.js" cache="false"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/wysiwyg/demo.js" cache="false"></script>
  <!-- markdown -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/markdown/epiceditor.min.js" cache="false"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/markdown/demo.js" cache="false"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/user.process.js" cache="false"></script>
    

</body>
</html>