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
    <div class="container-fluid">
        <div class="row">
            <div>
                <h2 style="float:left;">Course</h2>
                <div>
                    <i class="fas fa-sort"></i>
                </div>
                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                    Add Course
                </button>
            </div>
            <!--bootstrap  model-->
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Course</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!--icluding file-->
                            <?php include 'courseinsert.php'; ?>
                            <form method="post" action="">
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control mt-5" placeholder="Subject" name="subject">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control mt-5" placeholder=" Course duration" name="course">
                                    </div>
                                    <input type="submit" name="submit" class="btn btn-warning  btn-md mt-5  col-3">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--boot strap model close-->
            <!--table start-->
            <!--start fetching data-->
            <?php $fetch = "SELECT * FROM `course2`";
            $res = mysqli_query($conn, $fetch); ?>
            <div class="tabel-student mt-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Course duration</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                    sddd
                        <tr>
                            <!--while loop for fetching-->
                       <?php
                       $number=1;
                       while ($row = mysqli_fetch_assoc($res)) { ?>
                            <th scope="row"><?php echo $number ?></th>
                            <td><?php echo $row['Subject'] ?></td>
                            <td><?php echo $row['courseduration'] ?></td>
                            <td><a href="courseedit.php?id=<?php echo $row['sno']; ?>"><i class="fas fa-pen"></i></a></td>
                            <td><a href="coursedelete.php?id=<?php echo $row['sno']; ?>"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        <?php 
                    $number++;
                    }?>
                </table>
            </div>
    </div>
            <!--table end-->
            <?php include("footer.php") ?>