<?php
/*session for fixing page*/
session_start();
if (isset($_SESSION['email'])) {
} else {
    header('location:signin.php');
}


$showAlert1=false;
$showAlert2=false;
$showAlert=false;
if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    $conn=mysqli_connect("localhost","root","","student");
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
<?php include("header.php") ?>

<div class="container-fluid col-10 border">
    <button type="button" class="btn btn-warning float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New User</button>
    <div class="container col-10 mt-5">
 
    <?php include("form.php") ?>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sign Up</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
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






               


