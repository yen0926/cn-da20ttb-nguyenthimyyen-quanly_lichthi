<?php include '../header.php'?>
<?php include '../../model/DepartmentDB.php'?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['del-id'])) {
        DepartmentDB::DeleteDepartment($_GET['del-id']);
        header('Location: ' . URL_ROOT . '/admin/department/');
    }
    $departmentData = DepartmentDB::GetList(isset($_GET['q']) ? $_GET['q'] : '');
?>
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Tổng quan</h2>
                </div>
            </div>
        </div>

        <div class="row column1">
            <div class="col-md-6 col-lg-3">
                <div class="full counter_section margin_bottom_30">
                    <div class="couter_icon">
                        <div>
                            <i class="fa fa-user yellow_color"></i>
                        </div>
                    </div>
                    <div class="counter_no">
                        <div>
                            <p class="total_no">2500</p>
                            <p class="head_couter">Welcome</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="full counter_section margin_bottom_30">
                    <div class="couter_icon">
                        <div>
                            <i class="fa fa-clock-o blue1_color"></i>
                        </div>
                    </div>
                    <div class="counter_no">
                        <div>
                            <p class="total_no">123.50</p>
                            <p class="head_couter">Average Time</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="full counter_section margin_bottom_30">
                    <div class="couter_icon">
                        <div>
                            <i class="fa fa-cloud-download green_color"></i>
                        </div>
                    </div>
                    <div class="counter_no">
                        <div>
                            <p class="total_no">1,805</p>
                            <p class="head_couter">Collections</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="full counter_section margin_bottom_30">
                    <div class="couter_icon">
                        <div>
                            <i class="fa fa-comments-o red_color"></i>
                        </div>
                    </div>
                    <div class="counter_no">
                        <div>
                            <p class="total_no">54</p>
                            <p class="head_couter">Comments</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../footer.php'?>