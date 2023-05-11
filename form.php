<?php
// error_reporting(0);
 
$msg = "";
 
//If upload button is clicked ...
if (isset($_POST['save'])) {
  
  $name=$_POST["name"];
  $dob=$_POST["dob"];
  $phone=$_POST["phone"];
  $email=$_POST["email"];
  $gender=$_POST["gender"];
  $filename = $_FILES["file"]["name"];
  $tempname = $_FILES["file"]["tmp_name"];
  $folder = "./image/" . $filename;

    $db = mysqli_connect("localhost", "root", "", "child");
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO `userprofile`( `name`, `dob`, `phone`,`email`, `gender`, `image`) VALUES ('$name','$dob','$phone','$email','$gender','$filename')";
 
    // Execute query
    mysqli_query($db, $sql);
   
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
    }
       
 }
 ?>
 <?php 
$sql1="SELECT * FROM `userprofile`";
$res=mysqli_query($db, $sql1);
$row=mysqli_fetch_assoc($res);
 ?>
 
<form method="post" enctype="multipart/form-data">
    <div class="mx-auto" style="width: 200px;">
    <img src="<?php echo "image/".$row['image']?>"class="rounded-circle" alt="" height="150px">
    <span><label for="example"><i class="fa-solid fa-camera"></i></label></span>
    
    <input type=file name="file" id="example" style="display:none ; visibility:none">
</div>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control mt-5" placeholder="Name" name="name" value="<?php echo $row['name']?>">
    </div>
    <div class="col">
      <input type="date" class="form-control mt-5" placeholder="DOB" name="dob" value="<?php echo $row['dob']?>">
    </div>
    
  </div>
  <div class="row">
    <div class="col">
      <input type="number" class="form-control mt-5" placeholder="Phone"name="phone" value="<?php echo $row['phone']?>">
    </div>
    <div class="col">
      <input type="email" class="form-control mt-5" placeholder="Email"name="email" value="<?php echo $row['email']?>">
    </div>
    <div class="col">
    <input type="text" class="form-control mt-5" placeholder="Gender"name="gender" value="<?php echo $row['gender']?>">
    <select class="form-select mt-5" aria-label="Default select example" name="gender">
    <option>Gender</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Others">Others</option>
</select>
</div>
<div class="row">
<button type="submit" class="btn btn-warning mt-5 col-3  l" name="edit">Edit</button>
<button type="submit" class="btn btn-warning mt-5 col-3 l" name="save">Save</button>
</div>
  </div>
 
  
</form>
</div>