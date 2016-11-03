<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Web Application | todo</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" cache="false" />
  <link rel="stylesheet" href="js/nestable/nestable.css" type="text/css" cache="false" />
  <link rel="stylesheet" href="css/plugin.css" type="text/css" />
  <link rel="stylesheet" href="css/app.css" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/respond.min.js" cache="false"></script>
    <script src="js/ie/html5.js" cache="false"></script>
    <script src="js/ie/fix.js" cache="false"></script>
  <![endif]-->
</head>
<body>
  <section class="hbox stretch">
    <!-- .aside -->
    <aside class="bg-dark aside-sm" id="nav">
      <section class="vbox">
        <header class="dker nav-bar">
          <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
            <i class="icon-reorder"></i>
          </a>
          <a href="#" class="nav-brand" data-toggle="fullscreen">todo</a>
          <a class="btn btn-link visible-xs" data-toggle="class:show" data-target=".nav-user">
            <i class="icon-comment-alt"></i>
          </a>
        </header>
        <section>
          <div class="lter nav-user hidden-xs pos-rlt">            
            <div class="nav-avatar pos-rlt">
              <a href="#" class="thumb-sm avatar animated rollIn" data-toggle="dropdown">
                <img src="images/avatar.jpg" alt="" class="">
                <span class="caret caret-white"></span>
              </a>
              <ul class="dropdown-menu m-t-sm animated fadeInLeft">
              	<span class="arrow top"></span>
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
                <li class="divider"></li>
                <li>
                  <a href="docs.html">Help</a>
                </li>
                <li>
                  <a href="signin.html">Logout</a>
                </li>
              </ul>
              <div class="visible-xs m-t m-b">
                <a href="#" class="h3">John.Smith</a>
                <p><i class="icon-map-marker"></i> London, UK</p>
              </div>
            </div>
            <div class="nav-msg">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <b class="badge badge-white count-n">2</b>
              </a>
              <section class="dropdown-menu m-l-sm pull-left animated fadeInRight">
                <div class="arrow left"></div>
                <section class="panel bg-white">
                  <header class="panel-heading">
                    <strong>You have <span class="count-n">2</span> notifications</strong>
                  </header>
                  <div class="list-group">
                    <a href="#" class="media list-group-item">
                      <span class="pull-left thumb-sm">
                        <img src="images/avatar.jpg" alt="John said" class="img-circle">
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
            </div>
          </div>
          <nav class="nav-primary hidden-xs">
            <ul class="nav">
              <li>
                <a href="index.html">
                  <i class="icon-eye-open"></i>
                  <span>Discover</span>
                </a>
              </li>              
              <li class="dropdown-submenu active">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="icon-beaker"></i>
                  <span>UI kit</span>
                </a>
                <ul class="dropdown-menu">                
                  <li>
                    <a href="buttons.html">Buttons</a>
                  </li>
                  <li>
                    <a href="icons.html">
                      <b class="badge pull-right">302</b>Icons
                    </a>
                  </li>
                  <li>
                    <a href="grid.html">Grid</a>
                  </li>
                  <li>
                    <a href="widgets.html">
                      <b class="badge bg-primary pull-right">8</b>Widgets
                    </a>
                  </li>
                  <li>
                    <a href="components.html">
                      <b class="badge pull-right">18</b>Components
                    </a>
                  </li>
                  <li>
                    <a href="list.html">List groups</a>
                  </li>
                  <li>
                    <a href="table.html">Table</a>
                  </li>
                  <li>
                    <a href="form.html">Form</a>
                  </li>
                  <li>
                    <a href="chart.html">Chart</a>
                  </li>
                  <li>
                    <a href="calendar.html">Fullcalendar</a>
                  </li>
                  <li>
                    <a href="portlet.html">Portlet</a>
                  </li>
                </ul>
              </li>
               <li class="dropdown-submenu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="icon-file-text"></i>
                  <span>Pages</span>
                </a>
                <ul class="dropdown-menu">                
                  <li>
                    <a href="dashboard.html">Dashboard</a>                    
                  </li>
                  <li>
                    <a href="dashboard-1.html">Dashboard one</a>              
                  </li>
                  <li>
                    <a href="dashboard-2.html">Dashboard layout</a>
                  </li>
                  <li>
                    <a href="analysis.html">Analysis</a>
                  </li>
                  <li>
                    <a href="gallery.html">Gallery</a>              
                  </li>
                  <li>
                    <a href="profile.html">Profile</a>
                  </li>
                  <li>
                    <a href="blog.html">Blog</a>              
                  </li>
                  <li>
                    <a href="invoice.html">Invoice</a>              
                  </li>                  
                  <li>
                    <a href="signin.html">Signin page</a>
                  </li>
                  <li>
                    <a href="signup.html">Signup page</a>
                  </li>
                  <li>
                    <a href="404.html">404 page</a>
                  </li>
                </ul>
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
                  <i class="icon-tasks"></i>
                  <span>Tasks</span>
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
                  <i class="icon-time"></i>
                  <span>Timeline</span>
                </a>
              </li>
            </ul>
          </nav>
        </section>
        <footer class="footer bg-gradient hidden-xs">
          <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-sm btn-link m-r-n-xs pull-right">
            <i class="icon-off"></i>
          </a>
          <a href="#nav" data-toggle="class:nav-vertical" class="btn btn-sm btn-link m-l-n-sm">
            <i class="icon-reorder"></i>
          </a>
        </footer>
      </section>
    </aside>
    <!-- /.aside -->
    <!-- .vbox -->
    <section id="content">
      <section class="vbox">
        <header class="header bg-light bg-gradient b-b">
          <p>List groups</p>
        </header>
        <section class="scrollable wrapper">
          <div class="">
            <h4 class="m-t-none">Sortable list <small>(drag to sort)</small></h4>
            <ul class="list-group gutter list-group-lg list-group-sp sortable">
              <li class="list-group-item">
                <a href="#" class="pull-right" data-dismiss="alert"><i class="icon-remove"></i></a>
                <span class="pull-left media-xs"><i class="icon-sort text-muted icon-sm"></i> 01</span>
                <div class="clear">
                  Browser compatibility
                </div>
              </li>
              <li class="list-group-item">
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
              </li>
            </ul>
          </div>
          <h4 class="m-t-none">Nestable list 
            <button id="nestable-menu" class="btn btn-xs btn-white active" data-toggle="class:show">
              <i class="icon-plus text"></i>
              <span class="text">Expand All</span>
              <i class="icon-minus text-active"></i>
              <span class="text-active">Collapse All</span>
            </button>
          </h4>
          <div class="row m-b">
            <div class="col-sm-4">              
              <div class="dd" id="nestable1">
                <ol class="dd-list">
                  <li class="dd-item" data-id="1">
                      <div class="dd-handle">Item 1</div>
                  </li>
                  <li class="dd-item" data-id="2">
                      <div class="dd-handle">Item 2</div>
                      <ol class="dd-list">
                          <li class="dd-item" data-id="3"><div class="dd-handle">Item 3</div></li>
                          <li class="dd-item" data-id="4"><div class="dd-handle">Item 4</div></li>
                          <li class="dd-item" data-id="5">
                              <div class="dd-handle">Item 5</div>
                              <ol class="dd-list">
                                  <li class="dd-item" data-id="6"><div class="dd-handle">Item 6</div></li>
                                  <li class="dd-item" data-id="7"><div class="dd-handle">Item 7</div></li>
                                  <li class="dd-item" data-id="8"><div class="dd-handle">Item 8</div></li>
                              </ol>
                          </li>
                          <li class="dd-item" data-id="9"><div class="dd-handle">Item 9</div></li>
                      </ol>
                  </li>
              </ol>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="dd" id="nestable2">
                <ol class="dd-list">
                  <li class="dd-item" data-id="10">                    
                    <div class="dd-handle">Item 10</div>
                    <ol class="dd-list">
                      <li class="dd-item" data-id="11">
                        <div class="dd-handle">Item 11</div>
                      </li>
                    </ol>
                  </li>                  
                  <li class="dd-item" data-id="12">
                      <div class="dd-handle">Item 12</div>
                  </li>
                  <li class="dd-item" data-id="13">
                      <div class="dd-handle">Item 13</div>
                  </li>
                  <li class="dd-item" data-id="14">
                      <div class="dd-handle">Item 14</div>
                  </li>
                  <li class="dd-item" data-id="15">
                      <div class="dd-handle">Item 15</div>
                      <ol class="dd-list">
                          <li class="dd-item" data-id="16"><div class="dd-handle">Item 16</div></li>
                          <li class="dd-item" data-id="17"><div class="dd-handle">Item 17</div></li>
                          <li class="dd-item" data-id="18"><div class="dd-handle">Item 18</div></li>
                      </ol>
                  </li>
                </ol>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="dd" id="nestable3">
                <ol class="dd-list">
                  <li class="dd-item dd3-item" data-id="13">
                      <div class="dd-handle dd3-handle">Drag</div><div class="dd3-content">Item 13</div>
                  </li>
                  <li class="dd-item dd3-item" data-id="14">
                      <div class="dd-handle dd3-handle">Drag</div><div class="dd3-content">Item 14</div>
                  </li>
                  <li class="dd-item dd3-item" data-id="15">
                      <div class="dd-handle dd3-handle">Drag</div><div class="dd3-content">Item 15</div>
                      <ol class="dd-list">
                          <li class="dd-item dd3-item" data-id="16">
                              <div class="dd-handle dd3-handle">Drag</div><div class="dd3-content">Item 16</div>
                          </li>
                          <li class="dd-item dd3-item" data-id="17">
                              <div class="dd-handle dd3-handle">Drag</div><div class="dd3-content">Item 17</div>
                          </li>
                          <li class="dd-item dd3-item" data-id="18">
                              <div class="dd-handle dd3-handle">Drag</div><div class="dd3-content">Item 18</div>
                          </li>
                      </ol>
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="row">            
            <div class="col-sm-6">
              <div class="list-group bg-white">
                <a href="#" class="list-group-item">
                  <i class="icon-chevron-right"></i>
                  <span class="badge">201</span>
                  <i class="icon-envelope"></i> Inbox
                </a>
                <a href="#" class="list-group-item">
                  <i class="icon-chevron-right"></i>
                  <span class="badge bg-info">5021</span>
                  <i class="icon-eye-open"></i> Profile visits
                </a>
                <a href="#" class="list-group-item">
                  <i class="icon-chevron-right"></i>
                  <span class="badge bg-success">14</span>
                  <i class="icon-phone"></i> Call
                </a>
                <a href="#" class="list-group-item">
                  <i class="icon-chevron-right"></i>
                  <span class="badge bg-dark">20</span>
                  <i class="icon-comments-alt"></i> Messages
                </a>
                <a href="#" class="list-group-item">
                  <i class="icon-chevron-right"></i>
                  <span class="badge">14</span>
                  <i class="icon-bookmark"></i> Bookmarks
                </a>
                <a href="#" class="list-group-item">
                  <i class="icon-chevron-right"></i>
                  <span class="badge bg-info">30</span>
                  <i class="icon-bell"></i> Notifications
                </a>
                <a href="#" class="list-group-item">
                  <i class="icon-chevron-right"></i>
                  <span class="badge bg-danger">10</span>
                  <i class="icon-time"></i> Watch
                </a>
              </div>
            </div>
            <div class="col-sm-6">
              <section class="panel">
                <header class="panel-heading">
                  <div class="input-group text-sm">
                    <input type="text" class="input-sm form-control" placeholder="Search">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-sm btn-white dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                      <ul class="dropdown-menu pull-right">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div>
                  </div>
                </header>
                <ul class="list-group alt">
                  <li class="list-group-item">
                    <div class="media">
                      <span class="pull-left thumb-sm"><img src="images/avatar.jpg" alt="John said" class="img-circle"></span>
                      <div class="pull-right text-success m-t-sm">
                        <i class="icon-circle"></i>
                      </div>
                      <div class="media-body">
                        <div><a href="#">Chris Fox</a></div>
                        <small class="text-muted">about 2 minutes ago</small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <span class="pull-left thumb-sm"><img src="images/avatar.jpg" alt="John said" class="img-circle"></span>
                      <div class="pull-right text-muted m-t-sm">
                        <i class="icon-circle"></i>
                      </div>
                      <div class="media-body">
                        <div><a href="#">Amanda Conlan</a></div>
                        <small class="text-muted">about 2 hours ago</small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <span class="pull-left thumb-sm"><img src="images/avatar.jpg" alt="John said" class="img-circle"></span>
                      <div class="pull-right text-warning m-t-sm">
                        <i class="icon-circle"></i>
                      </div>
                      <div class="media-body">
                        <div><a href="#">Dan Doorack</a></div>
                        <small class="text-muted">3 days ago</small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <span class="pull-left thumb-sm"><img src="images/avatar.jpg" alt="John said" class="img-circle"></span>
                      <div class="pull-right text-danger m-t-sm">
                        <i class="icon-circle"></i>
                      </div>
                      <div class="media-body">
                        <div><a href="#">Lauren Taylor</a></div>
                        <small class="text-muted">about 2 minutes ago</small>
                      </div>
                    </div>
                  </li>
                </ul>
              </section>          
            </div>
          </div>
        </section>
      </section>
    </section>
    <!-- /.vbox -->
  </section>
	<script src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- App -->
  <script src="js/app.js"></script>
  <script src="js/app.plugin.js"></script>
  <script src="js/app.data.js"></script>
  <!-- Sortable -->
  <script src="js/sortable/jquery.sortable.js"></script>
  <script src="js/nestable/jquery.nestable.js" cache="false"></script>
  <script src="js/nestable/demo.js" cache="false"></script>
</body>
</html>