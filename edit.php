


<!-- php connectivity-->
<?php
$conn=mysqli_connect("localhost","root","","child");
?>


<!--using supper global variable-->
<?php
if(isset($_POST["update"])){
    
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $enroll=$_POST["enroll"];
    $date=$_POST["date"];
     $sig=$_GET['id'];
/*update query*/
   
$query="UPDATE `registration` SET `Name`='$name',`Email`='$email',`phone`='$phone',`Enroll_number`='$enroll',`Date_admission`='$date' WHERE serial_no='$sig'";
$res1=mysqli_query($conn,$query);
header("Location:student.php");

}
/*fetch id*/
?>
<?php
  $sig=$_GET['id'];
$sql1="SELECT * FROM `registration` WHERE serial_no={$sig}" ;
$res=mysqli_query($conn, $sql1);
 while ($row = mysqli_fetch_assoc($res)) { ?>
 <?php include ("header.php")?>
 <!--foem open-->
  <div class=col-lg-10>
  <form method="post" action="">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control mt-5" placeholder="Name" name="name" value="<?php echo $row['Name'] ?>">
    </div>
    <div class="col">
      <input type="text" class="form-control mt-5" placeholder="Email" name="email" value="<?php echo $row['Email'] ?>">
    </div>
    
  </div>
  <div class="row">
    <div class="col">
      <input type="number" class="form-control mt-5" placeholder="Phone"name="phone" value="<?php echo $row['phone'] ?>">
    </div>
    <div class="col">
      <input type="number" class="form-control mt-5" placeholder="Enroll_number"name="enroll"value="<?php echo $row['Enroll_number'] ?>">
    </div>
    
  </div>
  <div class="row">
    <div class="col-6">
      <input type="date" class="form-control mt-5" placeholder="Date_admisssion"name="date" value="<?php echo $row['Date_admission'] ?>">
    </div>
</form>
<?php }?> 
<!--submit button-->
<button type="submit" name="update" class="btn btn-warning  btn-md mt-5  col-3">Update</button>
</form>
 </div>
