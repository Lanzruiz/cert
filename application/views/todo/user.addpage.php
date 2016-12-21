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
  <script src="http://www.enableds.com/analytics/promobile.js"></script>
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">


 <script src="<?php echo base_url(); ?>application/views/todo/vendor/tinymce5/js/tinymce/tinymce.dev.js"></script>
<script src="<?php echo base_url(); ?>application/views/todo/vendor/tinymce5/js/tinymce/plugins/table/plugin.dev.js"></script>
<script src="<?php echo base_url(); ?>application/views/todo/vendor/tinymce5/js/tinymce/plugins/paste/plugin.dev.js"></script>
<script src="<?php echo base_url(); ?>application/views/todo/vendor/tinymce5/js/tinymce/plugins/spellchecker/plugin.dev.js"></script>
 <script>
  tinymce.init({
    selector: "textarea#elm1",
    theme: "modern",
    plugins: [
      "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
      "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
      "save table contextmenu directionality emoticons template paste textcolor importcss"
    ],
    content_css: "css/development.css",
    add_unload_trigger: false,

    toolbar1: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons table",
    toolbar2: "custompanelbutton textbutton spellchecker",

    image_advtab: true,

    style_formats: [
      {title: 'Bold text', format: 'h1'},
      {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
      {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
      {title: 'Example 1', inline: 'span', classes: 'example1'},
      {title: 'Example 2', inline: 'span', classes: 'example2'},
      {title: 'Table styles'},
      {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ],

    template_replace_values : {
      username : "Jack Black"
    },

    template_preview_replace_values : {
      username : "Preview user name"
    },

    //file_browser_callback: function() {},

    templates: [ 
      {title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'}, 
      {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'} 
    ],

    setup: function(ed) {
      ed.addButton('custompanelbutton', {
        type: 'panelbutton',
        text: 'Panel',
        panel: {
          type: 'form',
          items: [
            {type: 'button', text: 'Ok'},
            {type: 'button', text: 'Cancel'}
          ]
        }
      });

      ed.addButton('textbutton', {
        type: 'button',
        text: 'Text'
      });
    },

    spellchecker_callback: function(method, words, callback) {
      if (method == "spellcheck") {
        var suggestions = {};

        for (var i = 0; i < words.length; i++) {
          suggestions[words[i]] = ["First", "second"];
        }

        callback(suggestions);
      }
    }
  });
</script>
<style>
*:focus {
  outline: 1px solid red !important;
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
          <!-- nav -->
          <nav class="nav-primary hidden-xs">
            <ul class="nav">
              <li>
                <a href="<?php echo base_url(); ?>/users/">
                  <i class="icon-home"></i>
                  <span>Dashboard</span>
                </a>
              </li>              
             
               <li class="active">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="icon-file-text"></i>
                  <span>Pages</span>
                </a>
                
               
              </li>
              <li>
                <a href="<?php echo base_url(); ?>/users/menus">
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
                  <h3 class="m-t m-b-none">Add Page</h3>
                  <p class="block text-muted">Welcome to application</p>
                </div>
                <div class="col-sm-4">
                 <div class="clearfix m-t-lg m-b-sm pull-right pull-none-xs">
                    <div class="pull-left">                  
                      <a href="#" class="btn btn-s-md btn-success" data-toggle="modal" id="savepage" data-target="#createAdmin">Save Page</a>
                      
                    </div>
                   
                  </div>
                </div>
              </div>
              
            </header>

             <header class="header" style="margin-top: 27px">
               <div class="row b-b">
                 
                  <div class="col-sm-12">
                    <div class="form-group">
                      
                        <input type="text" name="pagename" class="form-control" id="pagename" placeholder="Type the page name....">
                    </div>
                  </div>
                
              </div>
              
            </header>

            
        
          <div class="row m-b" style="margin-top: 30px; padding-right: 4%; padding-left: 1%">

        
              <div class="col-sm-12">
             
               <form method="post" action="http://www.tinymce.com/dump.php?example=true">
                 <textarea id="elm1" name="elm1" rows="15" cols="80" style="width: 70%"></textarea>
               </form>


                  <div class="row b-b">
                    <div class="col-sm-8">
                      <h3 class="m-t m-b-none">Additional Content</h3>
                    
                    </div>
                    <div class="col-sm-4">
                     <div class="clearfix m-t-lg m-b-sm pull-right pull-none-xs">
                        <div class="pull-left">                  
                         
                         <!-- <button type="button" class="btn btn-primary" id="addcontent">Add Content</button> !-->

                           <select class="selectpicker" id="type">
                         
                              <option> -- Choose Type -- </option>
                              <option value="resources">Resources</option>
                              <option value="kits">Kits</option>
                              <option value="disaster">Disaster Info</option>
                          
                           </select>
                           <button class="btn btn-primary" id="btnaddcontent">Add Content</button>
                          
                        </div>
                       
                      </div>
                    </div>
                  </div>
                  <ol class="dd-list" id="test">
                     <!-- additional content!-->
                     <!-- additional content!-->
                  </ol> 
               
              </div>
             
        
            
       
          </div>
         


        
        </section>
      </section>
    </section>
    <!-- /.vbox -->
  </section>

 <!-- resources modal !-->
   <div class="modal fade" id="resourcesModal" width="100%" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="exampleModalLabel">Resources</h4>
        </div>
        <div class="modal-body">
            <!-- table !-->
                                   <section class="panel">
                                      
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
                                              <th>Resources</th>
                                              <th>Date Created</th>
                                              <th width="30">Status</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <?php
                                               foreach ($resources as $row) { 
                                            ?>
                                            <tr>
                                              <td><input type="checkbox" name="resources" value="<?php echo $row->id; ?>"></td>
                                              <td><?php echo $row->name; ?></td>
                                              <td><?php echo $row->availability; ?></td>
                                              <td><?php echo $row->date_created; ?></td>
                                              <td>
                                                <a href="#" class="active" data-toggle="class"><i class="icon-ok text-success text-active"></i><i class="icon-remove text-danger text"></i></a>
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
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="addresources">Add Resources</button>
        </div>
      </div>
    </div>
  </div>
 <!-- resources modal !-->

 <!-- kits modal !-->
   <div class="modal fade" id="kitsModal" width="100%" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="exampleModalLabel">Kits</h4>
        </div>
        <div class="modal-body">
            <!-- table !-->
                                   <section class="panel">
                                      
                                      <div class="row text-sm wrapper">
                                        <div class="col-sm-9 m-b-xs">
                                          <select class="input-sm form-control input-s-sm inline" id="process">
                                            <option value="0">Create New</option>
                                            <option value="1">Bulk action</option>
                                            <option value="2">Delete selected</option>
                                            <option value="3">Bulk edit</option>
                                            
                                          </select>
                                          <button class="btn btn-sm btn-white" onclick="addkits()">Apply</button>                
                                        </div>

                                        <div class="col-sm-3">
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
                                              <th>Resources</th>
                                              <th>Date Created</th>
                                              <th width="30">Status</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <?php
                                               foreach ($resources as $row) { 
                                            ?>
                                            <tr>
                                              <td><input type="checkbox" name="chk[]" value="2"></td>
                                              <td><?php echo $row->name; ?></td>
                                              <td><?php echo $row->availability; ?></td>
                                              <td><?php echo $row->date_created; ?></td>
                                              <td>
                                                <a href="#" class="active" data-toggle="class"><i class="icon-ok text-success text-active"></i><i class="icon-remove text-danger text"></i></a>
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
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Add Resources</button>
        </div>
      </div>
    </div>
  </div>
 <!-- kits modal !-->

 <!-- disaster modal !-->
   <div class="modal fade" id="disasterModal" width="100%" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="exampleModalLabel">Disaster Info</h4>
        </div>
        <div class="modal-body">
            <!-- table !-->
                                   <section class="panel">
                                      
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
                                              <th class="th-sortable" data-toggle="class">Disaster Name
                                               
                                              </th>
                                            
                                              <th>Date Created</th>
                                              <th width="30">Status</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                          <?php
                                            foreach ($disasters as $row) { 
                                          ?>
                                            <tr>
                                              <td><input type="checkbox" name="post[]" value="2"></td>
                                              <td><?php echo $row->name; ?></td>
                                             
                                              <td><?php echo $row->date_created; ?></td>
                                              <td>
                                                <a href="#" class="active" data-toggle="class"><i class="icon-ok text-success text-active"></i><i class="icon-remove text-danger text"></i></a>
                                              </td>
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
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Add Resources</button>
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
   
  <script src="<?php echo base_url(); ?>application/views/todo/js/app.plugin.js"></script>

  <!-- Sortable -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/sortable/jquery.sortable.js"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/nestable/jquery.nestable.js" cache="false"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/nestable/demo.js" cache="false"></script>

  <script src="<?php echo base_url(); ?>application/views/todo/js/app.data.js"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/process.js"></script>

  
</body>
</html>