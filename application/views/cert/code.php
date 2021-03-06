<!DOCTYPE html>
<html lang="en">
<!--
    Licensed to the Apache Software Foundation (ASF) under one
    or more contributor license agreements.  See the NOTICE file
    distributed with this work for additional information
    regarding copyright ownership.  The ASF licenses this file
    to you under the Apache License, Version 2.0 (the
    "License"); you may not use this file except in compliance
    with the License.  You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing,
    software distributed under the License is distributed on an
    "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
     KIND, either express or implied.  See the License for the
    specific language governing permissions and limitations
    under the License.
-->

    <head>
        <!--
        Customize this policy to fit your own app's needs. For more guidance, see:
            https://github.com/apache/cordova-plugin-whitelist/blob/master/README.md#content-security-policy
        Some notes:
            * gap: is required only on iOS (when using UIWebView) and is needed for JS->native communication
            * https://ssl.gstatic.com is required only on Android and is needed for TalkBack to function properly
            * Disables use of inline scripts in order to mitigate risk of XSS vulnerabilities. To change this:
                * Enable inline JS: add 'unsafe-inline' to default-src
        -->
        <meta charset="UTF-8">
        <meta http-equiv="Content-Security-Policy" content="default-src 'self' data: gap: https://ssl.gstatic.com 'unsafe-eval'; style-src 'self' 'unsafe-inline'; media-src *">
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
        <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/cert/css/font-awesome.min.css">
       
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/views/cert/css/index.css">
        <link href="<?php echo base_url(); ?>application/views/cert/lib/bootstrap/bootstrap-3.3.7-2/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Emergency Preparedness App</title>
    </head>
    <body>
        <img class="logo" src="<?php echo base_url(); ?>application/views/cert/img/logo2.png">
        <p class="name">Emergency Preparedness App</p>
        <div id="login">
            <form>
              
                <p><span class="fontawesome-user"><i class="fa fa-toggle-on" aria-hidden="true"></i></span><input type="text" id="code" placeholder="Code">
                </p> <!-- JS because of IE support; better: placeholder="Username" -->
              
                <p><button class="btn button margin-bottom" id="btn_enter" role="button">Enter Code</button></p>

               
            </form>
             <p><a class="color-white" href="interview.html">Skip this process</a><span class="fontawesome-arrow-right"><i class="fa fa-arrow-right" aria-hidden="true" id="click"></i></span></p>
        </div>

        <script src="lib/bootstrap/bootstrap-3.3.7-2/dist/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>application/views/cert/js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/views/cert/cordova.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/views/cert/js/index.js"></script>
        
       

    </body>
   
</html>
