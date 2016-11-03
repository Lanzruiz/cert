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

   <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/todo/js/datatables/datatables.css" type="text/css" />

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
                  <span>Disaster & Kits</span>
                </a>
              </li>
             
              
               <li>
                <a href="<?php echo base_url(); ?>/admin/support">
                  <i class="icon-comment"></i>
                   <span>Tickets</span>
                   <span>(900)</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>/admin/settings">
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

                  <!-- Name of admin !-->

                  John.Smith <b class="caret"></b>

                  <!-- Name of Admin !-->


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
                  <h3 class="m-t m-b-none">Dashboard</h3>
                  <p class="block text-muted">Welcome to application</p>
                </div>
                <div class="col-sm-8">
                 
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
                            <li class="active"><a href="#tab1" data-toggle="tab">Monthly Analysis</a></li>
                            <li class=""><a href="#tab2" data-toggle="tab">Tickets <strong>Unsolved(900)</strong></a></li>
                           
                          </ul>
                        </header>
                        <section class="scrollable">
                          <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                              <div class="wrapper">
                                <div id="hero-area" class="graph"></div>
                                <div class="row m-t-lg">
                                  <div class="row">
                                     <div class="col-md-12" style="padding-right: 30px; padding-left: 30px">
                                       
                                         <section class="panel bg-warning no-borders">
                                            <div class="row">
                                              <div class="col-xs-9">
                                                <div class="wrapper">
                                                 
                                                  <p class="h2 font-bold">32.5%</p>
                                                  <div class="progress progress-xs progress-striped active m-b-sm">
                                                    <div class="progress-bar progress-bar-warning" data-toggle="tooltip" data-original-title="32.5%" style="width: 32.5%"></div>
                                                  </div>
                                                  <div class="text-sm">Subcribers monthly from previous highest</div>
                                                </div>
                                              </div>
                                              <div class="col-xs-3 wrapper text-center">
                                                <div class="inline m-t-sm">
                                                  <div class="easypiechart easyPieChart" data-percent="32.5" data-line-width="8" data-bar-color="#ffffff" data-track-color="#c79d43" data-scale-color="false" data-size="100" style="width: 100px; height: 100px; line-height: 100px;">
                                                    <span class="h2">32</span>%
                                                  <canvas width="200" height="200" style="width: 100px; height: 100px;"></canvas></div>
                                                </div>
                                              </div>
                                            </div>
                                        </section>



                                           <section class="panel no-borders hbox" >
                                              <aside class="bg-info r-l text-center v-middle">
                                                <div class="wrapper">
                                                  <i class="icon-sun icon-4x"></i>                      
                                                </div>
                                              </aside>
                                              <aside>
                                                <div class="wrapper text-center">
                                                  <p class="h1">79°</p>
                                                  <span>Partial sunshine</span>
                                                </div>
                                              </aside>
                                           </section>

                                     </div>

                                       
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="tab2">
                              <!--<ul class="list-group m-b-none m list-group-lg list-group-sp">
                                <li class="list-group-item">
                                 
                                  <a href="#" class="clear">
                                    <small class="pull-right">3 minuts ago</small>
                                    <strong class="block">Drew Wllon</strong>
                                    <small>Wellcome and play this web application template ... </small>
                                  </a>
                                </li>
                                <li class="list-group-item">
                                
                                  <a href="#" class="clear">
                                    <small class="pull-right">1 hour ago</small>
                                    <strong class="block">Jonathan George</strong>
                                    <small>Morbi nec nunc condimentum...</small>
                                  </a>
                                </li>
                             
                               
                              </ul>
                              !-->
                               <!-- table !-->
                                   <section class="panel">
                                      
                                      <div class="row text-sm wrapper">
                                        <div class="col-sm-9 m-b-xs">
                                          <select class="input-sm form-control input-s-sm inline">
                                            <option value="0">Bulk action</option>
                                            <option value="1">Delete selected</option>
                                            <option value="2">Bulk edit</option>
                                            <option value="3">Export</option>
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
                                              <th width="20"><input type="checkbox"></th>
                                              <th class="th-sortable" data-toggle="class">Ticket Subject
                                               
                                              </th>
                                              <th>Team Name</th>
                                              <th>Date Reported</th>
                                              <th width="30">Status</th>
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
                                            <tr>
                                              <td><input type="checkbox" name="post[]" value="7"></td>
                                              <td>Avatar system </td>
                                              <td>15c</td>
                                              <td>Jul 2, 2013</td>
                                              <td>
                                                <a href="#" class="active" data-toggle="class"><i class="icon-ok text-success text-active"></i><i class="icon-remove text-danger text"></i></a>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td><input type="checkbox" name="post[]" value="8"></td>
                                              <td>Videodown</td>
                                              <td>4c</td>
                                              <td>Jul 1, 2013</td>
                                              <td>
                                                <a href="#" class="active" data-toggle="class"><i class="icon-ok text-success text-active"></i><i class="icon-remove text-danger text"></i></a>
                                              </td>
                                            </tr>
                                             <tr>
                                              <td><input type="checkbox" name="post[]" value="8"></td>
                                              <td>Videodown</td>
                                              <td>4c</td>
                                              <td>Jul 1, 2013</td>
                                              <td>
                                                <a href="#" class="active" data-toggle="class"><i class="icon-ok text-success text-active"></i><i class="icon-remove text-danger text"></i></a>
                                              </td>
                                            </tr>
                                             <tr>
                                              <td><input type="checkbox" name="post[]" value="8"></td>
                                              <td>Videodown</td>
                                              <td>4c</td>
                                              <td>Jul 1, 2013</td>
                                              <td>
                                                <a href="#" class="active" data-toggle="class"><i class="icon-ok text-success text-active"></i><i class="icon-remove text-danger text"></i></a>
                                              </td>
                                            </tr>
                                             <tr>
                                              <td><input type="checkbox" name="post[]" value="8"></td>
                                              <td>Videodown</td>
                                              <td>4c</td>
                                              <td>Jul 1, 2013</td>
                                              <td>
                                                <a href="#" class="active" data-toggle="class"><i class="icon-ok text-success text-active"></i><i class="icon-remove text-danger text"></i></a>
                                              </td>
                                            </tr>
                                             <tr>
                                              <td><input type="checkbox" name="post[]" value="8"></td>
                                              <td>Videodown</td>
                                              <td>4c</td>
                                              <td>Jul 1, 2013</td>
                                              <td>
                                                <a href="#" class="active" data-toggle="class"><i class="icon-ok text-success text-active"></i><i class="icon-remove text-danger text"></i></a>
                                              </td>
                                            </tr>
                                             <tr>
                                              <td><input type="checkbox" name="post[]" value="8"></td>
                                              <td>Videodown</td>
                                              <td>4c</td>
                                              <td>Jul 1, 2013</td>
                                              <td>
                                                <a href="#" class="active" data-toggle="class"><i class="icon-ok text-success text-active"></i><i class="icon-remove text-danger text"></i></a>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td><input type="checkbox" name="post[]" value="8"></td>
                                              <td>Videodown</td>
                                              <td>4c</td>
                                              <td>Jul 1, 2013</td>
                                              <td>
                                                <a href="#" class="active" data-toggle="class"><i class="icon-ok text-success text-active"></i><i class="icon-remove text-danger text"></i></a>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td><input type="checkbox" name="post[]" value="8"></td>
                                              <td>Videodown</td>
                                              <td>4c</td>
                                              <td>Jul 1, 2013</td>
                                              <td>
                                                <a href="#" class="active" data-toggle="class"><i class="icon-ok text-success text-active"></i><i class="icon-remove text-danger text"></i></a>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td><input type="checkbox" name="post[]" value="8"></td>
                                              <td>Videodown</td>
                                              <td>4c</td>
                                              <td>Jul 1, 2013</td>
                                              <td>
                                                <a href="#" class="active" data-toggle="class"><i class="icon-ok text-success text-active"></i><i class="icon-remove text-danger text"></i></a>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td><input type="checkbox" name="post[]" value="8"></td>
                                              <td>Videodown</td>
                                              <td>4c</td>
                                              <td>Jul 1, 2013</td>
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
</body>
</html>