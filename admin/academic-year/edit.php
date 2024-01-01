<?php include '../header.php'?>
<?php include '../../model/AcademicYearDB.php'?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        AcademicYearDB::UpdateAcademicYear($_POST['MaNH'], $_POST['TenNH'], $_POST['TGBD'], $_POST['TGKT']);
        header('Location: ' . URL_ROOT . '/admin/academic-year/');
    }
    $academic = AcademicYearDB::GetDataByID($_GET['id']);
?>
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Chỉnh sửa năm học</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="table_section padding_infor_info">
                        <form class="row" method="POST">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Mã năm học</label>
                                <input type="text" class="form-control" name="MaNH" value="<?=$academic['MaNH']?>" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Tên năm học</label>
                                <input type="text" class="form-control" name="TenNH" value="<?=$academic['TenNH']?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Thời gian bắt đầu</label>
                                <input type="date" class="form-control" name="TGBD" value="<?=$academic['TGBD']?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Thời gian kết thúc</label>
                                <input type="date" class="form-control" name="TGKT" value="<?=$academic['TGKT']?>">
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary">
                                    <i class='fa fa-save'></i> Lưu
                                </button>
                                <a href="<?=URL_ROOT?>/admin/academic-year/" class="btn btn-danger">
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