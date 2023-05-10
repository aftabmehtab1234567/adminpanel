<?php
$conn=mysqli_connect("localhost","root","","student");
?>
<?php

$stud=$_GET['id'];
/*run query*/

$query="DELETE FROM `payment`where id={$stud}";
$res1=mysqli_query($conn, $query);

header("Location:payment.php");

?>