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

#back{
  margin: 0;
  width: 100%;
  height: 100vh;
  font-family: "Exo", sans-serif;
  color: #fff;
//  background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  //background-size: 400% 400%;
  //animation: gradientBG 15s ease infinite;
}

@keyframes gradientBG {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}


    </style>
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header" id = "back">

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
              include 'header.html'
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
                  include'mob_header.html'
                  ?>
      </div>
       

      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <style>
   @import url(https://fonts.googleapis.com/css?family=Roboto);
body,
input,
select,
textarea,
body * {
  font-family: 'Roboto', sans-serif;
  box-sizing: border-box;
}
body::after, body::before,
input::after,
input::before,
select::after,
select::before,
textarea::after,
textarea::before,
body *::after,
body *::before {
  box-sizing: border-box;
}

body {
  background-image: -webkit-linear-gradient(top, #f2f2f2, #e6e6e6);
  background-image: linear-gradient(top, #f2f2f2, #e6e6e6);
}

h1 {
  font-size: 2rem;
  text-align: center;
  margin: 0 0 2em;
}

.container {
  position: relative;
  max-width: 40rem;
  margin: 5rem auto;
  background: #fff;
  width: 100%;
  padding: 3rem 5rem 0;
  border-radius: 1px;
}
.container::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2);
  -webkit-transform: scale(0.98);
          transform: scale(0.98);
  -webkit-transition: -webkit-transform 0.28s ease-in-out;
  transition: -webkit-transform 0.28s ease-in-out;
  transition: transform 0.28s ease-in-out;
  transition: transform 0.28s ease-in-out, -webkit-transform 0.28s ease-in-out;
  z-index: -1;
}
.container:hover::before {
  -webkit-transform: scale(1);
          transform: scale(1);
}

.button-container {
  text-align: center;
}

fieldset {
  margin: 0 0 3rem;
  padding: 0;
  border: none;
}


  



</style>
<div class="container">
 
    <h1 style="color: #000">Feedbacks</h1>
    <style type="text/css">
    .text{
      width: auto;
    color: #fff;
  box-shadow: 0 4px 8px 0 grey;
  text-align: center;
padding: 10px;
}
 .text div:hover{
  box-shadow: 1 6px 11px 1 grey;
}
    </style>
    <?php
   include 'databaseconnect.php';
    $query = "select * from feedback";
    $result = mysqli_query($db,$query);
    $i = 0;
    $color = array('#000080','#666600','#4dc3ff','#bfbfbf','#ff1aff','#ffaa00','#3377ff','#8cff66') ;
    while($row = mysqli_fetch_array($result)){
           echo "<div class = 'text' style = 'background : ".$color[rand(0,7)]."'><div>".$row['feedback']."</div></div><br>";
    }
 ?>
  
</div>

      
        

       <?php
       include 'footer.php';
       ?>
      </div>
    </div>
   
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
