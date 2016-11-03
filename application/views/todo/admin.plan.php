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
              <li class="active">
                <a href="#">
                  <i class="icon-home"></i>
                  <span>Dashboard</span>
                </a>
              </li>

               <li>
                <a href="<?php echo base_url(); ?>/admin/users/">
                  <i class="icon-group"></i>
                  <span>Response Team</span>
                </a>

               
              </li>   

               <li>
                <a href="<?php echo base_url(); ?>/admin/adminlist/">
                  <i class="icon-user-md"></i>
                  <span>Admins</span>
                </a>

               
              </li>              
             
               <li>
                <a href="<?php echo base_url(); ?>/admin/pages/">
                  <i class="icon-file-text"></i>
                  <span>Pages</span>
                </a>

               
              </li>
              <li>
                <a href="<?php echo base_url(); ?>/admin/menus/">
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
                <a href="<?php echo base_url(); ?>/admin/kits">
                  <i class="icon-briefcase"></i>
                  <span>Kits & Resources</span>
                </a>
              </li>
              <li>
                <a href="notes.html">
                  <i class="icon-pencil"></i>
                  <span>Instructions</span>
                </a>
              </li>
               <li>
                <a href="notes.html">
                  <i class="icon-comment"></i>
                  <span>Tickets</span>
                  <span>(900)</span>
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
      <section class="hbox stretch" id="taskapp">
        <aside>
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
        </aside>
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