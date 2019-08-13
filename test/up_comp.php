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
  	
   $category = $_POST['category'];
  	// image file directory
  	$target_original = "../images/original/".basename($image_original);
    //$target_compressed = "./../images/compressed".basename($image);  

  	$sql = "INSERT INTO gallery (category,img_org) VALUES ('$category','$image_original')";
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
        
        function compress_image($source_url, $destination_url, $quality) {

		$info = getimagesize($source_url);

    		if ($info['mime'] == 'image/jpeg')
        			$image = imagecreatefromjpeg($source_url);

    		elseif ($info['mime'] == 'image/gif')
        			$image = imagecreatefromgif($source_url);

   		elseif ($info['mime'] == 'image/png')
        			$image = imagecreatefrompng($source_url);

    		imagejpeg($image, $destination_url, $quality);
		return $destination_url;
	}
        
        
      
	$source_img = "../images/original/".basename($image_original);
	$destination_img = "../images/compressed/".basename($image_original);

	$d = compress_image($source_img, $destination_img, 60);
        
        
        
        
        
        
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
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='../images/original/".$row['img_org']."' >";
      	echo "<p>".$row['img_id']."</p>";
      echo "</div>";
    }
  ?>
  <form method="POST" action="up_comp.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
    Select Category :&nbsp;<br> <Select required name="category">
        <option value = "spandan"> Spandan</option>
        <option value = "metamorphosis">MetaMorphosis</option>
        <option value = "osday">OS Day</option>
      <option value = "osday">technotweet</option>
		</Select>
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