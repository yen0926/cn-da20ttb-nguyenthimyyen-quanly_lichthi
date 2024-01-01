<?php session_start();?>
<?php ob_start();?>
<?php include '../../config/config.php'?>
<?php include '../../config/Helper.php'?>
<?php include '../../model/SQLQuery.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Quản trị viên</title>
    <!-- site icon -->
    <link rel="icon" href="images/fevicon.png" type="image/png" />
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
                                <img class="logo_icon img-responsive" src="<?=URL_ROOT?>/template/images/logo/logo_icon.png" alt="#" />
                            </a>
                        </div>
                    </div>
                    <div class="sidebar_user_info">
                        <div class="icon_setting"></div>
                        <div class="user_profle_side">
                            <div class="user_img">
                                <img class="img-responsive" src="<?=URL_ROOT?>/template/images/layout_img/user_img.jpg" alt="#" />
                            </div>
                            <div class="user_info">
                                <h6>John David</h6>
                                <p><span class="online_animation"></span> Online</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar_blog_2">
                    <ul class="list-unstyled components">
                        <li class="active">
                            <a href="<?=URL_ROOT?>/admin/dashboard/" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <i class="fa fa-dashboard yellow_color"></i>
                                <span>Tổng quan</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?=URL_ROOT?>/admin/department/">
                                <i class="fa fa-clock-o orange_color"></i>
                                <span>Bộ môn</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?=URL_ROOT?>/admin/teacher/">
                                <i class="fa fa-clock-o orange_color"></i>
                                <span>Giảng viên</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?=URL_ROOT?>/admin/classes/">
                                <i class="fa fa-clock-o orange_color"></i>
                                <span>Lớp</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?=URL_ROOT?>/admin/academic-year/">
                                <i class="fa fa-clock-o orange_color"></i>
                                <span>Năm học</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?=URL_ROOT?>/admin/subject/">
                                <i class="fa fa-clock-o orange_color"></i>
                                <span>Môn học</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?=URL_ROOT?>/admin/semester/">
                                <i class="fa fa-clock-o orange_color"></i>
                                <span>Học kỳ</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?=URL_ROOT?>/admin/exam-schedule/">
                                <i class="fa fa-clock-o orange_color"></i>
                                <span>Lịch thi</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?=URL_ROOT?>/auth/logout.php">
                                <i class="fa fa-clock-o orange_color"></i>
                                <span>Đăng xuất</span>
                            </a>
                        </li>
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
                                                <img class="img-responsive rounded-circle" src="<?=URL_ROOT?>/template/images/layout_img/user_img.jpg" alt="#" />
                                                <span class="name_user">John David</span>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="profile.html">Thông tin cá nhân</a>
                                                <a class="dropdown-item" href="#">
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