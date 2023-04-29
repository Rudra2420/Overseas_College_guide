<?php
session_start();
include_once('../../database/dbconn.php');
include_once('../../database/function.php');
if ($_SESSION['overseas_admin']) {
  // echo $_SESSION['overseas_admin'];
?>


  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <!-- <meta name="author" content="Creative Tim"> -->
    <title>Overseas Dashboard - Admin - Users</title>
    <!-- Favicon -->
    <link rel="icon" href="../../assets/img/logo.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
  </head>

  <body>

    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
      <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
          <a class="navbar-brand" href="javascript:void(0)">
            <img src="../../assets/img/logo.png" style="height: 100px; width:60px;" class="navbar-brand-img" alt="...">
          </a>
        </div>
        <div class="navbar-inner">
          <!-- Collapse -->
          <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Nav items -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">
                  <i class="ni ni-tv-2 text-primary"></i>
                  <span class="nav-link-text">Dashboard</span>
                </a>
              </li>

              <!-- Divider -->
              <hr class="my-3">
              <li class="nav-item">
                <a class="nav-link" href="manage_user.php">
                  <i class="ni ni-single-02 text-yellow"></i>
                  <span class="nav-link-text">Users</span>
                </a>
              </li>

              <!-- Divider -->
              <hr class="my-3">
              <li class="nav-item">
                <a class="nav-link" href="manage_colleges.php">
                  <i class="ni ni-pin-3 text-primary"></i>
                  <span class="nav-link-text">Colleges</span>
                </a>
              </li>

              <!-- Divider -->
              <hr class="my-3">
              <li class="nav-item">
                <a class="nav-link" href="manage_acc.php">
                  <i class="ni ni-planet text-orange"></i>
                  <span class="nav-link-text">Accommodation</span>
                </a>
              </li>

              <!-- Divider -->
              <hr class="my-3">
              <li class="nav-item">
                <a class="nav-link" href="manage_ptw.php">
                  <i class="ni ni-bullet-list-67 text-default"></i>
                  <span class="nav-link-text">Part-Time-Work</span>
                </a>
              </li>

              <!-- Divider -->
              <hr class="my-3">
              <li class="nav-item">
                <a class="nav-link" href="profile.php">
                  <i class="ni ni-key-25 text-info"></i>
                  <span class="nav-link-text">Profile</span>
                </a>
              </li>
            </ul>

            <!-- Divider -->
            <hr class="my-3">
          </div>
        </div>
      </div>
    </nav>

    <!-- Main content -->
    <div class="main-content" id="panel">
      <!-- Topnav -->
      <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center  ml-md-auto ">
              <li class="nav-item d-xl-none">
                <!-- Sidenav toggler -->
                <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </div>
              </li>
            </ul>

            <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
              <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="media align-items-center">
                    <span class="avatar avatar-sm rounded-circle">
                      <i class="ni ni-single-02 text-blue"></i>
                    </span>
                    <div class="media-body  ml-2  d-none d-lg-block">
                      <span class="mb-0 text-sm  font-weight-bold">Admin</span>
                    </div>
                  </div>
                </a>
                <div class="dropdown-menu  dropdown-menu-right ">
                  <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome!</h6>
                  </div>
                  <a href="profile.php" class="dropdown-item">
                    <i class="ni ni-single-02"></i>
                    <span>My profile</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="logout.php" class="dropdown-item">
                    <i class="ni ni-user-run"></i>
                    <span>Logout</span>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <!-- Header -->
      <!-- Header -->
      <div class="header bg-primary pb-6">
        <div class="container-fluid">
          <div class="header-body">
            <div class="row align-items-center py-4">
              <div class="col-lg-6 col-7">
                <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                  <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="index.php">Dashboards</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update Part-Time-Work</li>
                  </ol>
                </nav>
              </div>
              <!-- <div class="col-lg-6 col-5 text-right">
                <a href="#" class="btn btn-sm btn-neutral">New</a>
              </div> -->
            </div>
          </div>
        </div>
      </div>


    <!--Page Content  -->
    <form method="post" enctype="multipart/form-data">
      <div class="container-fluid mt--6">
        <div class="row">
        
        <div class="col-xl-12 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit Part-Time-Work</h3>
                </div>
                <div class="col-4 text-right">
                  <button type="submit" name="update" class="btn btn-sm btn-primary" >Update</button>
                </div>
              </div>
            </div>


            <?php
                $ptwid = $_REQUEST['ptw_id'];
                $selqry = "SELECT * FROM part_time_work WHERE ptw_id='$ptwid' ";
                $selexe = mysqli_query($conn, $selqry);
                $fetch = mysqli_fetch_assoc($selexe);
            ?>

            <div class="card-body"> 
                <h6 class="heading-small text-muted mb-4">Part-Time-Work information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">PTW Place Name</label>
                        <input type="text" name="ptw_place_name" id="input-username" class="form-control" value="<?php echo $fetch['ptw_place_name']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">PTW Hours</label>
                        <input type="text" name="hr" id="input-email" class="form-control" value="<?php echo $fetch['ptw_hours']; ?>" >
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Salary</label>
                        <input type="text" name="sal" id="input-last-name" class="form-control"  value="<?php echo $fetch['ptw_salary']; ?>">
                      </div>
                    </div>
                  

                
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">PTW Requirement</label>
                        <input type="text" name="ptw_re" id="input-last-name" class="form-control"  value="<?php echo $fetch['ptw_requirement']; ?>">
                      </div>
                    </div>
                    </div>

                </div>
                <hr class="my-4" />

                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">City</label>
                        <input type="text" id="input-city" name="city" class="form-control"  value="<?php echo $fetch['ptw_city']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">State</label>
                        <input type="text" id="input-country" name="state" class="form-control" value="<?php echo $fetch['ptw_state']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Country</label>
                        <input type="text" id="input-first-name" name="con" class="form-control" value="<?php echo $fetch['ptw_country']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">User ID</label>
                        <input type="text" id="input-first-name" name="uid" class="form-control" value="<?php echo $fetch['uid']; ?>" >
                      </div>
                    </div>
                  </div>
                </div>
                
        </div>
      </div>
      </form>


          <!-- Footer -->
          <footer class="footer pt-0">
                        <div class="row align-items-center justify-content-lg-between">
                            <div class="col-lg-6">
                                <div class="copyright text-center  text-lg-left  text-muted">
                                    &copy; 2021 <a href="index.php" class="font-weight-bold ml-1"
                                        target="_blank">Overseas</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>

<?php
        if(isset($_POST['update']))
                {
                    $placename = $_POST['ptw_place_name'];
                    $hr = $_POST['hr'];
                    $sal = $_POST['sal'];
                    $ptw_re = $_POST['ptw_re'];
                    $city = $_POST['city'];
                    $state = $_POST['state'];
                    $con = $_POST['con'];

                        $upqry = "UPDATE part_time_work SET ptw_place_name='$placename', ptw_city='$city', ptw_state='$state', ptw_country='$con', ptw_hours='$hr', ptw_salary='$sal', ptw_requirement='$ptw_re' WHERE ptw_id='$ptwid'";
                        $upexe = mysqli_query($conn, $upqry);
                        if($upexe)
                        {
                            echo"<script>alert('Record Updated Successfully...');</script>";
                            redirect('manage_ptw.php');
                        }
                        else{
                            
                            echo"<script>alert('Record Not Updated...');</script>";
                        }            
                    
                }

?>

        <!-- Argon Scripts -->
        <!-- Core -->
        <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
        <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
        <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
        <!-- Optional JS -->
        <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
        <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
        <!-- Argon JS -->
        <script src="../assets/js/argon.js?v=1.2.0"></script>

  </body>

  </html>
<?php
} else {
  redirect('../loginindex.php');
}
?>