<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <title>SSSNT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css" />
    <style>
        .orange-button {
    background-color: orange;
    color: #fff;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    transition: background-color 0.3s;
    border-radius:10px;
    
}

 .orange-button:hover {
    background-color: #ff9900;
}

</style>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="form.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>SSSNT</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Dr.Arunkumar C</h6>
                        <span>Faculty</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="form.php" class="nav-item nav-link active"><i class="fa fa-keyboard me-2"></i>User
                        Profile</a>
                    <a href="calendar.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Calendar</a>
                    <a href="timetable.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Timetable</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="far fa-file-alt me-2"></i>Leave Requests</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="display.php" class="dropdown-item">Pending leave request</a>
                            <a href="approveandrejectdisplay.php" class="dropdown-item">Approved and Rejected<br> leave request</a>
                        </div>
                    </div>
                    <a href="class.html" class="nav-link dropdown-toggle"><i
                        class="far fa-file-alt me-2"></i>Classes</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End --> 


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">IT support:Server will be down for 30 mins</h6>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">HOD:Report to Amriteshwari Hall</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notification</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Event was added to Calendar</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Reminder:Issue all emergency passes</h6>
                                <small>10 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Feedback submission</h6>
                                <small>8 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Classes cancelled today</h6>
                                <small>6 minutes ago</small>
                            </a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Dr.Arunkumar C</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="form.html" class="dropdown-item">My Profile</a>
                            <a href="adminlogin.html" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Form Start -->
            <form method="post" action="insert.php">
                <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-secondary rounded h-100 p-4">
                            <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facultydashboard";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve existing data from the profile table
$sql = "SELECT name, designation, department, contact, qualification FROM profile";
$result = mysqli_query($conn, $sql);
if ($result) {
  $row = mysqli_fetch_assoc($result);
  $name = $row['name'];
  $designation = $row['designation'];
  $department = $row['department'];
  $contact = $row['contact'];
  $qualification = $row['qualification'];
} else {
  // Handle error if query fails
  echo "Error retrieving data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
                                <h4 class="mb-4">My Details</h4>

<form action="" method="post">
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="name" value="<?php echo $name; ?>"readonly>
    <label for="floatingInput">Name</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingPassword" name="designation" value="<?php echo $designation; ?>"readonly>
    <label for="floatingInput">Designation</label>
  </div>
  <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" name="department" value="<?php echo $department; ?>"readonly>
    <label for="floatingSelect">Department</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="contact" value="<?php echo $contact; ?>"readonly>
    <label for="floatingInput">Contact</label>
  </div>
  <div class="form-floating">
    <input type="text" class="form-control" id="floatingTextarea" style="height: 50px;" name="qualification" value="<?php echo $qualification; ?>"readonly>
    <label for="floatingInput">Qualifications</label>
  </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h4 class="mb-4">Edit Profile</h4>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" name="name">
                                    <label for="floatingInput">Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPassword" name="designation">
                                    <label for="floatingInput">Designation</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect" name="department"
                                        aria-label="Floating label select example">
                                        <option selected>Select</option>
                                        <option value="cse">CSE</option>
                                        <option value="ece">ECE</option>
                                        <option value="mee">MEE</option>
                                        <option value="cce">CCE</option>
                                        <option value="aie">AIE</option>
                                        <option value="che">CHE</option>
                                        <option value="integrated">Integrated</option>
                                    </select>
                                    <label for="floatingSelect">Department</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" name="contact">
                                    <label for="floatingInput">Contact</label>
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingTextarea" style="height: 50px;"
                                        name="qualification">
                                    <label for="floatingInput">Qualifications</label>
                                </div><br>
                                <center><input type="submit" value="Submit" class="orange-button"></center>
                            </div>
</div>
<form method="post" action="insert1.php" class="formstyle">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4 w-150">
                    
                    <h4 class="mb-4">Publications</h4>
                    <div class="form-floating mb-3 ">
                        <input type="text" class="form-control" id="floatingInput" name="paper_id">
                        <label for="floatingInput">Paper ID</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="title">
                        <label for="floatingInput">Title</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword" name="aoi">
                        <label for="floatingInput">Area of Research</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword" name="institute">
                        <label for="floatingInput">Institution/Organization</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="year">
                        <label for="floatingInput">Year</label>
                    </div>
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Upload Paper</label>
                        <input class="form-control form-control-sm bg-dark" id="formFileSm" type="file">
                    </div>
                    <div class="form-floating">
                        <textarea type="text" class="form-control" id="floatingTextarea"
                            style="height: 90px;"></textarea>
                        <label for="floatingInput">Abstract</label>
                    </div><br>
                    <center><input type="submit" value="Submit" class="orange-button"></center>
                </div>

            </div>
</form>
    
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-80 p-4 w-76">
                    <h4 class="mb-4">Reminder</h4>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="paper_id">
                        <label for="floatingInput">Title</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="floatingInput" name="title">
                        <label for="floatingInput">Reminder date</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword" name="aoi">
                        <label for="floatingInput">Content</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword" name="institute">
                        <label for="floatingInput">Time</label>
                    </div><br>
                    <center><input type="submit" value="Submit" class="orange-button"></center>
                    </div>
                </div>

            </div>
            
                            
            </form>
        </div>

<!-- <div class = "widthfor"><form method="post" action="insert1.php" class="formstyle">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4 w-150">
                    <h4 class="mb-4">Publications</h4>
                    <div class="form-floating mb-3 ">
                        <input type="text" class="form-control" id="floatingInput" name="paper_id">
                        <label for="floatingInput">Paper ID</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="title">
                        <label for="floatingInput">Title</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword" name="aoi">
                        <label for="floatingInput">Area of Research</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword" name="institute">
                        <label for="floatingInput">Institution/Organization</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="year">
                        <label for="floatingInput">Year</label>
                    </div>
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Upload Paper</label>
                        <input class="form-control form-control-sm bg-dark" id="formFileSm" type="file">
                    </div>
                    <div class="form-floating">
                        <textarea type="text" class="form-control" id="floatingTextarea"
                            style="height: 90px;"></textarea>
                        <label for="floatingInput">Abstract</label>
                    </div><br>
                    <center><input type="submit" value="Submit" class="orange-button"></center> -->
                <!-- </div>

            </div>
</form>
    
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4 w-76">
                    <h4 class="mb-4">Reminder</h4>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="paper_id">
                        <label for="floatingInput">Paper ID</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="title">
                        <label for="floatingInput">Title</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword" name="aoi">
                        <label for="floatingInput">Area of Research</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword" name="institute">
                        <label for="floatingInput">Institution/Organization</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="year">
                        <label for="floatingInput">Year</label>
                    </div>
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Upload Paper</label>
                        <input class="form-control form-control-sm bg-dark" id="formFileSm" type="file">
                    </div>
                    <div class="form-floating">
                        <textarea type="text" class="form-control" id="floatingTextarea"
                            style="height: 90px;"></textarea>
                        <label for="floatingInput">Abstract</label>
                    </div><br>
                    <center><input type="submit" value="Submit" class="orange-button"></center>
                </div>

            </div>
             -->
<!-- </div> -->
        
    </div>
    </div>
    </div>
    </div>

    <!-- Form End -->
    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>