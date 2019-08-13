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
    <meta name="description" content="Walchand Linux Users' Group is a club which promotes open source technologies. WLUG established in 2003, is an active technical club. It is a group formed by open source enthusiastic students to use and promote Linux future and interesting stuff.">
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
		
  /*border: 1px solid black; */

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
    <div clas = "container">
                                    
           
              
                     <div class = "row">
                         <div class="col-sm-10 col-sm-offset-1">
                  <?php
                  
                  $db = mysqli_connect("localhost", "root", "", "wlug");

$result = mysqli_query($db, "SELECT * FROM members where category ='".$_GET['cat']."'");

                  
                  echo"<script>alert('rows = ".mysqli_num_rows($result)."')</script>";
                  
                  
                  
               
                  
while ($row = mysqli_fetch_array($result)) {
//      echo "<div id='img_div'>";
//      	echo "<img src='../images/original/".$row['img_org']."' >";
//      	echo "<p>".$row['img_id']."</p>";
//      echo "</div>";
    
 
                  
                  
               /*   
                  echo "<div class='col-md-4 col-sm-6'><div class='card-container'>";
                echo "<div class='card'>";
                echo "<div class='front'>";
                        echo "<div class='cover'>";
                            echo "<img src=images/rotating_card_thumb2.png'/>";
                           echo "</div>";
                        echo "<div class='user'>";
                            echo "<img class='img-circle' src='../images/members/".$row['img']."'/>";
                           echo "</div>";
                        echo "<div class='content'>";
                            echo "<div class='main'>";
                                echo "<h3 class='name'>".$row['name']."</h3>";
                                echo "<p class='profession'>".$row['post']."</p>";
                                echo "<p class='text-center'>".$row['thought']."</p>";
                               echo "</div>";
                            echo "<div class='footer'>";
                                echo "<i class='fa fa-mail-forward'></i> More</div>";
                           echo "</div>";
                       echo "</div>";
                    echo "<div class='back'>";
                        echo "<div class='header'>";
                            echo "<h5 class='motto'>COMMUNITY | KNOWLEDGE | SHARE</h5>";
                           echo "</div>";
                        echo "<div class='content'>";
                            echo "<div class='main''>";
                                echo "<h4 class='text-center'>".$row['post']."</h4>";
                                echo "<p class='text-center'>".$row['AOI']."</p>";

                                

                               echo "</div>";
                        echo "</div>";
                    
                    
                    
                        echo"<div class='footer''>";
                            echo "<div class='social-links text-center'>";
    
                                echo "<a href='".$row['fb']."' class='facebook'><i class='fa fa-facebook fa-fw'></i></a>";
                                echo "<a href='mailto:".$row['gmail']."' target='blank' class='google' onclick='location.replace('mailto:".$row['gmail']."');'><i class='fa fa-google-plus fa-fw'></i></a>";
                                echo "<a href='".$row['linked_in']."' class='linkedin'><i class='fa fa-linkedin'></i></a>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>"; 
                echo "</div></div></div></div></div>";*/
    echo"<div class='col-md-4 col-sm-6'>
             <div class='card-container'>
                <div class='card'>
                    <div class='front'>
                        <div class='cover'>
                            <img src='images/rotating_card_thumb2.png'/>
                        </div>
                        <div class='user'>";
                            echo "<img class='img-circle' src='../images/members/".$row['img']."'/>
                        </div>
                        <div class='content'>
                            <div class='main'>";
                                echo "<h3 class='name'>".$row['name']."</h3>";
                                echo "<p class='profession'>".$row['post']."</p>";
                                echo "<p class='text-center'>".$row['thought']."</p>
                            </div>;
                            <div class='footer'>
                                <i class='fa fa-mail-forward'></i> More
                            </div>
                        </div>
                    </div> 
                    <div class='back'>
                        <div class='header'>
                            <h5 class='motto'>COMMUNITY | KNOWLEDGE | SHARE</h5>
                        </div>
                        <div class='content'>
                            <div class='main'>";
                               echo "<h4 class='text-center'>".$row['post']."</h4>";
                                echo "<p class='text-center'>".$row['AOI']."</p>

                               

                            </div>
                        </div>
                        <div class='footer'>
                            <div class='social-links text-center'>";
                                echo "<a href='".$row['fb']."' class='facebook'><i class='fa fa-facebook fa-fw'></i></a>";
                                echo "<a href='mailto:".$row['gmail']."' target='blank' class='google' onclick='location.replace('mailto:".$row['gmail']."');'><i class='fa fa-google-plus fa-fw'></i></a>";
                                echo "<a href='".$row['linked_in']."' class='linkedin'><i class='fa fa-linkedin'></i></a>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div> 
        </div>";
}
                  
                    ?>
                  
                                        
                  
                    <!-- end card -->
             <!-- end card-container -->
            </div>

            </div>


           
                                 
                                 
                                
          

                                       
          </div>
        </div>

      </div>
      </div>
      </div>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
