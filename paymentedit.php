<?php
/*session for fixing page*/
session_start();
if (isset($_SESSION['email'])) {
} else {
    header('location:signin.php');
}
?>

<!-- php connectivity-->

<?php
$conn=mysqli_connect("localhost","root","","child");

?>
<!--using supper global variable-->
<?php
if(isset($_POST["update"])){
    $name=$_POST["name"];
    $pay=$_POST["pay"];
    $bill=$_POST["bill"];
    $amount=$_POST["amount"];
    $balance=$_POST["balance"];
    $date=$_POST['date'];


    
    /*update query*/
   
$sql="UPDATE `payment` SET `name`='$name',`paymentsche`='$pay',`bill_number`='$bill',`amountpaid`='$amount',`balanceamount`='$balance',`date`='$date' WHERE id='".$_GET['id']."'";
$res=mysqli_query($conn,$sql);
header("Location:payment.php");

}
/*fetch id*/
?>
<?php
 
$sql1="SELECT * FROM `payment` WHERE id='".$_GET['id']."'";
$res1=mysqli_query($conn, $sql1);
 while ($row = mysqli_fetch_assoc($res1)) { ?>
 <?php include ("header.php")?>
 <!--foem open-->
 <div class=col-lg-10>
 <form method="post" action="">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control mt-5" placeholder="Name" name="name" value="<?php echo $row['name']?>">
    </div>
    <div class="col">
      <input type="text" class="form-control mt-5" placeholder="Payment Schedule" name="pay" value="<?php echo $row['paymentsche']?>">
    </div>
    
  </div>
  <div class="row">
    <div class="col">
      <input type="number" class="form-control mt-5" placeholder="Bill Number"name="bill" value="<?php echo $row['bill_number']?>">
    </div>
    <div class="col">
      <input type="number" class="form-control mt-5" placeholder="Amount Paid"name="amount"value="<?php echo $row['amountpaid']?>">
    </div>
   
  </div>
  <div class="col-6">
      <input type="text" class="form-control mt-5" placeholder="Balance Amount"name="balance"value="<?php echo $row['balanceamount']?>">
    </div>
    
  <div class="row">
    <div class="col-6">
      <input type="date" class="form-control mt-5" placeholder="Date"name="date" value="<?php echo $row['date']?>">
    </div>
</form>
<?php }?>
<!--submit button-->
<button type="submit" name="update" class="btn btn-warning  btn-md mt-5  col-3">Update</button>
</form>

 </div>