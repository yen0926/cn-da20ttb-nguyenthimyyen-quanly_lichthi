<?php include '../header.php'?>
<?php include '../../model/AuthDB.php'?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_SESSION['LoaiTaiKhoan'] == 'admin') {
            $message = AuthDB::ChangePasswordAdmin($_SESSION['MaAD'], $_POST['old-pass'], $_POST['new-pass'], $_POST['re-new-pass']);
        } else if ($_SESSION['LoaiTaiKhoan'] == 'teacher') {
            $message = AuthDB::ChangePasswordTeacher($_SESSION['MaGV'], $_POST['old-pass'], $_POST['new-pass'], $_POST['re-new-pass']);
        }
    }
?>
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Đổi mật khẩu</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <?php if (isset($message) && $message === true) {?>
            <div class="col-md-12">
                <div class="alert alert-success" role="alert">
                    Đổi mật khẩu thành công
                </div>
            </div>
            <?php } else if (isset($message)) {?>
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    <?=$message?>
                </div>
            </div>
            <?php }?>

            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="table_section padding_infor_info">
                        <form class="row" method="POST">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" value="<?=$_SESSION['Email']?>" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Mật khẩu cũ</label>
                                <input type="password" class="form-control" name="old-pass">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Mật khẩu mới</label>
                                <input type="password" class="form-control" name="new-pass">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nhập mật khẩu mới</label>
                                <input type="password" class="form-control" name="re-new-pass">
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary">
                                    <i class='fa fa-save'></i> Đổi mật khẩu
                                </button>
                                <a href="<?=URL_ROOT?>/admin/reset-password/" class="btn btn-danger">
                                    <i class='fa fa-ban'></i> Huỷ bỏ
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../footer.php'?>