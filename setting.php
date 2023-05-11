<?php
/*session for fixing page*/
session_start();
if (isset($_SESSION['email'])) {
} else {
    header('location:signin.php');
}
?>


<?php include("header.php") ?>

<div class="container-fluid col-10 border">
    <button type="button" class="btn btn-warning float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New User</button>
    <div class="container col-10 mt-5">
 
    <?php //include("form.php")// ?>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sign Up</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                
<!-- modal body -->

  <div class="modal-body">

<form method='post'>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floaInptingut" placeholder="name@example.com" name="email">
        <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name='pass'>
        <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating mt-3">
        <input type="password" class="form-control" id="confirm" placeholder="Password" name='confirm'>
        <label for="floatingPassword">Confirm Password</label>
    </div>

    <input type="submit" class="btn btn-primary mt-3 " name='Submit' onclick="ss()" value="Submit">
</form>
</div>
               
</div>

</div>
</div>

</div>
<!-- fetch data with session -->
<?php 
$mail=$_SESSION['email'];
$sql1= "SELECT * FROM `userprofile` WHERE email='$mail'";

$res=mysqli_query($db,$sql1);
$row=mysqli_fetch_assoc($res);
 ?>
 <!-- profile form -->
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
    <!-- select  -->
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
<?php
$showAlert1=false;
$showAlert2=false;
$showAlert=false;
if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    $conn=mysqli_connect("localhost","root","","child");
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $confirm=$_POST['confirm'];
    $sql="SELECT * FROM `login` WHERE email ='$email'";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($res);
    // matched confirm password and password//
    if(($pass == $confirm)){
       $showAlert1=true;
}
else{
   $showAlert3=false;
}
    //    checking email already exist or not//
         if($email == $row['email']){
           $showAlert2=true;
         } 
         else{
            // insert query//
            $sql1=" INSERT INTO `login`( `email`, `password`) VALUES ('$email','$pass')";
            $res1=mysqli_query($conn,$sql1);
            
            if($res1){
               $showAlert=true;
               
            }
         }   
    
    }
?>
<?php 
                // alert//
if($showAlert){
    echo '<div class="alert alert-success" role="alert" >
    success
    </div>';
}

                if($showAlert1){
    echo '<div class="alert alert-success" role="alert" >
    Password  matched
    </div>';
}
if($showAlert2){
    echo '<div class="alert alert-danger" role="alert" >
    User is already exists
    </div>';
} 
if($showAlert1){
    echo '<div class="alert alert-danger" role="alert">
Password is not match matched
</div>';
}
?>
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

$sql1= "SELECT `email` FROM `userprofile` WHERE name = Aftab";

$res=mysqli_query($db,$sql1);
$row=mysqli_fetch_assoc($res);
 ?>






               


