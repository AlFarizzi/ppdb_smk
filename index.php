<?php 
session_start();
if (isset($_SESSION['login_user'])) {
    header("Location:user/layouts/index.php");
}

if (isset($_SESSION['login_admin'])) {
    header("Location:admin/layouts/index.php");
}

require 'function.php';

if (isset($_POST['daftar'])) {
// var_dump($_POST);
   if (register($_POST) > 0) {
       echo "<script>
                alert('Kamu Berhasil Registrasi');
            </script>";
   }
}

if (isset($_POST['login'])) {
    if (login($_POST) == "user_login") {
        header("Location:user/layouts/index.php");
    }

    elseif(login($_POST) == "admin_login") {
        header("Location:admin/layouts/index.php");
    }

    else {
        echo "<script>
            alert('Username / Password Kamu Salah');
        </script>";
    }
    
}


?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edumark</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets2/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets2/css/magnific-popup.css">
    <link rel="stylesheet" href="assets2/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets2/css/themify-icons.css">
    <link rel="stylesheet" href="assets2/css/nice-select.css">
    <link rel="stylesheet" href="assets2/css/flaticon.css">
    <link rel="stylesheet" href="assets2/css/gijgo.css">
    <link rel="stylesheet" href="assets2/css/animate.css">
    <link rel="stylesheet" href="assets2/css/slicknav.css">
    <link rel="stylesheet" href="assets2/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="assets2/img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.html">home</a></li>
                                            
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-center">
                                <a href="#test-form" class="login popup-with-form">
                                    <i class="flaticon-user"></i>
                                    <span>log in</span>
                                </a>
                                
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area ">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="illastrator_png">
                            <img src="assets2/img/banner/edu_ilastration.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_info">
                            <h3>Pendaftaran<br>
                                SMKN 2 <br>
                                Guguak</h3>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide" method="post" action="">
        <div class="popup_box mx-auto d-block">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img src="assets2/img/form-logo.png" alt="">
                    </a>
                </div>
                <h3 class="text-center" >Masuk Untuk Mendaftar</h3>
                <form action="" method="post"></form>
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <input autocomplete="off" type="email" placeholder="Enter Email" name="email">
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <input autocomplete="off" type="password" placeholder="Password" name="password">
                            </div>
                            <div class="col-xl-12">
                                <button type="submit" name="login" class="boxed_btn_orange">Sign in</button>
                            </div>
                        </div>
                    </form>
              
                <p class="text-center doen_have_acc"><a class="dont-hav-acc" href="#test-form2">Belum Punya Akun PPDB? Ayo Daftar !!</a>
                </p>
            </div>
        </div>
    <!-- form itself end -->

    <!-- form itself end-->
    <form id="test-form2" class="white-popup-block mfp-hide" action="" method="post">
        <div class="popup_box mx-auto d-block">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img src="assets2/img/form-logo.png" alt="">
                    </a>
                </div>
                <h3 class="text-center">Daftar Akun PPDB</h3>
                    <div class="row">
                            <div class="col-md-6">
                                <input autocomplete="off" type="text" placeholder="Masukan Nama" name="nama">
                            </div>
                            <div class="col-md-6">
                                <input autocomplete="off" type="text" placeholder="Masukan NISN" name="nisn">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input autocomplete="off" type="text" placeholder="Masukan Username" name="username">
                            </div>      
                            <div class="col-md-6">
                                <input autocomplete="off" type="email" placeholder="Masukan email" name="email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input autocomplete="off" type="password" placeholder="Password" name="password">
                            </div>
                            <div class="col-md-6">
                                <input autocomplete="off" type="Password" placeholder="Confirm password" name="password_confirmation">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed_btn_orange" name="daftar">Daftar</button>
                        </div>
                    </div>
           
            </div>
        </div>
    </form>
    <!-- form itself end -->


    <!-- JS here -->
    <script src="assets2/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="assets2/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets2/js/popper.min.js"></script>
    <script src="assets2/js/bootstrap.min.js"></script>
    <script src="assets2/js/owl.carousel.min.js"></script>
    <script src="assets2/js/isotope.pkgd.min.js"></script>
    <script src="assets2/js/ajax-form.js"></script>
    <script src="assets2/js/waypoints.min.js"></script>
    <script src="assets2/js/jquery.counterup.min.js"></script>
    <script src="assets2/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets2/js/scrollIt.js"></script>
    <script src="assets2/js/jquery.scrollUp.min.js"></script>
    <script src="assets2/js/wow.min.js"></script>
    <script src="assets2/js/nice-select.min.js"></script>
    <script src="assets2/js/jquery.slicknav.min.js"></script>
    <script src="assets2/js/jquery.magnific-popup.min.js"></script>
    <script src="assets2/js/plugins.js"></script>
    <script src="assets2/js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="assets2/js/contact.js"></script>
    <script src="assets2/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets2/js/jquery.form.js"></script>
    <script src="assets2/js/jquery.validate.min.js"></script>
    <script src="assets2/js/mail-script.js"></script>

    <script src="assets2/js/main.js"></script>
</body>