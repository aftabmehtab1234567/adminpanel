<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    


<!-- php connectivity-->

<?php
$conn=mysqli_connect("localhost","root","","child");

?>
<!--using supper global variable-->
<?php
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $enroll=$_POST["enroll"];
    $date=$_POST["date"];
/*run insert query*/
    $query="INSERT INTO `registration`( `Name`, `Email`, `phone`, `Enroll_number`, `Date_admission`) VALUES ('$name','$email','$phone','$enroll','$date')";
   
    $result=mysqli_query($conn,$query);
    

}

?>
</body>
</html>