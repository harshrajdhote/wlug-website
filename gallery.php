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
    <title>Events</title>

    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
	<link href="https://fonts.googleapis.com/css?family=Reem+Kufi" rel="stylesheet">
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

:root{
  --background-dark: #2d3548;
  --text-light: rgba(255,255,255,0.6);
  --text-lighter: rgba(255,255,255,0.9);
  --spacing-s: 8px;
  --spacing-m: 16px;
  --spacing-l: 24px;
  --spacing-xl: 32px;
  --spacing-xxl: 64px;
  --width-container: 1200px;
}
 
*{
  border: 0;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
 
html{
  height: 100%;
  font-family: 'Reem Kufi', sans-serif;
  font-size: 16px;
}
 
body{
  height: 100%;
}

.hero-section{
  align-items: flex-start;
  display: flex;
  min-height: 100%;
  justify-content: center;
  padding: var(--spacing-xxl) var(--spacing-l);
}
 
.cgrid{
  display: grid;
  grid-template-columns: repeat(1, 1fr);
  grid-column-gap: var(--spacing-l);
  grid-row-gap: var(--spacing-l);
  max-width: var(--width-container);
  width: 100%;
}
 
@media(min-width: 540px){
  .cgrid{
    grid-template-columns: repeat(2, 1fr); 
  }
}
 
@media(min-width: 960px){
  .cgrid{
    grid-template-columns: repeat(4, 1fr); 
  }
}
 
.card{
  list-style: none;
  position: relative;
  padding-bottom:60px;
}
 
.card:before{
  content: '';
  display: block;
  padding-bottom: 150%;
  width: 100%;
}
 
.cardbg{
  background-size: cover;
  background-position: center;
  border-radius: var(--spacing-l);
  bottom: 0;
  filter: brightness(0.75) saturate(1.2) contrast(0.85);
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  transform-origin: center;
  trsnsform: scale(1) translateZ(0);
  transition: 
    filter 200ms linear,
    transform 200ms linear;
}
 
.card:hover .cardbg{
  transform: scale(1.10) translateZ(0);
}
 
.ccontent{
  left: 0;
  padding: var(--spacing-l);
  position: absolute;
  top: 0;
}
 
 
.textcard{
  color: var(--text-lighter);
  font-size: 1.9rem;
  text-shadow: 2px 2px 20px rgba(0,0,0,0.2);
  line-height: 1.4;
  word-spacing: 100vw;
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
            include 'header.html';
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
       include 'mob_header.html'
       ?>
      </div>

      <div class="android-content mdl-layout__content">
        <a name="top"></a>
      
      
        <!-- <div class="android-customized-section"> -->
         <section class="hero-section">
  <div class="cgrid">
    <a class="card" href="./gallery_in.php?cat=osday">
      <div class="cardbg" style="background-image: url(https://images.pexels.com/photos/1372972/pexels-photo-1372972.jpeg?cs=srgb&dl=close-up-coffee-contemporary-1372972.jpg&fm=jpg)"></div>
      <div class="ccontent">
        <h3 class="textcard">Open Source Day</h3>
      </div>
    </a>
    <a class="card" href="./gallery_in.php?cat=metamorphosis">
      <div class="cardbg" style="background-image: url(https://images.pexels.com/photos/943096/pexels-photo-943096.jpeg?cs=srgb&dl=code-coding-connection-943096.jpg&fm=jpg)"></div>
      <div class="ccontent">
        <h3 class="textcard">Metamorphosis</h3>
      </div>
    </a>
    <a class="card" href="./gallery_in.php?cat=spandan">
      <div class="cardbg" style="background-image: url(https://images.pexels.com/photos/218717/pexels-photo-218717.jpeg?cs=srgb&dl=blur-close-up-connection-218717.jpg&fm=jpg)"></div>
      <div class="ccontent">
        <h3 class="textcard">Spandan</h3>
      </div>

    <a class="card" href="./gallery_in.php?cat=technotweet">
      <div class="cardbg" style="background-image: url(https://images.pexels.com/photos/821749/pexels-photo-821749.jpeg?cs=srgb&dl=camera-close-up-device-821749.jpg&fm=jpg)"></div>
      <div class="ccontent">
        <h3 class="textcard">Techno-Tweet</h3>
      </div>
    </a>
  <div>
      
</section>
        
         
        <!-- </div> -->
        <div class="android-more-section">
          <div class="android-section-title mdl-typography--display-1-color-contrast">Recent Activities</div>
          <div class="android-card-container mdl-grid">
            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="images/more-from-1.png">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Get going on Android</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">Four tips to make your switch to Android quick and easy</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                   Make the switch
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="images/more-from-4.png">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Create your own Android character</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">Turn the little green Android mascot into you, your friends, anyone!</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                   androidify.com
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="images/more-from-2.png">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Get a clean customisable home screen</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">A clean, simple, customisable home screen that comes with the power of Google Now: Traffic alerts, weather and much more, just a swipe away.</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                   Download now
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="images/more-from-3.png">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Millions to choose from</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">Hail a taxi, find a recipe, run through a temple – Google Play has all the apps and games that let you make your Android device uniquely yours.</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                   Find apps
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>
          </div>
        </div>

       
       <?php
       include 'footer.php';
       ?>

      </div>
    </div>
    <!-- <a href="" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Feedback</a> -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
