<!-- php connectivity-->

<?php
$conn=mysqli_connect("localhost","root","","student");

?>
<!--using supper global variable-->
<?php
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $pay=$_POST["pay"];
    $bill=$_POST["bill"];
    $amount=$_POST["amount"];
    $balance=$_POST["balance"];
    $date=$_POST['date'];
/*run insert query*/
    $query="INSERT INTO `payment`( `name`, `paymentsche`, `bill_number`, `amountpaid`, `balanceamount`, `date`) VALUES ('$name','$pay','$bill','$amount','$balance','$date')";
   
    $result=mysqli_query($conn,$query);
    

}

?>