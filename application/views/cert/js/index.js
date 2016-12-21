

 $(document).ready(function(){


    var x = document.domain;

    $("#btn_enter").click(function(){

          var code = document.getElementById("code").value;


          var postData = {


                'code' : code


          };




          $.post('http://'+x+'/cert/mobile/process/putcode/', postData, function(data){ 

        
          });

          window.location = "http://"+x+"/cert/mobile/intro";   



    });    

});