<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WLUG | Gallery</title>
    
     <!---new    added from index-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
    <link rel="stylesheet" href="./css/styles.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="./css/thumbnail-gallery.css">

   

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    
    #sticky {
  position: fixed;
  top: 0;
  width: 100%;
}
    a:hover {
    
    }
    </style>
</head>
<body>

<!--  -->


    <!-- new -->
    
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header" >

            <div class="android-header mdl-layout__header mdl-layout__header--waterfall" id = 'sticky'>
              <div class="mdl-layout__header-row">
                <span class="android-title mdl-layout-title">
                  <img class="android-logo-image" src="./images/wluglogo.png">
                </span>
                <!-- Add spacer, to align navigation to the right in desktop -->
                <div class="android-header-spacer mdl-layout-spacer"></div>
                
                <!-- Navigation -->
                <div class="android-navigation-container">
                 <?php
                include'header.html'
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
            <div class="container gallery-container">

    <h1>Gallery</h1>

    <p class="page-description text-center">"The best thing in life are not things, they are moments"
 Glimpses of the beautiful moments witnessed in WLUG in the past years. </p>
    
    <div class="tz-gallery">

        <div class="row">

          
           

            
           
            
            
                
                    
                       
                    
                     <?php
					 include 'databaseconnect.php';
//                    $db = mysqli_connect("localhost", "root", "", "wlug");
                    $result = mysqli_query($db, "SELECT * FROM gallery where category ='".$_GET['cat']."'");
                   
    while ($row = mysqli_fetch_array($result)) {
      
             echo "<div class='col-sm-6 col-md-4'>";
      echo "<div class='thumbnail'>";
        echo "<a class='lightbox' href='http://localhost/wlug_new/images/original/".$row['img_org']."'>";
      	echo "<img src='http://localhost/wlug_new/images/compressed/".$row['img_org']."' >";
      	echo "</a>";
      echo "</div>";
       
            echo"</div>";
       
            //echo $i++;
        
    }
  ?>
                
            </div>
        </div>

    </div>

</div>
        </div>
           
          </div>
          
          <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>

<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>

          