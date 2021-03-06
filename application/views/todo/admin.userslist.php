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

  <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/todo/js/fuelux/fuelux.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/todo/js/datatables/datatables.css" type="text/css" />


  <style type="text/css">

.paging-nav {
  text-align: right;
  padding-top: 2px;
}

.paging-nav a {
  margin: auto 1px;
  text-decoration: none;
  display: inline-block;
  padding: 1px 7px;
  background: #91b9e6;
  color: white;
  border-radius: 3px;
}

.paging-nav .selected-page {
  background: #187ed5;
  font-weight: bold;
}

.paging-nav,
#tableData {
  width: 400px;
  margin: 0 auto;
  font-family: Arial, sans-serif;
}
</style>

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
           <nav class="nav-primary hidden-xs">
            <ul class="nav">
              <li>
                <a href="<?php echo base_url(); ?>/admin/">
                  <i class="icon-home"></i>
                  <span>Dashboard</span>
                </a>
              </li>

               <li class="active">
                <a href="<?php echo base_url(); ?>/admin/users/">
                  <i class="icon-group"></i>
                  <span>Response Group</span>
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
                <a href="<?php echo base_url(); ?>/admin/kits/">
                  <i class="icon-briefcase"></i>
                  <span>Disaster & Kits</span>
                </a>
              </li>
             
               <li>
                <a href="<?php echo base_url(); ?>/admin/support/">
                  <i class="icon-comment"></i>
                  <span>Tickets</span>
                  <span>(900)</span>
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

                 Administrator

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
                    <a href="<?php echo base_url(); ?>/systems/process/admin/logout">Logout</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </header>
        <section class="scrollable" id="pjax-container">
          <section class="vbox flex">
            <header class="header">
              <div class="row b-b">
                <div class="col-sm-4">
                  <h4 class="m-t m-b-none">Emergency Preparedness Group</h4>
                  <p class="block text-muted">Response Team people</p>
                </div>
                <div class="col-sm-8">
                  <div class="clearfix m-t-lg m-b-sm pull-right pull-none-xs">
                    <div class="pull-left">                  
                      <a href="#" class="btn btn-s-md btn-success" data-toggle="modal" data-target="#createAdmin">Create Response Group</a>
                    </div>
                   
                  </div>
                </div>
              </div>
             
            </header>
            <section>
              <section>
                <section>
                  <section  class="hbox stretch">
                    <aside>
                      <section class="vbox">
                        <header class="header bg-light dk">
                          <ul class="nav nav-tabs">
                            <li class="active"><a href="#active" data-toggle="tab">Response Group List</a></li>
                            <!--
                            <li class=""><a href="#draft" data-toggle="tab">Drafts</a></li>
                            <li class=""><a href="#trash" data-toggle="tab">Trash</a></li>

                            !-->
                           
                          </ul>
                        </header>
                        <section class="scrollable">
                          <div class="tab-content">
                            <div class="tab-pane active" id="active">
                                <!-- table !-->
                                   <section class="panel">
                                      
                                      <div class="row text-sm wrapper">
                                        <div class="col-sm-9 m-b-xs">
                                          <select class="input-sm form-control input-s-sm inline">
                                            <option value="0">Bulk Delete</option>
                                            <option value="1">Delete selected</option>
                                            <option value="2">Bulk edit</option>
                                            
                                          </select>
                                          <button class="btn btn-sm btn-white">Apply</button>                
                                        </div>

                                        <div class="col-sm-3">
                                          <div class="input-group">
                                            <input type="text" class="input-sm form-control" id="search" placeholder="Search">
                                            <span class="input-group-btn">
                                              <button class="btn btn-sm btn-white" type="button">Go!</button>
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="table-responsive">
                                        <table class="table table-striped b-t text-sm" id="table_active">
                                          <thead>
                                            <tr>
                                              <th width="20"><input type="checkbox" onchange="checkAll(this)" name="chk[]"></th>
                                              <th class="th-sortable" data-toggle="class">Response Group
                                               
                                              </th>
                                              <th>Email</th>
                                              <th>Code</th>

                                              
                                             
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <?php
                                               foreach ($userlist as $row) { 
                                            ?>
                                            <tr>
                                              <td><input type="checkbox" name="chk[]" value="2"></td>
                                              <td><?php echo $row->community_name; ?></td>
                                              <td><?php echo $row->user_email; ?></td>
                                              <td><?php echo $row->community_number; ?></td>
                                            
                                            
                                              
                                            </tr>

                                           <?php
                                             }
                                           ?> 
                                            
                                          </tbody>
                                        </table>
                                      </div>
                                      <footer class="panel-footer">
                                        <div class="row">
                                          <div class="col-sm-4 hidden-xs">
                                            <select class="input-sm form-control input-s-sm inline">
                                                <option value="0">Bulk Delete</option>
                                                <option value="1">Delete selected</option>
                                                <option value="2">Bulk edit</option>
                                               
                                            </select>
                                            <button class="btn btn-sm btn-white">Apply</button>                  
                                          </div>
                                          <div class="col-sm-4 text-center">
                                            <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                                          </div>
                                          <!--
                                          <div class="col-sm-4 text-right text-center-xs">                
                                            <ul class="pagination pagination-sm m-t-none m-b-none">
                                              <li><a href="#"><i class="icon-chevron-left"></i></a></li>
                                              <li><a href="#">1</a></li>
                                              <li><a href="#">2</a></li>
                                              <li><a href="#">3</a></li>
                                              <li><a href="#">4</a></li>
                                              <li><a href="#">5</a></li>
                                              <li><a href="#"><i class="icon-chevron-right"></i></a></li>
                                            </ul>
                                          </div>
                                          !-->

                                        </div>
                                      </footer>
                                    </section>
                                <!-- table !-->
                            </div>
                                 

                          </div>
                        </section>
                      </section>
                    </aside>

                  </section>
                </section>
              </section>
            </section>
          </section>
        </section>
      </section>
     
    </section>
    <!-- /.vbox -->
  </section>



  <!-- Modal -->

     
      <div class="modal fade" id="createAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="exampleModalLabel">Add Response Group</h4>
        </div>
        <div class="modal-body">
          <?php echo form_open('systems/process/admin/addteam'); ?>
            <div class="form-group">
              <label for="recipient-name" class="form-control-label">Email:</label>
              <input type="text" class="form-control" name="email" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="form-control-label">Password:</label>
              <input type="text" class="form-control" name="password" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="form-control-label">Team Name:</label>
              <input type="text" class="form-control" name="team" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="form-control-label">Code:</label>
              <input type="text" class="form-control" name="code" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="form-control-label">First Name:</label>
              <input type="text" class="form-control" name="firstname" id="recipient-name">
            </div>
          
            <div class="form-group">
              <label for="recipient-name" class="form-control-label">Last Name:</label>
              <input type="text" class="form-control" name="lastname" id="recipient-name">
            </div>
           

            
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" value="Save">
        </div>
          <?php echo form_close(); ?>
      </div>
    </div>
  </div>


  <!-- modal !-->
	<script src="<?php echo base_url(); ?>application/views/todo/js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/bootstrap.js"></script>
  <!-- Sparkline Chart -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/charts/sparkline/jquery.sparkline.min.js"></script>
  <!-- App -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/app.js"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/app.plugin.js"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/app.data.js"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/libs/jquery.pjax.js"></script>
  <!-- fuelux -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/fuelux/fuelux.js"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/libs/underscore-min.js"></script>
  <!-- datatables -->

  <!-- Sparkline Chart -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/charts/sparkline/jquery.sparkline.min.js"></script>
  <!-- Easy Pie Chart -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
  <!-- Morris -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/charts/morris/raphael-min.js" cache="false"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/charts/morris/morris.min.js" cache="false"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>application/views/todo/js/paging.js"></script> 

  <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> 
  
 
  <script>

    $(document).ready(function(){
    $('#table_active').DataTable();
    $('#table_draft').DataTable();
    $('#table_trash').DataTable();
});

</script>

<script src="<?php echo base_url(); ?>application/views/todo/js/process.js"></script>

</body>
</html>