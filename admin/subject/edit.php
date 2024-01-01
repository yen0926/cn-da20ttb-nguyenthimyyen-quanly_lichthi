<?php include '../header.php'?>
<?php include '../../model/SubjectDB.php'?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        SubjectDB::UpdateSubject($_POST['MaMH'], $_POST['TenMH']);
        header('Location: ' . URL_ROOT . '/admin/subject/');
    }
    $subject = SubjectDB::GetDataByID($_GET['id']);
?>
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Chỉnh sửa môn học</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="table_section padding_infor_info">
                        <form class="row" method="POST">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Mã môn học</label>
                                <input type="text" class="form-control" name="MaMH" value="<?=$subject['MaMH']?>" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Tên môn học</label>
                                <input type="text" class="form-control" name="TenMH" value="<?=$subject['TenMH']?>">
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary">
                                    <i class='fa fa-save'></i> Lưu
                                </button>
                                <a href="<?=URL_ROOT?>/admin/subject/" class="btn btn-danger">
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