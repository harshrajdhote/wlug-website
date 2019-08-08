<!DOCTYPE html>
<html>
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
<body>


<div>
  <form enctype ="multipart/form-data" method="post" action="members_form.php">
  	Board 
  	<select name="board" required>
    
    <option value="mentor">Mentor Board</option>
    <option  value="main">Main Board</option>
    <option value="assistant">Assistant Board</option>
    <option value="member">Member</option>
  	</select>
  
  
    <label for="fname">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">
	Post
    <select name="Post" required>
    <option value="President">President</option>
    <option value="Vice President">Vice President</option>
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
      
      
    Thought
    <input name="thought" type="text" placeholder="Thought(Limit 80 Char)">
      
    Area of Interest
    <input name="AOI" type="text" placeholder="Area of Interest">
    
    Mobile No.
    <input name ="contact" type="text" placeholder="10 Digits only" >
    Facebook Profile Link(Enter as shown in Placeholder)
    <input name = "fb" type="text" placeholder="https://www.facebook.com/sanket.pathak2">
    Email
    <input name ="email" type="text" placeholder="Email" >
    Linkedin Profile Link(Enter as shown in Placeholder)
    <input name="linked_in" type="text" placeholder="https://www.linkedin.com/in/sanket-pathak-9aa116171">
    Photo(name photo as name_post eg. sanket_developer
<!--    <input name="pic" type="file" required />-->
      
    
  
    <input type="submit" name = 'upload' />
  </form>
    
    
    
    <?php
    $db = mysqli_connect("localhost", "root", "", "wlug");
    if (isset($_POST['upload'])) {
  	// Get image name
        extract($_POST);
//  	$pic = $_FILES['pic']['name'];
//      //$image_compressed = $_FILES['image_compressed']['name'];
//  	// Get text
//  	
//   echo "".print_r($_GET);
//  	// image file directory
//  	$target_original = "./images/members/".basename($pic);
//    //$target_compressed = "./../images/compressed".basename($image);  
//    $sql = "INSERT INTO gallery VALUES ('meta','ad')";
//  	
//  	// execute query
        $s = "sd";
        $d = "sd";
//  	mysqli_query($db, $sql);
        mysqli_query($db,"INSERT INTO gallery VALUES ('$s','$d')");

//  	if (move_uploaded_file($_FILES['pic']['tmp_name'], $target_original)) {
//  		$msg = "Image uploaded successfully";
//    
//    }
    }
    
    
    
    
?>    
</div>

</body>
</html>