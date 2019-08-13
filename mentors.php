<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>WLUG</title>

    <!-- Page styles -->
	
		<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> -->

    <link href='css/bootstrap.css' rel='stylesheet' />

    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />

<!--     <link href='css/ct-navbar.css' rel='stylesheet' /> -->
    <link href='css/rotating-card.css' rel='stylesheet' />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
        .android-customized-section-image {
    background: url('images/wlug-logo.png') center top no-repeat;
        background-size: auto;
    background-size: cover;
    height: 600px;
}
body{
            margin-top: 0px;
        }
		
  <!-- border: 1px solid black; -->
}
        .navbar-default .navbar-nav > li > a{
            padding: 15px 15px;
            margin: 5px 0;
        }

        .navbar-default{
            padding: 10px 0;
            background-color: rgba(255, 255, 255, 0.95);
            border-color: transparent;
            box-shadow: 0 0px 13px rgba(0,0,0,.2);
        }
        .btn-info,
        .btn-info:hover,
        .btn-info:focus{
            color: #FFF !important;
            background-color: #00bbff !important;
            border-color: #00bbff !important;
        }

        .btn-info{
            opacity: .8;
            transition: all 0.1s;
            -webkit-transition: all 0.1s;
        }
        .btn-info:hover,
        .btn-info:focus{
            opacity: 1;
        }
		
    </style>
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <img class="android-logo-image" src="./images/wluglogo.png">
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="android-header-spacer mdl-layout-spacer"></div>
          
          <!-- Navigation -->
          <div class="android-navigation-container">
            <?php
              include'header.html';
             ?>
          </div>
          <span class="android-mobile-title mdl-layout-title">
            <img class="android-logo-image" src="./images/wluglogo.png">
          </span>
         
        </div>
      </div>

      <div class="android-drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
          <img class="android-logo-image" src="./images/wluglogo.png">
        </span>
       <?php
          include'mob_header.html';
          ?>
      </div>

      <div class="android-content mdl-layout__content">
        <a name="top"></a>
      
      
        <div class="android-customized-section">
         
    
        <div class="android-more-section" style="left-margin:20px;">
          <div class="android-section-title mdl-typography--display-1-color-contrast">Recent Activities</div>
    
                                    <div class="android-card-container mdl-grid" style="left-margin:20px;">
            <div style="height:420px;" class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="card-container">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="images/rotating_card_thumb2.png"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="images/rotating_card_profile3.png"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name">John Marvel</h3>
                                <p class="profession">CEO</p>
                                <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                            </div>
                            <div class="footer">
                                <i class="fa fa-mail-forward"></i> More
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                        <div class="header">
                            <h5 class="motto">COMMUNITY | KNOWLEDGE | SHARE</h5>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h4 class="text-center">Job Description</h4>
                                <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                                

                            </div>
                        </div>
                        <div class="footer">
                            <div class="social-links text-center">
                                <a href="https://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                <a href="mailto:bharambevaishu@gmail.com" target="blank" class="google" onclick="location.replace('mailto:bharambevaishu@gmail.com');"><i class="fa fa-google-plus fa-fw"></i></a>
                                <a href="https://creative-tim.com" class="linkedin"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
            </div>

            


            </div>
                                 
                                 
                                
          


          </div>
        </div>

        <?php
            
            include 'footer.php';
        ?>
      </div>
    
    
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
