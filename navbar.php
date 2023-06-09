<?php
include_once('database/dbconn.php');
include_once('database/function.php');

if (isset($_SESSION['IS_LOGIN']) && $_SESSION['IS_LOGIN'] == 'student') {
?>
<style>

.student {
    display: contents !important;
}
.user{
    display: contents !important;
}
.shopOwner{
    display: none !important;
}
.houseOwner{
    display: none !important;
}
.visitor{
    display: none !important;
}

</style>

<?php
} else if(isset($_SESSION['IS_LOGIN']) && $_SESSION['IS_LOGIN'] == 'house owner'){
?>

<style>
.student {
    display: none !important;
}
.shopOwner{
    display: none !important;
}
.houseOwner{
    display: contents !important;
}
.visitor{
    display: none !important;
}
.user{
    display: none !important;
}

</style>

<?php
}
else if(isset($_SESSION['IS_LOGIN']) && $_SESSION['IS_LOGIN'] == 'shop owner')
{
?>
<style>
.student {
    display: none !important;
}
.shopOwner{
    display: contents !important;
}
.houseOwner{
    display: none !important;
}
.visitor{
    display: none !important;
}
.user{
    display: none !important;
}

</style>

<?php
}
else{
?>

<style>
.student {
    display: none !important;
}
.shopOwner{
    display: none !important;
}
.houseOwner{
    display: none !important;
}
.user{
    display: none !important;
}
.visitor{
    display: contents !important;
}

</style>

<?php
}

?>

<!DOCTYPE html>
<html>

<head>

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery/jquery-3.min.js"></script>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Overseas Info Guide</title>

    <!--Vendor CSS Link-->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Vendor CSS CDN Link-->

    <!--main stylesheet link-->
    <link rel="stylesheet" href="assets/css/navbar.css">
    <!--main stylesheet link-->

    <!--Font Awsome Latest Version -->
    <script src="https://kit.fontawesome.com/d65000b73d.js" crossorigin="anonymous"></script>
    <!--Font Awsome Latest Version -->

</head>

<body>

    <header class="header">
        <div class="header-inner">
            <div class="container-fluid px-lg-5">

                <nav class="navbar navbar-expand-lg my-navbar">
                    <a href="index.php" class="navbar-brand ml-3">
                        <span class="logo-img"><img src="assets/img/logo.png"></span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle Navigation">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars" style="margin:5px 0px 0px 0px;"></i>
                        </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav m-auto">

                            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                            <li class="nav-item student "><a href="accommodation.php" class="nav-link">Rent Houses</a></li>
                            <li class="nav-item houseOwner"><a href="house_owner_dashboard.php" class="nav-link">Rent Houses</a></li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   Visa Process
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="usavi.php">USA</a>
                                    <a class="dropdown-item" href="canadavi.php">Canada</a>
                                    <a class="dropdown-item" href="ukvisa.php">UK</a>
                                </div>
                            </li>

                            <li class="nav-item student"><a href="colleges.php" class="nav-link">Colleges</a></li>
                            <li class="nav-item student"><a href="part_time_work.php" class="nav-link">Part Time Work</a></li>
                            <li class="nav-item shopOwner"><a href="ptw_dashboard.php" class="nav-link">Part Time Work</a></li>
                            <li class="nav-item visitor "><a href="forms/login-registration.php" class="nav-link">Login/Registration</a></li>

                        </ul>

                        <ul class="navbar-nav mr-0 action-menu">
                            
                            <li class="nav-item dropdown shopOwner" >
                                <a role="button" href="logout.php" style="text-decoration: none;color:white;">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                                </a>
                            </li>

                            <li class="nav-item dropdown houseOwner" >
                                <a role="button" href="logout.php" style="text-decoration: none;color:white;">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                                </a>
                            </li>

                            <li class="nav-item dropdown user">
                                <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    </svg>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item " href="student_profile.php">Profile</a>
                                    <a class="dropdown-item" href="logout.php">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
        </div>
    </header>

    <script src="assets/vendor/slick-master/slick/slick.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

    <script type="text/javascript">
    $(function() {
        var navbar = $('.header-inner');
        $(window).scroll(function() {
            if ($(window).scrollTop() <= 40) {
                navbar.removeClass('navbar-scroll');
            } else {
                navbar.addClass('navbar-scroll');
            }
        });
    });
    </script>

</body>

</html>