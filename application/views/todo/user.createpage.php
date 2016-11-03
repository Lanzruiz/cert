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
                  <li>
                    <a href="<?php echo base_url(); ?>/users/pages">List</a>                    
                  </li>
                  <li class="active">
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
    <!-- /.aside -->
    <!-- .vbox -->
    <section id="content">
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
      <section class="hbox stretch" id="taskapp">

        
          <section class="vbox">

            <header class="header bg-light lter bg-gradient b-b">
              <button class="btn btn-success btn-sm pull-right btn-icon" id="new-task"><i class="icon-plus"></i></button>
              <p>Tasks</p>
            </header>            
            <section class="bg-light lter">
              <section class="hbox stretch">          
                <!-- .aside -->
                <aside>
                  <section class="vbox">
                    <section class="scrollable wrapper">
                      <!-- task list -->
                      <ul id="task-list" class="list-group list-group-sp"></ul>
                        <!-- templates -->
                        <script type="text/template" id="item-template">
                          <div class="view" id="task-<%- id %>">
                            <button class="destroy close hover-action">&times;</button>
                            <div class="checkbox">
                              <input class="toggle" type="checkbox" <%= done ? 'checked="checked"' : '' %> />
                              <span class="task-name"><%- (name && name.length) ? name : 'New task' %></span>
                              <input class="edit form-control" type="text" value="<%- name %>" />
                            </div>
                          </div>
                        </script>
                        <!-- / template  -->
                      <!-- task list -->
                    </section>
                  </section>
                </aside>
                <!-- /.aside -->
              </section>
            </section>
            <footer class="footer bg-white-only b-t">
              <p class="checkbox"><label><input id="toggle-all" type="checkbox"> Mark all as complete</label></p>
            </footer>
          </section>
       
        <!-- .aside -->
        <aside class="col-lg-4 bg-white b-l">
          <section class="vbox flex" id="task-detail">
            <!-- task detail -->
            <script type="text/template" id="task-template">
            <header class="header bg-light lt b-b">
              <p class="m-b">
                <span class="text-muted">Created:</span> <%- moment(date).format('MMM Do, h:mm a') %>
              </p>
              <div class="lter pull-in b-t m-t-xxs">
              <textarea type="text" class="form-control form-control-trans scrollable" placeholder="Task description"><%- desc %></textarea>
              </div>
            </header>
            <section>
              <section>
                <section>
                  <ul id="task-comment" class="list-group no-radius no-border m-t-n-xxs">
                  </ul>
                </section>
              </section>
            </section>
            <footer class="footer bg-light lter clearfix b-t">
                <div class="input-group m-t-sm">   
                  <input type="text" class="form-control input-sm" id="task-c-input" placeholder="Type a comment">
                  <span class="input-group-btn">
                    <button class="btn btn-success btn-sm" type="button" id="task-c-btn"><i class="icon-pencil"></i></button>
                  </span>
                </div>
            </footer>
            </script>
            <!-- task detail -->
            <script type="text/template" id="item-c-template">
              <div class="view">
                <button class="destroy close hover-action">&times;</button>
                <div>
                    <span><%- desc %></span>
                    <small class="text-muted block text-xs"><i class="icon-time"></i> <%- moment(date).fromNow() %></small>
                </div>
              </div>
            </script>
          </section>
        </aside>
        <!-- /.aside -->
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
  <script src="<?php echo base_url(); ?>application/views/todo/js/libs/underscore-min.js"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/libs/backbone-min.js"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/libs/backbone.localStorage-min.js"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/libs/moment.min.js"></script>
  <!-- Tasks -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/apps/tasks.js" cache="false"></script>  
</body>
</html>