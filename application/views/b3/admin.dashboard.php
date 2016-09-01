<!DOCTYPE html>
<html>
<head>
	<title>Detail Admin - Home</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- bootstrap -->
    <link href="<?php echo base_url(); ?>application/views/b3/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>application/views/b3/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- libraries -->
    <link href="<?php echo base_url(); ?>application/views/b3/css/lib/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>application/views/b3/css/lib/font-awesome.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>application/views/b3/css/lib/bootstrap.datepicker.css" type="text/css" rel="stylesheet" />

     <link href="<?php echo base_url(); ?>application/views/b3/css/lib/jquery.dataTables.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/views/b3/css/compiled/layout.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/views/b3/css/compiled/elements.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/views/b3/css/compiled/icons.css" />

    <!-- this page specific styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/b3/css/compiled/index.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/b3/css/compiled/ui-elements.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/b3/css/compiled/datatables.css" type="text/css" media="screen" />

     <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/b3/css/compiled/web-app-icons.css" type="text/css" media="screen" />

    <!-- open sans font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />

    <!-- lato font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css' />

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <!-- navbar -->
    <header class="navbar navbar-inverse" role="banner">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" id="menu-toggler">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
                CERT PROJECT
            </a>
        </div>
        <ul class="nav navbar-nav pull-right hidden-xs">
            <li class="hidden-xs hidden-sm">
                <input class="search" type="text" />
            </li>
            <li class="notification-dropdown hidden-xs hidden-sm">
                <a href="#" class="trigger">
                    <i class="icon-warning-sign"></i>
                    <span class="count">8</span>
                </a>
                <div class="pop-dialog">
                    <div class="pointer right">
                        <div class="arrow"></div>
                        <div class="arrow_border"></div>
                    </div>
                    <div class="body">
                        <a href="#" class="close-icon"><i class="icon-remove-sign"></i></a>
                        <div class="notifications">
                            <h3>You have 6 new notifications</h3>
                            <a href="#" class="item">
                                <i class="icon-signin"></i> New user registration
                                <span class="time"><i class="icon-time"></i> 13 min.</span>
                            </a>
                            <a href="#" class="item">
                                <i class="icon-signin"></i> New user registration
                                <span class="time"><i class="icon-time"></i> 18 min.</span>
                            </a>
                            <a href="#" class="item">
                                <i class="icon-envelope-alt"></i> New message from Alejandra
                                <span class="time"><i class="icon-time"></i> 28 min.</span>
                            </a>
                            <a href="#" class="item">
                                <i class="icon-signin"></i> New user registration
                                <span class="time"><i class="icon-time"></i> 49 min.</span>
                            </a>
                            <a href="#" class="item">
                                <i class="icon-download-alt"></i> New order placed
                                <span class="time"><i class="icon-time"></i> 1 day.</span>
                            </a>
                            <div class="footer">
                                <a href="#" class="logout">View all notifications</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="notification-dropdown hidden-xs hidden-sm">
                <a href="#" class="trigger">
                    <i class="icon-envelope"></i>
                </a>
                <div class="pop-dialog">
                    <div class="pointer right">
                        <div class="arrow"></div>
                        <div class="arrow_border"></div>
                    </div>
                    <div class="body">
                        <a href="#" class="close-icon"><i class="icon-remove-sign"></i></a>
                        <div class="messages">
                            <a href="#" class="item">
                                <img src="<?php echo base_url(); ?>application/views/b3/img/contact-img.png" class="display" alt="user" />
                                <div class="name">Alejandra Galván</div>
                                <div class="msg">
                                    There are many variations of available, but the majority have suffered alterations.
                                </div>
                                <span class="time"><i class="icon-time"></i> 13 min.</span>
                            </a>
                            <a href="#" class="item">
                                <img src="<?php echo base_url(); ?>application/views/b3/img/contact-img2.png" class="display" alt="user" />
                                <div class="name">Alejandra Galván</div>
                                <div class="msg">
                                    There are many variations of available, have suffered alterations.
                                </div>
                                <span class="time"><i class="icon-time"></i> 26 min.</span>
                            </a>
                            <a href="#" class="item last">
                                <img src="<?php echo base_url(); ?>application/views/b3/img/contact-img.png" class="display" alt="user" />
                                <div class="name">Alejandra Galván</div>
                                <div class="msg">
                                    There are many variations of available, but the majority have suffered alterations.
                                </div>
                                <span class="time"><i class="icon-time"></i> 48 min.</span>
                            </a>
                            <div class="footer">
                                <a href="#" class="logout">View all messages</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle hidden-xs hidden-sm" data-toggle="dropdown">
                    Your account
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="personal-info.html">Personal info</a></li>
                    <li><a href="#">Account settings</a></li>
                    <li><a href="#">Billing</a></li>
                    <li><a href="#">Export your data</a></li>
                    <li><a href="#">Send feedback</a></li>
                </ul>
            </li>
            <li class="settings hidden-xs hidden-sm">
                <a href="personal-info.html" role="button">
                    <i class="icon-cog"></i>
                </a>
            </li>
            <li class="settings hidden-xs hidden-sm">
                <a href="signin.html" role="button">
                    <i class="icon-share-alt"></i>
                </a>
            </li>
        </ul>
    </header>
    <!-- end navbar -->

    <!-- sidebar -->
    <div id="sidebar-nav">
        <ul id="dashboard-menu">
            <li class="active">
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
                <a href="#">
                    <i class="icon-home"></i>
                    <span>Home</span>
                </a>
            </li>            
            
            <li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-group"></i>
                    <span>Users</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="<?php echo base_url(); ?>admin/users">User list</a></li>
                    <li><a href="<?php echo base_url(); ?>admin/adduser">Add User</a></li>
                
                </ul>
            </li>
            <li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-tablet"></i>
                    <span>Community</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="<?php echo base_url(); ?>admin/community">List</a></li>
                    <li><a href="<?php echo base_url(); ?>admin/addcommunity">Add New</a></li>
                </ul>
            </li>
            <li>
                <a class="dropdown-toggle" href="gallery.html">
                    <i class="icon-random"></i>
                    <span>Instructions</span>
                    <i class="icon-chevron-down"></i>
                </a>
                 <ul class="submenu">
                   <li><a href="<?php echo base_url(); ?>admin/instruction">List</a></li>
                   <li><a href="<?php echo base_url(); ?>admin/addinstruction">Add New</a></li>
                </ul>
            </li>
          
           
        </ul>
    </div>
    <!-- end sidebar -->


	<!-- main container -->
    <div class="content">

       <!-- upper main stats -->
        <div id="main-stats">
            <div class="row stats-row">
                <div class="col-md-3 col-sm-3 stat">
                    <div class="data">
                        <span class="number">2457</span>
                        visits
                    </div>
                    <span class="date">Today</span>
                </div>
                <div class="col-md-3 col-sm-3 stat">
                    <div class="data">
                        <span class="number">3240</span>
                        users
                    </div>
                    <span class="date">February 2013</span>
                </div>
                <div class="col-md-3 col-sm-3 stat">
                    <div class="data">
                        <span class="number">322</span>
                        Group
                    </div>
                    <span class="date">This week</span>
                </div>
                <div class="col-md-3 col-sm-3 stat last">
                    <div class="data">
                        <span class="number">32</span>
                        states
                    </div>
                    <span class="date">last 30 days</span>
                </div>
            </div>
        </div>
        <!-- end upper main stats -->

        <div id="pad-wrapper">

            <!-- statistics chart built with jQuery Flot -->

            
            

             <div class="row ctrls" style="margin-top:30px; margin-left: 24px">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#home">Statistics</a></li>
                    <li><a href="#users">List Users</a></li>
                    <li><a href="#messages">List of Community</a></li>
                    
                </ul>
                <div class="tab-content">

                    <div class="tab-pane active" id="home">
                        <div class="row chart">
                           
                          <div class="col-md-12">
                             <div id="statsChart"></div>
                          </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="users">
                         <table id="example">
                        <thead>
                            <tr>
                                <th tabindex="0" rowspan="1" colspan="1">Name
                                </th>
                                <th tabindex="0" rowspan="1" colspan="1">Email
                                </th>
                                <th tabindex="0" rowspan="1" colspan="1">State
                                </th>
                                <th tabindex="0" rowspan="1" colspan="1">Date Joined
                                </th>
                                <th tabindex="0" rowspan="1" colspan="1">Designation
                                </th>

                                <th tabindex="0" rowspan="1" colspan="1">Status
                                </th>
                            </tr>
                        </thead>
                        
                        <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">Name</th>
                                <th rowspan="1" colspan="1">Email</th>
                                <th rowspan="1" colspan="1">State</th>
                                <th rowspan="1" colspan="1">Date Joined</th>
                                <th tabindex="0" rowspan="1" colspan="1">Designation
                                </th>
                                <th rowspan="1" colspan="1">Status</th>
                            </tr>
                        </tfoot>
                        <tbody>

                        <!-- list of users !-->
                        <?php
                         
                           for($i = 0; $i < 40; $i++){
                         ?>
                            <tr>
                                <td>Lanz Ruiz</td>
                                <td>Lanz@yahoo.com</td>
                                <td>Chicago</td>
                                <td>July 5, 2016</td>
                                <td>User</td>
                                <td>Active</td>
                            </tr>
                        <?php 
                            }
                        ?> 

                         <!-- list of users !-->   
                        </tbody>
                    </table>
                    </div>
                    <div class="tab-pane" id="messages">
                        
                        <table id="example2">
                        <thead>
                            <tr>
                                <th tabindex="0" rowspan="1" colspan="1">Name of Community
                                </th>
                                <th tabindex="0" rowspan="1" colspan="1">Community Code
                                </th>
                                <th tabindex="0" rowspan="1" colspan="1">Creator
                                </th>
                                <th tabindex="0" rowspan="1" colspan="1">Date Created
                                </th>
                                <th tabindex="0" rowspan="1" colspan="1">Members
                                </th>
                            </tr>
                        </thead>
                        
                        <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">Name of Community</th>
                                <th rowspan="1" colspan="1">Community Code</th>
                                <th rowspan="1" colspan="1">Creator</th>
                                <th rowspan="1" colspan="1">Date Created</th>
                                <th rowspan="1" colspan="1">Members</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Trident</td>
                                <td>Internet
                                     Explorer 4.0</td>
                                <td>Win 95+</td>
                                <td class="center"> 4</td>
                                <td class="center">X</td>
                            </tr>
                            <tr>
                                <td>Trident</td>
                                <td>Internet
                                     Explorer 5.0</td>
                                <td>Win 95+</td>
                                <td class="center">5</td>
                                <td class="center">C</td>
                            </tr>
                            <tr>
                                <td>Trident</td>
                                <td>Internet
                                     Explorer 5.5</td>
                                <td>Win 95+</td>
                                <td class="center">5.5</td>
                                <td class="center">A</td>
                            </tr>
    
                        </tbody>
                    </table>
                    </div>
                    <div class="tab-pane" id="tools">
                        <div class="row">
                            <div class="col-md-2">
                               <span class="glyphicons glyphicons-user-add"></span>
                            </div>
                            <div class="col-md-2">
                               sd
                            </div>
                            <div class="col-md-2">
                               sd
                            </div>
                            <div class="col-md-2">
                               sd
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end statistics chart -->

            <!-- UI Elements section 
            <div class="row section ui-elements">
                <div class="col-md-12">
                    <h4>UI Elements</h4>
                </div>                
                <div class="col-md-5 knobs">
                    <div class="knob-wrapper">
                        <input type="text" value="50" class="knob" data-thickness=".3" data-inputColor="#333" data-fgColor="#30a1ec" data-bgColor="#d4ecfd" data-width="150">
                        <div class="info">
                            <div class="param">
                                <span class="line blue"></span>
                                Active users
                            </div>
                        </div>
                    </div>
                    <div class="knob-wrapper">
                        <input type="text" value="75" class="knob second" data-thickness=".3" data-inputColor="#333" data-fgColor="#3d88ba" data-bgColor="#d4ecfd" data-width="150">
                        <div class="info">
                            <div class="param">
                                <span class="line blue"></span>
                                % disk space usage
                            </div>
                        </div>
                    </div>                        
                </div>
                <div class="col-md-6 showcase">
                    <div class="ui-sliders">
                        <div class="slider slider-sample1 vertical-handler"></div>
                        <div class="slider slider-sample2"></div>
                        <div class="slider slider-sample3"></div>
                    </div>
                    <div class="ui-group">
                        <a class="btn-flat inverse">Large Button</a>
                        <a class="btn-flat gray">Large Button</a>
                        <a class="btn-flat default">Large Button</a>
                        <a class="btn-flat primary">Large Button</a>
                    </div>                        

                    <div class="ui-group">
                        <a class="btn-flat icon">
                            <i class="tool"></i> Icon button
                        </a>
                        <a class="btn-glow small inverse">
                            <i class="shuffle"></i>
                        </a>
                        <a class="btn-glow small primary">
                            <i class="setting"></i>
                        </a>
                        <a class="btn-glow small default">
                            <i class="attach"></i>
                        </a>
                        <div class="ui-select">
                            <select>
                                <option selected>Dropdown</option>
                                <option>Custom selects</option>
                                <option>Pure css styles</option>
                            </select>
                        </div>

                        <div class="btn-group">
                            <button class="glow left">LEFT</button>
                            <button class="glow right">RIGHT</button>
                        </div>
                    </div>
                </div>
            </div>
            end UI elements section -->

            
        </div>
    </div>


	<!-- scripts -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo base_url(); ?>application/views/b3/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>application/views/b3/js/jquery-ui-1.10.2.custom.min.js"></script>
    <script src="<?php echo base_url(); ?>application/views/b3/js/jquery.dataTables.js"></script>
    <!-- knob -->
    <script src="<?php echo base_url(); ?>application/views/b3/js/jquery.knob.js"></script>
    <!-- flot charts -->
    <script src="<?php echo base_url(); ?>application/views/b3/js/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>application/views/b3/js/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url(); ?>application/views/b3/js/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url(); ?>application/views/b3/js/theme.js"></script>

    <script type="text/javascript">
        $(function () {

            // jQuery Knobs
            $(".knob").knob();



            // jQuery UI Sliders
            $(".slider-sample1").slider({
                value: 100,
                min: 1,
                max: 500
            });
            $(".slider-sample2").slider({
                range: "min",
                value: 130,
                min: 1,
                max: 500
            });
            $(".slider-sample3").slider({
                range: true,
                min: 0,
                max: 500,
                values: [ 40, 170 ],
            });

            

            // jQuery Flot Chart
            var visits = [[1, 50], [2, 40], [3, 45], [4, 23],[5, 55],[6, 65],[7, 61],[8, 70],[9, 65],[10, 75],[11, 57],[12, 59]];
            var visitors = [[1, 25], [2, 50], [3, 23], [4, 48],[5, 38],[6, 40],[7, 47],[8, 55],[9, 43],[10,50],[11,47],[12, 39]];

            var plot = $.plot($("#statsChart"),
                [ { data: visits, label: "Signups"},
                 { data: visitors, label: "Visits" }], {
                    series: {
                        lines: { show: true,
                                lineWidth: 1,
                                fill: true, 
                                fillColor: { colors: [ { opacity: 0.1 }, { opacity: 0.13 } ] }
                             },
                        points: { show: true, 
                                 lineWidth: 2,
                                 radius: 3
                             },
                        shadowSize: 0,
                        stack: true
                    },
                    grid: { hoverable: true, 
                           clickable: true, 
                           tickColor: "#f9f9f9",
                           borderWidth: 0
                        },
                    legend: {
                            // show: false
                            labelBoxBorderColor: "#fff"
                        },  
                    colors: ["#a7b5c5", "#30a0eb"],
                    xaxis: {
                        ticks: [[1, "JAN"], [2, "FEB"], [3, "MAR"], [4,"APR"], [5,"MAY"], [6,"JUN"], 
                               [7,"JUL"], [8,"AUG"], [9,"SEP"], [10,"OCT"], [11,"NOV"], [12,"DEC"]],
                        font: {
                            size: 12,
                            family: "Open Sans, Arial",
                            variant: "small-caps",
                            color: "#697695"
                        }
                    },
                    yaxis: {
                        ticks:3, 
                        tickDecimals: 0,
                        font: {size:12, color: "#9da3a9"}
                    }
                 });



            function showTooltip(x, y, contents) {
                $('<div id="tooltip">' + contents + '</div>').css( {
                    position: 'absolute',
                    display: 'none',
                    top: y - 30,
                    left: x - 50,
                    color: "#fff",
                    padding: '2px 5px',
                    'border-radius': '6px',
                    'background-color': '#000',
                    opacity: 0.80
                }).appendTo("body").fadeIn(200);
            }

            var previousPoint = null;
            $("#statsChart").bind("plothover", function (event, pos, item) {
                if (item) {
                    if (previousPoint != item.dataIndex) {
                        previousPoint = item.dataIndex;

                        $("#tooltip").remove();
                        var x = item.datapoint[0].toFixed(0),
                            y = item.datapoint[1].toFixed(0);

                        var month = item.series.xaxis.ticks[item.dataIndex].label;

                        showTooltip(item.pageX, item.pageY,
                                    item.series.label + " of " + month + ": " + y);
                    }
                }
                else {
                    $("#tooltip").remove();
                    previousPoint = null;
                }
            });

            $('.nav-tabs a').click(function (e) {
                e.preventDefault();
                $(this).tab('show');
            });

            $(document).ready(function() {
               $('#example').dataTable({
                "sPaginationType": "full_numbers"
               });

               $('#example2').dataTable({
                "sPaginationType": "full_numbers"
               });

           
        });

        });
    </script>
</body>
</html>