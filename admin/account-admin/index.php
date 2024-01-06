<?php include '../header.php'?>
<?php include '../../model/AdminAccDB.php'?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['del-id'])) {
        AdminAccDB::DeleteAdmin($_GET['del-id']);
        header('Location: ' . URL_ROOT . '/admin/account-admin/');
    }
    $adminData = AdminAccDB::GetList(isset($_GET['q']) ? $_GET['q'] : '');
?>
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Danh sách quản trị viên</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <div class="d-flex align-item-center justify-content-between">
                                <a style="height: max-content;" href="<?=URL_ROOT?>/admin/account-admin/add.php" class="btn btn-success">
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
                                        <th class="text-white">Mã admin</th>
                                        <th class="text-white">Tên admin</th>
                                        <th class="text-white">Email</th>
                                        <th width="100"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($adminData as $d) {?>
                                    <tr>
                                        <td><?=$d['MaAD']?></td>
                                        <td>
                                            <a href="<?=URL_ROOT . $d['AnhDD']?>" target="_blank">
                                                <img width="50" src="<?=URL_ROOT . $d['AnhDD']?>" alt="<?=$d['MaAD']?>">
                                            </a>
                                            <span class="ml-2"><?=$d['TenAD']?></span>
                                        </td>
                                        <td><?=$d['Email']?></td>
                                        <td>
                                            <a class="btn btn-danger" href="?del-id=<?=$d['MaAD']?>"><i class="fa fa-trash"></i></a>
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