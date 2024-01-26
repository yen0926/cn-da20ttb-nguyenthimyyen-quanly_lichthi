<?php session_start();?>
<?php ob_start();?>
<?php include '../../config/config.php'?>
<?php include '../../config/Helper.php'?>
<?php include '../../config/SendMail.php'?>
<?php include '../../model/SQLQuery.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- site metas -->
    <title>Quản trị viên</title>
    <!-- site icon -->
    <link rel="icon" href="<?=URL_ROOT?>/assets/img/favicon.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?=URL_ROOT?>/template/css/bootstrap.min.css" />
    <!-- site css -->
    <link rel="stylesheet" href="<?=URL_ROOT?>/template/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="<?=URL_ROOT?>/template/css/responsive.css" />
    <!-- color css -->
    <link rel="stylesheet" href="<?=URL_ROOT?>/template/css/colors.css" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="<?=URL_ROOT?>/template/css/bootstrap-select.css" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="<?=URL_ROOT?>/template/css/perfect-scrollbar.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="<?=URL_ROOT?>/template/css/custom.css" />
    <!-- calendar file css -->
    <link rel="stylesheet" href="<?=URL_ROOT?>/template/js/semantic.min.css" />
    <!-- fancy box js -->
    <link rel="stylesheet" href="<?=URL_ROOT?>/template/css/jquery.fancybox.css" />
    <style>
    b,
    strong {
        font-weight: bold;
    }
    </style>
</head>

<body class="inner_page tables_page">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar_blog_1">
                    <div class="sidebar-header">
                        <div class="logo_section">
                            <a href="/">
                                <?php if ($_SESSION['LoaiTaiKhoan'] == 'admin') {?>
                                <img class="logo_icon img-responsive" src="<?=URL_ROOT . $_SESSION['AnhDD']?>" alt="#" />
                                <?php } else if ($_SESSION['LoaiTaiKhoan'] == 'teacher') {?>
                                <img class="logo_icon img-responsive" src="<?=URL_ROOT?>/assets/img/tvu.png" alt="#" />
                                <?php }?>
                            </a>
                        </div>
                    </div>
                    <div class="sidebar_user_info">
                        <div class="icon_setting"></div>
                        <div class="user_profle_side">
                            <div class="user_img">
                                <?php if ($_SESSION['LoaiTaiKhoan'] == 'admin') {?>
                                <img class="img-responsive" src="<?=URL_ROOT . $_SESSION['AnhDD']?>" alt="#" />
                                <?php } else if ($_SESSION['LoaiTaiKhoan'] == 'teacher') {?>
                                <img class="img-responsive" src="<?=URL_ROOT?>/assets/img/tvu.png" alt="#" />
                                <?php }?>
                            </div>
                            <div class="user_info">
                                <?php if ($_SESSION['LoaiTaiKhoan'] == 'admin') {?>
                                <h6><?=$_SESSION['TenAD']?></h6>
                                <?php } else if ($_SESSION['LoaiTaiKhoan'] == 'teacher') {?>
                                <h6><?=$_SESSION['HoTenGV']?></h6>
                                <?php }?>

                                <p><span class="online_animation"></span> Online</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar_blog_2">
                    <ul class="list-unstyled components">
                        <li class="active">
                            <a href="<?=URL_ROOT?>/admin/dashboard/">
                                <i class="fa fa-dashboard yellow_color"></i>
                                <span>Tổng quan</span>
                            </a>
                        </li>
                        <?php if ($_SESSION['LoaiTaiKhoan'] == 'admin') {?>
                        <li>
                            <a href="<?=URL_ROOT?>/admin/department/">
                                <i class="fa fa-building orange_color"></i>
                                <span>Bộ môn</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?=URL_ROOT?>/admin/teacher/">
                                <i class="fa fa-user-md purple_color"></i>
                                <span>Giảng viên</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?=URL_ROOT?>/admin/classes/">
                                <i class="fa fa-th purple_color2"></i>
                                <span>Lớp</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?=URL_ROOT?>/admin/subject/">
                                <i class="fa fa-list-alt blue2_color"></i>
                                <span>Môn học</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?=URL_ROOT?>/admin/academic-year/">
                                <i class="fa fa-sort-numeric-asc blue1_color"></i>
                                <span>Năm học</span>
                            </a>
                        </li>
                        <?php }?>
                        <li>
                            <a href="<?=URL_ROOT?>/admin/exam-schedule/">
                                <i class="fa fa-calendar red_color"></i>
                                <span>Lịch thi</span>
                            </a>
                        </li>
                        <?php if ($_SESSION['LoaiTaiKhoan'] == 'admin') {?>
                        <li>
                            <a href="<?=URL_ROOT?>/admin/account-admin/">
                                <i class="fa fa-user-secret green_color"></i>
                                <span>Tài khoản quản trị</span>
                            </a>
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </nav>
            <!-- end sidebar -->

            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="full">
                            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                            <div class="right_topbar">
                                <div class="icon_info">
                                    <ul class="user_profile_dd">
                                        <li>
                                            <a class="dropdown-toggle" data-toggle="dropdown">
                                                <?php if ($_SESSION['LoaiTaiKhoan'] == 'admin') {?>
                                                <img class="img-responsive rounded-circle" src="<?=URL_ROOT . $_SESSION['AnhDD']?>" alt="#" />
                                                <span class="name_user"><?=$_SESSION['TenAD']?></span>
                                                <?php } else if ($_SESSION['LoaiTaiKhoan'] == 'teacher') {?>
                                                <img class="img-responsive rounded-circle" src="<?=URL_ROOT?>/assets/img/tvu.png" alt="#" />
                                                <span class="name_user"><?=$_SESSION['HoTenGV']?></span>
                                                <?php }?>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="<?=URL_ROOT?>/admin/reset-password/">Đổi mật khẩu</a>
                                                <a class="dropdown-item" href="<?=URL_ROOT?>/login.php">
                                                    Đăng xuất
                                                    <i class="fa fa-sign-out"></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>