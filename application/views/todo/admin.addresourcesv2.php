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
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/todo/js/select2/select2.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/todo/js/fuelux/fuelux.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/todo/js/datepicker/datepicker.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/todo/js/slider/slider.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/todo/css/plugin.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/todo/css/app.css" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/respond.min.js" cache="false"></script>
    <script src="js/ie/html5.js" cache="false"></script>
    <script src="js/ie/fix.js" cache="false"></script>
  <![endif]-->
  <style>
    .container{
    margin-top:20px;
}
.image-preview-input {
    position: relative;
  overflow: hidden;
  margin: 0px;    
    color: #333;
    background-color: #fff;
    border-color: #ccc;    
}
.image-preview-input input[type=file] {
  position: absolute;
  top: 0;
  right: 0;
  margin: 0;
  padding: 0;
  font-size: 20px;
  cursor: pointer;
  opacity: 0;
  filter: alpha(opacity=0);
}
.image-preview-input-title {
    margin-left:2px;
}
  </style>
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
                <a href="<?php echo base_url(); ?>/admin">
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
              <li class="active">
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
        <section class="scrollable wrapper">
          <header class="header">
              <div class="row b-b">
                <div class="col-sm-8">
                  <h3 class="m-t m-b-none">Add Resources</h3>
                  <p class="block text-muted">Welcome to application</p>
                </div>
                <div class="col-sm-4">
                 <div class="clearfix m-t-lg m-b-sm pull-right pull-none-xs">
                    <div class="pull-left">                  
                      <a href="<?php echo base_url(); ?>/admin/addresources" class="btn btn-s-md btn-success">Create New Resources</a>
                    </div>
                   
                  </div>
                </div>
              </div>
              
            </header>
          <div class="tab-content">
            
            <section class="tab-pane active" id="wizard">
              <div class="panel">
                <div class="wizard clearfix" id="form-wizard">
                  <ul class="steps">
                    <li data-target="#step1" class="active"><span class="badge badge-info">1</span>Resources Name</li>
                    <li data-target="#step2"><span class="badge">2</span>Description</li>
                    <li data-target="#step3"><span class="badge">2</span>Availability</li>
                   
                  </ul>
                </div>
                <div class="step-content">
                   <?php echo form_open('systems/process/user/signup?steps=2'); ?>
                    <div class="step-pane active margin-top-20" id="step1">

                      <p>Resources Name*</p>
                      <input type="text" class="form-control" id="email" name="email" data-trigger="change">

                     

                    


                      
                    </div>

                     <div class="step-pane margin-top-20" id="step2">
                 
                         <p>Description</p>
                    
                        <div class="btn-toolbar m-b-sm btn-editor" data-role="editor-toolbar" data-target="#editor">
                          <div class="btn-group">
                            <a class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Font"><i class="icon-font"></i><b class="caret"></b></a>
                              <ul class="dropdown-menu">
                              <li><a data-edit="fontName Serif" style="font-family:'Serif'">Serif</a></li><li><a data-edit="fontName Sans" style="font-family:'Sans'">Sans</a></li><li><a data-edit="fontName Arial" style="font-family:'Arial'">Arial</a></li><li><a data-edit="fontName Arial Black" style="font-family:'Arial Black'">Arial Black</a></li><li><a data-edit="fontName Courier" style="font-family:'Courier'">Courier</a></li><li><a data-edit="fontName Courier New" style="font-family:'Courier New'">Courier New</a></li><li><a data-edit="fontName Comic Sans MS" style="font-family:'Comic Sans MS'">Comic Sans MS</a></li><li><a data-edit="fontName Helvetica" style="font-family:'Helvetica'">Helvetica</a></li><li><a data-edit="fontName Impact" style="font-family:'Impact'">Impact</a></li><li><a data-edit="fontName Lucida Grande" style="font-family:'Lucida Grande'">Lucida Grande</a></li><li><a data-edit="fontName Lucida Sans" style="font-family:'Lucida Sans'">Lucida Sans</a></li><li><a data-edit="fontName Tahoma" style="font-family:'Tahoma'">Tahoma</a></li><li><a data-edit="fontName Times" style="font-family:'Times'">Times</a></li><li><a data-edit="fontName Times New Roman" style="font-family:'Times New Roman'">Times New Roman</a></li><li><a data-edit="fontName Verdana" style="font-family:'Verdana'">Verdana</a></li></ul>
                          </div>
                          <div class="btn-group">
                            <a class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Font Size"><i class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
                              <ul class="dropdown-menu">
                              <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
                              <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
                              <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
                              </ul>
                          </div>
                          <div class="btn-group">
                            <a class="btn btn-white btn-sm" data-edit="bold" title="" data-original-title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>
                            <a class="btn btn-white btn-sm" data-edit="italic" title="" data-original-title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>
                            <a class="btn btn-white btn-sm" data-edit="strikethrough" title="" data-original-title="Strikethrough"><i class="icon-strikethrough"></i></a>
                            <a class="btn btn-white btn-sm" data-edit="underline" title="" data-original-title="Underline (Ctrl/Cmd+U)"><i class="icon-underline"></i></a>
                          </div>
                          <div class="btn-group">
                            <a class="btn btn-white btn-sm" data-edit="insertunorderedlist" title="" data-original-title="Bullet list"><i class="icon-list-ul"></i></a>
                            <a class="btn btn-white btn-sm" data-edit="insertorderedlist" title="" data-original-title="Number list"><i class="icon-list-ol"></i></a>
                            <a class="btn btn-white btn-sm" data-edit="outdent" title="" data-original-title="Reduce indent (Shift+Tab)"><i class="icon-indent-left"></i></a>
                            <a class="btn btn-white btn-sm" data-edit="indent" title="" data-original-title="Indent (Tab)"><i class="icon-indent-right"></i></a>
                          </div>
                          <div class="btn-group">
                            <a class="btn btn-white btn-sm btn-info" data-edit="justifyleft" title="" data-original-title="Align Left (Ctrl/Cmd+L)"><i class="icon-align-left"></i></a>
                            <a class="btn btn-white btn-sm" data-edit="justifycenter" title="" data-original-title="Center (Ctrl/Cmd+E)"><i class="icon-align-center"></i></a>
                            <a class="btn btn-white btn-sm" data-edit="justifyright" title="" data-original-title="Align Right (Ctrl/Cmd+R)"><i class="icon-align-right"></i></a>
                            <a class="btn btn-white btn-sm" data-edit="justifyfull" title="" data-original-title="Justify (Ctrl/Cmd+J)"><i class="icon-align-justify"></i></a>
                          </div>
                          <div class="btn-group">
                          <a class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Hyperlink"><i class="icon-link"></i></a>
                            <div class="dropdown-menu">
                              <div class="input-group m-l-xs m-r-xs">
                                <input class="form-control input-sm" placeholder="URL" type="text" data-edit="createLink">
                                <div class="input-group-btn">
                                  <button class="btn btn-white btn-sm" type="button">Add</button>
                                </div>
                              </div>
                            </div>
                            <a class="btn btn-white btn-sm" data-edit="unlink" title="" data-original-title="Remove Hyperlink"><i class="icon-cut"></i></a>
                          </div>
                          
                          <div class="btn-group">
                            <a class="btn btn-white btn-sm" title="" id="pictureBtn" data-original-title="Insert picture (or just drag &amp; drop)"><i class="icon-picture"></i></a>
                            <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" style="opacity: 0; position: absolute; top: 0px; left: 0px; width: 35px; height: 30px;">
                          </div>
                          <div class="btn-group">
                            <a class="btn btn-white btn-sm" data-edit="undo" title="" data-original-title="Undo (Ctrl/Cmd+Z)"><i class="icon-undo"></i></a>
                            <a class="btn btn-white btn-sm" data-edit="redo" title="" data-original-title="Redo (Ctrl/Cmd+Y)"><i class="icon-repeat"></i></a>
                          </div>
                          <input type="text" class="form-control-trans pull-left" data-edit="inserttext" id="voiceBtn" x-webkit-speech="" style="width: 25px; height: 400px; display: none;">
                        </div>
                        <div id="editor" class="form-control" style="overflow:scroll; height:150px;max-height:150px" contenteditable="true">
                        </div>


                        <section class="panel text-sm doc-buttons" style="margin-top: 20px">
                          <div class="panel-body">

                            <label class="col-sm-2 control-label" style="margin-top: 6px;">Upload Photo</label>
                            <input type="file" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">
                           
                          </div>
                      </section>


                         

                     </div>
                  
                    <div class="step-pane" id="step3">
                      <p class="margin-top-20">Quantity*</p>

                      <input type="text" class="form-control" name="team" id="team" data-trigger="change" placeholder="Type the information">

                      <p class="margin-top-20">Website(Optional)</p>
                      <input type="text" class="form-control" id="code" data-trigger="change"  placeholder="Type the information">

                     
                       
                    </div>
                    <div class="actions m-t">
                    <button type="button" class="btn btn-white btn-sm btn-prev" data-target="#form-wizard" data-wizard="previous" disabled="disabled">Prev</button>
                    <button type="button" id="button" class="btn btn-white btn-sm btn-next" data-target="#form-wizard" data-wizard="next" data-last="Finish">Next</button>
                  </div>
                                
                   <?php echo form_close(); ?>
                 
                </div>
              </div>
            </section>
          </div>
        </section>
      </section>
    </section>
    <!-- /.vbox -->
  </section>
  
  <script src="<?php echo base_url(); ?>application/views/todo/js/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/bootstrap.js"></script>
  <!-- app -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/app.js"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/app.plugin.js"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/app.data.js"></script>
  <!-- fuelux -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/fuelux/fuelux.js"></script>
  <!-- datepicker -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/datepicker/bootstrap-datepicker.js"></script>
  <!-- slider -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/slider/bootstrap-slider.js"></script>
  <!-- file input -->  
  <script src="<?php echo base_url(); ?>application/views/todo/js/file-input/bootstrap.file-input.js"></script>
  <!-- combodate -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/libs/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/combodate/combodate.js" cache="false"></script>
  <!-- parsley -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/parsley/parsley.min.js" cache="false"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/parsley/parsley.extend.js" cache="false"></script>
  <!-- select2 -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/select2/select2.min.js" cache="false"></script>
  <!-- wysiwyg -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/wysiwyg/jquery.hotkeys.js" cache="false"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/wysiwyg/bootstrap-wysiwyg.js" cache="false"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/wysiwyg/demo.js" cache="false"></script>
  <!-- markdown -->
  <script src="<?php echo base_url(); ?>application/views/todo/js/markdown/epiceditor.min.js" cache="false"></script>
  <script src="<?php echo base_url(); ?>application/views/todo/js/markdown/demo.js" cache="false"></script>
  
  <script type="text/javascript">
    
    $(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});
  </script>
</body>
</html>