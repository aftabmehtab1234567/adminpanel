<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 side-left pt-4">
                <span class="line-dashboard"></span>
                <h4 class="text-center ">CRUD OPERATIONS</h4>
                <div class="user-img mt-4">
               <?php $db = mysqli_connect("localhost", "root", "", "student");
               $sql1="SELECT * FROM `userprofile`";
               $es1=mysqli_query($db,$sql1);
            
               $row=mysqli_fetch_assoc($es1);
               ?>
               
                    <img src="<?php echo "image/".$row['image']?>" alt="">
                  
                    <h5 class="text-center mt-4"><?php echo $row['name']?></h5>
                    <p class="text-center mt-4" style="color:#FEAF00">Admin</p>
                </div>
                <nav>
                    <div class="navbar">
                        <ul>
                            <li><a href="index.php"><span class="fa fa-home"></span>&nbsp;&nbsp;&nbsp;Home</a></li>
                            <li><a href="course.php"><span class="far fa-bookmark"></span>&nbsp;&nbsp;&nbsp;Course</a></li>
                            <li><a href="student.php"><span class="fa fa-graduation-cap"></span>&nbsp;&nbsp;&nbsp;Students</a></li>
                            <li><a href="payment.php"><span class="fa fa-rupee-sign"></span>&nbsp;&nbsp;&nbsp;Payment</a></li>
                            <li><a href="#"><span class="fas fa-file"></span>&nbsp;&nbsp;&nbsp;Report</a></li>
                            <li><a href="setting.php"><span class="fa fa-cogs"></span>&nbsp;&nbsp;&nbsp;Setting</a></li>
                            
                           
                        </ul>
                    </div>
                </nav>
                <a href="logout.php" class="text-start">Logout&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                
            </div>
         
          