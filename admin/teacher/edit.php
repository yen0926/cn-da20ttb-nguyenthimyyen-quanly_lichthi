<?php include '../header.php'?>
<?php include '../../model/DepartmentDB.php'?>
<?php include '../../model/TeacherDB.php'?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        TeacherDB::UpdateTeacher($_POST['MaGV'], $_POST['HoTenGV'], $_POST['Email'], $_POST['SdtGV'], $_POST['MaBM']);
        header('Location: ' . URL_ROOT . '/admin/teacher/');
    }
    $departmentData = DepartmentDB::GetList();
    $teacher = TeacherDB::GetDataByID($_GET['id']);
?>
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Chỉnh sửa giáo viên</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="table_section padding_infor_info">
                        <form class="row" method="POST">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Mã giảng viên</label>
                                <input type="text" class="form-control" name="MaGV" value="<?=$teacher['MaGV']?>" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Họ tên giảng viên</label>
                                <input type="text" class="form-control" name="HoTenGV" value="<?=$teacher['HoTenGV']?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="Email" value="<?=$teacher['Email']?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Số điện thoại</label>
                                <input type="number" class="form-control" name="SdtGV" value="<?=$teacher['SdtGV']?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Bộ môn</label>
                                <select class="form-control" name="MaBM">
                                    <?php foreach ($departmentData as $d) {?>
                                    <option <?=$teacher['MaBM'] == $d['MaBM'] ? 'selected' : ''?> value="<?=$d['MaBM']?>"><?=$d['MaBM'] . ' - ' . $d['TenBM']?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary">
                                    <i class='fa fa-save'></i> Lưu
                                </button>
                                <a href="<?=URL_ROOT?>/admin/teacher/" class="btn btn-danger">
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