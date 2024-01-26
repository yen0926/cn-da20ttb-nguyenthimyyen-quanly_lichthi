<?php include '../header.php'?>
<?php include '../../model/DepartmentDB.php'?>
<?php include '../../model/ClassesDB.php'?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        ClassesDB::UpdateClasses($_POST['MaLop'], $_POST['TenLop'], $_POST['MaBM']);
        header('Location: ' . URL_ROOT . '/admin/classes/');
    }
    $classes = ClassesDB::GetDataByID($_GET['id']);
    $departmentData = DepartmentDB::GetList();
?>
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Chỉnh sửa lớp</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="table_section padding_infor_info">
                        <form class="row" method="POST">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Mã lớp</label>
                                <input type="text" class="form-control" name="MaLop" value="<?=$classes['MaLop']?>" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Tên lớp</label>
                                <input type="text" class="form-control" name="TenLop" value="<?=$classes['TenLop']?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Bộ môn</label>
                                <select class="form-control" name="MaBM">
                                    <?php foreach ($departmentData as $d) {?>
                                    <option <?=$classes['MaBM'] == $d['MaBM'] ? 'selected' : ''?> value="<?=$d['MaBM']?>"><?=$d['MaBM'] . ' - ' . $d['TenBM']?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary">
                                    <i class='fa fa-save'></i> Lưu
                                </button>
                                <a href="<?=URL_ROOT?>/admin/classes/" class="btn btn-danger">
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