<?php include '../header.php'?>
<?php include '../../model/ExamScheduleDB.php'?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['del-id'])) {
        ExamScheduleDB::DeleteExamSchedule($_GET['del-id']);
        header('Location: ' . URL_ROOT . '/admin/exam-schedule/');
    }

    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['MaLT']) && isset($_GET['active'])) {
        ExamScheduleDB::ActiveExamSchedule($_GET['MaLT'], $_GET['active']);
        header('Location: ' . URL_ROOT . '/admin/exam-schedule/');
    }

    if ($_SESSION['LoaiTaiKhoan'] == 'admin') {
        $examScheduleData = ExamScheduleDB::GetList(isset($_GET['q']) ? $_GET['q'] : '', isset($_GET['start-time']) ? $_GET['start-time'] : '', isset($_GET['end-time']) ? $_GET['end-time'] : '', isset($_GET['is_active']) ? $_GET['is_active'] : '');
    } else if ($_SESSION['LoaiTaiKhoan'] == 'teacher') {
        $examScheduleData = ExamScheduleDB::GetMyTeacher($_SESSION['MaGV'], isset($_GET['start-time']) ? $_GET['start-time'] : '', isset($_GET['end-time']) ? $_GET['end-time'] : '', isset($_GET['is_active']) ? $_GET['is_active'] : '');
    }

?>
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Danh sách lịch thi</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="padding_infor_info">
                        <div class="row">
                            <div class="col-md-6">
                                <form class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">Bộ lọc: </span>
                                    </div>
                                    <input type="date" class="form-control" name="start-time" value=<?=isset($_GET['start-time']) ? $_GET['start-time'] : ''?>>
                                    <input type="date" class="form-control" name="end-time" value=<?=isset($_GET['end-time']) ? $_GET['end-time'] : ''?>>
                                    <button class="btn btn-success">Tìm kiếm</button>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="radio" name="is_active" value="1" <?=isset($_GET['is_active']) && $_GET['is_active'] == '1' ? 'checked' : ''?> onclick="changeActive(1)">
                                        <label class="text-success">Đã xác nhận</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="radio" name="is_active" value="0" <?=isset($_GET['is_active']) && $_GET['is_active'] == '0' ? 'checked' : ''?> onclick="changeActive(0)">
                                        <label class="text-warning">Chờ xác nhận</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="radio" name="is_active" value="2" <?=isset($_GET['is_active']) && $_GET['is_active'] == '2' ? 'checked' : ''?> onclick="changeActive(2)">
                                        <label class="text-danger">Không xác nhận</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <div class="d-flex align-item-center justify-content-between">
                                <?php if ($_SESSION['LoaiTaiKhoan'] != 'admin') {?>
                                <a style="height: max-content;" href="<?=URL_ROOT?>/admin/exam-schedule/add.php" class="btn btn-success">
                                    <i class='fa fa-plus'></i> Thêm mới
                                </a>
                                <?php } else { ?>
                                <div></div>
                                <?php } ?>
                                <form style="width: 300px" class="input-group mb-3">
                                    <input type="text" class="form-control" name="q">
                                    <button class="btn btn-primary">
                                        <i class='fa fa-search'></i>
                                    </button>
                                </form>
                            </div>

                            <table class="table table-bordered">
                                <thead>
                                    <tr class="bg-primary">
                                        <th class="text-white">Tên lịch thi</th>
                                        <th class="text-white">Thời gian thi</th>
                                        <th class="text-white">Phòng thi</th>
                                        <th class="text-white">Hình thức</th>
                                        <th class="text-white">Năm học</th>
                                        <th class="text-white">Học kỳ</th>
                                        <th class="text-white">Môn học</th>
                                        <th class="text-white">Giảng viên</th>
                                        <th class="text-white">Lớp</th>
                                        <th class="text-white">Trạng thái</th>
                                        <th class="text-white" width="100">Tính năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($examScheduleData as $d) {?>
                                    <tr>
                                        <td>
                                            <p><?=$d['TenLT']?></p>
                                            <p>Lần thi: <b><?=$d['LanThi']?></b></p>
                                        </td>
                                        <td>
                                            <p>Tiết <b><?=$d['TietBD']?></b></p>
                                            <p>Thi <b><?=$d['TGThi']?> phút</b></p>
                                            <p>Ngày: <b><?=$d['NgayBD']?></b></p>
                                        </td>
                                        <td><?=$d['PhongThi']?></td>
                                        <td><?=$d['TenHT']?></td>
                                        <td><?=$d['TenNH']?></td>
                                        <td><?=$d['TenHK']?></td>
                                        <td><?=$d['TenMH']?></td>
                                        <td><?=$d['MaGV'] . ' - ' . $d['HoTenGV']?></td>
                                        <td><?=$d['MaLop']?> - <?=$d['TenLop']?></td>
                                        <td>
                                            <?php if ($_SESSION['LoaiTaiKhoan'] == 'admin' && $d['Duyet'] == '0') {?>
                                            <a class="btn btn-success mt-2" href="?MaLT=<?=$d['MaLT']?>&active=1"><i class="fa fa-check"></i>Xác nhận</a>
                                            <a class="btn btn-danger mt-2" href="?MaLT=<?=$d['MaLT']?>&active=2"><i class="fa fa-times"></i>Không xác nhận</a>
                                            <?php }?>
                                            <?php if ($d['Duyet'] == '1') {?>
                                            <span class="badge badge-success">Đã xác nhận</span>
                                            <?php } else if ($d['Duyet'] == '2') {?>
                                            <span class="badge badge-danger">Không xác nhận</span>
                                            <?php }?>
                                            <?php if ($_SESSION['LoaiTaiKhoan'] != 'admin' && $d['Duyet'] == '0') {?>
                                            <span class="badge badge-warning">Chờ xác nhận</span>
                                            <?php }?>
                                        </td>
                                        <td>
                                           
                                            <?php if($d['Duyet'] == '0' || $d['Duyet'] == '2') { ?>
                                            <a class="btn btn-danger mt-2" href="?del-id=<?=$d['MaLT']?>"><i class="fa fa-trash"></i></a>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function changeActive(active) {
    const url = new URL(window.location.href);
    url.search = '';
    window.location.href = url + "?is_active=" + active;
}
</script>
<?php include '../footer.php'?>