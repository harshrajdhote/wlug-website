<html lang="en">
<head>
    <title>Simple Form with image upload preview using PHP and Mysql</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <style>
        
        input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
    </style>
    
</head>
<body>

        <form action="members_form.php" method="post" enctype="multipart/form-data">
            
            
            <lable align="right">Board</lable>
            <select name ="board" >
            <option value = "mentor">Mentor Board</option>
                <option value = "main">Main Board</option>
                <option value="Assistent">Assistant Board</option>
                <option value="Member">Member</option>
  	         </select>
            
            
            <lable align="right">Name:</lable>
            <input type="text" name="name" required/><br>

            <lable align="right">POST</lable>
            <select name = "post" >
            <option value = "President">President</option>
                <option value = "Vice President">Vice President</option>
                <option value="Secretary">Secretary</option>
                <option value="Program Director">Program Director</option>
                <option value="Club Service Director">Club Service Director</option>
                <option value="Art Director">Art Director</option>
                <option value="Revenue Manager">Revenue Manager</option>
                <option value="Technical Advisor">Technical Advisor</option>
                <option value="Editor">Editor</option>
                <option value="Aptitude Head">Aptitude Head</option>
                <option value="Developer">Developer</option>
                <option value="Members">Member</option>
  	         </select>
            
             <lable align="right">Thought</lable>
            <input type="text" name="thought" required/><br>
            
            
            <lable align="right">AOI</lable>
            <input type="text" name="AOI" required/><br>
                            
            
            
             Mobile No.
            <input name ="contact" type="text" placeholder="10 Digits only" required>
            
            
            Facebook Profile Link(Enter as shown in Placeholder)
                        <input name = "fb" type="text" placeholder="https://www.facebook.com/sanket.pathak2">
                    
            <lable align="right">Email:</lable>
            <input type="text" name="email" required/><br>
            
            <lable align="right">Linkedin</lable>
            <input type="text" name="linkedin" required/><br>
            
            
            
            <lable align="right">Image:</lable>  <br>                          
            <input type="file" name = "pic">
                            
                            
            
                           
                        
                            <input type="submit" name="register" value="submit" />
                                     

        </form>
    
    <?php
    
    
   include 'databaseconnect.php';
    
    
//    if (isset($_POST['upload'])) {
//  	// Get image name
//        extract($_FILES);
//  	$image_original = $_FILES['pic']['name'];
//      //$image_compressed = $_FILES['image_compressed']['name'];
//  	// Get text
//  	
//   
////  	image file directory
//  	//$target_original = "./images/members/".basename($image_original);
//    //$target_compressed = "./../images/compressed".basename($image);  
//        //$board=$_POST['board'];
//        $name=$_POST['name'];
//        //$Post=$_POST['Post'];
//        //$thought=$_POST['thought'];    
//        $AOI=$_POST['AOI'];
//        $contact=$_POST['contact'];
//        $fb=$_POST['fb'];
//        $email=$_POST['email'];
//        $linked_in=$_POST['linked_in'];
////            $sql = "INSERT INTO members (id,category,name,post,thought,AOI,contact_no,fb,gmail,linked_in,pic) VALUES ('$board','$name','$Post',
////    '$thought','$AOI','$contact','$fb','$email','$linked_in','$pic')";
//        
//        
//        
//        
//        $sql = "INSERT INTO members (id,category,name,post,thought,AOI,contact_no,fb,gmail,linked_in,pic) VALUES ('$name','$AOI','$contact','$fb','$email','$linked_in','$pic')";
//  	// execute query
//  	mysqli_query($db, $sql);
//
////  	if (move_uploaded_file($_FILES['pic']['tmp_name'], $target_original)) {
////  		$msg = "Image uploaded successfully";
////    
////    }
//    }
//    else
//    {
//        echo"<script>alert('Failed to upload data')</script>";   
//    }
    
    
    
    if(isset($_POST['register']))
    {
        $board = $_POST['board'];
        $email = $_POST['email'];
        $post = $_POST['post'];
        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $thought = $_POST['thought'];
        $AOI = $_POST['AOI'];
        $pic = $_FILES['pic']['name'];
   $image_tmp = $_FILES['pic']['tmp_name'];
        $fb = $_POST['fb'];
        $post = $_POST['post'];
        $linkedin = $_POST['linkedin'];
$target_original = "./images/members/".basename($pic);

        if (move_uploaded_file($_FILES['pic']['tmp_name'], $target_original)) {
  		$msg = "Image uploaded successfully";
        }
        //$con = mysqli_connect("localhost","root","","wlug");

        $query = "insert into members(board,name,post,thought,aoi,contact,fb,email,linked_in,img)  values ('$board','$name','$post','$thought','$AOI','$contact','$fb','$email','$linkedin','$pic')";

        $result = mysqli_query($db,$query) or die(mysqli_error($db));
        
//        $res = "select";
        //echo "";

        if($result=== TRUE)
        {       

        echo "successfully uploaded";
        
        }
        else {       

        echo "upload Failed";

             }
    }
?>    

</body>
</html>