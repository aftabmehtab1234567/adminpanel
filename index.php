<?php
/*session for fixing page*/
session_start();
if(isset($_SESSION['email'])){

}else{
  header('location:signin.php');
}

?>
<?php include("header.php") ?>
<div class="col-lg-10 dashboard-main">
    <div class="nav-bar mb-3">
        <nav class="navbar navbar-light ">
            <div class="container-fluid">
                <!-- <a class="navbar-brand">Navbar</a> -->
                <a href="http://"><i class="fa fa-play-circle fs-3"></i></a>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                    <span class="fa fa-bell mt-2 ps-3"></span>
                </form>
            </div>
        </nav>
    </div>
    <div class="card-page">
        <div class="row">
            <div class="col lg-12">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="d-student">
                            <span class=" fa fa-graduation-cap"></span>
                            <p>Student</p>
                            <!--counting numbers of rows-->
                            <?php  
                            
                            $conn=mysqli_connect("localhost","root","","student");
                            $sql1="SELECT * FROM `registration`";
                            $res=mysqli_query($conn, $sql1);
                            $row=mysqli_num_rows($res);
                            echo ' <h4> '.$row.' </h4>';
                            ?>
                           
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="d-course">
                            <span class=" fa far fa-bookmark"></span>
                            <p>Course</p>
                             <!--counting numbers of rows-->
                            <?php  
                            $conn=mysqli_connect("localhost","root","","student");
                            $sql1="SELECT * FROM `course2`";
                            $res=mysqli_query($conn, $sql1);
                            $row=mysqli_num_rows($res);
                            echo ' <h4> '.$row.' </h4>';
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="d-payment">
                            <span class=" fa fa-rupee-sign"></span>
                            <p>Payment</p>
                            <?php  
                            $conn=mysqli_connect("localhost","root","","student");
                            $sql1="SELECT SUM(amountpaid) FROM `payment`";
                            $res=mysqli_query($conn, $sql1);
                            while($row=mysqli_fetch_array($res)){
                           ?>
                            <h4><span>INR</span><?php echo $row['SUM(amountpaid)']?></h4>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="d-user">
                            <span class=" fa fa-user"></span>
                            <p>User</p>
                            <?php  
                            $conn=mysqli_connect("localhost","root","","student");
                            $sql1="SELECT * FROM `login`";
                            $res=mysqli_query($conn, $sql1);
                            $row=mysqli_num_rows($res);
                            echo ' <h4> '.$row.' </h4>';
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php") ?>