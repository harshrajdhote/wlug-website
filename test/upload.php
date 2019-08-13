<html>
<head>
    <title>File Upload</title>
</head>
<body>
  <?php 
$include 'databaseconnect.php';
if (isset($_POST["submit"]))
 {
     #retrieve file title
        $title = $_POST["title"];
      
    #file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
  
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
    
     #upload directory path
$uploads_dir = '../images';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
  
    #sql query to insert into database
    $sql = "INSERT into test(title,path) VALUES('$title','$pname')";
  
    if(mysqli_query($db,$sql)){
  
    echo "File Sucessfully uploaded";
    }
    else{
        echo "Error";
    }
}
  $q = "select * from test";
    $res = mysqli_query($db,$q);
    while($row = mysqli_fetch_array($res)){
        echo '
        <img src= "data:image/jpeg;base64,'.base64_encode($row['path']).'" height = "400" width = "400"/>
        ';
    }
  
?>
<form method="post" enctype="multipart/form-data">
    <label>Title</label>
    <input type="text" name="title">
    <label>File Upload</label>
    <input type="File" name="file">
    <input type="submit" name="submit">
  
  
</form>
     <a href="../images<?php echo $path[$a]; ?>" download="<?php echo $path[$a]; ?>">
         Download</a>
  
</body>
</html>
  
