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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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

           
             
               <li>
                <a href="<?php echo base_url(); ?>/users/pages/">
                  <i class="icon-file-text"></i>
                  <span>Pages</span>
                </a>

               
              </li>
              <li class="active">
                <a href="<?php echo base_url(); ?>/users/menus/">
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
                <a href="<?php echo base_url(); ?>/users/kits">
                  <i class="icon-briefcase"></i>
                  <span>Disaster & Kits</span>
                </a>
              </li>
              <!--
              <li>
                <a href="timeline.html">
                  <i class="icon-gears"></i>
                  <span>Settings</span>
                </a>
              </li>
             !-->
             
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
                 <a href="<?php echo base_url(); ?>admin/apppreview">
                  <i class="icon-eye-open text-white"></i> Preview App
                  <!--<span class="badge up bg-info m-l-n-sm">2</span>!-->
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
                   <?php
                     
                     echo $users;
                  ?>
                  <b class="caret"></b>
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
         
          <section class="vbox flex">
            <header class="header">
              <div class="row b-b">
                <div class="col-sm-8">
                  <h3 class="m-t m-b-none">Menus</h3>
                  <p class="block text-muted">Welcome to application</p>
                </div>
                <div class="col-sm-4">
                   <div class="clearfix m-t-lg m-b-sm pull-right pull-none-xs">
                    <div class="pull-left">
                    <?php


                       foreach ($menus as $row) {

                          if($row->content == "") {
                          

                    ?>                  
                      <a href="#" class="btn btn-s-md btn-success" data-toggle="modal" id="savemenu" data-target="#createAdmin">Save Menu</a>

                    <?php

                           }
                           else {
                     ?>

                        <a href="#" class="btn btn-s-md btn-success" data-toggle="modal" id="editmenu" data-target="#createAdmin">Save Menu</a>

                     <?php

                           }
                     }      
                    
                    ?>  
                      
                    </div>
                   
                  </div>
                </div>
              </div>
              
            </header>
        
          <div class="row m-b" style="margin-top: 30px">
           
            <div class="col-sm-8">
              <div class="dd" id="nestable3">
               
                <ol class="dd-list" id="menulist">
                    
                    <!-- menu list !-->


                       <?php
                                            


                          foreach ($menus as $row) {

                               echo $row->content;


                          } 
                          
                                           
                                                                             

                      ?>   

                    <!-- menu list !-->
               
                </ol>
              </div>
            </div>
            <div class="col-md-4">
             <section class="panel">
                      <header class="panel-heading bg-success">
                        <ul class="nav nav-tabs nav-justified text-uc">
                          <li class="active"><a href="#popular" data-toggle="tab">Customized</a></li>
                          <li class=""><a href="#comment" data-toggle="tab">Page Name</a></li>
                        
                        </ul>
                      </header>
                      <div class="panel-body">
                        <div class="tab-content">
                          <div class="tab-pane active" id="popular">
                            
                             <div class="form-group">
                              <label for="recipient-name" class="form-control-label">Menu Name:</label>
                              <input type="text" class="form-control" id="menuname">
                            </div>
                             <div class="form-group">
                                <label for="recipient-name" class="form-control-label">Content Type:</label>
                                <select class="form-control" id="page_type">
                                   <option> -- Select -- </option>
                                   <option value="page">Page</option>
                                   <option value="1">Kits</option>
                                   <option value="resources">Resources</option>
                                   <option value="disasters">Disasters</option>
                                </select>
                            </div>
                            <div class="form-group">
                               <button type="button" class="btn btn-primary" id="addmenu">Add Menu</button>
                            </div>
                          </div>
                          <div class="tab-pane" id="comment">
                           
                           
              
                             <div class="form-group">
                                <label for="recipient-name" class="form-control-label">Content Type:</label>
                                 <select class="form-control" id="content_type">
                                   <option> -- Select -- </option>
                                   <option value="page">Page</option>
                                   <option value="1">Kits</option>
                                   <option value="">Resources</option>
                                   <option value="3">Disaster</option>
                                </select>
                            </div>
                            <div class="form-group">
                               <button type="button" class="btn btn-primary" id="addmenunoname">Add Menu</button>
                            </div>
                            
                          </div>
                          <div class="tab-pane" id="recent">
                            <p class="text-center m-t-sm"><i class="icon-spinner icon-spin icon-2x"></i></p>
                          </div>
                        </div>
                      </div>
                    </section>
            </div>
          </div>


        
        </section>
      </section>
    </section>
    <!-- /.vbox -->
  </section>

   <!-- page modal !-->
   <div class="modal fade" id="pageModal" width="100%" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="exampleModalLabel">Add Menu</h4>
        </div>
        <div class="modal-body">
            <!-- table !-->
              <div class="form-group">
                              <label for="recipient-name" class="form-control-label">Menu Name:</label>
                              <input type="text" class="form-control" id="menu-name">
                              <section class="panel" style="margin-top: 10px">
                                      
                                      <div class="row text-sm wrapper">
                                     

                                        <div class="col-sm-12">
                                          <div class="input-group">
                                            <input type="text" class="input-sm form-control" id="search_kits" placeholder="Search">
                                            <span class="input-group-btn">
                                              <button class="btn btn-sm btn-white" type="button">Go!</button>
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="table-responsive">
                                        <table class="table table-striped b-t text-sm" id="table_kits">
                                          <thead>
                                            <tr>
                                              <th width="20" style="width: 2px !important"><input type="checkbox"></th>
                                              <th class="th-sortable" data-toggle="class">Page Name
                                               
                                              </th>
                                            
                                              <th>Creator</th>
                                             
                                            </tr>
                                          </thead>
                                          <tbody>
                                          <?php
                                            foreach ($pages as $row) { 
                                          ?>
                                            <tr>
                                              <td><input type="checkbox" name="pages" value="<?php echo $row->id; ?>"></td>
                                              <td><?php echo $row->name; ?></td>
                                             
                                              <td><?php echo $row->app_code; ?></td>
                                            
                                            </tr>
                                         <?php
                                          
                                           }                                         

                                         ?>   
                                          
                                          
                                          
                                          </tbody>
                                        </table>
                                      </div>
                                    
                                    </section>
                                <!-- table !-->
              </div>               
            <!-- table !-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="assignpagemenu">Assign page on menu</button>
        </div>
      </div>
    </div>
  </div>
 <!-- page modal !-->


 <!-- page modal no name !-->
   <div class="modal fade" id="nonamepageModal" width="100%" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="exampleModalLabel">Add Menu</h4>
        </div>
        <div class="modal-body">
            <!-- table !-->
              <div class="form-group">
                             
                              <section class="panel" style="margin-top: 10px">
                                      
                                      <div class="row text-sm wrapper">
                                     

                                        <div class="col-sm-12">
                                          <div class="input-group">
                                            <input type="text" class="input-sm form-control" id="search_kits" placeholder="Search">
                                            <span class="input-group-btn">
                                              <button class="btn btn-sm btn-white" type="button">Go!</button>
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="table-responsive">
                                        <table class="table table-striped b-t text-sm" id="table_kits">
                                          <thead>
                                            <tr>
                                              <th width="20" style="width: 2px !important"><input type="checkbox"></th>
                                              <th class="th-sortable" data-toggle="class">Page Name
                                               
                                              </th>
                                            
                                              <th>Creator</th>
                                             
                                            </tr>
                                          </thead>
                                          <tbody>
                                          <?php
                                            foreach ($pages as $row) { 
                                          ?>
                                            <tr>
                                              <td><input type="checkbox" name="pages" value="<?php echo $row->id; ?>"></td>
                                              <td><?php echo $row->name; ?></td>
                                             
                                              <td><?php echo $row->app_code; ?></td>
                                            
                                            </tr>
                                         <?php
                                          
                                           }                                         

                                         ?>   
                                          
                                          
                                          
                                          </tbody>
                                        </table>
                                      </div>
                                    
                                    </section>
                                <!-- table !-->
              </div>               
            <!-- table !-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="assignnonamepagemenu">Assign page on menu</button>
        </div>
      </div>
    </div>
  </div>
 <!-- page modal no name !-->


  <!-- resources modal !-->
   <div class="modal fade" id="resourcesModal" width="100%" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="exampleModalLabel">Add Menu</h4>
        </div>
        <div class="modal-body">
            <!-- table !-->
              <div class="form-group">
                              <label for="recipient-name" class="form-control-label">Menu Name:</label>
                              <input type="text" class="form-control" id="menuname-resources">
                              <section class="panel" style="margin-top: 10px">
                                      
                                      <div class="row text-sm wrapper">
                                     

                                        <div class="col-sm-12">
                                          <div class="input-group">
                                            <input type="text" class="input-sm form-control" id="search_kits" placeholder="Search">
                                            <span class="input-group-btn">
                                              <button class="btn btn-sm btn-white" type="button">Go!</button>
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="table-responsive">
                                        <table class="table table-striped b-t text-sm" id="table_kits">
                                          <thead>
                                            <tr>
                                              <th width="20" style="width: 2px !important"><input type="checkbox"></th>
                                              <th class="th-sortable" data-toggle="class">Resources Name
                                               
                                              </th>
                                            
                                              <th>Status</th>
                                             
                                            </tr>
                                          </thead>
                                          <tbody>
                                          <?php
                                            foreach ($resources as $row) { 
                                          ?>
                                            <tr>
                                              <td><input type="checkbox" name="resources" value="<?php echo $row->id; ?>"></td>
                                              <td><?php echo $row->name; ?></td>
                                             
                                              <td><?php 

                                                  if($row->status == 1)
                                                  {
                                                      
                                                      echo "active";

                                                  } else {

                                                      echo "inactive";


                                                  }


                                              ?></td>
                                            
                                            </tr>
                                         <?php
                                          
                                           }                                         

                                         ?>   
                                          
                                          
                                          
                                          </tbody>
                                        </table>
                                      </div>
                                    
                                    </section>
                                <!-- table !-->
              </div>               
            <!-- table !-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="assignresourcesmenu">Assign page on menu</button>
        </div>
      </div>
    </div>
  </div>
 <!-- resources modal !-->


 <!-- disaster modal !-->
   <div class="modal fade" id="disastersModal" width="100%" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="exampleModalLabel">Add Menu</h4>
        </div>
        <div class="modal-body">
            <!-- table !-->
              <div class="form-group">
                              <label for="recipient-name" class="form-control-label">Menu Name:</label>
                              <input type="text" class="form-control" id="menuname-disaster">
                              <section class="panel" style="margin-top: 10px">
                                      
                                      <div class="row text-sm wrapper">
                                     

                                        <div class="col-sm-12">
                                          <div class="input-group">
                                            <input type="text" class="input-sm form-control" id="search_kits" placeholder="Search">
                                            <span class="input-group-btn">
                                              <button class="btn btn-sm btn-white" type="button">Go!</button>
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="table-responsive">
                                        <table class="table table-striped b-t text-sm" id="table_kits">
                                          <thead>
                                            <tr>
                                              <th width="20" style="width: 2px !important"><input type="checkbox"></th>
                                              <th class="th-sortable" data-toggle="class">Resources Name
                                               
                                              </th>
                                            
                                              <th>Status</th>
                                             
                                            </tr>
                                          </thead>
                                          <tbody>
                                          <?php
                                            foreach ($disasters as $row) { 
                                          ?>
                                            <tr>
                                              <td><input type="checkbox" name="disasters" value="<?php echo $row->id; ?>"></td>
                                              <td><?php echo $row->name; ?></td>
                                             
                                              <td><?php 

                                                  if($row->status == 1)
                                                  {
                                                      
                                                      echo "active";

                                                  } else {

                                                      echo "inactive";


                                                  }


                                              ?></td>
                                            
                                            </tr>
                                         <?php
                                          
                                           }                                         

                                         ?>   
                                          
                                          
                                          
                                          </tbody>
                                        </table>
                                      </div>
                                    
                                    </section>
                                <!-- table !-->
              </div>               
            <!-- table !-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="assigndisastersmenu">Assign page on menu</button>
        </div>
      </div>
    </div>
  </div>
 <!-- disaster modal !-->


	<script src="<?php echo base_url(); ?>application/views/todo/js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/bootstrap.js"></script>
  <!-- App -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/app.js"></script>
   <script src="<?php echo base_url(); ?>application/views/todo/js/app.data.js"></script>
    
  <script src="<?php echo base_url(); ?>application/views/todo/js/app.plugin.js"></script>
  <script src="js/app.data.js"></script>
  <!-- Sortable -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/sortable/jquery.sortable.js"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/nestable/jquery.nestable.js" cache="false"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/nestable/demo.js" cache="false"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/user.process.js"></script>

</body>
</html>