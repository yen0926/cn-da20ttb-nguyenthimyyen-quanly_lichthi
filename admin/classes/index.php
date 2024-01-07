<?php include '../header.php'?>
<?php include '../../model/ClassesDB.php'?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['del-id'])) {
        ClassesDB::DeleteClasses($_GET['del-id']);
        header('Location: ' . URL_ROOT . '/admin/classes/');
    }
    $classesData = ClassesDB::GetList(isset($_GET['q']) ? $_GET['q'] : '');
?>
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Danh sách lớp</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <div class="d-flex align-item-center justify-content-between">
                                <a style="height: max-content;" href="<?=URL_ROOT?>/admin/classes/add.php" class="btn btn-success">
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
                                        <th class="text-white">Mã lớp</th>
                                        <th class="text-white">Tên lớp</th>
                                        <th class="text-white">Bộ môn</th>
                                        <th class="text-white" width="100">Tính năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($classesData as $d) {?>
                                    <tr>
                                        <td><?=$d['MaLop']?></td>
                                        <td><?=$d['TenLop']?></td>
                                        <td><?=$d['TenBM']?></td>
                                        <td>
                                            <a class="btn btn-warning" href="<?=URL_ROOT?>/admin/classes/edit.php?id=<?=$d['MaLop']?>"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-danger" href="?del-id=<?=$d['MaLop']?>"><i class="fa fa-trash"></i></a>
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