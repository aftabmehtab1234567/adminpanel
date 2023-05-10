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
                <h2 style="float:left;">Students</h2>
                <div>
                    <i class="fas fa-sort"></i>
                </div>
                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                    Add New Student
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php include 'insert.php'; ?>
                                <!--form  create using bootstrap-->
                                <form method="Post" action="student.php">

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Name</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name" required="" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required="" name="email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Phone</label>
                                        <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Phone" required="" name="phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Enroll Number</label>
                                        <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enroll number" required="" name="enroll">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Date of admission</label>
                                        <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Date" required="" name="date">
                                    </div>

                                    <input type="submit" name="submit" class="btn btn-primary mt-3">
                                </form>
                                <!--fetching query run-->
                                <?php $fetch = "SELECT * FROM `registration`";
                                $res = mysqli_query($conn, $fetch); ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="tabel-student mt-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Enroll Number</th>
                            <th scope="col">Date Of admission</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--while loop for fetching data-->
                        <?php
                        $number = 1;
                        while ($row = mysqli_fetch_assoc($res)) { ?>
                            <tr>

                                <th scope="row"><?php echo $number ?></th>
                                <td><?php echo $row['Name'] ?></td>
                                <td><?php echo $row['Email'] ?></td>
                                <td><?php echo $row['phone'] ?></td>
                                <td><?php echo $row['Enroll_number'] ?></td>
                                <td><?php echo $row['Date_admission'] ?></td>
                                <td><a href="edit.php?id=<?php echo $row['serial_no'] ?>"><i class="fas fa-pen"></i></a>
                                </td>
                                <!--deleted section-->
                                <td><a href="delete.php?id=<?php echo $row['serial_no']; ?>"><i class="fas fa-trash"></i></a></td>
                            </tr>
                            <?php
                            $number++;
                        }
                        ?>
                </table>


            </div>
            <?php include("footer.php") ?>