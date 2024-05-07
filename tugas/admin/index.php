<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Anda harus login terlebih dahulu') </script>";
    echo "<script>window.location.href='login.html'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include_once('included/meta.php') ?>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <!-- include topbar -->
        <?php include_once('included/header.php') ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->


                <!-- SidebarSearch Form -->
                <!-- Sidebar Menu -->
                <!-- include sidebar -->
                <?php include_once('included/sidebar.php') ?>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Website Kelola Rumah Sakit </h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Admin</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Info boxes -->
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Jumlah Pasien Bulanan di Rumah Sakit</h5>
                                    <div class="card-tools">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                                <i class="fas fa-wrench"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                <a href="#" class="dropdown-item">Action</a>
                                                <a href="#" class="dropdown-item">Another action</a>
                                                <a href="#" class="dropdown-item">Something else here</a>
                                                <a class="dropdown-divider"></a>
                                                <a href="#" class="dropdown-item">Separated link</a>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="text-center">
                                                <strong>1 Jan 2024 - 10 Mei 2024</strong>
                                            </p>

                                            <div class="chart">
                                                <!-- Sales Chart Canvas -->
                                                <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                                            </div>
                                            <!-- /.chart-responsive -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-4">
                                            <p class="text-center">
                                                <strong>Rata Rata Tingkatan Pasien</strong>
                                            </p>
                                            
                                            <div class="progress-group">
                                                <span class="progress-text">Sembuh Total</span>
                                                <span class="float-right"><b>99</b>/100</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-success" style="width: 99%"></div>
                                                </div>
                                            </div>

                                            
                                            <div class="progress-group">
                                                Pemulihan
                                                <span class="float-right"><b>80</b>/100</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-primary" style="width: 80%"></div>
                                                </div>
                                            </div>
                                            <!-- /.progress-group -->

                                            
                                            <!-- /.progress-group -->
                                            
                                            <!-- /.progress-group -->
                                            <div class="progress-group">
                                                Kritis
                                                <span class="float-right"><b>40</b>/100</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-warning" style="width: 40%"></div>
                                                </div>
                                            </div>
                                          
                                            <div class="progress-group">
                                                Kematian
                                                <span class="float-right"><b>10</b>/100</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-danger" style="width: 10%"></div>
                                                </div>
                                            </div>
                                            <!-- /.progress-group -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- ./card-body -->
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-sm-3 col-6">
                                            <div class="description-block border-right">
                                                <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 99%</span>
                                                <h5 class="description-header">335</h5>
                                                <span class="description-text">Kesembuhan Pasien</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-3 col-6">
                                            <div class="description-block border-right">
                                                <span class="description-percentage text-info"><i class="fas fa-caret-left"></i> 80%</span>
                                                <h5 class="description-header">245</h5>
                                                <span class="description-text">Pemulihan Pasien</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-3 col-6">
                                            <div class="description-block border-right">
                                                <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 40%</span>
                                                <h5 class="description-header">45</h5>
                                                <span class="description-text">Pasien Kritis</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-3 col-6">
                                            <div class="description-block">
                                                <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 10%</span>
                                                <h5 class="description-header">15</h5>
                                                <span class="description-text">Jumlah Kematian</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <div class="col-md-8">
                            <!-- MAP & BOX PANE -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Denah Rumah Sakit</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <div class="d-md-flex">
                                        <div class="p-1 flex-fill" style="overflow: hidden">
                                            <!-- Map will be created here -->
                                            <div id="world-map-markers" style="height: 325px; overflow: hidden">
                                                <div class="map"></div>
                                            </div>
                                        </div>
                                        <div class="card-pane-right bg-success pt-2 pb-2 pl-4 pr-4">
                                            <div class="description-block mb-4">
                                                <div class="sparkbar pad" data-color="#fff">90,70,90,70,75,80,70</div>
                                                <h5 class="description-header">8390</h5>
                                                <span class="description-text">Visits</span>
                                            </div>
                                            <!-- /.description-block -->
                                            <div class="description-block mb-4">
                                                <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                                                <h5 class="description-header">30%</h5>
                                                <span class="description-text">Referrals</span>
                                            </div>
                                            <!-- /.description-block -->
                                            <div class="description-block">
                                                <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                                                <h5 class="description-header">70%</h5>
                                                <span class="description-text">Organic</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div><!-- /.card-pane-right -->
                                    </div><!-- /.d-md-flex -->
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- DIRECT CHAT -->
                                    <div class="card direct-chat direct-chat-warning">
                                        <div class="card-header">
                                            <h3 class="card-title">Direct Chat</h3>

                                            <div class="card-tools">
                                                <span title="3 New Messages" class="badge badge-warning">3</span>
                                                
                                                <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                                                    <i class="fas fa-comments"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <!-- Conversations are loaded here -->
                                            <div class="direct-chat-messages">
                                                <!-- Message. Default to the left -->
                                                <div class="direct-chat-msg">
                                                    <div class="direct-chat-infos clearfix">
                                                        <span class="direct-chat-name float-left">Alexander Pierce</span>
                                                        <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                                    </div>
                                                    <!-- /.direct-chat-infos -->
                                                    <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                                                    <!-- /.direct-chat-img -->
                                                    <div class="direct-chat-text">
                                                        Terimakasih Karena telah membantu Menyembuhkan saya!
                                                    </div>
                                                    <!-- /.direct-chat-text -->
                                                </div>
                                                <!-- /.direct-chat-msg -->

                                                <!-- Message to the right -->
                                                <div class="direct-chat-msg right">
                                                    <div class="direct-chat-infos clearfix">
                                                        <span class="direct-chat-name float-right">Dr. Tegar Asayahanda</span>
                                                        <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                                    </div>
                                                    <!-- /.direct-chat-infos -->
                                                    <img class="direct-chat-img" src="dist/img/avatar5.png" alt="message user image">
                                                    <!-- /.direct-chat-img -->
                                                    <div class="direct-chat-text">
                                                    Kamu Pantas Mendapatkan yang Lebih Baik dari ini!
                                                    </div>
                                                    <!-- /.direct-chat-text -->
                                                </div>
                                                <!-- /.direct-chat-msg -->

                                                <!-- Message. Default to the left -->
                                                <div class="direct-chat-msg">
                                                    <div class="direct-chat-infos clearfix">
                                                        <span class="direct-chat-name float-left">Alexander Pierce</span>
                                                        <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                                                    </div>
                                                    <!-- /.direct-chat-infos -->
                                                    <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                                                    <!-- /.direct-chat-img -->
                                                    <div class="direct-chat-text">
                                                        Baiklah, lain kali saya akan kembali ke Rumah Sakit ini
                                                    </div>
                                                    <!-- /.direct-chat-text -->
                                                </div>
                                                <!-- /.direct-chat-msg -->

                                                <!-- Message to the right -->
                                                <div class="direct-chat-msg right">
                                                    <div class="direct-chat-infos clearfix">
                                                        <span class="direct-chat-name float-right">Dr. Tegar Asayahanda</span>
                                                        <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                                                    </div>
                                                    <!-- /.direct-chat-infos -->
                                                    <img class="direct-chat-img" src="dist/img/avatar5.png" alt="message user image">
                                                    <!-- /.direct-chat-img -->
                                                    <div class="direct-chat-text">
                                                        Senang bisa bertemu Anda lagi!
                                                    </div>
                                                    <!-- /.direct-chat-text -->
                                                </div>
                                                <!-- /.direct-chat-msg -->

                                            </div>
                                            <!--/.direct-chat-messages-->

                                            <!-- Contacts are loaded here -->
                                            <div class="direct-chat-contacts">
                                                <ul class="contacts-list">
                                                    <li>
                                                        <a href="#">
                                                            <img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Avatar">

                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                    Count Dracula
                                                                    <small class="contacts-list-date float-right">2/28/2015</small>
                                                                </span>
                                                                <span class="contacts-list-msg">How have you been? I was...</span>
                                                            </div>
                                                            <!-- /.contacts-list-info -->
                                                        </a>
                                                    </li>
                                                    <!-- End Contact Item -->
                                                    <li>
                                                        <a href="#">
                                                            <img class="contacts-list-img" src="dist/img/user7-128x128.jpg" alt="User Avatar">

                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                    Sarah Doe
                                                                    <small class="contacts-list-date float-right">2/23/2015</small>
                                                                </span>
                                                                <span class="contacts-list-msg">I will be waiting for...</span>
                                                            </div>
                                                            <!-- /.contacts-list-info -->
                                                        </a>
                                                    </li>
                                                    <!-- End Contact Item -->
                                                    <li>
                                                        <a href="#">
                                                            <img class="contacts-list-img" src="dist/img/user3-128x128.jpg" alt="User Avatar">

                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                    Nadia Jolie
                                                                    <small class="contacts-list-date float-right">2/20/2015</small>
                                                                </span>
                                                                <span class="contacts-list-msg">I'll call you back at...</span>
                                                            </div>
                                                            <!-- /.contacts-list-info -->
                                                        </a>
                                                    </li>
                                                    <!-- End Contact Item -->
                                                    <li>
                                                        <a href="#">
                                                            <img class="contacts-list-img" src="dist/img/user5-128x128.jpg" alt="User Avatar">

                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                    Nora S. Vans
                                                                    <small class="contacts-list-date float-right">2/10/2015</small>
                                                                </span>
                                                                <span class="contacts-list-msg">Where is your new...</span>
                                                            </div>
                                                            <!-- /.contacts-list-info -->
                                                        </a>
                                                    </li>
                                                    <!-- End Contact Item -->
                                                    <li>
                                                        <a href="#">
                                                            <img class="contacts-list-img" src="dist/img/user6-128x128.jpg" alt="User Avatar">

                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                    John K.
                                                                    <small class="contacts-list-date float-right">1/27/2015</small>
                                                                </span>
                                                                <span class="contacts-list-msg">Can I take a look at...</span>
                                                            </div>
                                                            <!-- /.contacts-list-info -->
                                                        </a>
                                                    </li>
                                                    <!-- End Contact Item -->
                                                    <li>
                                                        <a href="#">
                                                            <img class="contacts-list-img" src="dist/img/user8-128x128.jpg" alt="User Avatar">

                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                    Kenneth M.
                                                                    <small class="contacts-list-date float-right">1/4/2015</small>
                                                                </span>
                                                                <span class="contacts-list-msg">Never mind I found...</span>
                                                            </div>
                                                            <!-- /.contacts-list-info -->
                                                        </a>
                                                    </li>
                                                    <!-- End Contact Item -->
                                                </ul>
                                                <!-- /.contacts-list -->
                                            </div>
                                            <!-- /.direct-chat-pane -->
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            <form action="#" method="post">
                                                <div class="input-group">
                                                    <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                                    <span class="input-group-append">
                                                        <button type="button" class="btn btn-warning">Send</button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.card-footer-->
                                    </div>
                                    <!--/.direct-chat -->
                                </div>
                                <!-- /.col -->

                                <div class="col-md-6">
                                    <!-- USERS LIST -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Latest Pasien</h3>

                                            <div class="card-tools">
                                                <span class="badge badge-danger">8 New Pasien</span>
                                               
                                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body p-0">
                                            <ul class="users-list clearfix">
                                                <li>
                                                    <img src="dist/img/user1-128x128.jpg" alt="User Image">
                                                    <a class="users-list-name" href="#">Alexander Pierce</a>
                                                    <span class="users-list-date">Today</span>
                                                </li>
                                                <li>
                                                    <img src="dist/img/user8-128x128.jpg" alt="User Image">
                                                    <a class="users-list-name" href="#">Norman</a>
                                                    <span class="users-list-date">Yesterday</span>
                                                </li>
                                                <li>
                                                    <img src="dist/img/user7-128x128.jpg" alt="User Image">
                                                    <a class="users-list-name" href="#">Jane</a>
                                                    <span class="users-list-date">12 Jan</span>
                                                </li>
                                                <li>
                                                    <img src="dist/img/user6-128x128.jpg" alt="User Image">
                                                    <a class="users-list-name" href="#">John</a>
                                                    <span class="users-list-date">12 Jan</span>
                                                </li>
                                                <li>
                                                    <img src="dist/img/user2-160x160.jpg" alt="User Image">
                                                    <a class="users-list-name" href="#">Alexander</a>
                                                    <span class="users-list-date">13 Jan</span>
                                                </li>
                                                <li>
                                                    <img src="dist/img/user5-128x128.jpg" alt="User Image">
                                                    <a class="users-list-name" href="#">Sarah</a>
                                                    <span class="users-list-date">14 Jan</span>
                                                </li>
                                                <li>
                                                    <img src="dist/img/user4-128x128.jpg" alt="User Image">
                                                    <a class="users-list-name" href="#">Nora</a>
                                                    <span class="users-list-date">15 Jan</span>
                                                </li>
                                                <li>
                                                    <img src="dist/img/user3-128x128.jpg" alt="User Image">
                                                    <a class="users-list-name" href="#">Nadia</a>
                                                    <span class="users-list-date">15 Jan</span>
                                                </li>
                                            </ul>
                                            <!-- /.users-list -->
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer text-center">
                                            <a href="javascript:">View All Users</a>
                                        </div>
                                        <!-- /.card-footer -->
                                    </div>
                                    <!--/.card -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- TABLE: LATEST ORDERS -->
                           
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->

                        <div class="col-md-4">
                            <!-- Info Boxes Style 2 -->
                            <div class="info-box mb-3 bg-warning">
                                <span class="info-box-icon"><i class="fas fa-users"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Pasien</span>
                                    <span class="info-box-number">350</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                            <div class="info-box mb-3 bg-success">
                                <span class="info-box-icon"><i class="fas fa-user-md"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Dokter</span>
                                    <span class="info-box-number">99</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                            <div class="info-box mb-3 bg-info">
                                <span class="info-box-icon"><i class="fas fa-hospital"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Unit Kerja</span>
                                    <span class="info-box-number">10</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                            <div class="info-box mb-3 bg-danger">
                                <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Feedback</span>
                                    <span class="info-box-number">3,921</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Penggunaan Browser</h3>

                                    <div class="card-tools">
                                        
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="chart-responsive">
                                                <canvas id="pieChart" height="150"></canvas>
                                            </div>
                                            <!-- ./chart-responsive -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-4">
                                            <ul class="chart-legend clearfix">
                                                <li><i class="far fa-circle text-danger"></i> Chrome</li>
                                                <li><i class="far fa-circle text-success"></i> IE</li>
                                                <li><i class="far fa-circle text-warning"></i> FireFox</li>
                                                <li><i class="far fa-circle text-info"></i> Safari</li>
                                                <li><i class="far fa-circle text-primary"></i> Opera</li>
                                                <li><i class="far fa-circle text-secondary"></i> Navigator</li>
                                            </ul>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer p-0">
                                    <ul class="nav nav-pills flex-column">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                United States of America
                                                <span class="float-right text-danger">
                                                    <i class="fas fa-arrow-down text-sm"></i>
                                                    12%</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                India
                                                <span class="float-right text-success">
                                                    <i class="fas fa-arrow-up text-sm"></i> 4%
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                China
                                                <span class="float-right text-warning">
                                                    <i class="fas fa-arrow-left text-sm"></i> 0%
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.footer -->
                            </div>
                            <!-- /.card -->

                            <!-- PRODUCT LIST -->
                         
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <?php include_once('included/footer.php') ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js"></script>
</body>

</html>