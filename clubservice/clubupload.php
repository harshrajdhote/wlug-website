<?php
include 'databaseconnect.php';

if (isset($_POST['upload'])) {

    $csname = $_POST['csname'];

    $presenters = $_POST['presentators'];

    // $data_original = $_FILES['csdata']['name'];

    // $csdata_original = "./".basename($data_original);

    $target_dir = "";

    $target_file = $target_dir . basename($_FILES["csdata"]["name"]);

    move_uploaded_file($_FILES["csdata"]["tmp_name"], $target_file);

    $sql = "INSERT INTO club_service (csname,presenters,csdata) VALUES ('$csname','$presenters','$target_file')";

    mysqli_query($db, $sql);
    
    echo "<script>alert('Successfully uploaded data')</script>";

}
else{
    
    echo "<script>alert('Failed to upload data')</script>";
}

?>

<!DOCTYPE html>
<head>
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
  
<form method="POST" action="clubupload.php" enctype="multipart/form-data">
  	
  	<div>
      Club Service Topic &nbsp:
  	  <input type="text" name="csname" required>
  	</div>

    <div>
        Presentators &nbsp:
        <input type="text" name="presentators" required>
    </div>

  	<div>
      <input type="file" name="csdata" required>
      </div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
  </div>
</body>
</html>