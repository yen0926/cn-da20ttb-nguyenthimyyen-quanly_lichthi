<?php include '../header.php'?>
<?php include '../../model/SubjectDB.php'?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['del-id'])) {
        SubjectDB::DeleteSubject($_GET['del-id']);
        header('Location: ' . URL_ROOT . '/admin/subject/');
    }
    $subjectData = SubjectDB::GetList(isset($_GET['q']) ? $_GET['q'] : '');
?>
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Danh sách môn học</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <div class="d-flex align-item-center justify-content-between">
                                <a style="height: max-content;" href="<?=URL_ROOT?>/admin/subject/add.php" class="btn btn-success">
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
                                        <th class="text-white">Mã môn học</th>
                                        <th class="text-white">Tên môn học</th>
                                        <th class="text-white" width="100">Tính năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($subjectData as $d) {?>
                                    <tr>
                                        <td><?=$d['MaMH']?></td>
                                        <td><?=$d['TenMH']?></td>
                                        <td>
                                            <a class="btn btn-warning" href="<?=URL_ROOT?>/admin/subject/edit.php?id=<?=$d['MaMH']?>"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-danger" href="?del-id=<?=$d['MaMH']?>"><i class="fa fa-trash"></i></a>
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