<?php include '../header.php'?>
<?php include '../../model/ExamFormDB.php'?>
<?php include '../../model/AcademicYearDB.php'?>
<?php include '../../model/SemesterDB.php'?>
<?php include '../../model/SubjectDB.php'?>
<?php include '../../model/TeacherDB.php'?>
<?php include '../../model/ClassesDB.php'?>
<?php include '../../model/ExamScheduleDB.php'?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        ExamScheduleDB::UpdateExamSchedule($_POST['MaLT'], $_POST['TenLT'], $_POST['NgayBD'], $_POST['TGThi'], $_POST['TietDB'], $_POST['PhongThi'], $_POST['MaHT'], $_POST['MaNH'], $_POST['MaHK'], $_POST['MaMH'], $_POST['MaGV'], $_SESSION['LoaiTaiKhoan'] == 'teacher' ? $_SESSION['MaGV'] : $_POST['MaGV'], $_POST['LanThi']);
        header('Location: ' . URL_ROOT . '/admin/exam-schedule/');
    }

    $examFormData = ExamFormDB::GetList();
    $academicData = AcademicYearDB::GetList();
    $semesterData = SemesterDB::GetList();
    $subjectData = SubjectDB::GetList();
    $teacherData = TeacherDB::GetList();
    $classesData = ClassesDB::GetList();
    $examSchedule = ExamScheduleDB::GetDataByID($_GET['id']);
?>
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Chỉnh sửa lịch thi</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="table_section padding_infor_info">
                        <form class="row" method="POST">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Mã lịch thi</label>
                                <input type="text" class="form-control" name="MaLT" value="<?=$examSchedule['MaLT']?>" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Tên lịch thi</label>
                                <input type="text" class="form-control" name="TenLT" value="<?=$examSchedule['TenLT']?>">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Ngày thi</label>
                                <input type="date" class="form-control" name="NgayBD" value="<?=$examSchedule['NgayBD']?>">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Thời gian thi</label>
                                <?php $timeList = [45, 60, 90, 120]?>
                                <select name="TGThi" class="form-control">
                                    <?php foreach ($timeList as $t) {?>
                                    <option <?=$examSchedule['TGThi'] == $t ? 'selected' : ''?> value="<?=$t?>"><?=$t?> phút</option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Tiết bắt đầu</label>
                                <select class="form-control" name="TietDB">
                                    <?php for ($i = 1; $i < 14; $i++) {?>
                                    <option <?=$examSchedule['TietBD'] == $i ? 'selected' : ''?> value="<?=$i?>">Tiết <?=$i?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Phòng thi</label>
                                <input type="text" class="form-control" name="PhongThi" value="<?=$examSchedule['PhongThi']?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Hình thức thi</label>
                                <select class="form-control" name="MaHT">
                                    <?php foreach ($examFormData as $d) {?>
                                    <option <?=$examSchedule['MaHT'] == $d['MaHT'] ? 'selected' : ''?> value="<?=$d['MaHT']?>"><?=$d['TenHT']?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Lần thi</label>
                                <select class="form-control" name="LanThi">\
                                    <option <?=$examSchedule['LanThi'] == '1' ? 'selected' : ''?> value="1">Lần 1</option>
                                    <option <?=$examSchedule['LanThi'] == '2' ? 'selected' : ''?> value="2">Lần 2</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Năm học</label>
                                <select class="form-control" name="MaNH">
                                    <?php foreach ($academicData as $d) {?>
                                    <option <?=$examSchedule['MaNH'] == $d['MaNH'] ? 'selected' : ''?> value="<?=$d['MaNH']?>"><?=$d['TenNH']?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Học kỳ</label>
                                <select class="form-control" name="MaHK">
                                    <?php foreach ($semesterData as $d) {?>
                                    <option <?=$examSchedule['MaHK'] == $d['MaHK'] ? 'selected' : ''?> value="<?=$d['MaHK']?>"><?=$d['TenHK']?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Môn học</label>
                                <select class="form-control" name="MaMH">
                                    <?php foreach ($subjectData as $d) {?>
                                    <option <?=$examSchedule['MaMH'] == $d['MaMH'] ? 'selected' : ''?> value="<?=$d['MaMH']?>"><?=$d['TenMH']?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <?php if ($_SESSION['LoaiTaiKhoan'] == 'admin') {?>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Giảng viên</label>
                                <select class="form-control" name="MaGV">
                                    <?php foreach ($teacherData as $d) {?>
                                    <option <?=$examSchedule['MaGV'] == $d['MaGV'] ? 'selected' : ''?> value="<?=$d['MaGV']?>"><?=$d['MaGV'] . ' - ' . $d['HoTenGV']?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <?php }?>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Lớp</label>
                                <select class="form-control" name="MaLop">
                                    <?php foreach ($classesData as $d) {?>
                                    <option <?=$examSchedule['MaLop'] == $d['MaLop'] ? 'selected' : ''?> value="<?=$d['MaLop']?>"><?=$d['TenLop']?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary">
                                    <i class='fa fa-save'></i> Lưu
                                </button>
                                <a href="<?=URL_ROOT?>/admin/exam-schedule/" class="btn btn-danger">
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