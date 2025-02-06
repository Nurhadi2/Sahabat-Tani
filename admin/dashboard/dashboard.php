<?php
include ('../inc/connect.php');
$sql_total_user = 'SELECT count(id_user) FROM table_user';
$total_user = mysqli_fetch_row(mysqli_query($connect, $sql_total_user));
$sql_total_category = 'SELECT count(id_category) FROM table_category';
$total_category = mysqli_fetch_row(mysqli_query($connect, $sql_total_category));
$sql_total_petani = 'SELECT count(id_petani) FROM tabel_petani';
$total_petani = mysqli_fetch_row(mysqli_query($connect, $sql_total_petani));
?>

<div class="container-fluid">
    <div class="row m-t-25">
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c1">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                        <div class="text">
                            <span>user</span>
                            <h2><?= $total_user[0]; ?></h2>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <canvas id="widgetChart1"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c2">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>
                        <div class="text">
                            <span>jumlah produk</span>
                            <h2><?= $total_category[0]; ?></h2>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <canvas id="widgetChart2"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c3">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-calendar-note"></i>
                        </div>
                        <div class="text">
                            <span>jumlah petani</span>
                            <h2><?= $total_petani[0]; ?></h2>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <canvas id="widgetChart3"></canvas>
                    </div>
                </div>
            </div>
        </div>
</div>