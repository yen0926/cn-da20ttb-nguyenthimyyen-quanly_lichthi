<?php include '../header.php'?>
<?php include '../../model/ExamScheduleDB.php'?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['del-id'])) {
        ExamScheduleDB::DeleteExamSchedule($_GET['del-id']);
        header('Location: ' . URL_ROOT . '/admin/exam-schedule/');
    }

    if ($_SESSION['LoaiTaiKhoan'] == 'admin') {
        $examScheduleData = ExamScheduleDB::GetList(isset($_GET['q']) ? $_GET['q'] : '');
    } else if ($_SESSION['LoaiTaiKhoan'] == 'teacher') {
        $examScheduleData = ExamScheduleDB::GetMyTeacher($_SESSION['MaGV']);
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
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <div class="d-flex align-item-center justify-content-between">
                                <a style="height: max-content;" href="<?=URL_ROOT?>/admin/exam-schedule/add.php" class="btn btn-success">
                                    <i class='fa fa-plus'></i> Thêm mới
                                </a>
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
                                        <th class="text-white">Học thức</th>
                                        <th class="text-white">Năm học</th>
                                        <th class="text-white">Học kỳ</th>
                                        <th class="text-white">Môn học</th>
                                        <th class="text-white">Giảng viên</th>
                                        <th class="text-white">Lớp</th>
                                        <th width="100"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($examScheduleData as $d) {?>
                                    <tr>
                                        <td><?=$d['TenLT']?></td>
                                        <td>
                                            <p>Tiết <b><?=$d['TietBD']?></b></p>
                                            <p>Giờ thi <b><?=$d['TGThi']?></b></p>
                                            <p>Ngày: <b><?=$d['NgayBD']?></b></p>
                                        </td>
                                        <td><?=$d['PhongThi']?></td>
                                        <td><?=$d['TenHT']?></td>
                                        <td><?=$d['TenNH']?></td>
                                        <td><?=$d['TenHK']?></td>
                                        <td><?=$d['TenMH']?></td>
                                        <td><?=$d['MaGV'] . ' - ' . $d['HoTenGV']?></td>
                                        <td><?=$d['TenLop']?></td>
                                        <td>
                                            <a class="btn btn-warning" href="<?=URL_ROOT?>/admin/exam-schedule/edit.php?id=<?=$d['MaLT']?>"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-danger" href="?del-id=<?=$d['MaLT']?>"><i class="fa fa-trash"></i></a>
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
<?php include '../footer.php'?>