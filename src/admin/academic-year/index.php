<?php include '../header.php'?>
<?php include '../../model/AcademicYearDB.php'?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['del-id'])) {
        AcademicYearDB::DeleteAcademicYear($_GET['del-id']);
        header('Location: ' . URL_ROOT . '/admin/academic-year/');
    }
    $academicYearData = AcademicYearDB::GetList(isset($_GET['q']) ? $_GET['q'] : '');
?>
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Danh sách năm học</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <div class="d-flex align-item-center justify-content-between">
                                <a style="height: max-content;" href="<?=URL_ROOT?>/admin/academic-year/add.php" class="btn btn-success">
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
                                        <th class="text-white">Mã năm học</th>
                                        <th class="text-white">Tên năm học</th>
                                        <th class="text-white">Thời gian bắt đầu</th>
                                        <th class="text-white">Thời gian kết thúc</th>
                                        <th width="100"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($academicYearData as $d) {?>
                                    <tr>
                                        <td><?=$d['MaNH']?></td>
                                        <td><?=$d['TenNH']?></td>
                                        <td><?=Helper::DateTime($d['TGBD'], 'date')?></td>
                                        <td><?=Helper::DateTime($d['TGKT'], 'date')?></td>
                                        <td>
                                            <a class="btn btn-warning" href="<?=URL_ROOT?>/admin/academic-year/edit.php?id=<?=$d['MaNH']?>"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-danger" href="?del-id=<?=$d['MaNH']?>"><i class="fa fa-trash"></i></a>
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