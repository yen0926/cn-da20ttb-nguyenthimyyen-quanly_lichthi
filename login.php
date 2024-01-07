<?php session_start();?>
<?php ob_start();?>
<?php include 'config/config.php'?>
<?php include 'config/Helper.php'?>
<?php include 'model/SQLQuery.php';?>
<?php include 'model/AuthDB.php';?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $teacherUser = AuthDB::LoginTeacher($_POST['email'], $_POST['password']);
        if (count($teacherUser) > 0) {
            $_SESSION['MaGV'] = $teacherUser[0]['MaGV'];
            $_SESSION['HoTenGV'] = $teacherUser[0]['HoTenGV'];
            $_SESSION['Email'] = $teacherUser[0]['Email'];
            $_SESSION['SdtGV'] = $teacherUser[0]['SdtGV'];
            $_SESSION['LoaiTaiKhoan'] = 'teacher';
            header('Location: ' . URL_ROOT . '/admin/exam-schedule/');
        }

        $adminUser = AuthDB::LoginAdmin($_POST['email'], $_POST['password']);
        if (count($adminUser) > 0) {
            $_SESSION['MaAD'] = $adminUser[0]['MaAD'];
            $_SESSION['TenAD'] = $adminUser[0]['TenAD'];
            $_SESSION['Email'] = $teacherUser[0]['Email'];
            $_SESSION['AnhDD'] = $adminUser[0]['AnhDD'];
            $_SESSION['LoaiTaiKhoan'] = 'admin';
            header('Location: ' . URL_ROOT . '/admin/dashboard/');
        }

        if (count($teacherUser) == 0 && count($adminUser) == 0) {
            $message = 'Tên đăng nhập hoặc mật khẩu không hợp lệ';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>Đăng nhập</title>
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
</head>

<body class="inner_page login">
    <div class="full_container">
        <div class="container">
            <div class="center verticle_center full_height">
                <div class="login_section">
                    <div class="logo_login">
                        <div class="center">
                            <img width="450" src="<?=URL_ROOT?>/assets/img/tvu_set.jpg" alt="#" />
                        </div>
                    </div>
                    <div class="login_form">
                        <?php if (isset($message)) {?>
                        <div class="alert alert-danger" role="alert"><?=$message?></div>
                        <?php }?>
                        <form method="POST">
                            <fieldset>
                                <div class="field">
                                    <label class="label_field">Email</label>
                                    <input type="email" name="email" placeholder="yourmail@gmail.com" />
                                </div>
                                <div class="field">
                                    <label class="label_field">Mật khẩu</label>
                                    <input type="password" name="password" placeholder="********" />
                                </div>
                                <div class="field">
                                    <label class="label_field hidden">hidden label</label>
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> Nhớ mật khẩu
                                    </label>
                                </div>
                                <div class="field margin_0">
                                    <label class="label_field hidden"></label>
                                    <button class="main_bt">Đăng nhập</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="<?=URL_ROOT?>/template/js/jquery.min.js"></script>
    <script src="<?=URL_ROOT?>/template/js/popper.min.js"></script>
    <script src="<?=URL_ROOT?>/template/js/bootstrap.min.js"></script>
    <!-- wow animation -->
    <script src="<?=URL_ROOT?>/template/js/animate.js"></script>
    <!-- select country -->
    <script src="<?=URL_ROOT?>/template/js/bootstrap-select.js"></script>
    <!-- nice scrollbar -->
    <script src="<?=URL_ROOT?>/template/js/perfect-scrollbar.min.js"></script>
    <script>
    var ps = new PerfectScrollbar('#sidebar');
    </script>
    <!-- custom js -->
    <script src="<?=URL_ROOT?>/template/js/custom.js"></script>
</body>

</html>

<?php ob_end_flush();?>