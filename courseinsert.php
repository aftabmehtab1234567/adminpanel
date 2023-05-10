<?php
$conn=mysqli_connect("localhost","root","","student");

?>
<?php
if(isset($_POST["submit"])){
    $subject=$_POST["subject"];
    $course=$_POST["course"];
    /*run insert query */
  $sql1= " INSERT INTO `course2`( `Subject`, `courseduration`) VALUES ('$subject','$course')";
  $result=mysqli_query($conn,$sql1);
  
}