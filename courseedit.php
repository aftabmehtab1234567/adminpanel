<?php
$conn=mysqli_connect("localhost","root","","child");
?>

<!--close form-->
<?php 
/*run update query*/
if(isset($_POST["update"])){
    $subject=$_POST["subject"];
    $course=$_POST["course"];
    
   $sql=" UPDATE `course2` SET `Subject`='$subject',`courseduration`='$course' WHERE sno='".$_GET['id']."'";
   $res1=mysqli_query($conn, $sql);
   header("Location:course.php");
}
?>
<!--add footer-->
<!--include header file-->
<?php include ("header.php")?>
<!--fetching dtata-->
<?php 
$id=$_GET['id'];
 $sql1=" SELECT * FROM `course2` WHERE sno={$id}";
 $res=mysqli_query($conn,$sql1);
 while ($row = mysqli_fetch_assoc($res)) { ?>

 <!--foem open-->
 <div class=col-lg-10>
 <form method="post" action="">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control mt-5" placeholder="Subject" name="subject" value="<?php echo $row['Subject'] ?>">
    </div>
    <div class="col">
      <input type="text" class="form-control mt-5" placeholder="Course Duration" name="course" value="<?php echo $row['courseduration'] ?>">
    </div>
    
  </div>
  
  <button type="submit" name="update" class="btn btn-warning  btn-md mt-5  col-3">Update</button>
  
</form>
<?php } 
  ?>
<?php include ("footer.php")?>
