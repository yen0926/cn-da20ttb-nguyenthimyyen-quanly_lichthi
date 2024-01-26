<?php include '../header.php'?>
<?php include '../../model/AdminAccDB.php'?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Add images
        $imagePath = '';
        if (isset($_FILES['AnhDD'])) {
            $imagePath = '/uploads/' . $_FILES['AnhDD']['name'];
            move_uploaded_file($_FILES['AnhDD']['tmp_name'], '../../' . $imagePath);
        }

        AdminAccDB::AddAdmin($_POST['MaAD'], $_POST['TenAD'], $_POST['Email'], $imagePath);
        header('Location: ' . URL_ROOT . '/admin/account-admin/');
    }
?>
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Thêm quản trị viên</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="table_section padding_infor_info">
                        <form class="row" method="POST" enctype="multipart/form-data">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Mã admin</label>
                                <input type="text" class="form-control" name="MaAD">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Tên admin</label>
                                <input type="text" class="form-control" name="TenAD">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="Email">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Ảnh đại diện</label>
                                <input type="file" class="form-control" name="AnhDD">
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary">
                                    <i class='fa fa-save'></i> Lưu
                                </button>
                                <a href="<?=URL_ROOT?>/admin/account-admin/" class="btn btn-danger">
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