
 var x = document.domain;

 function checkAll(ele) {
     var checkboxes = document.getElementsByTagName('input');
     if (ele.checked) {
         for (var i = 0; i < checkboxes.length; i++) {
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = true;
             }
         }
     } else {
         for (var i = 0; i < checkboxes.length; i++) {
             console.log(i)
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = false;
             }
         }
     }
 }



 $('#action').on('change', function(e, item){
        
        var d = document.getElementById("action").value;


    
       

        if(d == 'create') {

            window.location = "http://"+x+"/cert/admin/addpage";

            //alert(x);
        }
        else if(d == 'edit') {


               var checkboxes = document.querySelectorAll('input[name="pages"]:checked'), values = [];
            Array.prototype.forEach.call(checkboxes, function(el) {
                values.push(el.value);
            });

            window.location = "http://"+x+"/cert/admin/editpage/"+values;


        }
        else if(d == 'preview'){

         
            
            var checkboxes = document.querySelectorAll('input[name="pages"]:checked'), values = [];
            Array.prototype.forEach.call(checkboxes, function(el) {
                values.push(el.value);
            });

            window.location = "http://"+x+"/cert/admin/pagepreview/"+values;


            
        }
 });






 $(document).ready(function(){


   



   
    $("#addmenu").click(function(){
        //$("ol").prepend("<li>Prepended item</li>");
       // $("#test").append("<li class='dd-item dd3-item' id='test[]' data-id='13'><div class='dd-handle dd3-handle'>Drag</div><div class='dd3-content'>Item 14</div></li>");
    

          var e = document.getElementById("page_type");
          var strUser = e.options[e.selectedIndex].value;

          if(strUser == 'page') {

              $("#pageModal").modal();

              var menu = document.getElementById("menuname").value;

              document.getElementById('menu-name').value = menu;

          } else if(strUser == 'resources') {
 
              $("#resourcesModal").modal();

              var menu = document.getElementById("menuname").value;

              document.getElementById('menuname-resources').value = menu;

          }
          else if(strUser == 'disasters') {

              $("#disastersModal").modal();

               var menu = document.getElementById("menuname").value;

              document.getElementById('menuname-disaster').value = menu;

          }

    });

    $("#addmenunoname").click(function(){
 
          var e = document.getElementById("content_type");
          var strUser = e.options[e.selectedIndex].value;

          if(strUser == 'page') {

              $("#nonamepageModal").modal();

             

          } 
          else if('resources') {


          }
      
    }); 


    $("#savemenu").click(function(){
 
         var content   = document.getElementById("menulist").innerHTML;

         var postData = {

                      'content'           :  content,
                      'community_id'      :  0
                      
                     
         };



        $.post('http://'+x+'/cert/systems/process/admin/savemenu', postData, function(data){ 


            alert(data);

         }); 

    
    }); 


    $("#editmenu").click(function(){
 
         var content   = document.getElementById("menulist").innerHTML;

         var postData = {

                      'content'           :  content,
                      'community_id'      :  0
                      
                     
         };



        $.post('http://'+x+'/cert/systems/process/admin/editmenu', postData, function(data){ 


            alert(data);

         }); 

    
    }); 

    $("#addresources").click(function(){
         


        //$("#test").append("<li class='dd-item dd3-item' id='test[]' data-id='13'><div class='dd-handle dd3-handle'>Drag</div><div class='dd3-content'>Item 14</div></li>");
        

        var checkboxes = document.querySelectorAll('input[name="resources"]:checked'), values = [];
            Array.prototype.forEach.call(checkboxes, function(el) {
                values.push(el.value);
            });


    


         var post = {

                'r_id'  :  parseInt(values)
                
        
         };   

         $.post('http://'+x+'/cert/systems/process/admin/resourcesdetails', post, function(data){   


             
             $("#test").append("<li class='dd-item dd3-item' id='test[]' data-id='13'><div class='dd-handle dd3-handle'>Drag</div><div class='dd3-content'>Resources : "+data+"<input type='hidden' name='addcontent[]' id='addcontent' value='resources_"+values+"'></div></li>");

         });
    });

    $("#assignnonamepagemenu").click(function(){


         var checkboxes = document.querySelectorAll('input[name="pages"]:checked'), values = [];
            Array.prototype.forEach.call(checkboxes, function(el) {
                values.push(el.value);
         });


         var post = {

                'r_id'  :  parseInt(values)
                
        
         };  
         
         $.post('http://'+x+'/cert/systems/process/admin/pagedetails', post, function(data){   


             
            $("#menulist").append("<li class='dd-item dd3-item' id='test[]' data-id='13'><div class='dd-handle dd3-handle'>Drag</div><div class='dd3-content'>Page : "+data+"<input type='hidden' name='addcontent[]' id='addcontent' value='page_"+values+"'></div></li>");
             //alert(data);
            //$("#menulist").append("test");

         });  



    });  


    $("#assignpagemenu").click(function(){


         var checkboxes = document.querySelectorAll('input[name="pages"]:checked'), values = [];
            Array.prototype.forEach.call(checkboxes, function(el) {
                values.push(el.value);
            });


        var menuname = document.getElementById('menu-name').value;    
  


    
         var post = {

                'r_id'  :  parseInt(values)
                
        
         }; 

         $.post('http://'+x+'/cert/systems/process/admin/pagedetails', post, function(data){   


             
            $("#menulist").append("<li class='dd-item dd3-item' id='test[]' data-id='13'><div class='dd-handle dd3-handle'>Drag</div><div class='dd3-content'>Page : "+menuname+"<input type='hidden' name='addcontent[]' id='addcontent' value='page_"+values+"'></div></li>");
             //alert(data);
            //$("#menulist").append("test");

         });

    }); 

     $("#assignresourcesmenu").click(function(){

          var checkboxes = document.querySelectorAll('input[name="resources"]:checked'), values = [];
            Array.prototype.forEach.call(checkboxes, function(el) {
                values.push(el.value);
          });


          var menuname = document.getElementById('menuname-resources').value; 

          var post = {

                'r_id'  :  parseInt(values)
                
        
         };  
          
          $.post('http://'+x+'/cert/systems/process/admin/resourcesdetails', post, function(data){   


             
            $("#menulist").append("<li class='dd-item dd3-item' id='test[]' data-id='13'><div class='dd-handle dd3-handle'>Drag</div><div class='dd3-content'>Resources : "+menuname+"<input type='hidden' name='addcontent[]' id='addcontent' value='resources_"+values+"'></div></li>");
             //alert(data);
            //$("#menulist").append("test");

         });
 

     });

     $("#assigndisastersmenu").click(function(){


         var checkboxes = document.querySelectorAll('input[name="disasters"]:checked'), values = [];
            Array.prototype.forEach.call(checkboxes, function(el) {
                values.push(el.value);
        });

        var menuname = document.getElementById('menuname-disaster').value; 

        var post = {

                'r_id'  :  parseInt(values)
                
        
         };  

         $.post('http://'+x+'/cert/systems/process/admin/disasterdetails', post, function(data){   


             
            $("#menulist").append("<li class='dd-item dd3-item' id='test[]' data-id='13'><div class='dd-handle dd3-handle'>Drag</div><div class='dd3-content'>Disaster : "+menuname+"<input type='hidden' name='addcontent[]' id='addcontent' value='disaster_"+values+"'></div></li>");
             //alert(data);
            //$("#menulist").append("test");

         });
        



     }); 



    $("#btnaddcontent").click(function(){

          var e = document.getElementById("type");
          var strUser = e.options[e.selectedIndex].value;

          if(strUser == 'resources') {

              $("#resourcesModal").modal();

          } else if(strUser == 'kits') {
 
              $("#kitsModal").modal();

          }
          else if(strUser == 'disaster') {

              $("#disasterModal").modal();

          }

     });   

    $("#savepage").click(function(){

          
            

             var pagename   = document.getElementById("pagename").value;


             var postData = {

                'pagename'  :  pagename
                
        
            };
           


            $.post('http://'+x+'/cert/systems/process/admin/addpage', postData, function(data){
                                    //This should be JSON preferably. but can't get it to work on jsfiddle
                                    //Depending on what your controller returns you can change the action

               var content = tinymce.get('elm1').getContent();  

               var page_id = data;                   
    
               if(content != '') {


                    var postData = {

                         'content'  :  content,
                         'id'       :  page_id,
                         'type'     : 'html'
                
        
                    };

                 
                    $.post('http://'+x+'/cert/systems/process/admin/addpageresources', postData, function(data){

                    });   

                    var items = [];
                    var fields = document.getElementsByName("addcontent[]");
                    for(var i = 0; i < fields.length; i++) {


                        //alert(fields[i].value);

                        var content_array = fields[i].value;

                        var postData = {

                            'content'  :  content_array,
                            'id'       :  page_id,
                            'type'     : 'resources'
                
        
                        };


                        $.post('http://'+x+'/cert/systems/process/admin/addpageresources', postData, function(data){

                          

                        });   


                    };

                   


               }
               else {

                   var fields = document.getElementsByName("addcontent[]");
                    for(var i = 0; i < fields.length; i++) {


                        //alert(fields[i].value);

                        var content_array = fields[i].value;

                        var postData = {

                            'content'  :  content_array,
                            'id'       :  page_id,
                            'type'     : 'resources'
                
        
                        };


                        $.post('http://'+x+'/cert/systems/process/admin/addpageresources', postData, function(data){

                           
                        });   


                    };
               }
                  

                window.location = "http://"+x+"/cert/admin/pages";                    


                  
            });


             

    });

    
}); 


