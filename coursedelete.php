<?php
$conn=mysqli_connect("localhost","root","","student");
?>
<?php



/*run delete query*/
 
$sql="DELETE FROM `course2` WHERE sno='".$_GET['id']."'";
$res1=mysqli_query($conn, $sql);
header("Location:course.php");

?>