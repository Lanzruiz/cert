<!DOCTYPE html>

  <head>
    <meta charset="UTF-8">
    <title>Join Emergency App</title>
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/login-form/css/reset.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/login-form/css/style.css">
  </head>
  <body>
    <h1 style="margin-bottom: 60px">Emergency App</h1>
  <?php
        
        $attributes = array('class' => 'login-form');

        echo form_open('systems/process/user/signup?steps=1', $attributes);
    ?>
    <div class="flex-row">
      <label class="lf--label" for="username">
         <svg x="0px" y="0px" width="12px" height="13px">
            <path fill="#B1B7C4" d="M8.9,7.2C9,6.9,9,6.7,9,6.5v-4C9,1.1,7.9,0,6.5,0h-1C4.1,0,3,1.1,3,2.5v4c0,0.2,0,0.4,0.1,0.7 C1.3,7.8,0,9.5,0,11.5V13h12v-1.5C12,9.5,10.7,7.8,8.9,7.2z M4,2.5C4,1.7,4.7,1,5.5,1h1C7.3,1,8,1.7,8,2.5v4c0,0.2,0,0.4-0.1,0.6 l0.1,0L7.9,7.3C7.6,7.8,7.1,8.2,6.5,8.2h-1c-0.6,0-1.1-0.4-1.4-0.9L4.1,7.1l0.1,0C4,6.9,4,6.7,4,6.5V2.5z M11,12H1v-0.5 c0-1.6,1-2.9,2.4-3.4c0.5,0.7,1.2,1.1,2.1,1.1h1c0.8,0,1.6-0.4,2.1-1.1C10,8.5,11,9.9,11,11.5V12z"/>
         </svg>
        </label>
      <input id="username" class='lf--input' name="email" placeholder='Email' type='text'>
      <input id="username" class='lf--input' name="email" placeholder='Email' type='text'>
      <input type="hidden" name="steps" value="1">
    </div>
    <input class='lf--submit' type='submit' value='Next'>
    <?php echo form_close(); ?>

   
  </body>
</html>
