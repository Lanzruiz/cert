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
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/todo/js/nestable/nestable.css" type="text/css" cache="false" />
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
          <!-- nav -->
          <nav class="nav-primary hidden-xs">
            <ul class="nav">
              <li>
                <a href="<?php echo base_url(); ?>/users/">
                  <i class="icon-home"></i>
                  <span>Dashboard</span>
                </a>
              </li>              
             
               <li class="dropdown-submenu active">
                <a href="<?php echo base_url(); ?>/users/pages/list" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="icon-file-text"></i>
                  <span>Pages</span>
                </a>
                <ul class="dropdown-menu">                
                  <li class="active">
                    <a href="<?php echo base_url(); ?>/users/pages">List</a>                    
                  </li>
                  <li>
                    <a href="dashboard-1.html">New</a>              
                  </li>
                  <li>
                    <a href="dashboard-2.html">Edit</a>
                  </li>
                 
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a href="#">
                  <i class="icon-reorder"></i>
                  <span>Menu</span>
                </a>
                
              </li>
              <!--
              <li>
                <a href="mail.html">
                  <b class="badge bg-primary pull-right">3</b>
                  <i class="icon-envelope-alt"></i>
                  <span>Mail</span>
                </a>
              </li>
              !-->
              <li>
                <a href="tasks.html">
                  <i class="icon-briefcase"></i>
                  <span>Kits</span>
                </a>
              </li>
              <li>
                <a href="notes.html">
                  <i class="icon-pencil"></i>
                  <span>Notes</span>
                </a>
              </li>
              <li>
                <a href="timeline.html">
                  <i class="icon-gears"></i>
                  <span>Settings</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- / nav -->
        </section>
        
      </section>
    </aside>
    <!-- /.aside -->
    <!-- .vbox -->
    <section id="content">
      <section class="vbox">
         <header class="header bg-black navbar navbar-inverse">
          <div class="collapse navbar-collapse pull-in">
            <ul class="nav navbar-nav m-l-n">
              <li class="active"><a href="#">

                <?php 

                    echo $team. ' '; 
                    echo '( '.$code.' )';
        

               ?> 

              </a></li>
             
            </ul>
            <form class="navbar-form navbar-left m-t-sm" role="search">
              <div class="form-group">
                <div class="input-group input-s">
                  <input type="text" class="form-control input-sm no-border bg-dark" placeholder="Search">
                  <span class="input-group-btn">
                    <button type="submit" class="btn btn-sm btn-success btn-icon"><i class="icon-search"></i></button>
                  </span>
                </div>
              </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <li class="hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="icon-bell-alt text-white"></i>
                  <span class="badge up bg-info m-l-n-sm">2</span>
                </a>
                <section class="dropdown-menu animated fadeInUp input-s-lg">
                  <section class="panel bg-white">
                    <header class="panel-heading">
                      <strong>You have <span class="count-n">2</span> notifications</strong>
                    </header>
                    <div class="list-group">
                      <a href="#" class="media list-group-item">
                        <span class="pull-left thumb-sm">
                          <img src="<?php echo base_url(); ?>application/views/todo/images/avatar.jpg" alt="John said" class="img-circle">
                        </span>
                        <span class="media-body block m-b-none">
                          Use awesome animate.css<br>
                          <small class="text-muted">28 Aug 13</small>
                        </span>
                      </a>
                      <a href="#" class="media list-group-item">
                        <span class="media-body block m-b-none">
                          1.0 initial released<br>
                          <small class="text-muted">27 Aug 13</small>
                        </span>
                      </a>
                    </div>
                    <footer class="panel-footer text-sm">
                      <a href="#" class="pull-right"><i class="icon-cog"></i></a>
                      <a href="#">See all the notifications</a>
                    </footer>
                  </section>
                </section>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="thumb-sm avatar pull-left m-t-n-xs m-r-xs">
                    <img src="<?php echo base_url(); ?>application/views/todo/images/avatar.jpg">
                  </span>
                  John.Smith <b class="caret"></b>
                </a>
                <ul class="dropdown-menu animated fadeInLeft">
                  <li>
                    <a href="#">Settings</a>
                  </li>
                  <li>
                    <a href="profile.html">Profile</a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="badge bg-danger pull-right">3</span>
                      Notifications
                    </a>
                  </li>
                  <li>
                    <a href="docs.html">Help</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>/systems/process/user/logout">Logout</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </header>
        <section class="scrollable wrapper">
          <div class="">
            <h4 class="m-t-none">List of Pages</h4>

            <!-- tips article !-->


            <div class="panel" style="margin-left: 6px; margin-right: 6px">
                 <div class="panel-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                          System's Message
                      </a>
                  </div>
                  <div id="collapseOne" class="panel-collapse in">
                      <div class="panel-body text-sm">
                          This items of pages is default and generated based on the standard of the systems but you can do hide this default items of pages. Now if you like to add a page you can click this button. <a href="<?php echo base_url(); ?>/users/createpage" class="btn btn-s-md btn-success" style="margin-top: 10px">Create Page</a>
                      </div>
                  </div>
             </div>

            <!--  tips article !-->

            <!-- list of the pages !-->

            <ul class="list-group gutter list-group-lg list-group-sp sortable">

             <?php
                 foreach ($pages as $value) {
                
             ?>
              <li class="list-group-item" draggable="false">
                <a href="#" class="pull-right" data-dismiss="alert"><i class="icon-remove"></i></a>
                <span class="pull-left media-xs"><i class="icon-sort text-muted icon-sm"></i></span>
                <div class="clear">
                  <?php echo $value->name; ?>
                  <?php 

                      if($value->editable == 0){

                          echo '(not editable)';
                      }

                  ?>
                </div>
              </li>
              <?php
                }
              ?>
              <!--<li class="list-group-item">
                <a href="#" class="pull-right" data-dismiss="alert"><i class="icon-remove"></i></a>
                <span class="pull-left media-xs"><i class="icon-sort text-muted icon-sm"></i> 02</span>
                <div class="clear">
                  Looking for more example templates
                </div>
              </li>
              <li class="list-group-item">
                <a href="#" class="pull-right" data-dismiss="alert"><i class="icon-remove"></i></a>
                <span class="pull-left media-xs"><i class="icon-sort text-muted icon-sm"></i> 03</span>
                <div class="clear">
                  Customizing components
                </div>
              </li>
              <li class="list-group-item">
                <a href="#" class="pull-right" data-dismiss="alert"><i class="icon-remove"></i></a>
                <span class="pull-left media-xs"><i class="icon-sort text-muted icon-sm"></i> 04</span>
                <div class="clear">
                  The fastest way to get started
                </div>
              </li>
              <li class="list-group-item">
                <a href="#" class="pull-right" data-dismiss="alert"><i class="icon-remove"></i></a>
                <span class="pull-left media-xs"><i class="icon-sort text-muted icon-sm"></i> 05</span>
                <div class="clear">
                  HTML5 doctype required
                </div>
              </li>!-->
            </ul>

            <!-- list of the pages !-->


          </div>
        
      
        </section>
      </section>
    </section>
    <!-- /.vbox -->
  </section>
	<script src="<?php echo base_url(); ?>application/views/todo/js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/bootstrap.js"></script>
  <!-- App -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/app.js"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/app.plugin.js"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/app.data.js"></script>
  <!-- Sortable -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/sortable/jquery.sortable.js"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/nestable/jquery.nestable.js" cache="false"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/nestable/demo.js" cache="false"></script>
</body>
</html>