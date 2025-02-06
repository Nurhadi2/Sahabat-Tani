<!DOCTYPE html>
<html lang="en">

<?php

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
// error_reporting (E_ALL & ~E_NOTICE);

session_start();

date_default_timezone_set('Asia/Makassar');

include('../inc/connect.php');

include('../inc/function.php');

$tanggal = date("Y-m-d");


//variabel target di sini adalah penentu halaman

$target  = $_GET['target'];
// var_dump($target);

if (isset($_SESSION['username'])){
?>  


<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="<?= $base_url ?>/admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= $base_url ?>/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= $base_url ?>/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= $base_url ?>/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= $base_url ?>/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= $base_url ?>/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= $base_url ?>/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?= $base_url ?>/admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= $base_url ?>/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= $base_url ?>/admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= $base_url ?>/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= $base_url ?>/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- FullCalendar -->
    <link href='<?= $base_url ?>/admin/vendor/fullcalendar-3.10.0/fullcalendar.css' rel='stylesheet' media="all" />

    <!-- Main CSS-->
    <link href="<?= $base_url ?>/admin/css/theme.css" rel="stylesheet" media="all">

    <script src="https://cdn.tiny.cloud/1/pvdklc4f9gxskclgthaw7kgth8i0u94ta91q2hd58zeuheb4/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });
</script>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>

                        <li>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Data</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li class="<?php if($target == 'user'){echo 'active';} ?>">
                                    <a href="<?= $base_url?>/admin/user">
                                    <i class="fas fa-users"></i>user</a>
                                </li>

                                <li class="<?php if($target == 'petani'){echo 'active';} ?>">
                                    <a href="<?= $base_url?>/admin/petani">
                                    <i class="fas fa-users"></i>Petani</a>
                                </li>


                                <li class="<?php if($target == 'category'){echo 'active';} ?>">
                                    <a href="<?= $base_url?>/admin/category">
                                    <i class="fas fa-users"></i>Category</a>
                                </li>

                                <li class="<?php if($target == 'berita'){echo 'active';} ?>">
                                    <a href="<?= $base_url?>/admin/berita">
                                    <i class="fas fa-users"></i>Berita</a>
                                </li>
                            </ul>
                        </li>

                        <li class="<?php if($target == 'desa'){echo 'active';} ?>"> 
                            <a href="<?= $base_url?>/admin/desa">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <h2>Sahabat Tani</h2>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub <?php if($target=='' or $target=='dashboard' ){echo 'active';}?>">
                            <a class="js-arrow" href="<?= $base_url?>/admin">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        
                        <li>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Input Data</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">

                                <li class="<?php if($target == 'input-petani'){echo 'active';} ?>">
                                    <a href="<?= $base_url?>/admin/input-petani">
                                    <i class="fas fa-users"></i>Petani</a>
                                </li>

                                <li class="<?php if($target == 'input-berita'){echo 'active';} ?>">
                                    <a href="<?= $base_url?>/admin/input-berita">
                                    <i class="fas fa-users"></i>Berita</a>
                                </li>

                                <li class="<?php if($target == 'input-category'){echo 'active';} ?>">
                                    <a href="<?= $base_url?>/admin/input-category">
                                    <i class="fas fa-users"></i>Category</a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Data</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li class="<?php if($target == 'user'){echo 'active';} ?>">
                                    <a href="<?= $base_url?>/admin/user">
                                    <i class="fas fa-users"></i>user</a>
                                </li>

                                <li class="<?php if($target == 'petani'){echo 'active';} ?>">
                                    <a href="<?= $base_url?>/admin/petani">
                                    <i class="fas fa-users"></i>Petani</a>
                                </li>

                                <li class="<?php if($target == 'berita'){echo 'active';} ?>">
                                    <a href="<?= $base_url?>/admin/berita">
                                    <i class="fas fa-users"></i>Berita</a>
                                </li>

                                <li class="<?php if($target == 'category'){echo 'active';} ?>">
                                    <a href="<?= $base_url?>/admin/category">
                                    <i class="fas fa-users"></i>Category</a>
                                </li>
                            </ul>
                        </li>


                        <li class="<?php if($target == 'desa'){echo 'active';} ?>"> 
                            <a href="<?= $base_url?>/admin/desa">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                            </form>
                            <div class="header-button">
                                    <div class="noti-wrap">
                                            <div class="noti__item js-item-menu">
                                                <i class="zmdi zmdi-comment-more"></i>
                                            </div>

                                            <div class="noti__item js-item-menu">
                                                <i class="zmdi zmdi-email"></i>
                                            </div>

                                            <div class="noti__item js-item-menu">
                                                <i class="zmdi zmdi-notifications"></i>
                                                <div class="notifi-dropdown js-dropdown">
                                            </div>
                                    </div>
                                    

                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="user" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?= $_SESSION['username'] ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="user" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?= $_SESSION['username'] ?></a>
                                                    </h5>
                                                    <span class="email"><?= $_SESSION['email'] ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?= $base_url ?>/login/logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                <?php

                if($target=='dashboard' or $target==''){
                    include('dashboard/dashboard.php'); 
                }

                //data
                else if($target=='user'){
                    include('data/table user.php'); 
                }

                else if($target=='petani'){
                    include('data/table petani.php'); 
                }

                else if($target=='category'){
                    include('data/tabel_category.php'); 
                }

                else if($target=='berita'){
                    include('data/berita.php'); 
                }

                else if($target=='desa'){
                    include('data/calendar.php'); 
                }

                //Input data
                else if($target=='input-dosen'){
                    include('input/input-dosen.php'); 
                }
                else if($target=='input-mahasiswa'){
                    include('input/input-mahasiswa.php'); 
                }
                else if($target=='input-petani'){
                    include('data/tambah_petani.php'); 
                }
                else if($target=='edit-petani'){
                    include('data/edit_petani.php'); 
                }
                else if($target=='edit-petani'){
                    include('data/edit_petani.php'); 
                }
                else if($target=='input-category'){
                    include('data/tambah_category.php'); 
                }
                else if($target=='edit-category'){
                    include('data/edit_category.php'); 
                }
                else if($target=='input-berita'){
                    include('data/tambah_berita.php'); 
                }
                else if($target=='edit-berita'){
                    include('data/edit_berita.php'); 
                }

}
else{echo'<script language="javascript"> location.href ="'.$base_url.'/login/login.php"; </script>';}
?>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?= $base_url ?>/admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?= $base_url ?>/admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?= $base_url ?>/admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?= $base_url ?>/admin/vendor/slick/slick.min.js">
    </script>
    <script src="<?= $base_url ?>/admin/vendor/wow/wow.min.js"></script>
    <script src="<?= $base_url ?>/admin/vendor/animsition/animsition.min.js"></script>
    <script src="<?= $base_url ?>/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?= $base_url ?>/admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?= $base_url ?>/admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?= $base_url ?>/admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?= $base_url ?>/admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= $base_url ?>/admin/vendor/select2/select2.min.js">
    </script>

     <!-- full calendar requires moment along jquery which is included above -->
    <script src="<?= $base_url ?>/admin/vendor/fullcalendar-3.10.0/lib/moment.min.js"></script>
    <script src="<?= $base_url ?>/admin/vendor/fullcalendar-3.10.0/fullcalendar.js"></script>
    <!-- Main JS-->
    <script src="<?= $base_url ?>/admin/js/main.js"></script>

    

    <script type="text/javascript">
        $(function() {
        // for now, there is something adding a click handler to 'a'
        var tues = moment().day(2).hour(19);

        // build trival night events for example data
        var events = [
            {
            title: "Special Conference",
            start: moment().format('YYYY-MM-DD'),
            url: '#'
            },
            {
            title: "Doctor Appt",
            start: moment().hour(9).add(2, 'days').toISOString(),
            url: '#'
            }

        ];

        var trivia_nights = []

        for(var i = 1; i <= 4; i++) {
            var n = tues.clone().add(i, 'weeks');
            console.log("isoString: " + n.toISOString());
            trivia_nights.push({
            title: 'Trival Night @ Pub XYZ',
            start: n.toISOString(),
            allDay: false,
            url: '#'
            });
        }

        // setup a few events
        $('#calendar').fullCalendar({
            header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listWeek'
            },
            events: events.concat(trivia_nights)
        });
        });
    </script>

<script>
  var loadFile = function(event) {
    var output = document.getElementById('foto_barang');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
</body>

</html>
<!-- end document-->
