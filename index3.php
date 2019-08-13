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
	   <link href='https://fonts.googleapis.com/css?family=Exo' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>WLUG</title>
      
      
      
      
      
    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <style>
        
        
        /////////
        $color-primary: #f857a8;
$color-secondary:#ff5858;
$color-dark: #333;

@mixin main-gradient{
    background: $color-primary;
    background: -webkit-linear-gradient(45deg, $color-primary, $color-secondary);
    background: linear-gradient(45deg, $color-primary, $color-secondary);
}
body {
     background: repeating-linear-gradient(45deg, rgba(255,255,255,.05) 0px, rgba(255,255,255,.05) 2px, rgba(0,0,0,.025) 2px,  rgba(0,0,0,.025) 4px);
    background-attachment: fixed;
    background-size: cover;
    min-height: 100%;
}

h1{
  line-height: 100vh;
  color: $color-dark;
  font-size: 3em;
 
  padding: 0;
  margin: 0;
}

.text-center{
  text-align: center;
}

#type{
   
    display: inline;
}

#blinker{
    @include main-gradient;
    display: inline;
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
}

#blinker.blink{
    animation-name: type;
    animation-duration: .75s;
    animation-iteration-count: infinite;
}

@keyframes type{
    0% {
        opacity: 1;
    }
    100% {
        opacity: 0;
    }
}

        ////////
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
    margin: 0;
    margin-top: -55px;
	width: 100%;
	height: 100vh;
    display: inline-block;
    white-space:nowrap;
	font-family: "Exo", sans-serif;
	color: #fff;
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradientBG 15s ease infinite;
    font-size:4.5em;
    justify-content:center;
    align-items: center;
                
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
        .center_style{
            
              font-family: 'Exo';
            padding-top:0%;
            text-align:center;
        }
        @media only screen and (min-width: 600px) {
        .center_style{
            
              font-family: 'Exo';padding-top:0%;
            text-align:center;
        }
        }
        @media only screen and (min-width: 768px) {
        .center_style{
            
              font-family: 'Exo';padding-top:0%;
            text-align:center;
            

        }
        }
        
        
         #myalign{
            
             margin-top : -77%;
        }
        @media only screen and (min-width: 600px) {
        #myalign{
            
             margin-top : -27%;
        }
        }
        @media only screen and (min-width: 768px) {
        #myalign{
            
             margin-top : -17%;
            

        }
        }
        
        

        
        
        
        
        
        
        
h1 {
	font-weight: 300;
	font-size:6.6vw;
    }
        

h3 {
	color: #eee;
	font-weight: 100;
	font-size:3vw;
}

h5 {
	color:#eee;
	font-weight:300;
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
      
      
        <div class="android-customized-section">
         
          <div class="android-customized-section">
         

          <div class="android-customized-section-image" > <h1  class="center_style" id="type"></h1>
	           <h3 class="center_style"  id = "myalign">Community | Knowledge | Share</h3>
          </div>

<!--

              <script type="text/javascript" src="typed.js"></script>
        <script type="text/javascript">
      
      var typed = new Typed(".type1 ", {
      strings: ["Walchand Linux User's Group"],
      typeSpace:1,
      backSpeed:0,
      loop:false
        });
            
            
            
            var typed = new Typed(".type2 ", {
      strings: ["COMMUNITY | KNOWLEDGE | SHARE "],
      typeSpace:60,
      backSpeed: 60,
      loop:false
        });
         
      </script> 
-->
              
         <script>
                var typewriter = {
    el: document.getElementById('type'),
    elLength: document.getElementById('type').textContent.length,
    period: 150,
    interval: '',
    word: '',
    add: true,
    textArray: ["Walchand Linux Users' Group"],
    type() {
        this.letter = 0;
        this.counter = 0;
        clearInterval(this.interval);
        this.interval = setInterval(function(){typewriter.addLetters();}, typewriter.period);
    },
    setWord(){
        this.word = this.textArray[this.counter];
    },
    deleteLetters(){
        if (this.letter > 0 && !this.add){ 
            this.letter--;
            var textContent = this.el.textContent;
            this.el.textContent = textContent.substring(0, this.letter); 
        } else if (this.letter === 0 && !this.add){ 
            this.add = true;
            this.el.innerHTML = '';
            this.counter++; 
            this.setWord();
            this.startAdd();
        }
    },
    addLetters() {
        if (this.counter === this.textArray.length) {
            this.type();
        } else { 
            this.setWord();
            if (this.letter < this.word.length && this.add) { 
                this.el.textContent += this.word[this.letter];
                this.letter++;
            } else if (this.letter === this.word.length && this.add) { 
                this.add = false;
                document.getElementById('blinker').classList = "blink";
                setTimeout(function(){ typewriter.startDelete(); }, 1500);
            }  
        } 
    },
    startDelete() {
        document.getElementById('blinker').classList = "";
        clearInterval(this.interval);
        this.interval = setInterval(function(){typewriter.deleteLetters();}, typewriter.period);
    },
    startAdd(){
        clearInterval(this.interval);
        this.interval = setInterval(function(){typewriter.addLetters();}, typewriter.period);
    }
}

typewriter.type();
     
              
              
              
         </script>     
        
        </div>
        </div>
        <?php
       include 'databaseconnect.php';
        $result = mysqli_query($db, "SELECT * FROM recent_activities");
       
        while ($row = mysqli_fetch_array($result)) {
        echo "<div class='android-more-section'>";
          echo "<div class='android-section-title mdl-typography--display-1-color-contrast'>Recent Activities</div>";
          echo"<div class='android-card-container mdl-grid'>";
            echo"<div class='mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp'>";
              echo"<div class='mdl-card__media'>";
                echo"<img src='images/recent_activities/".$row['img']."'>";
              echo"</div>";
              echo"<div class='mdl-card__title'>";
                 echo"<h4 class='mdl-card__title-text'>".$row['title']."</h4>";
             echo"</div>";
              echo"<div class='mdl-card__supporting-text'>";
                echo"<span class='mdl-typography--font-light mdl-typography--subhead'>".$row['content']."</span>";
              echo"</div>
              <div class='mdl-card__actions'>";
                 // <a class='android-link mdl-button mdl-js-button mdl-typography--text-uppercase' href=''>
                   // Explore
                   // <i class='material-icons'>chevron_right</i>
                 // </a>
              echo"</div>
            </div>
            </div>
        </div>";
        }
        ?>
        <?php
        include 'teachers.php';
        ?> 


       <!-- <?php
       // include 'footer.php';
       // ?>-->
      </div>
    </div>
    <a href="./feedback.php" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Feedback</a>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
