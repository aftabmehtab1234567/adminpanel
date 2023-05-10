<?php
$conn=mysqli_connect("localhost","root","","student");
?>
<?php

$stud=$_GET['id'];
/*run query*/

$query="DELETE FROM `registration`where serial_no={$stud}";
$res1=mysqli_query($conn, $query);

header("Location:student.php");

?>