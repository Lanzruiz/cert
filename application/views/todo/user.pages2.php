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
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/todo/js/fuelux/fuelux.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/todo/js/datatables/datatables.css" type="text/css" />
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
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
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
      <section class="vbox">



        <header class="header bg-success bg-gradient">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#static" data-toggle="tab">Active</a></li>
            <li class=""><a href="#draft" data-toggle="tab">Drafts</a></li>
            <li class=""><a href="#datatable" data-toggle="tab">Trash</a></li>
          </ul>
        </header>
        <section class="scrollable wrapper">
          <div class="tab-content">
            <div class="tab-pane active" id="static">
              
              <section class="panel">
                <header class="panel-heading">
                  Active Pages
                </header>

                <div class="row text-sm wrapper">
                  <div class="col-sm-5 m-b-xs">
                    <select class="input-sm form-control input-s-sm inline">
                      <option value="0">Bulk action</option>
                      <option value="1">Delete selected</option>
                      <option value="2">Bulk edit</option>
                      <option value="3">Export</option>
                    </select>
                    <button class="btn btn-sm btn-white">Apply</button>                
                  </div>
                  <div class="col-sm-4 m-b-xs">
                   
                  </div>
                  <div class="col-sm-3">
                    <div class="input-group">
                      <input type="text" class="input-sm form-control" placeholder="Search">
                      <span class="input-group-btn">
                        <button class="btn btn-sm btn-white" type="button">Go!</button>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table table-striped b-t text-sm">
                    <thead>
                      <tr>
                        <th width="20"><input type="checkbox"></th>
                        <th class="th-sortable" data-toggle="class">Page Name
                          <span class="th-sort">
                            <i class="icon-sort-down text"></i>
                            <i class="icon-sort-up text-active"></i>
                            <i class="icon-sort"></i>
                          </span>
                        </th>
                        <th>Status</th>
                        <th>Date Created</th>
                        <th width="30"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" name="post[]" value="2"></td>
                        <td>Idrawfast</td>
                        <td>4c</td>
                        <td>Jul 25, 2013</td>
                        <td>
                          <a href="#" class="active" data-toggle="class"><i class="icon-ok text-success text-active"></i><i class="icon-remove text-danger text"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="post[]" value="3"></td>
                        <td>Formasa</td>
                        <td>8c</td>
                        <td>Jul 22, 2013</td>
                        <td>
                          <a href="#" data-toggle="class"><i class="icon-ok text-success text-active"></i><i class="icon-remove text-danger text"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="post[]" value="4"></td>
                        <td>Avatar system</td>
                        <td>15c</td>
                        <td>Jul 15, 2013</td>
                        <td>
                          <a href="#" class="active" data-toggle="class"><i class="icon-ok text-success text-active"></i><i class="icon-remove text-danger text"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="post[]" value="4"></td>
                        <td>Throwdown</td>
                        <td>4c</td>
                        <td>Jul 11, 2013</td>
                        <td>
                          <a href="#" class="active" data-toggle="class"><i class="icon-ok text-success text-active"></i><i class="icon-remove text-danger text"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="post[]" value="5"></td>
                        <td>Idrawfast</td>
                        <td>4c</td>
                        <td>Jul 7, 2013</td>
                        <td>
                          <a href="#" class="active" data-toggle="class"><i class="icon-ok text-success text-active"></i><i class="icon-remove text-danger text"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="post[]" value="6"></td>
                        <td>Formasa</td>
                        <td>8c</td>
                        <td>Jul 3, 2013</td>
                        <td>
                          <a href="#" class="active" data-toggle="class"><i class="icon-ok text-success text-active"></i><i class="icon-remove text-danger text"></i></a>
                        </td>
                      </tr>
                     
                      </tr>
                    </tbody>
                  </table>
                </div>
                <footer class="panel-footer">
                  <div class="row">
                    <div class="col-sm-4 hidden-xs">
                      <select class="input-sm form-control input-s-sm inline">
                        <option value="0">Bulk action</option>
                        <option value="1">Delete selected</option>
                        <option value="2">Bulk edit</option>
                        <option value="3">Export</option>
                      </select>
                      <button class="btn btn-sm btn-white">Apply</button>                  
                    </div>
                    <div class="col-sm-4 text-center">
                      <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                    </div>
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
                  </div>
                </footer>
              </section>
            </div>
            <div class="tab-pane" id="draft">
              <section class="panel">
                <header class="panel-heading">
                  Draft Pages
                </header>

                <div class="row text-sm wrapper">
                  <div class="col-sm-5 m-b-xs">
                    <select class="input-sm form-control input-s-sm inline">
                      <option value="0">Bulk action</option>
                      <option value="1">Delete selected</option>
                      <option value="2">Bulk edit</option>
                      <option value="3">Export</option>
                    </select>
                    <button class="btn btn-sm btn-white">Apply</button>                
                  </div>
                  <div class="col-sm-4 m-b-xs">
                   
                  </div>
                  <div class="col-sm-3">
                    <div class="input-group">
                      <input type="text" class="input-sm form-control" placeholder="Search">
                      <span class="input-group-btn">
                        <button class="btn btn-sm btn-white" type="button">Go!</button>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table table-striped b-t text-sm">
                    <thead>
                      <tr>
                        <th width="20"><input type="checkbox"></th>
                        <th class="th-sortable" data-toggle="class">Page Name
                          <span class="th-sort">
                            <i class="icon-sort-down text"></i>
                            <i class="icon-sort-up text-active"></i>
                            <i class="icon-sort"></i>
                          </span>
                        </th>
                        <th>Status</th>
                        <th>Date Created</th>
                        <th width="30"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" name="post[]" value="2"></td>
                        <td>Idrawfast</td>
                        <td>4c</td>
                        <td>Jul 25, 2013</td>
                        <td>
                          <a href="#" class="active" data-toggle="class"><i class="icon-ok text-success text-active"></i><i class="icon-remove text-danger text"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="post[]" value="3"></td>
                        <td>Formasa</td>
                        <td>8c</td>
                        <td>Jul 22, 2013</td>
                        <td>
                          <a href="#" data-toggle="class"><i class="icon-ok text-success text-active"></i><i class="icon-remove text-danger text"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="post[]" value="4"></td>
                        <td>Avatar system</td>
                        <td>15c</td>
                        <td>Jul 15, 2013</td>
                        <td>
                          <a href="#" class="active" data-toggle="class"><i class="icon-ok text-success text-active"></i><i class="icon-remove text-danger text"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="post[]" value="4"></td>
                        <td>Throwdown</td>
                        <td>4c</td>
                        <td>Jul 11, 2013</td>
                        <td>
                          <a href="#" class="active" data-toggle="class"><i class="icon-ok text-success text-active"></i><i class="icon-remove text-danger text"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="post[]" value="5"></td>
                        <td>Idrawfast</td>
                        <td>4c</td>
                        <td>Jul 7, 2013</td>
                        <td>
                          <a href="#" class="active" data-toggle="class"><i class="icon-ok text-success text-active"></i><i class="icon-remove text-danger text"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="post[]" value="6"></td>
                        <td>Formasa</td>
                        <td>8c</td>
                        <td>Jul 3, 2013</td>
                        <td>
                          <a href="#" class="active" data-toggle="class"><i class="icon-ok text-success text-active"></i><i class="icon-remove text-danger text"></i></a>
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
                <footer class="panel-footer">
                  <div class="row">
                    <div class="col-sm-4 hidden-xs">
                      <select class="input-sm form-control input-s-sm inline">
                        <option value="0">Bulk action</option>
                        <option value="1">Delete selected</option>
                        <option value="2">Bulk edit</option>
                        <option value="3">Export</option>
                      </select>
                      <button class="btn btn-sm btn-white">Apply</button>                  
                    </div>
                    <div class="col-sm-4 text-center">
                      <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                    </div>
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
                  </div>
                </footer>
              </section>
            </div>
            <div class="tab-pane" id="datatable">
              <section class="panel">
                <header class="panel-heading">
                  DataTables 
                  <i class="icon-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i> 
                </header>
                <div class="table-responsive">
                  <table class="table table-striped m-b-none" data-ride="datatables">
                    <thead>
                      <tr>
                        <th width="20%">Rendering engine</th>
                        <th width="25%">Browser</th>
                        <th width="25%">Platform(s)</th>
                        <th width="15%">Engine version</th>
                        <th width="15%">CSS grade</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
              </section>
            </div>
          </div>
        </section>
      </section>
      <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
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
  <!-- fuelux -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/fuelux/fuelux.js"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/libs/underscore-min.js"></script>
  <!-- datatables -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/datatables/jquery.dataTables.min.js"></script>
  <!-- Sparkline Chart -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/charts/sparkline/jquery.sparkline.min.js"></script>
  <!-- Easy Pie Chart -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
</body>
</html>