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
                <a href="index.html">
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
                  <li>
                    <a href="dashboard.html">List</a>                    
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
              <li>
                <a href="mail.html">
                  <b class="badge bg-primary pull-right">3</b>
                  <i class="icon-envelope-alt"></i>
                  <span>Mail</span>
                </a>
              </li>
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
              <li class="active"><a href="#">Washington Emergency ( 20304 )</a></li>
             
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
        <section class="scrollable" id="pjax-container">
          <section class="vbox flex">
            <header class="header">
              <div class="row b-b">
                <div class="col-sm-4">
                  <h3 class="m-t m-b-none">Pages</h3>
                  <p class="block text-muted">List of Pages</p>

                </div>
                <div class="col-sm-8">
                  <div class="clearfix m-t-lg m-b-sm pull-right pull-none-xs">
                    <div class="pull-left">                  
                      <a href="#modal-form" class="btn btn-success" data-toggle="modal">Create Page</a>
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
                       
                        <section class="scrollable">
                          <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                              <div class="wrapper">
                                
                                <div class="">
                                  
                                   <ul class="list-group gutter list-group-lg list-group-sp sortable">
                                       <li class="list-group-item">
                                          <a href="#" class="pull-right" data-dismiss="alert"><i class="icon-remove"></i></a>
                                          <span class="pull-left media-xs"><i class="icon-sort text-muted icon-sm"></i> 01</span>
                                          <div class="clear">
                                              First Page ( Ask Code)
                                          </div>
                                       </li>
                                       <li class="list-group-item">
                                          <a href="#" class="pull-right" data-dismiss="alert"><i class="icon-remove"></i></a>
                                          <span class="pull-left media-xs"><i class="icon-sort text-muted icon-sm"></i> 02</span>
                                          <div class="clear">
                                              Instrunctions
                                          </div>
                                       </li>
                                       <li class="list-group-item">
                                          <a href="#" class="pull-right" data-dismiss="alert"><i class="icon-remove"></i></a>
                                          <span class="pull-left media-xs"><i class="icon-sort text-muted icon-sm"></i> 03</span>
                                           <div class="clear">
                                              Main Page
                                           </div>
                                       </li>
                                      
                                     </ul>
                                 </div>
                                
                              </div>
                            </div>
                            <div class="tab-pane" id="tab2">
                              <ul class="list-group m-b-none m list-group-lg list-group-sp">
                                <li class="list-group-item">
                                  <a href="#" class="thumb-sm pull-left m-r-sm">
                                    <img src="images/avatar_default.jpg" class="img-circle">
                                  </a>
                                  <a href="#" class="clear">
                                    <small class="pull-right">3 minuts ago</small>
                                    <strong class="block">Drew Wllon</strong>
                                    <small>Wellcome and play this web application template ... </small>
                                  </a>
                                </li>
                                <li class="list-group-item">
                                  <a href="#" class="thumb-sm pull-left m-r-sm">
                                    <img src="images/avatar.jpg" class="img-circle">
                                  </a>
                                  <a href="#" class="clear">
                                    <small class="pull-right">1 hour ago</small>
                                    <strong class="block">Jonathan George</strong>
                                    <small>Morbi nec nunc condimentum...</small>
                                  </a>
                                </li>
                             
                               
                              </ul>
                            </div>                            
                            <div class="tab-pane" id="tab3">
                              <div class="text-center wrapper">
                                <i class="icon-spinner icon-spin icon-large"></i>
                              </div>
                            </div>
                          </div>
                        </section>
                      </section>
                    </aside>
                    <aside class="b-l aside-lg">
                      <section class="vbox">
                        <section class="scrollable wrapper">
                          <div class="text-center m-b">
                            <div class="inline">
                              <div class="easypiechart" data-percent="65" data-line-width="25" data-track-color="#eee" data-bar-color="#afcf6f" data-scale-color="#ddd" data-loop="false" data-size="180">
                                <span class="h2">60</span>%
                                <div class="easypie-text">Processing</div>
                              </div>
                            </div>
                          </div>
                          <div class="panel-group m-b" id="accordion2">
                            <div class="panel">
                              <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                  Collapsible Group Item #1
                                </a>
                              </div>
                              <div id="collapseOne" class="panel-collapse in">
                                <div class="panel-body text-sm">
                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt.
                                </div>
                              </div>
                            </div>
                            <div class="panel">
                              <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                  Collapsible Group Item #2
                                </a>
                              </div>
                              <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body text-sm">
                                  Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                              </div>
                            </div>
                            <div class="panel">
                              <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                  Collapsible Group Item #3
                                </a>
                              </div>
                              <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body text-sm">
                                  Sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                </div>
                              </div>
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

  <!-- Sortable -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/sortable/jquery.sortable.js"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/nestable/jquery.nestable.js" cache="false"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/nestable/demo.js" cache="false"></script>
</body>
</html>