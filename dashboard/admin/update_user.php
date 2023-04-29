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
                    <li class="breadcrumb-item active" aria-current="page">Update User</li>
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
    <form method="post">
      <div class="container-fluid mt--6">
        <div class="row">
        
        <div class="col-xl-12 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit profile </h3>
                </div>
                <div class="col-4 text-right">
                  <button type="submit" name="update" class="btn btn-sm btn-primary" >Update</button>
                </div>
              </div>
            </div>


            <?php
                $ID = $_REQUEST['id'];
                $selqry = "SELECT * FROM USERS WHERE uid='$ID' ";
                $selexe = mysqli_query($conn, $selqry);
                $fetch = mysqli_fetch_assoc($selexe);
            ?>


            <div class="card-body"> 
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" name="name" id="input-username" class="form-control" value="<?php echo $fetch['uname']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" name="email" id="input-email" class="form-control" value="<?php echo $fetch['uemail']; ?>" >
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">User Role</label>
                        <input type="text" name="role" id="input-last-name" class="form-control"  value="<?php echo $fetch['urole']; ?>">
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
                        <label class="form-control-label" for="input-city">State</label>
                        <input type="text" id="input-city" name="state" class="form-control"  value="<?php echo $fetch['ustate']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Country</label>
                        <input type="text" id="input-country" name="con" class="form-control" value="<?php echo $fetch['ucon']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Mobile Number</label>
                        <input type="text" id="input-first-name" name="phon" class="form-control" value="<?php echo $fetch['umobile']; ?>">
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
                    $uname2  = $_POST['name'];
                    $uemail2 = $_POST['email'];
                    $urole2  = $_POST['role'];
                    $ustate2 = $_POST['state'];
                    $ucon2   = $_POST['con'];
                    $uphon2  = $_POST['phon'];

                    $upqry = "UPDATE users SET uname='$uname2', uemail='$uemail2', umobile='$uphon2', ustate='$ustate2', ucon='$ucon2', urole='$urole2' WHERE uid='$ID'";
                    $upexe = mysqli_query($conn, $upqry);
                    
                    if($upexe)
                    {
                        echo"<script>alert('Record Updated Successfully...');</script>";
                        redirect('manage_user.php');
                    }
                    else
                    {    
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