<?php
  // Create database connection
  include 'databaseconnect.php';

  // Initialize message variable
  $msg = "";
   

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image_original = $_FILES['image_original']['name'];
      //$image_compressed = $_FILES['image_compressed']['name'];
  	// Get text
  	
   $title = $_POST['title'];
   $content = $_POST['content'];
  	// image file directory
  	$target_original = "../images/recent_activities/".basename($image_original);
    //$target_compressed = "./../images/compressed".basename($image);  

  	$sql = "INSERT INTO recent_activities (title,content,img) VALUES ('$title','$content','$image_original')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image_original']['tmp_name'], $target_original)) {
  		$msg = "Image uploaded successfully";
//        $im = new Imagick("../images/original/abc.jpg");
//
//// Optimize the image layers
//$im->optimizeImageLayers();
//
//// Compression and quality
//$im->setImageCompression(Imagick::COMPRESSION_JPEG);
//$im->setImageCompressionQuality(25);
//
//// Write the image back
//$im->writeImages("../images/compressed/abc.jpg", true);
        
        
        
   
        
        
        
        
        
        
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM gallery");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
<div id="content">
 
  <form method="POST" action="up_comp.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
    title :&nbsp;<br>
    <input type = "textarea" name = "title"><br>
	content :&nbsp;<br>
    <input type = "textarea" name = "content"><br>
  	<div>
  	  <input type="file" name="image_original">

  	</div>
  	<div>
      </div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>
</body>
</html>